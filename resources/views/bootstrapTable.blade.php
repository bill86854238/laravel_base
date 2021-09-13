<link href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>

<table
    id="table"
    data-toggle="table"
    data-height="460"
    data-ajax="ajaxRequest"
    data-search="true"
    data-side-pagination="server"
    data-pagination="true">
    <thead>
    <tr>
        <th data-field="id">ID</th>
        <th data-field="name">Item Name</th>
        <th data-field="price">Item Price</th>
    </tr>
    </thead>
</table>

<script>
    // your custom ajax request here
    function ajaxRequest(params) {
        // var url = 'https://examples.wenzhixin.net.cn/examples/bootstrap_table/data'
        var url = '{{route('bootstrapTableJson')}}';
        console.log(params);
        $.get(url + '?' + $.param(params.data)).then(function (res) {
            params.success(res)
        })
    }
</script>
