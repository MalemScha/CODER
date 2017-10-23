@extends('layouts.app')
@section('title')
    Edit Post
@endsection
@section('content')
<div class="container">
    <div class="row">
     <div class="col-md-4">
     </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                    <div class="panel-heading">
                      <strong>EDIT</strong>
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
     <form class="form-horizontal" role="form" method="POST" action={{ $post->path()}}>
     {{ method_field('PUT') }}
        <div class="col-md-8 col-md-offset-2">
                        {{ csrf_field() }}

            <div class="form-group">

                <label for="channel_id">Choose a Channel:</label>
                <select name="channel_id" id="channel_id" class="form-control" required>
                    <option value="">Choose....</option>
                    @foreach($channels as $channel)
                        <option value={{ $channel->id }}>{{ $channel->name }}</option>
                    @endforeach
                </select>


                <label for="tittle">Title:</label>
                <input type="text" class="form-control" id='title' name="title" value={{ $post->title }}>
 

                <label for="body">Body:</label>
                <textarea name="body" id="body" class="form-control" rows="10" required>{{ $post->body }}</textarea>

            </div>
        </div>          

        <div class="form-group">
            <div class="col-md-4 col-md-offset-9">
                <button type="submit" class="btn btn-primary">
                    Save Changes
                </button>
            </div>
        </div>
    </form>

</div>
@endsection