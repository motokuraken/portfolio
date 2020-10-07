<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use app\Models\todo;

class TodoController extends Controller
{
    /**
     * Todo登録画面
     */
    public function todoRegi() {

        return view('todo_regi');
    }

    /**
     * Todo登録確認画面
     */
    public function todoRegiCheck(Request $request) {

        $inputs = $request->all();

        //バリデーション
        $rules = [
            'title' => 'required|max:50',
            'contents' => 'max:500',
            'note' => 'max:50',
        ];

        $validation = \Validator::make($inputs, $rules);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        return view('todo_regi_check', $inputs);
    }

    /**
     * Todo登録確認画面
     */
    public function todoRegiDone(Request $request) {

        $inputs = $request->all();

        //登録処理
        $data = array(
            'title' => $request->title,
            'contents' => $request->contents,
            'note' => $request->note,
        );

        \App\Models\todo::insert($data);
        return view('todo_regi_done');
    }

    /**
     * Todoリスト画面
     */
    public function todoList(Request $request) {

        //検索セッションがある場合削除処理
        if($request->session()->has('search')) {
            $request->session()->forget('search');
        }

        $data = \App\Models\todo::all();

        return view('todo_list', compact('data'));
    }

    /**
     * Todo詳細画面
     */
    public function todoInfo($id) {

        $data = \App\Models\todo::find($id);

        return view('todo_info', compact('data'));
    }

    /**
     * Todo削除画面
     */
    public function todoDel($id) {

        $data = \App\Models\todo::find($id);

        return view('todo_del', compact('data'));
    }

    /**
     * Todo削除完了
     * 削除が終わると、Todoリスト画面(todo_list)にリダイレクトする。
     */
    public function todoDelDone(Request $request, $id) {

        $data = \App\Models\todo::find($id);
        //削除処理
        $data->delete();

        //削除完了のメッセージ作成
        session()->flash('del_message', 'Todoを削除しました。');

        return redirect('todo_list');
    }

    /**
     * Todo編集画面
     */
    public function todoEdit(Request $request, $id) {

        $data = \App\Models\todo::find($id);

        return view('todo_edit', compact('data'));
    }

    /**
     * Todo編集確認画面
     */
    public function todoEditCheck(Request $request, $id) {

        $todo_id = $id;

        $inputs = $request->all();

        //バリデーション
        $rules = [
            'title' => 'required|max:50',
            'contents' => 'max:500',
            'note' => 'max:50',
        ];

        $validation = \Validator::make($inputs, $rules);

        if($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        return view('todo_edit_check', $inputs, compact('todo_id'));
    }

    /**
     * Todo編集完了画面
     */
    public function todoEditDone(Request $request, $id) {

        //更新処理
        $data = \App\Models\todo::find($id);
        $data->title = $request->input('title');
        $data->contents = $request->input('contents');
        $data->note = $request->input('note');
        $data->save();

        return view('todo_edit_done');
    }

    /**
     * Todo検索
     */
    public function todoSearch(Request $request) {

        $search = $request->search;

        //検索セッション作成
        $request->session()->put('search', $search);

        //検索結果取得
        $data = \App\Models\todo::where('title', 'like', '%'.$search.'%')->get();

        return view('todo_list', compact('data'));
    }
}
