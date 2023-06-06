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
                <h4 class="mt-5 mb-5">Khach Hangs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('khach_hangs.khach_hang.create') }}" class="btn btn-success" title="Create New Khach Hang">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($khachHangs) == 0)
            <div class="panel-body text-center">
                <h4>No Khach Hangs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Kh</th>
                            <th>Ten Kh</th>
                            <th>Phone Kh</th>
                            <th>Email Kh</th>
                            <th>Address Kh</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($khachHangs as $khachHang)
                        <tr>
                            <td>{{ $khachHang->id_kh }}</td>
                            <td>{{ $khachHang->ten_kh }}</td>
                            <td>{{ $khachHang->phone_kh }}</td>
                            <td>{{ $khachHang->email_kh }}</td>
                            <td>{{ $khachHang->address_kh }}</td>

                            <td>

                                <form method="POST" action="{!! route('khach_hangs.khach_hang.destroy', $khachHang->id_kh) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('khach_hangs.khach_hang.show', $khachHang->id_kh ) }}" class="btn btn-info" title="Show Khach Hang">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('khach_hangs.khach_hang.edit', $khachHang->id_kh ) }}" class="btn btn-primary" title="Edit Khach Hang">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Khach Hang" onclick="return confirm(&quot;Click Ok to delete Khach Hang.&quot;)">
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
            {!! $khachHangs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection