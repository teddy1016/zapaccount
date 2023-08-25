@extends('layouts')
   
@section('content')
<div class="register-form-wrapper wow bounceIn row" 
    section="signin" 
    style="margin: auto; position: relative; width: 80%;top: 15rem; margin-left: auto; margin-right: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User Information</h2>
        </div>
        <div class="pull-right" style="margin-bottom: 1rem;">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-lg-12 margin-tb">
        <form action="{{ route('users.update', $user->id ) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="email" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" class="form-control" name="password" placeholder="Password" value="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        <input type="password" name="password_confirmation" value="" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Country:</strong>
                        <input type="text" name="country" value="{{ $user->country }}" class="form-control" placeholder="Country">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Zapaccount Type:</strong>
                        <select class="form-control" name="zaptype" id="zaptype">
                            <option value="">We need a ZAP account for...</option>
                            <option value="zapads">ZAP Ads</option>
                            <option value="zapplace">ZAP Places</option>
                            <option value="zapmarket">List things for sale on ZAP Market</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
    
        </form>
    </div>
    
</div>

@endsection