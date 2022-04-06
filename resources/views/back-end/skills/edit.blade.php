@extends('back-end.layout.app')

@section('title')
    Skill Edit
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'Skill Edit'])

    @endcomponent

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Skill Category</h4>
                <p class="card-category">Skill Category</p>
            </div>
            <div class="card-body">
                <form action="{{route('skills.update',$rows->id)}}" method="post">
                    {{method_field('put')}}
                    @include('back-end.skills.form')

                    <button type="submit" class="btn btn-primary pull-right">Update Skill</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

