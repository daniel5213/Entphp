	<nav class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">

		<a class="navbar-brand" href="<?=base_url()?>"> 
			<img src="<?=base_url()?>assets/img/home-alt.png" alt="INICIO" style="width: 40px;">
		</a>

		<ul class="navbar-nav">

    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> DESPLEGABLE</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>contr1/acc1">Submenú1</a>
    				<a class="dropdown-item" href="<?=base_url()?>cont2/acc2">Submenú2</a>
    			</div>
    		</li>
    	
    		<li class="nav-item">
    			<a class="nav-link" href="<?=base_url()?>home/adios">DESPEDIRSE </a>
    		</li>
		 
   		</ul>
	</nav>
