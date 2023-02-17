<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product</title>
</head>

<body>
  <form action="/update-product" method="post" enctype="multipart/form-data">
    <input type="text" name="id" value="<?php echo $product->id ?>" hidden>
    TenHH: <input type="text" name="tenhh" id="" value="<?php echo $product->tenhh ?>">
    <br>
    Gia: <input type="text" name="gia" id="" value="<?php echo $product->gia ?>">
    <br>
    SoLuong: <input type="text" name="soluong" id="" value="<?php echo $product->soluong ?>">
    <br>
    <img src="images/<?php echo $product->hinh ?>" alt="" name="hinh" width="120">
    Hinh: <input type="file" name="hinh" id="">
    <br>
    Mota: <textarea name="mota" id="" cols="90" rows="5"> <?php echo $product->mota ?></textarea>
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