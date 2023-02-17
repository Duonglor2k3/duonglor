<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product</title>
</head>

<body>
  <form action="/create-product" method="post" enctype="multipart/form-data">
    TenHH: <input type="text" name="tenhh" id="">
    <br>
    Gia: <input type="text" name="gia" id="">
    <br>
    SoLuong: <input type="text" name="soluong" id="">
    <br>
    Hinh: <input type="file" name="hinh" id="">
    <br>
    Mota: <textarea name="mota" id="" cols="90" rows="5"></textarea>
    <br>
    Maloai:
    <select name="maloai" id="">
      <?php foreach ($categories as $cate) : ?>
        <option value="<?= $cate->id ?>">
          <?= $cate->tenloai ?>
        </option>
      <?php endforeach ?>
    </select>
    <br>
    <button type="submit">Add</button>
  </form>
</body>

</html>