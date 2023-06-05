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
                <h4 class="mt-5 mb-5">Xas</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('xas.xa.create') }}" class="btn btn-success" title="Create New Xa">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($xas) == 0)
            <div class="panel-body text-center">
                <h4>No Xas Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Xa</th>
                            <th>Id Huyen</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($xas as $xa)
                        <tr>
                            <td>{{ $xa->ID_XA }}</td>
                            <td>{{ $xa->ID_HUYEN }}</td>

                            <td>

                                <form method="POST" action="{!! route('xas.xa.destroy', $xa->ID_XA) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('xas.xa.show', $xa->ID_XA ) }}" class="btn btn-info" title="Show Xa">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('xas.xa.edit', $xa->ID_XA ) }}" class="btn btn-primary" title="Edit Xa">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Xa" onclick="return confirm(&quot;Click Ok to delete Xa.&quot;)">
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
            {!! $xas->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection