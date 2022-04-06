@extends('back-end.layout.app')

@section('title')
    Category create
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'Category create'])

    @endcomponent




    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Create Category</h4>
                <p class="card-category">Create a new Category</p>
            </div>
            <div class="card-body">
                <form action="{{route('categories.store',['id'])}}" method="post">
                    @include('back-end.categories.form')

                    <button type="submit" class="btn btn-primary pull-right">Add Category</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

