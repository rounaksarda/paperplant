<script>
var a= confirm("are you sure");
if(a==true)
{
	alert("in true");</script>
	<?php 
	echo "<script>document.write(a);</script>"; 
	?>
<script>
}
else {
	alert("in else");
}

</script>