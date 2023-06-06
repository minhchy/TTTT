@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Pt Hh' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('pt_hhs.pt_hh.destroy', $ptHh->id_pt) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('pt_hhs.pt_hh.index') }}" class="btn btn-primary" title="Show All Pt Hh">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('pt_hhs.pt_hh.create') }}" class="btn btn-success" title="Create New Pt Hh">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('pt_hhs.pt_hh.edit', $ptHh->id_pt ) }}" class="btn btn-primary" title="Edit Pt Hh">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Pt Hh" onclick="return confirm(&quot;Click Ok to delete Pt Hh.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Pt</dt>
            <dd>{{ $ptHh->id_pt }}</dd>
            <dt>Id Hh</dt>
            <dd>{{ $ptHh->id_hh }}</dd>

        </dl>

    </div>
</div>

@endsection