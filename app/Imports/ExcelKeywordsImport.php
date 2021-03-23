<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelKeywordsImport implements ToModel, WithHeadingRow
{
    public  $object = array();

    public function  __construct($object)
    {
        $this->object= $object;
    }

    public function model(array $row)
    {
        $keywords = json_decode($row['keywords'],JSON_UNESCAPED_SLASHES);
        if($keywords != null){
            array_push($this->object,$keywords);
            file_put_contents("keywords.json", json_encode($this->object));
        }
    }
}
