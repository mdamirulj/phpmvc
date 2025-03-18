<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Users List</h1>
    <table border="1">
        <tr><th>ID</th><th>Name</th><th>Email</th></tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
