<?
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] == "") {
	header('Location: index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
Simple PHP / MySQL Radio Request System
Copyright 2006 Doug Vanderweide
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Menu</title>
</head>
<body>
<h1>Admin Menu</h1>
<h3>DJ Submenu</h3>
<blockquote>
  <p><a href="dj_add.php">Add a new DJ </a></p>
  <p><a href="dj_list.php">View, edit or delete current DJ record</a> </p>
</blockquote>
<h3>Admin Submenu</h3>
<blockquote>
  <p><a href="admin_add.php">Add a new admin</a></p>
  <p><a href="admin_list.php">View, edit or delete current admin</a>  </p>
</blockquote>
<p>&nbsp;</p>
</body>
</html>
