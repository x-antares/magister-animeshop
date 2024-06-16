{!! Lte3::hidden('attribute_id', isset($attribute) ? $attribute->id : null) !!}

{!! Lte3::text('name', null, ['label' => 'Ім\'я', 'required' => true, 'default' => '']) !!}

{!! Lte3::select2('values[]', isset($attribute) ? $attribute->values->pluck('name', 'name')->toArray() : null, [], [
     'label' => 'Значення атрибуту',
     'multiple' => true,
     'url_tags' => route('admin.suggest.value'),
     'help' => '* Виберіть одну або створіть ;'
 ]) !!}
