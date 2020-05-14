function requestData(location) {
    var data = null;

    var xhr = new XMLHttpRequest();

    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
            console.log(this.responseText);
            var obj = JSON.parse(this.responseText);

            console.log(obj.liveweer[0].plaats)
        }
    });

    xhr.open("GET", "http://weerlive.nl/api/json-data-10min.php?key=6ad7dd1ca9&locatie=" + location);

    xhr.send(data);
}