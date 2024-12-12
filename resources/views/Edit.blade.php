<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update sinh viên</title>
</head>
<body>
    <h2>Sửa thông tin sinh viên</h2>
    <!-- Giả sử bạn chỉ cập nhật một sinh viên, không cần foreach -->
    <form method="POST">
        @csrf
       
        <div>
            <label for="name">Tên sinh viên:</label> <br>
            <input type="text" id="name" name="ten_cau_thu" value="{{ $datacauthu_edit->ten_cau_thu }}"> <br>
        </div>
        <div>
            <label for="tuoi">Tuổi:</label> <br>
            <input type="text" id="tuoi" name="tuoi" value="{{ $datacauthu_edit->tuoi }}"> <br>
        </div>
        <div>
            <label for="email">Email:</label><br> 
            <input type="text" id="email" name="email" value="{{ $datacauthu_edit->email }}"> <br>
        </div>
        <div>
            <label for="vi_tri">vitri:</label> <br>
            <input type="text" id="vi_tri" name="vi_tri" value="{{ $datacauthu_edit->vi_tri }}"> <br>
        </div>
        <div>
            <label for="quoc_tich">Quốc tịch:</label> <br>
            <input type="text" id="quoc_tich" name="quoc_tich" value="{{ $datacauthu_edit->quoc_tich }}"> <br>
        </div>
        <div>
            <label for="luong">Mã sinh viên:</label> <br>
            <input type="text" id="luong" name="luong" value="{{ $datacauthu_edit->luong }}" readonly> <br>
        </div>
        <button type="submit" name="submit">Cập nhật</button><br>
    </form>
</body>
</html>
