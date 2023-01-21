<!DOCTYPE html>
<html lang="en">
<head>
  <title>Black_theme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <!--links-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
	<link rel="stylesheet" href="https://cdn3.proket.in/proket_theme.css">
  
  
  <style>
 
  
  
  .logo{
	  width:40%;
  }
.list li {
  cursor: pointer;
  position: relative;
  margin: 0 1.4em;
  padding: 3px;
  transition: all 0.2s;
  transition-delay: 0.2s;
}
.list li::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px; 
  background-color: white;
  transition: all  0.2s;
}
.list li:hover {
  background-color: #ccc;
 color:#fff;
  
}
.list li:hover::before {
  bottom: 56px;
  left: 0;
  background-color:#ccc;
  
  
}
.pop-form{
	border-radius:25px; margin-top:100px;
}
 
#mynavbar{
	 margin-left:300px;
}
 .tab-only{
		 margin-left:90px;
		
	}
 
 .phone-only{
	 display:none;
 }
 
 .img-slide{
	 max-width:800px;border-radius:20px;
 }

.gal-img{
	width:100%;height:350px;border-radius:20px;
}
.img1{
	width:100%;height:100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
border-radius:10px;
}
.img2{
	width:100%;border-radius:0px 20px 0px 20px;
}
.pricing-box{
	border:10px solid #ccc;padding:20px;margin:15px;border-radius:10px;
}
 .btn1{
	 color:white;
	 border:2px solid white;
	 border-radius:30px;
	 width:200px;
	 margin:20px;
 }
 .btn1:hover{
	 color:white;
	  border:2px solid white;
 }
 .btn2{
	 color:white;
	 border:2px solid white;
	 border-radius:30px;
	 width:100%;
	
	
 }
 .box{
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }

 .btn2:hover{
	 color:white;
	  border:2px solid white;
 }
 .text2{
	 margin-left:30px;
 }
 .loc-img{
				width:30%;
			}
 
 .mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}

.mySlides1 {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}


 @media only screen and (max-width: 600px){
 .phone-only{
	 display:block;
	 
 }
 
 

 }
  @media only screen and (max-width: 600px){
	   .tab-only{
		 display:none;
	}

   ul li::before {
   display:none;
   }
 .banner1{
		margin-top:160px;
	}
	 .bannerform{
	 display:none;
 }
  
#mynavbar{
	 margin-left:0px;
}
	
  }
 
 @media screen and (max-width: 360px){
	 
	 
	 .navbar-toggler{
		 z-index:20;top:50px;
	 }
	 
	
	.tab-only{
		 display:none;
	}
	.banner1{
		font-size:28px;
	}
	
 .bannerform{
	 display:none;
 }
 #mynavbar{
	 margin-left:0px;
}
	
 }
  
  </style>
  
  
</head>
<body>

    <!--navbar--->
<nav class="navbar navbar-expand-sm navbar-dark block_color_1 fixed-top">
  <div class="container-fluid">
  
   <a class="navbar-brand" href="#">
      
	  <img src="http://sbrminarabangalore.com/assets/developer-logo.png " class="logo">
    </a>
	
        
       
      
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
	
    <div class="collapse navbar-collapse " id="mynavbar">
      <ul class="navbar-nav me-auto list">
        <li class="nav-item ">
          <a class="nav-link text_white" href="#home">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text_white" href="#feature">Feature</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text_white" href="#about">About </a>
        </li>
		
		<li class="nav-item ">
          <a class="nav-link text_white" href="#pricing">Pricing</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link text_white " href="#gallery">Gallery</a>
        </li>
		<li class="nav-item">
          <a class="nav-link text_white" href="contact">Contact</a>
        </li>
		
      </ul>
     
        
     
            
      
    </div>
	
	
  </div>
  
</nav>


