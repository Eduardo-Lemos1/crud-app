<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function list(Request $request){
        $pagination = Post::orderBy("name");

        if (isset($request->busca) && $request->busca != "")
            $pagination->where("name","like","%$request->busca%");
        
        return view("admin.posts.index", ["list"=>$pagination->paginate(3)]);
    }

    public function create(){
        return view("admin.posts.form", ["data"=>new Post()]);
    }

    public function store(PostRequest $request){

        $validated = $request->validated([
            'name' => 'required|max:250',
            'address' => 'required|max:250',
            'phone' => 'regex:/\([0-9]{2}\) [0-9]{5}-[0-9]{4}/',
            'birth_date' => 'required|date',
            'age' => 'required|integer',
            'registration_date' => 'required|date',
        ]);
        $post = Post::create($request->all());
        return redirect(route("post.edit", $post))->with("success",__("Data saved!"));
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect(route("post.list"))->with("success",__("Data deleted!"));
    }

    #abre o formulario de edição
    public function edit(Post $post){
        return view("admin.posts.form",["data"=>$post]);
    }

    #salva as edições
    public function update(Post $post, PostRequest $request) {
        $validated = $request->validated();
        $post->update($request->all());
        return redirect()->back()->with("success",__("Data updated!"));
    }

    
}
