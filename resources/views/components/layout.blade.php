<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Webpage')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        * {
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        body {
            display: flex;
            flex-direction: column;
            height: 100vh; /* Ensure full height of viewport */
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            font-family: Arial, sans-serif;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .navbar {
            background: crimson;
            padding: 10px 15px;
        }

        .navdiv {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo a {
            font-size: 35px;
            font-weight: 600;
            color: white;
        }

        .navbar ul {
            display: flex;
            align-items: center;
        }

        .navbar li {
            list-style: none;
            margin-right: 25px;
        }

        .navbar li a {
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .navbar button {
            background-color: black;
            border-radius: 10px;
            padding: 10px;
            width: 90px;
            border: none;
            color: white; /* Button text color */
            font-weight: bold; /* Button text style */
            font-size: 15px;
            cursor: pointer; /* Pointer cursor for button */
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin: 20px 0; /* Margin to separate from navbar and footer */
        }

        .container {
            max-width: 600px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Reset styles for container's UL */
        .container ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .container li {
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background: #f1f1f1;
            color: #333;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="#">CodingNinja</a></div>
                <ul>
                    <li><a href="http://127.0.0.1:8000/About">About</a></li>
                    <li><a href="#">Content</a></li>
                    <li><a href="#">Lab Acts</a></li>
                    <li>
                        
                        <button><a href="/ageverification">CV</a></button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 My Personal Website. All Rights Reserved.</p>
    </footer>
</body>
</html>
