<?php
include("header.php");
?>
	<h2 class="h2">Category Availabale</h2>

<!-- Products -->
<section class="tiles">
    <?php
            $sql = "select * from category";
            $result = mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($result)){
                ?>
                <article class="style1">
                    <span class="image">
                
                <?php
                    echo "<img src=\"../../admin/images/category/{$rows['categoryImage']}\" height=300px width=300px>"
                    
                 ?>
            
        </span>
        <a href="products.php?=id=<?php echo $rows['id']?>">
       
            <h2><?php echo $rows['categoryName']?></h2>
            
            <p><del>$19.00</del> <strong>$19.00</strong></p>
            
            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
        </a>
    </article>
    
    <?php } ?>
</section>

<?php
include("footer.php");

?>