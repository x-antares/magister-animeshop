@extends('client.layouts.app')

@section('content')
    @include('client.layouts.inc.breadcrumbs')

    <!-- Checkout Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Адреса</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>ПІБ</label>
                        <input name="name" class="form-control" type="text" placeholder="Андрій">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input name="email" class="form-control" type="text" placeholder="andriy.best@gmail.com">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Телефон</label>
                        <input name="phone" class="form-control" type="text" placeholder="+123 456 789">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Адреса</label>
                        <input name="address" class="form-control" type="text" placeholder="вул. Карпенка Карого 35">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Країна</label>
                        <input name="added[shipping][country]" class="form-control" type="text" placeholder="Україна">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Населений пункт</label>
                        <input name="added[shipping][city]" class="form-control" type="text" placeholder="м. Луцьк">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Індекс</label>
                        <input name="added[shipping][zipcode]" class="form-control" type="text" placeholder="43000">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Коментар</label>
                        <textarea name="added[shipping][comment]" class="form-control" rows="8" id="message" placeholder="Повідомлення"
                                  required="required"
                                  data-validation-required-message="Будь-ласка введіть повідомлення"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Сума замовлення</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom">
                    <h6 class="mb-3">Продукти</h6>
                    <div class="d-flex justify-content-between">
                        <p>Product Name 1</p>
                        <p>$150</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Product Name 2</p>
                        <p>$150</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Product Name 3</p>
                        <p>$150</p>
                    </div>
                </div>
                <div class="border-bottom pt-3 pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Проміжний підсумок</h6>
                        <h6>$150</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Доставка</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>До сплати</h5>
                        <h5>$160</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->

@endsection
