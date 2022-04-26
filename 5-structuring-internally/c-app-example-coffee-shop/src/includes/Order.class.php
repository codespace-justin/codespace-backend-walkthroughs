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
    public $subTotal;

    public function __construct($orderNo, $customer, $orderItems, $subTotal = 0) {
        
        $this->orderNo = $orderNo;
        $this->customer = $customer;
        $this->orderItems = $orderItems;
        $this->subTotal = $subTotal;

    }

    public function displayOrder() {
        return "
            <div id='<?php echo $this->orderNo; ?>' class='order-card'>
            <span>
                Order Number: <?php echo $this->orderNo; ?>
            </span>
            <span>
                Customer: <?php echo $this->customer; ?>
            </span>
            <span>
                Items:
                <p>    
                    <?php echo $this->orderItems; ?>
                </p>
            </span>
            <span>
                SubTotal: R<?php echo $this->subTotal; ?>
            </span>
            </div>
        ";
    }

}

?>
