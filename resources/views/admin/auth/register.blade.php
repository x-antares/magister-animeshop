@extends('admin.auth.app')

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Зареєструвати нового автора</p>
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {!! Lte3::formOpen(['action' => url('register'), 'method' => 'POST']) !!}
            {!! Lte3::text('name', null, [
                'placeholder' => 'Name',
                'label' => '',
                'class_wrap' => 'mb-3',
                'append' => '<span class="fas fa-user"></span>',
            ]) !!}

            {!! Lte3::text('email', null, [
                'type' => 'email',
                'placeholder' => 'Email',
                'label' => '',
                'class_wrap' => 'mb-3',
                'append' => '<i class="fas fa-envelope"></i>',
            ]) !!}
            {!! Lte3::text('password', null, [
               'type' => 'password',
               'placeholder' => 'Password',
               'label' => '',
               'class_wrap' => 'mb-3',
               'append' => '<i class="fas fa-lock"></i>',
           ]) !!}

            {!! Lte3::text('password_confirmation', null, [
               'type' => 'password',
               'placeholder' => 'Password confirmation',
               'label' => '',
               'class_wrap' => 'mb-3',
               'append' => '<i class="fas fa-lock"></i>',
           ]) !!}

            <div class="row">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </div>
        {!! Lte3::formClose() !!}

        <a href="/login" class="text-center">Я вже маю акаунт</a>

    </div>
@endsection
