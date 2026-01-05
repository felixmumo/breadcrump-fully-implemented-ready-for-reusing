<?php
$pageTitle  = "Users";
$breadcrumb = "Home / Users";

$pageStyle = "
h2 { color:#1a237e; }
table { width:60%; border-collapse:collapse; }
th, td { border:1px solid #444; padding:8px; }
";

include "header.php";
include "sidebar.php";
?>

<h2>Users</h2>
<p>Registered system users.</p>

<table>
<tr><th>ID</th><th>Name</th><th>Role</th></tr>
<tr><td>1</td><td>Admin</td><td>Administrator</td></tr>
<tr><td>2</td><td>John</td><td>User</td></tr>
</table>

<?php include "footer.php"; ?>
