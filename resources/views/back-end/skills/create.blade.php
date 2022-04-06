@extends('back-end.layout.app')

@section('title')
    Skill create
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'Skill create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create Skill</h4>
                <p class="card-category">Create a new Skill</p>
            </div>
            <div class="card-body">
                <form action="{{route('skills.store',['id'])}}" method="post">
                    @include('back-end.skills.form')

                    <button type="submit" class="btn btn-primary pull-right">Add Skill</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

