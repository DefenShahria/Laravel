<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Faker\Provider\ar_EG\Text;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function product()
    {
        return view('product',['posts'=>Post::paginate(5)]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|mimes:jpeg,jpg,png,bmp',
        ]);

        $fileName = null;
        if (isset($request->image)) {
            $extension = $request->image->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $request->image->move(public_path('images'), $fileName);
        }
        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->price = $request->price;
        $post->image = $fileName;
        
        $post->save();
       

        // return $request;
         return redirect()->route('home')->with('success', 'Item successfully added!');
    }


    public function editData($id)
    {
        // dd($id);
        $post = Post::findOrFail($id);
        return view('edit',['ourPost' =>$post]);
    }

    public function deleteData($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('product')->with('success', 'Item successfully deleted!');
    }


    public function updateData($id, Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|mimes:jpeg,jpg,png,bmp',
    ]);

    $post = Post::findOrFail($id);
    $post->name = $request->name;
    $post->description = $request->description;
    $post->price = $request->price;

    if ($request->hasFile('image')) {
        $extension = $request->image->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $request->image->move(public_path('images'), $fileName);
        $post->image = $fileName;
    }

     $post->save();

     return redirect()->route('product')->with('success', 'Item successfully updated!');
}

}
