@extends('layouts.base')
@section('content')
<section class="my-5 container">
    <lousas-page
        create="{{route('lousas')}}"
        :user="{{Auth()->user()}}"
        :token="{{$token}}"
    ></lousas-page>

</section>
@endsection
