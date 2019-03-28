var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : 'cs411fullscore',
  database : 'flightdb'
});
 
connection.connect();