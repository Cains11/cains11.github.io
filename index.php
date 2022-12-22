<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "include/head.php"?>
<body id="home">

<?php include "include/header.php"?>


<div id="tooplate_main">
	<div id="tooplate_content"><span class="content_tb content_top"></span><span class="content_tb content_bottom"></span>
    	<?php include "include/database.php";
			$query="select * from postingan order by id desc";
			$data=mysql_query($query);
			while($row=mysql_fetch_assoc($data)){
				$judul=$row['judul'];
				$gambar=$row['gambar'];
				$isi=$row['isi'];
				$id=$row['id'];
			
		
		
		?>
        <div class="col col_3 home_news_box">
        	<h3><?php echo $judul ?></h3>
            <img class="img_border img_nom" src="images/<?php echo $gambar ?>" alt="image" />
            <p><?php echo $isi ?> </p>
            <a href="#" class="more">Read more</a>
        </div>
            
        <?php
        if ($id%3==0){
			echo'<hr class="clear" />';
			}
			}
		?>
        
    </div> <!-- END of content -->
    <?php include "include/sidebar.php"?>
		
	<!-- END of sidebar -->
    
    <div class="clear"></div>
</div>

<?php include "include/footer.php"?>


</body>
</html>