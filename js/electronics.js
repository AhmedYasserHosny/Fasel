
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

    if (items.category =="electronics")
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

