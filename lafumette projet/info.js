async function infos()
{
    const url = "http://newsapi.org/v2/top-headlines?country=fr&category=technology&apiKey=637e92f3a37f411d8f890b5e3862f3fd";

    await fetch(url)
    .then(res=>res.json())
    .then(res=>{

        const data = res;

      console.log(data);

       const titre = document.getElementById("titre");

        titre.innerHTML = data.articles[0].title;

      const desc = document.getElementById("desc");

      desc.innerHTML = data.articles[0].description;


        const date = document.getElementById("date");

        date.innerHTML = "date : " + data.articles[0].publishedAt;

        

        const source = document.getElementById("source");

        source.innerHTML = "Source : " + data.articles[0].source.name;

        const img = document.getElementById("img");

        img.src = data.articles[0].urlToImage;
 
 
            const div = document.createElement("div");

            div.innerHTML = `<div class="container">
            <div class="row">
            <div class="card" style="width: 18rem;">
              <img id="img" class="card-img-top" src="${data.articles[1].urlToImage}"image">
                 <div class="card-body">
                   <h5 class="text text-primary" id="titre" class="card-title">${data.articles[1].title}</h5>
                   <p id="desc" class="card-text">${data.articles[1].description}</p>

                 </div>
                 <ul class="list-group list-group-flush">
                   <li  id="date"  class="list-group-item"> date : ${data.articles[1].publishedAt}</li>
                   <li id="source"  class="list-group-item">Source : ${data.articles[1].source.name}</li>
                 </ul>
                 <div class="card-body">
                 <a class="btn btn-primary" href="${data.articles[1].url}" class="card-link">Savoir Plus</a>

                 </div>
               </div> 
               </div>
            </div>`
            
           

             document.body.append(div); 


             



 


    })
    .catch(err=>{
        alert(err);
    })
}
