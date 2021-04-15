INSERT INTO usuari VALUES ('SysAdmin',MD5('Qwerty1'),'System','Administrator','GONGsysAdmin@gmail.com','636589632',TRUE);

CREATE USER IF NOT EXISTS 'SysAdmin'@'localhost' IDENTIFIED BY 'Qwerty1';
GRANT ALL ON gong.* TO 'SysAdmin'@'localhost';
