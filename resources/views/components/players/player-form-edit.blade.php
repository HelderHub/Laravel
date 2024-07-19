@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
                <form method="POST" action="{{ url('players/'.$player->id) }}">
                    @csrf
                    @method('PUT')
                    <h2>Edit Player</h2>
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
                            required
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


{{--                        <input--}}
{{--                            type="text"--}}
{{--                            id="address"--}}
{{--                            name="address"--}}
{{--                            autocomplete="address"--}}
{{--                            placeholder="Type your address"--}}
{{--                            class="form-control @error('address') is-invalid @enderror"--}}
{{--                            value="{{ $player->address->address }}"--}}
{{--                            required--}}
{{--                            aria-describedby="addressHelp">--}}
{{--                        <small id="addressHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>--}}
{{--                        @error('address')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}



                        <select class="custom-select" name="address_id">
                            @foreach($addressList as $item)
                                <option @if($item->id == $player->address_id)
                                            selected
                                @endif value="{{$item->id}}">{{$item->address}}</option>
                            @endforeach
                        </select>

{{--        <strong>{{ $message }}</strong>--}}
{{--    </span>--}}
{{--                        @enderror--}}
                    </div>

                    <div>
                        <label for="customSelect">Select an address</label>
                        <select id="customSelect" name="customSelect" class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">{{$player->address->address}}</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea  class="form-control" name="description" id="description" required>
                            {{$player->description}}
                        </textarea>
                    </div>

                    <div>
                        <label for=""></label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="retired" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" for="customRadioInline1">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="retired" class="custom-control-input" value="0">
                            <label class="custom-control-label" for="customRadioInline2">No</label>
                        </div>
                    </div>
                    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
                </form>

@endsection
