<?php

namespace App\Imports;

use App\Models\Alarm;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;

// use Maatwebsite\Excel\Concerns\WithHeadingsRows;

class AlarmImport implements ToModel, WithStartRow, SkipsOnError
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        #echo \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8])->format('d/m/Y H:i:s');
        return new Alarm([
            'SpecificProb' => $row[1], 
            'Node_name' => $row[2],
            'Node_type' => $row[3], 
            'site_id' => $row[4],
            'site_name' => $row[5], 
            'Controlne' => $row[6], 
            'Controlne_Site_ID' => $row[7], 
            'First_Occurance_Date_Time' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8])->format('Y-m-d H:i:s'),
            'Last_Occurance_Date_Time'  => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9])->format('Y-m-d H:i:s'),
            'Clear_Alarm_Date_Time'  => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[10])->format('Y-m-d H:i:s'),
            'Element_Manager_IP' => $row[11], 
            'Suppressescl' => $row[12], 
            'Ticket_id' => $row[13],
            'date_id' => date('Y-m-d'),
        ]);
    }
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 5;
    }

    public function onError(\Throwable $e)
    {
        // Handle the exception how you'd like.
    }
}
