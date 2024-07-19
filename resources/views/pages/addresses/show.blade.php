
@extends('master.main')
@section('content')
    @component('components.addresses.address-form-show', ['address' => $address])
    @endcomponent
@endsection
