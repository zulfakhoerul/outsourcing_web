<?php

namespace App\Http\Controllers\API;

use App\AreaModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    // Mengambil Semua Artikel
    public function index()
    {
        $area = AreaModel::get();
        return Area::collection($area);
    }
// Membuat Artikel Baru
    public function store(Request $request)
    {
        $area = new AreaModel();
        $area->id_kotaKabupaten = $request->input('id_kotaKabupaten');
        $area->nama_area = $request->input('nama_area');

        if($area->save()) {
            return new Area($area);
        }
    }
// Mengambil Satu Artikel
    public function show($id_area)
    {
        $area = AreaModel::findOrFail($id_area);
        return new Area($area);
    }
// Mengubah Artikel
    public function update(Request $request, $id_area)
    {
        $area = AreaModel::findOrFail($id_area);
        $area->id_kotaKabupaten = $request->input('id_kotaKabupaten');
        $area->nama_area = $request->input('nama_area');

        if($area->save()) {
            return new Area($area);
        }
    }
// Menghapus Artikel
    public function destroy($id_area)
    {
        $area = AreaModel::findOrFail($id_area);
        if($area->delete()) {
            return new Area($area);
        }
    }
}
