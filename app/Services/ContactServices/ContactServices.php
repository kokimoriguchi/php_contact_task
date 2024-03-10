<?php
// 名前空間はこのファイルがどのディレクトリに属しているかを示している。
namespace App\Services\ContactServices;

// 下記記述がpythonでのimportとfromの記述に相当
use App\Models\ContactModels\ContactModels;

class ContactServices
{
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
    // $thisがpythonでのselfに相当で->がpythonでの.に相当
    return $this->contact_models->index();
  }
}
?>