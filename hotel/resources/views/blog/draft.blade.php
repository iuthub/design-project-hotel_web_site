@extends('layouts.master')
@section('title', 'Draft')
@section('content')
 <div class="container">
      <table class="table table-striped">
         <thead>
         <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
         </tr>
         </thead>
         <tbody>
            @foreach($posts as $post)
            <tr>
               <td>{{ $post->id }}</td>
               <td>{{ $post->title }}</td>
               <td>{{ $post->content }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
      {{ $posts->links() }}
   </div>
@endsection