<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
  </head>
  <body>
      <h1>WELCOME</h1>
      <div class="container">
        <div class="media border-bottom py-3">
        <a href="http://carriers.cdlapps.com//uploads/nature1679987431.jpg" download
           class="avatar avatar-sm mr-3">jj

        </a>
        <?php

        $file = fopen("http://localhost/php_lessions/images/4.png","w");
        $line = file_get_contents("https://apply.driverreachapp.com/attached_documents/6472109?v=thumb");

          file_put_contents("http://localhost/php_lessions/images/4.png",$line);
        if($file){
          die("yes12");
              $line ="";
                $line = file_get_contents("https://apply.driverreachapp.com/attached_documents/6472109?v=thumb");
                // $text = "Hello world\n";
                fwrite($file, $line);
              //  file_put_contents("images/test1.jpg",$line);
        }else{
          echo "no";
        }
        // fclose($file);
        ?>

      </div>
  </body>
</html>
