CREATE TABLE `users` (
    `id` int(30) NOT NULL AUTO_INCREMENT, 
    `username` varchar(255) NOT NULL, 
    `l_name` varchar(255) NOT NULL, 
    `f_name` varchar(255) NOT NULL, 
    `mail` varchar(255) NOT NULL, 
    `password` varchar(255) NOT NULL, 
    PRIMARY KEY(`id`)

);