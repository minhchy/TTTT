<?php include(app_path().'/includes/header.php');?>
<?php include(app_path().'/includes/sidebar.php');?>
@extends('layout')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Trang Thais</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('trang_thais.trang_thai.create') }}" class="btn btn-success" title="Create New Trang Thai">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($trangThais) == 0)
            <div class="panel-body text-center">
                <h4>No Trang Thais Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Tt</th>
                            <th>Id Xh</th>
                            <th>Ten Tt</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($trangThais as $trangThai)
                        <tr>
                            <td>{{ $trangThai->ID_TT }}</td>
                            <td>{{ $trangThai->ID_XH }}</td>
                            <td>{{ $trangThai->TEN_TT }}</td>

                            <td>

                                <form method="POST" action="{!! route('trang_thais.trang_thai.destroy', $trangThai->ID_TT) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('trang_thais.trang_thai.show', $trangThai->ID_TT ) }}" class="btn btn-info" title="Show Trang Thai">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('trang_thais.trang_thai.edit', $trangThai->ID_TT ) }}" class="btn btn-primary" title="Edit Trang Thai">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Trang Thai" onclick="return confirm(&quot;Click Ok to delete Trang Thai.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $trangThais->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection
<?php include(app_path().'/includes/footer.php');?>