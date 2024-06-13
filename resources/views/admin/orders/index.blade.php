@extends('admin.layouts.app')

@section('content')
    @include('admin.parts.content-header', [
        'page_title' => 'Замовлення',
        'url_back' => '/admin',
    ])

    <section class="content">
        {{-- <div class="mb-4">
            <a href="#" class="btn btn-success btn-flat js-modal-fill-html" data-target='#modal-lg' data-url="{{ route('admin.orders.create') }}" ><i class="fa fa-plus"></i> Додати</a>
        </div> --}}

            <!-- LIST/TABLE -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">К-сть: {{ $orders->count() }} </h3>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Ім'я</th>
                        <th>Дата створення</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    {{ $order->name }}
                                </td>
                                <td>
                                    {{ $order->created_at }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.orders.view', $order) }}"  class="btn btn-info btn-sm js-modal-fill-html" data-target="#modal-lg"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                {!! Lte3::pagination($orders ?? null) !!}
            </div>
        </div>
    </section>

@endsection
