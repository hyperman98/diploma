<?php

class Category
{
      /**
       * Returns an array of services
       */
     public static function getCategoryList()
     {

        $db = Db::getConnection();

        $serviceList = array();

        $result = $db->query('SELECT id, name FROM categories '
                . 'ORDER BY id ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $serviceList[$i]['id'] = $row['id'];
            $serviceList[$i]['name'] = $row['name'];
            $i++;
        }

        return $serviceList;

     }

     public static function getCategoryByid($id)
     {
       $id = intval($id);
       if ($id) {
          $db = Db::getConnection();

          $result = $db->query('SELECT * FROM categories '
                  . 'WHERE id='. $id);

          $result->setFetchMode(PDO::FETCH_ASSOC);

          return $result->fetch();
        }

    }

    public static function createCategory($options)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO categories '
        . '(name, full_text) '
        . 'VALUES '
        . '(:name, :full_text) ';

      $result = $db->prepare($sql);
      $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
      $result->bindParam(':full_text', $options['full_text'], PDO::PARAM_STR);
      if ($result->execute()) {
          return $db->lastInsertId();
      }
      // Не получилось
      return 0;
    }

    public static function deleteCategoryById($id)
    {
        // Подключение к БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "DELETE FROM categories WHERE id = :id";

        // Получение и возврат результатов, используя подготовленные запроса
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getOrder($title,$name,$tel){
      $db = Db::getConnection();

      $sql = 'INSERT INTO orders (title, name, tel) '
              . 'VALUES (:title, :name, :tel)';
      $result = $db->prepare($sql);
      $result->bindParam(':title', $title, PDO::PARAM_STR);
      $result->bindParam(':name', $name, PDO::PARAM_STR);
      $result->bindParam(':tel', $tel, PDO::PARAM_INT);
      return $result->execute();
    }

    public static function updateCategorById($id, $options)
    {
        $db = Db::getConnection();

        $sql = "UPDATE categories
            SET
                name = :name,
                full_text = :full_text WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':full_text', $options['full_text'], PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getImage($id)
  {
      // Название изображения-пустышки
      $noImage = 'no-photo.jpg';

      // Путь к папке с товарами
      $path = '/views/upload/images/categories/';

      // Путь к изображению товара
      $pathToProductImage = $path . $id . '.jpg';

      if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage)) {
          // Если изображение для товара существует
          // Возвращаем путь изображения товара
          return $pathToProductImage;
      }

      // Возвращаем путь изображения-пустышки
      return $path . $noImage;
  }

}
