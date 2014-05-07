
======================================EMPLOYEE==============================================================================

------- Table Structure For Job Seeker----------

CREATE TABLE `employees`(

  `ee_id` int(4) NOT NULL auto_increment,
  `ee_email` varchar(64) NOT NULL,
  `ee_password` varchar(64) NOT NULL,
  `ee_fname` varchar(30) NOT NULL,
  `ee_lname` varchar(30) NOT NULL,
  `ee_day` varchar(10) NOT NULL,
  `ee_month` varchar(10) NOT NULL,
  `ee_year` varchar(10) NOT NULL,
  `ee_gender` varchar(30) NOT NULL,
 
  `ee_address` varchar(256) NOT NULL, /*Address newly added.*/
 
  `ee_country` varchar(130) NOT NULL,
  `ee_city` varchar(30) NOT NULL,
  `ee_education` varchar(20) NOT NULL,
  `ee_master` varchar(20) NOT NULL, 
  `ee_mcode` varchar(10) NOT NULL,  
  `ee_mnumber` varchar(30) NOT NULL,
  `ee_experience` varchar(30) NOT NULL,
  `ee_skills` varchar(130) NOT NULL,
  `ee_industry` varchar(130) NOT NULL,
  `ee_certification` varchar(130) NOT NULL,
  `ee_path` varchar(130) NOT NULL,
  PRIMARY KEY  (`ee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;


CREATE TABLE `temp_employees`(

  `ee_id` int(4) NOT NULL auto_increment,
  `ee_email` varchar(64) NOT NULL,
  `ee_password` varchar(64) NOT NULL,
  `ee_fname` varchar(30) NOT NULL,
  `ee_lname` varchar(30) NOT NULL,
  `ee_day` varchar(10) NOT NULL,
  `ee_month` varchar(10) NOT NULL,
  `ee_year` varchar(10) NOT NULL,
  `ee_gender` varchar(30) NOT NULL,
  `ee_country` varchar(130) NOT NULL,
  `ee_city` varchar(30) NOT NULL,
  `ee_education` varchar(20) NOT NULL,
  `ee_master` varchar(20) NOT NULL, 
  `ee_mcode` varchar(10) NOT NULL,  
  `ee_mnumber` varchar(30) NOT NULL,
  `ee_experience` varchar(30) NOT NULL,
  `ee_skills` varchar(130) NOT NULL,
  `ee_industry` varchar(130) NOT NULL,
  `ee_certification` varchar(130) NOT NULL,
  `ee_path` varchar(130) NOT NULL,
  
  `confirm_code` varchar(65) NOT NULL default '',
    
  PRIMARY KEY  (`ee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;


























INSERT INTO `employees` (`ee_id`,`ee_email`,`ee_password`,`ee_fname`,`ee_lname`,`ee_day`,`ee_month`,`ee_year`,`ee_gender`,`ee_country`,`ee_city`,
`ee_education`,`ee_master`,`ee_mcode`,`ee_mnumber`,`ee_experience`,`ee_skills`,`ee_industry`,`ee_certification`,`ee_path`) VALUES
(1,'dileep@gmail.com','password','dileep','b','10','03','1992','male','india','kkm','btech','mtech','91','9496097335','2','web designing','it','redhat,ccna','uploads/');

==========================================EMPLOYER=================================================================================
CREATE TABLE `employers` (
    `er_id` int(6) NOT NULL auto_increment,
    `er_company` varchar(128) NOT NULL,
    `er_companytype` varchar(128) NOT NULL,
	`er_sector` varchar(128) NOT NULL,
	`er_category` varchar(128) NOT NULL,
	`er_companyemail` varchar(64) NOT NULL,
	`er_password` varchar(64) NOT NULL,
	`er_address` varchar(255) NOT NULL,
	`er_city` varchar(128) NOT NULL,
	`er_state` varchar(64) NOT NULL,
	`er_country` varchar(128) NOT NULL,
	`er_website` varchar(128) NOT NULL,
	`er_TCCode` varchar(64) NOT NULL,
	`er_TACode` varchar(64) NOT NULL,
	`er_TNumber` varchar(64) NOT NULL,
	`er_title` varchar(64) NOT NULL,
	`er_fname` varchar(64) NOT NULL,
	`er_lname` varchar(64) NOT NULL,
	`er_designation` varchar(64) NOT NULL,
	`er_contactemail` varchar(64) NOT NULL,
	`er_MCCode` varchar(64) NOT NULL,
	`er_MNumber` varchar(64) NOT NULL,
	`er_active` int(1) NOT NULL,
	 PRIMARY KEY  (`er_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;


INSERT INTO `employers` (`er_id`,`er_company`,`er_companytype`,`er_sector`,`er_category`,`er_companyemail`,`er_password`,`er_address`,`er_city`,`er_state`,`er_country`,
`er_website`,`er_TCCode`,`er_TACode`,`er_TNumber`,`er_title`,`er_fname`,`er_lname`,`er_designation`,`er_contactemail`,`er_MCCode`,`er_MNumber`) VALUES
(1,'google','agency','corporate','IT','dileep@gmail.com','dileep1234','American city,new york,pb no:56','new york','america','USA','www.google.com','000','132',
'66339955','Mr.','Dileep','B','CEO','dileep@gmail.com','91','9496097335');

=======================Job Table============================================

CREATE TABLE `jobs` (
  `j_id` int(4) NOT NULL auto_increment,
  `j_er_id` int(30) NOT NULL,
  `j_category` varchar(128) NOT NULL,
  `j_owner_name` varchar(128) NOT NULL,
  `j_title` varchar(128) NOT NULL,
  `j_hours` float(3,1) NOT NULL,
  `j_salary` int(64) NOT NULL,
  `j_date` date NOT NULL,
  `j_sector` varchar(128) NOT NULL,
  `j_type` varchar(128) NOT NULL,
  `j_country` varchar(128) NOT NULL,
  `j_vacancy` int(10) NOT NULL,
  `j_company` varchar(128) NOT NULL,      
  `j_experience` int(7) NOT NULL,
  `j_description` varchar(300) NOT NULL,
  `j_city` varchar(128) NOT NULL,
  `j_active` int(1) NOT NULL default '0',
   PRIMARY KEY  (`j_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;


===========================APPPLICANTS=================================================

CREATE TABLE `applicants` (
  `a_id` int(4) NOT NULL auto_increment,
  `a_ee_id` int(4) NOT NULL,
  `a_j_id` varchar(30) NOT NULL,
  `a_er_id` varchar(30) NOT NULL,
  PRIMARY KEY  (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;


============================CONTACT============================================== 

CREATE TABLE `contact` (
  `cont_id` int(4) NOT NULL auto_increment,
  `cont_fnm` varchar(30) NOT NULL,
  `cont_email` varchar(64) NOT NULL,
  `cont_query` varchar(300) NOT NULL,
  PRIMARY KEY  (`cont_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;


=====================================VALIDITY====================================

CREATE TABLE `validity`(
  `employer_id` int(4) NOT NULL auto_increment,
  `plan` varchar(30) NOT NULL,
  `number` int(4) NOT NULL,
  `validity1` int(4) NOT NULL,
  `downloads` int(4) NOT NULL,
  `validity2` date NOT NULL, 
PRIMARY KEY  (`employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;

=================================ADMIN===========================================

CREATE TABLE `admin`(
  `username` varchar(128) NOT NULL, 
  `password` varchar(128) NOT NULL,
PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=100;
==================================================================================






