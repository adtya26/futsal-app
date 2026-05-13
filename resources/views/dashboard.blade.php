@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mt-3">
    <h2 class="fw-bold">Dashboard</h2>

    <div class="avatar"></div>
</div>

<h4 class="mt-4">
    Welcome, Aditya
</h4>

<div class="row mt-4">

    <div class="col-6 mb-3">
        <div class="card-custom">
            <h1>📅</h1>
            <h6 class="fw-bold">Jumlah pertandingan</h6>
            <p class="text-primary fw-bold">14 Match</p>
        </div>
    </div>

    <div class="col-6 mb-3">
        <div class="card-custom">
            <h1>👟</h1>
            <h6 class="fw-bold">Latihan Mingguan</h6>
            <p class="text-primary fw-bold">12 Sessions</p>
        </div>
    </div>

    <div class="col-6 mb-3">
        <div class="card-custom">
            <h1>🎯</h1>
            <h6 class="fw-bold">Gol Dicetak</h6>
            <p class="text-primary fw-bold">17 Goals</p>
        </div>
    </div>

    <div class="col-6 mb-3">
        <div class="card-custom">
            <h1>👥</h1>
            <h6 class="fw-bold">Tim Aktif</h6>
            <p class="text-primary fw-bold">3 Teams</p>
        </div>
    </div>

</div>

<div class="activity-box mt-3">

    <h3 class="fw-bold mb-4">
        Recent Activity
    </h3>

    <div class="mb-4">
        <h5>⚽ Latihan Tim Nantes</h5>
        <small>Sabtu, 18.00 WIB</small>
    </div>

    <div class="mb-4">
        <h5>🥅 Match Persahabatan</h5>
        <small>Minggu, 16.00 WIB</small>
    </div>

    <div class="mb-4">
        <h5>🏆 Turnamen Mini Futsal</h5>
        <small>17 Agustus 2026</small>
    </div>

</div>

<div class="menu-bottom">
    <a href="/dashboard">🏠</a>
    <a href="/match-detail">📅</a>
    <a href="#">👤</a>
    <a href="#">⚙️</a>
</div>

@endsection