@extends('layout')

@section('contents')

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <h2>Todoの削除</h2>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <p>本当に削除しますか？</p>
            <form method="post" action="{{url('/todo_del_done', $data->id)}}">
            {{csrf_field()}}
                <input type="submit" value="削除" class="btn-danger btn-lg">
            </form>
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <hr class="my-4">
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <a href="/todo_list" class="btn-primary btn-lg">一覧に戻る</a>
        </div>
    </div>
</div>

@endsection