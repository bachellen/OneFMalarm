<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Alarm extends Model
{
    use HasFactory;

    protected $table= "oneFM_alarms";

    protected $fillable = 
    [
        'site_id',
        'Node_type' ,
        'SpecificProb',
        'Node_name' ,
        'site_name' ,
        'Controlne' ,
        'Controlne_Site_ID' ,
        'First_Occurance_Date_Time',
        'Last_Occurance_Date_Time',
        'Clear_Alarm_Date_Time',
        'Element_Manager_IP',
        'Suppressescl',
        'Ticket_id',
       'date_id',
    ];
    public static function getAlarm(){
        $alarms = DB::table('oneFM_alarms')->select( 'SpecificProb',
        'Node_name' ,
        'Node_type' ,
        'site_id',
        'site_name' ,
        'Controlne' ,
        'Controlne_Site_ID' ,
        'First_Occurance_Date_Time',
        'Last_Occurance_Date_Time',
        'Clear_Alarm_Date_Time',
        'Element_Manager_IP',
        'Suppressescl',
        'Ticket_id')->get()->toArray();
        return $alarms;
    }
}