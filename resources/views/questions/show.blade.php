<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $object->title; ?></title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Calibri';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <!--This displays the value specified in the URL in the webpage
            For example: if URL is https://fitl-app-basic.local/object.php?variable=myValue,
            it will display "myValue" in the webpage
            <?php //echo $_REQUEST['variable']; ?>
        -->
        <h1><?php echo $object->title; ?></h1>
        <p><?php echo $object->description; ?></p>
            <pre>
                <?php echo $object->code; ?>
            </pre>
        <p>Question Date: <?php echo $object->created_at; ?></p>
    </body>
</html>
