<?php include 'includes/header.php'; ?>

<main>
    <section class="register">
        <div class="container">
            <h1>Register</h1>
            <form action="process_register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="avatar">Profile Picture:</label>
                    <input type="file" id="avatar" name="avatar">
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>