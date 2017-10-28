

@extends('layouts.app')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">

            <table>
              <tr>
                <th><font size="7"> TRAVEL A</font></th>
                <th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <td class="tg-yw4l">Maecenas ipsum velit, consectetuer eu, lobortis ut, dictum at, dui. In rutrum. Sed ac Maecenas ipsum velit, consectetuer eu, lo</td>
              </tr>
            </table>
        </div>
        <div class="panel-body">
             <div class="col-md-5 col-md-offset-1">
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <div>
                            <h1>Create your next Travel</h1>
                            @if ($errors->any())
                                <ul class="alert alert-warning">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            
                            {!! Form::open(['url'=>'/sucess']) !!}
                            <!-- Nome Form Input -->
                            <div class="form-group">
                                {!! Form::label('Name', 'Name:') !!}
                                {!! Form::text('Name', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Phone', 'Phone/patten: (**) 9****-****') !!}
                                {!! Form::text('Phone', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('DateFrom', 'DateFrom:') !!}
                                {!! Form::date('DateFrom', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('DateTo', 'DateTo:') !!}
                                {!! Form::date('DateTo', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Origin', 'Origin:') !!}
                                {!! Form::text('Origin', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Destination', 'Destination:') !!}
                                {!! Form::text('Destination', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('NumberPeople', 'NumberPeople:') !!}
                                {!! Form::number('NumberPeople', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        About Travel A
                    </div>
                    <div class="panel-body">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Travel A - All Rights Reserved.<span class="pull-right">contact@travela.com | +55 (35) 3621 4551</span>
        </div>
    </div>
</div>
@endsection