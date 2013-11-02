
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
    
    <div class="jumbotron">
    
		<div class="container head-container"><h1>Create A News<h1></div>
		<div class='row'>
			
			<?php echo validation_errors("<div class='col-md-8 col-md-offset-2'><div class='alert alert-danger'>", "</div></div>");?>
			<div class="col-md-8 col-md-offset-2">
			<form action="<?=site_url('news/create')?>" method='post' form='form'>
				
				<div class='form-group'>
				<label for='title'>Title</label>
				<input type='text' id='title' name='title' class='form-control' placeholder='Title'></input>
				</div>
				
				<div class='form-group'>
				<label for='content'>Content</label>
				<textarea class='form-control' id='content' name='content' placeholder='Content' rows="25"></textarea>
				</div>
				
				<div class='form-group'>
				<input type='submit' class='btn btn-primary btn-lg btn-block'></input>
				</div>
				
			<form>
			</div>
		</div>
    </div>