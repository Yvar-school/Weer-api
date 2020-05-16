
function requestData(location) {
    var data = null;

    var xhr = new XMLHttpRequest();

    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
            console.log(this.responseText);
            var obj = JSON.parse(this.responseText);

            console.log(obj.liveweer[0].plaats);
            generateChart(obj);
        }
    });

    xhr.open("GET", "http://weerlive.nl/api/json-data-10min.php?key=6ad7dd1ca9&locatie=" + location);

    xhr.send(data);
    
    return null;
}

function getTemperatures(obj, isMax) {
    var nowTemp, tomorrowTemp, otherTemp;

    if(isMax) {
        nowTemp = parseFloat(obj.liveweer[0].d0tmax);
        tomorrowTemp = parseFloat(obj.liveweer[0].d1tmax);
        otherTemp = parseFloat(obj.liveweer[0].d2tmax);
    }else {
        nowTemp = parseFloat(obj.liveweer[0].d0tmin);
        tomorrowTemp = parseFloat(obj.liveweer[0].d1tmin);
        otherTemp = parseFloat(obj.liveweer[0].d2tmin);
    }



    var array = [
        nowTemp,
        tomorrowTemp,
        otherTemp
    ];
    return array;
}


function generateChart(obj) {
    var ctx = document.getElementById('myChart').getContext('2d');
    var data = {
        labels: ["Vandaag", "Morgen", "Overmorgen"],
        datasets: [{
            label: 'Maximale Temperatuur',
            data: getTemperatures(obj, true),
            backgroundColor: [
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },{
            label: 'Minimale Temperatuur',
            data: getTemperatures(obj, false),
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    };
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    };
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });
}