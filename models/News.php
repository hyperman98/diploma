<?php

class News
{

        const SHOW_BY_DEFAULT = 2;

        /**
         * Returns an array of news
         */
         public static function getNewsList() {

            $db = Db::getConnection();

            $result = $db->query('SELECT id, title, short_content FROM news ORDER BY id ASC');
            $newsList = array();
            $i = 0;
            while ($row = $result->fetch()) {
              $newsList[$i]['id'] = $row['id'];
              $newsList[$i]['title'] = $row['title'];
              $newsList[$i]['short_content'] = $row['short_content'];
              $i++;
            }
            return $newsList;
         }

         public static function getNewsById($id) {

           $id = intval($id);

      if ($id) {
          $db = Db::getConnection();

          $result = $db->query('SELECT * FROM news WHERE id=' . $id);
          $result->setFetchMode(PDO::FETCH_ASSOC);

          return $result->fetch();

         }
       }

         public static function getNewsLimit($page=1){
           $limit = self::SHOW_BY_DEFAULT;
           $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
           $db = Db::getConnection();
           $sql = 'SELECT * FROM news ORDER BY id DESC LIMIT :limit OFFSET :offset ';
           $result = $db->prepare($sql);
           $result->bindParam(':limit', $limit, PDO::PARAM_INT);
           $result->bindParam(':offset', $offset, PDO::PARAM_INT);
           $result->execute();
           $i = 0;
           $news = array();
           while ($row = $result->fetch()) {
               $news[$i]['id'] = $row['id'];
               $news[$i]['title'] = $row['title'];
               $news[$i]['short_content'] = $row['short_content'];
               $i++;
           }
           return $news;
       }

      /**
       *
       * Returns total news
       */
       public static function getCountNews()
       {
           $db = Db::getConnection();
           $sql = 'SELECT count(id) AS count FROM news';
           $result = $db->prepare($sql);
           $result->execute();
           $row = $result->fetch();
           return $row['count'];
       }

    /**
     * Удаляет новость с указанным id
     * @param integer $id  <p>id новости</p>
     * @return boolean <p>Результат выполнения</p>
     */

      public static function deleteNewsById($id)
      {
          // Подключение к БД
          $db = Db::getConnection();

          // Текст запроса к БД
          $sql = "DELETE FROM news WHERE id = :id";

          // Получение и возврат результатов, используя подготовленные запроса
          $result = $db->prepare($sql);
          $result->bindParam(':id', $id, PDO::PARAM_INT);
          return $result->execute();
      }

      public static function createNews($options)
      {
          $db = Db::getConnection();

          $sql = 'INSERT INTO news '
          . '(title, short_content) '
          . 'VALUES '
          . '(:title, :short_content) ';

        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        // Не получилось
        return 0;
      }

      public static function updateNewsById($id, $options)
      {
          $db = Db::getConnection();

          $sql = "UPDATE news
              SET
                  title = :title,
                  short_content = :short_content WHERE id = :id";

          $result = $db->prepare($sql);
          $result->bindParam(':id', $id, PDO::PARAM_INT);
          $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
          $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
          return $result->execute();
      }

      public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-photo.jpg';

        // Путь к папке с товарами
        $path = '/views/upload/images/news/';

        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

}
