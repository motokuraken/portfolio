@extends('layout')

@section('contents')

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <hr class="my-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-ms-12 col-xs-12 text-center">
            <h3>タイトル</h3>
        </div>
        <div class="col-md-6 col-ms-12 col-xs-12 text-center">
            {{$data->title}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <hr class="my-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-ms-12 col-xs-12 text-center">
            <h3>内容</h3>
        </div>
        <div class="col-md-6 col-ms-12 col-xs-12 text-center mt-3 mb-3">
            {!! nl2br(e($data->contents)) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <hr class="my-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-ms-12 col-xs-12 text-center">
            <h3>備考</h3>
        </div>
        <div class="col-md-6 col-ms-12 col-xs-12 text-center mt-3 mb-3">
            {{$data->note}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <hr class="my-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
            <a href="/todo_list" class="btn-primary btn-lg">一覧へ戻る</a>
        </div>
    </div>
</div>

@endsection