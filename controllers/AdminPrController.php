<?php
class AdminPrController extends AdminBase
{
  public function actionIndex()
  {
      // Проверка доступа
      self::checkAdmin();

      // Список новостей
      $orderList = Order::getPrOrders();

      // $productQuantity = json_decode($orderList['products'], true);
      // $productsIds = array_keys($productQuantity);
      //
      // $products = Fit::getProductsByIds($productsIds);

      if (isset($_POST['submit'])) {
          // Если форма отправлена
          // Получаем данные из формы
          $options['name'] = $_POST['name'];
          $options['full_text'] = $_POST['full_text'];
          // Флаг ошибок в форме
          $errors = false;
          // При необходимости можно валидировать значения нужным образом
          if (!isset($options['name']) || empty($options['name'])) {
              $errors[] = 'Заполните поля';
          }
          if ($errors == false) {
              // Если ошибок нет
              // Добавляем новый товар
              $id = Category::createCategory($options);
              // Если запись добавлена
              // if ($id) {
              //     // Проверим, загружалось ли через форму изображение
              //     if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
              //         // Если загружалось, переместим его в нужную папке, дадим новое имя
              //         move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
              //     }
              // };
              // Перенаправляем пользователя на страницу управлениями товарами
              header('Location:/admin/prorders');
          }
      }
      // подключение кода
      require_once(ROOT . '/views/admin_prorders/index.php');
      return true;
  }

  public function actionView($id)
  {
     self::checkAdmin();


     $order = Order::getPrOrderById($id);

     $productQuantity = json_decode($order['products'], true);

     $productsIds = array_keys($productQuantity);

     $products = Fit::getProductsByIds($productsIds);

     if (isset($_POST['submit'])) {

      $status = $_POST['status'];

      Order::updateOrderById($id, $status);
    }

     require_once(ROOT . '/views/admin_prorders/full.php');
     return true;
  }

  public function actionDelete($id)
  {
      self::checkAdmin();

      // Обработка формы
      if (isset($_POST['submit'])) {
          // Если форма отправлена, то удаляем товар
          Order::deletePrOrderById($id);

          // Перенаправляем пользователя на страницу управления новостями
          header("Location: /admin/prorders");

      }

      // Подлючение кода
      require_once(ROOT . '/views/admin_prorders/delete.php');
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
            $userPhone = $_POST['tel'];
            $status = $_POST['status'];
            $date = $_POST['date'];
            Order::updateOrderById($id, $userName, $userPhone, $date, $status);
            header("Location:/admin/prorders");
          }
          // Перенаправляем пользователя на страницу управлениями товарами
          require_once(ROOT . '/views/admin_prorders/update.php');
          return true;
      }
}
