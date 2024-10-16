<!DOCTYPE html>
<html>
<head>
    <title>
        Calculator
    </title>
    </head>
        <body>

     
        <h1> Calculator </h1>
        </body>
<form action ="calc.php" method="POST">
    <input type="number" name="num1" placeholder="Number1">
    <input type="number" name="num2" placeholder="Number2">
    <select name="operations" required>
        <option  value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option  value="div">Division</option>
        <option  value="mul">Multiplication</option>
    </select>
    <button type="submit" name="submit">Calculate</button>
</form>
    </head>
</html>


