@extends('layouts.app')

@section('content')
        <table id="datatable" style="border: 1px solid">
            <h1>Quản lý Cau thu</h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Tên cau thu</th>
                    <th>Tuổi</th>
                    <th>email</th>
                    <th>Vi tri</th>
                    <th>Quốc tịch</th>
                    <th>luong</th>
                    <th style="width: 7%;">Edit</th>
                    <th style="width: 10%;">Delete</th>
                </tr>
            </thead>
            <tbody>

                @foreach($data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{ $value->ten_cau_thu }}</td>
                        <td>{{ $value->tuoi }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->vi_tri}}</td>
                        <td>{{ $value->quoc_tich}}</td>
                        <td>{{ $value->luong }}</td>
                        <td><a  href="{{url('/Edit', $value->id)}}"><button id="button">Edit</button></a></td>
                        <td><a href="{{url('/delete', $value->id)}}"><button id="button">Delete</button></a></td>
                    </td>
                    </tr>
                @endforeach
              
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="{{url('/add')}}"><button id="button">Thêm sinh vien</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>
@endsection