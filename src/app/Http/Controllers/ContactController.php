<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->validated();

        $category = Category::find($contact['category_id']);
        $contact['category_content'] = $category ? $category->content : '';

        $genders = [
        1 => '男性',
        2 => '女性',
        3 => 'その他',
        ];
        $contact['gender_text'] = $genders[$contact['gender']];


        session(['contact' => $contact]);

        return view('confirm', ['contact' => $contact]);

    }

        public function store(ContactRequest $request){
            $contact = session('contact');
            if (!$contact) {
                return redirect('/');
            }
            Contact::create($contact);
            Session::forget('contact');
            return view('thanks');
        }

    public function register() {
        return view('register');
    }
    public function login() {
        return view('login');
    }
    public function admin() {
        return view('admin');
    }
}




