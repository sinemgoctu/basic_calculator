<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background: cornflowerblue;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        input[type="number"], select, button {
            height: 40px;
            border-radius: 5px;
            border: 2px solid blue;
            padding: 0 10px;
            font-size: 16px;
        }

        select {
            border-color: gray;
            width: 40px;
            padding: 0;
            text-align: center;
        }

        input[type="number"] {
            width: 80px;
        }

        button {
            width: 100px;
            cursor: pointer;
            background-color: white;
        }
    </style>
</head>

<body>
<form method="POST">
    <div class="form-group">
        <label>
            <input type="number" name="number1" required>
        </label>
        <label>
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
        </label>
        <label>
            <input type="number" name="number2" required>
        </label>
    </div>

    <div class="button-container">
        <button type="submit">Calculate</button>
    </div>

    <?= "<br>" . calculate() ?>
</form>
</body>
</html>

