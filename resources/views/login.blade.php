@extends('layouts.master')

@section('content')

<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <h2 class="mb-4">Login</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{route('login.submit')}}" method="POST">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">User name</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>                
                    <div class="mb-2">
                        <label for="" class="form-label">User password</label>
                        <input name="password" type="text" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection