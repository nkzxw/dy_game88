<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<!--ip白名单-->
<div class="iplist" ng-controller="ipWhiteListCtrl" ng-cloak>
	<div class="clearfix we7-margin-bottom">
		<form action="<?php  url('system/ipwhitelist')?>" method="post" class="form-inline pull-left">
			<div class="input-group" style="width: 400px;">
				<input type="text" placeholder="输入要搜索的ip地址" class="form-control" name="keyword" value="<?php  echo $keyword;?>"/>
			<span class="input-group-btn">
				<button class="btn btn-default">
					<i class="wi wi-search"></i>
				</button>
			</span>
			</div>
		</form>
		<div class="pull-right">
			<a href="#" class="btn btn-primary we7-padding-horizontal" data-toggle="modal" data-target="#myModalIp">添加白名单</a>
		</div>
	</div>
	<table class="table we7-table table-hover vertical-middle" ng-cloak>
		<col />
		<col />
		<col />
		<tr>
			<th>IP地址</th>
			<th>是否生效</th>
			<th class="text-right">操作</th>
		</tr>
		<tr ng-repeat="list in lists">
			<td>
				{{list.ip}}
				<!--<span class="color-gray we7-margin-left">中国 山西 太原 联通</span>-->
			</td>
			<td>
				<div class="we7-form">
					<input class='we7-toggle' type="checkbox" name='check-3' checked='checked' ng-if="list.status==1" ng-click="changeStatus(list.ip)"/>
					<input class='we7-toggle' type="checkbox" name='check-3' ng-if="list.status==0" ng-click="changeStatus(list.ip)"/>
				</div>
			</td>
			<td>
				<div class="link-group">
					<a href="{{links.delete_link_ip}}ip={{list.ip}}" class="del">删除</a>
				</div>
			</td>
		</tr>
	</table>
	<div class="modal fade" id="myModalIp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel6">添加白名单</h4>
				</div>
				<div class="modal-body we7-padding">
					<div class="we7-margin-bottom-sm">请输入有效IP地址 <span class="color-gray">(如: 183.184.176.181)</span></div>
					<div class="panel panel-default">
						<div class="panel-body">
							<textarea ng-model="ips" name="ips" id="addips" rows="5" class="form-control" style="border: none; outline:none; box-shadow: none; resize:none; "></textarea>
						</div>
						<div class="panel-footer text-right color-gray">
							按"回车"添加多个
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" ng-click="saveIp()">确定</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end ip白名单-->
<script type="text/javascript">
	angular.module('systemApp').value('config', {
		'lists': <?php echo !empty($lists) ? json_encode($lists) : 'null'?>,
		'links' : {
			'add_link_ips': "<?php  echo url('system/ipwhitelist/add')?>",
			'change_status': "<?php  echo url('system/ipwhitelist/change_status')?>",
			'delete_link_ip': "<?php  echo url('system/ipwhitelist/delete')?>",
		},
	});
	angular.bootstrap($('.iplist'), ['systemApp']);
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>