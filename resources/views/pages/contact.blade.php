@extends('layouts.app')

@section('content')
    <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Get In Touch<br>
                        <span class="text-blue-600">Contact Us</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg">
                        Have a question or need assistance? We are here to help. Reach out to us through any of the channels below.
                    </p>
                </div>
                <div class="flex justify-center lg:justify-end">
                    <img src="/images/it-support/hero.png" alt="Contact Us" class="w-full max-w-md lg:max-w-lg">
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[60px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.11,130.92,141.14,211.39,130.78,258.73,125.75,305.56,107.89,321.39,56.44Z" fill="#ffffff"></path>
            </svg>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <div class="bg-white p-10 rounded-xl border-2 border-blue-100 relative">
                        <div class="absolute top-0 left-0 w-full h-1 bg-blue-600 rounded-t-xl"></div>

                        <h2 class="text-2xl font-bold text-gray-900 mb-8">Contact Information</h2>

                        <div class="space-y-6 mb-10">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Address</p>
                                    <p class="text-gray-900 font-medium">Bismillah Computer & Technology</p>
                                    <p class="text-gray-600">Dhaka, Bangladesh</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Phone</p>
                                    <p class="text-gray-900 font-medium">+880 1972-721388</p>
                                    <p class="text-gray-600">Sat - Thu, 9AM - 6PM</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="text-gray-900 font-medium">info@bct.com.bd</p>
                                    <p class="text-gray-600">We reply within 24 hours</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Business Hours</p>
                                    <p class="text-gray-900 font-medium">Sun - Thu: 9:00 AM - 6:00 PM</p>
                                    <p class="text-gray-600">Friday and Saturday: Closed</p>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 pt-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Chat With Us</h3>
                            <div class="flex flex-wrap gap-4">
                                <a href="https://wa.me/8801972721388" target="_blank" class="bg-brand-green text-white rounded-xl shadow-md px-6 py-3 flex items-center gap-2 hover:opacity-90 transition-opacity">
                                    <i class="fab fa-whatsapp text-lg"></i>
                                    <span class="font-medium">WhatsApp</span>
                                </a>
                                <a href="https://m.me/bct" target="_blank" class="bg-[#0084ff] text-white rounded-xl shadow-md px-6 py-3 flex items-center gap-2 hover:opacity-90 transition-opacity">
                                    <i class="fab fa-facebook-messenger text-lg"></i>
                                    <span class="font-medium">Messenger</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="rounded-2xl overflow-hidden shadow border-2 border-blue-100 h-full min-h-[500px]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.895386042828!2d90.3873!3d23.7509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cfffc13%3A0x915c2a7e36230ab0!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
                            width="100%"
                            height="100%"
                            style="border:0; min-height: 500px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Our Location in Dhaka"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
