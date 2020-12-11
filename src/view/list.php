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
<br><br>
<h1 align="center" style="color: chartreuse"><b>Danh Sách Mặt Hàng</b></h1>
<br><br>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th scope="col">Tên</th>
        <th scope="col">Loại Hàng</th>
        <th scope="col">Giá</th>
        <th scope="col">Số Lượng</th>
        <th scope="col">Ngày Tạo</th>
        <th scope="col">Mô Tả</th>
        <th colspan="2" scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $key => $item): ?>
        <tr>
            <th scope="row"><?php echo $key + 1 ?></th>
            <th><?php echo $item['ten'] ?></th>
            <th><?php echo $item['loai'] ?></th>
            <th><?php echo $item['gia'] ?></th>
            <th><?php echo $item['soluong'] ?></th>
            <th><?php echo $item['ngaytao'] ?></th>
            <th><?php echo $item['mota'] ?></th>
            <th><a href="index.php?page=edit&id=<?php echo $item['id'] ?>" class="btn btn-success">Edit</a></th>
            <th><a href="index.php?page=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa chứ?')" class="btn btn-danger">Delete</a></th>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<footer class="footer bg-dark text-white shape-parent overflow-hidden text-center pt-160 pb-60">
    <div class="footer-copyright text-center py-3">
        <div class="footer-copyright mb-5">© LIST ITEM 2020-2021</div>
    </div>
</footer>

</body>
</html>