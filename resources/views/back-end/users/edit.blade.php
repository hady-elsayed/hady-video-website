@extends('back-end.layout.app')

@section('title')
    User Edit
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'User Edit'])

    @endcomponent

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update user Profile</h4>
                <p class="card-category">update user profile</p>
            </div>
            <div class="card-body">
                <form action="{{route('users.update',$rows->id)}}" method="post">
                    {{method_field('put')}}
                    @include('back-end.users.form')

                    <button type="submit" class="btn btn-primary pull-right">Update User Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

