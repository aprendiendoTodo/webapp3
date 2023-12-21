@extends('layouts.master')

@section('content')
<main role="main" class="container">
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
</main>
  @endsection