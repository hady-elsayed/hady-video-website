@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h2>{{$video->name}}</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <iframe width="100%"  height="500" src="{{$video->youtube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p>
                        created by : {{$video->user->name}}
                    </p>
                    <p>
                        created at : {{$video->created_at}}
                    </p>
                    <p>
                        description : {{$video->des}}
                    </p>
                </div>
            </div>

            <div class="row">
                @foreach($video->skills as $skill )
                    <span class="badge badge-default" >{{$skill->name}}</span>
                @endforeach
            </div>

            <div class="row">
                <span class="badge badge-default" >{{$video->category->name}}</span>
            </div>


        </div>
    </div>
</div>
@endsection
