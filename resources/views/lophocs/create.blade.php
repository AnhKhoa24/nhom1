@extends('layout.app')
@section('content')

<form action="/lophoc" method="post">
    @csrf
    Tên lớp học: <input type="text" name="tenlop">
    <br>
    Số lượng: <input type="number" name="soluong">
    <button type="submit">Tạo mới</button>
</form>
@endsection
