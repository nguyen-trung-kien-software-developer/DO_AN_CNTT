<div class="left_account_user">
    <div class="title_loc_search">Tài khoản</div>
    <ul>
        <li><a href="{{ route('site.customer.accountInformation') }}"
                class="{{ url()->current() == route('site.customer.accountInformation') ? 'active_menu_a' : '' }}">Thông
                tin tài
                khoản</a></li>
        <li><a href="{{ route('site.customer.changePassword') }}"
                class="{{ url()->current() == route('site.customer.changePassword') ? 'active_menu_a' : '' }}">Đổi mật
                khẩu</a></li>
        <li><a href="{{ route('site.customer.orderHistory') }}"
                class="{{ url()->current() == route('site.customer.orderHistory') ? 'active_menu_a' : '' }}">Lịch sử
                đơn hàng</a></li>
    </ul>
</div>
