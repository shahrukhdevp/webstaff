<?php
$limit=5;
$start=0;
$totalbtn=0;
$totalrec=50;
$limitbtn=3;
$page=1;
$pagepos=1;
$_REQUEST['ID']="";
if(!isset($_GET['ID'])){ $_GET['ID']="";} 
$t=trim($_GET['ID']);
echo $t;
echo "<br>";
if(isset($_POST['page']) && !empty($_POST['page'])){
    echo $_POST['page'];
    $page=$_POST['page'];
    $start=$_POST['page']-1; 
    $pagepos= $page;
}elseif(isset($_POST['next']) && !empty($_POST['next']) ){
    echo $_POST['next'];
    $page=$_POST['next'];
    $start=$_POST['next']-1; 

}
$totalbtn=ceil($totalrec/$limit)>0 ? $totalrec/$limit : 0 ; 
echo $totalbtn;     
if($totalbtn==0){
    $start=0;
}
//echo $totalbtn;
$paginationinfo=[];
// $paginaion['totalrec']=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <style>
        button{
            background-color:black;
            color:white;
            padding:12px;
        }

    </style>

</head>
<body>
    <h2>Pagination</h2>
    <form action="" method="POST">
     <?php 
    
// echo "val:".ceil(10xa/10);
// echo ": V";
//echo $pagepos."<br>";
if($totalbtn>1 ){
 
    if($page>1){
        echo "<button name='page' type='submit' value=".($page-1).">PREVIOUS</button>";
     }
    for($i=1;$i<=$totalbtn; $i++){ 
        ?>
         <?php
       
             if($i>$limitbtn) {   ?>
                <!-- <button name="next" type="submit" value="<?php //echo $i;?>">NEXT</button> -->
        <?php break;}
        ?>
        <button name="page" type="submit" value="<?php echo $i;?>"><?php echo $i;?></button>
    <?php }?>
    <?php if($page>=1 && $page<$totalbtn){
            echo "<button name='page' type='submit' value=$totalbtn>Last</button>";

              echo "<button name='page' type='submit' value=".($page+1).">NEXT</button>";
     }
    //  elseif($page==$totalbtn){
    //    echo "<button name='page' type='submit' value=".($page-1)."><</button>";
    // }
     ?>
<?php } ?>
    </form>
</body>
</html>