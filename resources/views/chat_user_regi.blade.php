@extends('layout')

@section('contents')

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <div class="text-center">
                <h2>ユーザー登録</h2>
            </div>
            <form method="post" action="/chat_user_regi_check">
            {{csrf_field()}}
                <div class="form-group @if(!empty($errors->first('user_name'))) has-error @endif">
                    <label>ユーザー名</label>
                    <input type="text" name="user_name" class="form-control @if(!empty($errors->first('user_name')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('user_name')}}</span>
                </div>
                <div class="form-group @if(!empty($errors->first('email'))) has-error @endif">
                    <label>メールアドレス</label>
                    <input type="email" name="email" class="form-control @if(!empty($errors->first('email')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('email')}}</span>
                </div>
                <div class="form-group @if(!empty($errors->first('password'))) has-error @endif">
                    <label>パスワード</label>
                    <input type="password" name="password" class="form-control @if(!empty($errors->first('password')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('password')}}</span>
                </div>
                <div class="form-group @if(!empty($errors->first('password_confirmation'))) has-error @endif">
                    <label>パスワード(確認用)</label>
                    <input type="password" name="password_confirmation" class="form-control @if(!empty($errors->first('passwprd_confirmation')))border-danger @endif">
                    <span class="help-block text-danger">{{$errors->first('password_confirmation')}}</span>
                </div>
                <br>
                <input type="submit" value="登録" class="btn-primary btn-lg" style="width:100%">
            </form>
        </div>
    </div>
</div>

@endsection