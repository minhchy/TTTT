@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Phuong Tien' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('phuong_tiens.phuong_tien.destroy', $phuongTien->id_pt) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('phuong_tiens.phuong_tien.index') }}" class="btn btn-primary" title="Show All Phuong Tien">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('phuong_tiens.phuong_tien.create') }}" class="btn btn-success" title="Create New Phuong Tien">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('phuong_tiens.phuong_tien.edit', $phuongTien->id_pt ) }}" class="btn btn-primary" title="Edit Phuong Tien">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Phuong Tien" onclick="return confirm(&quot;Click Ok to delete Phuong Tien.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Pt</dt>
            <dd>{{ $phuongTien->id_pt }}</dd>
            <dt>Id Ttpt</dt>
            <dd>{{ $phuongTien->id_ttpt }}</dd>
            <dt>Id Lpt</dt>
            <dd>{{ $phuongTien->id_lpt }}</dd>
            <dt>Ten Pt</dt>
            <dd>{{ $phuongTien->ten_pt }}</dd>

        </dl>

    </div>
</div>

@endsection