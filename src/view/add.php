<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: lightgoldenrodyellow">
<br>
<form method="POST" enctype="multipart/form-data">
    <table align="center" class="table" style="width: auto; border-radius: 15px; background-color: wheat">
        <thead class="thead-dark">
        <tr>
            <td colspan="2"><h1>ADD</h1></td>
        </tr>
        <tr>
            <td>Tên</td>
            <td><input style="width: 280px" name="ten" type="text" required></td>
        </tr>
        <tr>
            <td>Loại Hàng</td>
            <td><input style="width: 280px" name="loai" type="text" required></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input name="gia" style="width: 300px" type="number" required></td>
        </tr>
        <tr>
            <td>Số Lượng</td>
            <td><input name="soluong" style="width: 300px" type="number" required></td>
        </tr>
        <tr>
            <td>Ngày Tạo</td>
            <td><input name="ngaytao" style="width: 300px" type="date" required></td>
        </tr>

        <tr>
            <td>Mô Tả</td>
            <td><input name="mota" style="width: 300px" type="text" required></td>
        </tr>
        <tr>
            <td>
                <a class="btn btn-warning" href="index.php?page=#">End</a>
            </td>
            <td>
                <button style="width: 200px; background: chartreuse" class="btn btn-success" type="submit">Add</button>
            </td>
        </tr>
        </thead>
    </table>
</form>

<footer class="footer bg-dark text-white shape-parent overflow-hidden text-center pt-160 pb-60">
    <div class="footer-copyright text-center py-3">
        <div class="footer-copyright mb-5">© Student Manager 2020-2021</div>
    </div>
</footer>

</body>
</html>
