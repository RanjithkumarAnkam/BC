
<section class="page-content">
	<section class="page-content-inner">

		<div class="dashboard-container">
			<div class="row padding-bottom-20">
				<div class="col-md-12 header">
					<b class="padding-left-10">Manage Firms</b>
				</div>
			</div>
			<div class="margin-bottom-10">
				<div class="col-md-9">
					<ul class="list-unstyled breadcrumb breadcrumb-custom">
						<li><a href="javascript: void(0);">Firm</a></li>
						<li><a href="javascript: void(0);">Manage Firm</a></li>
					</ul>
				</div>				
			</div>			
		 <section class="row">
			<div class="col-md-12">

				<section class="panel">
					<div class="panel-heading">
						<h3>Manage Firms</h3>
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
		</div>
		
		
	</section>
</section>


<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>
<script
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/dev-express/js/admin-firm.js"></script>
