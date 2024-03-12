<?php
// 名前空間はこのファイルがどのディレクトリに属しているかを示している。
namespace App\Http\Controllers\Contacts;

// 下記記述がpythonでのimportとfromの記述に相当
use App\Http\Controllers\Controller;
use App\Services\ContactServices\ContactServices;
use App\Validates\Forms\ContactValidates;
use Illuminate\Http\Request;
use App\Consts\ContactConsts;

// 下記の以降記述が各class
class Contacts extends Controller
{
  // このクラスのみで使用する変数を定義
  private $form_content_data;

  // constructがpythonでの__init__に相当
  public function __construct()
  {
    $this->contact_services = new ContactServices();
    $this->contact_validates = new ContactValidates();
  }
  // indexメソッドは、contactsディレクトリのcontact_index.blade.phpを返す
  public function index()
  {
    // クラス変数にcreate_form_content_dataメソッドの戻り値を代入し他のメソッドでも使用できるようにする
    $this->form_content_data = $this->contact_services->index();
    // ローカル変数にクラス変数を代入しcompactでviewに渡す
    $form_content_data = $this->form_content_data;
    // compactで変数をまとめてviewに渡すことができる
    return view('contacts/contact_index', compact('form_content_data'));
  }

  public function post(Request $request)
  {
    $request_data = $request->all();
    foreach ($request_data as $key => $value) {
      if ($value === null) {
        session()->put($key, $value);
      } else {
        session()->put($key, $value);
      }
    }
    $session_data = session()->all();
    dump($session_data);
    // $validate_data = $this->contact_validates->validate($request);
    // dump($validate_data);
  }
}
?>