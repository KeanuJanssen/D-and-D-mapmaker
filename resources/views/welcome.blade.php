@extends('layouts.app')

@section('content')
<div class="container vertical-middle">
    <div class="row home-page">
        <div class="col-10 backgrounded d-flex justify-content-center align-items-center">
            <div class="intro-text">
                <h2>Welkom bij de Dungeons & Dragons mapmaker!</h2>
                <p>Heb je ook genoeg van het telkens weer opnieuw tekenen van de dungeons in je campaign? Vraag je je af of er misschien een makkelijkere manier is? Hier is de oplossing! Met D&D mapmaker kun je zelf door middel van drag&drop functionaliteiten een speelveld maken.</p>
                <p></p>
            </div>
        </div>
        <div class="col-2 login-options">
            <div class="logo">
                <img class="w-100" src="{{ asset('img/lionflex_color.png') }}" alt="">
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column login-button-container">
                <a href="{{ url('/login') }}" class="btn btn-primary d-block w-100 login-button">Aanmelden</a>
                <a href="{{ url('/register') }}" class="btn btn-light d- w-100 login-button">Account aanmaken</a>
            </div>
        </div>
    </div>
</div>
@endsection