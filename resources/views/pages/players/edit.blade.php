@extends('master.main')

@section('content')
    @component('components.players.player-form-edit', ['player' => $player, 'addressList' => $addressList])
    @endcomponent

@endsection