<div id="demo" class="carousel slide" data-bs-ride="carousel" id="home">

 
 
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://themestarz.net/html/propper/assets/img/slide-04.jpg" alt="Los Angeles" class="d-block" style="width:100%;height:650px">
     <div class="carousel-caption">
         <div class="container">
         <div class="row">
		<div class="col-sm-5 p-0 mb-5 banner1 text_white" >
                     <div  class="text_size_1 text_900" >New place for new living.</div>
                                <p class="width-70 text_size_2 ">
                                    Nam in sodales massa. Donec at ullamcorper diam. Pellentesque habitant morbi tristique
                                    senectus et netus et malesuada fames ac turpis egestas.
                                </p>
								
								<div class="mt-3">
								
                               <button type="button" class="btn btn-dark btn-lg p-2 mb-5 box" style="width:250px"  data-bs-toggle="modal" data-bs-target="#exampleModal">BOOK NOW</button>
							   </div>
                 </div>
				
				
							
    </div>
	</div>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="http://themestarz.net/html/propper/assets/img/gallery-big-02.jpg" alt="Chicago" class="d-block" style="width:100%;
	  height:650px">
      <div class="carousel-caption">
        <div class="container ">
         <div class="row">
			
                <div class="col-sm-4 p-0 mb-5 banner1" >
                     <div class="text_size_1 text_900">New place for new living.</div>
                                <p class="width-70 text_size_2">
                                    Nam in sodales massa. Donec at ullamcorper diam. Pellentesque habitant morbi tristique
                                    senectus et netus et malesuada fames ac turpis egestas.
                                </p>
								
								<div class="mt-3">
								
                               <button type="button" class="btn btn-dark btn-lg p-2 mb-5 box" style="width:250px"  data-bs-toggle="modal" data-bs-target="#exampleModal">BOOK NOW</button>
							   </div>
                 </div>
				<div class="col-sm-3"></div>
				
							
				
							
    </div>
	</div>
      </div> 
    </div>
    
  </div>
  
 
</div>

	
 
  <section style="background-color:black;padding:50px; " id="feature">
  <div class="container-fluid">
  <div class="row">
  
  <span class="text_white text_size_3 text_600">Features</span>
  <div class="col-sm-3 p-2">
 
  
  <div class="card block_color_1" style="width:100%">
    <img class="card-img-top box" src="http://themestarz.net/html/propper/assets/img/feature-image-01.jpg" alt="Card image" style="width:100%;">
    <div class="card-body">
      <span class="card-title text_white  text_size_3 text_600">Modern & Safe Living</span>
      <p class="card-text text_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac ornare felis. Nam velit neque, blandit id placerat eu,</p>
    
    </div>
  </div>
   
  </div>
  <div class="col-sm-3 p-2">
 
  
  <div class="card block_color_1" style="width:100%">
    <img class="card-img-top box" src="http://themestarz.net/html/propper/assets/img/feature-image-02.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <span class="card-title text_white text_size_3 text_600">Peaceful Location</span>
      <p class="card-text text_grey">Mauris ac ornare felis. Nam velit neque,blandit id 
	  placerat eu, venenatis at purus. Nunc maximus ultrices lacus </p>
    
    </div>
  </div>
   
  </div>
  <div class="col-sm-3 p-2">
 
  
  <div class="card block_color_1" style="width:100%">
    <img class="card-img-top box" src="http://themestarz.net/html/propper/assets/img/feature-image-03.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <span class="card-title text_white text_size_3 text_600">Great Starting Prices</span>
      <p class="card-text text_grey">Nam velit neque, blandit id placerat eu, venenatis at purus. Nunc  eu fringilla. Mauris ac ornare</p>
    
    </div>
  </div>
  </div>
  <div class="col-sm-3 p-2">
 
  
  <div class="card block_color_1" style="width:100%">
    <img class="card-img-top box" src="http://themestarz.net/html/propper/assets/img/feature-image-02.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <span class="card-title text_white text_size_3 text_600">Modern & Safe Living</span>
      <p class="card-text text_grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac ornare felis. Nam velit neque, blandit id placerat eu,</p>
    
    </div>
  </div>
  
  </div>
   
  </div>
  </div>
  </section>
  

                    
 
 
 
