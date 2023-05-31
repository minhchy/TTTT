@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Tinh Tp' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('tinh_tps.tinh_tp.destroy', $tinhTp->id_tinh_tp) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('tinh_tps.tinh_tp.index') }}" class="btn btn-primary" title="Show All Tinh Tp">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('tinh_tps.tinh_tp.create') }}" class="btn btn-success" title="Create New Tinh Tp">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('tinh_tps.tinh_tp.edit', $tinhTp->id_tinh_tp ) }}" class="btn btn-primary" title="Edit Tinh Tp">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Tinh Tp" onclick="return confirm(&quot;Click Ok to delete Tinh Tp.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Tinh Tp</dt>
            <dd>{{ $tinhTp->id_tinh_tp }}</dd>
            <dt>Ten Tinh Tp</dt>
            <dd>{{ $tinhTp->ten_tinh_tp }}</dd>

        </dl>

    </div>
</div>

@endsection