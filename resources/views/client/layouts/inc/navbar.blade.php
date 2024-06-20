<!-- Navbar Start -->
<div class="header container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="header-menu col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h5 class="header-menu__title text-dark m-0"><i class="fa fa-bars mr-2"></i>Категорії</h5>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="header-menu__navbar collapse position-absolute navbar navbar-vertical navbar-light align-items-start bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="header-menu__navbar-nav navbar-nav w-100">
{{--                    <div class="nav-item dropdown dropright">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Одяг <i class="fa fa-angle-right float-right mt-1"></i></a>--}}
{{--                        <div class="dropdown-menu position-absolute border-0">--}}
{{--                            <div class="header-menu__dropdown-menu">--}}
{{--                                <a href="" class="dropdown-item">Хаорі</a>--}}
{{--                                <a href="" class="dropdown-item">Футболки</a>--}}
{{--                                <a href="" class="dropdown-item">Худі</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="" class="nav-item nav-link">Манга та манхва</a>--}}
{{--                    <a href="" class="nav-item nav-link">Їжа та напої</a>--}}
{{--                    <a href="" class="nav-item nav-link">Статуетки та фігурки</a>--}}
{{--                    <a href="" class="nav-item nav-link">Товари для дому та офісу</a>--}}
{{--                    <a href="" class="nav-item nav-link">Аксесуари</a>--}}
{{--                    <a href="" class="nav-item nav-link">Ідеї для подарунків</a>--}}
                    @foreach($categories as $category)
                        @if($category->childs->count() > 0)
                            <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $category->name }} <i class="fa fa-angle-right float-right mt-1"></i></a>
                                <div class="dropdown-menu position-absolute border-0">
                                    <div class="header-menu__dropdown-menu">
                                        @foreach($category->childs ?? [] as $subcategory)
                                            <a href="{{ route('catalog', ['categor']) }}" class="dropdown-item">{{ $subcategory->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{ $category->slug }}" class="nav-item nav-link">{{ $category->name }}</a>
                        @endif
                    @endforeach
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="header-menu__navbar navbar navbar-expand-lg bg-dark navbar-dark p-0">
                <a href="/" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Anime</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link">Головна</a>
                        <a href="{{ route('catalog') }}" class="nav-item nav-link">Каталог</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Замовлення <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu border-0">
                                <div class="header-menu__collapse-dropdown-menu">
                                    <a href="{{ route('client.cart') }}" class="dropdown-item <!--active-->">Корзина</a>
                                    <a href="{{ route('checkout') }}" class="dropdown-item">Оформлення замовлення</a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Контакти</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0 ml-3">
                            <a href="{{ route('client.cart') }}"><i class="fas fa-shopping-cart text-primary"></i></a>
                            <span class="badge text-secondary border border-secondary rounded-circle js-cart-count">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
