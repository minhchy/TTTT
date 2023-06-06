@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Huyen' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('huyens.huyen.destroy', $huyen->id_huyen) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('huyens.huyen.index') }}" class="btn btn-primary" title="Show All Huyen">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('huyens.huyen.create') }}" class="btn btn-success" title="Create New Huyen">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('huyens.huyen.edit', $huyen->id_huyen ) }}" class="btn btn-primary" title="Edit Huyen">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Huyen" onclick="return confirm(&quot;Click Ok to delete Huyen.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Huyen</dt>
            <dd>{{ $huyen->id_huyen }}</dd>
            <dt>Id Tinh</dt>
            <dd>{{ $huyen->id_tinh }}</dd>
            <dt>Ten Huyen</dt>
            <dd>{{ $huyen->ten_huyen }}</dd>

        </dl>

    </div>
</div>

@endsection