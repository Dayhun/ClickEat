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
                <form method="post">
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
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required/>
                        </article>
                        <article class="signUpInput">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="tel" id="phoneNumber" name="phoneNumber" required>
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