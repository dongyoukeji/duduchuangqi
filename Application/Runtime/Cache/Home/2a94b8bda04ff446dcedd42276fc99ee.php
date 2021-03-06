<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>嘟嘟传奇</title>
    <meta name="Description" content="《嘟嘟传奇》游戏延续了传奇经典玩法，攻城、PK,还原经典！全新精细画质,复古热血传奇的玩法,全新战场,公平竞争,现热血辉煌启幕，诚邀您来战。">
    <meta name="Keywords" content="嘟嘟传奇 嘟嘟传奇官网 嘟嘟 传奇 高清传奇">
    <link rel="stylesheet" type="text/css" href="/duduchuanqi/Public/Home/css/base.css">
    <link rel="stylesheet" type="text/css" href="/duduchuanqi/Public/Home/css/style.css">
    <script type="text/javascript" src="/duduchuanqi/Public/Home/js/jquery.min-1.7.1.js"></script>
    <script type="text/javascript" src="/duduchuanqi/Public/Home/js/kxbdMarquee.js"></script>
</head>
<body>
    <div class="weball">
        <div class="header">
            <img src="/duduchuanqi/Public/Home/images/logo.fw.png" class="logo" />
            <img src="/duduchuanqi/Public/Home/images/font.fw.png" class="font" />
            <img src="/duduchuanqi/Public/Home/images/person.fw.png" class="person" />
            <ul class="nav">
                <li class="active"><a href="<?php echo U('index');?>">官方首页</a></li>
                <li><a href="#">新闻中心</a></li>
                <li><a href="#">游戏介绍</a></li>
                <li><a href="#">用户中心</a></li>
                <li><a href="#">账号注册</a></li>
                <li><a href="#">充值</a></li>
            </ul>
        </div>
		<div class="main">
			<!-- 客户端下载 -->
			<div class="client">
				<a href="#"><img src="/duduchuanqi/Public/Home/images/client1.fw.png"></a>
				<a href="#"><img src="/duduchuanqi/Public/Home/images/client2.fw.png"></a>
				<span>
					<a href="#" class="recharge1 bor_left"></a>
					<a href="#" class="recharge2"></a>
				</span>
				<a class="bor_left"><img src="/duduchuanqi/Public/Home/images/sbk1.jpg" /></a>
				<a><img src="/duduchuanqi/Public/Home/images/sbk2.jpg" /></a>
			</div>
			<div class="info height1">
				<!-- 轮播图 -->
				<div class="info_left lunbo">
					<div id="PicCont">
						<div class="Pic">
							<a>
								<img src="/duduchuanqi/Public/Home/images/001.jpg">
							</a>
						</div>
						<div class="Pic">
							<a>
								<img src="/duduchuanqi/Public/Home/images/002.jpg">
							</a>
						</div>
						<div class="Pic">
							<a>
								<img src="/duduchuanqi/Public/Home/images/003.jpg">
							</a>
						</div>
						<div class="Pic">
							<a>
								<img src="/duduchuanqi/Public/Home/images/004.jpg">
							</a>
						</div>
						<div class="Pic">
							<a>
								<img src="/duduchuanqi/Public/Home/images/005.jpg">
							</a>
						</div>
						<div id="PicNum">
						</div>
					</div>
				</div>
				<div class="info_right">
					<div class="right_title">
						<b>DUDU公告</b>
						<a href="<?php echo U('notice_list');?>">MORE</a>
					</div>
					<div class="right_content right_content1">
						
					</div>
				</div>
			</div>
			<div class="profession height1">
				<div class="info_left pro_introduct">
					<div class="right_title">
						<b>职业介绍</b>
						<em>战士</em>
						<em>法师</em>
						<em>道士</em>
					</div>
					<!-- 战士 -->
					<div class="pro_job">
						<a>
							<img src="/duduchuanqi/Public/Home/images/job1.fw.png">
						</a>
						<div class="job_intro">
							<h3>热血英豪</h3>
							<p>近战物理职业，通过暴力摧毁敌人</p>
							<h4>职业特征</h4>
							<p>天生神力，作为近战物理输出职业，他们总是冲锋在战斗的第一线，挥舞
							着强大的武器。不仅如此，他们无懈可击的防御技巧可破解敌人强力的攻
							势，是团队中最可靠的防线。站在他们背后可以感受到无尽的安全感。 </p>
						</div>
					</div>
					<!-- 法师 -->
					<div class="pro_job" style="display:none;">
						<a>
							<img src="/duduchuanqi/Public/Home/images/job2.fw.png">
						</a>
						<div class="job_intro">
							<h3>飘逸魔灵</h3>
							<p>职业特征魔法职业，拥有最强大的远程群体魔法</p>
							<h4>职业特征</h4>
							<p>通过使用法术对单个或者群体敌人造成毁灭性的伤害。冰霜、火焰、雷电被法师们运用得行云流水。虽然自身保护的能力较弱，却依然不可小觑他们，因为有可能当你看见他们还没有来得及做出反应，就已被他们释放的烈火所吞噬。</p>
						</div>
					</div>
					<!-- 道士 -->
					<div class="pro_job" style="display:none;">
						<a>
							<img src="/duduchuanqi/Public/Home/images/job3.fw.png">
						</a>
						<div class="job_intro">
							<h3>玄境天尊</h3>
							<p>兼具近战打击和远程施法能力的辅助型职业，亦可召唤宠物协助攻击</p>
							<h4>职业特征</h4>
							<p>攻守兼备的远程法术输出职业，通过使用法术和符咒对敌人施以剧毒，还能辅助队友击破强敌，最为神秘的是他们能召唤骷髅或者神兽协助作战。这些神奇的能力往往让敌人头痛万分，也让道士们可以独自行走在玛法最危险的地带。</p>
						</div>
					</div>
				</div>
				<div class="beauty">
					<h3>美女玩家</h3>
					<div class="beauty_img">
						<img src="/duduchuanqi/Public/Home/images/beauty1.jpg">
						<img src="/duduchuanqi/Public/Home/images/beauty2.jpg">
						<img src="/duduchuanqi/Public/Home/images/beauty3.jpg">
						<img src="/duduchuanqi/Public/Home/images/beauty4.jpg">
					</div>
				</div>
			</div>
			<div class="cross">
				<div class="cross_indro">
					<div class="cross_list">
						<h2 class="cross1">新手入门</h2>
						<a href="#">师徒系统</a>
						<a href="#">聊天系统</a>
						<a href="#" style="border:none;">交易系统</a>
						<a href="#">包裹系统</a>
						<a href="#">助手系统</a>
						<a href="#" style="border:none;">摆摊系统</a>
					</div>
					<div class="cross_list" style="margin-right:0;">
						<h2 class="cross2">高手进阶</h2>
						<a href="#">战士技能</a>
						<a href="#">法师技能</a>
						<a href="#" style="border:none;">道士技能</a>
						<a href="#">结婚系统</a>
						<a href="#">行会系统</a>
						<a href="#" style="border:none;">称号系统</a>
					</div>
					<div class="cross_list">
						<h2 class="cross3">特色玩法</h2>
						<a href="#">世界怪物</a>
						<a href="#">元宝捐赠</a>
						<a href="#" style="border:none;">领地系统</a>
						<a href="#">沙巴克攻</a>
						<a href="#">虚空幻境</a>
						<a href="#" style="border:none;">幸运农场</a>
					</div>
					<div class="cross_list" style="margin-right:0;">
						<h2 class="cross4">道具装备</h2>
						<a href="#">普通道具</a>
						<a href="#">普通材料</a>
						<a href="#" style="border:none;">套装系统</a>
						<a href="#">赤月系列</a>
						<a href="#">祖玛系列</a>
						<a href="#" style="border:none;">沃玛系列</a>
					</div>
				</div>
				<div class="player">
					<h4>已有<span>150465</span>位玩家点赞</h4>
					<div class="good_play">
						<a class="tag-4">很有激情</a>
						<a class="tag-3">一直在玩</a>
						<a class="tag-1">1分钟快速下载</a>
						<a class="tag-4">简单易懂</a>
						<a class="tag-2">很喜欢</a>
						<a class="tag-6">热爱</a>
						<a class="tag-5">很耐玩</a>
					</div>
					<div class="user_pj">
						<ul>
							<li><span>斗战神皇：</span>玩了30年了，一致都在玩，真好玩！</li>
							<li><span>老顽童：</span>我已经80岁了，还在玩，夜玩越好玩。</li>
							<li><span>B哥：</span>装备非常酷，一招秒Boss！</li>
							<li><span>战无不胜：</span>马上99级了，现在轻轻松松爆史诗！不服来战！！！</li>
							<li><span>Jesson：</span>经常有活动，礼包很丰富！</li>
							<li><span>我是你大爷：</span>我*，我很牛逼啊！</li>
							<li><span>寂寞的我：</span>孤独求败啊！</li>
							<li><span>赤练仙子：</span>一分钟快速下载，很beautiful！</li>
						</ul>
					</div>
				</div>
			</div>
