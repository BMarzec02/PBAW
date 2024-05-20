{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}parcelSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dodaj przesyłkę</legend>
		<div class="pure-control-group">
            <label for="weight">Waga przesyłki [kg]: </label>
            <input id="weight" type="text" placeholder="waga" name="weight" value="{$form->weight}">
        </div>

        <div class="pure-control-group">
            <label for="date">Data nadania</label>
            <input id="date" type="date" name="date" value="{$form->date}">
        </div>

        <div class="pure-control-group">
            <label for="size">Rozmiar przesyłki</label>
            <input id="size" type="text" placeholder="S/M/L" name="size" value="{$form->size}">
        </div>

        <div class="pure-control-group">
            <label for="name">Imię odbiorcy</label>
            <input id="name" type="text" placeholder="imię" name="name" value="{$form->name}">
        </div>

        <div class="pure-control-group">
            <label for="surname">Nazwisko odbiorcy</label>
            <input id="surname" type="text" placeholder="nazwisko" name="surname" value="{$form->surname}">
        </div>

        <div class="pure-control-group">
            <label for="address">Adres odbiorcy</label>
            <input id="address" type="text" placeholder="adres" name="address" value="{$form->address}">
        </div>

        <div class="pure-control-group">
            <label for="phone_number">Numer tel. odbiorcy</label>
            <input id="phone_number" type="text" placeholder="numer tel" name="phone_number" value="{$form->phone_number}">
        </div>

		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>

{/block}
