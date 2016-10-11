@extends('layouts.app')

@section('page_title', 'Roles')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List of Roles</h1>
             <a href="role/create" class="btn btn-primary btn pull-right btn-create-page-header">Create Role</a>
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

                            <!--<a href="role/create" class="btn btn-primary btn pull-right margin-bottom3" style="">Create Role</a>-->
                            
                            <table width="100%" class="table table-striped table-bordered table-hover voffset2 dataTables" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Role</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($roles as $role)
                                    <tr class="odd gradeX">
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->description}}</td>
                                        <td class="center">
                                            <a href="/role/{{$role->id}}/edit">Edit</a> |
                                            <a href="#" class="btn-remove-data" data-apiurl="{{url('/role')}}/{{$role->id }}">Remove</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        <!-- /.table-responsive -->
                        <div class="well">
                            <h4>Information</h4>
                            <p>Shows thel list of roles(s) to assign to each users.
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
	