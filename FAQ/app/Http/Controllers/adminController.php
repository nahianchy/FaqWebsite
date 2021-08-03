<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //

    function index()
    {

        $data = DB::table('admin_table')->get();


        return view('layout.index',['dataKey' => $data]);
    }


    function store(Request $request)
    {

        //  $request->validate([
        //     'question' => ['required|string'],
        //     'answers' => ['required|string'],
        // ]);

        DB::table('admin_table')->insert([
            'question' => $request->question,
            'answers' => $request->answers
        ]);
    }


    function show($id)
    {
        
        $student = DB::table('admin_table')->find($id);

        return view('layout.show', ['student' => $student]);
    }


    function edit($id)
    {

        $student = DB::table('admin_table')->find($id);

        return view('layout.edit', ['student' => $student]);
    }


    function update(Request $request, $id)
    {
        DB::table('admin_table')->where('id', $id)->update([
            'question' => $request->question,
            'answers' => $request->answers
        ]);

        $request->session()->flash('msg', ' updated');

        return redirect()->back();
    }



    function destroy(Request $request,$id){

        $student = DB::table('admin_table')->where('id',$id)->delete();

        $request->session()->flash('msg', ' deleted');

        return redirect()->back();

    }
}
