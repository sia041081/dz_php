<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div style="margin: 10px;">
                <a href="/admin/category/add" class="btn-success btn-sm">Добавить категорию</a>
            </div>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Деиствие</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category) :?>
                <tr>
                    <th scope="row"><?=$category->id?></th>
                    <td><?=$category->name_category?></td>
                    <td>
                        <a href="/admin/category/show/<?=$category->id?>" class="btn btn-outline-secondary">Редактировать &nbsp </a>
                        <span>|</span>
                        <a href="/admin/category/delete/<?=$category->id?>" class="btn btn-outline-warning"> &nbsp Удалить</a>
                    </td>

                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>