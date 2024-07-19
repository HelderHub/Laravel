@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
                <form method="POST" action="{{ url('addresses') }}">
                    @csrf
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
                            value="{{ old('address') }}"
                            required
                            aria-describedby="addressHelp">
                        <small id="addressHelp" class="form-text text-muted"></small>
                        @error('address')
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
                            class="form-control
            @error('city') is-invalid @enderror"
                            value="{{ old('city') }}"
                            required
                            aria-describedby="cityHelp">
                        <small id="cityHelp" class="form-text text-muted"></small>
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
                            class="form-control
            @error('country') is-invalid @enderror"
                            value="{{ old('country') }}"
                            required
                            aria-describedby="countryHelp">
                        <small id="countryHelp" class="form-text text-muted"></small>
                        @error('country')
                        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                        @enderror
                    </div>

                    <div>
                        <label for="postal_code">Postal Code</label>
                        <input
                            type="text"
                            id="postal_code"
                            name="postal_code"
                            autocomplete="postal_code"
                            placeholder="Type your postal code"
                            class="form-control
            @error('postal_code') is-invalid @enderror"
                            value="{{ old('postal_code') }}"
                            required
                            aria-describedby="cityHelp">
                        <small id="cityHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                        @error('postal_code')
                        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                        @enderror


                    </div>


                    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
                </form>

@endsection
