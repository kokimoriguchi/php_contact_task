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
  private $contact_services;
  private $contact_validates;

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
    // sessionにdataがあればsession_contact_dataに代入し、なければ空配列を代入してviewに渡す
    dump($form_content_data);
    if (session('contact_data')) {
      $session_data = session('contact_data');
      foreach ($session_data as $key => $value) {
        foreach ($form_content_data as &$form_data) {
          if ($form_data['name'] === $key) {
            $form_data['value'] = $value;
          }
        }
      }
    }
    dump($form_content_data);
    // compactで変数をまとめてviewに渡すことができる
    return view('contacts/contact_index', compact('form_content_data'));
  }

  public function post(Request $request)
  {
    session()->flush();
    $request_data = $request->all();
    dump($request_data);
    // リクエストデータをcontact_dataをキーにしてセッションに格納
    session()->put('contact_data', $request_data);
    $session_data = session()->all();
    dump($session_data);
    // $validate_data = $this->contact_validates->validate($request);
    // dump($validate_data);
  }
}
?>