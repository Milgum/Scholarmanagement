/* switch login to sign up */

function formswitch1(){
    let logform=document.querySelector('#seconnecter');
    let signform=document.querySelector('#signup');
            logform.classList.remove('connectactive');
            signform.classList.remove('signupdesactive');
            return switchformcompt=1;   
} 

function formswitch2(){
    let logform=document.querySelector('#seconnecter');
    let signform=document.querySelector('#signup');
            logform.classList.add('connectactive');
            signform.classList.add('signupdesactive');
            return switchformcompt=0;
}


const clickcolor=document.querySelector("#activecolor");
var colorcount=0;
function activecolor(){
    if (colorcount==1){
        document.querySelector(".colorlog").style.opacity="1";
        return colorcount=0;
    }
    else{
        document.querySelector(".colorlog").style.opacity="0";
        return colorcount=1;
    }
}

/* switch login to sign up  end ===================================================================================================================================================*/
/* navbar========================================================================================================================================================================= */
    const sidebar=document.querySelector(".sidebar");
    const colorsshow= document.querySelector("#activecolor")
function navhideshow(){
    sidebar.classList.toggle("close");
    colorsshow.classList.remove("colorsactive");
}

function searchbtn(){
    sidebar.classList.remove("close"); 
}

function showpallette(){
    sidebar.classList.remove("close"); 
    colorsshow.classList.toggle("colorsactive");
    

}


function activemen1(){
    document.querySelector("#menu1").classList.add('activemenu');
    document.querySelector("#menu2").classList.remove('activemenu');
    document.querySelector("#menu3").classList.remove('activemenu');
    document.querySelector("#menu4").classList.remove('activemenu');
    document.querySelector("#dashboard_content").classList.remove('hidden');
    document.querySelector("#list_content").classList.add('hidden');
    document.querySelector("#option_content").classList.add('hidden');
}

function activemen2(){
    document.querySelector("#menu1").classList.remove('activemenu');
    document.querySelector("#menu2").classList.add('activemenu');
    document.querySelector("#menu3").classList.remove('activemenu');
    document.querySelector("#menu4").classList.remove('activemenu');
    document.querySelector("#dashboard_content").classList.add('hidden');
    document.querySelector("#list_content").classList.remove('hidden');
    document.querySelector("#option_content").classList.add('hidden');
}

/* menu2.addEventListener('click',()=>{
    menu.classList.remove('activemenu');
    menu1.classList.remove('activemenu');
    menu2.classList.add('activemenu');
    menu4.classList.remove('activemenu');
    document.querySelector(".dashboard_content").classList.add('hidden');
    document.querySelector("#etudiantlist").classList.add('hidden');
    document.querySelector("#optionform").classList.add('hidden');
})

menu4.addEventListener('click',()=>{
    menu.classList.remove('activemenu');
    menu1.classList.remove('activemenu');
    menu2.classList.remove('activemenu');
    menu4.classList.add('activemenu');
    document.querySelector(".dashboard_content").classList.add('hidden');
    document.querySelector("#etudiantlist").classList.add('hidden');
    document.querySelector("#optionform").classList.remove('hidden');

})  */
/* fin navbar====================================================================== */

/* section dashboard=============================================================== */
function shortcutcreate(){
    activemen2.call(addstudent.call());
}
/* fin dashboard ================================================================== */
/* section liste des etudiants===================================================== */
function activestudent(){
    var montantrst=document.querySelector("#montantrst");
    var activeetudiant=document.querySelector("#activeetudiant");
    if (montantrst=="0Ar"){
        activeetudiant.innerHTML="active";
        document.querySelector("#checkeractive").classList.toggle('fa fa-check-circle text-success');
    }else{
        activeetudiant.innerHTML="stop";
        document.querySelector("#checkeractive").classList.toggle('fa fa-x text-danger');
    }
}


function addstudent(){
  
    document.querySelector("#listsection").classList.add('listsectionhide');
    document.querySelector("#formstyle").classList.remove('hidden');
}

function closeform(){
    document.querySelector("#listsection").classList.remove('listsectionhide');
    document.querySelector("#formstyle").classList.add('hidden');
}


function alwaysnumber(){
    var nume=document.form.matricule_etu.value;
    document.querySelector("#matristudent").innerHTML=nume;
}
function uppername(){ 
    var nom=document.form.nom_etu.value;
    var nomupper=nom.toUpperCase();
    document.form.nom_etu.value=nomupper;
    document.querySelector("#nomstudent").innerHTML=nomupper;
}
function capitalname(){
    var prenom=document.form.prenom_etu.value;
    var prenomcap=prenom.charAt(0).toUpperCase()+prenom.slice(1);
    document.form.prenom_etu.value=prenomcap;
    document.querySelector("#prenomstudent").innerHTML=prenomcap;
}

