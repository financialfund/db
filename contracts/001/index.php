<?php

$contract = '001';

set_include_path("../../");
include "data.php";

$query = mysqli_query($con, "select * from contract where user = '$contract' and status = 'active'");


?>

<script type="text/javascript">

	var obj = new Object();
	// {
	// 	// "Fixed":{"Entry": 0, "Units": 0, "Date": "", "Bonus": 0},
	// 	// "No Risk":{"Entry": 0, "Units": 0, "Date": "October, 12 2019", "Bonus": 0},
	// 	// "Low Risk": {"Entry": 2000, "Units": 5000, "Date": "October, 12 2019", "Bonus": 22844.5},
	// 	// "Medium Risk": {"Entry": 0, "Units": 0, "Date": "", "Bonus": 0},
	// 	// "High Risk": {"Entry": 0, "Units": 0, "Date": "", "Bonus": 0}
	// };

	<?php

	for ($i=0; $i < mysqli_num_rows($query); $i++) { 
        $re = mysqli_fetch_array($query);

            ?>
                obj[<?php echo "'",$re["type"],"'"; ?>] = new Object();
                obj[<?php echo "'",$re["type"],"'"; ?>]["Entry"] = <?php echo $re["entry"];?>;
                obj[<?php echo "'",$re["type"],"'"; ?>]["Units"] = <?php echo $re["units"];?>;
                obj[<?php echo "'",$re["type"],"'"; ?>]["Date"] = <?php echo "'",$re["date"],"'";?>;
                obj[<?php echo "'",$re["type"],"'"; ?>]["Bonus"] = <?php echo $re["bonus"];?>;

            <?php
        }

	?>

	console.log(obj);

</script>

<!DOCTYPE html>
<html>
<head>
	<title>001 - October, 12 2019</title>
	<meta charset="utf-8">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/responsive.css">
        <style type="text/css">
            body{
            overflow-x: hidden;
            user-select: none;
            -webkit-touch-callout: none;
  -webkit-user-select: none;
   -khtml-user-select: none;
     -moz-user-select: moz-none;
      -ms-user-select: none;
       -o-user-select: none;
          user-select: none;
        }

        </style>

        <script src="../../js/jquery-3.2.1.min.js"></script>
	    <script src="../../js/apexcharts.min.js"></script>
	    <script src="../../js/Chart.min.js"></script>
        <script type="text/javascript">

        function formatNumber(num) {
		  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
		}
        </script>
</head>
<body>

<div class="container-fluid" id="container">
<div class="row">
	<div class="col-lg-12">
		<h1 class="pt-4 pl-4 text-dark">Financial Fund</h1>
		<h4 class=" pl-4 text-dark">Contract <script type="text/javascript">document.write(document.title);</script></h4>
		<a onclick="printDiv()" href="#" class="pl-4 pb-4">print</a>
		<hr>
	</div>
</div>

<div class="row p-2 mb-4">
	<div class="card-group col-12">
	  <div class="card text-center">
	    <div class="card-body">
	      <h3 class="card-title" style="opacity: 0.8">Total Return</h3>
	      <h1 class="card-text" style="font-size: 48px; font-weight: 100;" id="return"></h1>
	    </div>
	  </div>

	  <div class="card text-center">
	    <div class="card-body">
	      <h3 class="card-title" style="opacity: 0.8">Total Invested</h3>
	      <h1 class="card-text" style="font-size: 48px; font-weight: 100;" id="invested"></h1>
	    </div>
	  </div>

	<div class="card text-center">
	    <div class="card-body">
	      <h3 class="card-title" style="opacity: 0.8">Net P/L</h3>
	      <h1 class="card-text" style="font-size: 48px; font-weight: 100;" id="pl"></h1>
	    </div>
	  </div>
	  
</div>
</div>


<div class="row">
	<div class="col-12">
		<div id="chart1"></div>
	</div>
</div>

