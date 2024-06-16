{extends file="main.tpl"}

{block name=main}
    <div class="container wrapper style">
        <form action="{$conf->action_url}parcelTracking" method="POST">
            <legend>Wyszukaj przesyłkę</legend>
            <fieldset>
                <div class="input-container">
                    <input type="text" placeholder="numer przesyłki" name="sf_parcelNumber" value="{$searchForm->parcelNumber}"/>
                    <button type="submit" class="button primary icon solid fa-search">Wyszukaj</button>
                </div>
                <br>
                <br>

                {if !isset($searchForm->parcelNumber) || empty($searchForm->parcelNumber)}
                    <p>Wprowadź numer przesyłki.</p>
                {elseif isset($recordsSearch[0]['status'])}
                    <p>Status: {$recordsSearch[0]['status']}</p>
                {elseif isset($recordsSearch) && !$recordsSearch}
                    <p>Przesyłka o podanym numerze nie istnieje, spróbuj ponownie.</p>
                {/if}
            </fieldset>
        </form>
    </div>
{/block}
