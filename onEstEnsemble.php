<!DOCTYPE html>
<!--     
    @monjo ~@~
  -->
<html>
<head>
  <title>on est ensemble</title>
  <style type="text/css">
  		html{
  			height: 100%;
  			width: 100%;
        background-color: #000;
  		}
  		body{
  			height: 100%;
  			width: 100%;
        background-color: #000;
  		}
  		#carreFond{
  			width: 1000px;
  			height:1000px;
  			background-color:#282727;
  			transform: rotate(45deg);
  			position: absolute;
        border-right: 1.5px solid #ffff;
        top: 467px;
        left: -573px;
  			z-index: 1;
  			border-radius: 25px;
  		}
        #col{
          width: 85%;
          position:absolute;
  		    top:220px;
          left: 15%;
          font-size: 3em;
          animation: transitionTitre 3s;
        }
        #title-hero{
          font-weight: bold;
          margin-bottom: 0px;
          font-family: "Gill Sans", sans-serif;
          text-align: center;
          margin:0;
        }
        #texte-hero{
          text-align: right;
          width: 71%;
          font-size: 35px;
          margin-left: 20%;
        }
          @keyframes transitionTitre {
            from  {top: 400px;opacity: 0;}
            to {top: 220px;opacity: 1;}
          }
          @keyframes battementCoeur {
            0% { transform: scale(1.0); }
            50% { transform: scale(1.025); }
            100% { transform: scale(1.0); }
          }
         #col1{
          width: 40%;
          position:absolute;
          top: 762px;
          font-size: 3em;
          animation: transitionTitreBoxe 3s;
          z-index: 1;
        }

          @keyframes transitionTitreBoxe {
            from  {top: 700px;opacity: 0;}
            to {top: 762px;opacity: 1;}
          }

        #texte-hero1{
          font-weight: bold;
          padding-left: 25px;
          width: 100%;
          margin-top: 0;
          font-size: 30px;
        }
        #butonCategories{
          border-radius:0.5rem;
          margin-top: 5%;
          padding: 2%;
          font-size: 2em;
          background-color: #444242;
          cursor: context-menu;
          color:white;
          cursor: pointer;
          position: absolute;
          text-align: centers;
          left: 470px;
          top: 1260px;
          z-index: 1;
        }
        #imageFondOnEstEnsemble{
          position: absolute;
          left: 655px;
          top: 871px;
          height: 250px;
          animation: battementCoeur infinite 2s;
        }
        ##butonCategories:hover{
          border: 2px solid #fff;
          transform: scale(1.1);
        }
		header {
          width: 100%;
          height: 15%;
          POSITION: fixed;
          top: 0;
          z-index: 2;
          background-color: #282727;
		}

		#suivant {
    	  display: inline-block;
    	  border-radius: 5px;
    	  color: white;
    	  width: 10%;
    	  height: 100%;
    	  background-color: #010299;
    	  text-align: center;
    	  float: right;
    	margin-left: 2%;
      display: none;
		}

		#precedent {
    	 display: inline-block;
      border-radius: 5px;
      color: white;
      padding: 2%;
      margin-top: 10%;
      font-size: 50px;
      background-color: #444242;
      text-align: center;
      float: left;
		}
		/*-------------------------------------------------------------------------------------------------------*\
				Modal
		\*-------------------------------------------------------------------------------------------------------*/

  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 20%;
  left: 50px;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 10%;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 1.5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    min-height: 84%;
    width: 90%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 50px;
    font-weight: bold;
    margin-top: 2%;
    margin-right:  2%;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
.titre-modal-content{
  background-color: #010299;
  padding-top: 2%;
  padding-bottom:   2%;
  text-align: center;
  width: 100%;
  margin-top: 0;
  color: white;
}

.text-modal-content{
  font-weight: 100;
  padding-top: 0;
  padding-left:4%;
  padding-right: 4%;
  font-size: 30px;
  text-align: justify;
}
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

          #bgvid{
            border: 2px solid red;
            margin-top: -10%;
            margin-left: 0%;
            height: 180%;
            -webkit-filter: blur(20px);
            -moz-filter: blur(20px) ;
            -o-filter: blur(20px) ;
            -ms-filter: blur(20px) ;
            filter: blur(100px);
          }
          .contenu{
            width: 100%;
            height: 100%;
            position: fixed;
            overflow-y: scroll;
            z-index: 3;
            top: 0;
            left: 0;
            padding-top: 5%;
            color: #fff;
            background-color: rgb(47 47 47 / 80%);
            animation: marquee 0.24s linear;
          }

  	
  </style>
</head>
<body>
            <div class="background"  onclick="document.getElementById('contenu').style.display='block';">
                <video autoplay loop muted  id="bgvid">
                  <source src="img/logorotation.mp4" type="video/mp4">
                </video>
            </div>
