<?php
session_start();
include('verifica_login.php');
include("funcoes.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>RHX</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="col-sm-4" style="float: right;">
	<div class="col-sm-4">
		<h3><a href="logout.php">Sair</a></h3>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<br>
<h2>Noticias</h2>
<?php 
	include("funcoes.php");

	if(isset($_POST['id'])){
		$id = "$_POST[id]";
	}
?>
<div class="container">
	<div class="row">
		<div class="col-12">
		    <ul class="topics-table">
		        <li class="topics-header">
		           <ul class="header-titles">
		               <li>Forum</li>
		               <li>Topics</li>
		               <li>Posts</li>
		               <li>Freshness</li>
		           </ul>
		        </li>
		        <li class="topics-body">
		            <ul class="topic-item-1">
		                <li>
		                    <a class="badge badge-primary" href="">Around the Boards</a>
	                    </li>
	                    <li>4</li>
	                    <li>5</li>
	                    <li>
	                        
	                       <a class="badge badge-info" href="http://skatingbuzz.test/forums/topic/random-4/" title="Random 4">1 week ago</a>
                            <p class="bbp-topic-meta">
		                        <span class="bbp-topic-freshness-author">
	                                <a 
	                                href="http://skatingbuzz.test/forums/user/admin/" 
	                                title="View admin's profile" 
	                                class="bbp-author-name badge badge-info" 
	                                rel="nofollow">
	                                    admin
                                    </a>
	                            </span>
                            </p>
	                    </li>
		            </ul>
		            <ul class="topic-item-2">
		                <li>
		                    <a class="badge badge-primary" href="">Skating Events</a>
	                    </li>
	                    <li>2</li>
	                    <li>4</li>
	                    <li>
	                        
	                        <a class="badge badge-info" href="http://skatingbuzz.test/forums/topic/random-4/" title="Random 4">1 day ago</a>
                            <p class="bbp-topic-meta">
		                        <span class="bbp-topic-freshness-author">
	                                <a 
	                                href="http://skatingbuzz.test/forums/user/admin/" 
	                                title="View admin's profile" 
	                                class="bbp-author-name badge badge-info" 
	                                rel="nofollow">
	                                    leslie
                                    </a>
	                            </span>
                            </p>
	                    </li>
		            </ul>
		        </li>
		    </ul>
		</div>




</body>
</html>