@extends('master.main')

@section('content')
    @component('components.addresses.address-form-edit', ['address' => $address])
    @endcomponent

@endsection
