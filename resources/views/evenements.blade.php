@extends('layouts.principal')
@section('content')
    <table border="1">
        @foreach ($events as $item)
            <tr>

                <td>{{ $item->ID }}</td>
                <td>{{ $item->Title }}</td>
            </tr>
        @endforeach
    </table>
@endsection
