{!! Lte3::hidden('category_id', isset($category) ? $category->id : null) !!}
{!! Lte3::hidden('is_main', 1) !!}

{!! Lte3::text('name', null, ['label' => 'Ім\'я', 'required' => true, 'default' => '']) !!}
{{--{!! Lte3::text('slug', null, ['label' => 'Slug', 'required' => true, 'default' => '']) !!}--}}

{!! Lte3::mediaFile('image', $category ?? null, [
        'is_image' => true,
]) !!}

{!! Lte3::select2('subCategories[]', isset($category) ? $category->childs->pluck('name', 'name')->toArray() : null, [], [
     'label' => 'Підкатегорії',
     'multiple' => true,
     'url_tags' => route('admin.suggest.category'),
     'help' => 'створіть використовуючи ;'
 ]) !!}
