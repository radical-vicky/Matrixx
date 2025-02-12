<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <link rel="stylesheet" href="Matrixx/assets/css/style.css">
    <!-- Optional: FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #354459;
            color: white;
            padding: 10px 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo h1 {
            margin: 0;
            margin-left: 10px;
        }
        .logo h1 a {
            color: white;
            text-decoration: none;
        }
        .logo img {
            vertical-align: middle;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            transition: background-color 0.3s, color 0.3s;
        }
        nav ul li a:hover {
            background-color: darkorange;
            color: white;
        }
        .btn-login, .btn-signup {
            background-color: orange;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-login:hover, .btn-signup:hover {
            background-color: darkorange;
            color: white;
        }
    </style>
      <link rel="icon" href="../../matrixx/static/images/scylla.jpg">
      <link rel="stylesheet" href="../../matrixx/assets/images/scylla.jpg">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="../../matrixx/assets/images/scylla.jpg" alt="Logo" width="50" height="50">
                <h1><a href="index.php">Website</a></h1>
            </div>
            <!-- Navbar with Login/Signup -->
            <nav>
                <ul>
                    <li><a href="modules/shares.php">Shares</a></li>
                    <li><a href="modules/remotask.php">Remotask</a></li>
                    <li><a href="modules/games.php">Games</a></li>
                    <li><a href="modules/blogs.php">Blogs</a></li>
                    <li><a href="modules/forex.php">Forex</a></li>
                    <li><a href="modules/online-writing.php">Online-Writing</a></li>
                    <li><a href="modules/hookups.php">Hookups</a></li>
                    <li><a href="modules/shop.php">Shop</a></li>
                    <li><a href="modules/loans.php">Loans</a></li>
                    <li><a href="modules/whatsapp-marketing.php">WhatsApp Marketing</a></li>
                    <li><a href="modules/reward-center.php">Reward Center</a></li>
                    <li><a href="#" class="btn-login" onclick="openLoginModal()">Login</a></li>
                    <li><a href="#" class="btn-signup" onclick="openSignupModal()">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <script src="assets/js/script.js"></script>
</body>

</html>