
@extends('master.main')

@section('content')

    @component('components.addresses.addresses-list', ['addresses' => $addresses])
    @endcomponent
@endsection

