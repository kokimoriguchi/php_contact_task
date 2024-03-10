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
  // constructがpythonでの__init__に相当
  public function __construct()
  {
    $this->contact_services = new ContactServices();
    $this->contact_validates = new ContactValidates();
  }
  // indexメソッドは、contactsディレクトリのcontact_index.blade.phpを返す
  public function index()
  {
    $prefectures_data = $this->contact_services->index();
    return view('contacts/contact_index', compact('prefectures_data'));
  }

  public function post(Request $request)
  {
    $validate_data = $this->contact_validates->validate($request);
    dump($validate_data);
    if ($validate_data -> true()) {
      return redirect('/contact')->with('success', 'お問い合わせに成功しました');
    } else {
      return redirect('/contact')->with('error', 'お問い合わせに失敗しました');
    }
  }
}
?>