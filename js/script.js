function requestData() {
    var data = null;

    var xhr = new XMLHttpRequest();

    xhr.addEventListener("readystatechange", function () {
        console.log("test2");
        if (this.readyState === this.DONE) {
            console.log(this.responseText);
            var obj = JSON.parse(this.responseText);

            //console.log(obj.liveweer[0].plaats)
            var Div = document.getElementById("Resultaten");

            Div.innerHTML = 
            "Het is nu " + obj.liveweer[0].samenv + " in " + obj.liveweer[0].plaats + "<br>" + 
           "De temperatuur: <i class='fas fa-temperature-high'></i>" + obj.liveweer[0].temp + "<br>" +
           "Gevoelstemperatuur: <i class='fas fa-thermometer'></i> " + obj.liveweer[0].gtemp + "<br>" +
           "Windkracht: <i class='fas fa-wind'></i>" + obj.liveweer[0].windkmh + "<br>" + 
           "Wind Richting: <i class='fas fa-location-arrow'></i>" + obj.liveweer[0].windr + "<br>" +
           "Max temp: <i class='fas fa-temperature-high'></i>" + obj.liveweer[0].d0tmax + "<br>" +
           "Min temp: <i class='fas fa-temperature-low'></i>" + obj.liveweer[0].d0tmin + "<br>" +
           "Neerslagkans vandaag: " + obj.liveweer[0].d0neerslag + "%"
           ;
            generateChart(obj);
        }
    });

    var location = document.getElementById("pnaam").value;


    xhr.open("GET", "http://weerlive.nl/api/json-data-10min.php?key=6ad7dd1ca9&locatie=" + location);

    xhr.send(data);
    
    return null;
}