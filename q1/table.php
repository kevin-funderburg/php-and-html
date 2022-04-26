<html lang="en-us">
    <head>
        <title>Learning PHP</title>
    </head>

    <body>
        <?php
//        error_reporting(E_ALL);
        class Table {
            var $table_array = array();
            var $headers = array();
            var $cols;

            function __construct($headers) {
                $this->headers = $headers;
                $this->cols = count((array)$headers);
            }

            function addRow($row) {
                if (count($row) != $this->cols) {
                    print "Couldn't add row - too few or too many elements provided";
                    return false;
                }
                array_push($this->table_array, $row);
                return true;
            }

            function addRowAssocArray($row_assoc) {
                $row = array();
                foreach($this->headers as $header) {
                    if (!isset($row_assoc[$header]))
                        $row_assoc[$header] = "";
                    $row[] = $row_assoc[$header];
                }
                array_push($this->table_array, $row);
                return true;
            }

            //This function takes a row as an argument and returns true if any of the rows
            //present in the table are identical to the one passed in the argument and additionally deletes it.
            // Other-wise prints an appropriate error and returns false.
            function rmRow($row) {
                if (count ($row) != $this->cols) {
                    print "Couldn't remove row - too few or too many elements";
                    return false;
                }
                for ($x=0; $x<$this->cols; $x++) {
                    if($this->table_array[$x] === $row){
                        unset($this->table_array[$x]);
                        return true;
                    }
                }
                print "No such row found"."</br>";
                return false;
            }

            //This function takes an associative row as an argument and returns true if any of the rows
            //present in the table are identical to the one passed in the argument and additionally deletes it.
            // Other-wise prints an appropriate error and returns false.
            function rmRowAssocArray($row_assoc) {
                $row = array();
                if (count ($row_assoc) != $this->cols) {
                    print "Couldn't remove row - too few or too many elements";
                    return false;
                }
                foreach($this->headers as $header) {
                    if (!isset($row_assoc[$header]))
                        $row_assoc[$header] = "";
                    $row[] = $row_assoc[$header];
                }
                for ($x=0; $x<$this->cols; $x++) {
                    if ($this->table_array[$x] === $row) {
                        unset($this->table_array[$x]);
                        return true;
                    }
                }
                print "No such row found"."</br>";
                return false;
            }

            //addCol function takes a header name and an optional value as 2 arguments
            //if the optional value is provided, all the values of the column are set to that value other-wise set
            // to null. it returns true when there's a valid header name(i.e. it's non-null) and false other-wise.
            function addCol($header, $col=NULL) {
                if(is_null($header) || $header == "") {
                    print "Please provide a valid column name."."</br>";
                    return false;
                }
                array_push($this->headers, $header);
                for ($x=0; $x<$this->cols; $x++) {
                    array_push($this->table_array[$x], $col);
                }
                return true;
            }

            //This function takes the name of a column to be deleted as an input.
            //Returns true if there exists a column with the given heading and also removes it.
            //Returns false otherwise with appropriate error.
            function rmCol($header) {
                if(is_null($header)) {
                    print "Please provide a valid column name."."</br>";
                    return false;
                }
                if (!in_array($header, $this->headers)) {
                    print "No such header found."."</br>";
                    return false;
                }
                $idx = array_search($header, $this->headers,true);
                unset($this->headers[$idx]);
                for ($x=0; $x<$this->cols; $x++) {
                    unset($this->table_array[$x][$idx]);
                }
                return true;
            }

            //This function takes 2 arrays, one consisting of old heading and the other one consisting of
            //new headings to replace the old ones. It returns false if no headings are provided or if the
            //number of old and new heading isn't the same.
            function renameCol($old, $new) {
                if(is_null($old) || is_null($new)){
                    print "Invalid Input."."</br>";
                    return false;
                }
                for ($x=0; $x<count($old); $x++){
                    if(!in_array($old[$x], $this->headers)) {
                        print "No heading named ".$old[$x]."</br>";
                    }
                    else {
                        $idx = array_search($old[$x], $this->headers,true);
                        $this->headers[$idx] = $new[$x];
                    }
                }
                return true;
            }

            function output() {
                print "<pre>";
                foreach($this->headers as $header)
                    print "<b>$header</b>"."&thinsp;";
                print "\n";
                foreach ($this->table_array as $y) {
                    foreach($y as $xcell)
                        if(is_null($xcell)) {
                            print " "."&thinsp;";
                        }
                        else
                            print "$xcell"."&thinsp;";
                    print "\n";
                }
                print "</pre>";
            }
        }
//        $test = new Table(array("a", "b", "c"));
//        $test->addRow(array(1, 2, 3));
//        $test->addRow(array(5, 6, 7));
//        $test->addRowAssocArray(array("b"=>0, "a"=>6, "c"=>3));
//        $test->addCol("d");
//        $test->addCol("e", 2);
////        $test->rmCol("d");
//        $test->renameCol(array("ab"=>"f", "cd"=>"z"));
//
//        //        $test->rmRow(array(1, 2)); //gives an error as the number of columns is incorrect
////        $test->output();
////        $test->rmRow(array(5, 6, 7));
////        $test->output();
//        $test->rmRowAssocArray(array("a"=>8, "c"=>7 ,"b"=>6));
//        $test->output();
        ?>
    </body>
</html>