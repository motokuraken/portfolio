@extends('layout')

@section('contents')

<br>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-ms-12 col-xs-12">
            <div class="text-center">
                <h2>Todo登録</h2>
            </div>
            <div class="text-center mt-3 mb-3">
                <a href="/todo_regi" class="btn-primary btn-lg">Todo登録</a>
            </div>
        </div>
        <div class="col-md-6 col-ms-12 col-xs-12">
            <div class="text-center">
                <h2>検索</h2>
            </div>
            <form method="post" action="/todo_list">
            {{csrf_field()}}
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="タイトル">
                    <span class="input-group-btn">
                        <input type="submit" value="検索" class="btn btn-primary">
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <hr class="my-4">
        </div>
    </div>
    <div class="row"></div>
        <div class="col-md-12 col-ms-12 col-xs-12">
            <div class="text-center">
                @if(session('search'))
                <h2>検索結果</h2>
                @else
                <h2>Todo一覧</h2>
                @endif
            </div>
        @if(session('del_message'))
            <div class="flash_message text-danger">
                {{session('del_message')}}
            </div>
        @endif
        @foreach($data as $val)
        <div class="list">
            <p><a href="/todo_info/{{$val->id}}">{{$val->title}}</a></p>
            <span>作成日時：{{$val->created_at}}</span>
            <div>
                <a href="/todo_edit/{{$val->id}}">更新</a>
                ||
                <a href="/todo_del/{{$val->id}}">削除</a>
            </div>
        </div>
        @endforeach
        @if(session('search'))
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <a href="/todo_list" class="btn-primary btn-lg">一覧に戻る</a>
        </div>
        @endif
    </div>
</div>

@endsection