<?php

namespace App\Imports;
use Illuminate\Support\Facades\Hash;
use App\Models\Aprendices;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class AprendicesImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aprendices([
            'id_aprendiz' => $row['id_aprendiz'],
            'nombres' => $row['nombres'],
            'apellidos' => $row['apellidos'],
            'email' =>$row['email'],
            'celular_1' => $row['celular_1'],
            'celular_2' => $row['celular_2'],
            'ficha_id' => $row['ficha_id'],
            'foto' => $row['foto'],
            'observacion' => $row['observacion'],
            'calificaciones' => $row['calificaciones'],
        ]);
    }
    public function batchSize(): int
    {
        return 10000;
    }
    public function chunkSize(): int
    {


        return 10000;



    }

}
