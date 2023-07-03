<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahasiswa([
            'nama' => $row[1],
            'jeniskelamin' => $row[2],
            'notelepon' => $row[3],
            'email' => $row[4],
            'alamat' => $row[5],
            'foto' => $row[6],
        ]);
    }
}
