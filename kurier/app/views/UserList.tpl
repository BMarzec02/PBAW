{extends file="main.tpl"}
{block name=main}
    <div class="table-wrapper">
    <table class="alt">
    <thead>
    <tr>
        <th>ID Użytkownika</th>
        <th>Login</th>
        <th>Rola</th>
        <th>Adres e-mail</th>
        <th>Numer Telefonu</th>
        <th>Kiedy utworzony</th>
        <th>Ostatnia edycja [Kiedy/Kto]</th>
        <th></th>
        <th>Operacje</th>
    </tr>
    </thead>
    <tbody>
    {foreach $user as $p}
            <tr>
                <td>{$p["id"]}</td>
                <td>{$p["login"]}</td>
                <td>{$p["role"]}</td>
                <td>{$p["email"]}</td>
                <td>{$p["phone_number"]}</td>
                <td>{$p["kiedy_utworzono"]}</td>
                <td>{$p["ostatnia_edycja"]}</td>
                <td>{$p["kto_edytowal"]}</td>
                <td>
                    <a href="{$conf->action_url}userEdit/{$p['id']}" class="button primary small icon solid fa-edit">Edytuj</a>
                    &nbsp;
                    <a href="{$conf->action_url}userRemove/{$p['id']}" class="button small icon solid fa-trash">Usuń</a>
                </td>
            </tr>
    {/foreach}
    </tbody>
</table>
{/block}