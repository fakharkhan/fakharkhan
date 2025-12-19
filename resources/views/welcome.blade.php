@extends('layouts.app')

@section('content')
    {{-- Modern Hero Section with Image --}}
    <section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3Cpattern id=\"grid\" width=\"100\" height=\"100\" patternUnits=\"userSpaceOnUse\"%3E%3Cpath d=\"M 100 0 L 0 0 0 100\" fill=\"none\" stroke=\"%23ffffff\" stroke-width=\"1\" opacity=\"0.1\"/%3E%3C/pattern%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grid)\"/%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-20 lg:py-32 w-full">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="text-white">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full mb-6">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        <span class="text-sm font-medium">Founder & CEO</span>
                    </div>
                    <h1 class="text-6xl lg:text-8xl font-black mb-6 leading-tight tracking-tight bg-gradient-to-r from-white to-slate-300 bg-clip-text text-transparent">
                        Fakhar Khan
                    </h1>
                    <p class="text-3xl lg:text-4xl text-white/90 mb-6 font-bold">
                        SoftPyramid
                    </p>
                    <p class="text-xl lg:text-2xl text-white/80 mb-10 leading-relaxed max-w-2xl">
                        Enterprise software leadership, community impact, and global delivery. Engineering-driven executive with proven track record in scalable systems and operational excellence.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-12">
                        <a href="https://cal.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center px-10 py-5 bg-white text-slate-900 font-bold rounded-xl hover:bg-slate-100 transition-all duration-300 shadow-2xl hover:shadow-white/20 hover:scale-105 text-lg">
                            Schedule a Business Call
                            <svg class="ml-3 w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-10 py-5 bg-transparent text-white border-2 border-white/50 font-bold rounded-xl hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-sm text-lg">
                            Company Overview
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/20">
                        <div class="text-center lg:text-left">
                            <div class="text-5xl font-black text-white mb-2">18+</div>
                            <div class="text-sm text-white/70 font-medium uppercase tracking-wide">Years Experience</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-5xl font-black text-white mb-2">50+</div>
                            <div class="text-sm text-white/70 font-medium uppercase tracking-wide">Global Clients</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-5xl font-black text-white mb-2">6</div>
                            <div class="text-sm text-white/70 font-medium uppercase tracking-wide">Major Events</div>
                        </div>
                    </div>
                </div>

                <div class="relative lg:pl-8">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl blur-2xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
                        <div class="relative aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl border-4 border-white/20">
                            {{-- PLACEHOLDER: Executive headshot --}}
                            <div class="absolute inset-0 bg-gradient-to-br from-slate-700 via-slate-600 to-slate-800">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"400\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%23475569;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%232d3748;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3Ccircle cx=\"200\" cy=\"180\" r=\"60\" fill=\"%23334155\" opacity=\"0.5\"/%3E%3Cpath d=\"M 120 350 Q 200 320 280 350 L 280 500 L 120 500 Z\" fill=\"%23334155\" opacity=\"0.5\"/%3E%3C/svg%3E')] bg-cover bg-center opacity-50"></div>
                            </div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-white/20">
                                        <svg class="w-12 h-12 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <span class="text-white/70 text-sm font-medium">Executive Portrait</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Executive Summary with Image --}}
    <section class="bg-white py-24 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full blur-3xl opacity-20 -mr-48 -mt-48"></div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-block mb-6">
                        <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mb-2">Executive Summary</h2>
                        <div class="h-2 w-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full"></div>
                    </div>
                    <div class="space-y-6 text-lg text-slate-700 leading-relaxed">
                        <p>
                            With over <strong class="font-bold text-slate-900 text-xl">18 years</strong> in enterprise software development, Fakhar Khan has built a career on technical excellence and strategic execution. Beginning with Microsoft .NET in 2006, the transition to Laravel in 2013 marked a shift toward scalable, maintainable systems that serve global clients across real estate, education, and technology sectors.
                        </p>
                        <p>
                            Leadership extends beyond code. As the organizer of Laravel Live Pakistan since 2016, Fakhar has established the country's premier Laravel conference, bringing together thousands of developers and industry leaders. This community leadership translates directly into business outcomes: understanding market needs, building strategic partnerships, and delivering solutions that scale.
                        </p>
                        <p>
                            As Founder & CEO of SoftPyramid, founded in October 2023, Fakhar leads a consultancy that combines deep technical expertise with operational discipline. The company serves clients including <strong class="font-bold text-slate-900">RE/MAX</strong>, <strong class="font-bold text-slate-900">Keller Williams</strong>, and international organizations like <strong class="font-bold text-slate-900">Browns English Language School</strong> in Australia, demonstrating capability across borders and industries.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <div class="aspect-[4/3] bg-gradient-to-br from-slate-200 via-slate-100 to-slate-200">
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"600\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%23cbd5e1;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%23e2e8f0;stop-opacity:1\" /%3E%3C/linearGradient%3E%3Cpattern id=\"grid\" width=\"40\" height=\"40\" patternUnits=\"userSpaceOnUse\"%3E%3Cpath d=\"M 40 0 L 0 0 0 40\" fill=\"none\" stroke=\"%2394a3b8\" stroke-width=\"0.5\" opacity=\"0.3\"/%3E%3C/pattern%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grid)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-slate-400 text-sm font-medium">Professional Image</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Professional Timeline with Images --}}
    <section class="bg-gradient-to-b from-slate-50 via-white to-slate-50 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mb-4">Professional Timeline</h2>
                <div class="h-2 w-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mx-auto"></div>
            </div>
            <div class="space-y-16">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-block px-4 py-2 bg-slate-900 text-white text-sm font-bold rounded-full mb-4">2006</div>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">Software Career Begins</h3>
                        <p class="text-lg text-slate-700 leading-relaxed">Started professional software development career with Microsoft .NET framework, building enterprise applications for business clients.</p>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl">
                            <div class="aspect-video bg-gradient-to-br from-blue-500 to-blue-700">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"800\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%233b82f6;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%231e40af;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="relative rounded-2xl overflow-hidden shadow-xl">
                            <div class="aspect-video bg-gradient-to-br from-red-500 to-orange-600">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"800\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%23ef4444;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%23ea580c;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block px-4 py-2 bg-slate-900 text-white text-sm font-bold rounded-full mb-4">2013</div>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">Laravel Adoption</h3>
                        <p class="text-lg text-slate-700 leading-relaxed">Adopted Laravel for scalable systems development, recognizing its potential for rapid, maintainable enterprise solutions.</p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-block px-4 py-2 bg-slate-900 text-white text-sm font-bold rounded-full mb-4">2016</div>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">Laravel Live Pakistan Inaugural</h3>
                        <p class="text-lg text-slate-700 leading-relaxed">Organized the first Laravel Live Pakistan conference, establishing Pakistan's premier Laravel community event.</p>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl">
                            <div class="aspect-video bg-gradient-to-br from-green-500 to-emerald-600">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"800\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%2322c55e;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%230d9488;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="relative rounded-2xl overflow-hidden shadow-xl">
                            <div class="aspect-video bg-gradient-to-br from-purple-500 to-pink-600">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"800\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%23a855f7;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%23db2777;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block px-4 py-2 bg-slate-900 text-white text-sm font-bold rounded-full mb-4">2018</div>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">Laravel Certification</h3>
                        <p class="text-lg text-slate-700 leading-relaxed">Achieved Laravel Certification (Pakistan), demonstrating advanced expertise in the framework.</p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-block px-4 py-2 bg-slate-900 text-white text-sm font-bold rounded-full mb-4">2020</div>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">Ruby on Rails Expansion</h3>
                        <p class="text-lg text-slate-700 leading-relaxed">Expanded technical expertise to include Ruby on Rails, broadening capability for diverse client requirements.</p>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl">
                            <div class="aspect-video bg-gradient-to-br from-amber-500 to-yellow-600">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"800\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%23f59e0b;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%23eab308;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="relative rounded-2xl overflow-hidden shadow-xl">
                            <div class="aspect-video bg-gradient-to-br from-indigo-600 to-blue-700">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"800\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%234f46e5;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%231d4ed8;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="inline-block px-4 py-2 bg-slate-900 text-white text-sm font-bold rounded-full mb-4">2023</div>
                        <h3 class="text-3xl font-black text-slate-900 mb-4">SoftPyramid Founded</h3>
                        <p class="text-lg text-slate-700 leading-relaxed">Established SoftPyramid as a consultancy focused on enterprise software delivery, combining technical depth with operational excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industry & Community Leadership with Image Gallery --}}
    <section class="bg-white py-24 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full blur-3xl opacity-20 -ml-48 -mt-48"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mb-4">Industry & Community Leadership</h2>
                <div class="h-2 w-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mx-auto mb-6"></div>
                <p class="text-xl text-slate-700 leading-relaxed max-w-4xl mx-auto">
                    Community leadership is strategic business development. Organizing Laravel Live Pakistan positions SoftPyramid at the center of Pakistan's technology ecosystem, enabling partnerships, talent acquisition, and market intelligence that directly benefit client delivery.
                </p>
            </div>

            <div class="mb-12 text-center">
                <h3 class="text-3xl font-black text-slate-900 mb-4">Laravel Live Pakistan</h3>
                <p class="text-lg text-slate-700 mb-6">
                    Official website: <a href="https://www.laravellive.pk" target="_blank" rel="noopener noreferrer" class="text-slate-900 font-bold underline hover:text-slate-700 transition-colors">https://www.laravellive.pk</a>
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $events = [
                        ['year' => '2016', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}', 'color' => 'from-blue-500 to-cyan-500'],
                        ['year' => '2017', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}', 'color' => 'from-purple-500 to-pink-500'],
                        ['year' => '2018', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}', 'color' => 'from-green-500 to-emerald-500'],
                        ['year' => '2019', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}', 'color' => 'from-orange-500 to-red-500'],
                        ['year' => '2024', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}', 'color' => 'from-indigo-500 to-purple-500'],
                        ['year' => '2025', 'city' => '{{-- PLACEHOLDER: City --}}', 'audience' => '{{-- PLACEHOLDER: Audience scale --}}', 'partners' => '{{-- PLACEHOLDER: Strategic partners --}}', 'color' => 'from-pink-500 to-rose-500'],
                    ];
                @endphp

                @foreach($events as $event)
                <div class="group bg-white border-2 border-slate-200 rounded-2xl overflow-hidden hover:border-slate-900 hover:shadow-2xl transition-all duration-300">
                    <div class="relative aspect-video bg-gradient-to-br {{ $event['color'] }} overflow-hidden">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-4 py-2 bg-white/90 backdrop-blur-sm text-slate-900 text-sm font-bold rounded-full shadow-lg">{{ $event['year'] }}</span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-black text-xl drop-shadow-lg">Laravel Live Pakistan</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="space-y-3 text-sm text-slate-700">
                            <div class="flex items-start">
                                <span class="font-bold text-slate-900 min-w-[90px]">Location:</span>
                                <span>{{ $event['city'] }}</span>
                            </div>
                            <div class="flex items-start">
                                <span class="font-bold text-slate-900 min-w-[90px]">Audience:</span>
                                <span>{{ $event['audience'] }}</span>
                            </div>
                            <div class="flex items-start">
                                <span class="font-bold text-slate-900 min-w-[90px]">Partners:</span>
                                <span>{{ $event['partners'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- AI Automation Leadership with Images --}}
    <section class="bg-gradient-to-b from-slate-50 via-white to-slate-50 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mb-4">AI Automation Leadership</h2>
                <div class="h-2 w-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mx-auto mb-6"></div>
                <div class="max-w-4xl mx-auto space-y-4">
                    <p class="text-xl text-slate-700 leading-relaxed">
                        Automation is operational leverage. Through n8n workshops, Fakhar shares executive-level knowledge on AI workflow adoption, positioning automation as a strategic business capability rather than experimental technology.
                    </p>
                    <p class="text-xl text-slate-700 leading-relaxed">
                        These workshops focus on practical business use cases, enabling organizations to reduce operational overhead, improve data flow, and scale processes without proportional headcount increases.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @php
                    $workshops = [
                        ['city' => 'Lahore', 'date' => '{{-- PLACEHOLDER: Date --}}', 'audience' => '{{-- PLACEHOLDER: Audience type --}}', 'focus' => '{{-- PLACEHOLDER: Business use-case focus --}}', 'color' => 'from-blue-600 to-indigo-700'],
                        ['city' => 'Islamabad', 'date' => '{{-- PLACEHOLDER: Date --}}', 'audience' => '{{-- PLACEHOLDER: Audience type --}}', 'focus' => '{{-- PLACEHOLDER: Business use-case focus --}}', 'color' => 'from-purple-600 to-pink-700'],
                        ['city' => 'Karachi', 'date' => '{{-- PLACEHOLDER: Date --}}', 'audience' => '{{-- PLACEHOLDER: Audience type --}}', 'focus' => '{{-- PLACEHOLDER: Business use-case focus --}}', 'color' => 'from-green-600 to-teal-700'],
                        ['city' => 'Richardson / Dallas, Texas', 'date' => '{{-- PLACEHOLDER: Date --}}', 'audience' => '{{-- PLACEHOLDER: Audience type --}}', 'focus' => '{{-- PLACEHOLDER: Business use-case focus --}}', 'color' => 'from-orange-600 to-red-700'],
                    ];
                @endphp

                @foreach($workshops as $workshop)
                <div class="group bg-white border-2 border-slate-200 rounded-2xl overflow-hidden hover:border-slate-900 hover:shadow-2xl transition-all duration-300">
                    <div class="relative aspect-video bg-gradient-to-br {{ $workshop['color'] }} overflow-hidden">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-4 py-2 bg-white/90 backdrop-blur-sm text-slate-900 text-sm font-bold rounded-full shadow-lg">{{ $workshop['date'] }}</span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="text-white font-black text-2xl drop-shadow-lg">n8n Workshop</h4>
                            <p class="text-white/90 font-semibold text-lg drop-shadow-lg">{{ $workshop['city'] }}</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="space-y-3 text-slate-700 mb-4">
                            <div>
                                <span class="font-bold text-slate-900">Audience:</span> {{ $workshop['audience'] }}
                            </div>
                            <div>
                                <span class="font-bold text-slate-900">Focus:</span> {{ $workshop['focus'] }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SoftPyramid — Company Leadership with Images --}}
    <section class="bg-white py-24 relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full blur-3xl opacity-20 -mr-48 -mb-48"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mb-4">SoftPyramid — Company Leadership</h2>
                <div class="h-2 w-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mx-auto mb-6"></div>
                <p class="text-xl text-slate-700 leading-relaxed max-w-4xl mx-auto">
                    SoftPyramid is a serious consultancy, not a startup story. Founded in October 2023 with headquarters in Lahore, the company builds on years of proven delivery to US and international clients, combining technical depth with operational discipline.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <div class="bg-gradient-to-br from-slate-50 to-white rounded-3xl p-10 border-2 border-slate-200 shadow-xl">
                    <h3 class="text-3xl font-black text-slate-900 mb-8">Company Overview</h3>
                    <div class="space-y-6 text-slate-700 mb-10">
                        <div class="flex items-start">
                            <span class="font-black text-slate-900 min-w-[160px] text-lg">Founded:</span>
                            <span class="font-bold text-lg">October 2023</span>
                        </div>
                        <div class="flex items-start">
                            <span class="font-black text-slate-900 min-w-[160px] text-lg">Headquarters:</span>
                            <span class="font-bold text-lg">Lahore, Pakistan</span>
                        </div>
                        <div class="flex items-start">
                            <span class="font-black text-slate-900 min-w-[160px] text-lg">Operations:</span>
                            <span class="font-bold text-lg">Global delivery, US market focus</span>
                        </div>
                        <div class="flex items-start">
                            <span class="font-black text-slate-900 min-w-[160px] text-lg">Early Traction:</span>
                            <span class="font-bold text-lg">US market experience since 2018–2020</span>
                        </div>
                    </div>

                    <div class="pt-8 border-t-2 border-slate-200">
                        <h4 class="font-black text-slate-900 mb-4 text-xl">Company Links</h4>
                        <div class="space-y-3">
                            <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="block text-slate-700 hover:text-slate-900 font-bold underline transition-colors text-lg">https://softpyramid.com</a>
                            <a href="https://softpyramid.dev" target="_blank" rel="noopener noreferrer" class="block text-slate-700 hover:text-slate-900 font-bold underline transition-colors text-lg">https://softpyramid.dev</a>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-50 to-white rounded-3xl p-10 border-2 border-slate-200 shadow-xl">
                    <h3 class="text-3xl font-black text-slate-900 mb-8">Client Experience</h3>
                    <div class="space-y-8">
                        <div class="border-l-4 border-slate-900 pl-6">
                            <h4 class="font-black text-slate-900 mb-4 text-xl">Real Estate Technology</h4>
                            <ul class="text-slate-700 space-y-3 font-bold">
                                <li class="flex items-center">
                                    <span class="w-3 h-3 bg-slate-900 rounded-full mr-4"></span>
                                    RE/MAX
                                </li>
                                <li class="flex items-center">
                                    <span class="w-3 h-3 bg-slate-900 rounded-full mr-4"></span>
                                    Keller Williams
                                </li>
                            </ul>
                        </div>

                        <div class="border-l-4 border-slate-900 pl-6">
                            <h4 class="font-black text-slate-900 mb-4 text-xl">International Education</h4>
                            <ul class="text-slate-700 space-y-3 font-bold">
                                <li class="flex items-center">
                                    <span class="w-3 h-3 bg-slate-900 rounded-full mr-4"></span>
                                    Browns English Language School (Australia)
                                </li>
                                <li class="flex items-center">
                                    <span class="w-3 h-3 bg-slate-900 rounded-full mr-4"></span>
                                    Student Study Management System
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Company Image Gallery --}}
            <div class="grid md:grid-cols-3 gap-6">
                <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-[4/3] bg-gradient-to-br from-blue-500 to-indigo-600">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"600\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%233b82f6;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%234f46e5;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white/80 text-sm font-medium">Company Image 1</span>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-[4/3] bg-gradient-to-br from-purple-500 to-pink-600">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"600\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%23a855f7;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%23db2777;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white/80 text-sm font-medium">Company Image 2</span>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-[4/3] bg-gradient-to-br from-green-500 to-emerald-600">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"600\" height=\"450\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%2322c55e;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%230d9488;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white/80 text-sm font-medium">Company Image 3</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Selected Case Engagements with Images --}}
    <section class="bg-gradient-to-b from-slate-50 via-white to-slate-50 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mb-4">Selected Case Engagements</h2>
                <div class="h-2 w-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mx-auto"></div>
            </div>

            <div class="space-y-12">
                <div class="bg-white border-2 border-slate-200 rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="grid lg:grid-cols-2 gap-0">
                        <div class="relative aspect-video lg:aspect-auto bg-gradient-to-br from-blue-600 to-indigo-700">
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"800\" height=\"600\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%232563eb;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%234f46e5;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-white/80 text-sm font-medium">Case Study Image</span>
                            </div>
                        </div>
                        <div class="p-10">
                            <div class="mb-6">
                                <h3 class="text-4xl font-black text-slate-900 mb-3">Real Estate Platform Modernization</h3>
                                <p class="text-slate-600 font-bold">Client: {{-- PLACEHOLDER: Client name --}}</p>
                            </div>
                            <div class="space-y-5 text-slate-700">
                                <div>
                                    <h4 class="font-black text-slate-900 mb-2 text-lg">Business Problem</h4>
                                    <p>{{-- PLACEHOLDER: Business problem description --}}</p>
                                </div>
                                <div>
                                    <h4 class="font-black text-slate-900 mb-2 text-lg">Strategic Solution</h4>
                                    <p>{{-- PLACEHOLDER: Strategic solution description --}}</p>
                                </div>
                                <div>
                                    <h4 class="font-black text-slate-900 mb-2 text-lg">Technology Stack</h4>
                                    <p>{{-- PLACEHOLDER: Technology stack --}}</p>
                                </div>
                                <div>
                                    <h4 class="font-black text-slate-900 mb-2 text-lg">Outcome Metrics</h4>
                                    <p>{{-- PLACEHOLDER: Outcome metrics --}}</p>
                                </div>
                                <div class="pt-6 border-t-2 border-slate-200 bg-slate-50 rounded-xl p-6">
                                    <p class="italic text-slate-700 text-lg mb-3">"{{-- PLACEHOLDER: Client testimonial --}}"</p>
                                    <p class="text-sm text-slate-600 font-bold">— {{-- PLACEHOLDER: Client name and title --}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border-2 border-slate-200 rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow">
                    <div class="grid lg:grid-cols-2 gap-0">
                        <div class="relative aspect-video lg:aspect-auto bg-gradient-to-br from-green-600 to-emerald-700 order-2 lg:order-1">
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"800\" height=\"600\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%2316a34a;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%230d9488;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3C/svg%3E')] bg-cover"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-white/80 text-sm font-medium">Case Study Image</span>
                            </div>
                        </div>
                        <div class="p-10 order-1 lg:order-2">
                            <div class="mb-6">
                                <h3 class="text-4xl font-black text-slate-900 mb-3">International Education Management System</h3>
                                <p class="text-slate-600 font-bold">Client: Browns English Language School (Australia)</p>
                            </div>
                            <div class="space-y-5 text-slate-700">
                                <div>
                                    <h4 class="font-black text-slate-900 mb-2 text-lg">Business Problem</h4>
                                    <p>{{-- PLACEHOLDER: Business problem description --}}</p>
                                </div>
                                <div>
                                    <h4 class="font-black text-slate-900 mb-2 text-lg">Strategic Solution</h4>
                                    <p>{{-- PLACEHOLDER: Strategic solution description --}}</p>
                                </div>
                                <div>
                                    <h4 class="font-black text-slate-900 mb-2 text-lg">Technology Stack</h4>
                                    <p>{{-- PLACEHOLDER: Technology stack --}}</p>
                                </div>
                                <div>
                                    <h4 class="font-black text-slate-900 mb-2 text-lg">Outcome Metrics</h4>
                                    <p>{{-- PLACEHOLDER: Outcome metrics --}}</p>
                                </div>
                                <div class="pt-6 border-t-2 border-slate-200 bg-slate-50 rounded-xl p-6">
                                    <p class="italic text-slate-700 text-lg mb-3">"{{-- PLACEHOLDER: Client testimonial --}}"</p>
                                    <p class="text-sm text-slate-600 font-bold">— {{-- PLACEHOLDER: Client name and title --}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Professional Endorsements with Images --}}
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mb-4">Professional Endorsements</h2>
                <div class="h-2 w-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $testimonials = [
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}', 'color' => 'from-blue-500 to-cyan-500'],
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}', 'color' => 'from-purple-500 to-pink-500'],
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}', 'color' => 'from-green-500 to-emerald-500'],
                    ];
                @endphp

                @foreach($testimonials as $testimonial)
                <div class="bg-white border-2 border-slate-200 rounded-2xl overflow-hidden hover:border-slate-900 hover:shadow-2xl transition-all duration-300">
                    <div class="relative aspect-video bg-gradient-to-br {{ $testimonial['color'] }}">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"600\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3ClinearGradient id=\"grad\" x1=\"0%25\" y1=\"0%25\" x2=\"100%25\" y2=\"100%25\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%233b82f6;stop-opacity:1\" /%3E%3Cstop offset=\"100%25\" style=\"stop-color:%2306b6d4;stop-opacity:1\" /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grad)\"/%3E%3Ccircle cx=\"300\" cy=\"200\" r=\"80\" fill=\"white\" opacity=\"0.2\"/%3E%3C/svg%3E')] bg-cover"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center border-4 border-white/30">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <p class="text-slate-700 italic mb-6 text-lg leading-relaxed">"{{ $testimonial['quote'] }}"</p>
                        <div class="pt-6 border-t-2 border-slate-200">
                            <p class="font-black text-slate-900 text-xl">{{ $testimonial['name'] }}</p>
                            <p class="text-sm text-slate-600 font-bold mt-1">{{ $testimonial['title'] }}</p>
                            <p class="text-sm text-slate-600 font-bold">{{ $testimonial['company'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Executive Call-To-Action with Background Image --}}
    <section id="contact" class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white py-32 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"1200\" height=\"800\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cdefs%3E%3Cpattern id=\"grid\" width=\"100\" height=\"100\" patternUnits=\"userSpaceOnUse\"%3E%3Cpath d=\"M 100 0 L 0 0 0 100\" fill=\"none\" stroke=\"%23ffffff\" stroke-width=\"1\" opacity=\"0.05\"/%3E%3C/pattern%3E%3CradialGradient id=\"glow\"%3E%3Cstop offset=\"0%25\" style=\"stop-color:%23ffffff;stop-opacity:0.1\"/%3E%3Cstop offset=\"100%25\" style=\"stop-color:%23ffffff;stop-opacity:0\"/%3E%3C/radialGradient%3E%3C/defs%3E%3Crect width=\"100%25\" height=\"100%25\" fill=\"url(%23grid)\"/%3E%3Ccircle cx=\"50%25\" cy=\"50%25\" r=\"40%25\" fill=\"url(%23glow)\"/%3E%3C/svg%3E')] opacity-30"></div>
        <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-5xl lg:text-7xl font-black mb-8 bg-gradient-to-r from-white to-slate-300 bg-clip-text text-transparent">
                Let's discuss outcomes, not just technology.
            </h2>
            <p class="text-2xl text-slate-300 mb-10 max-w-3xl mx-auto leading-relaxed">
                Enterprise software delivery requires strategic thinking, technical depth, and operational discipline. Let's explore how we can achieve your business objectives.
            </p>

            <div class="flex flex-wrap justify-center gap-4 mb-12 text-slate-300">
                <a href="mailto:fakhar@softpyramid.com" class="hover:text-white transition-colors font-bold text-lg">fakhar@softpyramid.com</a>
                <span class="text-slate-500">•</span>
                <a href="tel:+13852162631" class="hover:text-white transition-colors font-bold text-lg">385-216-2631</a>
            </div>

            <div class="flex flex-wrap justify-center gap-6">
                <a href="https://cal.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center px-12 py-6 bg-white text-slate-900 font-black rounded-2xl hover:bg-slate-100 transition-all duration-300 shadow-2xl hover:shadow-white/30 hover:scale-105 text-xl">
                    Schedule a Call
                    <svg class="ml-3 w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/fakharkhan" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-12 py-6 bg-transparent text-white border-3 border-white font-black rounded-2xl hover:bg-white/10 transition-all duration-300 backdrop-blur-sm text-xl">
                    LinkedIn Profile
                </a>
                <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-12 py-6 bg-transparent text-white border-3 border-white font-black rounded-2xl hover:bg-white/10 transition-all duration-300 backdrop-blur-sm text-xl">
                    Company Website
                </a>
            </div>
        </div>
    </section>

    {{-- Modern Footer --}}
    <footer class="bg-slate-900 text-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12 mb-16">
                <div>
                    <h3 class="font-black text-2xl mb-6">Fakhar Khan</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Founder & CEO, SoftPyramid<br>
                        Enterprise Software Leadership
                    </p>
                    <div class="space-y-3 text-slate-300 mb-6">
                        <p>
                            <a href="mailto:fakhar@softpyramid.com" class="hover:text-white transition-colors font-bold">fakhar@softpyramid.com</a>
                        </p>
                        <p>
                            <a href="tel:+13852162631" class="hover:text-white transition-colors font-bold">385-216-2631</a>
                        </p>
                    </div>
                    <p class="text-slate-400 text-sm">
                        Richardson, TX
                    </p>
                </div>

                <div>
                    <h3 class="font-black text-2xl mb-6">Company</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-bold">SoftPyramid.com</a>
                        </li>
                        <li>
                            <a href="https://softpyramid.dev" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-bold">SoftPyramid.dev</a>
                        </li>
                        <li>
                            <a href="https://www.laravellive.pk" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-bold">Laravel Live Pakistan</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-black text-2xl mb-6">Connect</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="https://www.linkedin.com/in/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-bold">LinkedIn</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-bold">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-white transition-colors font-bold">Instagram</a>
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
