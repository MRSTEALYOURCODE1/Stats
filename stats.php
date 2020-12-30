<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linux Based</title>
    <style>
        p{
            color: white;
        }

        .top-bar{
            background-color: rgb(0, 110, 140);
            width: 100%;
            height: 10%;
            position: absolute;
            left: 0%;
            top: 0%;
        }

        .stats-bar{
            width: 80%;
            height: 70%;
            position: absolute;
            left: 10%;
            top: 20%;
            border: solid 1px gray;
            border-radius: 10px;
            background-color: rgb(30, 30, 30);
        }

        .total-space{
            font-family: arial;
            position: absolute;
            left: 1%;
            top: 1%;
        }

        .used-space{
            font-family: arial;
            position: absolute;
            left: 1%;
            top: 6%;
        }

        .memorey{
            font-family: arial;
            position: absolute;
            left: 1%;
            top: 11%;
        }
    </style>
</head>
<body>
    <div class="top-bar"></div>

    <div class="stats-bar">
        <p class="total-space">Total Disk Space:
            <?php 
                $ds = disk_total_space("/");
                echo $ds
            ?>
            Bytes
        </p>

        <p class="used-space">Used Disk Space:
            <?php 
                $sub = disk_free_space("/");
                $ud = $ds - $sub;
                echo $ud;
            ?>
            Bytes
        </p>
        <p class="memorey">Ram Usage: 
            <?php 
                echo memory_get_usage() . "\n";
            ?>
            Bytes
        </p>
        
    </div>
</body>
</html>