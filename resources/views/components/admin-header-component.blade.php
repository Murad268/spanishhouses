<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="p-4">
        <h1><a href="index.html" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
        <ul class="list-unstyled components mb-5">
            <li class="{{ Request::routeIs('admin.home') ? 'active' : '' }}">
                <a href="{{route('admin.home')}}"><span class="fa fa-home mr-3"></span> Dashboard</a>
            </li>
            <li class="{{ Request::routeIs('admin.logo.index') ? 'active' : '' }}">
                <a href="{{route('admin.logo.index')}}"><span class="fa fa-home mr-3"></span> Logo</a>
            </li>
            <li class="{{ Request::routeIs('admin.about.index') ? 'active' : '' }}">
                <a href="{{route('admin.about.index')}}"><span class="fa fa-user mr-3"></span> About</a>
            </li>
            <li class="{{ Request::routeIs('admin.headers.index') ? 'active' : '' }}">
                <a href="{{route('admin.headers.index')}}"><span class="fa fa-header mr-3" aria-hidden="true"></span> Headers</a>
            </li>
            <li class="{{ Request::routeIs('admin.instaphotos.index') ? 'active' : '' }}">
                <a href="{{route('admin.instaphotos.index')}}"><span class="fa fa-instagram mr-3"></span> Insta Photos</a>
            </li>
            <li class="{{ Request::routeIs('admin.founder.index') ? 'active' : '' }}">
                <a href="{{route('admin.founder.index')}}"><span class="fa fa-info-circle mr-3"></span> Founder</a>
            </li>
            <li class="{{ Request::routeIs('admin.buildingtypes.index') ? 'active' : '' }}">
                <a href="{{route('admin.buildingtypes.index')}}"><span class="fa fa-building mr-3"></span> Building Types</a>
            </li>
            <li class="{{ Request::routeIs('admin.newbuildings.index') ? 'active' : '' }}">
                <a href="{{route('admin.newbuildings.index')}}"><span class="fa fa-building mr-3"></span> New Buildings</a>
            </li>
            <li class="{{ Request::routeIs('admin.contact.index') ? 'active' : '' }}">
                <a href="{{route('admin.contact.index')}}"><span class="fa fa-address-book mr-3"></span> Contacts</a>
            </li>
            <li class="{{ Request::routeIs('admin.products.index') ? 'active' : '' }}">
                <a href="{{route('admin.products.index')}}"><span class="fa fa-building mr-3"></span> Products</a>
            </li>
            <li class="{{ Request::routeIs('admin.districts.index') ? 'active' : '' }}">
                <a href="{{route('admin.districts.index')}}"><span class="fa fa-building mr-3"></span> Districts</a>
            </li>
            <li>
                <a href="{{route('admin.logout')}}"><span class="fa fa-building mr-3"></span> Logout</a>
            </li>
        </ul>

    </div>
</nav>
