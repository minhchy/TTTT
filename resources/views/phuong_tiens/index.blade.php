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
                <h4 class="mt-5 mb-5">Phuong Tiens</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('phuong_tiens.phuong_tien.create') }}" class="btn btn-success" title="Create New Phuong Tien">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($phuongTiens) == 0)
            <div class="panel-body text-center">
                <h4>No Phuong Tiens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Pt</th>
                            <th>Id Ttpt</th>
                            <th>Id Lpt</th>
                            <th>Ten Pt</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($phuongTiens as $phuongTien)
                        <tr>
                            <td>{{ $phuongTien->ID_PT }}</td>
                            <td>{{ $phuongTien->ID_TTPT }}</td>
                            <td>{{ $phuongTien->ID_LPT }}</td>
                            <td>{{ $phuongTien->TEN_PT }}</td>

                            <td>

                                <form method="POST" action="{!! route('phuong_tiens.phuong_tien.destroy', $phuongTien->ID_PT) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('phuong_tiens.phuong_tien.show', $phuongTien->ID_PT ) }}" class="btn btn-info" title="Show Phuong Tien">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('phuong_tiens.phuong_tien.edit', $phuongTien->ID_PT ) }}" class="btn btn-primary" title="Edit Phuong Tien">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Phuong Tien" onclick="return confirm(&quot;Click Ok to delete Phuong Tien.&quot;)">
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
            {!! $phuongTiens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection