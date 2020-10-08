@extends('layout')

@section('contents')

<script>
function ShowLength(str, clicked_id) {

    let id = clicked_id;

    let num = id.charAt(3);

    document.getElementById("count" + num).innerHTML = str.length;
}
</script>

<br>

<div class="text-center">
    <h2>Todo登録</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12 col-xs-12">
            <form method="post" action="/todo_regi_check">
            {{csrf_field()}}
                <div class="form-group @if(!empty($errors->first('title'))) has-error @endif">
                    <label>タイトル(50文字以内)</label><span class='text-danger'> *必須</span></label>
                    <span class="float-right">現在：<span id="count1">0</span>文字/50文字</span>
                    <input type="text" name="title" class="form-control @if(!empty($errors->first('title')))border-danger @endif" value="{{old('title')}}" onkeyup="ShowLength(value, id);" id="num1">
                    <span class="help-block text-danger">{{$errors->first('title')}}</span>
                </div>
                <div class="form-group @if(!empty($errors->first('contents'))) has-error @endif">
                    <label>内容(500文字以内)</label>
                    <span class="float-right">現在：<span id="count2">0</span>文字/500文字</span>
                    <textarea name="contents" rows="5" style="overflow:auto;" class="form-control @if(!empty($errors->first('contents')))border-danger @endif" onkeyup="ShowLength(value, id);" id="num2">{{old('contents')}}</textarea>
                    <span class="help-block text-danger">{{$errors->first('contents')}}</span>
                </div>
                <div class="form-group @if(!empty($errors->first('note'))) has-error @endif">
                    <label>備考(50文字以内)</label>
                    <span class="float-right">現在：<span id="count3">0</span>文字/50文字</span>
                    <input type="text" name="note" class="form-control @if(!empty($errors->first('note')))border-danger @endif" value="{{old('note')}}" onkeyup="ShowLength(value, id);" id="num3">
                    <span class="help-block text-danger">{{$errors->first('note')}}</span>
                </div>
                <br>
                <input type="submit" value="登録" class="btn-primary btn-lg" style="width:100%">
            </form>
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 text-center">
                <hr class="my-4">
        </div>
        <div class="col-md-12 col-ms-12 col-xs-12 text-center mt-4 mb-4">
            <a href="/todo_list" class="btn-primary btn-lg">Todo一覧に戻る</a>
        </div>
    </div>
</div>

@endsection