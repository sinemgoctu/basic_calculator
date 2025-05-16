<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Calculator</title>
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
            width: 50%;
            height: 50%;
            padding: 20px;
            border-radius: 8px;
            border: 2px solid blue;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .container {
            justify-content: center;
            align-items: center;
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
            height: 50px;
            border-radius: 5px;
            border: 2px solid blue;
            padding: 0 10px;
            font-size: 16px;
        }

        select {
            border-color: blue;
            width: 50px;
            padding: 0;
            text-align: center;
        }

        input[type="number"] {
            width: 120px;
        }

        button {
            width: 100px;
            cursor: pointer;
            background-color: white;
        }

        .result {
            display: flex;
            justify-content: center;
            font-size: x-large;
            margin-top: 0;
        }

    </style>
</head>

<body>
<form method="POST">
    <h1 class="title">Basic Calculator</h1>
    <div class="container">
        <div class="form-group">
            <label>
                <input type="number" name="number1"
                       value="<?= isset($_POST['number1']) ? $_POST['number1'] : '' ?>"
                       required>
            </label>
            <label>
                <select name="operator" required>
                    <?php
                    $operators = ["+", "-", "*", "/", "%"];
                    foreach ($operators as $operator) {
                        $selected = (isset($_POST['operator']) && $_POST['operator'] === $operator) ? 'selected' : '';
                        echo "<option value=\"$operator\" $selected>$operator</option>";
                    }
                    ?>
                </select>
            </label>
            <label>
                <input type="number" name="number2"
                       value="<?= isset($_POST['number2']) ? $_POST['number2'] : '' ?>"
                       required>
            </label>
        </div>

        <div class="button-container">
            <button type="submit">Calculate</button>
        </div>
    </div>
    <p class="result">
        <?= "<br>" . calculate() ?>
    </p>


</form>
</body>
</html>

