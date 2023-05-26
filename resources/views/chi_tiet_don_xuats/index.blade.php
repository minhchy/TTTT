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
                <h4 class="mt-5 mb-5">Chi Tiet Don Xuats</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chi_tiet_don_xuats.chi_tiet_don_xuat.create') }}" class="btn btn-success" title="Create New Chi Tiet Don Xuat">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chiTietDonXuats) == 0)
            <div class="panel-body text-center">
                <h4>No Chi Tiet Don Xuats Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Hh</th>
                            <th>Id Xh</th>
                            <th>Soluong Ctdx</th>
                            <th>Dongia Ctdx</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chiTietDonXuats as $chiTietDonXuat)
                        <tr>
                            <td>{{ $chiTietDonXuat->id_hh }}</td>
                            <td>{{ $chiTietDonXuat->id_xh }}</td>
                            <td>{{ $chiTietDonXuat->soluong_ctdx }}</td>
                            <td>{{ $chiTietDonXuat->dongia_ctdx }}</td>

                            <td>

                                <form method="POST" action="{!! route('chi_tiet_don_xuats.chi_tiet_don_xuat.destroy', $chiTietDonXuat->id_hh) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chi_tiet_don_xuats.chi_tiet_don_xuat.show', $chiTietDonXuat->id_hh ) }}" class="btn btn-info" title="Show Chi Tiet Don Xuat">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chi_tiet_don_xuats.chi_tiet_don_xuat.edit', $chiTietDonXuat->id_hh ) }}" class="btn btn-primary" title="Edit Chi Tiet Don Xuat">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chi Tiet Don Xuat" onclick="return confirm(&quot;Click Ok to delete Chi Tiet Don Xuat.&quot;)">
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
            {!! $chiTietDonXuats->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection