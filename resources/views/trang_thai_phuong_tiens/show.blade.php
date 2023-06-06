@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Trang Thai Phuong Tien' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('trang_thai_phuong_tiens.trang_thai_phuong_tien.destroy', $trangThaiPhuongTien->id_ttpt) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('trang_thai_phuong_tiens.trang_thai_phuong_tien.index') }}" class="btn btn-primary" title="Show All Trang Thai Phuong Tien">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('trang_thai_phuong_tiens.trang_thai_phuong_tien.create') }}" class="btn btn-success" title="Create New Trang Thai Phuong Tien">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('trang_thai_phuong_tiens.trang_thai_phuong_tien.edit', $trangThaiPhuongTien->id_ttpt ) }}" class="btn btn-primary" title="Edit Trang Thai Phuong Tien">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Trang Thai Phuong Tien" onclick="return confirm(&quot;Click Ok to delete Trang Thai Phuong Tien.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Ttpt</dt>
            <dd>{{ $trangThaiPhuongTien->id_ttpt }}</dd>
            <dt>Ten Ttpt</dt>
            <dd>{{ $trangThaiPhuongTien->ten_ttpt }}</dd>

        </dl>

    </div>
</div>

@endsection