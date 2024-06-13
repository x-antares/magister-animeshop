{!! Lte3::text('name', null, [
       'label' => 'Назва'
]) !!}

{!! Lte3::select2('category_id', isset($product) ? $product->category_id : null, \App\Models\Category::all()->pluck('name', 'id')->toArray(), [
    'label' => 'Категорія',
    'required' => true,
]) !!}

{!! Lte3::select2('brand_id', isset($product) ? $product->brand_id : null, \App\Models\Brand::all()->pluck('name', 'id')->toArray(), [
    'label' => 'Бренд',
    'required' => true,
]) !!}


{{--{!! Lte3::text('slug', null, ['label' => 'Slug', 'required' => true, 'default' => '']) !!}--}}

{!! Lte3::textarea('body', null, [
       'label' => 'Контент',
       'class' => 'f-summernote',
]) !!}

{!! Lte3::textarea('short_description', null, [
       'label' => 'Короткий опис',
       'class' => 'f-summernote',
]) !!}

{!! Lte3::number('price', isset($product) ? $product->price : null, ['label' => 'Ціна', 'default' => 0, 'max' => '100', 'min' => 1]) !!}

{!! Lte3::checkbox('is_featured', null, ['label' => 'Обраний', 'class_wrap' => 'icheck-primary']) !!}


{!! Lte3::mediaFile('image', $product ?? null, [
        'is_image' => true,
]) !!}

