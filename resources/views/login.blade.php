@extends('layout')

@section('contents')

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <form method="post" action="/login">
            {{csrf_field()}}
                <div class="text-center">
                    <h2>ログイン</h2>
                </div>
                <div class="form-group">
                    <label>ユーザー名</label>
                    <input type="text" name="user_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <input type="submit" value="ログイン" class="btn-primary btn-lg" style="width:100%">
            </form>
        </div>
    </div>
</div>

@endsection