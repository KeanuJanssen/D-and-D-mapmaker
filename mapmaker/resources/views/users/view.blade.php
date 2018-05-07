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
                        <li><a class="nav-link" href="{{ url('/user/edit') }}">{{ __('Wachtwoord wijzigen') }}</a></li>
                        <li><a class="nav-link" href="{{ url('/user/edit') }}">{{ __('Gegevens wijzigen') }}</a></li>
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
                   <h2>Profiel</h2>
               </div>
           </div>
           <div class="row">
               <div class="col-2">
                    Naam:
               </div>
                <div class="col-10">
                        {{ auth()->user()->username }}
                </div>
           </div>
           <div class="row">
               <div class="col-2">
                    Email:
               </div>
                <div class="col-10">
                        {{ auth()->user()->email }}
                </div>
           </div>
           <div class="row">
               <div class="col-2">
                    Maximaal aantal mappen:
               </div>
                <div class="col-10">
                        15
                </div>
           </div>
       </div>
   </div>
</div>
@endsection