
@extends('layouts.app')

@section('page_title', 'Add Page')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Page</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Page Form
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <form class="form-horizontal clearfix" role="form" method="POST" action="{{ url('/page') }}">
                                {{ csrf_field() }}

                                <div class="form-group ">
                                    <label for="email" class="col-md-1 control-label text-right"></label>

                                    <div class="col-md-5">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="is_parent" id="is_parent" {{old('is_parent') ? "checked='checked'" : "" }}>Check if its parent, Note check this will remove URL below
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group ">
                                    <label for="email" class="col-md-1 control-label text-right">Name</label>

                                    <div class="col-md-5">
                                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
                                       
                                        <p class="help-block">Example name : Category</p>
                                    </div>

                                    @if ($errors->has('name'))
                                    <div class="col-md-5 ">
                                        <span class="help-block ">
                                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                        </span>
                                    </div>
                                    @endif
                                </div>

                            
                                <div class="form-group div-url">
                                    <label for="email" class="col-md-1 control-label text-right">URL</label>

                                    <div class="col-md-5">
                                        <input type="text" id="url" class="form-control" name="url" value="{{ old('url') }}">
                                       
                                        <p class="help-block">Example url : /page/create </p>
                                    </div>
                                    @if ($errors->has('url'))
                                    <div class="col-md-5 ">
                                        <span class="help-block ">
                                            <strong class="text-danger">{{ $errors->first('url') }}</strong>
                                        </span>
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group div-parent">
                                    <label for="email" class="col-md-1 control-label text-right">Parent</label>

                                    <div class="col-md-5">
                                        <select class="form-control" name="parent_id">
                                                <option value="0">Select</option>
                                                @foreach($parent_pages as $page)
                                                <option value="{{$page->id}}">{{$page->name}}</option>
                                                @endforeach
                                            </select>
                                       
                                        <p class="help-block">This will be the parent tab for your link.</p>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="type" class="col-md-1 control-label text-right">Type</label>

                                    <div class="col-md-5">
                                        <select class="form-control" name="type">
                                                <option value="">Select</option>
                                                <option value="1">Sidebar</option>
                                                <option value="2">Navigation</option>
                                                <option value="3">Sidebar and Navigation</option>
                                            </select>
                                       
                                        <p class="help-block">Choose if you want display it on sidebar, Navigation bar or both.</p>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <label for="type" class="col-md-1 control-label text-right">Roles</label>

                                    <div class="col-md-5">
                                        @foreach($roles as $role)
                                        <div class="checkbox">
                                            <label>
                                                
                                                <input type="checkbox" name="role[]" value="{{$role->id}}"
                                                    {{ ( is_array( old('role')) && in_array($role->id, old('role') ) ) ? 'checked' : '' }}>
                                                    {{$role->name}}
                                            </label>
                                        </div>
                                        @endforeach
                                       
                                        <p class="help-block">Choose the Roles for this Page. "No roles means public page"</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-5 col-md-offset-1">
                                        <button type="submit" class="btn btn-primary">Save</button> 
                                        <a class="btn btn-default" href="/page">Cancel</a>
                                    </div>
                                </div>


                            </form>


                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Information</h4>
                                <p>Pages are the links accessible in this application. Basically, This will let you handle who or what roles can access specific pages listed above.
                                  
                                <h5>Note:</h5>
                                    <ol>
                                        <li>Pages tag as 'Parent' won't have any links, It serves as representaion only for dropdown menu(s).</li>
                                        <li>Any page without roles are considered public, Meaning any login users can visit the page.</li>
                                        <li>Choose in 'Type' whether you want to display it on sidebar, navigation bar or both(Currently logic is just for sidebar).</li>
                                        <li>Tagging page on a Parent Page will automatically position the link as child link or a dropdown menu behind Parent Page. (Currently logic is just for sidebar)</li>
                                    </ol>
                                </p>
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


@section('scripts')
    <script src="/js/app/page/script.js"></script>
@endsection