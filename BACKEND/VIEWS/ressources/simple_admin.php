



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IMMO- AFRICA/Dashboard-2</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES--> 
</head>
<body lang="fr">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<?php
if(isset($_SESSION['adminname'])) {
	echo "Bienvenu ".$_SESSION['adminname']."<br />";
	echo "<a href='../CONTROLLERS/.php' class='btn btn-danger square-btn-adjust'>Se déconnecter</a>";
}
?>
</div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" >
            <div class="sidebar-collapse" style="text-align:center;">
                <ul class="nav" id="main-menu">
				<li class="text-center">
<img src="assets/img/IMMO-Africa.jpg" height="240" width="100" border="0" style="transform:rotate(-90deg);" alt="Logo-IMMO" />
					</li>


<ul class="nav  sm">
						<li>
							<a href="">Accueil</a>
						</li>
						<li>
							<a href="">Connexion</a>
						</li>
						<li>
							<a href="">Inscription</a>
						</li>
						
					</ul><br/>
				<li style="color:white;background-color:blue;text-align:center;">
                       <h3> Menu Principal</h3><br />
                    </li>


					<li class>
                        <a href="#"> Gestion<span class="fa arrow"></span></a>
                        <ul class="nav  sm">
                            
                            <li>
                                <a href="#" style="color:green;">Approuvée<span class="fa arrow"></span></a>
                                <ul class="nav ">
                                    <li>
                                        <a href="#">Logement</a>
										<ul class="nav ">
											<li>En vente</li>
											<li>En Location</li>
											
										</ul>
                                    </li>
                                    <li>
                                        <a href="#">Parcelle</a>
										<ul class="nav ">
											<li>En vente</li>
											<li>En Location</li>
											
										</ul>
                                    </li>
                                    
                                </ul>
                               
                            </li>
							
							<li>
                                <a href="#" style="color:green;">Non approuvée<span class="fa arrow"></span></a>
                                <ul class="nav ">
                                    <li>
                                        <a href="#">Logement</a>
										<ul class="nav ">
											<li>En vente</li>
											<li>En Location</li>
											
										</ul>
                                    </li>
                                    <li>
                                        <a href="#">Parcelle</a>
										<ul class="nav ">
											<li>En vente</li>
											<li>En Location</li>
											
										</ul>
                                    </li>
                                    
                                </ul>
                               
                            </li>
							
							<li>
                                <a href="#" style="color:green;">Vendue<span class="fa arrow"></span></a>
                                <ul class="nav ">
                                    <li>
                                        <a href="#">Logement</a>
										
                                    </li>
                                    <li>
                                        <a href="#">Parcelle</a>
										
                                    </li>
                                    
                                </ul>
                               
                            </li>
							
							<li>
                                <a href="#" style="color:green;">Louée<span class="fa arrow"></span></a>
                                <ul class="nav ">
                                    <li>
                                        <a href="#">Logement</a>
										
                                    </li>
                                    <li>
                                        <a href="#">Parcelle</a>
										
                                    </li>
                                    
                                </ul>
                               
                            </li>
                        </ul>
                     </li>  
                

				
				
				
				
				
				
				
				
				
				
				
				
				
				
					<li>
                        <a href="#"> Compte<span class="fa arrow"></span></a>
                       
                            
                           <ul class="nav sm">
                                    <li>
                                        <a href="house.php"style="color:green;">Administrateur <span class="fa arrow"></span></a>
										 <ul class="nav ">
											
											<li>
												<a href="#" >Modifier mon compte</a>
												
											</li>
											
											
											                                 
										</ul>
                                    </li>
                                    <li>
                                        <a href="#" style="color:green;">Utilisateur<span class="fa arrow"></span></a>
										<ul class="nav ">
											
											
											<li>
												<a href="#" >Explorer</a>
												
											</li>
											
											                                 
										</ul>
                                    </li>
                                    
                                </ul>
                               
                   </li>
				   
				   
				   
				   

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                   
               
				 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						


<?php echo $content; ?>

					</div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
	
	 <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
  
   
</body>
</html>
<style>
.principalDiv
{
	background-color:lightblue;
	// width:750px;
	padding:15px;
	box-shadow:10px 10px 10px black;
	border-radius:10px;
	margin-bottom:40px;
	
	
}
.principalDiv h1,h3
{
	text-align:center;
}
table
{
	
}



input,select
{
	border-color:rgb(225,225,225);
	width:280px;
	margin:10px;
	height:40px;
	border-radius:10px;
}
input:hover,select:hover
{
	border-color:lightblue;
}
.btnS
{
	color:blue;
	background-color:white;
	border-color:blue;
}
.btnS:hover
{
	color:white;
	background-color:blue;
	border-color:white;
}

.btnF
{
	color:red;
	background-color:white;
	border-color:red;
}

.btnF:hover
{
	color:white;
	background-color:red;
	border-color:white;
}
body
{
	
}
.lg2 td 
{
	text-align:center;
}
.sm
{
	background-color:lightblue;
}
</style>
