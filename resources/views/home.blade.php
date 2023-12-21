@extends('layouts.master')

@section('content')
<main role="main" class="container">
    {{-- <img src="{{asset('/storage/images/new_image.jpg')}}" alt=""> --}}
    <div class="col-md-4 mt-5">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
            <form-group>
                @csrf
                <div>
                    <label for="">Upload</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                </div>
            </form-group>
        </form>        
    </div>
</main>
  @endsection