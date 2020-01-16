window.addEventListener("load", iniciar, false);

function iniciar () {	

	var contenedor = document.getElementById("noticias");

	if (!contenedor.hasChildNodes()) {

		var noticias = [

			{
				titular: "Noticia 1",
				contenido: "Contenido de la noticia 1",
				descripcion: "Esta es la noticia 1"
			},

			{
				titular: "Noticia 2",
				contenido: "Contenido de la noticia 2",
				descripcion: "Esta es la noticia 2"
			},

			{
				titular: "Noticia 3",
				contenido: "Contenido de la noticia 3",
				descripcion: "Esta es la noticia 3"
			}

		];

		var imagenes = [

			{
				mostrar: "./imagenes/mostrar.png",
				ocultar: "./imagenes/ocultar.png"
			}

		];

		crearDOM(noticias, imagenes, contenedor);

	}

}


function crearDOM (noticias, imagenes, contenedor) {

	for (var i = 0; i < noticias.length; i++) {

		var div = document.createElement("div");
		div.setAttribute("id", "noticia"+(i+1));

		var encabezado = document.createElement("h1");
		encabezado.appendChild(document.createTextNode(noticias[i]["titular"]));
		div.appendChild(encabezado);

		var imgMostrar = document.createElement("img");
		imgMostrar.setAttribute("src", imagenes[0]["mostrar"]);
		imgMostrar.setAttribute("name", "mostrar");
		div.appendChild(imgMostrar);

		var imgOcultar = document.createElement("img");
		imgOcultar.setAttribute("src", imagenes[0]["ocultar"]);
		imgOcultar.setAttribute("name", "ocultar");
		div.appendChild(imgOcultar);

		var contenido = document.createElement("p");
		contenido.setAttribute("id", "p"+(i+1));
		contenido.appendChild(document.createTextNode(noticias[i]["contenido"]));
		div.appendChild(contenido);

		var descripcion = document.createElement("h4");
		descripcion.appendChild(document.createTextNode(noticias[i]["descripcion"]));
		div.appendChild(descripcion);

		contenedor.appendChild(div);

	}

	funcionalidad();

}

function funcionalidad () {

	var imagenes = document.getElementsByTagName("img");
	for (var i = 0; i < imagenes.length; i++) {
		imagenes[i].addEventListener("click", desplegar, false);
	}

	var parrafos = document.getElementsByTagName("p");
	for (var i = 0; i < parrafos.length; i++) {
		parrafos[i].addEventListener("contextmenu", mostrar, false);
	}

}


function mostrar (e) {
	
	e.preventDefault();
	var h4 = e.currentTarget.parentNode.lastChild;

	if (h4.getAttribute("style") == "display: block;") {

		h4.setAttribute("style", "display: none;");

	} else {

		h4.setAttribute("style", "display: block;");
	}

}

function desplegar (e) {

	var padre = e.currentTarget.parentNode.id;
	var noticia = padre.charAt(padre.length-1);
	var accion = e.currentTarget.name;

	var parrafo = document.getElementById("p"+noticia);

	if (accion == "mostrar") {
		parrafo.setAttribute("style", "display: block;");

	} else {

		parrafo.setAttribute("style", "display: none;");
		parrafo.nextSibling.setAttribute("style", "display: none;");

	}

}