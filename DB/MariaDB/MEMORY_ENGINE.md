# MEMORY Storage Engine

issue : table full


https://computingforgeeks.com/how-to-install-and-configure-cacti-on-ubuntu-18-04/

https://stackoverflow.com/questions/9842720/how-to-make-the-mysql-memory-engine-store-more-data

直接設定的方式怎樣都不行

後來找到寫入設定檔的方式

vim /etc/mysql/mariadb.conf.d/50-server.cnf


[mysqld]
tmp_table_size=1G
max_heap_table_size=1G

systemctl restart mysqld.service


就能用了

select @@tmp_table_size; 可以檢查各項設定

以下這種結構，1 G ram 約可以寫入438588 筆
+--------------+--------------+------+-----+---------+----------------+
| Field        | Type         | Null | Key | Default | Extra          |
+--------------+--------------+------+-----+---------+----------------+
| id           | bigint(20)   | NO   | PRI | NULL    | auto_increment |
| a            | bigint(20)   | NO   |     | NULL    |                |
| b            | bigint(20)   | NO   |     | NULL    |                |
| c            |  bigint(20)  | NO   | MUL | NULL    |                |
| d            | bigint(20)   | NO   |     | NULL    |                |
| e            | bigint(20)   | NO   |     | NULL    |                |
| f            | int(11)      | NO   |     | 0       |                |
| g            | int(11)      | NO   |     | 0       |                |
| h            | varchar(256) | NO   |     | NULL    |                |
| i            | varchar(256) | NO   |     | NULL    |                |
| j            | varchar(256) | NO   |     |         |                |
| k            | int(11)      | NO   |     | 0       |                |
+--------------+--------------+------+-----+---------+----------------+

小補充：SHOW TABLE STATUS FROM db LIKE 'table’\G 可以用縱向的方式查看資料
