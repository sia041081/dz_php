<div style="margin: 10px">
    <form method="post" action="/admin/?action=save_page" enctype="multipart/form-data">

        <div class="form-group">
            <label>Название</label>
            <br/>
            <input  name="title" placeholder="TITLE" style="width: 100%; outline: none;">
            <p class="help-block">Введите заголовок статьи</p>
        </div>

        <div class="form-group">
            <label>Выберите изображение</label>
            <input class="form-control" name="page_img" type="file" style="padding: 10px; outline: none;">
        </div>

        <div class="form-group">
            <label>Автор</label>
            <input name="author" placeholder="author" style="width: 100%; outline: none;">

        </div>

        <div class="form-group">
            <label>Категория статьи</label>
            <input name="category" placeholder="category" style="width: 100%; outline: none;">

        </div>

        <div class="form-group">
            <label>Text area</label>
            <textarea class="form-control" rows="3" name="content" placeholder="Ваша запись" style="outline: none;"></textarea>
        </div>

        <button type="submit" class="btn btn-default" style="margin-bottom: 30px; border: 1px solid #0f0f0f; outline:none;">Сохранить запись</button>

    </form>
</div>
