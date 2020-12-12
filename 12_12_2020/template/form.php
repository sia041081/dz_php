<?php

require_once __DIR__ . '/headers/' . $name . '_header.php';

?>
<div class="container">
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Имя</label>
                <input type="text" class="form-control" id="name" placeholder="Имя">
            </div>
            <div class="form-group col-md-6">
                <label>Фамилия</label>
                <input type="text" class="form-control" id="firstname" placeholder="Фамилия">
            </div>
        </div>
        <div class="form-group">
            <label>Эл. почта</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="example-tel-input" class="col-xs-2 col-form-label">Номер телефона</label>
            <div class="col-xs-10">
                <input class="form-control" type="tel" value="375 __ _______ " id="phone">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Текст сообщения</label>
            <textarea class="form-control" id="text_comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn-primary" value="">ОТПРАВИТЬ</button>
</div>

</form>
<?php
if (isset($_POST['Submit'])) {
    header("Location: http://homestead.test/?page_type=form");
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</div>

<script>
    $(document).ready(function () {
        $('.btn-primary').on('click', function () {
            let user_name = $('#name').val();
            let first_name = $('#firstname').val();
            let user_email = $('#email').val();
            let user_phone = $('#phone').val();
            let text_comment = $('#text_comment').val();

            $.ajax({
                url: "./template/send.php",
                type: "post",
                data: {
                    name: user_name,
                    firstname: first_name,
                    email: user_email,
                    phone: user_phone,
                    text_comment: text_comment
                }
            });
        });
    });
    0
</script>

