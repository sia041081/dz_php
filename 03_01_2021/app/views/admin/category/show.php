
<div style="margin: 0 10px;">
    <form  role="form" method="post" action="<?= isset($category->id) ?
        '/admin/category/edit/' . $category->id : '/admin/category/save' ?>">
        <div class="form-group">
            <label>Название категории</label>
                <input class="form-control form-control-lg" name="name" value="<?=$category->name_category ?? '' ?>">
        </div>
        <button type="submit" class="btn btn-default">Сохранить</button>
    </form>
</div>