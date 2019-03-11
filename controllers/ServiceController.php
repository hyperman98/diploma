<?php

class ServiceController
{

    public function actionCategory($id)
    {

      // Получаем идентификатор пользователя из сессии
      $userId = User::checkLoged();

      // Получаем информацию о пользователе из БД
      $user = User::getUserById($userId);


          $categories = array();
          $categories = Category::getCategoryList();

          $category = Category::getCategoryByid($id);

          if (isset($_POST['submit'])) {

            $title = $category['name'];
            $name = $_POST['name'];
            $tel = $_POST['tel'];

            $out = Category::getOrder($title, $name, $tel);

          if ($out == true) {
            echo '<script> alert("Ваша услуга подтверждена, скоро с вами свяжутся")</script>';
          }
}
          require_once(ROOT . '/views/service/view.php');

          return true;
    }

}
