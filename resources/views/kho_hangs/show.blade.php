@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Kho Hang' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('kho_hangs.kho_hang.destroy', $khoHang->id_khohang) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('kho_hangs.kho_hang.index') }}" class="btn btn-primary" title="Show All Kho Hang">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('kho_hangs.kho_hang.create') }}" class="btn btn-success" title="Create New Kho Hang">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('kho_hangs.kho_hang.edit', $khoHang->id_khohang ) }}" class="btn btn-primary" title="Edit Kho Hang">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Kho Hang" onclick="return confirm(&quot;Click Ok to delete Kho Hang.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Khohang</dt>
            <dd>{{ $khoHang->id_khohang }}</dd>
            <dt>Ten Khohang</dt>
            <dd>{{ $khoHang->ten_khohang }}</dd>

        </dl>

    </div>
</div>

@endsection