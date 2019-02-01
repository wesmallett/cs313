var cart = [];
function addItemToCart(){
    itemName = $('#item').val();
    amount = $('#quantity').val();
    cost = $('#price').val();

    var item = {name:itemName,quantity:amount,price:cost};
    cart.push(item);
    console.log(cart);
}