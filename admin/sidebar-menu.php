<div class="user-panel">
        <div class="pull-left image">
          <img src="../images/user/<?php echo $_SESSION['avatar'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['fullname']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i><?php echo $_SESSION['fullname']; ?></a>
        </div>
      </div>

	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu home dipilih, menu home aktif
	if ($_GET["module"]=="home") { ?>
		<li class="active">
			<a href="?module=home"><i class="fa fa-home"></i> Home </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=home"><i class="fa fa-home"></i> Home </a>
	  	</li>
	<?php
	}

	// jika menu about dipilih, menu about aktif
	if ($_GET["module"]=="about") { ?>
		<li class="active">
			<a href="?module=about"><i class="fa fa-leaf"></i> About </a>
	  	</li>
	<?php
	}
	// jika tidak, menu about tidak aktif
	else { ?>
		<li>
			<a href="?module=about"><i class="fa fa-leaf"></i> About </a>
	  	</li>
	<?php
	}

	// jika menu service dipilih, menu service aktif
	if ($_GET["module"]=="service") { ?>
		<li class="active">
			<a href="?module=service"><i class="fa fa-check-square-o"></i> Service </a>
	  	</li>
	<?php
	}
	// jika tidak, menu service tidak aktif
	else { ?>
		<li>
			<a href="?module=service"><i class="fa fa-check-square-o"></i> Service </a>
	  	</li>
	  	<?php
	}?>

	  <li class='treeview'>
                <a href='#'>
                    <i class='fa fa-desktop'></i>
                    <span>Portfolio</span><i class='fa fa-angle-left pull-right'></i>
                </a>
                <ul class='treeview-menu'>
	<?php

	// jika menu portfolio dipilih, menu portfolio aktif
	if ($_GET["module"]=="portfolio" || $_GET["module"]=="form_portfolio") { ?>
		<li class="active">
			<a href="?module=portfolio"><i class="fa fa-circle-o"></i> Portfolio</a>
	  	</li>
	<?php
	}
	// jika tidak, menu portfolio tidak aktif
	else { ?>
		<li>
			<a href="?module=portfolio"><i class="fa fa-circle-o"></i> Portfolio</a>
	  	</li>

	<?php
	}

	if ($_GET["module"]=="category_portfolio") { ?>
		<li class="active">
			<a href="?module=category_portfolio"><i class="fa fa-circle-o"></i>  Category Portfolio</a>
	  	</li>
	<?php
	}
	// jika tidak, menu portfolio tidak aktif
	else { ?>
		<li>
			<a href="?module=category_portfolio"><i class="fa fa-circle-o"></i> Category  Portfolio</a>
	  	</li>

	<?php
	}?>

	</li>
	  	</ul>

	<?php

	// jika menu message dipilih, menu message aktif
	if ($_GET["module"]=="message" || $_GET["module"]=="form_message") { ?>
		<li class="active">
			<a href="?module=message"><i class="fa fa-envelope"></i> Message </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=message"><i class="fa fa-envelope"></i> Message </a>
	  	</li>
	<?php
	}
	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> User </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> User</a>
	  	</li>

	  	<?php 
	  	}
	  	?>


	  <li class='treeview'>
                <a href='#'>
                    <i class='fa fa-pencil-square'></i>
                    <span>Article</span><i class='fa fa-angle-left pull-right'></i>
                </a>
                <ul class='treeview-menu'>             
<?php
	
	if ($_GET["module"]=="category_article" ) { ?>
		<li class="active">
			<a href="?module=category_article"><i class="fa fa-circle-o"></i> Category Article </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=category_article"><i class="fa fa-circle-o"></i> Category Article</a>
	  	</li>

	  	<?php 
	  	}?>
<?php
	
	if ($_GET["module"]=="article" ) { ?>
		<li class="active">
			<a href="?module=article"><i class="fa fa-circle-o"></i>  Article </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=article"><i class="fa fa-circle-o"></i>Article</a>
	  	</li>

	  	<?php 
	  	}?>
	
	

	</ul>

	<li class='treeview'>
                <a href='#'>
                    <i class='fa fa-file'></i>
                    <span>Materi</span><i class='fa fa-angle-left pull-right'></i>
                </a>
                <ul class='treeview-menu'>             
<?php
	
	if ($_GET["module"]=="category_materi" ) { ?>
		<li class="active">
			<a href="?module=category_materi"><i class="fa fa-circle-o"></i> Category Materi </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=category_materi"><i class="fa fa-circle-o"></i> Category Materi</a>
	  	</li>

	  	<?php 
	  	}?>
<?php
	
	if ($_GET["module"]=="materi" ) { ?>
		<li class="active">
			<a href="?module=materi"><i class="fa fa-circle-o"></i>  Materi </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=materi"><i class="fa fa-circle-o"></i>Materi</a>
	  	</li>

	  	<?php 
	  	}?>
	  	</ul>
	  	<?php
	if ($_GET["module"]=="setting") { ?>
		<li class="active">
			<a href="?module=setting"><i class="fa fa-cogs"></i>Setting </a>
	  	</li>
	<?php
	}
	// jika tidak, menu about tidak aktif
	else { ?>
		<li>
			<a href="?module=setting"><i class="fa fa-cogs"></i> Setting </a>
	  	</li>
	<?php
	}
	?>
	


	<!--sidebar menu end-->