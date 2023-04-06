



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


const menuLinks = document.querySelectorAll('.nav_link a');
menuLinks.forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const menuItem = e.target.closest('li');
    const sectionId = link.getAttribute('href');
    const section = document.querySelector(sectionId);
    const allSections = document.querySelectorAll('.mainbody');
    allSections.forEach((s) => {
      if (s !== section) {
        s.classList.add('hidden');
      }
    });
    section.classList.remove('hidden');
    const allMenuItems = document.querySelectorAll('.nav_link');
    allMenuItems.forEach((item) => {
      item.classList.remove('activemenu');
    });
    menuItem.classList.add('activemenu');
  });
});

/* dashboardadmin==================================================================== */
let date = new Date();
let daynum = date.getDay();
let day = date.getDate();
let dayactive = document.querySelector(".week ul li:nth-child(" + daynum + ")");
dayactive.classList.add("today")
let h5 = document.createElement('h5');
h5.innerHTML = day;
dayactive.appendChild(h5);



const chartData={
  labels:["Paye","Non paye"],
  data:[50,50],
}

const myChart= document.querySelector(".my-chart");

new Chart(myChart,{
  type:'doughnut',
  data:{
    labels:chartData.labels,
    datasets: [
      {
        label:"payement",
        data:chartData.data,
      },
    ],
  },
  options:{
    borderWidth:4,
    borderRadius:2, 
    hoverBorderWidth:0,
    plugins:{
      legend:{
        display:true,
      },
    },
  },
});

const chartData2={
  labels:["Une tranche"," deux Tranches","Trois tranches"],
  data:[30,20,50],
}

const myChart2= document.querySelector(".my-Chart2");

new Chart(myChart2,{
  type:'doughnut',
  data:{
    labels:chartData2.labels,
    datasets: [
      {
        label:"payement",
        data:chartData2.data,
      },
    ],
  },
  options:{
    borderWidth:4,
    borderRadius:2, 
    hoverBorderWidth:0,
    plugins:{
      legend:{
        display:true,
      },
    },
  },
});


/* etudiantadmin =======================================================================================*/
function deletestudent(){
  document.querySelector("#deletestudent").classList.remove("hidden");

}

function nodeletestudent(){
  document.querySelector("#deletestudent").classList.add("hidden");
}

function modifstudent(){
  document.querySelector("#modifstudent").classList.remove("hidden");
}

function nomodifstudent(){
  document.querySelector("#modifstudent").classList.add("hidden");
}

function addstudent(){
    document.querySelector(".etudiantList").classList.add('hidden');
    document.querySelector(".addstudent").classList.remove('hidden');
}

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


function closeform(){
    document.querySelector(".etudiantList").classList.remove('hidden');
    document.querySelector(".addstudent").classList.add('hidden');
    document.form.querySelectorAll("input").value="";

}

function Nextpage1(){
/*     if(document.querySelector("#matristudent").innerHTML="" | document.querySelector("#nomstudent").innerHTML="" |document.querySelector("#prenomstudent").innerHTML=""||document.querySelector("#datenaistudent").innerHTML=""||document.querySelector("#lieudenaistudent").innerHTML=""){

    } */
    document.querySelector("#pageform1").style.left="-1000px";
    document.querySelector("#pageform2").style.left="50%";
}

