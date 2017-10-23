@extends('layouts.app')
@section('title')
   Create Challenge
@endsection
@section('content')
<div class="container">
    <div class="row">
     <div class="col-md-4">
     </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                    <div class="panel-heading">
                      <strong>Start A Challenge....</strong>
                    </div>
              

            </div>
        </div>
    </div>
    @if (count($errors))
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
    @endif
     <form class="form-horizontal" role="form" method="POST" action="/challenges">
        <div class="col-md-8 col-md-offset-2">
                        {{ csrf_field() }}
            <div class="form-group">

                <label for="difficulty_id">Choose a difficulty:</label>
                <select name="difficulty_id" id="difficulty_id" class="form-control">
                    <option value="">Choose....</option>
                    @foreach($difficulties as $difficulty)
                        <option value="{{ $difficulty->id }}" {{ old('channel_id') == $difficulty->id ? 'selected' : ''}}>{{ $difficulty->name }}</option>
                    @endforeach
                </select>

                <label for="challengechannel_id">Choose a Channel:</label>
                <select name="challengechannel_id" id="challengechannel_id" class="form-control">
                    <option value="">Choose....</option>
                    @foreach($challengechannels as $challengechannel)
                        <option value="{{ $challengechannel->id }}" {{ old('channel_id') == $challengechannel->id ? 'selected' : ''}}>{{ $challengechannel->name }}</option>
                    @endforeach
                </select>


                <label for="tittle">Title:</label>
                <input type="text" class="form-control" id='title' name="title" value="{{ old('title') }}" >


                <label for="body">Body:</label>
                <textarea name="body" id="body" class="form-control" rows="10" required>{{ old('body') }}</textarea>

                <label for="sample_input">Sample Input:</label>
                <textarea name="sample_input" id="sample_input" class="form-control" rows="10" required>{{ old('sample_input') }}</textarea>

                <label for="sample_output">Sample Output:</label>
                <textarea name="sample_output" id="sample_output" class="form-control" rows="10" required>{{ old('sample_output') }}</textarea>

            </div>
        </div>          

        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                    Publish
                </button>
            </div>
        </div>
    </form>

</div>
@endsection
