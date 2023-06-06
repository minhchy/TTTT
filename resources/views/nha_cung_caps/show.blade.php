@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Nha Cung Cap' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('nha_cung_caps.nha_cung_cap.destroy', $nhaCungCap->id_ncc) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('nha_cung_caps.nha_cung_cap.index') }}" class="btn btn-primary" title="Show All Nha Cung Cap">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('nha_cung_caps.nha_cung_cap.create') }}" class="btn btn-success" title="Create New Nha Cung Cap">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('nha_cung_caps.nha_cung_cap.edit', $nhaCungCap->id_ncc ) }}" class="btn btn-primary" title="Edit Nha Cung Cap">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Nha Cung Cap" onclick="return confirm(&quot;Click Ok to delete Nha Cung Cap.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Ncc</dt>
            <dd>{{ $nhaCungCap->id_ncc }}</dd>
            <dt>Ten Ncc</dt>
            <dd>{{ $nhaCungCap->ten_ncc }}</dd>
            <dt>Phone Ncc</dt>
            <dd>{{ $nhaCungCap->phone_ncc }}</dd>
            <dt>Email Ncc</dt>
            <dd>{{ $nhaCungCap->email_ncc }}</dd>
            <dt>Address Ncc</dt>
            <dd>{{ $nhaCungCap->address_ncc }}</dd>

        </dl>

    </div>
</div>

@endsection