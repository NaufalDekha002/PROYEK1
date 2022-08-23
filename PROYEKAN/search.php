<?php require "koneksi.php";?>
<!DOCTYP HTML>
<html>
    <head>
        <title>My Simple Google</title>
        <style>
            #form{
            width:450px;
        }

            #Judul{
                font-size: 25px;
                font-weight: bold;
                padding: 20px 0px 20px 0px;
                text-align: left;
            }

            #form #q {
                padding: 10px;
                border: 1px solid #dddddd;
            }
        </style>
    </head>
    <body>
        <div id='wrapper'>
        <div id='form'>
            <div id= 'Judul'>
                Mendeley Prototipe
            </div>
            <div id='form-input'>
                    <form method='get' action='search.php'>
                        <input type="text" id='q' name='q' style="width:100%" placeholder='Cari Artikel...'/>
                    </form>
                </div>
        </div>



            <div id='result'>
                <?php 
                $q =$_GET['q'];
                $query = "select * from dokumen where dokumen_judul like '%".$q."%' limit 10";
                $query_exec = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($query_exec)):
                ?>

                <div class="item">
                    <div class="Judul"><?php echo $row['dokumen_judul'] ?></div>
                    <div class="Tahun"><?php echo $row['dokumen_tahun']; ?></div>
                    <div class="Penulis"><?php echo $row['dokumen_penulis']; ?></div>
                </div>
                
                <?php
                    endwhile;
                ?>
            </div>
        </div>
    </body>
    </html>