{#INCLUDE:header}

		<!-- content-wrap starts here -->
		<div id="content-wrap">
                <div id="main">
                 {#INCLUDE:menuPanelUser}
 					
                    <h1>Alterar Personal ID</h1>
                    {#RespostWrite}
                    <div class='quadros'>
                      <form action="?page=paneluser&amp;option=MODIFY_PERSONALID&amp;Write=true" method="post">
                        <strong>Aten��o</strong>, o personal ID serve para quando voc� vai deletar ou sair de uma guild ou deletar um personagem.<br />
                        Com o Personal ID sua conta estar� mais segura.<br /><br />
                        Digite um n�mero de 7 caracters: <input name='pid' type='text' value='' maxlength='7' /><br />
                        Digite sua senha: <input name='pwd' type='text' value='' maxlength='10' /><br />
                        <input type='submit' class='button' value='Alterar Personal ID' />
                      </form>                    
                    </div>
                </div>
                
               {#INCLUDE:menuLeft}
               
               
		<!-- content-wrap ends here -->	
		</div>
					
{#INCLUDE:footer}