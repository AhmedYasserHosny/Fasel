// alert('hello')
//console.log("www");
// let dataA=document.querySelector("datashow");

 let dataA=document.getElementsByClassName("datashow");
// dataA.appendChild(document.createElement("div"));

function getdata()
{

fetch('https://fakestoreapi.com/products')

.then((res)=>{
return res.json();
})

.then((data)=>{
    //  console.log(data);

     data.forEach(element => { 
     console.log(element);
        
    //     // //creat main div 
    //     // let maindiv =document.createElement("div");
    //     // //creat textnode
    //     // let dataid=element.id;
    //     // let dataname =document.createTextNode(dataid);
    //     // // console.log(dataid)
    //     // //append
    //     // maindiv.appendChild(dataname);

    //     // dataA.appendChild(maindiv);
        
    });
    
});
}
getdata();
