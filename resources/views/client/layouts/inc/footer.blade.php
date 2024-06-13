<!-- Footer Start -->
<div class="footer container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="footer-container row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Зв'язатись з нами</h5>
            <p class="mb-4">Маєте питання? Звертайтесь!</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 6789</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row justify-content-between">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Швидка Покупка</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{ route('home') }}"><i class="fa fa-angle-right mr-2"></i>Головна</a>
                        <a class="text-secondary mb-2" href="{{ route('client.cart') }}"><i class="fa fa-angle-right mr-2"></i>Корзина</a>
                        <a class="text-secondary mb-2" href="{{ route('checkout') }}"><i class="fa fa-angle-right mr-2"></i>Оформлення замовлення</a>
                        <a class="text-secondary" href="{{ route('contact') }}"><i class="fa fa-angle-right mr-2"></i>Контакти</a>
                    </div>
                </div>
                <div class="footer-newsletter col-md-7 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Отримуйте оновлення</h5>
                    <p>Будьте у курсі подій першими! Підпишіться на наші оновлення.</p>
                    <form class="footer-newsletter__form" action="">
                        <div class="footer-newsletter__input-group input-group">
                            <input type="email" class="footer-newsletter__input form-control" placeholder="Ваша елекронна адреса">
                            <div class="footer-newsletter__button-box input-group-append">
                                <button class="footer-newsletter__button btn btn-primary">Приєднатися</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