<section id="about" >
<div class="container-fluid p-3">
<div class="row">


 <div class="col-sm-1"></div>


 <div class="col-sm-4  p-5 block_color_1 p-3 bannerform"  style=";border-radius:20px;">
				<form class=" form-has-background-padding " id="form-hero" >
                                    <h5 style="color:white;text-align:center">Subscribe to get the latest news about the project</h5>
                                    <div class="form-group m-3">
                                        <input type="text" class="form-control p-2" id="form-hero-name" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="email" class="form-control p-2" id="form-hero-email" name="email" placeholder="Your Phone Number">
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="text" class="form-control p-2" id="form-hero-phone" name="phone" placeholder="Your Mail">
                                    </div>
                                    <button type="submit" class="btn btn2  "  data-bs-toggle="modal" data-bs-target="#exampleModal" >Request A Call &nbsp; <i class="fa fa-arrow-right" style="color:white "></i></button>
                                </form>

				 </div>





<div class="col-sm-1"></div>






 <div class="col-sm-5   mt-5  ">
 <span class="text_black text_size_4 text_600">High Quality Materials</span>
 <p>Proin orci nisl, posuere viverra erat ut, pellentesque interdum urna. Curabitur eu risus convallis, auctor augue id, pharetra neque. Morbi pretium neque ac varius imperdiet. Aliquam sed sapien eget massa hendrerit aliquet. Integer auctor vel ligula eget faucibus</p>
 
 <div class="row">
<div class="col">
<span class="text_grey pt-2 text_600 text_size_7">SIZE</span><br>
<span class="text_black pt-2 text_600 text_size_8">920-945 Sq.Ft.</span>
</div>
<div class="col">
<span class="text_grey pt-2 text_600 text_size_7">UNITS</span><br>
<span class="text_black pt-2 text_600 text_size_8">2, 2.5, 3, 4,</span>
</div>
<div class="col">
<span class="text_grey pt-2 text_600 text_size_7">position Date</span><br>
<span class="text_black pt-2 text_600 text_size_8">2025</span>
</div>

</div>
 </div>
 <div class="col-sm-1"></div>
  </div>
</div>
</div>








</section>

<div class="container-fluid p-5  mb-5">
<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-5   mt-5  ">

<span class="text_black text_size_4 text_600">Project Highlights</span>

<p>Godrej Ananda promises you a future of connectivity with Proposed Peripheral Ring Road, Intermediate Ring Road and Satellite Ring Road.
</p>
<div class="row">
<div class="col">
<span class="text_black text_size_3 text_600">Amenities</span><br>
<span class="text_grey pt-2 text_600">World class facilities and nature inspired amenities.</span>
</div>
<div class="col">
<span class="text_black text_size_3 text_600">Naturally Beautiful</span><br>
<span class="text_grey pt-2 text_600">2 Acres of greens around the project.</span>
</div>


</div>
<div class="row ">
<div class="col">
<span class="text_black text_size_3 text_600">Clubhouse</span><br>
<span class="text_grey pt-2 text_600">Lavish Clubhouse with rooftop garden , dance & zumba studio , AV room etc.</span>
</div>
<div class="col">
<span class="text_black text_size_3 text_600">Easy Connectivity</span><br>
<span class="text_grey pt-2 text_600">Located on state highway 104 in 3000 Acre Karnatka Industrial Area 
Development Board Park (KIADB) Park</span>
</div>


</div>

</div>
<div class="col-sm-5">
<img class="img1" src="http://themestarz.net/html/propper/assets/img/gallery-01.jpg" >
</div>
<div class="col-sm-1"></div>
</div>

</div>




<div class="container-fluid p-2 mt-4" id="pricing">
<div class="row">

<div class="col-sm-1"></div>


