# AllAboutGhorBari.net
Made for CSE-3100 Web Programming Laboratory project
To get it working,
1.Make database named 'website'.


2.Creation table query(copy it to xampp)-

CREATE TABLE `users` (
 `id` int(10) NOT NULL AUTO_INCREMENT,
 `username` varchar(100) NOT NULL,
 `email` varchar(100) NOT NULL,
 `password` varchar(100) NOT NULL,
 `user_type` varchar(100) NOT NULL,
 `random_num` int(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1


CREATE TABLE `buy_houses` (
 `buy_id` int(10) NOT NULL AUTO_INCREMENT,
 `owner_name` varchar(50) NOT NULL,
 `types` varchar(50) NOT NULL,
 `price` int(50) NOT NULL,
 `address` varchar(255) NOT NULL,
 `latitude` varchar(20) NOT NULL,
 `longitude` varchar(20) NOT NULL,
 `image_id` varchar(10) NOT NULL,
 PRIMARY KEY (`buy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1


3.populate the table with data .

4.enjoy!
