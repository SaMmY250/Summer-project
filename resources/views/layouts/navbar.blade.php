{{-- <nav class="navbar navbar-expand">
    <div class="px-lg-5 px-4">
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="#!">Mhepi Auto Workshop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <ul class="navbar-nav me-auto mb-lg-0 ms-lg-4 mb-2">
                <li><a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link" href="{{ route('aboutus') }}">About us</a></li>
            </ul>

            <div class="navbar-nav me-auto mb-lg-0 ms-lg-4 mb-2 flex-row-reverse">
                <label class="nav-link"> {{ Auth::user()->name }} </label>
            </div>
        </div>
    </div>
</nav> --}}


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">

        <!-- Collapsible wrapper -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <label class="navbar-brand mt-lg-0 mt-2"> Mhepi Auto Workshop </label>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-lg-0 mb-2">
                <li><a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link" href="{{ route('aboutus') }}">About us</a></li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">

            <!-- Notifications -->
            <div class="navbar-nav me-auto mb-lg-0 ms-lg-4 mb-2 flex-row-reverse">
                @if (Auth::check() && Auth::user()->role_name == 'user')
                    <a href="{{ route('user.logout') }}">
                        <button class="btn btn-danger">logout</button>
                    </a>
                    <label class="nav-link mx-md-2"> {{ Auth::user()->name }} </label>
                @endif
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
</nav>
<!-- Navbar -->
