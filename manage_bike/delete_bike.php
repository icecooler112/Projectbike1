<?php include('../connect.php'); ?>
<?php
 $id = $_GET['id'];
if (isset($id)){
        $sql = "DELETE FROM bike_user WHERE `bike_user`.`bu_id` = '".$id."'";
        $result = $conn->query($sql);

if ($conn->affected_rows){

    echo '<script> alert("สำเร็จ! ลบข้อมูลสินค้าเรียบร้อย")</script>';
    header('Refresh:0; url=../manage_user/bike_show.php');

}else{
    echo '<script> alert("ล้มเหลว! ไม่สามารถลบข้อมูลสินค้าได้ กรุกรุกรุณาลองใหม่อีกครั้ง")</script>';
    header('Refresh:0; url=../user.php');
}


}else{
    header('Refresh:0; url=../product.php');
}

?>
