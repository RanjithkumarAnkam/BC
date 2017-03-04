
<?php
?>

<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

				<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-11 col-xs-11">
					<span style="font-size: 22px;">Manage Firms</span>
				</div>
				<div class="col-md-1 col-xs-1">
					<i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i
						class="fa fa-list menuBtn" aria-hidden="true"></i>
				</div>
			</div>
			<div class="col-md-12">

				<div class="row padding-top-20 padding-bottom-20">
					<div class="col-lg-12">
						<section class="panel">
					
							<div class="panel-body">
							<div class="row">
							<div class="col-md-12 padding-top-10 padding-bottom-10">
							<div class="col-md-2 padding-left-8"><label class="margin-top-10"><b> Search :</b></label></div>
								<div class="col-md-4">
								<input class="form-control" type="text"/>
								</div>
								</div>
								</div>
								<!-- div starting for Manage Clients grid -->
								<div class="">
									<div class="demo-container" ng-app="DemoApp"
										ng-controller="DemoController">
										<div dx-data-grid="dataGridOptions"></div>
									</div>
								</div>

								<!-- div end for Manage Clients grid -->
							</div>
						</section>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>

<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/managefirms.js"></script>
	
	<script>
		$(document).ready(function(){
	 $("#master_data").css("display","block");
	 $("#master_data  li.billing_li a.billing_a").css("color","black");
	 $(".dx-toolbar-before").html('<strong class="font-16">Manage Firms</strong>');
});
</script>


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

