{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="px-md-2">
        <div class="navbar-collapse" id="navbarSupportedContent">
            <button class="btn" onclick="w3_open()">☰</button>
            <a class="navbar-brand" href="#!">Admin Mhepi Auto Workshop</a>
            <ul class="navbar-nav">
                <li>
                    <a class="nav-link" href="{{ route('admin.aboutus') }}">About us</a>
                </li>

                <li>
                    <a class="nav-link " href="">
                        <button class="btn btn-danger">
                            Log out
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <button class="btn" onclick="w3_open()">☰</button>
            <label class="navbar-brand" href="#!">Admin Mhepi Auto Workshop</label>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li><a class="nav-link" href="{{ route('admin.aboutus') }}">About us</a></li>
                <li><a class="nav-link" href=""> Settings</a></li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            @if (Auth::check() && Auth::user()->role_name == 'admin')
                <label class="nav-link mx-md-4 px-lg-2"> {{ Auth::user()->name }} </label>
            @endif
            <a class="nav-link" href="{{ route('admin.logout') }}"><button class="btn btn-danger">logout</button></a>
        </div>
        <!-- Container wrapper -->
</nav>
<!-- Navbar -->
