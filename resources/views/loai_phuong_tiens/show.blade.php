@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Loai Phuong Tien' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('loai_phuong_tiens.loai_phuong_tien.destroy', $loaiPhuongTien->id_lpt) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('loai_phuong_tiens.loai_phuong_tien.index') }}" class="btn btn-primary" title="Show All Loai Phuong Tien">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('loai_phuong_tiens.loai_phuong_tien.create') }}" class="btn btn-success" title="Create New Loai Phuong Tien">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('loai_phuong_tiens.loai_phuong_tien.edit', $loaiPhuongTien->id_lpt ) }}" class="btn btn-primary" title="Edit Loai Phuong Tien">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Loai Phuong Tien" onclick="return confirm(&quot;Click Ok to delete Loai Phuong Tien.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Lpt</dt>
            <dd>{{ $loaiPhuongTien->id_lpt }}</dd>
            <dt>Ten Lpt</dt>
            <dd>{{ $loaiPhuongTien->ten_lpt }}</dd>

        </dl>

    </div>
</div>

@endsection