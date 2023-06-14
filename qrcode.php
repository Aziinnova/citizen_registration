<?php
require_once 'connection.php';
require_once 'phpqrcode/qrlib.php';
$path = 'image/';
$qrcode = $path.time().".png";
$qrimage = time().".png";

if(isset($_REQUEST['sbt-btn']))
{
$qrtext = $_REQUEST['qrtex'];
$name = $_REQUEST['name'];

$query = mysqli_query($connection,"insert into qrcode set qrtex='$qrtex', qrimage='$qrimage'");
	if($query)
	{
		?>
		<script>
			alert("Data save successfully");
		</script>
		<?php
	}
}

QRcode :: png($qrtet, $qrcode, 'H', 4, 4);
echo "<img src='".$qrcode."'>";
echo "<img src='".$qrcode."'>";

echo "<img src='".$qrcode."'>";

?>