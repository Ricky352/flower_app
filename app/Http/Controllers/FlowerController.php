<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\flower;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flowers = flower::all();

        return view('flowers', ['flowers' => $flowers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert_fl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:30',
            'price' => 'required|numeric|between:2,100',
        ]);

        $flower = Flower::create([
            "name" => $request->name,
            "price" => $request->price,
        ]);

        // $flower = new Flower;
        // $flower->name = $request->name;
        // $flower->price = $request->price;
        // $flower->save();

        // $res = DB::insert('INSERT INTO flowers(name, price) VALUES(?, ?)', [$request->name, $request->price]);

        if ($flower)
            return redirect('flowers')->with('success', 'Inserted successfully');
        else
            return 'Problem inserting';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flowers = flower::whereId($id)->first();
        return view('flower', ['flowers' => $flowers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flower = DB::table('flowers')->where('id', $id)->first();

        return view('update-flower', ['flower' => $flower]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|min:3|max:30',
            'price' => 'required|numeric|between:2,100',
        ]);

        $flower = Flower::find($id);
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->save();

        // $res = DB::update('UPDATE flowers 
        // SET name = ?, price = ?
        // WHERE id = ?', [$request->name, $request->price, $id]);

        if ($flower)
            return redirect('flowers')->with('success', 'Flower was updated');
        else
            return redirect('flowers')->with('error', 'Update didnt work.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $res = DB::table('flowers')->where('id', $id)->delete();

        $flower = Flower::find($id);
        $flower->delete();

        if ($flower) {
            return redirect('flowers')->with('success', 'Flower was deleted');
        } else
            return redirect('flowers')->with('error', 'Delete didnt work.');
    }

    public function viewlogin() {
        return view('login');
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required|min:3|max:30',
            'password' => 'required|between:2,100',
        ]);

        session(['email' => $request->email]);

        return redirect('flowers')->with('success', 'Successfully logged in');
    }

    public function viewlogout() {
        return view('logout');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('flowers')->with('success', 'Successfully logged out');
    }

}
