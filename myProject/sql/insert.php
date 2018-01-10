<?php
$imgs= ["img/dishes/s0.jpg", "img/dishes/s0.jpg", "img/dishes/s0.jpg", "img/dishes/s0.jpg", "img/dishes/s1.jpg", "img/dishes/s1.jpg", "img/dishes/s1.jpg", "img/dishes/s1.jpg", "img/dishes/s2.jpg", "img/dishes/s2.jpg", "img/dishes/s2.jpg", "img/dishes/s2.jpg", "img/dishes/s3.jpg", "img/dishes/s3.jpg", "img/dishes/s3.jpg", "img/dishes/s3.jpg", "img/dishes/s4.jpg", "img/dishes/s4.jpg", "img/dishes/s4.jpg", "img/dishes/s4.jpg", "img/dishes/s5.jpg", "img/dishes/s5.jpg", "img/dishes/s5.jpg", "img/dishes/s5.jpg", "img/dishes/s6.jpg", "img/dishes/s6.jpg", "img/dishes/s6.jpg", "img/dishes/s6.jpg", "img/dishes/s7.jpg", "img/dishes/s7.jpg", "img/dishes/s7.jpg", "img/dishes/s7.jpg", "img/dishes/s8.jpg", "img/dishes/s8.jpg", "img/dishes/s8.jpg", "img/dishes/s8.jpg", "img/dishes/s9.jpg", "img/dishes/s9.jpg", "img/dishes/s9.jpg", "img/dishes/s9.jpg", "img/dishes/s10.jpg", "img/dishes/s10.jpg", "img/dishes/s10.jpg", "img/dishes/s10.jpg", "img/dishes/s11.jpg", "img/dishes/s11.jpg", "img/dishes/s11.jpg", "img/dishes/s11.jpg", "img/dishes/s12.jpg", "img/dishes/s12.jpg", "img/dishes/s12.jpg", "img/dishes/s12.jpg", "img/dishes/s13.jpg", "img/dishes/s13.jpg", "img/dishes/s13.jpg", "img/dishes/s13.jpg", "img/dishes/s14.jpg", "img/dishes/s14.jpg", "img/dishes/s14.jpg", "img/dishes/s14.jpg", "img/dishes/s15.jpg", "img/dishes/s15.jpg", "img/dishes/s15.jpg", "img/dishes/s15.jpg", "img/dishes/s16.jpg", "img/dishes/s16.jpg", "img/dishes/s16.jpg", "img/dishes/s16.jpg", "img/dishes/s17.jpg", "img/dishes/s17.jpg", "img/dishes/s17.jpg", "img/dishes/s17.jpg", "img/dishes/s18.jpg", "img/dishes/s18.jpg", "img/dishes/s18.jpg", "img/dishes/s18.jpg", "img/dishes/s19.jpg", "img/dishes/s19.jpg", "img/dishes/s19.jpg", "img/dishes/s19.jpg","img/dishes/s20.jpg", "img/dishes/s20.jpg", "img/dishes/s20.jpg", "img/dishes/s20.jpg", "img/dishes/s21.jpg", "img/dishes/s21.jpg", "img/dishes/s21.jpg", "img/dishes/s21.jpg", "img/dishes/s22.jpg", "img/dishes/s22.jpg", "img/dishes/s22.jpg", "img/dishes/s22.jpg", "img/dishes/s23.jpg", "img/dishes/s23.jpg", "img/dishes/s23.jpg", "img/dishes/s23.jpg", "img/dishes/s24.jpg", "img/dishes/s24.jpg", "img/dishes/s24.jpg", "img/dishes/s24.jpg", "img/dishes/s25.jpg", "img/dishes/s25.jpg", "img/dishes/s25.jpg", "img/dishes/s25.jpg", "img/dishes/s26.jpg", "img/dishes/s26.jpg", "img/dishes/s26.jpg", "img/dishes/s26.jpg", "img/dishes/s27.jpg", "img/dishes/s27.jpg", "img/dishes/s27.jpg", "img/dishes/s27.jpg", "img/dishes/s28.jpg", "img/dishes/s28.jpg", "img/dishes/s28.jpg", "img/dishes/s28.jpg", "img/dishes/s29.jpg", "img/dishes/s29.jpg", "img/dishes/s29.jpg", "img/dishes/s29.jpg", "img/dishes/s30.jpg", "img/dishes/s30.jpg", "img/dishes/s30.jpg", "img/dishes/s30.jpg", "img/dishes/s31.jpg", "img/dishes/s31.jpg", "img/dishes/s31.jpg", "img/dishes/s31.jpg", "img/dishes/s32.jpg", "img/dishes/s32.jpg", "img/dishes/s32.jpg", "img/dishes/s32.jpg", "img/dishes/s33.jpg", "img/dishes/s33.jpg", "img/dishes/s33.jpg", "img/dishes/s33.jpg", "img/dishes/s34.jpg", "img/dishes/s34.jpg", "img/dishes/s34.jpg", "img/dishes/s34.jpg", "img/dishes/s35.jpg", "img/dishes/s35.jpg", "img/dishes/s35.jpg", "img/dishes/s35.jpg", "img/dishes/s36.jpg", "img/dishes/s36.jpg", "img/dishes/s36.jpg", "img/dishes/s36.jpg", "img/dishes/s37.jpg", "img/dishes/s37.jpg", "img/dishes/s37.jpg", "img/dishes/s37.jpg", "img/dishes/s38.jpg", "img/dishes/s38.jpg", "img/dishes/s38.jpg", "img/dishes/s38.jpg", "img/dishes/s39.jpg", "img/dishes/s39.jpg", "img/dishes/s39.jpg", "img/dishes/s39.jpg","img/dishes/s40.jpg", "img/dishes/s40.jpg", "img/dishes/s40.jpg", "img/dishes/s40.jpg", "img/dishes/s41.jpg", "img/dishes/s41.jpg", "img/dishes/s41.jpg", "img/dishes/s41.jpg", "img/dishes/s42.jpg", "img/dishes/s42.jpg", "img/dishes/s42.jpg", "img/dishes/s42.jpg", "img/dishes/s43.jpg", "img/dishes/s43.jpg", "img/dishes/s43.jpg", "img/dishes/s43.jpg", "img/dishes/s44.jpg", "img/dishes/s44.jpg", "img/dishes/s44.jpg", "img/dishes/s44.jpg", "img/dishes/s45.jpg", "img/dishes/s45.jpg", "img/dishes/s45.jpg", "img/dishes/s45.jpg", "img/dishes/s46.jpg", "img/dishes/s46.jpg", "img/dishes/s46.jpg", "img/dishes/s46.jpg", "img/dishes/s47.jpg", "img/dishes/s47.jpg", "img/dishes/s47.jpg", "img/dishes/s47.jpg", "img/dishes/s48.jpg", "img/dishes/s48.jpg", "img/dishes/s48.jpg", "img/dishes/s48.jpg", "img/dishes/s49.jpg", "img/dishes/s49.jpg", "img/dishes/s49.jpg", "img/dishes/s49.jpg"];

