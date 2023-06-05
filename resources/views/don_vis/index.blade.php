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
                <h4 class="mt-5 mb-5">Don Vis</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('don_vis.don_vi.create') }}" class="btn btn-success" title="Create New Don Vi">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($donVis) == 0)
            <div class="panel-body text-center">
                <h4>No Don Vis Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Dv</th>
                            <th>Ten Dv</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($donVis as $donVi)
                        <tr>
                            <td>{{ $donVi->ID_DV }}</td>
                            <td>{{ $donVi->TEN_DV }}</td>

                            <td>

                                <form method="POST" action="{!! route('don_vis.don_vi.destroy', $donVi->ID_DV) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('don_vis.don_vi.show', $donVi->ID_DV ) }}" class="btn btn-info" title="Show Don Vi">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('don_vis.don_vi.edit', $donVi->ID_DV ) }}" class="btn btn-primary" title="Edit Don Vi">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Don Vi" onclick="return confirm(&quot;Click Ok to delete Don Vi.&quot;)">
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
            {!! $donVis->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection