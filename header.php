<?php
if (!isset($pageTitle)) $pageTitle = "System";
if (!isset($breadcrumb)) $breadcrumb = "Home";
if (!isset($pageStyle)) $pageStyle = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= htmlspecialchars($pageTitle) ?></title>

<style>
/* =========================
   GLOBAL SHARED LAYOUT CSS
========================= */
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.header {
    background: #2c3e50;
    color: #fff;
    padding: 15px 20px;
}

.system-name {
    font-size: 18px;
    font-weight: bold;
}

.breadcrumb {
    background: #8b0000;
    color: #fff;
    padding: 10px 20px;
    font-size: 14px;
}

.layout {
    display: flex;
    min-height: calc(100vh - 110px);
}

.sidebar {
    width: 220px;
    background: #102905ff;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li a {
    display: block;
    padding: 12px 20px;
    color: #fff;
    text-decoration: none;
}
.sidebar ul li i {
    width: 20px;
    margin-right: 10px;
    text-align: center;
}

.sidebar ul li a:hover {
    background: #2c3e50;
}

.content {
    flex: 1;
    padding: 20px;
}

.footer {
    background: #a11c0eff;
    color: #fff;
    text-align: center;
    padding: 10px;
}

/* =========================
   PAGE-SPECIFIC CSS
========================= */
<?= $pageStyle ?>
</style>

</head>
<body>

<header class="header">
    <div class="system-name">My PHP System</div>
</header>

<div class="breadcrumb">
    <?= htmlspecialchars($breadcrumb) ?>
</div>

<div class="layout">
