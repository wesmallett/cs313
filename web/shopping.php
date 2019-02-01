<html>
    <head>
        <link rel='stylesheet' href='shopping-style.css' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="scripts.js"></script>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Account</a></li>
                <li><a href='#'>Gift Ideas</a></li>
                <li><a href='#'>About Us</a></li>
                <li><a href='#'>Contact Us</a></li>
            </ul>
            <a href='#' id='cart'>Cart</a>
        </nav>
        <main>
            <?php
            $items = array("item1"=>number_format(10.75,2,'.',''),"item2"=>number_format(20.00,2,'.',''),"item3"=>number_format(40.00,2,'.',''),"item4"=>number_format(60.00,2,'.',''));
            foreach ($items as $key => $value){
                ?>
                <div class='item'>
                    <img src='/images/<?= $key?>.png' class='item-image'/>
                    <h3 class='item-title'><?= $key?></h3>
                    <h5 class='item-price'>$<?= $value?></h5>
                    <form onsubmit='addItemToCart()'>
                        <input type='hidden' id='item' value=<?= $key?>/>
                        <input type='hidden' id='price' value=<?= $value?>/>
                        <label class='quantity-label'>Quantity: 
                            <input type='number' id='quantity' class='quantity-input' value='1'/>
                        </label>
                        <input type='submit' value='Add to Cart' class='add-to-cart'>
                    </form>
                </div>
            <?php } ?>

            <?php
            function addItemToCart($name, $quantity){
                $object = new stdClass();
                $object->item = $name;
                $object->price = $items[$name];
                $object->quantity = $quantity;
                array_push($GLOBALS['cart'], $object);
                print_r($GLOBALS['cart']);
            }

            if(isset($_POST['action'])){
                addItemToCart($_POST['item'],$_POST['quantity']);
            }else{

            }
            ?>
        </main>
    </body>
</html>