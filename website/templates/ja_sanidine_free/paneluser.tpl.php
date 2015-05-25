{#INCLUDE:header}
<script type="text/javascript">
function show_permission(area,free,vips,vipg, vip3, vip4, vip5) {
    if(free == 1) var permission_free = "<span style='color:#009400'>Sim</span>"; else var permission_free = "<span style='color:#BB0000'>N�o</span>";
    if(vips == 1) var permission_vips = "<span style='color:#009400'>Sim</span>"; else var permission_vips = "<span style='color:#BB0000'>N�o</span>";
    if(vipg == 1) var permission_vipg = "<span style='color:#009400'>Sim</span>"; else var permission_vipg = "<span style='color:#BB0000'>N�o</span>";
    if(vip3 == 1) var permission_vip3 = "<span style='color:#009400'>Sim</span>"; else var permission_vip3 = "<span style='color:#BB0000'>N�o</span>";
    if(vip4 == 1) var permission_vip4 = "<span style='color:#009400'>Sim</span>"; else var permission_vip4 = "<span style='color:#BB0000'>N�o</span>";
    if(vip5 == 1) var permission_vip5 = "<span style='color:#009400'>Sim</span>"; else var permission_vip5 = "<span style='color:#BB0000'>N�o</span>";
    document.getElementById('option_permission_'+area).innerHTML = "<div style='margin-left: 20px; margin-top: 10px; margin-bottom: 10px;'>Permiss�es da Op��o:<br/> \
     - Free: "+permission_free+"<br/> \
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?>- {#VIP_NAME_1}: "+permission_vips+"<br/><?php endif; ?> \
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?>- {#VIP_NAME_2}: "+permission_vipg+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?>- {#VIP_NAME_3}: "+permission_vip3+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?>- {#VIP_NAME_4}: "+permission_vip4+"<br/><?php endif; ?>\
     <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?>- {#VIP_NAME_5}: "+permission_vip5+"<?php endif; ?></div>";
}
function clear_permission(area) {
	document.getElementById('option_permission_'+area).innerHTML = "";
}
function AbreMenu(nome_div) {
	var div = "";
	var menus = 5;
	for (var i=1; i < menus; i++) {
		div = "div"+i;
		document.getElementById(div).style.display = "none"; 
		if (div == nome_div) {
			document.getElementById(nome_div).style.display = "block"; 
		}
	}
}
function AbreMenuV2(nome_div) {
	var div = "";
	var menus = 3;
	for (var i=1; i < menus; i++) {
		div = "divV2"+i;
		document.getElementById(div).style.display = "none"; 
		if (div == nome_div) {
			document.getElementById(nome_div).style.display = "block"; 
		}
	}
}
</script>
	<div id="ja-containerwrap-fr">
		<div id="ja-container" class="clearfix">
			<div id="ja-mainbody" class="clearfix">
				<div id="ja-content">
					<div id="ja-content-top">
						<div id="ja-content-bot" class="clearfix">
							
							<div id="ja-current-content" class="clearfix">
                            	<div id="etc">
                                {#INCLUDE:menuPanelUser}   
                            
                            <h1 style="margin-top: 20px;">Minha Conta</h1>
                    	
                        <div class="legend" style="margin-top: 25px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Status da minha conta</span></h3>
                         	<ul>
                                <li>Conta no plano: <strong>{#ACCOUNT_PLAN_DATAILS}</strong></li>
                                <li>Saldo de {#CASH_NAME}: <strong>{#ACCOUNT_CASH}</strong></li>
                                <li>Saldo de {#CASH_NAME2}: <strong>{#ACCOUNT_CASH2}</strong></li>
                                <li>Saldo de {#POINTS_NAME}: <strong>{#ACCOUNT_POINTS}</strong></li>
                                <li>Ultima conex�o em: <strong>{#LAST_CONNECTION_DETAILS}</strong></li>
                                <li>Ultima conex�o pelo IP: <strong>{#LAST_CONNECTION_DETAILS_IP}</strong></li>
                                <!-- Ban account details begin --> 
                                {#BAN_ACCOUNT_DATAILS}
                                <!-- Ban account details end -->
                       		 </ul>
                        </div>
                       
                       <div class="legend" style="margin-top: 25px;">
                          <h3 class="legend-title"><span style="font-size: 13px;">Status dos meus personagens</span></h3>
                        	<div style="margin-bottom: 8px; margin-top: 10px;">
                        	<table border='0' width='50%'>
                        <tr>
                            <td align="center"><strong>Personagem</strong></td>
                          <td align="center"><strong>Classe</strong></td>
                          <td align="center"><strong>Resets</strong></td>
                            <td align="center"><strong>PK</strong></td>
                        </tr>
                        {#CHARACTER_DETAILS}
                       </table>
                        <!-- Ban characters details begin --> 
                        {#BAN_CHARACETERS_DATAILS}
                        <!-- Ban characters details end -->
                     	</div>
                     </div>
                            
                              </div>
                            </div>
						</div>
					</div>
				</div>
			{#INCLUDE:menuLeft}
			<br />
			<div id="ja-tabs" class="clearfix"></div>
			</div>
		</div>
 	</div>
{#INCLUDE:footer}