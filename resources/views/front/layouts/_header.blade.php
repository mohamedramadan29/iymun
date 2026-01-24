<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  @yield('title') </title>
    <meta name="description" content="Join the premier youth diplomacy conference in New York City. IYADMUN & American Diplomats MUN - October 2026">

    <link rel="icon" type="image/png" href="{{ asset('assets/front/images/logo.webp') }}">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/main.css') }} ?v={{ time() }}">
    @yield('css')
    @toastifyCss
</head>
<body>
