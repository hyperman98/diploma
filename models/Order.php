<?php

  class Order
  {
        public static function getOrderList() {

          $db = Db::getConnection();

          $result = $db->query('SELECT id, title, name, tel, status FROM orders ORDER BY id');
          $orderList = array();
          $i = 0;
          while ($row = $result->fetch()) {
              $orderList[$i]['id'] = $row['id'];
              $orderList[$i]['title'] = $row['title'];
              $orderList[$i]['name'] = $row['name'];
              $orderList[$i]['tel'] = $row['tel'];
              $orderList[$i]['status'] = $row['status'];
              $i++;
          }

          return $orderList;
        }

        public static function save($userName, $userPhone, $userId, $products)
        {
            $products = json_encode($products);

            $db = Db::getConnection();

            $sql = 'INSERT INTO product_order (user_name, user_phone, user_id, products) '
                    . 'VALUES (:user_name, :user_phone, :user_id, :products)';

            $result = $db->prepare($sql);
            $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
            $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
            $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
            $result->bindParam(':products', $products, PDO::PARAM_STR);

            return $result->execute();

        }

        public static function getOrderById($id) {

               $db = Db::getConnection();
               $sql = 'SELECT * FROM orders WHERE id = :id';
               $result = $db->prepare($sql);

               $result->bindParam(':id', $id, PDO::PARAM_INT);
               $result->setFetchMode(PDO::FETCH_ASSOC);

               $result->execute();

               return $result->fetch();

      }

      public static function getPrOrderById($id)
      {

          $db = Db::getConnection();

          $sql = "SELECT * FROM product_order WHERE id = :id";

          $result = $db->prepare($sql);
          $result->bindParam(':id', $id, PDO::PARAM_INT);

          $result->setFetchMode(PDO::FETCH_ASSOC);

          $result->execute();

          return $result->fetch();
      }

      public static function deleteOrderById($id)
      {
          // Подключение к БД
          $db = Db::getConnection();

          // Текст запроса к БД
          $sql = "DELETE FROM orders WHERE id = :id";

          // Получение и возврат результатов, используя подготовленные запроса
          $result = $db->prepare($sql);
          $result->bindParam(':id', $id, PDO::PARAM_INT);
          return $result->execute();
      }

      public static function deletePrOrderById($id)
      {
          // Подключение к БД
          $db = Db::getConnection();

          // Текст запроса к БД
          $sql = "DELETE FROM product_order WHERE id = :id";

          // Получение и возврат результатов, используя подготовленные запроса
          $result = $db->prepare($sql);
          $result->bindParam(':id', $id, PDO::PARAM_INT);
          return $result->execute();
      }

      public static function updateOrderById($id, $userName, $userPhone, $date, $status)
     {
         // Соединение с БД
         $db = Db::getConnection();

         // Текст запроса к БД
         $sql = "UPDATE product_order
             SET
                 user_name = :user_name,
                 user_phone = :user_phone,
                 date = :date,
                 status = :status
             WHERE id = :id";

         // Получение и возврат результатов. Используется подготовленный запрос
         $result = $db->prepare($sql);
         $result->bindParam(':id', $id, PDO::PARAM_INT);
         $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
         $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
         $result->bindParam(':date', $date, PDO::PARAM_STR);
         $result->bindParam(':status', $status, PDO::PARAM_INT);
         return $result->execute();
     }

  public static function updateSerOrderById($id, $userName, $userTel, $title, $status)
{
  // Соединение с БД
  $db = Db::getConnection();

          // Текст запроса к БД
          $sql = "UPDATE orders
              SET
                  name = :name,
                  title = :title,
                  tel = :tel,
                  status = :status
              WHERE id = :id";

          // Получение и возврат результатов. Используется подготовленный запрос
          $result = $db->prepare($sql);
          $result->bindParam(':id', $id, PDO::PARAM_INT);
          $result->bindParam(':name', $userName, PDO::PARAM_STR);
          $result->bindParam(':tel', $userTel, PDO::PARAM_STR);
          $result->bindParam(':title', $title, PDO::PARAM_STR);
          $result->bindParam(':status', $status, PDO::PARAM_INT);
          return $result->execute();
}

      public static function getStatusText($status)
      {
          switch($status) {

            case '1':
                return 'Новая заказ';
                break;
            case '2':
                return 'В обработке';
                break;
            case '3':
                return 'Закрыт';
                break;
          }
      }

      public static function getStatusSerText($status)
      {
          switch($status) {

            case '1':
                return 'Новый заказ услуги';
                break;
            case '2':
                return 'Выписан абонемент';
                break;
            case '3':
                return 'Закончен';
                break;
          }
      }

      public static function getPrOrders()
      {
          $db = Db::getConnection();
          $result = $db->query('SELECT id, user_name, user_phone, user_id, products, date, user_phone, status FROM product_order ORDER BY id');
          $ordersList = array();
          $i = 0;
          while ($row = $result->fetch()) {
              $ordersList[$i]['id'] = $row['id'];
              $ordersList[$i]['user_name'] = $row['user_name'];
              $ordersList[$i]['user_id'] = $row['user_id'];
              $ordersList[$i]['user_phone'] = $row['user_phone'];
              $ordersList[$i]['date'] = $row['date'];
              $ordersList[$i]['status'] = $row['status'];
              //$ordersList[$i]['status'] = $row['status'];
              $i++;
          }
          return $ordersList;
      }

  }
