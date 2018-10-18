<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>O'Gara Blindados</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127213633-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127213633-1');
  gtag('config', 'AW-783629894');
</script>

<!-- Event snippet for Lead conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-783629894/kENoCNOLl4sBEMb81PUC',
      'event_callback': callback
  });
  return false;
}
</script>

</head>
<body> 

<header class="container-fluid">
	<div class="container spaceOne">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-xs-8 col-xs-offset-2">
				<img src="images/logo.png" class="center-block img-responsive" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<p class="textOne">Garanta sua blindagem</p>
				<p class="textTwo">Desconto de 15% + Bônus de R$ 2000,00</p>
			</div>
		</div>
		<div class="row"> 
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row spaceTwo">
					<div class="col-lg-7">
						<div class="row spaceTwo">
							<div class="col-lg-offset-2 col-lg-10">
								<p class="textThree col-lg-8"><span class="dotGreen">•</span> Certificado ISO 9002</p>
								<p class="textThree col-lg-10"><span class="dotGreen">•</span> Mais de 120 anos de experiência</p>
								<p class="textThree col-lg-12"><span class="dotGreen">•</span> As melhores soluções de blindagem </p>
							</div>
						</div>
						<div class="row spaceTwo">
						<div class="col-lg-10 col-lg-offset-2">
								<img src="images/cars.png" class="img-responsive center-block" alt="">
							</div>
							<div class="imgA col-lg-10 col-lg-offset-2 hidden-xs hidden-sm">
								<img src="images/promo.png" class="img-responsive center-block" alt="">
							</div>
							<div class="imgA col-xs-12 hidden-lg hidden-md">
								<img src="images/promo.png" class="img-responsive center-block" alt="">
							</div>
						</div>
					</div>
					<div class="colStyle col-lg-4 col-lg-offset-0">
						<p class="textFour">Preencha agora<br/>e garanta</p>
						<p class="textFive">Bônus</p>
						<p class="textFiveB">R$2.000,00<span class="asterix">*</span></p>
						<p class="textFiveC">*Para indicação de 1 amigo.</p>
						<p><form class="form-horizontal" name="form-gohotsale" id="form-gohotsale" method="POST" action="https://gohotsale.com.br/leads" novalidate>
												<input type="hidden" name="hotsite" id="hotsite" value="ogara-blindados-hotsite">
												<input type="hidden" name="company" id="company" value="ogara-blindados">
												<fieldset class="col-md-12">
												<?php if(isset($_GET['error']) && $_GET['error'] === 'profanity') { ?>
												<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Seja mais educado! </div>
												<?php } ?>
												<?php if(isset($_GET['error']) && $_GET['error'] === 'repeat') { ?>
												<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Verifique os seus dados e tente novamente! </div>
												<?php } ?>
												<!-- Text input-->
												<div class="form-group"> 
													<!--label class="col-md-4 control-label" for="nome">Nome</label-->
													<div class="col-md-12">
													<input id="name" name="name" type="text" data-required placeholder="Nome" class="form-control input-md formulario" value="<?php if(isset($_GET['name'])) { echo $_GET['name']; } ?>" required="required">
													</div>
												</div>
												<!-- Text input-->
												<div class="form-group"> 
													<!--label class="col-md-4 control-label" for="email">E-mail</label-->
													<div class="col-md-12">
													<input id="email" name="email" type="email" data-required placeholder="E-mail" class="form-control input-md formulario" value="<?php if(isset($_GET['email'])) { echo $_GET['email']; } ?>" required="required">
													</div>
												</div>
				
												<!-- Text input-->
												<div class="form-group"> 
													<!--label class="col-md-4 control-label" for="telefone">Telefone</label-->
													<div class="col-md-12">
													<input id="phone" name="phone" type="text" data-required required="required" placeholder="Telefone" value="<?php if(isset($_GET['phone'])) { echo $_GET['phone']; } ?>" class="form-control input-md formulario">
													</div>
												</div>
												<!-- Button -->
												<div class="form-group"> 
													<!--label class="col-md-4 control-label" for="enviar"></label-->
													<div class="col-md-12" style="text-align: center;">
													<button id="enviar" name="enviar" class="hotEnviar">EU QUERO!</button>
													</div>
												</div>
												</fieldset>
										</form></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Bloco 2 -->

