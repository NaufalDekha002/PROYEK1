<!DOCTYP HTML>
<html>
    <head>
        <title>My Simple Google</title>
        <style>
            #form{
            margin:0px auto;
            width:450px;
        }

            #Judul{
                font-size: 25px;
                font-weight: bold;
                padding: 20px 0px 20px 0px;
                text-align: center;
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
                <div id='Judul'>
                    Mendeley Prototipe
                </div>
                 <div id='form-input'>
                    <form method='get' action='search.php'>
                        <input type="text" id='q' name='q' style="width:100%" placeholder='Cari Artikel...'/>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>