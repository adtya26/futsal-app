@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mt-3">
    <a href="/dashboard" class="text-white text-decoration-none">
        ←
    </a>

    <h4 class="fw-bold">MATCH DETAIL</h4>

    <div class="avatar"></div>
</div>

<h2 class="fw-bold mt-4">
    Pertandingan Futsal Mingguan
</h2>

<div class="mt-5">

   <!-- DETAIL MATCH CONTAINER -->
<div class="mt-5 p-4 rounded-4 shadow-sm"
     style="background-color:#06384a; color:white;">

    <div class="mb-4">
        <h5 class="text-white">📍 Lapangan</h5>
        <p class="mb-0 text-white">Lapangan Tifosi Sports Center</p>
    </div>

    <hr style="border-color:rgba(255,255,255,0.3);">

    <div class="mb-4">
        <h5 class="text-white">📅 Tanggal</h5>
        <p class="mb-0 text-white">Minggu, 10 Mei 2026</p>
    </div>

    <hr style="border-color:rgba(255,255,255,0.3);">

    <div class="mb-4">
        <h5 class="text-white">⏰ Waktu</h5>
        <p class="mb-0 text-white">09.35 WIB</p>
    </div>

    <hr style="border-color:rgba(255,255,255,0.3);">

    <div>
        <h5 class="text-white">📌 Status</h5>

        <span class="badge bg-info">
            Aktif
        </span>
    </div>

</div>

</div>

<h4 class="fw-bold mt-4">
    Tim Pemain
</h4>

<div class="d-flex gap-3 mt-3">
    <div class="avatar"></div>
    <div class="avatar"></div>
    <div class="avatar"></div>
    <div class="avatar"></div>
</div>

<h4 class="fw-bold mt-5">
    Sub-Task (Persiapan)
</h4>

<!-- SUB TASK CONTAINER -->
<div class="mt-3 p-4 rounded-4 shadow-sm"
     style="background-color:#06384a; color:white;">

    <div class="form-check mb-3 d-flex align-items-center">

        <input class="form-check-input m-0" type="checkbox" checked>

        <label class="form-check-label text-white ms-2 mb-0">
            Bawa Sepatu Futsal
        </label>

    </div>

    <div class="form-check mb-3 d-flex align-items-center">

        <input class="form-check-input m-0" type="checkbox">

        <label class="form-check-label text-white ms-2 mb-0">
            Siapkan Jersey
        </label>

    </div>

    <div class="form-check mb-3 d-flex align-items-center">

        <input class="form-check-input m-0" type="checkbox">

        <label class="form-check-label text-white ms-2 mb-0">
            Isi Botol Minum
        </label>

    </div>

</div>

<h4 class="fw-bold mt-5 text-white">
    Komentar
</h4>

<!-- KOMENTAR CONTAINER -->
<div class="d-flex align-items-center mt-3 p-3 rounded-4 shadow-sm"
     style="background-color:#06384a; color:white;">

    <div class="avatar me-3"></div>

    <div>
        <h6 class="mb-1 text-white">Nicky</h6>
        <small class="text-white">Jangan lupa datang tepat waktu!</small>
    </div>

</div>
</div>

<div class="menu-bottom">
    <a href="/dashboard">🏠</a>
    <a href="/match-detail">📅</a>
    <a href="#">👤</a>
    <a href="#">⚙️</a>
</div>

@endsection