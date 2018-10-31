<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->id());
                                  // $user
        return view('register', compact('user'));
 // registerページ ファイルアップロード機能のページ
    }

    // ファイルアップロード
    public function uplpoad(Request $request)
    {
        $this->validate($request, [
            'fire' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg.png',

                // 最小縦横120px 最大縦横400px
                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',

            ]

        ]);

        if ($request->file('file')->isValid([])) {
            $filename = $request->file->store('public/avatar');

            $user = User::find(auth()->id());
            $user->avatar_filename = basename($filename);
            $user->save();

            return redirect('/register')->with('success', '保存しました。');
       } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画面がアップロードされていないか不正なデータです。 ']);
       }
    }
}
