@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Nhap Hang' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('nhap_hangs.nhap_hang.destroy', $nhapHang->id_nh) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('nhap_hangs.nhap_hang.index') }}" class="btn btn-primary" title="Show All Nhap Hang">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('nhap_hangs.nhap_hang.create') }}" class="btn btn-success" title="Create New Nhap Hang">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('nhap_hangs.nhap_hang.edit', $nhapHang->id_nh ) }}" class="btn btn-primary" title="Edit Nhap Hang">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Nhap Hang" onclick="return confirm(&quot;Click Ok to delete Nhap Hang.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Nh</dt>
            <dd>{{ $nhapHang->id_nh }}</dd>
            <dt>Id Tt</dt>
            <dd>{{ $nhapHang->id_tt }}</dd>
            <dt>Id Ncc</dt>
            <dd>{{ $nhapHang->id_ncc }}</dd>
            <dt>Id Nv</dt>
            <dd>{{ $nhapHang->id_nv }}</dd>
            <dt>Time Nh</dt>
            <dd>{{ $nhapHang->time_nh }}</dd>
            <dt>Tongtien Nh</dt>
            <dd>{{ $nhapHang->tongtien_nh }}</dd>

        </dl>

    </div>
</div>

@endsection