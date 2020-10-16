<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * チャットトップ画面
     */
    public function chatTop() {

        return view('chat_top');
    }

    /**
     * チャット用ユーザー登録画面
     */
    public function chatUserRegi() {

        return view('chat_user_regi');
    }

    /**
     * チャット用ユーザー登録確認画面
     */
    public function chatUserRegiCheck(Request $request) {

        $inputs = $request->all();

        // バリデーション
        $rules = [
            'user_name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|regex:/^[a-zA-Z0-9]+$/',
            'password_confirmation' => 'required|regex:/^[a-zA-Z0-9]+$/',
        ];

        $validation = \Validator::make($inputs, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        return view('chat_user_regi_check', $inputs);

    }

    /**
     * チャット用ユーザー登録完了画面
     */
    public function chatUserRegiDone(Request $request) {

        $data = array(
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => $request->password,
        );

        \App\Models\user::insert($data);

        return view('chat_user_regi_done');
    }
}
