@extends('layouts')

@section('content')

<div class="register-form-wrapper wow bounceIn" 
    section="signin" 
    style="margin: auto; position: relative; width: 80%;top: 15rem; margin-left: auto; margin-right: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h2 id="section-2" style="text-align: center;">Welcome!</h2>
        @foreach ($users as $user)
        <form action="{{ route('home') }}" method="post">
            @csrf
            <div class="mb-3 row">
                <div class="col-md-12">
                <input type="text" class="register-input name-input white-input form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="User Name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-md-4" style="text-align: right;">Email: </label>
                <div class="col-md-8">
                <input type="email" class="register-input name-email white-input form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}" placeholder="Email Address" readonly>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-md-4" style="text-align: right;">Password: </label>

                <div class="col-md-8">
                <input type="password" class="register-input name-pwd white-input form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-md-4" style="text-align: right;">Confirm Password: </label>
                <div class="col-md-8">
                <input type="password" class="register-input name-pwd white-input form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-md-4" style="text-align: right;">Country: </label>
                <div class="col-md-8">
                <input type="text" class="register-input name-country white-input form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ $user->country }}"placeholder="Country">
                    @if ($errors->has('country'))
                        <span class="text-danger">{{ $errors->first('country') }}</span>
                    @endif
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-md-4" style="text-align: right;">Zapaccount Type: </label>
                <div class="col-md-8">
                <select class="register-input white-input" required="" name="zaptype" id="zaptype" value="{{ $user->zaptype }}">
                    <option value="">We need a ZAP account for...</option>
                    <option value="zapads">ZAP Ads</option>
                    <option value="zapplace">ZAP Places</option>
                    <option value="zapmarket">List things for sale on ZAP Market</option>
                </select>
                @if ($errors->has('zaptype'))
                    <span class="text-danger">{{ $errors->first('zaptype') }}</span>
                @endif
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-12" style="text-align: center;">
                    <input value="Update" class="register-submit" type="submit">
                </div>
            </div>
        </form>
        @endforeach
</div>
    
@endsection