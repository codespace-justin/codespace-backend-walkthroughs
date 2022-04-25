<?php
/**
 * POJO Class for instanciating orders of customers
 * Author : Justin Jenecke
 * Date 25/04/2022
 */

class Order {

    public $orderNo;
    public $customer;
    public $orderItems;

    public function __construct($orderNo, $customer, $orderItems) {
        
        $this->orderNo = $orderNo;
        $this->customer = $customer;
        $this->orderItems = $orderItems;

    }

    public function displayOrder() {
        return "
            <div id='<?php echo $this->orderNo ?>' class='order-card'>
            <span>
                <?php echo $this->orderNo ?>
            </span>
            <span>
                <?php echo $this->customer ?>
            </span>
            <span>
                <?php echo $this->orderItems ?>
            </span>
            </div>
        ";
    }

}

?>
