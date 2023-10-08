<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon " href="img/logoicc.png" type="image/x-icon"/>
	<meta charset="utf-8">
	<title>B.A.N</title>
</head>
<style type="text/css">
	body{
		padding: none;
		margin: none;
		border: none;
		height: 100%;
		width: 100%;
		background-color: rgba(255, 255, 255, 1.0)
	}
	html{
		padding: none;
		margin: none;
		border: none;
		height: 100%;
		width: 100%;
	}
	body::-webkit-scrollbar {
	  display: none;
	}
	.contenair-apps::-webkit-scrollbar {
	  display: none;
	}
	.contenair-slide::-webkit-scrollbar {
	  display: none;
	}
	header{
		margin-top: 12%;
	}
	a{
		color: inherit;
		text-decoration: none;
	}
	.background{
		/*background-image: url(img/logoicc.png);*/
		background-color: #000;
		background-position: center;
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
		/*background-color:rgba(29,29,31,0.9);*/
  		animation: marquee 0.3s linear;
  		display: none;
	}


	@keyframes marquee {
	  0% {
	    transform: translate(0,150%);
	  }
	  100% {
	    transform: translate(0,0);
	  }
	}
	/*------------------------------------------------*\
			%-contenair-apps
	\*------------------------------------------------*/
	.contenair-apps{
		height: 35%;
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		overflow-x: scroll;
		padding-bottom: 8%;
		padding-top:2%;
		text-align: center;
		margin-bottom: 5%;
		/*background-color: #000*/;
		border-radius:40px;
		border-right: 1px solid #fff;
		border-left: 1px solid #fff;
	}
	.titre-contenair-apps{
		margin-left: 5%;
		font-weight: bold;
		margin-bottom: 0;
		width: fit-content;
		background-color: #000;
		border-top-right-radius: 25px;
		border-top-left-radius:  25px;
		padding: 1.5%;
	}
	#contenair-app{
		width: 250px;
		height:150px;
		text-align: center;
		border-radius: 5%;
		display: inline-block;
		margin-left: 0;
		margin-right: 0;
		margin-top: 4%;
	}
	#contenair-app:hover{
		background-color: rgba(255, 255, 255, 0.8);
	}
	#logo-app{
		height: 100px;
		width: 100px;
		margin-left: auto;
		margin-right: auto;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		border-radius: 20px;
	}
	#nom-app{
		font-weight: bold;
		margin-top: 0.5%;
	}
	/*------------------------------------------------*\
			%-contenair-slide
	\*------------------------------------------------*/
	.contenair-slide{
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		overflow: hidden;
		overflow-y: scroll;
		margin-bottom: 5%;
	}
	#cartes{
		height: 400px;
		width: 279px;
		margin-right: 1.5%;
		margin-top: 5%;
		display: inline-block;
		border-radius: 5%;
		text-align: center;
		/*background-color: #834c8a #000*/;
		border-right: 0.5px solid #fff;
  		vertical-align: top;
  		background-color: rgba(255, 255, 255, 0.050);
	}
	#logoCorpsPastoralSvg{
		width: 80%;
		height: 80%;
	}
	#nom-cartes{
		margin:0;
		margin-top:5%;
		height: 75px;
		max-height: 75px;
		min-height: 75px;
		overflow-x: scroll;
	}
	/*------------------------------------------------*\
			%-footer
	\*------------------------------------------------*/
	footer{
		display: none;
		width: 100%;
		height: 7%;
		border-top: 2px solid grey;
		position: fixed;
		bottom: 0;
		left: 0;
		font-weight: bold;
		font-size: 25px;
	}
	.logo-user{
		height: 50px;
		width: 50px;
		border-radius: 50px;
		background-color: grey;
		border: 1px solid black;
		display: inline-block;
		margin-left: 8%;
		margin-top: 2.5%;
	}
	.nom-user{
		display: inline-block;
	}
	.bouton-parametres{
		height: 50px;
		width: 50px;
		border-radius: 50px;
		display: inline-block;
		float: right;
		margin-right: 8%;
		margin-top: 2.5%;
		background-color: grey;
	}
	/*------------------------------------------------*\
			%-formulaire
	\*------------------------------------------------*/
    #contenair-formulaire{
        height: 100%;
        width: 100%;
        background-color: rgba(32 32 35 0);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 40;
        text-align: center;
        cursor: pointer;
        z-index: 5;
        display: none;
		/*-webkit-filter: blur(20px);
		-moz-filter: blur(20px) ;
		-o-filter: blur(20px) ;
		-ms-filter: blur(20px) ;
		filter: blur(100px);*/
    	-webkit-animation: animatezoom 0.9s;
    	animation: animatezoom 0.9s;
    }
    .blury{
    	background-color: red;
    	-webkit-animation: blury 1.5s;
    	animation: blury 1.5s;-webkit-filter: blur(100px);
		-moz-filter: blur(100px) ;
		-o-filter: blur(100px) ;
		-ms-filter: blur(100px) ;
		filter: blur(100px);
    }
  	@keyframes blury {
  		0%   {-webkit-filter: blur(0px);
		-moz-filter: blur(0px) ;
		-o-filter: blur(0px) ;
		-ms-filter: blur(0px) ;
		filter: blur(0px);}
  		50%   {-webkit-filter: blur(0px);
		-moz-filter: blur(0px) ;
		-o-filter: blur(0px) ;
		-ms-filter: blur(0px) ;
		filter: blur(0px);}
  		100% {-webkit-filter: blur(100px);
		-moz-filter: blur(100px) ;
		-o-filter: blur(100px) ;
		-ms-filter: blur(100px) ;
		filter: blur(100px);}
	}

	#cartes-extend{		
		width: 80%;
		margin-right: auto;
		margin-left: auto;
		margin-top: 35%;
		display: inline-block;
		border-radius: 5%;
		/*background-color: #834c8a #000*/;
		border-right: 0.5px solid #fff;
  		background-color: rgba(255, 255, 255, 0.050);
  		text-align: left;
  		padding-bottom: 2.5%;
	}
	#departement-extend{	
		width: 80%;
		margin-right: auto;
		margin-left: auto;
		margin-top: 2.5%;
		text-align: left;
	}
	#departement{
		border-top-left-radius: 50px;
		border-top-right-radius: 50px;
		border-bottom-right-radius: 50px;
		border-bottom-left-radius: 50px;
  		background-color: rgba(255, 255, 255, 0.05);
  		display: inline-block;
		border-right: 0.5px solid #fff;
		min-width: 100px;
		margin-left: 5px;
		text-align: center;
		vertical-align: center;
		padding: 0;
		padding: 1.5%;
	}

