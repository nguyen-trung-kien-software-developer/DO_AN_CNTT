<!--**********************************
                                Sidebar start
                            ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            @can('Tổng quan')
                <li><a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i>Tổng
                        quan</a>
                </li>
            @endcan

            @can('Hiển thị thông tin cửa hàng')
                <li><a href="{{ route('admin.company.index') }}"><i class="fa fa-home" aria-hidden="true"></i>Thông tin
                        về cửa
                        hàng</a>
                </li>
            @endcan

            <li
                class="{{ !empty($order) && (url()->current() == route('admin.order.edit', $order->id) || url()->current() == route('admin.order.details', $order->id)) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-th"
                        aria-hidden="true"></i><span class="nav-text">Đơn Hàng</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($order) && (url()->current() == route('admin.order.edit', $order->id) || url()->current() == route('admin.order.details', $order->id)) ? 'mm-show' : '' }}">
                    @can('Thêm đơn hàng')
                        <li><a href="{{ route('admin.order.create') }}">Thêm đơn hàng</a></li>
                    @endcan

                    @can('Hiển thị danh sách đơn hàng')
                        <li><a href="{{ route('admin.order.index') }}">Danh sách đơn hàng</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($product) && (url()->current() == route('admin.product.edit', $product->id) || url()->current() == route('admin.product.description', $product->id) || url()->current() == route('admin.product.descriptionDetails', $product->id) || url()->current() == route('admin.product.useTutorials', $product->id) || url()->current() == route('admin.product.imageItems', $product->id) || url()->current() == route('admin.product.comments', $product->id)) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-archive"
                        aria-hidden="true"></i><span class="nav-text">Sản Phẩm</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($product) && (url()->current() == route('admin.product.edit', $product->id) || url()->current() == route('admin.product.description', $product->id) || url()->current() == route('admin.product.descriptionDetails', $product->id) || url()->current() == route('admin.product.useTutorials', $product->id) || url()->current() == route('admin.product.imageItems', $product->id) || url()->current() == route('admin.product.comments', $product->id)) ? 'mm-show' : '' }}">
                    @can('Thêm sản phẩm')
                        <li><a href="{{ route('admin.product.create') }}">Thêm sản phẩm</a></li>
                    @endcan

                    @can('Hiển thị danh sách sản phẩm')
                        <li><a href="{{ route('admin.product.index') }}">Danh sách sản phẩm</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($pageImage) && url()->current() == route('admin.image.edit', $pageImage->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-picture-o"
                        aria-hidden="true"></i><span class="nav-text">Hình ảnh</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($pageImage) && url()->current() == route('admin.image.edit', $pageImage->id) ? 'mm-show' : '' }}">
                    @can('Hiển thị danh sách hình ảnh sản phẩm')
                        <li><a href="{{ route('admin.image.showAllImageItem') }}">Danh sách hình ảnh sản phẩm</a></li>
                    @endcan

                    @can('Hiển thị danh sách hình ảnh trang thông tin')
                        <li><a href="{{ route('admin.image.index') }}">Danh sách hình ảnh các trang thông tin</a></li>
                    @endcan

                    @can('Thêm hình ảnh trang thông tin')
                        <li><a href="{{ route('admin.image.create') }}">Thêm hình ảnh của trang thông tin</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($comment) && url()->current() == route('admin.comment.edit', $comment->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-commenting-o"
                        aria-hidden="true"></i><span class="nav-text">Đánh Giá</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($comment) && url()->current() == route('admin.comment.edit', $comment->id) ? 'mm-show' : '' }}">
                    <li><a href="{{ route('admin.comment.create') }}">Thêm đánh giá</a></li>

                    @can('Hiển thị danh sách đánh giá')
                        <li><a href="{{ route('admin.comment.index') }}">Danh sách đánh giá</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($introduction) && (url()->current() == route('admin.introduction.description', $introduction->id) || url()->current() == route('admin.introduction.edit', $introduction->id) || url()->current() == route('admin.introduction.content', $introduction->id)) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-align-center"
                        aria-hidden="true"></i><span class="nav-text">Bài Giới Thiệu</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($introduction) && (url()->current() == route('admin.introduction.description', $introduction->id) || url()->current() == route('admin.introduction.edit', $introduction->id) || url()->current() == route('admin.introduction.content', $introduction->id)) ? 'mm-show' : '' }}">
                    @can('Thêm bài giới thiệu')
                        <li><a href="{{ route('admin.introduction.create') }}">Thêm bài giới thiệu</a></li>
                    @endcan

                    @can('Hiển thị danh sách bài giới thiệu')
                        <li><a href="{{ route('admin.introduction.index') }}">Danh sách bài giới thiệu</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($parentCategory) && (url()->current() == route('admin.parentCategory.introduction', $parentCategory->id) || url()->current() == route('admin.parentCategory.edit', $parentCategory->id)) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-list"
                        aria-hidden="true"></i><span class="nav-text">Danh Mục Chính</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($parentCategory) && (url()->current() == route('admin.parentCategory.introduction', $parentCategory->id) || url()->current() == route('admin.parentCategory.edit', $parentCategory->id)) ? 'mm-show' : '' }}">
                    @can('Thêm danh mục chính')
                        <li><a href="{{ route('admin.parentCategory.create') }}">Thêm danh mục chính</a></li>
                    @endcan

                    @can('Hiển thị danh sách danh mục chính')
                        <li><a href="{{ route('admin.parentCategory.index') }}">Danh sách danh mục chính</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($subCategory) && url()->current() == route('admin.subCategory.edit', $subCategory->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-th-list"
                        aria-hidden="true"></i><span class="nav-text">Danh Mục Phụ</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($subCategory) && url()->current() == route('admin.subCategory.edit', $subCategory->id) ? 'mm-show' : '' }}">
                    @can('Thêm danh mục phụ')
                        <li><a href="{{ route('admin.subCategory.create') }}">Thêm danh mục phụ</a></li>
                    @endcan

                    @can('Hiển thị danh sách danh mục phụ')
                        <li><a href="{{ route('admin.subCategory.index') }}">Danh sách danh mục phụ</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($brand) && (url()->current() == route('admin.brand.description', $brand->id) || url()->current() == route('admin.brand.edit', $brand->id)) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-copyright"
                        aria-hidden="true"></i><span class="nav-text">Thương Hiệu</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($brand) && (url()->current() == route('admin.brand.description', $brand->id) || url()->current() == route('admin.brand.edit', $brand->id)) ? 'mm-show' : '' }}">
                    @can('Thêm thương hiệu')
                        <li><a href="{{ route('admin.brand.create') }}">Thêm thương hiệu</a></li>
                    @endcan

                    @can('Hiển thị danh sách thương hiệu')
                        <li><a href="{{ route('admin.brand.index') }}">Danh sách thương hiệu</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($blog) && (url()->current() == route('admin.blog.content', $blog->id) || url()->current() == route('admin.blog.edit', $blog->id)) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-newspaper-o"
                        aria-hidden="true"></i><span class="nav-text">Tin Tức</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($blog) && (url()->current() == route('admin.blog.content', $blog->id) || url()->current() == route('admin.blog.edit', $blog->id)) ? 'mm-show' : '' }}">
                    @can('Thêm tin tức')
                        <li><a href="{{ route('admin.blog.create') }}">Thêm tin tức</a></li>
                    @endcan

                    @can('Hiển thị danh sách tin tức')
                        <li><a href="{{ route('admin.blog.index') }}">Danh sách tin tức</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($transport) && url()->current() == route('admin.transport.edit', $transport->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-truck"
                        aria-hidden="true"></i><span class="nav-text">Vận Chuyển</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($transport) && url()->current() == route('admin.transport.edit', $transport->id) ? 'mm-show' : '' }}">
                    @can('Thêm vận chuyển')
                        <li><a href="{{ route('admin.transport.create') }}">Thêm vận chuyển</a></li>
                    @endcan

                    @can('Hiển thị danh sách vận chuyển')
                        <li><a href="{{ route('admin.transport.index') }}">Danh sách vận chuyển</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($orderStatus) && url()->current() == route('admin.orderStatus.edit', $orderStatus->id) ? 'mm-active' : '' }} {{ !empty($shippingStatus) && url()->current() == route('admin.shippingStatus.edit', $shippingStatus->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-star-half-o"
                        aria-hidden="true"></i><span class="nav-text">Trạng thái</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($orderStatus) && url()->current() == route('admin.orderStatus.edit', $orderStatus->id) ? 'mm-show' : '' }} {{ !empty($shippingStatus) && url()->current() == route('admin.shippingStatus.edit', $shippingStatus->id) ? 'mm-show' : '' }}">
                    @can('Hiển thị danh sách tình trạng đơn hàng')
                        <li><a href="{{ route('admin.orderStatus.index') }}">Danh sách trạng thái đơn hàng</a></li>
                    @endcan

                    @can('Hiển thị danh sách tình trạng giao hàng')
                        <li><a href="{{ route('admin.shippingStatus.index') }}">Danh sách trạng thái giao hàng</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($discountCode) && url()->current() == route('admin.discountCode.edit', $discountCode->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-barcode"
                        aria-hidden="true"></i><span class="nav-text">Mã Giảm Giá</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($discountCode) && url()->current() == route('admin.discountCode.edit', $discountCode->id) ? 'mm-show' : '' }}">
                    @can('Thêm mã giảm giá')
                        <li><a href="{{ route('admin.discountCode.create') }}">Thêm mã giảm giá</a></li>
                    @endcan

                    @can('Hiển thị danh sách mã giảm giá')
                        <li><a href="{{ route('admin.discountCode.index') }}">Danh sách mã giảm giá</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($slider) && url()->current() == route('admin.slider.edit', $slider->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-slideshare"
                        aria-hidden="true"></i><span class="nav-text">Slider</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($slider) && url()->current() == route('admin.slider.edit', $slider->id) ? 'mm-show' : '' }}">
                    @can('Thêm slider')
                        <li><a href="{{ route('admin.slider.create') }}">Thêm slider</a></li>
                    @endcan

                    @can('Hiển thị danh sách slider')
                        <li><a href="{{ route('admin.slider.index') }}">Danh sách slider</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-file-text"
                        aria-hidden="true"></i><span class="nav-text">Trang Thông Tin</span></a>
                <ul aria-expanded="false">
                    @foreach ($sidebarData->pages as $page)
                        @can('Chỉnh sửa các trang thông tin')
                            <li><a href="{{ route('admin.page.edit', $page->id) }}">Chỉnh sửa
                                    {{ $page->title }}</a>
                            </li>
                        @endcan
                    @endforeach
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-history"
                        aria-hidden="true"></i><span class="nav-text">Lịch sử thương hiệu</span></a>
                <ul aria-expanded="false">
                    @can('Thêm lịch sử')
                        <li><a href="{{ route('admin.page.createHistory') }}">Thêm Lịch sử</a>
                        </li>
                    @endcan

                    @can('Hiển thị danh sách lịch sử')
                        <li><a href="{{ route('admin.page.history') }}">Danh Sách Lịch sử</a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($branch) && url()->current() == route('admin.branch.edit', $branch->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-globe"
                        aria-hidden="true"></i><span class="nav-text">Chi nhánh</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($branch) && url()->current() == route('admin.branch.edit', $branch->id) ? 'mm-show' : '' }}">
                    @can('Thêm chi nhánh')
                        <li><a href="{{ route('admin.branch.create') }}">Thêm chi nhánh</a></li>
                    @endcan

                    @can('Hiển thị danh sách chi nhánh')
                        <li><a href="{{ route('admin.branch.index') }}">Danh sách chi nhánh</a></li>
                    @endcan
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-envelope-o"
                        aria-hidden="true"></i><span class="nav-text">Hỗ trợ tư vấn</span></a>
                <ul aria-expanded="false">
                    @can('Hiển thị danh sách hỗ trợ tư vấn')
                        <li><a href="{{ route('admin.consultant.index') }}">Danh sách hỗ trợ tư vấn</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($customer) && url()->current() == route('admin.customer.edit', $customer->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"
                        aria-hidden="true"></i><span class="nav-text">Khách hàng</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($customer) && url()->current() == route('admin.customer.edit', $customer->id) ? 'mm-show' : '' }}">
                    @can('Thêm khách hàng')
                        <li><a href="{{ route('admin.customer.create') }}">Thêm khách hàng</a></li>
                    @endcan

                    @can('Hiển thị danh sách khách hàng')
                        <li><a href="{{ route('admin.customer.index') }}">Danh sách khách hàng</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($user) && url()->current() == route('admin.staff.edit', $user->id) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"
                        aria-hidden="true"></i><span class="nav-text">Thành Viên</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($user) && url()->current() == route('admin.staff.edit', $user->id) ? 'mm-show' : '' }}">
                    @can('Thêm thành viên')
                        <li><a href="{{ route('admin.staff.create') }}">Thêm thành viên</a></li>
                    @endcan

                    @can('Hiển thị danh sách thành viên')
                        <li><a href="{{ route('admin.staff.index') }}">Danh sách thành viên</a></li>
                    @endcan
                </ul>
            </li>

            <li
                class="{{ !empty($role) && (url()->current() == route('admin.permission.editRole', $role->id) || url()->current() == route('admin.permission.assignPermission', $role->id)) ? 'mm-active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-user-plus"
                        aria-hidden="true"></i><span class="nav-text">Phân Quyền</span></a>
                <ul aria-expanded="false"
                    class="{{ !empty($role) && (url()->current() == route('admin.permission.editRole', $role->id) || url()->current() == route('admin.permission.assignPermission', $role->id)) ? 'mm-show' : '' }}">
                    @can('Thêm vai trò')
                        <li><a href="{{ route('admin.permission.addRole') }}">Thêm vai trò</a></li>
                    @endcan

                    @can('Hiển thị danh sách vai trò')
                        <li><a href="{{ route('admin.permission.roleList') }}">Danh sách vai trò</a></li>
                    @endcan

                    @can('Hiển thị danh sách tác vụ')
                        <li><a href="{{ route('admin.permission.permissionList') }}">Danh sách tác vụ</a></li>
                    @endcan
                </ul>
            </li>
        </ul>
    </div>


</div>
<!--**********************************
                                                    Sidebar end
                                                ***********************************-->
