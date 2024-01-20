@extends('layout.app')
@section('content')
    <table border="1" width="90%">
        <tr>
            <th>#</th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Giới tính</th>
            <th>Lớp</th>
        </tr>
        @foreach ($hocsinhs as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->ngaysinh}}</td>
                <td>{{$item->gioitinh}}</td>
                <td>{{$item->tenlop}}</td>
            </tr>
        @endforeach
    </table>
@endsection