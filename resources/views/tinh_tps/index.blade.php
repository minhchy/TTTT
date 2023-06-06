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
                <h4 class="mt-5 mb-5">THÔNG TIN TỈNH/TP</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('tinh_tps.tinh_tp.create') }}" class="btn btn-success" title="Create New Tinh Tp">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($tinhTps) == 0)
            <div class="panel-body text-center">
                <h4>No Tinh Tps Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Tinh Tp</th>
                            <th>Ten Tinh Tp</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tinhTps as $tinhTp)
                        <tr>
                            <td>{{ $tinhTp->ID_TINH_TP }}</td>
                            <td>{{ $tinhTp->TEN_TINH_TP }}</td>

                            <td>

                                <form method="POST" action="{!! route('tinh_tps.tinh_tp.destroy', $tinhTp->ID_TINH_TP) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('tinh_tps.tinh_tp.show', $tinhTp->ID_TINH_TP ) }}" class="btn btn-info" title="Show Tinh Tp">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('tinh_tps.tinh_tp.edit', $tinhTp->ID_TINH_TP ) }}" class="btn btn-primary" title="Edit Tinh Tp">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Tinh Tp" onclick="return confirm(&quot;Click Ok to delete Tinh Tp.&quot;)">
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
            {!! $tinhTps->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection
<?php include(app_path().'/includes/footer.php');?>