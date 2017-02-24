
<section class="page-content">
	<div class="page-content-inner">

		<!-- Dashboard -->
		<div class="dashboard-container">

			<div class="row">
				<div class="col-md-12 padding-bottom-10">
					<div class="col-lg-3 col-md-3 col-xs-6">
						<label>Search Firms</label>
						 <select class="form-control">
							<option value="1">value 1</option>
							<option value="2">value 2</option>
							<option value="3">value 3</option>
							<option value="4">value 4</option>
							<option value="5">value 5</option>
						</select>
						<button class="btn btn-info margin-top-5 pull-right color-orange" type="button">+ New</button>
						</div>
				 
					<div class="col-lg-3 col-md-3 col-xs-6">
						<label>Search Firm Users</label> <select class="form-control">
							<option value="1">value 1</option>
							<option value="2">value 2</option>
							<option value="3">value 3</option>
							<option value="4">value 4</option>
							<option value="5">value 5</option>
						</select>
						<button class="btn btn-info margin-top-5 pull-right color-orange" type="button">+ New</button>
					</div>
					<div class="col-lg-3 col-md-3 col-xs-6">
						<label>Search Clients</label> <select class="form-control">
							<option value="1">value 1</option>
							<option value="2">value 2</option>
							<option value="3">value 3</option>
							<option value="4">value 4</option>
							<option value="5">value 5</option>
						</select>
						<button class="btn btn-info margin-top-5 pull-right color-orange" type="button">+ New</button>
					</div>
					<div class="col-lg-3 col-md-3 col-xs-6">
						<label>Search Client Users</label>
						<div class="form-input-icon form-input-icon-right">
							<i class="icmn-search"></i> <input type="text"
								class="form-control" placeholder="" id="l33">
						</div>
						<button class="btn btn-info margin-top-5 pull-right color-orange" type="button">+ New</button>
					</div>
				</div>
			</div>
			
			<div class="row padding-top-20 padding-bottom-10">
				<div class="col-md-12">
					<div class="col-md-7">
					
					<div class="row">
					<div class="col-md-12">
					<div class="col-md-6"><label class="font-16"><b>Select Month/Year</b></label></div>
					<div class="col-md-6">
					<select class="form-control">
					<option>2017</option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					</select></div>
					</div>
					</div>
					
					<div class="row padding-top-20 padding-bottom-10">
					<div class="col-md-12">
					<div class="col-md-6"><label class="font-16"><b>Monthly Billing</b></label></div>
					<div class="col-md-6">$6566.6562
					 </div>
					</div>
					</div>
					
				<div class="row padding-top-20 padding-bottom-10">
                <div class="col-lg-12">
                <label class="font-16"><b>Plan Renewals</b></label>
                    <div class="table-responsive margin-bottom-50">
                        <table class="table table-hover nowrap editable-table" id="example1">
                            <thead class="table-back color-white">
                            <tr>
                                <th>Firm</th>
                                <th>Client Name</th>
                                <th>Plan Type</th>
                                <th>Fees</th>
                               
                            </tr>
                            </thead>
                            
                            <tbody>
                            <tr>
                                <td><a>Damon</a></td>
                                <td><a>5516 Adolfo Green</a></td>
                                <td>Littelhaven</td>
                                <td>85</td>
                               
                            </tr>
                            <tr>
                                <td><a>Torrey</a></td>
                                <td><a>1995 Richie Neck</a></td>
                                <td>West Sedrickstad</td>
                                <td>77</td>
                                
                            </tr>
                            <tr>
                                <td><a>Miracle</a></td>
                                <td><a>176 Hirthe Squares</a></td>
                                <td>Ryleetown</td>
                                <td>82</td>
                              
                            </tr>
                            <tr>
                                <td><a>Wilhelmine</a></td>
                                <td><a>44727 O&#x27;Hara Union</a></td>
                                <td>Dibbertfurt</td>
                                <td>68</td>
                             
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
					
					
					
					</div>
					<div class="col-md-5">
					
					 <div class="col-md-12">
                    <h4 class="text-center">Firms (by module)</h4>
                    <br />
                    <div class="margin-bottom-50">
                        <!-- Doughnut Chart -->
                        <canvas id="chart-doughnut" width="400" height="200"></canvas>
                        <!-- End Doughnut Chart -->
                    </div>
                </div>
                
                <div class="col-md-12">
                    <h4 class="text-center">Total Plans (by plan type)</h4>
                    <br />
                    <div class="margin-bottom-50">
                        <!-- Doughnut Chart -->
                        <canvas id="chart-doughnut-2" width="400" height="200"></canvas>
                        <!-- End Doughnut Chart -->
                    </div>
                </div>
                </div>
				</div>
			</div>
		</div>
	</div>

</section>

<script>
 
 $(function () {

	    $('#example1').editableTableWidget();

	    $('#example2').editableTableWidget();

	      
        // DOUGHTNUT CHART
        var doughnutCtx = document.getElementById('chart-doughnut').getContext('2d');

        var chartDoughnut = {
            labels: [
                "Plans Claims Reporting",
                "Population Health",
                "Stewardship Reporting"
            ],
            datasets: [
                {
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
        };

        new Chart(doughnutCtx, {
            type: 'doughnut',
            data: chartDoughnut
        });


        // DOUGHTNUT CHART
        var doughnutCtx = document.getElementById('chart-doughnut-2').getContext('2d');

        var chartDoughnut = {
            labels: [
                "Medical & Rx",
                "Dental",
                "Vision"
            ],
            datasets: [
                {
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
        };

        new Chart(doughnutCtx, {
            type: 'doughnut',
            data: chartDoughnut
        });
        


    });
</script>