<section class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row spaceThree">
					<div class="col-lg-6 hidden-xs hidden-sm">
						<p class="textSeven">Porque escolher a<br/>O'Gara-Hess</p>
						<p><img src="images/lineOne.png" alt=""></p>
						<p class="textEight">Possuidora de um DNA puro sangue O'Gara-Hess & Eisenhardt, sempre se destacando entre os primeiros no mundo. Foi a primeira blindadora brasileira a conquistar o ISO 9002, destacando-se em segurança móvel, civil, e militar para clientes do mundo inteiro, inclusive governos e todas suas autarquias.</p>
					</div>
					<div class="col-lg-6 hidden-xs hidden-sm">
						<img src="images/img01.png"  class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-6 hidden-lg hidden-md">
						<p class="textSeven">Porque escolher a<br/>O'Gara-Hess</p>
						<img src="images/img01.png"  class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-6 hidden-lg hidden-md">
						<p><img src="images/lineOne.png" alt=""></p>
						<p class="textEight">Possuidora de um DNA puro sangue O'Gara-Hess & Eisenhardt, sempre se destacando entre os primeiros no mundo. Foi a primeira blindadora brasileira a conquistar o ISO 9002, destacando-se em segurança móvel, civil, e militar para clientes do mundo inteiro, inclusive governos e todas suas autarquias.</p>
					</div>
				</div>								
			</div>										
		</div>											
	</div>
</section>

<!-- Bloco 2  Fim -->

<!-- Bloco 3 -->

<section class="container-fluid backGround">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row spaceThree">
					<div class="col-lg-6">
						<img src="images/img08.png"  class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-6">
						<p class="textSeven">Há mais de 120 anos <br/> no mercado</p>
						<div class="row">
							<div class="col-lg-1 col-xs-2">
								<img src="images/lineTwo.png" class="img-responsive center-block" alt="">
							</div>
							<div class="col-lg-11 col-xs-10">
								<p class="textnine">Desenvolvendo as melhores soluções de blindagem</p>
							</div>
							
						</div>
						<p class="textEight">Com uma enorme quantidade de clientes, nossa a unidade é referencia pelo maior numero de veículos blindados ao longo destas ultimas décadas. A O'Gara Blindados tem a solução em blindagem e sua manutenção mais adequada à realidade de cada região específica.</p>
					</div>
					
				</div>								
			</div>										
		</div>											
	</div>
</section>

<!-- Bloco 3 Fim -->

<section class="container-fluid">
	<div class="container spaceThree">
		<div class="row">
			<div class="col-lg-3">
				<img src="images/icon01.png" class="center-block img-responsive" alt="">
				<p class="textIconOne">qualidade</p>
				<p class="textIconTwo">mão de obra e materiais de<br/>alta qualidade</p>
			</div>
			<div class="col-lg-3">
				<img src="images/icon02.png" class="center-block img-responsive" alt="">
				<p class="textIconOne">facilidade</p>
				<p class="textIconTwo">diversas Opções de <br/>pagamento</p>
			</div>
			<div class="col-lg-3">
				<img src="images/icon03.png" class="center-block img-responsive" alt="">
				<p class="textIconOne">atendimento</p>
				<p class="textIconTwo">Excelente atendimento<br/>em todo o processo</p>
			</div>
			<div class="col-lg-3">
				<img src="images/icon04.png" class="center-block img-responsive" alt="">
				<p class="textIconOne">Satisfação</p>
				<p class="textIconTwo">100% de Clientes<br/>Satisfeitos</p>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid backGroundB">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<h5>www.OGARA.com.br</h5>
			</div>										
		</div>											
	</div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
	
<script src="https://gohotsale.com.br/gohotsale.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
	if (window.location.href.indexOf('?message=') > 0) {
		swal({
		  title: "Sucesso",
		  text: "Recebemos sua mensagem, entraremos em contato o mais breve possível.",
		  icon: "success",
		  button: "Fechar",
		});
	}
</script>

<div id="go-hot-chat-container"></div><script>$(function(){$("#go-hot-chat-container").load("https://gohotsale.com.br/chatbox/38/ogara-blindados/ogara-blindados-hotsite");});</script>

</body>
</html>
