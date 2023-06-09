<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Models\Pelanggan;
use App\Models\User;
use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class TagihanController extends Controller
{
    public function index()
    {
        $tagihans = DB::table('tagihan')->join('pelanggan', 'tagihan.NoPelanggan','=','Pelanggan.NoPelanggan')->join('users', 'Pelanggan.IDUser','=','Users.id')->get();


        return view('tagihan.index', compact('tagihans'));
    }

    public function create()
    {
        $pelanggans = DB::table('users')->join('pelanggan', 'pelanggan.IDUser','=','Users.id')->get();
        $kasirs = DB::table('users')->join('kasir', 'kasir.IDUser','=','Users.id')->get();
        return view('tagihan.create', compact('pelanggans','kasirs'));
    }

    public function store(Request $request)
    {
        $tagihan = Tagihan::create($request->all());
        $arr = DB::table('tagihan')
                ->join('pelanggan', 'tagihan.NoPelanggan','=','Pelanggan.NoPelanggan')
                ->join("jenis_pelanggan","jenis_pelanggan.IDJenis",'=','pelanggan.IDJenis')
                ->where('tagihan.IDTagihan',$tagihan->IDTagihan)->first();
        $jenis = (array) $arr;
        $tagihans = Tagihan::findOrFail($jenis["IDTagihan"]);
        if((int)$request->Input("Pengunaan") > (int)$jenis['Batasan']){
            $tagihans->update([ "PengunaanLebih" => (int)$request->Input("Pengunaan") - (int)$jenis["Batasan"], "Pengunaan" => (int)$jenis["Batasan"]]);
        }
        $biaya = $tagihans->Pengunaan * $jenis["TarifPerKubik"] + $tagihans->PengunaanLebih * $jenis["TarifLebihBatasan"];
        $tagihans->update(["Biaya" => $biaya]);

        if($request->file('BuktiGambar')) {
            $fileName = time().'_'.$request->file('BuktiGambar')->getClientOriginalExtension();
            $request->file('BuktiGambar')->move(public_path('BuktiGambar'), $fileName);
            $filePath = 'BuktiGambar/'.$fileName;
        }
        
        return redirect()->route('tagihan.index')
            ->with('success', 'Tagihan created successfully.');
    }

    public function show($id)
    {
        $tagihan = Tagihan::findOrFail($id);

        return view('tagihan.show', compact('tagihan'));
    }

    public function edit($id)
    {
        $tagihan = Tagihan::findOrFail($id);
        $kasirs = DB::table('users')->join('kasir', 'kasir.IDUser','=','Users.id')->get();

        return view('tagihan.edit', compact('tagihan','kasirs'));
    }

    public function update(Request $request, $id)
    {
        $tagihan = Tagihan::findOrFail($id);
        $tagihan->update($request->all());
        $arr = DB::table('tagihan')
        ->join('pelanggan', 'tagihan.NoPelanggan','=','Pelanggan.NoPelanggan')
        ->join("jenis_pelanggan","jenis_pelanggan.IDJenis",'=','pelanggan.IDJenis')
        ->where('tagihan.IDTagihan',$tagihan->IDTagihan)->first();
        $jenis = (array) $arr;
        $tagihans = Tagihan::findOrFail($jenis["IDTagihan"]); 
        if((int)$request->Input("Pengunaan") > (int)$jenis['Batasan']){
            $tagihans->update(["PengunaanLebih" => (int)$request->Input("Pengunaan") - (int)$jenis["Batasan"], "Pengunaan" => (int)$jenis["Batasan"]]);
        }
        $biaya = $tagihans->Pengunaan * $jenis["TarifPerKubik"] + $tagihans->PengunaanLebih * $jenis["TarifLebihBatasan"];
        $tagihans->update(["Biaya" => $biaya]);
      

        return redirect()->route('tagihan.index')
            ->with('success', 'Tagihan updated successfully.');
    }

    public function destroy($id)
    {
        Tagihan::findOrFail($id)->delete();

        return redirect()->route('tagihan.index')
            ->with('success', 'Tagihan deleted successfully.');
    }

    public function pelunasanindex()
    {
        $userid = Auth::user()->id;
        $tagihans = DB::table('tagihan')->join('pelanggan', 'tagihan.NoPelanggan','=','Pelanggan.NoPelanggan')->join('users', 'Pelanggan.IDUser','=','Users.id')->join('kasir','tagihan.NoKasir', '=', 'kasir.NoKasir')->where('kasir.IDUser','=',$userid)->get();


        return view('pelunasan.index', compact('tagihans'));
    }   

    public function pelunasanedit($id)
    {
        
        $tagihan = Tagihan::findOrFail($id);

        return view('pelunasan.edit', compact('tagihan'));
    }
    
    public function pelunasanupdate(Request $request, $id)
    {
        $tagihan = Tagihan::findOrFail($id);
        $tagihan->update($request->all());
        if($request->Input('Status')=="Belum"){
            $tagihan->update([
                "TglBayar" => NULL,
                "BuktiBayar" => NULL
            ]);
        }

        return redirect()->route('pelunasan.index')
            ->with('success', 'Tagihan updated successfully.');
    }

    public function tagihansayaindex()
    {
        $userid = Auth::user()->id;
        $tagihans = DB::table('tagihan')->join('pelanggan', 'tagihan.NoPelanggan','=','Pelanggan.NoPelanggan')->join('users', 'Pelanggan.IDUser','=','Users.id')->where('pelanggan.IDUser','=',$userid)->get();


        return view('tagihansaya.index', compact('tagihans'));
    }   

    public function tagihansayaedit($id)
    {
        $tagihan = Tagihan::findOrFail($id);

        return view('tagihansaya.edit', compact('tagihan'));
    }   

    public function tagihansayaupdate(Request $request, $id)
    {
        $tagihan = Tagihan::findOrFail($id);
        $tagihan->update($request->all());
        $file = $request->file('BuktiBayar');
        $extension = $request->file('BuktiBayar')->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $file->storeAs('public', $fileName);
        $tagihan->update(['BuktiBayar' => $fileName]);


        return redirect()->route('tagihansaya.index')
            ->with('success', 'Tagihan updated successfully.');
    }


}
