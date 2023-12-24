@extends('layouts.app-master')

@section('content')
<div class="row p-md-5">
   <div class="row mb-2">      
      <div class="col text-start">
         <h2>{{$pageDetails['title']}}</h2>
      </div>
      <div class="col text-end">
         <a href="{{ route('register.show') }}" class="btn btn-success"><i class="bi bi-plus"></i> Create</a>
      </div>
   </div>
   <div class="row">
      <div class="col col-md-12">
         <table id="employeeTable" clas="table table-striped display" style="width:100%">
            <thead>
               @foreach($listing as $list)
               <th>{{$list['label']}}</th>
               @endforeach
            </thead>
            <tbody>
            </tbody>
         </table>
      </div>
   </div>
</div>
@stop

@section('custom_js')
<script>

   const jsonData = {!!json_encode($listing)!!};

   $(document).ready(function() {

      // Extract column names from the first row of the data
      // var columnNames = Object.keys(jsonData[0]);

      // Dynamically generate column headers
      var columnHeaders = jsonData.map(function(col) {

         if(!col.accessor) {
            return { 
               "data": null, 
               "defaultContent": "" } // Actions column
         }
         return {
            "data": col.accessor,
            "title": col.label,
         };
      });

      employeeDataTable = new DataTable("#employeeTable", {
         searching: false,
         lengthChange: false,
         ajax: {
            url: "/employee", // Replace with your API endpoint
            type: "POST",
            data: {_token:_token}
         },
         columns: columnHeaders,         
         columnDefs: [
                {
                    targets: [jsonData.length - 1], // Target the first and second columns
                    render: function (data, type, row, meta) {
                        let action = "<a class='btn btn-sm btn-primary' type=\"button\" href='/employee/"+row.id+"'>Edit</a> ";
                        return action += "<button class='btn btn-sm btn-danger btn-delete-emp' type=\"button\" data-id='"+row.id+"'>Delete</button>";
                    }
                }
            ]
      });

   });
</script>
@endsection