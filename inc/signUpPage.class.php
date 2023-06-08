<?php
class SignUpPage {
    /**
     * @return string
     */
    public static function signUp() : string {
        $signUp = '
        <section class="signUp">
            <img src="./img/logo.png" alt="Logo"/>
            <article class="signUpFormContainer">
                <form method="POST" action="'.$_SERVER["PHP_SELF"].'">
                    <section class="signUpSection">
                        <article class="signUpInput">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required/>
                        </article>
                        <article class="signUpInput">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required/>
                        </article>
                        <article class="signUpInput">
                            <label for="confirmPw">Confirm Password</label>
                            <input type="password" id="confirmPw" name="confirmPw" required/>
                        </article>
                        <article class="signUpInput">
                            <label for="username">Name</label>
                            <input type="text" id="username" name="username" required/>
                        </article>
                    </section>
                    <button type="submit">Sign Up</button>
                </form>
            </article>
        </section>
        ';
        return $signUp;
    }
}