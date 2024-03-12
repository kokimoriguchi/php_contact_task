<?php
namespace App\Validates\Forms;

class ContactValidates
{
  //$requestには$_POSTの連想配列が入る
  public function validate($request)
  {
    // validateメソッドは$requestの中身を検証するIlluminate\Http\Requestクラスのメソッド
    $validate_data = $request->validate([
      'contact_name' => 'required',
      'contact_sex' => 'required',
      'contact_email' => 'required|email',
      'contact_tel_number' => 'required|integer',
      'contact_address_number' => 'required',
      'contact_prefecture' => 'required',
      'contact_city_name' => 'required|max:255',
      'contact_street_name' => 'required|max:255',
      'contact_message' => 'required|max:8000',
    ],
    [
      'contact_name.required' => '名前を入力してください',
      'contact_sex.required' => '性別を選択してください',
      'contact_email.required' => 'メールアドレスを入力してください',
      'contact_email.email' => 'メールアドレスの形式で入力してください',
      'contact_tel_number.required' => '電話番号を入力してください',
      'contact_tel_number.integer' => '電話番号は数字のみで入力してください',
      'contact_address_number.required' => '郵便番号を入力してください',
      'contact_prefecture.required' => '都道府県を選択してください',
      'contact_city_name.required' => '市区町村を入力してください',
      'contact_city_name.max' => '市区町村は255文字以内で入力してください',
      'contact_street_name.required' => '番地を入力してください',
      'contact_street_name.max' => '番地は255文字以内で入力してください',
      'contact_message.required' => 'お問い合わせ内容を入力してください',
      'contact_message.max' => 'お問い合わせ内容は8000文字以内で入力してください',
    ]);
    return $validate_data;
  }
}
?>