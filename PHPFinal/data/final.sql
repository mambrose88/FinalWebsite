DROP DATABASE IF EXISTS BridlesDB;
CREATE DATABASE IF NOT EXISTS BridlesDB;
USE BridlesDB;

/* Table structure */

CREATE TABLE bridles (
  id int PRIMARY KEY auto_increment,
  Name CHAR(75),
  Price DEC(5,2),
  Descr TEXT,
  thmb CHAR(50),
  Lg CHAR(50)
) ENGINE=InnoDB;

/* data for table */

INSERT INTO bridles 
 (id, Name, price, Descr, thmb, Lg) 
	VALUES 
	(1, 'NAB Stubben Event Bridle', 269.99, 'This bridle is strictly for dressage purposes only. 
					     It holds the horses head in line and prevents the horse from tossing its head.
					     This Stubben Event Bridle is a well threaded and put together bridle.' , 'thmb.8th.jpg' , 'Lg.8th.jpg'),
	(2, 'Warendorf Deluxe Dressage Bridle', 121.95, 'This is a simpler version of a dressage bridle. Althought it lacks the noseband, it is still a very sturdy bridle.
							 This bridle is a simple black, like the dressage bridles. It has the browband that runs underneath the foretop.' , 'thmb.5th.jpg' , 'Lg.5th.jpg'),
	(3, 'Suffolk Premier Fancy Stiched Bridle' , 279.99 , 'Again, this bridle is strictly for dressage purposes only. 
					     		      It has a noseband that just simply is there for decoration. The browband above the eyes is a simple
							      black and serves as the purpose of holding the bridle in place. This bridle comes in a simple threaded black.' , 'thmb.4th.jpg ' , 'Lg.4th.jpg'),
	(4, 'Need-a-Hand Simple Halter', 12.99, 'Want something to simply take your horse or pony out for a walk? This is the product for you. This is your simple
				     halter for just easygoing walks. It comes in many different colors and has just the simple noseband with the band that goes up behind the ears.' , 'thmb.2nd.jpg' , 'Lg.2nd.jpg'),
	(5, 'Weaver Backetweave Flat Sliding Ear Headstall', 53.95, 'This bridle, or in western terms headstall, was used in the mexican traditions for horses. Instead of the browband
								     and noseband, it uses a simply band that goes around one ear. This, and the bands that come down the cheek bones, are the only thing holding this bridle
								     onto your horse. Although it may seem unstable, it is a very sturdy bridle.' , 'thmb.3rd.jpg' , 'Lg.3rd.jpg'  ),
	(6, 'Weaver Quick Change Browband Headstall', 53.95 , 'This bridle, or in western terms headstall, was used in the spanish traditions for horses. This headstall is used for more of a decoration because of some of the
                                                               browband decoration. The tassel on the browband is a nice touch when watching horses to the spanish walk.' , 'thmb.6th.jpg' , 'Lg.6th.jpg'),
	(7, 'Need-a-Hand Simple Foal Halter', 10.99 , 'This halter serves only as the purpose to halter train your foals. It shows the foals that its ok to follow you. This halter is very well
					   threaded because foals can be very spunky and hardheaded.' , 'thmb.10th.jpg' , 'Lg.10th.jpg'),
	(8, 'Weaver Desert Blossom Browband Headstall', 39.95 , 'This bridle, or in western terms headstall, is used in special western shows for horses. Instead of the browband
								     and noseband, western bridles very rarely have nosebands and browbands. This bridle does have the browband and noseband, so it makes it verys sturdy. 
								     Most western bridles come in only a brown or tan color.' , 'thmb.1st.jpg' , 'Lg.1st.jpg'),
	(9, 'Need-a-Hand Simple Rope Halter', 144.95 , 'The rope halter is a more effective way to halter break your horse. What makes this halter effective is the knots in it. The knots are strategically placed
					    on the halter because where the horses pressure points are, is where the knots sit. These pressure points do not hurt the horse, but simply show the horse
				            that it is ok to have this halter on them.' , 'thmb.9th.jpg' , 'Lg.9th.jpg' ),
	(10,'Weaver Knotted Browband Headstall', 40.95 , 'This headstall is a decorative one. The browband on this headstall is very decorative, the design came from some of the indian decorations. ' , 'thmb.7th.jpg' , 'Lg7th.jpg');

/* SHOW DATA: */

SELECT * FROM bridles;

CREATE TABLE users_table(
	user_id INT PRIMARY KEY AUTO_INCREMENT,
	username CHAR(20),
	password CHAR(20),
	privilege ENUM('normal','admin','super')
);

INSERT INTO users_table
		(user_id ,username ,password ,privilege)
VALUES
		(1, 'kenzie', 'bridles', 'admin'),
		(2, 'Mr Mirenzi', 'class', 'normal');
SELECT * FROM users_table;