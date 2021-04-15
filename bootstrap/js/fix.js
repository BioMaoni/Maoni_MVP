window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", { 
		title: {
			text: "Sentiment Score pinions Over Time"
		},
        axisY: {
		title: "<-Facts-Opinions->"
	   },
        axisX: {
		title: "<-Negative-Positive->"
	   },
		data: [
		{
			type: "scatter",
			dataPoints: [
				{ x: 0.204898, y: 0.461359, color: "#4e73df" },
				{ x: 0.165018, y:  0.441554, color: "#4e73df" },
				{x: 0.178367, y: 0.460202, color: "#4e73df" },
				{ x: 0.143397, y:  0.489541, color: "#4e73df" },
                { x: 0.144227, y:  0.475953, color: "#4e73df" }
			]
		}
		]
	});
   /* var chart2 = new CanvasJS.Chart("chartContainer2", {
	title:{
		text: "Merchant"
	},
	data: [{        
		type: "column",  
		dataPoints: [      
			{ y: 10, label: "Category 1", color: "#4e73df"},
			{ y: 20,  label: "Category 3", color: "#4e73df"},
			{ y: 30,  label: "Catefory 4", color:"#4e73df" }
		]
	}]
});*/
	chart.render();	
    //chart2.render();

}