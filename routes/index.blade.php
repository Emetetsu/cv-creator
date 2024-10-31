<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            color: #2c3e50;
            margin: 0;
        }

        .header .fa-user {
            font-size: 150px;
            color: #2c3e50;
        }

        h2 {
            color: #34495e;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 5px;
            margin-top: 30px;
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
            text-align: justify;
        }

        ul {
            list-style-type: square;
            margin: 10px 0;
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        ul li::marker {
            color: #3498db;
        }

        li {
            padding-left: 10px;
        }

        ul li {
            line-height: 1.5;
        }

        hr {
            border: none;
            height: 2px;
            background-color: #2c3e50;
            margin: 20px 0;
        }

        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
            }

            p, ul li {
                font-size: 14px;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .header .fa-user {
                margin-top: 10px;
                font-size: 80px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>{{ $resume->name }}</h1>
            <i class="fas fa-user"></i>
        </div>
        <p>Email: {{ $resume->email }}</p>
        <p>Phone: {{ $resume->phone }}</p>

        <hr>

        <p>{{ $resume->summary }}</p>
        
        <h2>Education</h2>
        <ul>
            @foreach(explode(',', $resume->education) as $edu)
                <li>{{ trim($edu) }}</li>
            @endforeach
        </ul>

        <h2>Experience</h2>
        <ul>
            @foreach(explode(',', $resume->experience) as $exp)
                <li>{{ trim($exp) }}</li>
            @endforeach
        </ul>

        <h2>Skills</h2>
        <ul>
            @foreach(explode(',', $resume->skills) as $skill)
                <li>{{ trim($skill) }}</li>
            @endforeach
        </ul>
    </div>

</body>
</html>
