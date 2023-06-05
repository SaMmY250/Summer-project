<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="px-lg-5 px-4">
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="#!">Admin Mhepi Auto Workshop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <ul class="navbar-nav">
                <li><a class="nav-link" href="{{ route('admin-dashboard') }}">Admin</a></li>
                <li></li><a class="nav-link" href="{{ route('admin-aboutus') }}">About us</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('admin-logout') }}">Log out</a></li> --}}
            </ul>
        </div>
    </div>
</nav>
