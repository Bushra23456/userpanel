<?php 
include("header.php");
$res = null;
// author
if(isset($_GET['id'])){
    $q = mysqli_real_escape_string($conn , $_GET['id']);
    $w = "select * from books 
    join category on category.id = books.catld_fk
    join authors on authors.id = books.authld_fk 
    where authld_fk = '$q'";
}
else if(isset($_GET['id'])){
    $q = mysqli_real_escape_string($conn , $_GET['id']);
    $w = "select * from books 
    join category on category.id = books.catld_fk
    join authors on authors.id = books.authld_fk 
    where authld_fk = '$q'";
}
else{
    $w = "select books .* , category.categoryName , authors.author_name from books 
    join category on category.id = books.catld_fk
    join authors on authors.id = books.authld_fk";
    

} 
$res = mysqli_query($conn, $w);
?>

 <section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <?php while($data = mysqli_fetch_assoc($res)){ ?>
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow" style="background-color: black; color:white;">
                        <img class="card-img-top rounded-0" src="../../admin/images/book/<?php echo $data['bookimage']?>" 
                    alt="course thumb" height="100px" width="100px">
                        <div class="card-body">
                            <a href="course_single.html">
                                <h4 class="card-title"><?php echo $data['bookname']?></h4>
                            </a>
                            <p class="card-text mb-4"><?php echo $data['description']?></p>
                            <p class="card-text mb-4"><?php echo $data['authld_fk']?></p>
                            <p class="card-text mb-4"><?php echo $data['catld_fk']?></p>
                            <p class="card-text mb-4"><?php echo $data['price']?></p>
                            <a href="moreinfo.php?id=<?php echo $data['bookid']?>" class="btn btn-info">Read more</a>

                        </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>
 </section>
<?php
include("footer.php");
?>

