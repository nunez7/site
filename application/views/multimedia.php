<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
	<?php $this->load->view('scripts') ?>
</head>
<body>
	<div class="container">
		<?php $this->load->view('navigation'); ?>
		
		<div id="content">
			<h1>División de Ingeniería Ciencia y Tecnología</h1>
			
			<article>
				<div class="carreras">
					<h2>TIC área Multimedia y Comercio Electrónico</h2>
					<ul>
						<li class="title">Los alumnos aprenderán a:</li>
						<li>Auditar sistemas y software.</li>
						<li>Desarrollar animaciones en 2D y 3D.</li>
						<li>Implementar y gestionar redes computacionales.</li>
						<li>Desarrollar y administrar sitios web y comercio electrónico.</li>
						<li>Reparar y dar soporte técnico a equipo de cómputo.</li>
					</ul>
					<ul>
						<li class="title">Podrán trabajar en:</li>
						<li>Análisis de sistemas.</li>
						<li>Programación.</li>
						<li>Administrar bases de datos y páginas web.</li>
						<li>Diseño y desarrollo de proyectos multimedia y Sitios web.</li>
						<li>Soporte de sistemas informáticos.</li>
						<li>Desarrollo y consultoría de software.</li>
					</ul>
				</div>
				<p class="gallery-link"><a href="<?php echo site_url("career");?>">Volver</a></p>	
			</article>
			
		</div>
		<?php $this->load->view('footer'); ?>
	</div>
</body>
</html>