@extends('layout')

@section('contents')

<br>

<div class="text-center">
    <h2>編集内容の確認</h2>
<div>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <form method="post" action="{{url('/todo_edit_done', $todo_id)}}">
            {{csrf_field()}}
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>タイトル</th>
                        <td>{{$title}}</td>
                        <input type="hidden" name="title" value="{{$title}}">
                    </tr>
                    <tr>
                        <th>内容</th>
                        <td>{{$contents}}</td>
                        <input type="hidden" name="contents" value="{{$contents}}">
                    </tr>
                    <tr>
                        <th>備考</th>
                        <td>{{$note}}</td>
                        <input type="hidden" name="note" value="{{$note}}">
                    </tr>
                </table>
                <br>
                <input type="button" value="戻る" onclick="history.back()" class="btn-primary btn-lg">
                <br><br>
                <input type="submit" value="編集" class="btn-primary btn-lg" style="width:100%">
            </form>
        </div>
    </div>
</div>

@endsection