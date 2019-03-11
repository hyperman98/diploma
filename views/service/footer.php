<footer>
  <script>
    $(document).ready(function() {
      $('.add-to-cart').click(function() {
          var id = $(this).attr('data-id');
          $.post("/cart/addAjax/"+id, {}, function (data) {
              $("#cart-count").html(data);
          });
          return false;
      });
    });
  </script>
  <script src="/template/js/up.js"></script>
    <p>© <?=Date('Y')?> Фитнес-центр</p>
    <!-- <p>Website Template by <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a></p> -->
    <p>Копирование материалов данного сайта без разрешения правообладателя запрещено.</p>
</footer>
</div>
<script>
Cufon.now();
</script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
  <div id="scroller"><img style="width:80px;" src="/template/images/updown.png"></div>
  <script src="/template/js/main.js"></script>
  <script src="/template/js/modernizr.js"></script>
</body>
</html>
