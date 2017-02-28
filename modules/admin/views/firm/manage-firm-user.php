
<section class="page-content ng-scope" ng-view="">
	<section class="page-content-inner ng-scope">

		<div class="header" role="alert">

			<strong><i class="fa fa-plus"></i><span class="margin-left-10">MANAGE
					FIRM USER</span></strong>
		</div>
		<div class="col-md-10">
			<ul class="list-unstyled breadcrumb breadcrumb-custom">
				<li><a href="javascript: void(0);">Firm</a></li>
				<li><span>Manage Firm User</span></li>

			</ul>
		</div>

		<section class="row">
			<div class="col-md-12">

				<section class="panel">
					<div class="panel-heading">
						<h3>Manage Firm Users</h3>
					</div>
					<div class="panel-body">
						<div class="demo-container" ng-app="DemoApp"
							ng-controller="DemoController">
							<div dx-data-grid="dataGridOptions"></div>
						</div>
					</div>
				</section>
			</div>
		</section>
	</section>
</section>


<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>
<script
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin-firm-user.js"></script>