#pdpCartes-extend{
	height: 350px;
	width: 350px;
	margin-left: auto;
	margin-right: auto;
	background-size: cover;
	background-position: center;
	margin-top:5%;
	margin-bottom:5%;
	border-radius: 100%;
	}

	#nom-cartes-extend{
		overflow-x: scroll;
		font-size: 40px;
		margin-left: 5%;
	}
    #rideau{
    	width: 100%;
    	height: 0%;
        background-color: rgb(32 32 35);
        position: fixed;
        top: 0;
        z-index: 6;
    	-webkit-animation: animRideau 1.8s;
    	animation: animRideau  1.8s;
        display: none;
    } 
  	@keyframes animRideau {
  		0%   {height: 0%;}
  		55%   {height: 100%;}
  		75%   {height: 100%;}
  		100% {height: 0%}
	}
    #formulaire {
    	height: 80%;
    	width: 100%;
        margin-top: 25%;
        border: none;
    } 
  	@keyframes animatezoom {
  		0%   {top:-100%;background-color: rgba(32 32 35 0.5);}
  		75%   {background-color: rgba(32 32 35 0.5);}
  		80%  {bottom: 0;}
  		100% {background-color: rgb(32 32 35);}
	}
  	@keyframes closeForm {
  		0%   {right: -120px;}
  		90%  {right: -120px;}
  		100% {right: 0;}
	}
	.close {
    position: absolute;
    right: 0px;
    margin: 0;
    top: 0;
    width: 120px;
    color: #fff;
    font-size:80px;
    font-weight: bold;
    margin-top: 25%;
    background-color: black;
    -webkit-animation: closeForm 1.5s;
    animation: closeForm 1.5s;
}
</style>
<body onclick="document.getElementById('titre-veille').style.display='none';">
	<div class="background"  onclick="document.getElementById('contenu').style.display='block';">
    	<video autoplay loop muted  id="bgvid">
    	  <source src="img/logorotation.mp4" type="video/mp4">
    	</video>
	</div>

	<div id="titre-veille" style=" position: fixed;top:45%;width: 100%;text-align: center;z-index: 2;color: #fff; font-weight: bold;font-size: 40px;">
		<h1 style="margin: 0;padding: 0;">B.A.N</h1>
		<p style="margin: 0;padding: 0;">Borne d'Acceuil Numérique</p>
	</div>

	<div class="contenu" id="contenu">
		<header></header>
  <style type="text/css">