<div class="col-sm-10">
<div class="container-fluid">
<div class="row">
<div style="text-align:start">
 <span class="text_black text_size_4 text_600">Pricing</span>
</div>
<div class="col box pricing-box" >
<span class="text_size_3 text_600">2.5 Room Apartment</span>
<p>$99,000</p>
<span class="text_size_3 text_600">$79,000</span>
 <table class="table">
    <thead>
      <tr>
        <td>83m2</td>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>26m2</td>
      
      </tr>
      <tr>
        <td>3</td>
       
      </tr>
      <tr>
        <td>12</td>
       
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-outline-secondary btn-sm">Apartment Deatils</button>
</div>
<div class="col box pricing-box" >
<span class="text_size_3 text_600">2 Room Apartment</span>
<p>$99,000</p>
<span class="text_size_3 text_600">$79,000</span>
 <table class="table">
    <thead>
      <tr>
        <td>83m2</td>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>26m2</td>
      
      </tr>
      <tr>
        <td>3</td>
       
      </tr>
      <tr>
        <td>12</td>
       
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-outline-secondary btn-sm">Apartment Deatils</button>
</div>



<div class="col box pricing-box" >
<span class="text_size_3 text_600">3 Room Apartment</span>
<p>$99,000</p>
<span class="text_size_3 text_600">$79,000</span>
 <table class="table">
    <thead>
      <tr>
        <td>135m2</td>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>45m2</td>
      
      </tr>
      <tr>
        <td>2</td>
       
      </tr>
      <tr>
        <td>7</td>
       
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-outline-secondary btn-sm ">Apartment Deatils</button>

</div>
<div class="col box pricing-box">
<span class="text_size_3 text_600">4 Room Apartment</span>
<p>$129,000</p>
<span class="text_size_3 text_600">$109,000</span>
 <table class="table">
    <thead>
      <tr>
        <td>198m2</td>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>67m2</td>
      
      </tr>
      <tr>
        <td>1</td>
       
      </tr>
      <tr>
        <td>9</td>
       
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-outline-secondary btn-sm">Apartment Deatils</button>

</div>


</div>
</div>
</div>
<div class="col-sm-1"></div>
</div>
</div>



</section>

<section id="gallery">
<div class="container mt-4 mb-5">
<div class="row">
<div style="text-align:center">
<span class="text_black text_size_4 text_600">GALLERY</span>
<h4>Checkout Gallery of the project</h4>
</div>
<div class="row pt-5">
<div class="col p-2" >
<img  class="img2" src="http://themestarz.net/html/propper/assets/img/gallery-big-02.jpg" >
</div>
<div class="col p-2" >
<img  class="img2" src="http://themestarz.net/html/propper/assets/img/gallery-big-03.jpg" >
</div>
<div class="col p-2" >
<img   class="img2"src="http://themestarz.net/html/propper/assets/img/gallery-02.jpg" >
</div>
<div class="col p-2" >
<img   class="img2" src="http://themestarz.net/html/propper/assets/img/gallery-big-01.jpg">
</div>
</div>

<div class="row pt-3">
<div class="col p-2" >
<img   class="img2"src="http://themestarz.net/html/propper/assets/img/gallery-big-02.jpg" >
</div>
<div class="col p-2" >
<img   class="img2" src="http://themestarz.net/html/propper/assets/img/gallery-02.jpg" >
</div>
<div class="col p-2" >
<img  class="img2" src="http://themestarz.net/html/propper/assets/img/gallery-big-01.jpg" >
</div>
<div class="col p-2" >
<img   class="img2"src="http://themestarz.net/html/propper/assets/img/gallery-big-01.jpg" >
</div>
</div>
</div>
</div>
</section>

<div class="container-fluid  p-5 block_color_1">
	<div class="row">
		<div class="text_white text-center">
			<span class="text_white text_600 text_size_2">Free cab facility for you and your family.</span><br>
			<span class="text_white text_size_1 text_600" style="word-spacing:2px">Book your site visit now.</span><br>
			<span class="mt-4 text_size_3 text_600">Call:+91 7795095951</span><br>
			<button type="button" class="btn btn-light mt-3 btn-lg box" data-bs-toggle="modal" data-bs-target="#exampleModal">Schedule Now</button>
		</div>
	</div>


</div>

 
    <section  style="padding-top:30px">
        <div class="container p-4" >
    <div class="row">
		<div class="col-sm-12 text-center">
			<span class="text_black text_size_4 text_600">FLOOR & MASTER PLANS</span><br>
			<span class="text_black text_600 text_size_3">Floor & Master Plans</span>
			
		</div>
		
	</div>
            <div class="row img-gallery-magnific mt15 p-3"    >
			<style>
			.floor-img1{
	 height:170px;width:100% background-size:cover; 
	filter:blur(2px);background:url('https://lntraintreeboulevards.com/f4.webp');
    }
    .floor-img2{
	 height:170px; background-size:cover; 
	filter:blur(6px);background:url('https://lntraintreeboulevards.com/f2.webp');
     }
     .floor-img3{
		 height:170px; background-size:cover; 
		filter:blur(6px);background:url('https://lntraintreeboulevards.com/f2.webp');
	 }
	 .floor-img4{
		 height:170px;width:100% background-size:cover; 
		filter:blur(2px);background:url('https://lntraintreeboulevards.com/f4.webp');
	 }
	 .floor-img5{
		 height:170px; background-size:cover; 
	   filter:blur(6px);background:url('https://lntraintreeboulevards.com/f2.webp');
	 }
	 .floor-img6{
		 height:170px; background-size:cover; 
		filter:blur(6px);background:url('https://lntraintreeboulevards.com/f2.webp')
	 }
	 .floor-btn{
		 font-size:22px; font-weight:20px; width:100%;
	 }
			</style>
                <div class="col-lg-4 col-sm-6 p-2">
                    <div class="floor-plans">
                        <div class="floor-img1">
                        
                        </div>
                        <button class="btn btn-dark floor-btn" >3 BHK Superian</h3>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-6 p-2">
                    <div class="floor-plans">
                         <div class="floor-img2" >
                        
                        </div>
                        <button class="btn btn-dark floor-btn" >3 BHK Luxuria</h3>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-6 p-2">
                    <div class="floor-plans">
                       <div class="floor-img3" >
                        
                        </div>
                        <button class="btn btn-dark floor-btn" >3 BHK Regalia</h3>
                    </div>
                </div>
				
         
            </div>
			
			<div class="row img-gallery-magnific mt15 p-3"    >
                <div class="col-lg-4 col-sm-6 p-2">
                    <div class="floor-plans">
                        <div class="floor-img4 " >
                        
                        </div>
                        <button class="btn btn-dark floor-btn" >4 BHK Superian</h3>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-6 p-2">
                    <div class="floor-plans">
                         <div class="floor-img5" >
                        
                        </div>
                        <button class="btn btn-dark floor-btn " >4 BHK Luxuria</h3>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-6 p-2">
                    <div class="floor-plans">
                       <div class="floor-img6" >
                        
                        </div>
                        <button class="btn btn-dark floor-btn" >4 BHK Regalia</h3>
                    </div>
                </div>
				
         
            </div>
        </div>
		
		
    </section>




<div class="container-fluid block_color_1  mt-5 p-5">
<div class="row pt-5 pb-5">
<div style="text-align:center" >
<span class="text_white text_size_4 text_600">MAP</span><br>
<span class="text_size_2 text_600 text_grey">2Q76+VP7, Seegehalli, Krishnarajapura, Bengaluru, Karnataka 560067</span>
</div>
<div class="col-sm-1"></div>
<div class="col-lg-5 p-3" >
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5497.5074316433775!2d77.7590579355485!3d13.014977614311174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe982829c98647442!2s7J5V2Q76%2BVP7!5e0!3m2!1sen!2sin!4v1673090661587!5m2!1sen!2sin" width="100%" height="100%"  style="border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="col-sm-6 ">
   
   <div class="row ">
	     
			
			<div class="container m-4 text_white">
			
			<div class="row">
			 <div class="col-sm-1"></div>
			  <div class="col-sm-2  col-6  ">
			  <img  class="m-2 loc-img"src="https://roketassets.drsyeta.com/images/icons/airport.png" >
			  <h6>Kempegowda International Airport</h6>
			  <p>12.0 Km</p>
			  </div>
			  <div class="col-sm-2  col-6 ">
			  <img  class="m-2  loc-img"src="https://roketassets.drsyeta.com/images/icons/railway-station.png" >
			  <h6>Proposed Bettahalasuru Station</h6>
			  <p>8.6 Km</p>
			  </div>
			  <div class="col-sm-2  col-6 ">
			  <img   class="m-2 loc-img" src="https://roketassets.drsyeta.com/images/icons/shop.png" >
			  <h6>Elements Mall</h6>
			  <p>16.5 Km</p>
			  </div>
			  <div class="col-sm-2  col-6  ">
			  <img   class="m-2 loc-img"src="https://roketassets.drsyeta.com/images/icons/university.png" >
			  <h6>Reva University</h6>
			  <p>12.0 Km</p>
			  </div>
			  
			    <div class="col-sm-1"></div>
			</div>
			<div class="row ">
			  <div class="col-sm-1"></div>
			  <div class="col-sm-2  col-6 p-2 ">
			  <img   class="m-2 loc-img"src="https://roketassets.drsyeta.com/images/icons/cinema.png" >
			  <h6>Royal Orchid Resort</h6>
			  <p>15 Km</p>
			  </div>
			  <div class="col-sm-2  col-6 p-2 ">
			  <img   class="m-2 loc-img"src="https://roketassets.drsyeta.com/images/icons/hospital.png" >
			  <h6>Relive Hospital</h6>
			  <p>3.2 Km</p>
			  </div>
			  <div class="col-sm-2  col-6 p-2 ">
			  <img   class="m-2 loc-img"src="https://roketassets.drsyeta.com/images/icons/dumbbell.png" >
			  <h6>Tommy GYM</h6>
			  <p>4.3 Km</p>
			  </div>
			  <div class="col-sm-2  col-6 p-2">
			  <img   class="m-2 loc-img"src="https://roketassets.drsyeta.com/images/icons/stadium.png" >
			  <h6>Proposed IFCI Financial City</h6>
			  <p>0.7 Km</p>
			  </div>
			  
			    <div class="col-sm-1"></div>
			</div>
			</div>
			  
		

	      
	</div>


</div>

