@extends('layout.app')
@section('content')
    <h1>Thêm sinh viên</h1>

    <form action="/hocsinh" method="post">
        @csrf
        Tên sinh viên: <input type="text" name="name">
        <br>
        Ngày sinh: <input type="date" name="ngaysinh">
        <br>
        Giới tính:  
        <input type="radio" id="html" name="gioitinh" value="Nam">
        <label for="html">Nam</label>
        <input type="radio" id="css" name="gioitinh" value="Nữ">
        <label for="css">Nữ</label><br>

        Chọn lớp:
        <select name="malop">
            @foreach ($lophocs as $item)
                <option value="{{ $item->malop }}">{{ $item->tenlop }}</option>
            @endforeach

        </select>

        <br>
        <button type="submit">Thêm</button>
    </form>
@endsection
