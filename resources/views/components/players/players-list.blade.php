@extends('master.main')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <div class="row mt-3 mb-5">
            <h1> Players List </h1>
            <form class="ml-auto d-inline-block" action="{{url('deletePlayers/')}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Retired</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $player)
                    <tr>
                        <th scope="row">{{$player->id}}</th>
                        <td>{{$player->name}}</td>
                        <td>{{$player->address->address}}</td>
                        <td>
                            @if($player->retired == 1)
                                <i class="bi bi-check-circle-fill text-success"></i> Yes
                            @else
                                <i class="bi bi-x-circle-fill text-danger"></i> No
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('players/'.$player->id) }}" class="btn btn-success">Show</a>
                            <a href="{{ url('players/'.$player->id.'/edit') }}" class="btn btn-primary">Edit</a>

                            <form class="d-inline" action="{{url('players/'.$player->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$players}}
        </div>
    </div>
@endsection
