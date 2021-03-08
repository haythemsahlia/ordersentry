<html>
<head>
<style type="text/css">
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css";
#templateContainer {
  background-image: url("/tile.png");
  background-repeat: repeat;
  color: #606062;
  overflow: scroll;
}

#templateContainer.fullscreen {
  z-index: 9999;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
}

#templateContainer .navbar.alta-theme {
  border-bottom: 1px solid #c0c0c0;
  box-shadow: 0px 10px 15px #c0c0c0;
  height: 85px;
  background-color: #F5F5F5;
}


/*
 * Top navigation
 * Hide default border to remove 1px line.
 */

#templateContainer .navbar-fixed-top {
  border: 0;
}

#templateContainer h1 {
  margin-right: 100px;
  margin-left: 100px;
}

#templateContainer .container-fluid.alta-theme {
  background-color: #FFF;
  margin-right: 100px;
  margin-left: 100px;
}


/*
 * Main content
 */

#templateContainer .main {
  padding: 20px;
  padding-top: 0px;
}

#templateContainer .main.alta-theme {
  margin-top: 0px;
}

@media (min-width: 768px) {
  .main {
    padding-right: 60px;
    padding-left: 60px;
  }
}

#templateContainer .main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

#templateContainer .placeholders {
  margin-bottom: 10px;
  text-align: center;
}

#templateContainer .placeholders h4 {
  margin-bottom: 0;
  font-weight: bold;
}

#templateContainer .placeholder {
  margin-bottom: 30px;
}

#templateContainer .placeholder img {
  display: inline-block;
  border-radius: 50%;
}

#templateContainer .placeholder .dashboard-item {
  display: inline-block;
  width: 200px;
  height: 200px;
  border: 9px double #EFF;
  border-radius: 50%;
  vertical-align: middle;
  font-size: 65px;
  color: #FFF;
  box-shadow: 0px 0px 10px #999;
}

#templateContainer .placeholder .dashboard-item:hover {
  box-shadow: 0px 0px 25px #888;
}


/* circular navigation */

#templateContainer .circular-menu {
  width: 250px;
  height: 250px;
  margin: 0 auto;
}

#templateContainer .circle {
  width: 250px;
  height: 250px;
  opacity: 0;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
}

#templateContainer .open.circle {
  opacity: 1;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  transform: scale(1);
}

#templateContainer .circle a {
  text-decoration: none;
  display: block;
  height: 40px;
  width: 40px;
  line-height: 40px;
  margin-left: -20px;
  margin-top: -20px;
  position: absolute;
  text-align: center;
  line-height: 80%;
  font-weight: bold;
}

#templateContainer .circle a:hover {}

#templateContainer .menu-button {
  position: relative;
  top: -225px;
}

