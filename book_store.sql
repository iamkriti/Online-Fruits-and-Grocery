

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE IF NOT EXISTS `book` (
  `b_id` int(5) NOT NULL,
  `b_nm` varchar(60) NOT NULL,
  `b_cat` varchar(20) NOT NULL,
  `b_price` int(5) NOT NULL,
  `b_img` longtext NOT NULL
  
);



INSERT INTO `book` (`b_id`,`b_nm`, `b_cat`, `b_price`,`b_img`) VALUES
(1,'Red apple', 'Fruit' ,100,'images/red apple.png'),
(2,'Green Apple','Fruit' ,200,'images/green apple.png'),
(3,'Green Grapes', 'Fruit' ,150,'images/grapes.png'),
(4,'Black Grapes','Fruit' , 300,'images/grapes1.png'),
(5,' Mango', 'Fruit' ,400,'images/mango.png'),
(6, 'Avocado','Fruit' , 150,'images/avocado.png'),
(7, 'Watermelon','Fruit' , 150,'images/watermelon.png'),
(8, 'Pineapple ','Fruit' , 150,'images/pineapple.png'),
(9, 'Litchi','Fruit' , 150,'images/litchi.png'),
(10, 'Strawberry','Fruit' , 150,'images/strawberry.png'),
(11, 'Banana','Fruit' , 150,'images/banana.png'),
(12, 'Guava','Fruit' , 150,'images/guava.png')
