var mysql      = require('execsql'),
    dotenv     = require('dotenv');
dotenv.config();

// var connection = {
//   host     : process.env.HOST_DB,
//   user     : process.env.USER_DB,
//   password : process.env.PASS_DB
// };
var connection = {
  host     : '127.0.0.1',
  user     : 'root',
  password : 1234
};
sqlFile = __dirname +  '/estrutura.sql';

mysql.config(connection)
     .execFile(sqlFile, function(err, results){
        if (err) throw err;
		console.log(results);
    }).end();