<html>
    <head>
        <style>
            table, td, tr{
                border: solid 1px blue;
            }
            </style>
    <body>
   
        <h3>tablas</h3>
        <table>
            <thead>
                <th> tabla 1</th> 
                <th> tabla 2</th>
                <th> tabla 3</th>
            </thead>

            <tbody> 
                <tr>
                    <td>
                    <?php
                    $num=1;
                    $i=1;
                    do {
                        $rta=$num*$i;
                        echo $num."*".$i. "=".$rta."<br>";
                        $i++;
                        
                    }while($i<=10);

                    ?>
                    </td>    
                    <td>
                    <?php
                    $num=2;
                    $i=1;
                    do {
                        $rta=$num*$i;
                        echo $num."*".$i. "=".$rta."<br>";
                        $i++;
                        
                    }while($i<=10);

                    ?>
                    </td>    
                    <td>
                    <?php
                    $num=3;
                    $i=1;
                    do {
                        $rta=$num*$i;
                        echo $num."*".$i. "=".$rta."<br>";
                        $i++;
                        
                    }while($i<=10);

                    ?>
                    </td>    

                </tr>


              </tbody>
            </table>
</head>


</body>
</html>