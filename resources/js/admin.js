(() => {
    const TOKEN_KEY = "bct_admin_token";
    const REFRESH_KEY = "bct_admin_using_refresh";

    const token = () => localStorage.getItem(TOKEN_KEY);
    const setToken = (t) => {
        localStorage.setItem(TOKEN_KEY, t);
        localStorage.removeItem(REFRESH_KEY);
    };
    const clearTokens = () => {
        localStorage.removeItem(TOKEN_KEY);
        localStorage.removeItem(REFRESH_KEY);
    };

    const api = async (path, options = {}, _retry = true) => {
        const headers = options.headers || {};
        headers["Accept"] = "application/json";
        headers["Content-Type"] = "application/json";
        if (token()) headers["Authorization"] = "Bearer " + token();

        const res = await fetch("/api/admin" + path, { ...options, headers });
        const data = await res.json().catch(() => ({}));

        if (res.status === 401 && _retry && !sessionStorage.getItem(REFRESH_KEY)) {
            sessionStorage.setItem(REFRESH_KEY, "1");
            try {
                const refreshed = await api("/refresh", { method: "POST" }, false);
                if (refreshed && refreshed.token) {
                    setToken(refreshed.token);
                    sessionStorage.removeItem(REFRESH_KEY);
                    return api(path, options, false);
                }
            } catch (e) {
                /* fall through to logout */
            }
            sessionStorage.removeItem(REFRESH_KEY);
            clearTokens();
            window.location.href = "/admin/login";
            return null;
        }

        sessionStorage.removeItem(REFRESH_KEY);
        return { status: res.status, ok: res.ok, ...data };
    };

    const showToast = (message, type = "success") => {
        const container = document.getElementById("toastContainer");
        if (!container) return;
        const colors =
            type === "error"
                ? "border-red-200 bg-red-50 text-red-700"
                : "border-emerald-200 bg-emerald-50 text-emerald-700";
        const icon = type === "error" ? "fa-circle-exclamation" : "fa-circle-check";
        const el = document.createElement("div");
        el.className =
            "flex items-center gap-2 rounded-lg border px-4 py-3 text-sm font-medium shadow-lg animate-[nav-slide-in_0.3s_ease-out] " +
            colors;
        el.innerHTML = `<i class="fa-solid ${icon}"></i><span>${message}</span>`;
        container.appendChild(el);
        setTimeout(() => {
            el.style.opacity = "0";
            el.style.transition = "opacity 0.3s";
            setTimeout(() => el.remove(), 300);
        }, 3200);
    };

    const escapeHtml = (str) => {
        if (str === null || str === undefined) return "";
        return String(str)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    };

    const formatDate = (value) => {
        if (!value) return "—";
        const d = new Date(value);
        if (isNaN(d.getTime())) return value;
        return d.toLocaleString(undefined, {
            year: "numeric",
            month: "short",
            day: "numeric",
            hour: "2-digit",
            minute: "2-digit",
        });
    };

    // ── Login page ────────────────────────────────────────────────
    const loginForm = document.getElementById("loginForm");
    if (loginForm) {
        if (token()) window.location.href = "/admin";
        const errorBox = document.getElementById("loginError");
        const btn = document.getElementById("loginBtn");
        const btnText = document.getElementById("btnText");
        const btnSpinner = document.getElementById("btnSpinner");

        const togglePassword = document.getElementById("togglePassword");
        if (togglePassword) {
            togglePassword.addEventListener("click", () => {
                const input = document.getElementById("password");
                const showing = input.type === "text";
                input.type = showing ? "password" : "text";
                const passwordVisible = input.type === "text";
                document.getElementById("eyeIcon").classList.toggle("hidden", passwordVisible);
                document.getElementById("eyeSlashIcon").classList.toggle("hidden", !passwordVisible);
                input.focus();
            });
        }

        loginForm.addEventListener("submit", async (e) => {
            e.preventDefault();
            errorBox.classList.add("hidden");
            btn.disabled = true;
            btnText.textContent = "Signing in...";
            btnSpinner.classList.remove("hidden");

            try {
                const payload = {
                    email: document.getElementById("email").value.trim(),
                    password: document.getElementById("password").value,
                };
                const res = await fetch("/api/admin/login", {
                    method: "POST",
                    headers: { Accept: "application/json", "Content-Type": "application/json" },
                    body: JSON.stringify(payload),
                });
                const data = await res.json().catch(() => ({}));

                if (!res.ok || !data.success) {
                    const msg = data.errors
                        ? Object.values(data.errors).flat().join(" ")
                        : data.message || "Login failed. Please try again.";
                    errorBox.textContent = msg;
                    errorBox.classList.remove("hidden");
                    return;
                }

                setToken(data.token);
                window.location.href = "/admin";
            } catch (err) {
                errorBox.textContent = "Network error. Please try again.";
                errorBox.classList.remove("hidden");
            } finally {
                btn.disabled = false;
                btnText.textContent = "Sign In";
                btnSpinner.classList.add("hidden");
            }
        });
    }

    // ── Auth guard for admin pages ───────────────────────────────
    const dashboardWrap = document.getElementById("contact-section");
    if (dashboardWrap) {
        if (!token()) {
            window.location.href = "/admin/login";
            return;
        }

        // ── Sidebar (mobile) ──
        const sidebar = document.getElementById("adminSidebar");
        const overlay = document.getElementById("sidebarOverlay");
        const toggleBtn = document.getElementById("sidebarToggle");
        const closeSidebar = () => {
            if (sidebar && window.innerWidth < 1024) sidebar.classList.add("-translate-x-full");
            if (overlay) overlay.classList.add("hidden");
        };
        if (toggleBtn) {
            toggleBtn.addEventListener("click", () => {
                sidebar.classList.toggle("-translate-x-full");
                overlay.classList.toggle("hidden");
            });
        }
        if (overlay) overlay.addEventListener("click", closeSidebar);
        document.querySelectorAll("[data-smooth]").forEach((a) => {
            a.addEventListener("click", () => closeSidebar());
        });

        // ── Shared UI refs ──
        const loadingState = document.getElementById("loadingState");
        const emptyState = document.getElementById("emptyState");
        const errorState = document.getElementById("errorState");
        const tableWrap = document.getElementById("tableWrap");
        const messagesBody = document.getElementById("messagesBody");
        const statTotal = document.getElementById("statTotal");
        const statUnread = document.getElementById("statUnread");
        const statRead = document.getElementById("statRead");
        const pageInfo = document.getElementById("pageInfo");
        const pageNumbers = document.getElementById("pageNumbers");
        const prevPage = document.getElementById("prevPage");
        const nextPage = document.getElementById("nextPage");
        const refreshBtn = document.getElementById("refreshBtn");
        const retryBtn = document.getElementById("retryBtn");
        const filterStatus = document.getElementById("filterStatus");

        let state = { page: 1, data: [] };

        const show = (el) => el.classList.remove("hidden");
        const hide = (el) => el.classList.add("hidden");

        function setLoadingViews(loading) {
            if (loading) {
                show(loadingState);
                hide(emptyState);
                hide(errorState);
                hide(tableWrap);
                return;
            }
            hide(loadingState);
        }

        function renderTable() {
            show(tableWrap);
            hide(emptyState);
            hide(errorState);

            if (!state.data.length) {
                hide(tableWrap);
                show(emptyState);
                return;
            }

            messagesBody.innerHTML = state.data
                .map((m) => {
                    const unread = m.is_read ? "" : "bg-[#157cc1]/5";
                    return `
                <tr class="${unread} hover:bg-slate-50">
                    <td class="px-5 py-3">
                        ${
                            m.is_read
                                ? '<span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-semibold text-emerald-700"><span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>Read</span>'
                                : '<span class="inline-flex items-center gap-1.5 rounded-full bg-red-50 px-2.5 py-1 text-[11px] font-semibold text-red-600"><span class="h-1.5 w-1.5 animate-pulse rounded-full bg-red-500"></span>Unread</span>'
                        }
                    </td>
                    <td class="px-5 py-3 font-medium text-slate-900">${escapeHtml(m.name)}</td>
                    <td class="px-5 py-3 text-slate-600">${escapeHtml(m.email)}</td>
                    <td class="max-w-55 truncate px-5 py-3 text-slate-600">${escapeHtml(m.subject)}</td>
                    <td class="whitespace-nowrap px-5 py-3 text-xs text-slate-500">${formatDate(m.created_at)}</td>
                    <td class="px-5 py-3">
                        <div class="flex items-center justify-end gap-1.5">
                            <button type="button" data-action="view" data-id="${m.id}"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 hover:bg-brand-blue/10 hover:text-brand-blue"
                                title="View">
                                <i class="fa-solid fa-eye text-xs"></i>
                            </button>
                            <button type="button" data-action="toggle" data-id="${m.id}"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 hover:bg-amber-50 hover:text-amber-600"
                                title="${m.is_read ? "Mark unread" : "Mark read"}">
                                <i class="fa-solid ${m.is_read ? "fa-envelope-open" : "fa-envelope"} text-xs"></i>
                            </button>
                            <button type="button" data-action="delete" data-id="${m.id}"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 hover:bg-red-50 hover:text-red-600"
                                title="Delete">
                                <i class="fa-solid fa-trash-can text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>`;
                })
                .join("");
        }

        function renderPagination(pagination) {
            const { total, per_page, current_page, last_page } = pagination;
            pageInfo.textContent = `Showing ${total === 0 ? 0 : (current_page - 1) * per_page + 1}–${Math.min(current_page * per_page, total)} of ${total} queries`;

            prevPage.disabled = current_page <= 1;
            nextPage.disabled = current_page >= last_page;

            let html = "";
            for (let i = 1; i <= last_page; i++) {
                if (last_page > 7 && i > 2 && i < last_page - 1 && Math.abs(i - current_page) > 1) {
                    if (!html.endsWith("…")) html += '<span class="text-xs text-slate-400">…</span>';
                    continue;
                }
                html += `<button type="button" data-page="${i}"
                    class="h-8 min-w-8 rounded-lg px-2 text-xs font-semibold ${
                        i === current_page
                            ? "bg-brand-blue text-white"
                            : "text-slate-600 hover:bg-slate-100"
                    }">${i}</button>`;
            }
            pageNumbers.innerHTML = html;
        }

        async function loadMessages() {
            setLoadingViews(true);
            const filter = filterStatus.value;
            const query = new URLSearchParams({ page: state.page });
            if (filter !== "all") query.set("filter", filter);

            try {
                const [statsRes, listRes] = await Promise.all([
                    api("/dashboard"),
                    api("/messages?" + query.toString()),
                ]);

                if (!statsRes.ok || !listRes.ok) throw new Error("Request failed");

                statTotal.textContent = statsRes.stats.total;
                statUnread.textContent = statsRes.stats.unread;
                statRead.textContent = statsRes.stats.total - statsRes.stats.unread;

                state.data = listRes.data || [];
                renderTable();
                renderPagination(listRes.pagination);
                setLoadingViews(false);
            } catch (e) {
                setLoadingViews(false);
                show(errorState);
                document.getElementById("errorMsg").textContent =
                    "Could not load contact queries. Please try again.";
            }
        }

        // Static stats (fallback when backend simply returns 200 with empty stats)
        if (statTotal && statUnread && statRead) {
            statTotal.textContent = "…";
            statUnread.textContent = "…";
            statRead.textContent = "…";
        }

        refreshBtn.addEventListener("click", () => loadMessages());
        retryBtn.addEventListener("click", () => loadMessages());

        filterStatus.addEventListener("change", () => {
            state.page = 1;
            loadMessages();
        });

        prevPage.addEventListener("click", () => {
            if (state.page > 1) {
                state.page--;
                loadMessages();
            }
        });

        nextPage.addEventListener("click", () => {
            state.page++;
            loadMessages();
        });

        pageNumbers.addEventListener("click", (e) => {
            const btn = e.target.closest("[data-page]");
            if (!btn) return;
            state.page = Number(btn.dataset.page);
            loadMessages();
        });

        // ── Message actions ──
        messagesBody.addEventListener("click", async (e) => {
            const btn = e.target.closest("[data-action]");
            if (!btn) return;
            const id = btn.dataset.id;
            const action = btn.dataset.action;

            if (action === "view") return openModal(id);
            if (action === "toggle") {
                const msg = state.data.find((m) => String(m.id) === id);
                const target = msg && msg.is_read ? "unread" : "read";
                const res = await api(`/messages/${id}/${target}`, { method: "PATCH" });
                if (res && res.ok) {
                    showToast(res.message || "Message updated.");
                    await loadMessages();
                }
            }
            if (action === "delete") {
                if (!confirm("Delete this contact query permanently?")) return;
                const res = await api(`/messages/${id}`, { method: "DELETE" });
                if (res && res.ok) {
                    showToast(res.message || "Contact query deleted.");
                    await loadMessages();
                }
            }
        });

        // ── Modal ──
        const modal = document.getElementById("messageModal");
        const openModal = async (id) => {
            const res = await api(`/messages/${id}`);
            if (!res || !res.ok) return;
            const m = res.data;
            document.getElementById("modalName").textContent = m.name || "—";
            document.getElementById("modalPhone").textContent = m.phone || "—";
            document.getElementById("modalEmail").textContent = m.email || "—";
            document.getElementById("modalEmail").href = "mailto:" + (m.email || "");
            document.getElementById("modalSubject").textContent = m.subject || "—";
            document.getElementById("modalMessage").textContent = m.message || "—";
            document.getElementById("modalReceived").textContent = formatDate(m.created_at);
            const toggleBtn = document.getElementById("modalToggleRead");
            toggleBtn.textContent = m.is_read ? "Mark as unread" : "Mark as read";
            toggleBtn.dataset.id = m.id;
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            document.body.style.overflow = "hidden";

            toggleBtn.onclick = async () => {
                const target = m.is_read ? "unread" : "read";
                const res = await api(`/messages/${m.id}/${target}`, { method: "PATCH" });
                if (res && res.ok) {
                    await loadMessages();
                    openModal(m.id);
                    showToast(res.message || "Message updated.");
                }
            };
        };

        const closeModal = () => {
            modal.classList.add("hidden");
            modal.classList.remove("flex");
            document.body.style.overflow = "";
        };
        modal.addEventListener("click", (e) => {
            if (e.target.closest("[data-close-modal]")) closeModal();
        });
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") closeModal();
        });

        // ── Admin name ──
        const adminName = document.getElementById("adminName");
        api("/me").then((res) => {
            if (res && res.ok && res.admin) adminName.textContent = res.admin.name;
        });

        loadMessages();
    }

    // ── Logout (called from layout) ──
    window.AdminLogout = async () => {
        if (token()) {
            await api("/logout", { method: "POST" }).catch(() => {});
        }
        clearTokens();
        window.location.href = "/admin/login";
    };

    window.AdminToken = token;
})();