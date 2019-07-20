var ini     = require('ini'),
    fs      = require('fs'),
    mysql   = require('mysql');

var config = ini.parse(fs.readFileSync('./admin/config.ini', 'utf-8'))
var sqlFile = fs.readFile(__dirname +  '/estrutura.sql', 'utf-8');
// console.log(sqlFile);

var connection = {
  host     : config.HOST_DB,
  user     : config.USER_DB,
  password : config.PASS_DB,
  port     : config.PORT_DB
};

var conn = mysql.createConnection(connection);
conn.connect();
conn.query(sqlFile)
conn.end();