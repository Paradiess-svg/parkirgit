<?php

namespace App\Http\Controllers;

use App\Models\Supplier as ModelsSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Supplier extends Controller
{
    public function index()
    {
        $supplier = ModelsSupplier::all();
        $data = [
            'supplier' => $supplier
        ];
        return view('supplier', $data);
    }
    public function tambahSupplier()
    {
        return view('tambahSupplier');
    }
    public function save(Request $request)
    {
        // ModelsSupplier::create($request->except(['_token','simpan']));
        DB::table('supplier')->insert([
            'namaSupplier' => $request->namaSupplier,
            'alamatSupplier' => $request->alamatSupplier,
            'telpSupplier' => $request->telpSupplier,
        ]);
        return redirect()->to(url('/'));
    }

    public function destroy($id)
    {
        $supplier = ModelsSupplier::find($id);
        $supplier -> delete();
        return redirect()->to(url('/'));
    }

    public function edit($id, Request $request)
    {
        $supplier = ModelsSupplier::find($id);
        $supplier ->update($request->except(['_token', 'simpan']));
        return redirect()->to(url('/'));
    }
    public function update ($id)
    {
        $supplier = ModelsSupplier::find($id);
        return view('editSupplier',$supplier);
    }
}
