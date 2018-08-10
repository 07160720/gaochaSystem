<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"D:\wwwroot\sysnaica\wwwroot\agaocha\public/../application/admin\view\support\edit.htm";i:1533795186;s:83:"D:\wwwroot\sysnaica\wwwroot\agaocha\public/../application/admin\view\common\top.htm";i:1533881065;s:84:"D:\wwwroot\sysnaica\wwwroot\agaocha\public/../application/admin\view\common\left.htm";i:1533795181;}*/ ?>
<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
    <title>编辑文章</title>
    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/style/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/style/weather-icons.css" rel="stylesheet">
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">
    <script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
    
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
                        <li>
                            <a href="<?php echo url('support/lst'); ?>">加盟支持管理</a>
                        </li>
                        <li class="active">修改加盟支持</li>
                    </ul>
                </div>
                <div class="page-body">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">修改加盟支持</span>
                                </div>
                                <div class="widget-body">
                                    <div id="horizontal-form">
                                        <form class="form-horizontal" role="form" action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $support['id']; ?>">
                                            <div class="form-group">
                                                <label for="desc" class="col-sm-2 control-label no-padding-right">开业前名称</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="desc1" placeholder="" name="desc1" value="<?php echo $support['desc1']; ?>"  type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="desc" class="col-sm-2 control-label no-padding-right">开业中名称</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="desc2" placeholder="" name="desc2" value="<?php echo $support['desc2']; ?>"  type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="desc" class="col-sm-2 control-label no-padding-right">开业后名称</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="desc3" placeholder="" name="desc3" value="<?php echo $support['desc3']; ?>"  type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default">保存信息</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
    <script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:400,});
</script>
</body>
</html>