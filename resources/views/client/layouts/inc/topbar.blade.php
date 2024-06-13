<!-- Topbar Start -->
<div class="header container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="header-logo col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="header-logo__text header-logo__text--left h1 text-uppercase text-primary bg-dark px-2">Anime</span>
                <span class="header-logo__text header-logo__text--right h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
            </a>
        </div>
        <div class="header-search col-lg-4 col-6 text-left">
            <form action="{{--{{ route('catalog.index') }}--}}">
                <div class="header-search__input-group input-group">
                    <input type="text" class="header-search__input form-control" placeholder="Шукати...">
                    <div class="input-group-append">
                            <span class="header-search__input-group-append input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Зв'язатись з нами</p>
            <h5 class="m-0"><a href="tel:+0123456789">+012 345 6789</a></h5>
        </div>
    </div>
</div>
<!-- Topbar End -->
