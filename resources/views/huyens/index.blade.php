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
                <h4 class="mt-5 mb-5">Huyens</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('huyens.huyen.create') }}" class="btn btn-success" title="Create New Huyen">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($huyens) == 0)
            <div class="panel-body text-center">
                <h4>No Huyens Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Huyen</th>
                            <th>Id Tinh</th>
                            <th>Ten Huyen</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($huyens as $huyen)
                        <tr>
                            <td>{{ $huyen->ID_HUYEN }}</td>
                            <td>{{ $huyen->ID_TINH }}</td>
                            <td>{{ $huyen->TEN_HUYEN }}</td>

                            <td>

                                <form method="POST" action="{!! route('huyens.huyen.destroy', $huyen->ID_HUYEN) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('huyens.huyen.show', $huyen->ID_HUYEN ) }}" class="btn btn-info" title="Show Huyen">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('huyens.huyen.edit', $huyen->ID_HUYEN ) }}" class="btn btn-primary" title="Edit Huyen">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Huyen" onclick="return confirm(&quot;Click Ok to delete Huyen.&quot;)">
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
            {!! $huyens->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection