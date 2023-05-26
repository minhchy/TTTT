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
                <h4 class="mt-5 mb-5">Chuc Vus</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('chuc_vus.chuc_vu.create') }}" class="btn btn-success" title="Create New Chuc Vu">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($chucVus) == 0)
            <div class="panel-body text-center">
                <h4>No Chuc Vus Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Id Chucvu</th>
                            <th>Ten Chucvu</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($chucVus as $chucVu)
                        <tr>
                            <td>{{ $chucVu->id_chucvu }}</td>
                            <td>{{ $chucVu->ten_chucvu }}</td>

                            <td>

                                <form method="POST" action="{!! route('chuc_vus.chuc_vu.destroy', $chucVu->id_chucvu) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('chuc_vus.chuc_vu.show', $chucVu->id_chucvu ) }}" class="btn btn-info" title="Show Chuc Vu">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('chuc_vus.chuc_vu.edit', $chucVu->id_chucvu ) }}" class="btn btn-primary" title="Edit Chuc Vu">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Chuc Vu" onclick="return confirm(&quot;Click Ok to delete Chuc Vu.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                        <!-- Nút edit -->
                                        <button type="button" onclick="window.location='{{ route('chuc_vus.chuc_vu.edit', $chucVu->id_chucvu) }}'" class="btn btn-primary" title="Edit Chuc Vu">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
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
            {!! $chucVus->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection