// alert('hello')


  async function fetchProductsJSON() {
    const response = await fetch('https://fakestoreapi.com/products');
    const product = await response.json();
    return product;
  }


  alldata = fetchProductsJSON().then(prods => {
       return prods
  });

 alldata.then((all)=>{
    // console.log(all)

    
  let something = all.map((items)=>{
    var img=items.image;
var title=items.title;
var price=items.price;
var description=items.description;

    if (items.category =="men's clothing")
    {
    let trow = document.createElement("tr");

    // trow.innerHTML = `
    // <td>${items.id}</td>
    // <td class="shop-item-title" style=" color: #bfc6c9;" >${items.title}</td>
    // <td >${items.description}</td>
    // <td class="shop-item-image" ><img style="width:140px; height:140px;" src="${items.image}"/></td>
    // <td class="shop-item-price"  >${items.price} $ </td>
    // <td>${items.rating.rate}</td>
    // <td>${items.category}</td>
    // <td class="addtocart"> <button class="btn btn-primary addtocart" type="button">ADD TO CART</button>  </td>

    // `
    // let tbody = document.querySelector("#tbody")

     trow.innerHTML = `
    
     <span class="shop-item-title"><p  style=" color: #000;">${title} </p></span>
     <p  style=" text-align: center;">${description}</p>
     <img style="justify-self: center; margin-left: 40%;" class="shop-item-image" src="${img}">
     <br>
     <div class="shop-item-details">

         <span style=" text-align: center;  margin-left: 40%;" class="shop-item-price">${price} $$</span>
         <div  style=" text-align: center;  margin-left: 40%;">
         </div>
     </div>
     <br>
     <br>
     <hr>
 
     `

//     trow.innerHTML = `
//     <div class="card" style="width: 18rem;">
//   <img src="${items.image}" class="card-img-top" alt="...">
//   <div class="card-body">
//     <h5 class="card-title">${items.title} title</h5>
//     <p class="card-text">${items.description}</p>
//     <button style=" text-align: center;" class="btn btn-primary addtocart" type="button">ADD TO CART</button>
//     <br>
//     <a href="#" class="btn btn-primary">Go somewhere</a>
//   </div>
// </div>
 
//      `

    let tbody = document.querySelector(".shop-item")
    tbody.appendChild(trow);
    return items
    }
    else{
      return 0
    }
  })
  })



  
// // if (document.readyState == 'loading') {
// //     document.addEventListener('DOMContentLoaded', ready)
// // } else {
//   ready()
//   // }
  
//   function ready() {
  
//       //removing from cart
//       var removeCartItemButtons = document.getElementsByClassName('btn-danger')
//       for (var i = 0; i < removeCartItemButtons.length; i++) {
//           var button = removeCartItemButtons[i]
//           button.addEventListener('click', removeCart)
//       }
  
//       //increase quntity
//       var quantityInputs = document.getElementsByClassName('cart-quantity-input')
//       for (var i = 0; i < quantityInputs.length; i++) {
//           var input = quantityInputs[i]
//           input.addEventListener('change', quantityChanged)
//       }
  
//       //adding to cart
//       var addToCartButtons = document.getElementsByClassName('addtocart')
//       for (var i = 0; i < addToCartButtons.length; i++) {
//           var button = addToCartButtons[i]
//           button.addEventListener('click', addToCartClicked)
//       }
  
//       // document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
//   }
  
//   // function purchaseClicked() {
//   //     alert('Thank you for your purchase')
//   //     var cartItems = document.getElementsByClassName('cart-items')[0]
//   //     while (cartItems.hasChildNodes()) {
//   //         cartItems.removeChild(cartItems.firstChild)
//   //     }
//   //     updateCartTotal()
//   // }
  
//   function removeCart(event) {
//       var buttonClicked = event.target
//       buttonClicked.parentElement.parentElement.remove()
//       updateCartTotal()
  
//       //parentElement: property returns the parent element 
//   }
  
//   function quantityChanged(event) {
//       var input = event.target
//       if (isNaN(input.value) || input.value <= 0) {
//           input.value = 1
//       }
//       updateCartTotal()
//   }
  
//   function addToCartClicked(event) {
//       var button = event.target
//       var shopItem = button.parentElement.parentElement
//       var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
//       var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
//       var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
//       addItemToCart(title, price, imageSrc)
//       updateCartTotal()
//   }
  
//   function addItemToCart(title, price, imageSrc) {
//       var cartRow = document.createElement('div')
//       cartRow.classList.add('cart-row')
//       var cartItems = document.getElementsByClassName('cart-items')[0]
//       var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
  
//       // if item is alredy in cart 
  
//       for (var i = 0; i < cartItemNames.length; i++) {
//           if (cartItemNames[i].innerText == title) {
//               alert('This item is already added to the cart')
//               return
//           }
//       }
//       var cartRowContents = `
//           <div class="cart-item cart-column">
//               <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
//               <span class="cart-item-title">${title}</span>
//           </div>
//           <span class="cart-price cart-column">${price}</span>
//           <div class="cart-quantity cart-column">
//               <input class="cart-quantity-input" type="number" value="1">
//               <button class="btn btn-danger" type="button">REMOVE</button>
//           </div>`
//       cartRow.innerHTML = cartRowContents
//       cartItems.append(cartRow)
//       cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCart)
//       cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
//   }
  
  
  
//   function updateCartTotal() {
      
//       var cartItemContainer = document.getElementsByClassName('cart-items')[0]
//       var cartRows = cartItemContainer.getElementsByClassName('cart-row')
//       var total = 0
//       for (var i = 0; i < cartRows.length; i++) {
  
//           var cartRow = cartRows[i]
//           var priceElement = cartRow.getElementsByClassName('cart-price')[0]
//           var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
//           var price = parseFloat(priceElement.innerText.replace('$', ''))
//           var quantity = quantityElement.value
//           total = total + (price * quantity)
//       }
//       // total = Math.round(total * 100) / 100
//       document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
//   }
// // <td>${ math.cile(items.rating.rate) ==1 ? 1
// //     : math.cile(items.rating.rate) ==2 ? 2
// //     : math.cile(items.rating.rate) ==3 ? 2
// //     : math.cile(items.rating.rate) ==4 ? 2
// //     : math.cile(items.rating.rate) ==1 ? 2 }</td>
// //     <td>${items.category}</td>


// // <td>${ math.cile(items.rating.rate) ==1 ? '1'
// //           : math.cile(items.rating.rate) ==2 ? '2'
// //          : math.cile(items.rating.rate) ==3 ? '2'
// //           : math.cile(items.rating.rate) ==4 ? '2'
// //           : math.cile(items.rating.rate) ==1 ? '2' }</td>
