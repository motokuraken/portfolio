@extends('layout')

@section('contents')

<div class="user">
    <div>
        <p>登録がまだの方はこちらから</p>
        <a href="/chat_user_regi" class="btn-primary btn-lg">新規登録</a>
    </div>
    <br><br>
    <div>
        <p>登録済みの方はこちらから</p>
        <a href="/chat_login" class="btn-primary btn-lg">ログイン</a>
    </div>
</div>

<div class="contents">
    <h2>チャット</h2>
</div>

@endsection