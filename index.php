<html>
<head>
 <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="styles/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="styles/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- <link rel="stylesheet" type="text/css" href="phpmyadmin/phpmyadmin.css.php"></script> -->
</head>
<body id="page-top" class="index">

 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">XAMPP and You</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                    	<a target="_blank" href="https://www.apachefriends.org/index.html">HOME PAGE</a>
                    </li>
                    <li>
                    	<a href="#"> | </a>
                    </li>
                    <li>
                    	<a target="_blank" href="http://localhost/phpmyadmin/">DATABASE</a> 
                    </li>
                    <li>
                    	<a href="#"> | </a>
                    </li>
                    <li class="page-scroll">
                        <a target="_blank" href="http://heygema.wordpress.com">AUTHOR : GEMA ANGGADA</a>
                    </li>

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">My Project</span>
                        
                        <span class="skills">Web Development - Mobile Application</span>

                        <hr class="star-light">
                        <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                        <table class="table table-hover">
                     <!--    <tr>
                        	<th>&nbsp;</th>
                        	<th>&nbsp;</th>
                        </tr>
        -->
                        
                        	<?php
				$www = $_SERVER['DOCUMENT_ROOT'];
				$files = scandir($www);
				$num = 0;
				usort($files, 'strcasecmp');
				foreach($files as $key => $value) { 
					$num += 1;
					if($value[0] != '.' && is_dir($value))
						echo '<tr>
					<td> > </td>
					<td><a target="_blank" href="/' . $value . '">' . $value . '</a></td>
					</tr>';

				} 
			?>
                        
                        </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


<footer class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       " Made with heart, built by logic. "
                    </div>
                </div>
            </div>
        </div>
    </footer>


<!-- <div id="main">
	<div class="container">
		<div id="menu">
			
			<ul>
			
			</ul>
		</div>


		 <div>
			<iframe src="http://localhost/phpmyadmin/"></iframe>
		</div>
		<div class="clear-block"></div>
	</div> 
</div>
</div> -->

<!-- jQuery -->
    <script src="styles/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="styles/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="styles/js/classie.js"></script>
    <script src="styles/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="styles/js/jqBootstrapValidation.js"></script>
    <script src="styles/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="styles/js/freelancer.js"></script>
</body>
</html>