<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="px-4 px-lg-5">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="#!">Admin Mhepi Auto Workshop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('admin-dashboard')}}">ADMIN</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin-aboutus') }}">About us</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('admin-logout') }}">Log out</a></li> --}}
            </ul>
        </div>
    </div>
</nav>
