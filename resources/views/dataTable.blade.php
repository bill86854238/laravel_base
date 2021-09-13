<!-- DataTables v1.10.16 -->
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- DataTables v1.10.16 -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Start date</th>
        <th>Salary</th>
    </tr>
    </tfoot>
</table>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('dataTableJson')}}",
            "columns": [
                { "data": "Salary" }, //第一欄使用data中的name
                { "data": "Lastname" }, //第二欄使用data中的age
                { "data": "Position" }, //第二欄使用data中的age
                { "data": "Office" }, //第二欄使用data中的age
                { "data": "Startdate" }, //第二欄使用data中的age
                { "data": "Firstname" }, //第二欄使用data中的age
            ]
        } );
    } );
</script>
