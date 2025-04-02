<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../includes/header.php'; 
?>

<main>
    <section class="admin">
    <div class="container">
        <h1>User Management</h1>
        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>
                <a href="edit_user.php?id=1" class="btn">Edit</a>
                <a href="delete_user.php?id=1" class="btn btn-danger">Delete</a>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
