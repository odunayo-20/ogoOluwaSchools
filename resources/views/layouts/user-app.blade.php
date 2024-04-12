
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

      <!-- General CSS Files -->
      <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
      <!-- Template CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
      <!-- Custom style CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        </head>
    <body>

        {{ $slot }}
     
      @livewireScripts()
      <script src="{{ asset('assets/js/app.min.js') }}"></script>
      <!-- JS Libraies -->
      <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
      <!-- Page Specific JS File -->
      <script src="{{ asset('assets/js/page/index.js') }}"></script>
      <!-- Template JS File -->
      <script src="{{ asset('assets/js/scripts.js') }}"></script>
      <!-- Custom JS File -->
      <script src="{{ asset('assets/js/custom.js') }}"></script>

    </body>
</html>