require("../data/init.php");
for($i=0;$i<50;$i++){
	$sql="insert into food_pic values(null,'$imgs[$i]',)";
	mysqli_query($conn,$sql);
}
insert into food_pic values(null,'img/dishes/s0.jpg',59);
insert into food_pic values(null,'img/dishes/s1.jpg',59);
insert into food_pic values(null,'img/dishes/s2.jpg',59);
insert into food_pic values(null,'img/dishes/s3.jpg',59);
insert into food_pic values(null,'img/dishes/s0.jpg',59);
insert into food_pic values(null,'img/dishes/s1.jpg',59);
insert into food_pic values(null,'img/dishes/s2.jpg',59);
insert into food_pic values(null,'img/dishes/s3.jpg',59);
?>

 into food_pic values(null,'img/dishes/s	1	.jpg',	59	);
 into food_pic values(null,'img/dishes/s	2	.jpg',	59	);
 into food_pic values(null,'img/dishes/s	3	.jpg',	59	);
 into food_pic values(null,'img/dishes/s	4	.jpg',	60	);
 into food_pic values(null,'img/dishes/s	5	.jpg',	60	);
 into food_pic values(null,'img/dishes/s	6	.jpg',	60	);
 into food_pic values(null,'img/dishes/s	7	.jpg',	60	);
 into food_pic values(null,'img/dishes/s	8	.jpg',	61	);
 into food_pic values(null,'img/dishes/s	9	.jpg',	61	);
 into food_pic values(null,'img/dishes/s	10	.jpg',	61	);
 into food_pic values(null,'img/dishes/s	11	.jpg',	61	);
 into food_pic values(null,'img/dishes/s	12	.jpg',	62	);
 into food_pic values(null,'img/dishes/s	13	.jpg',	62	);
 into food_pic values(null,'img/dishes/s	14	.jpg',	62	);
 into food_pic values(null,'img/dishes/s	15	.jpg',	62	);
 into food_pic values(null,'img/dishes/s	16	.jpg',	64	);
 into food_pic values(null,'img/dishes/s	17	.jpg',	64	);
 into food_pic values(null,'img/dishes/s	18	.jpg',	64	);
 into food_pic values(null,'img/dishes/s	19	.jpg',	64	);
 into food_pic values(null,'img/dishes/s	20	.jpg',	65	);
 into food_pic values(null,'img/dishes/s	21	.jpg',	65	);
 into food_pic values(null,'img/dishes/s	22	.jpg',	65	);
 into food_pic values(null,'img/dishes/s	23	.jpg',	65	);
 into food_pic values(null,'img/dishes/s	24	.jpg',	66	);
 into food_pic values(null,'img/dishes/s	25	.jpg',	66	);
 into food_pic values(null,'img/dishes/s	26	.jpg',	66	);
 into food_pic values(null,'img/dishes/s	27	.jpg',	66	);
 into food_pic values(null,'img/dishes/s	28	.jpg',	67	);
 into food_pic values(null,'img/dishes/s	29	.jpg',	67	);
 into food_pic values(null,'img/dishes/s	30	.jpg',	67	);
 into food_pic values(null,'img/dishes/s	31	.jpg',	67	);
 into food_pic values(null,'img/dishes/s	32	.jpg',	68	);
 into food_pic values(null,'img/dishes/s	33	.jpg',	68	);
 into food_pic values(null,'img/dishes/s	34	.jpg',	68	);
 into food_pic values(null,'img/dishes/s	35	.jpg',	68	);
 into food_pic values(null,'img/dishes/s	36	.jpg',	69	);
 into food_pic values(null,'img/dishes/s	37	.jpg',	69	);
 into food_pic values(null,'img/dishes/s	38	.jpg',	69	);
 into food_pic values(null,'img/dishes/s	39	.jpg',	69	);
 into food_pic values(null,'img/dishes/s	40	.jpg',	70	);
 into food_pic values(null,'img/dishes/s	41	.jpg',	70	);
 into food_pic values(null,'img/dishes/s	42	.jpg',	70	);
 into food_pic values(null,'img/dishes/s	43	.jpg',	70	);
 into food_pic values(null,'img/dishes/s	44	.jpg',	71	);
 into food_pic values(null,'img/dishes/s	45	.jpg',	71	);
 into food_pic values(null,'img/dishes/s	46	.jpg',	71	);
 into food_pic values(null,'img/dishes/s	47	.jpg',	71	);
 into food_pic values(null,'img/dishes/s	48	.jpg',	72	);
 into food_pic values(null,'img/dishes/s	49	.jpg',	72	);
 into food_pic values(null,'img/dishes/s	50	.jpg',	72	);
 into food_pic values(null,'img/dishes/s	51	.jpg',	72	);
 into food_pic values(null,'img/dishes/s	52	.jpg',	73	);
 into food_pic values(null,'img/dishes/s	53	.jpg',	73	);
 into food_pic values(null,'img/dishes/s	54	.jpg',	73	);
 into food_pic values(null,'img/dishes/s	55	.jpg',	73	);
 into food_pic values(null,'img/dishes/s	56	.jpg',	74	);
 into food_pic values(null,'img/dishes/s	57	.jpg',	74	);
 into food_pic values(null,'img/dishes/s	58	.jpg',	74	);
 into food_pic values(null,'img/dishes/s	59	.jpg',	74	);
 into food_pic values(null,'img/dishes/s	60	.jpg',	75	);
 into food_pic values(null,'img/dishes/s	61	.jpg',	75	);
 into food_pic values(null,'img/dishes/s	62	.jpg',	75	);
 into food_pic values(null,'img/dishes/s	63	.jpg',	75	);
 into food_pic values(null,'img/dishes/s	64	.jpg',	76	);
 into food_pic values(null,'img/dishes/s	65	.jpg',	76	);
 into food_pic values(null,'img/dishes/s	66	.jpg',	76	);
 into food_pic values(null,'img/dishes/s	67	.jpg',	76	);
 into food_pic values(null,'img/dishes/s	68	.jpg',	77	);
 into food_pic values(null,'img/dishes/s	69	.jpg',	77	);
 into food_pic values(null,'img/dishes/s	70	.jpg',	77	);
 into food_pic values(null,'img/dishes/s	71	.jpg',	77	);
 into food_pic values(null,'img/dishes/s	72	.jpg',	78	);
 into food_pic values(null,'img/dishes/s	73	.jpg',	78	);
 into food_pic values(null,'img/dishes/s	74	.jpg',	78	);
 into food_pic values(null,'img/dishes/s	75	.jpg',	78	);
 into food_pic values(null,'img/dishes/s	76	.jpg',	79	);
 into food_pic values(null,'img/dishes/s	77	.jpg',	79	);
 into food_pic values(null,'img/dishes/s	78	.jpg',	79	);
 into food_pic values(null,'img/dishes/s	79	.jpg',	79	);
 into food_pic values(null,'img/dishes/s	80	.jpg',	80	);
 into food_pic values(null,'img/dishes/s	81	.jpg',	80	);
 into food_pic values(null,'img/dishes/s	82	.jpg',	80	);
 into food_pic values(null,'img/dishes/s	83	.jpg',	80	);
 into food_pic values(null,'img/dishes/s	84	.jpg',	81	);
 into food_pic values(null,'img/dishes/s	85	.jpg',	81	);
 into food_pic values(null,'img/dishes/s	86	.jpg',	81	);
 into food_pic values(null,'img/dishes/s	87	.jpg',	81	);
 into food_pic values(null,'img/dishes/s	88	.jpg',	82	);
 into food_pic values(null,'img/dishes/s	89	.jpg',	82	);
 into food_pic values(null,'img/dishes/s	90	.jpg',	82	);
 into food_pic values(null,'img/dishes/s	91	.jpg',	82	);
 into food_pic values(null,'img/dishes/s	92	.jpg',	83	);
 into food_pic values(null,'img/dishes/s	93	.jpg',	83	);
 into food_pic values(null,'img/dishes/s	94	.jpg',	83	);
 into food_pic values(null,'img/dishes/s	95	.jpg',	83	);
 into food_pic values(null,'img/dishes/s	96	.jpg',	84	);
 into food_pic values(null,'img/dishes/s	97	.jpg',	84	);
 into food_pic values(null,'img/dishes/s	98	.jpg',	84	);
 into food_pic values(null,'img/dishes/s	99	.jpg',	84	);
 into food_pic values(null,'img/dishes/s	100	.jpg',	85	);
 into food_pic values(null,'img/dishes/s	101	.jpg',	85	);
 into food_pic values(null,'img/dishes/s	102	.jpg',	85	);
 into food_pic values(null,'img/dishes/s	103	.jpg',	85	);
 into food_pic values(null,'img/dishes/s	104	.jpg',	86	);
 into food_pic values(null,'img/dishes/s	105	.jpg',	86	);
 into food_pic values(null,'img/dishes/s	106	.jpg',	86	);
 into food_pic values(null,'img/dishes/s	107	.jpg',	86	);
















	$data=[ '《DOTA2》打过的比赛记录可以删除么？',
  '《DOTA2》如何进行镶嵌？',
  '《DOTA2》为什么我的物品都没有镶孔？',
  '《DOTA2》登陆器的运行按钮是灰色的，无法点击如何处理？',
  '',
  '《DOTA2》闪退如何处理',
  '《DOTA2》信使飞僵小宝与反和谐码冲突么？',
  '《DOTA2》6.82更新日志',
  '《DOTA2》DOT2账号的邮箱内收不到验证电子邮件，如何处理？',
  '《DOTA2》镶嵌宝石后有什么好处？',
  '《DOTA2》为何购买了某场比赛的门票后无法看比赛？',
  '《DOTA2》充值成功，能看到自己的账户余额，但看不到刀币？',
  '',
  '《DOTA2》电竞账号与完美通行证合并后，充值会有变化么？',
  '《DOTA2》巧匠凿刀如何获得？',
  '《DOTA2》遇到外挂，挂机脚本如何处理？',
  '《DOTA2》充值有什么好处？',
  '《DOTA2》完美点卷如何转到dota2里？',
  '《DOTA2》收费模式是什么？',
  '《DOTA2》把好友屏蔽了怎么解除？',
  '《DOTA2》亚洲邀请赛互动指南下架日期',
  '《DOTA2》如何确认DOTA2账号和电竞账号的绑定关系?',
  '《DOTA2》完美声讯卡充值流程：',
  '《DOTA2》小红本的奖励怎么没有给我？到了等级领不到等级宝箱？',
  '《DOTA2》商城出售的物品是否有时限？',
  '《DOTA2》如何选择同样英雄？',
  '',
  '《DOTA2》神州行充值流程',
  '《DOTA2》收费标准是什么？',
  '',
  '《DOTA2》无法观战好友如何处理？',
  '《DOTA2》低匹配（小黑屋）介绍',
  '《DOTA2》如果总提示网络连接中、更新已挂起、准备就绪或者无更新速度如何处理？',
  '《DOTA2》在游戏内个人昵称下方的个性签名描述如何编辑？',
  '《DOTA2》个人信息中的称赞有什么用？',
  '《DOTA2》如何添加、删除好友？',
  '《DOTA2》如何改为DOTA1传统键位？',
  '',
  '《DOTA2》冥魂之夜什么时候结束？',
  '《DOTA2》消费后刀币扣除，但未给物品如何处理？',
  '《DOTA2》电竞账号没有绑定DOTA2账号能否充值？',
  '《DOTA2》我已有外服DOTA2账号，登陆后提示我需要进行一次安全认证？',
  '《DOTA2》什么样的情况会导致双方无法进行交易？',
  '《dota2》亚洲邀请赛互动指南介绍',
  '《DOTA2》经过社区的努力，新的亚洲邀请赛互动指南挑战目标已经解锁。但是我并未收到相应物品？',
  '《DOTA2》2013年 10月22日更新内容',
  '《DOTA2》进入游戏，英雄或怪的血条不显示。',
  '《DOTA2》完美电竞账号如何更改绑定手机和邮箱？',
  '《DOTA2》商城购买的套装品质与实际给的配件不符怎么办？',
  '《DOTA2》在XP系统下切换游戏非常容易导致游戏崩溃怎么办？',
  '《DOTA2》短信充值流程：',
  '《DOTA2》传送特效怎么获得',
  '《DOTA2》饰品使用礼品包装封装了还能取出来么？',
  '《DOTA2》登陆游戏使用DOTA2账号还是使用完美电竞账号？',
  '《DOTA2》TI4互动指南积分如何获得？',
  '《DOTA2》PA至宝如何升级？',
  '《DOTA2》6.81更新游戏更新',
  '《DOTA2》开宝箱说明不会有重复的套装，为何出现重复？',
  '《DOTA2》如何固定英雄画面，让画面以英雄为中心固定移动？',
  '《DOTA2》火盐金锭为何没有返还？',
  '《DOTA2》中还有哪些DOTA的英雄没有出？',
  '《DOTA2》目前是否可以进行退款或转账？',
  '',
  '《DOTA2》如何确认物品是否能交易？',
  '',
  '《DOTA2》是否有官方手动下载补丁包？',
  '《DOTA2》亚洲邀请赛互动指南怎么升级？',
  '《DOTA2》电竞账号、完美通行证和DOTA2账号以及steam账号的区别是什么？',
  '《DOTA2》如何绑定完美电竞账号？',
  '《DOTA2》快捷支付充值流程',
  '《DOTA2 》如何消费刀币？',
  '《DOTA2》外服的余额是否可以和国服做转换？',
  '《DOTA2》银行卡充值流程是什么？',
  '《DOTA2》解封重重宝藏的珍藏获得礼品包装能得到几个重重宝藏的珍藏？',
  '《DOTA2》在比赛期间我怎样才能找到契约的目标？',
  '《DOTA2》飞僵小宝如何激活？外服是否可以激活？',
  '《DOTA2》如何开启关闭自动攻击？',
  '《DOTA2》如何查看电竞账号是否合并？',
  '《DOTA2》天梯系统介绍',
  '《DOTA2》如何取消移除购物车里的物品？',
  '《DOTA2》一卡通使用提示密码错误',
  '《DOTA2》2014年6月19日更新',
  '《DOTA2》TI4互动指南挑战目标达成奖励介绍',
  '《DOTA2》游戏客户端游戏异常退出、无法匹配',
  '《DOTA2》和英雄联盟（LOL）那个好玩？',
  '《DOTA2》现在充值有什么优惠嘛?',
  '',
  '《DOTA2》TI4互动指南如何升级？',
  '一个电竞账号可以绑定几个DOTA2账号？',
  '《DOTA2》成功执行契约的话我会获得什么东西？',
  '',
  '《DOTA2》如何清除逃跑记录？',
  '',
  '《DOTA2》战队创建介绍',
  '《DOTA2》刀币如何进行充值？',
  '《DOTA2》商城购物提示英文报错如何处理？',
  '《DOTA2》在哪可以查看饰品？',
  '《DOTA2》为何无法组好友组队或邀请好友聊天？',
  '《DOTA2》匹配成功，但无法进入游戏，点重新连接无法连入如何处理？',
  '《DOTA2》不小心调到非正常显示比例，无法重进游戏如何处理？',
	'《DOTA2》游戏快捷键设置无法保存',
  '《DOTA2》夜魇暗潮活动的“凶煞”限定图纸',
  '《DOTA2》招募战友介绍',
  '《DOTA2》完美电竞账号怎么注册？',
  '《DOTA2》完美电竞账号的防沉迷系统有什么作用？如何填写和修改？',
  '《DOTA2》登陆游戏是让我输入验证码是什么意思？',
  '《DOTA2》注册完美电竞账号时的选填信息是否可以不填么？',
  '《DOTA2》如何查看队友大招冷却情况？',
  '《DOTA2》小黄本（TI5）豪华版和普通版有什么区别？',
  '《DOTA2》小黄本赠送的传送特效、闪烁特效等有什么效果？',
  '《DOTA2》小黄本（TI5）购买多久可以交易？',
  '《DOTA2》如何提示队友自己的血量和魔量剩余状态？',
  '《DOTA2》国服是否有网页商城？',
  '《DOTA2》windows8系统日文版的是否支持dota2？',
  '《DOTA2》观看比赛时如何选择解说员？',
  '《DOTA2》如何可以快速告知队友敌方英雄失踪的危险信息？',
  '《DOTA2》涉及到steam更新，出现客户端版本过低，但launcher是正常可运行状态的，如何处理？',
  '《DOTA2》安全令牌介绍',
  '《DOTA2》绑定电竞账号时提示，操作失败，请退出客户端后重新登录。（10006） 【更换账号】如何处理？',
  '《DOTA2》忘记dota2账号怎样找回？',
  '',
  '',
  '《DOTA2》如何编辑我的特色物品？',
  '《DOTA2》登陆器提示同步冲突？',
  '',
  '《DOTA2》打字时显示星星，看不到字的内容是为什么？',
  '',
  '《DOTA2》如何取消英雄限定模式？',
  '《DOTA2》TI4互动指南赠送的不朽宝藏如何获得？',
  '',
  '《DOTA2》更换下载节点后，依然显示shanghai，如何处理？',
  '《DOTA2》ACE世界电子职业精英赛如何报名，如何联系主办方？',
  '《DOTA2》steam上拥有很多饰品，回归国服玩是否互通？',
  '《DOTA2》无法打开录像如何处理？',
  '',
  '《DOTA2》观战的导播视角权限如何获得？',
  '《DOTA2》创建本地房间（局域网模式）介绍。',
  '《DOTA2》如何更改DOTA2密码和安全提问？',
  '《DOTA2》在哪里可以进行键位设定？',
  '《DOTA2》TI4国际邀请赛信使鹦鹉副将如何获得？',
  '《DOTA2》如何交换英雄？',
  '《DOTA2》进入提示Steam client missing or out of date',
  '《DOTA2》2014年月8月6日更新内容',
  '《DOTA2》新手礼物',
  '《DOTA2》用户表示购买了Dota2手办赠送的激活码使用异常',
  '《DOTA2》如何才能够匹配天梯比赛',
  '《DOTA2》中连杀配音以及语音包无声音如何处理？',
  '《Dota2》如何设置全屏模式或者窗口模式',
  '《DOTA2》如何选择英雄？',
  '《DOTA2》登录账号提示我需要补填昵称、防沉迷信息、邮箱等，但总是填写有误，页面不能跳转如何处理？',
  '',
  '《DOTA2》 地图偏好怎么修改？',
  '《DOTA2》如何进行交易？',
  '《DOTA2》如何解绑电竞账号和DOTA2账号？',
  '《DOTA2》如何发邮件联系V社（Steam平台），提交申诉请求？',
  '《DOTA2》白银观战宝石和黄金观战宝石作用是什么？',
  '《DOTA2》完成契约后我是不是需要赢得比赛才能获得奖品？',
  '《DOTA2》兑换CDK提示代码无效为什么？',
  '《DOTA2》 系统提示我获得了“载入画面珍藏套和七星蟠龙环”，请问我在哪里兑换？',
  '《DOTA2》门票邀请好友一起看，好友会获得礼物吗？',
  '《DOTA2》门票介绍',
  '《DOTA2》6.81改动内容一览',
  '《DOTA2》如何在按键发言和自由发言切换？',
  '《DOTA2》芳晓节何时结束？',
  '《DOTA2》如何购买英雄？',
  '《DOTA2》如何查询电竞账号是否绑定了DOTA2账号',
  '《DOTA2》为什么等级礼物不见了？',
  '《DOTA2》如何在商城购物直接赠送好友礼物？',
  '《DOTA2》如果所有英雄都被幻影刺客送入了英雄冢会怎么样？',
  '《DOTA2》如何下载国服客户端？',
  '《DOTA2》2015国际邀请赛在线预热活动FAQ',
  '《DOTA2》飞僵小宝是神话品质的吗，是否可交易',
  '《DOTA2》传承活动提交信息后为什么提示昵称重复无法提交？',
  '《DOTA2》玩家咨询特权网吧事宜如何处理？',
  '《DOTA2》亚洲邀请赛观战比赛必须要购买小红本么？',
  '《DOTA2》交易时黑屏，看不到任何内容或显示会话超时？',
  '《DOTA2》是否有双线服务器？',
  '《DOTA2》的界面文字和系统语音如何在中英文之间切换？',
  '《DOTA2》无法匹配，无法重新连入如何处理？',
  '《DOTA2》2013年12月13日更新',
  '《DOTA2》我升级了亚洲邀请赛互动指南却没获得相应的奖励？',
  '《DOTA2》完美手机卡充值流程',
  '《DOTA2》装备重铸时候放入进行重铸的装备无法取出如何处理？',
  '《DOTA2》如何选择不匹配黑店？',
  '《DOTA2》刚下载的客户端登陆时提示：only one dota2 per costomer 。',
  '《DOTA2》匹配比赛游戏模式介绍',
  '《DOTA2》如何公开或隐藏自己的个人资料？',
  '《DOTA2》如何查看我的最近游戏记录及比赛录像？',
  '《DOTA2》如何能修改游戏内的昵称和头像等资料？',
  '《DOTA2》英雄键位设定介绍。'	,
	'《DOTA2》出现游戏内容显示异常、客户端停止工作等现象如何处理？',
  '《DOTA2》运行dota2后直接进入steam平台，是什么原因？',
  '《DOTA2》观战页面无比赛或只有少数几场比赛是什么情况？',
  '《DOTA2》如何截图？截图文件保存在哪里？',
  '《DOTA2》如何查看胜负逃跑的场次？',
  '《DOTA2》为何显示“录像已过期”或“并未录制录像”',
  '《DOTA2》注册完美电竞账号时，免费获取验证码点击后未受到验证码怎么办？',
  '《DOTA2》如何重新登陆或者更换其他DOTA2账号登陆？',
  '《DOTA2》匹配游戏中的游戏模式会影响物品掉落么？',
  '《DOTA2》提示被纳入防沉迷，已经登陆完美电竞账号修改为符合条件的身份证号码，为何进入游戏还提示纳入防沉迷？',
  '',
  '',
  '《DOTA2》如何注册一个新的DOTA2账号（steam账号）？',
  '《DOTA2》如何编辑我的特色英雄？',
  '《DOTA2》国服客户端支持什么操作系统？',
  '',
  '',
  '',
  '',
  '《DOTA2》如何更改DOTA2账号绑定邮箱？',
  '《DOTA2》开游戏的时候，双击图标后就弹不出登陆器窗口了，任务管理器里面显示是未响应。',
  '',
  '《DOTA2》单位行为键位设定介绍。',
  '',
  '《DOTA2》报错提示steam cannot run from a folder path that includes non Englishi charac',
  '',
  '《DOTA2》报错you re likely out of os paged pool memory',
  '',
  '《DOTA2》选英雄的时候是否可以秒退？是否会有惩罚？',
  '',
  '《DOTA2》进入游戏后右下角一块区域频繁闪烁如何解决？',
  '《DOTA2》2014年6月17日更新',
  '《DOTA2》提示无法访问windows installer服务，windows installer没有正确安装。',
  '',
  '《DOTA2》如何下载录像？',
  '《DOTA2》信使键位设定介绍。',
  '《Dota2》守卫传承认证活动相关FAQ',
  '《DOTA2》2014年6月12日更新',
  '《DOTA2》为什么我匹配了一场胜利了但是小红本没有记录，每日首胜挑战积分也没有获得？',
  '《DOTA2》开创者的血精石、传奇宝珠等声望之遗饰品有什么作用？',
  '《DOTA2》客户端总闪退如何处理？',
  '《DOTA2》如何开启控制台查看FPS及pin值？',
  '《DOTA2》世界服的steam账号 如何转国服账号？',
  '《DOTA2》小黄本（TI5）中的奖励内容都有哪些?'
	]













