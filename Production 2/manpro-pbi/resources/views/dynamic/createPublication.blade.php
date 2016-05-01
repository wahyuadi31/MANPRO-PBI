@extends('admin.master')
@section('content')


<div class="wrap">
    {!! Form::open(['url' =>'/admin/publication']) !!}

        <div class=".form-group">
              {{ Form::label('Title', 'Title:') }}
              {{ Form::text('Title', null, ['class' => 'form-control']) }}
        </div>

        <div class=".form-group">
              {{ Form::label('Abstract', 'Abstract:') }}
              {{ Form::textarea('Abstract', null, ['class' => 'form-control']) }}
        </div>
        <div class=".form-group">
              {{ Form::submit('Add Publication',['class'=> 'btn btn-primary form-control']) }}
        </div>
      {!! Form::close() !!}
</div>
@endsection
