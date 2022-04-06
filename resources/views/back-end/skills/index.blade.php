@extends('back-end.layout.app')

@section('title')
    Skill control
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'Skill control'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">

                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">Skill Table</h4>
                            <p class="card-category"> Here u can create / edit / delete Skill</p>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="{{route('skills.create')}}" class="btn btn-white btn-round">Add Skill</a>
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
                                <th class="text-right">
                                    control
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $category)
                                <tr>
                                    <td>
                                        {{$category-> id}}
                                    </td>
                                    <td>
                                        {{$category-> name}}
                                    </td>

                                    <td class="td-actions text-right">
                                        <a  href="{{route('skills.edit',$category->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit User">
                                            <i  class="material-icons">edit</i>
                                        </a>
                                        <form  action="{{route('skills.destroy',$category->id)}}" method="POST">
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

