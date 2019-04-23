@extends('layouts.master')
@section('title', 'New Post')
@include('partials.errors')
@section('content')
<br>
<form class="border border-light p-5" action="{{route('admin.create')}}" enctype="multipart/form-data" method="post">

    <p class="h4 mb-4 text-center">New Post</p>

    <label for="title">Post title</label>
    <input type="text" id="title" class="form-control mb-4" placeholder="Title of the post" name="title">

    <label for="content">Content</label>
    <textarea id="content" class="form-control mb-4" placeholder="Content of Post" name="content"></textarea>

       <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
    {{ csrf_field() }}
    <button class="btn btn-info btn-block my-4" type="submit">Save Post</button>
</form>

@endsection