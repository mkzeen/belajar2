<html>
<head>
<style>
p.inline {display: inline-block; margin-top: 0px; margin-left:-6px;}
span { font-size: 10px; font-family: Calibri;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div>
		<?php
		include 'barcode128.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];
		$rate = $_POST['rate'];
		$abc = 1;
		for($i=1;$i<=$_POST['print_qty'];$i++){
		$aaa = $_POST['product_id']+$i;
		
			if($abc == 1){
			echo "<p class='inline'><span >Timbo 5galon super</span>".bar128(stripcslashes($aaa))."<span >Rp.500.000<span></p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			$abc++;
			} elseif($abc == 2) {
			echo "<p class='inline'><span >Timbo 5galon super</span>".bar128(stripcslashes($aaa))."<span >Rp.500.000<span></p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			";
			$abc++;
			} elseif($abc == 3) {
			?>
			<p class='inline' <?php if($i>3) { echo "style='margin-top: 6px'"; }?>><span >Timbo 5galon super</span><?= bar128(stripcslashes($aaa)) ?><span >Rp.500.000<span><br><span style="margin-top:-1px"><?=$aaa?></span></p><br>
			<?php
			$abc = 1;
			}
			
		}

		?>
	</div>
</body>
</html>