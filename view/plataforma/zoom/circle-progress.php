<link rel="stylesheet" type="text/css" href="resources/slick/slick-theme.css">
<script src="resources/slick/slick.js"></script>
<script>
					
$('.responsive').slick({
  dots: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  infinite: true,
  autoplay: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
					
</script>
                    
<div class="pLR20">
  <div class="responsive">
  	<?php for($hh=0; $hh<6; $hh++){ ?>
          <div class="taC">
  			
              <?php $varRandPor = rand(1,9).rand(0,9); ?>
              <div class="c100 green p<?= $varRandPor ?> mb10">
                  <span><?= $varRandPor ?>%</span>
                  <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                  </div>
              </div>
              
              <span class="t12">Matemáticas</span>

          </div>
      <?php } ?>
  </div>
</div>     
          