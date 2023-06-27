<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="shortcut icon " href="img/logoicc.png" type="image/x-icon"/>
	<title>B.A.N</title>
</head>
<style type="text/css">
	body{
		padding: none;
		margin: none;
		border: none;
		height: 100%;
		width: 100%;
		background-color: rgba(0, 0, 0, 1.0);
		text-align: center;
	}
	html{
		padding: none;
		margin: none;
		border: none;
		height: 100%;
		width: 100%;
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
		-webkit-filter: blur(20px);
		-moz-filter: blur(20px) ;
		-o-filter: blur(20px) ;
		-ms-filter: blur(20px) ;
		filter: blur(45px);
	}
	#bgvid-veille{
		border: 4px solid #fff;
		position: fixed;
		top: 30%;
		left: 35%;
		height: 300px;
		width: 300px;
		border-radius: 300px;
		z-index: 2;
		background-image: url(img/logoicc.png);
		background-size: 200px;
		background-position: center;
		background-repeat: no-repeat;
		background-color: #fff;
	}
	#contenair-photo{
		width: 32%;
		height: 100%;
		display: inline-block;
		filter: blur(0.5px);
		overflow: hidden;
		overflow-y: scroll;
	}
	#img-carroussel-veille{
		width: 95%;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 5%;
	}
</style>
<body>	
		<div id="bgvid-veille"></div>
    	<!--<video autoplay loop muted  >
    	  <source src="img/logorotation.mp4" type="video/mp4">
    	</video>-->
    	<div id="contenair-photo">
    		<img id="img-carroussel-veille" src="img/téléchargement.jfif">
    		<img id="img-carroussel-veille" src="img/leJeuneManga.jfif">
    		<img id="img-carroussel-veille" src="img/wof-extended.png">
    		<img id="img-carroussel-veille" src="img/dignite.jfif">	
    		<img id="img-carroussel-veille" src="img/ish.jpg">
    		<img id="img-carroussel-veille" src="img/ish.jpg">
    		<img id="img-carroussel-veille" src="img/wof-extended.png">
    		<img id="img-carroussel-veille" src="img/dignite.jfif">
    		<img id="img-carroussel-veille" src="img/téléchargement.jfif">
    		<img id="img-carroussel-veille" src="img/leJeuneManga.jfif">
    	</div>
    	<div id="contenair-photo">
    		<img id="img-carroussel-veille" src="img/ish.jpg">
    		<img id="img-carroussel-veille" src="img/wof-extended.png">
    		<img id="img-carroussel-veille" src="img/dignite.jfif">
    		<img id="img-carroussel-veille" src="img/téléchargement.jfif">
    		<img id="img-carroussel-veille" src="img/leJeuneManga.jfif">
    		<img id="img-carroussel-veille" src="img/leJeuneManga.jfif">
    		<img id="img-carroussel-veille" src="img/téléchargement.jfif">
    		<img id="img-carroussel-veille" src="img/ish.jpg">
    		<img id="img-carroussel-veille" src="img/dignite.jfif">
    		<img id="img-carroussel-veille" src="img/wof-extended.png">
    	</div>
    	<div id="contenair-photo">
    		<img id="img-carroussel-veille" src="img/leJeuneManga.jfif">
    		<img id="img-carroussel-veille" src="img/téléchargement.jfif">
    		<img id="img-carroussel-veille" src="img/ish.jpg">
    		<img id="img-carroussel-veille" src="img/dignite.jfif">
    		<img id="img-carroussel-veille" src="img/wof-extended.png">
    		<img id="img-carroussel-veille" src="img/téléchargement.jfif">
    		<img id="img-carroussel-veille" src="img/leJeuneManga.jfif">
    	</div>
</body>
</html>