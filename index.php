<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello world</title>

    <!--Real gangasta ass shit, man
        I am in love with Jana Neskovic!-->
    <style>

        * {
            padding: 0;
            margin: 0;
            font-family: Verdana;
            font-size: 1em;
            color: #1A1A1A;
        }

        body {
            background: #E6E6E6;
        }
        h1 {
            font-size: 350%;
            font-weight: bolder;
            margin: 0 auto;
            text-align: center;
            margin-top: 45vh;

        }
    </style>
</head>
<body>
        <h1>
        <?php 
            // A swag by Alek Angelov
            class HelloWorld  {
                
                public function Hello()
                {
                    $arrayName = array('Hello World!' => 0,'I love you world!' => 1,
                                       "I'm in love with the coco!" => 2,'I got it for the low low!' => 3);

                    echo array_rand($arrayName);
                }

            }

            $hello = new HelloWorld;
            $hello -> Hello();

         ?>
        </h1>
</body>
</html>