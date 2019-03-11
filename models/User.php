<?php
class User
{
    public static function register($name, $password, $email, $tel) {

        $db = Db::getConnection();

        $sql = 'INSERT INTO users (name, password, email, tel) '
                . 'VALUES (:name, :password, :email, :tel)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        //$password = password_hash($password, PASSWORD_DEFAULT);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':tel', $tel, PDO::PARAM_INT);

        return $result->execute();
    }

    /**
     * Редактирование данных пользователя
     * @param string $name
     * @param string $password
     */
    public static function edit($id, $name, $password)
    {
        $db = Db::getConnection();

        $sql = "UPDATE users
             SET name = :name, password = :password
             WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        //$password = password_hash($password, PASSWORD_DEFAULT);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function decode($id, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT :password FROM users WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $password = password_verify($password, PASSWORD_DEFAULT);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
    }

    /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email
     * @param string $password
     * @return mixed : integer user id or false
     */
     public static function checkUserData($email, $password)
     {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM users WHERE email = :email AND
        password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        //$password = password_verify($password, PASSWORD_DEFAULT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
           return $user['id'];
        }
          return false;
    }
     /**
      * Запоминаем пользователя
      * @param string $email
      * @param string $password
      */
     public static function auth($userId)
     {
        $_SESSION['user'] = $userId;

     }

     public static function checkLogged()
     {
        // Если сессия есть, вернем идентификатор пользователя
        if(isset($_SESSION['user'])) {
           return $_SESSION['user'];
        }
        header("Location:/user/login");

     }
     public static function checkLoged()
     {
        // Если сессия есть, вернем идентификатор пользователя
        if(isset($_SESSION['user'])) {
           return $_SESSION['user'];
        }
     }

     public static function isGuest()
     {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
     }


    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name) {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password) {
        if (strlen($password) >= 3) {
            return true;
        }
        return false;
    }

    /**
     * Проверка паролей
     */
    public static function checkRepassword($password, $repassword) {
        if ($password == $repassword) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет email
     */
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email) {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }

    public static function checkTel($tel) {
      if (!is_numeric($tel)) {
          return true;
      }
      return false;
    }
    // public static function checkTelExists($tel) {
    //
    // }
    /**
     * Returns user by id
     * @param integer $id
     */
     public static function getUserById($id)
     {
        if($id) {
           $db = Db::getConnection();
           $sql = 'SELECT * FROM users WHERE id = :id';

           $result = $db->prepare($sql);
           $result->bindParam(':id', $id, PDO::PARAM_INT);

           // Указываем, что хотим получить данные в виде массива
           $result->setFetchMode(PDO::FETCH_ASSOC);
           $result->execute();


           return $result->fetch();
        }
     }

     public static function getReviews()
     {
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, message, date_time FROM comments ORDER BY id DESC');
        $reviews = array();
        $i = 0;
        while ($row = $result->fetch()) {
          $review[$i]['id'] = $row['id'];
          $review[$i]['name'] = $row['name'];
          $review[$i]['message'] = $row['message'];
          $review[$i]['date_time'] = $row['date_time'];
          $i++;
        }
        return $review;
     }
}
