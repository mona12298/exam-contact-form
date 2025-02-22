<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    /**
     * ログイン処理
     */
    public function authenticate(UserRequest $request) // バリデーション適用
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => '認証に失敗しました。メールアドレスまたはパスワードが間違っています。',
        ])->withInput();
    }

    /**
     * 新規登録画面表示
     */
    public function register()
    {
        return view('register');
    }

    /**
     * 新規登録処理
     */
    public function store(UserRequest $request) // バリデーション適用
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/login')->with('success', '登録が完了しました。ログインしてください');
    }
}
