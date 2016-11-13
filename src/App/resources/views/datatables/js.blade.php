<script>
    var data = "{{ json_encode($data['dataset']) }}";
    var columns = "{{ json_encode($data['columns']) }}";
    $("{{ $data['table_selctor'] }}").DataTable({
        data: data,
        columns: columns,
        dataSrc: ""
    });
</script>
