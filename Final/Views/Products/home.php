﻿	<style type="text/css">
		.categories {
			margin-bottom: 10px;
		}
		#shopping-cart-list {
			position: fixed;
			right: 	0px;
			top: 	20%;
			bottom: 20%;
			height: 60%;
			width: 	200px;
			background: #FFFFFF;
			border-radius: 5px 0px 0px 5px;
			border: 1px solid #000;
			padding: 5px;
			transition: right .5s;
			-webkit-transition: right .5s;
		}
		.closed#shopping-cart-list {
			right: -200px;
		}
		#shopping-cart-list .scrolling {
			overflow-y: scroll;
			height: 95%;
			border-bottom: 1px solid black;
		}
		#shopping-cart-list img {
			float: left;
			width: 30px;
			height: 30px;
		}
		.label-danger{ background-color: maroon; }
	</style>
	
		<ul class="nav nav-pills categories" data-bind="foreach: categoryList">
		  <li data-bind="css: { active: $data == $root.currentCategory() }" >
		  	<a href="#" data-bind="text: Products_Catergories, click: $root.selectCategory"></a>
		  </li>
		</ul>	
	
		<div class="row" data-bind="foreach: itemList">
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
					<h6 data-bind="text: Name"></h6>
					<p data-bind="text: Description"></p>
					$<span data-bind="text: Price"></span>
					<button class="btn btn-warning btn-sm pull-right" data-bind="click: $root.removeFromCart">
						<span class="glyphicon glyphicon-shopping-del"></span>
						Remove Item
					</button>
				</div>
			</div>
			<div>
				Total: $ <span data-bind="text: cartTotal"></span>
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
					vm.cartTotal = ko.computed(function(){
							var tot = 0;
							$.each(vm.cart(), function(i,x){
								tot += +x.Price;
							})
							return tot;
					});
					ko.applyBindings(vm);
					
					$.get("?action=categories&format=json",null,null,'json')
						.always(function (results) {
							vm.categoryList(results.data);
						})
				});
			</script>
		<? } ?>