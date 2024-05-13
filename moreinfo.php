<?php
include("header.php");
$ID = $_GET['id'];
$sql = "select * from `books` where bookid = $ID";
$res = mysqli_query($conn, $sql);
$d1 = mysqli_fetch_assoc($res);

?>
<h1 class="text-center"><?php echo $d1['bookname'] ?></h1>
<div id="main">
    <div class="inner">
        <div class="container_fluid">
            <div class="row">
                <div class="col-ld-6 col-md-12"  style="background-color: black; color:white;">
                    <?php
                    $qry = "select * from books where bookid = $ID";
                    $result = mysqli_query($conn, $qry);
                   while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="row">
                    <div class="col-lg-6 col-md-12">
                <img class="card-img-top rounded-0" src="../../admin/images/book/<?php echo $data['bookimage']?>" 
                    alt="course thumb" >
                    </div>
                </div>
                <div class="col-ld-6 col-md-12">
                   
                    <p><?php echo $data['description']?></p>
                    <p><?php echo $data['price']?></p>
                    <div class="col-sm-6">
                        <input type="submit" class="primary" value="add to card">
                    </div>
                    <?php } ?>
                    </div>
                 
</div>
            </div>
        </div>
    </div>
</div>