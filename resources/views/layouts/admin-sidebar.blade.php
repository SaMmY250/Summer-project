{{-- <header>
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="components/buttons.html"><i class="icon-puzzle"></i> Customer's
                        Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="components/buttons.html"><i class="icon-puzzle"></i> Service Center
                        Detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="components/social-buttons.html"><i class="icon-puzzle"></i>
                        Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="components/social-buttons.html"><i class="icon-puzzle"></i>
                        Billing</a>
                </li>
            </ul>
    </div>
</header> --}}


<!-- Sidebar -->
{{-- <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar"> --}}
{{-- <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a> --}}

<nav class="w3-sidebar sidebar w3-bar-block w3-border-right w3-card w3-animate-left" style="display:none" id="mySidebar">
    <div class="w3-bar-item nav-item mt-2">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
    </div>

    <div class="w3-bar-item nav-item mt-2">
        <a class="nav-link" href=""> Customer's Information</a>
    </div>

    <div class="w3-bar-item nav-item mt-2">
        <a class="nav-link" href="">Service Center Detail</a>
    </div>

    <div class="w3-bar-item nav-item mt-2">
        <a class="nav-link" href=""> Billing</a>
    </div>

    <button onclick="w3_close()" class="w3-bar-item w3-large btn btn-danger mt-4">Close &times;</button>
</nav>
