<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Braised Noodles with: <select name="noodle">
            <option>crab meat</option>
            <option>mushroom</option>
            <option>barbecued pork</option>
            <option>shredded ginger and green onion</option>
        </select>
        <br/>
        Sweet: <select name="sweet []" multiple>
            <option value="puff"> Sesame Seed Puff
            <option value="square"> Coconut Milk Gelatin Square
            <option value="cake"> Brown Sugar Cake
            <option value="ricemeat"> Sweet Rice and Meat
        </select>
        <br/>
        Sweet Quantity: <input type="text" name="sweet_q">
        <br/>
        <input type="submit" name="submit" value="Order">
    </form>
    <?php print_r($_POST)?>
</body>
</html>