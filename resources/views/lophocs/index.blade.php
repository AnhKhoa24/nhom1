@extends('layout.app')
@section('content')
    
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Tên lớp</th>
        <th>Số lượng</th>
        <th>
            <a href="">Thêm mới</a>
        </th>
    </tr>
    @foreach ($lophocs as $item)
        <tr>
            <td>{{$item->malop}}</td>
            <td>{{$item->tenlop}}</td>
            <td>{{$item->soluong}}</td>
            <td>
                <a href="">Sửa</a>|
                <a href="">Xóa</a>
            </td>
        </tr>
    @endforeach

</table>

@endsection