SET NAMES UTF8;
DROP DATABASE IF EXISTS cate;
CREATE DATABASE cate CHARSET=UTF8;

USE cate;
/*用户信息表*/
CREATE TABLE user(
  uid INT PRIMARY KEY AUTO_INCREMENT,
  uname VARCHAR(32) UNIQUE NOT NULL,
  upwd VARCHAR(32),
  email VARCHAR(64),
  phone VARCHAR(16),
  avatar VARCHAR(128) DEFAULT 'img/avatar/default.png',
  user_name VARCHAR(32),
  gender INT			#0-女  1-男
);
INSERT INTO user VALUES(NULL,'klaus','123456','klaus@163.com','1350123467','img/avatar/default.png','克劳斯',1);
INSERT INTO user VALUES(NULL,'darly','123456','darly@163.com','1350123468','img/avatar/default.png','达尔',1);
INSERT INTO user VALUES(NULL,'judith','123456','judith@163.com','1350123469','img/avatar/default.png','朱迪斯',0);
INSERT INTO user VALUES(NULL,'kety','123456','kety@163.com','1350123460','img/avatar/default.png','凯迪',0);
/*食品信息表*/
CREATE TABLE food(
	fid INT PRIMARY KEY AUTO_INCREMENT,
	fname VARCHAR(32) UNIQUE NOT NULL,
	ftype VARCHAR(64),
	fdetail VARCHAR(164),
	fimg VARCHAR(128)
);

/*订单表*/

CREATE TABLE user_order(
	order_id INT PRIMARY KEY AUTO_INCREMENT,
	fid INT,
	uid INT
);
/*详情页的食物小图片*/
CREATE TABLE food_pic(
	pid INT PRIMARY KEY AUTO_INCREMENT,
	simg VARCHAR(128),
	foodid INT,
	FOREIGN KEY(foodid) REFERENCES food(fid)
)