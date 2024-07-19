@extends('master.main')

@section('content')

    @component('components.players.player-form-create', ['addressList' => $addressList])
    @endcomponent

@endsection
