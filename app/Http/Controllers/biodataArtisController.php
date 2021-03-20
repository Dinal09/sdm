<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodataArtisModel;
use App\Models\kecamatanModel;
use App\Models\profinsiModel;
use App\Models\kabKotaModel;
use Ramsey\Uuid\Uuid;

class biodataArtisController extends Controller
{
    public function index()
    {
        $data = biodataArtisModel::get();
        $profinsi = profinsiModel::get();
        $kecamatan = kecamatanModel::get();
        $kabKota = kabKotaModel::get();
        $tools = array(
            'title' => 'Pretest',
            'title2' => 'Pretest | Biodata Artis',
            'menu' => 'Biodata Artis'
        );

        return view('biodata', [
            'data' => $data,
            'data2' => $data,
            'kecamatan' => $kecamatan,
            'profinsi' => $profinsi,
            'kabKota' => $kabKota,
            'tools' => $tools,
        ]);
    }

    public function tambah(Request $request)
    {
        $nama = $request->nama;
        $tempatLahir = $request->tempatLahir;
        $tanggalLahir = $request->tanggalLahir;
        $alamatTinggal = $request->alamatTinggal;
        $kecamatan = $request->kecamatan;
        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $nama = $gambar->getClientOriginalName();
            $tujuan = 'data/';
            $gambar->move($tujuan, $nama);

            biodataArtisModel::create([
                'uuid' => UUid::uuid4()->getHex(),
                'nama' => $nama,
                'tempat_lahir' => $tempatLahir,
                'tanggal_lahir' => $tanggalLahir,
                'alamat_tinggal' => $alamatTinggal,
                'foto' => $nama,
                'id_kecamatan' => $kecamatan,
            ]);
            return redirect('/');
        }
    }
}