.search-section {
    margin-top: 5rem;
    border: 0px solid;
    box-shadow: 2px 4px 20px 0px rgb(182, 182, 182);
    padding: 15px;
    width: 500px;
    height: 250px;
    background-color: rgba(250, 250, 250, 0.050);
}

.star {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.name {
    margin-right: 1rem;
}

#searchName {
    width: 85%;
    height: 90%;
    border: none;
    display: inline-block;
    margin-left: 2.5%;
    float: left;
    outline: none;
    background:none;
    font-size: 2em;
    color: white;
}

.filter-button {
    display: flex;
    justify-content: space-around;
    margin-top: 2rem;
}

a.drop {
    text-decoration: none;
    font-size: 16px;
    font-weight: bolder;
    border: 0px solid;
    border-radius: 15px;
    padding: 15px;
    color: black;
    background-color: rgb(149, 159, 156);
}

.submit {
    margin-top: 4rem;
    display: flex;
    justify-content: flex-end;
}

button {
    padding: 10px;
    cursor: pointer;
    border: 0px;
    font-size: 16px;
}

.recherche {
  margin: 0;
  padding: 0;
  margin-left:5%;
  background: none;
  border-top: 0.5px solid white;
  border-left: 0.5px solid white;
  border-radius: 5%;
}

#loupe{
  fill: rgba(104, 74, 158, 1);
  height: 100%;
  width: 50px;
  margin: 0;
  padding: 0;
  display: inline-block;
  float: right;
}

.reset {
    background: gray;
}

/**************************************************** Section de la table ***************************/
.table-star {
    margin-top: 5rem;
}

/**************************************************** Table des STAR *******************************/
.info {
    width: 750px;
    border-collapse: collapse;
    border: 0px solid black;
    text-align: center;
    vertical-align: middle;
}

th {
    border-bottom: 2px solid #6c6a6a;
}

.img-profile img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
}

td {
    text-align: center;
    line-height: 3px;
}


/************************************************ Partie navigation *****************************/
.navigation {
    display: flex;
    justify-content: center;
    margin-top: 1.5rem;
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
}

.page-item:first-child .page-link {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.page-link {
    padding: 0.375rem 0.75rem;
    position: relative;
    display: block;
    color: #0d6efd;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #dee2e6;
}

.page-item:not(:first-child) .page-link {
    margin-left: -1px;
}

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
}
#barre-recherche{
  border-bottom:0.25px solid white;
  border-right:0.5px solid white;
  padding:1.5%;
  border-radius: 5%;
  width: 80%;
  height: 50px;
  margin-left: auto;
  margin-right: auto;
  font-size: 1em;
  background-color: rgba(250, 250, 250, 0.050);
}
#eglise-select{
	height: 50px;
	font-size: 2em;
	background: rgba(104, 74, 158, 0.8);
	margin-left: 9%;
	border: none;
	outline: none;
	border-radius: 5%;
	margin-top: 1.5%;
	color: #fff;
	text-align: center;
}
#pdpCartes{
	height: 150px;
	width: 150px;
	border-radius: 100%;
	margin-left: auto;
	margin-right: auto;
	background-size: cover;
	background-position: center;
	margin-top:5%;
	margin-bottom:15%;
	}
  </style>
        <form id="formSearchAnnuaire" action="" method="post">
          <div id="barre-recherche">
            <input type="search" name="search" id="searchName" autocomplete="off" placeholder="mots clefs : ex informaticien" />
            <button type="submit" class="recherche">
              <svg  id="loupe" focusable="false" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
            </button>
          </div>
          <select name="eglise" id="eglise-select">
            <option value="">Églises</option>
            <option value="bxl">Bruxelles</option>
            <option value="paris">Paris</option>
            <option value="luxembourg">Luxembourg</option>
            <option value="">etc</option>
          </select>
        </form>

