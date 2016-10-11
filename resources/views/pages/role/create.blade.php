
@extends('layouts.app')

@section('page_title', 'Add Role')

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Role</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Role Form
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        
                        <form class="form-horizontal clearfix" role="form" method="POST" action="{{ url('/role') }}">
                            {{ csrf_field() }}
                            

                            <div class="form-group ">
                                <label for="name" class="col-md-1 control-label text-right">Name</label>

                                <div class="col-md-5">
                                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
                                   
                                    <p class="help-block">Example name : Manager</p>
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
                                <label for="description" class="col-md-1 control-label text-right">Description</label>

                                <div class="col-md-5">
                                    <textarea class="form-control" rows="3" id="description" class="form-control" name="description">{{ old('description') }}</textarea>
                                   
                                    <p class="help-block">Optional: Enter brief description for role</p>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="email" class="col-md-1 control-label text-right">Enable</label>

                                <div class="col-md-5">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="enable" id="enable" checked='checked'>Check if this role is enabled, Leave uncheck to disable it.
                                    </label>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-md-5 col-md-offset-1">
                                    <button type="submit" class="btn btn-primary">Save</button> 
                                    <a class="btn btn-default" href="/role">Cancel</a>
                                </div>
                            </div>


                        </form>


                        <!-- /.table-responsive -->
                        <div class="well">
                            <h4>Information </h4>
                            <p>Add Role to assign to each Users.                              
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
	