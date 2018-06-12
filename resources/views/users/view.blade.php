@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="row">
       <div class="col vh-87-1" style="background: #ffdead;">
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
                                {{ __('Uitloggen') }}
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
            <h2 class="gegevens-title">Profiel</h2>
            <div class="form-group d-flex justify-content-between col-5 row">
                <p class="col-4 h4">Naam:</p>
                <p class="col-8 h4">{{ auth()->user()->username }}</p>
            </div>
            <div class="form-group d-flex justify-content-between col-5 row">
                <p class="col-4 h4">Email:</p>
                <p class="col-8 h4">{{ auth()->user()->email }}</p>
            </div>
            <div class="form-group d-flex justify-content-between col-5 row">
                <p class="col-4 h4">Aantal mappen:</p>
                <p class="col-8 h4">15</p>
            </div>
       </div>
   </div>
</div>
@endsection