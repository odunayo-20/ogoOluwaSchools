
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/frontend/logo/logo.png')}}' />

      <!-- General CSS Files -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
      <!-- Template CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
      <!-- Custom style CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
      @livewireStyles
        </head>
    <body>
@include('livewire.student.includes.navbar')
@include('livewire.student.includes.sidebar')
        {{ $slot }}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <!-- JS Libraies -->
        <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="{{ asset('assets/js/page/index.js') }}"></script>
        <!-- Template JS File -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <!-- Custom JS File -->
      <script src="{{ asset('assets/js/custom.js') }}"></script>

      <script>
        setTimeout(function() {
    $(".alert").alert('close');
        }, 3500);
    </script>

        @livewireScripts
        @stack('script')
    </body>
</html>
