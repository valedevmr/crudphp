const formContacto = document.querySelector(".formulariocontacto");
const formvariables = document.querySelector(".formulariovariables");
if(formContacto){
    formContacto.addEventListener("submit",e=>{
        e.preventDefault();
        validarContacto(e);
    });
}

function validarContacto(e){
    let bandera = true
    if(e.target.elements[0].value!="" && e.target.elements[0].value!=" " &&
    e.target.elements[1].value!="" && e.target.elements[1].value!=" "&&
    e.target.elements[2].value!="" && e.target.elements[2].value!=" "){
        document.forms["frm"].submit();
    } 
    e.target.elements[0].classList.add("red");
    e.target.elements[1].classList.add("red");
    e.target.elements[2].classList.add("red");
    setTimeout(() => {
        e.target.elements[0].classList.remove("red");
        e.target.elements[1].classList.remove("red");
        e.target.elements[2].classList.remove("red");
    
    }, 2000);
    

    return;
    
    
    
}


if(formvariables){
    formvariables.addEventListener("submit",e=>{
        e.preventDefault();
        validarVariables(e);
    })
}
function validarVariables(e){
    let numero =  document.querySelectorAll(".formulariovariables input");
    console.log(numero);
    let badera = false;
    numero.forEach(element => {
        if(element.value!="" && !isNaN(element.value)){
            element.classList.add("verde");
            bandera=true;
            setTimeout(() => {
                element.classList.remove("verde");
            }, 3000);
        }
        else{
            console.log("nada bien");
            element.classList.add("red");
            element.classList.remove("hidden")
            element.nextElementSibling.classList.remove("hidden")
            bandera=false;
            setTimeout(() => {
                
                element.classList.remove("red");
                element.nextElementSibling.classList.add("hidden")
            }, 2000);
        }
    });
    if(bandera){
        let divi = numero[0].value/numero[1].value;
        console.log(divi);
        document.querySelector(".division").innerHTML=divi;
        document.querySelector(".container-propio").classList.remove("hidden")
        setTimeout(() => {
            document.querySelector(".container-propio").classList.add("hidden")
        }, 3000);

    }
}


$(document).ready(function(){
    $(".titulo").click(function(){
        $("#titulo").css({'color':'red'});
        setTimeout(function() { 
            $("#titulo").css({'color':"black"});
        }, 3000);
    })

    $("#apartado").click(function(){
        $(".apartado").css({"border":'1px solid #0C0A7C','background-color':'#0c0a7c8f'});
        setTimeout(() => {
            $(".apartado").css({"border":'1px solid transparent','background-color':'white'});
        }, 3000);
    })
    $("#inputs").click(function () {
        $("input[type='text']").css({'border':'1px solid red'});
     });
     $("#hiden").click(function(){
        let nodode = $(".hi");
        // nodode.forEach(element => {
        //     alert(element.value);
        // });
  
        $('.hi').each(function(i,item){
            alert(item.value)
          });
     })

})