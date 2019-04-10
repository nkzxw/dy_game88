<?php defined('IN_IA') or exit('Access Denied');?>
		<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_head', TEMPLATE_INCLUDEPATH)) : (include template('public_head', TEMPLATE_INCLUDEPATH));?>
		<!--中间内容开始-->
		<section>
		    <section class="hbox stretch">
		    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_left', TEMPLATE_INCLUDEPATH)) : (include template('public_left', TEMPLATE_INCLUDEPATH));?>
		    <!--右边框架-->
			  <section id="content">
			    <section class="vbox">
			        <section class="scrollable padder" style="padding-bottom:70px;">
                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                          <li><a href="<?php  echo $this->createWebUrl('index')?>"><i class="fa fa-home"></i> 首页  </a></li>
                          <li class="active">采集API</li>
                        </ul>
			            <!--编辑内容-->


                        <!--搜索开始-->
                        <style>
                        .form-group{height:25px;}
                        </style>
                        <form action="<?php  echo $this->createWebUrl('hlcaiji',array('op'=>'hlsxcj'))?>" method="get" class="form-horizontal">
                                <input type="hidden" name="c" value="site">
                                <input type="hidden" name="a" value="entry">
                                <input type="hidden" name="m" value="tiger_newhu">
                                <input type="hidden" name="op" value="hlsxcj">
                                <input type="hidden" name="do" value="hlcaiji">
                          <div class="panel panel-info">
                            <div class="panel-heading">筛选采集</div>
                            <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                            <label class="radio-inline">
                                                分组：
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nav" value="3" checked="checked"> 全部商品
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nav" value="1"> 实实跑单
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nav" value="4"> 券飙升榜
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nav" value="2"> 人气宝贝
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                            <label class="radio-inline">
                                                分类：
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="0" checked="checked"> 全部
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="1"> 女装
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="2"> 男装
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="3"> 内衣
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="4"> 美妆
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="5"> 配饰
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="6"> 鞋品
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="7"> 箱包
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="8"> 儿童
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="9"> 母婴
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="10"> 居家
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="11"> 美食
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="12"> 数码
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="13"> 家电
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cid" value="14"> 其他
                                            </label>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                           <label class="radio-inline">
                                                排序：
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sort" value="0" checked="checked"> 综合
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sort" value="1"> 优惠最多
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sort" value="2"> 销量最高
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sort" value="3"> 佣金最高
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sort" value="4"> 佣金比率最高
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sort" value="5"> 券后价最低
                                            </label>

                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="text-align:left">
                                            <label class="radio-inline">
                                                价格区间:
                                            </label>
                                            <label class="radio-inline">
                                                <input type="text" class="form-control" name="itemendprice_min" value="" style="width:100px;" placeholder="￥">
                                            </label>
                                             <label class="radio-inline" style="margin-left:0;margin-right:0;padding-left:0;padding-right:0">
                                                -
                                            </label>    
                                            <label class="radio-inline">
                                                <input type="text" class="form-control" name="itemendprice_max" value="" style="width:100px;" placeholder="￥">
                                            </label>                                           
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="text-align:left">
                                            <label class="radio-inline">
                                                销量区间:
                                            </label>
                                            <label class="radio-inline">
                                                <input type="text" class="form-control" name="itemsale_min" value="" style="width:100px;" placeholder="">
                                            </label>
                                             <label class="radio-inline" style="margin-left:0;margin-right:0;padding-left:0;padding-right:0">
                                                -
                                            </label>    
                                            <label class="radio-inline">
                                                <input type="text" class="form-control" name="itemsale_max" value="" style="width:100px;" placeholder="">
                                            </label>                                           
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="text-align:left">
                                            <label class="radio-inline">
                                                佣金区间:
                                            </label>
                                            <label class="radio-inline">
                                                <input type="text" class="form-control" name="tkmoney_min" value="" style="width:100px;" placeholder="">
                                            </label>
                                             <label class="radio-inline" style="margin-left:0;margin-right:0;padding-left:0;padding-right:0">
                                                -
                                            </label>    
                                            <label class="radio-inline">
                                                <input type="text" class="form-control" name="tkmoney_max" value="" style="width:100px;" placeholder="">
                                            </label>                                           
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="text-align:left">
                                            <label class="radio-inline">
                                                发布时间:
                                            </label>
                                            <label class="radio-inline">
                                                <input type="text" class="form-control" name="starttime" value="7" style="width:100px;" placeholder="">
                                            </label>
                                             <label class="radio-inline" style="margin-left:0;margin-right:0;padding-left:0;padding-right:0">
                                               天内
                                            </label>                                             
                                            
                                        </div>
                                    </div>

                                    <div class="form-group" style="padding-top:15px;">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                            <label class="radio-inline">
                                                特区选择：
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nine" value="0" checked="checked"> 不选
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nine" value="1" > 九块九
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nine" value="2"> 30元封顶
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-top:15px;">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                            <label class="radio-inline">
                                                视频单：
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="videoid" value="0" checked="checked"> 否
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="videoid" value="1" > 是
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-top:15px;">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                            <label class="radio-inline">
                                             其它选择：
                                            </label>
                                            <label class="radio-inline">
                                                <input type="checkbox" name="new_today" value="1" > 今日上新 
                                            </label>
                                            <label class="radio-inline">
                                                <input type="checkbox" name="tianmao" value="1" > 天猫 
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left:20px;margin-top:20px;" >
                                            <button class="btn btn-default"><i class="fa fa-search"></i>筛选采集</button>
                                        </div>
                                    </div>
                               </div>
                          </div>
                          </form>
                        <!--搜索结束-->

                        <!--搜索开始-->
                          <div class="panel panel-info">
                            <div class="panel-heading">互力淘客采集全站商品</div>
                            <div class="panel-body">
                                    <div class="form-group">                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a href="<?php  echo $this->createWebUrl('hlcaiji',array('op'=>'qcljcp','type'=>1))?>" class="btn btn-primary">一键采集【全站商品】</a>
                                        </div>
                                        <span class="help-block" style="color:#ff0000;line-height:30px;padding-left:15px"></span>
                                    </div>
                                    <!--<div class="form-group">                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a href="<?php  echo $this->createWebUrl('hlcaiji',array('op'=>'qcljcp','type'=>2))?>" class="btn btn-primary">一键采集【聚划算】</a>
                                        </div>
                                        <span class="help-block" style="color:#ff0000;line-height:30px;padding-left:15px"></span>
                                    </div>
                                    <div class="form-group">                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a href="<?php  echo $this->createWebUrl('hlcaiji',array('op'=>'qcljcp','type'=>3))?>" class="btn btn-primary">一键采集【淘抢购】</a>
                                        </div>
                                        <span class="help-block" style="color:#ff0000;line-height:30px;padding-left:15px"></span>
                                    </div>-->
                               </div>
                          </div>
                        <!--搜索结束-->
                       
                        <!--搜索开始-->
                        <div class="panel panel-info">
                            <div class="panel-heading">互力淘客采集设置</div>
                            <div class="panel-body">
                                <form action="<?php  echo $this->createWebUrl('hlcaijiset',array('op'=>'hl'))?>" method="post" class="form-horizontal">
                                       <?php  if(is_array($fzlist)) { foreach($fzlist as $v) { ?>
                                       <input type="hidden" name="id[]" value="<?php  echo $v['id'];?>" />
                                        <div class="form-group">
                                            <label class="col-xs-12 col-sm-4 col-md-3 control-label">本站分类 （<?php  echo $v['title'];?>）-----》互力淘客分类：</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <div class="input-group"><!--fqcat 分类-->
                                                <select class="form-control" name="hlcid[]" id="hlcid">
                                                    <option <?php  if($v['hlcid'] == 0) { ?>selected<?php  } ?> value="0">选择互力微信淘客分类</option>
                                                    <option <?php  if($v['hlcid'] == 1) { ?>selected<?php  } ?> value="1">女装</option>
                                                    <option <?php  if($v['hlcid'] == 2) { ?>selected<?php  } ?> value="2">男装</option>
                                                    <option <?php  if($v['hlcid'] == 3) { ?>selected<?php  } ?> value="3">内衣</option>
                                                    <option <?php  if($v['hlcid'] == 4) { ?>selected<?php  } ?> value="4">美妆</option>
                                                    <option <?php  if($v['hlcid'] == 5) { ?>selected<?php  } ?> value="5">配饰</option>
                                                    <option <?php  if($v['hlcid'] == 6) { ?>selected<?php  } ?> value="6">鞋品</option>
                                                    <option <?php  if($v['hlcid'] == 7) { ?>selected<?php  } ?> value="7">箱包</option>
                                                    <option <?php  if($v['hlcid'] == 8) { ?>selected<?php  } ?> value="8">儿童</option>
                                                    <option <?php  if($v['hlcid'] == 9) { ?>selected<?php  } ?> value="9">母婴</option>
                                                    <option <?php  if($v['hlcid'] == 10) { ?>selected<?php  } ?> value="10">居家</option>
                                                    <option <?php  if($v['hlcid'] == 11) { ?>selected<?php  } ?> value="11">美食</option>
                                                    <option <?php  if($v['hlcid'] == 12) { ?>selected<?php  } ?> value="12">数码</option>
                                                    <option <?php  if($v['hlcid'] == 13) { ?>selected<?php  } ?> value="13">家电</option>
                                                    <option <?php  if($v['hlcid'] == 14) { ?>selected<?php  } ?> value="14">其它</option>
                                                </select>                
                                                </div>  
                                            </div>
                                       </div>
                                       <?php  } } ?>
                                    <div class="form-group">                                        
                                        <div class="form-group col-sm-12">
                                            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
                                            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                                        </div>
                                    </div>
                                </form>
                               </div>
                          </div>
                        <!--搜索结束-->


                        <!--编辑内容结束-->
			        </section>
			        <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_bottom', TEMPLATE_INCLUDEPATH)) : (include template('public_bottom', TEMPLATE_INCLUDEPATH));?>
			    </section>
			    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
			  </section>
			  <aside class="bg-light lter b-l aside-md hide" id="notes">
			       <div class="wrapper">不知道放什么</div>
			  </aside>
			<!--右边框架结束-->
			</section>
		  </section>
		<!--中间内容结束-->
	</section>


</body>
</html>