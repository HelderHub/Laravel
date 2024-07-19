@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
                <form method="POST" action="{{ url('players') }}">
                    @csrf
                    <h2>Show Player</h2>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            autocomplete="name"
                            placeholder="Type your name"
                            class="form-control
            @error('name') is-invalid @enderror"
                            value="{{$player->name}}"
                            disabled
                            aria-describedby="nameHelp">
                        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <input
                            type="text"
                            id="address"
                            name="address"
                            autocomplete="address"
                            placeholder="Type your address"
                            class="form-control
            @error('address') is-invalid @enderror"
                            value="{{$player->address->address}}"
                            disabled
                            aria-describedby="addressHelp">
                        <small id="addressHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" disabled required>
                            {{$player->description}}
                        </textarea>
                    </div>

                    <div>
                        <label for="retired">Retired</label>
                        <br>
                        <input disabled type="radio" id="yes" name="retired" value="yes"
                        @if($player->retired==1) checked @endif>
                        <label for="yes">Yes</label>
                        <input disabled type="radio" id="no" name="retired" value="no"
                               @if($player->retired==0) checked @endif>
                        <label for="no">No</label>
                    </div>
                    <a href="http://127.0.0.1:8000/players/" class="mt-2 mb-5 btn btn-primary" >Back</a>
                </form>
@endsection

