<h1>Настройки блока "Нам доверяют" </h1>
<div>
    <h2>{message}</h2>
</div>
<hr>
<table class="admin-table">
    <tr>
        <td valign="top" style="padding-right: 20px">
            <form action="/wp-admin/admin.php?page=trust_us" method="post" name="trust_us">
                <p><b>Укажите ссылку:</b><br>
                <p><input type="text" name="url" value=""></p>
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
                <caption>Существующие блоки</caption>
                <tr>
                    <td style="padding-right: 10px">
                        <p>Изображение :</p>
                    </td>
                    <td style="padding-right: 10px">
                        <p>Ссылка :</p>
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