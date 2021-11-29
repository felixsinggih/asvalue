<nav class="navbar fixed-top navbar-expand-lg navbar-light px-md-4 mb-3 bg-body shadow-sm">
    <div class="container-fluid pt-2 pb-2">
        <a class="navbar-brand" href="/">
            <img src="/assets/frontend-ui/didadidu.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-md-4" aria-current="page" href="/#featured">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-4" href="/#price">Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-4" href="#">Hubungi Kami</a>
                </li>
            </ul>

            <div class="d-flex">
                @auth('user')

                    <a class="btn btn-outline-blue" href="#" style="margin-right: 10px">
                        {{ explode(' ', Auth::guard('user')->user()->name)[0] }}
                    </a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-blue">Log out</button>
                    </form>
                @else
                    <a class="btn btn-outline-blue" href="/login" style="margin-right: 10px">Masuk</a>
                    <a class="btn btn-blue" href="/login">Coba Gratis</a>
                @endauth

            </div>
        </div>
    </div>
</nav>
