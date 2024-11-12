<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Вхід</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Увійти</button>

        <div class="form-group">
            <a href="{{ route('password.request') }}">Забули пароль?</a>
        </div>
    </form>
</div>
@endsection
