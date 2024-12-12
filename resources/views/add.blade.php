<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Cầu Thủ</title>
</head>
<body>
    <h2>Thêm sinh viên</h2>
    <form method="POST">
        @csrf
        <div>
            <label for="name">Tênsinh viên:</label> <br>
            <input type="text" id="name" name="ten_cau_thu" > <br>
            
        </div>
        <div>
            <label for="date">tuoi</label> <br>
            <input type="text" id="date" name="tuoi"> <br>
          
        </div>
        <div>
            <label for="email">email:</label><br> <br>
            <input type="text" id="email" name="email"> <br>
           
        </div><br>
        <div>
            <label for="vi_tri">vi tri:</label> <br>
            <input type="text" id="vi_tri" name="vi_tri" > <br>
           
        </div>
        <div>
            <label for="quoc_tich">Quoc Tich:</label> <br>
            <input type="text" id="quoc_tich" name="quoc_tich" > <br>
           
        </div>
        <div>
            <label for="luong">luong</label> <br>
            <input type="text" id="luong" name="luong" > <br>
          
        </div>
        <button type="submit" name="submit">Thêm sinh vien</button><br>
    </form>
</body>
</html>