<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelActorsImport implements ToModel, WithHeadingRow
{

    public  $object = array();

    public function  __construct($object)
    {
        $this->object= $object;
    }

    public function model(array $row)
    {
        $actors = json_decode($row['production_companies'],JSON_UNESCAPED_SLASHES);
        if($actors != null){
            array_push($this->object,$actors);
            file_put_contents("actors.json", json_encode($this->object));
        }
    }
}
