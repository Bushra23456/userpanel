<?php
include("header.php");
?>
<h2 class="h2">Authors</h2>
							<section class="tiles">
								<?php
										$sql = "select * from authors";
										$result = mysqli_query($conn, $sql);
										while($rows = mysqli_fetch_assoc($result)){
											?>
											<article class="style1">
												<span class="image">
                                            
                                            <?php
                                                echo "<img src=\"../../admin/images/authors/{$rows['image']}\" height=300px width=300px>"
												
                                             ?>
										
									</span>
									<a href="products.php?=id=<?php echo $rows['id']?>">
									
										<h2><?php echo $rows['author_name']?></h2>
										
										<p><strong><?php echo $rows['dob']?></strong></p>
										<p><strong><?php echo $rows['location']?></strong></p>

										
										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
								
								<?php } ?>
							</section>
<?php
include("footer.php");

?>