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
                <h4 class="mt-5 mb-5">THÔNG TIN NHÀ CUNG CẤP</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('nha_cung_caps.nha_cung_cap.create') }}" class="btn btn-success" title="Create New Nha Cung Cap">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($nhaCungCaps) == 0)
            <div class="panel-body text-center">
                <h4>No Nha Cung Caps Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TÊN NHÀ CUNG CẤP</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($nhaCungCaps as $nhaCungCap)
                        <tr>
                            <td>{{ $nhaCungCap->ID_NCC }}</td>
                            <td>{{ $nhaCungCap->TEN_NCC}}</td>
                            <td>{{ $nhaCungCap->PHONE_NCC }}</td>
                            <td>{{ $nhaCungCap->EMAIL_NCC }}</td>
                            <td>{{ $nhaCungCap->ADDRESS_NCC }}</td>

                            <td>

                                <form method="POST" action="{!! route('nha_cung_caps.nha_cung_cap.destroy', $nhaCungCap->ID_NCC) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('nha_cung_caps.nha_cung_cap.show', $nhaCungCap->ID_NCC ) }}" class="btn btn-info" title="Show Nha Cung Cap">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('nha_cung_caps.nha_cung_cap.edit', $nhaCungCap->ID_NCC ) }}" class="btn btn-primary" title="Edit Nha Cung Cap">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Nha Cung Cap" onclick="return confirm(&quot;Click Ok to delete Nha Cung Cap.&quot;)">
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
            {!! $nhaCungCaps->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection

<?php include(app_path().'/includes/footer.php');?>