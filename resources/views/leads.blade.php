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
            <a class="nav-link " href="#">Leads</a>
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

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Joining</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($leads as $lead)
                    <tr>
                        <th scope="row">{{ $lead->id }}</th>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->created_at }}</td>
                        <td><a href="" class="btn btn-warning">Send</td>
                    </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $leads->links() }}
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
