@extends('layouts.master')

@section('content')
<main role="main" class="container">
    <div class="row mt-5">
        @foreach ($categories as $item)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4>{{$item->title}}</h4>
                    <p>{{$item->description}}</p>
                    <p>--*--</p>
                    <p class="btn-sm btn-success">{{$item->category?->name}}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</main>
  @endsection