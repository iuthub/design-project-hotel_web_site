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
Auth::user()->posts()->save($post);
$id=$post->find($post->id);
$fileNames=array();
$i=0;
foreach ($request->file('filename') as $file) {
    $image_name=$id->id.'_post_'.$i.'.'.$file->getClientOriginalExtension();
    $file->storeAs('public/postImages', $image_name);
    $i++;
    array_push($fileNames, new Image(array('imagepath'=>$image_name)));
}
$id->images()->saveMany($fileNames);
   return redirect()->route('blog.index');


}
public function getAdminCreate(Request $request){
return view('blog.create');
}
}