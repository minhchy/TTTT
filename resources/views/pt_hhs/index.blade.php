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
                <h4 class="mt-5 mb-5">Pt Hhs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('pt_hhs.pt_hh.create') }}" class="btn btn-success" title="Create New Pt Hh">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($ptHhs) == 0)
            <div class="panel-body text-center">
                <h4>No Pt Hhs Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Pt</th>
                            <th>Id Hh</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ptHhs as $ptHh)
                        <tr>
                            <td>{{ $ptHh->id_pt }}</td>
                            <td>{{ $ptHh->id_hh }}</td>

                            <td>

                                <form method="POST" action="{!! route('pt_hhs.pt_hh.destroy', $ptHh->id_pt) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('pt_hhs.pt_hh.show', $ptHh->id_pt ) }}" class="btn btn-info" title="Show Pt Hh">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('pt_hhs.pt_hh.edit', $ptHh->id_pt ) }}" class="btn btn-primary" title="Edit Pt Hh">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Pt Hh" onclick="return confirm(&quot;Click Ok to delete Pt Hh.&quot;)">
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
            {!! $ptHhs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection