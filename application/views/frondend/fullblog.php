<!DOCTYPE html>
<html>



<style>@import "compass/css3";




body {
  background-image: url(https://subtlepatterns.com/patterns/white_tiles.png);

  -webkit-tap-highlight-color: rgba(0,0,0,0);
  padding: 30px;
  @media (max-width: $mobile) {
    padding: 30px 0;
  }
  max-width: 1000px;
  margin: 0 auto;
}
* {
  box-sizing: border-box;
}
/* Guardian Color Theme */
$g-yellow: #F0C15D;
$g-green: #87A644;
$g-blue: #5A9A70;
$g-red: #E86946;
$g-orange: #EF9D54;
$g-light-yellow: lighten(saturate($g-yellow,30%),15%);
/* Social Site Colors */
$linkedin: #4875B4;
$twitter: #33CCFF;

.logo {
  position: relative;
  width: 300px;
  margin: 0 auto;
  font-family: yellowtail, serif;
  font-size: 2.2em;
  background: #555;
  text-align:center;
  color: #f5f5f5;
  padding: 5px;
  cursor: default;
  box-shadow:-2px -2px 0 $g-yellow, -4px -4px 0 $g-green, -6px -6px 0 $g-blue, 2px 2px 0 $g-red, 4px 4px 0 $g-orange, 6px 6px 0 
    
  
  
  
}

.section {
  width: 100%;   
  margin: -30px auto 0 auto;
  border-top: 2px solid #555;
  border-bottom: 4px solid #888; 
  
  
  .content {
    @include transition(font-size .2s);
    padding: 30px;
    background: #fff;
    height: 100%;
    width: 100%;
    min-height: 200px;
    @media (max-width: $mobile) {
      padding: 30px 10px;
    }
    h1 {
      font-family: alegreya-sc, serif;
      font-size: 2.3em;
      border-bottom: 2px solid #eee;
      margin-bottom: 10px;
    }
    p {
      font-size: 1.3em;
      line-height:1.5em;
      font-family: pt-serif, serif;
    }
  }
}






   
    
    
  }
}
</style>
<body>

<div class="logo">
  <div class="logo-text">
</div>
       
<section class="section">
  <div class="content">
  	 <img src="<?php echo base_url();?>/uploads/<?php echo $blog->image;?>"  width="20%">

    <p><b>
     Title :<?php echo  $blog->title;?> </b>
    </p>
    <p>   Description :   <?php echo  $blog->longcontant;?> </b>
    	    <p>  Post Date :    <?php echo  $blog->date;?> </b>

</p>




  </div>
</section>
  
</body>
</html>