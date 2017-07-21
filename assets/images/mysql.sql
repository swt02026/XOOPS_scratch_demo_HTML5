CREATE TABLE bxmorning_datelog (
	id int(10) NOT NULL auto_increment,
	unixtime int(10) NOT NULL,
	status tinyint(1) NOT NULL,
	PRIMARY KEY (id)
) TYPE=MyISAM;

CREATE TABLE bxmorning_walkup (
	wid int(10) NOT NULL auto_increment,
	id int(10) NOT NULL default '0',
	uid mediumint(5) NOT NULL default '0',
	walkup_time int(10) NOT NULL default '0',
	message varchar(255),
	early_flag tinyint(1) NOT NULL default '0',
	PRIMARY KEY (wid)
) TYPE=MyISAM;

CREATE TABLE bxmorning_excuse (
	eid int(10) NOT NULL auto_increment,
	delay_time int(10) NOT NULL default '0',
	subject varchar(255) NOT NULL default '',
	excuse text NOT NULL default '',
	PRIMARY KEY (eid)
) TYPE=MyISAM;

INSERT INTO bxmorning_excuse VALUES ( 1, 60, '電車が混雑', '　もしもし{uname}です。\n　すみません、電車が混んでて少し遅れそうです。\n（突っ込む隙を与えず一気に）' );
INSERT INTO bxmorning_excuse VALUES ( 2, 120, '目覚ましが', '　もしもし{uname}です。\n　すっ、すみません!!\n　目覚まし時計代わりに使っていた携帯電話をついうっかり、{運転モード,マナーモード,電源オフ}にしたまま眠ってしまって、寝坊してしまいました。' );
INSERT INTO bxmorning_excuse VALUES ( 3, 180, '転落事故', '　もしもし{uname}です。\n　すみません、朝、{洗面所,トイレ,新聞取りに}行ったら、目の前に{笑顔の素敵な,ゴジラのお面の,鼻毛の伸びた}{一寸法師,花さかじいさん,ずーぷくん}が現れて驚いて{その場,階段,手すり,人生}から転落してしまいました。\n　しばらく失神していたみたいで、連絡が遅れました。' );
INSERT INTO bxmorning_excuse VALUES ( 4, 240, 'こびとが', '　こんにちは。\n　すみません、朝ちゃんと行こうと思ったんですが、普段、{マスターアップ,徹夜上等}の時期にお世話になっている小人さんが{腱鞘炎,バーンアウト症候群}にかかりながらも、私のところにやってきて、小人の世界を見せたいので是非来てくれっていうんですね。\n　「いや、今から会社だから」\n　って言ったんですけど、ぜひ来いと。\n　で、断れないですよね。\n　ここ８年くらいずっとお世話になりっぱなしだったわけですし……小人さんの状態も心配だし、ちょっと小人の世界に行ってきたんですが、あの体格でキーボード押すのは大変ですね。\n　それでは今から出社します。' );
INSERT INTO bxmorning_excuse VALUES ( 5, 300, '逆ギレ', '　{uname}です。\n　あのね……どういうことですか。\n　ぼくかれこれ５時間も遅刻してるんですよ。\n　なのになんで誰も僕を起こしてくれないですか！\n　働く気あります？' );
INSERT INTO bxmorning_excuse VALUES ( 6, 360, '家族親類抹殺', '　すみません、ちょっと大変なことになってしまって、連絡が遅れました。\n　実は……今朝、{曾祖父、祖父、曾祖母、祖母、親父、お袋、叔父、叔母}が{空豆,UML図,栄養ドリンク,ToDo表,架空のスケジュール}を{喉,鼻,涙腺,耳,食道,キーボードの隙間}に{詰まらせて,押し込んで,ボトムアップして}急死しまして……\n　いえ、とりあえず会社には出社します（仕事もたまってるし）。\n　週末は少し……ということになると思います。' );
