
<?php
$sql_chitietsp = "select * from perfume where Perfume_ID = '$_GET[id]'";
$query_chitietsp = mysqli_query($conn, $sql_chitietsp);
$dong_chitietsp = mysqli_fetch_array($query_chitietsp);
?>
<table width="auto" border="1" style="border-collapse:collapse">
    <tr>
        <td colspan="2">
            <div align="center">Chi tiết nước hoa</div>
        </td>
    </tr>

    <tr>
        <td rowspan="2"><img src="admincp/modules/quanlinuochoa/uploads/<?php echo $dong_chitietsp['Perfume_Image'] ?>" width="200" height="200" /></td>
        <td>Sản phẩm: <?php echo $dong_chitietsp['Perfume_Name'] ?></td>
    </tr>
    <tr>

    </tr>
    <tr>
        <td colspan="2">
            <div align="center">Mô tả mùi hương</div>
        </td>
    </tr>
    <tr>
        <td colspan="2"><?php echo $dong_chitietsp['Perfume_Description'] ?></td>
    </tr>
    <tr>
        <div class="box_info">
            <form action="update_cart.php?id=<?php echo $dong_chitietsp['Perfume_ID'] ?>" method="post" enctype="multipart/form-data">
                <p>
                    <strong>Tên sản phẫm: </strong><em style="color:red"><?php echo $dong_chitietsp['Perfume_Name'] ?></em>
                </p>
                <p><strong>Giá bán:</strong><span style="color:red;"> <?php echo number_format($dong_chitietsp['Perfume_Price']) . ' ' . 'VNĐ' ?></span></p>
                <p style="text-decoration:underline;color:blue;"><strong> Tình trạng:</strong> Còn hàng </p>

                <p><strong>Số lượng:</strong><input type="text" name="soluong" size="3" value="1" /></p>
                <input type="submit" name="add_to_cart" value="Mua hàng" style="margin:10px;width:100px;height:40px;background:#9F6;color:#000;font-size:18px;border-radius:8px;" />

            </form>


        </div><!-- Ket thuc box box_info -->
        </td>
    </tr>

</table>