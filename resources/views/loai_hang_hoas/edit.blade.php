@extends('layout')

@section('content')

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Loai Hang Hoa' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('loai_hang_hoas.loai_hang_hoa.index') }}" class="btn btn-primary" title="Show All Loai Hang Hoa">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('loai_hang_hoas.loai_hang_hoa.create') }}" class="btn btn-success" title="Create New Loai Hang Hoa">
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

            <form method="POST" action="{{ route('loai_hang_hoas.loai_hang_hoa.update', $loaiHangHoa->id_lhh) }}" id="edit_loai_hang_hoa_form" name="edit_loai_hang_hoa_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('loai_hang_hoas.form', [
                                        'loaiHangHoa' => $loaiHangHoa,
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