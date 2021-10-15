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
                  echo 'Đơn hàng: '.$_SESSION['dangnhap_home'];
              }
              ?>
             <div class="col-md-12">
      <h4>Danh sách đơn hàng</h4>
      <?php
      if(isset($_GET['email'])) {
        $email_dh = $_GET['email'];
      }
      else {
        $email_dh = '';
      }
        $sql_select = mysqli_query($con, "SELECT *,  SUM(tbl_donhang.soluong*tbl_sanpham.sanpham_giakhuyenmai) AS 'tongtien' FROM tbl_donhang, tbl_sanpham WHERE tbl_donhang.sanpham_id = tbl_sanpham.sanpham_id AND tbl_khachhang.email = tbl_donhang.email and tbl_donhang.email = '$email_dh'");
      ?>
        <table class="table table-bordered">
          <tr style="text-align:center">
            <th>STT</th>
            <th>Mã hàng</th>
            <th>Trạng thái đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Ngày tháng đặt</th>
            <th>Ghi chú</th>
            <th>Tổng tiền</th>
            <th>Quản lý</th>
          </tr>
          <?php
          $i= 0;
            while($row_donhang = mysqli_fetch_array($sql_select)){
              $i++;
          ?>
            <tr style="text-align:center">
              <td><?php echo $i ?></td>
              <td><?php echo $row_donhang['mahang'] ?></td>
              <td><?php 
                if($row_donhang['trangthai'] == 0) {
                  echo 'Chưa xử lý';
                }
                else {
                  echo 'Đã xử lý';
                }
               ?>
               </td>
              <td><?php echo $row_donhang['name'] ?></td>
              <td><?php echo $row_donhang['ngaythang'] ?></td>
              <td><?php echo $row_donhang['note'] ?></td>
              <td style="text-align: center;"><a style="font-size: 14px;display:block;" href="?xoa=<?php echo $row_donhang['donhang_id'] ?>" class="btn btn-danger mb-2">Xóa</a> <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>" style="font-size: 14px;display:block" class="btn btn-primary">Xem đơn hàng</a></td>
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