<div class="contenu">

    <header>
     <a href="../index.php" class="panel"><div id="suivant">Acceuil</div> </a>
     <a href="index.php" class="panel"><div id="precedent">Précédent</div></a>
  </header>

	  <div id="carreFond"></div>

    <div id="col">
      <h1 id="title-hero">On est ensemble</h1>
      <p id="texte-hero">Impact Centre Chrétien Bruxelles à travers sa Banque alimentaire du ministère Impact Social apporte un souffle, une contribution en denrées alimentaires non périsables et produits de première nécessité à nos bien aimé, des familles, des ménages qui traversent des moments difficiles.</p>
    </div> 

    <div id="col1">
      <p id="texte-hero1">Voici les différrents colis :<br><br>Paquet pâte : 1 personne<br>Paquet riz : 1 personne<br>Paquet riz : personne Seule avec enfant(s) et ou Pour une famille de +-3 personnes<br>Paquet pâte : personne Seule avec enfant(s) et ou Pour une famille de +-3 personnes</p>
    </div> 

   <svg id="imageFondOnEstEnsemble" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480.6 379.92"><defs><style>.coeur-1{fill:#823676;stroke:#010299;}.coeur-1,.coeur-2,.coeur-3,.coeur-4,.coeur-5{stroke-miterlimit:10;}.coeur-2{fill:#1684c7;stroke:#1684c7;}.coeur-3{fill:#ed1d24;stroke:#ed1d24;}.coeur-4{fill:#34ae7f;stroke:#34ae7f;}.coeur-5{fill:#FFEB3B;stroke:#f5b71a;}.coeur-6{font-size:63px;fill:#ab2175;}.coeur-6,.coeur-7{font-family:BrushScriptMT, Brush Script MT;font-style:italic;}.coeur-7{font-size:60px;fill:#6d1850;}</style></defs><title>logoOnEstEnsemble</title><path class="coeur-1" d="M300.44,514.5l-3,29-47.53,27L258,531.83s5.9-11.5-7.93-19.33-27.81-14.33-27.81-14.33l-14.66-9.34s-7.92-10.33-10.11-13.66-30.85-28.84-30.85-28.84l-4.21-4.66s-2.22-2.86.31-9,3.16-15.13,3.16-15.13l2.51-9.06s1.85-11.75,2.11-13.62.25-19.38.25-19.38,3.41-5.75,12.26,7.5,5.06,14.63,5.06,14.63,3,13,4.68,16.25,3.41,8,2.27,16.12,8,12.13,8,12.13l-.26,2.37s4.3-5,12.64,1.13,22.95,16.62,22.95,16.62a30.45,30.45,0,0,0,8.22,5.5,58.83,58.83,0,0,1,10.36,6.56s2.53,2.13,14.79,1.57S303.92,495,303.92,495s3.22,8.06.57,10.25S300.44,514.5,300.44,514.5Z" transform="translate(-70.45 -191.56)"></path><path class="coeur-1" d="M321.57,512.5l3,29,47.35,27-8.06-38.67s-5.87-11.5,7.9-19.33,27.7-14.33,27.7-14.33l14.61-9.34s7.9-10.33,10.08-13.66,30.73-28.84,30.73-28.84l4.2-4.66s2.2-2.86-.32-9-3.15-15.13-3.15-15.13l-2.49-9.06s-1.85-11.75-2.1-13.62-.25-19.38-.25-19.38-3.41-5.75-12.22,7.5-5,14.63-5,14.63-3,13-4.66,16.25-3.4,8-2.27,16.12-7.93,12.13-7.93,12.13l.25,2.37s-4.28-5-12.59,1.13-22.86,16.62-22.86,16.62a30.38,30.38,0,0,1-8.19,5.5A58.47,58.47,0,0,0,365,472.31s-2.52,2.13-14.73,1.57S318.11,493,318.11,493s-3.21,8.06-.57,10.25S321.57,512.5,321.57,512.5Z" transform="translate(-70.45 -191.56)"></path><path class="coeur-2" d="M165.17,459.92l-.21.53-8.71,22.13s-2.5,3.34-8.17-.33-40.41-22.17-40.41-22.17L106,458.83s-1.75-1.5,1.67-3.66,17.5-17.34,17.5-17.34,6.75-7.83,3.5-16.75-20.75-47.91-20.75-47.91-6-15.17-1.09-21.09,2.84-10.33,2.84-10.33l7.83-40.83s-.33-5.25,6.17-2.09,16.91,1.25,16.91,1.25,10.42-3.91,15.92-9.16a125.85,125.85,0,0,0,11.08-12.59l4.67-6.08,3.92-4.08s6.08-6.67,4.83,8-14,21.41-14,21.41,3.42,8.09.67,16.59-9,25.75-9,25.75-1.59,2.25-1.25,13.08.5,14.25.5,14.25a8.64,8.64,0,0,0,1.58,4.5c1.5,1.92,3.5,3,3.58,9.17s-.83,21.58-.83,21.58-.75,4.42-1.67,9.08S157,429.25,157,429.25s-1.25,4-2.17,6.67-3,5.91,1.42,11.08a113.7,113.7,0,0,0,9.25,9.5s.67.17.17,2.5S165.17,459.92,165.17,459.92Z" transform="translate(-70.45 -191.56)"></path><path class="coeur-3" d="M456.07,457.92l.23.53,9.38,22.13s2.69,3.34,8.8-.33S518,458.08,518,458.08l1.79-1.25s1.89-1.5-1.79-3.66-18.86-17.34-18.86-17.34-7.27-7.83-3.77-16.75,22.36-47.91,22.36-47.91,6.46-15.17,1.16-21.09-3-10.33-3-10.33l-8.44-40.83s.36-5.25-6.64-2.09-18.22,1.25-18.22,1.25-11.22-3.91-17.15-9.16a130.07,130.07,0,0,1-11.94-12.59l-5-6.08-4.21-4.08s-6.56-6.67-5.21,8,15.08,21.41,15.08,21.41-3.68,8.09-.72,16.59,9.7,25.75,9.7,25.75,1.7,2.25,1.34,13.08-.54,14.25-.54,14.25a8.16,8.16,0,0,1-1.7,4.5c-1.62,1.92-3.77,3-3.86,9.17s.9,21.58.9,21.58.8,4.42,1.79,9.08,3.86,17.67,3.86,17.67,1.35,4,2.34,6.67,3.23,5.91-1.53,11.08a118.44,118.44,0,0,1-10,9.5s-.72.17-.18,2.5S456.07,457.92,456.07,457.92Z" transform="translate(-70.45 -191.56)"></path><path class="coeur-4" d="M84.5,243.67l-13.33,55.5L109,284s5.83-2.83,8.17,1.5,12.16,6.67,20.16,4,27.67-8.67,28.84-21.67,38.83-24,38.83-24l25.83-3s4.5-2.33,2.67-2.83,20.08,1.83,26.58,10.92,9.67,4.66,9.67,4.66,18.44,16.86,21.63,18.23,11.87,2.5,10.18-.75.32-7.37.32-7.37.81-2.25,1.5-2.06,2.31-2.13-.19-4-11-14.82-11-14.82-16.69-26.12-15.5-34.12-30.19-7.63-30.19-7.63-33.19-4.56-36.94-6.62-14.37-2.38-14.37-2.38-8.06,3.07-11.5,6.5-34.38,19.88-34.38,19.88S103.5,244.83,84.5,243.67Z" transform="translate(-70.45 -191.56)"></path><path class="coeur-5" d="M536.65,245l13.68,55.5-38.82-15.17s-6-2.83-8.38,1.5-12.48,6.67-20.69,4-28.39-8.66-29.59-21.66-39.85-24-39.85-24l-26.51-3s-4.62-2.34-2.74-2.84-20.6,1.84-27.27,10.92-9.92,4.67-9.92,4.67-18.92,16.85-22.19,18.23-12.19,2.5-10.46-.75-.32-7.38-.32-7.38-.83-2.25-1.54-2.06-2.37-2.13.19-4,11.29-14.81,11.29-14.81S340.66,218,339.44,210s31-7.62,31-7.62,34.06-4.57,37.91-6.63,14.75-2.37,14.75-2.37,8.27,3.06,11.8,6.5,35.27,19.87,35.27,19.87S517.15,246.17,536.65,245Z" transform="translate(-70.45 -191.56)"></path></svg>
       <!-- <div id="butonCategories"  onclick="document.getElementById('id01').style.display='block'">
          <p>Besoin d'aide ?</p>
        </div>
      -->


    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
      <h1 style="color: white;position: relative;top:40%;font-size: 3rem;text-align: center;">Formulaire en construction (En attentesde directives)</h1>
    </div>
</div>
  <script type="text/javascript">
  (function() {

      const idleDurationSecs = 240;    // X number of seconds
      const redirectUrl = 'veille2.php';  // Redirect idle users to this URL
      let idleTimeout; // variable to hold the timeout, do not modify

      const resetIdleTimeout = function() {

          // Clears the existing timeout
          if(idleTimeout) clearTimeout(idleTimeout);

          idleTimeout = setTimeout(() => location.href = redirectUrl, idleDurationSecs * 1000);
      };

      // Init on page load
      resetIdleTimeout();

      // Reset the idle timeout on any of the events listed below
      ['click', 'touchstart', 'mousemove'].forEach(evt =>
          document.addEventListener(evt, resetIdleTimeout, false)
      );

  })();
</script>
</body>
</html>