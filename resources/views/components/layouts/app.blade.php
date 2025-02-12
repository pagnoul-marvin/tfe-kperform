<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="KPerforM, kperform">
    <meta name="description" content="Le site de KPerforM">
    <meta name="keywords" content="portfolio, kperform, KPerforM, rdv, RDV, marine, Marine, Pagnoul, pagnoul">

    <link rel="stylesheet" href="https://use.typekit.net/vfz5tyq.css">
    <title>KPerforM</title>
    @vite(['resources/css/app.css'])
</head>
<body>

<h1 class="hidden">KPerforM</h1>

<header></header>

<main>{{$slot}}</main>

</body>
</html>
