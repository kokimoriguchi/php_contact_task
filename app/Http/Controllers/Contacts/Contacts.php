<?php
// 名前空間はこのファイルがどのディレクトリに属しているかを示している。
namespace App\Http\Controllers\Contacts;

// 下記記述がpythonでのimportとfromの記述に相当
use App\Http\Controllers\Controller;
use App\Services\ContactServices\ContactServices;
use App\Validates\Forms\ContactValidates;
use Illuminate\Http\Request;

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
    // sessionにdataがあれば、form_content_dataのvalueに代入
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
    // compactで変数をまとめてviewに渡すことができる
    return view('contacts/contact_index', compact('form_content_data'));
  }

  public function post(Request $request)
  {
    // リクエストデータを取得
    $request_data = $request->all();
    // リクエストデータをcontact_dataをキーにしてセッションに格納
    session()->put('contact_data', $request_data);
    // バリデーションを実行。エラーがあればエラーメッセージを返し、なければ次の処理へ
    $this->contact_validates->validate($request);
    return redirect('contact/confirm');
  }

  public function confirm_index()
  {
    // TODO: 似ている処理しているので共通化する
    $this->form_content_data = $this->contact_services->index();
    $form_content_data = $this->form_content_data;
    // セッションからデータを取得
    $contact_data = session('contact_data');
    foreach ($contact_data as $key => $value) {
      foreach ($form_content_data as &$form_data) {
        if ($form_data['name'] === $key) {
          $form_data['value'] = $value;
        }
      }
    }
    // ローカル変数にセッションデータを代入
    $request_data = $form_content_data;
    // viewにデータを渡す
    return view('contacts/contact_confirm', compact('request_data'));
  }

  public function send_mail()
  {
    $contact_data = session('contact_data');
    try {
      // 管理者にメールを送信
      $this->contact_services->send_mail($contact_data, false, env('MAIL_FROM_ADDRESS'));
      // ユーザーにメールを送信
      $this->contact_services->send_mail($contact_data, true, $contact_data['contact_email']);
      // セッションのデータを削除
      session()->forget('contact_data');
      return redirect('/contact/complete');
    } catch (\Exception $e) {
      $error = 'メール送信に失敗しました';
      return redirect('/contact/confirm', compact('error'));
    }
  }

  public function complete_index()
  {
    return view('contacts/contact_complete');
  }
}
?>