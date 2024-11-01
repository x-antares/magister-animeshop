@extends('admin.auth.app')

@section('content')
<div class="card-body">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    {!! Lte3::formOpen(['action' => '/login', 'method' => 'POST']) !!}
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
    <div class="row">
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Увійти</button>
        </div>
    </div>
    {!! Lte3::formClose() !!}

{{--    <div class="social-auth-links text-center mt-2 mb-3">--}}
{{--        <a href="#" class="btn btn-block btn-primary">--}}
{{--            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook--}}
{{--        </a>--}}
{{--        <a href="#" class="btn btn-block btn-danger">--}}
{{--            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <p class="mb-1">--}}
{{--        <a href="/forgot-password">Restore password</a>--}}
{{--    </p>--}}
{{--    <p class="mb-0">--}}
{{--        <a href="/register" class="text-center">Зареєструватись</a>--}}
{{--    </p>--}}
</div>
@endsection
