<?php
class csdl
{
	function connect()
	{
		$host = "localhost";
		$user = "root";
		$password = "";
		$dbname = "sunshine_elearning";
		$connect = mysqli_connect($host, $user, $password, $dbname);
	}
	function xuatsp($sql)
	{
	$link = $this->connect();
	$kq = mysql_query($sql,$link);
	$i = mysql_num_rows($kq);
	if($i>0)
		{
			echo '<table width="739" border="1">
					<tbody>
					  <tr align="center" valign="middle">
						<td width="42">STT</td>
						<td width="126">Tên sản phẩm</td>
						<td width="94">Giá</td>
						<td width="111">Kiểu dáng</td>
						<td width="120">Nhà sản xuất</td>
						<td width="200">Dung tích</td>
					  </tr>';
		$dem = 1;
		while($row = mysql_fetch_array($kq))
			{
				$id = $row['id'];
				$tensp = $row['tensp'];
				$gia = $row['gia'];
				$hinh = $row['hinh'];
				$kieudang = $row['kieudang'];
				$nsx = $row['nsx'];
				$dungtich = $row['dungtich'];
			
			echo '<tr align="left" valign="middle">
					<td>'.$dem.'</td>
					<td>'.$tensp.'</td>
					<td>'.$gia.'</td>
					<td>'.$kieudang.'</td>
					<td>'.$nsx.'</td>
					<td>'.$dungtich.'</td>
				  </tr>';
			$dem++;

		}
		echo '</tbody>
  			</table>';
	}else
		{
			echo 'Chua cap nhat san pham !';
		}	
	}
	function xuatct($sql)
	{
	$link = $this->connect();
	$kq = mysql_query($sql,$link);
	$i = mysql_num_rows($kq);
	if($i>0)
		{
	
		while($row = mysql_fetch_array($kq))
			{
				$id = $row['id'];
				$tencty = $row['tencty'];
			echo '<a style="color:black " href="?id='.$id.'">'.$tencty.'</a>';
			echo '<br><br>';

		}
	}else
		{
			echo 'Chua cap nhat cong ty !';
		}	
	}
	function combocty($sql)
	{
	$link = $this->connect();
	$kq = mysql_query($sql,$link);
	$i = mysql_num_rows($kq);
	if($i>0)
		{
		echo '<select name="congty" id="congty">
              <option value="0">Mời chọn công ty</option>';
		while($row = mysql_fetch_array($kq))
			{
				$id = $row['id'];
				$tencty = $row['tencty'];
				echo '<option value="'.$id.'">'.$tencty.'</op
				tion>';
		}
		echo '</select>';
	}else
		{
			echo 'Chua cap nhat cong ty !';
		}	
	}
	function loadsp($sql){
		$link = $this->connect();
		$ketqua= mysql_query($sql,$link);
		$i = mysql_num_rows($ketqua);
		if($i>0){
			while($row=mysql_fetch_array($ketqua)){
				$id=$row['id'];
				$tensp=$row['tensp'];
				$gia=$row['gia'];
				$hinh=$row['hinh'];
				
				echo '<div class="col-lg-4 col-md-6">
						<div class="product-item">
						  <a href="car-details.php?id='.$id.'"><img src="assets/images/'.$hinh.'" width="200px" height="220px" alt=""></a>
						  <div class="down-content">
							<a href="car-details.php?id='.$id.'"><h4 style="font-size:25px">'.$tensp.'</h4></a>
							<h6>Price: '.$gia.'</h6>
						  </div>
						</div>
					  </div>';
			}
		}else{
			echo 'Dang cap nhat san pham!';
		}
	}
	function upload($local,$folder,$name)
	{
		if($local != '' && $folder != '' && $name != '')
		{
			$newname = $folder."/".$name;
			if(move_uploaded_file($local,$newname))
			{
				return 1;
			}else
			{
				return 0;
			} 	
		}else
		{
			return 0;
		}	
	}
	function upload1($local1,$folder1,$hinh1)
	{
		if($local1 != '' && $folder1 != '' && $hinh1 != '')
		{
			$newname = $folder1."/".$hinh1;
			if(move_uploaded_file($local1,$newname))
			{
				return 1;
			}else
			{
				return 0;
			} 	
		}else
		{
			return 0;
		}	
	}
	function upload2($local2,$folder2,$hinh2)
	{
		if($local2 != '' && $folder2 != '' && $hinh2 != '')
		{
			$newname = $folder2."/".$hinh2;
			if(move_uploaded_file($local2,$newname))
			{
				return 1;
			}else
			{
				return 0;
			} 	
		}else
		{
			return 0;
		}	
	}
	function upload3($local3,$folder3,$hinh3)
	{
		if($local3 != '' && $folder3 != '' && $hinh3 != '')
		{
			$newname = $folder3."/".$hinh3;
			if(move_uploaded_file($local3,$newname))
			{
				return 1;
			}else
			{
				return 0;
			} 	
		}else
		{
			return 0;
		}	
	}
	function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysql_query($sql,$link))
	{
		return 1;
	}else
	{
		return 0;
	}	
	}
	
	function loadctsp($sql){
			$link = $this->connect();
			$ketqua= mysql_query($sql,$link);
			$i = mysql_num_rows($ketqua);
			if($i>0){
				while($row=mysql_fetch_array($ketqua)){
					$id=$row['id'];
					$tensp=$row['tensp'];
					$gia=$row['gia'];
					$hinh=$row['hinh'];
					$kieudang = $row['kieudang'];
					$nsx = $row['nsx'];
					$dungtich = $row['dungtich'];
					$hinh1=$row['hinh1'];
					$hinh2=$row['hinh2'];
					$hinh3=$row['hinh3'];

					echo '<div class="products">
							  <div class="container">
								<div class="row">
								  <div class="col-md-6">
									<div>
									  <img src="assets/images/'.$hinh.'" alt="" class="img-fluid wc-image">
									</div>
									<br>
									<div class="row">
									  <div class="col-sm-4 col-6">
										<div>
										  <img src="assets/images/'.$hinh1.'" alt="" class="img-fluid">
										</div>
										<br>
									  </div>
									  <div class="col-sm-4 col-6">
										<div>
										  <img src="assets/images/'.$hinh2.'" alt="" class="img-fluid">
										</div>
										<br>
									  </div>
									  <div class="col-sm-4 col-6">
										<div>
										  <img src="assets/images/'.$hinh3.'" alt="" class="img-fluid">
										</div>
										<br>
									  </div>
									</div>
								  </div>
								<div class="col-md-6">
									<form action="#" method="post" class="form">
									  <ul class="list-group list-group-flush">
									   <li class="list-group-item">
											<div class="clearfix">
												 <span class="pull-left">Tên xe</span>

												 <strong class="pull-right">'.$tensp.'</strong>
											</div>
									   </li>

									   <li class="list-group-item">
											<div class="clearfix">
												 <span class="pull-left">Giá</span>

												 <strong class="pull-right">'.$gia.'</strong>
											</div>
									   </li>

									   <li class="list-group-item">
											<div class="clearfix">
												 <span class="pull-left">Kiểu dáng</span>

												 <strong class="pull-right">'.$kieudang.'</strong>
											</div>
									   </li>

									   <li class="list-group-item">
											<div class="clearfix">
												 <span class="pull-left">Nhà sản xuất</span>

												 <strong class="pull-right">'.$nsx.'</strong>
											</div>
									   </li>
									   <li class="list-group-item">
											<div class="clearfix">
												 <span class="pull-left">Dung tích</span>

												 <strong class="pull-right">'.$dungtich.'</strong>
											</div>
									   </li>
									  </ul>
									  </br>
									  <button type="submit" name="insert" id="insert" value="INSERT INTO giohang (IdSanPham, TongTien,SoLuong)VALUES('.$id.','.$gia.',1)" class="btn btn-outline-dark" style="margin-left: 410px><a href="car-details.php">Mua Hàng</a></button>
									</form>
								  </div>
								</div>
							  </div>
							</div>';
				}
			}else{
				echo 'Dang cap nhat san pham!';
			}
		}
	
	function loadsp_car($sql){
		$link = $this->connect();
		$ketqua= mysql_query($sql,$link);
		$i = mysql_num_rows($ketqua);
		if($i>0){
			while($row=mysql_fetch_array($ketqua)){
				$id=$row['id'];
				$tensp=$row['tensp'];
				$gia=$row['gia'];
				$hinh=$row['hinh'];

				echo '<div class="col-lg-12 col-md-12">
						<div class="product-item">
						  <a href="car-details.php"><img src="assets/images/'.$hinh.'"></a>
						  <div class="down-content">
							<a href="car-details.php?id='.$id.'"><h4 style="font-size:25px">'.$tensp.'</h4></a>
							<h6>Price: '.$gia.' VNĐ</h6>
						  </div>
						</div>
					  </div>';
			}
		}else{
			echo 'Dang cap nhat san pham!';
		}
	}
	
	function loadcart()
	{
		$link = $this->connect();
		$ketqua= mysql_query("select g.id as idcart, s.tensp,s.hinh,s.gia,g.SoLuong,g.TongTien from giohang g join sanpham s on g.IdSanPham = s.id",$link);
		$i = mysql_num_rows($ketqua);
		if($i>0){
			while($row=mysql_fetch_array($ketqua)){
				$idcart=$row['idcart'];
				$tensp=$row['tensp'];
				$hinh=$row['hinh'];
				$gia=$row['gia'];
				$soluong=$row['SoLuong'];
				$tongtien=$row['TongTien'];
				$cc = $row['SoLuong'];
				echo '
				<form action="#" method="post" class="form">
					<tr>
						<div>   
							<td data-th="Product" style="width:50%">
								<div>
									<div>
										<img src="assets/images/'.$hinh.'" alt="Sản phẩm 1" class="img-responsive" width="100px">
										<h6>'.$tensp.'</h6> 
									</div>
								</div>
							</td>
							<td data-th="Product" style="width:10%"> 
								<h4>'.$gia.'</h4> 
							</td>
							<td data-th="Product" style="width:10%"> 
								<input class="form-control text-center" value="'.$soluong.'" type="text" name = "soluong">
							</td>
							<td data-th="Product" style="width:10%"> 
								<h4>'.$tongtien.'</h4>
							</td>
							<td class="actions" data-th="" style="width:20%">
								<button type="submit" class="btn btn-info btn-sm" name="update" id="update" value = '.$idcart.'><i class="fa fa-edit"></i>
								</button> 
								<button type="submit" class="btn btn-danger btn-sm" name="delete" id="delete" value="Delete from giohang where id = '.$idcart.'"><i class="fa fa-trash-o"></i>
								</button>
						   </td> 
						</div>
					</tr>
				</form>';
			}
		}else{
			echo 'Dang cap nhat san pham!';
		}
	}
	
	function loadorder()
	{
		$link = $this->connect();
		$kq= mysql_query("select d.id, d.tenkh, d.sdt, d.diachi, d.ghichu, d.trangthai, s.tensp, g.soluong, g.tongtien from donhang d join giohang g on d.idGioHang = g.id join sanpham s on g.IdSanPham = s.id",$link);
		$i = mysql_num_rows($kq);
		if($i>0){
			while($row=mysql_fetch_array($kq)){
				
				$id=$row['id'];
				$tenkh=$row['tenkh'];
				$sdt=$row['sdt'];
				$diachi=$row['diachi'];
				$ghichu=$row['ghichu'];
				$tensp=$row['tensp'];
				$soluong=$row['soluong'];
				$tongtien=$row['tongtien'];
				$trangthai = $row['trangthai'];
				echo '
				<tr>
					<div>
					<form method="post">
						<td data-th="Product" style="width:10%"> 
							<h6>'.$tenkh.'</h6> 
			   			</td>
						<td data-th="Product" style="width:10%"> 
							<h6>'.$sdt.'</h6> 
			   			</td>
						<td data-th="Product" style="width:20%"> 
							<h6>'.$diachi.'</h6> 
			   			</td>
						<td data-th="Product" style="width:10%"> 
							<h6>'.$ghichu.'</h6> 
			   			</td>
						<td data-th="Product" style="width:20%"> 
							<h6>'.$tensp.'</h6> 
			   			</td>
						<td data-th="Product" style="width:10%"> 
							<h6>'.$soluong.'</h6> 
			   			</td>
						<td data-th="Product" style="width:10%" name="tongtien"> 
							<h6>'.$tongtien.'</h6> 
			   			</td>
						<td data-th="Product" style="width:10%"> 
							<select id="trangthai'.$id.'" name="trangthai">
								<option value="dh" '.($trangthai == 'dh' ? "selected" : "" ).'>Đặt hàng</option>
								<option value="dxn" '.($trangthai == 'dxn' ? "selected" : "" ).'>Đã xác nhận</option>
								<option value="dtt" '.($trangthai == 'dtt' ? "selected" : "" ).'>Đã thanh toán</option>
								<option value="dgh" '.($trangthai == 'dgh' ? "selected" : "" ).'>Đang giao hàng</option>
								<option value="dagh" '.($trangthai == 'dagh' ? "selected" : "" ).'>Đã giao hàng</option>
							</select>
			   			</td>
						<td data-th="Product" style="width:10%"> 
							<button onclick="myFunction('.$id.')" class="btn btn-info btn-sm" value='.$id.' id="updateTrangThai" name="updateTrangThai"><i class="fa fa-edit"></i></button> 
			   			</td>
					</form>
					
			   	</div>
			</tr>';
			}
		}else{
			echo 'Dang cap nhat san pham!';
		}
	}

	function loadpost()
	{
		$link = $this->connect();
		$ketqua= mysql_query("select*from post",$link);
		$i = mysql_num_rows($ketqua);
		if($i>0){
			while($row=mysql_fetch_array($ketqua)){
				$id=$row['ID'];
				$title=$row['Title'];
				$time=$row['Time'];
				$hinh=$row['ImageUrl'];
				$studentid=$row['StudentID'];
				echo '
				    <div class="list-group">
                    <a href="Postdetail.php" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40"/>
					<p>'.$id.'</p>
					<p>'.$title.'</p>
					</a>
                </div>';
			}
		}else{
			echo 'Dang cap nhat san pham!';
		}
	}
}
?>		 
			 
			 

