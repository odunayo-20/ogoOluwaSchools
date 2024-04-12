<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/frontend/logo/logo.png')}}' />

    <!-- General CSS Files -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}"> --}}
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/academics.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/admission.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/ads_guildlines.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/staff-confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/frontend/bootstrap-icons-1.10.5/bootstrap-icons-1.10.5/font/bootstrap-icons.min.css') }}">
        
    @livewireStyles


</head>

<body>
    @include('livewire.frontend.includes.nav-bar')
    {{ $slot }}
    @include('livewire.frontend.includes.footer')

    @livewireScripts
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"> </script> --}}

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     
    <script>
        setTimeout(function() {
    $(".alert").alert('close');
        }, 3500);
    </script>
   
</body>

</html>