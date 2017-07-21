<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<script type="text/javascript" src='sb2-js/script/ZipFile.complete.js'></script>
		<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/rgbcolor.js"></script> 
		<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/canvg.js"></script> 
		<script type="text/javascript" src="sb2-js/script/sb2.js"></script> 
	</head>
	<body>
		<h1 style="text-align:center;"><{$smarty.const.MD_SCRATCH_GALLERY}></h1>
		<hr />
		<div class="container"  style="text-align: center;">
			<div class="row">
				<canvas id='scratch' width='486' height='391' tabindex='1'>
				 
				</canvas>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<select id="urlToLoad" class="form-control">
						<{foreach from=$filenames item=filename}>
							<option><{$filename}></option>
						<{/foreach}>
					</select>
				</div>
				<div class="col-md-2">
					<input	onclick='ReadFile("get_sb2.php?filename="+ document.getElementById("urlToLoad").value)'
					type='button' 
					title='Play' 
					class='form-control'
					value='Play'/>				
				</div>
			</div>
		</div>	
	</body>
</html>
