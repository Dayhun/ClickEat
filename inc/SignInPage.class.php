<?php
class SignInPage {
    /**
     * @return string
     */
    public static function signIn() : string {
        $signIn = '
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
                <section class="signIn">
                    <img src="./img/logo.png" alt="Logo"/>
                    <article class="signInFormContainer">
                        <form>
                            <input type="email" name="email" placeholder="Email"/>
                            <input type="password" name="password" placeholder="Password"/>
                            <button type="submit">Sign In</button>
                        </form>
                        <article>
                            <button type="button">Sign Up</button>
                        </article>
                    </article>
                </section>
            </body>
            </html>
        ';
        return $signIn;
    }
}