@extends('back-end.layout.app')

@section('title')
    Category Edit
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'Category Edit'])

    @endcomponent

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Update Category</h4>
                <p class="card-category">update Category</p>
            </div>
            <div class="card-body">
                <form action="{{route('categories.update',$rows->id)}}" method="post">
                    {{method_field('put')}}
                    @include('back-end.categories.form')

                    <button type="submit" class="btn btn-primary pull-right">Update Category</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection

