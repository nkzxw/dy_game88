<?php defined('IN_IA') or exit('Access Denied');?><style>
@-webkit-keyframes opacity-60-25-0-12 {
  0% { opacity: 0.25; }
  0.01% { opacity: 0.25; }
  0.02% { opacity: 1; }
  60.01% { opacity: 0.25; }
  100% { opacity: 0.25; }
}@-webkit-keyframes opacity-60-25-1-12 {
  0% { opacity: 0.25; }
  8.34333% { opacity: 0.25; }
  8.35333% { opacity: 1; }
  68.3433% { opacity: 0.25; }
  100% { opacity: 0.25; }
}@-webkit-keyframes opacity-60-25-2-12 {
  0% { opacity: 0.25; }
  16.6767% { opacity: 0.25; }
  16.6867% { opacity: 1; }
  76.6767% { opacity: 0.25; }
  100% { opacity: 0.25; }
}@-webkit-keyframes opacity-60-25-3-12 {
  0% { opacity: 0.25; }
  25.01% { opacity: 0.25; }
  25.02% { opacity: 1; }
  85.01% { opacity: 0.25; }
  100% { opacity: 0.25; }
}@-webkit-keyframes opacity-60-25-4-12 {
  0% { opacity: 0.25; }
  33.3433% { opacity: 0.25; }
  33.3533% { opacity: 1; }
  93.3433% { opacity: 0.25; }
  100% { opacity: 0.25; }
}@-webkit-keyframes opacity-60-25-5-12 {
  0% { opacity: 0.270958333333333; }
  41.6767% { opacity: 0.25; }
  41.6867% { opacity: 1; }
  1.67667% { opacity: 0.25; }
  100% { opacity: 0.270958333333333; }
}@-webkit-keyframes opacity-60-25-6-12 {
  0% { opacity: 0.375125; }
  50.01% { opacity: 0.25; }
  50.02% { opacity: 1; }
  10.01% { opacity: 0.25; }
  100% { opacity: 0.375125; }
}@-webkit-keyframes opacity-60-25-7-12 {
  0% { opacity: 0.479291666666667; }
  58.3433% { opacity: 0.25; }
  58.3533% { opacity: 1; }
  18.3433% { opacity: 0.25; }
  100% { opacity: 0.479291666666667; }
}@-webkit-keyframes opacity-60-25-8-12 {
  0% { opacity: 0.583458333333333; }
  66.6767% { opacity: 0.25; }
  66.6867% { opacity: 1; }
  26.6767% { opacity: 0.25; }
  100% { opacity: 0.583458333333333; }
}@-webkit-keyframes opacity-60-25-9-12 {
  0% { opacity: 0.687625; }
  75.01% { opacity: 0.25; }
  75.02% { opacity: 1; }
  35.01% { opacity: 0.25; }
  100% { opacity: 0.687625; }
}@-webkit-keyframes opacity-60-25-10-12 {
  0% { opacity: 0.791791666666667; }
  83.3433% { opacity: 0.25; }
  83.3533% { opacity: 1; }
  43.3433% { opacity: 0.25; }
  100% { opacity: 0.791791666666667; }
}@-webkit-keyframes opacity-60-25-11-12 {
  0% { opacity: 0.895958333333333; }
  91.6767% { opacity: 0.25; }
  91.6867% { opacity: 1; }
  51.6767% { opacity: 0.25; }
  100% { opacity: 0.895958333333333; }
}


.weui_toast {
  position: fixed;
  z-index: 3;
  width: 7.6em;
  min-height: 7.6em;
  top: 180px;
  left: 50%;
  margin-left: -3.8em;
  background: rgba(40, 40, 40, 0.75);
  text-align: center;
  border-radius: 5px;
  color: #FFFFFF;
  z-index: 999999;
}
.weui_icon_toast {
  margin: 22px 0 0;
  display: block;
}
.weui_icon_toast:before {
  content: '\EA08';
  color: #FFFFFF;
  font-size: 55px;
}
.weui_toast_content {
  margin: 0 0 15px;
}
.weui_loading_toast .weui_toast_content {
  margin-top: 64%;
  font-size: 14px;
}
.weui_loading {
  position: absolute;
  width: 0px;
  z-index: 2000000000;
  left: 50%;
  top: 38%;
}
.weui_loading_leaf {
  position: absolute;
  top: -1px;
  opacity: 0.25;
}
.weui_loading_leaf:before {
  content: " ";
  position: absolute;
  width: 8.14px;
  height: 3.08px;
  background: #d1d1d5;
  box-shadow: rgba(0, 0, 0, 0.0980392) 0px 0px 1px;
  border-radius: 1px;
  -webkit-transform-origin: left 50% 0px;
      -ms-transform-origin: left 50% 0px;
          transform-origin: left 50% 0px;
}
.weui_loading_leaf_0 {
  -webkit-animation: opacity-60-25-0-12 1.25s linear infinite;
          animation: opacity-60-25-0-12 1.25s linear infinite;
}
.weui_loading_leaf_0:before {
  -webkit-transform: rotate(0deg) translate(7.92px, 0px);
      -ms-transform: rotate(0deg) translate(7.92px, 0px);
          transform: rotate(0deg) translate(7.92px, 0px);
}
.weui_loading_leaf_1 {
  -webkit-animation: opacity-60-25-1-12 1.25s linear infinite;
          animation: opacity-60-25-1-12 1.25s linear infinite;
}
.weui_loading_leaf_1:before {
  -webkit-transform: rotate(30deg) translate(7.92px, 0px);
      -ms-transform: rotate(30deg) translate(7.92px, 0px);
          transform: rotate(30deg) translate(7.92px, 0px);
}
.weui_loading_leaf_2 {
  -webkit-animation: opacity-60-25-2-12 1.25s linear infinite;
          animation: opacity-60-25-2-12 1.25s linear infinite;
}
.weui_loading_leaf_2:before {
  -webkit-transform: rotate(60deg) translate(7.92px, 0px);
      -ms-transform: rotate(60deg) translate(7.92px, 0px);
          transform: rotate(60deg) translate(7.92px, 0px);
}
.weui_loading_leaf_3 {
  -webkit-animation: opacity-60-25-3-12 1.25s linear infinite;
          animation: opacity-60-25-3-12 1.25s linear infinite;
}
.weui_loading_leaf_3:before {
  -webkit-transform: rotate(90deg) translate(7.92px, 0px);
      -ms-transform: rotate(90deg) translate(7.92px, 0px);
          transform: rotate(90deg) translate(7.92px, 0px);
}
.weui_loading_leaf_4 {
  -webkit-animation: opacity-60-25-4-12 1.25s linear infinite;
          animation: opacity-60-25-4-12 1.25s linear infinite;
}
.weui_loading_leaf_4:before {
  -webkit-transform: rotate(120deg) translate(7.92px, 0px);
      -ms-transform: rotate(120deg) translate(7.92px, 0px);
          transform: rotate(120deg) translate(7.92px, 0px);
}
.weui_loading_leaf_5 {
  -webkit-animation: opacity-60-25-5-12 1.25s linear infinite;
          animation: opacity-60-25-5-12 1.25s linear infinite;
}
.weui_loading_leaf_5:before {
  -webkit-transform: rotate(150deg) translate(7.92px, 0px);
      -ms-transform: rotate(150deg) translate(7.92px, 0px);
          transform: rotate(150deg) translate(7.92px, 0px);
}
.weui_loading_leaf_6 {
  -webkit-animation: opacity-60-25-6-12 1.25s linear infinite;
          animation: opacity-60-25-6-12 1.25s linear infinite;
}
.weui_loading_leaf_6:before {
  -webkit-transform: rotate(180deg) translate(7.92px, 0px);
      -ms-transform: rotate(180deg) translate(7.92px, 0px);
          transform: rotate(180deg) translate(7.92px, 0px);
}
.weui_loading_leaf_7 {
  -webkit-animation: opacity-60-25-7-12 1.25s linear infinite;
          animation: opacity-60-25-7-12 1.25s linear infinite;
}
.weui_loading_leaf_7:before {
  -webkit-transform: rotate(210deg) translate(7.92px, 0px);
      -ms-transform: rotate(210deg) translate(7.92px, 0px);
          transform: rotate(210deg) translate(7.92px, 0px);
}
.weui_loading_leaf_8 {
  -webkit-animation: opacity-60-25-8-12 1.25s linear infinite;
          animation: opacity-60-25-8-12 1.25s linear infinite;
}
.weui_loading_leaf_8:before {
  -webkit-transform: rotate(240deg) translate(7.92px, 0px);
      -ms-transform: rotate(240deg) translate(7.92px, 0px);
          transform: rotate(240deg) translate(7.92px, 0px);
}
.weui_loading_leaf_9 {
  -webkit-animation: opacity-60-25-9-12 1.25s linear infinite;
          animation: opacity-60-25-9-12 1.25s linear infinite;
}
.weui_loading_leaf_9:before {
  -webkit-transform: rotate(270deg) translate(7.92px, 0px);
      -ms-transform: rotate(270deg) translate(7.92px, 0px);
          transform: rotate(270deg) translate(7.92px, 0px);
}
.weui_loading_leaf_10 {
  -webkit-animation: opacity-60-25-10-12 1.25s linear infinite;
          animation: opacity-60-25-10-12 1.25s linear infinite;
}
.weui_loading_leaf_10:before {
  -webkit-transform: rotate(300deg) translate(7.92px, 0px);
      -ms-transform: rotate(300deg) translate(7.92px, 0px);
          transform: rotate(300deg) translate(7.92px, 0px);
}
.weui_loading_leaf_11 {
  -webkit-animation: opacity-60-25-11-12 1.25s linear infinite;
          animation: opacity-60-25-11-12 1.25s linear infinite;
}
.weui_loading_leaf_11:before {
  -webkit-transform: rotate(330deg) translate(7.92px, 0px);
      -ms-transform: rotate(330deg) translate(7.92px, 0px);
          transform: rotate(330deg) translate(7.92px, 0px);
}
.weui_mask_transparent {
  position: fixed;
  z-index: 99999;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
</style>
<div id="loadingToast" class="weui_loading_toast" style="display:none;">
   <div class="weui_mask_transparent"></div>
   <div class="weui_toast">
       <div class="weui_loading">
           <!-- :) -->
           <div class="weui_loading_leaf weui_loading_leaf_0"></div>
           <div class="weui_loading_leaf weui_loading_leaf_1"></div>
           <div class="weui_loading_leaf weui_loading_leaf_2"></div>
           <div class="weui_loading_leaf weui_loading_leaf_3"></div>
           <div class="weui_loading_leaf weui_loading_leaf_4"></div>
           <div class="weui_loading_leaf weui_loading_leaf_5"></div>
           <div class="weui_loading_leaf weui_loading_leaf_6"></div>
           <div class="weui_loading_leaf weui_loading_leaf_7"></div>
           <div class="weui_loading_leaf weui_loading_leaf_8"></div>
           <div class="weui_loading_leaf weui_loading_leaf_9"></div>
           <div class="weui_loading_leaf weui_loading_leaf_10"></div>
           <div class="weui_loading_leaf weui_loading_leaf_11"></div>
       </div>
       <p class="weui_toast_content">数据加载中</p>
   </div>
</div>
<script>
function LOADING(status){
	var txt = arguments[1] || '数据加载中';
	if(status){
		$('#loadingToast .weui_toast_content').text(txt);
		$('#loadingToast').show();
	}else $('#loadingToast').hide();
}
</script>