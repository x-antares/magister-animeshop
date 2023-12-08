{!! Lte3::text('name', null, [
       'label' => 'Назва'
]) !!}

{!! Lte3::text('slug', null, ['label' => 'Slug', 'required' => true, 'default' => '']) !!}

{!! Lte3::textarea('body', null, [
       'label' => 'Контент',
       'class' => 'f-summernote',
]) !!}