function returnpage1(){
    /*     if(document.querySelector("#matristudent").innerHTML="" | document.querySelector("#nomstudent").innerHTML="" |document.querySelector("#prenomstudent").innerHTML=""||document.querySelector("#datenaistudent").innerHTML=""||document.querySelector("#lieudenaistudent").innerHTML=""){
    
        } */
        document.querySelector("#pageform1").style.left="50%";
        document.querySelector("#pageform2").style.left="1000px";
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


/* changement de page */
function topageparent(){  
  document.querySelector("#etu").style.left="-1000px"
  document.querySelector("#parent").style.left="50%"
}

function returntostudentpage(){
  document.querySelector("#etu").style.left="50%"
  document.querySelector("#parent").style.left="1000px"
}

function tomerepage(){
  document.querySelector("#pere").style.left="-1000px"
  document.querySelector("#mere").style.left="50%"
}

function returntopagepere(){
  document.querySelector("#pere").style.left="50%"
  document.querySelector("#mere").style.left="1000px"
}

function topayment(){
  document.querySelector("#parent").style.left="-1000px"
  document.querySelector("#payement").style.left="50%"
}

function returntopagemere(){
  document.querySelector("#parent").style.left="50%"
  document.querySelector("#payement").style.left="1000px"
}

function closeform(){
    document.querySelector("#listsection").classList.remove('hidden');
    document.querySelector("#formstyle").classList.add('hidden');
}

function rotateform(){
    document.querySelector(".formulairerecup").classList.add("formulairerecuprotate");
}

function rerotateform(){
    document.querySelector(".formulairerecup").classList.remove("formulairerecuprotate");
}





/* inscription des etudiants */
function choicemention(){
       rerotateform.call();
    var choicee=document.formisncription.parcours_etu.value;
       if (choicee == "AES") {
            document.querySelector("#serieA").disabled = false;
        }
    document.querySelector("#mentionstudent").innerHTML=choicee;
}

function choiceniv(){
  rerotateform.call();
    var choicee=document.formisncription.niveau_etu.value;
    document.querySelector("#nivostudent").innerHTML=choicee;

    let montant=0;
    if(document.querySelector("niveau_etu").value=="License 1"||document.querySelector("niveau_etu").value=="License 2"||document.querySelector("niveau_etu").value=="License 3"){
      montant=505000
      document.formisncription.montant_total.value=montant;
    }
    else{
      montant=605000
      document.formisncription.montant_total.value=montant;
    }
  return montant
}

function choicebacc(){
  rerotateform.call();
    var choicee=document.formisncription.bacc_etu.value;
    document.querySelector("#baccstudent").innerHTML=choicee;
}

function uppername(){ 
  rerotateform.call();
    var nom=document.formisncription.nom_etu.value;
    var nomupper=nom.toUpperCase().replace(/[0-9]/g, '');
    document.formisncription.nom_etu.value=nomupper;
    document.querySelector("#nomstudent").innerHTML=nomupper;
}

function capitalisename() {
  rerotateform.call();
  var prenom = document.formisncription.prenom_etu.value;
  var prenomcap = prenom.charAt(0).toUpperCase().replace(/[0-9]/g, '') + prenom.slice(1).toLowerCase().replace(/[0-9]/g, '');

  for (var i = 0; i < prenomcap.length; i++) {
    if (prenomcap.charAt(i) === " ") {
      prenomcap = prenomcap.slice(0, i + 1) + prenomcap.charAt(i + 1).toUpperCase() + prenomcap.slice(i + 2).toLowerCase();
    }
  }

  document.formisncription.prenom_etu.value = prenomcap;
  document.querySelector("#prenomstudent").innerHTML = prenomcap;
}


function datetype(){
    rotateform.call();
    var year=document.formisncription.date_naissance_etu.value;
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

function cintyping() {
  rerotateform.call();
  var cin = document.formisncription.cin_etu.value;


  var numericCin = cin.replace(/\D/g,'');

  document.formisncription.cin_etu.value = numericCin.substring(0, 12);

  if (cin.length > 12) {
    document.formisncription.cin_etu.value = numericCin.substring(0, 12);
  }

 var sixiemeChiffre = numericCin.charAt(5);
  if(sixiemeChiffre == 1){
    document.getElementById('homme').checked = true;
    document.getElementById('femme').checked = false;
  }
  else if(sixiemeChiffre == 2){
    document.getElementById('homme').checked = false;
    document.getElementById('femme').checked = true;
  }
  else{
    document.getElementById('homme').checked = false;
    document.getElementById('femme').checked = false;
    document.querySelector("#cininput").classList.add('bg-red-700');
  }
  
  
  var formattedCin = numericCin.replace(/(\d{3})(\d{3})(\d{3})(\d{3})/, "$1-$2-$3-$4");
  document.querySelector("#cinstudent").innerHTML = formattedCin;
   sexe.call()
 
}

function sexe(){
  rerotateform.call();
 var sexeValue;
  if (document.getElementById('homme').checked) {
    sexeValue = document.getElementById('homme').value;
  } else if (document.getElementById('femme').checked) {
    sexeValue = document.getElementById('femme').value;
  }
  document.querySelector("#Sexestudent").innerHTML = sexeValue;
}

function adrstyping(){
     rotateform.call();
    document.querySelector("#adrsstudent").innerHTML=document.formisncription.adresse_etu.value;
 
}

function mailtyping(){
  rerotateform.call();
     var mail=document.formisncription.email_etu.value;
    document.querySelector("#emailstudent").innerHTML=mail; 
}

function teltyping(){
  rerotateform.call();
  var tel=document.formisncription.tel_etu.value;
  var numericTel = tel.replace(/\D/g,'');
  var formattedTel = numericTel.replace(/(\d{3})(\d{2})(\d{3})(\d{2})/, '$1-$2-$3-$4');
  document.querySelector("#telstudent").innerHTML = formattedTel;
}


/* parent */
/* pere */

function uppernamepere(){
  var name=document.formisncription.nom_pere.value;
  var nameupper=name.toUpperCase().replace(/[0-9]/g, '');
  document.formisncription.nom_pere.value=nameupper;
  document.querySelector("#nompere").innerHTML=nameupper;

}

function capitalisenamepere(){ 
    var prenom=document.formisncription.prenom_pere.value;
  var prenomcap = prenom.charAt(0).toUpperCase().replace(/[0-9]/g, '') + prenom.slice(1).toLowerCase().replace(/[0-9]/g, '');

  for (var i = 0; i < prenomcap.length; i++) {
    if (prenomcap.charAt(i) === " ") {
      prenomcap = prenomcap.slice(0, i + 1) + prenomcap.charAt(i + 1).toUpperCase() + prenomcap.slice(i + 2).toLowerCase();
    }
  }
/*     if(prenom.charAt(i-1)=""){
      var prenomcap=prenom.charAt(i).toUpperCase()+prenom.slice(i+1);
    } */
    document.formisncription.prenom_pere.value=prenomcap;
    document.querySelector("#prenompere").innerHTML=prenomcap;
}


function mailpere(){
     var mail=document.formisncription.email_pere.value;
    document.querySelector("#emailpere").innerHTML=mail; 
}

function telpere(){
     var tel=document.formisncription.tel_pere.value;
      var numericTel = tel.replace(/\D/g,'');
    var formattedTel = numericTel.replace(/(\d{3})(\d{2})(\d{3})(\d{2})/, '$1-$2-$3-$4');
    document.querySelector("#telpere").innerHTML=formattedTel; 
}

function professionpere(){
     var profession=document.formisncription.profession_pere.value;
    document.querySelector("#professionpere").innerHTML=profession; 
}

function adrspere(){
     var adrs=document.formisncription.adresse_pere.value;
    document.querySelector("#adrspere").innerHTML=adrs; 
}

/* mere */

function uppernamemere(){
  var name=document.formisncription.nom_mere.value;
  var nameupper=name.toUpperCase().replace(/[0-9]/g, '');
  document.formisncription.nom_mere.value=nameupper;
  document.querySelector("#nommere").innerHTML=nameupper;
}

function capitalisenamemere(){ 
    var prenom=document.formisncription.prenom_mere.value;
    var prenomcap = prenom.charAt(0).toUpperCase().replace(/[0-9]/g, '') + prenom.slice(1).toLowerCase().replace(/[0-9]/g, '');

  for (var i = 0; i < prenomcap.length; i++) {
    if (prenomcap.charAt(i) === " ") {
      prenomcap = prenomcap.slice(0, i + 1) + prenomcap.charAt(i + 1).toUpperCase() + prenomcap.slice(i + 2).toLowerCase();
    }
  }
/*     if(prenom.charAt(i-1)=""){
      var prenomcap=prenom.charAt(i).toUpperCase()+prenom.slice(i+1);
    } */
    document.formisncription.prenom_mere.value=prenomcap;
    document.querySelector("#prenommere").innerHTML=prenomcap;
}

function mailmere(){
     var mail=document.formisncription.email_mere.value;
    document.querySelector("#emailmere").innerHTML=mail; 
}

function telmere(){
     var tel=document.formisncription.tel_mere.value;
    document.querySelector("#telmere").innerHTML=tel; 
}

function profesionmere(){
     var profession=document.formisncription.profession_mere.value;
    document.querySelector("#professionmere").innerHTML=profession; 
}

function adrsmere(){
     var adrs=document.formisncription.adresse_mere.value;
    document.querySelector("#adrsmere").innerHTML=adrs; 
}

/* payement */

function calculmontant(){
    var x=document.formisncription.montant_paye.value;
    var montant=document.formisncription.montant_total.value;
    var reste=montant-x;
  document.formisncription.reste_a_payer.value=reste;
  if(reste==0){
  document.formisncription.statut_paiement_etu.value="paye";
  }
  else if(reste<0){
    document.formisncription.statut_paiement_etu.value="reverifier votre saisie";
  }
  else{
  document.formisncription.statut_paiement_etu.value="en attente";
  }
}



