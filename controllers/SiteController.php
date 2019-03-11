<?php

class SiteController
{

    public function actionIndex($page = 1)
    {

          $categories = array();
          $categories = Category::getCategoryList();

          $latestNews = News::getNewsLimit($page);
          $total = News::getCountNews();
          $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');
          //$pagenav = new SimPageNav();

          require_once(ROOT . '/views/site/index.php');

          return true;
    }

    public function actionFitobar() {
      $products = array();
      $products = Fit::getPreparats();

      $categories = array();
      $categories = Fit::getCategoryPreparats();

      require_once(ROOT . '/views/site/fitobar.php');
      return true;

    }

    public function actionBar($categoryId) {
      $categories = array();
      $categories = Fit::getCategoryPreparats();

      $fit = array();
      $fit = Fit::getFitCategoryByid($categoryId);

      $elements = array();
      $elements = Fit::getPreparatsListByCategory($categoryId);

      require_once(ROOT . '/views/service/bar.php');
      return true;
    }

    public function actionTime() {
        require_once(ROOT . '/views/time/timetable.php');
        return true;
    }
    public function actionAbout() {
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

    public function actionGallery() {

      require_once(ROOT . '/views/site/gallery.php');
      return true;
    }
    public function actionContact() {
       $userId = User::checkLoged();
       $user = User::getUserById($userId);
       $userEmail = false;
       $userText = false;
       $result = false;

       if(isset($_POST['submit'])) {
         $userEmail = $_POST['userEmail'];
         $userText = $_POST['userText'];
         $errors = false;


         // Валидация полей
         if (!User::checkEmail($userEmail)) {
           $errors[] = 'Неправильный email';
         }

         if ($errors == false) {
            $adminEmail = 'xhuman80@gmail.com';
            $message = "Текст: {$userText}. От {$userEmail}";
            $subject = 'Тема сообщения';
            $result = mail($adminEmail, $subject, $message);
            $result = true;
            if($result){
            echo "<script> alert('Сообщение отправлено! Скоро мы с вами свяжемся.') </script>";
          }

         }

       }

       require_once(ROOT . '/views/site/contacts.php');

       return true;

     }

}
