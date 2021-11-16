<x-app-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<body>
  

		<script type="text/javascript">
			$(document).ready(function(){
        $("#divShowHide").toggle();
				$("#btnShowHide").click(function(){
					$("#divShowHide").toggle();   // show and hide ng cart haha
				});
			});
		</script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('store') }}
        </h2>
    </x-slot>

<!--fancy button for the view cart-->
<div class="cartbutton p-2 md:w-50 ">
        <div type="button" value="My Cart" id="btnShowHide" class="flex items-center p-4 text-gray-200 bg-gray-500 rounded-lg shadow-xs cursor-pointer hover:bg-gray-200 hover:text-gray-500">
        <img src="https://img.icons8.com/cotton/40/000000/ingredients--v2.png"/>           
        <div><p class="text-l font-medium ml-2 ">Toggle My Cart</p></div></div>
        </div>
    
<!--cedz ito yung start ng cart items-->
<div id="divShowHide" class="bg-white shadow-lg rounded-lg p-6 w-full xl:w-8/12 mb-10 xl:mb-0 px-4 mx-auto mt-5">
<div class="m-10 cart-container md">
          <h2 style="color:#5e04c4" class="text-4xl sm:text-7xl font-extrabold tracking-tight text-center">My Cart</h2>
          <div style="color:#2793c2;" class="text-xl sm:text-xl text-black font-extrabold tracking-tight text-center mt-2 mb-2" id="alerts"></div>
          <table class="min-w-full leading-normal">
            <thead>
              <tr>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"><strong>Product</strong></th>
              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"><strong>Price</strong></th>
            </tr>
            </thead>
            <tbody id="carttable">
            </tbody>
          </table>
          <hr>
          <table class="" id="carttotals">
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><strong>Items</strong></td>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><strong>Total</strong></td>
            </tr>
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-2xl">x <span id="itemsquantity">0</span></td>
             
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-4xl">$<span id="total"> </span></td>
       
              <input hidden type="number" id="amount" value = ""> <!--this thing dittoasd asdas dasd asd asd asd asd asd asd asd aso-->

              
            </tr></table>

            
          <div class="cart-buttons mt-5">  
            <button class="transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded" id="emptycart">Empty Cart</button>
            
            <div class="ml-48 mr-48 mt-5 "id="paypal-payment-button"></div>
            <script src="https://www.paypal.com/sdk/js?client-id=AaCz_3ud54D-qSZTo9bLVjJuDENps0-lB8RrimmBPc92_av39j2GIMSwUTbuSj09ZBCpxK83UuDSAx7q"></script>
            <script>
            paypal.Buttons({
              style: {
                color: 'blue',
                shape: 'pill'
              },
              createOrder: function(data, actions){
              var total2 =  document.getElementById("total").innerHTML;
              document.getElementById("amount").value = total2;
              const amountElement = document.getElementById("amount")
            
              console.log(amountElement.value) ;

                return actions.order.create({
                  purchase_units : [{
                    amount:{
                      value: amountElement.value,
                    }
                  }]
                });
              },
              onApprove: function(data, actions){
                return actions.order.capture().then(function (details){  //after successful payment ito
                  console.log(details)
                  if(sessionStorage.getItem('cart')){
              sessionStorage.removeItem('cart');
              updateCartTotal();
                  var alerts = document.getElementById("alerts");
                alerts.innerHTML = "";
                if(alerts.classList.contains("message")){
                alerts.classList.remove("message");
                }
              }
                  window.location.replace("/sucessfulpayment");  // redirect to this page if successful
                })
              }
            }).render('#paypal-payment-button');
            </script>

          </div>
        </div>
</div>
<!-- end of cart items-->
<!-- Hoodies items na ito -->
<div id=divforhoodies>
<h1 class="text-4xl sm:text-7xl text-black font-extrabold tracking-tight text-center mt-10 mb-10">Hoodies</h1>
<div class="productcont grid grid-cols-1 md:grid-cols-3 m-10 gap-4 items-center">

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://cf.shopee.ph/file/056e335de0a7ca36659c54a980b4e539')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Jujutsu Kaisen</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$29.99</h1> <p hidden class="price">29.99</p> <p hidden class="productname">Jujutsu Kaisen Hoodie</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://ae01.alicdn.com/kf/Hd0a1685f6c234dc98fb913f7cd26f4ce2/Japanese-Anime-Kawaii-Hoodie-for-Men-Women-Kids-Hooded-Sweatshirt-Studio-Ghibli-Hayao-Miyazaki-Chihiro-Spirited.jpg_Q90.jpg_.webp')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Studio Ghibli</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$29.99</h1> <p hidden class="price">29.99</p> <p hidden class="productname">Studio Ghibli Hoodie</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://ih1.redbubble.net/image.1104741434.5667/ra,sweatshirt,x1800,oatmeal_heather,front-c,281,327,600,600-bg,f8f8f8.jpg')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">One Piece Chopper</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$29.99</h1> <p hidden class="price">29.99</p> <p hidden class="productname">One Piece Chopper Hoodie</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://ae01.alicdn.com/kf/H95bf16e346a54f83a3ea8de2c6805dc1U.jpg')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Attack On Titan</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$29.99</h1> <p hidden class="price">29.99</p> <p hidden class="productname">Attack On Titan Hoodie</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>


<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://ae01.alicdn.com/kf/H81045f6517f54ad48fa951bea46a84767.jpg')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Tokyo Revengers</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$29.99</h1> <p hidden class="price">29.99</p> <p hidden class="productname">Tokyo Revengers Hoodie</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://ae01.alicdn.com/kf/H2b9529c92a224a98a73d9da453c1724bs/2021-Horimiya-Cosplay-Hoodie-Hori-Kyouko-Hooded-Sweater-Miyamura-Izumi-Sweaters-Hori-San-to-Miyamura-Kun.jpg_Q90.jpg_.webp')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Horimiya</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$29.99</h1> <p hidden class="price">29.99</p> <p hidden class="productname">Horimiya Hoodie</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>



</div>

<!-- new category haha-->

<h1 class="text-4xl sm:text-7xl text-black font-extrabold tracking-tight text-center mt-10 mb-10">T-shirts</h1>
<div class="grid grid-cols-1 md:grid-cols-3 m-10 gap-4">


<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://cf.shopee.ph/file/8f42b8915462497990f5383108b9b17c')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Nanami</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$12.99</h1> <p hidden class="price">12.99</p> <p hidden class="productname">Jujutsu Kaisen Nanami TShirt</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://m.media-amazon.com/images/I/A13usaonutL._CLa%7C2140%2C2000%7C91pT2YwN%2B6L.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_UL1500_.png')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Naruto</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$12.99</h1> <p hidden class="price">12.99</p> <p hidden class="productname">Naruto TShirt</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://ae01.alicdn.com/kf/HLB1NlBBbyrxK1RkHFCcq6AQCVXa5/Anime-No-Game-No-Life-Shiro-Sora-Cosplay-T-shirt-Short-Sleeve-Casual-Tee-Top-Custom.jpg_Q90.jpg_.webp')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">No Game No Life</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$12.99</h1> <p hidden class="price">12.99</p> <p hidden class="productname">No Game No Life TShirt</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://target.scene7.com/is/image/Target/GUEST_6f4551a0-d65d-4629-b447-d2de29b5b49f')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Demon Slayer</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$12.99</h1> <p hidden class="price">12.99</p> <p hidden class="productname">Demon Slayer TShirt</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://plk.s6img.com/society6/img/2qY4tB7nGjIJYUPrVn6-7sShUQM/w_700/tshirts/men/greybg/white/~artwork,bg_FFFFFFFF,fw_3300,fh_5100,iw_3300,ih_5100/s6-original-art-uploads/society6/uploads/misc/79ab6eadc2c24d169d644484c3456e5e/~~/rezero-rem579730-tshirts.jpg')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Rezero Rem</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$12.99</h1> <p hidden class="price">12.99</p> <p hidden class="productname">Rezero Rem TShirt</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://canary.contestimg.wish.com/api/webimage/5d53d889a0527b21e7c8b035-large.jpg?cache_buster=08aa891958dc6abc97bc873aa3877910')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Himiko Toga</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$12.99</h1> <p hidden class="price">12.99</p> <p hidden class="productname">Himiko Toga TShirt</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

</div>
<!--start of figurines and stuff-->


<h1 class="text-4xl sm:text-7xl text-black font-extrabold tracking-tight text-center mt-10 mb-10">Figurines & Others</h1>
<div class="grid grid-cols-1 md:grid-cols-3 m-10 gap-4">


<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://myanimeshelf.com/upload/dynamic/2019-02/10/AoT022.jpg')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Attack On Titan</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-xl">$4,798</h1> <p hidden class="price">4798</p> <p hidden class="productname">Shelf Elite Exclusive Statue Eren VS Armored Titan Figurine</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
    </div>
    </div>
  </div>
</div> 

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://cf.shopee.ph/file/a99777755251406b0ffdfe8ffbb6a49a')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-2xl">Nezuko Figurine</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$46.78</h1> <p hidden class="price">46.79</p> <p hidden class="productname">Nezuko Figurine</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://cf.shopee.ph/file/34c754d04ea3e86de5c6f079299886fa')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-xl">Four Emperors Kaido</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$39.98</h1> <p hidden class="price">39.98</p> <p hidden class="productname"> Four Emperors Kaido</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('http://cdn.shopify.com/s/files/1/0057/0844/7844/products/ee376d69-7a6a-48ad-bfc4-b606dd08e798_1200x1200.jpg?v=1605758202')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-xl">Megumin Explosion</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$207.99</h1> <p hidden class="price">207.99</p> <p hidden class="productname">Megumin Explosion Figurine</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://megumi.b-cdn.net/media/catalog/product/cache/2/image/9df78eab33525d08d6e5fb8d27136e95/M/A/MAE2784.jpg')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-xl">Roxy Migurdia</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$198.50</h1> <p hidden class="price">198.50</p> <p hidden class="productname">Roxy Migurdia Figurine</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

<div class="py-6 transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
  <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-1/2 bg-cover" style="background-image: url('https://cdn.shopify.com/s/files/1/0318/2649/products/418--ptTVPL_de85389e-8b87-4e0d-932d-f2f84068295b_large.jpg?v=1612887277')">
    </div> 
    <div class="w-2/3 p-4">
      <h1 class="text-gray-900 font-bold text-xl">Jotaro Kujo Figure</h1>
      <p style="height:5rem;" class="mt-5 text-gray-600 text-sm">Looking for this exact merch? Add to Cart! Limited stocks available!</p>
      
      <div class="flex item-center justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-3xl">$187.99</h1> <p hidden class="price">187.99</p> <p hidden class="productname">Jotaro Kujo Figurine</p>
        <button onclick="nicealert()" class="addtocart hover:bg-blue-900 px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to Cart</button>
      </div>
    </div>
  </div>
</div>

</div>


</body>
</x-app-layout>

<style>
    .transition{
    transition: all .2s ease-out;
}

.h-60{
  height: 14rem;
}

.w-128{
  width: 32rem;
}

</style>

<script>
updateCartTotal();

document.getElementById("emptycart").addEventListener("click", emptyCart);
var btns = document.getElementsByClassName('addtocart');
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {addToCart(this);});
}


function addToCart(elem) {
    var sibs = [];
    var getprice;
    var getproductName;
    var cart = [];
     var stringCart;
    while(elem = elem.previousSibling) {
        if (elem.nodeType === 3) continue; // text node
        if(elem.className == "price"){
            getprice = elem.innerText;
        }
        if (elem.className == "productname") {
            getproductName = elem.innerText;
        }
        sibs.push(elem);
    }
    //create product object
    var product = {
        productname : getproductName,
        price : getprice
    };
    var stringProduct = JSON.stringify(product);
    
    if(!sessionStorage.getItem('cart')){
        cart.push(stringProduct);
        stringCart = JSON.stringify(cart);
        sessionStorage.setItem('cart', stringCart);
        addedToCart(getproductName);
        updateCartTotal();
    }
    else {
       cart = JSON.parse(sessionStorage.getItem('cart'));
        cart.push(stringProduct);
        stringCart = JSON.stringify(cart);
        sessionStorage.setItem('cart', stringCart);
        addedToCart(getproductName);
        updateCartTotal();
    }
}
/* Calculate kung magkano yung price */
function updateCartTotal(){
 
    var total = 0;
    var price = 0;
    var items = 0;
    var productname = "";
    var carttable = "";
    if(sessionStorage.getItem('cart')) {
    
        var cart = JSON.parse(sessionStorage.getItem('cart'));
        //get no of items in cart 
        items = cart.length;
    
        for (var i = 0; i < items; i++){
            var x = JSON.parse(cart[i]);
            price = parseFloat(x.price);
            productname = x.productname;
            carttable += "<tr><td>" + productname + "</td><td>$" + price.toFixed(2) + "</td></tr>";
            total += price;
        }
        
    }
    // update total
    document.getElementById("total").innerHTML = total.toFixed(2);
    //insert saved products to cart table
    document.getElementById("carttable").innerHTML = carttable;
    //update items in cart on website HTML
    document.getElementById("itemsquantity").innerHTML = items;
}
// pagkatapos ng successful add
function addedToCart(pname) {
  var message = pname + " was added to the cart";
  var alerts = document.getElementById("alerts");
  alerts.innerHTML = message;
  if(!alerts.classList.contains("message")){
     alerts.classList.add("message");
  }
}
/* pwede mag empty ng cart */
function emptyCart() {
    //remove cart session
    if(sessionStorage.getItem('cart')){
        sessionStorage.removeItem('cart');
        updateCartTotal();
      //clear message?
      var alerts = document.getElementById("alerts");
      alerts.innerHTML = "";
      if(alerts.classList.contains("message")){
          alerts.classList.remove("message");
      }
    }
}

function nicealert() {
  alert("Item Added to Cart! Please Check Your Items");  // alert per add to cart haha
}
</script>

<style>
 body{
   background-image:url('https://images.pexels.com/photos/402028/pexels-photo-402028.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');
   background-repeat: no-repeat;

 }
</style>