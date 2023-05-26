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
                <h4 class="mt-5 mb-5">Nhap Hangs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('nhap_hangs.nhap_hang.create') }}" class="btn btn-success" title="Create New Nhap Hang">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($nhapHangs) == 0)
            <div class="panel-body text-center">
                <h4>No Nhap Hangs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Nh</th>
                            <th>Id Tt</th>
                            <th>Id Ncc</th>
                            <th>Id Nv</th>
                            <th>Time Nh</th>
                            <th>Tongtien Nh</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($nhapHangs as $nhapHang)
                        <tr>
                            <td>{{ $nhapHang->id_nh }}</td>
                            <td>{{ $nhapHang->id_tt }}</td>
                            <td>{{ $nhapHang->id_ncc }}</td>
                            <td>{{ $nhapHang->id_nv }}</td>
                            <td>{{ $nhapHang->time_nh }}</td>
                            <td>{{ $nhapHang->tongtien_nh }}</td>

                            <td>

                                <form method="POST" action="{!! route('nhap_hangs.nhap_hang.destroy', $nhapHang->id_nh) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('nhap_hangs.nhap_hang.show', $nhapHang->id_nh ) }}" class="btn btn-info" title="Show Nhap Hang">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('nhap_hangs.nhap_hang.edit', $nhapHang->id_nh ) }}" class="btn btn-primary" title="Edit Nhap Hang">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Nhap Hang" onclick="return confirm(&quot;Click Ok to delete Nhap Hang.&quot;)">
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
            {!! $nhapHangs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection