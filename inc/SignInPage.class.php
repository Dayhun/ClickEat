<?php
class SignInPage {
    /**
     * @return string
     */
    public static function signIn() : string {
        $signIn = '
        <section class="signIn">
            <img src="./img/logo.png" alt="Logo"/>
            <article class="signInFormContainer">
                <form method="post">
                    <input type="email" name="email" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <button type="submit">Sign In</button>
                </form>
                <article>
                    <a href="./signUpPage.php">Sign Up</a>
                </article>
                <a href="./index.php">Visit the site without signing in</a>
            </article>
        </section>
        ';
        return $signIn;
    }
    public static function signInFail() : string {
        $signIn = '
        <section class="signIn">
            <img src="./img/logo.png" alt="Logo"/>
            <article class="signInFormContainer">
                <form method="post">
                    <input type="email" name="email" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <p>You entered wrong email or password!</p>
                    <button type="submit">Sign In</button>
                </form>
                <article>
                    <a href="./signUpPage.php">Sign Up</a>
                </article>
                <a href="./index.php">Visit the site without signing in</a>
            </article>
        </section>
        ';
        return $signIn;
    }
}

