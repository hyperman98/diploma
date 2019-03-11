<?php

class Fit
{
   public static function getPreparats() {

     $db = Db::getConnection();

     $preparatsList = array();

     $result = $db->query('SELECT id, name, price, description FROM preparats '
             . 'ORDER BY id DESC LIMIT 4');

     $i = 0;
     while ($row = $result->fetch()) {
         $preparatsList[$i]['id'] = $row['id'];
         $preparatsList[$i]['name'] = $row['name'];
         $preparatsList[$i]['price'] = $row['price'];
         $preparatsList[$i]['description'] = $row['description'];
         $i++;
     }

     return $preparatsList;

   }

   public static function getPreparatsList() {

      $db = Db::getConnection();

      $prepar = array();

      $result = $db->query('SELECT * FROM preparats '
              . 'ORDER BY id');
      $i = 0;
      while ($row = $result->fetch()) {
        $prepar[$i]['id'] = $row['id'];
        $prepar[$i]['name'] = $row['name'];
        $prepar[$i]['price'] = $row['price'];
        $prepar[$i]['description'] = $row['description'];
        $i++;
      }

      return $prepar;
   }

   public static function deleteFitById($id)
   {
     $db = Db::getConnection();

     // Текст запроса к БД
     $sql = "DELETE FROM preparats WHERE id = :id";

     // Получение и возврат результатов, используя подготовленные запроса
     $result = $db->prepare($sql);
     $result->bindParam(':id', $id, PDO::PARAM_INT);
     return $result->execute();
   }


      public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-photo.jpg';

        // Путь к папке с товарами
        $path = '/views/upload/images/products/';

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

    public static function getPreparatsListByCategory($categoryId = false)
    {
        if ($categoryId) {

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT id, name, price, description FROM preparats "
                . "WHERE category_id = '$categoryId' "
                . "LIMIT 4");
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['description'] = $row['description'];
                $i++;
            }

            return $products;
        }
    }

    public static function getFitByid($id)
    {
      $id = intval($id);
      if ($id) {
         $db = Db::getConnection();

         $result = $db->query('SELECT * FROM preparats '
                 . 'WHERE id='. $id);

         $result->setFetchMode(PDO::FETCH_ASSOC);

         return $result->fetch();
       }

   }

   public static function getFitCategoryByid($id)
   {
     $id = intval($id);
     if ($id) {
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM categoriesprepar '
                . 'WHERE id='. $id);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();
      }

  }

      public static function getCategoryPreparats() {

        $db = Db::getConnection();

        $categoriesList = array();

        $result = $db->query('SELECT id, name FROM categoriesprepar '
                . 'ORDER BY id ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoriesList[$i]['id'] = $row['id'];
            $categoriesList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoriesList;

      }

      public static function getProductsByIds($idsArray)
      {
          $products = array();

          $db = Db::getConnection();

          $idsString = implode(',', $idsArray);

          $sql = "SELECT * FROM preparats WHERE id IN ($idsString)";

          $result = $db->query($sql);
          $result->setFetchMode(PDO::FETCH_ASSOC);

          $i = 0;
          while ($row = $result->fetch()) {
              $products[$i]['id'] = $row['id'];
              $products[$i]['name'] = $row['name'];
              $products[$i]['description'] = $row['description'];
              $products[$i]['price'] = $row['price'];
              $i++;
          }
          return $products;
      }

      public static function createProduct($options)
      {
          $db = Db::getConnection();

          $sql = 'INSERT INTO preparats '
          . '(name, price, description) '
          . 'VALUES '
          . '(:name, :price, :description) ';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        // Не получилось
        return 0;
      }

      public static function updateProductById($id, $options)
      {
          $db = Db::getConnection();

          $sql = "UPDATE preparats
              SET
                  name = :name,
                  price = :price,
                  description = :description WHERE id = :id";

          $result = $db->prepare($sql);
          $result->bindParam(':id', $id, PDO::PARAM_INT);
          $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
          $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
          $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
          return $result->execute();
      }
      
  }
