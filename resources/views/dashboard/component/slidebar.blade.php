<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                         </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Quản Lý Thành Viên</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{route('dashboard.index')}}">Quản Lý Nhóm Thành Viên</a></li>
                    <li><a href="{{route('user.index')}}">Quản Lý Thành Viên</a></li>
                    <li><a href="{{route('order.index')}}">Quản Lý Đơn Hàng</a></li>
                    <li><a href="">Quản Lý Sản Phẩm</a></li>
                    <li><a href="">Quản lý mã giảm giá</a></li>
                    <li><a href="">Quản lý bình luận</a></li>
                    
                    
                    
                </ul>
            </li>
            
        </ul>

    </div>
</nav>