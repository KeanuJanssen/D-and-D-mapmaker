@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="row">
       <div class="col vh-87-1" style="background: lightgrey;">
           <div class="row py-4">
                <div class="col-12">
                    <h3>{{ auth()->user()->username }}</h3>
                </div>
                <div class="col-12 nav navbar-nav">
                    <ul class="navbar-nav mr-auto w-100">
                        <li class="w-100 navbar-listitem"><a class="btn btn-light nav-link" href="{{ url('/users/') }}">{{ __('Profiel bekijken') }}</a></li>
                        <li class="w-100 navbar-listitem"><a class="btn btn-light nav-link" href="{{ url('/users/edit') }}">{{ __('Wachtwoord wijzigen') }}</a></li>
                        <li class="w-100 navbar-listitem"><a class="btn btn-light nav-link" href="{{ url('/users/edit') }}">{{ __('Gegevens wijzigen') }}</a></li>
                        <li class="w-100 navbar-listitem">
                            <a class="btn btn-light nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
           </div>
       </div>
       <div class="col-10">
           <h2 class="gegevens-title">Wijzig gegevens</h2>
           <form action="">
                <div class="form-group d-flex justify-content-between col-5">
                    <label for="name">Naam:</label>
                    <input id="name" class="gegevens-input" type="text" placeholder="Voer hier een nieuwe naam adres in" value="{{ auth()->user()->username }}">
                </div>
                <div class="form-group d-flex justify-content-between col-5">
                    <label for="email">Email:</label>
                    <input id="email" class="gegevens-input" type="text" placeholder="Voer hier je nieuwe email adres in" value="{{ auth()->user()->email }}">
                </div>
                <input class="btn btn-primary" type="submit" value="Gegevens aanpassen">
           </form>
           <h2 class="gegevens-title">Wijzig wachtwoord</h2>
           <form action="">
                <div class="form-group d-flex justify-content-between col-5">
                    <label for="old-password">Oud wachtwoord:</label>
                    <input id="old-password" class="gegevens-input" type="text" placeholder="Voer hier je oude wachtwoord in">
                </div>
                <div class="form-group d-flex justify-content-between col-5">
                    <label for="new-password">Nieuw wachtwoord:</label>
                    <input id="new-password" class="gegevens-input" type="text" placeholder="Voer hier je nieuwe wachtwoord in">
                </div>
                <div class="form-group d-flex justify-content-between col-5">
                    <label for="repeat-new-password">Herhaal nieuw wachtwoord:</label>
                    <input id="repeat-new-password" class="gegevens-input" type="text" placeholder="Voer hier nogmaals je nieuwe wachtwoord in">
                </div>
                <input class="btn btn-primary" type="submit" value="Wachtwoord wijzigen">
           </form>
       </div>
   </div>
</div>
@endsection