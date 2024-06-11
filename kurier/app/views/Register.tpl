{extends file="main.tpl"}

{block name=main}
    <div class="container wrapper style">
        <!-- Form -->
        <section>
            <h3>Rejestracja</h3>
            <form action="{$conf->action_root}registerSave" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <input id="login" type="text" placeholder="Login" name="login" value="{$form->login}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="password" type="password" placeholder="Hasło" name="password" value="{$form->password}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="password_confirm" type="password" placeholder="Potwierdź hasło" name="password_confirm" value="{$form->password_confirm}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="email" type="email" placeholder="Email" name="email" value="{$form->email}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="email_confirm" type="email" placeholder="Potwierdź email" name="email_confirm" value="{$form->email_confirm}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="phone_number" type="text" placeholder="Numer telefonu" name="phone_number" value="{$form->phone_number}">
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                            <li><a class="button" href="{$conf->action_root}login">Cofnij</a></li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="role" value="{$form->role}">
            </form>
        </section>
    </div>
{/block}
