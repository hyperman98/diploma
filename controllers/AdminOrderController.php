<?php

class AdminOrderController extends AdminBase
{
  public function actionIndex()
  {
      // Проверка доступа
      self::checkAdmin();

      // Список новостей
      $orderList = Order::getOrderList();
      // if (isset($_POST['submit'])) {
      //     // Если форма отправлена
      //     // Получаем данные из формы
      //     $options['name'] = $_POST['name'];
      //     $options['full_text'] = $_POST['full_text'];
      //     // Флаг ошибок в форме
      //     $errors = false;
      //     // При необходимости можно валидировать значения нужным образом
      //     if (!isset($options['name']) || empty($options['name'])) {
      //         $errors[] = 'Заполните поля';
      //     }
      //     if ($errors == false) {
      //         // Если ошибок нет
      //         // Добавляем новый товар
      //         $id = Category::createCategory($options);
      //         // Если запись добавлена
      //         // if ($id) {
      //         //     // Проверим, загружалось ли через форму изображение
      //         //     if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
      //         //         // Если загружалось, переместим его в нужную папке, дадим новое имя
      //         //         move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
      //         //     }
      //         // };
      //         // Перенаправляем пользователя на страницу управлениями товарами
      //         header('Location:/admin/orders');
      //     }
      // }
      // подключение кода
      require_once(ROOT . '/views/admin_orders/index.php');
      return true;
  }

  public function actionDelete($id)
  {
      self::checkAdmin();

      // Обработка формы
      if (isset($_POST['submit'])) {
          // Если форма отправлена, то удаляем товар
          Order::deleteOrderById($id);

          // Перенаправляем пользователя на страницу управления новостями
          header("Location: /admin/category");

      }

      // Подлючение кода
      require_once(ROOT . '/views/admin_orders/delete.php');
      return true;
  }

  public function actionUpdate($id)
  {
      // Проверка доступа
      self::checkAdmin();

      $order = Order::getPrOrderById($id);
      // Обработка формы
      if (isset($_POST['submit'])) {
          // Если форма отправлена
          // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $userName = $_POST['name'];
            $userTel = $_POST['tel'];
            $title = $_POST['title'];
            $status = $_POST['status'];
            Order::updateSerOrderById($id, $userName, $userTel, $title, $status);
            header("Location:/admin/orders");
          }
          // Перенаправляем пользователя на страницу управлениями товарами
          require_once(ROOT . '/views/admin_orders/update.php');
          return true;
      }
}
