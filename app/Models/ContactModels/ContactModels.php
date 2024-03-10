<?php

// 名前空間はこのファイルがどのディレクトリに属しているかを示している。
namespace App\Models\ContactModels;

// 下記記述がpythonでのimportとfromの記述に相当
use App\Models\Prefectures;
use Illuminate\Support\Facades\DB;

class ContactModels
{
  public function index()
  {
    $object = new prefectures();
    $data = $object::all();
    return $data;
  }
}
?>