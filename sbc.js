let price = 10000;
let discount = 500;
let cost;   

function enroll(){
    alert("You are successfully enrolled in the site");
    cost = price - discount;
    return cost;
}


let finalCost = enroll();
console.log(finalCost); 

let user = 10;

const result = (function(){
    user += 1;   
    return user;
})();

console.log(user);   
console.log(result); 
function getprice(){
    let price = 2999;
    let discount = 500;
    let finalPrice = price - discount;
    alert("Final Price: ₹" + finalPrice);
}
