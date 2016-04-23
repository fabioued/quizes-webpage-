<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="Author" content="" />
		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<?php include_once("style.php");?>
		<link href="../commun/assets/css/jQuizMe-2.2.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="smoothscroll enable-animation">


		<!-- wrapper -->
		<div id="wrapper">
			<?php include_once("menu.php");?>
			<!-- -->
			<section>
				<div class="container">
					<p>Using jQuery <span id="jqueryVersion"></span> and jQuizMe <span id="jQuizMeVersion"></span></p>
					<h2>jQuizMe Demo 4</h2>
					<a href = "http://code.google.com/p/jquizme/wiki/HowToUse" >Back to HowToUse Wiki</a><br/>
					<div id="quizArea"></div>
				</div>
			</section>
			<!-- / -->
			<!-- FOOTER -->
			<?php include_once("footer.php");?>
		</body>
		<script type="text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="http://jquizme.googlecode.com/hg/releases/pre-release%20of%20jQuizMe%202.2%20fixed/jQuizMe-2.2.js"></script>
		<script type="text/javascript">
		$( function($){
			var quiz = [
		        { 
		                ques: "Silver", //question
		                ans: "Ag", // answer
		                ansInfo : "<br/>More info <a href='http://www.periodictable.com/Elements/079/index.html'>here</a>"  // answer information.
		        },
		        {
		                ques: "Gold.", 
		                ans: "Au", 
		                ansInfo : "Gold-Au <br/>More info <a href='http://www.periodictable.com/Elements/079/index.html'>here</a>"
		        }
			];
			var lang = { 
		        ans : { 
		                praise:"Excellent!"
		         }
			};
			$( "#quizArea" ).jQuizMe( quiz, { quizType: "multi" }, lang );
			
			//Display Version information.
			$( "#jqueryVersion" ).text( $.fn.jquery );
			$( "#jQuizMeVersion" ).text( $.fn.jQuizMe.version );
		});
		</script>
</html>