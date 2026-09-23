@extends('admin.layouts.admin')

@section('title', 'Pricing Plans | Admin Panel')
@section('pageTitle', 'Pricing Plans')
@section('pageSubtitle', 'Manage the pricing plans shown on the public pricing page')

@section('content')
    <div data-admin-page class="space-y-6">
        {{-- Info banner --}}
        <div class="rounded-xl border border-blue-100 bg-blue-50 px-5 py-4 text-sm text-blue-800">
            <i class="fa-solid fa-circle-info mr-1.5"></i>
            Plans you add here appear on the public pricing page. When you have plans in the database, only your
            plans are shown — the default seed content is hidden. The featured plan is highlighted.
        </div>

        {{-- Stats cards --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Plans</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-tags"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Featured</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-amber-50 text-amber-600">
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
                <p id="statFeatured" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Features</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-purple-50 text-purple-600">
                        <i class="fa-solid fa-list-check"></i>
                    </span>
                </div>
                <p id="statFeatures" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
        </div>

        {{-- Plans list --}}
        <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <div class="flex flex-col gap-3 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-sm font-bold text-slate-900">Your Pricing Plans</h2>
                <div class="flex items-center gap-2">
                    <button id="refreshBtn" type="button"
                        class="flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        <i class="fa-solid fa-rotate"></i> Refresh
                    </button>
                    <button id="addPlanBtn" type="button"
                        class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#1066a1]">
                        <i class="fa-solid fa-plus"></i> Add Plan
                    </button>
                </div>
            </div>

            {{-- Loading state --}}
            <div id="loadingState" class="flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-circle-notch animate-spin text-3xl text-[#157cc1]"></i>
                <p class="mt-3 text-sm text-slate-500">Loading pricing plans...</p>
            </div>

            {{-- Empty state --}}
            <div id="emptyState" class="hidden flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-tags text-4xl text-slate-300"></i>
                <p class="mt-3 text-sm font-medium text-slate-500">No pricing plans added yet</p>
                <button id="emptyAddBtn" type="button"
                    class="mt-4 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                    <i class="fa-solid fa-plus mr-1"></i> Add Your First Plan
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

            {{-- Plans grid --}}
            <div id="gridWrap" class="hidden p-5">
                <div id="plansGrid" class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3"></div>
            </div>
        </div>
    </div>

    {{-- Create / Edit Modal --}}
    <div id="planModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60" data-close-modal></div>
        <div class="relative z-10 w-full max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                <div>
                    <h3 id="modalTitle" class="text-sm font-bold text-slate-900">Add Plan</h3>
                    <p class="mt-0.5 text-xs text-slate-500">List one feature per line</p>
                </div>
                <button type="button" data-close-modal
                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form id="planForm" class="max-h-[75vh] overflow-y-auto px-5 py-4">
                <input type="hidden" id="formId">
                <div class="space-y-4">
                    <div>
                        <label for="formName" class="mb-1 block text-sm font-semibold text-slate-700">Plan Name <span class="text-red-500">*</span></label>
                        <input type="text" id="formName"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="e.g. Standard Package">
                        <p id="errorName" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="formPrice" class="mb-1 block text-sm font-semibold text-slate-700">Price <span class="text-red-500">*</span></label>
                            <input type="text" id="formPrice"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                placeholder="e.g. ৳299.00">
                            <p id="errorPrice" class="mt-1 hidden text-xs text-red-500"></p>
                        </div>
                        <div>
                            <label for="formPeriod" class="mb-1 block text-sm font-semibold text-slate-700">Period</label>
                            <input type="text" id="formPeriod"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                placeholder="e.g. /Monthly">
                            <p id="errorPeriod" class="mt-1 hidden text-xs text-red-500"></p>
                        </div>
                    </div>
                    <div>
                        <label for="formFeatures" class="mb-1 block text-sm font-semibold text-slate-700">Features</label>
                        <textarea id="formFeatures" rows="5"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="Community Support&#10;Dedicated Tech Experts&#10;Unlimited Storage"></textarea>
                        <p class="mt-1 text-xs text-slate-400">One feature per line.</p>
                        <p id="errorFeatures" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div class="flex items-center gap-3 rounded-lg border border-slate-200 bg-slate-50 px-4 py-3">
                        <input type="checkbox" id="formFeatured"
                            class="h-4 w-4 rounded border-slate-300 text-[#157cc1] focus:ring-[#157cc1]">
                        <label for="formFeatured" class="text-sm font-semibold text-slate-700">Featured plan (highlighted)</label>
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
                        <span id="formBtnText">Save Plan</span>
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
        const plansGrid = document.getElementById("plansGrid");
        const refreshBtn = document.getElementById("refreshBtn");
        const retryBtn = document.getElementById("retryBtn");
        const addPlanBtn = document.getElementById("addPlanBtn");
        const emptyAddBtn = document.getElementById("emptyAddBtn");
        const statTotal = document.getElementById("statTotal");
        const statFeatured = document.getElementById("statFeatured");
        const statFeatures = document.getElementById("statFeatures");

        let state = { data: [] };

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

            plansGrid.innerHTML = state.data.map((plan) => `
                <div class="group flex flex-col overflow-hidden rounded-xl border ${plan.featured ? 'border-amber-300 bg-amber-50/50' : 'border-slate-200 bg-white'} shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex flex-1 flex-col p-4">
                        <div class="flex items-center justify-between gap-2">
                            <h3 class="text-sm font-bold text-slate-900 truncate">${escapeHtml(plan.name)}</h3>
                            ${plan.featured ? '<span class="rounded-full bg-amber-500 px-2.5 py-0.5 text-[10px] font-bold text-white">Popular</span>' : ""}
                        </div>
                        <p class="mt-1 text-lg font-extrabold text-slate-900">${escapeHtml(plan.price || '')}<span class="text-xs font-normal text-slate-500">${escapeHtml(plan.period || '')}</span></p>
                        <ul class="mt-3 space-y-1.5">
                            ${(plan.features || []).map((f) => `<li class="flex items-center gap-2 text-xs text-slate-600"><i class="fa-solid fa-check text-[#157cc1] text-[10px]"></i>${escapeHtml(f)}</li>`).join("")}
                        </ul>
                        <div class="mt-3 flex items-center gap-1.5 border-t border-slate-100 pt-3">
                            <button type="button" data-action="edit" data-id="${plan.id}"
                                class="flex items-center gap-1.5 rounded-lg border border-slate-200 px-3 py-1.5 text-[11px] font-semibold text-slate-600 hover:bg-slate-50">
                                <i class="fa-solid fa-pen-to-square text-[10px]"></i> Edit
                            </button>
                            <button type="button" data-action="delete" data-id="${plan.id}"
                                class="flex items-center gap-1.5 rounded-lg border border-red-200 px-3 py-1.5 text-[11px] font-semibold text-red-600 hover:bg-red-50">
                                <i class="fa-solid fa-trash-can text-[10px]"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>`).join("");
        }

        async function loadPlans() {
            setLoading(true);
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);
            try {
                const listRes = await api(`/pricing-plans`, { signal: controller.signal });

                if (listRes && listRes.ok) {
                    state.data = listRes.data || [];
                    statTotal.textContent = state.data.length;
                    statFeatured.textContent = state.data.filter((p) => p.featured).length;
                    statFeatures.textContent = state.data.reduce((n, p) => n + (p.features || []).length, 0);

                    renderGrid();
                    setLoading(false);
                } else {
                    throw new Error("Failed");
                }
            } catch (e) {
                setLoading(false);
                show(errorState);
                document.getElementById("errorMsg").textContent = "Could not load pricing plans. Please try again.";
            } finally {
                clearTimeout(timeoutId);
            }
        }

        refreshBtn.addEventListener("click", loadPlans);
        retryBtn.addEventListener("click", loadPlans);

        // ── Modal / Form ─────────────────────────────────────────
        const modal = document.getElementById("planModal");
        const form = document.getElementById("planForm");
        const formId = document.getElementById("formId");
        const formName = document.getElementById("formName");
        const formPrice = document.getElementById("formPrice");
        const formPeriod = document.getElementById("formPeriod");
        const formFeatures = document.getElementById("formFeatures");
        const formFeatured = document.getElementById("formFeatured");
        const formSortOrder = document.getElementById("formSortOrder");
        const formSubmitBtn = document.getElementById("formSubmitBtn");
        const formBtnText = document.getElementById("formBtnText");
        const formSpinner = document.getElementById("formSpinner");

        const setFormSpinner = (on) => {
            formSpinner.classList.toggle("animate-spin", on);
            if (on) formSpinner.removeAttribute("hidden");
            else formSpinner.setAttribute("hidden", "");
        };

        const openModal = (editMode = false, plan = null) => {
            form.reset();
            clearErrors();
            formSubmitBtn.disabled = false;
            setFormSpinner(false);
            formId.value = "";
            formFeatured.checked = false;
            document.getElementById("modalTitle").textContent = editMode ? "Edit Plan" : "Add Plan";
            formBtnText.textContent = editMode ? "Update Plan" : "Save Plan";

            if (editMode && plan) {
                formId.value = plan.id;
                formName.value = plan.name || "";
                formPrice.value = plan.price || "";
                formPeriod.value = plan.period || "";
                formFeatures.value = (plan.features || []).join("\n");
                formFeatured.checked = !!plan.featured;
                formSortOrder.value = plan.sort_order || "";
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

        addPlanBtn.addEventListener("click", () => openModal(false));
        emptyAddBtn.addEventListener("click", () => openModal(false));

        modal.addEventListener("click", (e) => { if (e.target.closest("[data-close-modal]")) closeModalFn(); });
        document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeModalFn(); });

        // ── Validation ───────────────────────────────────────────
        const validationSchema = {
            name: { required: "Plan name is required." },
            price: { required: "Price is required." },
        };

        const fieldEls = { name: formName, price: formPrice };
        const touched = { name: false, price: false };

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

        function validateAll() {
            let valid = true;
            ["name", "price"].forEach((key) => {
                if (!validateField(key)) valid = false;
            });
            return valid;
        }

        ["name", "price"].forEach((key) => {
            fieldEls[key].addEventListener("blur", () => {
                touched[key] = true;
                validateField(key);
            });
            fieldEls[key].addEventListener("input", () => {
                if (touched[key]) validateField(key);
            });
        });

        function clearErrors() {
            ["errorName", "errorPrice", "errorPeriod", "errorFeatures", "errorSortOrder"].forEach(id => {
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
            ["name", "price", "period", "features", "sort_order"].forEach((key) => {
                if (errors[key]) {
                    const id = "error" + key.charAt(0).toUpperCase() + key.slice(1);
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
            fd.append("name", formName.value.trim());
            fd.append("price", formPrice.value.trim());
            if (formPeriod.value.trim()) fd.append("period", formPeriod.value.trim());
            if (formFeatures.value.trim()) fd.append("features", formFeatures.value);
            fd.append("featured", formFeatured.checked ? "1" : "0");
            if (formSortOrder.value) fd.append("sort_order", formSortOrder.value);
            if (id) fd.append("_method", "POST");

            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);

            try {
                const url = id ? `/api/admin/pricing-plans/${id}` : "/api/admin/pricing-plans";
                const headers = { "Accept": "application/json" };
                if (token()) headers["Authorization"] = "Bearer " + token();

                const res = await fetch(url, { method: "POST", headers, body: fd, signal: controller.signal });
                const data = await res.json().catch(() => ({}));

                if (!res.ok || !data.success) {
                    if (data.errors) showErrors(data.errors);
                    else showToast(data.message || "Something went wrong.", "error");
                    return;
                }

                showToast(data.message || "Pricing plan saved.");
                closeModalFn();
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Plan" : "Save Plan";
                loadPlans();
            } catch (err) {
                const msg = err && err.name === "AbortError"
                    ? "Request timed out. Please try again."
                    : "Network error. Please try again.";
                showToast(msg, "error");
            } finally {
                clearTimeout(timeoutId);
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Plan" : "Save Plan";
            }
        });

        // ── Grid actions ──────────────────────────────────────────
        plansGrid.addEventListener("click", async (e) => {
            const btn = e.target.closest("[data-action]");
            if (!btn) return;
            const id = btn.dataset.id;
            const action = btn.dataset.action;

            if (action === "edit") {
                const res = await api(`/pricing-plans/${id}`);
                if (res && res.ok) openModal(true, res.data);
            }

            if (action === "delete") {
                if (!confirm("Delete this pricing plan permanently?")) return;
                const res = await api(`/pricing-plans/${id}`, { method: "DELETE" });
                if (res && res.ok) {
                    showToast(res.message || "Pricing plan deleted.");
                    await loadPlans();
                }
            }
        });

        // ── Init ────────────────────────────────────────────────
        loadPlans();
    })();
    </script>
@endsection