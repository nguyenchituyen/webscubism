<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="#"> <i class="icon_house_alt"></i> <span>Dashboard</span> </a>
            </li>
            <li class="sub-menu">
                <a class="" href="javascript:;"> <i class="icon_genius"></i> <span>Roles</span>
                    <span class="menu-arrow arrow_carrot-right"></span> </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('role.index')}}">Search Role</a></li>
                    <li><a class="" href="{{ route('role.create')}}">Register Role</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_genius"></i>
                    <span>Role Action</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('resource.index')}}">Search Role Action</a></li>
                    <li><a class="" href="{{ route('resource.create')}}">Register Role Action</a></li>
                    <li><a class="" href="{{ route('acl.index') }}">Assign Role Action</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class=""> <i class="icon_document_alt"></i> <span>User</span>
                    <span class="menu-arrow arrow_carrot-right"></span> </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('user.index')}}">Search User</a></li>
                    <li><a class="" href="{{ route('user.create') }}">Register User</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-suitcase"></i>
                    <span>Job</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('job.index')}}">Search Job</a></li>
                    <li><a class="" href="{{ route('job.create') }}">Register Job</a></li>
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
                <a class="" href="#"> <i class="icon_genius"></i> <span>Widgets</span> </a>
            </li>
            <li>
                <a class="" href="#"> <i class="icon_piechart"></i> <span>Charts</span>

                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class=""> <i class="icon_table"></i> <span>Tables</span>
                    <span class="menu-arrow arrow_carrot-right"></span> </a>
                <ul class="sub">
                    <li><a class="" href="">Basic Table</a></li>
                </ul>
            </li>
            <li>
                <a class="" href="#"> <i class="icon_piechart"></i> <span>Reports</span> </a>

            </li>
            <li class="sub-menu">
                <a href="javascript:;" class=""> <i class="icon_contacts_alt"></i> <span>Contact

                    </span> <span class="menu-arrow arrow_carrot-right"></span> </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('contact.index') }}">Search Contact</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>