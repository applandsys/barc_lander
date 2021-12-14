@extends('layouts.app')

@section('content')


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Leads</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Session</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            </li>
        </ul>
        </div>
    </div>
</nav>

<br/>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Total Leads</h5>
                                  <p class="card-text">158222</p>
                                  <a href="#" class="btn btn-info">Go to Leads</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body text-center">
                                  <h5 class="card-title">Total Session</h5>
                                  <p class="card-text">20</p>
                                  <a href="#" class="btn btn-info">Go to Session</a>
                                </div>
                              </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
