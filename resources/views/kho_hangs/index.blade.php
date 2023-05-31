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
                <h4 class="mt-5 mb-5">Kho Hangs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('kho_hangs.kho_hang.create') }}" class="btn btn-success" title="Create New Kho Hang">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($khoHangs) == 0)
            <div class="panel-body text-center">
                <h4>No Kho Hangs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Khohang</th>
                            <th>Ten Khohang</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($khoHangs as $khoHang)
                        <tr>
                            <td>{{ $khoHang->id_khohang }}</td>
                            <td>{{ $khoHang->ten_khohang }}</td>

                            <td>

                                <form method="POST" action="{!! route('kho_hangs.kho_hang.destroy', $khoHang->id_khohang) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('kho_hangs.kho_hang.show', $khoHang->id_khohang ) }}" class="btn btn-info" title="Show Kho Hang">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('kho_hangs.kho_hang.edit', $khoHang->id_khohang ) }}" class="btn btn-primary" title="Edit Kho Hang">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Kho Hang" onclick="return confirm(&quot;Click Ok to delete Kho Hang.&quot;)">
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
            {!! $khoHangs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection