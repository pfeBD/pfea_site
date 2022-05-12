
document.getElementById('villeDepart').addEventListener('click',()=>{
    fetch("cities.json")
        .then(res=> res.json())
        .then(data=>{
            data.cities.forEach(element => {
                let option=document.createElement('option');
                option.innerHTML=element.name;
                option.value=element.name;
                document.getElementById('villeDepart').appendChild(option);
            })
        })
},{once:true})
    


document.getElementById('villeDepart').onchange=()=>{
    fetch("cities.json")
        .then(res=> res.json())
        .then(data=>{
            document.getElementById('secteurDepart').style.display="none";
            document.getElementById('secteurDepart').innerHTML="<option selected>choisir un secteur</option>";
            let cmpt=0;
            let select = document.getElementById('villeDepart');
            let value = select.options[select.selectedIndex].value;
            data.cities.forEach(element => {
                if(element.name==value){
                    element.secteur.forEach(val => {
                        cmpt++;
                        let option=document.createElement('option');
                        option.innerHTML=val.secteurName;
                        option.value=val.secteurName;
                        document.getElementById('secteurDepart').appendChild(option);
                    });
                }
            });
            if(cmpt>0){
                document.getElementById('secteurDepart').style.display="block";
            }
        })
}

document.getElementById('villeArriver').addEventListener('click',()=>{
    fetch("cities.json")
        .then(res=> res.json())
        .then(data=>{
            data.cities.forEach(element => {
                let option=document.createElement('option');
                option.innerHTML=element.name;
                option.value=element.name;
                document.getElementById('villeArriver').appendChild(option);
            })
        })
},{once:true})
    


document.getElementById('villeArriver').onchange=()=>{
    fetch("cities.json")
        .then(res=> res.json())
        .then(data=>{
            document.getElementById('secteurArriver').style.display="none";
            document.getElementById('secteurArriver').innerHTML="<option selected>choisir un secteur</option>";
            let cmpt=0;
            let select = document.getElementById('villeDepart');
            let value = select.options[select.selectedIndex].value;
            data.cities.forEach(element => {
                if(element.name==value){
                    element.secteur.forEach(val => {
                        cmpt++;
                        let option=document.createElement('option');
                        option.innerHTML=val.secteurName;
                        option.value=val.secteurName;
                        document.getElementById('secteurArriver').appendChild(option);
                    });
                }
            });
            if(cmpt>0){
                document.getElementById('secteurArriver').style.display="block";
            }
        })
}

