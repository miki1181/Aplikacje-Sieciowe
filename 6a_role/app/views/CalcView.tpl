{extends file="main.tpl"}
{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>


<h2>Kalkulator Kredytowy</h2>
<form method="post" action="{$conf->action_root}calcCompute">
    <label>Kwota kredytu: <input type="text" name="amount" value="{$form->amount}" /></label><br/>
    <label>Liczba lat: <input type="text" name="years" value="{$form->years}" /></label><br/>
    <label>Oprocentowanie (%): <input type="text" name="rate" value="{$form->rate}" /></label><br/>
    <input type="submit" value="Oblicz" />
</form>
{if $msgs|@count > 0}
<div>
    <ul>
    {foreach $msgs as $msg}
        <li>{$msg}</li>
    {/foreach}
    </ul>
</div>
{/if}


{if isset($result->monthly_payment)}
<div class="messages inf">
    <h4>Miesięczna rata: {$result->monthly_payment}</h4>
</div>
{/if}
{/block}
