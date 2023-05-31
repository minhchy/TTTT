@extends('layout')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Nhan Vien' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('nhan_viens.nhan_vien.destroy', $nhanVien->id_nv) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('nhan_viens.nhan_vien.index') }}" class="btn btn-primary" title="Show All Nhan Vien">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('nhan_viens.nhan_vien.create') }}" class="btn btn-success" title="Create New Nhan Vien">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('nhan_viens.nhan_vien.edit', $nhanVien->id_nv ) }}" class="btn btn-primary" title="Edit Nhan Vien">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Nhan Vien" onclick="return confirm(&quot;Click Ok to delete Nhan Vien.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Id Nv</dt>
            <dd>{{ $nhanVien->id_nv }}</dd>
            <dt>Id Chucvu</dt>
            <dd>{{ $nhanVien->id_chucvu }}</dd>
            <dt>Phone Nv</dt>
            <dd>{{ $nhanVien->phone_nv }}</dd>
            <dt>Email Nv</dt>
            <dd>{{ $nhanVien->email_nv }}</dd>
            <dt>Address Nv</dt>
            <dd>{{ $nhanVien->address_nv }}</dd>
            <dt>Username Nv</dt>
            <dd>{{ $nhanVien->username_nv }}</dd>
            <dt>Password Nv</dt>
            <dd>{{ $nhanVien->password_nv }}</dd>

        </dl>

    </div>
</div>

@endsection