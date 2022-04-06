@extends('back-end.layout.app')

@section('title')
    Users control
@endsection



@section('content')

    @component('back-end.layout.header',['nav_title'=>'Users control'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">

                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title ">Users Table</h4>
                            <p class="card-category"> Here u can create / edit / delete Users</p>
                        </div>

                        <div class="col-md-4 text-right">
                            <a href="{{route('users.create')}}" class="btn btn-white btn-round">Add User</a>
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
                                    Email
                                </th>
                                <th class="text-right">
                                    control
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $user)
                                <tr>
                                    <td>
                                        {{$user-> id}}
                                    </td>
                                    <td>
                                        {{$user-> name}}
                                    </td>
                                    <td>
                                        {{$user-> email}}
                                    </td>
                                    <td class="td-actions text-right">
                                        <a  href="{{route('users.edit',$user->id)}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit User">
                                            <i  class="material-icons">edit</i>
                                        </a>
                                        <form  action="{{route('users.destroy',$user->id)}}" method="POST">
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
                        {!! $rows->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection

