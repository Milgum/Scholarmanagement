<?php
    require_once ("../model/admin/inscrit_etu.php");
     require_once ("../model/admin/countall.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="public/dist/style.css">
    <link rel="stylesheet" href="public/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="public/css/styleU.css">
    <link rel="stylesheet" href="public/css/style-switcher.css">
    <link rel="stylesheet" href="public/css/teststyle.css">

    <link rel="stylesheet" href="public/css/theme/bleu.css" class="alternate-style" title="bleu" disabled>
    <link rel="stylesheet" href="public/css/theme/emit.css" class="alternate-style" title="emit" enable>
    <link rel="stylesheet" href="public/css/theme/orange.css" class="alternate-style" title="orange" disabled>
    <link rel="stylesheet" href="public/css/theme/rose.css" class="alternate-style" title="rose" disabled>
    <link rel="stylesheet" href="public/css/theme/rouge.css" class="alternate-style" title="rouge" disabled>
    <link rel="stylesheet" href="public/css/theme/vert.css" class="alternate-style" title="vert" disabled>

    <!-- app JS -->
    <!--     <script src="https://unpkg.com/quagga/dist/quagga.min.js" defer></script> -->
    <script src="public/js/Napp.js" defer></script>
    <script src="public/js/scriptswitcher.js" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <nav class="sidebar">
            <header>
                <div class="py-2 imagelogo">
                    <span class="image">
                        <img src="public/img/emit logo.jpg" alt="logo">
                    </span>
                    <div class="txtheader navtxt">
                        <span>
                            Emit
                        </span>
                        <span>
                            Scolarite
                        </span>
                    </div>
                </div>
                <div class="mt-5 menu_bar">
                    <div class="text-center mt-5 mb-5" onclick="searchbtn()">
                        <label for="" class="searchstyle"><input type="search" placeholder="..."> <i
                                class="fa fa-search"></i></label>
                    </div>
                    <div class="menu">
                        <ul class=" menulist">
                            <li class="nav_link  activemenu">
                                <a href="#tableaudebord">
                                    <i class="fa fa-dashboard"></i>
                                    <span class="navtxt">Tableau de bord</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#etudiant">
                                    <i class="fa fa-users"></i>
                                    <span class="navtxt">Étudiants</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#fraisscolarite">
                                    <i class="fa fa-money"></i>
                                    <span class="navtxt">Frais de scolarité</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#paiement">
                                    <i class="fa fa-credit-card"></i>
                                    <span class="navtxt">Paiements</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#montantniveau">
                                    <i class="fa fa-bell"></i>
                                    <span class="navtxt">Montant par niveau</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#professeur">
                                    <i class="fa fa-user"></i>
                                    <span class="navtxt">Professeurs</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#Matieres">
                                    <i class="fa fa-book"></i>
                                    <span class="navtxt">Matières</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#Notes">
                                    <i class="fa fa-list-alt"></i>
                                    <span class="navtxt">Notes</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#Emploidutemps">
                                    <i class="fa fa-calendar"></i>
                                    <span class="navtxt">Emploi du temps</span>
                                </a>
                            </li>
                            <hr class="container">
                            <li class="pl-3 mode">
                                <button class="flex day-night"><i class="fa fa-moon"></i><span
                                        class="navtxt">Mode</span></button>

                            </li>
                            <li class="nav_pallette " id="menupallette">
                                <a href="#theme" onclick="showpallette()">
                                    <i class="fa fa-palette"></i>
                                    <span class="navtxt">Theme</span>
                                </a><br>

                                <div class="colors" id="activecolor">
                                    <span class="emit" onclick="activestyle('emit')"></span>
                                    <span class="bleu" onclick="activestyle('bleu')"></span>
                                    <span class="orange" onclick="activestyle('orange')"></span>
                                    <span class="rose" onclick="activestyle('rose')"></span>
                                    <span class="rouge" onclick="activestyle('rouge')"></span>
                                    <span class="vert" onclick="activestyle('vert')"></span>
                                </div>
                            </li>
                            <li class="nav_langue">
                                <a href="#parametre">
                                    <i class="fa fa-language"></i>
                                    <span class="navtxt">Langues</span>
                                </a>
                            </li>
                            <li class="nav_link">
                                <a href="#parametre">
                                    <i class="fa fa-cog"></i>
                                    <span class="navtxt">Parametres</span>
                                </a>
                            </li>
                            <hr>
                            <li class=' bottom_content'>
                                <a href="#deco">
                                    <i class="fa fa-sign-out"></i><span class="navtxt">Deconnexion</span>
                                </a>
                            </li>
                        </ul>
                        <br><br><br>
                    </div>
                    <i class="cursor-pointer px-1 py-1 fa fa-angle-right navshower" onclick="navhideshow()"></i>
                </div>
            </header>
        </nav>

        <section class=" mainbody  " id="tableaudebord">
            <h2 class="titlesection">Tableau de bord</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
                <div class="bg-yellow-400 rounded-xl flex flex-col p-5 h-36 w-11/12 relative card">
                    <h3 class="text-white font-bold">ETUDIANT</h3>
                    <p class="text-white text-5xl">
                        <?php echo $nb_etudiants?>
                    </p>
                    <div class="absolute right-0 bottom-0 -rotate-45">
                        <i class="fa fa-group"></i>
                    </div>
                </div>
                <div class="bg-green-500 rounded-xl flex flex-col p-5 h-36 w-11/12 relative card">
                    <h3 class="text-white font-bold">PARENT</h3>
                    <p class="text-white text-5xl"> <?php echo $nb_parent?></p>
                    <div class="absolute right-0 bottom-0 -rotate-45">
                        <i class="fa fa-user-clock"></i>
                    </div>
                </div>
                <div class="bg-blue-500 rounded-xl flex flex-col p-5 h-36 w-11/12 relative card">

                    <h3 class="text-white font-bold">PROFESSEUR</h3>
                    <p class="text-white text-5xl">
                        <?php echo $nb_prof;?>
                    </p>
                    <div class="absolute right-0 bottom-0 -rotate-45">
                        <i class="fa fa-user-doctor"></i>
                    </div>

                </div>
                <div class="bg-red-500 rounded-xl flex flex-col p-5 h-36 w-11/12 relative card">
                    <h3 class="text-white font-bold">SOLDE</h3>
                    <p class="text-white text-5xl">
                        <?php echo $solde;?>
                    </p>
                    <div class="absolute right-0 bottom-0 -rotate-45">
                        <i>AR</i>
                    </div>
                </div>
            </div>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class="h-auto  rounded-xl flex flex-col p-5  chart">
                    <div class="statdashboard">
                        <div class="statcontainer">
                            <div class="stat">
                                <div class="statetutotal">
                                </div>
                                <div class="stathomme">
                                </div>
                                <div class="statfemme">
                                </div>
                                <div class="repere">
                                    <span>H = Homme</span><br>
                                    <span>F = Femme</span><br>
                                    <span>E = Etudiant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" rounded-xl h-auto flex flex-col p-5 ">
                    <div class="w-44 h-44 justify-center items-center  lg:w-64 lg:h-64 watch">
                        <div class="timer" id="second">
                        </div>
                        <div class="timer" id="minute">
                        </div>
                        <div class="timer" id="hour">
                        </div>
                        <span style="--i:1;"><b>1</b></span>
                        <span style="--i:2;"><b>2</b></span>
                        <span style="--i:3;"><b>3</b></span>
                        <span style="--i:4;"><b>4</b></span>
                        <span style="--i:5;"><b>5</b></span>
                        <span style="--i:6;"><b>6</b></span>
                        <span style="--i:7;"><b>7</b></span>
                        <span style="--i:8;"><b>8</b></span>
                        <span style="--i:9;"><b>9</b></span>
                        <span style="--i:10;"><b>10</b></span>
                        <span style="--i:11;"><b>11</b></span>
                        <span style="--i:12;"><b>12</b></span>
                    </div>
                    <script>
                    let sc = document.querySelector("#second")
                    let mn = document.querySelector("#minute")
                    let hr = document.querySelector("#hour")
                    setInterval(() => {
                        let day = new Date();
                        let hh = day.getHours() * 30;
                        let mm = day.getMinutes() * 6;
                        let ss = day.getSeconds() * 6;
                        hr.style.transform = `rotateZ(${hh + (mm / 12)}deg)`;
                        mn.style.transform = `rotateZ(${mm}deg)`;
                        sc.style.transform = `rotateZ(${ss}deg)`;
                    });
                    </script>
                    <div class="flex w-auto h-44 justify-center items-center  lg:w-64 lg:h-64 week">
                        <ul class="flex gap-1">
                            <li>L</li>
                            <li>M</li>
                            <li>M</li>
                            <li>J</li>
                            <li>V</li>
                            <li>S</li>
                            <li>D</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class="grid grid-cols-1cols md\:grid-cols-2 gap-2">
                    <div class="relative w-11/12 h-auto  pb-9 mb-5 rounded-lg task">
                        <h2 class="text-center font-bold mt-4">Tache journaliere</h2>
                        <div class="py-4 px-8 rounded-lg shadow-md">
                            <h3 class="text-xl font-bold mb-4">Inscription</h3>
                            <ul class="list-disc pl-4">
                                <li>prendre les dossier des eleves et l'inscrire</li>
                            </ul>
                        </div>

                        <div class="py-4 px-8 rounded-lg shadow-md mt-4">
                            <h3 class="text-xl font-bold mb-4">Vérification de compte</h3>
                            <ul class="list-disc pl-4">
                                <li>Checker la liste des eleves et regarder s'ils ont payer à temps</li>
                                <li>Envoyer des messages a ceux qui n'ont pas payée</li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative w-11/12 h-52 mb-5 rounded-lg task">
                        <h2 class="text-center font-bold mt-4">Nouvel étudiant</h2>
                        <button class="relative m-auto mb-2 mr-2 bg-opacity-50 rounded-lg">
                            <span>Ajouter</span>
                            <svg class="w-6 h-6 text-gray-300 mx-auto my-auto" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </button>

                        <span class="addstudentillu">
                            <i class="fa fa-user-plus"></i>
                        </span>
                    </div>
                </div>
                <div class="h-auto rounded-xl flex mb-5 p-5 chart">
                    <div class="chartcaorussel" id="">
                        <div class="chartcontainer">
                            <h3 class="text-center font-bold">Taux de payement</h3>
                            <canvas class="my-chart"></canvas>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                </div>
            </div>
        </section>

        <section class="mainbody hidden" id="etudiant">
            <h2 class="titlesection">Etudiant</h2>
            <div class="w-11/12 block m-auto etudiantList " id="listsection">
                <div
                    class="mt-4 grid grid-cols-1 justify-center items-center  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 etudiantsearch">
                    <div>
                        <label for="" class="searchstyle"><input type="search" placeholder="...">
                            <i class="fa fa-search"></i></label>
                    </div>
                    <div class="flex justify-center items-center">
                        <label for="" class="block">Niveau</label>
                        <select name="select" id="" class="w-4/5 h-9">
                            <option name=""></option>
                            <option name="M2">Master 2</option>
                            <option name="M1">Master 1</option>
                            <option name="L3">License 3</option>
                            <option name="L2">License 2</option>
                            <option name="L1">License 1</option>
                        </select>
                    </div>
                    <div class="flex justify-center items-center">
                        <label for="" class="block">Classe</label>
                        <select name="select" id="" class="w-4/5 h-9">
                            <option name=""></option>
                            <option name="">DA2I</option>
                            <option name="">RPM</option>
                            <option name="">AES</option>
                        </select>
                    </div>
                    <div class="block m-auto rounded-xl">
                        <button class="p-2" onclick="addstudent()">
                            <i class="fa fa-plus"></i> Ajouter
                        </button>
                    </div>
                </div>
                <div class=" mt-5  listeetudiant">
                    <div class="titleliste">
                        <div class="mb-3">
                            <table class=" text-center border-none tables">
                                <thead>
                                    <tr>
                                        <th>
                                            Matricule
                                        </th>
                                        <th>
                                            Nom
                                        </th>
                                        <th>
                                            Prenom
                                        </th>
                                        <th>
                                            Mention
                                        </th>
                                        <th>
                                            Niveau
                                        </th>
                                        <th>
                                            Etat
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="filteractive">
                                        <td>
                                            <p data-label="Matricule">
                                                2246
                                            </p>
                                        </td>
                                        <td>
                                            <p data-label="Nom">
                                                Rasoamanana
                                            </p>
                                        </td>
                                        <td>
                                            <p data-label="Prenom">
                                                Razafimanantsoa Andrianina
                                            </p>
                                        </td>
                                        <td>
                                            <p data-label="Mention">
                                                Da2i
                                            </p>
                                        </td>
                                        <td>
                                            <p data-label="Niveau">
                                                License 2
                                            </p>
                                        </td>
                                        <td>
                                            <div class="grid grid-cols-3 etat" class="activeetudiant"
                                                onload="activestudent()" data-label="Etat">
                                                <div>
                                                    <span id="activeetudiant"><i id="checkeractive"></i></span>
                                                </div>
                                                <div>
                                                    <button class="text-blue-600"><i class="fa fa-pen-square"
                                                            onclick="modifstudent()"></i></button>
                                                </div>
                                                <div>
                                                    <button class="text-red-600" onclick="deletestudent()"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <p id="montantrst " data-label="Frais">
                                                paye
                                            </p>
                                        </td>
                                    </tr>
                                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 popup hidden "
                                        id="deletestudent">
                                        <p class="mb-5">Confirmer la suppresion?</p>
                                        <button class="bg-green-400 p-3 w-48 rounded-xl text-white">Confirmer</button>
                                        <button class="bg-red-600 p-3 w-48 rounded-xl text-white"
                                            onclick="nodeletestudent()">Annuler</button>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full h-full addstudent hidden  " id="formstyle">
                <div class="grid grid-cols-2">
                    <div class="w-3/4  formulairedajout">
                        <form action="" name="formisncription" method="POST"
                            class=" relative w-full overflow-hidden rounded-xl ">
                            <h2 class=" font-semibold mt-1 pt-8 text-center">Formulaire d'inscription</h2>
                            <hr>
                            <div class="absolute top-16 left-1/2 -translate-x-1/2 registre" id="etu">
                                <h3 class="text-center font-bold text-lg">Etudiant</h3>
                                <div class="w-full">
                                    <div class="grid grid-cols-3 ">
                                        <div class="block m-auto">
                                            <label for="">Mention</label> <br><select class="cursor-pointer"
                                                name="parcours_etu" id="" onclick="choicemention()">
                                                <option class="cursor-pointer" name=""></option>
                                                <option class="cursor-pointer" name="" value="DA2I">DA2I</option>
                                                <option class="cursor-pointer" name="" value="RPM">RPM</option>
                                                <option class="cursor-pointer" name="" value="AES">AES</option>
                                            </select>
                                        </div>
                                        <div class="block m-auto">
                                            <label for="">Niveau <br> </label><select class="cursor-pointer"
                                                name="niveau_etu" id="" onclick="choiceniv()">
                                                <option class="cursor-pointer" name=""></option>
                                                <option class="cursor-pointer" name="M2" value="Master 2">Master 2
                                                </option>
                                                <option class="cursor-pointer" name="M1" value="Master 1">Master 1
                                                </option>
                                                <option class="cursor-pointer" name="L3" value="License 3">License 3
                                                </option>
                                                <option class="cursor-pointer" name="L2" value="License 2">License 2
                                                </option>
                                                <option class="cursor-pointer" name="L1" value="License 1">License 1
                                                </option>
                                            </select>
                                        </div>
                                        <div class="block m-auto">
                                            <label for="">Bacc <br></label><select class="cursor-pointer"
                                                name="bacc_etu" onclick="choicebacc()">
                                                <option class="cursor-pointer" name=""></option>
                                                <option class="cursor-pointer" id="serieA" name="" value="A" disabled>A
                                                </option>
                                                <option class="cursor-pointer" name="" value="C">C</option>
                                                <option class="cursor-pointer" name="" value="D">D</option>
                                                <option class="cursor-pointer" name="" value="S">S</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Nom</span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg firspageadd"
                                            name="nom_etu" onkeyup="uppername()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Prenom</span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg firspageadd"
                                            name="prenom_etu" onkeyup="capitalisename()">
                                    </div>

                                    <div class="max-w-sm w-full h-19 my-3 mx-0 py-0 px-1 grid input-fieldform">
                                        <span class="text-center text-base py-2">Date de Naissance</span>
                                        <input type="date"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg firspageadd"
                                            name="date_naissance_etu" onkeyup="datetype()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform"
                                        id="cininput">
                                        <span class="text-center text-base pt-5">CIN</span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg firspageadd"
                                            name="cin_etu" onkeyup="cintyping()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform "
                                        id="radioform">
                                        <span class="text-center text-base pt-5">Genre</span>
                                        <div class="flex justify-between mt-5 ml-3 ">
                                            <label for="homme">
                                                <input type="radio" name="sexe_etu" id="homme" value="Homme"
                                                    onclick="sexe()">
                                                Homme
                                            </label>
                                            <label for="femme">
                                                <input type="radio" name="sexe_etu" id="femme" value="Femme"
                                                    onclick="sexe()">
                                                Femme
                                            </label>
                                        </div>
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Adresse</span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg firspageadd"
                                            name="adresse_etu" onkeyup="adrstyping()" required>
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Email</span>
                                        <input type="email"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg firspageadd"
                                            name="email_etu" onkeyup="mailtyping()" required>
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Telephone</span>
                                        <input type="tel"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg firspageadd"
                                            name="tel_etu" onkeyup="teltyping()" required>
                                    </div>
                                </div>
                                <div class="absolute -bottom-32 left-0">
                                    <div class="grid grid-cols-2 gap-2">
                                        <button class="bg-red-600 p-3 w-40 rounded-xl">annuler</button>
                                        <button type="button" class=" bg-green-600 p-3 w-40 rounded-xl"
                                            onclick="topageparent()">Suivant</button>
                                    </div>
                                </div>

                            </div>

                            <div class="absolute top-16 left-1/2 -translate-x-1/2  registre" id="parent">
                                <h2 class="text-center font-bold text-lg">Parent</h2>
                                <div class="absolute top-16 left-1/2 -translate-x-1/2 " id="pere">
                                    <h3 class="font-semibold text-lg">Pere</h3>
                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Nom </span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="nom_pere" onkeyup="uppernamepere()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Prenom </span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="prenom_pere" onkeyup="capitalisenamepere()">
                                    </div>
                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Adresse </span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="adresse_pere" onkeyup="adrspere()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Telephone </span>
                                        <input type="tel"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="tel_pere" onkeyup="telpere()">
                                    </div>
                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Email </span>
                                        <input type="email"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="email_pere" onkeyup="mailpere()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Profession </span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="profession_pere" onkeyup="professionpere()">
                                    </div>
                                    <div class="absolute -bottom-32 left-0">
                                        <div class="grid grid-cols-2 gap-2">
                                            <button type="button" class="bg-red-600 p-3 w-40 rounded-xl"
                                                onclick="returntostudentpage()">precedent</button>
                                            <button type="button" class=" bg-green-600 p-3 w-40 rounded-xl"
                                                onclick="tomerepage()">Suivant</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute top-16 left-1/2 -translate-x-1/2" id="mere">
                                    <h3 class="font-semibold text-lg">Mere</h3>
                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Nom</span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="nom_mere" onkeyup="uppernamemere()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Prenom</span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="prenom_mere" onkeyup="capitalisenamemere()">
                                    </div>
                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Adresse</span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="adresse_mere" onkeyup="adrsmere()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Telephone</span>
                                        <input type="tel"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="tel_mere" onkeyup="telmere()">
                                    </div>
                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Email</span>
                                        <input type="email"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="email_mere" onkeyup="mailmere()">
                                    </div>

                                    <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                        <span class="text-center text-base pt-5">Profession</span>
                                        <input type="text"
                                            class=" bg-transparent outline-none border-none font-semibold text-lg"
                                            name="profession_mere" onkeyup="profesionmere()">
                                    </div>
                                    <div class="absolute -bottom-32 left-0">
                                        <div class="grid grid-cols-2 gap-2">
                                            <button type="button" class="bg-red-600 p-3 w-40 rounded-xl"
                                                onclick="returntopagepere()">precedent</button>
                                            <button type="button" class=" bg-green-600 p-3 w-40 rounded-xl"
                                                onclick="topayment()">Suivant</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute top-16 left-1/2 -translate-x-1/2   registre  " id="payement">
                                <h2 class="text-center font-bold text-lg"">Payement</h2>

                                <div class=" max-w-sm w-full h-19 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                    <span class="text-center text-base py-3">Date d'inscription</span>
                                    <input type="date"
                                        class=" bg-transparent outline-none border-none font-semibold text-lg"
                                        name="date_inscription_etu" onload="todaydate()">
                            </div>

                            <div class="max-w-sm w-full h-19 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                <span class="text-center text-base py-3">Type de payement</span>
                                <input type="text"
                                    class=" bg-transparent outline-none border-none font-semibold text-lg"
                                    name="type_paiement">
                            </div>

                            <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                <span class="text-center text-base pt-3">Montant total</span>
                                <input type="text"
                                    class=" bg-transparent outline-none border-none font-semibold text-lg"
                                    name="montant_total">
                            </div>

                            <div class="max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                <span class="text-center text-base pt-5">Montant payer</span>
                                <input type="text"
                                    class=" bg-transparent outline-none border-none font-semibold text-lg"
                                    name="montant_paye" onkeyup="calculmontant()">
                            </div>

                            <div class=" max-w-sm w-full h-19 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                <span class="text-center text-base py-3">Date de payement</span>
                                <input type="date"
                                    class=" bg-transparent outline-none border-none font-semibold text-lg"
                                    name="date_paiement">
                            </div>

                            <div class=" max-w-sm w-full h-14 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                <span class="text-center text-base pt-5">Reste a payer</span>
                                <input type="text"
                                    class=" bg-transparent outline-none border-none font-semibold text-lg"
                                    name="reste_a_payer">
                            </div>
                            <div class="max-w-sm w-full h-19 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                <span class="text-center text-base py-3">Date limite de payement</span>
                                <input type="date"
                                    class=" bg-transparent outline-none border-none font-semibold text-lg"
                                    name="date_limite_paiement">
                            </div>
                            <div class=" max-w-sm w-full h-19 my-3 mx-0 py-0 px-2 grid input-fieldform">
                                <span class="text-center text-base py-3">Statue</span>
                                <input class=" bg-transparent outline-none border-none font-semibold text-lg"
                                    name="statut_paiement_etu">
                            </div>
                            <div class="absolute -bottom-32 left-0">
                                <div class="grid grid-cols-2 gap-2">
                                    <button type="button" class="bg-red-600 p-3 w-40 rounded-xl"
                                        onclick="returntopagemere()">precedent</button>
                                    <button type="submit" class=" bg-green-600 p-3 w-40 rounded-xl"
                                        name="inscriptionbtn">Inscrire</button>
                                </div>
                            </div>
                    </div>

                    <div class="absolute top-3 left-8 cursor-pointer" onclick="closeform()">
                        <i class="fa fa-x"></i>
                    </div>
                    </form>
                </div>
                <div class="w-3/4 formulairedajout">

                    <div class="p-24 relative cardinscrietu formulairerecup">
                        <div class="frontcard">
                            <div class="infotxt">
                                Nom: <span id="nomstudent"></span>
                            </div>
                            <div class="infotxt">
                                Prenom: <span id="prenomstudent"></span>
                            </div>
                            <div class="infotxt">
                                CIN: <span id="cinstudent"></span>
                            </div>
                            <div class="infotxt">
                                Sexe: <span id="Sexestudent"></span>
                            </div>
                            <div class="infotxt">
                                Email: <span id="emailstudent"></span>
                            </div>
                            <div class="infotxt">
                                Telephone: <span id="telstudent"></span>
                            </div>
                            <div class="infotxt">
                                Niveau: <span id="nivostudent"></span>
                            </div>
                            <div class="infotxt">
                                Mention: <span id="mentionstudent"></span>
                            </div>
                            <div class="infotxt">
                                Bacc: <span id="baccstudent"></span>
                            </div>
                        </div>
                        <div class=" backcard">
                            <div class="mt-5 infotxt">
                                Date de naissance: <span id="datenaistudent"></span>
                            </div>
                            <div class="infotxt">
                                Age: <span id="agestudent"></span>
                            </div>
                            <div class="infotxt">
                                Adresse: <span id="adrsstudent"></span>
                            </div>

                        </div>
                    </div>


                    <div class="cardinscri">
                        <div class="infotxt">
                            <h3>Mr <span id="nompere"></span> <span id="prenompere"></span></h3>
                        </div>
                        <div>
                            <span id="professionpere"></span>
                        </div>
                        <hr>
                        <div class="infotxt">
                            <span id="adrspere"></span>
                        </div>
                        <div class="infotxt">
                            <span id="emailpere"></span>
                        </div>
                        <div class="infotxt">
                            <span id="telpere"></span>
                        </div>
                    </div>
                    <div class="cardinscri">
                        <div class="infotxt">
                            <h3>Mme <span id="nommere"></span> <span id="prenommere"></span></h3>
                        </div>
                        <div>
                            <span id="professionmere"></span>
                        </div>
                        <hr>
                        <div class="infotxt">
                            <span id="adrsmere"></span>
                        </div>
                        <div class="infotxt">
                            <span id="emailmere"></span>
                        </div>
                        <div class="infotxt">
                            <span id="telmere"></span>
                        </div>
                    </div>
                </div>
            </div>
            </div>













        </section>





        <section class="mainbody hidden" id="fraisscolarite">
            <h2 class="titlesection">Frais de scolarite</h2>
        </section>
        <section class="mainbody hidden" id="paiement">
            <h2 class="titlesection">Paiements</h2>
        </section>
        <section class="mainbody hidden" id="montantniveau">
            <h2 class="titlesection">Montant par niveau</h2>
        </section>
        <section class="mainbody hidden" id="professeur">
            <h2 class="titlesection">Professeurs</h2>
        </section>
        <section class="mainbody hidden" id="Matieres">
            <h2 class="titlesection">Matieres</h2>
        </section>
        <section class="mainbody hidden" id="Notes">
            <h2 class="titlesection">Notes</h2>
        </section>
        <section class="mainbody hidden" id="Emploidutemps">
            <h2 class="titlesection">Emploi du temps</h2>
        </section>
        <section class="mainbody hidden" id="parametre">
            <h2 class="titlesection">Parametres</h2>
        </section>
    </main>

















</body>

</html>