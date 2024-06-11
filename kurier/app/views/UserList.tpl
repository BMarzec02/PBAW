{extends file="main.tpl"}
{block name=main}
<table>
    <thead>
    <tr>
        <th>ID Użytkownika</th>
        <th>Login</th>
        <th>Rola</th>
        <th>adres e-mail</th>
        <th>Numer Telefonu</th>
        <th>Operacje</th>
    </tr>
    </thead>
    <tbody>
    {foreach $user as $p}
        {strip}
            <tr>
                <td>{$p["id"]}</td>
                <td>{$p["login"]}</td>
                <td>{$p["role"]}</td>
                <td>{$p["email"]}</td>
                <td>{$p["phone_number"]}</td>
                <td>
                    <a href="{$conf->action_url}userEdit/{$p['id']}" class="button primary small icon solid fa-edit">Edytuj</a>
                    &nbsp;
                    <a href="{$conf->action_url}userRemove/{$p['id']}" class="button small icon solid fa-trash">Usuń</a>
                </td>
            </tr>
        {/strip}
    {/foreach}
    </tbody>
</table>
{/block}