</div>
</div>


    <section class="gallery-section2 pad-tb" id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading text-center p-4">
					<h5>OUR AMENITIES</h5>
                       <span class="text_black text_size_4 text_600">Ameneties  </span>
						
                       
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top:40px; background-color:white">
                <style>
                    .am1 {
                        padding: 50px 0px 0xp 100px;
                        height: 130px
                    }

                    .am2 {
                        height: 90px;
                        width: 120px;
                        position: relative;
                        border-radius: 12px;

                    }

                    .am3 {
                        top: -30px;
                        position: relative;
                    }

                    .am4 {
                        max-height: 60px;
                    }

                    .am5 {
                        top: 10px
                    }
                </style>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBF2E9;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/shower.png" class="am4">
                                <br>
                                <span class="am5">24 Hrs Running Water </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/user-shield.png" class="am4">
                                <br>
                                <span class="am5"> 24/7 Security</span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#ECE9FA;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/basketball.png" class="am4">
                                <br>
                                <span class="am5">Basketball Court </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/bicycle.png" class="am4">
                                <br>
                                <span class="am5">Bike Track </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#ECE9FA;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/cctv-camera.png" class="am4">
                                <br>
                                <span class="am5">CCTV Camera </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/park-with-street-light.png" class="am4">
                                <br>
                                <span class="am5">Community Garden </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBF2E9;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/dumbbell.png" class="am4">
                                <br>
                                <span class="am5"> Gym</span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/shuttlecock.png" class="am4">
                                <br>
                                <span class="am5"> Indoor Games</span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#ECE9FA;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/running.png" class="am4">
                                <br>
                                <span class="am5">Jogging Track </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/bookshop.png" class="am4">
                                <br>
                                <span class="am5">Library </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#ECE9FA;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/staff.png" class="am4">
                                <br>
                                <span class="am5">Maintenance Staff </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/exercise.png" class="am4">
                                <br>
                                <span class="am5"> Outdoor Sports Facilities</span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBF2E9;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/party.png" class="am4">
                                <br>
                                <span class="am5"> Party Hall</span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/electricity.png" class="am4">
                                <br>
                                <span class="am5">Power Backup </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#ECE9FA;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/rainwater-catchment.png" class="am4">
                                <br>
                                <span class="am5"> Rain Water Harvesting</span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/water-pipe.png" class="am4">
                                <br>
                                <span class="am5"> Sewage Treatment</span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#ECE9FA;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/garage.png" class="am4">
                                <br>
                                <span class="am5">Surface Car Park </span>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-2 col-6 am1">
                    <center>
                        <div class="am2" style=" background-color:#FBE9F5;">
                            <div class="am3">
                                <img src="https://roketassets.drsyeta.com/images/ameneties/pool.png" class="am4">
                                <br>
                                <span class="am5"> Swimming Pool</span>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>





<div class="container p-4 mb-5">
<div class="row">
<div class="p-2 text-center">
<span class="text_black text_size_4 text_600">Contact & Virtual Tour</span>
<h5>Chech Video</h5>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-4 block_color_1 p-5 mt-3" style="border-radius:20px">
    <form class=" form-has-background-padding box " id="form-hero" >
                                    <h5 style="color:white;text-align:center">Subscribe to get the latest news about the project</h5>
                                    <div class="form-group m-3">
                                        <input type="text" class="form-control p-2" id="form-hero-name" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="email" class="form-control p-2" id="form-hero-email" name="email" placeholder="Your Phone Number">
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="text" class="form-control p-2" id="form-hero-phone" name="phone" placeholder="Your Mail">
                                    </div>
                                    <button type="submit" class="btn btn2  " >Request A Call &nbsp; <i class="fa fa-arrow-right" style="color:white "></i></button>
                                </form>


