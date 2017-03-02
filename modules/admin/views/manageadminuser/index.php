<?php
?>

<section class="page-content padding-0">
	<div class="page-content-inner">

		<!-- clients -->
		<div class="dashboard-container">

		<div class=""
				style="background: white; margin-bottom: 10px; padding: 15px; border-bottom: 1px solid #ddd;">
				<span style="font-size: 22px;">Manage Admin Users</span>
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

<script
	src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.4/js/dx.all.js"></script>


<script type="text/javascript"
	src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/admin/adminusers.js"></script>
	
	<script>
	$(document).ready( function (){
		 $(".dx-toolbar-before").html('<strong class="font-16">Manage Admin Users</strong>');
	});
	
	</script>