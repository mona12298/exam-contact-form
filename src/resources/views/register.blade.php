@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('btn')
<div class="header__btn">
    <a href="/register">login</a>
</div>
@endsection

@section('content')
<h2 class="site__title">Register</h2>
<div class="form">
    <!-- actionどこへ -->
    <form action="" method="post">
        @csrf
        <p class="form-item-label">お名前</p>
        <input
        type="text"
        name="name"
        placeholder="例: 山田 太郎"
        class="form-item-input"
        value="{{ old('name', session('contact.name')) }}">
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
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
        class="form-item-input">
        <input type="submit" name="submit" value="登録" class="form-btn"
        value="{{ old('password') }}">
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror>>
    </form>
</div>
@endsection