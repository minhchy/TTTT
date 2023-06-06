@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Khach Hang' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('khach_hangs.khach_hang.destroy', $khachHang->id_kh) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('khach_hangs.khach_hang.index') }}" class="btn btn-primary" title="Show All Khach Hang">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('khach_hangs.khach_hang.create') }}" class="btn btn-success" title="Create New Khach Hang">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('khach_hangs.khach_hang.edit', $khachHang->id_kh ) }}" class="btn btn-primary" title="Edit Khach Hang">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Khach Hang" onclick="return confirm(&quot;Click Ok to delete Khach Hang.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Kh</dt>
            <dd>{{ $khachHang->id_kh }}</dd>
            <dt>Ten Kh</dt>
            <dd>{{ $khachHang->ten_kh }}</dd>
            <dt>Phone Kh</dt>
            <dd>{{ $khachHang->phone_kh }}</dd>
            <dt>Email Kh</dt>
            <dd>{{ $khachHang->email_kh }}</dd>
            <dt>Address Kh</dt>
            <dd>{{ $khachHang->address_kh }}</dd>

        </dl>

    </div>
</div>

@endsection