<div class="row">
	<div class="col-12 table-responsive">
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Risk</th>
		      
		      <th scope="col">Entry</th>
		      <th scope="col">Current</th>
		      <th scope="col">Units</th>
		      <th scope="col">P/L</th>
		      <th scope="col">P/L(%)</th>
		      <th scope="col">Bonus</th>
		      <th scope="col">Invested</th>
		      <th scope="col">Total</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<script type="text/javascript">
		  		var shares = []

		  		var dict = {"Fixed":fixed, "No Risk":ninetyfive, "Low Risk":ninety, "Medium Risk":doublerisk, "High Risk":ultrarisk};

		  		for (var i in obj) {
		  			if(obj[i]["Units"]>0) shares.push(i);
		  		}

		  		var _units = 0;
		  		var _entry = 0;
		  		var _current = 0;
		  		var _profit = 0;
		  		var _bonus = 0;
		  		var _invested = 0;
		  		var _total =0

		  		for (var i = 0; i < shares.length; i++) {
		  			var current = dict[shares[i]][dict[shares[i]].length-1];
		  			var entry = obj[shares[i]]["Entry"];

		  			var bonus = obj[shares[i]]["Bonus"];
		  			_bonus+=bonus;

		  			var units = obj[shares[i]]["Units"];
		  			_units+=units;

		  			var profit = (current*units)-(entry*units);
		  			_profit+=profit;

		  			var percent = current/entry*100-100;

		  			_entry += entry*units;
		  			_current += current*units;

		  			var total = current*units+bonus;
		  			_total+=total;

		  			var Invested = entry*units;
		  			_invested+=Invested;

		  			document.write("<tr>");
		  			document.write("<th scope='row'>"+(i+1)+"</th>");
		  			document.write("<td>"+shares[i]+"</td>");
		  			document.write("<td>"+entry+"</td>");
		  			document.write("<td>"+current+"</td>");
		  			document.write("<td>"+formatNumber(units)+"</td>");

		  			if (profit>=0) {
		  				document.write("<td style='color: #2ec551'>");
		  			}
		  			else{
		  				document.write("<td style='color: red'>");
		  			}
		  			document.write(formatNumber(Math.abs(profit.toFixed(2)))+"</td>");

		  			if (percent>=0) {
		  				document.write("<td style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
		  			}
		  			else{
		  				document.write("<td style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
		  			}
		  			document.write(Math.abs(percent.toFixed(2))+"%</td>");

		  			document.write("<td>"+formatNumber(bonus.toFixed(2))+"</td>");

		  			document.write("<td>"+formatNumber(Invested.toFixed(2))+"</td>");
		  			document.write("<td>"+formatNumber(total.toFixed(2))+"</td>");

		  			document.write("</tr>");

		  			
		  		}

		  	</script>

		    <tr>
		    	<th scope="row" colspan="4" style="font-size: 20px">Total: </th>
		    	<script>
		    		var gain = ((_current/_entry*100-100)).toFixed(2);
		    		var gaincommission = (((_current+_bonus)/_entry*100-100)).toFixed(2);
		    		document.write("<th>"+formatNumber(_units)+"</th>");

		    		if (profit>=0) {
		  				document.write("<th style='color: #2ec551'>");
		  				$("#pl").html("<span style='color: #2ec551'>"+formatNumber((Math.abs(_profit)+_bonus).toFixed(2))+"</span>");
		  			}
		  			else{
		  				document.write("<th style='color: red'>");
		  				$("#pl").html("<span style='color: red'>"+formatNumber((Math.abs(_profit)+_bonus).toFixed(2))+"</span>");
		  			}
		    		document.write(formatNumber(Math.abs(_profit.toFixed(2)))+"</th>");
		    		
		    		if (gain>=0) {
		  				document.write("<th style='color: #2ec551'> <i class='fa fa-fw fa-arrow-up'></i>");
		  				$("#return").html("<span style='color: #2ec551'>"+Math.abs(gaincommission).toFixed(2)+"%</span>");
		  			}
		  			else{
		  				document.write("<th style='color: red'> <i class='fa fa-fw fa-arrow-down'></i>");
		  				$("#return").html("<span style='color: red'>"+Math.abs(gaincommission).toFixed(2)+"%</span>");
		  			}
		    		document.write(Math.abs(gain)+"%</th>");
		    		document.write("<th>"+formatNumber(_bonus.toFixed(2))+"</th>");
		    		document.write("<th>"+formatNumber(_invested.toFixed(2))+"</th>");
		    		document.write("<th>"+formatNumber(_total.toFixed(2))+"</th>");

		    		$("#invested").text(formatNumber(_invested.toFixed(2)));

		    		
		    	</script>


		    	
		    </tr>
		  </tbody>
		</table>
	</div>
</div>

<!-- <div class="row">
	<div class="col-10 m-auto">
		<canvas id="myarea" style="height: 500px"></canvas>
	</div>
</div> -->


<script type="text/javascript">
		    		
function printDiv() {
     var printContents = document.getElementById("container").innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<script type="text/javascript">
	var series = [];
	var sum = [];
	var data = {};
	var equity = [];


	//shares = name
	for (var i = 0; i < shares.length; i++) {

		data["name"] = shares[i];
		var buy = obj[shares[i]]["Entry"];
		var qty = obj[shares[i]]["Units"];
		var a = dict[shares[i]];

		for (var j = 0; j < a.length; j++) {
			if(buy<=a[j]){
				equity.push((a[j]*qty).toFixed(2));
			}
		}

		for (var k = 0; k < equity.length; k++) {
			if(typeof sum[k] === 'undefined') {
				sum[k] = parseFloat(equity[k]);
			}
			else{
				sum[k] += parseFloat(equity[k]);
			}
		}

		data["data"] = equity;
		series.push(data);

		data = {};
		equity = [];
	}

series = [];
data["name"] = "Total";
data["data"] = sum;
series.push(data);

var options = {
    chart: {
        height: 400,
        type: 'area',
        toolbar:{
            show: false,
        },
        animations:{
            enabled: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    series: series
    ,
    xaxis: {
    	labels: {
    		show: false,
    	},
        type: 'text',               
    },
    yaxis: {
	  labels: {
	    formatter: function (value) {
	      return formatNumber(value);
	    }
	  },
	  forceNiceScale: true,
	  min: Math.min(...series[0]["data"])
	},
    tooltip: {
    	inverseOrder: true,
        enabled: true,
    },
    legend:{
    	position: 'bottom',
    },
    stroke:{
        curve: 'smooth',
    	width: 1,
    },
    colors:['#2ec551']
   
}

var all = new ApexCharts(document.querySelector("#chart1"),options);
all.render();

// new Chart(document.getElementById("myarea"),{"type":"line",
// 	"data":{
//     "labels":series[0]["data"],
//     "datasets":[
//     {"label":["Return"],"data":series[0]["data"],
//     "fill":true,
//     "borderColor":"#5C6BC0",
//     backgroundColor: 'rgba(92,107,192,0.2)',
//     }]},
//     "options":{
//         maintainAspectRatio: false,
//         tooltips: {
//             mode: "nearest",
//             intersect: false,
//           },
//           legend:{
//             display: false,
//           },
//         plugins: {
//           datalabels: {
//              display: false
//           }
//         },

//     }});

</script>
</div>
</body>
</html>
