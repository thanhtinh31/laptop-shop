<?php
	include 'connect.php';
	$idhd=filter_input(INPUT_GET,'id');
	if(isset($idhd))
	{	
		$sql_update="UPDATE hoa_don set TrangThai=1 where MaHD=$idhd";
		$result_update=mysqli_query($conn,$sql_update);
		if($result_update)
		{header("Location: donhangchoxetduyet.php");
		}
		else
		{
			echo " Chuyển trạng thái đơn không thành công";
		}

	}
?>