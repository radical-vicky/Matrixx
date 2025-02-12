<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../matrixx/static/css/styles.css">
    <link rel="stylesheet" href="../../matrixx/static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .footer-content {
            display: flex;
            justify-content: space-between;
            padding: 10px 30px;
        }
        .contact-info, .quick-links {
            flex: 1;
            margin-right: 20px;
        }
        .quick-links {
            text-align: right;
        }
        .quick-links ul {
            list-style-type: none;
            padding: 0;
        }
        .quick-links ul li {
            margin-bottom: 5px;
        }
        .social-links {
            text-align: center;
            margin-top: 20px;
        }
        .social-links a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
        }
        .social-links a:hover {
            color: orange;
        }
    </style>
</head>
<body>
    <footer style="background-color: #354459; color: white; font-family: sans-serif;">
        <div class="footer-content">
            <div class="contact-info">
                <h3 style="text-align: left; color: white;">Contact Us</h3>
                <p><strong>Email:</strong> <a href="mailto:entreprenuerridicular@gmail.com" style="text-decoration: none; color: orange">support@ourplatform.com</a></p>
                <p><strong>Phone:</strong> <a href="tel:+254717140342" style="color: orange; text-decoration: none">+123 456 7890</a></p>
            </div>
            <div class="quick-links">
                <h3 style="color: white;">Quick Links</h3>
                <ul>
                    <li><a href="index.php" style="text-decoration: none; color: white">Home</a></li>
                    <li><a href="privacy.php" style="text-decoration: none; color: white">Privacy Policy</a></li>
                    <li><a href="terms.php" style="text-decoration: none; color: white">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="social-links">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="mailto:support@ourplatform.com"><i class="fas fa-envelope"></i></a>
        </div>
        <div style="text-align: center; padding-bottom: 10px;">
            <p>&copy; 2025 Your Name or Company. All rights reserved.</p>
        </div>
    </footer>
    <script src="../../matrixx/static/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>