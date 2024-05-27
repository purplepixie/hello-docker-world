<!DOCTYPE html>
<html>
    <head>
        <title>Hello Docker!</title>
        <style type="text/css">
            body {
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .header {
                padding-bottom: 1em;
               margin-bottom: 1em;
               border-bottom: solid 1px black;
            }

            .title {
                font-size: 200%;
                font-weight: bold;
            }

            .subtitle {
                font-size: 80%;
                color: #909090;
            }

            a, a:visited {
                color: black;
            }

            a:hover {
                color: red;
            }

            .datablock {
                border-bottom: solid 1px #e0e0e0;
                margin-bottom: 1em;
            }

            .datatitle {
                font-size: 125%;
            }

            .datacontent {
                background-color: #f9f9f9;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <div class="title">Hello Docker!</div>
            <div class="subtitle">
                <a href="https://github.com/purplepixie/hello-docker-world">github.com/purplepixie/hello-docker-world</a>
            </div>
        </div>

        <?php
        $data = array();
        $data['hostname'] = exec("hostname");
        $data['host_external_ip'] = file_get_contents("http://xml.purplepixie.org/apps/ipaddress?format=plain");
        $data['host_external_name'] = gethostbyaddr($data['host_external_ip']);
        ?>

        <div class="datablock">
            <div class="datatitle">Network and Host Information</div>
            <div class="datacontent"><pre><?php
                print_r($data);
                ?>
            </pre></div>
        </div>


        <div class="datablock">
            <div class="datatitle">Environment Information</div>
            <div class="datacontent"><pre><?php
                print_r($_ENV);
                ?>
            </pre></div>
        </div>

        <div class="datablock">
            <div class="datatitle">Server Information</div>
            <div class="datacontent"><pre><?php
                print_r($_SERVER);
                ?>
            </pre></div>
        </div>
    </body>
</html>