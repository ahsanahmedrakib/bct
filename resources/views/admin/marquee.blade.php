@extends('admin.layouts.admin')

@section('title', 'Marquee | Admin Panel')
@section('pageTitle', 'Marquee')
@section('pageSubtitle', 'Manage the scrolling text shown on the public homepage')

@section('content')
    <div class="space-y-6">

        {{-- Info banner --}}
        <div class="flex items-start gap-3 rounded-xl border border-blue-100 bg-blue-50 px-5 py-4 text-sm text-blue-800">
            <i class="fa-solid fa-circle-info mt-0.5"></i>
            <p>
                Marquee items added here appear as scrolling text on the public homepage. While
                your own items exist, the seed content is hidden.
            </p>
        </div>

        {{-- Stats row --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total Items</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">On This Page</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-purple-50 text-purple-600">
                        <i class="fa-solid fa-list-ol"></i>
                    </span>
                </div>
                <p id="statShown" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
        </div>

        {{-- Toolbar --}}
        <div class="flex flex-col gap-3 rounded-xl border border-slate-200 bg-white p-4 shadow-sm sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h2 class="text-sm font-bold text-slate-900">Marquee Items</h2>
                <p class="mt-0.5 text-xs text-slate-500">Text and display order.</p>
            </div>
            <div class="flex items-center gap-2">
                <button id="refreshBtn" type="button"
                    class="flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                    <i class="fa-solid fa-rotate"></i> Refresh
                </button>
                <button id="addMarqueeBtn" type="button"
                    class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#1066a1]">
                    <i class="fa-solid fa-plus"></i> Add Item
                </button>
            </div>
        </div>

        {{-- Loading state --}}
        <div id="loadingState" class="flex flex-col items-center justify-center py-16">
            <i class="fa-solid fa-circle-notch animate-spin text-3xl text-[#157cc1]"></i>
            <p class="mt-3 text-sm text-slate-500">Loading marquee items...</p>
        </div>

        {{-- Empty state --}}
        <div id="emptyState" class="hidden flex-col items-center justify-center py-16">
            <i class="fa-solid fa-star text-4xl text-slate-300"></i>
            <p class="mt-3 text-sm font-medium text-slate-500">No marquee items added yet</p>
            <button id="emptyAddBtn" type="button"
                class="mt-4 flex items-center gap-2 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                <i class="fa-solid fa-plus"></i> Add Your First Item
            </button>
        </div>

        <div id="errorState" class="hidden flex-col items-center justify-center py-16">
            <i class="fa-solid fa-triangle-exclamation text-4xl text-red-300"></i>
            <p id="errorMsg" class="mt-3 text-sm font-medium text-red-600"></p>
            <button id="retryBtn" type="button"
                class="mt-4 flex items-center gap-2 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                <i class="fa-solid fa-rotate"></i> Try Again
            </button>
        </div>

        <div id="listWrap" class="hidden overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="border-b border-slate-200 bg-slate-50 text-xs uppercase tracking-wider text-slate-500">
                        <tr>
                            <th class="px-4 py-3 font-semibold">Text</th>
                            <th class="px-4 py-3 font-semibold">Order</th>
                            <th class="px-4 py-3 text-right font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="marqueeBody" class="divide-y divide-slate-100"></tbody>
                </table>
            </div>
            <div class="flex flex-col items-center justify-between gap-3 border-t border-slate-200 px-4 py-3 sm:flex-row"
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

    {{-- Modal --}}
    <div id="marqueeModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60" data-close-modal></div>
        <div class="relative z-10 w-full max-w-lg rounded-xl bg-white p-6 shadow-2xl">
            <div class="mb-4 flex items-center justify-between">
                <h3 id="modalTitle" class="text-sm font-bold text-slate-900">Add Marquee Item</h3>
                <button type="button" data-close-modal
                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form id="marqueeForm" class="space-y-4">
                <input type="hidden" id="formId">
                <div>
                    <label for="formText" class="mb-1 block text-sm font-semibold text-slate-700">Text <span class="text-red-500">*</span></label>
                    <input type="text" id="formText"
                        class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                        placeholder="e.g. NETWORK SETUP">
                    <p id="errorText" class="mt-1 hidden text-xs text-red-500"></p>
                </div>
                <div>
                    <label for="formSortOrder" class="mb-1 block text-sm font-semibold text-slate-700">Sort Order</label>
                    <input type="number" id="formSortOrder" min="1"
                        class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                        placeholder="e.g. 1">
                    <p id="errorSortOrder" class="mt-1 hidden text-xs text-red-500"></p>
                </div>
                <div class="flex items-center justify-end gap-2 border-t border-slate-200 pt-4">
                    <button type="button" data-close-modal
                        class="rounded-lg border border-slate-300 px-4 py-2 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                        Cancel
                    </button>
                    <button type="submit" id="marqueeSubmitBtn"
                        class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                        <i id="marqueeSpinner" hidden class="fa-solid fa-circle-notch animate-spin"></i>
                        <span id="marqueeBtnText">Save Item</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        (() => {
            const TOKEN_KEY = 'bct_admin_token';
            const token = () => localStorage.getItem(TOKEN_KEY);
            const api = window.BctAdminApi || ((path, options = {}) => {
                const headers = { ...(options.headers || {}) };
                headers['Accept'] = 'application/json';
                if (token()) headers['Authorization'] = 'Bearer ' + token();
                return fetch('/api/admin' + path, { ...options, headers })
                    .then(async (res) => {
                        const data = await res.json().catch(() => ({}));
                        if (res.status === 401) {
                            localStorage.removeItem(TOKEN_KEY);
                            window.location.href = '/admin/login';
                            return null;
                        }
                        return { ok: res.ok, status: res.status, ...data };
                    });
            });

            const $ = (id) => document.getElementById(id);
            const state = { page: 1, size: 10, data: [], total: 0 };

            const el = {
                loading: $('loadingState'), empty: $('emptyState'), error: $('errorState'),
                listWrap: $('listWrap'), body: $('marqueeBody'), pageInfo: $('pageInfo'),
                pageSize: $('pageSize'),
                prev: $('prevPage'), next: $('nextPage'), pageNumbers: $('pageNumbers'),
                statTotal: $('statTotal'), statShown: $('statShown'),
                errorMsg: $('errorMsg'), retry: $('retryBtn'), refresh: $('refreshBtn'),
                add: $('addMarqueeBtn'), emptyAdd: $('emptyAddBtn'),
                modal: $('marqueeModal'), form: $('marqueeForm'), formId: $('formId'),
                text: $('formText'), sortOrder: $('formSortOrder'),
                modalTitle: $('modalTitle'), submitBtn: $('marqueeSubmitBtn'),
                spinner: $('marqueeSpinner'), btnText: $('marqueeBtnText'),
            };

            const show = (e) => e && e.classList.remove('hidden');
            const hide = (e) => e && e.classList.add('hidden');

            function setStatTotal(n) { el.statTotal.textContent = n; }
            function setStatShown(n) { el.statShown.textContent = n; }

            function escapeHtml(s) {
                if (s === null || s === undefined) return '';
                return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#039;');
            }

            function renderRows() {
                if (!state.data.length) {
                    hide(el.listWrap); show(el.empty);
                    setStatShown('0'); el.pageInfo.textContent = '';
                    return;
                }
                show(el.listWrap); hide(el.empty);
                el.body.innerHTML = state.data.map((f) => `
                    <tr>
                        <td class="max-w-[380px] px-4 py-3 font-semibold text-slate-900">${escapeHtml(f.text)}</td>
                        <td class="px-4 py-3 text-slate-500">${f.sort_order || '—'}</td>
                        <td class="px-4 py-3 text-right whitespace-nowrap">
                            <button type="button" data-action="edit" data-id="${f.id}"
                                class="mr-1 inline-flex items-center gap-1.5 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>
                            <button type="button" data-action="delete" data-id="${f.id}"
                                class="inline-flex items-center gap-1.5 rounded-lg border border-red-200 px-3 py-1.5 text-xs font-semibold text-red-600 hover:bg-red-50">
                                <i class="fa-solid fa-trash-can"></i> Delete
                            </button>
                        </td>
                    </tr>
                `).join('');
            }

            function renderPagination(pag) {
                setStatShown(state.data.length);
                if (!pag || state.data.length === 0) {
                    el.prev.disabled = true; el.next.disabled = true;
                    el.pageInfo.textContent = 'No items';
                    el.pageNumbers.innerHTML = '';
                    return;
                }
                const { total, per_page, current_page, last_page } = pag;
                el.pageInfo.textContent = `Showing ${(current_page - 1) * per_page + 1}–${Math.min(current_page * per_page, total)} of ${total} items`;
                el.prev.disabled = current_page <= 1;
                el.next.disabled = current_page >= last_page;
                let html = '';
                for (let i = 1; i <= last_page; i++) {
                    if (last_page > 7 && i > 2 && i < last_page - 1 && Math.abs(i - current_page) > 1) {
                        if (!html.includes('…')) html += '<span class="text-xs text-slate-400 px-1">…</span>';
                        continue;
                    }
                    html += `<button type="button" data-page="${i}"
                        class="h-8 w-8 rounded-lg text-xs font-semibold ${i === current_page ? 'bg-[#157cc1] text-white' : 'text-slate-600 hover:bg-slate-100'}">${i}</button>`;
                }
                el.pageNumbers.innerHTML = html;
            }

            async function load() {
                show(el.loading); hide(el.empty); hide(el.error); hide(el.listWrap);
                try {
                    const res = await api(`/marquee?page=${state.page}&per_page=${state.size}`);
                    if (!res || res.status === 401) return;
                    const listRes = res.ok || res.success ? res : { ok: false, message: res && res.message };
                    if (!listRes.ok) {
                        el.errorMsg.textContent = 'Could not load marquee items. Please try again.';
                        show(el.error); hide(el.loading);
                        return;
                    }
                    state.data = (res.data || []).filter((f) => f && typeof f.id !== 'undefined');
                    setStatTotal(res.pagination ? res.pagination.total : 0);
                    renderRows();
                    renderPagination(res.pagination);
                    hide(el.loading);
                } catch (err) {
                    el.errorMsg.textContent = 'Network error. Please check your connection.';
                    show(el.error); hide(el.loading);
                }
            }

            function clearErrors() {
                ['Text', 'SortOrder'].forEach((k) => {
                    const e = $(`error${k}`), f = $(`form${k}`);
                    if (e) { e.textContent = ''; e.classList.add('hidden'); }
                    if (f) { f.classList.remove('border-red-400'); f.classList.add('border-slate-300'); }
                });
            }

            function showError(key, msg) {
                const e = $(`error${key}`), f = $(`form${key}`);
                if (e) { e.textContent = msg; e.classList.remove('hidden'); }
                if (f) { f.classList.add('border-red-400'); }
            }

            function validate() {
                let ok = true;
                if (!el.text.value.trim()) { showError('Text', 'Text is required.'); ok = false; }
                return ok;
            }

            function openModal(item) {
                clearErrors();
                el.form.reset();
                let isEdit = !!item;
                el.formId.value = item ? item.id : '';
                el.modalTitle.textContent = item ? 'Edit Marquee Item' : 'Add Marquee Item';
                el.btnText.textContent = item ? 'Update Item' : 'Save Item';
                el.modal.classList.remove('hidden');
                el.modal.classList.add('flex');
                el.text.focus();
            }

            function closeModal() {
                el.modal.classList.add('hidden');
                el.modal.classList.remove('flex');
            }

            el.refresh.addEventListener('click', () => load());
            el.retry.addEventListener('click', () => load());
            el.add.addEventListener('click', () => openModal());
            el.emptyAdd.addEventListener('click', () => openModal());
            el.modal.addEventListener('click', (e) => {
                if (e.target.closest('[data-close-modal]')) closeModal();
            });

            el.body.addEventListener('click', async (e) => {
                const btn = e.target.closest('[data-action]');
                if (!btn) return;
                const { action, id } = btn.dataset;
                if (action === 'edit') {
                    try {
                        const res = await api(`/marquee/${id}`);
                        if (res && res.success && res.data) {
                            clearErrors();
                            el.form.reset();
                            el.formId.value = res.data.id;
                            el.modalTitle.textContent = 'Edit Marquee Item';
                            el.btnText.textContent = 'Update Item';
                            el.text.value = res.data.text || '';
                            el.sortOrder.value = res.data.sort_order || '';
                            el.modal.classList.remove('hidden');
                            el.modal.classList.add('flex');
                        }
                    } catch (err) { /* ignore */ }
                } else if (action === 'delete') {
                    if (!confirm('Delete this marquee item permanently?')) return;
                    try {
                        const res = await api(`/marquee/${id}`, { method: 'DELETE' });
                        if (res && res.success) {
                            if (state.data.length === 1 && state.page > 1) state.page--;
                            load();
                        }
                    } catch (err) { /* ignore */ }
                }
            });

            el.pageNumbers.addEventListener('click', (e) => {
                const btn = e.target.closest('[data-page]');
                if (!btn) return;
                state.page = Number(btn.dataset.page);
                load();
            });
            el.pageSize.addEventListener('change', () => { state.size = Number(el.pageSize.value); state.page = 1; load(); });
            el.prev.addEventListener('click', () => { if (state.page > 1) { state.page--; load(); } });
            el.next.addEventListener('click', () => { state.page++; load(); });

            el.form.addEventListener('submit', async (e) => {
                e.preventDefault();
                clearErrors();
                if (!validate()) return;
                const id = el.formId.value;
                el.submitBtn.disabled = true;
                el.spinner.hidden = false;
                el.btnText.textContent = 'Saving...';
                const payload = {
                    text: el.text.value.trim(),
                    sort_order: el.sortOrder.value ? Number(el.sortOrder.value) : undefined,
                };
                try {
                    const res = await api(id ? `/marquee/${id}` : '/marquee', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(payload),
                    });
                    if (res.success) {
                        closeModal();
                        if (id) { load(); } else { state.page = 1; load(); }
                    } else if (res.errors) {
                        Object.keys(res.errors).forEach((k) => {
                            const map = { text: 'Text', sort_order: 'SortOrder' };
                            if (map[k]) showError(map[k], res.errors[k][0]);
                        });
                    }
                } catch (err) { /* ignore */ }
                finally {
                    el.submitBtn.disabled = false;
                    el.spinner.hidden = true;
                    el.btnText.textContent = id ? 'Update Item' : 'Save Item';
                }
            });

            load();
        })();
    </script>
@endsection