<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\wwwroot\sysnaica\wwwroot\agaocha\public/../application/admin\view\process\lst.htm";i:1533795184;s:83:"D:\wwwroot\sysnaica\wwwroot\agaocha\public/../application/admin\view\common\top.htm";i:1533881065;s:84:"D:\wwwroot\sysnaica\wwwroot\agaocha\public/../application/admin\view\common\left.htm";i:1533795181;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>搞茶列表</title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/style/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/style/weather-icons.css" rel="stylesheet">
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">
</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <div class="navbar-header pull-left">
                <a href="<?php echo url('index/index'); ?>" class="navbar-brand">
                    <small>
                          <img src="__PUBLIC__/images/title.jpg">
                    </small>
                </a>
            </div>
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <div class="navbar-header pull-right">
                <div class="navbar-account">

                   

                     <ul class="account-area" style=" padding: 5px; right: 120px; position: relative;">
                           <a href="http://www.sysnaica.com.cn/"><button type="button" class="btn btn-success">前台首页</button></a>
                    </ul>

                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__PUBLIC__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                        退出登录                                        
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- /头部 -->
	<div class="main-container container-fluid">
		<div class="page-container">
            <div class="page-sidebar" id="sidebar">
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <ul class="nav sidebar-menu">
        <li>
            <a href="<?php echo url('index/index'); ?>" class="menu-dropdown">
                <i class="menu-icon fa fa-film"></i>
                <span class="menu-text">搞茶后台管理</span>
                <i class="menu-expand"></i>
            </a>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text">管理员</span>
                    <i class="menu-expand"></i>
                </a>

                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('admin/lst'); ?>">
                            <span class="menu-text">
                                管理列表                                    
                            </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('auth_group/lst'); ?>">
                            <span class="menu-text">
                            用户组列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('auth_rule/lst'); ?>">
                            <span class="menu-text">
                            权限列表                                   </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul> 
            </li>  

            <li>
               <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">栏目管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/lst'); ?>">
                        <span class="menu-text">
                            栏目列表                                  
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul> 
        </li>  
        <li>                       
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">搞茶总部</span>
                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo url('headquarters/lst'); ?>">
                        <span class="menu-text">
                            搞茶总部列表                                   
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li>  
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-newspaper-o"></i>
                <span class="menu-text">动态新闻</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('news/lst'); ?>">
                        <span class="menu-text">
                            新闻列表                                  
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-support"></i>
                <span class="menu-text">成功案例</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('successful/lst'); ?>">
                        <span class="menu-text">
                            案例列表                                  
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-print"></i>
                <span class="menu-text">产品展示</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('produce/lst'); ?>">
                        <span class="menu-text">
                            展示列表                                  
                        </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user-plus"></i>
                <span class="menu-text">加盟管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('join/lst'); ?>">
                        <span class="menu-text">
                         查看留言信息                                  
                     </span>
                     <i class="menu-expand"></i>
                 </a>

                 <a href="<?php echo url('support/lst'); ?>">
                    <span class="menu-text">
                     加盟支持                                  
                 </span>
                 <i class="menu-expand"></i>
             </a>

             <a href="<?php echo url('process/lst'); ?>">
                <span class="menu-text">
                 加盟流程                                  
             </span>
             <i class="menu-expand"></i>
         </a>
     </li>
 </ul>  
</li>                             
</li> 
</ul>
</div>
            <div class="page-content">
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">系统</a>
                        </li>
                        <li class="active">加盟流程管理</li>
                    </ul>
                </div>
                <div class="page-body">
                    <button type="button" tooltip="添加加盟流程" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('process/add'); ?>'"> <i class="fa fa-plus"></i> Add
                    </button>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="flip-scroll">
                                        <table class="table table-bordered table-hover">
                                            <thead class="">
                                                <tr>
                                                    <th class="text-center" width="4%">ID</th>
                                                    <th class="text-center">流程描述</th>
                                                    <th class="text-center" width="14%">操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <tr>
                                                    <td align="center"><?php echo $vo['id']; ?></td>
                                                    <td align="center"><?php echo $vo['process']; ?></td>
                                                    <td align="center">
                                                        <a href="<?php echo url('process/edit',array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 编辑
                                                        </a>
                                                        <a href="#" onClick="warning('确实要删除吗', '<?php echo url('process/del',array('id'=>$vo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                            <i class="fa fa-trash-o"></i> 删除
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>
                                        </table><?php echo $show; ?>
                                    </div>
                                    <div style="text-align:right; margin-top:10px;">   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
    <script src="__PUBLIC__/style/jquery_002.js"></script>
    <script src="__PUBLIC__/style/bootstrap.js"></script>
    <script src="__PUBLIC__/style/jquery.js"></script>
    <script src="__PUBLIC__/style/beyond.js"></script>
</body>
</html>