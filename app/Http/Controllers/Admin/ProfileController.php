<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;
class ProfileController extends Controller
{
public function edit()
{
  return view('admin.profile.edit');
}
public function update(Request $request)
{
      $this->validate($request, Profile::$rules);// Validationをかける
      $news = new Profile;
      $form = $request->all();


      
      unset($form['_token']);// フォームから送信されてきた_tokenを削除する


      // データベースに保存する
      $news->fill($form);
      $news->save();
  return redirect('admin/profile/edit');
}
}
