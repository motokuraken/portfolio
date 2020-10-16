@extends('layout')

@section('contents')

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <div class="text-center">
                <h2>登録内容の確認</h2>
            <div>
            <br>
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12">
            <form method="post" action="/chat_user_regi_done">
            {{csrf_field()}}
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>ユーザー名</th>
                        <td>{{$user_name}}</td>
                        <input type="hidden" name="user_name" value="{{$user_name}}">
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>{{$email}}</td>
                        <input type="hidden" name="email" value="{{$email}}">
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td>{{$password}}</td>
                        <input type="hidden" name="password" value="{{$password}}">
                    </tr>
                </table>
                <br>
                <input type="button" value="戻る" onclick="history.back()" class="btn-primary btn-lg">
                <br><br>
                <input type="submit" value="登録" class="btn-primary btn-lg" style="width:100%">
            </form>
        </div>
    </div>
</div>

@endsection