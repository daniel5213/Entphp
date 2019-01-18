	<nav class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">

		<a class="navbar-brand" href="<?=base_url()?>"> 
			<img src="<?=base_url()?>assets/img/home-alt.png" alt="INICIO" style="width: 40px;">
		</a>

		<ul class="navbar-nav">

    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Country</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>country/crear">Create</a>
    				<a class="dropdown-item" href="<?=base_url()?>country/listar">List</a>
    			</div>
    		</li>
    	
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">City</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>city/crear">Create</a>
    				<a class="dropdown-item" href="<?=base_url()?>city/listar">List</a>
    			</div>
    		</li>
	 
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">User</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>user/crear">Create</a>
    				<a class="dropdown-item" href="<?=base_url()?>user/listar">List</a>
    			</div>
    		</li>
   		</ul>
	</nav>
