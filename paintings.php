<?php include('header.php');?>

    <div class="more-about-us">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="content">
                    <h2>Paintings</h2>
                    <span>William</span>
                    <p>
Most of the paintings are oil on canvas or wood panel, and they're mostly around the $600 mark, depending on how much I like the picture and how much demand I get for it. Please get in touch if you have any questions at all. <br>
<br>
Also please note, it you like a picture and cannot afford to buy it for the full 600 I can also do framed prints for $40 each. Thank you...!<br>

<br>

</p> 

                </div>
            </div>
        </div>
    </div>

 
      <div class="full-screen-portfolio more-about-us" style="margin-bottom: 40px;" id="portfolio">
        <div class="container">
                    <h2 style="color:#fff">My Paintings</h2>
         <?php 
         if(isset($_GET['page']))
         {
             $j=$_GET['page']*12;
         }
         else
         {
             $j=1;
         }  
                 
         $k=$j+12; 
         for ($i=$j; $i < $k; $i++) {  ?>   
        <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <a href="img/paintings/<?php echo $i; ?>.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="image" style="margin-bottom: 10px;" >
                            <img src="img/paintings/<?php echo $i; ?>.jpg" style="height: 300px; width: 100%;" alt="">
                        </div>
                    </div></a>
                </div>
        </div>
         <?php  } ?>
         <?php if(isset($_GET['page'])){  ?>
        <a href="paintings.php" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 40px;">Reset</a>
        <a href="paintings.php?page=<?php echo (isset($_GET['page']) && $_GET['page']>1 ? $_GET['page'] - 1 : 1); ?>" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 40px;">Previous</a>
            <?php } ?> 
            <a href="paintings.php?page=<?php echo (isset($_GET['page']) ? $_GET['page'] + 1 : 2); ?>" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 40px;">Load More</a>
    

        </div>
    </div> 
 <?php include('footer.php');?>