@extends('layouts.app')

@section('content')
<main class="flex min-h-screen flex-col font-sans text-slate-800 bg-slate-50">

  {{-- HERO SECTION --}}
  <section class="relative bg-linear-to-t from-hero-gradient to-white pt-24 pb-32 lg:pt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-24 items-center relative z-10 reveal reveal-fade-up">
      <div class="space-y-8 order-2 lg:order-1 lg:col-span-2">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
          Security Awareness <br />
          <span class="text-blue-600 block mt-2"> Training</span>
        </h1>
        <p class="text-lg text-justify md:text-xl text-slate-700 font-medium leading-relaxed">
          Endpoint security protects devices like computers, smartphones, and servers from cyber threats. It includes antivirus, anti-malware, firewalls, and real-time threat detection to prevent unauthorized access, malware, and data breaches. This protection is vital for securing individual devices and the broader network they connect to.
        </p>
        <div class="pt-6 border-t border-slate-200/60 flex flex-col items-start gap-3">
          <p class="text-sky-700 font-semibold text-sm">Need help?</p>
          <a href="/contact" class="px-6 py-2.5 bg-white border border-brand-active text-sky-700 text-xs font-bold tracking-wider uppercase rounded-lg shadow-sm cursor-pointer hover:bg-navy-active hover:text-white transition-colors">Contact Us</a>
        </div>
      </div>
      <div class="flex justify-center lg:justify-end order-1 lg:order-2 lg:col-span-1">
        <img src="{{ asset('images/it-support/cyber-security/cloud-and-network/hero.png') }}" alt="BG Image" class="h-[400px] w-[600px] object-cover rounded-lg" />
      </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
      <svg class="relative block w-full h-16" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C73.23,28.79,158.46,59.39,235.9,67.65,264.44,70.67,293.12,61.7,321.39,56.44Z" fill="#f8fafc"></path>
      </svg>
    </div>
  </section>

  {{-- ==================== SECTION 1: Introduction (Human Error) ==================== --}}
  <section class="pt-12 sm:pt-16 pb-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-justify">
    <div class="reveal reveal-fade-up h-full">
      <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 mb-4 uppercase tracking-tight">
          Human Error: The Biggest Threat in Cybersecurity
        </h2>
        <p class="text-xs sm:text-sm md:text-base text-slate-600 leading-relaxed mb-6">
          Around 90% of cybersecurity breaches stem from human error within
          organizations, making security awareness training as crucial as
          firewalls and anti-malware programs. While many focus on technology,
          the most effective attacks often exploit human vulnerabilities
          rather than bypassing technical defenses. Addressing this gap is key
          to protecting highly secure networks.
        </p>
        <p class="text-xs sm:text-sm md:text-base text-slate-600 leading-relaxed">
          At Total Solutions IT, our security awareness training empowers
          employees by educating them on common IT security threats and their
          role in mitigating these risks. From recognizing malicious links to
          identifying phishing attempts, our training is designed to reduce
          cyber risks associated with human error, forming a cornerstone of a
          robust cybersecurity strategy.
        </p>
      </div>
    </div>
  </section>

  {{-- ==================== SECTION 2: HOW IT WORKS ==================== --}}
  <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-justify">
    <div class="reveal reveal-fade-up h-full">
      <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 mb-4 uppercase tracking-tight">
          HOW IT WORKS
        </h2>

        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mb-6">
          <strong>Comprehensive Training:</strong> Go beyond basic instruction
          with our engaging simulations and activities. By building confidence
          and practical skills in spotting and avoiding cyber threats, every
          employee becomes an integral part of your security team.
        </p>

        <ul class="space-y-4 text-xs sm:text-sm text-slate-500">
          <li class="flex items-start">
            <span class="text-blue-600 mr-2 font-bold">&bull;</span>
            <span>
              <strong class="text-brand-blue font-bold uppercase">
                Engaging Content:
              </strong>
              Our platform offers intuitive phishing simulation kits, short
              animated videos, and interactive quizzes, ensuring that security
              lessons are both informative and memorable.
            </span>
          </li>
          <li class="flex items-start">
            <span class="text-blue-600 mr-2 font-bold">&bull;</span>
            <span>
              <strong class="text-brand-blue font-bold uppercase">
                Customised Material:
              </strong>
              We create personalized phishing emails that mimic
              industry-specific scams and threats, enhancing the effectiveness
              of the training.
            </span>
          </li>
          <li class="flex items-start">
            <span class="text-blue-600 mr-2 font-bold">&bull;</span>
            <span>
              <strong class="text-brand-blue font-bold uppercase">
                User-Friendly:
              </strong>
              Our tailored, easy-to-use portals make security training
              accessible and convenient for all employees, regardless of their
              tech proficiency.
            </span>
          </li>
          <li class="flex items-start">
            <span class="text-blue-600 mr-2 font-bold">&bull;</span>
            <span>
              <strong class="text-brand-blue font-bold uppercase">
                Always Current:
              </strong>
              Stay updated with new phishing kits and videos released monthly,
              reflecting the latest threat trends and keeping your employees
              informed about current cybersecurity risks.
            </span>
          </li>
        </ul>

        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mt-6 border-t border-blue-100 pt-4">
          Automated training campaigns and reporting simplify security and
          compliance, offering results that can be customized to fit any
          organization and budget.
        </p>
      </div>
    </div>
  </section>

  {{-- ==================== SECTION 3: HOW IS IT USED? ==================== --}}
  <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-justify">
    <div class="reveal reveal-fade-up h-full">
      <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 mb-4 uppercase tracking-tight">
          HOW IS IT USED?
        </h2>
        <p class="text-xs sm:text-sm md:text-base text-slate-600 leading-relaxed mb-6">
          Cybercriminals exploit human vulnerabilities more easily than they
          breach cybersecurity systems. Phishing emails, often disguised as
          legitimate messages or using emotional manipulation (like urgent
          password update warnings), are a primary vector for malware. By
          training employees to recognize phishing attempts, you reduce the
          risk of malicious link clicks or dangerous attachments,
          strengthening your cybersecurity defenses and significantly lowering
          the chance of a security breach.
        </p>
      </div>
    </div>
  </section>

  {{-- ==================== SECTION 4: BENEFITS OF SECURITY AWARENESS TRAINING ==================== --}}
  <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-justify">
    <div class="reveal reveal-fade-up h-full">
      <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h2 class="text-xl sm:text-2xl font-bold text-slate-800 mb-4">
          BENEFITS OF SECURITY AWARENESS TRAINING
        </h2>
        <div class="space-y-4 text-xs sm:text-sm text-slate-500 leading-relaxed">
          <p>
            Cybersecurity incidents can be costly and disrupt business
            operations. When employees understand cybersecurity principles and
            their role in mitigating risks, the likelihood of successful
            cyberattacks is greatly reduced, ensuring that critical systems
            remain operational.
          </p>
          <p>
            Such incidents can also severely damage your organization&apos;s
            reputation, especially if they involve sensitive customer or
            business information. With increasing consumer awareness and
            concern about cybersecurity, maintaining trust is essential. A
            data breach can result in lost business and diminished confidence
            in your organization.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- ==================== SECTION 5: WHY CHOOSE Total Solutions IT? ==================== --}}
  <section class="py-6 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-justify">
    <div class="reveal reveal-fade-up h-full">
      <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-slate-800 mb-4">
          WHY CHOOSE Total Solutions IT?
        </h2>
        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
          Total Solutions IT brings extensive experience in delivering
          customized cybersecurity services accross Bangladesh. From employee
          training and dark web monitoring to incident response and
          penetration testing, we help your organization stay vigilant and
          secure against breaches and attacks. Our training reduces the fear
          and uncertainty surrounding common cybersecurity threats, equipping
          your workforce with confidence and expertise.
        </p>
      </div>
    </div>
  </section>

  {{-- ==================== SECTION 6: SCHEDULE A DEMO (Contact) ==================== --}}
  <section class="pt-6 pb-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full text-justify">
    <div class="reveal reveal-fade-up h-full">
      <div class="bg-white p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-blue-100 relative h-full">
        <div class="absolute top-0 left-8 w-16 h-1 bg-blue-600 rounded-b-md"></div>
        <h2 class="text-xl sm:text-2xl font-bold text-slate-800 mb-4">
          SCHEDULE A DEMO
        </h2>
        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed border-t border-blue-100 pt-4">
          Prepare your employees to identify and manage cybersecurity risks
          effectively with our training programs. To learn more or to schedule
          a demo, contact Total Solutions IT online or call us at
          <a href="tel:+8801972721388" class="text-brand-blue font-semibold hover:underline">+880 1972-721388</a>.
        </p>
      </div>
    </div>
  </section>

</main>
@endsection
