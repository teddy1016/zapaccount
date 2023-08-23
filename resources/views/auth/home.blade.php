@extends('../layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @foreach ($users as $user)
                <h1>Welcome {{ $user->email }} !</h1>
                <h3>email:{{ $user->email }}</h3>
                <h3>country:{{ $user->country}}</h3>
                @endforeach
            </div>
        </div>
    </div>    
</div>
    
@endsection