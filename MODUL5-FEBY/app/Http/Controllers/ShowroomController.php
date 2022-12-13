<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;

class ShowroomController extends Controller

{
    public function index(){
        $car=Showroom::orderBy('id')->get();
        return view('tampilan_M5.HomeAfter', compact('car'));
    }

    public function create(){
        return view('tampilan_M5.Add_Feby');
    }

    public function store(Request $request)
    {
        $MyImage=time().'.'.$request->foto_mobil->extension();
        $request->foto_mobil->move(public_path("image"), $MyImage);
        // $imgName = $request->img_path->getClientOriginalName() . '-' . time()
        //             . '.' . $request->img_path->extension();
        // $request->img_path->move(public_path('image'), $imgName);

        Showroom::create([
            'name' => $request -> nama_mobil,
            'owner' => $request -> pemilik_mobil,
            'brand' => $request -> merk_mobil,
            'purchase_date' => $request -> tanggal_beli,
            'description' => $request -> deskripsi,
            'image' => $MyImage,
            'status' => $request -> status_pembayaran
        ]);

        return redirect('/tampilan_M5');
    }

    public function edit($id)
    {
        $car = Showroom::find($id);

        return view('tampilan_M5.Edit_Feby', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $car = Showroom::find($id);

        $MyImage = $car->foto_mobil;
        if ($request->foto_mobil) {
            $MyImage=time().'.'.$request->foto_mobil->extension();
            $request->foto_mobil->move(public_path("image"), $MyImage);
        }

        Showroom::find($id)->update([
            'name' => $request -> nama_mobil,
            'owner' => $request -> pemilik_mobil,
            'brand' => $request -> merk_mobil,
            'purchase_date' => $request -> tanggal_beli,
            'description' => $request -> description,
            'image' => $MyImage,
            'status' => $request -> status_pembayaran
        ]);

        return redirect('/tampilan_M5');

    }

    public function destroy($id)
    {
        Showroom::find($id)->delete();

        return redirect('/tampilan_M5');
    }
}
