@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mt-3">
    <h3 class="fw-bold">Profile</h3>
    <a href="/dashboard" class="text-white text-decoration-none">← Back</a>
</div>

<div class="text-center mt-4">

    <!-- Avatar -->
    <div style="
        width:120px;
        height:120px;
        background:white;
        border-radius:50%;
        margin:auto;
        display:flex;
        justify-content:center;
        align-items:center;
        box-shadow:0 4px 12px rgba(0,0,0,0.15);
    ">
        <span style="font-size:45px;">👤</span>
    </div>

    <h4 class="mt-3 fw-bold">Aditya</h4>
    <p style="opacity:0.8">Player Futsal</p>

</div>

<!-- CARD INFO -->
<div class="card-custom mt-4"
     style="background-color:#06384a; color:white;">

    <h5 class="fw-bold text-white">Informasi Akun</h5>

    <hr style="border-color:rgba(255,255,255,0.3);">

    <p class="text-white"><b>Email:</b> aditya@email.com</p>
    <p class="text-white"><b>No HP:</b> 08123456789</p>
    <p class="text-white"><b>Tim:</b> Nantes Futsal Academy</p>
    <p class="text-white"><b>Status:</b> Aktif</p>

</div>

<!-- STAT -->
<div class="row mt-4">

    <div class="col-6">
        <div class="card-custom text-center"
             style="background-color:#06384a; color:white;">
            <h2 class="text-white">14</h2>
            <p class="text-white">Match</p>
        </div>
    </div>

    <div class="col-6">
        <div class="card-custom text-center"
             style="background-color:#06384a; color:white;">
            <h2 class="text-white">17</h2>
            <p class="text-white">Goals</p>
        </div>
    </div>

</div>


<!-- BUTTON -->
<div class="mt-4">

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="btn btn-danger w-100 py-3 rounded-pill">
            Logout
        </button>

    </form>

</div>

@endsection