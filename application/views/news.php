	<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand navbar-right" href="#">Bootigniter</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url()?>">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="active"><a href="#contact">News</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class='jumbotron'>
		<div class="container head-container"><h1>News</h1></div>	
		
		<div class="row">
		
			<div class="col-md-3 col-md-offset-1 nsidebar-container">
					<ul class='nav nav-stacked nav-pills'>
					<?php
						foreach($news as $n){
							echo "<li><a href='#".$n['id']."n'>".$n['title'];
							echo "</a></li>";
						}
					?>
					<li><a href="<?=site_url('news/create')?>">+ Add a news</a></li>
					</ul>
			</div>
			
			<div class="col-md-7">
				<div class='panel-group'>
					<?php
						foreach($news as $n){
							echo "<div class='panel panel-default' id='".$n['id']."n'>";
							
							echo "<div class='panel-heading'>";
							echo "<h2 class='panel-title'>".$n['title']."</h2>";
							echo "</div>";
							
							echo "<div class='panel-body'>";
							echo $n['content'];
							echo "</div>";
							
							echo "</div>";
						}
					?>
				</div>
			</div>
		
		</div>
    </div>