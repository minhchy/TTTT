@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Xuat Hang' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('xuat_hangs.xuat_hang.destroy', $xuatHang->id_xh) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('xuat_hangs.xuat_hang.index') }}" class="btn btn-primary" title="Show All Xuat Hang">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('xuat_hangs.xuat_hang.create') }}" class="btn btn-success" title="Create New Xuat Hang">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('xuat_hangs.xuat_hang.edit', $xuatHang->id_xh ) }}" class="btn btn-primary" title="Edit Xuat Hang">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Xuat Hang" onclick="return confirm(&quot;Click Ok to delete Xuat Hang.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Xh</dt>
            <dd>{{ $xuatHang->id_xh }}</dd>
            <dt>Id Kh</dt>
            <dd>{{ $xuatHang->id_kh }}</dd>
            <dt>Id Ncc</dt>
            <dd>{{ $xuatHang->id_ncc }}</dd>
            <dt>Id Nv</dt>
            <dd>{{ $xuatHang->id_nv }}</dd>
            <dt>Time Xh</dt>
            <dd>{{ $xuatHang->time_xh }}</dd>
            <dt>Tongtien Xh</dt>
            <dd>{{ $xuatHang->tongtien_xh }}</dd>

        </dl>

    </div>
</div>

@endsection