@extends('back-end.layout.app')

@section('title')
    User create
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'User create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create Profile</h4>
                <p class="card-category">Create a new user profile</p>
            </div>
            <div class="card-body">
                <form action="{{route('users.store',['id'])}}" method="post">
                    @include('back-end.users.form')

                    <button type="submit" class="btn btn-primary pull-right">Add User Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

