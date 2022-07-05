const csrfToken= document.head.querySelector("[name=csrf-token][content]").content;


    function cerca(event)
    {
      event.preventDefault();
      const Padre = document.querySelector('#telefono');
      Padre.innerHTML='';
      var telefono= document.querySelector('#prodotto').value;
      var text = encodeURIComponent(telefono);
        fetch("/principale/cerca/"+text).then(onResponse).then(onJson);

    }
    

function onResponse(response)
{
  return response.json();

}

function onJson(json)
{
   
  const Padre = document.querySelector('#telefono');
  const  docs = json.data.phones;
  for(doc of docs){
  const container= document.createElement('div');
  const containertesto=document.createElement('div')
  // Dati
  const brand= document.createElement('h1');
  const nome = document.createElement('p');
  const immagine=document.createElement('img') ;
  const aggiungi= document.createElement("button")
  aggiungi.textContent="Aggiungi ai preferiti"
  aggiungi.addEventListener('click',aggiungipreferiti)
  brand.textContent=doc.brand;
  nome.textContent=doc.phone_name;
  immagine.src=doc.image

  container.appendChild(immagine)
  containertesto.appendChild(brand)
  containertesto.appendChild(nome)


  container.appendChild(containertesto)
  form.appendChild(aggiungi)
  container.appendChild(aggiungi)
  Padre.appendChild(container)
}
}



function aggiungipreferiti(event)
{
  const bottone= event.currentTarget;
  bottone.textContent="Rimuovi dai preferiti";
  bottone.addEventListener('click',rimuovipreferiti)
  const div= bottone.parentNode;
  const immagine=div.querySelector("img").src;
  const brand= div.querySelector("h1").textContent;
  const nome= div.querySelector("p").textContent;
  var queryimg = encodeURIComponent(immagine);
  var querybrand = encodeURIComponent(brand);
  var querynome = encodeURIComponent(nome);
  const formData = new FormData();
  formData.append('querynome', nome);
  formData.append('querybrand', brand);
  formData.append('queryimg', immagine);
  formData.append("_token", csrfToken);

  
   fetch("/principale/aggiungi",{
    method: 'POST',
    body: formData
}).then(onResponseText).then(onText); 

}

function rimuovipreferiti(event)
{

  const bottone= event.currentTarget;
  bottone.textContent="Aggiungi ai preferiti";
  bottone.addEventListener('click',aggiungipreferiti)
  const div= bottone.parentNode;
  const nome= div.querySelector("p").textContent;
  var telefono = encodeURIComponent(nome);


   fetch("/principale/rimuovi/"+telefono).then(onResponseText).then(onText);

}

function onResponseText(response)
{
  return response.text();
}

function onText(text)
{
  return text;
}


const form = document.querySelector("#ricerca")
form.addEventListener("submit",cerca)


