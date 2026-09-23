@extends('admin.layouts.admin')

@section('title', 'Portfolio | Admin Panel')
@section('pageTitle', 'Portfolio')
@section('pageSubtitle', 'Manage portfolio items shown on the website')

@section('content')
    <div data-admin-page class="space-y-6">
        {{-- Stats cards --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Portfolio</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-folder-open"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Categories</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-purple-50 text-purple-600">
                        <i class="fa-solid fa-tags"></i>
                    </span>
                </div>
                <p id="statCategories" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
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

        {{-- Projects list --}}
        <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <div class="flex flex-col gap-3 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-sm font-bold text-slate-900">Your Portfolio</h2>
                <div class="flex items-center gap-2">
                    <button id="refreshBtn" type="button"
                        class="flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        <i class="fa-solid fa-rotate"></i> Refresh
                    </button>
                    <button id="addProjectBtn" type="button"
                        class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#1066a1]">
                        <i class="fa-solid fa-plus"></i> Add Portfolio Item
                    </button>
                </div>
            </div>

            {{-- Loading state --}}
            <div id="loadingState" class="flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-circle-notch animate-spin text-3xl text-[#157cc1]"></i>
                <p class="mt-3 text-sm text-slate-500">Loading portfolio...</p>
            </div>

            {{-- Empty state --}}
            <div id="emptyState" class="hidden flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-folder-open text-4xl text-slate-300"></i>
                <p class="mt-3 text-sm font-medium text-slate-500">No portfolio items added yet</p>
                <button id="emptyAddBtn" type="button"
                    class="mt-4 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                    <i class="fa-solid fa-plus mr-1"></i> Add Your First Portfolio Item
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

            {{-- Projects grid --}}
            <div id="gridWrap" class="hidden p-5">
                <div id="projectsGrid" class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3"></div>

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
    </div>

    {{-- Create / Edit Modal --}}
    <div id="projectModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60" data-close-modal></div>
        <div class="relative z-10 w-full max-w-lg overflow-hidden rounded-xl bg-white shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                <div>
                    <h3 id="modalTitle" class="text-sm font-bold text-slate-900">Add Portfolio Item</h3>
                    <p class="mt-0.5 text-xs text-slate-500">Fill in the details below</p>
                </div>
                <button type="button" data-close-modal
                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form id="projectForm" class="max-h-[75vh] overflow-y-auto px-5 py-4">
                <input type="hidden" id="formId">
                <div class="space-y-4">
                    <div>
                        <label for="formTitle" class="mb-1 block text-xs font-semibold text-slate-700">Title <span class="text-red-500">*</span></label>
                        <input type="text" id="formTitle" required
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="e.g. Rizqin Abd">
                        <p id="errorTitle" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formUrl" class="mb-1 block text-xs font-semibold text-slate-700">URL <span class="text-red-500">*</span></label>
                        <input type="url" id="formUrl" required
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="https://example.com">
                        <p id="errorUrl" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formCategory" class="mb-1 block text-xs font-semibold text-slate-700">Category <span class="text-red-500">*</span></label>
                        <select id="formCategory" required
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]">
                            <option value="">Select a category</option>
                        </select>
                        <p id="errorCategory" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formImage" class="mb-1 block text-xs font-semibold text-slate-700">Image <span id="imageRequired" class="text-red-500">*</span></label>
                        <input type="file" id="formImage" accept="image/png,image/jpeg,image/jpg,image/webp"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-[#157cc1] file:px-3 file:py-1.5 file:text-xs file:font-semibold file:text-white hover:file:bg-[#1066a1]">
                        <p id="errorImage" class="mt-1 hidden text-xs text-red-500"></p>
                        <div id="imagePreview" class="mt-3 hidden">
                            <img id="previewImg" src="" alt="Preview" class="h-40 rounded-lg object-cover">
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
                        <span id="formBtnText">Save Portfolio Item</span>
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

        const loadingState = document.getElementById("loadingState");
        const emptyState = document.getElementById("emptyState");
        const errorState = document.getElementById("errorState");
        const gridWrap = document.getElementById("gridWrap");
        const projectsGrid = document.getElementById("projectsGrid");
        const pageInfo = document.getElementById("pageInfo");
        const pageNumbers = document.getElementById("pageNumbers");
        const prevPage = document.getElementById("prevPage");
        const nextPage = document.getElementById("nextPage");
        const pageSize = document.getElementById("pageSize");
        const refreshBtn = document.getElementById("refreshBtn");
        const retryBtn = document.getElementById("retryBtn");
        const addProjectBtn = document.getElementById("addProjectBtn");
        const emptyAddBtn = document.getElementById("emptyAddBtn");
        const statTotal = document.getElementById("statTotal");
        const statCategories = document.getElementById("statCategories");
        const statShown = document.getElementById("statShown");

        let state = { page: 1, size: 10, data: [], total: 0, categories: [] };

        const show = (el) => el.classList.remove("hidden");
        const hide = (el) => el.classList.add("hidden");

        function setLoading(loading) {
            if (loading) { show(loadingState); hide(emptyState); hide(errorState); hide(gridWrap); return; }
            hide(loadingState);
        }

        function renderGrid() {
            show(gridWrap);
            hide(emptyState);
            hide(errorState);
            if (!state.data.length) { hide(gridWrap); show(emptyState); return; }

            projectsGrid.innerHTML = state.data.map(p => `
                <div class="group rounded-xl border border-slate-200 bg-white overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative h-48 overflow-hidden bg-slate-100">
                        <img src="${escapeHtml(p.image || '')}" alt="${escapeHtml(p.title)}"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22200%22><rect fill=%22%23e2e8f0%22 width=%22400%22 height=%22200%22/><text x=%22200%22 y=%22100%22 text-anchor=%22middle%22 dy=%22.3em%22 fill=%22%2394a3b8%22 font-size=%2214%22>No Image</text></svg>'">
                    </div>
                    <div class="p-4">
                        <span class="inline-block rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700">${escapeHtml(p.category_name || '')}</span>
                        <h3 class="mt-2 text-sm font-bold text-slate-900 truncate">${escapeHtml(p.title)}</h3>
                        <p class="mt-1 text-xs text-slate-500 truncate">${escapeHtml(p.url || 'No URL')}</p>
                        <div class="mt-3 flex items-center gap-1.5 border-t border-slate-100 pt-3">
                            <button type="button" data-action="edit" data-id="${p.id}"
                                class="flex items-center gap-1.5 rounded-lg border border-slate-200 px-3 py-1.5 text-[11px] font-semibold text-slate-600 hover:bg-slate-50">
                                <i class="fa-solid fa-pen-to-square text-[10px]"></i> Edit
                            </button>
                            <button type="button" data-action="delete" data-id="${p.id}"
                                class="flex items-center gap-1.5 rounded-lg border border-red-200 px-3 py-1.5 text-[11px] font-semibold text-red-600 hover:bg-red-50">
                                <i class="fa-solid fa-trash-can text-[10px]"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            `).join("");
        }

        function renderPagination(pagination) {
            const { total, per_page, current_page, last_page } = pagination;
            pageInfo.textContent = total === 0 ? "No portfolio items" : `Showing ${(current_page - 1) * per_page + 1}–${Math.min(current_page * per_page, total)} of ${total} portfolio items`;
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

        async function loadProjects() {
            setLoading(true);
            try {
                const listRes = await api(`/projects?page=${state.page}&per_page=${state.size}`);

                if (listRes && listRes.ok) {
                    state.data = listRes.data || [];
                    state.total = listRes.pagination.total;
                    statTotal.textContent = listRes.pagination.total;
                    statShown.textContent = listRes.data.length;

                    const cats = [...new Set(state.data.map(p => p.category_name))];
                    statCategories.textContent = cats.length;

                    renderGrid();
                    renderPagination(listRes.pagination);
                    setLoading(false);
                } else {
                    throw new Error("Failed");
                }
            } catch (e) {
                setLoading(false);
                show(errorState);
                document.getElementById("errorMsg").textContent = "Could not load portfolio. Please try again.";
            }
        }

        refreshBtn.addEventListener("click", loadProjects);
        retryBtn.addEventListener("click", loadProjects);
        pageSize.addEventListener("change", () => { state.size = Number(pageSize.value); state.page = 1; loadProjects(); });
        prevPage.addEventListener("click", () => { if (state.page > 1) { state.page--; loadProjects(); } });
        nextPage.addEventListener("click", () => { state.page++; loadProjects(); });
        pageNumbers.addEventListener("click", (e) => {
            const btn = e.target.closest("[data-page]");
            if (!btn) return;
            state.page = Number(btn.dataset.page);
            loadProjects();
        });

        // ── Modal / Form ─────────────────────────────────────────
        const modal = document.getElementById("projectModal");
        const form = document.getElementById("projectForm");
        const formId = document.getElementById("formId");
        const formTitle = document.getElementById("formTitle");
        const formUrl = document.getElementById("formUrl");
        const formCategory = document.getElementById("formCategory");
        const formImage = document.getElementById("formImage");
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

        const openModal = (editMode = false, project = null) => {
            form.reset();
            clearErrors();
            setFormSpinner(false);
            formSubmitBtn.disabled = false;
            hide(imagePreview);
            formId.value = "";
            document.getElementById("modalTitle").textContent = editMode ? "Edit Portfolio Item" : "Add Portfolio Item";
            formBtnText.textContent = editMode ? "Update Portfolio Item" : "Save Portfolio Item";
            imageRequired.style.display = editMode ? "none" : "inline";

            if (editMode && project) {
                formId.value = project.id;
                formTitle.value = project.title || "";
                formUrl.value = project.url || "";
                formCategory.value = project.category_id || "";
                if (project.image) {
                    previewImg.src = project.image;
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

        addProjectBtn.addEventListener("click", () => openModal(false));
        emptyAddBtn.addEventListener("click", () => openModal(false));

        modal.addEventListener("click", (e) => { if (e.target.closest("[data-close-modal]")) closeModalFn(); });
        document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeModalFn(); });

        formImage.addEventListener("change", (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (ev) => { previewImg.src = ev.target.result; show(imagePreview); };
                reader.readAsDataURL(file);
            }
        });

        function clearErrors() {
            ["errorTitle", "errorUrl", "errorCategory", "errorImage"].forEach(id => {
                const el = document.getElementById(id);
                el.textContent = "";
                hide(el);
            });
        }

        function showErrors(errors) {
            if (errors.title) { document.getElementById("errorTitle").textContent = errors.title[0]; show(document.getElementById("errorTitle")); }
            if (errors.url) { document.getElementById("errorUrl").textContent = errors.url[0]; show(document.getElementById("errorUrl")); }
            if (errors.category_id) { document.getElementById("errorCategory").textContent = errors.category_id[0]; show(document.getElementById("errorCategory")); }
            if (errors.image) { document.getElementById("errorImage").textContent = errors.image[0]; show(document.getElementById("errorImage")); }
        }

        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            clearErrors();
            formSubmitBtn.disabled = true;
            setFormSpinner(true);
            formBtnText.textContent = "Saving...";

            const id = formId.value;
            const fd = new FormData();
            fd.append("title", formTitle.value.trim());
            fd.append("url", formUrl.value.trim());
            fd.append("category_id", formCategory.value);
            if (formImage.files[0]) fd.append("image", formImage.files[0]);
            if (id) fd.append("_method", "POST");

            try {
                const url = id ? `/api/admin/projects/${id}` : "/api/admin/projects";
                const headers = { "Accept": "application/json" };
                if (token()) headers["Authorization"] = "Bearer " + token();

                const res = await fetch(url, { method: "POST", headers, body: fd });
                const data = await res.json().catch(() => ({}));

                if (!res.ok || !data.success) {
                    if (data.errors) showErrors(data.errors);
                    else showToast(data.message || "Something went wrong.", "error");
                    return;
                }

                showToast(data.message || "Portfolio item saved.");
                closeModalFn();
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Portfolio Item" : "Save Portfolio Item";
                loadProjects();
            } catch (err) {
                showToast("Network error. Please try again.", "error");
            } finally {
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Portfolio Item" : "Save Portfolio Item";
            }
        });

        // ── Grid actions ──────────────────────────────────────────
        projectsGrid.addEventListener("click", async (e) => {
            const btn = e.target.closest("[data-action]");
            if (!btn) return;
            const id = btn.dataset.id;
            const action = btn.dataset.action;

            if (action === "edit") {
                const res = await api(`/projects/${id}`);
                if (res && res.ok) openModal(true, res.data);
            }

            if (action === "delete") {
                if (!confirm("Delete this portfolio item permanently?")) return;
                const res = await api(`/projects/${id}`, { method: "DELETE" });
                if (res && res.ok) {
                    showToast(res.message || "Portfolio item deleted.");
                    await loadProjects();
                }
            }
        });

        // ── Category dropdown ────────────────────────────────────
        let categoryOptions = [];

        async function loadCategoryOptions() {
            const res = await api("/categories/options");
            if (res && res.ok) {
                categoryOptions = res.data || [];
                populateCategoryDropdown();
            }
        }

        function populateCategoryDropdown() {
            if (!categoryOptions.length) {
                formCategory.innerHTML = '<option value="">No categories yet — add one first</option>';
                formCategory.disabled = true;
                return;
            }
            formCategory.disabled = false;
            formCategory.innerHTML = '<option value="">Select a category</option>' +
                categoryOptions.map(c =>
                    `<option value="${c.id}">${escapeHtml(c.name)}</option>`
                ).join("");
        }

        loadCategoryOptions();

        loadProjects();
    })();
    </script>
@endsection
