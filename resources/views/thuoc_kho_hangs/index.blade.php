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
                <h4 class="mt-5 mb-5">Thuoc Kho Hangs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('thuoc_kho_hangs.thuoc_kho_hang.create') }}" class="btn btn-success" title="Create New Thuoc Kho Hang">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($thuocKhoHangs) == 0)
            <div class="panel-body text-center">
                <h4>No Thuoc Kho Hangs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Khohang</th>
                            <th>Id Hh</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($thuocKhoHangs as $thuocKhoHang)
                        <tr>
                            <td>{{ $thuocKhoHang->id_khohang }}</td>
                            <td>{{ $thuocKhoHang->id_hh }}</td>

                            <td>

                                <form method="POST" action="{!! route('thuoc_kho_hangs.thuoc_kho_hang.destroy', $thuocKhoHang->id_khohang) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('thuoc_kho_hangs.thuoc_kho_hang.show', $thuocKhoHang->id_khohang ) }}" class="btn btn-info" title="Show Thuoc Kho Hang">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('thuoc_kho_hangs.thuoc_kho_hang.edit', $thuocKhoHang->id_khohang ) }}" class="btn btn-primary" title="Edit Thuoc Kho Hang">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Thuoc Kho Hang" onclick="return confirm(&quot;Click Ok to delete Thuoc Kho Hang.&quot;)">
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
            {!! $thuocKhoHangs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection