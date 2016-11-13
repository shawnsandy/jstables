<table id="{{ $table_id }}" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        @foreach($col as $col_name => $col_value )
            <th>{{  $col_name }}</th>
        @endforeach
    </tr>
    </thead>
</table>
