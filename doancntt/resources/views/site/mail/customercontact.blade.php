<h1>Xin chào {{ config('app.name') }}</h1>

<h2>Khách Hàng Gửi Yêu Cầu Liên Hệ</h2>
<div><b>Họ và Tên: </b>{{ $data['fullname'] }}</div>
<div><b>Số điện thoại: </b>{{ $data['mobile'] }}</div>
<div><b>Địa chỉ: </b>{{ $data['address'] }}</div>
<div><b>Email: </b>{{ $data['send_email_from'] }}</div>
<div><b>Tiêu đề: </b>{{ $data['title'] }}</div>
<div><b>Nội dung: </b>{{ $data['content'] }}</div>
<br>
Cám ơn,<br>
{{ config('app.name') }}
