@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Hang Hoa' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('hang_hoas.hang_hoa.destroy', $hangHoa->id_hh) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('hang_hoas.hang_hoa.index') }}" class="btn btn-primary" title="Show All Hang Hoa">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('hang_hoas.hang_hoa.create') }}" class="btn btn-success" title="Create New Hang Hoa">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('hang_hoas.hang_hoa.edit', $hangHoa->id_hh ) }}" class="btn btn-primary" title="Edit Hang Hoa">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Hang Hoa" onclick="return confirm(&quot;Click Ok to delete Hang Hoa.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Hh</dt>
            <dd>{{ $hangHoa->id_hh }}</dd>
            <dt>Id Lhh</dt>
            <dd>{{ $hangHoa->id_lhh }}</dd>
            <dt>Id Dv</dt>
            <dd>{{ $hangHoa->id_dv }}</dd>
            <dt>Ten Hh</dt>
            <dd>{{ $hangHoa->ten_hh }}</dd>
            <dt>Gia Mua Hh</dt>
            <dd>{{ $hangHoa->gia_mua_hh }}</dd>
            <dt>Gia Ban Hh</dt>
            <dd>{{ $hangHoa->gia_ban_hh }}</dd>
            <dt>Soluong Hh</dt>
            <dd>{{ $hangHoa->soluong_hh }}</dd>

        </dl>

    </div>
</div>

@endsection