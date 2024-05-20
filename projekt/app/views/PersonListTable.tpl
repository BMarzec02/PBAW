<table class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>id_przesyłki</th>
		<th>waga</th>
		<th>data nadania</th>
		<th>rozmiar</th>
		<th>imię odbiorcy</th>
		<th>nazwisko odbiorcy</th>
		<th>adres</th>
		<th>nr. telefonu odbiorcy</th>
		<th>status przesyłki</th>
	</tr>
</thead>
<tbody>
{foreach $parcel as $p}
{strip}
	<tr>
		<td>{$p["id_parcel"]}</td>
		<td>{$p["weight"]}</td>
		<td>{$p["date"]}</td>
		<td>{$p["size"]}</td>
		<td>{$p["name"]}</td>
		<td>{$p["surname"]}</td>
		<td>{$p["address"]}</td>
		<td>{$p["phone_number"]}</td>
		<td>{$p["status"]}</td>

		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit/{$p['id_parcel']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning"
			  onclick="confirmLink('{$conf->action_url}personDelete/{$p['id_parcel']}','Czy na pewno usunąć?')">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>