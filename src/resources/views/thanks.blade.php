@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@php $hideHeader = true; @endphp

@section('content')
<div class="container">
    <p class="background-txt">Thank you</p>
    <p class="front-content__txt">お問い合わせありがとうございました</p>
    <a href="/" class="front-content__button">HOME</a>
</div>
@endsection