<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
    <div class="product-item bg-light mb-4">
        <div class="product-img position-relative overflow-hidden">
            <img class="img-fluid w-100" style="max-height: 370px; object-fit: cover;" src="{{ $product->getMyFirstMediaUrl('images') }}" alt="">
            <div class="product-action">
                <a class="btn btn-outline-dark btn-square js-simple-add-to-cart" data-product-id="{{ $product->id }}"><i class="fa fa-shopping-cart"></i></a>

                {{--                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>--}}
                {{--                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>--}}
                {{--                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>--}}
            </div>
        </div>
        <div class="text-center py-4">
            <a class="h6 text-decoration-none text-truncate" style="max-width: 100%;
                                    text-overflow: ellipsis;
                                    white-space: nowrap;
                                    display: block;
                                    padding: 2px 10px;" href="{{ $product->url() }}">{{ $product->name }}</a>
            <div class="d-flex align-items-center justify-content-center mt-2">
                <h5>${{ $product->price }}</h5><h6 class="text-muted ml-2">{{--<del>$1123.00</del>--}}</h6>
            </div>
            {{--                                <div class="d-flex align-items-center justify-content-center mb-1">--}}
            {{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
            {{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
            {{--                                    <small class="fa fa-star text-primary mr-1"></small>--}}
            {{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
            {{--                                    <small class="far fa-star text-primary mr-1"></small>--}}
            {{--                                    <small>(99)</small>--}}
            {{--                                </div>--}}
        </div>
    </div>
</div>
