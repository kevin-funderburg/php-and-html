<html lang="en-us">
    <head>
        <title>Table Operations</title>
    </head>

    <body>
    <?php
    include_once "table.php";
    echo "Here is an initialized table:";
    $test = new Table(array("a", "b", "c", "d"));
    $test->addRow(array(1, 2, 3, 4));
    $test->addRow(array(5, 6, 7, 8));
    $test->addRow(array(1, 5, 4, 8));
    $test->addRow(array(2, 6, 3, 7));
    $test->output();
    echo "You can manipulate this table by following these instructions:"."</br>";
    ?>
    <div>
        <p>
        <b>To Add Row:</b><br>
            Enter elements to be added in Box1 separated by comma. If you want to add elements 2, 4, 9 and 7, you
            write 2,4,9,7 in Box1.
        </p>
        <p>
            <b>To Add Associative Row:</b><br>
            Enter elements to be added in Box1 separated by comma and the heading names in Box2 in the sequence
            corresponding to the numbers added in Box1.<br> If you want to add elements 2 under heading "a" and 4 added
            under "b", you should add 2,4 in Box1 and a,b in Box2.
        </p>
        <p>
            <b>To Remove Row</b><br>
            Enter elements of the row to be deleted in Box1 separated by comma. If you want to delete the row with
            elements 2, 4, 9 and 7, you write 2,4,9,7 in Box1.
        </p>
        <p>
            <b>To Remove Associative Row</b><br>
            Enter elements of the row to be deleted in Box1 separated by comma and the heading names in Box2 in the sequence
            corresponding to the numbers written in Box1.
        </p>
        <p>
            <b>To Add Column</b><br>
            Enter the name of the new heading in <b>Box2</b> and optionally, enter the value you wish to assign to that
            column in Box1
        </p>
        <p>
            <b>To Remove Column</b><br>
            Enter the heading name of the column to be removed in <b>Box2</b>
        </p>
        <p>
            <b>To Rename Column</b><br>
            Enter the names of the old heading and new headings separated by a colon(:) in Box2. If you want to
            rename column "a" to "z" and "d" to "y" you need to add a,d:z,y in Box2.
        </p>
        <p>
            Once you've added the required information in the given boxes, select the appropriate option from the
            drop-down list and click on 'submit query'<br>
            <b>Do not add spaces preceding or following the commas or colon.<b>
        </p>

    </div>
    <form name="operations_table" action="process.html" method="post" autocomplete="off">
        <input type="text" name="box1" placeholder="Box 1" size="50">
        <input type="text" name="box2" placeholder="Box 2" size="50">
        <select name="operation">
            <option name="none" value="0">-- Select an Operation --</option>
            <option name="addRow" value="1">Add Row</option>
            <option name="addAssocRow" value="2">Add Associative Row </option>
            <option name="rmRow" value="3">Remove Row</option>
            <option name="rmAssocRow" value="4">Remove Associative Row</option>
            <option name="addCol" value="5">Add Column</option>
            <option name="rmCol" value="6">Remove Column</option>
            <option name="renameCol" value="7">Rename Column</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submit" value="submit">Submit Query</button>
    </form>

    </body>
</html>