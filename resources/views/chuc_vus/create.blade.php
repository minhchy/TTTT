<?php include(app_path().'/includes/header.php');?>
<?php include(app_path().'/includes/sidebar.php');?>

@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create New Loai Phuong Tien</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('loai_phuong_tiens.loai_phuong_tien.store') }}">
                            {{ csrf_field() }}
                            @include('loai_phuong_tiens.form', [
                                'loaiPhuongTien' => null,
                            ])

                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">Add</button>
                                <a href="{{ route('loai_phuong_tiens.loai_phuong_tien.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<?php include(app_path().'/includes/footer.php');?>

