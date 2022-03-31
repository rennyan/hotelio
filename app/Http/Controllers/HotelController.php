<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function hotels()
    {
        $data = Hotel::all();
        return view('hotels', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
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
            'name' => 'required',
            'location' => 'required',
            'price' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'facilitate' => 'required',
            'synopsis' => 'required'
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path() . '/image/cover/', $imageName);
        $hotel = Hotel::create([
            'name' => $request['name'],
            'location' => $request['location'],
            'price' => $request['price'],
            'image' => $imageName,
            'facilitate' => $request['facilitate'],
            'synopsis' => $request['synopsis']
        ]);
        return redirect('hotels')->with('berhasil', 'Hotel baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::findorFail($id);
        $hotels = Hotel::all();
        return view('detail', ["hotel" => $hotel, 'hotels' => $hotels]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::findorFail($id);
        return view('edit', ['hotel' => $hotel]);
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
            'name' => 'required',
            'location' => 'required',
            'price' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'facilitate' => 'required',
            'synopsis' => 'required'
        ]);

        $hotel = Hotel::find($id);

        if ($request->image){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path() . '/image/cover/', $imageName);
        } else {
            $imageName = $hotel->image;
        }

        $hotel = $hotel->update([
            'name' => $request['name'],
            'location' => $request['location'],
            'price' => $request['price'],
            'image' => $imageName,
            'facilitate' => $request['facilitate'],
            'synopsis' => $request['synopsis']
        ]);
        return redirect('hotels')->with('berhasil', 'Hotel berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect('hotels')->with('success', 'Hotel has been deleted.');
    }
}
