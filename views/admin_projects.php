<h1>Настройки слайдера "Наши проекты"</h1>
<div>
    <h2>{message}</h2>
</div>
<hr>
<table class="admin-table">
    <tr>
        <td valign="top" style="padding-right: 20px">
            <form action="/wp-admin/admin.php?page=our_projects" method="post" name="our_projects">
                <p><b>Введите описание:</b><br>
                <p><textarea name="description" id="" cols="30" rows="10"></textarea></p>
                <p><b>Укажите ссылку:</b><br>
                <p><input type="text" name="url" value=""></p>
                <p><b>Выберите логотип:</b><br>
                <p><img class="custom_media_image2" src="" alt="" style="width: 80px;"></p>
                <p><button class="custom_media_upload2">Загрузить</button></p>
                <p><input id="image" class="custom_media_url2" type="text" name="logo_url" value=""></p>
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
                        <p>Логотип :</p>
                    </td>
                    <td style="padding-right: 10px">
                        <p>Описание :</p>
                    </td>
                    <td style="padding-right: 10px">
                        <p>Ссылка :</p>
                    </td>
                    <td style="padding-right: 10px">
                        <p>Изображение :</p>
                    </td>
                    <td>
                        <p>Удалить</p>
                    </td>
                </tr>
                {slides}
            </table>
        </td>
    </tr>
</table>
<br/>