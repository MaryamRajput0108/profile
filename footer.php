<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Footer Styling */
        footer {
            background: linear-gradient(135deg, rgb(23, 8, 78), rgb(65, 4, 4)); /* Dark Gradient */
            padding: 10px 20px; /* Reduced height for footer */
            text-align: center;
            position: relative;
            z-index: 10;
            border-top: 2px solid #ff4d00; /* Orange Border */
        }

        /* Footer Container */
        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            gap: 30px;
            flex-wrap: wrap;
        }

        /* Footer Section */
        .footer-section {
            flex: 1;
            min-width: 150px;
            margin: 10px;
            color: #ddd;
            transition: all 0.3s ease;
            padding: 5px;
        }

        .footer-section:hover {
            transform: translateY(-5px);
            opacity: 0.8;
        }

        .footer-section h3 {
            font-size: 20px;
            color: #ff4d00;
            margin-bottom: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .footer-section p, .footer-section ul li a {
            font-size: 14px;
            line-height: 1.5;
            color: #bbb;
            transition: color 0.3s ease;
        }

        .footer-section p:hover, .footer-section ul li a:hover {
            color: #ff4d00; /* Hover effect for text */
        }

        /* Links Styling */
        .footer-section ul {
            list-style: none;
            margin-top: 10px;
            padding: 0;
        }

        .footer-section ul li {
            padding: 5px 0;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s ease;
        }

        .footer-section ul li a:hover {
            transform: translateX(5px); /* Hover effect for links */
        }

        /* Social Icons */
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 10px;
        }

        .social-icons a {
            font-size: 30px; /* Increased size of icons */
            color: #bbb;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.3); /* Slightly larger hover effect */
            color: #ff4d00; /* Orange effect on hover */
        }

        /* Footer Bottom */
        .footer-bottom {
            font-size: 12px;
            color: #bbb;
            margin-top: 10px;
            letter-spacing: 1px;
            text-align: center;
        }

        .footer-bottom a {
            color: #ff4d00;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-bottom a:hover {
            color: #fff;
        }

        /* Media Query for Mobile */
        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                text-align: center;
            }

            .footer-section {
                margin-bottom: 10px; /* Reduced space */
                width: 100%; /* Make sections full width on mobile */
            }

            .footer-section h3 {
                font-size: 18px;
            }

            .social-icons {
                flex-direction: column;
                margin-top: 10px;
            }

            .social-icons a {
                font-size: 25px;
            }

            .footer-bottom {
                font-size: 10px;
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    <footer>
        <div class="footer-container">
            <!-- About Section -->
            <div class="footer-section about">
                <h3>Maryam Rajput</h3>
                <p>Web & App Developer | Transforming ideas into real-world solutions.</p>
            </div>

            <!-- Quick Links Section -->
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div class="footer-section social-icons">
                <a href="https://www.facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.github.com" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <p>&copy; 2025 <strong>Maryam Rajput</strong> | All Rights Reserved | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>
</body>
</html>
