@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
                <form method="POST" action="{{ url('addresses/'.$address->id) }}">
                    @csrf
                    @method('PUT')
                    <h2>Edit Address</h2>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input
                            type="text"
                            id="address"
                            name="address"
                            autocomplete="address"
                            placeholder="Type your address"
                            class="form-control
            @error('address') is-invalid @enderror"
                            value="{{$address->address}}"
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
                        <label for="city">City</label>

                        <input
                            type="text"
                            id="city"
                            name="city"
                            autocomplete="city"
                            placeholder="Type your city"
                            class="form-control @error('city') is-invalid @enderror"
                            value="{{ $address->city }}"
                            required
                            aria-describedby="cityHelp">
                        <small id="cityHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                        @error('city')
                        <span class="invalid-feedback" role="alert">

        <strong>{{ $message }}</strong>
    </span>
                        @enderror
                    </div>


                    <div>
                        <label for="country">Country</label>

                        <input
                            type="text"
                            id="country"
                            name="country"
                            autocomplete="country"
                            placeholder="Type your country"
                            class="form-control @error('country') is-invalid @enderror"
                            value="{{ $address->country }}"
                            required
                            aria-describedby="cityHelp">
                        <small id="countryHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                        @error('country')
                        <span class="invalid-feedback" role="alert">

        <strong>{{ $message }}</strong>
    </span>
                        @enderror
                    </div>

                    <div>
                        <label for="country">Postal Code</label>

                        <input
                            type="text"
                            id="postal_code"
                            name="postal_code"
                            autocomplete="postal_code"
                            placeholder="Type your Postal Code"
                            class="form-control @error('postal_code') is-invalid @enderror"
                            value="{{ $address->postal_code }}"
                            required
                            aria-describedby="postal_codeHelp">
                        <small id="postal_codeHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                        @error('postal_code')
                        <span class="invalid-feedback" role="alert">

        <strong>{{ $message }}</strong>
    </span>
                        @enderror
                    </div>

{{--                    <div>--}}
{{--                        <label for=""></label>--}}
{{--                        <div class="custom-control custom-radio custom-control-inline">--}}
{{--                            <input type="radio" id="customRadioInline1" name="retired" class="custom-control-input" value="1" checked>--}}
{{--                            <label class="custom-control-label" for="customRadioInline1">Yes</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-radio custom-control-inline">--}}
{{--                            <input type="radio" id="customRadioInline2" name="retired" class="custom-control-input" value="0">--}}
{{--                            <label class="custom-control-label" for="customRadioInline2">No</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
                </form>

@endsection
