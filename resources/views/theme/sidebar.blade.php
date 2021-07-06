<!--**********************************
    Sidebar start
***********************************-->
<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Trang quản trị admin</li>
            <li>
                <a href="{{URL::to('/admin/home')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Trang quản trị</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/category')}}" aria-expanded="false">
                    <i class="icon-menu menu-icon"></i><span class="nav-text">Danh mục món ăn</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/item')}}" aria-expanded="false">
                    <i class="fa fa-plus"></i><span class="nav-text">Món ăn</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/addons')}}" aria-expanded="false">
                    <i class="fa fa-plus"></i><span class="nav-text">Món ăn kèm thêm</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/banner')}}" aria-expanded="false">
                    <i class="fa fa-bullhorn"></i><span class="nav-text">hình ảnh Banner quảng cáo</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/pincode')}}" aria-expanded="false">
                    <i class="fa fa-map-pin" aria-hidden="true"></i><span class="nav-text">Mã vùng giao hàng</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/promocode')}}" aria-expanded="false">
                    <i class="fa fa-tag"></i><span class="nav-text">Mã khuyến mãi, giảm giá</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/driver')}}" aria-expanded="false">
                    <i class="fa fa-car"></i><span class="nav-text">Nhân viên giao hàng</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/time')}}" aria-expanded="false">
                    <i class="fa fa-clock-o"></i><span class="nav-text">Thời gian làm việc</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/payment')}}" aria-expanded="false">
                    <i class="fa fa-usd"></i><span class="nav-text">Phương thức thanh toán</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/orders')}}" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i><span class="nav-text">Tất cả Đơn hàng</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/users')}}" aria-expanded="false">
                    <i class="fa fa-users"></i><span class="nav-text">Tài khoản Người dùng</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/reviews')}}" aria-expanded="false">
                    <i class="fa fa-star"></i><span class="nav-text">Đánh giá, bình luận</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/admin/report')}}" aria-expanded="false">
                    <i class="fa fa-bar-chart"></i><span class="nav-text">Báo cáo và thống kê</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Nội dung CMS</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{URL::to('/admin/privacypolicy')}}">Chính sách bảo mật</a></li>
                    <li><a href="{{URL::to('/admin/termscondition')}}">Điều khoản sử dụng</a></li>
                    <li><a href="{{URL::to('/admin/settings')}}">Giới thiệu</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->