<script>
function myMove() {
	const elem=document.getElementsById('contenair-slide');
  elem.classList.add('blury');
}
</script>
		<div class="contenair-slide" id="contenair-slide">
			<a onclick="myMove()"  href="https://impactcentrechretien.elvanto.eu/form/b8e3f9e4-0a0a-440e-ad95-334e4e9f21cd" target='dva-docx-iframe'><div id="cartes"  >
				<h1 id="nom-cartes">Daphney-Chloé N</h1>
				<div id="pdpCartes" style="background-image: url('../img/dcn.png');"></div>
				<h1 id="nom-cartes">Métier/Métier<br>teste@gmail.com</h1>
			</div></a> 
			<a onclick="document.getElementById('contenair-formulaire').style.display='block';document.getElementById('contenair-slide').style.filter='blur(20px)';document.getElementById('contenair-slide').style.animation='blury 1.5s;';document.getElementById('rideau').style.display='block';" ><div id="cartes"  >
				<h1 id="nom-cartes">Jason Ponda</h1>
				<div id="pdpCartes" style="background-image: url('../img/jp.png');"></div>
				<h1 id="nom-cartes">Métier/Métier<br>teste@gmail.com</h1>
			</div></a>
			<a onclick="document.getElementById('contenair-formulaire').style.display='block';document.getElementById('rideau').style.display='block';"  href="https://impactcentrechretien.elvanto.eu/form/b8e3f9e4-0a0a-440e-ad95-334e4e9f21cd" target='dva-docx-iframe'> <div id="cartes"  >
				<h1 id="nom-cartes">Joseph Max Monemou</h1>
				<div id="pdpCartes" style="background-image: url('../img/testpdp.jpeg');"></div>
				<h1 id="nom-cartes">Métier/Métier<br>teste@gmail.com</h1>
			</div></a>
			<a onclick="document.getElementById('contenair-formulaire').style.display='block';document.getElementById('rideau').style.display='block';"  href="https://impactcentrechretien.elvanto.eu/form/b8e3f9e4-0a0a-440e-ad95-334e4e9f21cd" target='dva-docx-iframe'> <div id="cartes"  >
				<h1 id="nom-cartes">Michel Ngimbi</h1>
				<div id="pdpCartes" style="background-image: url('../img/mn.png');"></div>
				<h1 id="nom-cartes">Métier/Métier<br>teste@gmail.com</h1>
			</div></a>		
		</div>
		<div id="rideau"></div>
        <div id="contenair-formulaire" >  
        	<span onclick="document.getElementById('contenair-formulaire').style.display='none'" class="close" title="Close Modal">×</span>
            <iframe id="formulaire"   name="dva-docx-iframe" style="display: none;" ></iframe>
            
            <div id="cartes-extend">
				<div id="pdpCartes-extend" style="background-image: url('img/jp.png');"></div>
				<h1 id="nom-cartes-extend">Jason Ponda</h1>
				<h1 id="nom-cartes-extend">Métier · Métier<br>teste@gmail.com</h1>
			</div>
            <div id="departement-extend">
				<h1 id="departement" style="background-color:rgba(0,186,255,0.25)">DSI</h1>
				<h1 id="departement" style="background-color:rgba(169,0,255,0.25)">MJIB</h1>
				<h1 id="departement" style="background-color:rgba(57,255,0,0.25)">MCDE</h1>
				<h1 id="departement" style="background-color:rgba(255,7,0,0.25)">IDK</h1>
			</div>
        </div>
		<footer>
			<div class="logo-user"></div>
			<div class="nom-user">#023020</div>
			<div class="bouton-parametres"></div>
		</footer>
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