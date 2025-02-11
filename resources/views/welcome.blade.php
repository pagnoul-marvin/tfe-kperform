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
<body class="welcome flex">

<h1 class="hidden">KPerforM</h1>

<header class="eaves welcome_header">

    <h2 class="bold welcome_header_title">{{__('texts.welcome_to_kperform')}}</h2>

    <p class="welcome_header_tagline">{{__('texts.kperform_your_office')}}</p>

    <div class="lines flex">
        <svg width="1088" height="31" viewBox="0 0 1088 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H1088V31H42.5113L0 0Z" fill="#FF8C00"/>
        </svg>

        <svg width="960" height="31" viewBox="0 0 960 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H960V31H37.5099L0 0Z" fill="#706F6F"/>
        </svg>
    </div>

</header>

<main class="eaves welcome_content flex">

    <div class="welcome_content_container flex">

        <section class="welcome_content_container_section flex">

            <h2 class="welcome_content_container_section_title bold">{{__('texts.portfolio')}}</h2>

            <p class="welcome_content_container_section_text">{{__('texts.portfolio_explanation')}}</p>

            <a class="welcome_content_container_section_link" href="{{route('portfolio-home')}}" title="{{__('texts.go_to_portfolio')}}"></a>

        </section>

        <section class="welcome_content_container_section flex">

            <h2 class="welcome_content_container_section_title bold">{{__('texts.appointment_app')}}</h2>

            <p class="welcome_content_container_section_text">{{__('texts.appointment_app_explanation')}}</p>

            <a class="welcome_content_container_section_link" href="{{route('appointment-login')}}" title="{{__('texts.go_to_appointment_app')}}"></a>

        </section>

    </div>

</main>

</body>
</html>
