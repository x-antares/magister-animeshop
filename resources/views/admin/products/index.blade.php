@extends('admin.layouts.app')

@section('content')
    @include('admin.parts.content-header', [
        'page_title' => 'Продукту',
        'url_back' => '/admin',
    ])

    <section class="content">
        <div class="mb-4">
            <a href="#" class="btn btn-success btn-flat js-modal-fill-html" data-target='#modal-lg' data-fn-inits="initSelect2" data-url="{{ route('admin.products.create') }}" ><i class="fa fa-plus"></i> Додати</a>
        </div>

        <!-- LIST/TABLE -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">К-сть: {{ $products->count() }} </h3>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Ім'я</th>
                        <th>Категорія</th>
                        <th>Бренд</th>
                        <th>Дата створення</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->category?->name }}
                            </td>
                            <td>
                                {{ $product->brand?->name }}
                            </td>
                            <td>
                                {{ $product->created_at }}
                            </td>
                            <td>
                                <a href="{{ route('admin.products.edit', $product) }}"  class="btn btn-info btn-sm js-modal-fill-html" data-target="#modal-lg" data-fn-inits="initSelect2"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ route('admin.products.destroy', $product) }}" class="btn btn-danger btn-sm js-click-submit"
                                   data-method="delete"
                                   data-confirm="Confirm?"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                {!! Lte3::pagination($products ?? null) !!}
            </div>
        </div>
    </section>
@endsection
