<?php if (http_response_code() !== $response_code) { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar mb-3">
        <div class="container">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if ("$REQUEST_URI" === '/') { ?>active<?php } ?>" href="/">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ("$REQUEST_URI" === '/anime') { ?>active<?php } ?>" href="/anime">อนิเมะ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ซับไทย</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">พากย์ไทย</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เดอะมูฟวี่</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if ("$REQUEST_URI" == '/login') { ?>
                        <button type="button" class="btn btn-auth" onClick='location.href = "/register"'><img class="icon" src="/assets/images/icons/user1.png"> Register</button>
                    <?php } else if ("$REQUEST_URI" == '/register') { ?>
                        <button type="button" class="btn btn-auth" onClick='location.href = "/login"'><img class="icon" src="/assets/images/icons/user1.png"> Login</button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-auth" onClick='location.href = "/login"'><img class="icon" src="/assets/images/icons/user1.png"> Login</button>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end bg-menu" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Variz : ขอให้สนุกกับการดูอนิเมะ</h5>
            <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <button type="button" class="btn btn-menu m-1 <?php if ("$REQUEST_URI" === '/') { ?>active<?php } ?>" onClick='location.href = "/"'>Home</button>
                <button type="button" class="btn btn-menu m-1 <?php if ("$REQUEST_URI" === '/anime') { ?>active<?php } ?>" onClick='location.href = "/anime"'>Anime</button>
                <hr class="my-3">
                <button type="button" class="btn btn-menu" onClick='location.href = "/login"'>Login</button>
            </ul>
        </div>
    </div>
<?php } ?>