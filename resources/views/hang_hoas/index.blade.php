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
                <h4 class="mt-5 mb-5">Hang Hoas</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('hang_hoas.hang_hoa.create') }}" class="btn btn-success" title="Create New Hang Hoa">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($hangHoas) == 0)
            <div class="panel-body text-center">
                <h4>No Hang Hoas Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Hh</th>
                            <th>Id Lhh</th>
                            <th>Id Dv</th>
                            <th>Ten Hh</th>
                            <th>Gia Mua Hh</th>
                            <th>Gia Ban Hh</th>
                            <th>Soluong Hh</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($hangHoas as $hangHoa)
                        <tr>
                            <td>{{ $hangHoa->id_hh }}</td>
                            <td>{{ $hangHoa->id_lhh }}</td>
                            <td>{{ $hangHoa->id_dv }}</td>
                            <td>{{ $hangHoa->ten_hh }}</td>
                            <td>{{ $hangHoa->gia_mua_hh }}</td>
                            <td>{{ $hangHoa->gia_ban_hh }}</td>
                            <td>{{ $hangHoa->soluong_hh }}</td>

                            <td>

                                <form method="POST" action="{!! route('hang_hoas.hang_hoa.destroy', $hangHoa->id_hh) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('hang_hoas.hang_hoa.show', $hangHoa->id_hh ) }}" class="btn btn-info" title="Show Hang Hoa">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('hang_hoas.hang_hoa.edit', $hangHoa->id_hh ) }}" class="btn btn-primary" title="Edit Hang Hoa">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Hang Hoa" onclick="return confirm(&quot;Click Ok to delete Hang Hoa.&quot;)">
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
            {!! $hangHoas->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection