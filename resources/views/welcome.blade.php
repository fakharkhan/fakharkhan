@extends('layouts.app')

@section('content')
    {{-- Executive Hero Section --}}
    <section class="relative bg-gradient-to-br from-slate-50 via-white to-slate-50 overflow-hidden">
        <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))] -z-10"></div>
        <div class="max-w-7xl mx-auto px-6 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="relative z-10">
                    <div class="inline-block mb-4">
                        <span class="px-4 py-1.5 bg-slate-900 text-white text-sm font-medium rounded-full">Founder & CEO</span>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 mb-4 leading-tight tracking-tight">
                        Fakhar Khan
                    </h1>
                    <p class="text-2xl lg:text-3xl text-slate-600 mb-6 font-medium">
                        SoftPyramid
                    </p>
                    <p class="text-lg lg:text-xl text-slate-600 mb-10 leading-relaxed max-w-2xl">
                        Enterprise software leadership, community impact, and global delivery. Engineering-driven executive with proven track record in scalable systems and operational excellence.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-12">
                        <a href="https://cal.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center px-8 py-4 bg-slate-900 text-white font-semibold rounded-lg hover:bg-slate-800 transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                            Schedule a Business Call
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-8 py-4 bg-white text-slate-900 border-2 border-slate-300 font-semibold rounded-lg hover:border-slate-900 hover:bg-slate-50 transition-all duration-200 shadow-sm hover:shadow-md">
                            Company Overview
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-slate-200">
                        <div>
                            <div class="text-4xl font-bold text-slate-900 mb-1">18+</div>
                            <div class="text-sm text-slate-600 font-medium">Years Experience</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-slate-900 mb-1">50+</div>
                            <div class="text-sm text-slate-600 font-medium">Global Clients</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-slate-900 mb-1">6</div>
                            <div class="text-sm text-slate-600 font-medium">Major Events</div>
                        </div>
                    </div>
                </div>

                <div class="lg:pl-8 relative">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-200 to-slate-300 rounded-2xl transform rotate-3"></div>
                        <div class="relative bg-slate-100 aspect-[4/5] rounded-2xl border-4 border-white shadow-2xl flex items-center justify-center overflow-hidden">
                            {{-- PLACEHOLDER: Executive headshot --}}
                            <div class="absolute inset-0 bg-gradient-to-br from-slate-200 via-slate-100 to-slate-200"></div>
                            <span class="relative text-slate-400 text-sm font-medium">Executive Portrait</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Executive Summary --}}
    <section class="bg-white py-24">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">Executive Summary</h2>
                <div class="w-24 h-1 bg-slate-900 mx-auto"></div>
            </div>
            <div class="prose prose-lg prose-slate max-w-none">
                <p class="text-xl text-slate-700 leading-relaxed mb-8 font-light">
                    With over <strong class="font-semibold text-slate-900">18 years</strong> in enterprise software development, Fakhar Khan has built a career on technical excellence and strategic execution. Beginning with Microsoft .NET in 2006, the transition to Laravel in 2013 marked a shift toward scalable, maintainable systems that serve global clients across real estate, education, and technology sectors.
                </p>
                <p class="text-xl text-slate-700 leading-relaxed mb-8 font-light">
                    Leadership extends beyond code. As the organizer of Laravel Live Pakistan since 2016, Fakhar has established the country's premier Laravel conference, bringing together thousands of developers and industry leaders. This community leadership translates directly into business outcomes: understanding market needs, building strategic partnerships, and delivering solutions that scale.
                </p>
                <p class="text-xl text-slate-700 leading-relaxed font-light">
                    As Founder & CEO of SoftPyramid, founded in October 2023, Fakhar leads a consultancy that combines deep technical expertise with operational discipline. The company serves clients including <strong class="font-semibold text-slate-900">RE/MAX</strong>, <strong class="font-semibold text-slate-900">Keller Williams</strong>, and international organizations like <strong class="font-semibold text-slate-900">Browns English Language School</strong> in Australia, demonstrating capability across borders and industries.
                </p>
            </div>
        </div>
    </section>

    {{-- Professional Timeline --}}
    <section class="bg-gradient-to-b from-slate-50 to-white py-24">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">Professional Timeline</h2>
                <div class="w-24 h-1 bg-slate-900 mx-auto"></div>
            </div>
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-slate-300 via-slate-400 to-slate-300 hidden lg:block"></div>
                <div class="space-y-12">
                    <div class="relative flex gap-8 lg:gap-12">
                        <div class="flex-shrink-0 w-16 lg:w-24 text-right lg:text-right">
                            <div class="inline-flex items-center justify-center w-16 h-16 lg:w-20 lg:h-20 bg-slate-900 text-white rounded-full font-bold text-sm lg:text-base shadow-lg">
                                2006
                            </div>
                        </div>
                        <div class="flex-1 pb-12">
                            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-100">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">Software Career Begins</h3>
                                <p class="text-slate-700 leading-relaxed">Started professional software development career with Microsoft .NET framework, building enterprise applications for business clients.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex gap-8 lg:gap-12">
                        <div class="flex-shrink-0 w-16 lg:w-24 text-right lg:text-right">
                            <div class="inline-flex items-center justify-center w-16 h-16 lg:w-20 lg:h-20 bg-slate-900 text-white rounded-full font-bold text-sm lg:text-base shadow-lg">
                                2013
                            </div>
                        </div>
                        <div class="flex-1 pb-12">
                            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-100">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">Laravel Adoption</h3>
                                <p class="text-slate-700 leading-relaxed">Adopted Laravel for scalable systems development, recognizing its potential for rapid, maintainable enterprise solutions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex gap-8 lg:gap-12">
                        <div class="flex-shrink-0 w-16 lg:w-24 text-right lg:text-right">
                            <div class="inline-flex items-center justify-center w-16 h-16 lg:w-20 lg:h-20 bg-slate-900 text-white rounded-full font-bold text-sm lg:text-base shadow-lg">
                                2016
                            </div>
                        </div>
                        <div class="flex-1 pb-12">
                            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-100">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">Laravel Live Pakistan Inaugural</h3>
                                <p class="text-slate-700 leading-relaxed">Organized the first Laravel Live Pakistan conference, establishing Pakistan's premier Laravel community event.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex gap-8 lg:gap-12">
                        <div class="flex-shrink-0 w-16 lg:w-24 text-right lg:text-right">
                            <div class="inline-flex items-center justify-center w-16 h-16 lg:w-20 lg:h-20 bg-slate-900 text-white rounded-full font-bold text-sm lg:text-base shadow-lg">
                                2018
                            </div>
                        </div>
                        <div class="flex-1 pb-12">
                            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-100">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">Laravel Certification</h3>
                                <p class="text-slate-700 leading-relaxed">Achieved Laravel Certification (Pakistan), demonstrating advanced expertise in the framework.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex gap-8 lg:gap-12">
                        <div class="flex-shrink-0 w-16 lg:w-24 text-right lg:text-right">
                            <div class="inline-flex items-center justify-center w-16 h-16 lg:w-20 lg:h-20 bg-slate-900 text-white rounded-full font-bold text-sm lg:text-base shadow-lg">
                                2020
                            </div>
                        </div>
                        <div class="flex-1 pb-12">
                            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-100">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">Ruby on Rails Expansion</h3>
                                <p class="text-slate-700 leading-relaxed">Expanded technical expertise to include Ruby on Rails, broadening capability for diverse client requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex gap-8 lg:gap-12">
                        <div class="flex-shrink-0 w-16 lg:w-24 text-right lg:text-right">
                            <div class="inline-flex items-center justify-center w-16 h-16 lg:w-20 lg:h-20 bg-slate-900 text-white rounded-full font-bold text-sm lg:text-base shadow-lg">
                                2023
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="bg-white rounded-xl p-6 lg:p-8 shadow-lg hover:shadow-xl transition-shadow border border-slate-100">
                                <h3 class="text-2xl font-bold text-slate-900 mb-3">SoftPyramid Founded</h3>
                                <p class="text-slate-700 leading-relaxed">Established SoftPyramid as a consultancy focused on enterprise software delivery, combining technical depth with operational excellence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industry & Community Leadership --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">Industry & Community Leadership</h2>
                <div class="w-24 h-1 bg-slate-900 mx-auto mb-6"></div>
                <p class="text-xl text-slate-700 leading-relaxed max-w-4xl mx-auto">
                    Community leadership is strategic business development. Organizing Laravel Live Pakistan positions SoftPyramid at the center of Pakistan's technology ecosystem, enabling partnerships, talent acquisition, and market intelligence that directly benefit client delivery.
                </p>
            </div>

            <div class="mb-12 text-center">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Laravel Live Pakistan</h3>
                <p class="text-slate-700 mb-6">
                    Official website: <a href="https://www.laravellive.pk" target="_blank" rel="noopener noreferrer" class="text-slate-900 font-semibold underline hover:text-slate-700 transition-colors">https://www.laravellive.pk</a>
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $events = [
                        ['year' => '2016', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}'],
                        ['year' => '2017', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}'],
                        ['year' => '2018', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}'],
                        ['year' => '2019', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}'],
                        ['year' => '2024', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}'],
                        ['year' => '2025', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}'],
                    ];
                @endphp

                @foreach($events as $event)
                <div class="group bg-white border-2 border-slate-200 rounded-xl p-6 hover:border-slate-900 hover:shadow-xl transition-all duration-300">
                    <div class="inline-block px-3 py-1 bg-slate-900 text-white text-xs font-bold rounded-full mb-4">{{ $event['year'] }}</div>
                    <h4 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-slate-700 transition-colors">Laravel Live Pakistan {{ $event['year'] }}</h4>
                    <div class="space-y-2 text-sm text-slate-700 mb-4">
                        <div class="flex items-start">
                            <span class="font-semibold text-slate-900 min-w-[80px]">Location:</span>
                            <span>{{ $event['city'] }}</span>
                        </div>
                        <div class="flex items-start">
                            <span class="font-semibold text-slate-900 min-w-[80px]">Audience:</span>
                            <span>{{ $event['audience'] }}</span>
                        </div>
                        <div class="flex items-start">
                            <span class="font-semibold text-slate-900 min-w-[80px]">Partners:</span>
                            <span>{{ $event['partners'] }}</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-100">
                        <div class="bg-gradient-to-br from-slate-50 to-slate-100 aspect-video rounded-lg flex items-center justify-center overflow-hidden">
                            <span class="text-slate-400 text-xs font-medium">Event Media</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- AI Automation Leadership (n8n) --}}
    <section class="bg-gradient-to-b from-slate-50 to-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">AI Automation Leadership</h2>
                <div class="w-24 h-1 bg-slate-900 mx-auto mb-6"></div>
                <div class="max-w-4xl mx-auto space-y-4">
                    <p class="text-xl text-slate-700 leading-relaxed">
                        Automation is operational leverage. Through n8n workshops, Fakhar shares executive-level knowledge on AI workflow adoption, positioning automation as a strategic business capability rather than experimental technology.
                    </p>
                    <p class="text-xl text-slate-700 leading-relaxed">
                        These workshops focus on practical business use cases, enabling organizations to reduce operational overhead, improve data flow, and scale processes without proportional headcount increases.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                    $workshops = [
                        ['city' => 'Lahore', 'date' => '{{-- PLACEHOLDER: Date --}}', 'audience' => '{{-- PLACEHOLDER: Audience type --}}', 'focus' => '{{-- PLACEHOLDER: Business use-case focus --}}'],
                        ['city' => 'Islamabad', 'date' => '{{-- PLACEHOLDER: Date --}}', 'audience' => '{{-- PLACEHOLDER: Audience type --}}', 'focus' => '{{-- PLACEHOLDER: Business use-case focus --}}'],
                        ['city' => 'Karachi', 'date' => '{{-- PLACEHOLDER: Date --}}', 'audience' => '{{-- PLACEHOLDER: Audience type --}}', 'focus' => '{{-- PLACEHOLDER: Business use-case focus --}}'],
                        ['city' => 'Richardson / Dallas, Texas', 'date' => '{{-- PLACEHOLDER: Date --}}', 'audience' => '{{-- PLACEHOLDER: Audience type --}}', 'focus' => '{{-- PLACEHOLDER: Business use-case focus --}}'],
                    ];
                @endphp

                @foreach($workshops as $workshop)
                <div class="bg-white border-2 border-slate-200 rounded-xl p-6 hover:border-slate-900 hover:shadow-xl transition-all duration-300">
                    <div class="inline-block px-3 py-1 bg-slate-900 text-white text-xs font-bold rounded-full mb-4">{{ $workshop['date'] }}</div>
                    <h4 class="text-2xl font-bold text-slate-900 mb-4">n8n Workshop — {{ $workshop['city'] }}</h4>
                    <div class="space-y-3 text-slate-700 mb-6">
                        <div>
                            <span class="font-semibold text-slate-900">Audience:</span> {{ $workshop['audience'] }}
                        </div>
                        <div>
                            <span class="font-semibold text-slate-900">Focus:</span> {{ $workshop['focus'] }}
                        </div>
                    </div>
                    <div class="pt-4 border-t border-slate-100">
                        <div class="bg-gradient-to-br from-slate-50 to-slate-100 aspect-video rounded-lg flex items-center justify-center overflow-hidden">
                            <span class="text-slate-400 text-xs font-medium">Workshop Media</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SoftPyramid — Company Leadership --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">SoftPyramid — Company Leadership</h2>
                <div class="w-24 h-1 bg-slate-900 mx-auto mb-6"></div>
                <p class="text-xl text-slate-700 leading-relaxed max-w-4xl mx-auto">
                    SoftPyramid is a serious consultancy, not a startup story. Founded in October 2023 with headquarters in Lahore, the company builds on years of proven delivery to US and international clients, combining technical depth with operational discipline.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div class="bg-gradient-to-br from-slate-50 to-white rounded-2xl p-8 lg:p-10 border-2 border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Company Overview</h3>
                    <div class="space-y-5 text-slate-700">
                        <div class="flex items-start">
                            <span class="font-bold text-slate-900 min-w-[140px]">Founded:</span>
                            <span class="font-medium">October 2023</span>
                        </div>
                        <div class="flex items-start">
                            <span class="font-bold text-slate-900 min-w-[140px]">Headquarters:</span>
                            <span class="font-medium">Lahore, Pakistan</span>
                        </div>
                        <div class="flex items-start">
                            <span class="font-bold text-slate-900 min-w-[140px]">Operations:</span>
                            <span class="font-medium">Global delivery, US market focus</span>
                        </div>
                        <div class="flex items-start">
                            <span class="font-bold text-slate-900 min-w-[140px]">Early Traction:</span>
                            <span class="font-medium">US market experience since 2018–2020</span>
                        </div>
                    </div>

                    <div class="mt-10 pt-8 border-t border-slate-200">
                        <h4 class="font-bold text-slate-900 mb-4 text-lg">Company Links</h4>
                        <div class="space-y-3">
                            <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="block text-slate-700 hover:text-slate-900 font-medium underline transition-colors">https://softpyramid.com</a>
                            <a href="https://softpyramid.dev" target="_blank" rel="noopener noreferrer" class="block text-slate-700 hover:text-slate-900 font-medium underline transition-colors">https://softpyramid.dev</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-50 to-white rounded-2xl p-8 lg:p-10 border-2 border-slate-200 shadow-lg">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Client Experience</h3>
                    <div class="space-y-8">
                        <div class="border-l-4 border-slate-900 pl-5">
                            <h4 class="font-bold text-slate-900 mb-3 text-lg">Real Estate Technology</h4>
                            <ul class="text-slate-700 space-y-2 font-medium">
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-slate-900 rounded-full mr-3"></span>
                                    RE/MAX
                                </li>
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-slate-900 rounded-full mr-3"></span>
                                    Keller Williams
                                </li>
                            </ul>
                        </div>

                        <div class="border-l-4 border-slate-900 pl-5">
                            <h4 class="font-bold text-slate-900 mb-3 text-lg">International Education</h4>
                            <ul class="text-slate-700 space-y-2 font-medium">
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-slate-900 rounded-full mr-3"></span>
                                    Browns English Language School (Australia)
                                </li>
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-slate-900 rounded-full mr-3"></span>
                                    Student Study Management System
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Selected Case Engagements --}}
    <section class="bg-gradient-to-b from-slate-50 to-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">Selected Case Engagements</h2>
                <div class="w-24 h-1 bg-slate-900 mx-auto"></div>
            </div>

            <div class="space-y-8">
                <div class="bg-white border-2 border-slate-200 rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="mb-6">
                        <h3 class="text-3xl font-bold text-slate-900 mb-2">Real Estate Platform Modernization</h3>
                        <p class="text-slate-600 font-medium">Client: {{-- PLACEHOLDER: Client name --}}</p>
                    </div>
                    <div class="space-y-5 text-slate-700">
                        <div>
                            <h4 class="font-bold text-slate-900 mb-2 text-lg">Business Problem</h4>
                            <p>{{-- PLACEHOLDER: Business problem description --}}</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-2 text-lg">Strategic Solution</h4>
                            <p>{{-- PLACEHOLDER: Strategic solution description --}}</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-2 text-lg">Technology Stack</h4>
                            <p>{{-- PLACEHOLDER: Technology stack --}}</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-2 text-lg">Outcome Metrics</h4>
                            <p>{{-- PLACEHOLDER: Outcome metrics --}}</p>
                        </div>
                        <div class="pt-6 border-t border-slate-200 bg-slate-50 rounded-lg p-6">
                            <p class="italic text-slate-700 text-lg mb-3">"{{-- PLACEHOLDER: Client testimonial --}}"</p>
                            <p class="text-sm text-slate-600 font-medium">— {{-- PLACEHOLDER: Client name and title --}}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border-2 border-slate-200 rounded-2xl p-8 lg:p-10 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="mb-6">
                        <h3 class="text-3xl font-bold text-slate-900 mb-2">International Education Management System</h3>
                        <p class="text-slate-600 font-medium">Client: Browns English Language School (Australia)</p>
                    </div>
                    <div class="space-y-5 text-slate-700">
                        <div>
                            <h4 class="font-bold text-slate-900 mb-2 text-lg">Business Problem</h4>
                            <p>{{-- PLACEHOLDER: Business problem description --}}</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-2 text-lg">Strategic Solution</h4>
                            <p>{{-- PLACEHOLDER: Strategic solution description --}}</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-2 text-lg">Technology Stack</h4>
                            <p>{{-- PLACEHOLDER: Technology stack --}}</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-2 text-lg">Outcome Metrics</h4>
                            <p>{{-- PLACEHOLDER: Outcome metrics --}}</p>
                        </div>
                        <div class="pt-6 border-t border-slate-200 bg-slate-50 rounded-lg p-6">
                            <p class="italic text-slate-700 text-lg mb-3">"{{-- PLACEHOLDER: Client testimonial --}}"</p>
                            <p class="text-sm text-slate-600 font-medium">— {{-- PLACEHOLDER: Client name and title --}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Professional Endorsements --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">Professional Endorsements</h2>
                <div class="w-24 h-1 bg-slate-900 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $testimonials = [
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}'],
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}'],
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}'],
                    ];
                @endphp

                @foreach($testimonials as $testimonial)
                <div class="bg-gradient-to-br from-slate-50 to-white border-2 border-slate-200 rounded-2xl p-8 hover:border-slate-900 hover:shadow-xl transition-all duration-300">
                    <div class="mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-slate-200 to-slate-300 rounded-full mb-4 flex items-center justify-center shadow-md">
                            <span class="text-slate-500 text-xs font-medium">Photo</span>
                        </div>
                    </div>
                    <p class="text-slate-700 italic mb-6 text-lg leading-relaxed">"{{ $testimonial['quote'] }}"</p>
                    <div class="pt-6 border-t border-slate-200">
                        <p class="font-bold text-slate-900 text-lg">{{ $testimonial['name'] }}</p>
                        <p class="text-sm text-slate-600 font-medium mt-1">{{ $testimonial['title'] }}</p>
                        <p class="text-sm text-slate-600 font-medium">{{ $testimonial['company'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Executive Call-To-Action --}}
    <section id="contact" class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white py-24 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-4xl lg:text-6xl font-bold mb-6">Let's discuss outcomes, not just technology.</h2>
            <p class="text-xl text-slate-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                Enterprise software delivery requires strategic thinking, technical depth, and operational discipline. Let's explore how we can achieve your business objectives.
            </p>

            <div class="flex flex-wrap justify-center gap-4 mb-10 text-slate-300">
                <a href="mailto:fakhar@softpyramid.com" class="hover:text-white transition-colors font-medium">fakhar@softpyramid.com</a>
                <span class="text-slate-500">•</span>
                <a href="tel:+13852162631" class="hover:text-white transition-colors font-medium">385-216-2631</a>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://cal.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center px-10 py-4 bg-white text-slate-900 font-bold rounded-lg hover:bg-slate-100 transition-all duration-200 shadow-xl hover:shadow-2xl hover:-translate-y-1 text-lg">
                    Schedule a Call
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/fakharkhan" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-10 py-4 bg-transparent text-white border-2 border-white font-bold rounded-lg hover:bg-white hover:text-slate-900 transition-all duration-200 text-lg">
                    LinkedIn Profile
                </a>
                <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-10 py-4 bg-transparent text-white border-2 border-white font-bold rounded-lg hover:bg-white hover:text-slate-900 transition-all duration-200 text-lg">
                    Company Website
                </a>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12 mb-12">
                <div>
                    <h3 class="font-bold text-xl mb-4">Fakhar Khan</h3>
                    <p class="text-slate-300 mb-4 leading-relaxed">
                        Founder & CEO, SoftPyramid<br>
                        Enterprise Software Leadership
                    </p>
                    <div class="space-y-2 text-slate-300 mb-4">
                        <p>
                            <a href="mailto:fakhar@softpyramid.com" class="hover:text-white transition-colors font-medium">fakhar@softpyramid.com</a>
                        </p>
                        <p>
                            <a href="tel:+13852162631" class="hover:text-white transition-colors font-medium">385-216-2631</a>
                        </p>
                    </div>
                    <p class="text-slate-400 text-sm">
                        Richardson, TX
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-xl mb-4">Company</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-medium">SoftPyramid.com</a>
                        </li>
                        <li>
                            <a href="https://softpyramid.dev" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-medium">SoftPyramid.dev</a>
                        </li>
                        <li>
                            <a href="https://www.laravellive.pk" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-medium">Laravel Live Pakistan</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-xl mb-4">Connect</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="https://www.linkedin.com/in/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-medium">LinkedIn</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-medium">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-medium">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-800">
                <p class="text-sm text-slate-400 text-center">
                    &copy; {{ date('Y') }} Fakhar Khan. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
@endsection
