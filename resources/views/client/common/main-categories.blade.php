<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Головні категорії</span></h2>
    <div class="row px-xl-5 pb-3">
        @foreach($mainCategories as $mainCategory)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="{{ route('catalog', ['filters' => [['attribute' => 'category', 'value' => $mainCategory->slug]]]) }}">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
                            <img class="img-fluid" src="{{ $mainCategory->getMyFirstMediaUrl('image') }}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{ $mainCategory->name }}</h6>
                            <small class="text-body">{{ $mainCategory->products()->count() }} Продуктів</small>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/______________.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Ранабе</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/565__4__6____5__4________.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Комікси</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/__________________.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Аніме фігурки</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/412612412425745863786.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Наклейки стікери</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/4s6d5f65s4dfsad.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Скетчбуки</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/SZC-KG-128_2__57776.1631126637.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Кігурумі</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/____4__65__46__5__4__64______.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>М'які іграшки</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/__6__4__64__6__4__65__4____.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Дакімакури</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/46__4__6__46____4____.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Кольорові лінзи</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--                <a class="text-decoration-none" href="">--}}
{{--                    <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                        <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/cat-{{ $loop->index + 1 }}.jpg" alt="">--}}
{{--                            <img class="img-fluid" src="https://www.pulsar.ua/files/img_categories/__1____21____________3__21__.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="flex-fill pl-3">--}}
{{--                            <h6>Чашки</h6>--}}
{{--                            <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-3.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-4.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-4.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-3.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-2.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-1.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-4.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">--}}
{{--            <a class="text-decoration-none" href="">--}}
{{--                <div class="cat-item img-zoom d-flex align-items-center mb-4">--}}
{{--                    <div class="overflow-hidden" style="width: 100px; height: 100px;">--}}
{{--                        <img class="img-fluid" src="img/cat-3.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill pl-3">--}}
{{--                        <h6>Category Name</h6>--}}
{{--                        <small class="text-body">{{ rand(10, 100) }} Продуктів</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>
</div>
<!-- Categories End -->
