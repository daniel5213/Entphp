	<nav class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">

		<a class="navbar-brand" href="<?=base_url()?>"> 
			<img src="<?=base_url()?>assets/img/home-alt.png" alt="INICIO" style="width: 40px;">
		</a>

		<ul class="navbar-nav">

    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> País</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>pais/crear">Crear</a>
    				<a class="dropdown-item" href="<?=base_url()?>pais/listar">Listar</a>
    			</div>
    		</li>
    	
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Persona</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>persona/crear">Crear</a>
    				<a class="dropdown-item" href="<?=base_url()?>persona/listar">Listar</a>
    			</div>
    		</li>
    		
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Coche</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>coche/crear">Crear</a>
    				<a class="dropdown-item" href="<?=base_url()?>coche/listar">Listar</a>
    			</div>
    		</li>

	 
   		</ul>
	</nav>
