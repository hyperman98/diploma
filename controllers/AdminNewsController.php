<?php
class AdminNewsController extends AdminBase
{
   /**
    * Action для страницы "Управление новостями"
    */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Список новостей
        $newsList = News::getNewsList();
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['short_content'] = $_POST['short_content'];
            // Флаг ошибок в форме
            $errors = false;
            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['title']) || empty($options['short_content'])) {
                $errors[] = 'Заполните поля';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = News::createNews($options);
                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/upload/images/news/{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управлениями товарами
                header('Location:/admin/news');
            }
        }
        // подключение кода
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

    public function actionUpdate($id)
       {
           // Проверка доступа
           self::checkAdmin();

           // Получаем список категорий для выпадающего списка
           // $categoriesList = Category::getCategoriesListAdmin();

           // Получаем данные о конкретном заказе
           $news = News::getNewsById($id);

           // Обработка формы
           if (isset($_POST['submit'])) {
               // Если форма отправлена
               // Получаем данные из формы редактирования. При необходимости можно валидировать значения
               $options['title'] = $_POST['title'];
               $options['short_content'] = $_POST['short_content'];
               // Сохраняем изменения
               if (News::updateNewsById($id, $options)) {
                   // Если запись сохранена
                   // Проверим, загружалось ли через форму изображение
                   if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                       // Если загружалось, переместим его в нужную папке, дадим новое имя
                      move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/upload/images/news/{$id}.jpg");
                   }
               }
               // Перенаправляем пользователя на страницу управлениями товарами
               header("Location: /admin/news");
           }

           // Подключаем вид
           require_once(ROOT . '/views/admin_news/update.php');
           return true;
       }




    public function actionDelete($id)
    {
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена, то удаляем товар
            News::deleteNewsById($id);

            // Перенаправляем пользователя на страницу управления новостями
            header("Location: /admin/news");

        }

        // Подлючение кода
        require_once(ROOT . '/views/admin_news/delete.php');
        return true;
    }

}
?>
