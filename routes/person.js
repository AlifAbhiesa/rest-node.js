var express = require('express');
var router = express.Router();


/* GET users listing. */
router.get('/', function(req, res, next) {
    var mysql = require('mysql');

    var con = mysql.createConnection({
        host: "localhost",
        user: "root",
        password: "",
        database: "crud"
    });

    con.connect(function(err) {
        if (err) throw err;
        con.query("SELECT * FROM persons", function (err, result, fields) {
            if (err) throw err;
           res.send(JSON.stringify(result));
        });
    });

});

module.exports = router;
