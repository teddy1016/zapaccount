@extends('../layouts')

@section('content')
<div class="register-form-wrapper wow bounceIn" 
    section="signin" 
    style="margin: auto; position: relative; top: 15rem; width: 60%; margin-left: auto; margin-right: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h2 id="section-2" style="text-align: center;">Login Page</h2>
    <!--begin form-->
    <div>        
        <!--begin success message -->
        @if ($message = Session::get('success'))
            <div class="alert alert-danger text-center">
                {{ $message }}
            </div>     
        @endif
        <form action="{{ route('authenticate') }}" method="post">
            @csrf
            <div class="mb-3 row">
                <div class="col-md-12">
                <input type="email" class="register-input name-email white-input form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-12">
                <input type="password" class="register-input name-pwd white-input form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-12">
                    <input value="Log in" class="register-submit" type="submit" style="max-width: 100%;">
                </div>
            </div>
        </form>        
    </div>
    <!--end form-->
    <!-- <div class="col-md-8">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-danger text-center">
                        {{ $message }}
                    </div>     
                @endif

                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>     -->
</div>
    
@endsection