@extends('layouts.app')

@section('content')
    {{-- Executive Hero Section --}}
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                        Fakhar Khan
                    </h1>
                    <p class="text-2xl lg:text-3xl text-slate-700 mb-8 font-medium">
                        Founder & CEO — SoftPyramid
                    </p>
                    <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-2xl">
                        Enterprise software leadership, community impact, and global delivery. Engineering-driven executive with proven track record in scalable systems and operational excellence.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-12">
                        <a href="https://cal.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-8 py-3 bg-slate-900 text-white font-medium rounded-sm hover:bg-slate-800 transition-colors">
                            Schedule a Business Call
                        </a>
                        <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-8 py-3 bg-white text-slate-900 border-2 border-slate-900 font-medium rounded-sm hover:bg-slate-50 transition-colors">
                            Company Overview
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-8 pt-8 border-t border-slate-200">
                        <div>
                            <div class="text-3xl font-bold text-slate-900 mb-1">
                                {{-- PLACEHOLDER: Years of experience --}}
                                18+
                            </div>
                            <div class="text-sm text-slate-600">
                                Years Experience
                            </div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-slate-900 mb-1">
                                {{-- PLACEHOLDER: Global clients served --}}
                                50+
                            </div>
                            <div class="text-sm text-slate-600">
                                Global Clients
                            </div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-slate-900 mb-1">
                                {{-- PLACEHOLDER: Communities led --}}
                                6
                            </div>
                            <div class="text-sm text-slate-600">
                                Major Events
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:pl-12">
                    {{-- PLACEHOLDER: Executive headshot --}}
                    <div class="bg-slate-100 aspect-[4/5] rounded-sm border border-slate-200 flex items-center justify-center">
                        <span class="text-slate-400 text-sm">Executive Portrait</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Executive Summary --}}
    <section class="bg-white py-20">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-slate-900 mb-8">Executive Summary</h2>
            <div class="prose prose-lg prose-slate max-w-none">
                <p class="text-lg text-slate-700 leading-relaxed mb-6">
                    With over {{-- PLACEHOLDER: Years --}} years in enterprise software development, Fakhar Khan has built a career on technical excellence and strategic execution. Beginning with Microsoft .NET in 2006, the transition to Laravel in 2013 marked a shift toward scalable, maintainable systems that serve global clients across real estate, education, and technology sectors.
                </p>
                <p class="text-lg text-slate-700 leading-relaxed mb-6">
                    Leadership extends beyond code. As the organizer of Laravel Live Pakistan since 2016, Fakhar has established the country's premier Laravel conference, bringing together thousands of developers and industry leaders. This community leadership translates directly into business outcomes: understanding market needs, building strategic partnerships, and delivering solutions that scale.
                </p>
                <p class="text-lg text-slate-700 leading-relaxed">
                    As Founder & CEO of SoftPyramid, founded in October 2023, Fakhar leads a consultancy that combines deep technical expertise with operational discipline. The company serves clients including RE/MAX, Keller Williams, and international organizations like Browns English Language School in Australia, demonstrating capability across borders and industries.
                </p>
            </div>
        </div>
    </section>

    {{-- Professional Timeline --}}
    <section class="bg-slate-50 py-20 border-y border-slate-200">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-slate-900 mb-12">Professional Timeline</h2>
            <div class="space-y-8">
                <div class="flex gap-6">
                    <div class="flex-shrink-0 w-24 text-right">
                        <div class="text-sm font-semibold text-slate-900">2006</div>
                    </div>
                    <div class="flex-1 pb-8 border-l-2 border-slate-300 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">Software Career Begins</h3>
                        <p class="text-slate-700">Started professional software development career with Microsoft .NET framework, building enterprise applications for business clients.</p>
                    </div>
                </div>

                <div class="flex gap-6">
                    <div class="flex-shrink-0 w-24 text-right">
                        <div class="text-sm font-semibold text-slate-900">2013</div>
                    </div>
                    <div class="flex-1 pb-8 border-l-2 border-slate-300 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">Laravel Adoption</h3>
                        <p class="text-slate-700">Adopted Laravel for scalable systems development, recognizing its potential for rapid, maintainable enterprise solutions.</p>
                    </div>
                </div>

                <div class="flex gap-6">
                    <div class="flex-shrink-0 w-24 text-right">
                        <div class="text-sm font-semibold text-slate-900">2016</div>
                    </div>
                    <div class="flex-1 pb-8 border-l-2 border-slate-300 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">Laravel Live Pakistan Inaugural</h3>
                        <p class="text-slate-700">Organized the first Laravel Live Pakistan conference, establishing Pakistan's premier Laravel community event.</p>
                    </div>
                </div>

                <div class="flex gap-6">
                    <div class="flex-shrink-0 w-24 text-right">
                        <div class="text-sm font-semibold text-slate-900">2018</div>
                    </div>
                    <div class="flex-1 pb-8 border-l-2 border-slate-300 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">Laravel Certification</h3>
                        <p class="text-slate-700">Achieved Laravel Certification (Pakistan), demonstrating advanced expertise in the framework. {{-- PLACEHOLDER: Certification proof URL --}}</p>
                    </div>
                </div>

                <div class="flex gap-6">
                    <div class="flex-shrink-0 w-24 text-right">
                        <div class="text-sm font-semibold text-slate-900">2020</div>
                    </div>
                    <div class="flex-1 pb-8 border-l-2 border-slate-300 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">Ruby on Rails Expansion</h3>
                        <p class="text-slate-700">Expanded technical expertise to include Ruby on Rails, broadening capability for diverse client requirements.</p>
                    </div>
                </div>

                <div class="flex gap-6">
                    <div class="flex-shrink-0 w-24 text-right">
                        <div class="text-sm font-semibold text-slate-900">2023</div>
                    </div>
                    <div class="flex-1 pl-6">
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">SoftPyramid Founded</h3>
                        <p class="text-slate-700">Established SoftPyramid as a consultancy focused on enterprise software delivery, combining technical depth with operational excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industry & Community Leadership --}}
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-4xl mb-12">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Industry & Community Leadership</h2>
                <p class="text-lg text-slate-700 leading-relaxed">
                    Community leadership is strategic business development. Organizing Laravel Live Pakistan positions SoftPyramid at the center of Pakistan's technology ecosystem, enabling partnerships, talent acquisition, and market intelligence that directly benefit client delivery.
                </p>
            </div>

            <div class="mb-8">
                <h3 class="text-2xl font-semibold text-slate-900 mb-6">Laravel Live Pakistan</h3>
                <p class="text-slate-700 mb-6">
                    Official website: <a href="https://www.laravellive.pk" target="_blank" rel="noopener noreferrer" class="text-slate-900 font-medium underline hover:text-slate-700">https://www.laravellive.pk</a>
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
                <div class="border border-slate-200 rounded-sm p-6 bg-white hover:border-slate-300 transition-colors">
                    <div class="text-sm font-semibold text-slate-500 mb-2">{{ $event['year'] }}</div>
                    <h4 class="text-xl font-semibold text-slate-900 mb-4">Laravel Live Pakistan {{ $event['year'] }}</h4>
                    <div class="space-y-2 text-sm text-slate-700">
                        <div>
                            <span class="font-medium">Location:</span> {{ $event['city'] }}
                        </div>
                        <div>
                            <span class="font-medium">Audience:</span> {{ $event['audience'] }}
                        </div>
                        <div>
                            <span class="font-medium">Partners:</span> {{ $event['partners'] }}
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-100">
                        {{-- PLACEHOLDER: Event images --}}
                        <div class="bg-slate-50 aspect-video rounded-sm flex items-center justify-center">
                            <span class="text-slate-400 text-xs">Event Media</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- AI Automation Leadership (n8n) --}}
    <section class="bg-slate-50 py-20 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-4xl mb-12">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">AI Automation Leadership</h2>
                <p class="text-lg text-slate-700 leading-relaxed mb-4">
                    Automation is operational leverage. Through n8n workshops, Fakhar shares executive-level knowledge on AI workflow adoption, positioning automation as a strategic business capability rather than experimental technology.
                </p>
                <p class="text-lg text-slate-700 leading-relaxed">
                    These workshops focus on practical business use cases, enabling organizations to reduce operational overhead, improve data flow, and scale processes without proportional headcount increases.
                </p>
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
                <div class="bg-white border border-slate-200 rounded-sm p-6">
                    <div class="text-sm font-semibold text-slate-500 mb-2">{{ $workshop['date'] }}</div>
                    <h4 class="text-xl font-semibold text-slate-900 mb-4">n8n Workshop — {{ $workshop['city'] }}</h4>
                    <div class="space-y-2 text-sm text-slate-700 mb-4">
                        <div>
                            <span class="font-medium">Audience:</span> {{ $workshop['audience'] }}
                        </div>
                        <div>
                            <span class="font-medium">Focus:</span> {{ $workshop['focus'] }}
                        </div>
                    </div>
                    <div class="pt-4 border-t border-slate-100">
                        {{-- PLACEHOLDER: Workshop media assets --}}
                        <div class="bg-slate-50 aspect-video rounded-sm flex items-center justify-center">
                            <span class="text-slate-400 text-xs">Workshop Media</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SoftPyramid — Company Leadership --}}
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-4xl mb-12">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">SoftPyramid — Company Leadership</h2>
                <p class="text-lg text-slate-700 leading-relaxed">
                    SoftPyramid is a serious consultancy, not a startup story. Founded in October 2023 with headquarters in Lahore, the company builds on years of proven delivery to US and international clients, combining technical depth with operational discipline.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 mb-12">
                <div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-6">Company Overview</h3>
                    <div class="space-y-4 text-slate-700">
                        <div>
                            <span class="font-semibold text-slate-900">Founded:</span> October 2023
                        </div>
                        <div>
                            <span class="font-semibold text-slate-900">Headquarters:</span> Lahore, Pakistan
                        </div>
                        <div>
                            <span class="font-semibold text-slate-900">Operations:</span> Global delivery, US market focus
                        </div>
                        <div>
                            <span class="font-semibold text-slate-900">Early Traction:</span> US market experience since 2018–2020
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-semibold text-slate-900 mb-3">Company Links</h4>
                        <div class="space-y-2">
                            <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="block text-slate-700 hover:text-slate-900 underline">https://softpyramid.com</a>
                            <a href="https://softpyramid.dev" target="_blank" rel="noopener noreferrer" class="block text-slate-700 hover:text-slate-900 underline">https://softpyramid.dev</a>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-6">Client Experience</h3>
                    <div class="space-y-6">
                        <div class="border-l-4 border-slate-900 pl-4">
                            <h4 class="font-semibold text-slate-900 mb-2">Real Estate Technology</h4>
                            <ul class="text-slate-700 space-y-1 text-sm">
                                <li>• RE/MAX</li>
                                <li>• Keller Williams</li>
                            </ul>
                        </div>

                        <div class="border-l-4 border-slate-900 pl-4">
                            <h4 class="font-semibold text-slate-900 mb-2">International Education</h4>
                            <ul class="text-slate-700 space-y-1 text-sm">
                                <li>• Browns English Language School (Australia)</li>
                                <li>• Student Study Management System</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Selected Case Engagements --}}
    <section class="bg-slate-50 py-20 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-slate-900 mb-12">Selected Case Engagements</h2>

            <div class="space-y-12">
                <div class="bg-white border border-slate-200 rounded-sm p-8">
                    <div class="mb-6">
                        <h3 class="text-2xl font-semibold text-slate-900 mb-2">Real Estate Platform Modernization</h3>
                        <p class="text-slate-600 text-sm">Client: {{-- PLACEHOLDER: Client name --}}</p>
                    </div>
                    <div class="space-y-4 text-slate-700">
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Business Problem</h4>
                            <p>{{-- PLACEHOLDER: Business problem description --}}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Strategic Solution</h4>
                            <p>{{-- PLACEHOLDER: Strategic solution description --}}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Technology Stack</h4>
                            <p>{{-- PLACEHOLDER: Technology stack --}}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Outcome Metrics</h4>
                            <p>{{-- PLACEHOLDER: Outcome metrics --}}</p>
                        </div>
                        <div class="pt-4 border-t border-slate-200">
                            <p class="italic text-slate-600">"{{-- PLACEHOLDER: Client testimonial --}}"</p>
                            <p class="text-sm text-slate-500 mt-2">— {{-- PLACEHOLDER: Client name and title --}}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-sm p-8">
                    <div class="mb-6">
                        <h3 class="text-2xl font-semibold text-slate-900 mb-2">International Education Management System</h3>
                        <p class="text-slate-600 text-sm">Client: Browns English Language School (Australia)</p>
                    </div>
                    <div class="space-y-4 text-slate-700">
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Business Problem</h4>
                            <p>{{-- PLACEHOLDER: Business problem description --}}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Strategic Solution</h4>
                            <p>{{-- PLACEHOLDER: Strategic solution description --}}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Technology Stack</h4>
                            <p>{{-- PLACEHOLDER: Technology stack --}}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-2">Outcome Metrics</h4>
                            <p>{{-- PLACEHOLDER: Outcome metrics --}}</p>
                        </div>
                        <div class="pt-4 border-t border-slate-200">
                            <p class="italic text-slate-600">"{{-- PLACEHOLDER: Client testimonial --}}"</p>
                            <p class="text-sm text-slate-500 mt-2">— {{-- PLACEHOLDER: Client name and title --}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Professional Endorsements --}}
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-slate-900 mb-12">Professional Endorsements</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $testimonials = [
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}'],
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}'],
                        ['name' => '{{-- PLACEHOLDER: Name --}}', 'title' => '{{-- PLACEHOLDER: Executive title --}}', 'company' => '{{-- PLACEHOLDER: Company --}}', 'quote' => '{{-- PLACEHOLDER: Testimonial quote --}}'],
                    ];
                @endphp

                @foreach($testimonials as $testimonial)
                <div class="border border-slate-200 rounded-sm p-6">
                    <div class="mb-4">
                        {{-- PLACEHOLDER: Headshot --}}
                        <div class="w-16 h-16 bg-slate-100 rounded-full mb-4 flex items-center justify-center">
                            <span class="text-slate-400 text-xs">Photo</span>
                        </div>
                    </div>
                    <p class="text-slate-700 italic mb-4">"{{ $testimonial['quote'] }}"</p>
                    <div class="pt-4 border-t border-slate-100">
                        <p class="font-semibold text-slate-900">{{ $testimonial['name'] }}</p>
                        <p class="text-sm text-slate-600">{{ $testimonial['title'] }}</p>
                        <p class="text-sm text-slate-600">{{ $testimonial['company'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Executive Call-To-Action --}}
    <section id="contact" class="bg-slate-900 text-white py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">Let's discuss outcomes, not just technology.</h2>
            <p class="text-lg text-slate-300 mb-6 max-w-2xl mx-auto">
                Enterprise software delivery requires strategic thinking, technical depth, and operational discipline. Let's explore how we can achieve your business objectives.
            </p>

            <div class="flex flex-wrap justify-center gap-3 mb-8 text-slate-300">
                <a href="mailto:fakhar@softpyramid.com" class="hover:text-white">fakhar@softpyramid.com</a>
                <span class="text-slate-500">•</span>
                <a href="tel:+13852162631" class="hover:text-white">385-216-2631</a>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://cal.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-8 py-3 bg-white text-slate-900 font-medium rounded-sm hover:bg-slate-100 transition-colors">
                    Schedule a Call
                </a>
                <a href="https://www.linkedin.com/in/fakharkhan" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-8 py-3 bg-slate-800 text-white border-2 border-white font-medium rounded-sm hover:bg-slate-700 transition-colors">
                    LinkedIn Profile
                </a>
                <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-8 py-3 bg-slate-800 text-white border-2 border-white font-medium rounded-sm hover:bg-slate-700 transition-colors">
                    Company Website
                </a>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-white border-t border-slate-200 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="font-semibold text-slate-900 mb-4">Fakhar Khan</h3>
                    <p class="text-sm text-slate-600 mb-4">
                        Founder & CEO, SoftPyramid<br>
                        Enterprise Software Leadership
                    </p>
                    <div class="space-y-2 text-sm text-slate-600 mb-4">
                        <p>
                            <a href="mailto:fakhar@softpyramid.com" class="hover:text-slate-900">fakhar@softpyramid.com</a>
                        </p>
                        <p>
                            <a href="tel:+13852162631" class="hover:text-slate-900">385-216-2631</a>
                        </p>
                    </div>
                    <p class="text-sm text-slate-500">
                        Richardson, TX
                    </p>
                </div>

                <div>
                    <h3 class="font-semibold text-slate-900 mb-4">Company</h3>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="https://softpyramid.com" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-slate-900">SoftPyramid.com</a>
                        </li>
                        <li>
                            <a href="https://softpyramid.dev" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-slate-900">SoftPyramid.dev</a>
                        </li>
                        <li>
                            <a href="https://www.laravellive.pk" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-slate-900">Laravel Live Pakistan</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-slate-900 mb-4">Connect</h3>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="https://www.linkedin.com/in/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-slate-900">LinkedIn</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-slate-900">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/fakharkhan" target="_blank" rel="noopener noreferrer" class="text-slate-600 hover:text-slate-900">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-200">
                <p class="text-sm text-slate-500 text-center">
                    &copy; {{ date('Y') }} Fakhar Khan. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
@endsection

