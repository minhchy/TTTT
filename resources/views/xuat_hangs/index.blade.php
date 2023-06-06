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
                <h4 class="mt-5 mb-5">Xuat Hangs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('xuat_hangs.xuat_hang.create') }}" class="btn btn-success" title="Create New Xuat Hang">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($xuatHangs) == 0)
            <div class="panel-body text-center">
                <h4>No Xuat Hangs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Xh</th>
                            <th>Id Kh</th>
                            <th>Id Ncc</th>
                            <th>Id Nv</th>
                            <th>Time Xh</th>
                            <th>Tongtien Xh</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($xuatHangs as $xuatHang)
                        <tr>
                            <td>{{ $xuatHang->ID_XH }}</td>
                            <td>{{ $xuatHang->ID_KH }}</td>
                            <td>{{ $xuatHang->ID_NCC }}</td>
                            <td>{{ $xuatHang->ID_NV }}</td>
                            <td>{{ $xuatHang->TIME_XH }}</td>
                            <td>{{ $xuatHang->TONGTIEN_XH }}</td>

                            <td>

                                <form method="POST" action="{!! route('xuat_hangs.xuat_hang.destroy', $xuatHang->ID_XH) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('xuat_hangs.xuat_hang.show', $xuatHang->ID_XH ) }}" class="btn btn-info" title="Show Xuat Hang">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('xuat_hangs.xuat_hang.edit', $xuatHang->ID_XH ) }}" class="btn btn-primary" title="Edit Xuat Hang">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Xuat Hang" onclick="return confirm(&quot;Click Ok to delete Xuat Hang.&quot;)">
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
            {!! $xuatHangs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection
<?php include(app_path().'/includes/footer.php');?>