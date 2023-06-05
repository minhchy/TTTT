@extends('layout')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Loai Hang Hoas</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('loai_hang_hoas.loai_hang_hoa.create') }}" class="btn btn-success" title="Create New Loai Hang Hoa">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($loaiHangHoas) == 0)
            <div class="panel-body text-center">
                <h4>No Loai Hang Hoas Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Lhh</th>
                            <th>Ten Lhh</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($loaiHangHoas as $loaiHangHoa)
                        <tr>
                            <td>{{ $loaiHangHoa->ID_LHH }}</td>
                            <td>{{ $loaiHangHoa->TEN_LHH }}</td>

                            <td>

                                <form method="POST" action="{!! route('loai_hang_hoas.loai_hang_hoa.destroy', $loaiHangHoa->ID_LHH) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('loai_hang_hoas.loai_hang_hoa.show', $loaiHangHoa->ID_LHH ) }}" class="btn btn-info" title="Show Loai Hang Hoa">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('loai_hang_hoas.loai_hang_hoa.edit', $loaiHangHoa->ID_LHH ) }}" class="btn btn-primary" title="Edit Loai Hang Hoa">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Loai Hang Hoa" onclick="return confirm(&quot;Click Ok to delete Loai Hang Hoa.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $loaiHangHoas->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection