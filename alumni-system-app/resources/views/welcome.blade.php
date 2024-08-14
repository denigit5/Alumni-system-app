<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IST Alumni</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: white;
            color: #FFFFFF;
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            overflow-y: hidden;
        }

        .image {
            background-image: url('/images/ssss.png');
            background-size: cover;
            margin-top: -3rem;
            margin-bottom: 2rem;
            width: 15%;
            height: 130px;
            z-index: 1;
        }

        .content-wrapper {
            position: relative;
            height: 87vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 5rem;
            background-image: url('/images/istpic.jpg');
            background-size: cover;
            background-position: center;
            background-blend-mode: darken;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
        }

        .welcome {
            font-size: 45px;
            font-weight: 700;
            color: #D32F2F;
            margin-top: -17px;
            text-align: center;
            animation: slideIn 1s ease-out;
            z-index: 1;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .sub-heading {
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            animation: fadeIn 1s ease-out;
            z-index: 1;
        }

        .institute {
            font-size: 2.5rem;
            font-weight: 600;
            text-align: center;
            animation: slideIn 1s ease-out;
            z-index: 1;
            margin-bottom: -1rem;
        }

        .footer {
            background-color: #3E3E3E;
            color: #FFFFFF;
            text-align: center;
            padding: 2rem 0;
            width: 100%;
        }

        .footer p {
            margin: 0;
            font-weight: 500;
        }

        .footer a {
            color: #FFFFFF;
            text-decoration: none;
            border-bottom: 1px solid #FFFFFF;
            padding-bottom: 2px;
            transition: border-color 0.3s;
        }

        .footer a:hover {
            border-color: transparent;
        }

        .flex-container {
            display: flex;
            justify-content: space-around;
            margin-top: 2rem;
            width: 100%;
        }

        .section {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 40%;
            color: white;
            text-align: left;
            position: relative;
            transition: background 0.3s;
            cursor: pointer;
        }

        .section:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .section h3 {
            color: #D32F2F;
            margin: 0;
        }

        .arrow {
            position: absolute;
            right: 10px;
            top: 10px;
            width: 20px;
            height: 20px;
            background: url('data:image/svg+xml;charset=UTF-8,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23D32F2F"%3E%3Cpath d="M8 5l1.41-1.41L17 12l-7.59 8.41L8 19l5.59-5.59L8 5z"/%3E%3C/svg%3E') no-repeat center center;
            background-size: contain;
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="content-wrapper">
        <div class="image"><img src="/images/ssss.png" alt=""></div>
        <div class="overlay"></div>
        <h1 class="welcome">WELCOME</h1>
        <div class="sub-heading">To</div>
        <h2 class="institute">Institute of Software Technologies</h2>
        <h2 class="institute">Alumni System</h2>
        <img src="https://images.app.goo.gl/7MADNHTMUogd2JbBA" alt="" style="width: 300px; height: auto; margin-top: 20px;">

        <div class="flex-container">
            <div class="section" onclick="window.location='{{ route('alumni-login') }}'">
                <h3>For Alumni</h3>
                <p>
                    Welcome Alumni! This platform enables you to connect with your peers, showcase your skills, and discover exciting opportunities tailored just for you.
                </p>
                <div class="arrow"></div>
            </div>

            <div class="section" onclick="window.location='{{ route('employer-login') }}'">
                <h3>For Employers</h3>
                <p>
                    Welcome Employers! Join us in building connections with talented alumni who are ready to make an impact in the software industry and beyond.
                </p>
                <div class="arrow"></div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>Let's Connect: <a href="#">Contact Us</a></p>
    </footer>
</body>
</html>
