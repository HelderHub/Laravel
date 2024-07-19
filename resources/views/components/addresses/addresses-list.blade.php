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
            <h1> Addresses List </h1>
            <form class="ml-auto d-inline-block" action="{{url('deleteAddresses/')}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($addresses as $address)
                    <tr>
                        <th scope="row">{{$address->id}}</th>
                        <td>{{$address->address}}</td>
                        <td>{{$address->city}}</td>
                        <td>{{$address->country}}</td>
                        <td>{{$address->postal_code}}</td>
                        <td>
                            <a href="{{ url('addresses/'.$address->id) }}" class="btn btn-success">Show</a>
                            <a href="{{ url('addresses/'.$address->id.'/edit') }}" class="btn btn-primary">Edit</a>

                            <form class="d-inline" action="{{url('addresses/'.$address->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$addresses}}
        </div>
    </div>
@endsection
