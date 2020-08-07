<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <form method="post">
            <p><input type="text" name="name" /></p>
            <p><input type="textbox" name="review" /></p>
            <p><input type="submit" value="Отправить" /></p>
        </form>

		<form enctype="multipart/form-data" method="POST">
			<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
			<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
			<!-- Название элемента input определяет имя в массиве $_FILES -->
			Отправить этот файл: <input name="userfile" type="file" />
			<input type="submit" value="Send File" />
		</form>	

        <div class="feedback_response">
            {{RESPONSE}}
        </div>

        <div class="feedback_feed">
            {{FEEDBACKFEED}}
        </div>
    </body>
</html>
