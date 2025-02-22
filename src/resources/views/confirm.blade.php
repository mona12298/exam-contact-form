@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<h2>Confirm</h2>
<table>
    <tr>
        <th>お名前</th>
        <td>{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td>
    </tr>
    <tr>
        <th>性別</th>
        <td>{{ $contact['gender_text'] }}</td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td>{{$contact['email']}} </td>
    </tr>
    <tr>
        <th>電話番号</th>
        <td>{{$contact['tel1'] . '-' . $contact['tel2'] . '-' . $contact['tel3']}}
        </td>
    </tr>
    <tr>
        <th>住所</th>
        <td>{{$contact['address']}} </td>
    </tr>
    <tr>
        <th>建物名</th>
        <td>{{$contact['building']}} </td>
    </tr>
    <tr>
        <th>お問い合わせの種類</th>
        <td>{{ $contact['category_content'] }}
        </td>
    </tr>
    <tr>
        <th>お問い合わせの内容</th>
        <td>{{$contact['detail']}} </td>
    </tr>
</table>
<form action="/store" method="post">
    @csrf
    <div class="btn-wrapper">
        <input
        type="submit"
        name="submit"
        class="form-btn"
        value="送信">
        <a href="/" class="form-modify">修正</a>
    </div>
</form>
@endsection