<div class="game_img">
                <b>
                    <img src="/duduchuanqi/Public/Home/images/game1.jpg">
                    比奇皇宫
                </b>
                <b>
                    <img src="/duduchuanqi/Public/Home/images/game2.jpg">
                    苍月码头
                </b>
                <b>
                    <img src="/duduchuanqi/Public/Home/images/game3.jpg">
                    白日门
                </b>
                <b style="margin-right:0;">
                    <img src="/duduchuanqi/Public/Home/images/game4.jpg">
                    封魔城门
                </b>
            </div>
        </div>
        <div class="footer">
            <p>抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
            <p>经营许可证：苏ICP备16011318号-1 <span>苏州东游网络科技有限公司</span></p>
        </div>
        <div class="clear"></div>
    </div>
</body>

<script type="text/javascript">
$(function () {
        num = $("#PicCont .Pic").size();
        i = 0;
        for (i = 0; i < num; i++) {
            $("#PicNum").append("<div class='Text'></div>");
        }
        theInt = null;
        $("#PicCont .Pic").eq(0).fadeIn(1000);
        $("#PicNum .Text").eq(0).addClass("cur");
        $("#PicNum .Text").each(function (i) {
            $(this).click(function () {
                HuanDeng(i);
                $("#PicCont .Pic").fadeOut(1000);
                $("#PicCont .Pic").eq(i).fadeIn(1000);
                $("#PicNum .Text").removeClass("cur");
                $(this).addClass("cur");
            });
        });
        HuanDeng = function (p) {
            clearInterval(theInt);
            theInt = setInterval(function () {
                p++;
                if (p < num) {
                    $("#PicCont .Pic").fadeOut(1000);
                    $("#PicCont .Pic").eq(p).fadeIn(1000);
                    $("#PicNum .Text").removeClass("cur");
                    $("#PicNum .Text").eq(p).addClass("cur");
                } else {
                    p = 0
                    $("#PicCont .Pic").fadeOut(1000);
                    $("#PicCont .Pic").eq(p).fadeIn(1000);
                    $("#PicNum .Text").removeClass("cur");
                    $("#PicNum .Text").eq(0).addClass("cur");
                }
            }, 4000);
        }
        HuanDeng(0);
    });

    $(function(){
        $.post('/duduchuanqi/Home/Index/get_article_list',{s:8},function(data){
            console.log(data);
            if(data.status==1){
                $('.right_content1').html(data.list);
            }

        });

        $('.user_pj').kxbdMarquee({
            direction: 'up',
            isEqual: false
        });

        $('.right_title').find('em').mouseover(function(){
            var index = $(this).index();
            $('div.pro_job').eq(--index).show().siblings('div.pro_job').hide();
        });
    });

</script>
</html>