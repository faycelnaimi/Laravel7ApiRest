@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Add Students </h2>

        <div class="row">
            
        {{ Form::open(array('url' => '/')) }}


        {{ Form::close() }}
        </div>
   
</div>
@endsection