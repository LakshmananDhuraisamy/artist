<?php include('header.php');?>


    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Welcome to <em>Williams Paintings</em></h1>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </div>

    <div class="full-screen-portfolio" style="margin-top: 20px;" id="portfolio">
        <div class="container-fluid">
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <a href="img/big_portfolio_item_4.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>Biodiesel <em>squid</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="img/portfolio_item_4.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <a href="img/big_portfolio_item_2.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>raclette <em>taxidermy</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="img/portfolio_item_2.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <a href="img/big_portfolio_item_3.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>humblebrag <em>brunch</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="img/portfolio_item_3.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <a href="img/big_portfolio_item_1.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>Succulents <em>chambray</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="img/portfolio_item_1.png">
                        </div>
                    </div></a>
                </div>
            </div>
  
        </div>
    </div>

<?php include('footer.php');?>