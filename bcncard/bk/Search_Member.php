<?php
	
	
	require_once('../wp-config.php');
	require_once(__DIR__ . '/../../theidc_clasfunc/functionsrep.php');
 
?>
           
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Panel IDC</title>
	
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="assets/css/style-responsive.css" rel="stylesheet">
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>
<style>
	/*
	tbody tr:nth-child(odd) {
	  background: lightblue;
	}
	*/
		
	table {
    	border-collapse: collapse;
		color:#000;
		
	}
	
	
	#Download_pdf{
		width: 400px;	
		color: #009;
	}
	
	span.cls_links{
		  font-family:Arial,serif;
		  font-size:18px;
		  
		  font-weight:bold;
		  font-style:normal;
		  text-decoration: underline;
		  color:#03F;
	  }
	  
	
	tbody tr:nth-child(odd) {
	  background: lightblue;
	}
	
		
	table {
    	border-collapse: collapse;
		color:#000;
		
	}


	.form-horizontal .control-label {
		text-align: left;
    	width: 60px;
	}
</style>
<body>
		<div id="overlay">
		<ul>
		  <li class="li1"></li>
		  <li class="li2"></li>
		  <li class="li3"></li>
		  <li class="li4"></li>
		  <li class="li5"></li>
		  <li class="li6"></li>
		</ul>
	</div>	
	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="IDC Admin Panel" src="assets/img/logo20.png" /> <span class="hidden-phone">Admin Panel</span></a>
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div class="span2 main-menu-span">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<!--<li><a href="index.html"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Dashboard</span></a></li>-->
						
						
                        
                       <?php
                        include('navi_admin.tpl');
						?>
						
						<!--
                        <li><a href="typography.html"><i class="icon-font icon-white"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture icon-white"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify icon-white"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar icon-white"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="grid.html"><i class="icon-th icon-white"></i><span class="hidden-tablet"> Grid</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open icon-white"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star icon-white"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock icon-white"></i><span class="hidden-tablet"> Login Page</span></a></li>
                        -->
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<h1 align="center" style="color:#000" ><span>SEARCH MEMBERS</span></h1>                
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					
					<div class="box-content" style="color:#000">
                    
                    		<form class="form-horizontal" role="form" method="get">
                                <div class="form-group" >
                                    <label class="col-sm-2 control-label" for="name">Email</label>
                                    <div class="input-group col-sm-9">
                                        <input id="name2" name="name2" type="text" class="form-control" placeholder="Type the name" />
                                        <span class="input-group-btn">
                                                <button type="button" class="btn btn-lg btn-primary btnSearch">
                                                    <span class="glyphicon glyphicon-search"> Search</span>
                                                </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <!-- This table is where the data is display. it is fill by jQuery and Ajax, the information is drop into the body tag -->
                                <table id="resultTable" class="table table-hover">
                                    <thead>
                                        <th>Id</th>
                                        <th>Email</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Telephone</th>
                                        <th>Documents</th>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			<hr>
			<!-- end: Content -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
				
		
		<div class="clearfix"></div>
		
		<footer>
			<p>
				
			</p>
		</footer>
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->

		<script src="assets/js/jquery-1.9.1.min.js"></script>
		<script src="assets/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="assets/js/bootstrap.min.js"></script>
	
		<script src="assets/js/jquery.cookie.js"></script>
		
		<script src='assets/js/jquery.dataTables.min.js'></script>
		
		<script src="assets/js/jquery.chosen.min.js"></script>
	
		<script src="assets/js/jquery.uniform.min.js"></script>		
			
		<script src="assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="assets/js/jquery.uploadify-3.1.min.js"></script>
	
		

		<script src="assets/js/custom.js"></script>
        
        
		<!-- end: JavaScript-->
        <script type="text/javascript">
        // Let us make sure that the code is working after the hole site is loaded.
    	jQuery(document).ready(function($) {
            // Let us trigger the search if the user clicks on the search button.
    		$('.btnSearch').click(function(){// Call back function.
    			makeAjaxRequest();// Since this code will be repeated in different place I have place it as a function
    		});
            // Let us trigger the search if the user submit the form by an enter.
            $('form').submit(function(e){
                e.preventDefault(); // This will prevent the submit event to bubble and therefore not firing the event.
                makeAjaxRequest();// Since this code will be repeated in different place I have place it as a function
                return false; // This will tell the function to do nothing.
            });
           
            function makeAjaxRequest() {
                $.ajax({
                    url: '../jenuesi/php/search.php', // This is the file where all the stuff with the database will happen.
                    data: {name2: $('input#name2').val()},                   
                    type: 'get', // The type of method to be submitted.
                    success: function(response) { // Call back function that will execute if the Ajax call was succesful.                       
                        $('table#resultTable tbody').html(response);
                    }
                });
            }
    	});
    </script>
</body>
</html>

<?php
//========== FUNCTIONS ====
function mergeArraysSafelyREPORT( &$array1, $array2 = array() ) {

    $cnt2 = count( $array2 );

    for ( $i = 0; $i < $cnt2; $i++ ) {

    //array_push( $array1, $array2[$i] );
    array_unshift( $array1, $array2[$i] );

    }

    return TRUE;
}

?>
