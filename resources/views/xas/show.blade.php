@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Xa' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('xas.xa.destroy', $xa->id_xa) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('xas.xa.index') }}" class="btn btn-primary" title="Show All Xa">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('xas.xa.create') }}" class="btn btn-success" title="Create New Xa">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('xas.xa.edit', $xa->id_xa ) }}" class="btn btn-primary" title="Edit Xa">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Xa" onclick="return confirm(&quot;Click Ok to delete Xa.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Xa</dt>
            <dd>{{ $xa->id_xa }}</dd>
            <dt>Id Huyen</dt>
            <dd>{{ $xa->id_huyen }}</dd>

        </dl>

    </div>
</div>

@endsection