#templateContainer .dashboard-item.menu-button.selected {
  top: -175px;
  width: 100px;
  height: 100px;
  font-size: 35px;
  -webkit-transition: all 0.4s linear;
  -moz-transition: all 0.4s linear;
  transition: all 0.4s linear;
}
#templateContainer{
overflow: hidden;
}
#circlelink a:hover{color: gray!important;}
</style>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
$(function() {
  $('.menu-button').each(function() {
    var items = this.parentNode.querySelectorAll('.circle a');
    for (var i = 0, l = items.length; i < l; i++) {
      items[i].style.left = (50 - 42 * Math.cos(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%";
      items[i].style.top = (50 + 42 * Math.sin(-0.5 * Math.PI - 2 * (1 / l) * i * Math.PI)).toFixed(4) + "%";
    }
  });

  $('.circular-menu').hover(function() {
    this.querySelector('.circle').classList.add('open');
    this.querySelector('.menu-button').classList.add('selected');
  }, function() {
    this.querySelector('.circle').classList.remove('open');
    this.querySelector('.menu-button').classList.remove('selected');
  });

  $("#homebtn").click(function(){
  window.location.href='../';
  });
  $("#ordersbtn").click(function(){
  window.location.href='../orders';
  });
  $("#productsbtn").click(function(){
  window.location.href='../products';
  });
  $("#categoriesbtn").click(function(){
  window.location.href='../categories';
  });
  $("#itemsbtn").click(function(){
  window.location.href='../items';
  });
  $("#customersbtn").click(function(){
  window.location.href='../customers';
  });
  $("#settingsbtn").click(function(){
  window.location.href='../users';
  });
});
</script>
</head>
<body>
  <?php 
     $this->pageTitle = 'Dashboard';
     $this->layout = 'homepage';

// page header
echo '<div class = "alert alert-info" style="margin-left:0px;padding: 15px;">';

  echo '<span style="font-size:20px;font-weight:bold;margin-right:20px;padding-top:20px!important;" ><i class="fa fa-fw fa-dashboard" style="color:#999;"></i> Dashboard  </span>';
  
?>
<ul class="nav navbar-nav navbar-right" style="margin-top:-10px;margin-right: 15px;">
       <!-- <li><a href="#"></a></li>-->
     <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span style="color:#31708f!important;"> <?php echo $this->Session->read('Auth.User.username') ; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                 <img src="http://temps.comptaffaires.org/app/webroot/img/avatar5.png"  class="img-circle" alt="User Image" /> 
                                    <p>
                                        <?php echo $this->Session->read('Auth.User.username') ;?>  </br>
                                      
                                        <small>Member since <?php echo substr( $this->Session->read('Auth.User.created'),0,10) ;?> </small>
                                    </p>
                                </li>
                                <!-- Menu Body 
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>-->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                  <div class="pull-left">
                                        <?php echo '<a   href="'. Router::url('/').'users/profile" class="btn btn-default btn-flat">Profile </a>';?>
                                    </div> 
                                    <div class="pull-right">
                                        <?php echo '<a   href="'. Router::url('/').'logout"   class="btn btn-default btn-flat">Logout</a>';?>
                                    </div>
                                </li>
                            </ul>
                        </li>
        
      </ul>
</div>
<div id="templateContainer">
  <!--<nav class="navbar navbar-fixed-top alta-theme" style="position:relative;">
    <div class="container-fluid">
      <div class="navbar-header">
        <span style="float:left; font-size:25px; margin:20px 10px;"><img src="./logo.jpg" height="40px;" style="margin-right:10px;"/><b>Orders App</b></span>
      </div>
    </div>
  </nav>
<br/>
  <h1>Dashboard</h1>

  !-->

  

  <div class="container-fluid alta-theme">
    <div class="col-md-12 main alta-theme">

      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <div class="circular-menu">
            <div class="circle">
              <!--<a href=""><span class="fa fa-home fa-2x"></span></a>-->
            </div>
            <button class="dashboard-item menu-button" style="background-color:#3c8dbc;" id="homebtn">
              <a class="circlelink" style="color: #ffffff!important;" ><span class="fa fa-home"></span></a>
            </button>
          </div>
          <h4>Home</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <div class="circular-menu">
            <div class="circle">
              <a href=""></a>
              <a style="color:#51cbee!important;" href="http://ordersentry.enterpriseesolutions.com/orders/add"><span class="fa fa-fw fa-cart-plus fa-2x"></span>Add</a>
              <a style="color:#51cbee!important;" href="http://ordersentry.enterpriseesolutions.com/orders"><span class="fa fa-fw fa-list-ul fa-2x"></span>List</a>
            </div>
            <button class="dashboard-item menu-button" style="background-color:#00B8ED;" id="ordersbtn">
              <a class="circlelink" style="color: #ffffff!important;" ><span class="fa fa-shopping-cart"></span></a>
            </button>
          </div>
          <h4>Orders</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <div class="circular-menu">
            <div class="circle">
              <a href=""></a>
              <a href=""></a>
              <a style="color:#37c561!important;" href="http://ordersentry.enterpriseesolutions.com/products"><span class="fa fa-fw fa-list-ul fa-2x"></span>List</a>
            </div>
            <button class="dashboard-item menu-button" style="background-color:#68C182;" id="productsbtn">
              <a class="circlelink" style="color: #ffffff!important;" ><span class="fa fa-fw fa-cutlery"></span></a>
            </button>
          </div>
          <h4>Products</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <div class="circular-menu">
            <div class="circle">
              <a href=""></a>
              <a href=""></a>
              <a style="color:#03f049!important;" href="http://ordersentry.enterpriseesolutions.com/categories"><span class="fa fa-fw fa-list-ul fa-2x"></span>List</a>
            </div>
            <button class="dashboard-item menu-button" style="background-color:#01c93c;" id="categoriesbtn">
              <a class="circlelink" style="color: #ffffff!important;" ><span class="fa fa-fw fa-tags"></span></a>
            </button>
          </div>
          <h4>Categories</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <div class="circular-menu">
            <div class="circle">
             <a href=""></a>
              <a href=""></a>
              <a style="color:#ffa019!important;" href="http://ordersentry.enterpriseesolutions.com/items"><span class="fa fa-fw fa-list-ul fa-2x"></span>List</a>
            </div>
            <button class="dashboard-item menu-button" style="background-color:#FFB54D;" id="itemsbtn">
              <a class="circlelink" style="color: #ffffff!important;" ><span class="fa fa-coffee"></span></a>
            </button>
          </div>
          <h4>Items</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <div class="circular-menu">
            <div class="circle">
             <a href=""></a>
              <a href=""></a>
              <a style="color:#666a70!important;" href="http://ordersentry.enterpriseesolutions.com/customers"><span class="fa fa-fw fa-list-ul fa-2x"></span>List</a>
            </div>
            <button class="dashboard-item menu-button" style="background-color:#989fa8;" id="customersbtn">
              <a class="circlelink" style="color: #ffffff!important;" ><span class="fa fa-users"></span></a>
            </button>
          </div>
          <h4>Customers</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <div class="circular-menu">
            <div class="circle">
              <a href=""></a>
              <a href=""></a>
              <a style="color:#ee350b!important;" href="http://ordersentry.enterpriseesolutions.com/users"><span class="fa fa-fw fa-list-ul fa-2x"></span>Users</a>
            </div>
            <button class="dashboard-item menu-button" style="background-color:#ed6647;" id="settingsbtn">
              <a class="circlelink" style="color: #ffffff!important;" ><span class="fa fa-wrench"></span></a>
            </button>
          </div>
          <h4>Settings</h4>
        </div>

      </div>
    </div>
  </div>
</div>
</body>
</html>
