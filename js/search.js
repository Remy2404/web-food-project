var key = document.getElementById( "search");
var result = document.getElementById("re");
result.style.display="none";
key.addEventListener("keyup", function()
{
HAHA();

})
var HAHA = ()=>
{
if (key.value =="r")
{
    result.innerHTML ="Ring"; 
    result.style.display= "flex";
    result.style.backgroundColor="yellow";
    console.log("aaaaa");

}
else if (key.value == "s" )
{
    result.innerHTML ="Skrit"; 
    result.style.display= "flex";
    result.style.backgroundColor="yellow";
    console.log("BBaa");

}
else if (key.value == "w" )
{
    result.innerHTML ="Wallet"; 
    result.style.display= "flex";
    result.style.backgroundColor="yellow";
    console.log("BBaa");

}
else if (key.value == "n" )
{
    result.innerHTML ="Neckless"; 
    result.style.display= "flex";
    result.style.backgroundColor="yellow";
    console.log("BBaa");

}
else if (key.value == "e" )
{
    result.innerHTML ="Envision_Squad"; 
    result.style.display= "flex";
    result.style.backgroundColor="yellow";
    console.log("BBaa");

}

else{
    result.style.display= "none";
}
}