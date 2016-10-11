@extends('layouts.app')

@section('page_title', 'Users')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List of Users</h1>
            <a href="user/create" class="btn btn-primary btn pull-right btn-create-page-header">Create User</a>
        </div>
        <!-- /.col-lg-12 -->

        <div class="row">
            <div class="col-lg-12">

                <!--<div class="panel panel-default">
                    <div class="panel-heading">
                        Page Lists
                    </div>
                    <!-- /.panel-heading -->
                   
                    <div class="panel-body">
                       
                        
                            <table width="100%" class="table table-striped table-bordered table-hover voffset2 dataTables" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($users as $user)
                                    <tr class="odd gradeX">
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{ App\Helpers\Helper::getRoleByID($user->role_id)}}</td>
                                        <td class="center">
                                            <a href="/user/{{$user->id}}/edit">Edit</a> |
                                            <a href="#" class="btn-remove-data" data-apiurl="{{url('/user')}}/{{$user->id }}">Remove</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Information</h4>
                                <p>Shows thel list of user(s) who can Login on this site.
                            </div>

                    </div>
                    <!-- /.panel-body -->
                <!--</div>--
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection
	