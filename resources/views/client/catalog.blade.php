@extends('client.layouts.app')

@section('content')
    @include('client.layouts.inc.breadcrumbs', ['page' => 'Каталог'])

    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
{{--                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">За ціною</span></h5>--}}
{{--                <div class="bg-light p-4 mb-30">--}}
{{--                    <form>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" checked id="price-all">--}}
{{--                            <label class="custom-control-label" for="price-all">All Price</label>--}}
{{--                            <span class="badge border font-weight-normal">1000</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="price-1">--}}
{{--                            <label class="custom-control-label" for="price-1">$0 - $100</label>--}}
{{--                            <span class="badge border font-weight-normal">150</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="price-2">--}}
{{--                            <label class="custom-control-label" for="price-2">$100 - $200</label>--}}
{{--                            <span class="badge border font-weight-normal">295</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="price-3">--}}
{{--                            <label class="custom-control-label" for="price-3">$200 - $300</label>--}}
{{--                            <span class="badge border font-weight-normal">246</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="price-4">--}}
{{--                            <label class="custom-control-label" for="price-4">$300 - $400</label>--}}
{{--                            <span class="badge border font-weight-normal">145</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="price-5">--}}
{{--                            <label class="custom-control-label" for="price-5">$400 - $500</label>--}}
{{--                            <span class="badge border font-weight-normal">168</span>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
                <!-- Price End -->

                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">За брендом</span></h5>
                <div class="bg-light p-4 mb-30 js-filter-attribute" data-filter-attribute="brand">
                    <form>
                        @foreach($brands as $brand)
                            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input js-filter-input" data-filter-value="{{ $brand->slug }}" id="brand-{{ $loop->index }}">
                                <label class="custom-control-label" for="brand-{{ $loop->index }}">{{ $brand->name }}</label>
                                {{--                            <span class="badge border font-weight-normal">168</span>--}}
                            </div>
                        @endforeach
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" checked id="color-all">--}}
{{--                            <label class="custom-control-label" for="price-all">All Color</label>--}}
{{--                            <span class="badge border font-weight-normal">1000</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input js-filter-input" data-filter-value="TechCom" id="color-1">--}}
{{--                            <label class="custom-control-label" for="color-1">TechCom</label>--}}
{{--                            <span class="badge border font-weight-normal">150</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input js-filter-input" data-filter-value="WORKAPPLY" id="color-2">--}}
{{--                            <label class="custom-control-label" for="color-2">WORKAPPLY</label>--}}
{{--                            <span class="badge border font-weight-normal">295</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input js-filter-input" data-filter-value="DATAXCHANGE" id="color-3">--}}
{{--                            <label class="custom-control-label" for="color-3">DATAXCHANGE</label>--}}
{{--                            <span class="badge border font-weight-normal">246</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input js-filter-input" data-filter-value="BluePhlare" id="color-4">--}}
{{--                            <label class="custom-control-label" for="color-4">BluePhlare</label>--}}
{{--                            <span class="badge border font-weight-normal">145</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">--}}
{{--                            <input type="checkbox" class="custom-control-input js-filter-input" data-filter-value="FUZION SOURCE" id="color-5">--}}
{{--                            <label class="custom-control-label" for="color-5">FUZION SOURCE</label>--}}
{{--                            <span class="badge border font-weight-normal">168</span>--}}
{{--                        </div>--}}
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">За категорією</span></h5>
                <div class="bg-light p-4 mb-30 js-filter-attribute" data-filter-attribute="category">
                    <form>
                        @foreach($categories as $category)
                            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input js-filter-input" data-filter-value="{{ $category->slug }}" id="category-{{ $loop->index }}">
                                <label class="custom-control-label" for="category-{{ $loop->index }}">{{ $category->name }}</label>
                                {{--                            <span class="badge border font-weight-normal">168</span>--}}
                            </div>
                        @endforeach
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" checked id="size-all">--}}
{{--                            <label class="custom-control-label" for="size-all">All Size</label>--}}
{{--                            <span class="badge border font-weight-normal">1000</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="size-1">--}}
{{--                            <label class="custom-control-label" for="size-1">Кросівки</label>--}}
{{--                            <span class="badge border font-weight-normal">150</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="size-2">--}}
{{--                            <label class="custom-control-label" for="size-2">Дрони</label>--}}
{{--                            <span class="badge border font-weight-normal">295</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="size-3">--}}
{{--                            <label class="custom-control-label" for="size-3">Смартгодинники</label>--}}
{{--                            <span class="badge border font-weight-normal">246</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="size-4">--}}
{{--                            <label class="custom-control-label" for="size-4">Лампи</label>--}}
{{--                            <span class="badge border font-weight-normal">145</span>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="size-5">--}}
{{--                            <label class="custom-control-label" for="size-5">Фотоапарати</label>--}}
{{--                            <span class="badge border font-weight-normal">168</span>--}}
{{--                        </div>--}}
                    </form>
                </div>
                <button class="btn btn-block btn-primary font-weight-bold py-3 js-submit-filters">Фільтрувати</button>

                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
{{--                            <div>--}}
{{--                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>--}}
{{--                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>--}}
{{--                            </div>--}}
{{--                            <div class="ml-2">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>--}}
{{--                                    <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                        <a class="dropdown-item" href="#">Latest</a>--}}
{{--                                        <a class="dropdown-item" href="#">Popularity</a>--}}
{{--                                        <a class="dropdown-item" href="#">Best Rating</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="btn-group ml-2">--}}
{{--                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>--}}
{{--                                    <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                        <a class="dropdown-item" href="#">10</a>--}}
{{--                                        <a class="dropdown-item" href="#">20</a>--}}
{{--                                        <a class="dropdown-item" href="#">30</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                        @foreach($products as $product)
                            @include('client.common.card-product', $product)
                        @endforeach
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Фотоапарат</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$1230.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-2.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Кофта</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star-half-alt text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-3.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Лампа</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$223.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star-half-alt text-primary mr-1"></small>--}}
{{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-4.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Кросівки</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$1123.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-5.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Дрон</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$1123.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-6.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Смартгодинник</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$1239.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star-half-alt text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-7.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Блузка</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star-half-alt text-primary mr-1"></small>--}}
{{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-8.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Крем для догляду за шкірою</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$323.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">--}}
{{--                        <div class="product-item bg-light mb-4">--}}
{{--                            <div class="product-img position-relative overflow-hidden">--}}
{{--                                <img class="img-fluid w-100" src="img/product-9.jpg" alt="">--}}
{{--                                <div class="product-action">--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
{{--                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="text-center py-4">--}}
{{--                                <a class="h6 text-decoration-none text-truncate" href="">Крісло</a>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mt-2">--}}
{{--                                    <h5>$223.00</h5><h6 class="text-muted ml-2"><del>123.00</del></h6>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
{{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
{{--                                    <small>(99)</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @if ($products->lastPage() > 1)
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    {{-- Previous Page Link --}}
                                    @if ($products->onFirstPage())
                                        <li class="page-item disabled"><span class="page-link">Попередній</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}">Попередній</a></li>
                                    @endif

                                    {{-- Pagination Elements --}}
                                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                        @if ($page == $products->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    {{-- Next Page Link --}}
                                    @if ($products->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}">Наступний</a></li>
                                    @else
                                        <li class="page-item disabled"><span class="page-link">Наступний</span></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    @endif
{{--                    <div class="col-12">--}}
{{--                        <nav>--}}
{{--                            <ul class="pagination justify-content-center">--}}
{{--                                <li class="page-item disabled"><a class="page-link" href="#">Попередній</a></li>--}}
{{--                                <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">Наступний</a></li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
@endsection
