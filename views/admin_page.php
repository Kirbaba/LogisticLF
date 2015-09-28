<h1>Настройки слайдера</h1>
<div>
    <h2>{message}</h2>
</div>
<hr>
<table class="admin-table">
    <tr>
        <td valign="top" style="padding-right: 20px">
            <form class='main_slider' action="/wp-admin/admin.php?page=main_slider" method="post" name="main_slider">
                <p><b>Введите заголовок:</b><br>
                <p><input class="title" type="text" name="title" value=""></p>
                <p><b>Введите описание:</b><br>
                <p><textarea class="description" name="description" id="" cols="30" rows="10"></textarea></p>
                <p><b>Укажите ссылку:</b><br>
                <p><input class="url" type="text" name="url" value=""></p>
                <p><b>Выберите изображение:</b><br>
                <p><img class="custom_media_image" src="" alt="" style="width: 80px;"></p>
                <p><button class="custom_media_upload">Загрузить</button></p>
                <p><input id="image" class="custom_media_url" type="text" name="attachment_url" value=""></p>
                <p><input type='submit' value='Отправить'/></p>
            </form>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <table style="width: 100%">
                <caption>Существующие слайды</caption>
                <tr>
                    <td style="padding-right: 10px">
                        <p>Изображение :</p>
                    </td>
                    <td style="padding-right: 10px">
                        <p>Заголовок :</p>
                    </td>
                    <td style="padding-right: 10px">
                        <p>Описание :</p>
                    </td>
                    <td style="padding-right: 10px">
                        <p>Ссылка :</p>
                    </td>
                    <td>
                        <p>Опции</p>
                    </td>
                </tr>
                {slides}
            </table>
        </td>
    </tr>
</table>
<br/>