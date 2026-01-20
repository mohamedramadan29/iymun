@include('front.layouts._header')

@include('front.layouts._navbar')

@yield('content')

@if (Session::has('Success_message'))
@php
toastify()->success(\Illuminate\Support\Facades\Session::get('Success_message'));
@endphp
@endif
@if ($errors->any())
@foreach ($errors->all() as $error)
@php
toastify()->error($error);
@endphp
@endforeach
@endif

@include('front.layouts._footer')
