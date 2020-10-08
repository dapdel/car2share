/*var inputNom = document.getElementById("nom");
var inputPrenom = document.getElementById("prenom");
var btn = document.getElementById("btn");
var inputs = document.getElementsByTagName("input");

/*
btn.addEventListener("click", function(e){
    e.preventDefault();
    if (inputNom.value == ""){
        nom.style.border = "2px solid red";
        }
    else{
        nom.style.border = "2px solid lightgreen";
        }
})
;
btn.addEventListener("click", function(e){
    e.preventDefault();
    if (inputPreom.value == ""){
        prenom.style.border = "2px solid red";
        }
    else{
        prenom.style.border = "2px solid lightgreen";
        }
})
;

var inputs = document.getElementsByTagName("input");
var btn = document.getElementById("btn");
var i;

btn.addEventListener("click", function(){
    e.preventDefault();
for (i = 0; i < 2; i++) {
    if (input[i].value == ""){
        input[i].style.border = "2px solid red";
        }
    else{
        input[i].style.border = "2px solid lightgreen";
        }
}
})
;


    if ((inputNom.value == "")&&(inputPrenom.value == "")){
        nom.style.border = "2px solid red";
        prenom.style.border = "2px solid red";
        }
    else if (inputPrenom.value == ""){
        prenom.style.border = "2px solid red";
        nom.style.border = "2px solid lightgreen";
        }
    else{
        nom.style.border = "2px solid red";
        prenom.style.border = "2px solid lightgreen";
         }

;
*/
nom.addEventListener("input", function(){
    if(nom.value.length >=2)
    {
        nom.style.border="2px solid green";
    }
    else {
        nom.style.border = "2px solid red";
    }
   
});

prenom.addEventListener("input", function(){
    if(prenom.value.length >=2)
    {
        prenom.style.border="2px solid green";
    }
    else {
        prenom.style.border = "2px solid red";
    }
  
});   
