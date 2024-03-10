<?php
// 名前空間はこのファイルがどのディレクトリに属しているかを示している。
namespace App\Http\Controllers\Contacts;

// 下記記述がpythonでのimportとfromの記述に相当
use App\Services\ContactServices\ContactServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 下記の以降記述が各class
class Contacts extends Controller
{
  private $contact_services;

  public function __construct()
  {
    $this->contact_services = new ContactServices();
  }
  // indexメソッドは、contactsディレクトリのcontact_index.blade.phpを返す
  public function index()
  {
    $prefectures_data = $this->contact_services->index();
    return view('contacts/contact_index', compact('prefectures_data'));
  }
}
?>