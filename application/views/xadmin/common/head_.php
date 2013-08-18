<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>AICS | Smartlink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="<?=base_url('public');?>/admin/css/loader.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('fonts/font.css')?>">
<style type="text/css">
      html,
      body {
        height: 100%;
		margin:0;
		padding:0;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrapper {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto;
        background:url(<?=base_url()?>public/admin/images/left-repeat.png)repeat-y 207px 0px;
      }
</style>


</script>
</head>
<body>
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?=base_url('xadmin')?>"><img src="<?=base_url('public/admin/images/brand-logo.png')?>" alt="AICS Smartlink" style="width: 130px;" /></a>       
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="#administration">Administration Panel</a>
            </ul>
            <ul class="nav pull-right" role="navigation" id="user-login">
                    <li class="dropdown">
                      <a id="user-dropdown" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" style="background:none;padding-right:0;margin-right:0">Logged in as <strong><?=$info['email_address']?></strong> <i class="icon-cog icon-white"></i></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="user-dropdown" style="margin-left: 0px;margin-top: 6px;">
                        <li><a href="<?=base_url('xadmin/account/account-information')?>"><i class="icon-info-sign"></i> My Account Information</a></li>
                        <li><a href="<?=base_url('xadmin/account/settings')?>"><i class="icon-cog"></i> Account Settings</a></li>
               
                        <li class="divider"></li>
                        <li><a href="<?=base_url('main/logout')?>"><i class="icon-off"></i> Logout</a></li>
                      </ul>
                    </li>
         
                  </ul>
          </div>
        </div>
      </div>
    </div>

<!--
 <h4>Tooltips in a modal</h4>
              <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> should have tooltips on hover.</p>

 


<div class="navbar navbar-fixed-top navbar-inverse navbar-static-top">
              <div class="navbar-inner">
                <div class="container" style="width: auto; padding: 0 20px;">
                  <a class="brand" href="<?=base_url('xadmin')?>"><img src="<?=base_url('public/admin/images/brand-logo.png')?>" alt="AICS Smartlink" style="width: 130px;" /></a>
                  <ul class="nav">
                    <li class="active"><a href="<?=base_url('xadmin')?>">Administration Panel</a></li>
                  </ul>

                   <ul class="nav pull-right" role="navigation" id="user-login">
                    <li class="dropdown">
                      <a id="user-dropdown" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" style="background:none;padding-right:0;margin-right:0">Logged in as <strong><?=$info['email_address']?></strong> <i class="icon-cog icon-white"></i></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="user-dropdown" style="margin-left: 0px;margin-top: 6px;">
                        <li><a href="<?=base_url('xadmin/account/account-information')?>"><i class="icon-info-sign"></i> My Account Information</a></li>
                        <li><a href="<?=base_url('xadmin/account/settings')?>"><i class="icon-cog"></i> Account Settings</a></li>
               
                        <li class="divider"></li>
                        <li><a href="<?=base_url('main/logout')?>"><i class="icon-off"></i> Logout</a></li>
                      </ul>
                    </li>
         
                  </ul>
                </div>
              </div>

            </div>-->
  <div class="container">

          
   