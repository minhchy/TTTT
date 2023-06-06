<?php include(app_path().'/includes/header.php');?>
<?php include(app_path().'/includes/sidebar.php');?>
@extends('layout')

@section('content')

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'CHỈNH SỬA THÔNG TIN NHÀ CUNG CẤP' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('nha_cung_caps.nha_cung_cap.index') }}" class="btn btn-primary" title="Show All Nha Cung Cap">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('nha_cung_caps.nha_cung_cap.create') }}" class="btn btn-success" title="Create New Nha Cung Cap">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>

            </div>
        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('nha_cung_caps.nha_cung_cap.update', $nhaCungCap->ID_NCC) }}" id="edit_nha_cung_cap_form" name="edit_nha_cung_cap_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('nha_cung_caps.form', [
                                        'nhaCungCap' => $nhaCungCap,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection

<?php include(app_path().'/includes/footer.php');?>