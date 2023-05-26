@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Chi Tiet Don Nhap' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('chi_tiet_don_nhaps.chi_tiet_don_nhap.destroy', $chiTietDonNhap->id_hh) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('chi_tiet_don_nhaps.chi_tiet_don_nhap.index') }}" class="btn btn-primary" title="Show All Chi Tiet Don Nhap">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('chi_tiet_don_nhaps.chi_tiet_don_nhap.create') }}" class="btn btn-success" title="Create New Chi Tiet Don Nhap">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('chi_tiet_don_nhaps.chi_tiet_don_nhap.edit', $chiTietDonNhap->id_hh ) }}" class="btn btn-primary" title="Edit Chi Tiet Don Nhap">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Chi Tiet Don Nhap" onclick="return confirm(&quot;Click Ok to delete Chi Tiet Don Nhap.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Hh</dt>
            <dd>{{ $chiTietDonNhap->id_hh }}</dd>
            <dt>Id Nh</dt>
            <dd>{{ $chiTietDonNhap->id_nh }}</dd>
            <dt>Soluong Ctdn</dt>
            <dd>{{ $chiTietDonNhap->soluong_ctdn }}</dd>
            <dt>Dongia Ctdn</dt>
            <dd>{{ $chiTietDonNhap->dongia_ctdn }}</dd>

        </dl>

    </div>
</div>

@endsection