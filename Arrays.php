<!DOCTYPE html>
<html>
    <body>
        <?php
        $age = array("Segun"=>"25", "Somto"=>"27", "Mark"=>"29");
        foreach($age as $x => $x_value) {
          echo "Key=" . $x . ", Value=" . $x_value;
          echo "<br>";
        }
        ?>
        #   Output
        #   Key=Segun, Value=25
        #   Key=Somto, Value=27
        #   Key=Mark, Value=29
    </body>
</html>
