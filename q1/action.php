<!DOCTYPE html>
<html lang="en">
    <body>
    <?php

        echo "<b>action.php</b>";
    // include_once "table.php";
    // echo "<b>Table Before Operation</b>";
    // $test = new Table(array("a", "b", "c", "d"));
    // $test->addRow(array(1, 2, 3, 4));
    // $test->addRow(array(5, 6, 7, 8));
    // $test->addRow(array(1, 5, 4, 8));
    // $test->addRow(array(2, 6, 3, 7));
    // $test->output();
    // echo "<b>Table After Operation:</b>"."</br>";
    // if(isset($_POST['submit'])) {
    //     $op = $_POST['operation'];
    //     $op = intval($op);
    //     $box1 = $_POST['box1'];
    //     $box2 = $_POST['box2'];

    //     if($box1 != ""){
    //         $box1 = array_map('intval', explode(',', $box1));
    //     }
    //     if($op != 7) {
    //         $box2 = explode(',', $box2);
    //     }
    //     switch ($op) {
    //         case 0:
    //             echo "You need to select an operation";
    //             break;
    //         case 1:
    //             if($box1 == "") {
    //                 exit('No elements Provided');
    //             }
    //             if($test->addRow($box1)) {
    //                 echo "</br>".'Added the Row:'."</br>";
    //             }
    //             $test->output();
    //             break;
    //         case 2:
    //             if($box1 == "") {
    //                 exit('No elements Provided');
    //             }
    //             $row = array();
    //             assert(count($box1) == count($box2), 'Number of headings and the number of
    //             elements do not match.');
    //             for ($x=0; $x<count($box1); $x++) {
    //                 $row += [$box2[$x] => $box1[$x]];
    //             }
    //             $test->addRowAssocArray($row);
    //             $test->output();
    //             break;
    //         case 3:
    //             if($box1 == "") {
    //                 exit('No elements Provided');
    //             }
    //             if($test->rmRow($box1)){
    //                 echo "Deleted the requested row:"."</br>";
    //             }
    //             $test->output();
    //             break;
    //         case 4:
    //             if($box1 == "") {
    //                 exit('No elements Provided');
    //             }
    //             $row = array();
    //             if(count($box1) != count($box2)){
    //                 exit('Number of headings and the number of
    //             elements do not match.');
    //             }
    //             for ($x=0; $x<count($box1); $x++) {
    //                 $row += [$box2[$x] => $box1[$x]];
    //             }
    //             $test->rmRowAssocArray($row);
    //             $test->output();
    //             break;
    //         case 5:
    //             if($box1 == "") {
    //                 $val = NULL;
    //             }
    //             else {
    //                 $val = $box1[0];
    //             }
    //             $head = $box2[0];
    //             $test->addCol($head, $val);
    //             $test->output();
    //             break;
    //         case 6:
    //             $head = $box2[0];
    //             $test->rmCol($head);
    //             $test->output();
    //             break;
    //         case 7:
    //             $row = array();
    //             if(is_null($box2)){
    //                 exit("No input received");
    //             }
    //             $both = explode(':', $box2);
    //             $old = explode(',', $both[0]);
    //             $new = explode(',', $both[1]);
    //             if($test->renameCol($old, $new)) {
    //                 echo "Renamed the requested headings (if previously present)";
    //             }
    //             $test->output();
    //             break;
    //     }
    // }
    ?>
    </body>
</html>