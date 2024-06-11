{extends file="main.tpl"}

{block name=main}
<table class="alt">
    <thead>
    <tr>
        <th>ID przesyłki</th>
        <th>Numer przesyłki</th>
        <th>Waga [kg]</th>
        <th>Rozmiar</th>
        <th>Imię_odbiorcy</th>
        <th>Nazwisko_odbiorcy</th>
        <th>ulica</th>
        <th>Dom/mieszkanie</th>
        <th>Kod Pocztowy</th>
        <th>Miasto</th>
        <th>Numer tel. odbiorcy</th>
        <th>Status</th>
        <th>Data nadania</th>
        <th>Operacje</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {foreach $parcel as $p}
        {strip}
            <tr>
                <td>{$p["id_przesylki"]}</td>
                <td>{$p["numer_przesylki"]}</td>
                <td>{$p["waga"]}</td>
                <td>{$p["rozmiar"]}</td>
                <td>{$p["imie_odbiorcy"]}</td>
                <td>{$p["nazwisko_odbiorcy"]}</td>
                <td>{$p["ulica"]}</td>
                <td>{$p["numer_domu"]}</td>
                <td>{$p["kod_pocztowy"]}</td>
                <td>{$p["miasto"]}</td>
                <td>{$p["numer_odbiorcy"]}</td>
                <td>{$p["status"]}</td>
                <td>{$p["data_nadania"]}</td>
                <td>
                    <a href="{$conf->action_url}parcelEdit/{$p['id_przesylki']}" class="button primary small icon solid fa-edit">Edytuj</a>
                    &nbsp;
                    <a href="{$conf->action_url}parcelRemove/{$p['id_przesylki']}" class="button small icon solid fa-trash">Usuń</a>
                </td>
            </tr>
        {/strip}
    {/foreach}
    </tbody>
</table>
{/block}