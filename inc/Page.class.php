<?php
class Page {
    /**
     * @return string
     */
    public static function htmlStart() : string {
        $htmlStart = '
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Click Eat</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
                <link rel="stylesheet" href="./css/style.css">
            </head>
            <body>
        ';
        return $htmlStart;
    }
    /**
     * @return string
     */
    public static function htmlEnd() : string {
        $htmlEnd = '
            </body>
        </html>
        ';
        return $htmlEnd;
    }
}