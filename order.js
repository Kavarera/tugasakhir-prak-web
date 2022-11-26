var cart =[];
console.log("Test");
//console.log(button.length);
var itemCart=0;
var button =document.getElementsByClassName('add-to-cart');
//console.log(cs);
for(var i=0;i<=button.length;i++){
    var btn = button[i]
    btn.addEventListener("click",function(){
        console.log('clicked');
        itemCart++;
        document.getElementById('cartShop').innerHTML=itemCart;
        document.getElementById('cartShop-lg').innerHTML=itemCart;
    })
}

