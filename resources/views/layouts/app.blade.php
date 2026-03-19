<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO: Title --}}
    <title>@yield('title', 'Elevate Beverage Solution — Premium Bar Consultancy Ireland')</title>
    <meta name="description" content="@yield('description', 'Elevate Beverage Solution Ltd is a premium bar and beverage consultancy based in Ireland. We transform bars, pubs and hotels into profitable, high-performing operations.')">
    <meta name="keywords" content="@yield('keywords', 'bar consultancy Ireland, beverage consultant, cocktail menu development, bar training Ireland, pub consultancy, hospitality consultant Ireland')">
    <meta name="author" content="Elevate Beverage Solution Ltd">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Elevate Beverage Solution — Premium Bar Consultancy Ireland')">
    <meta property="og:description" content="@yield('og_description', 'We transform bars, pubs, hotels and hospitality venues into high-performing, profitable beverage operations. Based in Ireland.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:site_name" content="Elevate Beverage Solution Ltd">
    <meta property="og:locale" content="en_IE">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Elevate Beverage Solution — Premium Bar Consultancy Ireland')">
    <meta name="twitter:description" content="@yield('og_description', 'We transform bars, pubs, hotels and hospitality venues into high-performing, profitable beverage operations.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-image.jpg'))">

    {{-- Schema.org Structured Data --}}
    @php
    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'ProfessionalService',
        'name'        => 'Elevate Beverage Solution Ltd',
        'description' => 'Premium Bar & Beverage Consultancy based in Ireland, specialising in transforming bars, pubs, hotels and hospitality venues into high-performing, profitable operations.',
        'url'         => url('/'),
        'logo'        => asset('images/logo.png'),
        'image'       => asset('images/og-image.jpg'),
        'email'       => 'contact@elevatebeveragesolution.ie',
        'address'     => [
            '@type'          => 'PostalAddress',
            'addressCountry' => 'IE',
        ],
        'areaServed' => 'Ireland',
        'founder'    => [
            '@type'    => 'Person',
            'name'     => 'Gilbert Mihail',
            'jobTitle' => 'Managing Director & Lead Trainer',
        ],
        'sameAs' => [
            'https://www.instagram.com/elevatebeveragesolution',
            'https://www.tiktok.com/@elevatebeveragesolution',
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name'  => 'Bar & Beverage Consultancy Services',
            'itemListElement' => [
                [
                    '@type'       => 'Offer',
                    'itemOffered' => [
                        '@type'       => 'Service',
                        'name'        => 'Free 1-Day Bar Consultancy',
                        'description' => 'Full operational observation, menu evaluation, stock review and written strategic summary — completely free.',
                    ],
                ],
                [
                    '@type'       => 'Offer',
                    'itemOffered' => [
                        '@type'       => 'Service',
                        'name'        => 'Full Bar Development',
                        'description' => 'End-to-end bar business development for new openings or rebrands.',
                        'offers'      => [
                            '@type'         => 'Offer',
                            'priceCurrency' => 'EUR',
                            'priceRange'    => '€3500 - €6000',
                        ],
                    ],
                ],
                [
                    '@type'       => 'Offer',
                    'itemOffered' => [
                        '@type'       => 'Service',
                        'name'        => 'Staff Training & Development',
                        'description' => 'Mixology, speed service, guest experience and upselling coaching.',
                        'offers'      => [
                            '@type'         => 'Offer',
                            'priceCurrency' => 'EUR',
                            'priceRange'    => '€350 - €750',
                        ],
                    ],
                ],
            ],
        ],
    ];
    @endphp
    <script type="application/ld+json">{!! json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">

    @stack('head')
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.cookie-consent')

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
