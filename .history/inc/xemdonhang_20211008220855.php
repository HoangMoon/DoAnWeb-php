<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
        Xem đơn hàng
			</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
							<div class="row">
                <?php
							if(isset($_SESSION['dangnhap_home'])) {
                  echo 'Khách hàng: '.$_SESSION['dangnhap_home'];
              }
              ?>
         <div class="col-md-12">
      <h4 class="mb-3">Danh sách lịch sử đơn hàng</h4>
      
      <?php
        if(isset($_GET['khachhang'])){
          $id_khach =$_GET['khachhang'];
        }else{
          $id_khach = '';
        }
        $sql_select = mysqli_query($con, "SELECT * FROM tbl_giaodich ,tbl_sanpham WHERE tbl_giaodich.sanpham_id = tbl_sanpham.sanpham_id AND tbl_giaodich.khachhang_id = '$id_khach'  GROUP BY tbl_giaodich.magiaodich DESC");
      ?>
        <table class="table table-bordered">
          <tr style="text-align:center">
            <th>STT</th>
            <th>Mã giao dịch</th>
            <th>Tên sản phẩm</th>
            <th>Ngày đặt</th>
            <th>Quản lý</th>
          </tr>
          <?php
          $i= 0;
            while($row_donhang = mysqli_fetch_array($sql_select)){
              $i++;
          ?>
            <tr style="text-align:center">
              <td><?php echo $i ?></td>
              <td><?php echo $row_donhang['magiaodich'] ?></td>
              
              <td><?php echo $row_donhang['sanpham_name'] ?></td>
              <td><?php echo $row_donhang['ngaythang'] ?></td>
              <td><a href="?magiaodich=<?php echo $row_donhang['magiaodich']  ?>">Xem chi tiết</a></td>
              
            </tr>
            <?php
            }
            ?>
        </table>
      </div>
			</div>
	</div>
 </div>
</div>
</div>
  </div>

	<!-- //top products -->