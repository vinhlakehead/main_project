<?php include 'includes/header.php'; ?>

<main>
    <section class="login">
        <div class="container">
            <h1>Login</h1>
            <form action="process_login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>