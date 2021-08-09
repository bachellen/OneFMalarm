<?php

namespace App\Exports;

use App\Models\Alarm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlarmExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       # return AppModelsAlarm::all();
       return collect(Alarm::getAlarm());
    }

    public function headings():array{
        return [
        'X733 SpecificProb - Alarm',
        'Node - Alarm' ,
        'Node Type - Alarm' ,
        'Site ID - Alarm',
        'Site Name - Alarm' ,
        'Controlne - Alarm' ,
        'Controlne Site ID - Alarm' ,
        'First Occurance Date Time - Alarm',
        'Last Occurrence Date Time - Alarm',
        'Clear Time - Alarm',
        'Element Manager IP - Alarm',
        'Suppressescl - Alarm',
        'Tt ID - Alarm',
        ];
    }
}
