@extends('../layouts')

@section('content')

<div class="register-form-wrapper wow bounceIn" 
    section="signin" 
    style="margin: auto; position: relative; top: 15rem; width: 60%; margin-left: auto; margin-right: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h2 id="section-2" style="text-align: center;">Verify Your Email Address</h2>
            <div> 
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                Before proceeding, please check your email for a verification link. If you did not receive the email,
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click here to request another</button>.
                </form>
            </div>
        </div>
    </div>    
</div>

@endsection