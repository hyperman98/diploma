<?php
class AdminProductController extends AdminBase
{
   /**
    * Action для страницы "Управление новостями"
    */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Список новостей
        $product = Fit::getPreparatsList();
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];
            $options['description'] = $_POST['description'];
            // Флаг ошибок в форме
            $errors = false;
            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Fit::createProduct($options);
                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/upload/images/products/{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управлениями товарами
                header('Location:/admin/products');
            }
        }
        // подключение кода
        require_once(ROOT . '/views/admin_products/index.php');
        return true;
    }

    public function actionUpdate($id)
       {
           // Проверка доступа
           self::checkAdmin();

           // Получаем список категорий для выпадающего списка
           // $categoriesList = Category::getCategoriesListAdmin();

           // Получаем данные о конкретном заказе
           $products = Fit::getFitById($id);

           // Обработка формы
           if (isset($_POST['submit'])) {
               // Если форма отправлена
               // Получаем данные из формы редактирования. При необходимости можно валидировать значения
               $options['name'] = $_POST['name'];
               $options['price'] = $_POST['price'];
               $options['description'] = $_POST['description'];
               // Сохраняем изменения
               if (Fit::updateProductById($id, $options)) {
                   // Если запись сохранена
                   // Проверим, загружалось ли через форму изображение
                   if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                       // Если загружалось, переместим его в нужную папке, дадим новое имя
                      move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/views/upload/images/products/{$id}.jpg");
                   }
               }
               // Перенаправляем пользователя на страницу управлениями товарами
               header("Location: /admin/products");
           }

           // Подключаем вид
           require_once(ROOT . '/views/admin_products/update.php');
           return true;
       }




    public function actionDelete($id)
    {
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена, то удаляем товар
            Fit::deleteFitById($id);

            // Перенаправляем пользователя на страницу управления новостями
            header("Location: /admin/products");

        }

        // Подлючение кода
        require_once(ROOT . '/views/admin_products/delete.php');
        return true;
    }

}
?>
