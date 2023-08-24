@extends('layouts')
 
@section('content')
<div class="register-form-wrapper wow bounceIn row" 
    section="signin" 
    style="margin: auto; position: relative; width: 80%;top: 15rem; margin-left: auto; margin-right: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Welcome {{ Auth::user()->email}}!</h2>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        
        <table class="table table-bordered">
            <tr>
                <th>Email</th>
                <th>Country</th>
                <th>Zapaccount Type</th>
                <th width="200px">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->email }}</td>
                <td>{{ $user->country }}</td>
                <td>{{ $user->zaptype }}</td>
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
    
                        <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> -->
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>      
@endsection