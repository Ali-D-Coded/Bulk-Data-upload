<?php

namespace App\Imports;

use App\Models\Cards;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class CardsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cards([
            'plans' => $row[0],
            'card-number' => $row[1],
        ]);

    }
}
