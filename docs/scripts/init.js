var ini     = require('ini'),
    fs      = require('fs');

    var config = ini.parse(fs.readFileSync('./admin/config.ini', 'utf-8'))


// var connection = {
//   host     : '127.0.0.1',
//   user     : 'root',
//   password : 1234
// };
// sqlFile = __dirname +  '/estrutura.sql';

// mysql.config(connection)
//      .execFile(sqlFile, function(err, results){
//         if (err) throw err;
// 		console.log(results);
//     }).end();