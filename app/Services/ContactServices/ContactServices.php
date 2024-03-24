<?php
// 名前空間はこのファイルがどのディレクトリに属しているかを示している。
namespace App\Services\ContactServices;

// 下記記述がpythonでのimportとfromの記述に相当
use App\Models\ContactModels\ContactModels;
use App\Consts\ContactContents;
use Illuminate\Support\Facades\Mail;

class ContactServices
{
  // このクラスのみで使用する変数を定義
  private $contact_models;

  // constructがpythonでの__init__に相当
  public function __construct()
  {
    // クラスのインスタンスを生成しこのクラスのprivate変数に代入
    $this->contact_models = new ContactModels();
  }

  // contactルートにアクセスされた時に呼び出されるメソッド
  public function index()
  {
    // create_form_content_dataメソッドを呼び出し、その戻り値を変数に代入
    $form_content_data = $this->create_form_content_data();
    return $form_content_data;
  }

  // 定義されたフォームの表示内容を受け取り、都道府県のデータを取得し、注入するメソッド
  private function create_form_content_data()
  {
    // $thisがpythonでのselfに相当で->がpythonでの.に相当
    $prefecture_data = $this->contact_models->index();

    // 下記のように記述してクラスの中身を呼び出すこともできる
    $form_content_data = ContactContents::CONTACT_FORM_CONSTS;

    // 空配列を定義し、ここに都道府県のデータのIDとNAMEをkey,valueの形で格納
    $pref_data = [];
    foreach ($form_content_data as $key => $value) {
      if ($value['name'] === 'contact_prefecture') {
        foreach ($prefecture_data as $prefecture) {
          $pref_data[$prefecture->id] = $prefecture->pref_name;
        }
        $form_content_data[$key]['data'] = $pref_data;
      }
    }
    return $form_content_data;
  }

  public function send_mail()
  {
    $data = [];

    Mail::send('emails.welcome', $data, function($message){
        $message->to('abc987@example.com', 'Test')
        ->subject('This is a test mail');
    });
  }
}
?>