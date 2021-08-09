<!DOCTYPE html>
<html>
 <head>
  <title>Import Excel File in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  
   
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">OneFM alarms</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th> X733 SpecificProb - Alarm</th>
        <th>Node - Alarm</th>
        <th>Node Type - Alarm</th>
        <th>Site ID - Alarm</th>
        <th> Site Name - Alarm</th>
        <th>Controlne - Alarm</th>
        <th>Controlne Site ID - Alarm</th>
        <th>First Occurance Date Time - Alarm</th>
        <th>Last Occurrence Date Time - Alarm</th>
        <th>Clear Time - Alarm'</th>
        <th>Element Manager IP - Alarm</th>
        <th>Suppressescl - Alarm</th>
        <th>Tt ID - Alarm</th>
       </tr>
       @foreach($alarms as $row)
       <tr>
        <td>{{ $row->SpecificProb }}</td>
        <td>{{ $row->Node_name }}</td>
        <td>{{ $row->Node_type }}</td>
        <td>{{ $row->site_id }}</td>
        <td>{{ $row->site_name }}</td>
        <td>{{ $row->Controlne }}</td>
        <td>{{ $row->Controlne_Site_ID }}</td>
        <td>{{ $row->First_Occurance_Date_Time }}</td>
        <td>{{ $row->Last_Occurance_Date_Time }}</td>
        <td>{{ $row->Clear_Alarm_Date_Time }}</td>
        <td>{{ $row->Element_Manager_IP }}</td>
        <td>{{ $row->Suppressescl }}</td>
        <td>{{ $row->Ticket_id }}</td>
       </tr>
       @endforeach
      </table>
      <span>{{$alarms->links()}}</span>
      <a href="{{ url('/export') }}" class="btn btn-xs btn-info pull-right">Download CSV</a>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>