function datetype(){
    var year=document.form.datedenaissance_etu.value;
    var now = new Date().getFullYear();
    var nowmounth= new Date().getMonth();
    var birthdayy=new Date(year).getFullYear();
    var birthdaym= new Date(year).getMonth();
    document.querySelector("#datenaistudent").innerHTML=year;
    var agem=nowmounth-birthdaym;
    var age= now-birthdayy;
    if(agem<0){
        document.querySelector("#agestudent").innerHTML=(age-1)+" ans"; 
    }
    else{
        document.querySelector("#agestudent").innerHTML=age+" ans";
    }
    
}

function rotateform(){
    document.querySelector(".formulairerecup").classList.add("formulairerecuprotate");
}

function rerotateform(){
    document.querySelector(".formulairerecup").classList.remove("formulairerecuprotate");
}

function lieuxnais(){
    var lieuxnais=document.form.lieunais_etu.value;
    document.querySelector("#lieudenaistudent").innerHTML=lieuxnais;
}

function cintyping(){
    var cin=document.form.cin_etu.value;
    document.querySelector("#cinstudent").innerHTML=cin;
}

function mailtype(){
     var mail=document.form.mail_etu.value;
    document.querySelector("#emailstudent").innerHTML=mail; 
}

function resetform(){
    document.querySelector("#matristudent").innerHTML="";
    document.querySelector("#nomstudent").innerHTML="";
    document.querySelector("#prenomstudent").innerHTML="";
    document.querySelector("#datenaistudent").innerHTML="";
    document.querySelector("#lieudenaistudent").innerHTML="";
    document.querySelector("#cinstudent").innerHTML="";
    document.querySelector("#emailstudent").innerHTML=""; 
}


function Nextpage1(){
/*     if(document.querySelector("#matristudent").innerHTML="" | document.querySelector("#nomstudent").innerHTML="" |document.querySelector("#prenomstudent").innerHTML=""||document.querySelector("#datenaistudent").innerHTML=""||document.querySelector("#lieudenaistudent").innerHTML=""){

    } */
    document.querySelector("#firstpageform").style.left="-1000px";
    document.querySelector("#secondpageform").style.left="50%";
}
function returnpage1(){
    /*     if(document.querySelector("#matristudent").innerHTML="" | document.querySelector("#nomstudent").innerHTML="" |document.querySelector("#prenomstudent").innerHTML=""||document.querySelector("#datenaistudent").innerHTML=""||document.querySelector("#lieudenaistudent").innerHTML=""){
    
        } */
        document.querySelector("#firstpageform").style.left="50%";
        document.querySelector("#secondpageform").style.left="1000px";
}


function disaperbtn(){
    if(((form.querySelector("#marie").checked)==true && (form.querySelector("#celib").checked)==true)||((form.querySelector("#marie").checked)==false && (form.querySelector("#celib").checked)==false) ){
        document.querySelector("#unseulchoix").innerHTML="erreur verifier la situation matrimoniale";
        document.querySelector("#btndisp").classList.add("hidden");
    }
    else{
        document.querySelector("#btndisp").classList.remove("hidden");
        document.querySelector("#unseulchoix").innerHTML="";
    }
}

function nextpage2(){
    if((form.querySelector("#marie").checked)==true && (form.querySelector("#celib").checked)==false){
        text="Marie";
        document.querySelector("#situationstudent").innerHTML=text;
    }
    if((form.querySelector("#marie").checked)==false && (form.querySelector("#celib").checked)==true){
        text="Celibataire";
        document.querySelector("#situationstudent").innerHTML=text;
    }
    if(form.choix[0].checked){document.querySelector("#Sexestudent").innerHTML=form.choix[0].value}

    if(form.choix[1].checked)
    {document.querySelector("#Sexestudent").innerHTML=form.choix[1].value}
    document.querySelector("#secondpageform").style.left="-1000px";
    document.querySelector("#thirdpageform").style.left="50%";
}

function returnpage2(){
    document.querySelector("#secondpageform").style.left="50%";
    document.querySelector("#thirdpageform").style.left="1000px";
}

function choicemention(){
    var choicee=document.form.selectmention_etu.value;
    document.querySelector("#mentionstudent").innerHTML=choicee;
}

function choiceniv(){
    var choicee=document.form.selectnivo_etu.value;
    document.querySelector("#nivostudent").innerHTML=choicee;
}

function choicebacc(){
    var choicee=document.form.selectbacc_etu.value;
    document.querySelector("#baccstudent").innerHTML=choicee;
}

function pricepay(){
    var choicee=document.form.selectnivo_etu.value;
    var frais=0;
    var montant=document.form.montant.value;
    if(choicee=="L1"||choicee=="L2"||choicee=="L3"){
        frais=505000;
        x= frais-montant;
        if(x==0){
            document.querySelector("#priceresult").innerHTML="payé";
        }
        else{
            document.querySelector("#priceresult").innerHTML=x+"Ar";
        }
    }
    if(choicee=="M1"||choicee=="M2"){
        frais=605000;
        x= frais-montant;
        if(x==0){
            document.querySelector("#priceresult").innerHTML="payé";
        }
        else{
            document.querySelector("#priceresult").innerHTML=x+"Ar";
        }
    }

}

/* fin section liste des etudiants===================================================== */
