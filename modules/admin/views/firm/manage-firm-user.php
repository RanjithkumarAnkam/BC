
<?php
?>

<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

	<div class="col-md-12 col-xs-12 header-main">
				<div class="col-md-11 col-xs-11">
					<span style="font-size: 22px;">Manage Firm Users</span>
				</div>
				<div class="col-md-1 col-xs-1">
					<i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<i
						class="fa fa-list menuBtn" aria-hidden="true"></i>
				</div>
			</div>

		
			<div class="col-md-12">

				<div class="row padding-top-20 padding-bottom-20">
					<div class="col-lg-12">
						 
							<div class="widget widget-six">
							<!-- <div class="widget-header">
							<strong class="margin-right-10">Manage Admin Users</strong>	 
							</div>-->
							<div class="panel-body">
								<!-- div starting for Manage Clients grid -->
								<div class="">
									<div class="demo-container" ng-app="DemoApp"
										ng-controller="DemoController">
										<div dx-data-grid="dataGridOptions"></div>
									</div>
								</div>

								<!-- div end for Manage Clients grid -->
							</div>
						 </div>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>

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
 -->


<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/managefirmusers.js"></script>
	
	<script>
	$(document).ready( function (){
		 $(".dx-toolbar-before").html('<strong class="font-16">Manage Firm Users</strong>');
	});
	
	</script>

<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/web/themes/dev-express/js/admin-firm-user.js"></script>

