@extends('admin.layouts.admin')

@section('title', 'Categories | Admin Panel')
@section('pageTitle', 'Categories')
@section('pageSubtitle', 'Manage portfolio categories under the Portfolio menu')

@section('content')
    <div data-admin-page class="space-y-6">
        {{-- Stats cards --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Categories</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-purple-50 text-purple-600">
                        <i class="fa-solid fa-tags"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Shown on This Page</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-list-ol"></i>
                    </span>
                </div>
                <p id="statShown" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
        </div>

        {{-- Categories list --}}
        <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <div class="flex flex-col gap-3 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-sm font-bold text-slate-900">Your Categories</h2>
                <div class="flex items-center gap-2">
                    <button id="refreshBtn" type="button"
                        class="flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        <i class="fa-solid fa-rotate"></i> Refresh
                    </button>
                    <button id="addCategoryBtn" type="button"
                        class="flex items-center gap-2 rounded-lg bg-brand-blue px-3 py-1.5 text-xs font-semibold text-white hover:bg-brand-hover">
                        <i class="fa-solid fa-plus"></i> Add Category
                    </button>
                </div>
            </div>

            {{-- Loading state --}}
            <div id="loadingState" class="flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-circle-notch animate-spin text-3xl text-brand-blue"></i>
                <p class="mt-3 text-sm text-slate-500">Loading categories...</p>
            </div>

            {{-- Empty state --}}
            <div id="emptyState" class="flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-tags text-4xl text-slate-300"></i>
                <p class="mt-3 text-sm font-medium text-slate-500">No categories added yet</p>
                <button id="emptyAddBtn" type="button"
                    class="mt-4 rounded-lg bg-brand-blue px-4 py-2 text-xs font-semibold text-white hover:bg-brand-hover">
                    <i class="fa-solid fa-plus mr-1"></i> Add Your First Category
                </button>
            </div>

            {{-- Error state --}}
            <div id="errorState" class="hidden flex-col items-center justify-center py-16">
                <i class="fa-solid fa-triangle-exclamation text-4xl text-red-300"></i>
                <p id="errorMsg" class="mt-3 text-sm text-red-600"></p>
                <button id="retryBtn" type="button"
                    class="mt-4 rounded-lg bg-brand-blue px-4 py-2 text-xs font-semibold text-white hover:bg-brand-hover">
                    Try Again
                </button>
            </div>

            {{-- Categories table --}}
            <div id="tableWrap" class="hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr class="border-b border-slate-200 bg-slate-50 text-xs uppercase tracking-wider text-slate-500">
                                <th class="px-5 py-3 font-semibold">Category</th>
                                <th class="px-5 py-3 font-semibold">Projects</th>
                                <th class="px-5 py-3 font-semibold">Created</th>
                                <th class="px-5 py-3 text-right font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="categoriesBody" class="divide-y divide-slate-100"></tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="flex flex-col items-center justify-between gap-3 border-t border-slate-200 px-5 py-4 sm:flex-row"
                    id="paginationWrap">
                    <div class="flex items-center gap-2">
                        <label for="pageSize" class="text-xs font-medium text-slate-500">Show</label>
                        <select id="pageSize"
                            class="rounded-lg border border-slate-300 bg-white px-3 py-1.5 text-xs font-semibold text-slate-600 focus:outline-none focus:ring-2 focus:ring-brand-blue/40">
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <p id="pageInfo" class="text-center text-xs text-slate-500"></p>
                    <div class="flex items-center gap-2">
                        <button id="prevPage" type="button"
                            class="rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50 disabled:cursor-not-allowed disabled:opacity-40">
                            <i class="fa-solid fa-chevron-left"></i> Prev
                        </button>
                        <span id="pageNumbers" class="flex items-center gap-1"></span>
                        <button id="nextPage" type="button"
                            class="rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50 disabled:cursor-not-allowed disabled:opacity-40">
                            Next <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Add / Edit modal --}}
    <div id="categoryModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60" data-close-modal></div>
        <div class="relative z-10 w-full max-w-md overflow-hidden rounded-xl bg-white shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                <div>
                    <h3 id="modalTitle" class="text-sm font-bold text-slate-900">Add Category</h3>
                    <p class="mt-0.5 text-xs text-slate-500">Categories group your portfolio projects</p>
                </div>
                <button type="button" data-close-modal
                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form id="categoryForm" class="px-5 py-4">
                <input type="hidden" id="formId">
                <div>
                    <label for="formName" class="mb-1 block text-xs font-semibold text-slate-700">Category Name <span class="text-red-500">*</span></label>
                    <input type="text" id="formName"
                        class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-brand-blue focus:outline-none focus:ring-1 focus:ring-brand-blue"
                        placeholder="e.g. IT & Engineering">
                    <p id="errorName" class="mt-1 hidden text-xs text-red-500"></p>
                </div>
                <div class="mt-5 flex items-center justify-end gap-2 border-t border-slate-200 pt-4">
                    <button type="button" data-close-modal
                        class="rounded-lg border border-slate-300 px-4 py-2 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        Cancel
                    </button>
                    <button type="submit" id="formSubmitBtn"
                        class="flex items-center gap-2 rounded-lg bg-brand-blue px-4 py-2 text-xs font-semibold text-white hover:bg-brand-hover disabled:cursor-not-allowed disabled:opacity-70 disabled:hover:bg-brand-blue">
                        <i id="formSpinner" hidden class="fa-solid fa-circle-notch"></i>
                        <span id="formBtnText">Save Category</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
    (() => {
        const TOKEN_KEY = "bct_admin_token";
        const token = () => localStorage.getItem(TOKEN_KEY);

        const api = window.BctAdminApi || ((path, options = {}) => {
            const headers = options.headers || {};
            headers["Accept"] = "application/json";
            if (token()) headers["Authorization"] = "Bearer " + token();
            return fetch("/api/admin" + path, { ...options, headers })
                .then(async (res) => {
                    const data = await res.json().catch(() => ({}));
                    if (res.status === 401) {
                        window.location.href = "/admin/login";
                        return null;
                    }
                    return { status: res.status, ok: res.ok, ...data };
                });
        });

        const showToast = (message, type = "success") => {
            const container = document.getElementById("toastContainer");
            if (!container) return;
            const colors = type === "error"
                ? "border-red-200 bg-red-50 text-red-700"
                : "border-emerald-200 bg-emerald-50 text-emerald-700";
            const icon = type === "error" ? "fa-circle-exclamation" : "fa-circle-check";
            const el = document.createElement("div");
            el.className = "flex items-center gap-2 rounded-lg border px-4 py-3 text-sm font-medium shadow-lg animate-[nav-slide-in_0.3s_ease-out] " + colors;
            el.innerHTML = `<i class="fa-solid ${icon}"></i><span>${message}</span>`;
            container.appendChild(el);
            setTimeout(() => { el.style.opacity = "0"; el.style.transition = "opacity 0.3s"; setTimeout(() => el.remove(), 300); }, 3200);
        };

        const escapeHtml = (str) => {
            if (!str) return "";
            return String(str).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
        };

        const formatDate = (value) => {
            if (!value) return "—";
            const d = new Date(value);
            if (isNaN(d.getTime())) return value;
            return d.toLocaleString(undefined, { year: "numeric", month: "short", day: "numeric" });
        };

        const loadingState = document.getElementById("loadingState");
        const emptyState = document.getElementById("emptyState");
        const errorState = document.getElementById("errorState");
        const tableWrap = document.getElementById("tableWrap");
        const categoriesBody = document.getElementById("categoriesBody");
        const pageInfo = document.getElementById("pageInfo");
        const pageNumbers = document.getElementById("pageNumbers");
        const prevPage = document.getElementById("prevPage");
        const nextPage = document.getElementById("nextPage");
        const pageSize = document.getElementById("pageSize");
        const refreshBtn = document.getElementById("refreshBtn");
        const retryBtn = document.getElementById("retryBtn");
        const addCategoryBtn = document.getElementById("addCategoryBtn");
        const emptyAddBtn = document.getElementById("emptyAddBtn");
        const statTotal = document.getElementById("statTotal");
        const statShown = document.getElementById("statShown");

        let state = { page: 1, size: 10, data: [] };

        const show = (el) => el.classList.remove("hidden");
        const hide = (el) => el.classList.add("hidden");

        function setLoading(loading) {
            if (loading) { show(loadingState); hide(emptyState); hide(errorState); hide(tableWrap); return; }
            hide(loadingState);
        }

        function renderTable() {
            show(tableWrap);
            hide(emptyState);
            hide(errorState);
            if (!state.data.length) { hide(tableWrap); show(emptyState); return; }

            categoriesBody.innerHTML = state.data.map(c => `
                <tr class="hover:bg-slate-50">
                    <td class="px-5 py-3 font-medium text-slate-900">
                        <span class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-tag text-xs text-[#157cc1]"></i>
                            ${escapeHtml(c.name)}
                        </span>
                    </td>
                    <td class="px-5 py-3">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700">
                            ${c.projects_count ?? 0} project${(c.projects_count ?? 0) === 1 ? "" : "s"}
                        </span>
                    </td>
                    <td class="whitespace-nowrap px-5 py-3 text-xs text-slate-500">${formatDate(c.created_at)}</td>
                    <td class="px-5 py-3">
                        <div class="flex items-center justify-end gap-1.5">
                            <button type="button" data-action="edit" data-id="${c.id}"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 hover:bg-brand-blue/10 hover:text-brand-blue"
                                title="Edit">
                                <i class="fa-solid fa-pen-to-square text-xs"></i>
                            </button>
                            <button type="button" data-action="delete" data-id="${c.id}"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 hover:bg-red-50 hover:text-red-600"
                                title="Delete">
                                <i class="fa-solid fa-trash-can text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `).join("");
        }

        function renderPagination(pagination) {
            const { total, per_page, current_page, last_page } = pagination;
            pageInfo.textContent = total === 0 ? "No categories" : `Showing ${(current_page - 1) * per_page + 1}–${Math.min(current_page * per_page, total)} of ${total} categories`;
            prevPage.disabled = current_page <= 1;
            nextPage.disabled = current_page >= last_page;
            let html = "";
            for (let i = 1; i <= last_page; i++) {
                if (last_page > 7 && i > 2 && i < last_page - 1 && Math.abs(i - current_page) > 1) {
                    if (!html.endsWith("…")) html += '<span class="text-xs text-slate-400">…</span>';
                    continue;
                }
                html += `<button type="button" data-page="${i}"
                    class="h-8 min-w-8 rounded-lg px-2 text-xs font-semibold ${i === current_page ? "bg-brand-blue text-white" : "text-slate-600 hover:bg-slate-100"}">${i}</button>`;
            }
            pageNumbers.innerHTML = html;
        }

        async function loadCategories() {
            setLoading(true);
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 15000);
            try {
                const listRes = await api(`/categories?page=${state.page}&per_page=${state.size}`, { signal: controller.signal });

                if (listRes && listRes.ok) {
                    state.data = listRes.data || [];
                    statTotal.textContent = listRes.pagination.total;
                    statShown.textContent = listRes.data.length;
                    renderTable();
                    renderPagination(listRes.pagination);
                    setLoading(false);
                } else {
                    throw new Error("Failed");
                }
            } catch (e) {
                setLoading(false);
                show(errorState);
                document.getElementById("errorMsg").textContent = "Could not load categories. Please try again.";
            } finally {
                clearTimeout(timeoutId);
            }
        }

        refreshBtn.addEventListener("click", loadCategories);
        retryBtn.addEventListener("click", loadCategories);
        pageSize.addEventListener("change", () => { state.size = Number(pageSize.value); state.page = 1; loadCategories(); });
        prevPage.addEventListener("click", () => { if (state.page > 1) { state.page--; loadCategories(); } });
        nextPage.addEventListener("click", () => { state.page++; loadCategories(); });
        pageNumbers.addEventListener("click", (e) => {
            const btn = e.target.closest("[data-page]");
            if (!btn) return;
            state.page = Number(btn.dataset.page);
            loadCategories();
        });

        // ── Modal / Form ─────────────────────────────────────────
        const modal = document.getElementById("categoryModal");
        const form = document.getElementById("categoryForm");
        const formId = document.getElementById("formId");
        const formName = document.getElementById("formName");
        const formSubmitBtn = document.getElementById("formSubmitBtn");
        const formBtnText = document.getElementById("formBtnText");
        const formSpinner = document.getElementById("formSpinner");

        const setFormSpinner = (on) => {
            formSpinner.classList.toggle("animate-spin", on);
            if (on) formSpinner.removeAttribute("hidden");
            else formSpinner.setAttribute("hidden", "");
        };

        const openModal = (editMode = false, category = null) => {
            form.reset();
            document.getElementById("errorName").textContent = "";
            hide(document.getElementById("errorName"));
            formName.classList.remove("border-red-400", "focus:border-red-400", "focus:ring-red-400");
            formName.classList.add("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
            formSubmitBtn.disabled = false;
            setFormSpinner(false);
            formId.value = "";
            document.getElementById("modalTitle").textContent = editMode ? "Edit Category" : "Add Category";
            formBtnText.textContent = editMode ? "Update Category" : "Save Category";
            if (editMode && category) {
                formId.value = category.id;
                formName.value = category.name || "";
            }
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            document.body.style.overflow = "hidden";
        };

        const closeModalFn = () => {
            modal.classList.add("hidden");
            modal.classList.remove("flex");
            document.body.style.overflow = "";
        };

        addCategoryBtn.addEventListener("click", () => openModal(false));
        emptyAddBtn.addEventListener("click", () => openModal(false));

        modal.addEventListener("click", (e) => { if (e.target.closest("[data-close-modal]")) closeModalFn(); });
        document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeModalFn(); });

        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            const errorEl = document.getElementById("errorName");
            errorEl.textContent = "";
            hide(errorEl);
            formName.classList.remove("border-red-400", "focus:border-red-400", "focus:ring-red-400");
            formName.classList.add("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");

            const name = formName.value.trim();
            if (!name) {
                errorEl.textContent = "Category name is required.";
                show(errorEl);
                formName.classList.add("border-red-400", "focus:border-red-400", "focus:ring-red-400");
                formName.classList.remove("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
                return;
            }

            formSubmitBtn.disabled = true;
            formBtnText.textContent = "Saving...";
            setFormSpinner(true);

            const id = formId.value;
            const payload = { name };

            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 15000);

            try {
                const headers = { "Accept": "application/json", "Content-Type": "application/json" };
                if (token()) headers["Authorization"] = "Bearer " + token();

                const url = id ? `/api/admin/categories/${id}` : "/api/admin/categories";
                const res = await fetch(url, { method: "POST", headers, body: JSON.stringify(payload), signal: controller.signal });
                const data = await res.json().catch(() => ({}));

                if (!res.ok || !data.success) {
                    if (data.message) showToast(data.message, "error");
                    if (data.errors && data.errors.name) {
                        errorEl.textContent = data.errors.name[0];
                        show(errorEl);
                        formName.classList.add("border-red-400", "focus:border-red-400", "focus:ring-red-400");
                        formName.classList.remove("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
                    }
                    return;
                }

                showToast(data.message || "Category saved.");
                closeModalFn();
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Category" : "Save Category";
                loadCategories();
            } catch (err) {
                const msg = err && err.name === "AbortError"
                    ? "Request timed out. Please try again."
                    : "Network error. Please try again.";
                showToast(msg, "error");
            } finally {
                clearTimeout(timeoutId);
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Category" : "Save Category";
            }
        });

        formName.addEventListener("blur", () => {
            const errorEl = document.getElementById("errorName");
            const name = formName.value.trim();
            if (!name) {
                errorEl.textContent = "Category name is required.";
                show(errorEl);
                formName.classList.add("border-red-400", "focus:border-red-400", "focus:ring-red-400");
                formName.classList.remove("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
            } else {
                errorEl.textContent = "";
                hide(errorEl);
                formName.classList.remove("border-red-400", "focus:border-red-400", "focus:ring-red-400");
                formName.classList.add("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
            }
        });
        formName.addEventListener("input", () => {
            const errorEl = document.getElementById("errorName");
            if (errorEl.classList.contains("hidden")) return;
            const name = formName.value.trim();
            if (name) {
                errorEl.textContent = "";
                hide(errorEl);
                formName.classList.remove("border-red-400", "focus:border-red-400", "focus:ring-red-400");
                formName.classList.add("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
            }
        });

        // ── Row actions ──────────────────────────────────────────
        categoriesBody.addEventListener("click", async (e) => {
            const btn = e.target.closest("[data-action]");
            if (!btn) return;
            const id = btn.dataset.id;
            const action = btn.dataset.action;

            if (action === "edit") {
                const cat = state.data.find(c => String(c.id) === id);
                if (cat) openModal(true, cat);
            }

            if (action === "delete") {
                if (!confirm("Delete this category permanently?")) return;
                const res = await api(`/categories/${id}`, { method: "DELETE" });
                if (res && res.ok) {
                    showToast(res.message || "Category deleted.");
                    await loadCategories();
                } else if (res && !res.ok && res.message) {
                    showToast(res.message, "error");
                }
            }
        });

        // ── Init ────────────────────────────────────────────────
        loadCategories();
    })();
    </script>
@endsection