@if ($request_data['to_user'])
  この度はお問い合わせいただき、誠にありがとうございます！<br>
  内容を確認し、3営業日以内にあらためてご連絡させていただきます。<br>
  お手数をおかけいたしますが、今しばらくお待ちください。<br>
@else
  サンプルサイトよりお問い合わせがありました。<br>
  以下の内容を確認し、対応をお願い致します。<br>
@endif
------------------------------------------------------------------------------------------<br>
◾️入力内容<br>
・お名前<br>
{{ $request_data['contact_name'] }}様<br>
・会社名<br>
@if ($request_data['contact_company'] == '')
入力なし<br>
@else
{{ $request_data['contact_company'] }}株式会社<br>
@endif
・メールアドレス<br>
{{ $request_data['contact_email'] }}<br>
・電話番号<br>
{{ $request_data['contact_tel_number'] }}<br>
・郵便番号<br>
{{ $request_data['contact_address_number'] }}<br>
・住所<br>
{{ $request_data['contact_prefecture'] }}{{ $request_data['contact_city_name'] }}{{ $request_data['contact_street_name'] }}<br>
・お問い合わせ内容<br>
{!! nl2br(e($request_data['contact_message'])) !!}<br>
------------------------------------------------------------------------------------------<br>