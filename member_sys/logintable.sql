-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Apr 07, 2010, 09:48 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `inner`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `logintable`
-- 

CREATE TABLE `logintable` (
  `uid` bigint(20) NOT NULL auto_increment,
  `loginname` varchar(35) NOT NULL default '',
  `username` varchar(35) NOT NULL default '',
  `pass1` varchar(55) NOT NULL default '',
  `email` varchar(55) NOT NULL default '',
  `checkname` varchar(55) NOT NULL,
  `checkvalue` int(1) NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `logintable`
-- 

INSERT INTO `logintable` VALUES (1, 'admin', '管理者', 'admin', 'yeh.jiannrong@gmail.com', '', 0);

