@extends('layouts.app')

@section('page_title', 'Pages')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List of Pages</h1>
            <a href="page/create" class="btn btn-primary btn pull-right btn-create-page-header">Create Page</a>
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

                                <!--<a href="page/create" class="btn btn-primary btn pull-right margin-bottom3" style="">Create Page</a>-->

                                <table width="100%" class="table table-striped table-bordered table-hover voffset2 dataTables" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>URL</th>
                                            <th>Parent</th>
                                            <th>Is Parent</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($pages as $page)
                                        <tr class="odd gradeX" id="page-{{$page->id}}">
                                            <td>{{$page->name}}</td>
                                            <td>{{$page->url}}</td>
                                            <td>{{$page->parent_id}}</td>
                                            <td>{{($page->is_parent ==1) ? "Yes" : "No"}}</td>
                                            <td class="center">{{ App\Helpers\Helper::getPageType($page->type) }}</td>
                                            <td class="center">
                                                <a href="/page/{{$page->id}}/edit">Edit</a> |
                                                <a href="#" class="btn-remove-data" data-apiurl="{{url('/page')}}/{{$page->id }}">Remove</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

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
	