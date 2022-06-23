
window.addEventListener("DOMContentLoaded",function(){
  

    let mdp=document.getElementById("Mdp");
    let mdp_c=document.getElementById("MdpC");
    let div_mdp=document.getElementById("div_mdp");
    let adresse = document.getElementById("Adresse");
    let div_adresse=document.getElementById("div_adresse");
    let div_psw=document.getElementById("div_psw");

    verifier(mdp,mdp_c,div_mdp);//verifie si les mdp sont identiques
    check(4,mdp,div_psw);

    //traitement pour adresse email
    adresse.addEventListener("input",function(){
        adresse.setAttribute("style","border-color:blue; border-width:4px");
        adresse.addEventListener("change",function(){
          if(adresse.value.includes("@") && adresse.value.includes(".") && adresse.value.lastIndexOf(".")>adresse.value.indexOf("@")){
             adresse.setAttribute("style","border-color:green; border-width:3px");
             div_adresse.setAttribute("style","display:none");
          } else if (adresse.value == ""){
            div_adresse.setAttribute("style","display:none");
            adresse.setAttribute("style","border-color:#F5C5C; border-width:1px");
        }
          else{
            adresse.setAttribute("style","border-color:red; border-width:3px");
             div_adresse.setAttribute("style","display:block");
          }});
        });



    


    function verifier(a,b,d){
   
        a.addEventListener("input",function(){
            a.setAttribute("style","border-color:blue; border-width:4px");
            a.addEventListener("change",function(){
        if(a.value==b.value && a.value !=0 && b.value !=0){
            a.setAttribute("style","border-color:green; border-width:3px");
            b.setAttribute("style","border-color:green; border-width:3px");
            d.setAttribute("style","display:none");
        }
        else if(a.value !==b.value && a.value !=0 && b.value !=0){
            b.setAttribute("style","border-color:red; border-width:3px");
             d.setAttribute("style","display:block"); 
             a.setAttribute("style","border-color:#F5C5C; border-width:1px");
        }
        else{
            a.setAttribute("style","border-color:#F5C5C; border-width:1px");
            b.setAttribute("style","border-color:#F5C5C; border-width:1px");
            d.setAttribute("style","display:none");
        }
    });
    });
    b.addEventListener("input",function(){
        b.setAttribute("style","border-color:blue; border-width:4px");
        b.addEventListener("change",function(){
        if(a.value==b.value && a.value !=0 && b.value !=0){
            a.setAttribute("style","border-color:green; border-width:3px");
            b.setAttribute("style","border-color:green; border-width:3px");
            d.setAttribute("style","display:none");
          }
         
        else if(a.value !==b.value && a.value !=0 && b.value !=0){
            b.setAttribute("style","border-color:red; border-width:3px");
             d.setAttribute("style","display:block"); 
             a.setAttribute("style","border-color:#F5C5C; border-width:1px");
        }
        else{
            a.setAttribute("style","border-color:#F5C5C; border-width:1px");
            b.setAttribute("style","border-color:#F5C5C; border-width:1px");
            d.setAttribute("style","display:none");
        }
    });
    }); 
}

    function check(n,e,d){
    e.addEventListener("input",function(){
        e.setAttribute("style","border-color:blue; border-width:4px");
        e.addEventListener("change",function(){
          let i=e.value.length;
          if(i<n && e.value !== "" ){
              e.setAttribute("style","border-color:red; border-width:3px");
             d.setAttribute("style","display:block");
          }
          else if(e.value == ""){
            e.setAttribute("style","border-color:#F5C5C; border-width:1px");
            d.setAttribute("style","display:none");
        }
          else{
            e.setAttribute("style","border-color:green; border-width:3px");
            d.setAttribute("style","display:none");
          }});
        });
    }
        


 

    
   
});