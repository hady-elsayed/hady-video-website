@extends('back-end.layout.app')

@section('title')
    Video create
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'Video create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create Video</h4>
                <p class="card-category">Create a new Video</p>
            </div>
            <div class="card-body">
                <form action="{{route('videos.store',['id'])}}" method="post" enctype="multipart/form-data">
                    @include('back-end.videos.form')

                    <button type="submit" class="btn btn-primary pull-right">Add Video</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

