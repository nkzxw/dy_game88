<?php defined('IN_IA') or exit('Access Denied');?><script src="../addons/<?php  echo $this->modulename?>/public/js/jquery.contextMenu.js?v=<?php echo TIMESTAMP;?>" type="text/javascript"></script>
<script src="../addons/<?php  echo $this->modulename?>/public/js/designer.js?v=<?php echo TIMESTAMP;?>" type="text/javascript"></script>
<script type="text/javascript" src="../addons/<?php  echo $this->modulename?>/public/js/jquery.form.js?v=<?php echo TIMESTAMP;?>"></script>
<link href="../addons/<?php  echo $this->modulename?>/public/css/jquery.contextMenu.css" rel="stylesheet">
<link href="../addons/<?php  echo $this->modulename?>/public/css/poster.css" rel="stylesheet">
<div class='panel panel-default'>
            <div class='panel-heading'>
                分销二维码海报设置
            </div>
            <div class='panel-body'>
            	<div class="form-group">
			        <label class="col-xs-12 col-sm-3 col-md-1 control-label">注意</label>
			        <div class="col-sm-11 col-xs-12">
			            <div class='help-block'>开启海报功能，需有“addons/junsion_winaward/qrcode”这个目录，若无该目录，则创建该目录，并将目录权限改成777</div>
			        </div>
				</div>
            	<div class="form-group">
			        <label class="col-xs-12 col-sm-3 col-md-1 control-label">海报功能</label>
			        <div class="col-sm-11 col-xs-12">
			             <label><input type="radio" value="0" name='poster[switch]' checked>关闭</label>
			             <label><input type="radio" value="1" name='poster[switch]' <?php  if($poster['switch']) { ?>checked<?php  } ?>>开启</label>
			        </div>
				</div>
				<?php  if($_W['account']['level']!=4) { ?>
            	<div class="form-group">
			        <label class="col-xs-12 col-sm-3 col-md-1 control-label">海报二维码</label>
			        <div class="col-sm-11 col-xs-12">
			             <label><input type="radio" value="0" name='poster[pQr]' checked>小程序二维码</label>
			             <label><input type="radio" value="1" name='poster[pQr]' <?php  if($poster['pQr']) { ?>checked<?php  } ?>>公众号二维码</label>
			        	<div class='help-block'>若选择公众号二维码，则用户扫码进入公众号，公众号推送小程序卡片，由此进入小程序</div>
			        	<div class='help-block'>若选择公众号二维码，则公众号必须关联该小程序</div>
			        </div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">关注服务号</label>
					<div class="col-sm-9">
						<div class='input-group'>
							<span class='input-group-addon'>选择服务号</span>
							<select name="poster[s_wid]" class="form-control">
								<option value="0">请选择公众号</option>
								<?php  if(is_array($serve_wechat)) { foreach($serve_wechat as $w) { ?>
								<option value="<?php  echo $w['uniacid'];?>" <?php  if($poster['s_wid']==$w['uniacid']) { ?>selected<?php  } ?>><?php  echo $w['name'];?></option>
								<?php  } } ?>
							</select>
						</div>
						<div class='help-block'>若选择公众号二维码，该项必填</div>
					</div>
				</div>
				<div class="form-group">
	            	<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">小程序卡片的标题</label>
	            	<div class="col-sm-9">
	                	<input class="form-control" name="wxapp_title" id='wxapp_title' type="text" value="<?php  echo $settings['wxapp_title'];?>">
	            		<div class='help-block'>小程序卡片的标题若不设置，则默认不推送小程序卡片</div>
	            	</div>
	          	</div>
				<div class="form-group">
	            	<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">小程序卡片的图片</label>
	            	<div class="col-sm-9">
	                	<?php  echo tpl_form_field_image('wxapp_pic',$settings['wxapp_pic'])?>
	                	<div class='help-block'>300*240</div>
	            	</div>
	          	</div>
	          	<?php  } ?>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-1 control-label">海报设计</label>
                    <div class="col-sm-11 col-xs-12">
                    	<input type="hidden" name="poster[data]">
                        <table style='width:100%;'>
                                <tr>
                                    <td id="bgtd" style='padding:10px;' valign='top'>
                                        <div id='jun_poster'>
                                          <?php  if(!empty($poster['bg'])) { ?>
                                          <img src='<?php  echo toimage($poster['bg'])?>' class='bg'/>
                                          <?php  } ?>
                                          <?php  if(!empty($poster['data'])) { ?>
                                          <?php  if(is_array($poster['data'])) { foreach($poster['data'] as $key => $d) { ?>
                                          <div class="drag" type="<?php  echo $d['type'];?>" index="<?php  echo $key+1?>" style="zindex:<?php  echo $key+1?>;left:<?php  echo $d['left'];?>;top:<?php  echo $d['top'];?>;
                                               width:<?php  echo $d['width'];?>;height:<?php  echo $d['height'];?>" size="<?php  echo $d['size'];?>" color="<?php  echo $d['color'];?>" > 
                                                <?php  if($d['type']=='img' || $d['type']=='thumb') { ?>
                                                  <img src="<?php  echo '../addons/'.$this->modulename.'/public/img/default.jpg'?>" />
                                                <?php  } else if($d['type']=='qr') { ?>
                                                  <img src="../addons/<?php  echo $this->modulename?>/public/img/qr.png" />
                                                <?php  } else if($d['type']=='name') { ?>
                                                   <div class=text style="font-size:<?php  echo $d['size'];?>;color:<?php  echo $d['color'];?>" >昵称</div> 
                                                 <?php  } else if($d['type']=='code') { ?>
                                                   <div class=text style="font-size:<?php  echo $d['size'];?>;color:<?php  echo $d['color'];?>" >工号</div> 
                                                <?php  } ?>
                                              <div class="dRightDown"> </div><div class="dLeftDown"> </div><div class="dRightUp"> </div><div class="dLeftUp"> </div><div class="dRight"> </div><div class="dLeft"> </div><div class="rUp"> </div><div class="rDown"></div>
                                          </div>
                                          <?php  } } ?> 
                                          <?php  } ?>
                                        </div>
                                    </td>
                                    <td valign='top' style='padding:10px;'>
                                          <div class='panel panel-default' style="border-color: yellowgreen;">
                                              <div class='panel-body'>
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">海报元素</label>
                                                        <div class="col-sm-9 col-xs-12">
                                                        	<button class='btn btn-info btn-poster' type='button' data-type='img' >头像</button>
                                                             <button class='btn btn-primary btn-poster' type='button' data-type='name'>昵称</button>
                                                             <button class='btn btn-warning btn-poster' type='button' data-type='qr' >专属二维码</button>
                                                        </div>
                                                    </div>
                                                  <div id='namesset' style='display:none'>
                                                  <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">名字颜色</label>
                                                         <div class="col-sm-9 col-xs-12">
                                                              <?php  echo tpl_form_field_color('color')?>
                                                        </div>
                                                    </div>
                                                  <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">名字大小</label>
                                                        <div class="col-sm-6">
                                                             <div class='input-group'>
                                                                 <input type="text" id="namesize" class="form-control namesize" placeholder="例如: 15"  />
                                                                 <div class='input-group-addon'>px</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                             </div>
                                             	<div class="form-group" id="posterbg">
                                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">海报背景</label>
                                                    <div class="col-sm-9 col-xs-12">
                                                       <?php  echo tpl_form_field_image('poster[bg]',$poster['bg']);?>
                                                       <span class='help-block'>海报背景大小建议尺寸为: 640 * 1008</span>
                                                    </div>
                                                </div>
                                          </div>
                                   </div>
                                    </td>
                                </tr>
                        </table>
                    </div>
	    		</div>
		<div class="form-group">
	        <label class="col-xs-12 col-sm-3 col-md-1 control-label">海报引导语</label>
	        <div class="col-sm-11 col-xs-12">
	             <textarea class="form-control" name='poster[tips]'><?php  echo $poster['tips'];?></textarea>
	             <span class='help-block'>例如：点击按钮保存海报，分享至朋友圈;好友扫码进入后即可获得佣金</span>
	        </div>
		</div>
		<div class="form-group">
	        <label class="col-xs-12 col-sm-3 col-md-1 control-label">海报二维码域名</label>
	        <div class="col-sm-11 col-xs-12">
	             <input class="form-control" name='poster[url]' value="<?php  echo $poster['url'];?>">
	             <span class='help-block'>域名记得带上http和尾部加/；如果该域名设置了，海报二维码将使用这个域名生成，否则使用当前域名</span>
	             <span class='help-block'>建议给海报二维码配置单独一个域名，避免域名被封后，分享出去的海报失效；请配合下面落地域名使用</span>
	             <span class='help-block'>系统后台->公众号->参数配置->借用权限 设置oAuth独立域名 填上你微信后台设置的网页授权域名</span>
	        </div>
		</div>
		<div class="form-group">
	        <label class="col-xs-12 col-sm-3 col-md-1 control-label">二维码落地域名</label>
	        <div class="col-sm-11 col-xs-12">
	             <input class="form-control" name='poster[durls]' value="<?php  echo $poster['durls'];?>">
	             <span class='help-block'>域名记得带上http和尾部加/；扫描二维码时，将会跳转到落地域名来打开，域名最多3个，多个请以分号(;)隔开；不要跟当前域名和二维码域名一样</span>
	             <span class='help-block'>这里的域名都必须到微信公众号后台->公众号设置->功能设置->填写JS接口安全域名</span>
	             <span class='help-block'>这里的域名都必须到微信支付后台->产品中心->开发配置 填写支付授权目录</span>
	        </div>
		</div>
	</div>
