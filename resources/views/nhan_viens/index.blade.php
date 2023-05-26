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
                <h4 class="mt-5 mb-5">Nhan Viens</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('nhan_viens.nhan_vien.create') }}" class="btn btn-success" title="Create New Nhan Vien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($nhanViens) == 0)
            <div class="panel-body text-center">
                <h4>No Nhan Viens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Nv</th>
                            <th>Id Chucvu</th>
                            <th>Phone Nv</th>
                            <th>Email Nv</th>
                            <th>Address Nv</th>
                            <th>Username Nv</th>
                            <th>Password Nv</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($nhanViens as $nhanVien)
                        <tr>
                            <td>{{ $nhanVien->id_nv }}</td>
                            <td>{{ $nhanVien->id_chucvu }}</td>
                            <td>{{ $nhanVien->phone_nv }}</td>
                            <td>{{ $nhanVien->email_nv }}</td>
                            <td>{{ $nhanVien->address_nv }}</td>
                            <td>{{ $nhanVien->username_nv }}</td>
                            <td>{{ $nhanVien->password_nv }}</td>

                            <td>

                                <form method="POST" action="{!! route('nhan_viens.nhan_vien.destroy', $nhanVien->id_nv) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('nhan_viens.nhan_vien.show', $nhanVien->id_nv ) }}" class="btn btn-info" title="Show Nhan Vien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('nhan_viens.nhan_vien.edit', $nhanVien->id_nv ) }}" class="btn btn-primary" title="Edit Nhan Vien">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Nhan Vien" onclick="return confirm(&quot;Click Ok to delete Nhan Vien.&quot;)">
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
            {!! $nhanViens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection