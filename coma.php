<?php
$images=["img1","img2","img3","img4"];
echo "<pre>";
print_r($images); die;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Search image</h1>
    <?php
    if(!empty($images)){ 
  
      foreach($images as $img){
    ?>
    <a href=""><?php echo $img;?></a>
    <button style="background-color:red;" onclick='deleteImg("<?php echo $img;?>","<?php echo implode(",",$images);?>");'>Delete</button>
    <?php
     }
    }?>
  </body>
  <script>
function deleteImg(img,lists){
  console.log(img);
  lists=lists.split(","); 
  let index=lists.indexOf(img);
  if(index!=-1){ 
    lists.splice(index,1)
    lists=lists.toString() 
    console.log(lists);
  }
}
   </script> 
</html>
