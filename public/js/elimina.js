const form = document.querySelector("#cambio");
form.addEventListener("submit",elimina);


function elimina(event){

    event.preventDefault();
    fetch('elimina').then(onResponse).then(ontext);

}

function onResponse(response)
{
  return response.text();
}


function ontext(text)
{
    //se l'utente è stato eliminato vai a login
    var result = text.localeCompare('1');
    if (result==0){
    alert("Account eliminato con successo");
    window.location="login";
    }
    else
    {
        alert("Account non eliminato");
    }
}