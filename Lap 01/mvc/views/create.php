<article>
    <form action="?ctr=createProduct" method="post" method="post" enctype="multipart/form-data">
        carName :<input type="text" name="carName" id="" placeholder="Name"><br>
        image : <input name="image" type="file"><br>
        price :<input type="number" name="price" id="" min=0><br>
        description :<input type="text" name="description" id="" placeholder="description"><br>
        version :<input type="text" name="version" id="" placeholder="version"><br>
        gear :<input type="text" name="gear" id="" placeholder="gear"><br>
        origin :<input type="text" name="origin" id="" placeholder="origin"><br>
        brand_id<br>
        <select name="brand_id" id="">
            <?php foreach ($result as $value) : ?>
                <option value="<?= $value['id'] ?>"><?= $value['brandName'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="">Add</button>
    </form>
</article>