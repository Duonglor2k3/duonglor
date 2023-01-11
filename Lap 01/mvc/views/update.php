<form action="?ctr=update-car" method="post" enctype="multipart/form-data">
    <form action="?control=update-car" method="post" enctype="multipart/form-data">
        carName<input value="<?= $result['carName']  ?>" name="carName" type="text"><br>
        <input value="<?= $result['id']  ?>" name="id" type="hidden"><br>
        <img width="100" src="uploads/<?= $result['image'] ?>" alt="">
        image<input value="<?= $result['image'] ?>" name="image" type="file"><br>
        <input value="<?= $result['image'] ?>" name="prev" type="hidden"><br>
        price<input value="<?= $result['price'] ?>" name="price" type="text"><br>
        description<input value="<?= $result['description'] ?>" name="description" type="text"><br>
        version<input value="<?= $result['version'] ?>" name="version" type="number"><br>
        gear<input value="<?= $result['gear'] ?>" name="gear" type="number"><br>
        origin<input value="<?= $result['origin'] ?>" name="origin" type="text"><br>
        brand_id<br>
        <select name="brand_id" id="">
            <?php foreach ($all as $value) : ?>
                <option <?= $result['id'] == $value['id'] ? 'selected' : '' ?> value="<?= $value['id'] ?>"><?= $value['brandName'] ?></option>
            <?php endforeach; ?>
        </select>
        <button>save</button>
    </form>
    <button>save</button>
</form>