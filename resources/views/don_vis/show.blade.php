@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Don Vi' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('don_vis.don_vi.destroy', $donVi->id_dv) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('don_vis.don_vi.index') }}" class="btn btn-primary" title="Show All Don Vi">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('don_vis.don_vi.create') }}" class="btn btn-success" title="Create New Don Vi">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('don_vis.don_vi.edit', $donVi->id_dv ) }}" class="btn btn-primary" title="Edit Don Vi">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Don Vi" onclick="return confirm(&quot;Click Ok to delete Don Vi.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Dv</dt>
            <dd>{{ $donVi->id_dv }}</dd>
            <dt>Ten Dv</dt>
            <dd>{{ $donVi->ten_dv }}</dd>

        </dl>

    </div>
</div>

@endsection