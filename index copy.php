<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="icon" href="https://meditation-lab.com/wp-content/uploads/2019/06/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Maitree|Mali|Sarabun&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css.css">

    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <br>
        <h1 style="font-size: 45px; color: #0083a1; font-family: 'Mali', cursive; text-align: center;">Documentation</h1>
        <hr style="margin: 20px;">

        <?php 
            $url_app_script = 'https://script.google.com/macros/s/AKfycbxruRDp2CuRDhs4peQ8IXyNxwXNIliyZ8bcBBaUnpXzFh2bf1gOMdP-EP1F2tgqQIqW/exec';
            
            $rnt_data = c_url($url_app_script, 'list');
            $rnt_data = json_decode($rnt_data, true);
            // printSheet($rnt_data);

        ?>



        <table class="table table-sm table-hover">
            <tr>
                <th>Team No.</th>
                <th>Team name</th>
                <th>Document</th>
            </tr>
                <?php
                    foreach ($rnt_data as $i=>$values) {
                        echo '<form action="/efficiency/document.php" method="post">';
                        echo "<tr>";
                        foreach ($values as $value) {
                            $j = $i+1;
                            echo "<td>".$j."</td>";
                            echo "<td>".$value."</td>";
                            echo '<td><input class="btn btn-outline-success btn-sm" type="submit" value="ดูเพิ่มเติม"></td>';
                            echo '<input type="hidden" name="doc_team" value='.$value.'>';
                        }
                        echo "</tr>";
                        echo '</form>';
                    }
                ?>
        </table>

    </div>


</body>
</html>




















<?php
        function printSheet($data) {
            foreach ($data as $values) {
                foreach ($values as $value) {
                    echo "$value <br>";
                }
            }

        }

        function printDoc($data) {
            foreach ($data as $values) {
                foreach ($values as $value) {
                    echo "$value <br>";
                }
            }
            
        }

        function c_url($url_app_script, $req='DCS_PM12') {
            $url = $url_app_script.'?req='.$req;
            // echo $url;
    
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, TRUE);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            $header = ['Content-Type: application/json'];
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    
            $response = curl_exec($curl);
            // echo $response . "<br>";
            curl_close($curl);
    
            // $txt_split = explode(",",$response);
    
            // $data = json_decode($response);

            //$uuid = $data->wo;
            //echo $data->uuid . "<br>";
            //echo $uuid. "<br>";
    
        
            $data = $response;
            return $data;
          }
    ?>