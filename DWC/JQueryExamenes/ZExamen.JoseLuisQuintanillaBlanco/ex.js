window.onload=iniciar;
function iniciar(){

document.getElementsByTagName("h1")[0].addEventListener("click", creaElDom, false);
}
arrayJuguetes = [	
    {
        img:"https://juguettos.com/1361787-large_default/A0041951.jpg", precio:"14,99",
		href:"https://juguettos.com/1039-la-banda", ref:"A0041951",
		title:"La Banda Tambor Acústico", coleccion:"La Banda"
		},
		{
    	img:"https://juguettos.com/1362350-large_default/A0133071.jpg", precio:"21,99",
			href:"https://juguettos.com/1039-la-banda", ref:"A0051216",
			title:"La Banda Guitarra Española", coleccion:"La Banda"
        }
	];


function creaElDom(){
    cambiaCabecera();
    var creaH1 = document.createElement("h1");
    var creaCab = document.createTextNode("OCULTAR JUGUETES");
    creaH1.appendChild(creaCab);
    var creaDiv1 = document.createElement("div");
    var creaUl1 = document.createElement("ul");
    creaUl1.setAttribute("syle", "list-style-type:none");
    creaDiv1.appendChild(creaUl1);
    for (let i = 0; i < arrayJuguetes.length; i++) {
        var creaLi1 = document.createElement("li");
        creaUl1.appendChild(creaLi1);
        var creaDiv2 = document.createElement("div");
        creaDiv2.setAttribute("class", "left block");
        creaLi1.appendChild(creaDiv2);
        var creaImg = document.createElement("img");
        creaImg.setAttribute("src", arrayJuguetes[i].img);
        creaImg.setAttribute("title", arrayJuguetes[i].title);
        creaDiv2.appendChild(creaImg);
        var creaDiv25 = document.createElement("div");
        creaDiv25.setAttribute("class", "desc");
        creaDiv25.setAttribute("style", "display:none");
        creaDiv2.appendChild(creaDiv25);


        var creaDiv3 = document.createElement("div");
        creaDiv3.setAttribute("class", "content-price");
        creaDiv25.appendChild(creaDiv3);
        var creaPrecio = document.createTextNode(arrayJuguetes[i].precio);
        creaDiv3.appendChild(creaPrecio);
        var creaEnlace = document.createElement("a");
        creaEnlace.setAttribute("href", arrayJuguetes[i].href);
        creaDiv25.appendChild(creaEnlace);
        var creaTxt = document.createTextNode(arrayJuguetes[i].coleccion);
        creaEnlace.appendChild(creaTxt);
        var creaP = document.createElement("p");
        creaP.setAttribute("class", "product-desc");
        creaDiv25.appendChild(creaP);
        var creaRef = document.createTextNode(arrayJuguetes[i].ref);
        creaP.appendChild(creaRef);   
    }
    document.getElementsByTagName("body")[0].appendChild(creaH1);   
    document.getElementsByTagName("body")[0].appendChild(creaDiv1);


    var mostrar = document.getElementsByTagName("img")
    for (let i = 0; i < mostrar.length; i++) {
        mostrar[i].addEventListener("click", despliegaImganes, false);  
      //  mostrar[i].addEventListener("click", mostrar, false);  
    }
    document.getElementsByTagName("h1")[0].addEventListener("click", ocultarTodo,false);
}

function cambiaCabecera(){
    var list = document.getElementsByTagName("h1")[0];
    list.removeChild(list.childNodes[0]);     
}

function despliegaImganes(e){
  e.currentTarget.parentNode.lastChild.setAttribute("style", "display:block");
  document.getElementsByTagName("img")[0].addEventListener("click", pliegaImganes,false);
}

function pliegaImganes(e){
    e.currentTarget.parentNode.lastChild.setAttribute("style", "display:none");
    //document.getElementsByClassName("desc")[0].style.display = "none";
}

function ocultarTodo(){

    var el = document.getElementsByTagName("h1")[0];
    el.remove()
}

 