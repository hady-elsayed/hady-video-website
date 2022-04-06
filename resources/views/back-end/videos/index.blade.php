@extends('back-end.layout.app')

@section('title')
    Video control
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'Video control'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">

                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">Video Table</h4>
                            <p class="card-category"> Here u can create / edit / delete Video</p>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="{{route('videos.create')}}" class="btn btn-white btn-round">Add Video</a>
                        </div>
                    </div>

                </div>



                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    published
                                </th>
                                <th>
                                    cat
                                </th>
                                <th>
                                    user
                                </th>

                                <th class="text-right">
                                    control
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $video)
                                <tr>
                                    <td>
                                        {{$video-> id}}
                                    </td>
                                    <td>
                                        {{$video-> name}}
                                    </td>

                                    <td>
                                        {{$video-> published}}
                                    </td>

                                    <td>
                                        {{$video-> category->name}}
                                    </td>

                                    <td>
                                        {{$video-> user ->name}}
                                    </td>


                                    <td class="td-actions text-right">
                                        <a  href="{{route('videos.edit',$video->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit User">
                                            <i  class="material-icons">edit</i>
                                        </a>
                                        <form  action="{{route('videos.destroy',$video->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove User">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

