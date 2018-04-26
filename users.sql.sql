/*
SQLyog Ultimate v12.4.1 (32 bit)
MySQL - 5.7.11 : Database - wsphp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
create database /*!32312 IF NOT EXISTS*/`wsphp` /*!40100 DEFAULT CHARACTER SET utf8 */;

use `wsphp`;

/*Table structure for table `ws_users` */

drop table if exists `ws_users`;

create table `ws_users` (
  `id` int(11) not null auto_increment,
  `name` varchar(255) character set latin1 not null,
  `lastname` varchar(255) character set latin1 not null,
  `email` varchar(255) character set latin1 not null,
  `password` varchar(255) character set latin1 not null,
  `registration` timestamp null default current_timestamp,
  `lastupdate` timestamp null default null on update current_timestamp,
  `level` int(11) not null default '1',
  primary key (`id`)
) engine=innodb auto_increment=47 default charset=utf8;

/*Data for the table `ws_users` */

insert  into `ws_users`(`id`,`name`,`lastname`,`email`,`password`,`registration`,`lastupdate`,`level`) values 
(39,'André','Luiz','andreluiz@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','2018-04-25 17:36:39','2018-04-26 11:56:25',2),
(41,'Wagner','Gomes','wagner_gcastro@hotmail.com','81dc9bdb52d04dc20036dbd8313ed055','2018-04-26 08:15:00','2018-04-26 15:25:53',7),
(44,'Roberto','Silva','roberto@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','2018-04-26 16:01:00','2018-04-26 16:01:00',1),
(45,'Maria','Francisca','maria@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','2018-04-26 16:01:23','2018-04-26 16:01:23',2),
(46,'Jose','Maria','jose@gmail.com','81b073de9370ea873f548e31b8adc081','2018-04-26 16:01:53','2018-04-26 16:01:53',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
