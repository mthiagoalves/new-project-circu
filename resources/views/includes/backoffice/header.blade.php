<script type="text/javascript" src="/js/megaTracker.js"></script>
@php session_start(); @endphp

<style>
    .msg{
        background-color: #1cd31cad;
        padding: 7px;
        border-radius: 0.35rem;
    }
    .navbar {
    max-width: 95%;
    position: relative;
    background-color: #fff;
    padding: 0 0.5rem;
    }
</style>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/dashboard">
            <img src="/img/logo-circu-magical-furniture-new.png" class="navbar-brand-img h-100 m-auto" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white " href="/dashboard">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Homepage Backoffice</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="/dashboard/all-inspirations">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="color:#fff;opacity:1;" class="fa fa-book" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inspirations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('backoffice-products')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 18px;" class="fa fa-product-hunt" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('backoffice-stocklist')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Stocklist</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('all-seo')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">SEO</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            
        </div>
    </div>
</aside>
<main class="main-content border-radius-lg" style="overflow: hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-3 px-3">
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <nav aria-label="breadcrumb">
                    @if(session('msg'))
                        <h6 class="font-weight-bolder mb-0 msg" id="session_msg">{{session('msg')}}</h6>
                    @endif
                </nav>
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group input-group-outline">
                        @if (Route::is('backoffice.all-inspirations'))
                            <form action="/dashboard/all-inspirations" method="GET">
                                <input type="text" class="form-control" name="search" placeholder="SEARCH PROJECT...">
                            </form>

                        @elseif (Route::is('backoffice-products'))
                            <form action="/dashboard/products" method="GET">
                                <input type="text" class="form-control" name="search" placeholder="SEARCH PRODUCT...">
                            </form>
                        @endif
                    </div>
                </div>
                <p style="color:#6666666;margin:0px 6px;">{{ Auth::user()->name }} <i class="fas fa-user"></i> </p>
                <a  href="{{ route('process.backoffice-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" type="button">
                    <p style="color:#6666666;margin:0px"> | Logout <i class="fa fa-sign-out" aria-hidden="true"></i> </p>
                </a>

                <form id="logout-form" action="{{ route('process.backoffice-logout') }}" method="POST" style="display:none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </nav>

<script>
    setTimeout(
        function() {
            var session_msg = document.getElementById("session_msg");
            session_msg.style.transition = "opacity " + 3 + "s";
            session_msg.style.opacity = 0;
            session_msg.addEventListener("transitionend", function() {
            session_msg.style.display = "none";
            });
        }, 3000
    );
</script>