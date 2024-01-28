<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grup;

class GrupController extends Controller
{
    public function index()
    {
        // $grups = grup::all();
        // return view('grup.index',['grup' =>$grup]);
        return view('grup.index',['grup'=> Grup::get()]);
        // return view('grup.index');
    }

    public function create()
    {
        return view('grup.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'min:8|required|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'confirm_password' => 'required|same:password|min:8',
            'binusian' => 'required'
        ]);

        $create_grup = new Grup();
        $create_grup->nama = $request->nama;
        $create_grup->password = $request->password;
        $create_grup->confirm_password = $request->confirm_password;
        // $create_grup->password = bcrypt($request->password);
        // $create_grup->confirm_password = bcrypt($request->confirm_password);
        $create_grup->binusian = $request->binusian;
        $create_grup->save();
        // $newgrup = Grup::create($data);/

        return back()->withSuccess('tes123');
        // return redirect(route('grup.index'));
    }

    public function edit(grup $grup)
    {
        return view('grup.edit', ['grup' => $grup]);
    }

    public function update(grup $grup, Request $request)
    {
        $data= $request->validate([
            'nama' => 'required',
            'password' => 'min:8|required|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'confirm_password' => 'required',
            'genre' => 'required'
        ]);

        $grup->update($data);

        return redirect(route('grup.index'))->with('sucess', 'Grup Updated Succesfuly');
    }

    public function destroy(grup $grup)
    {
        $grup->delete();
        return redirect(route('grup.index'))->with('sucess', 'Grup Deleted Succesfuly');
    }
}