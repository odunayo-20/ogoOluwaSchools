
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
      <link rel="stylesheet" href="{{ asset('assets/css/summernote-lite.css') }}">
      {{-- <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}"> --}}



<style>
    .project {
        position: relative;
        overflow: hidden;
        border-radius: 5px;
        border: 5px solid white;

    }

    .project .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(21, 20, 51, 0.8);
        padding: 30px;
        display: flex;
        align-items: flex-end;
        transition: all 0.4 ease;
        opacity: 0;
    }

    .project img {
        transition: all 0.4s ease;

    }

    .project:hover .overlay {
        opacity: 1;
    }

    .project:hover img {
        transform: scale(1.1);
    }


    .social-icons {
        display: flex;
        justify-content: center;

    }

    .edit-icons a {
        width: 34px;
        height: 34px;
        background-color: yellow;
        border-radius: 2px solid yellow;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px;
        margin-left: 5px;
        transition: all 0.4s ease;
        border: 2px solid yellow;

    }

    .edit-icons a:hover {
        color: yellow;
        background-color: transparent;
        border-color: yellow;
    }

    .trash-icons a {
        width: 34px;
        height: 34px;
        background-color: red;
        border-radius: 2px solid red;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px;
        margin-left: 5px;
        transition: all 0.4s ease;
        border: 2px solid red;

    }

    .trash-icons a:hover {
        color: red;
        background-color: transparent;
        border-color: red;
    }

        textarea{
            height:20rem;
            width:100%;
            border:2px solid gray;
            background-color: rgb(255, 255, 255);
            border-radius: 5px;
            resize: none;
        }


</style>
@livewireStyles
        </head>
    <body>
@include('livewire.admin.includes.navbar')
@include('livewire.admin.includes.sidebar')
{{ $slot }}

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">



<!-- JS Libraies -->
{{-- <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script> --}}
<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/index.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/summernote-lite.js') }}"></script>

      <script>
          setTimeout(function() {
              $(".alert").alert('close');
            }, 3500);
            </script>
            @livewireScripts
        @stack('script')
</html>
