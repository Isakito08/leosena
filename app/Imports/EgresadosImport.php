<?php

namespace App\Imports;
use Spatie\Permission\Models\Role;
use App\Models\Egresado;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class EgresadosImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Egresado([
            'ficha' => $row['ficha'],
            'programa' => $row['programa'],
            'nis' => $row['nis'],
            'registro' => $row['num_registro'],
            'tipo_documento' => $row['tipo_documento'],
            'num_documento' => $row['numero_documento'],
            'nombre' => $row['nombre'],
            'residencia' => $row['residencia'],
            'correo' => $row['correo'],
            'telefono' => $row['telefonop'],
            'telefono_al' => $row['telefonoa'],
            'celular' => $row['celular'],
            'año' => $row['ano'],
            'sexo' => $row['sexo'],
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
