{extends file="main.tpl"}

{block name=main}
    <div class="container wrapper style">
        <section>
            <h3>Logowanie</h3>
            <form action="{$conf->action_root}login" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-12">
                        <input id="login" type="text" placeholder="Nazwa użytkownika" name="login" value="{$form->login}">
                    </div>
                    <div class="col-12">
                        <input id="password" type="password" placeholder="Hasło" name="password" value="{$form->password}">
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Zaloguj" class="primary" /></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><a class="button" href="{$conf->action_root}register">Zarejestruj się!</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>
{/block}
