<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class FirstController extends Controller
{
        public function index()
        {
            return view('index');
        }
        public function list()
        {
            $wpisy = PostModel::all();
            return view('posts.listofpost', ['wpisy' => $wpisy]);
        }
        public function create()
        {
            return view('posts.createnewpost');
        }
        public function save(request $request)
        {
            $wpis = new PostModel();

            $wpis->title = $request->title;
            $wpis->post = $request->post;
            $wpis->addressee = $request->addressee;

            
            $wpis-> save();
            return redirect()->route('lista.wpisy')->with('message', 'Wpis został dodany!');
            
        }
        public function edit($id)
       {
        $wpis = PostModel::find($id);
        return view('posts.edit', ['wpis'=> $wpis]);
        }
        public function update($id, request $request)
        {
            $wpis = PostModel::Find($id);
            $wpis->title = $request->title;
            $wpis->post = $request->post;
            $wpis->addressee = $request->addressee;

            
            $wpis-> save();
            return redirect()->route('lista.wpisy')->with('message', 'Wpis został zmieniony!');

        }
        public function delete($id)
       {
       PostModel::destroy($id);
       return redirect()->route('lista.wpisy')->with('message', 'Wpis został usunięty!');

        }
    
}
