let h2=document.querySelector("h2");
let input=document.querySelector("input");
input.addEventListener('input',function(){
     h2.innerText=input.value;
});
