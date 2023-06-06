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
                <h4 class="mt-5 mb-5">TRẠNG THÁI PHƯƠNG TIỆN</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('trang_thai_phuong_tiens.trang_thai_phuong_tien.create') }}" class="btn btn-success" title="Create New Trang Thai Phuong Tien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($trangThaiPhuongTiens) == 0)
            <div class="panel-body text-center">
                <h4>No Trang Thai Phuong Tiens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Ttpt</th>
                            <th>Ten Ttpt</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($trangThaiPhuongTiens as $trangThaiPhuongTien)
                        <tr>
                            <td>{{ $trangThaiPhuongTien->ID_TTPT }}</td>
                            <td>{{ $trangThaiPhuongTien->TEN_TTPT }}</td>

                            <td>

                                <form method="POST" action="{!! route('trang_thai_phuong_tiens.trang_thai_phuong_tien.destroy', $trangThaiPhuongTien->ID_TTPT) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('trang_thai_phuong_tiens.trang_thai_phuong_tien.show', $trangThaiPhuongTien->ID_TTPT ) }}" class="btn btn-info" title="Show Trang Thai Phuong Tien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('trang_thai_phuong_tiens.trang_thai_phuong_tien.edit', $trangThaiPhuongTien->ID_TTPT ) }}" class="btn btn-primary" title="Edit Trang Thai Phuong Tien">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Trang Thai Phuong Tien" onclick="return confirm(&quot;Click Ok to delete Trang Thai Phuong Tien.&quot;)">
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
            {!! $trangThaiPhuongTiens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection
<?php include(app_path().'/includes/footer.php');?>