{!! Lte3::text('name', null, [
       'label' => 'Назва'
]) !!}

{!! Lte3::select2('author_id', isset($picture) ? $picture->author_id : null, \App\Models\Author::all()->pluck('name', 'id')->toArray(), [
    'label' => 'Автор',
    'required' => true,
]) !!}


{!! Lte3::text('slug', null, ['label' => 'Slug', 'required' => true, 'default' => '']) !!}

{!! Lte3::textarea('body', null, [
       'label' => 'Контент',
       'class' => 'f-summernote',
]) !!}


{!! Lte3::mediaFile('image', $picture, [
        'is_image' => true,
]) !!}

