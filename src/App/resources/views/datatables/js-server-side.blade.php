<?php  ?>
<script>
    $(document).ready(function () {
        $("{{ $table_id or '#datatables' }}").DataTable({
            "ajax": {
                "url": "{{ $data_url }}",
                "dataSrc": ""
            },
            "columns": {!! $cols  !!},
            "order": [{!! $order or "['0' , 'desc']"  !!}],
            "pageLength": {!! $length or 30  !!},
            "processing": {!! $processing or true !!}
        });
    });
</script>
