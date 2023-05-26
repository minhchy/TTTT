@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Chuc Vu' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('chuc_vus.chuc_vu.destroy', $chucVu->id_chucvu) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('chuc_vus.chuc_vu.index') }}" class="btn btn-primary" title="Show All Chuc Vu">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('chuc_vus.chuc_vu.create') }}" class="btn btn-success" title="Create New Chuc Vu">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('chuc_vus.chuc_vu.edit', $chucVu->id_chucvu ) }}" class="btn btn-primary" title="Edit Chuc Vu">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Chuc Vu" onclick="return confirm(&quot;Click Ok to delete Chuc Vu.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Chucvu</dt>
            <dd>{{ $chucVu->id_chucvu }}</dd>
            <dt>Ten Chucvu</dt>
            <dd>{{ $chucVu->ten_chucvu }}</dd>

        </dl>

    </div>
</div>

@endsection