</div>
<script src="../addons/<?php  echo $this->modulename?>/public/js/poster.js?v=<?php echo TIMESTAMP;?>" type="text/javascript"></script>
<script>
var gqrt = 0;
var attachurl = "<?php  echo $_W['attachurl'];?>";
var ncounter = 0;
    
         function jun_bind(obj){
            var imgsset = $('#imgsset');
            var namesset = $("#namesset");
            var codeset = $("#codeset");
             imgsset.hide();
             namesset.hide();
             codeset.hide();
             deleteTimers();
             var type = obj.attr('type');
             if(type=='name'){
                  namesset.show();
                  var size = obj.attr('size') || "16";
                  var picker = namesset.find('.sp-preview-inner');
                  var input = namesset.find('input:first');
                  var namesize = namesset.find('#namesize');
                  var color = obj.attr('color') || "#000";
                  input.val(color); namesize.val(size.replace("px",""));  
                  picker.css( {'background-color':color,'font-size':size});
                  ncounter = setInterval(function(){
                       obj.attr('color',input.val()).find('.text').css('color',input.val());
                       obj.attr('size',namesize.val() +"px").find('.text').css('font-size',namesize.val() +"px");
                   },100);
             } else if(type=='code'){
            	 codeset.show();
                 var size = obj.attr('size') || "16";
                 var picker = codeset.find('.sp-preview-inner');
                 var input = codeset.find('input:first');
                 var namesize = codeset.find('#namesize');
                 var color = obj.attr('color') || "#000";
                 input.val(color); namesize.val(size.replace("px",""));  
                 picker.css( {'background-color':color,'font-size':size});
                 ncounter = setInterval(function(){
                      obj.attr('color',input.val()).find('.text').css('color',input.val());
                      obj.attr('size',namesize.val() +"px").find('.text').css('font-size',namesize.val() +"px");
                  },100);
            }  
         }
         var bscounter = 0 ;        
    $(function(){
        <?php  if(!empty($poster)) { ?>
          $('.drag').each(function(){
              dragEvent($(this));
          })
        <?php  } ?>
          
        	  $('.btn-poster').click(function(){
                  var imgsset = $('#imgsset');
                  var namesset = $("#namesset");
                  var codeset = $("#codeset");
                  imgsset.hide();
                  codeset.hide();
                  namesset.hide();
                  deleteTimers();
                   var type = $(this).data('type');
                   var img = "";
                 	if(type=='img' || type=='thumb'){
                       img = '<img src="../addons/<?php  echo $this->modulename?>/public/img/default.jpg" />';
                   }else if(type=='name'){
                       img = '<div class=text>姓名</div>';
                   }else if(type=='code'){
                       img = '<div class="text">工号</div>';
                   }else if(type=='qr'){
                       img = '<img src="../addons/<?php  echo $this->modulename?>/public/img/qr.png" />';
                   }
                   var index = $('#jun_poster .drag').length+1;
                   var obj = $('<div class="drag" type="' + type +'" index="' + index +'" style="z-index:' + index+'">' + img+'<div class="dRightDown"> </div><div class="dLeftDown"> </div><div class="dRightUp"> </div><div class="dLeftUp"> </div><div class="dRight"> </div><div class="dLeft"> </div><div class="rUp"> </div><div class="rDown"></div></div>');
                   $('#jun_poster').append(obj);
                   dragEvent(obj);
               });
           
                $('.drag').click(function(){
                    jun_bind($(this));
                })
            
    })
 var imgcounter = 0 ;   
     $('form').submit(function(){
        var poster = [];
        $('.drag').each(function(){
            var obj = $(this);
            var type = obj.attr('type');
            var left = obj.css('left');
            var top = obj.css('top');
            var d= {left:left,top:top,type:obj.attr('type'),width:obj.css('width'),height:obj.css('height')};
            if(type=='name'){
                d.size = obj.attr('size');
                d.color = obj.attr('color');
            }else if(type=='code'){
                d.size = obj.attr('size');
                d.color = obj.attr('color');
            }
            poster.push(d);
        });
        $('input[name="poster[data]"]').val( JSON.stringify(poster));
        return true;
    });
     
    </script>