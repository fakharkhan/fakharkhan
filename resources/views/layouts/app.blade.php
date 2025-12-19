<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Primary Meta Tags --}}
    <title>Fakhar Khan — Founder & CEO, SoftPyramid | Enterprise Software Leadership</title>
    <meta name="title" content="Fakhar Khan — Founder & CEO, SoftPyramid | Enterprise Software Leadership">
    <meta name="description" content="Engineering-driven executive with global delivery experience, community leadership, and enterprise software execution. Founder & CEO of SoftPyramid.">
    <meta name="keywords" content="Fakhar Khan, SoftPyramid, Laravel, Enterprise Software, CEO, Founder, Software Engineering, Pakistan, Laravel Live Pakistan">
    <meta name="author" content="Fakhar Khan">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://fakharkhan.com">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://fakharkhan.com">
    <meta property="og:title" content="Fakhar Khan — Founder & CEO, SoftPyramid">
    <meta property="og:description" content="Engineering-driven executive with global delivery experience, community leadership, and enterprise software execution.">
    <meta property="og:image" content="https://fakharkhan.com/images/og-image.jpg">
    <meta property="og:site_name" content="Fakhar Khan">
    <meta property="og:locale" content="en_US">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://fakharkhan.com">
    <meta name="twitter:title" content="Fakhar Khan — Founder & CEO, SoftPyramid">
    <meta name="twitter:description" content="Engineering-driven executive with global delivery experience, community leadership, and enterprise software execution.">
    <meta name="twitter:image" content="https://fakharkhan.com/images/twitter-image.jpg">
    <meta name="twitter:creator" content="@fakharkhan">

    {{-- Structured Data (JSON-LD) --}}
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Person",
                "@id": "https://fakharkhan.com/#person",
                "name": "Fakhar Khan",
                "url": "https://fakharkhan.com",
                "image": "https://fakharkhan.com/images/fakhar-khan.jpg",
                "jobTitle": "Founder & CEO",
                "worksFor": {
                    "@id": "https://fakharkhan.com/#organization"
                },
                "sameAs": [
                    "https://www.linkedin.com/in/fakharkhan",
                    "https://www.facebook.com/fakharkhan",
                    "https://www.instagram.com/fakharkhan"
                ],
                "knowsAbout": [
                    "Laravel",
                    "Enterprise Software Development",
                    "Software Architecture",
                    "Ruby on Rails",
                    "Microsoft .NET",
                    "AI Automation",
                    "n8n"
                ],
                "alumniOf": {
                    "@type": "Organization",
                    "name": ""
                }
            },
            {
                "@type": "Organization",
                "@id": "https://fakharkhan.com/#organization",
                "name": "SoftPyramid",
                "url": "https://softpyramid.com",
                "logo": "https://softpyramid.com/images/logo.png",
                "foundingDate": "2023-10",
                "founder": {
                    "@id": "https://fakharkhan.com/#person"
                },
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Lahore",
                    "addressCountry": "PK"
                },
                "sameAs": [
                    "https://softpyramid.com",
                    "https://softpyramid.dev"
                ]
            },
            {
                "@type": "Event",
                "name": "Laravel Live Pakistan",
                "description": "Annual Laravel conference organized in Pakistan",
                "url": "https://www.laravellive.pk",
                "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                "eventStatus": "https://schema.org/EventScheduled",
                "location": {
                    "@type": "Place",
                    "name": "",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "",
                        "addressCountry": "PK"
                    }
                },
                "organizer": {
                    "@id": "https://fakharkhan.com/#person"
                },
                "startDate": "",
                "endDate": ""
            },
            {
                "@type": "Event",
                "name": "n8n AI Automation Workshop",
                "description": "Executive-level workshop on AI workflow automation using n8n",
                "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                "eventStatus": "https://schema.org/EventScheduled",
                "location": {
                    "@type": "Place",
                    "name": "",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "",
                        "addressCountry": ""
                    }
                },
                "organizer": {
                    "@id": "https://fakharkhan.com/#person"
                },
                "startDate": "",
                "endDate": ""
            }
        ]
    }
    </script>
    @endverbatim

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-900 antialiased">
    @yield('content')
</body>
</html>
