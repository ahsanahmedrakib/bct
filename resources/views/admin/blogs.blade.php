@extends('admin.layouts.admin')

@push('styles')
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
@endpush

@section('title', 'Blogs | Admin Panel')
@section('pageTitle', 'Blogs')
@section('pageSubtitle', 'Manage the blog posts shown on the public blogs page')

@section('content')
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

    <div data-admin-page class="space-y-6">
        {{-- Info banner --}}
        <div class="rounded-xl border border-blue-100 bg-blue-50 px-5 py-4 text-sm text-blue-800">
            <i class="fa-solid fa-circle-info mr-1.5"></i>
            Posts you add here appear on the public blogs page. When you have posts in the database, only your
            posts are shown — the default seed content is hidden. Use the rich text editor for the description.
        </div>

        {{-- Stats cards --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Posts</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-newspaper"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">With Image</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                        <i class="fa-solid fa-image"></i>
                    </span>
                </div>
                <p id="statWithImage" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">This Page</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-purple-50 text-purple-600">
                        <i class="fa-solid fa-list-ol"></i>
                    </span>
                </div>
                <p id="statShown" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
        </div>

        {{-- Posts list --}}
        <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <div class="flex flex-col gap-3 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-sm font-bold text-slate-900">Your Blog Posts</h2>
                <div class="flex items-center gap-2">
                    <button id="refreshBtn" type="button"
                        class="flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        <i class="fa-solid fa-rotate"></i> Refresh
                    </button>
                    <button id="addPostBtn" type="button"
                        class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#1066a1]">
                        <i class="fa-solid fa-plus"></i> Add Post
                    </button>
                </div>
            </div>

            {{-- Loading state --}}
            <div id="loadingState" class="flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-circle-notch animate-spin text-3xl text-[#157cc1]"></i>
                <p class="mt-3 text-sm text-slate-500">Loading blog posts...</p>
            </div>

            {{-- Empty state --}}
            <div id="emptyState" class="hidden flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-newspaper text-4xl text-slate-300"></i>
                <p class="mt-3 text-sm font-medium text-slate-500">No blog posts added yet</p>
                <button id="emptyAddBtn" type="button"
                    class="mt-4 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                    <i class="fa-solid fa-plus mr-1"></i> Add Your First Post
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

            {{-- Posts grid --}}
            <div id="gridWrap" class="hidden p-5">
                <div id="postsGrid" class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3"></div>

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
    <div id="postModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60" data-close-modal></div>
        <div class="relative z-10 w-full max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                <div>
                    <h3 id="modalTitle" class="text-sm font-bold text-slate-900">Add Post</h3>
                    <p class="mt-0.5 text-xs text-slate-500">Use the rich text editor for the description</p>
                </div>
                <button type="button" data-close-modal
                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form id="postForm" class="max-h-[75vh] overflow-y-auto px-5 py-4">
                <input type="hidden" id="formId">
                <div class="space-y-4">
                    <div>
                        <label for="formTitle" class="mb-1 block text-sm font-semibold text-slate-700">Title <span class="text-red-500">*</span></label>
                        <input type="text" id="formTitle"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="e.g. Cloud solutions for scalable IT infrastructure.">
                        <p id="errorTitle" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formCategory" class="mb-1 block text-sm font-semibold text-slate-700">Category <span class="text-red-500">*</span></label>
                        <input type="text" id="formCategory"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="e.g. CLOUD">
                        <p id="errorCategory" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formImage" class="mb-1 block text-sm font-semibold text-slate-700">Image <span id="imageRequired" class="text-red-500">*</span></label>
                        <input type="file" id="formImage" accept="image/png,image/jpeg,image/jpg,image/webp"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-[#157cc1] file:px-3 file:py-1.5 file:text-xs file:font-semibold file:text-white hover:file:bg-[#1066a1]">
                        <p id="errorImage" class="mt-1 hidden text-xs text-red-500"></p>
                        <div id="imagePreview" class="mt-3 hidden">
                            <img id="previewImg" src="" alt="Preview"
                                class="h-40 rounded-lg border border-slate-200 object-cover shadow-sm">
                        </div>
                    </div>
                    <div>
                        <label for="formAuthor" class="mb-1 block text-sm font-semibold text-slate-700">Author</label>
                        <input type="text" id="formAuthor"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="e.g. Admin">
                        <p id="errorAuthor" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formPublishedDate" class="mb-1 block text-sm font-semibold text-slate-700">Published Date</label>
                        <input type="date" id="formPublishedDate"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]">
                        <p id="errorPublishedDate" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="quillEditor" class="mb-1 block text-sm font-semibold text-slate-700">Description</label>
                        <div id="quillEditor"
                            class="rounded-lg border border-slate-300 focus:border-[#157cc1] focus:outline-none" style="min-height: 160px;"></div>
                        <p id="errorDescription" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formSortOrder" class="mb-1 block text-sm font-semibold text-slate-700">Sort Order</label>
                        <input type="number" id="formSortOrder" min="1"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="e.g. 1">
                        <p id="errorSortOrder" class="mt-1 hidden text-xs text-red-500"></p>
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
                        <span id="formBtnText">Save Post</span>
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
        const postsGrid = document.getElementById("postsGrid");
        const pageInfo = document.getElementById("pageInfo");
        const pageNumbers = document.getElementById("pageNumbers");
        const prevPage = document.getElementById("prevPage");
        const nextPage = document.getElementById("nextPage");
        const pageSize = document.getElementById("pageSize");
        const refreshBtn = document.getElementById("refreshBtn");
        const retryBtn = document.getElementById("retryBtn");
        const addPostBtn = document.getElementById("addPostBtn");
        const emptyAddBtn = document.getElementById("emptyAddBtn");
        const statTotal = document.getElementById("statTotal");
        const statWithImage = document.getElementById("statWithImage");
        const statShown = document.getElementById("statShown");

        let state = { page: 1, size: 10, data: [], total: 0 };

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

            postsGrid.innerHTML = state.data.map((p) => `
                <div class="group flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative h-48 overflow-hidden bg-slate-100">
                        <img src="${escapeHtml(p.image || '')}" alt="${escapeHtml(p.title)}"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            onerror="this.style.display='none'">
                        <span class="absolute right-2 top-2 rounded-full bg-black/60 px-2.5 py-1 text-[11px] font-semibold text-white">#${escapeHtml(p.sort_order || "—")}</span>
                    </div>
                    <div class="flex flex-1 flex-col p-4">
                        <span class="inline-block truncate rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700">${escapeHtml(p.category)}</span>
                        <h3 class="mt-2 text-sm font-bold text-slate-900 line-clamp-2">${escapeHtml(p.title)}</h3>
                        ${p.description ? `<p class="mt-1.5 line-clamp-2 text-xs text-slate-500">${escapeHtml(p.description.replace(/<[^>]*>/g, ' ').slice(0, 120))}</p>` : ""}
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
                </div>`).join("");
        }

        function renderPagination(pagination) {
            const { total, per_page, current_page, last_page } = pagination;
            pageInfo.textContent = total === 0 ? "No blog posts" : `Showing ${(current_page - 1) * per_page + 1}–${Math.min(current_page * per_page, total)} of ${total} posts`;
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

        async function loadPosts() {
            setLoading(true);
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);
            try {
                const listRes = await api(`/blogs?page=${state.page}&per_page=${state.size}`, { signal: controller.signal });

                if (listRes && listRes.ok) {
                    state.data = listRes.data || [];
                    state.total = listRes.pagination.total;
                    statTotal.textContent = listRes.pagination.total;
                    statShown.textContent = listRes.data.length;
                    statWithImage.textContent = state.data.filter((p) => p.image).length;

                    renderGrid();
                    renderPagination(listRes.pagination);
                    setLoading(false);
                } else {
                    throw new Error("Failed");
                }
            } catch (e) {
                setLoading(false);
                show(errorState);
                document.getElementById("errorMsg").textContent = "Could not load blog posts. Please try again.";
            } finally {
                clearTimeout(timeoutId);
            }
        }

        refreshBtn.addEventListener("click", loadPosts);
        retryBtn.addEventListener("click", loadPosts);
        pageSize.addEventListener("change", () => { state.size = Number(pageSize.value); state.page = 1; loadPosts(); });
        prevPage.addEventListener("click", () => { if (state.page > 1) { state.page--; loadPosts(); } });
        nextPage.addEventListener("click", () => { state.page++; loadPosts(); });
        pageNumbers.addEventListener("click", (e) => {
            const btn = e.target.closest("[data-page]");
            if (!btn) return;
            state.page = Number(btn.dataset.page);
            loadPosts();
        });

        // ── Quill ────────────────────────────────────────────────
        const quill = new Quill("#quillEditor", {
            theme: "snow",
            placeholder: "Write the post description...",
            modules: {
                toolbar: [
                    [{ header: [1, 2, 3, false] }],
                    ["bold", "italic", "underline", "strike"],
                    [{ list: "ordered" }, { list: "bullet" }],
                    [{ align: [] }],
                    ["link", "blockquote", "code-block"],
                    ["clean"]
                ]
            }
        });

        // ── Modal / Form ─────────────────────────────────────────
        const modal = document.getElementById("postModal");
        const form = document.getElementById("postForm");
        const formId = document.getElementById("formId");
        const formTitle = document.getElementById("formTitle");
        const formCategory = document.getElementById("formCategory");
        const formImage = document.getElementById("formImage");
        const formAuthor = document.getElementById("formAuthor");
        const formPublishedDate = document.getElementById("formPublishedDate");
        const formSortOrder = document.getElementById("formSortOrder");
        const imagePreview = document.getElementById("imagePreview");
        const previewImg = document.getElementById("previewImg");
        const formSubmitBtn = document.getElementById("formSubmitBtn");
        const formBtnText = document.getElementById("formBtnText");
        const formSpinner = document.getElementById("formSpinner");
        const imageRequired = document.getElementById("imageRequired");

        const setFormSpinner = (on) => {
            formSpinner.classList.toggle("animate-spin", on);
            if (on) formSpinner.removeAttribute("hidden");
            else formSpinner.setAttribute("hidden", "");
        };

        const openModal = (editMode = false, post = null) => {
            form.reset();
            clearErrors();
            formSubmitBtn.disabled = false;
            setFormSpinner(false);
            Object.keys(touched).forEach((k) => { touched[k] = false; });
            hide(imagePreview);
            formId.value = "";
            quill.root.innerHTML = "";
            document.getElementById("modalTitle").textContent = editMode ? "Edit Post" : "Add Post";
            formBtnText.textContent = editMode ? "Update Post" : "Save Post";
            imageRequired.style.display = editMode ? "none" : "inline";

            if (editMode && post) {
                formId.value = post.id;
                formTitle.value = post.title || "";
                formCategory.value = post.category || "";
                formAuthor.value = post.author || "";
                formPublishedDate.value = post.published_date || "";
                formSortOrder.value = post.sort_order || "";
                if (post.description) quill.root.innerHTML = post.description;
                if (post.image) {
                    previewImg.src = post.image;
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

        addPostBtn.addEventListener("click", () => openModal(false));
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

        // ── Validation ───────────────────────────────────────────
        const validationSchema = {
            title: { required: "Post title is required." },
            category: { required: "Category is required." },
            image: { required: "Blog image is required." },
        };

        const fieldEls = { title: formTitle, category: formCategory, image: formImage };
        const touched = { title: false, category: false, image: false };

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
            ["title", "category"].forEach((key) => {
                if (!validateField(key)) valid = false;
            });
            if (!validateImage()) valid = false;
            return valid;
        }

        ["title", "category"].forEach((key) => {
            fieldEls[key].addEventListener("blur", () => {
                touched[key] = true;
                validateField(key);
            });
            fieldEls[key].addEventListener("input", () => {
                if (touched[key]) validateField(key);
            });
        });

        function clearErrors() {
            ["errorTitle", "errorCategory", "errorImage", "errorAuthor", "errorPublishedDate", "errorSortOrder", "errorDescription"].forEach(id => {
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
            ["title", "category", "image", "author", "published_date", "sort_order"].forEach((key) => {
                if (errors[key]) {
                    const id = "error" + key.split("_").map((s) => s.charAt(0).toUpperCase() + s.slice(1)).join("");
                    const el = document.getElementById(id);
                    el.textContent = errors[key][0];
                    show(el);
                }
            });
        }

        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            clearErrors();
            if (!validateAll()) return;
            formSubmitBtn.disabled = true;
            setFormSpinner(true);
            formBtnText.textContent = "Saving...";

            const id = formId.value;
            const fd = new FormData();
            fd.append("title", formTitle.value.trim());
            fd.append("category", formCategory.value.trim());
            fd.append("description", quill.root.innerHTML);
            if (formAuthor.value.trim()) fd.append("author", formAuthor.value.trim());
            if (formPublishedDate.value) fd.append("published_date", formPublishedDate.value);
            if (formImage.files[0]) fd.append("image", formImage.files[0]);
            if (formSortOrder.value) fd.append("sort_order", formSortOrder.value);
            if (id) fd.append("_method", "POST");

            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 60000);

            try {
                const url = id ? `/api/admin/blogs/${id}` : "/api/admin/blogs";
                const headers = { "Accept": "application/json" };
                if (token()) headers["Authorization"] = "Bearer " + token();

                const res = await fetch(url, { method: "POST", headers, body: fd, signal: controller.signal });
                const data = await res.json().catch(() => ({}));

                if (!res.ok || !data.success) {
                    if (data.errors) showErrors(data.errors);
                    else showToast(data.message || "Something went wrong.", "error");
                    return;
                }

                showToast(data.message || "Blog post saved.");
                closeModalFn();
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Post" : "Save Post";
                loadPosts();
            } catch (err) {
                const msg = err && err.name === "AbortError"
                    ? "Request timed out. Please try again."
                    : "Network error. Please try again.";
                showToast(msg, "error");
            } finally {
                clearTimeout(timeoutId);
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Post" : "Save Post";
            }
        });

        // ── Grid actions ──────────────────────────────────────────
        postsGrid.addEventListener("click", async (e) => {
            const btn = e.target.closest("[data-action]");
            if (!btn) return;
            const id = btn.dataset.id;
            const action = btn.dataset.action;

            if (action === "edit") {
                const res = await api(`/blogs/${id}`);
                if (res && res.ok) openModal(true, res.data);
            }

            if (action === "delete") {
                if (!confirm("Delete this blog post permanently?")) return;
                const res = await api(`/blogs/${id}`, { method: "DELETE" });
                if (res && res.ok) {
                    showToast(res.message || "Blog post deleted.");
                    await loadPosts();
                }
            }
        });

        // ── Init ────────────────────────────────────────────────
        loadPosts();
    })();
    </script>
@endsection