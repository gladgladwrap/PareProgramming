<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} Web Services</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon/android-chrome-512x512.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="We are dedicated to pairing together programmers in the hopes that they begin to practice pair programming. We also provide a variety of business services.">
    <meta name="author" content="Dylan Cooper">

</head>
<body>
    <div id="app">
        @include ('layouts.nav')

        <main class="container-fluid">

                @yield('content')

        </main>

        @include ('layouts.footer')
        
    </div><!-- End of #app --> 

    <script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Organization",
  "name": "Pare Programming",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "50 main Street",
    "addressLocality": "Liverpool",
    "addressRegion": "Nova Scotia",
    "postalCode": "B0T1K0"
  },
  "telephone": "5196948879"
}

</script>
</body>
</html>
