{!! Lte3::select2('status', isset($order) ? $order->status : null,  \App\Models\Order::getStatuses(), [
    'label' => 'Статус',
    'required' => true,
]) !!}

{!! Lte3::text('name', null, [
       'label' => 'Клієнт'
]) !!}

{!! Lte3::text('email', null, [
       'label' => 'Email'
]) !!}

{!! Lte3::number('total', isset($order) ? $order->total : config('services.shipping_price'), [
       'label' => 'Всього, $',
       'help' => '* Вартість доставки $' . config('services.shipping_price'),
]) !!}

{!! Lte3::text('phone', null, [
       'label' => 'Телефон'
]) !!}

{!! Lte3::text('address', null, [
       'label' => 'Адреса'
]) !!}

{!! Lte3::text('added[shipping][country]', null, [
       'label' => 'Країна'
]) !!}

{!! Lte3::text('added[shipping][city]', null, [
       'label' => 'Місто'
]) !!}

{!! Lte3::text('added[shipping][zipcode]', null, [
       'label' => 'Індекс'
]) !!}

{!! Lte3::textarea('added[shipping][comment]', null, [
       'label' => 'Коментар клієнта',
       'class' => 'f-summernote',
]) !!}

{{--{!! Lte3::select2('added[purchase_products]', isset($order) ? $order->added['purchase_products'] : null,  \App\Models\Product::where('is_published', 1)->pluck('name', 'id')->toArray(), [--}}
{{--    'label' => 'Куплені товари',--}}
{{--    'required' => true,--}}
{{--    'multiple' => 1,--}}
{{--]) !!}--}}

<div class="card-header">
    <h3 class="card-title"><i class="nav-icon fas fa-shopping-cart"></i>
        Куплені товари: {{ isset($order) ? $order->purchaseProducts->count() : 0 }}
        {{--<a href="#" data-toggle="modal" data-target="#purchases-add" ><i class="fas fa-plus-circle"></i></a>--}}
    </h3>
{{--    <div class="card-tools">--}}
{{--        <a href="#" class="btn btn-xs btn-success js-modal-add-purchase" data-toggle="modal" data-toggle="my-modal-lg"><i--}}
{{--                class="fas fa-plus-circle"></i> Додати</a>--}}
{{--    </div>--}}
    <div class="card-tools">
        <a href="#" data-toggle="modal" data-target="#add-order-product"  data-fn-inits="initSelect2" class="btn btn-xs btn-success js-modal-fill-html"><i
                class="fas fa-plus-circle"></i> Додати</a>
    </div>
