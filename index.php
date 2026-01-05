<?php
$pageTitle  = "Dashboard";
$breadcrumb = "Home / Dashboard";

$pageStyle = "
h1 { color:#2c3e50; }
table { width:100%; border-collapse:collapse; margin-top:15px; }
th, td { border:1px solid #ccc; padding:10px; }
th { background:#ecf0f1; }
";

include "header.php";
include "sidebar.php";
?>

<h1>Dashboard</h1>
<p>System overview and summary.</p>

<table>
<tr><th>Module</th><th>Status</th></tr>
<tr><td>Users</td><td>Active</td></tr>
<tr><td>Orders</td><td>Running</td></tr>
<tr><td>Reports</td><td>Available</td></tr>
</table>

<?php include "footer.php"; ?>
