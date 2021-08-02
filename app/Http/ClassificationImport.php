<?php

namespace App\Http;

use App\Models\Classification;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClassificationImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Classification([
            'store'=>$row['store'],
            'employee'=>$row['employee'],
            'points'=>$row['points'],
        ]);
    }
}