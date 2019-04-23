<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Image;
use Auth;
class PostController extends Controller
{
public function postAdminCreate(Request $request){
$this->validate($request, [
    'title'=>'required|min:5',
    'content'=>'required|min:10',
    'filename' => 'required'
]);
$post=new Post([
    'title'=>$request->input('title'),
    'content'=>$request->input('content')
]);

if($request->hasFile('filename'))
{
    $a=0;
    foreach ($request->file('filename') as $file) {
    $image_name=$a.'.'.$file->getClientOriginalExtension();
    $file->storeAs('public/postImages', $image_name);
    $image=new Image(['urlpath'=>$image_name]);
    $post->find(1);
    $post->images()->save($image);
    $a++;
    }

    return redirect()->route('blog.index')->with('info', 'Post created, Title is: '.$request->input('title'));
}
Auth::user()->posts()->save($post);
}
public function getAdminCreate(Request $request){
return view('blog.create');
}
}