</div>
<div class="col-sm-6 mt-3" >
<iframe class="box" width="100%" height="350"style="border-radius:20px" src="https://www.youtube.com/embed/u32J6FGGnCc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="col-sm-1"></div>
</div>
</div>








   <div class="container ">
  <div class="row p-2">
		<div class="row justify-content-center">
		<div class="col-lg-6 text-center">
			<span class="text_black text_size_4 text_600">Unit Configuration</span>
			<p>SBR Earth & Sky is a futuristic residential marvel by Godrej Properties, spread on 20 Acres.
			Ananda Bangalore project consists 
			of exclusively designed 806 units of 1, 2, 3 & 4 bedroom apartments.</p>
		</div>
	</div>
		
		<div class="col-sm-4 p-4">
		<div class="tab">
			 <div style="padding-top:20px">
				
					<button onclick="openContent(event, 'content1')"   id="defaultOpen" class="btn btn-dark tablinks" style="width:100%; font-weight:bold; font-size:24px; border-radius:10px"> 2 BHK</button>
			 
			 </div>
			  <div style="padding-top:20px">
				
					<button    onclick="openContent(event, 'content2')"    class="btn btn-dark tablinks" style="width:100%; font-weight:bold; font-size:24px; border-radius:10px; ">3 BHK</button> 
			 
			 </div>
			  <div style="padding-top:20px">
				
					<button    onclick="openContent(event, 'content3')" class="btn btn-dark tablinks" style="width:100%; font-weight:bold; font-size:24px; border-radius:10px; ">4 BHK</button>
			 
			 </div>
		</div>
		</div>
		
		
		<div class="col-sm-8 pt-5">
				 <div class="text_size_3">
				 <div id="content1" class="tabcontent">
				 <div class="row">
				 <div class="col-sm-6">
					<p>Donec tincidunt fermentum purus, eu pharetra arcu scelerisque a. Maecenas felis eros, volutpat ac justo non</p>
					</div>
					<div class="col-sm-6">
					<img  src="http://sbrminarabangalore.com/assets/gallery/gallery-3.jpg" style="width:100%;border-radius:10px">
					</div>
					</div>
					</div>
					 <div id="content2" class="tabcontent">
					  <div class="row">
				 <div class="col-sm-6">
					<p> Curabitur eu risus convallis, auctor augue id, pharetra neque. Morbi pretium neque ac varius imperdiet. Aliquam sed sapien eget massa</p>
					</div>
					<div class="col-sm-6">
					<img  src="http://themestarz.net/html/propper/assets/img/gallery-01.jpg" style="width:100%;border-radius:10px">
					</div>
					</div>
					</div>
					 <div id="content3" class="tabcontent">
					  <div class="row">
				 <div class="col-sm-6">
				 
					<p>Proin orci nisl, posuere viverra erat ut, pellentesque interdum urna. Curabitur eu risus convallis, auctor augue id, pharetra neque. Morbi pretium neque ac varius imperdiet. 
					Aliquam </p>
					</div>
					<div class="col-sm-6">
					<img  src="http://themestarz.net/html/propper/assets/img/gallery-02.jpg" style="width:100%;border-radius:10px">
					</div>
					</div>
					</div>
				 </div>
			</div>
		
	</div>
 
  
    </div>
	
	

<!-- Button trigger modal -->


<!-- Modal -->


<section>
<div class="conatiner-fluid block_color_1 p-3">
<p  class="text_white"style="line-height:15px;">Disclaimer - This Website Is In The Process Of Being Updated. By Accessing This Website, The Viewer Confirms That The Information Including Brochures And Marketing Collaterals On This Website Are Solely For Informational Purposes Only And The Viewer Has Not Relied On This Information For Making Any Booking/Purchase In Any Project Of The Company. Nothing On This Website, Constitutes Advertising, Marketing, Booking, Selling Or An Offer For Sale, Or Invitation To Purchase A Unit In Any Project By The Company. The Company Is Not Liable For Any Consequence Of Any Action Taken By The Viewer Relying On Such Material/ Information On This Website. This Website Belongs To Official Partner Of the above mentioned builder. PRM/KA/RERA/1251/446/PR/120922/005238</p>
</div>
</section>

<!--scripts-->
 <script src="https://kit.fontawesome.com/189b816080.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <!--unit configaration-->
 <script>
function openContent(evt, content) {
	
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active btn btn-warning", "");
  }
  document.getElementById(content).style.display = "block";
  evt.currentTarget.className += " active";
}




// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" >
    <div class="modal-content pop-form"  >
	
	<div class="col block_color_1 p-3 "  style="height:400px;border-radius:20px;">
				<form class=" form-has-background-padding " id="form-hero" >
                                    <h5 style="color:white;text-align:center">Subscribe to get the latest news about the project</h5>
                                    <div class="form-group m-3">
                                        <input type="text" class="form-control p-2" id="form-hero-name" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="email" class="form-control p-2" id="form-hero-email" name="email" placeholder="Your Phone Number">
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="text" class="form-control p-2" id="form-hero-phone" name="phone" placeholder="Your Mail">
                                    </div>
                                    <button type="submit" class="btn btn2  "  data-bs-toggle="modal" data-bs-target="#exampleModal" >Request A Call &nbsp; <i class="fa fa-arrow-right" style="color:white "></i></button>
                                </form>

				 </div>
	
    </div>
  </div>
</div>
