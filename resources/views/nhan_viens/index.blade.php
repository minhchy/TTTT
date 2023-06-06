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
                <h4 class="mt-5 mb-5">THÔNG TIN NHÂN VIÊN</h4>
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
                            <th>ID NHÂN VIÊN</th>
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
                            <td>{{ $nhanVien->ID_NV }}</td>
                            <td>{{ $nhanVien->ID_CHUCVU }}</td>
                            <td>{{ $nhanVien->PHONE_NV }}</td>
                            <td>{{ $nhanVien->EMAIL_NV }}</td>
                            <td>{{ $nhanVien->ADDRESS_NV }}</td>
                            <td>{{ $nhanVien->USERNAME_NV }}</td>
                            <td>{{ $nhanVien->PASSWORD_NV }}</td>

                            <td>

                                <form method="POST" action="{!! route('nhan_viens.nhan_vien.destroy', $nhanVien->ID_NV) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('nhan_viens.nhan_vien.show', $nhanVien->ID_NV ) }}" class="btn btn-info" title="Show Nhan Vien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('nhan_viens.nhan_vien.edit', $nhanVien->ID_NV ) }}" class="btn btn-primary" title="Edit Nhan Vien">
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
<?php include(app_path().'/includes/footer.php');?>