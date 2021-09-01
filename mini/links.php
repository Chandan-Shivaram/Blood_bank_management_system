<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <?php
      if(isset($_SESSION['status']) && isset($_SESSION['status']) != ''){
            ?>
            <script type="text/javascript">
            swal({
              title: "<?php echo $_SESSION['status'] ?>",
              text: "<?php echo $_SESSION['status_des'] ?>",
              icon: "<?php echo $_SESSION['status_code'] ?>",
              button: "OK",
            });
            </script>
            <?php
        unset($_SESSION['status']);
      }
     ?>
  </body>
</html>
