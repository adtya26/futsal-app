@extends('layouts.app')

@section('content')

<h1 class="fw-bold mt-4">LOGIN</h1>

<div class="text-center mt-4">
    <div class="avatar mx-auto d-flex justify-content-center align-items-center">
        👤
    </div>
</div>

<form action="/dashboard" class="mt-5">

    <div class="mb-4">
        <label class="fw-bold mb-2">Email</label>
        <input type="email" class="form-control">
    </div>

    <div class="mb-5">
        <label class="fw-bold mb-2">Password</label>
        <input type="password" class="form-control">
    </div>

    <button class="btn btn-custom w-100 py-3">
        LOGIN
    </button>

</form>

@endsection