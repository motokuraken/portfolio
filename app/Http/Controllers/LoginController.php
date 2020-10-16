<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use app\Models\user;

class LoginController extends Controller
{
    function loginini(Request $request) {
        $data['loginerror'] = '';

        return view('login', $data);
    }

    function logout(Request $request) {
        $request->session()->flush();
        return redirect('/chat_top');
    }

    function login(Request $request) {

        $data = $request->all();

        // バリデーション
        $rules = [
            'user_name' => 'required',
            'password' => 'required|regex:/^[a-zA-Z0-9]+$/',
        ];

        $validation = \Validator::make($data, $rules);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $login_user = $data['user_name'];
        $login_password = $data['password'];

        //入力されたユーザー名を指定してデータ取得
        $user = \App\Models\user::where('user_name', $login_user)->first();

        //ユーザー名のデータが取れなかった場合のエラー
        if($user == '') {
            session()->flash('flash_message', 'ユーザー名が一致しません');
            return redirect('/login');
        }

        // 入力されたパスワードと登録されているパスワードの比較
        if(Hash::check($login_password, $user->password)) {
            $user_id = $user['id'];
            $request->session()->put('id', $user_id);
            $request->session()->put('login', true);
            //パスワード一致の処理
            return redirect('/chat_top');
        } else {
            session()->flash('flash_message2', 'パスワードが一致しません');
            return redirect('/login');
        }
    }
}
