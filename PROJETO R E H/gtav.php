<?php 
	include("cabecalho.php");
?>
			<h1>GTA V</h1>
			<br>
				<div class="divider"></div>
				<div class="container">
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				      <li data-target="#myCarousel" data-slide-to="3"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">

				      <div class="item active">
				        <img src="images/gtav.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>

				      <div class="item">
				        <img src="images/gtav2.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				    
				      <div class="item">
				        <img src="images/gtav3.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
				      <div class="item">
				        <img src="images/gtav4.jpg" style="width:100%;">
				        <div class="carousel-caption">
				        </div>
				      </div>
	  
	  			  </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>

			<div class="divider"></div>
			<br>

			<p class="titulos">Gênero </p>
			<p class="caracteristicas">: Ação-aventura, Tiro em primeira e terceira pessoa</p>
			<div class='divider'></div>
			<br>

			<p class="titulos"> Disponível em  </p>
			<p class="caracteristicas">: Xbox One e Xbox 360 / PS3 e PS4 / PC</p>
			<div class='divider'></div>
			<br>

			<p class="titulos">Data de Lançamento </p>
			<p class="caracteristicas">: 17/09/2013</p>
			<div class='divider'></div>
			<br>

			
			<p class="descricao">* Grand Theft Auto (GTA) é uma série de jogos de computador e videogames criada por David Jones e Mike Dailly e desenvolvida pela Rockstar Games, o jogo pode ser jogado em primeira e terceira pessoa, onde o jogador tem a liberdade de andar por todas as cidades fictícias disponíveis, podendo cumprir missões, confrontar e se unir a gangues, realizar assaltos, dirigir carros, pilotar aviões ou apenas prosseguir com a história do jogo.
			</p>
			<div class='divider'></div>
			<br /><br />

			<img src="images/rexview.png" class="rexview">
			<p class="descricao"> - O jogo ainda guarda espaço para os dramas pessoais dos personagens, que rendem boas histórias e até algumas missões, como a em que Michael sai para dar uma volta de bicicleta com o filho e termina envolvido em uma confusão num barco.<br /><br />

			- O destaque fica para os roubos a bancos e lojas, que precisam ser planejados com antecedência. Neles, é possível recrutar comparsas (que ficam com parte da grana) e escolher entre diferentes estratégias, que vão de entradas mais discretas até o bom e velho pé-na-porta.<br /><br />

			- Um dos pontos mais positivos foi a adição de checkpoints durante as missões. A alteração faz a sua estreia em GTA V depois das constantes e insistentes reclamações de jogadores frustrados, que eram forçados a voltar do início dos desafios depois de um erro. Os pontos de salvamento são posicionados de forma aleatória, mas salvam a vida e o tempo dos jogadores.<br /><br />

			- GTA V é facilmente o mais pesado e polêmico jogo da série. A Rockstar parece ter se preocupado ainda menos em tornar a experiência menos rude, partindo para um rumo ainda mais violento e cru. Tiros na cara, tortura e cenas de sexo direcionam o jogo ainda mais para o público adulto.<br /><br />

			- Ruas, edifícios, rodovias, cruzamentos, zona rural, rios, cada parte da cidade foi construída com extremo cuidado e capricho. Em áreas mais ricas é fácil encontrar carros de luxo e pedestres bem vestidos, enquanto as zonas mais modestas são habitadas por veículos mais antigos e até animais cruzando as ruas, novidade na série.<br /><br />

			- GTA V também ganhou uma enorme variedade de veículos. Seguindo o padrão dos games da série, tratam-se de claras versões genéricas de grandes carros como Audi, Ferrari e Porsche, que desfilam pelas movimentadas ruas do jogo. Todos os carros podem ser personalizados no maior estilo Need For Speed: Underground, com a adição de peças, pinturas diferenciadas e troca de rodas. O desempenho dos possantes também é alterado, deixando-os mais rápidos e fácies de controlar.<br /><br />

			- GTA 5 chega para assumir o importante posto de um dos melhores jogos da geração. Com enredo de qualidade, jogabilidade afiada e divertida, gráficos impressionantes e opções variadas de diversão, como armas, carros, aeronaves e esportes, o game é praticamente incomparável nos quesitos conteúdo e qualidade. Mais uma prova da excelência da Rockstar, dona de mais um clássico instantâneo.<br /><br />
			</p>

			<div class='divider'></div>

			<div class="nots">
			<p class="nota"> 10,0 </p>
			</div>
			<div class='divider'></div>
			<p class="avaliacao"> - Gráficos - 10; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Jogabilidade - 10; </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			<p class="avaliacao"> - Som - 10: </p> <img src="images/green.png" class="avaliacg">
			<div class='divider'></div>
			</div>

			<?php
			if (isset($_SESSION['login'])) {
				echo '<form id="cadastres">';
				echo('<a href="excluiresenha.php"><input type="button" id="butecao" name="botao" value="Excluir Resenha"></a>');
				echo '</form>';
			}
			?>

<?php 
			include("rodape.php");
?>