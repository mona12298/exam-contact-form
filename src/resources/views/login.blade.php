@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('btn')
<div class="header__btn">
    <a href="/register">register</a>
</div>
@endsection

@section('content')
<h2 class="site__title">Login</h2>
<div class="form">
    <!-- actionどこへ -->
    <form action="/login" method="post">
        @csrf
        <p class="form-item-label">メールアドレス</p>
        <input
        type="email"
        name="email"
        placeholder="例: test@example.com"
        class="form-item-input"
        value="{{ old('email', session('contact.email')) }}">
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
        <p class="form-item-label">パスワード</p>
        <input
        type="password"
        name="password"
        placeholder="例: coachtech1106"
        class="form-item-input"
        value="{{ old('password') }}">
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror
        <input type="submit" name="submit" value="ログイン" class="form-btn">
    </form>
</div>
@endsection