<!DOCTYPE html>
<!--     
    @monjo ~@~
  -->
<html>
<head>
  <title>Corps pastoral</title>
  <link rel="shortcut icon " href="img/logoicc.png" type="image/x-icon"/>
  <style type="text/css">
  		html{
  			height: 100%;
  			width: 100%;
  		}
  		body{
  			height: 100%;
  			width: 100%;
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

#crpPastoral{
  width: 100%;
  border:2px solid red;
  padding-top: 2%;
}
.pdp-crpPastoral{
  width: 400px;
  height: 300px;
  background-size: cover;
  background-image: url(https://www.lelscan-vf.com/uploads/manga/one-piece/chapters/976vf/022.jpg);
  display: inline-block;
  border:2px solid pink;
}
.contenair-crpPastoral{
  display: inline-block;
  margin-right: 5%;
  float: right;
  font-size: 2em;
  border:2px solid purple;
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




<!--
   ZOOM
            -->    

          <style type="text/css">
            
            /* Contenair du zoom*/
            .articles {
             width: 80%;
             margin: auto auto;
             margin-bottom:5%;
             display: grid;
             grid-template-columns: repeat(9, 1fr);
             background-color: #246996;
            }

            /* Partie droite qui contient le texte*/
            .article-texte {
              grid-column: 1/5;
              text-align: left;
              padding-left: 20%;
              padding-top: 10%;
              cursor: pointer;
              color: white;
              text-decoration: none;
             padding-bottom: 50px;
            }

            /* gère la couleur du lien dans la zone texte*/
            .article-texte h1, a {
              color: white;
              text-decoration: none;
              margin: 0;
            }
            .article-texte em {
              font-size: 2em;
            }

            /*contenair partie gauche, image qui va être zoomée*/
            .article-img {
            grid-column: 5 / 10;
            grid-row: 1;
            position: relative;
            display: inline-block;
            background: #cacaca;
            line-height: 0;
            overflow: hidden;
            -webkit-clip-path: polygon(28% 0, 100% 0, 100% 100%, 0% 100%);
            clip-path: polygon(28% 0, 100% 0, 100% 100%, 0% 100%);
            }

            /*Lance les animation du zoom*/
            .zoom{ 
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1);
                transition:0.7s ease all;
                -webkit-transition:0.7s ease all;
                -moz-transition:0.7s ease all;
                animation: anime 5s;
            }


            /*Lance les animation du zoom*/
            .zoom:hover{
                -moz-transform: scale(1.5);
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
                cursor: pointer;
            }

            .articles h1{
                 color: #e6b31e;
            }

            .articles:hover {
                cursor: pointer;
            }

            #contenair-articles{
              width: 100%;
              margin-top:15%;
            }
            .anime{
                animation: anime 5s;
            }
            @keyframes anime{
             0% { transform: scale(1); }
             50% { transform: scale(1.5); }
             100% { transform: scale(1); }
            }

            .case-contenair-bulle-pop-up{
              width:300px;
              height: 300px;
              display: inline-block;
              margin-left:2%;
              text-align: center;
              margin-bottom: 10%;
            }
            .bulle-pop-up{
              border:1.5px solid #010299;
              width: 250px;
              height:250px;
              margin: auto;
              border-radius: 300px;;
              background-size: cover;
              background-position: center;
            }

            .titre-bulle-pop-up{
              text-align: center;
             font-weight: bold;  
             width: 98%;
             margin-left: auto;
             margin-right: auto;
            }
            </style>




          <style type="text/css">
           
           .contenair-trombi-personne{
            width: 49.9%;
            height: 280px;
            display: inline-block;
            margin-top: -0.5%;
            margin-left: -0.50%;
           }
           #trombi-pst-principale{
            width: 100%;
            height: 350px;
           } 
           .img-trombi-personne{
            width:50%;
            height: 100%;
            display: inline-block;
            background-color: #282727;
            background-size: cover;
            background-position:center;
           clip-path: polygon(100% 0, 100% 37%, 88% 51%, 100% 65%, 100% 100%, 0 100%, 0 0);
           }
           .img-trombi-personne-droite{
            width:50%;
            height: 100%;
            display: inline-block;
            background-color: purple;
            background-size: cover;
            background-position:center;
            clip-path: polygon(14% 46%, 0 33%, 0 0, 99% 0, 100% 100%, 0 100%, 0 60%);
           }
           .txt-trombi-personne{
            margin-top: 10%;
            display: inline-block;
            height: 100%;
            width: 49%;
            float: right;
            text-align: center;
           }
           .txt-trombi-personne-gauche{
            margin-top: 10%;
            display: inline-block;
            width: 50%;
            float: left;
            text-align: center;
           }

          .background{
            /*background-image: url(img/logoicc.png);*/
            background-color: #000;
            background-size: contain;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            filter: blur(5px);
          }
          #bgvid{
            border: 2px solid red;
            margin-top: -30%;
            margin-left: -15%;
            height: 120%;
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

            <div id="contenair-articles" >
              
              <div id="trombi-pst-principale" class="contenair-trombi-personne">
              <div class="img-trombi-personne" style="background-image: url('img/corpsPastoral/SABOUKOULOU_Christian.jpg');"></div>
              <div class="txt-trombi-personne">
                <h1 class="titre-bulle-pop-up">Christian Saboukoulou <br>Pasteur principal et leader des églises ICC BENELUX</h1>
              </div>
              
            </div>

            <div class="contenair-trombi-personne"><!--/Ban/images/trombinoscope/star/evelyne_saboukoulou.jpg' -->
              <div class="img-trombi-personne" style="background-image: url('img/corpsPastoral/SABOUKOULOU_Evelyne.jpg');"></div>
              <div class="txt-trombi-personne">
                <h1 class="titre-bulle-pop-up">Evelyne Saboukoulou <br>Pasteur<br>Bruxelles</h1>
              </div>
            </div>

           <!-- <div class="contenair-trombi-personne">
              <div class="img-trombi-personne" style="background-image: url('/Ban/img/corpsPastorale/christian_copie.jpg');"></div>
              <div class="txt-trombi-personne">
                <h1 class="titre-bulle-pop-up">Christian Muntumbo <br>Pasteur <br>
                Kinshasa
                 </h1>
              </div>
            </div>-->

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne" style="background-image: url('img/corpsPastoral/MBOG_Dominique.jpg');"></div>
              <div class="txt-trombi-personne">
              <h1 class="titre-bulle-pop-up"> Dominique Mbog<br>Pasteur<br>Anvers</h1></div>
            </div>

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne-droite" style="background-image: url('img/corpsPastoral/ZOLA_Eric.jpg');"></div>
              <div class="txt-trombi-personne-gauche">
               <h1 class="titre-bulle-pop-up">Eric Zola <br>Pasteur<br>Bruxelles</h1>
              </div>
            </div>

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne-droite" style="background-image: url('img/corpsPastoral/Jacques_NZADOU.jpg');"></div>
              <div class="txt-trombi-personne-gauche">
                 <h1 class="titre-bulle-pop-up">Jacques NZADOU <br>Pasteur<br>Liège</h1>
              </div>
            </div>

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne" style="background-image: url('img/corpsPastoral/Erik_BONIMPA.jpg');"></div>
              <div class="txt-trombi-personne">
                <h1 class="titre-bulle-pop-up">  Erik BONIMPA <br>Resp. ICC Hollande<br>Pays-Bas</h1>
              </div>
            </div>

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne" style="background-image: url('img/corpsPastoral/Martial_NANTI.jpg');"></div>
              <div class="txt-trombi-personne">
              <h1 class="titre-bulle-pop-up"> Martial NANTI <br>Assistant-Pasteur<br>Luxembourg</h1></div>
            </div>

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne-droite" style="background-image: url('img/corpsPastoral/marie-armelle_alihonou.jpg'); background-position: auto;"></div>
              <div class="txt-trombi-personne-gauche">
              <h1 class="titre-bulle-pop-up"> Marie-Armelle ALIHONOU<br>Assistante-Pasteur<br>Bruxelles</h1></div>
            </div>

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne-droite" style="background-image: url('img/corpsPastoral/NGALEU-Alain_Patrice.jpg');"></div>
              <div class="txt-trombi-personne-gauche">
                <h1 class="titre-bulle-pop-up"> Alain Patrice NGALEU <br>Assistant-Pasteur<br>Charleroi</h1>
              </div>
            </div>

            

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne" style="background-image: url('img/corpsPastoral/');"></div>
              <div class="txt-trombi-personne">
                <h1 class="titre-bulle-pop-up"> Pino IKAMA<br>Assistant-Pasteur<br>Bruxelles</h1>
              </div>
            </div>

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne" style="background-image: url('img/corpsPastoral/godwin_agbemavor.jpg');"></div>
              <div class="txt-trombi-personne">
              <h1 class="titre-bulle-pop-up"> Godwin Agbemavor<br>Assistant-Pasteur<br>Bruxelles</h1></div>
            </div>

            <div class="contenair-trombi-personne">
              <div class="img-trombi-personne-droite" style="background-image: url('img/corpsPastoral/');"></div>
              <div class="txt-trombi-personne-gauche">
                <h1 class="titre-bulle-pop-up"> Collins Iwe<br>Assistant-Pasteur<br>Bruxelles</h1>
              </div>
            </div>

            

            <div class="contenair-trombi-personne" style="transform:opacit;">
            </div>
            <div class="contenair-trombi-personne" style="transform:opacit;">
            </div>
            <div class="contenair-trombi-personne" style="transform:opacit;">
            </div>

        
          </div>
</div>


<!--
    MODAL
            -->


    <div id="butonCategories"  onclick="document.getElementById('id01').style.display='block'">
      <p></p>
    </div>

    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
      <h1 style="color: white;position: relative;top:40%;font-size: 3rem;text-align: center;">Formulaire en construction (En attentesde directives)</h1>
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