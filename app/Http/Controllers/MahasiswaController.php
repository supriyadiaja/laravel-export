<?php

namespace App\Http\Controllers;

use App\Exports\MahasiswaExpor;
use App\Models;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();
        // dd($data);
        return view('datamahasiswa', compact('data'));
    }

    public function tambahmahasiswa(){
        return view ('tambahmahasiswa');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        $data = Mahasiswa::create($request->all());
        if ($request-> hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('mahasiswa')->with('success', 'Data berhasil di tambahkan!');
    }

    public function tampildata($id){
        $data = Mahasiswa::find($id);
        // dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata($id, Request $request){
        $data = Mahasiswa::find($id);
        $data->update($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Data berhasil di update!');
    }

    public function deletedata($id){
        $data = Mahasiswa::find($id);

        $data->delete($id);
        return redirect()->route('mahasiswa')->with('success', 'Data berhasil di hapus!');
    }

    public function detaildata($id){
        $data = Mahasiswa::find($id);
        // dd($data);

        return view('detailmahasiswa', compact('data'));
    }

    public function exportpdf(){
        $data = Mahasiswa::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datamahasiswa-pdf');
        return $pdf->download('data.pdf');
    }

    public function exportexcel(){
        return Excel::download(new MahasiswaExpor, 'datamahasiswa.xlsx');
    }

    public function importdata(Request $request) {
        $data = $request-> file('file');

        $namafile = $data->getClientOriginalName();
        $data-> move('MahasiswaData', $namafile);

        Excel::import(new MahasiswaImport, \public_path('/MahasiswaData/'. $namafile));
        return \redirect()->back()->with('success', 'Data berhasil di import!');
    }
}