</div>
<div class="card-body table-responsive p-0">
    <table class="table table-hover">
        <thead>
        <tr>
            <th style="width: 30%">Назва</th>
            <th>Ціна</th>
            <th>К-cть</th>
        </tr>
        </thead>
        <tbody id="js-add-order-products">
        @isset($order)
            @foreach($order->purchase_products ?? [] as $product)
                <tr>
                    <td>
                        $product->name
                    </td>
                    <td>
                        $product->price
                    </td>
                    <td>
                        $product->qty
                    </td>
                </tr>
            @endforeach
        @endisset
{{--        <tr id="12e2ba40-0adf-479e-9e29-50c2208a4753">--}}
{{--            <td>--}}
{{--                test--}}
{{--            </td>--}}
{{--            <td>--}}
{{--                <input class="form-control" name="added[purchase_product][$id][price]" type="number" value="10">--}}
{{--            </td>--}}
{{--            <td>--}}
{{--                <input class="form-control" name="added[purchase_product][$id][qty]" type="number" value="10">--}}
{{--            </td>--}}
{{--            <td>--}}
{{--                <button type="button" class="btn btn-danger js-table-tr-delete" data-tr-id="12e2ba40-0adf-479e-9e29-50c2208a4753"><i class='fa fa-minus'></i></button>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>--}}
{{--                test--}}
{{--            </td>--}}
{{--            <td>--}}
{{--                test--}}
{{--            </td>--}}
{{--            <td>--}}
{{--                test--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        @foreach($order->purchases as $purchase)--}}
{{--            <tr class="va-center">--}}
{{--                <td>--}}
{{--                    <div class="btn-actions dropdown">--}}
{{--                        <button type="button" class="btn btn-sm btn-default" data-toggle="dropdown"><i--}}
{{--                                class="fas fa-ellipsis-v"></i></button>--}}
{{--                        <div class="dropdown-menu" role="menu" style="">--}}
{{--                            <a href="{{ route('admin.orders.purchases.delete', $purchase) }}"--}}
{{--                               class="dropdown-item js-click-submit" data-method="delete"--}}
{{--                               data-confirm="Видалити?">Видалити</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($img = $purchase->getImage())--}}
{{--                        <a href="{{ $img }}" class="img-thumbnail js-popup-image"><img src="{{$img}}"--}}
{{--                                                                                       style="width: 50px;"></a>--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($variation = $purchase->variation)--}}
{{--                        <a href="{{ route('admin.products.edit', [$variation->product, 'variation' => $variation->id]) }}"--}}
{{--                           target="_blank" title="{{ $purchase->id }}">--}}
{{--                            {{ $purchase->getSku() }}--}}
{{--                        </a>--}}
{{--                    @else--}}
{{--                        {{ $purchase->getSku() }}--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    {{ $purchase->getName() }}<br>--}}
{{--                    <small>--}}
{{--                        @foreach($purchase->variation?->properties ?? [] as $property)--}}
{{--                            <strong>{{ $property->attribute?->name }}:</strong> {{ $property->value }};--}}
{{--                        @endforeach--}}
{{--                    </small>--}}
{{--                </td>--}}
{{--                <td class="ha-center">--}}
{{--                    {!! Lte3::xEditable('price', $purchase->price, [--}}
{{--                        'type' => 'text',--}}
{{--                        'pk' => $purchase->id,--}}
{{--                        'url_save' => route('admin.orders.purchases.editable', $purchase),--}}
{{--                    ]) !!}--}}
{{--                </td>--}}
{{--                <td class="ha-center">--}}
{{--                    {!! Lte3::xEditable('quantity', $purchase->quantity, [--}}
{{--                        'type' => 'text',--}}
{{--                        'pk' => $purchase->id,--}}
{{--                        'url_save' => route('admin.orders.purchases.editable', $purchase),--}}
{{--                    ]) !!}--}}
{{--                </td>--}}
{{--                <td class="ha-center">--}}
{{--                    {!! Lte3::xEditable('discount', $purchase->discount, [--}}
{{--                        'type' => 'text',--}}
{{--                        'pk' => $purchase->id,--}}
{{--                        'url_save' => route('admin.orders.purchases.editable', $purchase),--}}
{{--                    ]) !!}--}}
{{--                </td>--}}
{{--                <td class="ha-center">{{ $purchase->price * $purchase->quantity - $purchase->discount }} {{ $purchase->currency_code }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
            $(".js-modal-save-products").click(function(){
                $select2 = $('select[name="added[purchase_products]"]');
                id = $select2.val();
                text = $select2.text();
                text = text.replace(/\s\s+/g, ' ');
                price = $('input[name="price"]').val();
                qty = $('input[name="qty"]').val();
                var htmlToAppend = '<tr id="' + id + '">' +
                    '<td>' + text + '</td>' +
                    '<td><input class="form-control" name="added[purchase_product][' + id + '][price]" type="number" value="' + price + '"></td>' +
                    '<td><input class="form-control" name="added[purchase_product][' + id + '][qty]" type="number" value="' + qty + '"></td>' +
                    '<td><button type="button" class="btn btn-danger js-table-tr-delete" data-tr-id="' + id + '"><i class="fa fa-minus"></i></button></td>' +
                    '</tr>';

                // console.log(htmlToAppend);
                $("table tbody#js-add-order-products").append(htmlToAppend);
            });

            $(".js-table-tr-delete").click(function(){
                // $("table tr#" + $(this).attr('data-tr-id')).remove()
                console.log('this');
            });

        });
        // $('.js-product').on('change', function() {
        //     var selectedOptions = $(this).select2('data'); // Get selected data
        //
        //     var selectedNames = selectedOptions.map(function(option) {
        //         return option.text; // Retrieve name (text)
        //     });
        //
        //     var selectedValues = selectedOptions.map(function(option) {
        //         return option.id; // Retrieve value (id)
        //     });
        //
        //     console.log('Selected Names:', selectedNames);
        //     console.log('Selected Values:', selectedValues);
        // });
        // selectElement = $('select[name="added[purchase_products]"]');
    </script>
@endpush
@push('modals')
    <div class="modal fade" id="add-order-product">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Додати продукт</h4>

                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Lte3::select2('added[purchase_products]', null,  \App\Models\Product::where('is_published', 1)->pluck('name', 'id')->toArray(), [
                        'label' => 'Товар',
                        'required' => true,
                        'empty_value' => '-',
                    ]) !!}
                    {!! Lte3::number('price', null, ['label' => 'Ціна', 'default' => 0, 'max' => '100', 'min' => 1]) !!}
                    {!! Lte3::number('qty', null, ['label' => 'К-сть', 'default' => 0, 'max' => '100', 'min' => 1]) !!}
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary js-modal-save-products" data-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endpush
