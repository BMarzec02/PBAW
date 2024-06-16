{extends file="main.tpl"}

{block name=main}
    {if isset($no_parcels_message)}
        <div class="align-center">
            <br>
            <h2>{$no_parcels_message}</h2>
            <div class="col-6"><img src="{url action="images/sad.png"}" alt="" style="width: 25%;" /></div>
        <p>Przejdź do <a href="{$conf->action_root}parcelAdd">dodaj przesyłkę</a> aby nadać swoją pierwszą przesyłkę.</p>
        </div>
    {else}
        <br>
        <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th>Numer przesyłki</th>
                <th>Waga</th>
                <th>Rozmiar</th>
                <th>Imię odbiorcy</th>
                <th>Nazwisko odbiorcy</th>
                <th>Ulica</th>
                <th>Dom/mieszkanie</th>
                <th>Kod Pocztowy</th>
                <th>Miasto</th>
                <th>Numer tel. odbiorcy</th>
                <th>Status</th>
                <th>Data nadania</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {foreach $parcel as $p}
                {strip}
                    <tr>
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
                    </tr>
                {/strip}
            {/foreach}
            </tbody>
        </table>
        </div>
    {/if}
{/block}
