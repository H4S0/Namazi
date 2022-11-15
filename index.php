<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
  header('<location:>login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Namaz</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="style.css">
  <link rel="stylesheet" href="stars.css">
  <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Star_and_Crescent.svg/249px-Star_and_Crescent.svg.png?20190919201537">
</head>

<body>
<div id="topnav" class="navbar">
  <a href="#" class="logo">
    <span>N</span><span>A</span><span>M</span><span>A</span><span>Z</span>
  </a>
  <div class="navbar-right menu">
    <a href="#namaz">
      Namazi
    </a>
    <a href="#abdest">Abdest</a>
    <a href="#sure">
      Sure
    </a>
    <a href="#zikr">
      Zikr
    </a>
  </div>
  <div class="navbar-right">
    <a href="javascript:void(0);" class="icon" onclick="showMenu()">
      <i style=" 
      margin-top: -2rem;
      " class="fa fa-bars"></i>
    </a>
  </div>
</div>
<div id="slideshow-container" class="slideshow-container">
  <div class="slide-item bgimg fade" style="background-image: url('https://th.bing.com/th/id/R.aaf4cf6e346b4c814b5c65c2ff166a44?rik=oRuYIQ%2forT5cPw&pid=ImgRaw&r=0');">
    <div class="caption">
      <p>   
        "I molitvu obavljajte i zekat dajite,a za dobro koje za sebe pripremite naći ćete nagradu kod Allaha,jer Allah dobro vidi ono što radite."
          <br>(El-Bekare,110.)</br>
      </p>
    </div>
  </div>

  <div class="slide-item bgimg fade" style="background-image: url('https://th.bing.com/th/id/R.9b3302201c8e6e37e9950d38ca304407?rik=sU7pY6k3BB3Muw&pid=ImgRaw&r=0');">
    <div class="caption">
      <p>
        "Vjernici,tražite sebi pomoći u strpljivosti i obavljanju molitve!Allah je doista na strani 
          strpljivih."(El-Bekare,153.)
      </p>
      <p></p>
    </div>
  </div>
  <div class="slide-item bgimg fade" style="background-image: url('https://th.bing.com/th/id/R.c5e1373a6fa7c631db7a355bb1b5ff7e?rik=lgoLcth%2b15ZVkg&pid=ImgRaw&r=0');">
    <div class="caption">
      <p>
        "One koji, ako im damo vlast (i moć) na Zemlji, uspostavljaju (i obavljaju) namāz i daju zekāt, i naređuju dobro, a odvraćaju od nevaljalog. A Allāhovo je okončanje stvari."
          (El-Hadždž,41.)
      </p>
    </div>
  </div>

  <div id="slide-control" class="slide-control">
    <span class="dot" onclick="chooseSlide(0)"></span>
    <span class="dot" onclick="chooseSlide(1)"></span>
    <span class="dot" onclick="chooseSlide(2)"></span>
  </div>
</div>

<section id="namaz" class="namazi" style="background-color: #2F3238;">
  <header>
    <div class="glavni-naslov" >
      <h3 style="text-align: center;
      color: white;
      font-size: 1cm;
      margin-top: -1rem;">Dnevni Namazi</h3>
    </div>
  </header>

  <section style="margin-left: -5rem;"class="wrapper">
    <div id="stars"></div>
    <div id="stars2"></div>
  </section>
  <section style="margin-left: -5rem;" class="wrapper">
    <div id="stars"></div>
    <div id="stars2"></div>
  </section>
  </div>  
  <div class="container">
    <div class="row">
      <div class="image">
        <img src="1.jpg" alt="">
        <div class="details">
          <h2 style="font-weight: bold;">Sabah <span></span></h2>
          <p>Sabah namaz ima 4 rekata.2 rekata sunneta i 2 rekata farza.</p>
          <div class="more">
            <a href="sabah/sabah.html" class="read-more">Pogledaj<span> vise</span></a>
          </div>
        </div>
      </div>
      <div class="image">
        <img src="3.jpg" alt="">
        <div class="details">
          <h2 style="font-weight: bold;">Podne <span></span></h2>
          <p>
          Podne namaz ima 10 rekata i to:4 sunneta,4 farza i 2 sun-sunneta.</p>
          <div class="more">
            <a href="podne/podne.html" class="read-more">Pogledaj <span> jos</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="image">
        <img src="4.jpg" alt="">
        <div class="details">
          <h2 style="font-weight: bold;">Ikindija <span></span></h2>
          <p>
          Ikindija namaz ima 8 rekata i to:4 sunneta,4 farza.</p>
          <div class="more">
            <a href="ikindija/ikindija.html" class="read-more">Pogledaj<span> jos</span></a>
          </div>
        </div>
      </div>
      <div class="image">
        <img src="5.jpg" alt="">
        <div class="details">
          <h2 style="font-weight: bold;">Akšam<span></span></h2>
          <p>
          Akšam namaz ima 5 rekata i to:3 rekata farza i 2 rekata sunneta.</p>
          <div class="more">
            <a href="aksam/aksam.html" class="read-more">Pogledaj <span> jos</span></a>
          </div>
        </div>
      </div>
      <div class="image">
        <img src="6.jpg" alt="">
        <div class="details">
          <h2 style="font-weight: bold;">Jacija <span></span></h2>
          <p>
          Jacija namaz ima 10 rekata i to:4 sunneta,4 farza,2 sun-sunneta i 3 vitr-namaza.</p>
          <div class="more">
            <a href="jacija/jacija.html" class="read-more">Pogledaj <span> jos</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <section style="margin-left: -5rem;"class="wrapper">
    <div id="stars"></div>
    <div id="stars2"></div>
  </section>

  <section id="abdest" class="abdest">
    <div class="abdest-naslov">
      <h3 style="text-align: center;
      font-size:1.3cm;
      color:white;">
      Abdest
    </h3>
    </div>
    <section style="margin-left: -5rem;" class="wrapper">
      <div id="stars"></div>
      <div id="stars2"></div>
    </section>
    <div class="container2">
      <div class="lines">
        <div class="circle">
        </div>
      </div>
    </div>
    <section style="margin-left: -5rem;" class="wrapper">
      <div id="stars"></div>
      <div id="stars2"></div>
    </section>
    <div class="uzimanje">
      <h2 class="naslov-ispod">Vrijednost abdesta</h2>
      <p class="text-center">Uzvišeni Allah kaže:
        <strong>“O vjernici, kada želite namaz obaviti,
          lica svoja i ruke svoje do iza lakata operite,i po glavama svojim potarite,i noge svoje do iza članaka
          (operite).”(El-Maide, 6.)</strong>
      </p>

      <p class="text-center">Od Ibn-Omera se prenosi da je Poslanik, sallallahu alejhi ve sellem, rekao:
        <strong>“Ne prima se namaz bez abdesta.”</strong>
      </p>

      <p class="text-center">U drugom hadisu Avf b. Haris prenosi da je Allahov Poslanik, sallallahu alejhi ve sellem, rekao:
        <strong>“Ko se abdesti upotpunjavajući svoj abdest, potom ode u džamiju, ali ne stigne u džemat, Allah ćemu dati nagradu kao onima koji su klanjali u džematu, a to neće umanjiti njihovu nagradu.”</strong>
      </p>
      <div class="container2">
        <div class="lines" style="margin-top: 3rem;">
          <div class="circle">
          </div>
        </div>
      </div>
      <section style="margin-left: -5rem;" class="wrapper">
        <div id="stars"></div>
        <div id="stars2"></div>
      </section>
    <h2 class="naslov-ispod2">Kako se uzima abdest?</h2>
  <section class="services" id="services">
   <div class="content">
     <div class="card reveal">
       <div class="info">
         <h3>FARZOVI ABDESTA</h3>
         <p>1.pranje lica od mjesta gdje raste kosa do ispod brade uzdužno, i od uha do uha uširinu,</p>
         <p>2.pranje ruku od vrhova prstiju do iza lakata,</p>
         <p>3.potiranje četvrtine glave mokrom rukom,</p>
         <p>4.oprati noge do iznad članaka.</p>
       </div>
     </div> 
     <div class="card reveal">
       <div class="info">
         <h3>SUNNETI ABDESTA</h3>
         <p>Abdest ima mnogo sunneta.Šejh Salih el-Fevzan zapisao je sljedeće:“Evo,ovo su sunneti abdesta:upotreba misvaka prilikom ispiranja usta kako bi se pomoću toga postigla čistoća usta radi obavljanja ibadeta,učenja Kur’ani-kerima,obraćanja Allahu i tako dalje;pranje šaka tri puta prije pranja lica,jer se prenosi da je to Poslanik,sallallahu alejhi ve sellem,radio,i zato što se šakama peru ostali dijelovi tijela,pa se njihovim pranjem postiže veća čistoća drugih dijelova tijela koji se peru;prvo isprati usta i nos,a zatim oprati lice,jer se tako prenosi u hadisima.</p>
       </div>
     </div>
   </div>
   <section style="margin-left: -5rem;" class="wrapper">
    <div id="stars"></div>
    <div id="stars2"></div>
  </section>
   <section style="margin-left: -5rem;" class="wrapper">
    <div id="stars"></div>
    <div id="stars2"></div>
  </section>
   <div style=" margin-top: -2rem;" class="container2">
    <div class="lines" style="margin-top: 3rem;">
      <div class="circle">
      </div>
    </div>
  </div>
   <h2 class="naslov-ispod3">Šta sve kvari abdest?</h2>
   <div class="kvarenje">
    <p><span>1.</span>Sve što izađe na analne otvore (prednji i zadnji): mokraća, izmet, vjetar, zatim sperma, vedijja i mezija. Vedijja je sluz /sekret prostate/ koja se ponekada pojavljuje poslije napornog mokrenja, a mezija je sluz koja kod muškarca i kod žene izlazi prilikom nadražaja i nije potrebno iza njih se kupati, ali je potrebno oprati tragove vedijje i mezijje sa tjela i odjeće jer su nečisti. Ako se posumnja u puštanje vjetra, to ne utiče na valjanost abdesta osim u slučaju da se čuje zvuk ili osjeti miris.</p>
    <p><span>2.</span>Abdest kvari dubok san,to jest onaj san tokom kojeg čovjek ne opazi puštanje vjetra,i u vezi s tim nema razlike je li čovjek zaspao u ležećem položaju ili sjedeći naslonjen ili nenaslonjen.Mjerodavan je,kako rekosmo,osjećaj da se pustio vjetar.To je tako,jer san sam po sebi ne kvari abdest,nego je on situacija u kojoj se objektivno može dogoditi puštanje vjetra.Dokaz da san sam po sebi ne kvari abdest jest činjenica da onaj ko zaspi nakratko nije izgubio abdest.</p>
    <p><span>3.</span>Dodirivanje polnog organa direktno dlanom ili prstima ruke,jer je Allahov Poslanik,s.a.v.s.,rekao:”Neka onaj ko dodirne svoj polni organ ne klanja sve dok ponovo ne uzme abdest.”5.Strastveno doirivanje žene prema jačem (radžih) mišljenju ne kvari abdest ukoliko ne dođe do izlučivanja mezijja zbog uzbuđivanja.Dokaz za ovaj stav je hadis Aiše, r.a.,da ju je Poslanik,s.a.v.s.,poljubio,a poslije nije uzimao abdest.Od Aiše,r.a.,se prenosi da je kazala da je Poslanik,s.a.v.s.,poljubio jednu od svojih žena pa je izašao na namaz i nije se abdestio. Urve b Zubejr (njen sestrić) je rekao: ”Ko je ta ako nisi ti”? Pa se ona,ra., nasmijala.</p>
    <p><span>4.</span>Abdest kvari konzumiranje mesa deve,mužjaka ili ženke,bez obzira na to da li je to meso prijesno ili skuhano.Džabir b.Semura,radijallahu anhu,kazuje:“Neko je upitao Vjerovjesnika,sallallahu alejhi ve sellem:‘Moram li uzeti abdest nakon konzumiranja ovčijeg mesa?’ ‘Uzmi abdest ako hoćeš’, odgovorio je Poslanik.Zatim je neko upitao: ‘Moram li uzeti abdest nakon kozumiranja mesa deve?’ Na to je Resulullah,sallallahu alejhi ve sellem,odgovorio: ‘Da, uzmi abdest u toj situaciji’”(Muslim, 360)</p>
   </div>
</section>
<section style="margin-left: -5rem;" class="wrapper">
  <div id="stars"></div>
  <div id="stars2"></div>
</section>
<section style="margin-left: -5rem;" class="wrapper">
  <div id="stars"></div>
  <div id="stars2"></div>
</section>
<section class="sura" id="sure">
  <div style="margin-top: 4rem;"class="container2">
    <div class="lines">
      <div class="circle">
      </div>
    </div>
  </div>
  <div class="sure-naslov">
    <h3>Sure</h3>
  </div>
  <div class="butoni">
    <a href="sure/sure.html" class="rainbow-button" alt="Pogledaj sure"></a>
  </div>
</section>

<section style="margin-left: -5rem;" class="wrapper">
  <div id="stars"></div>
  <div id="stars2"></div>
</section>
<div class="lines" style="margin-top: 3rem;">
  <div class="circle"></div>
</div>

<section class="zikr" id="zikr">
  <div class="naslov123">
    <h3>Zikr</h1>
  </div>
  <div class="ozikru">
    <p>Nakon sto bi predao salam, Allahov Poslanik, sallallahu alejhi ve sellem, tri puta bi izgovorio: <span>“ESTAGFIRULLAH”</span> (Allahu, oprosti mi) a potom bi proucio:

      <span>“ALLAHUMME, ENTES-SELAMU VE MINKES-SELAM, TEBAREKTE, JA ZEL-DŽELALI VEL-IKRAM.”</span>
      (Allahu moj, Ti si Mir i od Tebe je Mir, Uzviseni, Plemeniti i Velicanstveni nas Gospodaru.)</p>
      <p>
       Prenosi se da je Poslanik, sallallahu alejhi ve sellem, na kraju svakog propisanog (tj. farz) namaza rekao:

<span>“LA ILAHE ILLALLAHU, VAHDEHU LA ŠERIKE LEH. LEHUL-MULKU VE LEHUL-HAMDU VE HUVE ALA KULLI ŠEJIN KADIR. ALLAHUMME, LA MANIA LIMA EATAJTE, VE LA MUTIJE LIMA MENATE. VE LA JENFEU ZEL-DŽEDDI MINKEL-DŽEDD.”</span>
(Nema istinskog bozanstva mimo Allaha, Koji nema sucesnika! Njemu sva vlast i zahvala pripadaju i On je Svemocni. Allahu moj, niko ne moze uskratiti ono sto Ti podaris, niti iko moze podariti ono sto Ti uskratis. Bogatog od Tebe nece zastititi njegovo bogatstvo.)</p>
  <p>
    Takodjer, proucio bi na kraju svakog propisanog namaza:

<span>“LA ILLAHE ILLALLAHU, VAHDEHU LA ŠERIKE LEH, LEHUL-MULKU VE LEHUL-HAMDU VE HUVE ALA KULLI ŠEJIN KADIR. LA HAVLE VE LA KUVVETE ILLA BILLAH, LA ILAHE ILLALLAHU VE LA NABUDU ILLA IJJAHU LEHUN-NIMETU VE LEHUL-FADLU VE LEHUS-SENAUL-HASEN. LA ILAHE ILLALLAHU MUHLISINE LEHUD-DINE VE LEV KERIHEL-KAFIRUN.”</span>
(Nema istinskog bozanstva mimo Allaha, Koji nema sudruga u vlasti. Njemu sva vlast i zahvala pripadaju i On je Svemocni. Nema moci ni snage bez Allaha. Nema istinskog bozanstva mimo Allaha. Ne obozavamo nikoga osim Njega. Od Njega su sve blagodati i dobrote i Njemu pripada svaka hvala. Nema istinskog bozanstva osim Allaha. Njemu iskreno vjeru ispovjedamo iako to nevjernici preziru.)
  </p>
  <p>
    Allahov Poslanik, sallallahu alejhi ve sellem, je poucio ashabe da na kraju svakog propisanog namaza kazu po 33 puta:

<span>“SUBHANALLAH, ELHAMDU LILLAH, ALLAHU EKBER.”</span>
(Slava Allahu, hvala Allahu, Allah je najveci)
  </p>
  <p>
    (Allahu moj, pomozi mi da Te spominjem, da Ti se zahvaljujem i da Ti lijepo ibadet cinim.)

Takodjer je Poslanik, sallallahu alejhi ve sellem, kazao: “Ko na kraju svakog propisanog namaza prouci Ajetul-Kursiju (255-ti ajer sure El-Bekare) ne dijeli ga od ulaska u Dzennet nista osim smrti”

<span>“ALLAHU LA ILAHE ILLA HUVEL-HAJJUL-KAJJUM! LA TEHUZUHU SINETUN VE LA NEVM! LEHU MA FIS-SEMAVATI VE MA FIL-ERD. MEN ZELLEZI JEŠFEU INDEHU ILLA BI IZNIH?! JALEMU MA BEJNE EJDIHIM VE MA HALFEHUM, VE LA JUHITUNE BIŠEJIN MIN ILMIHI ILLA BI MA ŠAE. VESIA KURSIJJUHUS-SEMAVATI VEL-ERDA VE LA JEUDUHU HIFZUHUMA; VE HUVEL-ALIJJUL-AZIM!”</span>
(Allah je – nema boga osim Njega – Zivi i Vjecni! Ne obuzima Ga ni drijemez ni san! Njegovo je ono sto je na nebesima i ono sto je na Zemlji! Ko se moze pred Njim zauzimati za nekoga bez dopustenja Njegova! On zna sta je bilo prije njih i sta ce biti poslije njih, a od onoga sto On zna – drugi znaju samo onoliko koliko On zeli. Prijesto Njegov obuhvata i nebesa i Zemlju i Njemu ne dosadi odrzavanje njihovo; On je Svevisnji, Velicanstveni)
  </p>
  </div>
</section>

<section style="margin-left: -5rem;"class="wrapper">
  <div id="stars"></div>
  <div id="stars2"></div>
 </section>
      <div class="section3" id="footer">
        <div class="container23">
            <div class="row">

                <div class="col-sm-6">
                    <h6>Website by Hasan Alić <strong>-</strong> All rights reserved</h6>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="coopy">
            <div class="row">
               
            </div>
        </div>
    </div>
      <section style="margin-left: -5rem;" class="wrapper">
        <div id="stars"></div>
        <div id="stars2"></div>
      </section>
      <section style="margin-left: -5rem;" class="wrapper">
        <div id="stars"></div>
        <div id="stars2"></div>
      </section>
      <button onclick="scrollgore()"  id="gore" title="Go to top">Gore</button>
    <script src="index.js"></script>
    <script src="scroll.js"></script>
</body>
</html>
