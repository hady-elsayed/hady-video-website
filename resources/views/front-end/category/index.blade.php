@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h2>{{$category->name}}</h2>
            </div>
            <div class="row">

                    @foreach($videos as $video)
                    <div class="col-lg-4">
                        @include('front-end.videoCard')
                    </div>

                    @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
