<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: 0;
        }
    </style>
</head>
<body>

<h1>Contact</h1>

<form action="index.php?page=getContact" method="post">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" required>

    <label for="email">Email :</label>
    <input type="email" name="email" required>

    <label for="mdp">Mot de passe :</label>
    <input type="password" name="mdp" required>

    <button type="submit">Envoyer</button>
</form>

<div style="width: 100%; height: 400px;">
    <iframe
        src="https://maps.google.com/maps?q=48.78926954468816,2.3636654693114982&output=embed"
        allowfullscreen
    ></iframe>
</div>

</body>
</html>
