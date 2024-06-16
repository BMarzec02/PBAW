{extends file="main.tpl"}

{block name=main}
    <div class="container wrapper style">
        <section>
            <h3>Informacje o tobie</h3>
            <form action="{$conf->action_root}userProfile" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <input id="login" type="text" placeholder="Login" name="login" value="{$form->login}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="email" type="email" placeholder="Email" name="email" value="{$form->email}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="phone_number" type="text" placeholder="Numer telefonu" name="phone_number" value="{$form->phone_number}">
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Zapisz zmiany!" class="primary" /></li>
                            <li><a class="button" href="{$conf->action_root}info">Cofnij</a></li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="id" value="{$form->id}">
                <input type="hidden" name="role" value="{$form->role}">
            </form>
        </section>
    </div>
{/block}
