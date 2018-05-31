@extends('layouts.app')

@section('content')
<div class="container vertical-middle">
    <div class="row home-page">
        <div class="col-10 backgrounded d-flex justify-content-center align-items-center">
            <div class="intro-text">
                <h2>Hallo en dit is een test bericht</h2>
                <p>Super handig toch zo'n mooi test bericht? Er staat heel veel tekst in en het is mooier dan je zou denken. Normaal gebruik ik hier Lorem ipsum voor maar aangezien de emmet van Visual studio code dat niet ondersteunt doe ik het even op deze manier. Nu ik er zo over nadenk kan ik ook naar de site gaan van Lorem ipsum en daar een tekst van kopiëren en plakken. Bedankt brein!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod tortor in dui cursus viverra. Etiam pretium augue id massa tincidunt facilisis. Quisque ante tellus, dignissim in ultrices eu, placerat bibendum nunc. Morbi id augue non tellus facilisis imperdiet ut ut turpis. Donec consequat mi vel lectus mollis tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc in lacinia odio. Nam dapibus vitae nibh ac porttitor.</p>
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