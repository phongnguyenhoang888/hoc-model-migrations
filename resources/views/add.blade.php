<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Cầu Thủ</title>
    <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
</head>
<body>
    <h2>Thêm sinh viên</h2>
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                                    
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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