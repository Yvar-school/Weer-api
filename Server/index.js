var mysql = require('mysql');
var unirest = require("unirest");

var interval = (1000 * 60) * 30;
//Laatste parameter is om de hoeveel minuten hij moet checken.

var table = "koekjes";
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "koekjes"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Mysql Connected!");

  check();
  setInterval(check, interval);
});


function check() {
    con.query("SELECT * FROM " + table + " WHERE DATE(date) = CURDATE()", function (err, result, fields) {
        if (err) throw err;

        if(result.length == 0) {
            //Vandaag is er nog geen record aangemaakt.
            insertRecord();
        }else {
            //Er is vandaag al een record aangemaakt.
        }
      });
}

function insertRecord() {
    var req = unirest("GET", "http://weerlive.nl/api/json-data-10min.php?key=6ad7dd1ca9&locatie=Amsterdam");

    req.end(function (res) {
        if (res.error) throw new Error(res.error);
    
        var min = parseFloat(res.body.liveweer[0].d0tin);
        var max = parseFloat(res.body.liveweer[0].d0tmax);

        con.query("INSERT INTO " + table + " (min_temp, max_temp) VALUES ('" + min + "', '" + max + "')", function (err, result) {
          if (err) throw err;
          console.log("Temperatuur is in de database gezet!");
        });
    });
}