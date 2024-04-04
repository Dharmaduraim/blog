 <!DOCTYPE html>
 <html>
 <header>
  <style type="text/css">
    html,body{
  margin:0 auto;
  padding:0;
  font-family:'Poppins', sans-serif;
  background: linear-gradient(45deg, #CCFFFF , #FFCCCC)
}


header{
/*   outline:2px solid orange; */
  margin:0 auto;
  height: 85px;
  background-color: #f5b0e9;
  box-shadow:0 4px 12px 0 rgba(0,0,0,0.09);
}

nav{
/*   outline:2px solid orange; */
  margin:0 auto;
  display:flex;
  justify-content: space-between;
}

a{
  text-decoration:none;
  color:#333233;
}

nav li{
/*   outline:2px solid orange;  */
  display:flex;
  width:200px;
  height:20px;
  font-size: 17px;
}

nav ul{
 margin:0px;
 padding: 0 30px;
 position:relative;
 top: 15px;
 display:flex;
 justify-content: center;
}

span{
  margin:20px;
  padding:0 0 0 30px;
  color: white;
  font-weight:700;
  font-size: 33px;
}

nav a:hover{
  color:#3eb5f0;
}



@import url('https://fonts.googleapis.com/css?family=Merriweather|Open+Sans');

.container{
  display: flex;
  justify-content: center;
  padding: 80px;
}

.square:hover {
    -webkit-transform: translate(20px, -10px);
    -ms-transform: translate(10px, -10px);
    transform: translate(10px, -10px);
    -webkit-box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
     }


.square{
  width: 460px;
  height: 430px;
  background: white;
  border-radius: 4px;
  box-shadow: 0px 20px 50px #D9DBDF;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease; 
}

.mask{
  clip: rect(0px, 460px, 220px, 0px);
  border-radius: 4px;
  position: absolute;
}

img{
  width: 460px;
  }

.h1{
  margin: auto;
  text-align: left;
  margin-top: 240px;
  padding-left: 30px;
  
  font-family: 'Merriweather', serif;
  font-size: 24px;
}
p{
 text-align: justify; 
 padding-left: 30px;
 padding-right: 30px;
 font-family: 'Open Sans', sans-serif;
 font-size: 12px;
 color: #C8C8C8;
 line-height: 18px;
}

.button {
    background-color: #3EDD84;
    color: white;
    width: 90px;
    padding: 10px 18px;
    border-radius: 3px;
    text-align: center;
    text-decoration: none;
    display: block;
    margin-top: 20px;
    margin-left: 30px;
    margin-right: 70px;
    font-size: 12px;
    cursor: pointer;
    font-family: 'merriweather';
  </style>
<nav>
  <span>DHARMA BLOG</span>
  <span>
  <ul>
<li><a href="#">Home</a></li>
<!-- <li><a href="#">BLOG</a></li>
 --><li><a href="<?php echo base_url('usercontroller/userregister');?>">REGISTER</a></li>
<li><a href="<?php echo base_url('usercontroller/userlogin');?>">LOGIN</a></li>
</ul>
  </span>
</nav>
</header>

<body>

<?php
  $i=1;
  foreach($fullblog as $row)
  { ?>
<div class="container">
      <div class="square">
        <img src="<?php echo base_url();?>/uploads/<?php echo $row->image;?>"   class="mask">

<!--         <img src="<?php //echo base_url();?>uploads/.<?php //echo $row->image;?>"  width="30%" >
 -->     <div class="h1">Title : <?php echo  $row->title;?></p>
                  <p>Date : <?php echo  $row->date;?></p>

                <h4>content : <?php echo  $row->shortcontant;?></h4>
</div>

        
     <div><a href="<?php echo base_url('home/blog_view_full/'.$row->id);?>" target="_" class="button">Read More</a></div>

      </div>
      
      
      
      </div>

<?php 
  $i++;
  }
  ?>


      
      
      
      
    
 
 </body>
 </html>
  