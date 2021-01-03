<div style="margin: 0 10px;">
    <form role="form" method="post" action="<?= isset($product->id) ?
        '/admin/product/edit/' . $product->id : '/admin/product/save' ?>">
        <div class="form-group">
            <label>Название товара</label>
            <input class="form-control form-control-lg" name="name" value="<?= $product->name ?? '' ?>">
            <label>Категория</label>
            <!--            --><?php //var_dump($brands);?>

            <select name="category_name" id="" class="form-control">
                <?php foreach ($categories as $category) : ?>
                    <?php $checked = $product->category_id == $category->id ?>
                    <option value="<? $category->id ?>" <?= $checked ? 'selected' : "" ?>>
                        <?= $category->name_category ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Бренд</label>
            <select name="brand_name" id="" class="form-control">
                <?php foreach ($brands as $brand) : ?>
                    <?php $checked = ($product->brand_id ?? false) === $brand->id ?>
                    <option value="<? $brand->id ?>" <?= $checked ? 'selected' : "" ?>>
                        <?= $brand->name_brand ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <label>Цена</label>
            <input type="number" min="0" max="10000" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Сохранить</button>
    </form>
</div>