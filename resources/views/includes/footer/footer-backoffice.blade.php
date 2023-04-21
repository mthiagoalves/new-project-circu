<footer class="footer py-4  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>, Circu Magical Furniture - Luxury brand for children.
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end m-0 pb-0">
                    <li class="nav-item">
                        <a href="https://www.circu.net" class="nav-link text-muted" target="_blank">Website</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.circu.net/inspirations" class="nav-link text-muted" target="_blank">Inspirations</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://blog.circu.net/" class="nav-link text-muted" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.circu.net/products" class="nav-link pe-0 text-muted" target="_blank">All Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</main>
<div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
<i class="material-icons py-2">settings</i>
</a>
<div class="card shadow-lg">
<div class="card-header pb-0 pt-3">
    <div class="float-start">
        <h5 class="mt-3 mb-0">Material UI Configurator</h5>
        <p>See our dashboard options.</p>
    </div>
    <div class="float-end mt-1">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
        <i class="material-icons">clear</i>
        </button>
    </div>
    <!-- End Toggle Button -->
</div>
<hr class="horizontal dark my-1">
<div class="card-body pt-sm-3 pt-0">
    <!-- Sidenav Type -->
    <div class="mt-3">
        <h6 class="mb-0">Sidenav Type</h6>
        <p class="text-sm">Choose between 2 different sidenav types.</p>
    </div>
    <div class="d-flex">
        <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
    </div>
    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
    <!-- Navbar Fixed -->
    <div class="mt-3 d-flex">
        <h6 class="mb-0">Navbar Fixed</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" style="display:block" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
    </div>
    <hr class="horizontal dark my-3">
    <div class="mt-2 d-flex">
        <h6 class="mb-0">Light / Dark</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" style="display:block" id="dark-version" onclick="darkMode(this)">
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<!--   Core JS Files   -->
<script src="/js/backoffice/core/popper.min.js" ></script>
<script src="/js/backoffice/core/bootstrap.min.js" ></script>
<script src="/js/backoffice/plugins/perfect-scrollbar.min.js" ></script>
<script src="/js/backoffice/plugins/smooth-scrollbar.min.js" ></script>
<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
var options = {
damping: '0.5'
}
Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/js/backoffice/material-dashboard.min.js?v=3.0.4"></script>