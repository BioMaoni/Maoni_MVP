$(document).ready(function() {
var chart = new CanvasJS.Chart("chartContainer", { 
        axisY: {
		title: "Fact<--Subjectivity-->Opinion"
	   },
        axisX: {
		title: "Negative<--Sentiment (Polarity)-->Positive"
	   },
		data: [
		{
			type: "scatter",
			dataPoints: [
				{ x: 0.204898, y: 0.461359, label: "01/08/2021", color: "#4e73df", markerSize: 10 },
				{ x: 0.165018, y:  0.441554, label: "01/15/2021", color: "#4e73df", markerSize: 10 },
				{x: 0.178367, y: 0.460202, label: "01/22/2021", color: "#4e73df", markerSize: 10 },
				{ x: 0.143397, y:  0.489541, label: "01/29/2021", color: "#4e73df", markerSize: 10 },
                { x: 0.144227, y:  0.475953, label: "02/05/2021", color: "#4e73df", markerSize: 10 }
			]
		}
		]
	});
    chart.render();
    var chart2 = new CanvasJS.Chart("chart2", {
        axisY: {
		maximum: 0.22,
        minimum: 0.12,
        interval: 0.02
	   },
	data: [{        
		type: "line",  
		dataPoints: [      
			{ y: 0.205, label: "01/08/2021", color: "#4e73df", markerSize: 10},
			{ y: 0.165,  label: "01/15/2021", color: "#4e73df", markerSize: 10},
			{ y: 0.178,  label: "01/22/2021", color:"#4e73df", markerSize: 10 },
            { y: 0.143,  label: "01/29/2021", color:"#4e73df", markerSize: 10 },
            { y: 0.144,  label: "02/05/2021", color:"#4e73df", markerSize: 10 }
		]
	}]
});
    chart2.render();
    var chart3 = new CanvasJS.Chart("chart3", {
        axisY: {
		maximum: 0.24,
        minimum: -0.02,
        interval: 0.02
	   },
	data: [{        
		type: "column",
		dataPoints: [      
			{ y: 0.1186, label: "01/08/2021", color: "#4e73df"},
			{ y: 0.1086,  label: "01/15/2021", color: "#4e73df"},
			{ y: 0.2344,  label: "01/22/2021", color:"#4e73df" },
			{ y: 0.1810,  label: "01/29/2021", color:"#4e73df" },
			{ y: 0.1365,  label: "02/05/2021", color:"#4e73df" }
		]
	}]
});
    chart3.render();
    var chart4 = new CanvasJS.Chart("chart4", {
        axisY: {
		maximum: 0.24,
        minimum: -0.02,
        interval: 0.02
	   },
	data: [{        
		type: "column",  
		dataPoints: [      
			{ y: 0.0625, label: "01/08/2021", color: "#4e73df"},
			{ y: 0.1364,  label: "01/15/2021", color: "#4e73df"},
			{ y: 0.0537,  label: "01/22/2021", color:"#4e73df" },
			{ y: 0.1247,  label: "01/29/2021", color:"#4e73df" },
			{ y: 0.0558,  label: "02/05/2021", color:"#4e73df" }
            ]
	}]
});
    chart4.render();
    var chart5 = new CanvasJS.Chart("chart5", {
        axisY: {
		maximum: 0.24,
        minimum: -0.02,
        interval: 0.02
	   },
	data: [{        
		type: "column",  
		dataPoints: [      
			{ y: 0.1341 , label: "01/08/2021", color: "#4e73df"},
			{ y: 0.1012,  label: "01/15/2021", color: "#4e73df"},
			{ y: 0.1042,  label: "01/22/2021", color:"#4e73df" },
			{ y: 0.1557,  label: "01/29/2021", color:"#4e73df" },
			{ y: 0.0777,  label: "02/05/2021", color:"#4e73df" }
            ]
	}]
});
    chart5.render();
    var chartt = new CanvasJS.Chart("chartt", {
        axisY: {
		maximum: 0.24,
        minimum: -0.02,
        interval: 0.02
	   },
	data: [{        
		type: "column",  
		dataPoints: [      
			{ y: 0.017 , label: "01/08/2021", color: "#4e73df"},
			{ y: 0.025,  label: "01/15/2021", color: "#4e73df"},
			{ y: -0.006,  label: "01/22/2021", color:"#4e73df" },
			{ y: -0.008,  label: "01/29/2021", color:"#4e73df" },
			{ y: 0.122,  label: "02/05/2021", color:"#4e73df" }
		]
	}]
});
    chartt.render();
    var team = new CanvasJS.Chart("team", {
        axisY: {
		maximum: 0.22,
        minimum: -0.08,
        interval: 0.02
	   },
	data: [{        
		type: "column",  
		dataPoints: [      
			{ y: 0.1304, label: "01/08/2021", color: "#4e73df"},
			{ y: 0.0059,  label: "01/15/2021", color: "#4e73df"},
			{ y: 0.0521,  label: "01/22/2021", color:"#4e73df" },
			{ y: 0.1855,  label: "01/29/2021", color:"#4e73df" },
			{ y: 0.0083,  label: "02/05/2021", color:"#4e73df" }
		]
	}]
});
    team.render();
    var team2 = new CanvasJS.Chart("team2", {
        axisY: {
		maximum: 0.22,
        minimum: -0.08,
        interval: 0.02
	   },
	data: [{        
		type: "column",  
		dataPoints: [      
			{ y: -0.0375, label: "01/08/2021", color: "#4e73df"},
			{ y: 0.1017,  label: "01/15/2021", color: "#4e73df"},
			{ y: 0.1017,  label: "01/22/2021", color:"#4e73df" },
			{ y: 0.0059,  label: "01/29/2021", color:"#4e73df" },
			{ y: 0.1274,  label: "02/05/2021", color:"#4e73df" }
		]
	}]
});
    team2.render();
    var team3 = new CanvasJS.Chart("team3", {
        axisY: {
		maximum: 0.22,
        minimum: -0.08,
        interval: 0.02
	   },
	data: [{        
		type: "column",  
		dataPoints: [      
			{ y: 0.1250 , label: "01/08/2021", color: "#4e73df"},
			{ y: 0.0650,  label: "01/15/2021", color: "#4e73df"},
			{ y: 0.0904,  label: "01/22/2021", color:"#4e73df" },
			{ y: 0.1266,  label: "01/29/2021", color:"#4e73df" },
			{ y: 0.2151,  label: "02/05/2021", color:"#4e73df" }
		]
	}]
});
    team3.render();
    var team4 = new CanvasJS.Chart("team4", {
        axisY: {
		maximum: 0.22,
        minimum: -0.08,
        interval: 0.02
	   },
	data: [{        
		type: "column",  
		dataPoints: [      
			{ y: 0.1667 , label: "01/08/2021", color: "#4e73df"},
			{ y: 0.1155,  label: "01/15/2021", color: "#4e73df"},
			{ y: -0.0375,  label: "01/22/2021", color:"#4e73df" },
			{ y: -0.0631,  label: "01/29/2021", color:"#4e73df" },
			{ y: 0.1516,  label: "02/05/2021", color:"#4e73df" }
		]
	}]
});
    team4.render();
});