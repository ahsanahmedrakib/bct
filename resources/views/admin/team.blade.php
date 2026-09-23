@extends('admin.layouts.admin')

@section('title', 'Team Members | Admin Panel')
@section('pageTitle', 'Team Members')
@section('pageSubtitle', 'Manage the team shown on the website')

@section('content')
    <div data-admin-page class="space-y-6">
        {{-- Stats cards --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Members</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-users"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">With Social Links</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-purple-50 text-purple-600">
                        <i class="fa-solid fa-share-nodes"></i>
                    </span>
                </div>
                <p id="statSocial" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">This Page</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                        <i class="fa-solid fa-list-ol"></i>
                    </span>
                </div>
                <p id="statShown" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
        </div>

        {{-- Members list --}}
        <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <div class="flex flex-col gap-3 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-sm font-bold text-slate-900">Your Team Members</h2>
                <div class="flex items-center gap-2">
                    <button id="refreshBtn" type="button"
                        class="flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        <i class="fa-solid fa-rotate"></i> Refresh
                    </button>
                    <button id="addMemberBtn" type="button"
                        class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#1066a1]">
                        <i class="fa-solid fa-plus"></i> Add Member
                    </button>
                </div>
            </div>

            {{-- Loading state --}}
            <div id="loadingState" class="flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-circle-notch animate-spin text-3xl text-[#157cc1]"></i>
                <p class="mt-3 text-sm text-slate-500">Loading team members...</p>
            </div>

            {{-- Empty state --}}
            <div id="emptyState" class="hidden flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-users text-4xl text-slate-300"></i>
                <p class="mt-3 text-sm font-medium text-slate-500">No team members added yet</p>
                <button id="emptyAddBtn" type="button"
                    class="mt-4 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                    <i class="fa-solid fa-plus mr-1"></i> Add Your First Member
                </button>
            </div>

            {{-- Error state --}}
            <div id="errorState" class="hidden flex-col items-center justify-center py-16">
                <i class="fa-solid fa-triangle-exclamation text-4xl text-red-300"></i>
                <p id="errorMsg" class="mt-3 text-sm text-red-600"></p>
                <button id="retryBtn" type="button"
                    class="mt-4 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                    Try Again
                </button>
            </div>

            {{-- Members grid --}}
            <div id="gridWrap" class="hidden p-5">
                <div id="membersGrid" class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3"></div>

                {{-- Pagination --}}
                <div class="mt-5 flex flex-col items-center justify-between gap-3 border-t border-slate-200 pt-5 sm:flex-row"
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

    {{-- Create / Edit Modal --}}
    <div id="memberModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60" data-close-modal></div>
        <div class="relative z-10 w-full max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                <div>
                    <h3 id="modalTitle" class="text-sm font-bold text-slate-900">Add Member</h3>
                    <p class="mt-0.5 text-xs text-slate-500">Fill in the details below</p>
                </div>
                <button type="button" data-close-modal
                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form id="memberForm" class="max-h-[75vh] overflow-y-auto px-5 py-4">
                <input type="hidden" id="formId">
                <div class="space-y-4">
                        <div>
                            <label for="formName" class="mb-1 block text-sm font-semibold text-slate-700">Name <span class="text-red-500">*</span></label>
                            <input type="text" id="formName"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                placeholder="e.g. Tamzid Hasan">
                            <p id="errorName" class="mt-1 hidden text-xs text-red-500"></p>
                        </div>
                        <div>
                            <label for="formRole" class="mb-1 block text-sm font-semibold text-slate-700">Role <span class="text-red-500">*</span></label>
                            <input type="text" id="formRole"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                placeholder="e.g. IT Consultant">
                            <p id="errorRole" class="mt-1 hidden text-xs text-red-500"></p>
                        </div>
                        <div>
                            <label for="formLabel" class="mb-1 block text-sm font-semibold text-slate-700">Label <span class="text-red-500">*</span></label>
                            <input type="text" id="formLabel"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                placeholder="e.g. Consultant">
                            <p id="errorLabel" class="mt-1 hidden text-xs text-red-500"></p>
                        </div>
                        <div>
                            <label for="formImage" class="mb-1 block text-sm font-semibold text-slate-700">Photo <span id="imageRequired" class="text-red-500">*</span></label>
                            <input type="file" id="formImage" accept="image/png,image/jpeg,image/jpg,image/webp,image/jfif"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-[#157cc1] file:px-3 file:py-1.5 file:text-xs file:font-semibold file:text-white hover:file:bg-[#1066a1]">
                            <p id="errorImage" class="mt-1 hidden text-xs text-red-500"></p>
                            <div id="imagePreview" class="mt-3 hidden">
                                <img id="previewImg" src="" alt="Preview"
                                    class="h-48 w-40 rounded-lg border border-slate-200 object-cover shadow-sm">
                            </div>
                        </div>
                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3">
                        <p class="mb-3 text-sm font-semibold text-slate-700">Social Profiles</p>
                        <div class="space-y-3">
                            <div>
                                <label for="formFacebook" class="mb-1 block text-sm font-medium text-slate-600">Facebook</label>
                                <input type="url" id="formFacebook"
                                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                    placeholder="https://facebook.com/...">
                                <p id="errorFacebook" class="mt-1 hidden text-xs text-red-500"></p>
                            </div>
                            <div>
                                <label for="formInstagram" class="mb-1 block text-sm font-medium text-slate-600">Instagram</label>
                                <input type="url" id="formInstagram"
                                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                    placeholder="https://instagram.com/...">
                                <p id="errorInstagram" class="mt-1 hidden text-xs text-red-500"></p>
                            </div>
                            <div>
                                <label for="formLinkedin" class="mb-1 block text-sm font-medium text-slate-600">LinkedIn</label>
                                <input type="url" id="formLinkedin"
                                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                    placeholder="https://linkedin.com/in/...">
                                <p id="errorLinkedin" class="mt-1 hidden text-xs text-red-500"></p>
                            </div>
                            <div>
                                <label for="formX" class="mb-1 block text-sm font-medium text-slate-600">X (Twitter)</label>
                                <input type="url" id="formX"
                                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                    placeholder="https://x.com/...">
                                <p id="errorX" class="mt-1 hidden text-xs text-red-500"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 flex items-center justify-end gap-2 border-t border-slate-200 pt-4">
                    <button type="button" data-close-modal
                        class="rounded-lg border border-slate-300 px-4 py-2 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        Cancel
                    </button>
                    <button type="submit" id="formSubmitBtn"
                        class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                        <i id="formSpinner" hidden class="fa-solid fa-circle-notch"></i>
                        <span id="formBtnText">Save Member</span>
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
            if (str === null || str === undefined) return "";
            return String(str).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
        };

        const loadingState = document.getElementById("loadingState");
        const emptyState = document.getElementById("emptyState");
        const errorState = document.getElementById("errorState");
        const gridWrap = document.getElementById("gridWrap");
        const membersGrid = document.getElementById("membersGrid");
        const pageInfo = document.getElementById("pageInfo");
        const pageNumbers = document.getElementById("pageNumbers");
        const prevPage = document.getElementById("prevPage");
        const nextPage = document.getElementById("nextPage");
        const pageSize = document.getElementById("pageSize");
        const refreshBtn = document.getElementById("refreshBtn");
        const retryBtn = document.getElementById("retryBtn");
        const addMemberBtn = document.getElementById("addMemberBtn");
        const emptyAddBtn = document.getElementById("emptyAddBtn");
        const statTotal = document.getElementById("statTotal");
        const statSocial = document.getElementById("statSocial");
        const statShown = document.getElementById("statShown");

        let state = { page: 1, size: 10, data: [], total: 0 };

        const show = (el) => el.classList.remove("hidden");
        const hide = (el) => el.classList.add("hidden");

        function setLoading(loading) {
            if (loading) { show(loadingState); hide(emptyState); hide(errorState); hide(gridWrap); return; }
            hide(loadingState);
        }

        function countSocials(m) {
            let n = 0;
            ["facebook", "instagram", "linkedin", "x"].forEach((k) => { if (m[k]) n++; });
            return n;
        }

        function renderGrid() {
            show(gridWrap);
            hide(emptyState);
            hide(errorState);
            if (!state.data.length) { hide(gridWrap); show(emptyState); return; }

            membersGrid.innerHTML = state.data.map(m => {
                const socials = ["facebook", "instagram", "linkedin", "x"].filter((k) => m[k])
                    .map((k) => {
                        const icons = {
                            facebook: { html: '<i class="fa-brands fa-facebook-f"></i>', bg: "bg-[#1877f2]" },
                            instagram: { html: '<i class="fa-brands fa-instagram"></i>', bg: "bg-linear-to-tr from-[#f09433] via-[#e6683c] to-[#bc1888]" },
                            linkedin: { html: '<i class="fa-brands fa-linkedin-in"></i>', bg: "bg-[#0a66c2]" },
                            x: { html: '<i class="fa-brands fa-x-twitter"></i>', bg: "bg-black" },
                        };
                        return `<a href="${escapeHtml(m[k])}" target="_blank" rel="noopener noreferrer" title="${k.charAt(0).toUpperCase() + k.slice(1)}"
                            class="flex h-6 w-6 items-center justify-center rounded-full text-[11px] text-white hover:scale-110 transition-transform ${icons[k].bg}">${icons[k].html}</a>`;
                    }).join("");
                return `
                <div class="group rounded-xl border border-slate-200 bg-white overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative h-52 overflow-hidden bg-slate-100">
                        <img src="${escapeHtml(m.image || '')}" alt="${escapeHtml(m.name)}"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22200%22><rect fill=%22%23e2e8f0%22 width=%22400%22 height=%22200%22/><text x=%22200%22 y=%22100%22 text-anchor=%22middle%22 dy=%22.3em%22 fill=%22%2394a3b8%22 font-size=%2214%22>No Photo</text></svg>'">
                    </div>
                    <div class="p-4">
                        <span class="inline-block rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700">${escapeHtml(m.role)}</span>
                        <h3 class="mt-2 text-sm font-bold text-slate-900 truncate">${escapeHtml(m.name)}</h3>
                        <div class="mt-2 flex items-center gap-1.5">${socials || '<span class="text-[11px] text-slate-400">No social links</span>'}</div>
                        <div class="mt-3 flex items-center gap-1.5 border-t border-slate-100 pt-3">
                            <button type="button" data-action="edit" data-id="${m.id}"
                                class="flex items-center gap-1.5 rounded-lg border border-slate-200 px-3 py-1.5 text-[11px] font-semibold text-slate-600 hover:bg-slate-50">
                                <i class="fa-solid fa-pen-to-square text-[10px]"></i> Edit
                            </button>
                            <button type="button" data-action="delete" data-id="${m.id}"
                                class="flex items-center gap-1.5 rounded-lg border border-red-200 px-3 py-1.5 text-[11px] font-semibold text-red-600 hover:bg-red-50">
                                <i class="fa-solid fa-trash-can text-[10px]"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>`;
            }).join("");
        }

        function renderPagination(pagination) {
            const { total, per_page, current_page, last_page } = pagination;
            pageInfo.textContent = total === 0 ? "No team members" : `Showing ${(current_page - 1) * per_page + 1}–${Math.min(current_page * per_page, total)} of ${total} members`;
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

        async function loadMembers() {
            setLoading(true);
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);
            try {
                const listRes = await api(`/team?page=${state.page}&per_page=${state.size}`, { signal: controller.signal });

                if (listRes && listRes.ok) {
                    state.data = listRes.data || [];
                    state.total = listRes.pagination.total;
                    statTotal.textContent = listRes.pagination.total;
                    statShown.textContent = listRes.data.length;
                    statSocial.textContent = state.data.reduce((n, m) => n + (countSocials(m) > 0 ? 1 : 0), 0);

                    renderGrid();
                    renderPagination(listRes.pagination);
                    setLoading(false);
                } else {
                    throw new Error("Failed");
                }
            } catch (e) {
                setLoading(false);
                show(errorState);
                document.getElementById("errorMsg").textContent = "Could not load team members. Please try again.";
            } finally {
                clearTimeout(timeoutId);
            }
        }

        refreshBtn.addEventListener("click", loadMembers);
        retryBtn.addEventListener("click", loadMembers);
        pageSize.addEventListener("change", () => { state.size = Number(pageSize.value); state.page = 1; loadMembers(); });
        prevPage.addEventListener("click", () => { if (state.page > 1) { state.page--; loadMembers(); } });
        nextPage.addEventListener("click", () => { state.page++; loadMembers(); });
        pageNumbers.addEventListener("click", (e) => {
            const btn = e.target.closest("[data-page]");
            if (!btn) return;
            state.page = Number(btn.dataset.page);
            loadMembers();
        });

        // ── Modal / Form ─────────────────────────────────────────
        const modal = document.getElementById("memberModal");
        const form = document.getElementById("memberForm");
        const formId = document.getElementById("formId");
        const formName = document.getElementById("formName");
        const formRole = document.getElementById("formRole");
        const formLabel = document.getElementById("formLabel");
        const formImage = document.getElementById("formImage");
        const formFacebook = document.getElementById("formFacebook");
        const formInstagram = document.getElementById("formInstagram");
        const formLinkedin = document.getElementById("formLinkedin");
        const formX = document.getElementById("formX");
        const imagePreview = document.getElementById("imagePreview");
        const previewImg = document.getElementById("previewImg");
        const formSubmitBtn = document.getElementById("formSubmitBtn");
        const formBtnText = document.getElementById("formBtnText");
        const formSpinner = document.getElementById("formSpinner");

        const setFormSpinner = (on) => {
            formSpinner.classList.toggle("animate-spin", on);
            if (on) formSpinner.removeAttribute("hidden");
            else formSpinner.setAttribute("hidden", "");
        };
        const imageRequired = document.getElementById("imageRequired");

        const openModal = (editMode = false, member = null) => {
            form.reset();
            clearErrors();
            formSubmitBtn.disabled = false;
            setFormSpinner(false);
            Object.keys(touched).forEach((k) => { touched[k] = false; });
            hide(imagePreview);
            formId.value = "";
            document.getElementById("modalTitle").textContent = editMode ? "Edit Member" : "Add Member";
            formBtnText.textContent = editMode ? "Update Member" : "Save Member";
            imageRequired.style.display = editMode ? "none" : "inline";

            if (editMode && member) {
                formId.value = member.id;
                formName.value = member.name || "";
                formRole.value = member.role || "";
                formLabel.value = member.label || "";
                formFacebook.value = member.facebook || "";
                formInstagram.value = member.instagram || "";
                formLinkedin.value = member.linkedin || "";
                formX.value = member.x || "";
                if (member.image) {
                    previewImg.src = member.image;
                    show(imagePreview);
                }
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

        addMemberBtn.addEventListener("click", () => openModal(false));
        emptyAddBtn.addEventListener("click", () => openModal(false));

        modal.addEventListener("click", (e) => { if (e.target.closest("[data-close-modal]")) closeModalFn(); });
        document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeModalFn(); });

        formImage.addEventListener("change", (e) => {
            touched.image = true;
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (ev) => { previewImg.src = ev.target.result; show(imagePreview); };
                reader.readAsDataURL(file);
                validateField("image");
            } else {
                hide(imagePreview);
                validateField("image");
            }
        });

        function clearErrors() {
            ["errorName", "errorRole", "errorLabel", "errorImage", "errorFacebook", "errorInstagram", "errorLinkedin", "errorX"].forEach(id => {
                const el = document.getElementById(id);
                el.textContent = "";
                hide(el);
            });
            Object.keys(fieldEls).forEach((key) => {
                const input = fieldEls[key];
                input.classList.remove("border-red-400", "focus:border-red-400", "focus:ring-red-400");
                input.classList.add("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
            });
        }

        function showErrors(errors) {
            ["name", "role", "label", "image", "facebook", "instagram", "linkedin", "x"].forEach((key) => {
                if (errors[key]) {
                    const id = "error" + key.charAt(0).toUpperCase() + key.slice(1);
                    const el = document.getElementById(id);
                    el.textContent = errors[key][0];
                    show(el);
                }
            });
        }

        // ── react-hook-form / yup-style validation ───────────────
        // Schema rules: name / role / label are required.
        // Photo is required only when adding (an existing photo is kept on edit).
        // Social profile fields are intentionally excluded.
        const validationSchema = {
            name: { required: "Member name is required." },
            role: { required: "Role is required." },
            label: { required: "Label is required." },
            image: { required: "Member photo is required." },
        };

        const fieldEls = { name: formName, role: formRole, label: formLabel, image: formImage };
        const touched = { name: false, role: false, label: false, image: false };

        const errorEl = (key) =>
            document.getElementById("error" + key.charAt(0).toUpperCase() + key.slice(1));

        function validateField(key) {
            const el = errorEl(key);
            const input = fieldEls[key];
            const value = (input.value || "").trim();
            if (!value) {
                el.textContent = validationSchema[key].required;
                show(el);
                input.classList.add("border-red-400", "focus:border-red-400", "focus:ring-red-400");
                input.classList.remove("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
                return false;
            }
            el.textContent = "";
            hide(el);
            input.classList.remove("border-red-400", "focus:border-red-400", "focus:ring-red-400");
            input.classList.add("border-slate-300", "focus:border-[#157cc1]", "focus:ring-[#157cc1]");
            return true;
        }

        function validateImage() {
            const hasFile = formImage.files && formImage.files.length > 0;
            if (formId.value && !hasFile) return true;
            return validateField("image");
        }

        function validateAll() {
            let valid = true;
            ["name", "role", "label"].forEach((key) => {
                if (!validateField(key)) valid = false;
            });
            if (!validateImage()) valid = false;
            return valid;
        }

        // Validate a field on blur once it has been touched, then
        // clear the message live as the user fixes the value.
        ["name", "role", "label"].forEach((key) => {
            fieldEls[key].addEventListener("blur", () => {
                touched[key] = true;
                validateField(key);
            });
            fieldEls[key].addEventListener("input", () => {
                if (touched[key]) validateField(key);
            });
        });

        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            clearErrors();
            if (!validateAll()) return;
            formSubmitBtn.disabled = true;
            setFormSpinner(true);
            formBtnText.textContent = "Saving...";

            const id = formId.value;
            const fd = new FormData();
            fd.append("name", formName.value.trim());
            fd.append("role", formRole.value.trim());
            fd.append("label", formLabel.value.trim());
            fd.append("facebook", formFacebook.value.trim());
            fd.append("instagram", formInstagram.value.trim());
            fd.append("linkedin", formLinkedin.value.trim());
            fd.append("x", formX.value.trim());
            if (formImage.files[0]) fd.append("image", formImage.files[0]);
            if (id) fd.append("_method", "POST");

            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);

            try {
                const url = id ? `/api/admin/team/${id}` : "/api/admin/team";
                const headers = { "Accept": "application/json" };
                if (token()) headers["Authorization"] = "Bearer " + token();

                const res = await fetch(url, { method: "POST", headers, body: fd, signal: controller.signal });
                const data = await res.json().catch(() => ({}));

                if (!res.ok || !data.success) {
                    if (data.errors) showErrors(data.errors);
                    else showToast(data.message || "Something went wrong.", "error");
                    return;
                }

                showToast(data.message || "Team member saved.");
                closeModalFn();
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Member" : "Save Member";
                loadMembers();
            } catch (err) {
                const msg = err && err.name === "AbortError"
                    ? "Request timed out. Please try again."
                    : "Network error. Please try again.";
                showToast(msg, "error");
            } finally {
                clearTimeout(timeoutId);
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Member" : "Save Member";
            }
        });

        // ── Grid actions ──────────────────────────────────────────
        membersGrid.addEventListener("click", async (e) => {
            const btn = e.target.closest("[data-action]");
            if (!btn) return;
            const id = btn.dataset.id;
            const action = btn.dataset.action;

            if (action === "edit") {
                const res = await api(`/team/${id}`);
                if (res && res.ok) openModal(true, res.data);
            }

            if (action === "delete") {
                if (!confirm("Delete this team member permanently?")) return;
                const res = await api(`/team/${id}`, { method: "DELETE" });
                if (res && res.ok) {
                    showToast(res.message || "Team member deleted.");
                    await loadMembers();
                }
            }
        });

        // ── Init ────────────────────────────────────────────────
        loadMembers();
    })();
    </script>
@endsection