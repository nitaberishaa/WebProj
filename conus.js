
window.addEventListener('scroll',function(){
    const header= document.querySelector('header');
    header.classList.toggle("sticky",window.scrollY>0)
 })

 
 var inputList = document.getElementsByTagName("input")


 document.getElementById('send').addEventListener('click',function(event){
    if(inputList[0].value=="" || inputList[1].value=="" ){
        alert("Please fill all the required information!");
    }
});