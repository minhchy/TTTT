@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Chi Tiet Don Xuat' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('chi_tiet_don_xuats.chi_tiet_don_xuat.destroy', $chiTietDonXuat->id_hh) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('chi_tiet_don_xuats.chi_tiet_don_xuat.index') }}" class="btn btn-primary" title="Show All Chi Tiet Don Xuat">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('chi_tiet_don_xuats.chi_tiet_don_xuat.create') }}" class="btn btn-success" title="Create New Chi Tiet Don Xuat">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('chi_tiet_don_xuats.chi_tiet_don_xuat.edit', $chiTietDonXuat->id_hh ) }}" class="btn btn-primary" title="Edit Chi Tiet Don Xuat">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Chi Tiet Don Xuat" onclick="return confirm(&quot;Click Ok to delete Chi Tiet Don Xuat.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Hh</dt>
            <dd>{{ $chiTietDonXuat->id_hh }}</dd>
            <dt>Id Xh</dt>
            <dd>{{ $chiTietDonXuat->id_xh }}</dd>
            <dt>Soluong Ctdx</dt>
            <dd>{{ $chiTietDonXuat->soluong_ctdx }}</dd>
            <dt>Dongia Ctdx</dt>
            <dd>{{ $chiTietDonXuat->dongia_ctdx }}</dd>

        </dl>

    </div>
</div>

@endsection