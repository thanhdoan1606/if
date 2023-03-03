<?php
$product_id = 123;

if ($resuft = $mysqli->query("SELECT * FROM product WHERE id = '$product_id'")) {
    
    if ($resuft->num_rows == 1) {
        
        $row = $resuft->flech_assoc();
        
        if ($row['quanlity'] > 0) {
        
        } else {
            echo "Sản phẩm này đã hết hàng";
        }
    
    } else {
        echo "Không tìm thấy sản phẩm này";
    }
    
    $resuft->close();

} else {
    echo "Lỗi:" . $mysqli->error;
}
