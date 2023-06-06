<?php include(app_path().'/includes/header.php');?>
<?php include(app_path().'/includes/sidebar.php');?>
@extends('layout')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">THÊM MỚI PHIẾU NHẬP HÀNG</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('nhap_hangs.nhap_hang.index') }}" class="btn btn-primary" title="Show All Nhap Hang">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
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

            <form method="POST" action="{{ route('nhap_hangs.nhap_hang.store') }}" accept-charset="UTF-8" id="create_nhap_hang_form" name="create_nhap_hang_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('nhap_hangs.form', [
                                        'nhapHang' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
<?php include(app_path().'/includes/footer.php');?>


