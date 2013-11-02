
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
            <li class="active"><a href="<?php echo site_url()?>">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="<?php echo site_url('news')?>">News</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="jumbotron">
		<div class="container head-container">
		<h1>Welcome to Bootigniter</h1>
		</div>
		
		<div class ="row NEContainer">
			<!-- NEWS -->
			<div class="col-md-5 col-md-offset-1">
				<h2 id="NewsH">News</h2>
				<div class="panel-group" id="NewsP">
					<?php
						$ct = 1;
						if(count($news)>0){
							foreach ($news as $n){
								echo "<div class='panel panel-default'>\n";
								
								echo "<div class='panel-heading'>\n";
								echo "<h2 class='panel-title'>";
								echo "<a data-toggle='collapse' data-parent='#NewsP' href='#collapse".$n['id']."'>\n";
								echo $ct.". ".$n['title']."\n";
								echo "</a>\n";
								echo "</h2>\n";
								echo "</div>\n";
								
								echo "<div id='collapse".$n['id']."' class='panel-collapse collapse";
								if($ct == 1){
									echo " in'>\n";
								}
								else{
									echo "'>\n";
								}
								echo "<div class='panel-body'>\n";
								echo $n['content']."\n";
								echo "</div>\n";
								echo "</div>\n";
								echo "</div>\n";
								$ct+=1;
							}
						}
						else{
							echo "<img src='".base_url('img/DOGE.png')."'>";
							echo "<div class='alert alert-info'>There are no news to display</div>";
						}
					?>
				</div>
			</div>
			<!-- End of News -->
			
			<!-- Start of Events -->
			<div class="col-md-5">
				<h2 id="EventsH">Events</h2>
				<div class="panel-group" id="EventsP">
					<?php
						$ct = 1;
						if(count($events)>0){
							foreach ($events as $n){
								echo "<div class='panel panel-default'>\n";
								
								echo "<div class='panel-heading'>\n";
								echo "<h2 class='panel-title'>";
								echo "<a data-toggle='collapse' data-parent='#EventsP' href='#Ecollapse".$n['id']."'>\n";
								echo $ct.". ".$n['title']."\n";
								echo "</a>\n";
								echo "</h2>\n";
								echo "</div>\n";
								
								echo "<div id='Ecollapse".$n['id']."' class='panel-collapse collapse'>";
								echo "<div class='panel-body'>\n";
								echo $n['content']."\n";
								echo "</div>\n";
								echo "</div>\n";
								echo "</div>\n";
								$ct+=1;
							}
						}
						else{
							echo "<img src='".base_url('img/DOGE.png')."'>";
							echo "<div class='alert alert-info'>There are no events to display</div>";
						}
					?>
				</div>
			</div>
			
		</div>
		<!-- End of Events -->
		
		<div class = "row">
			<!-- Start of Annnouncements -->
			<div class = "col-md-10 col-md-offset-1">
				<h2>Announcements</h2>
				<?php
					if(count($announcements) != 0){
						echo "<ul class='media-list media-container'>";
						$ct = 1;
						foreach ($announcements as $a){
							echo "<li class='media'>";
							
							echo "<a class='";
							if($ct%2 == 1){
								echo "pull-left";
							}
							else{
								echo "pull-right";
							}
							echo "' href='#'>";
							echo "<img class='media-object' src='".base_url("img/DOGE.png")."' alt='".$ct."' width='64' heigth='64'></img>";
							echo "</a>";
							
							echo "<div class='media-body'>";
							echo "<h3 class='media-heading'>".$a['title']."</h3>";
							echo $a['content'];
							echo "</div>";
							
							echo "</li>";
							$ct++;
						}
						echo "</ul>";
					}
					else{
						echo "<div class='alert alert-warning'>There are no announcements to display</div>";
					}
				?>
				</ul>
				</table>			
			</div>
			<!-- End of Announcements -->
		</div>
		
	</div><!-- /.container -->

