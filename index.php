<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MAIL SENDER</title>
    <style>
        .form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .email{
            width: 300px;
            height: 50px;
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 5px 5px;
            font-size: 20px;
        }
        .mesaj{
            width: 300px;
            height: 200px;
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 15px;
        }
        .buton{
            width: 300px;
            height: 50px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .buton:hover{
            background-color: darkgray;
            color: black;
        }
        body{
            background-color: #eee;

        }
    </style>
</head>
<body>

    <form action="mailsend.php" method="post" class="form">
        <input type="email" name="email" placeholder="email" class="email">
        <textarea name="message" id="" cols="30" rows="10" class="mesaj"></textarea>
        <button type="submit" class="buton">Gönder</button>
    </form>
</body>
</html>