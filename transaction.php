<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    </title>
</head>
<body>
    <div class="wrapper">
    <nav class="navbar">
            <ul>
                <li><a class="active" href="index.html">HOME</a></li>
                <li><a href="customer.php">VIEW CUSTOMERS</a></li>
            </ul>
        </nav>
     </div>
            </body>
            </html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaction history</title>
</head>
<body>

<body style="background-color : white;">



	<div class="">
       
        
       <br>
       <div>
    <table >
	<caption style="text-align:center;color:black;font-weight:bold;font-size:130%;">TRANSACTION HISTORY</caption>
        <thead style="color : black;">
            <tr class="head">
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction1";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
            <td class="py-2"><?php echo $rows['dateandtime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

<style>
*{
    padding: 5px;
    margin: 0;
}

table{
             position: absolute;
             z-index: 1;
             left: 50%;
             right: 50%;
             transform: translate(-50% ,50%);
            top: 20%;
             width: 60%;
             height: 10%;
             background: white;
             text-align: center;
            /* border-collapse: collapse;*/
             border-spacing: 0;
             border-radius: 12px 12px 0 0;
             overflow: hidden;
             box-shadow: 0 2px 12px pink;
}

.head{
             background: pink;
             font-size: 15px;
}
.heading{
     font-size: 20px;
     text-align: center;
     top: 50%;
    left: 50%;
    height: 3vh;
}

.wrapper{
    background-color: white;
    background-size: cover;
    height: 25vh;
}


.navbar{
    height: 50px;
    width: 100%;
    background-color: rgba(0,0,0,4);
    opacity: .8;
}

.navbar ul{
    float: right;
    margin-right: 20px;
}

.navbar ul li{
    list-style: none;
    margin: 0 8px;
    display: inline-block;
    line-height: 25px;
}

.navbar ul li a{
    text-decoration: none;
    color: white;
    font-size: 20px;
    padding: 6px 13px;
}

.navbar ul li a.active,
.navbar ul li a:hover{
    background-color: pink;
    border-radius: 2px;

}
</style>
    
</body>
</html>
  