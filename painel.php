<?php
session_start();
include('verifica_login.php');
?>

<h2><?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>


<div class="table-reponsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr class="well">
							<th style="width: 60px;">Codigo</th>
							<th style="text-align: left;">Titulo</th>
							<th style="width: 41px;"><a class="btn btn-xs btn-success" href="${linkTo[BairroController].novo }"><span class="glyphicon glyphicon-plus"> </span></a></th>
						</tr>	
															
					</thead>
					
					<tbody>
						<c:forEach items="${bairroList}" var="b">
							<tr>
								<td>${b.codigo}</td>
								<td align="left">${b.nome}</td>
								<td align="left">${b.cidade.nome}</td>
								<td align="right" style="width: 41px;">
									<a class="btn btn-xs btn-primary" type="button" href="${linkTo[BairroController].visualiza[b]}"><span class="glyphicon glyphicon-pencil"></span></a>
								</td>
							</tr>	
						</c:forEach>	
						
					</tbody>
				</table>
			</div>