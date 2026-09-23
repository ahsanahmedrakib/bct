@extends('admin.layouts.admin')

@section('title', 'Locations | Admin Panel')
@section('pageTitle', 'Locations')
@section('pageSubtitle', 'Manage the offices shown on the public our-locations page')

@section('content')
    <div data-admin-page class="space-y-6">
        {{-- Info banner --}}
        <div class="rounded-xl border border-blue-100 bg-blue-50 px-5 py-4 text-sm text-blue-800">
            <i class="fa-solid fa-circle-info mr-1.5"></i>
            Locations you add here appear on the public "Our Locations" page. When you have locations in the
            database, only your locations are shown — the default seed content is hidden.
        </div>

        {{-- Stats cards --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Locations</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">With Phone</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                </div>
                <p id="statPhone" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">With Email</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-purple-50 text-purple-600">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                </div>
                <p id="statEmail" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
        </div>

        {{-- Locations list --}}
        <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <div class="flex flex-col gap-3 border-b border-slate-200 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-sm font-bold text-slate-900">Your Locations</h2>
                <div class="flex items-center gap-2">
                    <button id="refreshBtn" type="button"
                        class="flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        <i class="fa-solid fa-rotate"></i> Refresh
                    </button>
                    <button id="addLocationBtn" type="button"
                        class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#1066a1]">
                        <i class="fa-solid fa-plus"></i> Add Location
                    </button>
                </div>
            </div>

            {{-- Loading state --}}
            <div id="loadingState" class="flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-circle-notch animate-spin text-3xl text-[#157cc1]"></i>
                <p class="mt-3 text-sm text-slate-500">Loading locations...</p>
            </div>

            {{-- Empty state --}}
            <div id="emptyState" class="hidden flex flex-col items-center justify-center py-16">
                <i class="fa-solid fa-location-dot text-4xl text-slate-300"></i>
                <p class="mt-3 text-sm font-medium text-slate-500">No locations added yet</p>
                <button id="emptyAddBtn" type="button"
                    class="mt-4 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                    <i class="fa-solid fa-plus mr-1"></i> Add Your First Location
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

            {{-- Locations grid --}}
            <div id="gridWrap" class="hidden p-5">
                <div id="locationsGrid" class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3"></div>
            </div>
        </div>
    </div>

    {{-- Create / Edit Modal --}}
    <div id="locationModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60" data-close-modal></div>
        <div class="relative z-10 w-full max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                <div>
                    <h3 id="modalTitle" class="text-sm font-bold text-slate-900">Add Location</h3>
                    <p class="mt-0.5 text-xs text-slate-500">Office details shown to visitors</p>
                </div>
                <button type="button" data-close-modal
                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form id="locationForm" class="max-h-[75vh] overflow-y-auto px-5 py-4">
                <input type="hidden" id="formId">
                <div class="space-y-4">
                    <div>
                        <label for="formName" class="mb-1 block text-sm font-semibold text-slate-700">Name <span class="text-red-500">*</span></label>
                        <input type="text" id="formName"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="e.g. Head Office">
                        <p id="errorName" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formRegion" class="mb-1 block text-sm font-semibold text-slate-700">Region</label>
                        <input type="text" id="formRegion"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="e.g. Dhaka, Bangladesh">
                        <p id="errorRegion" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formAddress" class="mb-1 block text-sm font-semibold text-slate-700">Address</label>
                        <textarea id="formAddress" rows="2"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="House# 86, Road# Lake Drive, Sector#7, Uttara, Dhaka, Bangladesh"></textarea>
                        <p id="errorAddress" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="formPhone1" class="mb-1 block text-sm font-semibold text-slate-700">Phone 1</label>
                            <input type="text" id="formPhone1"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                placeholder="+880 1313010180">
                            <p id="errorPhone1" class="mt-1 hidden text-xs text-red-500"></p>
                        </div>
                        <div>
                            <label for="formPhone2" class="mb-1 block text-sm font-semibold text-slate-700">Phone 2</label>
                            <input type="text" id="formPhone2"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                placeholder="+880 9666777009">
                            <p id="errorPhone2" class="mt-1 hidden text-xs text-red-500"></p>
                        </div>
                    </div>
                    <div>
                        <label for="formEmail" class="mb-1 block text-sm font-semibold text-slate-700">Email</label>
                        <input type="email" id="formEmail"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="contact@bct.com.bd">
                        <p id="errorEmail" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div>
                        <label for="formDirections" class="mb-1 block text-sm font-semibold text-slate-700">Directions Link</label>
                        <input type="url" id="formDirections"
                            class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                            placeholder="https://www.google.com/maps/search/...">
                        <p id="errorDirectionsLink" class="mt-1 hidden text-xs text-red-500"></p>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="formColor" class="mb-1 block text-sm font-semibold text-slate-700">Accent Color</label>
                            <select id="formColor"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]">
                                <option value="blue">Blue</option>
                                <option value="purple">Purple</option>
                                <option value="emerald">Emerald</option>
                                <option value="indigo">Indigo</option>
                                <option value="rose">Rose</option>
                                <option value="amber">Amber</option>
                            </select>
                            <p id="errorColor" class="mt-1 hidden text-xs text-red-500"></p>
                        </div>
                        <div>
                            <label for="formSortOrder" class="mb-1 block text-sm font-semibold text-slate-700">Sort Order</label>
                            <input type="number" id="formSortOrder" min="1"
                                class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                                placeholder="e.g. 1">
                            <p id="errorSortOrder" class="mt-1 hidden text-xs text-red-500"></p>
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
                        <span id="formBtnText">Save Location</span>
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
        const locationsGrid = document.getElementById("locationsGrid");
        const refreshBtn = document.getElementById("refreshBtn");
        const retryBtn = document.getElementById("retryBtn");
        const addLocationBtn = document.getElementById("addLocationBtn");
        const emptyAddBtn = document.getElementById("emptyAddBtn");
        const statTotal = document.getElementById("statTotal");
        const statPhone = document.getElementById("statPhone");
        const statEmail = document.getElementById("statEmail");

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

            locationsGrid.innerHTML = state.data.map((loc) => `
                <div class="group flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex flex-1 flex-col p-4">
                        <div class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#157cc1]/10 text-[#157cc1]">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <div>
                                <h3 class="text-sm font-bold text-slate-900">${escapeHtml(loc.name)}</h3>
                                <p class="text-[11px] font-medium text-slate-500 uppercase tracking-wider">${escapeHtml(loc.region || '')}</p>
                            </div>
                        </div>
                        <p class="mt-3 text-xs text-slate-600 leading-relaxed">${escapeHtml(loc.address || '')}</p>
                        <p class="mt-2 text-xs text-slate-500">${escapeHtml([loc.phone1, loc.phone2].filter(Boolean).join(" · "))}</p>
                        <p class="mt-0.5 text-xs text-slate-500">${escapeHtml(loc.email || '')}</p>
                        <div class="mt-3 flex items-center gap-1.5 border-t border-slate-100 pt-3">
                            <button type="button" data-action="edit" data-id="${loc.id}"
                                class="flex items-center gap-1.5 rounded-lg border border-slate-200 px-3 py-1.5 text-[11px] font-semibold text-slate-600 hover:bg-slate-50">
                                <i class="fa-solid fa-pen-to-square text-[10px]"></i> Edit
                            </button>
                            <button type="button" data-action="delete" data-id="${loc.id}"
                                class="flex items-center gap-1.5 rounded-lg border border-red-200 px-3 py-1.5 text-[11px] font-semibold text-red-600 hover:bg-red-50">
                                <i class="fa-solid fa-trash-can text-[10px]"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>`).join("");
        }

        async function loadLocations() {
            setLoading(true);
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);
            try {
                const listRes = await api(`/locations`, { signal: controller.signal });

                if (listRes && listRes.ok) {
                    state.data = listRes.data || [];
                    statTotal.textContent = state.data.length;
                    statPhone.textContent = state.data.filter((l) => l.phone1 || l.phone2).length;
                    statEmail.textContent = state.data.filter((l) => l.email).length;

                    renderGrid();
                    setLoading(false);
                } else {
                    throw new Error("Failed");
                }
            } catch (e) {
                setLoading(false);
                show(errorState);
                document.getElementById("errorMsg").textContent = "Could not load locations. Please try again.";
            } finally {
                clearTimeout(timeoutId);
            }
        }

        refreshBtn.addEventListener("click", loadLocations);
        retryBtn.addEventListener("click", loadLocations);

        // ── Modal / Form ─────────────────────────────────────────
        const modal = document.getElementById("locationModal");
        const form = document.getElementById("locationForm");
        const formId = document.getElementById("formId");
        const formName = document.getElementById("formName");
        const formRegion = document.getElementById("formRegion");
        const formAddress = document.getElementById("formAddress");
        const formPhone1 = document.getElementById("formPhone1");
        const formPhone2 = document.getElementById("formPhone2");
        const formEmail = document.getElementById("formEmail");
        const formDirections = document.getElementById("formDirections");
        const formColor = document.getElementById("formColor");
        const formSortOrder = document.getElementById("formSortOrder");
        const formSubmitBtn = document.getElementById("formSubmitBtn");
        const formBtnText = document.getElementById("formBtnText");
        const formSpinner = document.getElementById("formSpinner");

        const setFormSpinner = (on) => {
            formSpinner.classList.toggle("animate-spin", on);
            if (on) formSpinner.removeAttribute("hidden");
            else formSpinner.setAttribute("hidden", "");
        };

        const openModal = (editMode = false, location = null) => {
            form.reset();
            clearErrors();
            formSubmitBtn.disabled = false;
            setFormSpinner(false);
            formId.value = "";
            formColor.value = "blue";
            document.getElementById("modalTitle").textContent = editMode ? "Edit Location" : "Add Location";
            formBtnText.textContent = editMode ? "Update Location" : "Save Location";

            if (editMode && location) {
                formId.value = location.id;
                formName.value = location.name || "";
                formRegion.value = location.region || "";
                formAddress.value = location.address || "";
                formPhone1.value = location.phone1 || "";
                formPhone2.value = location.phone2 || "";
                formEmail.value = location.email || "";
                formDirections.value = location.directions_link || "";
                formColor.value = location.color || "blue";
                formSortOrder.value = location.sort_order || "";
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

        addLocationBtn.addEventListener("click", () => openModal(false));
        emptyAddBtn.addEventListener("click", () => openModal(false));

        modal.addEventListener("click", (e) => { if (e.target.closest("[data-close-modal]")) closeModalFn(); });
        document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeModalFn(); });

        // ── Validation ───────────────────────────────────────────
        const validationSchema = {
            name: { required: "Location name is required." },
        };

        const fieldEls = { name: formName };
        const touched = { name: false };

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
            return validateField("name");
        }

        formName.addEventListener("blur", () => { touched.name = true; validateField("name"); });
        formName.addEventListener("input", () => { if (touched.name) validateField("name"); });

        function clearErrors() {
            ["errorName", "errorRegion", "errorAddress", "errorPhone1", "errorPhone2", "errorEmail", "errorDirectionsLink", "errorColor", "errorSortOrder"].forEach(id => {
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
            ["name", "region", "address", "phone1", "phone2", "email", "directions_link", "color", "sort_order"].forEach((key) => {
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
            fd.append("name", formName.value.trim());
            if (formRegion.value.trim()) fd.append("region", formRegion.value.trim());
            if (formAddress.value.trim()) fd.append("address", formAddress.value.trim());
            if (formPhone1.value.trim()) fd.append("phone1", formPhone1.value.trim());
            if (formPhone2.value.trim()) fd.append("phone2", formPhone2.value.trim());
            if (formEmail.value.trim()) fd.append("email", formEmail.value.trim());
            if (formDirections.value.trim()) fd.append("directions_link", formDirections.value.trim());
            fd.append("color", formColor.value);
            if (formSortOrder.value) fd.append("sort_order", formSortOrder.value);
            if (id) fd.append("_method", "POST");

            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);

            try {
                const url = id ? `/api/admin/locations/${id}` : "/api/admin/locations";
                const headers = { "Accept": "application/json" };
                if (token()) headers["Authorization"] = "Bearer " + token();

                const res = await fetch(url, { method: "POST", headers, body: fd, signal: controller.signal });
                const data = await res.json().catch(() => ({}));

                if (!res.ok || !data.success) {
                    if (data.errors) showErrors(data.errors);
                    else showToast(data.message || "Something went wrong.", "error");
                    return;
                }

                showToast(data.message || "Location saved.");
                closeModalFn();
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Location" : "Save Location";
                loadLocations();
            } catch (err) {
                const msg = err && err.name === "AbortError"
                    ? "Request timed out. Please try again."
                    : "Network error. Please try again.";
                showToast(msg, "error");
            } finally {
                clearTimeout(timeoutId);
                formSubmitBtn.disabled = false;
                setFormSpinner(false);
                formBtnText.textContent = id ? "Update Location" : "Save Location";
            }
        });

        // ── Grid actions ──────────────────────────────────────────
        locationsGrid.addEventListener("click", async (e) => {
            const btn = e.target.closest("[data-action]");
            if (!btn) return;
            const id = btn.dataset.id;
            const action = btn.dataset.action;

            if (action === "edit") {
                const res = await api(`/locations/${id}`);
                if (res && res.ok) openModal(true, res.data);
            }

            if (action === "delete") {
                if (!confirm("Delete this location permanently?")) return;
                const res = await api(`/locations/${id}`, { method: "DELETE" });
                if (res && res.ok) {
                    showToast(res.message || "Location deleted.");
                    await loadLocations();
                }
            }
        });

        // ── Init ────────────────────────────────────────────────
        loadLocations();
    })();
    </script>
@endsection