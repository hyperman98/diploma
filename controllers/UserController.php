<?php

class UserController
{

    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $repassword = '';
        $tel = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $tel = $_POST['tel'];
            $repassword = $_POST['repassword'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (!User::checkRepassword($password, $repassword)) {
                $errors[] = 'Пароли не совпадают';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if (User::checkTel($tel)) {
                $errors[] = 'Телефон должен состоять только из цифр';
            }

            if ($errors == false) {
                $result = User::register($name, $password, $email, $tel);
            }

        }

        require_once(ROOT . '/views/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Получаем информацию о пользователе из БД

            $errors = false;

            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                // Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /cabinet/");
            }

        }

        require_once(ROOT . '/views/user/auth.php');

        return true;
    }

    /**
     * Удаляем данные о пользователе из сессии
     */

    public function actionPol()
    {
        require_once(ROOT . '/views/user/confidential_policy.php');
        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }
}
