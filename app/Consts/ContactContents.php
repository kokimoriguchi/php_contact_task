<?php
  namespace App\Consts;

  // TODO: enumの方が良いっぽい
  class ContactContents
  {
    const CONTACT_FORM_CONSTS = [
      ['name' => 'contact_name', 'label' => '名前', 'type' => 'input', 'data' => ''],
      ['name' => 'contact_sex', 'label' => '性別', 'type' => 'radio', 'data' => ['1' => '男性', '2' => '女性', '3' => 'その他', '4' => '未回答']],
      ['name' => 'contact_company', 'label' => '会社名', 'type' => 'input', 'data' => ''],
      ['name' => 'contact_email', 'label' => 'メールアドレス', 'type' => 'input', 'data' => ''],
      ['name' => 'contact_tel_number', 'label' => '電話番号', 'type' => 'input', 'data' => ''],
      ['name' => 'contact_address_number', 'label' => '郵便番号', 'type' => 'input', 'data' => ''],
      ['name' => 'contact_prefecture', 'label' => '都道府県', 'type' => 'select', 'data' => ''],
      ['name' => 'contact_city_name', 'label' => '市区町村', 'type' => 'input', 'data' => ''],
      ['name' => 'contact_street_name', 'label' => '番地', 'type' => 'input', 'data' => ''],
      ['name' => 'contact_message', 'label' => 'お問い合わせ内容', 'type' => 'textarea', 'data' => ''],
    ];
  }
?>