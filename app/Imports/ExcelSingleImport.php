<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelSingleImport implements ToModel, WithHeadingRow
{
    public  $object = array();

    public function  __construct($object)
    {
        $this->object= $object;
    }

    public function model(array $row)
    {

        $keywords = json_decode($row['keywords'],JSON_UNESCAPED_SLASHES);
        $genres = json_decode($row['genres'],JSON_UNESCAPED_SLASHES);
        $budget = json_decode($row['budget'],JSON_UNESCAPED_SLASHES);
        $original_title = json_decode($row['original_title'],JSON_UNESCAPED_SLASHES);

        array_push($this->object,$keywords);
        array_push($this->object,$genres);
        array_push($this->object,[
            'budget' => $budget
        ]);
        array_push($this->object,[
            'original_title' => $original_title
        ]);

        file_put_contents("single.json", json_encode($this->object));

    }

}
