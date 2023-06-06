@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Loai Hang Hoa' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('loai_hang_hoas.loai_hang_hoa.destroy', $loaiHangHoa->id_lhh) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('loai_hang_hoas.loai_hang_hoa.index') }}" class="btn btn-primary" title="Show All Loai Hang Hoa">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('loai_hang_hoas.loai_hang_hoa.create') }}" class="btn btn-success" title="Create New Loai Hang Hoa">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('loai_hang_hoas.loai_hang_hoa.edit', $loaiHangHoa->id_lhh ) }}" class="btn btn-primary" title="Edit Loai Hang Hoa">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Loai Hang Hoa" onclick="return confirm(&quot;Click Ok to delete Loai Hang Hoa.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Lhh</dt>
            <dd>{{ $loaiHangHoa->id_lhh }}</dd>
            <dt>Ten Lhh</dt>
            <dd>{{ $loaiHangHoa->ten_lhh }}</dd>

        </dl>

    </div>
</div>

@endsection