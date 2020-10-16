@extends('layout')

@section('contents')

<br>

<div class="container">
	<div class="row">
        <div class="mx-auto">
			<div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <h2>ユーザー登録が完了しました。</h2>
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <hr class="my-5">
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
                <a href="/login" class="btn-primary btn-lg">ログイン画面へ</a>
            </div>
            <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
                <a href="/chat_top" class="btn-primary btn-lg">Top一覧に戻る</a>
            </div>
        </div>
    </div>
</div>

@endsection