<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"D:\PhpStudy\PHPTutorial\WWW\agaocha\public/../application/admin\view\auth_group\edit.htm";i:1532519389;s:83:"D:\PhpStudy\PHPTutorial\WWW\agaocha\public/../application/admin\view\common\top.htm";i:1533794098;s:84:"D:\PhpStudy\PHPTutorial\WWW\agaocha\public/../application/admin\view\common\left.htm";i:1533794694;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>编辑用户组</title>
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
                            <a href="<?php echo url('lst'); ?>">用户组管理</a>
                        </li>
                        <li class="active">修改用户组</li>
                    </ul>
                </div>
                <div class="page-body">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">修改用户组</span>
                                </div>
                                <div class="widget-body">
                                    <div id="horizontal-form">
                                        <form class="form-horizontal" role="form" action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $authgroups['id']; ?>" />
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">用户组名称</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control"  placeholder="" value="<?php echo $authgroups['title']; ?>" name="title" required="" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">启用状态</label>
                                                <div class="col-sm-6">
                                                    <p class="help-block col-sm-4 red">
                                                        <label>
                                                            <input class="checkbox-slider colored-darkorange" name="status" value="1"  <?php if($authgroups['status'] == 1): ?>checked="checked"<?php endif; ?> type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                                <div class="col-sm-6">
                                                 <table class="table table-hover">
                                                    <thead class="bordered-darkorange">
                                                        <tr>
                                                            <th>
                                                                配置权限
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(is_array($authRuleRes) || $authRuleRes instanceof \think\Collection): $i = 0; $__LIST__ = $authRuleRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$authRule): $mod = ($i % 2 );++$i;?>
                                                        <tr>
                                                            <td>
                                                                <label>
                                                                    <?php echo str_repeat('&nbsp;', $authRule['level']*3);?>
                                                                    <input name="rules[]" value="<?php echo $authRule['id']; ?>"
                                                                    <?php $arr=explode(',', $authgroups['rules']); if(in_array($authRule['id'], $arr)){echo 'checked="checked"';} ?>
                                                                    dataid="id-<?php echo $authRule['dataid']; ?>" class="inverted checkbox-parent <?php if($authRule['level'] != 0): ?> checkbox-child <?php endif; ?> " type="checkbox">
                                                                    <span <?php if($authRule['level'] == 0): ?> style="font-weight:bold; font-size:14px;" <?php endif; ?> class="text"><?php echo $authRule['title']; ?></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
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
<script src="__PUBLIC__/style/jquery_002.js"></script>
<script src="__PUBLIC__/style/bootstrap.js"></script>
<script src="__PUBLIC__/style/jquery.js"></script>
<script src="__PUBLIC__/style/beyond.js"></script>
<script type="text/javascript">
    /* 权限配置 */
    $(function () {
    //动态选择框，上下级选中状态变化
    $('input.checkbox-parent').on('change', function () {
        var dataid = $(this).attr("dataid");
        $('input[dataid^=' + dataid + ']').prop('checked', $(this).is(':checked'));
    });
    $('input.checkbox-child').on('change', function () {
        var dataid = $(this).attr("dataid");
        dataid = dataid.substring(0, dataid.lastIndexOf("-"));
        var parent = $('input[dataid=' + dataid + ']');
        if ($(this).is(':checked')) {
            parent.prop('checked', true);
            //循环到顶级
            while (dataid.lastIndexOf("-") != 2) {
                dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                parent = $('input[dataid=' + dataid + ']');
                parent.prop('checked', true);
            }
        } else {
            //父级
            if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                parent.prop('checked', false);
                //循环到顶级
                while (dataid.lastIndexOf("-") != 2) {
                    dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                    parent = $('input[dataid=' + dataid + ']');
                    if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                        parent.prop('checked', false);
                    }
                }
            }
        }
    });
});
</script>
</body>
</html>