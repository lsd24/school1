<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理系统</title>
</head>

<frameset rows="10%,*" cols="*"  border="1">
    <frame src="__URL__/header" noresize name="header"/>
    <frameset cols="10%,*">
        <frame src="__URL__/menu" noresize name="menu" target="main"/>
        <frame src="__URL__/main"  name="main"/>
    </frameset>
</frameset>
<noframes>
    <body>
    </body>
</noframes>
</html>