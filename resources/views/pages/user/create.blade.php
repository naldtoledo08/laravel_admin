
@extends('layouts.app')

@section('page_title', 'Add User')

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add User</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add User Form
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <form class="form-horizontal clearfix" role="form" method="POST" action="{{ url('/user') }}">
                                {{ csrf_field() }}
                                

                                <div class="form-group ">
                                    <label for="name" class="col-md-1 control-label text-right">Name</label>

                                    <div class="col-md-5">
                                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
                                       
                                        <p class="help-block">Example name : Ronald or Ronald Toledo</p>
                                    </div>
                                    @if ($errors->has('name'))
                                    <div class="col-md-5 ">
                                        <span class="help-block ">
                                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                        </span>
                                    </div>
                                    @endif
                                </div>

                            
                                <div class="form-group ">
                                    <label for="email" class="col-md-1 control-label text-right">Email</label>

                                    <div class="col-md-5">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                       
                                        <p class="help-block">Example url : nald.toledo08@gmail.com </p>
                                    </div>
                                    @if ($errors->has('email'))
                                    <div class="col-md-5 ">
                                        <span class="help-block ">
                                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                        </span>
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group ">
                                    <label for="type" class="col-md-1 control-label text-right">Role</label>

                                    <div class="col-md-5">
                                        <select class="form-control" name="role" id="role">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                       
                                        <p class="help-block">Choose a role for this user</p>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <label for="password" class="col-md-1 control-label text-right">Password</label>

                                    <div class="col-md-5">
                                        <input id="password" type="password" class="form-control" name="password">
                                       
                                        <p class="help-block">Minimum of 6 characters</p>
                                    </div>
                                    @if ($errors->has('password'))
                                    <div class="col-md-5 ">
                                        <span class="help-block ">
                                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                        </span>
                                    </div>
                                    @endif

                                </div>

                                <div class="form-group ">
                                    <label for="password_confirmation" class="col-md-1 control-label text-right">Retype Password</label>

                                    <div class="col-md-5">
                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                        <p class="help-block">Please retype user password.</p>


                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="email" class="col-md-1 control-label text-right">Enable</label>

                                    <div class="col-md-5">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="enable" {{old('enable') ? "checked='checked'" : "" }}>Check if this user will be enabled.
                                        </label>
                                    </div>

                                </div>
                                  

                                <div class="form-group">
                                    <div class="col-md-5 col-md-offset-1">
                                        <button type="submit" class="btn btn-primary">Save</button> 
                                        <a class="btn btn-default" href="/user">Cancel</a>
                                    </div>
                                </div>


                            </form>


                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Information</h4>
                                <p>Add User who'll use this application. Be Careful on adding user as they can manage to create, update or delete your data.</p>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        
    </div>
    <!-- /.row -->
@endsection
	