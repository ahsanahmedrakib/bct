@extends('layouts.app')

@section('title', 'Contact Us | Bismillah Computer & Technology')
@section('description', 'Get in touch with Bismillah Computer & Technology. Reach out for IT solutions, cloud services, cyber security, voice and internet solutions in Bangladesh.')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div
            class="reveal reveal-fade-up max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10">
            <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                    Get In Touch
                    <br />
                    <span class="text-blue-600 block mt-2">Contact Us</span>
                </h1>
                <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">
                    Have a question or need assistance? We are here to help. Reach out to us through any of the channels
                    below.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-2 md:w-3/4 w-full">
                    <a href="#contact-form"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">SEND
                        MESSAGE <svg class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                        </svg></a>
                    <a href="#map"
                        class="group flex cursor-pointer items-center justify-between px-6 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg">VIEW
                        MAP <svg class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 18 6-6-6-6" />
                        </svg></a>
                </div>
                <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
                    <p class="text-sky-700 font-semibold text-sm">Need help?</p>
                    <a href="tel:+8801972721388"
                        class="px-6 py-2.5 bg-white border border-slate-200 text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer transition-colors hover:bg-navy-active hover:text-white">Call
                        Us</a>
                </div>
            </div>
            <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
                <img src="/images/it-support/hero.png" alt="Contact Us" class="rounded-lg w-full" />
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z"
                    fill="#f8fafc"></path>
            </svg>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-white" id="contact-form">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-start">
            <div class="bg-white p-10 rounded-xl border-2 border-blue-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>

                <h2 class="text-3xl font-bold text-brand-blue mb-4">Contact Information</h2>
                <p class="text-slate-600 mb-8">Reach out to us through any of the following channels. We would love to hear
                    from you.</p>

                <div class="space-y-6 mb-10">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Address</p>
                            <p class="text-slate-900 font-semibold">Bismillah Computer & Technology</p>
                            <p class="text-sm text-slate-500">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Phone</p>
                            <p class="text-slate-900 font-semibold">+880 1972-721388</p>
                            <p class="text-sm text-slate-500">Sat - Thu, 9AM - 6PM</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Email</p>
                            <p class="text-slate-900 font-semibold">info@bct.com.bd</p>
                            <p class="text-sm text-slate-500">We reply within 24 hours</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Business Hours</p>
                            <p class="text-slate-900 font-semibold">Sun - Thu: 9:00 AM - 6:00 PM</p>
                            <p class="text-sm text-slate-500">Friday and Saturday: Closed</p>
                        </div>
                    </div>
                </div>

                <div class="border-t border-slate-200/60 pt-8">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Chat With Us</h3>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://wa.me/8801972721388?text={{ urlencode('Hi there! I am interested in your services.') }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-3 bg-brand-green text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-brand-green-hover hover:shadow-lg hover:-translate-y-0.5 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            WhatsApp
                        </a>
                        <a href="https://m.me/bct.com.bd" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-3 bg-messenger text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-messenger-hover hover:shadow-lg hover:-translate-y-0.5 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M12 2C6.477 2 2 6.145 2 11.243c0 2.908 1.436 5.506 3.676 7.21V22l3.405-1.868C10.135 20.485 11.053 20.6 12 20.6c5.523 0 10-4.145 10-9.357C22 6.145 17.523 2 12 2zm1 12.5l-2.5-2.7-4.9 2.7 5.4-5.7 2.6 2.7 4.8-2.7-5.4 5.7z" />
                            </svg>
                            Messenger
                        </a>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 h-full">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.2550536247227!2d90.38730387501835!3d23.860799278595277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41ec0492547%3A0x9d72192863d92047!2sBismillah%20Computer%20%26%20Technology!5e1!3m2!1sen!2sbd!4v1785079325012!5m2!1sen!2sbd"
                    width="100%" height="100%" style="border:0; min-height: 500px;" allowfullscreen=""
                    loading="lazy" referrerpolicy="strict-origin-when-cross-origin"
                    title="Bismillah Computer & Technology Location"></iframe>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-10 rounded-xl border-2 border-blue-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] relative">
                <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>

                <h2 class="text-3xl font-bold text-brand-blue mb-2">Send Us a Message</h2>
                <p class="text-slate-600 mb-8">Fill out the form below and we will get back to you within 24 hours.</p>

                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" novalidate>
                    @csrf
                    @php
                        $inputClass = 'w-full px-4 py-3 rounded-lg border text-slate-900 text-sm transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500';
                        $nameClass = $errors->has('name') ? $inputClass . ' border-red-500' : $inputClass . ' border-blue-200 hover:border-blue-400';
                        $emailClass = $errors->has('email') ? $inputClass . ' border-red-500' : $inputClass . ' border-blue-200 hover:border-blue-400';
                        $phoneClass = $errors->has('phone') ? $inputClass . ' border-red-500' : $inputClass . ' border-blue-200 hover:border-blue-400';
                        $subjectClass = $errors->has('subject') ? $inputClass . ' border-red-500' : $inputClass . ' border-blue-200 hover:border-blue-400';
                        $messageClass = $inputClass . ' resize-y';
                        $messageClass = $errors->has('message') ? $messageClass . ' border-red-500' : $messageClass . ' border-blue-200 hover:border-blue-400';
                    @endphp
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-700 mb-1">Full Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                placeholder="John Doe"
                                class="{{ $nameClass }}" />
                            @error('name')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @else
                                <p class="mt-1 text-xs text-red-600 hidden" data-error="name"></p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Email Address
                                <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                placeholder="john@example.com"
                                class="{{ $emailClass }}" />
                            @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @else
                                <p class="mt-1 text-xs text-red-600 hidden" data-error="email"></p>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1">Phone Number
                                <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                placeholder="+880 1XXXXXXXXX" pattern="[\+0-9]*" inputmode="tel"
                                class="{{ $phoneClass }}" />
                            @error('phone')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @else
                                <p class="mt-1 text-xs text-red-600 hidden" data-error="phone"></p>
                            @enderror
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-slate-700 mb-1">Subject <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                placeholder="How can we help?"
                                class="{{ $subjectClass }}" />
                            @error('subject')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @else
                                <p class="mt-1 text-xs text-red-600 hidden" data-error="subject"></p>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-6">
                        <label for="message" class="block text-sm font-semibold text-slate-700 mb-1">Message <span
                                class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your project or inquiry..."
                            class="{{ $messageClass }}">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @else
                            <p class="mt-1 text-xs text-red-600 hidden" data-error="message"></p>
                        @enderror
                    </div>
                    <div class="mt-8">
                        <button type="submit" id="submitBtn"
                            class="group flex cursor-pointer items-center justify-between px-8 py-4 text-white text-sm font-semibold rounded-xl shadow-md transition-all bg-navy hover:bg-navy-active hover:-translate-y-0.5 hover:shadow-lg w-full sm:w-auto">
                            <span id="submitText">SEND MESSAGE</span>
                            <svg id="submitIcon"
                                class="w-4 h-4 text-sky-300 transition-transform group-hover:translate-x-1 ml-3"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                            <svg id="submitSpinner" class="hidden animate-spin w-5 h-5 text-white ml-3"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div id="toast-success"
            class="fixed bottom-6 right-6 z-50 bg-green-500 text-white px-6 py-4 rounded-xl shadow-lg flex items-center gap-3 animate-slide-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 6 9 17l-5-5" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif
    @if (session('error'))
        <div id="toast-error"
            class="fixed bottom-6 right-6 z-50 bg-red-500 text-white px-6 py-4 rounded-xl shadow-lg flex items-center gap-3 animate-slide-up">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <line x1="12" y1="8" x2="12" y2="12" />
                <line x1="12" y1="16" x2="12.01" y2="16" />
            </svg>
            <span>{{ session('error') }}</span>
        </div>
    @endif
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const submitIcon = document.getElementById('submitIcon');
            const submitSpinner = document.getElementById('submitSpinner');

            const rules = {
                name: {
                    required: true,
                    minLength: 2,
                    maxLength: 255,
                    label: 'Name'
                },
                email: {
                    required: true,
                    email: true,
                    maxLength: 255,
                    label: 'Email'
                },
                phone: {
                    required: true,
                    maxLength: 20,
                    phone: true,
                    label: 'Phone'
                },
                subject: {
                    required: true,
                    minLength: 3,
                    maxLength: 255,
                    label: 'Subject'
                },
                message: {
                    required: true,
                    minLength: 10,
                    maxLength: 5000,
                    label: 'Message'
                },
            };

            function validateField(name) {
                const rule = rules[name];
                const input = document.getElementById(name);
                if (!input || !rule) return null;
                const value = input.value.trim();
                const errorEl = document.querySelector('[data-error="' + name + '"]');

                if (rule.required && !value) return setError(name, rule.label + ' is required');
                if (value && rule.minLength && value.length < rule.minLength) return setError(name, rule.label +
                    ' must be at least ' + rule.minLength + ' characters');
                if (value && rule.maxLength && value.length > rule.maxLength) return setError(name, rule.label +
                    ' must not exceed ' + rule.maxLength + ' characters');
                if (value && rule.email) {
                    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!re.test(value)) return setError(name, 'Please provide a valid email address');
                }
                if (value && rule.phone) {
                    const re = /^[\+0-9]+$/;
                    if (!re.test(value)) return setError(name, 'Phone number can only contain numbers and +');
                }
                clearError(name);
                return null;
            }

            function setError(name, msg) {
                const input = document.getElementById(name);
                const errorEl = document.querySelector('[data-error="' + name + '"]');
                if (input) input.classList.add('border-red-500');
                if (input) input.classList.remove('border-blue-200');
                if (errorEl) {
                    errorEl.textContent = msg;
                    errorEl.classList.remove('hidden');
                }
                return msg;
            }

            function clearError(name) {
                const input = document.getElementById(name);
                const errorEl = document.querySelector('[data-error="' + name + '"]');
                if (input) {
                    input.classList.remove('border-red-500');
                    input.classList.add('border-blue-200');
                }
                if (errorEl) {
                    errorEl.textContent = '';
                    errorEl.classList.add('hidden');
                }
            }

            Object.keys(rules).forEach(function(name) {
                const input = document.getElementById(name);
                if (input) {
                    input.addEventListener('blur', function() {
                        validateField(name);
                    });
                    input.addEventListener('input', function() {
                        if (input.classList.contains('border-red-500')) validateField(name);
                    });
                }
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                let firstError = null;
                Object.keys(rules).forEach(function(name) {
                    const err = validateField(name);
                    if (err && !firstError) firstError = name;
                });
                if (firstError) {
                    document.getElementById(firstError).focus();
                    return;
                }

                submitText.textContent = 'SENDING...';
                submitIcon.classList.add('hidden');
                submitSpinner.classList.remove('hidden');
                submitBtn.disabled = true;

                const formData = new FormData(form);

                fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(function(res) {
                        return res.json().then(function(data) {
                            return {
                                status: res.status,
                                data: data
                            };
                        });
                    })
                    .then(function(result) {
                        if (result.data.success) {
                            form.reset();
                            showToast(result.data.message, 'success');
                        } else if (result.data.errors) {
                            Object.keys(result.data.errors).forEach(function(field) {
                                const msg = result.data.errors[field][0];
                                setError(field, msg);
                            });
                            const first = Object.keys(result.data.errors)[0];
                            if (first) document.getElementById(first).focus();
                        }
                    })
                    .catch(function() {
                        showToast('Something went wrong. Please try again.', 'error');
                    })
                    .finally(function() {
                        submitText.textContent = 'SEND MESSAGE';
                        submitIcon.classList.remove('hidden');
                        submitSpinner.classList.add('hidden');
                        submitBtn.disabled = false;
                    });
            });

            function showToast(message, type) {
                var existing = document.getElementById('toast-success');
                if (existing) existing.remove();
                existing = document.getElementById('toast-error');
                if (existing) existing.remove();
                var toastId = type === 'success' ? 'toast-success' : 'toast-error';
                var bgColor = type === 'success' ? 'bg-green-500' : 'bg-red-500';
                var icon = type === 'success' ?
                    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>' :
                    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>';
                var toast = document.createElement('div');
                toast.id = toastId;
                toast.className = 'fixed bottom-6 right-6 z-50 ' + bgColor +
                    ' text-white px-6 py-4 rounded-xl shadow-lg flex items-center gap-3';
                toast.innerHTML = icon + '<span>' + message + '</span>';
                document.body.appendChild(toast);
                setTimeout(function() {
                    toast.remove();
                }, 5000);
            }

            var serverToast = document.getElementById('toast-success') || document.getElementById('toast-error');
            if (serverToast) setTimeout(function() {
                serverToast.remove();
            }, 5000);
        });
    </script>
@endpush
