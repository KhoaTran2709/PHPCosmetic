<?php
@session_start();

if (isset($_SESSION['product'])) {
    if (isset($_SESSION['dangnhap'])) {
        echo '<div class="tieude">Giỏ hàng của bạn | <span>Xin chào bạn:<strong><em> ' . $_SESSION['dangnhap'] . '</em></strong><a href="update_cart.php?thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>';
    } else {
        echo '<div class="tieude">Giỏ hàng của bạn</div>';
    }

    echo '<div class="box_giohang">';
    echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';


    echo '<td>Tên SP</td>';
    echo '<td>Hình ảnh</td>';
    echo '<td>SL</td>';
    echo '<td>Giá sp</td>';

    echo '<td>Tổng tiền</td>';
    echo '<td>Quản lý</td>';
    echo '</tr>';
    $thanhtien = 0;
    foreach ($_SESSION['product'] as $cart_item) {
        $id = $cart_item['Perfume_ID'];
        $sql = "select * from perfume where Perfume_ID='$id'";
        $row = mysqli_query($conn, $sql);
        $dong = mysqli_fetch_array($row);
        echo '<tr>';
        echo '<td>' . $dong['Perfume_Name'] . '</td>';
        echo '<td><img src="img/hinhnuochoa/' . $dong['Perfume_Image'] . '" width="100" height="100" /></td>';
        echo '<td>' . number_format($dong['Perfume_Price']) . '</td>';
        echo '<td><a href="update_cart.php?cong=' . $cart_item['Perfume_ID'] . '" style="margin-right:2px;"><img src="img/plus.png" width="20" height="20"></a>' . $cart_item['Perfume_Quantity'] . '<a href="update_cart.php?tru=' . $cart_item['Perfume_ID'] . '" style="margin-left:2px;"><img src="img/subtract.png" width="20" height="20"></a></td>';
        $tongtien = 0;
        $tongtien = $cart_item['Perfume_Quantity'] * $cart_item['Perfume_Price'];
        $thanhtien = ($thanhtien + $tongtien);
        echo '<td>' . number_format($tongtien) . '</td>';
        echo '<td><a href="update_cart.php?xoa=' . $cart_item['Perfume_ID'] . '"><img src="img/deletered.png" width="30" height="30"></a></td>';
        echo '</tr>';
        echo '<tr>';
    }
    echo '<tr>
				
				<td colspan="6"><a href="update_cart.php?xoatoanbo=1"  style="text-decoration:none;" >Xóa toàn bộ</a>	
				
				</td>
				
				
				<td>Thành tiền : ' . number_format($thanhtien) . 'VNĐ' . '</td>
				
			
			</tr>';
} else {

    echo 'Giỏ hàng của bạn trống';
}


echo '</table>';


?>



<ul class="control">
    <p><a href="index.php">Tiếp tục mua hàng</a></p>
    <p><a href="?quanli=dangki">Đăng ký mới</a></p>
    <p><a href="?quanli=login">Bạn đã có tài khoản</a></p>
    <?php
    if (isset($_SESSION['dangnhap']) && isset($_SESSION['product'])) {
    ?>
        <p style="float:right; background:#FF0;text-decoration:none;"><a href="thanhtoan.php" style="color:#000;margin:5px;">Thanh toán</a></p>
    <?php
    }
    ?>
</ul>

</div>