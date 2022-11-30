<h1>Xin chào {{ config('app.name') }}</h1>

<h2>Khách Hàng Gửi Yêu Cầu Tư Vấn</h2>
<div><b>Họ và Tên: </b>{{ $data['fullname'] }}</div>
<div><b>Số điện thoại: </b>{{ $data['mobile'] }}</div>
<div><b>Email: </b>{{ $data['send_email_from'] }}</div>
<div><b>Loại sản phẩm: </b>{{ $data['product_type_name'] }}</div>
<div><b>Nội dung: </b>{{ $data['content'] }}</div>
<br>
Cám ơn,<br>
{{ config('app.name') }}
