	<style type="text/css">
		.categories {
			margin-bottom: 10px;
		}
		#shopping-cart-list {
			position:fixed;
			right: 	30%;
			top: 	3%;
			bottom: 10%;
			height: 95%;
			width: 	500px;
			background: #FFFFFF;
			border-radius: 5px 5px 5px 5px;		/*Rectangular Sharp - Round Corner*/
			border: 1px solid #0000FF;
			padding: 70px;
			transition: right .5s;
			-webkit-transition: right .5s;
		}
		.closed#shopping-cart-list {
			right: -550px;
		}
		#shopping-cart-list .scrolling {
			overflow-y: scroll;
			height: 85%;
			border-bottom: 1px solid blue;
		}
		#shopping-cart-list img {
			float: left;
			width: 85px;
			height: 85px;
		}
		.label-danger{ background-color: maroon; }
	</style>
	
		<!-- <ul class="nav nav-pills categories" data-bind="foreach: categoryList">	// Display products by category
		  <li data-bind="css: { active: $data == $root.currentCategory() }" >
		  	<a href="#" data-bind="text: Products_Catergories, click: $root.selectCategory"></a>
		  </li>
		</ul>	 -->
	
		<!-- <div class="row" data-bind="foreach: itemList"> -->		
			<div class="row" data-bind="foreach: categoryList">	 	<!-- Diplay all Products no categoty --> 
			<div class=" col-md-4">
				<div class="panel panel-info">
				  <div class="panel-heading">
					<code class="pull-right" data-bind="text: '$' + Price"></code>
				    <h3 class="panel-title" data-bind="text:Name"></h3>
				  </div>
				  
				  <div class="panel-body">
						<img data-bind="attr: {src: Picture_Url}" class="img-thumbnail pull-right" alt="140x140" style="width: 140px; height: 140px;" >
						<p data-bind="text: Description"></p>
						<a class="btn btn-success" data-bind="click: $root.addToCart">Purchase</a>
				  </div>
				</div>
			</div>
		</div>	
		
<!-- Cart list -->

		<div id="shopping-cart-list" class="closed" >
			<div class="scrolling"  data-bind="foreach: cart" >
				<div class="well well-sm clearfix">
					<img alt="item image" data-bind="attr: {src: Picture_Url}" />
					<h6 data-bind=" text: Name"></h6>
					$<span data-bind=" text: Price"></span>
					<p data-bind=" text: Description"></p>
					<button class="btn btn-warning btn-sm pull-right" data-bind="click: $root.removeFromCart">
						<span class="glyphicon glyphicon-shopping-del"></span>
						Remove Item
					</button>
				</div>
			</div>
			<div>
				Sub-Total: $ <span data-bind="text: subTotal"></span>
			</div>
			<div>
				Tax: $ <span data-bind="text: Tax"></span>
			</div></br>
		
			<div>
				Total: $ <span data-bind="text: Total"></span>
			</div></br>
			
			<div class="row">
   				<div class="col-xs-6">
					<a class="btn btn-success"  href="../Controllers/checkOut.php">Check Out</a>
					<!-- <a href="../Controllers/index.php"><h1 class="glyphicon glyphicon-gift">y-$tore</a> -->
				</div>
				<div class="col-xs-6">
					<button class="btn btn-success" data-bind="click: toggleCartList">
					<i class="glyphicon glyphicon-shopping-cart"></i>
					Continue Shopping
					<span class="badge label-danger" data-bind="text: cart().length">0</span>
					</button>
				</div>
			</div>
		</div>
	
		<!-- Shopping Cart -->

		<script type="text/template" id="cart-tmpl">
			<ul class="nav navbar-nav navbar-right ">
				<li>
					<button class="navbar-btn btn" data-bind="click: toggleCartList">
						<i class="glyphicon glyphicon-shopping-cart"></i>
						My Cart
						<span class="badge label-danger" data-bind="text: cart().length">0</span>
						</button>			
				</li>
				<li><a></a></li>
			</ul>
		</script>
	
		<? function JavaScripts(){ ?>
		<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
			<script type="text/javascript">
				$(function(){
					$(".navbar-collapse").append($("#cart-tmpl").html())
					
					var vm = {
						categoryList: ko.observableArray(),
						currentCategory: ko.observable(),
						itemList: ko.observableArray(),
						cart: ko.observableArray(),
									
						selectCategory: function(){
							vm.currentCategory(this);
							$.get("?action=index&format=json",{category_id:this.id},null,'json')
								.always(function (results) {
									vm.itemList(results.data);
								});		    	
						},
						addToCart: function(){
							vm.cart.push(this);
						},
						removeFromCart: function(){
							vm.cart.remove(this);
						},
						toggleCartList: function(){
							$("#shopping-cart-list").toggleClass("closed");
						}
					}
					
					// ----------------------------Calculate for subTotal------------------------------
					vm.subTotal = ko.computed(function(){
							var subTot = 0;
							$.each(vm.cart(), function(i,x){
								subTot += +x.Price;
								subTot = Math.round(subTot * 100) / 100
							})
							return subTot;
					});
					
					// ----------------------------Calculate for Tax------------------------------
					vm.Tax = ko.computed(function(){
							
							var subTotal = 0;
							var tax = 0;
							$.each(vm.cart(), function(i,x)
							{
								subTotal += + x.Price;
								tax = (8.45 *subTotal)/100;
								
								tax = tax.toFixed(2);
							})
							return tax;
					});
					
					// ----------------------------Calculate for Total------------------------------
					vm.Total = ko.computed(function(){
							var total=0;
							var subTotal = 0;
							var tax = 0;
							$.each(vm.cart(), function(i,x)
							{
								subTotal += + x.Price;
								tax = (8.45 *subTotal)/100;
								total = subTotal + tax;
								
								total = total.toFixed(2);
							})
							return total;
					});
					
					ko.applyBindings(vm);
					
					$.get("?action=categories&format=json",null,null,'json')
						.always(function (results) {
							vm.categoryList(results.data);
						})
				});
			</script>
		<? } ?>