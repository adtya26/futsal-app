@extends('layouts.app')

@section('content')

<div class="d-flex flex-column justify-content-center align-items-center text-center" style="height:90vh">

    <!-- ICON -->
    <div style="font-size:120px">
        ⚽
    </div>

    <!-- TITLE -->
    <h1 class="fw-bold mt-3">
        Welcome,<br>
        To Futsal APP
    </h1>

    <p class="mt-2" style="opacity:0.8">
        Aplikasi manajemen jadwal & pertandingan futsal
    </p>

    <!-- BUTTON SECTION -->
    <div class="mt-5 w-100 px-3">

        <!-- GET STARTED (dummy / bisa diarahkan onboarding nanti) -->
        <button class="btn btn-light w-100 rounded-pill py-3 mb-3 fw-bold">
            Get Started
        </button>

        <!-- LOGIN -->
        <a href="{{ url('/login') }}" class="btn btn-custom w-100 py-3 fw-bold text-white">
            LOGIN
        </a>

    </div>

</div>

@endsection