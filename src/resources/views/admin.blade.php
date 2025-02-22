@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('btn')
<div class="header__btn">
    <a href="/register">logout</a>
</div>
@endsection

@section('content')
<h2>Admin</h2>

<form action="" method="post">
    @csrf
    <div class="content-1">
        <input
        type="text"
        name="search"
        placeholder="名前やメールアドレスを入力してください"
        class="content-1-input">
        <select name="gender">
            <option value="" selected>性別</option>
            <option value="all">全て</option>
            <option value="male">男性</option>
            <option value="female">女性
            <option value="other">その他</option>
        </select>
        <select
        name="category"
        class="form-item-select">
            <option class="default-option" selected disabled>お問い合わせの種類</option>
            <option value="商品のお届けについて">商品のお届けについて</option>
            <option value="商品の交換について">商品の交換について</option>
            <option value="商品トラブル">商品トラブル</option>
            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
            <option value="その他">その他</option>
        </select>
        <input
        type="date"
        name="date"
        class="content-1-input">
        <input
        type="submit"
        name="search-btn"
        value="検索"
        class="search-btn">
        <input type="reset"
        name="reset"
        value="リセット"
        class="reset-btn">
    </div>
</form>

<div class="content-2">
    <div class="export-btn">
        <a href="">エクスポート</a>
    </div>
    <ul class="pagination">
        <li><a href="#">&lt;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
    </ul>
</div>

<form action="" method="post">
    @csrf
    <table class="admin-table">
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>詳細</button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>詳細</button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>詳細</button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>詳細</button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>詳細</button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>詳細</button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>詳細</button>
            </td>
        </tr>
    </table>
</form>

@endsection


<div class="modal">
    <div class="modal-close">
        <a href="/admin">×</a>
    </div>
    <table class="modal-table">
        <tr>
            <th>お名前</th>
            <td></td>
        </tr>
        <tr>
            <th>性別</th>
            <td></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td></td>
        </tr>
        <tr>
            <th>住所</th>
            <td></td>
        </tr>
        <tr>
            <th>建物名</th>
            <td></td>
        </tr>
        <tr>
            <th>お問い合わせの種類</th>
            <td></td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td></td>
        </tr>
    </table>
    <form action="" method="post">
        @csrf
        <input
        type="reset"
        name="delete-btn"
        class="delete-btn"
        value="削除">
    </form>
</div>