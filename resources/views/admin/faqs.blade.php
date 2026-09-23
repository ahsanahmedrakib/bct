@extends('admin.layouts.admin')

@section('title', 'FAQs | Admin Panel')
@section('pageTitle', 'FAQs')
@section('pageSubtitle', 'Manage the FAQ items shown on the public FAQ page')

@section('content')
    <div class="space-y-6">

        {{-- Info banner --}}
        <div class="flex items-start gap-3 rounded-xl border border-blue-100 bg-blue-50 px-5 py-4 text-sm text-blue-800">
            <i class="fa-solid fa-circle-info mt-0.5"></i>
            <p>
                FAQs added here appear on the public FAQ page. While your own FAQs exist, the seed
                content is hidden. Answers support HTML (e.g. lists or links).
            </p>
        </div>

        {{-- Stats row --}}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">Total FAQs</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-circle-question"></i>
                    </span>
                </div>
                <p id="statTotal" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
            </div>
            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-slate-500">With Answer</p>
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                        <i class="fa-solid fa-check-double"></i>
                    </span>
                </div>
                <p id="statWithAnswer" class="mt-2 text-2xl font-extrabold text-slate-900">—</p>
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
                <h2 class="text-sm font-bold text-slate-900">FAQ Entries</h2>
                <p class="mt-0.5 text-xs text-slate-500">Question, answer and display order.</p>
            </div>
            <div class="flex items-center gap-2">
                <button id="refreshBtn" type="button"
                    class="flex items-center gap-2 rounded-lg border border-slate-300 px-3 py-1.5 text-xs font-semibold text-slate-600 hover:bg-slate-50">
                    <i class="fa-solid fa-rotate"></i> Refresh
                </button>
                <button id="addFaqBtn" type="button"
                    class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-3 py-1.5 text-xs font-semibold text-white hover:bg-[#1066a1]">
                    <i class="fa-solid fa-plus"></i> Add FAQ
                </button>
            </div>
        </div>

        {{-- Loading state --}}
        <div id="loadingState" class="flex flex-col items-center justify-center py-16">
            <i class="fa-solid fa-circle-notch animate-spin text-3xl text-[#157cc1]"></i>
            <p class="mt-3 text-sm text-slate-500">Loading FAQs...</p>
        </div>

        {{-- Empty state --}}
        <div id="emptyState" class="hidden flex-col items-center justify-center py-16">
            <i class="fa-solid fa-circle-question text-4xl text-slate-300"></i>
            <p class="mt-3 text-sm font-medium text-slate-500">No FAQs added yet</p>
            <button id="emptyAddBtn" type="button"
                class="mt-4 flex items-center gap-2 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                <i class="fa-solid fa-plus"></i> Add Your First FAQ
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
                            <th class="px-4 py-3 font-semibold">Question</th>
                            <th class="px-4 py-3 font-semibold">Answer</th>
                            <th class="px-4 py-3 font-semibold">Order</th>
                            <th class="px-4 py-3 text-right font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="faqsBody" class="divide-y divide-slate-100"></tbody>
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
    <div id="faqModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60" data-close-modal></div>
        <div class="relative z-10 w-full max-w-lg rounded-xl bg-white p-6 shadow-2xl">
            <div class="mb-4 flex items-center justify-between">
                <h3 id="modalTitle" class="text-sm font-bold text-slate-900">Add FAQ</h3>
                <button type="button" data-close-modal
                    class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-600">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <form id="faqForm" class="space-y-4">
                <input type="hidden" id="formId">
                <div>
                    <label for="formQuestion" class="mb-1 block text-sm font-semibold text-slate-700">Question <span class="text-red-500">*</span></label>
                    <input type="text" id="formQuestion"
                        class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                        placeholder="e.g. How can IT solutions benefit my business?">
                    <p id="errorQuestion" class="mt-1 hidden text-xs text-red-500"></p>
                </div>
                <div>
                    <label for="formAnswer" class="mb-1 block text-sm font-semibold text-slate-700">Answer <span class="text-red-500">*</span></label>
                    <textarea id="formAnswer" rows="5"
                        class="w-full rounded-lg border border-slate-300 px-3 py-2.5 text-base focus:border-[#157cc1] focus:outline-none focus:ring-1 focus:ring-[#157cc1]"
                        placeholder="Type the answer. HTML is supported."></textarea>
                    <p id="errorAnswer" class="mt-1 hidden text-xs text-red-500"></p>
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
                    <button type="submit" id="faqSubmitBtn"
                        class="flex items-center gap-2 rounded-lg bg-[#157cc1] px-4 py-2 text-xs font-semibold text-white hover:bg-[#1066a1]">
                        <i id="faqSpinner" hidden class="fa-solid fa-circle-notch animate-spin"></i>
                        <span id="faqBtnText">Save FAQ</span>
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
                listWrap: $('listWrap'), body: $('faqsBody'), pageInfo: $('pageInfo'),
                pageSize: $('pageSize'),
                prev: $('prevPage'), next: $('nextPage'), pageNumbers: $('pageNumbers'),
                statTotal: $('statTotal'), statWithAnswer: $('statWithAnswer'), statShown: $('statShown'),
                errorMsg: $('errorMsg'), retry: $('retryBtn'), refresh: $('refreshBtn'),
                add: $('addFaqBtn'), emptyAdd: $('emptyAddBtn'),
                modal: $('faqModal'), form: $('faqForm'), formId: $('formId'),
                question: $('formQuestion'), answer: $('formAnswer'), sortOrder: $('formSortOrder'),
                modalTitle: $('modalTitle'), submitBtn: $('faqSubmitBtn'),
                spinner: $('faqSpinner'), btnText: $('faqBtnText'),
            };

            const show = (e) => e && e.classList.remove('hidden');
            const hide = (e) => e && e.classList.add('hidden');

            function setStatTotal(n) { el.statTotal.textContent = n; }
            function setStatWithAnswer(n) { el.statWithAnswer.textContent = n; }
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
                        <td class="max-w-[280px] px-4 py-3 font-semibold text-slate-900">${escapeHtml(f.question)}</td>
                        <td class="max-w-[380px] px-4 py-3 text-slate-600 line-clamp-2">${escapeHtml(f.answer)}</td>
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
                    el.pageInfo.textContent = 'No FAQs';
                    el.pageNumbers.innerHTML = '';
                    return;
                }
                const { total, per_page, current_page, last_page } = pag;
                el.pageInfo.textContent = `Showing ${(current_page - 1) * per_page + 1}–${Math.min(current_page * per_page, total)} of ${total} FAQs`;
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
                    const res = await api(`/faqs?page=${state.page}&per_page=${state.size}`);
                    if (!res || res.status === 401) return;
                    const listRes = res.ok || res.success ? res : { ok: false, message: res && res.message };
                    if (!listRes.ok) {
                        el.errorMsg.textContent = 'Could not load FAQs. Please try again.';
                        show(el.error); hide(el.loading);
                        return;
                    }
                    state.data = (res.data || []).filter((f) => f && typeof f.id !== 'undefined');
                    setStatTotal(res.pagination ? res.pagination.total : 0);
                    setStatWithAnswer(state.data.filter((f) => f.answer).length);
                    renderRows();
                    renderPagination(res.pagination);
                    hide(el.loading);
                } catch (err) {
                    el.errorMsg.textContent = 'Network error. Please check your connection.';
                    show(el.error); hide(el.loading);
                }
            }

            function clearErrors() {
                ['Question', 'Answer', 'SortOrder'].forEach((k) => {
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
                if (!el.question.value.trim()) { showError('Question', 'Question is required.'); ok = false; }
                if (!el.answer.value.trim()) { showError('Answer', 'Answer is required.'); ok = false; }
                return ok;
            }

            function openModal(faq) {
                clearErrors();
                el.form.reset();
                let isEdit = !!faq;
                el.formId.value = faq ? faq.id : '';
                el.modalTitle.textContent = faq ? 'Edit FAQ' : 'Add FAQ';
                el.btnText.textContent = faq ? 'Update FAQ' : 'Save FAQ';
                el.modal.classList.remove('hidden');
                el.modal.classList.add('flex');
                el.question.focus();
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
                        const res = await api(`/faqs/${id}`);
                        if (res && res.success && res.data) {
                            clearErrors();
                            el.form.reset();
                            el.formId.value = res.data.id;
                            el.modalTitle.textContent = 'Edit FAQ';
                            el.btnText.textContent = 'Update FAQ';
                            el.question.value = res.data.question || '';
                            el.answer.value = res.data.answer || '';
                            el.sortOrder.value = res.data.sort_order || '';
                            el.modal.classList.remove('hidden');
                            el.modal.classList.add('flex');
                        }
                    } catch (err) { /* ignore */ }
                } else if (action === 'delete') {
                    if (!confirm('Delete this FAQ permanently?')) return;
                    try {
                        const res = await api(`/faqs/${id}`, { method: 'DELETE' });
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
                    question: el.question.value.trim(),
                    answer: el.answer.value,
                    sort_order: el.sortOrder.value ? Number(el.sortOrder.value) : undefined,
                };
                try {
                    const res = await api(id ? `/faqs/${id}` : '/faqs', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(payload),
                    });
                    if (res.success) {
                        closeModal();
                        if (id) { load(); } else { state.page = 1; load(); }
                    } else if (res.errors) {
                        Object.keys(res.errors).forEach((k) => {
                            const map = { question: 'Question', answer: 'Answer', sort_order: 'SortOrder' };
                            if (map[k]) showError(map[k], res.errors[k][0]);
                        });
                    }
                } catch (err) { /* ignore */ }
                finally {
                    el.submitBtn.disabled = false;
                    el.spinner.hidden = true;
                    el.btnText.textContent = id ? 'Update FAQ' : 'Save FAQ';
                }
            });

            load();
        })();
    </script>
@endsection
