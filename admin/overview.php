<?php 
include('authenticate.php'); 
include('head.php');
?>
<style type="text/css">
	#frame{
		border: none;
		margin: 0;
		padding: 0;
		height: 82vh;
		display: flex;
		justify-content: center;
	}
	.wide{
		width: 100%;
		height: 100%;
		transition: 0.5s;
	}
	.mid{
		width: 700px;
		height: 100%;
		transition: 0.5s;
	}
	.small{
		width: 500px;
		height: 100%;
		transition: 0.5s;
	}
	#tb{
		width: 100%;
	}
</style>
<table id="tb">
<tr>
	<td>
		<h3 style="font-weight: bold;">Overview</h3>
	</td>
	<td style="display: flex; justify-content: right; margin:0px 2px">
		<button id="lap" class="btn btn-outline-success btn-circle" style="border-radius: 100%" data-toggle="tooltip" data-placement="bottom" title="Desktop"><i class="fas fa-laptop"></i></button>
		<button id="tab" class="btn btn-outline-danger btn-circle" style="border-radius: 100%" data-toggle="tooltip" data-placement="bottom" title="Tablet"><i class="fa fa-tablet-alt" aria-hidden="true"></i></button>
		<button id="phone" class="btn btn-outline-primary btn-circle" style="border-radius: 100%" data-toggle="tooltip" data-placement="bottom" title="Phone"><i class="fa fa-mobile-alt" aria-hidden="true"></i></i></button>
	</td>
</tr>
</table>

<div id="frame">
<iframe src="../index.php" id="overview" class="wide"></iframe>
</div>
<script type="text/javascript">
	
	document.getElementById('lap').onclick = function() {
		var frame = document.getElementById('overview');
		frame.setAttribute("class", "wide");
	}
	document.getElementById('tab').onclick = function() {
		var frame = document.getElementById('overview');
		frame.setAttribute("class", "mid");
	}
	document.getElementById('phone').onclick = function() {
		var frame = document.getElementById('overview');
		frame.setAttribute("class", "small");
	}
</script>
<?php 
include('tail.php')
?>