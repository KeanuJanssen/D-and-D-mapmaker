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
                    <ul class="navbar-nav mr-auto">
                        <li><a class="nav-link" href="{{ url('/users/edit') }}">{{ __('Wachtwoord wijzigen') }}</a></li>
                        <li><a class="nav-link" href="{{ url('/users/edit') }}">{{ __('Gegevens wijzigen') }}</a></li>
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}"
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
           <div class="row py-4">
               <div class="col-12">
                   <h2>Wijzig gegevens</h2>
               </div>
           </div>
           <div class="row">
               <div class="col-2">
                    Naam:
               </div>
                <div class="col-10">
                    <input type="text" value="{{ auth()->user()->username }}">
                </div>
           </div>
           <div class="row">
               <div class="col-2">
                    Email:
               </div>
                <div class="col-10">
                    <input type="text" value="{{ auth()->user()->email }}">
                </div>
           </div>
           <button class="btn btn-primary">Gegevens aanpassen</button>
           <div class="row py-4">
               <div class="col-12">
                   <h2>Wachtwoord wijzigen</h2>
               </div>
           </div>
           <div class="row">
               <div class="col-2">
                    Oud wachtwoord:
               </div>
                <div class="col-10">
                    <input type="password" placeholder="Oud wachtwoord">
                </div>
           </div>
           <div class="row">
                <div class="col-2">
                    Nieuw wachtwoord:
                </div>
                <div class="col-10">
                    <input type="password" placeholder="Nieuw wachtwoord">
                </div>
           </div>
           <div class="row">
                <div class="col-2">
                    Herhaal Nieuw wachtwoord:
                </div>
                <div class="col-10">
                    <input type="password" placeholder="Herhaal nieuw wachtwoord">
                </div>
           </div>
           <button class="btn btn-primary">Wijzig wachtwoord</button>
       </div>
   </div>
</div>
@endsection