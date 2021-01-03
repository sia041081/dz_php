<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div style="margin: 10px;">
                <a href="/admin/product/add" class="btn-success btn-sm">Добавить товар</a>
            </div>
            <!--            --><?php //var_dump($products);?>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Брэнд</th>
                    <th scope="col">категория</th>
                    <th scope="col">Деиствие</th>
                    <th scope="col">Цена</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <th scope="row"><?= $product->id ?></th>
                        <td><?= $product->name ?></td>
                        <td><?= $product->brand_id?></td>
                        <td><?= $categories[$product->category_id]->name_category ?></td>
                        <td>
                            <a href="/admin/product/show/<?= $product->id ?>" class="btn btn-outline-secondary">Редактировать
                                &nbsp </a>
                            <span>|</span>
                            <a href="/admin/product/delete/<?= $product->id ?>" class="btn btn-outline-warning"> &nbsp
                                Удалить</a>
                        </td>
                        <td><?= $product->price ?> $</td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php if ($pages > 1) : ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $pages; $i++): ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</div>