
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-qgyWs2Kj6F9ZJz5uG1xU6g3qB9LpShzFTj3W8VvzwsfZ5G5Q14wjbRWJ8M0vRtkG1mJR2KVH+wLWzNU+IYRmDw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<aside class="main-sidebar sidebar-dark-primary elevation-2 bg-navy col-md-3">
    <div class="dropdown">
        <?php if($_SESSION['login_type'] == 1): ?>
          <!--<h2 class="text-center p-8 m-7 "><b>KIN</b></h2>-->      
    </div>
    <div class="sidebar pb-4 mb-4">
      <div class="d-flex flex-column">
        <img src="assets/uploads/logo3.png" class="img-fluid" style="height: auto; width: 100%; background-color: none; padding-bottom: 50px;">
        <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
          <h6 class="text-center p-1 m-1 fs-2 fs-md-3 fs-lg-4" style="color: white; font-family: 'Playfair Display', serif;"><b>ADMIN</b></h6>
          <?php else: ?>
          <h5 class="text-center p-4 m-4"><b>USER</b></h5>
          <?php endif; ?>
        </div>
        <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>  
          
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_project nav-view_project">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Projects
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if($_SESSION['login_type'] != 3): ?>
              <li class="nav-item">
                <a href="./index.php?page=new_project" class="nav-link nav-new_project tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
            <?php endif; ?>
              <li class="nav-item">
                <a href="./index.php?page=project_list" class="nav-link nav-project_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
                <a href="./index.php?page=task_list" class="nav-link nav-task_list">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Task</p>
                </a>
          </li>
          <?php if($_SESSION['login_type'] != 3): ?>
           <li class="nav-item">
                <a href="./index.php?page=reports" class="nav-link nav-reports">
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>Report</p>
                </a>
          </li>
          
          
          <?php endif; ?>
          <?php if($_SESSION['login_type'] == 1): ?>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_user" class="nav-link nav-new_user tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=user_list" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
          <?php endif; ?>
          <?php if($_SESSION['login_type'] == 1): ?>
            <li class="nav-item">
                  <a href="./index.php?page=about_us" class="nav-link nav-about_us">
                    <i class="fas fa-info-circle nav-icon"></i>
                    <p>About Us</p>
                   </a>

           </li>
           
                
          </li>
          </li>
        <?php endif; ?>
        </ul>
        </nav>
      </div>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
      
     
  	}

    )
    $(document).ready(function() {
  // get current page URL
  var currentUrl = window.location.href;
  
  // check if current URL contains "aboutus" keyword
  if (currentUrl.indexOf("aboutus") !== -1) {
    // if it does, add "active" class to the "About Us" link
    $(".nav-about_us").addClass("active");
  }
});

    
  </script>