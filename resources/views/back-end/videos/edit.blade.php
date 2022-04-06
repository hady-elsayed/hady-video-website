@extends('back-end.layout.app')

@section('title')
    video Edit
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'video Edit'])

    @endcomponent
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">video Category</h4>
                    <p class="card-category">v Category</p>
                </div>
                <div class="card-body">
                    <form action="{{route('videos.update',$rows->id)}}" method="post" enctype="multipart/form-data">
                        {{method_field('put')}}
                        @include('back-end.videos.form')

                        <button type="submit" class="btn btn-primary pull-right">Update video</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <iframe width="350" height="250"  src="{{isset($rows) ? $rows->youtube :''}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card">
                <image src="/uploads/{{$rows->image}}"></image>
            </div>
        </div>
    </div>



@endsection

