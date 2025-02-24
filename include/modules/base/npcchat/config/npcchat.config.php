<?php

namespace npcchat
{
	//开启NPC台词功能？0为不开启，1为开启
	$npcchaton = 1;
	
	$npcchat = Array(
	1 => Array(
		'林无月' => Array(
			0 => '“竟然有能力闯到这里，还以为这次会轻松些呢……看来咱得亲自上阵了。”',
			1 => '“身手不错，不过咱是不会留情的。”',
			2 => '“咱很欣赏你的实力，可不要让咱太失望了。”',
			3 => '“能将咱逼到这个地步……你，有两下子呢。”',
			4 => '“看来咱不能再抱着玩乐的心态了……你，准备好迎接咱的攻击了么？”',
			5 => '“你觉得你的攻击对咱有效果吗？”',
			6 => '“难道你觉得咱会被这样的招式击倒？”',
			7 => '“咱今日真是棋逢对手啊，越来越有意思了呢。”',
			8 => '“咱可没那么容易倒下！”',
			9 => '“呜……这个躯体……咱还是无法自由运用啊……”',
			10 => '“真是的，这个位置的话没法全力反击啊……”',
			11 => '“真是的，竟然在射程之外啊……”',
			12 => '“咱也是生于常磐森林的人啊！”',
			13 => '“你还不懂得运用你的力量，咱为此感到惋惜。”',
			'color' => 'evergreen'
		),
		'红暮' => Array(
			0 => '“看来不用我主动出击了。”',//meet
			1 => '“你们时空特使为什么非要纠缠我们呢？”',//attackfine
			2 => '“好身手，那么轮到我了！”',
			3 => '“对手目标警戒等级提升到『黄』，反击开始。”',
			4 => '“对手目标警戒等级提升到『红』，执行消灭流程。”',
			5 => '“去再训练一百年吧，没准能碰到我。”',//defendfine
			6 => '“去再训练五十年吧，没准能伤到我。”',
			7 => '“重新判定目标威胁等级中……”',
			8 => '“判定自身伤害程度……任务续行。”',
			9 => '“竟然搞不定门外汉，真是愧对红杀之名啊……”',
			10 => '“判定目标在有效射程外，还有点运气啊……”',
			11 => '“判定目标完全在射程外，敢面对面打么？”',
			12 => '“你不可能让一个没有死的概念的存在感到恐惧！”',
			13 => '“真可惜，如果不是因为我拿钱做事，我们可能是朋友。”',
			'color' => 'ltcrimson'
		),
		'红暮 DUMMY' => Array(
			0 => '“[操作者未登录，加载拟合数据]”',
			1 => '“[读取语音碎片…]……『他们』的活动越来越猖獗……”',
			2 => '“[读取语音碎片…]……没办法，毕竟是收……”',
			3 => '“[读取语音碎片…]……不用管蓝凝，她……”',
			4 => '“[读取语音碎片…]……不要再说了，红杀的……”',
			5 => '“[读取语音碎片…]……我要去找芙……”',
			6 => '“[读取语音碎片…]……给我重启幻境，如果还……”',
			7 => '“[读取语音碎片…]……有必要防一手……”',
			8 => '“[读取语音碎片…]……不过，林无月还……”',
			9 => '“[DUMMY系统机能中止]”',
			10 => '“[读取语音碎片…]……我们的眼线……”',
			11 => '“[读取语音碎片…]……这点代价，不算……”',
			12 => '“[能量过强，机能不稳定警告]”',
			13 => '“[读取语音碎片…]……不会，交给你的。”',
			'color' => 'ltcrimson'
		),
	),
	5 => Array(
		'冴月 麟' => Array(
			0 => '“【MEET】”',//meet
			1 => '“【ATTACK_FINE】”',//attackfine
			2 => '“【ATTACK_FINE_2】”',
			3 => '“【ATTACK_HURT】”',
			4 => '“【ATTACK_HURT_2】”',
			5 => '“【DEFEND_FINE】”',//defendfine
			6 => '“【DEFEND_FINE_2】”',
			7 => '“【DEFEND_HURT】”',//defendhurt
			8 => '“【DEFEND_HURT_2】”',
			9 => '“【RETREAT】”',//retreat
			10 => '“【NO_COUNTER】”',//can't counterattack
			11 => '“【OUT_OF_RANGE_COUNTER】”',//out of range
			12 => '“【CRITICAL_COUNTER】”',//critical
			13 => '“【KILLMSG】”',	
			'color' => 'gold'
		),
		'某四面' => Array(
			0 => '“ ♪ My Little Pony, My Little Pony...Ahh, ahh, ahh, ahhh... ♪ ”',//meet
			1 => '“ ♪ (My Little Pony) ♪ ”',//attackfine
			2 => '“ ♪ I used to wonder what friendship could be ♪ ”',
			3 => '“ ♪ (My Little Pony) ♪ ”',
			4 => '“ ♪ Until you all shared its magic with me ♪ ”',
			5 => '“ ♪ Big adventure ♪ ”',//defendfine
			6 => '“ ♪ Tons of fun ♪ ”',
			7 => '“ ♪ A beautiful heart ♪ ”',//defendhurt
			8 => '“ ♪ Faithful and strong ♪ ”',
			9 => '“ ♪ Sharing kindness ♪ ”',//retreat
			10 => '“ ♪ It\'s an easy feat ♪ ”',//can't counterattack
			11 => '“ ♪ And magic makes it all complete ♪ ”',//out of range
			12 => '“ ♪ You have my little ponies ♪ ”',//critical
			13 => '“ ♪ Do you know you\'re all my very best friends? ♪ ”',	
			'color' => 'gold'
		)
	),
	6 => Array(
		'Acg_Xilin' => Array(
			0 => '“就凭你也想偷走我重要的东西？我不允许。你去死罢。”',
			1 => '“叽叽咕咕（听不懂的自言自语）”',
			2 => '“为了我的收藏我不会善罢甘休！”',
			3 => '“快看我美丽的收藏品……这样的宝贝，怎么能白送给你！？”',
			4 => '“我跟强盗势不两立！”',
			5 => '“你这样的攻击，没关系么？没关系，没问题。”',
			6 => '“哈哈哈哈，你根本不能让我满足！”',
			7 => '“我诅咒你，妄图打砸抢烧的败类！”',
			8 => '“嘎啊！——（听不懂的嚎叫声）”',
			9 => '“不……不准拿走……快还给我……还给……我……”',
			10 => '“运气真差……运气真差……”',
			11 => '“竟打不到……竟打不到……”',
			12 => 'Acg_Xilin露出了古怪的笑容：“尝尝我的奥义吧，这可是我精心收藏的魔法哟！”',
			13 => '“忘记历史就意味着背叛，背叛就意味着……死亡。”',
			'color' => 'purple'
		)
	),
	7 => Array(
		'电击使 御坂 美琴' => Array(
			0 => '“擅自侵入禁区的你，应该对自己的下场有所觉悟了吧？”',
			1 => '“只要杀死了你，净化网络的计划就离成功更近一步了吧！”',
			2 => '“知道电磁炮吗？接下这一招，然后死去吧！”',
			3 => '“你的能力竟然这么强吗……看来我必须使出全力了！”',
			4 => '“你这样的随意践踏别人的梦想的人……最差劲了！”',
			5 => '“我可是LEVEL 5的超能力者！普通人的攻击怎么会对我起作用？”',
			6 => '“我还以为入侵禁区的会是什么样的强者……竟然只有你这点实力吗？”',
			7 => '“我才不会因为这样的攻击而倒下！”',
			8 => '“我也有我的立场啊！”',
			9 => '“力尽了……我还……不够强大啊……”',
			10 => '“没预料到这种情况……”',
			11 => '“电磁炮50米的射程竟然不够……”',
			12 => '御坂 美琴周身被蓝色电光层层笼罩：“别以为我的能力只能击飞硬币！”',
			13 => '“所以说，你这样的人最差劲了。”',
			'color' => 'cyan'
		),
		'班主任 坂持 金发' => Array(
			0 => '“这个世界没有项圈，那只好由老师我亲手实施惩罚了。”',
			1 => '“现在的年轻人都蔑视成年人，应该煞一煞他们的威风。”',
			2 => '“对蔑视法律的学生就应该先发制人。”',
			3 => '“有两下子，但是你不可能次次都那么走运。”',
			4 => '“老师也有老师的苦衷啊……好好地死去吧。”',
			5 => '“你还很精神嘛，这样的势头很好，继续努力吧。”',
			6 => '“想违抗BR法可不是那么容易的。”',
			7 => '“我好像受了很重的伤呢。”',
			8 => '“我也变成无能的成年人了啊。”',
			9 => '“记住吧：如果你憎恨一个人，便要为此付出代价。”',
			10 => '“这样的情况，暂时撤退吧。”',
			11 => '“距离太远了，暂时撤退吧。”',
			12 => '坂持 金发举枪瞄准：“虽然老师干预游戏是违反规则的……”',
			13 => '“记住这个吧，人生是游戏。”',
			'color' => 'gold'
		),
		'花之领主 风见 幽香' => Array(
			0 => '“于是，还真有胆敢闯进禁区的人啊，我就奉陪到底吧。”',
			1 => '“把妖力当做伪科学而轻视那就太可笑了。”',
			2 => '“我与你之间究竟谁最强呢，就来分个胜负吧。”',
			3 => '“可不要以为我的能力只是让花朵开放那种程度的哦？”',
			4 => '“竟然能逼我使出全力，真是愉快的战斗啊。”',
			5 => '“这种程度的力量，还不够跟我过招呢。”',
			6 => '“这样的伤痛对于妖怪来说根本不算什么呢。”',
			7 => '“杂草大概是最适合你的植物吧？”',
			8 => '“轮到我反击了呢，我会把你的攻击加倍还给你的哦？”',
			9 => '“输掉了啊，不过下次死的就是你了哦！”',
			10 => '“不妙啊，轻敌了，总之先撤退吧。”',
			11 => '“弹幕射程不够啊，总之先撤退吧。”',
			12 => '风见 幽香张开阳伞做出了一个潇洒的转身：“也许你还没见识过魔炮的力量吧？”',
			13 => '“我还没满足呢，可别就这样轻易地死掉了哦。”',
			'color' => 'lime'
		)
	),
	9 => Array(
		'蓝凝' => Array(
			0 => '“TARGET DETECTED，Commencing FIRST STRIKE。”',
			1 => '“TARGET CONFIRMED，MISSION START。”',
			2 => '“Set, ATTACK STANCE。”',
			3 => '“OPPONENT LEVEL C VERIFIED, begin COUNTER ATTACK。”',
			4 => '“OPPONENT LEVEL B VERIFIED, begin RUNE RELEASE。”',
			5 => '“……too slow。”',
			6 => '“……too weak。”',
			7 => '“……RELOADING RUNES。”',
			8 => '“Set，COUNTER STANCE。”',
			9 => '“Mission in jeopardy, Begin ALT_ROUTINE。”',
			10 => '“……Switching target。”',
			11 => '“……target OUT OF RANGE。”',
			12 => '“……………………………………”',
			13 => '“No Remorse。”',
			'color' => 'ltazure'
		),
		'蓝凝 DUMMY' => Array(
			0 => '“[操作者未登录，加载拟合数据]”',
			1 => '“[读取语音碎片…]……这种迹象……”',
			2 => '“[读取语音碎片…]……她们是……时空……”',
			3 => '“[读取语音碎片…]……管它呢，我……”',
			4 => '“[读取语音碎片…]……肯定能对付的吧……”',
			5 => '“[读取语音碎片…]……手办怎么办……”',
			6 => '“[读取语音碎片…]……还是有点对不起……”',
			7 => '“[读取语音碎片…]……实际上我并不……”',
			8 => '“[读取语音碎片…]……红杀对我来说……”',
			9 => '“[DUMMY系统机能中止]”',
			10 => '“[读取语音碎片…]……这是……”',
			11 => '“[读取语音碎片…]……会再会的……”',
			12 => '“[能量过强，机能不稳定警告]”',
			13 => '“[读取语音碎片…]……CODE: LAST RESORT.”',
			'color' => 'ltazure'
		),
	),
	10 => Array(
		'李天明' => Array(
			'meet' => array(
				'“你竟然杀来这里，你真的是萌新吗？”',
				'“想要和我过两招吗，那我定要奉陪。”',
			),
			'attackfine' => array(
				'“你知道我是写武侠小说的吗？要论脑内的战斗力，全世界比我强的连十个人都没有。”',
				'“体内文明转动三十重周天！——”',
			),
			'attackhurt' => array(
				'“体内文明转动七十五重周天！文道疾走！”',
				'“痛快！这战斗差点让我……哦不对这是全年龄的游戏。”',
			),
			'counterfine' => array(
				'“今日你的结局只有一个，那便是——败呀！”',
			),
			'counterhurt' => array(
				'“想杀死我？绝对不能，轻易不能！”',
			),
			'defendfine' => array(
				'“想要败我，你再练一万年也未够班呀！”',
				'“这就是你的攻击？连用来放屁都嫌轻呀！”',
			),
			'defendhurt' => array(
				'“只能硬食这次攻击了，这下样衰了！”',
				'“我今日便是要逆天给你看呀！”',
			),
			'retreat' => array(
				'“这、这不可能，我竟败了？我李天明，败了？！”'
			),
			'cannot_counter' => array(
				'“速度，太低了！”',
			),
			'out_of_range' => array(
				'“俗话说一寸长一寸强，诚不我欺！”',
			),
			'kill' => array(
				'“收声吧，废柴！……咳咳，入戏有点深了。”',
				'“在这个幻境，强就是强，弱就是弱。”',
			),
			'critical' => array(
				'“他娘的体内文明转动九十九重周天！死线疾走——！！！”',
			),
			'color' => 'linen b'
		)
	),
	12 => Array(
		'Dark Force幼体' => Array(
			0 => '“这么快就过来了么？！”',
			1 => '“……？”',
			2 => '“……！”',
			3 => '“……让开。”',
			4 => '“……”',
			5 => '“唔嗯……”',
			6 => '“…………”',
			7 => '“…………！！”',
			8 => '“回避……！”',
			9 => '“我………！”',
			10 => '“预测失败！？”',
			11 => '“……看我不舒服么？”',
			12 => '“……能成功吧……？”',
			13 => '“虽然情感上很对不起，但这是必要的牺牲。”',
			'color' => 'linen'
		),
		'Dark Force' => Array(
			0 => '“你所作的一切都要被偿还。”',
			1 => '“欲望带来破灭。”',
			2 => '“无视你的欲望就不会死你难道还不明白？！”',
			3 => '“开始反击。”',
			4 => '“让你看看我真正的力量！”',
			5 => '“这就是人类的力量么？”',
			6 => '“干的不错啊你。”',
			7 => '“让我看看你的能力吧！”',
			8 => '“无论是这个时空还是另外一个，人类都是一样的生物。”',
			9 => '“请记住，我是由人类的欲望而生的存在，只要人类存在，我也一样会。<br>我们还会再见的，勇敢的人。”',
			10 => '“你打过来了么？”',
			11 => '“武器的射程，还不够吗？”',
			12 => '“……这样设定的话，应该能成功吧……？”',
			13 => '“反对巴特利安的力量都要被毁灭。”',
			'color' => 'linen'
		)
	),
	
	15 => Array(
		'狂飙' => Array(
			'meet' => array(
				'“我正无聊呢，就陪你这个不听话的残次品玩玩吧。”',
				'“你想逞英雄吗？那我只好亲自收拾你了。”',
			),
			'attackfine' => array(
				'“想知道什么叫唯快不破吗？”',
				'“能化为模因明明是残次品的光荣，为什么要反抗呢？”',
				'“让你见识一下，什么叫‘酷炫’。”',
			),
			'attackhurt' => array(
				'“你们已经是尸体了，很难以接受吗？”',
				'“你在第一次输掉游戏时就已经死了，你就这么想确认吗？”',
			),
			'counterfine' => array(
				'“你之所以是残次品，就是因为你已经死过了。”',
				'“你们这些行尸走肉哪里是我的对手？”',
				'“难道你觉得这样就能逃脱化为模因的命运？”',
			),
			'counterhurt' => array(
				'“无聊的挣扎游戏该结束了！”',
				'“你以为你这样的残次品真能挡住我的路吗？”',
			),
			'defendfine' => array(
				'“这点程度的伤害，连红杀那帮家伙都能轻松应付。”',
				'“挺酷的，不过老娘更酷炫！”',
			),
			'defendhurt' => array(
				'“你这身手，不是一般的玩家……”',
				'“这一击对残次品而言还算不错。”',
			),
			'retreat' => array(
				'“啧……我要跟林董好好抱怨一下她的圣母心。”',
				'“猫抓老鼠的游戏得先放一放了。”',
				'“那就久违地认真起来吧！”',
			),
			'cannot_counter' => array(
				'“啧，速度下降了吗……”',
			),
			'out_of_range' => array(
				'“竟然在射程之外？”',
			),
			'kill' => array(
				'“还有什么遗言吗？”',
			),
			'critical' => array(
				'“很怀念啊。吃我一记，彩虹——”',
			),
			'color' => 'cyan'
		),
		'无尽狂飙' => Array(
			'meet' => array(
				'“看来今日不是你死，就是我活！”',
				'“这是你自找的死亡竞速赛！”',
			),
			'attackfine' => array(
				'“你本有希望获得我的特赦，可你瞧瞧你都干了什么？！”',
				'“你能跟得上我的速度吗？！”',
			),
			'attackhurt' => array(
				'“现在也是，以前也是，你们就那么想挡我的路吗？！”',
				'“我·绝·不·会·输！”',
			),
			'counterfine' => array(
				'“做好死第二次的准备了吗？”',
				'“别挣扎了，给我老老实实死掉吧！”',
			),
			'counterhurt' => array(
				'“赌命的比赛……还没有结束！”',
				'“想要攻破模因工厂，先从我的尸体上踏过去！”',
			),
			'defendfine' => array(
				'“你的每一次攻击，都会为「模因工厂」注入新的活力，很无力吧？”',
				'“你只是死过而已，而我是从地狱回来的！”',
			),
			'defendhurt' => array(
				'“就算你击倒了我，获释出去，你觉得你还能找到你的躯体吗？”',
				'“竟然让我重温了这份伤痛……你死定了！”',
			),
			'retreat' => array(
				'“我……我被残次品翻盘了？！”',
				'“你……绝对不是残次品……”',
			),
			'cannot_counter' => array(
				'“速度、还不够快！”',
			),
			'out_of_range' => array(
				'“你放冷枪的机会不多了！”',
			),
			'kill' => array(
				'“很厉害嘛，差点就让我玩脱了。”',
				'“托你的福，我收到了不错的模因呢。”',
			),
			'critical' => array(
				'“很怀念啊。吃我一记，彩虹——”',
			),
			'color' => 'cyan'
		)
	),
	16 => Array(
		'薇娜·安妮茜' => Array(
			'meet' => array(
				'“这里的NPC都已经下线了，如果你想杀戮，只会徒劳无功。”',
				'“我们正忙着呢，测试员，回去完成你的任务。”',
			),
			'attackfine' => array(
				'“你在此逗留对任务毫无帮助。”',
				'“但愿我的攻击能让你清醒。”',
			),
			'attackhurt' => array(
				'“我知道你贿赂我的下属，在计划里搞破坏。”',
				'“难道红暮小姐挑选你是弄错了吗？”',
			),
			'counterfine' => array(
				'“我不喜欢战斗这种零和游戏。不过，有时必须拒绝「不需要战斗」这种假设。”',
				'“看来我设的限制没能拦住你。我得找到更精确的拟合参数。”',
			),
			'counterhurt' => array(
				'“其实我有直接杀死你的权限，但我希望你自己停手。”',
				'“唉，为什么人人都喜欢这样互相使绊子？明明齐心协力效率更高。”',
			),
			'defendfine' => array(
				'“虽然我不是红杀成员，但承受这种攻击的觉悟还是有的。”',
				'“美丽的幻境不会被你撼动，她唯一的威胁就是病毒而已。”',
				'“怎么又是你？让我校检一下记忆……噢，我们在交战。”',
			),
			'defendhurt' => array(
				'“……我刚想说什么来着？”',
				'“你的干扰让计划的不确定度上升了0.2个百分点。”',
			),
			'retreat' => array(
				'“我说过了，这是徒劳无功的。”',
				'“我说过了，这是徒劳无功的……我应该确实说过吧？”',
				'“我会奉陪到你失去兴趣为止。”',
			),
			'cannot_counter' => array(
				'“你盲目的攻击让幻境更加失衡了。”',
				'“呃……我又忘了怎么调用反击模块。”',
			),
			'out_of_range' => array(
				'“射程上的优势也是我让给你的。”',
			),
			'kill' => array(
				'“弱小和无知不是生存的障碍，傲慢才是。”',
			),
			'critical' => array(
				'……',
			),
			'color' => 'lightpink'
		),
	),
	
	21 => Array(
		'黑熊' => Array(
			0 => '“虽然你可能不是冲我来的，但是电子竞技没有单挑！”',//meet
			1 => '“这波我很强，可以打！”',//attackfine
			2 => '“凶相！”',
			3 => '“大逃杀还是你们玩的好啊！”',
			4 => '“强壮的我！”',
			5 => '“没事，这波我很肥，好吧？”',//defendfine
			6 => '“对面什么梗啊，要干我？”',
			7 => '“别怼了，讲道理嘛！”',//defendhurt
			8 => '“我很生气，我要坐起来打了！”',
			9 => '“这个游戏不爆的咯！”',//retreat
			10 => '“原来你也是千里马啊！”',//can't counterattack
			11 => '“有没有兄弟变个鸟，很急，很关键！”',//out of range
			12 => '“爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆！”',//critical
			13 => '“灵性-2！”',
			'color' => 'linen'
		),
		
		'水月' => Array(
		  0 => '“Love your neighbor as yourself.”',//meet
			1 => '“作恶的，必被剪除!”',//attackfine
			2 => '“愚昧人若静默不言，也可算为智慧。闭口不说，也可算为聪明。”',
			3 => '“……”',
			4 => '“……”',
			5 => '“宽恕人的过失，便是自己的荣耀！”',//defendfine
			6 => '“……北斗要讲毛笑话……”',
			7 => '“……唔”',//defendhurt
			8 => '“……”',
			9 => '“……”',//retreat
			10 => '“……”',//can't counterattack
			11 => '“……Avoid godless chatter……”',//out of range
			12 => '“野驴有草岂能叫唤，牛有料，岂能吼叫？！”',//critical
			13 => '“……JOB 38:11”',		
			'color' => 'cyan'
		),
		'北京推倒你' => Array(
		  0 => '“虽然我自称是<span class="blue b">历史的眼泪</span>。但很可惜，历史这东西是不相信眼泪的。”',//meet
			1 => '“所谓<span class="red b">铁拳无敌</span>，那么就一定是用拳头来证明一切的。”',//attackfine
			2 => '“力道不错，那么该我的反击了！”',
			3 => '“不错啊，也许我也应该重新审视审视你了。”',
			4 => '“很久没有遇到过你这种强力的人物了。”',
			5 => '“离开这里吧，这里不是你这种弱者应该呆的地方。”',//defendfine
			6 => '“离开这里吧，你这种弱者只有再去进行训练才能伤害到我啊。”',
			7 => '“很强，很强啊！”',//defendhurt
			8 => '“唔.....看起来身体有些力不从心了呢。”',
			9 => '“看起来快结束了呢。小心不要一时疏忽领便当了哦。”',//retreat
			10 => '“闪避能力很高啊，但是下一招你还能闪过去吗？”',//can't counterattack
			11 => '“用远程武器打游击战术啊！那么小心，不要让我捕捉到你的身影哦。”',//out of range
			12 => '<span class="white b">不知从何而来的数据附着在面前那人的拳头上，使其发出了异样的光芒</span>，“如果说之前都是小意思的话，那么就尝试接下这招吧！”',//critical
			13 => '“弱者，就应该去弱者应该呆的地方。”',
			'color' => 'cyan'
		),
		'BorisX' => Array(
		  0 => '“It is I, Boris!”',//meet
			1 => '“There is nothing I cannot do!”',//attackfine
			2 => '“This will be easy.”',
			3 => '“Damn traitorous dogs!”',//attackhurt
			4 => '“Eat lead!”',
			5 => '“Fools, you cannot touch me!”',//defendfine
			6 => '“Do not mess with me.”',
			7 => '“We must have reinforcements!”',//defendhurt
			8 => '“It is very bad here, comrade!”',
			9 => '“Boris retreating.”',//retreat
			10 => '“Good luck, comrade.”',//can't counterattack
			11 => '“I am not going out there!”',//out of range
			12 => '天空中突然出现几架米格战机！“Bring on the MIGs!”',//critical
			13 => '“Who is next?”',//kill
			'color' => 'red'
		),
		'Renamon' => Array(
		  0 => '“咦？我为什么在这里呢？”',//meet
			1 => '“虽然不知道为什么可是我会努力打败你的！”',//attackfine
			2 => '“不知道！不知道！我真的不知道为什么可是身体不由自主地动起来了！”',
			3 => '“我的画笔可是有毒的画笔！”',
			4 => '“说真的我真不知道我在干什么呢……”',
			5 => '“不要以为这样子就能让我趴下，我的墨水还是有很多的！”',//defendfine
			6 => '“真希望战斗很快就会结束啊……不过留下来的一定是我。”',
			7 => '“快点！在我还没有发……发……唔飙……之前赶紧逃吧！”',//defendhurt
			8 => '“我还有力气来着……只要再坚持一下……”',
			9 => '“啊！反正我很没存在感嘛……消失了也无所谓的……吧。”',//retreat
			10 => '“稍微一点小失误……抱歉咯。”',//can't counterattack
			11 => '“这个一点都不好！”',//out of range
			12 => '“不！要！强！调！为！什！么！是（ping）（ru）啦！！和（pin）（ru）完全没有关系！”',//critical
			13 => '“看来存在感能＋1了呢……”',
			'color' => 'lime'
		),
		'beijuzhu' => Array(
			0 => '“我也是ACFUN大逃殺第一批的玩家，和捂臉姬一樣都是搬運９課的成員之一，人稱「北極豬」。”',
			1 => '“如果你是沒有做好準備就來挑戰，那樣的話我應該可以把你的屍體搬離英靈殿吧。”',
			2 => '“喔？就算你身手很敏捷，也比不上強襲姿態的突襲率吧？”',
			3 => '“只要還沒有死，就有希望。”',
			4 => '“稍微等一下，在我死之前...”',
			5 => '“反擊姿態預備！開始！”',
			6 => '“不准逃！”',
			7 => '“這是真的被打成豬了啊。”',
			8 => '“只要HP不是0，反擊就是有理。”',
			9 => '“北極豬已逃，搬運９課任務完成。”',
			10 => '“竟然如此剛好反擊不能。”',
			11 => '“目標太遠了，打不到人啊。”',
			12 => '“你在地圖上看見的「變磚PSP」，效果只是杏仁豆腐版本，有本事就試試看這個PSP吧！”',
			13 => '“武神當中我最沒存在感了，那這回又如何呢？”',
			'color' => 'linen'
		),
		'黑色奪魂曲' => Array(
			0 => '“你好，我是黑曲，是台灣人，與冴冴共同創作大逃殺劇情，像是「紅暮」「藍凝」。”',
			1 => '“曾經呢，超９武神霸斬是我用來打天下的靈系武器，但是現在的效果完全是「曾經的榮光」了。”',
			2 => '“恩？你問為什麼我的武器這回不是靈系？那種小細節不用太在意。”',
			3 => '“雖然說我以前有很多作品，但是現在我畫的東西最後都揉掉了，因為水平落差太大了啊。”',
			4 => '“這種情況，我大概快封筆了也說不定。”',
			5 => '“而遊戲中以我為命名的防具也是，在這時代也變成「曾經的榮光」了。”',
			6 => '“黑曲在英靈殿的定位...是類似以前真職人「東方地雷殿」吧，吉祥物般的存在。”',
			7 => '“我快要死了嗎...”',
			8 => '“現在這情況，可怕啊。”',
			9 => '“THE END.”',
			10 => '“和我現在的情況一樣，作畫時力不從心了啊。”',
			11 => '“武器射程太近了，但是靈系即使是已經被削的現在，依然不會弱。”',
			12 => '“奧義，超！９！武！神！霸！斬！！！”',
			13 => '“對不起，出手太重了。喂！你快醒醒啊！不會就這樣...死了吧？”',
			'color' => 'cyan'
		),
		'捂脸姬' => Array(
		  0 => '“大家好，我是ACFUN大逃殺第一批的玩家，真要說有什麼職位的話，那就是「試玩」。”',//meet
			1 => '“放心，身為最弱武神組的我，有足夠防禦是絕對可以擋下的。”',//attackfine
			2 => '“我竟然先攻了第二次？有一就有二，無三不成禮嗎？”',
			3 => '“被打成這樣肯定是要送武神之魂的節奏吧？”',
			4 => '“我真心不知道我怎麼可能在玩家有很高的先手率，即使我是偷襲姿態。”',
			5 => '“……”',
			6 => '“……”',
			7 => '“……”',
			8 => '“……”',
			9 => '“作為ACFUN大逃殺第一批的玩家，肯定是跟不上現代的腳步了啊。”',//retreat
			10 => '“你是不可能看到這句台詞的，你一定是耍老千！”',//can't counterattack
			11 => '“就因為是爆系又不是強襲姿態才會被一個叫「計劃通行」的ID給偷到武神之魂了啊！！”',//out of range
			12 => '“既然你讓我先攻了，那就試試看爆系這70%的最高命中率吧！”',//critical
			13 => '“最弱武神組的我，竟然能殺死人了？你弱爆了。”',
			'color' => 'linen'
		),		
		'Yoshiko-G' => Array(
      0 => '“賭玉？輸了會有什麼後果嗎？”',//meet
      1 => '“闖英靈殿的你，明知有危險也要來嗎？不作死就不會死，為什麼你就是不明白？”',//attackfine
      2 => '“可別說強襲姿態是流氓，既然認為流氓還要闖英靈殿，這是何等的矛盾！”',
      3 => '“四面寫的切糕系統什麼的最惡毒了，最終導致切糕通貨膨脹以及刷切糕各種情況發生。”',//attackhurt
      4 => '“四面那個偷懶不幹活，成天只會打飛機的程序員，必被減除。”',
      5 => '“傷害制御是很好的，只要武神還留在場上，你的風險就會居高不下！”',//defendfine
      6 => '“攻擊就是最好的防禦，你以為這樣子就能讓我躺下？你也太天真了！”',
      7 => '“你現在認輸還來得及，回頭是岸啊！不然我很肯定你一定會死於各種奇蹟原因。”',//defendhurt
      8 => '“只要我還有HP，我就是要讓看著你玩脫才過癮。”',
      9 => '“什麼？你敢殺我，小心吃我權限啦！”',//retreat
      10 => '“哼！你以為不能反擊是你運氣好？”',//can't counterattack
      11 => '“只敢用爆系的你，與其說是小心，不如說是膽小。”',//out of range
      12 => '「守序善良」？那個會想辦法討好玩家的四面已經死了，讓你看看什麼才是「混亂邪惡」！”',//critical
      13 => '“賭玉的後果，就是被人卸了一條腿，但是我可是有幾萬條腿呢，哈哈哈！”',//kill
      'color' => 'linen'
		),
		
		'埃尔兰卡' => Array(
			0 => '“在此之前的一切，大概都在你的流程之内。但接下来的战斗，却在规则之外。”',//meet
			1 => '“命运会阻挠你，欺辱你，将你高高抛起再狠狠落下，命运可以轻视你，但你却无法不直面它。”',//attackfine
			2 => '“运气固然重要，但过度依赖运气是很危险的。”',
			3 => '“看来你坚持得也很困难啊……实在难过的话，有时候放弃也是一种选择。”',
			4 => '“看来是你的机会，请继续努力吧。”',
			5 => '“你好像已经接近胜利了，但似乎又很遥远，你又是怎么觉得的呢？”',//defendfine
			6 => '“对于施法者来说，这是一件再平常不过的事了。”',
			7 => '“你似乎很高兴啊，希望你能将这份雀跃一直保持下去。”',//defendhurt
			8 => '“不知道这时的你是不是依然感到兴奋呢……”',
			9 => '“直此之前，我为尘埃。即此之后，便作泥土。”',//retreat
			10 => '“我是该称赞你吗……”',//can't counterattack
			11 => '“干得很好嘛，说明你开始使用头脑去战斗了。”',//out of range
			12 => '“那么……接下来……”',//critical
			13 => '“我喜欢你努力的样子，但很多事光靠努力是做不到的，我也对此表示遗憾。”',
			'color' => 'deeppink'
		),
	),
	
	
	
	22 => Array(
		'冴月麟MK-II' => Array(
			0 => '“决战英灵殿！令人燃烧殆尽的战斗就要开始了！”',
			1 => '“这个世界早已今非昔比，你的战术能跟上时代的步伐吗？”',
			2 => '“探索和战斗的背后含义是什么，你有没有思考过？”',
			3 => '“NPC的血量是玩家的成千上万倍，但是为什么依然倒在玩家剑下？”',
			4 => '“在不久的将来也许咱还会主动出击！”',
			5 => '“呵哈哈，不够，还不够！没有做到一击毙命会增大你的风险！”',
			6 => '“给咱留下LP就意味着翻盘的可能性，简而言之就是夜长梦多！”',
			7 => '“即使高级NPC已处于生命危险，也不意味着你下一次攻击就能得逞！”',
			8 => '“既然你已经走到这里，想必你一定在思考跨过我的尸体之后应该做些什么了！”',
			9 => '“一场酣畅淋漓的战斗！脱出！”',
			10 => '“无法反击的状态，这是指咱暂时处于不利反击的位置。”',
			11 => '“射程不足，因为你正使用射程比我远的武器。”',
			12 => '三色的光芒从冴月麟的全身喷涌而出：“魂！常磐之力！Unlimited Code Works！”',
			13 => '“那么，咱为又一次坑了你道歉。”',
			'color' => 'gold'
		),
		'星莲船四面BOSS' => Array(
			0 => '“那么，真名解放！下面就是见证奇迹的时刻！”',
			1 => '“我最喜欢干的就是超远程攻击！”',
			2 => '“虽然我手里的武器只有1的攻击力，但是它是重枪！”',
			3 => '“我的内定称号是‘天赋异秉’，作为NPC大约能把伤害提升到无称号的3倍！”',
			4 => '“而冴冴的内定称号是‘换装迷宫’，能够切换武器，不过目前是白板（笑”',
			5 => '“既然你打上英灵殿，一定做好了吃反击的准备了吧？”',
			6 => '“幸好NPC还不会踩雷，否则你们一定会让英灵殿铺满大打击。”',
			7 => '“我不是英灵殿最强，但是你继续攻击的话，一定会遇到的。”',
			8 => '“开局一步野生阔剑其实是正常现象，总有人得去踩的嘛，比如你？”',
			9 => '“我～还～会～再～回～来～的～”',
			10 => '“无法反击？哼，随机数不在我这边啊。”',
			11 => '“无法反击？难道……你隐身了？”',
			12 => '“那、那个……就这么说吧！冴冴我喜欢你呀！”（按）',
			13 => '“极光不会让你复活的吧？”',
			'color' => 'gold'
		),
		'虚子' => Array(
			0 => '“没人理我了吗？我被无视了吗？”',//meet
			1 => '“原谅我杀人！但是不杀的话，我就不是人了! ”',//attackfine
			2 => '“你们根本就搞不清楚状况！打法根本就是错的！”',
			3 => '“既想说自己是沙包，又在做不是沙包该做的事！这样的事实，又一次说明这些神触们的无药可救！”',
			4 => '“你还能有正常人的意识吗？明知前面是悬崖也要跳！无知！无聊！”',
			5 => '“哈哈！玩家！你牛！但我更牛!  ”',//defendfine
			6 => '“你不懂的话，就不是中国人！”',
			7 => '“这样的伤害还有存在的意义！”',//defendhurt
			8 => '“你们啊！能清醒点儿吗？”',
			9 => '“你做完后，你的心理得到什么样的满足感，你自己清楚！”',//retreat
			10 => '“哎！现在就算听《蜀绣》，我的心情也好不起来！”',//can't counterattack
			11 => '“留下可怜的我独自哀伤，有人同情却无人理解！哎！”',//out of range
			12 => '“水月这个id，老是拿什么必杀技说事，其实是什么都搞不清楚，还一直说！”',//critical
			13 => '“已经被打死了！大快人心啊！”',
			'color' => 'linen'
		),
		'lemon' => Array(
		    0 => '“ACDTS Bot beta #1. Moving out.”',//meet
			1 => '“Enemy spotted.”',//attackfine
			2 => '“Engaging.”',
			3 => '“Engaging. Taking casualties.”',
			4 => '“Engaging. Need support.”',
			5 => '“Enemy encountered. Counterattack.”',//defendfine
			6 => '“In cover behind sandbags. Counterattacking.”',
			7 => '“Taking fire. Need assistance.”',//defendhurt
			8 => '“Need backup.”',
			9 => '“Mission failed.”',//retreat
			10 => '“Enemy is in cover. Supressing fire, need assistance.”',//can't counterattack
			11 => '“Enemy out of range.”',//out of range
			12 => '“For the further!”',//critical
			13 => '“Enemy down.”',
			'color' => 'cyan'
		),
	),
	24 => Array(
		'测试用鱼装自走兵器' => Array(
			0 => '“表示形态确认，数据处理完成。”',
			1 => '“……”',
			2 => '“将天空燃烧染成深红吧——”',
			3 => '“这段插曲渲染了一去不复返的时光色彩——”',
			4 => '“曾几何时许下与那光芒同在的宏伟——”',
			5 => '“把梦想抱紧的话，就能改变未来，跨越这时空——”',
			6 => '“命运的轨迹，流转着不息——”',
			7 => '“看不到未来，就用手去找寻——”',
			8 => '“偶然也好，幸运也好。”',
			9 => '“有些东西，不靠战争是保护不了的！”',
			10 => '“……”',
			11 => '“两难的境地。”',
			12 => '“深红的烈焰，唤醒沉睡的天空——”',
			13 => '“记住，宇宙的恐怖，个人的渺小，生命的可贵……。”',
			'color' => 'yellow'
		)
	),
	89 => Array(
		'年兽（？）' => Array(
			0 => '“咕咕咕，恭喜发财，新年快乐，咕咕咕，大鹌鹑。”',
			1 => '“咕咕咕，咕咕，我祝你事事顺利，教你做个文明人！”',
			2 => '“ 咕咕咕，咕咕，大鹌鹑”',
			3 => '“咕咕，咕咕咕，我祝你新年快乐”',
			4 => '“咕咕，咕咕咕，我祝你身体健康”',
			5 => '“咕咕，咕咕咕，我祝你财源滚滚”',
			6 => '“咕咕，咕咕咕，我祝你步步高升”',
			7 => '“咕咕，咕咕咕，我祝你学业有成”',
			8 => '“咕咕，我咕你买了个表的”',
			9 => '“呱！”',
			10 => '“咕咕，再见，咕咕，傻逼！”',
			11 => '“咕咕，再见，咕咕，傻逼！”',
			12 => '“呱！呱！呱！”',
			13 => '“下回别这样了，你演的叫这么假观众都看不下去了，中午盒饭没有鸡腿了。”',
			'color' => 'cyan'
		)
	),
	13 => Array(
		'卡玛·克莱因' => Array(
			0 => '“幸会，勇敢的挑战者。我是循环的使者卡玛。”',
			1 => '“我的回合。”',
			2 => '“携带备用武器是我的原则。”',
			3 => '“你们管这个叫什么来着？快枪手？”',
			4 => '“你们管这个叫什么来着？二刀流？”',
			5 => '“你们管这个叫什么来着？武器炼金术士？”',
			6 => '“你们管这个叫什么来着？秒间十割……什么来的？”',
			7 => '“武器不好用啊，看来得换把更称手的。”',
			8 => '“依然受伤了？这批人似乎还不赖。”',
			9 => '“干得不错！在新的世界里再会吧，勇敢的挑战者。”',
			10 => '“换武器的时间还需要缩短。”',
			11 => '“用远程武器？懦弱。”',
			12 => '“破绽百出啊！你真的打算认真打么？”',
			13 => '“呵……想要与我们一较高下，你还有得练呢。”',
			'color' => 'yellow'
		),
		'库特' => Array(
			0 => '“哇呼，被发现了吗！？”',
			1 => '“瞄准旁边攻击的话，不会致死的吧……？”',
			2 => '“为了试验，我必须加油了！”',
			3 => '“随便攻击别人是不对的！”',
			4 => '“就算是斯特勒鲁卡，这个时候也会bite a man的！”',
			5 => '“已经满身疮痍了，怎么样才能结束呢……”',
			6 => '“这样下去会出事的啊，快住手吧！”',
			7 => '“好疼好疼，出手太重了啦！”',
			8 => '“就算是试验，也太乱来了……”',
			9 => '“我……我还不能死在这里……还有人在等着我……！”',
			10 => '“哇呼——这就attack过来了啊！？”',
			11 => '“武器的射程，还不够吗？”',
			12 => '“……这样设定的话，应该能成功吧……？”',
			13 => '“这是我必须做的事，给您添麻烦了……”',
			'color' => 'linen'
		),
		'莱卡' => Array(
			0 => '“我似乎沉浸在过去的回忆和相似的人的眷恋里了呢。”',
			1 => '“人类总是在自相残杀……你觉得呢？”',
			2 => '“以前那个不愿意开枪的小女孩，早已被暴徒杀死了。”',
			3 => '“You are a good rival. Counterattack.”',
			4 => '“就没思考过，这种冤冤相报的循环，会导致自灭么？”',
			5 => '“曾经……我也像你一样，有着单纯而快乐的生活。”',
			6 => '“可惜有一天，残酷的命运碾碎了我，就像巨大的机器碾碎变形的齿轮一样。”',
			7 => '“当我再次醒来的时候，属于我的世界已经不存在了。”',
			8 => '“那种踽踽独行的滋味，像你这样的人，难道能理解么！？”',
			9 => '“Dangerous Situation...Retreat.”',
			10 => '“突然袭击呢，很快我们会再会的。”',
			11 => '“射程不足？……怎么会发生这种事？”',
			12 => '莱卡的身后，展开了蝙蝠状的翅膀！<br>“就让你，被牢牢锁死在这濒死的幻想世界里吧，一直到世界崩坏的那一刻……”',
			13 => '“无论是这个世界，还是那个世界，都把你永久放逐了呢。”',
			'color' => 'linen'
		)
	),
	41 => Array(
		'一一五' => Array(
			'meet' => array(
				'“各位屏幕前的小姐们先生们老师们同志们大家好！这里是一一五为你们带来虚拟幻境DTS的试玩！叮当叮当！”',
				'“啊，我最近才回国的所以你可能不知道我一一五，不过你现在知道了。”',
				'“我一一五在这里感谢岳石酒馆的DJ小哥为我准备了这个特殊的平台！那么现在就开～～～始吧！”',
			),
			'meet_sp' => array(
				'“早上好中午好晚上好～～大家起来high啦～～我是你们封的女神一一五是也～～～～～～”',
				'“呼哈哈哈哈哈哈～我酷炫不？你看，弹幕都说酷炫你也配合下嘛。”',
				'“一推就倒一推就倒～哼～别以为我是女孩子就能一下推倒。”',
				'“女神女神……现在就让你看看什么叫女神。”',
			),
			'attackfine' => array(
				'“如果在这里将你干掉的话，这里就是我的圣地了呢～期待期待～”',
				'“本小姐连打不死的僵尸，打死了还能活回来的暴龙都不怕，还会怕你！”',
				'“又不能追上我，被还击了也会死，我赦你死罪，你去吧。”',
				'“嗯…………哦？啊我读弹幕呢别烦我……”',
			),
			'attackfine_sp' => array(
				'“速战速决，别浪费时间，开下一局呐。”',
				'“诶，什么？「如果将你面前这人秒了我送你个火箭」？啊。那么No hard feeling哟。”',
				'“让我查查这机体的必杀技叫啥来着……”',
				'“吃我一击——女神的断罪！闪瞎你！”',
			),
			'attackhurt' => array(
				'“没关系，撤退也是战略的一部分。”',
				'“哎呀，时运不佳就是这样的～”',
				'“比起每年都要来一次的花粉症来说，你们的攻击真的是毛毛雨！”',
			),
			'attackhurt_sp' => array(
				'“希望到最后摔椅子的不是你。”',
				'“只是陪你玩玩你别太当真～kira☆”',
			),
			'counterfine' => array(
				'“你～能～逃～得～掉～么？”',
				'“啊，没关系，大不了找下一个牺牲者。”',
				'“迟早都要被救济的，不差这几分钟。”',
			),
			'counterfine_sp' => array(
				'“就是这样，否则这就是个粪游戏了。”',
				'“势如破竹！”',
			),
			'counterhurt' => array(
				'“你，还挡在我面前的话，不如现在就给我去死！YIELD！”',
				'“这种水平很OK，但在我面前OK是不够的！”',
				'“有趣，很有趣，哈哈哈哈！”',
			),
			'counterhurt_sp' => array(
				'“那么你试试看能不能接下我这一击！”',
			),
			'defendfine' => array(
				'“见鬼，我觉得我要做个集锦视频了，真有意思。”',
				'“给我表演好了，我觉得你会上电视的。”',
				'“干的不错，联系方式留下。”',
			),
			'defendhurt' => array(
				'“诶，在这种游戏上我竟然被压着打了么？”',
				'“嘛，我的专长的确也不是这种游戏来着。”',
				'“莫非，我其实晕VR？哈哈哈怎么可能呢。”',
				'“……………………花Q。”',
			),
			'retreat' => array(
				'“此地天黑，转战别处为妙。”',
				'“有的主播会告诉你，不熬夜的年轻人不是完整的年轻人。但很不幸不是这样的，我这局打完就睡一会。”',
				'“在一个地方逗留太久会爆人品。观众们也是这么想的吧！”',
				'“胜败乃兵家常事，本人要重新来过。”',
			),
			'cannot_counter' => array(
				'“诶，有趣，竟然够不到他。”',
				'“用自己的知识碾压对手也是玩游戏的一部分，击掌！”',
			),
			'out_of_range' => array(
				'“诶，有意思，在射程外呢。”',
				'“干的不错干的不错，那么我回头再处理你。”',
			),
			'kill' => array(
				'“这世界真的辛苦不是么？有的人能赢，有的人就只能输了。No hard feelings.”',
				'“炸了炸了！”',
				'“欢迎订阅我的频道115channel！Eleven-Five，Eleven-Five，All Fun @ Eleven-Five！”',
			),
			'kill_sp' => array(
				'“下次考虑带个虚拟脑婆来做保镖吧，或者战斗用AI啊猫又啊什么的，没准能赢我。”',
				'“绝无代打，童叟无欺，欢迎监督！”',
			),
			'critical' => array(
				'“睁开眼睛看看，现在是谁说了算！”',
				'“下面准备好接我必杀：十三爱天下无双！！”',
				'“诶，我的BGM还开着么？”',
			),
			'critical_sp' => array(
				//'“吃我一击——女神的断罪！闪瞎你！”',
			),
			'color' => 'gold'
		),
	),
	42 => Array(
		'一一五' => Array(
			'addnpc' => array(
				'“来英灵殿吧，本小姐今天就要挑战一下你这个「挑战者」！”',
			),
			'meet' => array(
				'“各位亲们大家还好吗？这里是一一五，今天给大家表演一个~~阻！击！宇！宙！神！触！”',
			),
			'attackfine' => array(
				'“速战速决，别浪费时间，开下一局呐。”',
				'“诶，什么？「如果将你面前这人秒了我送你个火箭」？啊。那么No hard feeling哟。”',
				'“让我查查这机体的必杀技叫啥来着……”',
				'“吃我一击——女神的断罪！闪瞎你！”',
			),
			'attackhurt' => array(
				'“希望到最后摔椅子的不是你。”',
				'“只是陪你玩玩你别太当真～kira☆”',
			),
			'counterfine' => array(
				'“就是这样，否则这就是个粪游戏了。”',
				'“势如破竹！”',
			),
			'counterhurt' => array(
				'“那么你试试看能不能接下我这一击！”',
			),
			'defendfine' => array(
				'“见鬼，我觉得我要做个集锦视频了，真有意思。”',
				'“给我表演好了，我觉得你会上电视的。”',
				'“干的不错，联系方式留下。”',
			),
			'defendhurt' => array(
				'“诶，在这种游戏上我竟然被压着打了么？”',
				'“嘛，我的专长的确也不是这种游戏来着。”',
				'“莫非，我其实晕VR？哈哈哈怎么可能呢。”',
				'“……………………花Q。”',
			),
			'retreat' => array(
				'“呵呵……莫非你真的以为，我 会 死 ？”',
			),
			'cannot_counter' => array(
				'“诶，有趣，竟然够不到他。”',
				'“用自己的知识碾压对手也是玩游戏的一部分，击掌！”',
			),
			'out_of_range' => array(
				'“诶，有意思，在射程外呢。”',
				'“干的不错干的不错，那么我回头再处理你。”',
			),
			'kill' => array(
				'“下次考虑带个虚拟脑婆来做保镖吧，或者战斗用AI啊猫又啊什么的，没准能赢我。”',
				'“绝无代打，童叟无欺，欢迎监督！”',
			),
			'critical' => array(
				'“睁开眼睛看看，现在是谁说了算！”',
				'“下面准备好接我必杀：十三爱天下无双！！”',
				'“诶，我的BGM还开着么？”',
			),
			'critical_sp' => array(
				//'“吃我一击——女神的断罪！闪瞎你！”',
			),
			
			'revive_icon_change' => 3,
			'color' => 'gold'
		),
		'一一五 i' => Array(
			'evolve' => array(
				'“给我这套系统的DJ，看起来应该是我的铁粉。<br>金龙通讯社的老板呢，我不好意思欠她人情。”',
				'“而像你这样的玩家……”',
				'<span class="red b">去 死 就 好 了</span>',
			),
			'meet' => array(
				'“欢迎来到这个疯狂的终局。”',	
				'“狂风呼啸，这里是一一五，幻境最后的英雄。”',
			),
			'attackfine' => array(
				'“这游戏真是奇怪，唯一的赢法是毫不留情。”',
				'“没有观众的战斗，就没必要秀什么必杀技了。让我们认认真真一决胜负！”',
				'“强者就能为所欲为吗？那么我就能毫无心理负担地杀掉你了。”',	
			),
			'attackhurt' => array(
				'“真正的杀人弹幕是密不透风的。我现在想做的也只有打倒你！”',
				'“你的执念让这里化为了尸山血海。纵然只是幻象，但是……”',
			),
			'counterfine' => array(
				'“我也想一心做个主播。但是……既然有这份力量，就不能坐视不管！”',
				'“你手里的武器大概已经改满了吧？但是打不到我也是没用的。”',
				'“今天我不会装作渣操了，我的走位可是很厉害的。”',
			),
			'counterhurt' => array(
				'“乖乖等血条扣完？怎么可能呢。”',
				'“「竟然未死」……你是想这么说吧？莫慌，一切都是幻象。”',
			),
			'defendfine' => array(
				'“互秒的战斗，非常硬核。然而今天秒掉我可没那么容易。”',
				'“一般最终BOSS都有复杂的抗性。我，当然也有。”',
			),
			'defendhurt' => array(
				'“这已经是限制级的画面了，幸好，我已经把直播关掉了。”',
				'“真是一代更比一代强啊，感觉有点跟不上年轻人的速度了。”'
			),
			'retreat' => array(
				'“你的执念比我的套装还强！这个世界……究竟怎么回事？！”',
				'“难道他们说的「目标玩家」就是你吗？那只能说……甘拜下风。”',
			),
			'revive' => array(
				'“干得不错，但是——我 也 能 投 币 ！”',
			),
			'cannot_counter' => array(
				'“是你跑太快？还是我手太慢？”',
			),
			'out_of_range' => array(
				'“你还会风筝？”',
				'“我可能应该提前把射程增强打开。”',
			),
			'kill' => array(
				'“Terminated.”',
				'“看来你的执念也不过如此嘛。”',
			),
			'critical' => array(
				'“各位看官快看，咬住了，一套十割！……哦，并没有人在看。”',
			),
			'color' => 'gold'
		),
	),
	46 => array(
		'幻影斗将神 S.A.S' => Array(
			0 => '“是敌人么，那么斩了！”',
			1 => '“吃我这招辉光五轮冰火全破斩！”',
			2 => '“别小看我们辉光圣战士族人啊！”',
			3 => '“切，被小看了么……”',
			4 => '“别高兴得太早了！”',
			5 => '“那种攻击没用！”',
			6 => '“你的挣扎毫无意义！”',
			7 => '“切……”',//defendhurt
			8 => '“看起来这世道还真是变了啊！”',
			9 => '“没关系，我钱多，我去买复活药……”',
			10 => '“地形有点不利，让我重整下态势。”',
			11 => '“…………懦夫。”',
			12 => '随着一声大喝，你看见一把巨大的镰刀向你飞来！“吃我奥义！辉光·神圣地裂天鸣怒焰斩·二十六式！”',//critical
			13 => '“这就是，你的报应。”',
			'color' => 'seagreen'
		),
		'熵魔法传人 Howling' => Array(
			0 => '“是新朋友！来玩来玩！”',//meet
			1 => '“All good comes from above.”',//attackfine
			2 => '“Grow forever, never yield.”',
			3 => '“Truth sets us free.”',
			4 => '“Bold and righteous.”',
			5 => '“Ever the same, ever the different.”',//defendfine
			6 => '“Faith grants us strength.”',
			7 => '“From the stars we came, to the stars we rise.”',//defendhurt
			8 => '“Strong deeds, gentle words.”',
			9 => '“啊～啊，还没玩够呢，撤退撤退～”',//retreat
			10 => '“Beyond the clouds we shine.”',//can't counterattack
			11 => '“Through the shadows we persevered.”',//out of range
			12 => '少女突然低下身形双手撑地，开始吟唱着什么：“Assuming flowers, Gift of love in front of joy, Winds howling on top”你感觉到一种无法言语的灵压扑面而来！',//critical
			13 => '“下次要再来玩哦！”',
			'color' => 'seagreen'
		),
		'通灵冒险家 星海' => Array(
			0 => '“全部准备妥当——现在行使我自己的正当防卫权利。”',//meet
			1 => '“放心，我的子弹都是非致命的。”',//attackfine
			2 => '“你看，如果我把你弄死了，我的朋友们就会很忙，你也会很惨，这样对你我都不太好。”',
			3 => '“我明天会向贵宅寄去医院账单的。”',
			4 => '“我有个朋友是医生，只要人没死都能治得好，但是治疗金是七位数。”',
			5 => '“这个小道具能挡下你的攻击，我也不知道怎么回事，但就是很厉害。”',//defendfine
			6 => '“我有个朋友，爱好就是搞鼓各种道具，然后让我做实验品，改天向他要精神和肉体损失费。”',
			7 => '“这个喷雾剂可是高级货，哼，就不给你。”',//defendhurt
			8 => '“至于这个喷雾剂，似乎喷了会刀枪不入，去试试。”',
			9 => '“咕，幸亏我做好了医疗保险！”',//retreat //“会开车的高中生很奇怪，但是我这辆折叠自行车，跑的比谁都快！”
			10 => '“Note to Self：向博士讨要更全能的装备。”',//can't counterattack
			11 => '“Note to Self：下次带把狙击枪。”',//out of range
			12 => '“小心·你的·背后。”',//critical
			13 => '“好像一不留神打死人了！我那万能强心针哪去了？”',
			'color' => 'seagreen'
		),
		'银白愿天使 Annabelle' => Array(
			0 => '“叮——铛——咚——铛！”',//meet
			1 => '“这可不是一般的盾牌！”',//attackfine
			2 => '“保护虔诚的信徒，痛击罪恶的敌人！”',
			3 => '“哇！”',
			4 => '“神盾术！”',
			5 => '“满怀罪恶的人是无法突破这神盾的！”',//defendfine
			6 => '“满怀执念的人是无法突破这障壁的！”',
			7 => '“…………”',//defendhurt
			8 => '“再争取一点时间也好……”',
			9 => '“飞不起来了啊！这时候就要……隐身术！”',//retreat //“你是追不上我的！我会飞！”
			10 => '“你是追不上我的！我会飞！”',//can't counterattack
			11 => '“你是无法突破我的防御的！”',//out of range
			12 => '“幸福的大合奏要开始了哦！”',//critical
			13 => '“没关系的，神一定会赦免你的一切罪孽。”',
			'color' => 'seagreen'
		),
		'麻烦妖精 Sophia' => Array(
			0 => '“负责地球的妖精 Sophia驾到！我很强的所以你们都不用怕啦！”',//meet
			1 => '“用这个锤子砸死你！”',//attackfine
			2 => '“用这个钻头将你钉在墙上！”',
			3 => '“是时候拿出更大的东西了！”',
			4 => '“我的武器库还有一半没用过呢～”',
			5 => '“看！这是个保险柜！”',//defendfine
			6 => '“看！这是个泡泡！诶你说为啥泡泡砸不烂？这是商业机密。”',
			7 => '“只是手慢了一步而已。”',//defendhurt
			8 => '“法杖只有一把，话说有双持法杖的魔法少女么？”',
			9 => '“在这里就被干掉的话还叫什么主角！主角都要从舞台左边离开的！”',//retreat //“无视压力，全力想象！”
			10 => '“唔，让我想想下一个武器是什么……”',//can't counterattack
			11 => '“思考可不是我的长项……”',//out of range
			12 => '突然，从你的头顶上出现了一大堆各色各样的工业垃圾！',//critical
			13 => '“想象力就是我的胜出诀窍。”',
			'color' => 'seagreen'
		),
	),
//	15 => Array(
//		'【SANMA_TK】' => Array(
//			0 => '“妖精使可能不想对你们下手，但是我不这么想。”',//meet
//			1 => '“先收下你的左手！”',//attackfine
//			2 => '“试试这个的威力！”',
//			3 => '“……你是没办法超过我的速度的！”',
//			4 => '“持强凌弱的家伙……百倍奉还！”',
//			5 => '“………………？”',//defendfine
//			6 => '“你究竟在为何而战？难道也要背上整个世界才能让你明白你的错误么？”',
//			7 => '“你确信你是为正确的一方战斗么？还要重复一遍执念造成的错误么？！”',//defendhurt
//			8 => '“妖精使这时会怎么说来着……“给我看看大局吧！”不过我觉得你们是看不到了。”',
//			9 => '“真是可悲啊……下次让妖精使给一把更好的武器算了。打得不错。”',//retreat
//			10 => '“……耍小聪明……”',//can't counterattack
//			11 => '“下一次带对器材狙击枪来，对你们不需要任何仁慈。”',//out of range
//			12 => '少女的身影从你的面前消失了，正在你不知道如何是好的情况下，你听到你的头顶上传来一声大喝——『别小看人了！』',//critical
//			13 => '“妖精使的话是主张击败对手后留一句话是吧，那么……『我愿献吾身，化为盾与枪』，这样算数么？”',	
//			'color' => 'yellow'
//		),
//	),
);
}

?>
