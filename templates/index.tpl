<!DOCTYPE html>
<html lang="en">
<head>
    {include 'header.tpl'}
    {block name=head}{/block}
</head>
<body>
<div class="wrapper">

    <!-- Include Side-Navbar/top-navbar if exists -->
    {* include 'side-navbar.tpl' *}

    <!-- Page Content -->
    <div id="content">
        <!-- Top Navbar -->
        {* include 'top-navbar.tpl' *}
        {block name=content}{/block}
    </div>
</div>
</body>
</html>