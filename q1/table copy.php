<html>
<head>
    <title>Assignment 2, Q1</title>
</head>

<body>

<h1>Question 1</h1>

<?php
    class Table {
    var $table_array = array();
    var $headers = array();
    var $cols;
    function Table ( $headers ) {
        $this->headers = $headers;
        $this->cols = count ($headers);
    }

    function addRow ( $row ) {
        if ( count ($row) != $this->cols )
            return false;
        array_push ( $this->table_array, $row );
        return true;
    }

    function addCol ( $colName, $val ) {
        array_push($this->headers, $colName);
        if ($val == "")
            $val = NULL;
        for($i = 0; $i < count($this->table_array); $i++) {
            array_push($this->table_array[$i], $val);
        }
    }

    function addRowAssocArray ( $row_assoc ) {
        $row = array();
        foreach ( $this->headers as $header ) {
            if ( ! isset ($row_assoc[$header] ) )
                $row_assoc[$header] = "";
            $row[] = $row_assoc[$header];
        }
        array_push($this->table_array, $row);
        return true;
    }

    function rmRow ( $theRow ) {
        $rowExists = false;
        $count = 0;
        foreach ( $this->table_array as $row ) {
            if ($theRow == $row) {
                $rowExists = true;
                break;
            }
            $count++;
        }

        if($rowExists) {
            array_splice($this->table_array, $count, 1);
        } else {
            print "row not found in table\n";
        }
    }

    function rmCol($colName) {
        $count = 0;
        foreach($this->headers as $header) {
            if ($header == $colName)
                break;
            $count++;
        }
        unset($this->headers[$count]);
        for($i = 0; $i < count($this->table_array); $i++) {
            unset($this->table_array[$i][$count]);
        }
    }

    function rmRowAssocArray ( $theRow ) {
        $rowExists = false;
        $count = 0;
        foreach ( $this->table_array as $row ) {
            if ($theRow === $row) {
                $rowExists = true;
                break;
            }
            $count++;
        }

        if($rowExists) {
            unset($this->table_array[$count]);
        } else {
            print "row not found in table\n";
        }
    }

    function renameCol($oldName, $newName) {
        $count = 0;
        foreach($this->headers as $header) {
            if ($header == $oldName) {
                break;
            }
            $count++;
        }
        $this->headers[$count] = $newName;
    }

    function output ( ) {
        print "<pre>";
        foreach ( $this->headers as $header )
            print "<b>$header</b> ";
        print "\n";
        foreach ( $this->table_array as $y ) {
            foreach ( $y as $xcell )
                print "$xcell ";
            print "\n";
        }
        print "</pre>";
    }
}

//$test = new table ( array ("a", "b", "c") );
//$test->addRow ( array (1, 2, 3 ) );
//$test->addRow ( array (5, 6, 7 ) );
//$test->addRowAssocArray ( array (b=>0, a=>6, c=>3 ) );
//$test->output();
//print "\n\nremoving a row\n\n";
//$test->rmRow ( array (1, 2, 3 ));
//$test->output();
//print "\n\nadding a column\n\n";
//$test->addCol("d", 13);
//$test->output();
//print "\n\nremoving a column\n\n";
//$test->rmCol("b");
//$test->output();
////print "\n\nremoving a associative row\n\n";
////$test->rmRowAssocArray( array (b=>0, a=>6, c=>3 ) );
//print "\n\nrenaming a column\n\n";
//$test->renameCol("a", "z");
//$test->output();

if(isset($_POST['button1'])) {
    echo "This is Button1 that is selected";
}
if(isset($_POST['button2'])) {
    echo "This is Button2 that is selected";
}
?>

<!--
    <p><input type=text name=field_keyword value=""></p>
    <TABLE CELLSPACING="0" CELLPADDING="0" width="45%" bgcolor="#ccffff">
        <tr>
            <td> <input type=button value="Add Row" onClick="top.main.location='http://newfirebird.cs.txstate.edu/~wp01/cgi-bin/home.pl'"></td>
            <td> <input type=button value="Remove Row" onClick="top.main.location='/~wp01/demo/proc/unix-version/html/job_search.html'"></td>
            <td> <input type=button value="Add Column" onClick="top.main.location='/~wp01/demo/proc/unix-version/html/employer_login.html'"></td>
            <td> <input type=button value="Remove Column" onClick="top.main.location='/~wp01/demo/proc/unix-version/html/employer_login.html'"></td>
            <td> <input type=button value="Rename Column" onClick="top.main.location='/~wp01/demo/proc/unix-version/html/member_login.html'"></td>
        </tr>
    </table>
-->
<br></br>

<form action="foobar_submit.php" method="post">
    <input name="my_html_input_tag"  value="PILLS HERE"/>

    <input type="submit" name="my_form_submit_button" 
           value="Click here for penguins"/>

    </form>

</body>
</html>