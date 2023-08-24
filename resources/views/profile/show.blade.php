@extends('layouts')
  
@section('content')
<div class="register-form-wrapper wow bounceIn row" 
    section="signin" 
    style="margin: auto; position: relative; width: 80%;top: 15rem; margin-left: auto; margin-right: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right" style="margin-bottom: 1rem;">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong style="font-size: 1.2em;">Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong style="font-size: 1.2em;">Password:</strong>
                {{ $user->password }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong style="font-size: 1.2em;">Country:</strong>
                {{ $user->country }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong style="font-size: 1.2em;">Zapaccount Type:</strong>
                {{ $user->zaptype }}
            </div>
        </div>

    </div>
@endsection