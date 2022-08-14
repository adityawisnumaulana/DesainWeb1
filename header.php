<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Index</title>
        
       
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"> <!-- LOAD BOOSTRAP CSS-->
             
         <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>  <!-- LOAD BOOSTRAP.MIN.JS-->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script> <!-- LOAD JQUERY.MIN.JS-->
        <script src="assets/js/bootstrap.js" type="text/javascript"></script> <!-- LOAD BOOSTRAP.JS-->
        <script src="assets/js/npm.js" type="text/javascript"></script> <!-- LOAD BOOSTRAP.JS-->
		
		

    
        <style>
            .dropdown-submenu{
                position: relative;
			
            }
            
            .dropdown-submenu .dropdown-menu{
                top: 0;
                left: 100%;
                margin-top: -1px;
			}
		
			.li a {

    color: #b22222;
  
}
				
				
			
            
        </style>
        <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
    </head>
    <body>
       
            <!------------------------------- HEADER START ----------------------------------------->
            
            <header id="header-nav" role="banner" style="margin-bottom: 80px;">
        
           <div id="navbar" class="navbar navbar-default navbar-fixed-top" style="background-color:#7986cb;" >
            <div class="navbar-header" >

                <a class="navbar-brand" href="#"  style="color:white" > <img src="img/logos.png"; style="margin-top:0px;"> </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                    <span class="navbar-toggle-icon"></span>
					<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" >
					<li ><a href="index.php"  style="color:white"><?php echo"Home";?></a></li>
                    <li><a href="profil.php"  style="color:white"><?php echo"Profil";?></a></li>
       
                    <li><a href="produk.php"  style="color:white"><?php echo "Paket Tour";?></a></li>
					
					
					
		
					
					
					
                 
					
					
                </ul>
                
               
                 <ul class="nav navbar-nav navbar-right" style="margin-right:0px; " >
					
		
                </ul>
             
                
                
            </div>
        </div>
    </header>

                
                
                
                
                
            <!------------------------------------------- HEADER CLOSE ------------------------------------------------------->
        
        
             <!----------------------------------------- FOOTER END --------------------------------------------------------->   
    
        
    </body>
</html>