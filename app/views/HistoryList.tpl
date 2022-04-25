{extends file="main.tpl"}


{block name = header}<p>KALKUALTOR </p> 

{/block}

{block name=footer}Kalkulator obliczania rat
{/block}

{block name=content}
<a href="{$conf->action_url}logout" style="background-color:gray;width:5%;color:black;"  class="pure-menu-heading pure-menu-link">wyloguj</a>
<br>
<a href="{$conf->action_url}calcshow" style="background-color:gray;width:10%;color:black;"  class="pure-menu-heading pure-menu-link">Pokaż Kalkulator</a>
<br><br><br>
<div class="bottom-margin">

</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>lp.</th>
		<th>ilosc rat</th>
		<th>kwota</th>
		<th>oprocentowanie</th>
		<th>rata</th>
		<th>prowizja</th>
		<th>kwota do oddania</th>

	</tr>
</thead>
<tbody>
{foreach $kredyt as $k}
{strip}
	<tr>

		<td>{$k["id_kredyt"]}</td>
		<td>{$k["ilosc_rat"]}</td>
		<td>{$k["kwota"]}</td>
		<td>{$k["opr"]}</td>
		<td>{$k["result_rata"]}</td>
		<td>{$k["result_prowizja"]}</td>
		<td>{$k["result_kwota"]}</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
