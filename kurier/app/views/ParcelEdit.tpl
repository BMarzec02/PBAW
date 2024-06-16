{extends file="main.tpl"}

{block name=main}
    <div class="container wrapper style">
        <section>
            <h3>{if isset($form->id_przesylki)}Edytuj{else}Dodaj{/if} przesyłkę</h3>
            <form action="{$conf->action_root}parcelSave" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <input id="waga" type="text" placeholder="Waga (kg)" name="waga" value="{$form->waga}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <select id="rozmiar" name="rozmiar">
                            <option value="">- Podaj rozmiar -</option>
                            <option value="S" {if $form->rozmiar == 'S'}selected{/if}>S</option>
                            <option value="M" {if $form->rozmiar == 'M'}selected{/if}>M</option>
                            <option value="L" {if $form->rozmiar == 'L'}selected{/if}>L</option>
                        </select>
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="imie_odbiorcy" type="text" placeholder="Imię odbiorcy" name="imie_odbiorcy" value="{$form->imie_odbiorcy}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="nazwisko_odbiorcy" type="text" placeholder="Nazwisko odbiorcy" name="nazwisko_odbiorcy" value="{$form->nazwisko_odbiorcy}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="miasto" type="text" placeholder="Miasto" name="miasto" value="{$form->miasto}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="kod_pocztowy" type="text" placeholder="Kod pocztowy (01234)" name="kod_pocztowy" value="{$form->kod_pocztowy}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="ulica" type="text" placeholder="Ulica" name="ulica" value="{$form->ulica}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="numer_domu" type="text" placeholder="Numer domu/mieszkania" name="numer_domu" value="{$form->numer_domu}">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="numer_odbiorcy" type="text" placeholder="Numer tel. odbiorcy" name="numer_odbiorcy" value="{$form->numer_odbiorcy}">
                    </div>
                    {if isset($form->id_przesylki)}
                        <div class="col-12">
                            <select id="status" name="status">
                                <option value="Nadana" {if $form->status == 'Nadana'}selected{/if}>Nadana</option>
                                <option value="W drodze" {if $form->status == 'W drodze'}selected{/if}>W drodze</option>
                                <option value="Dostarczona" {if $form->status == 'Dostarczona'}selected{/if}>Dostarczona</option>
                            </select>
                        </div>
                    {/if}
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Zapisz zmiany" class="primary" /></li>
                            <li><a class="button" href="{$conf->action_root}parcelList">Cofnij</a></li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="id_przesylki" value="{$form->id_przesylki}">
                <input type="hidden" name="numer_przesylki" value="{$form->numer_przesylki}">
                <input type="hidden" name="data_nadania" value="{$form->data_nadania}">
                <input type="hidden" name="id_uzytkownika" value="{$form->id_uzytkownik}">
            </form>
        </section>
    </div>
{/block}
