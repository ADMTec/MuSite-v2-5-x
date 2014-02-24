{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main" style="width: 79%;">
                {#INCLUDE:menuPanelUser} 
 					
                    <h1>Ba&uacute; Virtual</h1>
                    <table>
                    <tr>
                        <td style="margin: 0px; padding: 0px;">
                        <div class="vaultBox">
                            <div id="vaultName">Ba&uacute; atual no jogo</div>
                            <ul id="itemsVaultGame">
                                {#liItemsVaultGame}
                            </ul>
                        </div>
                        </td>                                                     
                        <td style="margin: 0px; padding: 0px; width: 100%;"></td>
                        <td style="margin: 0px; padding: 0px;">
                        <div class="vaultBox">
                            <div id="vaultName">Ba&uacute; virtual</div>
                            <ul id="itemsVaultVirtual">
                                {#liItemsVaultVirtual}
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div id="detailsVault"></div>
                        </td>
                    </tr>
                    </table>
                </div>
                
               <div id='sidebar' style="width: 20%;">
                 {#DIV[LOGIN_LOGOUT]}
			   </div>
               
			   <div id='sidebar' style="width: 20%;">
                <h1>Servidores</h1>
                  <div class='left-box'>
                    <ul class='sidemenu'>	
                       {#GAMESERVERS_ON}	
                       <li>Total online: <a href="?page=onlines&amp;room=all"><strong>{#TOTAL_ACCOUNTS_ONLINES}</strong></a></li>
                     </ul>	
                   </div>
                   
			   </div>
               <div id='sidebar' style="width: 20%;">
                 <h1>Configura��es</h1>
                  <div class='left-box'>
                    <ul class='sidemenu'>				
                       <li>Vers�o: <strong>{#SERVER_VERSION}</strong></li>
                       <li>Experi�ncia: <strong>{#SERVER_XP}</strong></li>
                       <li>Drops: <strong>{#SERVER_DROP}</strong></li>
                       <li>Bug Bless: <strong>{#SERVER_BUGBLESS}</strong></li>
                     </ul>	
                   </div>
               </div>
               
               <div id='sidebar' style="width: 20%;">
                 <h1>Infos. Gerais</h1>
                  <div class='left-box'>
                    <ul class='sidemenu'>				
                       <li>Total de Contas: <strong>{#TOTAL_ACCOUNTS}</strong></li>
                       <li>Total de Chars: <strong>{#TOTAL_CHARATERS}</strong></li>
                       <li>Recorde Online: <strong>{#RECORD_ONLINE}</strong></li>
                       <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_1"]): ?><li>{#VIP_NAME_1}: <strong>{#TOTAL_ACCOUNTS_VIP_SILVER}</strong></li><?php endif; ?>
                       <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_2"]): ?><li>{#VIP_NAME_2}: <strong>{#TOTAL_ACCOUNTS_VIP_GOLD}</strong></li><?php endif; ?>
                       <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_3"]): ?><li>{#VIP_NAME_3}: <strong>{#TOTAL_ACCOUNTS_VIP_3}</strong></li><?php endif; ?>
                       <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_4"]): ?><li>{#VIP_NAME_4}: <strong>{#TOTAL_ACCOUNTS_VIP_4}</strong></li><?php endif; ?>
                       <?php if($PANELUSER_MODULE['BUY_VIPS']['ACTIVES']["VIP_5"]): ?><li>{#VIP_NAME_5}: <strong>{#TOTAL_ACCOUNTS_VIP_5}</strong></li><?php endif; ?>           
                       <li>Personagens Banidos: <a href="?page=banned&amp;type=characters"><strong>{#TOTAL_CHARACTERS_BANNEDS}</strong></a></li>
                       <li>Contas Banidas: <a href="?page=banned&amp;type=accounts"><strong>{#TOTAL_ACCOUNTS_BANNEDS}</strong></a></li>
                     </ul>	
                   </div>
               </div>
               
               <div id='sidebar' style="width: 20%;">
                 <h1>Enquete</h1>
                  <div class='left-box'>
                    <ul class='sidemenu'>                
                       {#POLL_OPTIONS} 
                    <div id="pollResult"></div>           
                    </ul>                                               
                   </div>
               </div>
                     
               <script>
			    function Aba(nome) {
				 status = document.getElementById(nome).style.display;
				  if(status == 'none') 
				  {
					document.getElementById(nome).style.display = '';
					Verify ('?page=ajax&require=membersstaff', 'equipe', 'get');
				  }
				  else 
				  {
					document.getElementById(nome).style.display = 'inline';
				  }
				}
			   </script>
           	   <div id='sidebar' style="width: 20%;">
                 <h1>Equipe <a href="javascript:Aba('equipe');">[Mostrar]</a></h1>
                  <div id='equipe' style='display:none'></div>
               </div>
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}