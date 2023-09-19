<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        /* Center the content vertically and horizontally */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .title {
            font-size: 28px;
            color: #333;
        }

        .title span {
            color: #3ac946;
        }

        .content {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }
        /* Add more styles as needed for your content */

    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">MUSAT <span>CAR</span></h1>
        <p class="content">Client Name: {{ $data['user_name'] }}</p>
        <p class="content">Client Phone: {{ $data['User_phone'] }}</p>
        <p class="content">Client Car: {{ $data['Cars_info'] }}</p>
        <p class="content">Pickup Date: {{ $data['pickup_date'] }}</p>
        <p class="content">Return Date: {{ $data['return_date'] }}</p>
        <!-- You can include any other content you need here -->
    </div>
</body>
</html>