<?php

class ReviewController
{
  public function actionComment()
  {
    $userId = User::checkLoged();
    $errors = false;

    if (!$userId) {
      $errors[] = 'Только авторизованные пользователи могут оставлять отзывы';

    } else {
      $errors[] = '';
    }
    // Получаем информацию о пользователе из БД
    $user = User::getUserById($userId);
      require_once(ROOT . '/views/user/comments.php');
      return true;

    }

}
