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
                <h4 class="mt-5 mb-5">Loại Phương Tiện</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('loai_phuong_tiens.loai_phuong_tien.create') }}" class="btn btn-success" title="Create New Loai Phuong Tien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($loaiPhuongTiens) == 0)
            <div class="panel-body text-center">
                <h4>No Loai Phuong Tiens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Loại Phương Tiện</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($loaiPhuongTiens as $loaiPhuongTien)
                        <tr>
                            
                            <td>{{ $loaiPhuongTien->ID_LPT }}</td>
                            <td>{{ $loaiPhuongTien->TEN_LPT }}</td>

                            <td>
                            @if(isset($loaiPhuongTien) && isset($loaiPhuongTien->ID_LPT))
                                <form method="POST" action="{!! route('loai_phuong_tiens.loai_phuong_tien.destroy', $loaiPhuongTien->ID_LPT) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('loai_phuong_tiens.loai_phuong_tien.show', $loaiPhuongTien->ID_LPT ) }}" class="btn btn-info" title="Show Loai Phuong Tien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('loai_phuong_tiens.loai_phuong_tien.edit', $loaiPhuongTien->ID_LPT ) }}" class="btn btn-primary" title="Edit Loai Phuong Tien">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Loai Phuong Tien" onclick="return confirm(&quot;Click Ok to delete Loai Phuong Tien.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                @else
                                    <h1>Khong co</h1>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $loaiPhuongTiens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection

<?php include(app_path().'/includes/footer.php');?>