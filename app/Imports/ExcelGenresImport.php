<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelGenresImport implements ToModel, WithHeadingRow
{
    public  $object = array();

    public function  __construct($object)
    {
        $this->object= $object;
    }

    public function model(array $row)
    {
        $genres = json_decode($row['genres'],JSON_UNESCAPED_SLASHES);
        if($genres != null){
            array_push($this->object,$genres);
            file_put_contents("genres.json", json_encode($this->object));
        }
    }
}
