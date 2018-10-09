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
												<input type="hidden" name="hotsite" id="hotsite" value="casa-toda-favorita-hotpage">
												<input type="hidden" name="company" id="company" value="favorita-mov-decor">
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

<section class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 hidden-xs hidden-sm">
				<p class="textSix">Sofa • Mesa de Jantar • Mesa de centro • rack • home theather</p>								
			</div>	
			<div class="col-xs-12 hidden-lg hidden-md spaceMobOne">
				<p class="textSix">• Sofa •<br/>• Mesa de Jantar •<br/>• Mesa de centro •<br/>• rack •<br/>• home theather</p>								
			</div>									
		</div>											
	</div>
</section>

<section class="container-fluid backGround">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row spaceThree">
					<div class="col-lg-6 hidden-xs hidden-sm">
						<p class="textSeven">Você vai se surpreender<br/>com o resultado!</p>
						<p><img src="images/lineOne.png" alt=""></p>
						<p class="textEight">A Privilégios têm soluções de design incríveis para deixar a sua casa ou o seu apartamento do jeito que você sonha! Móveis e Design sob medida para os seus ambientes e estilo de vida, com aproveitamento inteligente de espaços, materiais da melhor qualidade e acabamentos que são referência no mercado.</p>
					</div>
					<div class="col-lg-6 hidden-xs hidden-sm">
						<img src="images/img01.png"  class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-6 hidden-lg hidden-md">
						<p class="textSeven">Você vai se surpreender<br/>com o resultado!</p>
						<img src="images/img01.png"  class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-6 hidden-lg hidden-md">
						<p><img src="images/lineOne.png" alt=""></p>
						<p class="textEight">A Privilégios têm soluções de design incríveis para deixar a sua casa ou o seu apartamento do jeito que você sonha! Móveis e Design sob medida para os seus ambientes e estilo de vida, com aproveitamento inteligente de espaços, materiais da melhor qualidade e acabamentos que são referência no mercado.</p>
					</div>
				</div>								
			</div>										
		</div>											
	</div>
</section>

<section class="container-fluid">
	<div class="container spaceThree">
		<div class="row">
			<div class="col-lg-4 spaceZero">
				<img src="images/img02.png" class="center-block img-responsive" alt="">
			</div>
			<div class="col-lg-4 spaceZero">
				<img src="images/img03.png" class="center-block img-responsive" alt="">
			</div>
			<div class="col-lg-4 spaceZero">
				<img src="images/img04.png" class="center-block img-responsive" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 spaceZero">
				<img src="images/img05.png" class="center-block img-responsive" alt="">
			</div>
			<div class="col-lg-4 spaceZero">
				<img src="images/img06.png" class="center-block img-responsive" alt="">
			</div>
			<div class="col-lg-4 spaceZero">
				<img src="images/img07.png" class="center-block img-responsive" alt="">
			</div>
		</div>
	</div>
</section>

<section class="container-fluid backGround">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row spaceThree">
					<div class="col-lg-6">
						<img src="images/img08.png"  class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-6">
						<p class="textSeven">Somos referência<br/>no mercado!</p>
						<div class="row">
							<div class="col-lg-1 col-xs-2">
								<img src="images/lineTwo.png" class="img-responsive center-block" alt="">
							</div>
							<div class="col-lg-11 col-xs-10">
								<p class="textnine">Há mais de 15 anos atuando no<br/>ramo de móveis.</p>
							</div>
							
						</div>
						<p class="textEight">Temos compromisso com o seu produto e com a sua satisfação, por isso, realizamos projetos personalizados, baseados na necessidade de cada cliente prezando sua satisfação com total transparência em todas as etapas de produção do seu ambiente.</p>
					</div>
					
				</div>								
			</div>										
		</div>											
	</div>
</section>

<section class="container-fluid">
	<div class="container spaceThree">
		<div class="row">
			<div class="col-lg-3">
				<img src="images/icon01.png" class="center-block img-responsive" alt="">
				<p class="textIconOne">qualidade</p>
				<p class="textIconTwo">mais de 5.400 Projetos<br/>realizados</p>
			</div>
			<div class="col-lg-3">
				<img src="images/icon02.png" class="center-block img-responsive" alt="">
				<p class="textIconOne">Excelência</p>
				<p class="textIconTwo">Pontualidade e<br/>montagem perfeita</p>
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

<section class="container-fluid backGround">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row spaceThree">
					<div class="col-lg-12">
						<h2>Onde estamos</h2>
					</div>
				</div>
				<div class="row spaceThree">
					<div class="col-lg-6">
						<img src="images/loja01.png" class="img-responsive center-block" alt="">
						<p class="loja">Loja 1</p>
						<p><img src="images/lineOne.png" class="center-block" alt=""></p>
						<p class="lojaB">RUA FELÍCIO LAURITO, 26<br/>CENTRO - CEP 09725-620<br/>SÃO BERNARDO DO CAMPO - SP<br/>TEL. (11) 4330-5153</p>
					</div>
					<div class="col-lg-6">
						<img src="images/loja02.png" class="img-responsive center-block" alt="">
						<p class="loja">Loja 2</p>
						<p><img src="images/lineOne.png" class="center-block" alt=""></p>
						<p class="lojaB">RUA JURUBATUBA, 396<br/>CENTRO - CEP 09725-620<br/>SÃO BERNARDO DO CAMPO - SP<br/>TEL. (11) 4332-6680</p>
					</div>
				</div>									
			</div>										
		</div>											
	</div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
