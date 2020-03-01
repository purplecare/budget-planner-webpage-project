Table,"Create Table"
spendingentry,"CREATE TABLE `spendingentry` (
  `spendingentryid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) DEFAULT NULL,
  `itemname` varchar(200) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`spendingentryid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4"
