<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootstrap/docs/assets/ico/favicon.ico">

    <title>Final Exam</title>

    <!-- Bootstrap core CSS -->
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">
	
  </head>

  <body>
    <div class="navbar-wrapper">
      <div class="container">
			<div>
				<p>	</p>
			</div>
			 <? include '../inc/navUsers.php';?>	
			 
		      <div class="jumbotron">
			    <form class="col-sm-offset-4 col-sm-14 has-feedback" id="search">
			    	<h5>Enter your search</h5>
					<input type="text" class="form-control" placeholder="Enter Search City" name="city" id="city">			
		  			<span class="btn btn-sm btn-default glyphicon glyphicon-search form-control-feedback"></span>
				</form> 
   			</div>
	 	</div>
	 </div>
		 
	<? function JavaScripts(){ ?>
		
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.2/typeahead.bundle.min.js"></script>
	
		<script type="text/javascript">
			$(function(){
				
				$("#city").typeahead(null,{
					displayKey: 'city',
					source: function(query, cb){
						$.get("./Final_AutoSearch.php?action=search&format=json&q=" + query, null,null,'json')
							.always(function(data){
								cb(data.data);
							})
						}
				});
				
				// $(".navbar-collapse").append($("#cart-tmpl").html())		
				
		</script>
	<? } ?>     
  </body>
</html>
