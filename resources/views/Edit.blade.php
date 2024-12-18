@extends('layouts.app')

@section('content')
<body>
    <h2>Sửa thông tin sinh viên</h2>
@if($errors->any())
                                <div class="alert alert-danger alert-dismissible">
                            
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                    @endif

    <!-- Giả sử bạn chỉ cập nhật một sinh viên, không cần foreach -->
    <form method="POST">
        @csrf
       
        <div>
            <label for="name">Tên sinh viên:</label> <br>
            <input type="text" id="name" name="ten_cau_thu" value="{{ $datacauthu_edit->ten_cau_thu }}" > <br>
        </div>
        <div>
            <label for="tuoi">Tuổi:</label> <br>
            <input type="text" id="tuoi" name="tuoi" value="{{ $datacauthu_edit->tuoi }}"> <br>
        </div>
        <div>
            <label for="email">Email:</label><br> 
            <input type="text" id="email" name="email" value="{{ $datacauthu_edit->email }}" > <br>
        </div>
        <div>
            <label for="vi_tri">vitri:</label> <br>
            <input type="text" id="vi_tri" name="vi_tri" value="{{ $datacauthu_edit->vi_tri }} "> <br>
        </div>
        <div>
            <label for="quoc_tich">Quốc tịch:</label> <br>
            <input type="text" id="quoc_tich" name="quoc_tich" value="{{ $datacauthu_edit->quoc_tich }}" > <br>
        </div>
        <div>
            <label for="luong">Mã sinh viên:</label> <br>
            <input type="text" id="luong" name="luong" value="{{ $datacauthu_edit->luong }}" > <br>
        </div>
        <button type="submit" name="submit">Cập nhật</button><br>
          

    </form>
</body>

@endsection