<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="#">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>User</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('user.index')}}">Search User</a></li>
                    <li><a class="" href="{{ route('user.create') }}">Register User</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_desktop"></i>
                    <span>Templates</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="#">Search template</a></li>
                    <li><a class="" href="#">Register template</a></li>
                </ul>
            </li>
            <li>
                <a class="" href="#">
                    <i class="icon_genius"></i>
                    <span>Roles</span>
                </a>
            </li>
            <li>
                <a class="" href="#">
                    <i class="icon_piechart"></i>
                    <span>Reports</span>
                </a>

            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->