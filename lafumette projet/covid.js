async function covid()
{
    const url = "https://coronavirusapi-france.now.sh/FranceLiveGlobalData";

    await fetch(url)
    .then(res=>res.json())
    .then(res=>{

        const data = res;

        console.log(data);


        const total_death = document.getElementById("total_death");

        total_death.innerHTML =  data.FranceGlobalLiveData[0].deces;

           const total_recovered = document.getElementById("total_recovered");

           total_recovered.innerHTML = data.FranceGlobalLiveData[0].reanimation;


           const new_case = document.getElementById("new_case");
           new_case.innerHTML = data.FranceGlobalLiveData[0].nouvellesHospitalisations;


           const new_death = document.getElementById("new_death");

           new_death.innerHTML = "total " + data.FranceGlobalLiveData[0].gueris;


           const total_cases = document.getElementById("total_cases");
           total_cases.innerHTML = data.FranceGlobalLiveData[0].casConfirmes;


            const source = document.getElementById("source");

            source.style.textAlign = "center";
            source.style.color = "green";

            source.style.fontSize = "xx-large";

            source.innerHTML = "Source : " + data.FranceGlobalLiveData[0].source.nom;


            

    })
    .catch(err=>{
        alert(err);
    })
}