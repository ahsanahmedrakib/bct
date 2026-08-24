@extends('layouts.app')

@section('content')
<section class="relative bg-gradient-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32 min-h-screen flex items-center">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
    <div class="reveal reveal-fade-up">
      <h1 class="text-9xl font-extrabold text-brand-blue mb-8">404</h1>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Page Not Found</h2>
      <p class="text-lg text-slate-600 max-w-2xl mx-auto mb-12">The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-8 py-4 bg-brand-blue text-white font-semibold rounded-xl hover:bg-brand-hover transition-colors">
          <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>
          Go Home
        </a>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-brand-blue font-semibold rounded-xl border-2 border-brand-blue hover:bg-brand-blue hover:text-white transition-colors">
          <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
          </svg>
          Contact Us
        </a>
      </div>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-16" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
    </svg>
  </div>
</section>
@endsection
