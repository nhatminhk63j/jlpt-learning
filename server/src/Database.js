const sql = require('mysql');
var mysql = require('mysql');

var conn = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'jlptproject'
});
//kết nối.
conn.connect(function(err) {
    //nếu có nỗi thì in ra
    if (err) throw err.stack;
    //nếu thành công
    console.log('ket noi thanh cong');
});

module.exports = conn;