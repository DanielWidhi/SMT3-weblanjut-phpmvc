<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Crew Baru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            max-width: 400px;
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Tambah Crew Baru</h1>
    <form action="/crew/store" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="role">Peran:</label>
        <select id="role" name="role" required>
            <option value="">Pilih Peran</option>
            <option value="Founder">Founder</option>
            <option value="Editor">Editor</option>
            <option value="Photographer">Photographer</option>
            <option value="Videographer">Videographer</option>
        </select>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
