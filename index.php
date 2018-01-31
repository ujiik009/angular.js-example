<!DOCTYPE html>
<html>
<head>
	<title>Angular</title>
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body ng-app="main_app" >
	<div 
		class="container"
		ng-init="usernames='ice';names=[{name:'ice',amount:4000,age:23},{name:'tae',amount:3000,age:23},{name:'ball',amount:2000,age:22},{name:'p_ball',amount:6000,age:50}]">
		<h1>Angular js</h1>
		<div class="form-group">
			<!-- <input type="input" class="form-control" name="" placeholder="" ng-model="filterstring" >

			เรียงโดย ชื่อ : <input type="radio" value="name" name="sort" ng-model="SortString" ><br>		
			เรียงโดยอายุ : <input type="radio" value="-age" name="sort" ng-model="SortString"><br>
			
			<ul class="list-group">
				<li class="list-group-item" ng-repeat="(key, name) in names | filter:filterstring | orderBy:SortString">
					<p>
						<label>Name : {{name.name}}</label>					
					</p>
					<p>
						<label>Age : {{name.age}}</label>								
					</p>
					<p>
						<label>amount : {{name.amount | currency:''}}</label>								
					</p>
				</li>
			</ul> -->

				
		</div>
	</div>

	<!-- controller login -->
	<div ng-controller="loginController">
		<div class="panel panel-primary">
			<div class="panel-heading">Login form</div>
			<div class="panel-body">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<label>User name</label>
							<input type="text" class="form-control" ng-model="username" >
							
						</div>						
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>Password</label>
							<input type="Password" class="form-control" ng-model="password" >						
						</div>					
					</div>
					<div class="row" >
						<div class="col-md-12 ">
							<button ng-disabled="checked" class="btn btn-info btn-block" ng-click="action_login()" style="margin-top: 5px;">login</button>
						</div>						
					</div>
					<div>
						<button ng-click="checked=!checked" >click</button>
						
						<ul class="list-group">
								<li ng-repeat="(key, name) in names"> <a href="#" ng-click="show_name(key)">{{name.name}}</a> </li>
						</ul>
					</div>
				</div>				
			</div>
		</div>
		
	</div>
	<!-- controller login -->
</body>

<!-- link script -->
<script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
<script type="text/javascript" src="script/js/main.js"></script>
<!-- link script -->
<!-- <script type="text/javascript">
	
</script> -->

</html>