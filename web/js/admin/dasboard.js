var DemoApp = angular.module('DemoApp',['dx']);


DemoApp.controller('DemoController', function DemoController($scope) {
 
    
    $scope.events = "";
    
    $scope.dataGridOptions = {
        dataSource: employees,
        paging: {
            enabled: false
        },
        editing: {
            mode: "row",
            allowUpdating: true,
            allowDeleting: true,
            allowAdding: true
        }, 
        columns: [
            {
                dataField: "Firm",
                caption: "Title"
            }, 
            "Clientname",
            "Plantype",
            "Fees",
            
        ],
        onEditingStart: function(e) {
           
        },
        onInitNewRow: function(e) {
            
        },
        onRowInserting: function(e) {
            
        },
        onRowInserted: function(e) {
            
        },
        onRowUpdating: function(e) {
            
        },
        onRowUpdated: function(e) {
           
        },
        onRowRemoving: function(e) {
            
        },
        onRowRemoved: function(e) {
           
        }
    };
   
    
});
		
	
		$(function(){
				
			  <!-- Start JS and CSS Links -->

				
		      
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
		
		var employees = [{
		    "ID": 1,
		    "Firm": "Robert Company",
		    "Clientname": "Robert",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 2,
		    "Firm": "Ravi company",
		    "Clientname": "Ravi",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 3,
		    "Firm": "Pavan company",
		    "Clientname": "Pavan",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 4,
		    "Firm": "Angad Company",
		    "Clientname": "Angad",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 5,
		    "Firm": "Vinod Company",
		    "Clientname": "Vinod",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 6,
		    "Firm": "Akshay Company",
		    "Clientname": "Akshay",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}, {
		    "ID": 7,
		    "Firm": "Sai Company",
		    "Clientname": "Sai",
		    "Plantype": "Mr.",
		    "Fees": "989",
		   
		}];

		