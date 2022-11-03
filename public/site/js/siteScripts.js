function openPage(link){
    window.open(link, "_blank").focus();
}

function darkMode(event){
    if(event.target.checked){
        document.getElementById('light-symbol').style.display = "none";
        document.getElementById('dark-symbol').style.display = "block";
        document.body.classList.toggle("darkmode");
    }else{
        document.getElementById('light-symbol').style.display = "block";
        document.getElementById('dark-symbol').style.display = "none";
        document.body.classList.toggle("darkmode");

    }

}

function searchClient(name){
    let clientes = document.getElementsByClassName("index-cliente");
    for(let i=0; i< clientes.length; i++){
        if(clientes[i].getAttribute["key"] === name){
            clientes[i].style.display = "none";
        }
    }
}