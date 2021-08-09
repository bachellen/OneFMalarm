<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use Illuminate\Http\Request;
use DB;
use Excel;
use App\Imports\AlarmImport;
use App\Exports\AlarmExport;

class AlarmController extends Controller
{

    public function getAllAlarm(){
        $alarms = Alarm::paginate(15);
        return view('import-form', compact('alarms'));
    }
    public function importForm() {
        return view('import-form');
    }

    public function import( Request $request){
        $this->validate($request, [
            'file'  => 'required|mimes:xlsx'
        ]);
        Excel::import(new AlarmImport, $request ->file);
        return back()->with('success', 'Excel Data Imported successfully.');
    }

    public function exportIntoCSV(){
        return Excel::download(new AlarmExport, 'oneFM_alarms.csv');
    }
}
