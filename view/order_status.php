<?php
    if(isset($_GET['id_order'])){
        $id_order = $_GET['id_order'];
        $order = load_order($id_order);
        $list_pro =json_decode($order['product']);
    }
?>
<section class="address">
            <h3>Địa chỉ nhận hàng</h3>
            <input type="text" value="<?php echo $order['id_address']; ?>" class="address-id" name="id_address" style="display: none;">
            <p class="address-name"><?php echo $order['name'] ?></p>
            <p class="tel-bill"><?php echo $order['tel'] ?></p>
            <p class="location"><?php echo $order['detail_location'].' , '.$order['tinh']; ?></p>
        </section>
<section class="bill">
    <div class="bill-header">
        <div class="bill-header-item" style="flex: 6;">
            <h2>Sản phẩm</h2>
        </div>
        <div class="bill-header-item" style="flex: 2;">Đơn giá</div>
        <div class="bill-header-item" style="flex: 2;">Số lượng</div>
        <div class="bill-header-item" style="flex: 2;">Thành tiền</div>
    </div>
    <div class="bill-pro">
            <?php 
                $total_price = 0;
                foreach($list_pro as $pro){
                    $p = load_1sp($pro->pro_id);
                    echo '
                    <div class="bill-pro-item">
                    <div class="bill-pro-sanpham" style="flex: 6;">
                    <input style="display: none;" name ="id_pro[]" value = "'.$p['id'].'">
                    <img src="upload/'.$p['img'].'" height="40px" width="40px" alt="">
                    <span>'.$p['name'].'</span>
                    </div>
                    <div class="bill-pro-price" style="flex: 2;">'.currency_format($p['price']).'</div>
                    <input class="bill-pro-quatity" name="quatity[]" value="'.$pro->quatyti.'" style="flex: 2; border: none; text-align: center;" readonly>
                    <div class="bill-pro-subtotal" style="flex: 2;">'. currency_format($p['price']*$pro->quatyti).'</div>
                    </div>';
                    $total_price += $p['price']*$pro->quatyti;
                }
            ?>
    </div>
</section>
<section class="bill-total">
    <div class="total-bill" >
        <div class="total-bill-title" style="flex: 4;">Tổng tiền thanh toán</div>
        <div class="detail-total" style="flex: 2;">
            <div class="bill-price-pro" >
                <p>Tổng tiền hàng:</p>
                <p class="total_price"><?php echo $total_price;?></p>
            </div>
            <div class="bill-ship">
                <p>Phí vận chuyển:</p>
                <p>20.000đ</p>
            </div>
            <div class="bill-detail-total">
                <p>Tổng thanh toán:</p>
                <p class="total_bill"><?php echo currency_format($total_price+20000)?></p>
            </div>
        </div>
    </div>
    <!-- <button type="submit" style="border: none; color: white; cursor: pointer;" class="btn_more">Pay</button> -->
</section>