@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<h2>Contact</h2>

<form class="form" action="/confirm" method="POST">
    @csrf
    <div class="form-item">
        <label class="form-item-label">お名前<span>※</span></label>
        <div class="form-item-content">
            <div class="form-item-content-name">
                <input
                    type="text"
                    name="last_name"
                    placeholder="例: 山田"
                    class="form-item-input form-item-input--last-name"
                    value="{{ old('last_name', session('contact.last_name')) }}">
                        @error('last_name')
                        <p class="error">{{ $message }}</p>
                        @enderror
                <input
                    type="text"
                    name="first_name"
                    placeholder="例: 太郎"
                    class="form-item-input form-item-input--first-name"
                    value="{{ old('first_name', session('contact.first_name')) }}">
                        @error('first_name')
                        <p class="error">{{ $message }}</p>
                    @enderror
            </div>
        </div>
    </div>

    <div class="form-item">
        <label class="form-item-label">性別<span>※</span></label>
        <div class="form-item-content">
            <label><input type="radio" name="gender" value="1" class="form-item-input-radio" {{ old('gender', '1') == '1' ? 'checked' : '' }}>男性</label>
            <label><input type="radio" name="gender" value="2" class="form-item-input-radio" {{ old('gender') == '2' ? 'checked' : '' }}>女性</label>
            <label><input type="radio" name="gender" value="3" class="form-item-input-radio" {{ old('gender') == '3' ? 'checked' : '' }}>その他</label>
            @error('gender')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="form-item">
        <label class="form-item-label">メールアドレス<span>※</span></label>
        <div class="form-item-content">
            <input
                type="email"
                name="email"
                placeholder="例: test@example.com"
                class="form-item-input"
                value="{{ old('email', session('contact.email')) }}">
                @error('email')
                <p class="error">{{ $message }}</p>
                @enderror
        </div>
    </div>

    <div class="form-item">
        <label class="form-item-label">電話番号<span>※</span></label>
        <div class="form-item-content form-item-content-tel">
            <input
                type="tel"
                name="tel1"
                placeholder="例: 080"
                class="form-item-input form-item-input-tel"
                value="{{ old('tel1', session('contact.tel1')) }}">
            <span class="dash">-</span>
            <input
                type="tel"
                name="tel2"
                placeholder="例: 1234"
                class="form-item-input form-item-input-tel"
                value="{{ old('tel2', session('contact.tel2')) }}">
            <span class="dash">-</span>
            <input
                type="tel"
                name="tel3"
                placeholder="例: 5678"
                class="form-item-input form-item-input-tel"
                value="{{ old('tel3', session('contact.tel3')) }}">
        </div>
        @error('tel')
        <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-item">
        <label class="form-item-label">住所<span>※</span></label>
        <div class="form-item-content">
            <input
                type="text"
                name="address"
                class="form-item-input"
                placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3"
                value="{{ old('address', session('contact.address')) }}">
        </div>
        @error('address')
        <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-item">
        <label class="form-item-label">建物名</label>
        <div class="form-item-content">
            <input
                type="text"
                name="building"
                class="form-item-input"
                placeholder="例: 千駄ヶ谷マンション101"
                value="{{ old('building', session('contact.building')) }}">
        </div>
    </div>

    <div class="form-item">
        <label class="form-item-label">お問い合わせの種類<span>※</span></label>
        <div class="form-item-content">
            <select name="category_id" class="form-item-select">
                <option value="" selected disabled>選択してください</option>
                <option value="1" {{ old('category_id', session('contact.category_id')) == '1' ? 'selected' : '' }}>商品のお届けについて</option>
                <option value="2" {{ old('category_id', session('contact.category_id')) == '2' ? 'selected' : '' }}>商品の交換について</option>
                <option value="3" {{ old('category_id', session('contact.category_id')) == '3' ? 'selected' : '' }}>商品トラブル</option>
                <option value="4" {{ old('category_id', session('contact.category_id')) == '4' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                <option value="5" {{ old('category_id', session('contact.category_id')) == '5' ? 'selected' : '' }}>その他</option>
            </select>
        </div>
        @error('category_id')
        <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-item">
        <label class="form-item-label">お問い合わせ内容<span>※</span></label>
        <div class="form-item-content">
            <textarea
                name="detail"
                placeholder="お問い合わせ内容をご記載ください"
                class="form-item-textarea"
                value="{{ old('detail', session('contact.detail')) }}"></textarea>
        </div>
        @error('detail')
        <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-item form-item-submit">
        <input type="submit" class="form-btn" value="確認画面">
    </div>

</form>
@endsection
