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
                    <button type="button">Sign Up</button>
                </article>
            </article>
        </section>
        ';
        return $signIn;
    }
}