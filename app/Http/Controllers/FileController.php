<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function index()
    {
    	$poster=File::all();
        return view('poster')->with('poster', $poster);
    }

    public function upload()
    {
        return view('uploadfile');
    }

    public function insert(Request $request)
    {
        //$this->validate($request, [
          //  'title'         =>      'required',
            //'filename'      =>      'required|filename|poster:jpeg,png,jpg,gif|max:2048'
        //]);

    	$poster = new File;

        $poster->title = $request->title;
        if ($request->hasFile('filename')) {
            $filename = $request->file('filename');
            $filename->move(public_path(). '/', $filename->getClientOriginalName());

            $poster->filename = $filename->getClientOriginalName();
            $poster->save();
    	}

        return redirect('show');
    }

    public function showall()
    {
        $poster=File::all();
        
        return view('show', compact('poster'));
    }

    public function show($id)
    {
        $poster=File::findorfail($id);
        return view('showall', compact('poster'));
    }

    public function edit($id)
    {
        $poster=File::find($id);
        return view('updateposter')->with('poster', $poster);
    }

    public function update(Request $request, $id)
    {
        $poster=File::find($id);

        $poster->title = $request->input('title');

        if ($request->hasFile('filename')) {
            $filename = $request->file('filename');
            $filename->move(public_path(). '/', $filename->getClientOriginalName());
            $poster->filename = $filename->getClientOriginalName();
        }

        $poster->save();

        return redirect('/poster')->with('success', 'Data is successfully updated');
    }

    public function delete($id) 
    {
        $poster=File::find($id);
        $poster->delete();

        return redirect('/poster')->with('success', 'Data is successfully deleted');
    }
}
