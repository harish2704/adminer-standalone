<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.1
*/error_reporting(6135);$Qc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Qc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Ai=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Ai)$$X=$Ai;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒÞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Þn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1ÌŽs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŽŒFÃ©”vt2ž‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅŽÃžôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PÐ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛÐ889¤È ŽQØýŒî2#8Ð­£’˜6mú²†ðjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ð¼o(Úó¥ÉkÔ7½sàù>Œî†!ÐR\"*nSý\0@P\"Áè’(‹#[¶¥£@g¹oü­’znþ9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ðè!°üë*cì÷>ÎŽ¬E7DñLJ© 1ÊJ=ÓÚÞ1L‚û?Ðs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ð\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[ÝsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀÞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>ŽlÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´Ý¢gŒnË©¸¹TÐ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdÝÝ è2cˆê4²k¿Š£\rG•æE6_³¢ú=î·SZUÇ·ãŒžO—ðÅ?¡éÃ¾27£cÝÐÅhnÆ‹Üùu3…E>\$J[Áq[\räIŠ6.ÆJÑ\"EPrèGÌŠGA ÝW¡³ž\rº´6Ík†¢½`.-¡ªB2>#ìhØÀˆXµøu\r¡¸=‡Z  b€Å(¡â•ƒ!JZÈ”uªyO’×Z¥M˜Õ6lM[0©ä–€àß!ImñyÂ+pÉ#ag¡ÞŒvW˜:qp\"4ÅôòŸãheî…0 dÆAq-\"¡Êƒ§ÆÂ\"2ßÍÒ@‡)o‘,,”¤”×Rb`@©B@ÐÊÊ¯¤Q\n†èŠ·˜Z§„Â™=(r~‰l©~¯ÄhˆsAllÖ\n7»!1! Ü#é\0KË…A“LH(½!ÔÊ˜agH\0ÄT\ni˜/È\$ôöœ4GaÎIÉ!¸.—Å˜5§ÅM\rÑ2‘‚Ï	Ù;ƒ,öžLIJ†äÃd?“ÒºÅí%Õˆ:çN@b.âª2í5’«ôt:FAw²B£EŽ,Ç-\$ù£'ê:Ó©u©?¨tK;kÍàžÐ¸¨ä\0ouMD)k_Phž˜Ó5MC}7‚…È2‡w.QB¦8)ìÀ†8(DIù=©éy`Øed\0s,`É•jŒHÄ\"(b³¢Ä\\ÙÖnl’\"Ù‚^Ëì€­eE½\nèáë±X!SqXÔÀ\r©Œ€7A±ž†0ê£y7pPìºðçaüA˜4‡ƒ(yÖJwm…2…òª.¯ó‰†¬fp°ÏË;Æ„5ÂJÍcÜqŒQz\\\0[Hÿ 3‘f'b¼µFðøÆY¨\nAà9_§IÞà(›fÎÓq‘VÑÅ¨äõ³4µÜò¹‚„RIÂYå&J’ºFñ}£{FTëh9[7‚h\0à‹TÖ^ö´jËÔq×j‹õžÕ”§­€cÂWIð@`_ÑsVDçÃ[¾\"{1áÈ3‡•	ŽÚô»÷¨<…l¼l.±éÐ[¨»Þ#Ä¯º¤b°Þu­¶/Ÿ\0ä3ævaå«‘Dp>‚2½IDWÕš¢kKAŒ»hHš]¨FÆ•ã€W–!]‰Ê÷ltÜÉ•RÌ­4L[äÐÅYC cTj<c;s‡q¸p€’ Ä5ÅtóJ§m6—%J”-\\õÍeB=iß-ð*%´·¦÷¢TV‹[&M8ó*\r™bÄY\rihˆ	„ÙPŒ9T×-VÉ°ZÔúüÛ³ù49Î²™”ƒp-´`ÙÿÜÌÇGÉÙ›' ì¹ÐôM²:§Å™')0ƒYuÚcí:!«x#×¦è¦-l*®TÉ\nYläù†š³‹*D ÉXë V\\îËØÚ®ó]y¯ƒ\nÖ2r,É†åç,ÎdÐ×~Å³Ý÷s³-ç+Ö»uÛ]£\\BÀ¶¥²Iw€Ô!ƒOsØÔ¯lò YCÁÐ‚È:À@ÆœEUË._)Ë9uÿzœµvÏˆSÎ´¬1ï—é_(Sõéqé½¡r¾yuî+¥Z*ê6€uy¿<ÉÇõz\\|ØZK;áe›×–úoYåÀ;°óžÃl‘´xöà-7×ô÷4rkYY?ÔÕGWt¡¼÷[KÚšÃåzoØ<¿€Íà	têÏô†¶¾ù—É€gçýjð‡_!ào…êÊ\$ Iã¹ÀI¿.&Ü5½P\\—›]¥Àè†Æ\nCØ.ïÖ_¹ø;¿çs«iíS/gÖ:ÞPëÉ³auNÍ¨|Æaáå¯á™º¬±¢µÓâ«6ØÓŽÙž3Ö|÷¾‡Ä{©ceîXòù<°e«p>Ní}´í~âÿO¾¡÷Ò™Bl¿ÂjÊ/¢óKø¼Hdch-Ë¾ýŽºØšð/ûîÜþÎäùÈ¶·hÔž0ŽÀÐŒÈÐ‹ÌúÎH©8j6é\n+d l7\r ¾ ÀÚ…0N7eZ°0`m Ën¢ÝÃp\0Ð\0¾} Ç@[ãi0˜ðƒ	ð~…¤4P•\nÐ”bÐ¯0©p‹	P¢4@ïPŠê‡‰‚I\0``f”ë\r```˜°Yð¢zÀß	Põ€ê\rð¯°¿	pÎ¤y	HÕq¬@Øñ	QÆq‡Ñ ¬`¿±Ñbi‚”ŒUÐ¡ñš@`)™ðÁÐôàì)°ÍÑZèpj(Ñ--lÕâêÖ1Q%­póñYÑ\n1}°ÏÍ\\*¤“hÿŒ{§†C0°#€ÆHˆ˜0T‚qAäöðb”=‘Â…±f- éðÿqÒiAðs'QÏ‘ÝÑã‘Z\rRc'°å`Œ«­q¾èY’Q1±Ò2!r\"Qó1÷	Qï!qûr\0°B˜²DÑwð”\0Û±¾ªñqÑ\$òSÃÙ\"¬]qåò@`è±²@,Ÿ\"r\"ò)&Ñô&é\nt€äbèm0˜2‘)Qw\nÀÖ ó æò¦p(0«*ò³‡ÒŽ±ò¡£q\nÃ&i\nî\"ùp£’Á1Õ‘CÒá‡Ï\"Á.1y.q^òøŸ2ñòð\0Ï.òõQ×0ó¬rýÑ)/\0Ú”!/¹.S+1Rë/3:5ÀÆó11³\nBÑ43	4±G#ã€œ`ŒSa °ra6‘Îâes7Óq£,æ©¹j3q4)\$ˆ˜‰«à@*Ò×-²Í9ñá¢\n±ë\"0‹',ÑhõS}\"Ÿ3ss9ðÅ1ó½7S-=1g4	ß<pr.€Û)LA9ê¶ÍÂ´ êÁ/9ÏSÍ?“/5H}>É.«‰4LD;‘¿@2!AÑã@³áôBråÔ-/ô+016Sì˜#„)Š˜\"ÂŽi@€`P;.\n€<)Ô±ôV\nl8K#gkød|¶ƒ8ãlÁÂâ.lf.ô?œA@\rÃ†.¤\$J2tN#ôRr¢AE¢ËEéë´e€ËF‚óFÓ¦g­8*€");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°ŽÏ§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2Ý´z=š0HøžÐ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒÞo5šgòóIœÜ,2O4ãÞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ðhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ð:ƒ€æáxï)…ÐüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpÞÎ“kÌ:)\\;° ÐÔð\r@Žt…\$4O£<þ†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§Ž•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ð-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmÐQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòŽõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpÞÖ.[ëvŠtPZÞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ð¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ð6†Ã8¬FL«´×ÞíâŒB*¬ð,Ò|\nx\\@ °@¸Ø3r ¬­ðÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,žL²©º–öÅ%SÆ,ýv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©Ž`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ðê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'ŽnÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ž R©ðœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpý×:8\"Ð´5¡«‰0î#Ž*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäªŽ}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±þÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0Ž#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦þ:Ê™yPãè—´ŠÀXÏ+¤Ž’\nÞI;üþ\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñŽ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sð™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)ÄùÐuP°¿¾œ>‘#	P&„ÃP	ƒpbaÀ¨Í¨yñ£æß\$3}ïÐ{»áÝhyÊ(ÖdWø±ŠÅÙËÐ_±:°'AØ‚‡PæÃI\"Ù!ïŽ[`ûn8å»i/@ÈäðP	ÐfœÐŽå†©ˆV	À£ž•sÑCß8¡˜°Ny‰hÜñtEnAj.-åÄ6£ÀqwJÜ?œÃ¹”AÌhu	è™Ôsé¤AíáO7“·j›æ\n	]¿0›^Œ	ƒ\nYÁš\$„Î–_\rþ\$…u*÷Þ¡ÒEx/d¼pdRÝdÂõ:¤IÀoDÁ›®‡sQÉ™fàÜI¤öžâ8Ñ,óêKÑÏIsM@aq\n/™†ÌM˜R¹ ¢®Cþ-aÇa£¾™/·Hº!å4F…óIÿÉÅpÅ”MÏ«Šþ_Ø‡HÀ9{‚.´\$WÄûò#{ÌúÒ®Šü·:‰Súƒ£(À'lÕMY»:lÊž¤mD\$°\0¦¬×\0©ê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãjnæ¾5€ðNlŠŽÌþþKšfj&›Mí•OøÓdbÓ°NÓð´O\$i)ÞNÐ(¿Ð!P)Ð0+Ð6HpN¦¢ØF‚àîÐ–ž¬?L\nžìÁ-h0˜Í,.e­¤\"Ž‡6m#õ	é’ýo&ò°ÒÞë¶gåZÅ@Pþk­&Ìº_ì¼%\\\\'ÀíÌ\0]\$(€5ƒN fqÎ|Ñp¨ `…â<ðîRîÎú úìÍ¸þ˜ìI\0Ñ¥þãL¦|Ç\$Žý(Þê¸Å¬TkQ6k°B@0HõŒ˜Pƒ\rÀšˆ#Îušš+ï€Ü²pTþÐZÑ±/ü\r y´Pp%\0^8ÆÒ\r¤Àµ‘˜4¬Ý\0‡¡1²¦ðQn*+B8qÂà ŽÏF§\0Ð´ÌÜ±Šâ¢\næþ«.®âŽûH’±%Ââ3ñÀ&PžF–Ñ„ÝX¢Ïð¨`O ±£Ë9R­B´’\r ì10Îì½‡O ¬X«Ì^+¯öïæÌiÐÈArD¬4ëÙ`Ê-š.i`4ò'Å,\$²VÅ,_c~;Bn<’1\$,]%Èlù‰D=âå\$Ñ).1b%gœ»z‰Ðü}ËÊG2¯1]8uPòïìD]	/z îä¼g‘+'„7D\0]ú²¾aäŽpV’ÒL€ó0÷+`Xpä˜ ÊîdË-hû+h(ÀÔäÀÐ\n„¿²fª“§s2,µ2‡@z Â.I``‡*óÌ1l?±“RËñ±W.ï.c%\$‹¢¿s+4òÑëã6Ã\$Cr‡F)0‚ô\rÓ1-ˆ`„ÓŒ ÈjÆL\r­8–²©l—0È©*.L‡KpÃ\r¤·\r£/rûLÄa8â2KÅ1nêb‚ÿ4“LíÒêË,¶Ë¬¾ïó©\nij–érói#Ç©8»1èbxÓ2à¾\$Nú\re‰ ¨\r\"8ˆ'‘³’³ª\r´-ƒPàÀYñ0°£Yb”S\0¹°ø\\jK+q6V hê1óU€z`pïò¬R±E“CÓî”X»Åöõ%”F	5ñF4f-¶tPåID6\0NFä®Nå4’_Þ0ó©\riL@Ên´¸Pé^‚¬Âîëê¾%'ËLÔ¨êG”€ïôàò\\‘Fèâ€ÊâÄ&ã4ÂÐI*5ÉO†‰OÀ·Pã)8¾)­*L;ð½4EÌ]´\$óðÌ\0L3ËE ïEk„ÑÃÎIt%eÆ\nbô(ÎëSMª}²Þ7sÇ‹Û¯)gi¤ØFà†&êº-XH° ¼ìðBÃM5~jrPjÌ¾-|Ö¤´9 ¨–p¨¢5Š¸;oŽ–5²õ¶–‰c\ndÒÕuÊ	 ÂÔ\rLÕhú'\nå''ò< O\0ðœe,. ú–\"t\r¯k^Ã{_Ã_gTµý`\0Ñ	Mk?ˆ2®\r:Db%È]UÍ[²1óùcuµ[¡[9]Õà´/ EV>k@éa\r_\"Žb6]ö E–DöQ^)È™•@Ps€ITr vT\0ØVR™W@ ëiR”2/¢b…,Xr€¬	jç^µï0•õ«ÿk’’üCÇlˆ“fl'8E–É©‘oµW¶¨ûI¤þmpë£¶ý/&ï´+´òýéX¯çk.þð\\ÿ4Ó0d“r\"“°kb\nH\$Ð¢†±KCâåo§OoíõG%\r¦äûÏl²–ùëÒö Õ]àP7\"*hPP€\rc¡_€X[`æêöî â7å:`‹˜Uà°ß¨–I¢ƒwêdã¶;·Š	—Ž“x t†À‚8d\0ž@Ôjw˜v¶ —»{÷Â bŽ	¨pü æñcyíö\n€ , u<	âÕ\"uyE:í÷Z`<LF£ë¨ü2ÑðcwþS¸d†%uw€÷u•ß€#pqNNßÀN’\n·#@ E‚#\"@|d%kwc\"* xò„àw‚˜\0uX.¦Âl&Xe‚ÎM†ÃB'“ @6ChÂ»`S¥‚wÿ‡G Êé¢ÓˆC[V×ø1àß\rÆþb\"Ð\n\0ž\n`©JÀŽ¸º+—a1¦\"lW}z–]zjdO„>!‚ŽˆG\0[\\å¢ïF|…®¾ À^\0ZJ`î¨b·`#ãŒ5€É`W÷“E;„â(à°¹!`È¯`\"»~Eß’gƒŠhVGrý‚_ï±uåj¢Q‘*d'2g/Ø-\n€h¤ ^Àda)×•E:HØhäËãvEvˆs—Bàí­‡9wƒ\0ÜßMøßÐãŒùW”NLù…•Ž Ë3Àè-ø=#@%øD!ÊXL*ô…êV…¹‰¸;…Ò1„ãÇ˜Ø‡ƒMžk‰™X‹ØŠÀñÒâ&ù™Ùr<å[%Uøeq˜WW‰#\$ÛèŒlIVàA†W_GÆVú„šF\"&fÐ(çošdV1ƒšó*wr0±F\"Œ¯¤‰H˜‰ÑvçTq hw*†“†@Œƒˆƒs….¯0g8ú1_€zfö»äA)À¢—+<¯Òu\"­F_lO#Œ®Õân{‚XYwv,ÕÇ–½ HàÓÇ“cÌ{n7á<8ÌYfB°¬Á\0øFe–\ràù:érŠ¸\$gy¬šÌÀ6=pÍ;4ó›9\0öb%a2BÉ Ê\n ¤	(€\rº@GFžª@ÙÃû%²€ß²Å 1ÓâÐ“qbÂs+£Zg´%@t%–à š3±€Ô\räD(àLÒ÷v.šð€\\\rR ^ã€é°	×A2Â\rÖ¾;yvïˆÀ€~ÀUâÂ*¢Ð@õø<š‰Ëq¢Wa¢·S¢úW¡„=yŽEš<Vº@<ù±1·³3€Ð\$»äì\$üPÅD€¾w2UÏØ;Ï]ù¡Ç%!\n¯ó²ÃD)‘¦ó„‚I/h~Çàè‚<Â+ø€î0€ÜåsÓ34‡-´ŠèåGÓØ4ïÂòŒÅT\nÏóu3ëü<TôckþÊÅWÃÎW»âGU—±Çfme÷\\¤D!*vÅx3ƒiû2ªw2§Œ1ª|Œ\$&Ô‰+€†bG\$v!rò*-ù4­quÈ\rÑyLã0üÊtXÆ…Æ·²çÚßI“b dúµSÓï<öaòÎËç¹G´~G¬Ïà„m äg¢x-T’¶ÏÉY’á™–¼ª!(wHÃ\nãš4aäg)`žñƒ%Ó@rüY%’Ž¬(qÜX¿˜à!cÕ\$Dy±]mjöbpR4RõÜRÄïuÜX†äpó/6 h€eâªÕ+ùnëš@ cHÐÉ¹ð ¹Ÿ{Å”æÅÚ.\\bmVþpPé·`bQrãP€ê\0`\$WÖWÑRq2x%bY—1ÜÛû€¬²º³±>ùÍÌ1æÌìu&b\nVÌo°Nïj\n€ÞâÄEÄ†ØC3âåG\0²ýþ epž–£Â<~B^ A¾%/9°;åv\\¥[â›Hþlž^U»ÔûÇÓžh¿š¢.\\YÉ}+	üYtÞÅýqÆ‰6¢\nsüã\0‘¾äü¦c:–3¹*}ÉÜñŒÚØ7z\$ë·d\\Âç\"«· W³£Y³û+²ûIèã³e½¢Ú\0çùSï9©½ºDt[rû×šºCÖ©bÍ~é¦³DÕw/½l—¿ÉL`Õ~ ØU‡øV_àÞ\0\rÞwó)¶bžÆ¦8–ï”¿Gò Ü%¼º¾WÞUáöA¾v(ùHFg¨ X©cº¢n9ö2—ô—Õn12lÀ˜\rä?\"tï\0XPÉsùÿ”Ymf±‚‚F?mñÒx5™}Hì_´ìXcûy”áÎºCåÕ.Ä\$¯`¶köd5.rx>Ç¢7þæîsÛn3¼“Ó<¼´g„ˆð§åO(\\@èžWò:PáÏƒ{ó­_Fà†”hgLÓ >°<¦6é~'²K„0Õ?@ãìEAå_Ü Ô8H.LG<øÄíd  Y¬oú¡ÒÜü«€­ÚkF<Òýp‘¾(Ûj\$9ò¬ª˜Ä?¥ÙV P?)ÍòØ¤DŠuŠ°Lb¨­àžj¹Áâç}	ð\0„Kp³ì7ÆÒZsÔ€àõDì)ë\rù:°™JQÖ“}¥”\$¨€bÁ³AØu)»Ü‡\"XÅÁžMÞ%pQPÑQÂÍ\$@³¦ž\\’\0ÚVõ7ªÁ¨TMøX×É*ôò #)G\\ ÐK—«ÂMë0–=¯JÜ&½`¿\"x‹_ÒËb™B`–C?/ˆ´ÅªÚBUuë«83ûNR¤Îñ_Ž]Nî‰TèÜ¿D„ª…òwI¥\n‘2«„€D:Yî‚	ôì­q1°Ð`B‚à—F!]W5‰,:˜1Ã(­0ÇtQôFÙ	ˆŠpÕ7’'!\"@€Õ8Õ0Ü`œ7ˆ\rhC’\nXÓ¡¥\rA–CÖ	m	Q€Ìß&l&€|cåL‚d¢\"#·\"ø’¨ÂPK‚‚ôß56HÊ„bÊ—&åÄ+Î#f¨V¹/Søˆh(Td±uÀ€ô‹<=ˆxdª8Š:ám!ð6ü8€,JP~RP–DüZÂÃu€±‘O¡`Å0X¦šŠA¢ˆwØ£0eh^Câ’\$Ä ¢ãÈ8A‚¡PçÅ(ê#+K×N4¡%\n•BÇÄ>âÜ2‡%ìüë{0ùÆ‹¾ò0ÏŸ¢/¦Ñzˆð Ï	P¢‘“Êš @Égæ¥Dªzöž¤D§ÔŠþYà¥“4œ¥¯,%l3WâÍUþ²¢ÃúLr[º°øÔ…9H¥ÌgT`@7È\r‚¹N£ï– èÛ€û¨ëO+òD>I‘¶(bñL“}\$úÇ…”êIXBÒž (4!îhñ!Eåœª£\"wÓ\"0qËJ\0ßUØPF\0o_\0cà£çÐ„¡\ng‹\0T}\0ÔÓ#/tÀ‡úXJ•BKçK/‚@\0yÚ PIévA1ÿiœ°ÂàÅpàm˜@Ø„yŒç9À˜ 3¤ÃHYº2!œ†„ÎéÐ`/‘<rI‘¸y ¥¾BÂs@uê• ½¶:b\"Ž¬}“%#Èê…É¾¡ª…~[ö:p¸2/.!9CÝüøB_NcqœH8¸ñÜ¤QrcyIÂš–ù\0¶©“\n7ØnBi)`?Mõ’âLÓ%XM¦NHŒ4Bã¸R\"Og‚[H0}Cã4ìƒ ,,\\f¸õÂ5òŠ ò‚d”\$_'|„Ä®‰ê&P¦\0—ÜN¨jáK\n¨ <¢?‰*%øYœÄ±`·@\"2¢“!ÆPötP¢˜.iiT|ê@2Š	‚çRÐG d¥K'&(T˜#ËWÃät\"c\rS,aœ‘@[3hG\$\$­á°+„¶RØRÌ¶åºY	6Às‘lt´–¦ÚÒ’ËI*ñv&ºz” ç4,\\²Š†‰¬YY{Gš^J>Ì¹%‰.f¬KxÀŠß:X½O.§}L[G&–äÂeÐIaK–b’ç”Ã%ÄOÉB8lÒˆ>´»å(M äC€A;oK+%—yÄ€’­%”|\"×#hGD¶\$õ 	™fB—òMdC\\ª±äàÖ±áªå¡…™L¤T(q…¬º‘\0.PäÌ\n„¯¤’ºçåZŠUjg[#P@²Ç”rãþ¢Â8m…ÑyüMQ6ò\$œsŠÑûÆDÖ¸`!8:4€¸Ñ„Œ,a£p'ªFE2€8Mµm¬” ÆD2@.…UŠ ]!ûÆÑ5IÇ€_ó\n¨Ú'(¹iu˜ÄP‘î‡€K²‹p9™…¸@LHÀŠÀ)‹àX„ÐÀPÅWòvó‰\rDë']!´Ø0ŠöB#äR:Dé.\n¹XÄè€Ø8á´H\rs^0Ë¿+9¡€ÙSb0\nBë7ùÀàa“ty<¬Ö¼Øà|&#¬gÚ@5qDáäÖÈ‚\0/‡ Aàâ¿§ú\"&¼†1¯ífF‘|gí5Õ\\ˆÂrórIJ±'2Pª£Jséž‰læÂäi\nåRŸyCa9àÀíß”™ð„àÉÛNp§\"ˆ'H7™ÓÍˆ¾3MTØRd“BŒR€àpƒ|zË:1PýhÁ)(h[BôPÆˆ“Òž¤^Ñ\0äÈ\$:6óKBŽ(©Ò˜\$ŠÈ\rx[ÀBGHŒ„ 6cn8›Ô\\Ò \nYi\rdˆ\nUß„\$©;È§”.Ë‡ì* _\n€§ äŠ=Qø”y\nÀÅ< 9OãÆxF}\rðˆ¾ÂF%¸§M4\"æ›à0\0f(×d3ñ¨ÑÜŠaù\0À„p0`Hëê¤‰DÕºdûäÒ3Yö¦ICöx£+?YiÖ ÐŸ½?„1™ félCFPà[BœåÞÅS@!Ln#su\"ì…Z\0÷:’rô¶|tÙ],7)1¤ -Ù4¦ï&Yî€`£Ÿøé Zµ¸7på¥¦°²ÃÊ›@ÓÓ½ª -®hóNð-ÓÖ›µiJ0Òˆ§3Xjõ9*Ü.T7I«ˆ`Ã@ö£‹î{`nìãÀeQ‘ý°@´Ì)`øBÍ\" Îhé©0¤ª+Z•«>KÑï*YSjDôR©œ£Iš0Ý\n´jš<Ônæð/°(Û4ú7ÑÄ‰Ãh©hGj7;š£’ä!”p­ª™Qº¦ÏœB±X¨)ŒKP òš˜u8‰Œj¸Rª+qøŒ”‰Á®*ÏMši…öìM+TNsàø@wCbFV#hùîœà(@µÀ¸êÂ€þ£\rlLÑÞ‚9Ç€Âr3×ðÈê>ñiŽ\r:ô–¬¤æê>ÕëVeî¢¤aùp¹¡êUø½íº)üÞG°2Ÿ¥trTw Ò5p£Íf¶#­umœ3üÍf›Ò`½8KI& F’m”³‚vÝ\0À 9täP1’~×¹\$õA\0ÞS5'ŠîEyz5qW‚™«\$-_K‹®EyÀîòÊô»Ò½q!‰@™kºÉTÎlÈÊ“Úe'\\ÄÊ\\cg»øˆžiüŠ_5÷™àç\0zŠìÉV»iÏBã[Œƒ]ªåÊÀ·¨8\n+ñ]:êÓ°•Ø“\"'n±ÈW}¡µQ¢.IÛXn|ËB°Åƒ]ô†klæáü9aêSuØÊ…v°¡­ì-ay<VItÇÎ™]]…K	“I¶²GÝ²‘\rBµ	ÄÌ­ë…S#öÕVs¥‰h'õ®báT¢‰Å3¹b]Ym\\¬™S(šÉá7¥Œ&ºæ{,9¬ºÒÇzå`Z&'¬o”h\"‘m“Å4½Ù8”AA}›ë‡WâÅˆÀûST¦-_Z‚e\rµ0¯«@UsÝ®F\0-y•“žê'ÌºB°ÙvàeC‚Ý€wZ‹KZmpðeÑè	|p0‡äYáÛe¡ÆÔ´ëE,èöµ{µŠqÃ  7hšÖªSËph®™T¼©MK¦Ž\0R©Eak.*Þâ\"²ø¬ÂüÓùÛLÒALœ¦&;hÙ¤à:³5´\nm!CÛUög·JœËYnâËÛÀ”Vì·-¶‰êƒF9þ´	Ù‘Øè¹ŠVYÈ”Lt³ªéi\\ºµž³tº€ên\"'j_€Ú˜NN `Ô._¢Õ©©Gö¯óTÃ\n¦‘]©dÚ‰afŒ“\nembÎ¡aIŸnÀ19U']ÁšÑ3æ¹ç:€ËXÚÌìùÜ”˜#áŒkÈd®yŸBÐW2eºXnš.K£Y2¤ñT²),†cµáèmc£‹Öû¨¡P€1q`ce¢e.{˜p* [>`ì{bùÊ]L ‚ÛSe›b|)”Y:nçcà…S9k7]5±èšçY‹]ÅU CÅÁsBC|€åîgÐ‹…t98Ä‰®ÍÕˆ“tù6]l×·.¨má©–	‡8k·˜UæÍyÐ^|¤ö¡y@Þ*×ÇóÞŒ1\$·	‹‡*'€•]f7H¼…Ëå1y0ƒ}j!å½¡cV+Î¬5·¹}ÞÊd°8U=×Þ±ê¯›zÛ˜ßF¡’—@¾o3øÖ_fŒaµ¾å)î~`¹­!iG]EÝ&BlÎ¢Î¦#¿}õÈ\0È‘6÷3\rûTn¦kÐ]\$;¾Qjn:ÚØ›ÞÜÊZ·ÐÜZbû®Z&á@gÀ3B\$·gë\n–Êd5MÕ/Ku{Ô#]µssqfÑuÜ¤ºëˆòQ3ÿØ—–ÝTµv­c©\\‘MÉuÕÙk#eB«QäODóÁ¸%ÀY<_Æ6¥¾b ²!ÉT.]>\0u=~˜®ˆp«±G×V®6×@'U¯<¢kZŠK6¹\r@ˆ”’-;ÍB.õtÆ\0UƒMa´±–“ÂU—n\0búm9#	TÝ?ZåÈÀêeÚˆ\rÓ‘\nôí°¤6€G”@+ž\rAÝ²FÆëa†ÓÈA>0ËŠ¦|7EÛQå\nî\0WŠ,7.—ÌÃá£°þ(Ì%bî×ÎÃ ´ŽºM¹U|-¡h†S™+9n·ØAQ3 ¾àjßD|ÿ6Í®gJrXnßX€åN)­|Máp°ÞRˆc&\rMö¯èÚC¨yÖÁz¸k\"d©—ÉûŽÄC›ü÷‚¥äPGå.?yüi¸ä1ÇJCl^Àë\"Þ9­ØÉÆYñ¼ÃÎâ ãý~¸q1€8†ˆÃ#Š’0é Âð)	Ì_äë¹Bœ¤¤°lï½¬8eþC,‘Ì„A]½ÆNC‰’kâðÆõk¯²iŽ(pÀ=ÀéÚ•Ã	‘Ðƒ\0¶A\\Çmüï=“ì’Ê™há¿ÚÓ€Ž¼¬ºÊâ1iM[¾	´Õ«_Êáq•Ÿ%!rèOµ}M¹úG½5%Èq.i^GÍfàýYi/dªólLRÛ0z2ê²Ì·˜Á²\r£Ò\\Ù÷ígF	µ¢n¶¸æ®	tfi_´eÍ¢RD§@õËóKiÜX‘†p]Š;6êð¢¼o\"A%¬9•7F.…éË£ZuEk˜sáæ\$ýy‹ÌcòÑÜÛf[-‡ïššás8ÊáPû4\0Çô³5aýfØ«@no¤ZRÚ¡HŒ.uób5ÌÙ¢È³“KiDFëÝ™-Nfpˆ?ìH×!¼ê¡ˆÍyúÎÞjs¼„\\ð e	.à‰]’‚†läŸpwÍÎ^†‰—À;ßù¥\"­,h”~­IÈ«‘9,a:jF7¹GægúÌô38?J£bÐHÑ+løW\0¨cÖ¹ãôWŸ”h SEsà %ËWc:X;ô-DžF(Ö­64ËTs3ä¡)ŽBj[f¢ºn¢Àº¨ð›Ó: ©AÐÐ@ð½\$¶Õ¶ê¥Z&s½W­ÿKºÌUØ—O2¼ïhZ‚úÑvšÏ»™‘©ÃÅtªÄÒŽt¦CVê…wJôÍ©‘ˆFí^,ôèpãá?ÒµL \$8€EÀ…s¨|ÙDã4(›¦˜q)'ÍNWuG.†`7[æB/™’Á]¿œ'§€ˆ£z1­Æ‰QŸEÆ’s:™£ÕžP<ºËX5ÎÍLßô\0}g“X\nÆÕz¨Â¸=Yç>¾yóÑ¬Í³ñ«É–9e›¹{áôýiüÕk<ZY,K•¹AÆ¹¡b„½Ë™êôZá‚\0èÃ\roNª}ªÁ¦åªhIa!|†ý”JX¦Õüƒ¤Ò!ŒXç­)¹«çBãœ«³µþN«À˜àTXàdJ‹¥¹£ì+bÍØ±\nLRÊ=£“H{šz•JHŠE‹`¢è}¾ÊG\$§äÞ’ý–H°§Päï*¡´ñ\"Ç 0*@€A @@ð#,	='Ì¥ˆÀXš5Ìˆbx–XyÓ‡×7§Á%èøö¶¡¶¼]\r‰J!J©´Áò€íh‰xÀ\"c§QÐðÆ\\Ý®¶ØñÐÇgyÛ‹ÄŽ	2mL;UñíEÄRQK€À’àWÃ•\\Ñ¥º\$f\\RXƒH§Œ€¶' /ó©c¹]Ë¼x°Üàe€‘²í3V•êYšF0‹‡òè	–l™Ò\$âNu°ú\$É¹‡¢í†|àbÆ\$äyJ`>SþË3œÈÍ¬É)©[ÂÐs–C…¿y-×Þa=CKŠÎ2ÅäK!F•½êÖèþ÷…e¾\rÜ¡Hã#è·Ðg–Yuœªb®éTBÓC# =:Ë©\0‘¤ƒo4ÅuñÎ@]N°€´`ÙâÖVî8OU2xX?qµ÷ô×^ Ní·¸©Îg ÝÉ‹“»áÃÈN8BlMýTU)Dày\ru¥ºÐ;c¦ÉQ5uÔg¸AÂð¯&\\yx6.Šð„¼/]§Á8šðŸ„ 2áPEÁ>¤7uÀ)¯ÂÅ’)3Çïó‰|M81ˆw`\"z eŒÃþ›ÿ¼R»8„›×à ¸ÝÀyîð+]9È\0IžJa1Wj±>úl­·Ýúîu=,Uy8'¿4örtÜ-_x¿WS‡Màõd²¤ÅPáÿuuòá‡¸­kaP=gƒààÐHB\$«ò\\âà\\¹5Ä“Ã™Èðà+á‹¹[Êþ+î‡ÂW G‡SÈB9p¯‹àtã„¦”dÕrÃrœ!ånâ^\rË–*”íŠ¼­Üï·¸E¨‹ˆ:v-/3·1íÇ9Ãr	®vBÍ½þg`ä¬9oç^\\JÂ1	Xè\\û¡ÛÎèÆ#â(sÏm¬‘ÜØ†÷ÌíÆL5\\SR¸EšODóPlN£à\nÑP·€¯‡Ó\\hBd#ÅP\"9ÝˆFØSôK”9\"0fú,Ó9Ètg£}èözÉª&Ï6Mî-£F¾ö)uIÉIŒÒXÊ_Fp­Áp‚H‡\\’#Úw¹N£š¥¡ìäjb\"mˆl?\"\0½DIIáP	à¡P–Ý€V0\0ÍDR»Ýþ€ž†è¢ep	!Î³ÔF“­Â×!9ôÇA€À\"™Ä*BObb%¬bg'+‹KÙ£12½‰Š½¾Sª¿×ZãÂVÂ-m1ñë2¨Býü®tï!=?¿Ð\\oõ\0—îÀý2 ;’\\Ä—\$ñê]Ó+4Ù´8oõ“Ìwa'AŒú†ˆú&õoŠ·Â8\nñ]HÿçÑä§ù[ZO	i8š¾Àc w•Ûð\nûf²*€´j=yùÍò¸yco\n„IyRL\"•Ý«\0È]ŸîðŸ²Oe»7³üÊ/r`9Iì‚³ngˆîyh¹Ý!	†°ýäÛŽ?¯ßÃËÓÜNWw²øÆ‘ÉÙ‡«G_\\u#ØmaÐÝ‚ZOYÂ>'>Æõ°uÁ)0#ˆÓSAÅÆ.zp·eB>[ývi£*vOXüØ;þ¾¹Hfñ0®ÎåR÷„");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Þ¾/–òþ¯Eúï4æÊ/¿Wÿ[È³>–á]ÄržÊý¯v¹~B£ PB`T¡H>0¤BÒ)ð >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõŽÔÒ¦âöàøïhèí@È‹’î®(–ð\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønÞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ÐbÐLh °!Îã	ÐPöîd÷.¿ïy\no\0áÌËÐ¶öPptùP¡ovÐ‚knŽ¸\0z+æ›l6÷°©¬Êø0’äð¹P½oF€NìÏFô¯OpýàN`ÜÐÖ\rogðá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkþDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$Ž dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘þÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMý3q3d’þ\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ð3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²Ž‚Ç.æpäì2øQôÐ÷“¼åÓ3ÀVØ°WBðDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sþl-1cPÕmðqªÊ\n@ÊàŠ5\0P!`\\\r@Þ\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]HŽš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ð–k!>\r^J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Þ–’ öß(#mJÔ£,ý`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0Ý3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhþ—Ctn˜9n‘ í`§X&¨\r'tpLž7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒÝ|d‡q*@”þ@ÞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ðŽ½Ð®OCë8Þ-0Ò\r”ÿ0à·õ„@]¤XÌŠÐÎð\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øÝŠ×Ê7¬<ö@SlÈ'LÒø9WŽ ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌðÌ\r¾Ï ÂÏò|ÜXÐÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9CcÝ‡àR¡¹‡”QFÇpdÒ= C˜÷ýš\n\r¥Õ‘ÔóšdjŽÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ÐZi¢npY;Žù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùýcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍžÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—Ž¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ýO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âð@îÇ‚³ øðZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ð@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®Ý\\³À›žJÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èý	ª\$õÐç½Íq„DJí=•Ù÷•XI-ðÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVŽDÖ“¸QÂ¸€xb€kæLI­.kú›@ÞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉÞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãþæ>Éká¾R™uéÞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAÐ3qmu2ÖfzƒÛ¯ì4s‹	´í`ÛŽ‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àžÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcÝõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gðU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ð“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍžLò“~>!åOQxš{ZVFÔŽ`½éÈ~Ižß–“øL)Q[ëTûôM›àþT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ýµ/©…L`pR0¤Ž&õ—I (Øá\\.£*m„*Ž(ÚÖŽõ—\$ä†ÆÀ÷\nw×ŠÐ¥…8a“\n&´Â‘žÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fðIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tþ€zÐ†‹Ì\rªjkzM€ÐÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_þ¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ÐÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ð#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×ž2ÀO€Š8Ú€ž5‘¸Œ¨@†ð&'´\n€DŽ\$i#ŽÀ#Ÿt\n PŽTs#]P*	àDÌuc› PÀO|pc—øËP	ÞŽ¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cþ<`NŽˆã:)DY\n*Dý‘2{dZ)A‹Ú4±²¤€cZLð2ÈÊ<ñò\\Œ\$r#ˆþÆö7ñÁŽ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ðVƒZÒÆž52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘þ’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøÐ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHÞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ðæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Þç‘B¼‰Z•¼¼%å/I{MÃ\0pÐÀÌ.`äÊÝo*•Ô¯%T€ý\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁÞŽüô\$è)çÀ§1P30(\r¢+\nZÆzž„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_Ž(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LÝæM7.\0ˆ³|›ðo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Çž¸Âà)ÔÏqùsÉ9Âa<RPÂº|tžút&5°äs©lî@¾	ÞKÆwS®èlÍ:9úN®wSø|·göÉØOùAÐŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iÞO‘ŽkÓŸ=\0E@iâÐ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwMŽ§tÓx€PÀÙM‚?p“®=—äì8ÜÔý‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)Ž\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ÐÖRRÌ<lcù™&Cj3Ñý%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêÞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ýRîJë>.;ù¨íF=RÚŒŽ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËÐð Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH þÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©YÝ+FuzlSž—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ð*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nþ²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMðW ä¶D_áÎ±Ðv@{cÐ:¤®%[%‰C²þ1¼Ù;AÆˆÌTn› \0º a²pážóe~ÙU5 s©V†Ýe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€›¦É\$?³idÀ{fB†ÙF0VZn@”ìºSt‰NÍ\0oP™ÃchGóX^V}Û´°’ÓZ,«EÄ€kÂ\rhËGDYd\\zÓm\$UfÚD¿ö˜Á­ë É€²Ó‚ª\rªë¦•^CRÑV£*ÕÇ¢7õX‰&ÓöÁm7eëYÚ\\«V¡4Í®è¾\0>ìZfSÙÆfWJÈ	ÆÕV“\$EíukKP[\r¤\n±¹ÇÇ_q}Lø««£êÁžÑ}òeM£ ÜmÐu4’V°Ý‡RZÜˆ\r‡®Á	k\r]a“)`ÇX„Bv0±2æÛ‘^;tŒà†À=\"àkƒaYBŸ8J´_«Ðk)f;ÒF†–Á±U„ÆÅ`¢GWN¢Ãw,\rq’)\n(	Ðá´e¼ëîR53\\NŽW·…Â®EàØš¾¼õåS5ÎÊBþ;ŸÀ‹W4¡J	%]5ÞÃAõ°àpmï	ËÜ‚ßÙ\$•È.-KØ!sCçEtî+Dº;›ã7 ¶ýƒêONË²ªäcjO¹PKFO\0Ýž(Ð€|œ…‘°k *YD5”äŽå;s@6´@ØQU—\"Õóó\rbØ?XJÅvç·n¯AH®äoPS\$TËpbj1+Á‹¢f3&™@Ê€Qw8@¡‡ÐÈç;\\ƒã¬ˆ‡¸Ä‰NëÙÞxb#Y½¥¯`:‹ÒËkB¨8NúoëS³(#UÝ©ý(ƒ³Y;É:×eÄ¹…ô­±kËn¿Žå e¹Xí´ZîßMi&é¿\rõÇ^»ëÛã€d\"ÔW«\r~[aV' (#Y\0Ü}`ƒW¶.u|4V§*WÞ²l:¾Ý÷mnõ\\Üà™\re¬/£ikmÚÖš”ÆUEü0#j[pæD¾®/õ^ñh„f½WøÀ¸ïÏ‚L\r_®Çá¬¹-ŒTX [*¸¢q•n\n2Ù*Ç–J±ý’¬…û\"YüvQÀT£ô2IÃß·=ÂD÷ƒGñØ‡õ¬KXK\"ð½ð£÷E)\nYmÆ4!}K®_íÂ D@á„wmá(\$@¦ƒÆ\$AŠ”jÊ+Æø\\‹4Z½Ä°vÒd¹SmÅXÚ!ho!F0l†UËzÝ8Xn#\\Íˆ_…\"Ë˜`¶âHBÅÕ]Ú3‹ü«¡\"z0)7‰‚\\”ÞÇâÔwñ.…fyÞ»«(£ôí²‡¸ pÀ0´¸\0XªS6+	*\\Q’à\r\"ÿ¹<bñ°áñ\$tŒDqŒ\"‹ü	?ð¬ñiŒ«o¬¥],ñ!È{€g|ãg¶\$(ø¤<v„…xáÅð¡Ž˜£%GèHõ™ÄœÆEŽ\r ÒX«Æf=„Xà)†ÜQKŒXqîÁ:N_¢ÿ5².Ö(ñÃkµœàgBZ768C‘cr­¸¹¸²,<Ã#y!Èþ\rÑ§’ešWtEÓZb\0Q‰%˜bÿTèÇ­ÿûrp…·\"Ä(û±A%†`xba}P™0vL1&>0þdôD c<6P™3°…‡f¨À„åVD~íÈÊ µÂ9b\\IÜ,~ïÈ\rxs\0Þ‡ÀˆaK£8CEšÈª+×Tl#‡Ž‘×¸äï«¡°V\0òå‘|>çŸ\$h®G8XIÐè@\nTð…æ¡™æ\$Ç9Œ,íBt/£†šu@sž8ÓB…7€ªsy˜¨€Õ™¹ãìþ‡‚,è]çßDy‹5–nže€àÆòÎ¼þŒ9)žjÌ^€á\n78Y¾<çU<iêÒwùÇÎH\\Âë˜êC…×4ŽcA]ïXŒê8)\0lpSŽÂCgCM`QÆâ¦)Š¯lè(ø.'¤¶=a­Ix·sÃ; …Ü™ß¨TB¦{ÞÊx¢àp¼ÐpáU¡¦lô¡§T Ë2“´>eÏ™¤fu99 Íåô\"^ìÖ75ù’uižô'@h]L9¨›^†æ×¡Üñ:»D9áÌŠ0ódbüì¹—6™Í¶n› ™³»7¹¤Îs\0_œ •ç2z¹Î°¾çÙ72N¨Q“º”ê/ 3¼èA:žƒtHÅó=´‹Dú=ÍÍ³y?£Ái8SÈ¢ˆ]´×¤¹ögCIîh~P£t§Fé^uÂàÐ5¬4· Éäè;Fãu\"þ˜ô+›yâ•?úÏâüóþ\0èÖˆ:ÌÊ˜u\r<<ËÐw:*:jÓå: -Ðƒ8IØˆ\\u%›J*wS©¬Ô¾cõ3;yúê‹KÚ6ÕHƒ‚¨œÎêKámu£æúiLùÄÓTôô¦Ý%ÓN:NÎ‘àµyª\rbfšuYª =õu«E3æÿ4Ú­WN…³>mëInôô–x&Ð„ð'šÕ\0sˆoŒ×k_RzÙ^È{u}©ŒÛé—7zBÓF·óƒ®-di¿YYÏÖeñµœ 9kCHšÒnµ'ŠÀÂ€ü¤×–ª5è´Í{ê»_:?Ó6¿5‰®\r€g/`ZLÓ–t§Ñ± -€è´Ðqªµé£÷|\"ºG\rm‰d<z{)¼B-\nÁIN\\ñ\0¼AÀsx\0žÐ›ÜÅTm}Å÷²í:h™c°NÒ8ö­`ìøà/°À°O\0\$0K=€ÀF\$y\n\0‘´ -ÚPvCx‰ZèKIžÙO6…c­›”g;;±FÅ›µ½ í¶4@J_ˆ@§Ÿá\0©€Å€¢€^yP­@OÍ0âv‰9ÑJn ‡Y.âC]¸Á”öp…ö’Áîs‹ô~â·A¸íÒXæBx·l¶-Ôîoq­ÜþTw`hmÓvÄ±gÆîw\r»½×nût[±Ý0EÀó¼3ƒxÛ«\nžï7¼ <ôùn0öèÞºxÑmiDÜÀ	÷Å´\0ðÿ|»ç²ŽúöŽò)-·}ÛHÄé#·æüCÐGu0Ó®þ6®}¬íÿk€RÚöØ6Ä\\ôí—z{ÈÝîãwE¹\0007îHû”xq¶ˆ„„;åÜÖñ÷;½m×ð?r\"Ñàžåx,þ'Ëƒ{û?w©¹íëð;qü#ÜŸ	±´Q<ðsu\\áŽèxgÁpSrÀ/58u»®ï'†\\à—¸NàºÉ \\Gàöë8•Ãî&q†ÛD‡*ø©Âþoc‹<5à¯\ræ.‰Îš»iûq×¦­¶é¿ÒÙ¼\ràgÅlïÀ^\0˜äAÀ-	T‡@Ö6]ü§û\\\nîàëÂÀ(CÑ¢oŠsÑq§AÆÙ{™|˜Éú9æŽs¸h\rSšiöÚô6ÿ%à\"g1„òAõÛz„EžÜ÷ŠØ9òå|	¶+Ê ŠB—2yäQøÎCÆM\$%sL9©¶'Æ 6ôdäm\0†H”	™!˜?(\0œ >sX\$œÙxÀeÍ^n„ü PIù€¢ *\0ÆüæçG6J¾Q‚/”éƒhV[žžl\n(E®¦ÀÌsqÊór	%\0ðÈ•Œtfàwå€ª)æqdáY8Hþ)ð¬†…<à¸ä{a)•àEØ@³@ùÄSÌ‡ œèØzW¸P!‰g¥á\0âux;Èœ¦	œÑ@8 Þ)ó¦ |éÀÄ„J®.† üÒºâ®¼<N•NJ]>€ùs{‡ó¤Œ\n¼Ø[CÕ¾“\\¬›â¸¢ºÆ~`<Ñøg©\0zÎ–‰2t–ós\ro\\æÂŽº¥§\n©mãL×n¿uå-IlÎ\0vyüÚ>	LÆw1è”Ä;ÕneÒl¨É5`ÂœëŸ‹2Ï@:L˜î†¨dç\0\$°§Ã–U°>]l\\)\$C\nQªŸÌø¦óLž€BÅ†í}‡{1×¾	;t#?á {L%1OÒ/¸€vSMeð‰¥®C×›\nË¯L<¾#Óà•@b?tºM 2t¹*ù^(ý‡,ƒ;ôÌ7˜Ø™Ï[yøþ?²¼‹¸x ±‡ÐÉ+¨3½A­˜uˆcßÑ‡g}ý3ðÇD-\$ƒt»²ìø³\\æÌg\nû±\$”\nñ*‚:(ÙQøXdžï~ÇŒ02x%ÝÞè¦ÂØÎG=ð-Á…:;C½p…ÞoÀS}ITQOô|#€pñrZ\0™Úòø“µ„du7H/6Ž…ÍM0Æ=G@*#'Ë‘ý†GG€ü«¾œ©MÔØ’Áò:\$4¦à²Ä¾G0ÅÁ<·Ü™÷¯&A(Å¢b›Í¶G\"yçòÅ@Ç…\\+ç¸ˆ>X †@“âÙùð¶Äºð˜ÍÈÿâîÊ	þcËð3Ò <ùà+ d(Â€Äú?Ò!+Â¼WêQñOzkÒA¬Ý£‚3éQ\nØ!e'9=Þç—ŒYÞKÓ©©³KÏ\"ÖÔ¦þEÆvq¦/o^ü	®ï8DEþG€û;8Åò\"èo7–Pød´EÝ‰ñ\rÜ¼8¯{EDž°´}	(.â”Üš¢Šë±Ä\004ú\\‡=Å2·ê?H¿v·Õ~(exå=~#€>SØl„÷ÍAy• ŽSÙ|§³ïœŽ”ÉÞ²2ÅÿââF†¿ ëÆèA}Ñî¯l,’C l÷¿„¾5b}ÙãàløÉÂñ¿ƒt÷Ý§ºUfWß6¥AgW½„%:”g·%b*öß¥Ä¿ëÌ¦y8.ËâfI-ónÃeÜ ¾z§’}fQï¦};Ý%×Ô}eõ0‡x¸BRõ¥:>«è›`ˆ”ÐeØ†[z}{êªÓŸ×>¡öÏ·}gË_pú¿­	UöÏiU¯×ZÊ¶VØÒû°D”Ž<;Cb;ýÅ•áüEÁ|•õO-~3ŸŠñwä¬K÷ŸÃã“é\0tgÎ!žÓÈ~cäsV}¡Â²púþ+õMû¯ä?WùNc\rÇö­ú¨mL,Ól{äe(¼Ørÿ`Ýaè!È'¥ÿ„¿Ý}(•Y1UŽ?to‚Fˆùù!ýÕˆÂh|ŽÿT\$Büoö¿®åpäXhXäýè¿Ä\\~ê°€iÇ€Õ,³dôÃ‹ÒþµòXJ†:pmÐ°AµÿŸmÿò!(Îhƒ²ÃÙ@:\0²u0\"à6,ªu0Kï€69p>®»¨Ð\"È\0(>Øey1€ˆ¤xYÁ£…£\0xBnÄ€ææ#Ã€<Š?\0#/ÂÀ²œa£;u Û‚½\0\$@2À`O 2@`ù;@Y >€7@³ÚÉè¸@B*¨«\0Ú3ã¿åÑ¿NX+´®Æ?6ìHçà:,«›±Žõ?¯Ä\n *¤ÈÁñ#ËÔ˜!¢=Øf[¬;«¢Ã¡½Âñ|L]£˜¸ÀâðÛq®ÿ»÷[”á‚–N\rª%k «P0§'<6º(DAO€Œã”B­¼nèñt/Z£rë»!1^Ï¡ÔÁû€ØäI/u…±C !k½ÖšK×`Œåû\nÀ€º\\•+Ìá<£ÕIïÏOÁ^gD ‡#Åc®áü\0Ë¹µ°Z”	£ÃpX‚8Ð*p3>ø \nNÔA„, ;†¨ïcØ¡œbìØ\"ïŠ>%P!IKTë¹JÄ·Hú[ÙÁÄ†õ«&€äóÀpR<û»çfº\\¹Û‹ «ÎùKÛèÀÌôÀä(V¼Ø;\0Ú‚y•ìµ„êÞãß!³Ú)0°x½ò(ðPz@jÂío†„„Ì\".Ë @=98!¤Aö`\ra€b‹äÏ69è\0E¯’·\nkä%ñBHøä!P“€Ù `Žé°ì\n›§¯¬‚ß€š–*d&oƒ‚T3ä‘Áö%Säh”\0ñûäëB) 6B`RÅ!‡î€èé€ÖÂ623ép¬\0çÛ 6B6Ä9|@àº.Ëp@>(Vú@•\0Âí¸*a/ºÜ²T#&¬(û±[‚+¨¬0h†„ìÛ,¡O\0È¨Ï‡†»r\rc³À9\0îÂCêÏ™ÀÌ›¯b\0Èš9e/¦.š°ó¥C9ÀàühC.„1ÈöD ¡C:p„ª¸ç8\"O†¦”Y0=€†„üØ•Oõ±áÌ5Ð]Œèù\$/Ã2ùC/Î§™\rªÅ¹ð¬7’Cf¬.`9;+ ­Àº&ÇƒÙ\n“ AªéæLê¸\0002òõKùoK?pþ\nCÐ½¿ˆò1¿t(û«Ý=ýÐ6ðÒ¿Ôc£à ÝÂšýÒaÄÃá\0l¯ÝVôHj¯€˜ÛÏnVƒà¡ÞkÎƒ\næš¢>ÔíÌp½£Y<;l¾€ÒT:1–bÞ‰ÌèÄ–O\0Ñ}n€\\\n@Bn‘>˜\$#¥Á	¸‹\nˆ!‹Í„&A8BU&kg)˜P\rdE@úÄX ÐO¦;ÔË§«z–bðHBp¼>™ÀLàB*›™ÑDˆ q>˜ætD`6\0³,Iq\$DP£ÔJ !ÄX±DEÑÄb£™ÑŠ=ÜK¥ÇÄr«™ËD´ý\\CÁ¸Ä›|êçDRý\\Jàˆ†…8n1/Dk¬LOÕÄÌþ\$(‚¯\nÀý\\H¯:ãa‘'D¡JQ7Å´E±9ÄùI;=k\\FïƒÅÜFºDåûÛ™ŽSn¦E<Œb°E8%P¼ENñÌL©j†© E\0006;Ä¼0VÄ6À%HU»\nàZ/»X«Ä •\0 Y*…á³»|VàÌ¼ìúñ1dJ¹sO[&š2Z1	»*Š \n‚=²ŠÙu1mAñ#¯hºíÀòÔí)¶Q™_säH¶Àþ*]Ž/ø¤OŽ“Û àŸú=Ü_>b=!C„2Œë3Œðp½k’c^¸Ú°¢L\0¶\0ž€È†8×*xìÎ6\"@”À E›ÊoÜ‘f;»áf˜¼.\"þ;6ÃÊŽY˜X3¤Å˜†Â«‚Ðn;èë¸‘­èÁ¦’»q3,€óªX8^»Ä ×ƒ‚ô\\.Žûº\0¢C±(Ý ‚O+¦%P#Î \n?ÓÜ	A=ÆeÃ‘AO\\]Î‚ÂÛ¥ÄÛ=Ô!c) Jõ¨ºÑ>ÅÖ”B#Dí4do½áHAª\0€:ÔnÂÆŸx`  Ôë—¡‘5PÐø „4Ô \0>\0F%X•‰!;\\f‘4”2 É'°Ö;dMsècY@ú³¬Ìã—ÈÎ3¾@8w\$äÄ? \n`ÃªBN@ £€>œu@(ø˜\né4€‰P)\0#¤?Ø	oÌ(\n`)¤¢p[À¦#ì\nCQ×\$ ’”u@ À:\0'\0Š¹8ÈäGn<°4†5´fÑ[í3hŸ‹cÊ(HÒ,êé8±ÄÇ¢}!Ž¯ÓlrM7Ç( ÄrÍ\\¶Ô|J\r´šFIéâ€v˜ùÈ÷º¬¸ÿ®n¼?\0 (° û`'¯:Õ4pañèŽà=ÇÑTq‘öÇ!ºxÑÍŒ¼‹^ žFÖ¬€aT9Bƒ\rz‚X)ýÖ×Ð‘ò€^¡z|¬àÇTƒ±ÇGÜ<¼s2µªbu*€_!LÍ’€Û!\\p’†† è'’H*D!-H ÚK–áñ'ž,ëVêG¸—ûeÑÎHœ#»jcp6î²Ê@<‚°\r­Ú\0Æx\r²5¼Ú¹MÁ6Zãdp®7¶©#<25¸ìtŽ9\0Ù#£i#|#ˆ\rÈ«(…§\$:?ú¦\$`@Àœ*ä‘h×Ë>@\0ÆhWé	1\$JÍrJ‘+\$ù1ÒG¤\$ükÁEBþS4”Dt\0[Ä”ÒQ¢\$ÓþrXÉ\\0˜à¯5%l“òIÉc	à2W—S%ürZ1[%I£É\rd–'€ŠªÿbB’GIDQ—òHÉ¥\$èR¸¸ø°\0l¯õ%ˆ Â­’îè. ÝÉÀ3˜òe†ŽÔœòqIa%œ2tÉRÔ] øIÛ'L+R{É'džtI\$	¯ù›ì4³òX†J+KxÉD¡<¬	&˜PàîÊÝ,¡Rl\0Na`Ga<É÷%³Ó²ÉÀ_ˆPèÄ±%Œ\0005É÷(BF\"ƒë'íÂÆIc9è¨ËBþDAá<Éb\"Å\"\nÓ)Ý²Q	êB‘€ß&;’‡Ê,ïD ŒžŠÞØ%C&\0käùJšû|²¤*Tª-îJ1Òª8X\nÈ2a\nÒ	ZBò=Æ¥ë€Ø+H6²³Éù(°Pœ\0ækÒ`–ÿ\$H¹JØ­Ò´€N;¢ 8\0Z¬+—Cü©Òx%t‰­Ê³*›|§sÉÇ\\© äKéLœÁiÊ¡*`Y²¯#DTt©òÇË:ß,´ÍKD“UDÆ\$¨ãœ¦²µËO,t³’ÔJª\\|*\0À1Ï,¸±’Ø\n>Þä³È×xB1Ëp·R©KFá`ä!¹.,·òÃ¬,®°\$K†#Ô«r®Ë(Ôº\"°K¦åœ©ò®ËŸ*	(Ñ\$¾!ðYÀ1¸ø¤Yè¯1É}%»òº/.’RòK×(´²RøËÔï¼–28‚+I3\$ª€[.x!ªEÊü%ðD\"_K[.Ü³!_Ê¸¢D·¬,‘.ðt²ËK—.ìÁòÊHóÊI\n2\r„¿\"‚½(@ÍÓÌ6\"ü–.e†\0#Ð‡ ®É%ÄÊZ~\nÐnoœLJ°|ÅÓÂc',¯Ó…‡1KíyÌY1¤Çs¥(À&yÌf#üÆ³-%i-’Ê£--|Â’ÌL£<¶®€ÉÓ0œ³Rë8Y,”ËL´²R«§0”±³(‹0lÀ@ËüÁêÌ*ád½²ì¤Ã2è(³Ì¥*¨g³6ÌÌÁ¡QÌõ2ÌÍèÑ\0Ä,Ïó/M£q¯HA‹3\$³7Lîá`\"MøÌ\"Œ´Î€6Lí3;|¨•‚¡Ð+\"°Êç4¬Òó>7Ë,\0\$ÁK	4,Î³/¤Q,k’¡–bón@¯JÈ0˜ORÁƒê:øB\0ÀL!)Ð)Ï4aOH#E.\\Õ²–M`lÖH…5ªI\0:Mq4¤×sGLÎè€saÍX\"“UÌR&¬W’µÀq.\$ÖÓg@ƒ6@#óeK„à‹Œ³iMDádØ#‚K¼“â@ÍÉ5œÙsO¦•+Ãç³7PSÍ’«Ò\0Æ¼=87óTM-5T–P2Ìa6ä¿ËÿMøDÁ±‘Ê÷+ì¦ñBÊt\\óM\r2™DÐHîdÔ‚Æ|ï#ÔŒÍšÈú2ô’7I>ŽCL¤@SF²ôü±3\0ç#P:4IK»ÅI#ô°J—7¿C/M-4Ñe?NŠaÓ3„°	J?ƒ]Jj¥ŒsD’°’r‡-é\"ÃÉLLé²ýÎŸ9ôÅC”Î¦#Ð­,Ÿ	)/ÌéÓžÉ:”(Ë\nÔ!Ìí“±NÜäæì\0Û'øYÒMÊ·;Ìç2ÒNÍ;ŒèrêK„à.‚N¹3äés°8Y;„ÒsÂ¹g<<Ø2°Ï,Ôð\0€Î#<ò2gO\$¤çÒ§Ï3-”ñóÎN©<ôòfÝ,K<\\ß³Æ‚ ã˜­ ¬,Jkï„\n¤òÓÎ“+œõRNLë=DéS¯Ï7)¤ð“àOy=”÷ÓKOG>SÎÏw=dâ×K#¢?“ãO¡>ø\$ÄÍ<¤ó0O©\$ŒúÓ¤O>úpãNñ#St³¾J”ôSœO5?+Ìb´ÏÐ´ýS¿OÚœç,s˜èÇ‡\rOjSÌûÓóI#;Ìý èO×+|Î³åºbÊ1!;É¡@þ4Oé@4þÓÌOÝ=\$ÌÙO%0L÷ó®²ç-ÙNI8×9Š€†‚\nLìŒ­»NM:\\å2@N—9lÒlÏ¿(˜ ³úÊ=Æ“œ°ªøÐ!;ÄŠ´OÙ<Å3÷·PãR‡£MÎBcd‰à÷ÊV2L¨À¢¹4pknP++—€£ >\n@Ã¬²Lqé\0¤\0,Q‚‰\\\n`[À\"€¬*D€ÂÐ¶>À¤¤”ÌzBTÐä0Ô:\0Š\ne \$€ŽrM4=¡l\n²N)Ð÷Cpú480ðú\0#¤ÒJ=@&ÐÈ3\0*€C6 \"€ˆéØú`#Ê>	 (Q\nŒØê”8Ñ1Ct3ECˆ\n`(Çz?b7î¸\0¨È[À¤QN>›© '\0¬x	céŽ¨ð\nÉ2ÕCpü@&\0²Ð´8Ñ\0ø\nä´¤úO\0/€„ŠA\0#Ðì@cèPÑD ÿTR\n>´ôdÑBúDTLÐÆÌå©ãÐÏDt5PØ j”p³GAoQoG8,-rÑÖðÔK#)9¥E5´TQÑGÐ4Ao\0 >ètMÑD8yRG@'PõC°	ô<PõCå\"”K\0’`ü´~\0ªe)8PìœvI(QµGb6)\0±H\r48Ñ@‚M)9\0³FØtQÒ!H•”{R… ôURpµÔO\0¥I…t8¤ÒðúèÍG]D4FÑD#ÊQ+D½'ôMÈ•À>RgIÕ´ŠQïJ¨””UÒ)EmàúTZ­Eµ'ãê#cEÝ´£ÒqFzaª¸>õ)T‹Q3HÅ#TLÒqIjMô½º…&CøRh@\nT›ÑÙK\0000´6\0ˆ¢IèÏ€“FE@'Ñ™Fp´hS5F\"ÎnÑ®M%aoS E)  €“Bí\"”eÑ›D…3´hÓAF­4tl€™J´ˆ\$ÏCŒwHÞ¡I<xá\$¥J5äÑÿ`*À\$º¤`û1á…¼ŒÝ\rtÛƒ\n?8ý48ÑûI%'ç€ªjCAªS¨½‰<#QDõ'6\0DÈ”´éÑ¥-àÌS	\0%=ñà\0ùEè\"RÓ½O]:Ô‘ÓoGe!iÓ‚”È\ntxSÕN­\"”ÞÇyNx4€QÙPû *ÓÒE;ôüÓ±L}75Ô#P,wtß…¼?íA4áÑØ²N@\$Ô*¥\rôsˆÀÿB¤B?0ýÃø\0‚èÕ5Qª“3ao#¢z:`>TKPØút5©QÝ”CRQJ{£±×\0–Ž4ÔÜ«pýáoSßR]\$‘ÕÇ‘Dð[ÃøÔJ' 'ÇVø	u\$Ñ\rRÚA@)Ó·Rò3cêÒ-µò?Ü#öÞ?ˆ0”žSžæíF•4­Q½G59Q`•GÕ3QÃS\$xÙRSõaoTEÂBÈÍ´°ý¤´€„?+hÃíÓSHUõQ]MÕ	KØ\n4Ð×CmS”‘\0N;ªÕP‚­Oí! \"RTûÕ9€S­FÈé¿U5-UÕTH(ÍÔ‡TV”¢\0J5U•N‚­T8ú•ZRð»«@,Rœ‹¤à&T@ˆèÇ‘ „u”K£6> ýà&¾ˆÿ®tQsPe\$”…UO;ªÀ%\0ŸV`	`\$Ô¢@1ÛÐ¾?ÍƒîÑ\$\nµJÔ.9¹WmÃüÕïWpu'ÕÙWä?N¢ÑR¥^ƒþP¹UsËCð£ST¥RÕ6ËTÍNGOSµ'5%V?%PÕnÈJuPcë¤ÏR­`Ô\\V<ŒåCtæP× dxT?ÓXõ<UŠRu e.•‡¤.’wà*Rœv )Q7NýˆÚÐ“ËUž­M&Õ„ÍOX[ÔÙ¹»Tõõ Ö\n°ýÑÖÇ_Q2Lõ£Òò9ôæG–êµh@£Ž‘%QÈÚ\$ÓZujõ¨TÏXeMuLT[Xkµ=V+Rýmµ³‚­V=jÔöTOT­m56Ö×Q}l•»SÍKýk£é»ZnµXÕ§[íd+Ö¨“ˆ\n•W\n\n°ûÔ6U\\ETõqÕ¹\\xt…€“F\n3tOW)KUEµUU¯PÝq•ÇVºdÕŠÑP\rsõÔ\0ƒC]t•×?IÕv5Æ×fKMWãé×>ºN@'#b=o£óPýF(üÉ8¹ÑY-uõ‡¤ñV-UÔ¹›]òCI8ÕÃ\\¨\nµrWŸ™ (TR?-Páª\$ Z3uäº›Bå`>\0®E]Tˆ#LêÐ	ƒþ£L¥)²×ž’…:@#íGõ)4ŠRÀý;ÕãVmD%8 )Ç•^ÅQõë#Žh	´HÀŽ@	ƒý¤Nõy4š#c €û´’XRí€'Ô7`\\é¨\nEÀ¦Q±`Åmõ]WùNd€«V'Z\r…5¯GXEjuTE9\0ÕTŒÑ-UB‚­O¥PÕíQæ¢65¤£É_x•z#¶?-ˆ6TE-4æ\0œ8\n  ÖX	¶#×ÍD€	oRALm\r5eG‘N	ÕVÄú64p\$—a9N¦ÇSaU?AªU \nà\"ÐØéò<µ¤£9cŽufQ_ý_¶0Ñ‰\0;ªCòTINÅ2 ,S”£ËV=Ø»d=Aà+Ø±JeˆéÓ½QÅö5€V”Íµï\0“EíŽ–>Y1H…‘@«¯DõYRYH…~O†©cÝGTKº„>¤\"£Ñ¾‘\r/UÍØÜ&Ôx’Ð?\n€/×¶>­—twÑ Œøü´¶\0¥eå˜qÔ\$ãE›”Û\$ ?%™´-Ù‰Pe™ŽgY}_-šÖg×¹E™1àY—e@0¶	Ô{FÕ\rÀ!ÒPMKõvÑ7Q-•£èQŽ?(ÿ•Ûg•\r‘á\$¡Y=Qèñ®èê<µh\0…\0=#öÕÛf-Z´®Ö£a…^Õ¤>ªAÖ³_-;Tîª’”HW±Zý@(ÔX'hšDˆØ€«f*JUH!IåLÀ'Çƒfh	4·[ÍR–<´?À /ÐKE¥v˜Ø>µ¤ÈßÚ)i¨ö¤™TX6˜Ò×iÚBÀ!Ó™gÝ\0 ÒG …Q6 Ñ4>Üx\0!Ú¡Bå§ÖC’Ô>ÝªÕQÚ™jÊ8îÕ‘Tàûv(¼~>ÀýÕöHCe¨ÖœÑ7jŠ3§¤ß`PÃèH23–²Ðòxû U›kÀ\n€:OiUŸUAÙô-xn“Õäé=?CéRMSÀûñÖQƒbx•ô\0Ž@õÍR§\0=¦`)ZzKPû¶¡Ù]lÍ³vŸËm³ÔM×‡D\r4—QsS­41QsQÄ‚nYëhµdö	ÂA`››	€gEÈ\n–½X'kõ‚u-SéO˜´ú¹²…wöã€ ‚S6Û™DÊNNlÓÑWÝ™ %¹¹l‚A\0+Û*KM²îÖClÔx &\0¿Qò4Ö¡UmlÕ!µoã“§`\$€ˆ\"3vÚ|¥3¶›Û;iÕ•ÖùÑŸm+§hí£L“%‘6%ÓMu3”ÏQ¥F¥4I&T£HÈÕªº§\\‹ªÔÊØFC¨TQW±LªJCèQezBÃê[`ê¾—#ime!hßÓ•^ÅsCøÓê%!”‡Yö+ƒòÓ‹JêNtMÜkXJ>ÍÓa e®ƒðÙÏ e|2Ö/q©SWr%£\$µX(Œá-«Wp'uE•7€ƒrEÖV¾%³vœ[ø?êCVÚVe’5ñÍIMDOÒQq2Lv©RÐç23`,Rp³ªt´T>Õ-Þ\0¥^…Ô´\\8õZ—s`ôÛ\0†ú<tK\\±jõh4W\0¾˜þ4’\\ûÏöð×Š“’JÈZ3MU²v^ÕÍVeeöªYp>•rR½RÔxõu[“UõXû×¹D½KTRA^}„uçÖS•uX¥^äxVÈTAVu>U\0¥h<yT\\]|Í¹5óØçv5ŸvG#Õ_53€>Ybà#ì[5bªD•hQ>íF”Û¯:NK<æ4È%È\0óR?IÂÌèø!Ž€æü :K ‚<].°õ]ä¥—P³² .Êƒª\r¨8!oFjwPc·}¿ú.ÐT‚;è`nâËÉ{âPi²^ó¤»ð\$>+\0O%Þ'„À€Áž\\Ãµ3ŒÁÿ6WŽ€åyÒ‰€ÜËÒîÞLÈH³7#`@„bKŠ7—Ýßy \r·–¤ª=å0²ÞwyhB\0º¿V¤ßîÛoTÈgs¼Wî•\0Ú¬H*R‘:z…é.¦^žE­ê7¦:Uz+Ò˜±¨0²ÃYuf=˜UbX€*\rà\"\0„éØ4åÇDåŠ·€†˜\nÕ]_EŸæ\$?EL´­Ò»k¥Ã´yÓ&(	´®Z{{m€@&†©sJ­Ö“KpwÒ!|e¢ÖÙÿN}÷ÅÝ)|­ˆ ß/Z‚9íÓº-ò—ÇV‡|„uƒóß4çEó—Çß1’NAo_REõwÆÓ}=4=\$åIÅ>XGT9ƒà7ÅI4Û=Ãá.‹@¨\rË±_Ž¢¡Àß’%úaÀ¿Ü\n€\r#<Mw°JËñ’¯”µï0ï%ü(—;7¤ZÁ+FHìØÎÙ¬‚Lc÷;À#ûÚj%\0¾MTÓI,‚ ðcÀ¨“ÃµFœ÷âüoD€¿•ñoŒzÇ;=£ÁhE¨YÁO	(1MþWwR÷È8Ø~íüÃ¼V§¥Io¿(‹²±rÀÐæd¯	\0ä\r»Ä\"?à#bá®ƒ“‚\"â,ÎAEÖÈ]qw!Ôwû—Rþñ˜Eî\r]ÿêN l 1À–ÿpe08¹ú;¢Žz¹èîŸ)…HçÐ:AP¹âçã¼äá€fæÀ5²Àè%SŸî€ºLÎãÛPºæÃ Žm‚jñ[¡Ž…¿@gA§ù:èh\$Â˜Ó¢wu:-wžÒŒFlÿq2ï—ÄgMâSW°¶hP¶ó¢Œw‰a\r.ü°èË¾aÁ'ù‹·ÖF9k„Ó¥Ðë:ÒõÞAŸ¬GÆŸÍpþF 3^2óˆ@]]ðšP`N\r	Tæ%€Õ€ÒOá	à5ÛÂáE·…«¥Ø	ƒbó¦×‰\"Vù<QÐÂ:ú†ïƒá¢Dj®ÔNé1&x‚Ø(þ€èÊk³Û†kÄ19„š2­âA°áÏ…¨Ç¡òa&25a\rx”	JÞ.ZX{Þ+dX7Š^Ð\$a~ü²¸U’xƒáDñ¸Ê¸r	U…Ð&áý‡ÎnNƒè^X‹\0ÊXgøW€ùˆöøUÁžíýŒ-ÀÙ…‹+ËÿC©.øTaª]À1úß¯÷Ù4LEñØÑNó’Ø¬!ï®¼@0Û˜É+œ7‰Ë®ãâhY6(÷w\0È«ß&°n7þØ§µ‡)Ze“•§	\08¸Éé‹½žb‚%Ø—7.\0 /ä›\0ˆ`‚’©4ÌNñ>74›³b/ÌÏ€¼À\nÂö\\5„ÅA†÷ûàZ*Þ&Ã¡0,-a¡	7ëúïOç…Ë*®«ã¡xŽÞÁºE«é“×¾‚\r€JÌ·;€\"øJÀìß…\0ï6c,þ@J`/¿®LL¤±qÎ|Søg™~²\nPCƒwÃ£ƒãG¸>ƒ>\0êL;Ä8ÝˆR¸În‹ÎÿpÁPâ^ôûº¯7‰x–àó‰Òß¸oábÈ3R0a”BŽ„ÅÇ˜rãºÙ©ŒFt›#`Ï€øcÄ`v Ú=9Ê'÷‘ï‡ÍÐß¯y#¥Á3€î[—®ç°qyŽ>À5„‹{[j·ŸäêÛa)”ÑV@Ž¸&@ÒÁ®Ü³¡m¿È\nÀ59ˆþ	'Ñ¨¶8\0EûªaÁAAÉ5êY_~^Añ˜ä&	¦!‘˜ºí`JOX)’¨höáÀ\rB I‘«yY(È,adà<€Û„«„!ªBÄXÎ\0ÜÙ´kï=MéycÞ\09…œñ\n?B.^Ct	`ßÀD:d	c8:érºw£»ã¥üÉödÄýÎL÷u+ï“<Qx„¦ÄO¨†ó¨73þdÜ¥YÑ‘rê}™dòØ@‡0lþ`V÷®:ÓxP\r·®JÑz\$Ü·¯aqylÙ9Gˆñ‹ùI^b\n(6K]Ý“>SN„o–S¹N&•ynSà<å:%¤;•6TyIåQ•.S³dåšV>ð²å#•¦?J]•Ä,¹Le+•æSÒ‘aq•®X9Pe•%ybea–UUe–NW9WåW–W9C^½ c·ªÅãz¸#™m@ùz†M™n^²Íé®…^¥•.\\¡ªFF ™Eñ2Úî”Ír€Q€\\Ñ„Ÿl…,ƒ†Ç\0\n9A…V‡±rNa``¢Ñt@‡Ì{ñÝù‚?‹„Ã‚=8IŽ5‰Ðü0y‚˜pÇToX¼ÆØübŒæ*m˜Ñ‹æ6dB\r‘æb¦=\0Â:ø°á.e9æX¾bÌw™_™ªwð@ã±\0kq°wÞÑ˜|By vpÒC¿s™¬À–Sú%9‡Mšl2À‡½šðw~!Âs&kY˜0\$/çfk€EþøtgCÂÙ¡ˆM› ôâ?û›ç 4O^Ôè!¡&€åˆŽg°úæà/þf1=«›V aE:#Ìy¡N`»)`Šë›Npò’ã\\.\"B»Aåœ¤£—úqx“V“ ™¬:aÁ8y¹f¯™®sóŒæœóŽy›7¯˜¾gyÊgS›&gYÔ5;€@ÅäÕc¬3æt™Ôçn]t¬˜o/7™­og¨Åà8`3ž\08ˆ“m\0€\"\0®æ°‰[®X¯ç?¾q™F¾Söv™¬B¡\nðZçÆÎ!AÊùšŒŒÖþo¹ƒ„šÃöÏC¬Ä-yñ:ÒNãŸO^xz¹‡·ë~¢Ž.Ñ19¢¶šký„D¸8!C˜Nônf¯ëâÀËhg\r\r(iâpeé²ß…<+#ø -€ZdJ…jÞh6îgAªXFƒî‚h4dLÿà‡hNè¹Z¹9¡nxÓC«ËP‘YhE˜~sá£`‘>F…kÃ\n·¡^ƒ¥}D)Zk§ þ,ì`ÜÞ§zÁ1Kc†dluf>û	-ÏŽ¾ºÉöqŸç#aâ“å›˜háPè`¾ÝþPÂha P`€8]Æ\nÖ‚`ÜæÜ3†a¡ýŸ`8Ú'»‹˜|0ùÈc‹ƒ1\08ç¢\0\"Z˜X†…dÇhV/hY¢UhM üØ—g9N‹açYŽÞs`7g?¤¨!ùØÐ6sùØÎnÞ“.‚?ÜÇVÒ¢…ÿ¥NdÃJ…¥fŠ„¢ƒ¡†sá¦pÔ¤\"KÊ.‘æDÏ{¡^…1´JB#þ…c¥ãiŸV…x©`<S÷dÃ·¦f˜šã¼¤ã9¤49/‘hy øn?€á¡\\<šF»c®€’:Fpoò4°ùÞŒ^+ÄÄÆ¼	T&:jhŒ­fdîþiÜ¸+2nÌÎìÞ®Š˜õ§v› ©hž(þ]“j\0å¤&Zm™ôNØ€ JýE\0ZˆS‚@ÑóíèæÖ%Ãƒæ¯>ÞÓ¿]í¤Özá9zôÒz²ªó¸::æ)0ÁPžüàÖ…c|hVääÄ`Íh?ÜÅÚd‹þþrÈ•2}ü,O=	ØŽ…yÎ»Æ0£ú•ë¤I`Ô	=ªX7:§¦äû÷ð_Éª°ÕzçG®ª8	ºðädºƒNœ¹jÑ ø¡\$ÛBo©)‘2¾é¬mn˜yŸK ü[Zé{¡úÊû«Y‘0Ãƒu”\r/n\0ï¦NOáâi¡œF±¨ãRèNœö:\rŽ…q‘ê’ì>©€É«0@˜©¿–N¬*tèK¬Ãá¢ëBñ[¢òn·©Tâë¼Np·hz	åJ¾êtdNÄDY>›ÚÈ”¡ªF„ ë8þøÎ·ºã8vÖ¸xk‹¥öµº¯9ë‹´]z¾è>ôÖ©0Ñ“‚Êd#àèW,3æ:‰/7Œ†FR¡fó{®Z=¤‘ùOÃ|hºÊcÂÀÖœ3þx†é‹îñ¯F„÷^¾Áˆr]t¯Hi.èuþ@ØÂA°\0h@Ø¹°ŸŽ•Òß§¨smNÃã‰y•çV¬F2†5ç?~ÞÂÙÔ†Ñ°fsú`ì[üRiÿŒ¨c”+Œ1°fµ@‡éƒ\n ÑúÁL^36Xãt9û=:õ‚(äè ;èŸ¨ÁSýF¶@`;ìx,>y4_ñ&†”ä¼Ì×ŸŒÿeÑƒƒ,çêCFL0\r‡Æâû°£úKêQ3æùl9øÛìÏš×Âöï@~»ÿŸóà2«‰Ô¥¡+gÁVøN^\"+ b_Fd¬H„ø‹ìëwÐ~î\rb¿‹è\"0@Ás³ñ18¾ìÞ²¦pÏH#:K—ƒ¢¬X³~è¦Î š‚›˜Åø…º›ŽÓy¾^\$d!5wt²»­!':µx©âÀîÕÕmT + î½O¥À5~Íû´>»P@ÃµV£PA¡Ž×¹ÝßÓ²&\";XhŠ~tË¼!)5aD€Ö3˜8'I×¶^ˆØ®â·¶>ÄØší°ý»l;Â“Aó×àèöÆÛŸäº~§;jÜ[>šmÓ¶ÆPÛuf˜.ÞA)„=·#Ùæmß¶fzáI¶ÄÇSmÉ¶cÓA+…®ÞDù`/¶ÄddÕê<Tìø˜¸n¸>€/ðû¾Ù›må9¾WÏäiŒ÷ª›,ÈI\0¼÷ñê™-Fä`äi6ä;”ë‡`„±{î[€©SªÂÁ±¹6ŽRj¥¦Û•Cå“ô›Ú#m©=9gWˆÅ:ghÔ&ÄÈ†€ù¯VË”I¡ºxÅ[ƒh¸I¡IÂöž½ZNm›®’û®îš±tW€[´+æ@k¤¹*Ú/§ ÷ÄAEw€L_8m{).Ïó¥-v\r:L½¹£†à·‰`-@íY§m£¹Þð{ƒhíŸ¼jÚLh|:þžYîÀ#@^Ëº<éÂî¾ò›ŸKs¤ÆÑ8¯è›F“Ëèõ@XD šj7¤½x¾ï:LNóïÐ9OÚOlŠZNsDàˆÿ¹†“F¾d¥ç;Ñì‹ÁÃZPî§@^À Šg47Æ“Û`8 6ù#.Eˆ£Ôß ÖÂi¤ÀS£.7ë†È¸Äãe¹[–zL4s™0`‹~ºw› –f›“>ä[áïÈöØ;ßã†ý[{Y#üºÏw¿þ[ˆI«ºÎ‘¨oÖ	fùYÕoÒü4Ž;üçÇ›ë•üoË6ŽÐTŒø”ž@©B¹~ê;U‰ î.åùþh¾r¾3…N·£×»ïî†î6³P‚ÉžÇ„µV0Ëok1ÁEþSŒ˜O¾œóÈ•ð`7øl®Ò…ñIOÙ«‰€7¹Øït€þ÷‡QcŸ9µ ëf-¯\0-¡\0ê®ÿšà/¸.‡Ùø^RÊf’û‚î½µÂÈ<-nÆ,95JÂcM«ÔÂèÂþv</h¸ïÿ\rZK\0ïœp\"FÐˆRó¦à¢Fð«¯þ‰Ü;ð®|nv<\rpƒºŸ@äEdí	ÅbóÃûðÛàhcžX+ÎÐ²ý¡Œjû³Ãê7™˜¬Gy/€…“ŒÛ‡hì÷¶XÀ°.nXtÏõ¸.sû^ðÄD]r­í~î´†1LC·@+@Ødƒ¥\"i!Oj¥»tH\"/¾Y¶Ž“œ_æ¬¸t\n³~ñƒŸ¾qÚ>ìÝ¦Ï[û!º¶áû»ÿ½oNî§Æ¦Í\0q¨V˜5˜,Æá O â„æ \\^¾b+b*ñ¼	{Óçc§à7roN!ÃÖqÜwÉ¹Ç‘OÜ;,P¶’à:b#3+\rèS\$ØÊÎû´píoK ëÁ§~Òœ…»Ñšx’š!_Èq-™§¹ûÆW`àm–‘xÂò9©Ø&™¨íý¤[e“ò>dI*€œáÇÉ8¥¯ŽNHz«Ö·—³—3Âµ—Ð(ôÐ¨-\n‚S/ZkË1(k5í!‚„*C!§(Hn§TD‡ ž©Šz-d‰Ð†ç(A¸³¬åíBõÖkµ@¹5— \0.²&!þcY­LÆ\"\0g÷)r,¡·Ë\"Š5çÊO*²'òˆÒ„|¤rÏËO) òŸ‡*-‘ò¾—ü€)×H‘Ë.2§ï\"‹–í—ràcàht¶ªÚ¸m€:`Å#[€M¡„š0@1·Hß#µdÚ˜óAC<mÿ\n¹Ì2s”s*³hŠ1¾\0¨Æ‘É\n1TÌ/6Ø=žÙK'6F~Š>x	ßÜÜJÖGG7,ó}/ü|à‹ù8¬Ñ²ÿ„óG9ÜÉ„?9³p:	-o:3ÃLÅÏ:³É‰•;¤”Sbjxa|îÍY+6Ö|ìƒvlÀœóOx˜¯<\\äãèw?=S]b/;’‹M‰³˜#Üøå\rÏŽ3œø†„ÏKt<øµxà×@R\\ƒM)·=¼çd¤7>3H·kÐLÜt:\$}	08ÙÌ/4\rþ¶­ÍgÉ+	Í3güËsTÿ5“5€^Àxi0–b\r|û¶ÊŸb€|Ù£pÇP \0”ê“ØÀì¤9, #ù¤9³hI	ºf¡ûÊ£6`Á¹½».\$µzöKW%ÈÂJ?¢c¨RMK>Ñ8AELÁÍn:a¥:ŒãÊP•Ì^_ =*Ûa´2GŸ—B¯&ƒNrÆ2ö_LëØnu!TÔ¯DÝVƒôÝiqd©9V]`\r€n©¤çPMáotõjxú÷ Ö)`\rv	PÛ`­µ#tëÓïNöØ-Ô•ƒ5šÖ°’•Òö	ØYcå‚µ™XùPåŒž£ÕDxTæÜãalxôãV·txö\0X¿ÔªÃç£µVõH\0Ø¤Žˆ #×ËÕÍkõXÁQÕF5|ÔU OW-ñSTê·W4~Úµ^ÇW6Æu‰X=94¬@	ÕÍ‰Ö(]oÖKÈÜÃiWW=Põ¹Z¥o}qÔyITvxu‹UÏ]]jXKT\rH\\ÝQEÇ^@,È×5XuG‘guÂ–Õ™hP	}GZGhm˜µgWhwönu¢`(Z[—WU_ÙGh‡b€ÚGØ¯S—RÐÛ[wX5ÝZ/Ø…aµÖÝÖW_ýˆuU%PƒéUcQÀûõ·TŸ[w[6(Ú\rØ‡[ÃìÚU[w\\]œRGf/bˆ\\§[pÿ½tU[ueý¢SsDcË]£T…Tg•?ØJ-¢uíÚm‡@Õ‰ÙMb•º\$-pÕ4•E£j=R™ÕUÇb=^u}ÛUµ¨V\rVSt]v<êVÈÛ‹hýeöØ\n·dýWÕiÖ•V•'ÕiÙ[}<ÈÖýX½²uÅU \n]öï]Ê]Åöƒhÿ]=ÅÖ_UíB½¦w%]ÅX^ö§Ü_jõcQ„êÕ•É7Ñb>ÒMõeº­k¥½•iPÛm•[Õ\0¤êµ_öêÛûY=vòôùsÈ•'ÖGr]f=Ku#h_Q’Ø; €ÿ¨Í£ÿxÖ>[ƒJ÷q5QÙ±KõJî«#§eýD¶S¶å×vÔÕÏf´ñV±Ndx4¤vU\\‡p}›TMj4vtÃvÓC—|½ïV¡ßAýƒ³‡a•ýùq—‡~Ú/á÷©Ÿ±?Å¿zÄ{Tucå›Ao\0´’•\"üé§Œ4XÜ3ÛŒMD–WYX“MÖ;ØåcðO×…`M¨ôÓH%eœ7c:­uò†	~Bê ;ƒO0›ÃUø·×YEÍ•¶@6×UÛWßœçyÔÁm»Ï‚´:ý=±ƒÍ˜2:•ƒ3 ylÃG,0-†]Žhènš~ø *Ó¢<áÊñ°>˜r”è«¢øA<†>_úì>i‚Þ\n)¹í‚“Ÿ.~†ù¢Žá;3œ…üSÍ_¼DÖÃBªfù|äW\nì.•`w‚\0#¸#>u~ÅûC	ê¦[®ç3;o šF¾fÏà!äHx¦Ê¿G!+@ööÆX¿ AäèÌT;BŠ¾â†»Bæ¤EiÏ¦Þ@ÅÙš†µ ‹†Ù~\0ƒ„ÎJ Ïƒà‹Ç·C#ƒ…õÜÊË	‡oœIð)ya•þJ»j2­ûø…<éˆ:}Ž âFo÷q“‡jx„¼ÄØN‚âöŒL¯@DêxÇ¡5‚9…v‡TR	ÃC9Ä©ç7˜_™éA®†P¡¥_›X|çÀ6#>^qñßÖÆO÷µÎO\no¢T&ÐdàÚ¤à„Rî.LâUgé—ëø¡w€•PV#ôè9*„áêÄT\$Ìº{“f]È‹’ÿ‘™p³gD¹.€<k¥Úca‚„ôäzkµ†3žšð16pYºvî_é¼3×–á|®Ä=Ì¤8àú›Cè…Fv„S““ƒ<3¾iêŽÏô¾‰þ«è«êy|^ªbzW«LNc]uú¯Ž&8ÙÈc‘‰|d9‹zÖèþ9N~oÄ±Õä®ƒ:è¦=N~6çæ=dç	<Öü£>M-A~ 3ºì‡âº]ìFü.Ã{“ðQPÔÃ-@Nl{Å?žQîQAï³A;€ñì_²{R:]6<ÒcÇo´Øô^-ŒB¾Œù9Ï°9FjŽc–šŽAÌÆæèa³N0s5{w¥_·³Ð@©¹~ä™ˆgÀï¸¹õ{†`ìûþã{—•\0XÖ:/ä¼Ž!&él¼íPµù/)µ¡ËPÝ)ÍÞì‚ØÔï23Ðnr¯¾‹îÔÁ¯3ížÜãmÞÉÅDí–1|«¾ø\rÄo½¢nì›ï¹•þöû‚¿{'ûú>ôþû|ïž£|Hü\rï—’þöÂ eÃS¸E=´Ååá=Òs¾vscKð³ÿ¾KËO¿Â¥Ò|:Ôï8Æ|7ñÃÓüN:gÄa&©ñ ¿F}5ßÅÞÌù/…ôeÚ~CJ\"ï¼`/á|Lbóî_ÇÇŸ!­06 ×|{…ó*¤ªßåÐB#fì¬—_\"µ;…ö12Âkëò¾åòIü­ðN÷c\r²ù„íG<77GÌ±œøü3›4ß4·;{ƒþÜâ\\†žâ‘ÑgÇ¯üA?¸v»Ây.eøYþüïñéCCfçµï’âµ|ø[ý?DÂô_Ñ»;I›Îù/ßÏÒ¹Ôà7ÒþÜ}2ÔîÐ%ý8ÔïÓù²cb§Ç¿Ræž÷Òòr\0Û½Žê~KìÅÆ³ðß?ìû3ç[I¡¢¨¼q°µ;¾¿Ì?\\áÎqSoÍûö“Yß}	 Ñi¼7ÂL…Äî5>K™Ñöž¿Üz—1Ÿ’üý¯3Û:á|{öðŸlz±ÂÇ?nfé÷/ÜÿjHúÚßvom÷wÛ\\\"|{öÿÞ|1ç¤tiãåæ¼^½1eïÓ|ä]8ò±*F¸Ý…=/FkþÃ¡/âáøGáÀºïÛ®Dåñ~Ñ°%…A‹‡âŸŽ³ù€[­äåøßáà¬…£\$Ç›û­m¡ù8%_„þ-ù—\0z`Êó¤ßþS\$»ìEIù¼eŽê~Qø²i ú~{@[§_~gø¨%Žx„­´Oã_˜þ™ùáÿ§rk<§™¹zE³¹¿01g¿`1¹¾‹Ò®»Á+Gë›7qï‹›Ì8¸;ç³ÇŸÚèÄ´rzMû=ÏîéÅ×(O~{¡þièÞoòé×ïÿ¢€Ëú95NG T@¢Ïæóåy?Bù\\	saïÇ1‡”\"Gì¸™:hÇwÏéág¿sî/“x5gá\\›°ànÛ…8>·îÚŸfˆîÛ„”\r_®„‰ÁŽt8Ù|ñ¶ÿ¥ùø\"Mf¿ß­†€8 =\0ôpÔãÜð¹ßá\\ý	oøE»žgOÃèá…Ç«¾¦ß¦îÞ{©Èfåí\"+øÀîn‡…”éë.ÅÏu”µ€<öN“Ö—»Á²»«ûÛÒl\$tðv¿gsÂ‰Ÿ{´ãŸþzçüTÿ'—†üIè\"…üÃ„dÒ óÂŸ†x±^z\$‡m¼Ë¤û§í‚·ÚAŸ™ô!þLD÷<bg|ƒ‰y,ÆºìÒŸ%C¢Âî\0ì@ôé¦‘cÛ) ûvô/Ã.7InD±+;Pœ 7crF¾ËÏ\$.ˆ¯`À6€€3±ìióF¶€Ù¸¹>D6ÉÉ3ìSóëÓQ^&|–Ûø¸'»ÏD‚þ6ªb’˜Zò7º˜à2¦Ý>% Ç¸ 0„&Ô=ñàqÝvaíö‘«08zˆ\$x	bCþo&þ=¶’ãì»jDïMéÒÃ1=jb0á‘d†û¬¿[K¸»jó\0<b1ötMŸQ°¶—\$ÐèãOÆpBßÞv0@0ß¸èºqHUŽG\0|pPU±áF+ìñ#õ€>ý‹p‰pN¯´+h¥¥[kÔo@nŽ5À!’0\"&qÍÐÔ³•þÙeû‰ˆ¶—ŒêI+‹bàt£(còÅ¾ á`Ýõ€Aîsï¡SIŒ8qlml\rÖv,çØAÛN!pðÚw—((˜¶²AqBú¯sÆÀ€¤dõ¼™~ ÌÄ#VvsçB`|?©jôÎ¥½æ2?E—@ûTÞ‰ç¹Øh ÏÄR©>Ç~øÕ½ð‹8—¢-ß[Ê¿g>eòª]H¯Ä\r³Ÿn>zíœúd6Š§Ä›¾¸Éc^Ò9L˜\"uœv³ÙÈÇ3ç­ÔÙ\$ºwèóQ€\r' ,YøÆ=à -*èl¦û?àxžl²_½Hº˜¨ŸQŽ´—jVÙeý+QHŽ §¥¨rO±±ÀÇ§m%àQ/ò‚šÐ„(! ‹¸Ë@d”ä1èÐT0X =¦=oažÚ-ˆ,Ð[h¶ù½¾ òz\$‡dÁy|ŸÌô³xt;p_€Ž.?ð~ ‹5\0+Á×ã>Ý­úpêa6À“L8Àt;H«0ÀPeAŒ;ÏMðü5ÆâÁ6ÕpÐÝL\nðÎjY³„~^yê\rP/àhvàÖ3-i/Õ@üÖû°m[¦|M	ÿ\n6çK¡‹Ð#1hFTÜ)ß˜(DìmË\n=%½u#\$N™émÞÂ ˜:ÀÙX\$>ÛO´ÝøËÞ\0Mæ\"¸Cq4ÍÙ§ë‡£/O\\K\"ãd(ÝBx=ˆÔ[ä‚Np°ßI†“dVélÛRyŸÒ}ÒÓÉôˆW÷â|š€¿~¬ýB3¡Ø1LÂúÂ	˜Ý®bñ×äOÕ›µ³Â:]9Åƒh#»†ŽRÔ?P„69‘†ØŒñ³\0g„8B.\$¦†{`Ñ–hŒõ™û?öhçmG]n‚Q8õ¬	¨FÐiZ	7qìÏu¢yãxF¯ñF±+·ö 0qëÀÖJšvð¢+J2p”ŸþŸÛr‡Ö\nì%'’œ?Ín°håèÉÂFê0˜F=B'~ ×ŽÃã\nÌä5„2|e1“<ä\rÐ›À5Âqn‡	Ò‹f@>­™ƒe1h‚\$”‰sX3Û\r²@‡µÜzº+é¶©éÆ9¡ '2ñGüèÊä…åÍa¹FÜÐ¡ˆ(ÓT)\rJ\$7GÎkËÚD9£Ñý)\0€\0œ\\)f“£+œ«(Y\0P¤-b’§`ŽWM’rÄPŒc˜7Ro(Ir¹t(7\n`Ôü) þ‰\r’#è5ÆåIËø/70 OÁ¤S…X‘=Ì:EˆVð«*š·(‘IÌêr¤0®\\Æ¹¡t7hqµ§5æÛ“‚Iæèe#Ü-ñŽp¸“—­J¼”tÐO ‚{¤¢…Ý%&ü/h^\":w¥…Ü#¡&º…\"HÐ¾Ã\$¸IuÁ£€Ž„¾pÀ„ÏÃhàù*y¾X_âƒ¯C8Y¹.ü1T³PÄ¡xÁj†4˜)A·³Ó‘¹ŽsE€\$qÀ …ÀWSµÃPbbVcàd.…¡‘¼¡rnœÛ´.¡•Ð¸œ‡¤Ç†A¾˜/3’®!’—†V_ÃZH·Mg-Ô+Â’…\\ëÉRS¯µË…ì’qZÊGØrÕQNØa«*ÐvúëYÜ’¤¥W®æ[»ëVèî•Nb¬Çu‹HÉ)(y\\”1ÝÒ@ÕïJÌä«ÙY~êµ`²‡z ]ë©v £çBÖ%PVGvêA`»¾%'ª°Õß) SëZR˜•™Ši”Å)5S¦áD49Jb”;)3‡,¦9M46E–Pß”˜Ã›‡&¢ª˜Èt\nÜÔa*\$unAÕ¢£¥½êŽ–åºôT¢³Ä?âÕ%©Dž2‡×XÎtt‘Ú…Ÿê’ÖTÀ·Yh‰Õe£Æ‹­&v’³‘\"ÍpûK1–d,ÚZQUfšÍõ¥n±Ý°­q\\þ¡\\6\"DJà–§ªŒZ¤´UP\nÆT‚Yh)’U’¹¾Zæç`ÊæÃò­qUÔµü>¢Ø5°¤iÍ£­ˆT¢ëIlrÜ•}kiÖ}‘ŸÈ´U_*Ÿ´Êï”•)\$@FÅmr­ÀúJ»VÞ+ºVhï-cJé³ªËpÈÍ­Ë[¤ì0?¸Õ‰‹N¬\\xþ!9Ô Ñ\n—‘œ:„¸EYÒ‹…¶\n.§V…`?ŠâÂ3êM€>,[@´ir>5ÇÊ|D‡Øˆ‚¬MYB”Gxë“Ö\néÌ°qhÚµXsÐê—Q«×:¦º¹hùÌÕ×*5ì©ò]¤@ˆb“=ËËÅG\"ãsøxZü†G@”Å¿¶Mš›<óªW#¶è^ÂD=ABxgÄG6'M˜Ö‹âCt˜[úûä,«ð<'äˆ@ã¢ò¥úLŽ˜\"µónæÞÝ_%üÑ[º8…f:É%¼ð¤K8Ÿ‹=&­â™Ðõç¬‰03`~PŽ\n¢.àÁD^±í^õ„“œ´OàA\0ˆ¿õ{F\\d V­\\ŽÃ=vc´õä	SìF^(Á_¹?tÚËâ,*æ•ïÍÛ´\\gbÞ²‰Í¢JD¼Dãqö÷ë­×™Ø´¶ØPuxfÊ, ¡=°×œPd´håŠ i\$å€dzÖè4}èU~(ý1¨Abg1 @¼júíþ[dðZã†™²0œJJ×î3v¶öLò›¬@Iq&%ŠÌ&±3LJ¾‡Ln„€u%Ò×®€Õ‘ûƒÏõéF7h.˜«/ñLnú¾'{ÿ°Gp•O¥ÁâL0|Åî¼Røð“Û/¹mn|á©k]\0%«ñâtº€Ëí…˜DNN›ñ\"ØnìÒ*4T2Ðbâ‡3÷t|™Œ eg½gJ¡žOŒÈ¡,A(N‡©‘Š¶vF@ë§\"gñ^oÅb;S’*\0â†_nLß95…sTÑyP0fxGé‰æŽ4œ)D|.]MŽBŸHt\0¶9²8®íFa`‰ÍH“\nÙ ¬X8+B|¡k<\0»\n¤ž)«8f€’bÅBèHÌ9Ì âÊHƒÙƒ?,–¬| 4P¸Á‚¶1’\nPs˜\0@%#E¤¸€ \r\0Å¯\0ç¨À0ä?\0Å©,à\0Ôh¶Ñj€\08\0l\0Ö.[±lbäÅ´\0p\0Þ.f@qn¢è€0\0i>.\\ðu¢ì€7‹uB-D[pnbãEÙ,à\0ÈÌ]Ð ¢ÞE¾‹r\0Ú/l[pà\rÀ\0000‹k†-P@\rÎEî\0g.ÌZÈÀ~\"çÅÿ\0q&/©g¼À\râëÅÉ\0kÚ.D`H¼‘x\"ÞÅò\0n\0äœ`xÀ‘m\0Åý‹å”a¨Â K2EèŒ#Ž-\\ZØÄQl\"Ú\0006‹„\nPÿ`q„\"øÅª‹c‘4 Ñ|âéÆ'ŒcÎ1^˜ÂQlcÅÏŒ¾1D^xÂ‘o€YŒ… Ì[˜Äñ£ÅÙ\0s21\\^ @\rbìF‹ö\0Â2D[¾±Œâä€7‹z-À\0±”âñE¹`¿/üdXÍÑ˜bñFM‹&.ü_xÄqw¢ÕÆ5‹çÈ¡! qˆ@EôŒbê4\$]xÉq‡âøFŒ%Ú4\\Z¨É±xâõFŒ÷Ò.ô]˜É c'Æ1‹ç ™„`HÇq™¢ìÅû‹Y–.,gè¶€ã6F6Œ¶/½‚ÀÆ­‹½z5bˆÇ`\r£GF(JMf.Le±§@1\0005IÂ5´eª£(Æ‘‹b2|[à \r#5ÅêŒ1V0|k˜Å‘ªâê€49U‚üg(¿ñš\"ñÆmš5äe`€\r£4Eô‹­F.”[¸»1Œ¢ÿÅêåâ0diÈË1k\"ãFoŒ	~7ÜgØÛñ¾#oF™Œ½þ/4[¨à1´ãÆI\0i7\0XÎ‘n#LF¥\0iª0tf×±l#Æ³Œaê4ü[HÝQŒ£FWŽ'Î.\\m¨Î±¬£‰ÅÏ§ú30(ÏQo¢ïF\rŒ	N1tp˜ç1¨£PEÝ‹§’.ØHÒ1lc^F~‡Þ4¼_XÙÑqc*Ç7Œ/:/ÜqxÀ1·£rFµ\0en/H¶‘®OùFŽ/¶.ìaxßqr£ÆV‹ò4ô_ÀÖ#F`K‘:]Èãñ¨ã«ÆíYZ-ðØqÕcjFzŽÓ;0(åQ€Æ§\$Â.´f¨Þq™£XEÚŽgŠ2¼lh¹±Çc°ÇZ‹»n3ôl(í‘Ë¢àÆÝk&<ÄkÓþQoØ/ÆÑ‹Å^7¬j(Á‘œ£G#‹y\":sa±â#ŠÅø‹¥ú2L_hà1”£¡Æf-2¼zhµQðcáFfKœn¸ññ£ZÆHŽ»\$Œn¸Á\0IcáEÆŽ×ö64}ˆú1ÂcG\0sò-Üv8Ó‘˜#nÆ¤ŽoR:är×ñbã\0001ŒõÂ7|lHÆQ¬£‰FŽ…2ärxëQöã¹Æ@‹—š8||¸íd½#÷Çˆ‹¯Ö1)fHÁGãÝÆMŒ‹7\$c¸ì±¿ã3GÕ‹õz.l}øøE™\"ëÇƒŽPKÒ1Ìaˆ»ññcoF”Ï b=TaØñqä£ÃÆ„,á>?„f92£QFWŽ‡>?4bˆ¸1”dÇ'‹u Ò3Ü|˜Êñsc‡ÆÎ§6Bmèí\0¤EÆj=ÙfHðrÇ>«þ5dlIQ|ã…ÆÆÉ^9”c˜ÔqtãýH;5äcèÇQŒãÇÕé!.?œ`húqçã	HYÏn.|ûñ³¢òG—´aˆÙÑÍcXGóáÚ?¼tè¾àd\rÅöŽIz>LdØïÒ\$HÇWŒ­¢9ðXùqÍd0È-‹·J@,†ˆÙqôãÔÆ(¹.:Ôx8Ä±Á£=ÇJŒýÖ/¬gˆíqó€1G¤Ù\"^.dsx»r£HFó‚?‹‰Ñï£XGz‹W.0|v`ˆŒ]Eð‹½^0\$ZÈúQ¾#sGlŒÿÎ3Ä[ór\$?G±\"Z0\$dÐ‘‘bïHtÁ~@eyÑ’bõÈª‘\"61œxÙ²cH‹‹Î=,c˜·ñÕä)È\\‘}\"ÆG_¨Ö­cäÅæŒ;V/<nØØrãÛEö\rÎFtpøà1w£;ÆCY\"¶3TŒ8¾±õbïF8ñÖADk¨Ùr&ãäÅåE®>¬|Ñ‡#[GZNH¬k¨ê2%äMF´Ž[Ö8„oˆ¸Ñ“c\0É;‹mþ-œ’øËÑšä„F‘yJAôl¹RMdÈÉ\"Þ8\$n8â1ÐäÈîYŽ0|ˆá2\$Gœ–<,™ñ¾#aGPŒÁ \nFtŒR^’£(ÈŒ 6JÔa(áñ»bÙIaU#®3hXìq}\$˜Å©ã!N;\\â?2%\$¹Ç›‹UnG´˜Ã2&ã~Æ¶‹eþLlhÌ8\$SGjŒ­bB\$w¨Õâ¤®É\\Œ÷>Lôm(Âò@âÜÇ›Ç†8ôg¹1ò!cSF‚’#\$òHüghçÒ\"cE´“ò:DsHÜÑº£ÿÇ‡Ó~HÔ›Äqt¤ÔÉ~’60(ÃÑòbÙÅú‰º7ÄdIq™£vÆœ~-ÌkXÿ’)¢ÕÈ‹ƒ\"²N4’YòI¤ÏÅúŽO¢Ex	xd	Èç“„É‚ü\\xá±˜€’G%é z6rØíq~ãpIÎk&\n=I=±´¤%EæK\"ÒGÜ‚	²#]F’'&.l_¹&ñnc\\Œé—î/[¤@’…ãÆíÙ'nMŽ8ô°ã˜Fì’Ü’G\$”Þq÷äMÈ°Ý‚<œ[˜ÓQâc2ÈšŽ%‚<\\Y1Ãã“ÅÆ’&:|q™òCcÂÉ-%é'ž2äƒx×ñ¼âôH|‘Ç#ö0ì€)b¤lHXŽ×ªJtš¨Ír‰äeÆxŽ%#Â3\$ØèR5£ÈSŽ­!ò.´¥(ËåÀ’GÓ”Eþ:ôl¼r	\$qÆŽÿ&B1üa	råI©ŽC„†ÈË±žãNJa“‡ÚBD[è¸²XäŒJC‘MÆC†ÈÕ‘©c[Æ‹á.>4€	#Ñ¯£5I“ã(Î6¬z©Q1x£èÇ;s(‚3l‘I]¤ÊÈ*±(*T<xXå±Œ£÷:aP’ü,¬4õ½êHã¨–P¸¤áušÄ°ü¡óÖBÏQ.ðEI¸U‚ë\$¥e*FT­@>™%Í+åf’\n•ž±Qnø-å÷²µU#«ÌUº£Hj¸—]Ò¶À:þx1+™Ûk¬'UKçVmC£•Ð¡}s)ÍØp‹V,‡VÂºT¤7ˆv.«QZÊåu{+Ð\nD¯§e¿\n¬px.°|À\0)Œ}I<0\0„IÌZÆå\$k	!µ¨ñYh²Í”°€RÂ‡d¯Q¾¼S°%.Á%‘­9•Ä©bW\"Öÿª¥\0)€Yv*VÒÜWXŠZe–Ë/:õ,ÅO¬¯Õ¡áô”xÃ†Q!,õ`B‰	_. %©Å–tm•\n“²JK¥VÀ­y}¾ÙMµñ,€	å–¦Àl+qap0®ÖÔ’;]R ¼ü#(‡ö*^¯º~–Èï >ºµ-T¡Ñª‰#8¤@°éY \n!ô;Gvž®æÂPjŠ%»)9‡E-îV:™òºUÝJë–ö¹¹ jÛD‘ˆàK‡wF•ÝÌð0 R%È­ôU’Fü?[«¥Aï–DTwP¸£ú€Q€Â¬ú—<«É”aÇ1>@Na(2†¨¢ycã±ÕhºÝ•ÊÌ\0P¢:]yWƒòíÔâ¬3[¾<¤@‰àÕ%»gB»Œîp…½Ê;ÔHKsWÞ³…àÄ±Yr`fí‹']Ø¼¬\nbUˆ‰%Ý©ÊS2£ÁGdBpjŠºebËäRÓøó»YZké”µ\0U\0„ª4Jçƒù•Ú¬–UÌ	dÒÉ•ðŠ'TˆH]ÖŠÐGœJUØ/ vÝ.ÍZÛB%ûì’×	/\n±í¡Ô&RkÁÁW…\\ ¦Q rùÕ^²ÊâÌW\$²Yp~IfæÌ—ä¦R;eK?ÔÊ´%B¦QQòø±-+€Â«,Q¯Áfòˆdê‰¥rL6–Ò©îW±Iƒs&©¨\\˜¹ÞaÂÒ)‰*/ˆCˆu1-ùÕšªE~‚ÞVs,D*26¼&ÌPu\\¤aC¼•;Êd¦1¬3ÎFÐÚ0wƒÿË9øD2²g„·&Èl|^ H¨¯.c¼9p0ªýÝç;ãuÞ\rQHòœ00¬.ŒôÀ¸†–\"dÃég€a]é»U\\æµY{œÈ•{kb–«Ý\nºø¢»Åé€ÂÄ_™2¯¡Fð…ÙKí&N¬¬‡éa[´Å‘ªg&J!ùG”º-\\b“·b®Ý‰Ì‹‡HíTŒÂÃ…2ûPÃŠvôi ynjÛƒþL!#9,Þa\$Ì7bÃæ&*&[,£:fS´åkÒ´VÿÌ»™e3IZú<yqª7ÝŠºw—˜³’e¼ÇàúÎ½‰<*Ò\0 ¯ §P	ê0WÌ¾UßrgrÃe¥ŠÏVŠº£Hf¬¸i›“4¹+ZÐ¦6_”³‰ž+RV¥ÌñS%,ŠgÛµUÄ‰%ô‘å™ó0&hLÇé¡n¨ÔàÌ`™Â¬QNº’Yv!þTjÌñš32QRt9	¢3FÄ’ouF¯-ÝtÑåÓD&‹¨qˆ°¢\ni\n’éž*5HØÌñ˜‡4\ni¥U8+­ÔÓ;S™â¾•}¸·o3E•·M@Xj¬Bf»µUU‹¦¤Ì~RA-6iÊÊ þƒ•*|Ô¬QMÑYxsTWÈ£ÀTpºýX¢“B9<f^Í\\#¥2ÙÙÔÊh\nÞæxÊßT°µ*g¬ÖÕ¼ó=%¡ì™ï4>j#³ÕG³Uæ¶«Œ™ ¨=ÚÌi„`\nå”»=\0²¢[’ø©«ŠiÝ¢K›4újâöi«Š±æxÌWUÿ.ÕgÑp[È~•\r«{u6¤’ÑeV“-^ÊÔ–èí’eÉ)™—sPf²Í§wÖŽÌ?„Ì'}Jó&bË6Õ4âmr¼É™Š]]:’Q™¡6ÍZÄÍI}rÜ²LÙZ7[2‰©›êýUZLãQDstDÎy¶ê©ÃîÌìQ}-mÛ\$ÏÙ¹<¡îMt™ì¹¡aÌÒÇn3<À«Lÿ™É5W#·DKRƒèÍÛšïor©õ’ú¦ðÍ¢vÉ4MQâ¡×ƒ\n­&Í&V±4rW”Ý‡}sI8M1S8	^dàI¤á÷¦”ÎUE1Jps­Y¦S„VKœÝšk8Ri¼Ì™»hê,SQf:nÜÔeó³PæAM¹Vn¾²_dÔ‰Ä+‹UU×›·5>n#¾¸wÓU& MWV’¤µ]üÝµcÓWåpª§X‡8èŽDãy“Yç!)Lvw7mÙôä‰®`U¦¸K?œ)5¹Q4äÙ»ó>%õÍöw×+~kääõxr°§\$M~‡Ó2Fr|Ø)™a&\"ª´–[6\"YtÝµ4ðØÝ¨KmvÉ8~r+¯™ºó‰¡Ö)yœ)6YkÂ¯Å±“væÎì›<¾‚má	XŽ»¦ÔÍõXk6µÕÌÛ	˜*1–AÎ„–k0Šs®IÑ*ÏTLú0¬>ìÛÉº“o¥æÎT°·¦V”Þ\"°&o-™Á:’g\$Ý3:&uMÖ‡Fë%idéåDÓ?fï*šï9Vq,ë	»³yUQÍ\0—Ù:I×ZŽÕóB'Kª&›ð¢ÂoÔë%\$JI&;jW¥8v,ì¹£S”—¨ˆuÝ8)]\$àÅó3µ•,N\$x0êåO|ì *ÓM'oÎÁœ39’[›«™Ã“OBM¢ª|Ü¾ÉÛÓ¸•ÌÎñšƒ8ªväÌéÅŠCçzN0é8Îcôå‰Ç«ç§M[ß5tê–‰àj#•(€_;qÜð©¬3ç|¬™Bë†!œïIÉ3Åf Mo\0«5Æxâ«UO“Ç¦zÎ¶›Á6®uÌìàS¨ç•M{ž;žv®éÑó1æéÎèè¦×”Øéàód§ƒÍ”žC9áWÂ§uVS½'>»ŒT]6}ÞJ@KðýZžGÞÙ•„kOV#ª\$ž¤H\$Z›ÓÕ€(\0_V&¨?h	3Ø'‡ÏGƒ6ÅF2Ÿ×pj,ç°K.Sè±‘|öiíËqgµJÑÒIÆvøCšê‰\0+\0GYn‰Ljèd\0Õ1\0M>ð‚dÀu†jCWSO\0†amU7ê<XE­îQâ°¾|º¢¤JDgÁÏ…Ÿ.©r|(÷WrÏCè-Q–”¤’W\\÷S0Èä\0_#6±<T³Õ¼S×Ôo¯¡S¹>ª{dûUYÊw\0)€_™º‚YèäzJ©'ÜO¬\$Hë.l´¹ùc%¥Í&XÈ8ü‰SígäÏ‹Y)?ZUòçµ 39\0/¨ž\0œ¹õA¾%ìk2ë© T=ÂÌ%›K5&ÌÃÔ^Ê«u{¶É–\nì”½-,[¶±–_ˆ}	ýÖÖ–OÅŸër~,àyn“GóO±ŸùMo|ÿõDi€#P\nŸi@>’øÉþ²Ü×µOû–è\nzñ•/@–sKg|³þm¬Þ’7ôÀ,Î  =3‘gý)¹Äv@,©ô‡vµâY­ª”•±P&–·@ŽC¯dvs9ÈÔý–Èêñ¶BCJgTâÌX–é@0>šÖ…\"y”QP  c1‚eÊÏg^Ð9•ÉAEgú;\$x4%‹¼1YŽI¦}r˜%24×iÍ;SÉA\\õå;j£å¼Ðd[¶§úqmº\rÁÿVòO¹ ½A¥s¹¾J¥¥ÃÍ™Të@Zƒü¼¹Ú \n(?ÐTê¶2„¾š!¨E*²Ÿý.•_MúŠ÷áÑ¬ú[×;®ƒ=@úòÛÉ8K§Xå2QM<à©—aônÐ’œ<®„”»ÐŠúVŒ‡Ø\0š£BZ\"µµÐ3óhN…¡U\rá`Lß©þjí¥×‘œX¾´zV,»{t/UÆ¢H¡‡BÙU”ãšËßÐ_R²ù`rÎuAô3ÝÁ€MŸz³þ€ÊÈ 0«ìÖ‡Ò¡¦´™eìùjt8(l«ê–â²ötÃIyT9çç‡ÖXC°?ê‰©{jK§·Ð’SßCÙÖµ5~ªr–žÍ±œçCð•:È…xt<–pÏ½\0¦©ñÕ~I˜4?À)ÐÇ—”N_RIŠVÄµKãnª±B‡‚Ê´§·Ðˆ:°Î}z½éÚ\n5@’Q\"UÉBInÌç0ú\"ZfÅ\0(ãB\rið5E§Óè”¨k\\ú¥ÖÑeÚ”€*£Ÿ10=”z@ÝÇÍË¢„¯ÑeŸ©yë\r	!ÀY|¤|â™J)´8g¸Ñ¡ËEHúË×gÔUæQS¡%D€\r5Â\n¥§„Í`˜<:!õuÑè¦(lCõ0¡CòË…¼Th¨UÉ?êw\"úµË”—Ò)\n2¾‘Nlùºªr–0*9È¾,?Lç26dÔå+èXŸ9B€x\0\nà»¸_FN‚ˆ5BA„ƒ¨‘¨ˆ¾MBš¥[ªàÕøOá£J:‚2ãY•³\rHß­„P×0áZù&5Š‹¨Ö+˜›\rÊuÄ˜‚Êü?î˜¦ºbšÝª\"t(àÊ½‡¢£N{ôÃU(”Kh­Ñ¢·@<?j¹îó(;NP¡\$ê‘ûéþ\n&ýQ×\\™GmP‚¼5;Âƒ€An8YiNCÒ,I”éÏež>mUÚ›¥ÑK¯•CÑ£®sžc1 ÉlÊtÕÆO½¢¨°e´€fÌ­WúUCÂé}Ë’gƒOžS¦«€²¦%[´WRG…=Æ}5Ñtteî\\INòŸY’k1)Ñ\rQæ³jýÅBÜÝ{)‡žíH•-\"zDŠtÔú¨ £µ9Î{ÄÇyšŠM”f-„]2¨>d¢Š(ts%]Ñ\$ñHŒ?%\"•†n¼ÖÍ#ÒT§@¼Çwjt§8RœáBIHñrBÓ\$¦ÓÓw2!\n#4„(®¾›2Y†ã\nãÝn€Ø‚ŸEÆd½&4šÂ/€d£ËGœ[XV%´ž‡½ÿŠSØ*í÷o¿Qƒ?\0r€k`s°Ø¯0¯Þ‘%âÊ+á¬€Ð±’Í4âfyG¨‚ƒ\0\nÀÆŸŽXq3`“`f€Îž¥D9çàä‚¶iDÅ–PTddôI³àÍá#’?¹¨x(Ä‘ŒÀ÷YTt¢€à£èÇ‚\0aÒÚPàæëd°\rî¥’”P-­,ÈºÔ³’lÁ^ð­-@=ôµ©i\0006¥µª–¼|z[ô·¾\08¥ÇK*–ˆWÀ4¹éhØ¥˜’—aöÅô±œÚ¥«K¢—u,b¡4){Òí¥çK6—å-º_¿éiÓ¥ÀBœ	--š`Ô·)cRÞ¦L˜DhZ^ …éˆÒæ¦Kú˜.ºbô¼©„Rð¦7LR<úbt²éÒû¥íL\n˜Å2k4ÇéeÆ3Œ›LŽ–2êdÃJ©~ÓŽL¾™e-fôÌégÓ6¦Lž˜=3p”Ì)wS7¦M–å3zaÔÒ)ˆS7\0oM1}3zbÔÓ)ŒS7¦5MR™õ1êkÅ#lÒõ¦iL¢˜ämšg”Íi®S?¦¿L6Í4:g4»£lÓG¦ÏKr6Í4ºmôÄ#lÓO¦Ö¾6Í5:ntÆ#lÓW¦÷M†2h\nj\0ãÓ\"¦ïN@u88¾´Î)­ÒË§MŽ›1JqtÊéÆÒÑ§Mªœ­.êqtÛ©žÓ’”N*—8zqtÞ©ÎÓŽ©N‚šÕ7úsÔá©Ì†/‹ëêE9JuTé£èÓ¨§9M’¥7*t´´bÖÓŒ§gNð	-9\n`ôïiÙS»¥ÝNöœÅ;ú]Ò.é¯SÆ_\"îž-ÉtñiÜRÑ‘wO&žpùtíéÈÒË‘wNêž­<ºt4ëií%§IO†ž}:zpñvéÔÓÙ§ÙO6ŸE>ZvúäISƒ§ÙObŸ>Ê{”ÁéöSà§»OZ2m7j|”û)óÓÿ§Å’Ÿ´k*pTý\$åT	‹ÙP:ž¥@j}1ÕêSû§¥² u@*yUêÓ¥OÂ ù\nTôiˆHR¨#Px	-?Š„2ªT%§?NB•Aª{2ªÒÜ¥Mú¡8pe™)ÖT¨EN&¡…?Zˆ4íj!Ô-¦1PòŸõBˆµ•ãIÔL¨Q<DÊ´áÂ¾S¾§³QV¡%1ŠŠµ	ér%¦O’¢­Djc•j\$Ô]§ÇM}.]<[UbûTkKP¦£rhÚa5RÜÔ/¦OQ²¡’jºŽR2ê:%Ä§ÕQÞ£}>ÚUj¦Ö¨åOÎ¤Hz‚5j\"T‰©	Or¤e?ê‘•@ÔŒ¨R2¡ÅH:Õi€Ôi¨§R:¤Ý9\n“Õ\"ê7Ô©;R–¤…JZ’U)jJTž©/R–›ð0\r1~£±JŒ©=RÆ¥œbÉÑ¯j4Æ3¨ú—RHuKó–q}ªQTo‹§S\rÜˆŠ™\0ãTË‘S:-ÕM\n•õ‰zTÎŽSZ¡F™u5ªRTrŽµSZ¥MMê•u7ªVÔo‹¯SZ¤ÍIZñƒêgEÀ©ÛSv£¬[:µ8jxÔã©ãS–£”eÊµ:j4Åõ©²§ýLZŽQŒªÔ*©ûSÒ£ôbêŸõ>*:ÅÅ©ÿSò£|ZÚ™Ñ*‰Õ¨ëz¨Pj¢5B*`Eôª'T2£ô[¢uD*9EÛ©®©=QjÑnj“ÕªKTr¦\\j¤õH*`EãªOT’£©fJ™Ñ‡jÕ*©b©ÝRê§5L*dÇßªwTÒ¦e§uNâ|©–’¦ÊXÙESê6Ô§M’ªTØÍUU*{UZªì	%M4· I*¦%ÔB?P.¥Vjµ&ªµU>9f„~§…TÚ‘µ*©GzªžMf«½Uø¶ñjª»ÕeªßRr«MWúª5UêÕVªÇÊª}Jj°5X#-Õ‰ª»Uš/ÝXš¬USbôUO©}VªlxZ²Õ[ª°TÇ«1Uš>MYj¨‘mêhÕŸªßf¬µWê¬5êÓU««UŽ¦ÝZØ¶ñm*§Ôß«eF­ªZ¶µ^£èÕ“ªÍzª}NÊ¶ñ±ªàÕœ‹o\"j®\rUš¬ÑšêàÕªß,op0>\0‚äåI·©ÕU^®€,ŠºM\0€3UÕŒž—.;ÕAª»uu#÷E¼«ÁSê®Z¨¶õ?ªÛÕ\0«ÛWšÍW¬Ñ¯*§ÅÇ«ëW:«cº¾µoª·ÈªŸTJ­½QJÀ5|*ŒV«•U¾35_ú¿…ªÿÕüªÁ^ª|lºÂ5|ª·Çk¬#Væ©•[x¹õSêU·ªyXz¯…T\nÃÕê°Fµ¬9X.1%`è¶ñ§*eÒÆ¬[Ê±}a@7qà«œª·VÊ<`¸ðU^£ÁV*WªNUVŠ®‰£dåU¯K‰WV±l~êÉ5dåU£“•Xê¢]cŠ¯•”« U€¬†–æ/eddº‘{*ãEì¬dr¬UezÈõckEÁ¬[VF³-cê²¡4\nÃBFJ¶|ì¨Êƒ•{O›µ<…h©\$µŒ½!ô\0Kœ÷<†wœòÜ5 kNpè)]z¢ùä+zÃé®eS.¢iF:ÚÑj<Ä´‡Ð­«ñV:ªéÞŽ÷^\nO![`¤ny\n¨ 	k­çzMK ãZ•vÂ¾™ßóW§‰:›T;þr\rkRä‚•D8Qß<ir+¹!µ®'dÏ!–Z©^‰l5s3ÈTQñžo<é×¬â	ä3Ï\\Ï>•Œëòu<A*ˆ§€Î^\$¡9€>|ñùÉÊDW\rK@XÏ[z¶Û±Ç`Ò¯æ®LÙšM3Æn1…N³@çXÍ\\i;Œ”ÔÐ5˜‹—g»#\\ŽG\0“LÍjµŸk?Íšvñ4®kÌÍ*Ðu¿–>©.­\r5r´B¢	¦`e‡¬¹š¹Z2´©)•¦+IW®!Z:¸izu¦¦®Vœ‡F­º´ý*à•¨«RM\\®H±LŽÑÉ§õºë“Nû£i\\ŽµLÖ§b§‰¬šÉZÆk4ÅI‰áÿk[PêšÖ¹Jk“´)©®¢À(W,®	9œ’”æ™±jnfxÖÅv™]6yÓµ*ÙUÁ'8,B®U6F¶êÙÒÛ¦[Ku­¥3âduma-JƒææÖãœç76…¢Ã9¼s<'\nVïY/[Æ»mo:ÏuÜCëÖø˜õ9ÒW¨:ÏÓÐç\nV®ñ\\ýpiÝÊ­+„ÖŠ®ðJf¸mwuV•ÅëKWœê£»ÅxÊâU¤+Ç×®ñ\\znÝrzSˆU#W%®ñZšwäáE?µÑÄL9˜~®fo„áIµ®â+V´Qa\\ö»S¶J(®ºg\$M‡®“DµÜ¥l:ïÓ”§Îjžtîjº|	«vè\n;džxîzs³ÃYPÚWÎÄ5—<ï€DÅYê¥èK¥¯¡_Jcý…ZröÕnÑ ž±_Úã•k^+m,3\\aBerÄ¹Jj+ÖÐFwƒ;Þ)\$9Œ®Û]N’\$\0¦°P‚ÂÙµªÇÝYL_œK1òfµ%É–Ç;Ï÷ñaâmK°¹\"‡\0Ö“¤ö%ä 6úï.ë?Üw\nÀ¹Ï‡­K l”ûxÞ)ùæ€Ya§¤Ø‘´#_>M(3Ôì—–šm¨ºP9h3Ó»¥¨°b0~Á¨À“ˆ[âX4N Ü¹á„HaÉ¨†YkÆAžv„t£6^:Qì_‚l\"Â9°€NöRÔ	¹A\nQ¶Â¸kìLl+½®°ŽöÀ–Ô@#Ìt¬ ½¸K¾õ“¿vÐB”Ì;^…¦	œ!gl9ØHD2ƒ.À{^æŽÍ; `¡4‚4íz\rŒ–G\r\0[\0ÄŒé¹\$é\\ŠD\"ÄžÓÃœ qŒ›…7 ™´½ƒ{âRN „(Šuq¯Q¦¶%ˆ¡ÿ±HxmêÉt0_&EahÐÒôEøÏÝØ7gn8¡åúX¿v\r×þ%Mf^Óäh°0¨1ìÉ±‡=ÇðRI\ryÚqØ±†æëÍ¡\r/&XÔ±Lüc\n\$@ÚìJ‚0Dˆá}Ž)­/Üd—.‚/—Ÿ6,t’é–!Ä@!š„°±\0VäÃ.ÅægFW°Ø^Â—e€‘5i­Ð ´\"²ÚÇDR»¡ Z/´\"Ã¡ì–,ïÓÁ˜6=!dD1}‘6/ÖFÄTc;`x+#ì“±ƒ“¬Ž7ƒ²0ß*ÈäJÛ!l·Q¼*hDÔ	PbçòBöšYÙ0\0ÞÉ\nÉ›!\r¬„KVÑ1è5G¤VP˜µ4«°ø=;w+%ŒlžYIÈÛFÅ” æ–T„1²âïe 9¥•g˜íÁ¬1m²„âi:»ç\0‘¢èS3¿N²¾¼Í38Ôv¬±ÙaN x¡]ƒËEl²>¸±<éLÈT\rÁEbh½H²Î.ŒþÛ. +6‹ÇaÖÓAá€Ÿ àJ—þY‚³\"ÌlÅ5Ìºb\0o³\")”X‹f¡SdžR³(òfu™ôµÿ¼²>{\"ÇAìqÎæ8§AÞÂ½£{8œÞÍp8k2‡LúY”ˆË©âµ›ˆ64¬VÄ‘TX\\Å› ‹ï¬àÌY±å1fÇ ÖqÌ:ìuØÂ|ýØ\\}‡‹ì,O0{ddsÍ‚Cÿ	B5¤à#H1zl\0%o“„,0Hide‘'†?6x½Ö±®à¾5žQ¬öyÚ|¢p¶\rŸ+=†p×²X\rž`!°q,÷>³§gÎÐ\$Û@¬Ô³ËÉpÙ¸\\¡6Õþ£\${¾^&Ï›{<ÌyØòZ6jÇ¾Çeš¬ö†³¤jo¶\$MXá«(v‰lŒ•@Mh°˜d¶EíX“¬„‹DÀVì§y|jHæÐu¢`TpZ­/FeÎÒ-†{E–sNÚØüªdíp€\$°uPddÄ£5“þo2ÚL ªØ¿\nc«ÌË8¡^fXŠ\nó:Z{£žo<ìt1´Íi,:õE6šC*Å+–=iÀÝ¦û(Ô¬V½_rÛEæ!—šlDìvZƒ´¦ý†Å¦pÊ¶N<=K´Î“r	Ü#@;°\0ŽÂ4ŠvÔÐ7YkA¸ì°º±œ¬`(KÖ¨#Ìƒ2ª\rQŒH!/v7l/…°Ác±íb!ÐXìÆxÂÍ(¥¤4—6®@¢€cLjðJ±!Ð7£€£fzXî“å¬	v°6ÚÈµŠ¯=pTqX-`5µ€zjÖ\0À¡µ¶°ÿcåk%òióý¶²MúÚÀ€x:tLc1,—Å…v4†­)°áN”/9B‘„ð¹é€ŠÎ\rš9¨NŒ8IG©Ê@ Û{¡·:ö¨´/M¢›xJ¢áº'EÉ(€(¶#rHE '¤2`qˆÑS|èaªØØ`R€ÏÜ9¶@â¼°ƒÃÅ^Ú€s¶BFˆ«Wkd&ö’Ý¥MOn\0œ¸!ï0#6ËzÛ/)Y´åÃ¦ë]–¾Ÿƒæq^x‰´ü–OÌúÞK/ˆ\nƒ[G ab:™9;3dôMS¹?‹9ž¨üå£R×û\r‚Ù?\"s1g~x×");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$i;return$i;}function
adminer(){global$b;return$b;}function
idf_unescape($w){$ee=substr($w,-1);return
str_replace($ee.$ee,$ee,substr($w,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($gg,$Qc=false){if(get_magic_quotes_gpc()){while(list($_,$X)=each($gg)){foreach($X
as$Sd=>$W){unset($gg[$_][$Sd]);if(is_array($W)){$gg[$_][stripslashes($Sd)]=$W;$gg[]=&$gg[$_][stripslashes($Sd)];}else$gg[$_][stripslashes($Sd)]=($Qc?$W:stripslashes($W));}}}}function
bracket_escape($w,$Na=false){static$li=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($w,($Na?array_flip($li):$li));}function
charset($i){return(version_compare($i->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$Y,$eb,$Zd="",$hf="",$jb="",$ae=""){$K="<input type='checkbox' name='$D' value='".h($Y)."'".($eb?" checked":"").($ae?" aria-labelledby='$ae'":"").($hf?' onclick="'.h($hf).'"':'').">";return($Zd!=""||$jb?"<label".($jb?" class='$jb'":"").">$K".h($Zd)."</label>":$K);}function
optionlist($F,$Xg=null,$Ji=false){$K="";foreach($F
as$Sd=>$W){$nf=array($Sd=>$W);if(is_array($W)){$K.='<optgroup label="'.h($Sd).'">';$nf=$W;}foreach($nf
as$_=>$X)$K.='<option'.($Ji||is_string($_)?' value="'.h($_).'"':'').(($Ji||is_string($_)?(string)$_:$X)===$Xg?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($D,$F,$Y="",$gf=true,$ae=""){if($gf)return"<select name='".h($D)."'".(is_string($gf)?' onchange="'.h($gf).'"':"").($ae?" aria-labelledby='$ae'":"").">".optionlist($F,$Y)."</select>";$K="";foreach($F
as$_=>$X)$K.="<label><input type='radio' name='".h($D)."' value='".h($_)."'".($_==$Y?" checked":"").">".h($X)."</label>";return$K;}function
select_input($e,$F,$Y="",$Of=""){return($F?"<select$e><option value=''>$Of".optionlist($F,$Y,true)."</select>":"<input$e size='10' value='".h($Y)."' placeholder='$Of'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($v,$je,$Ui=false,$hf=""){echo"<fieldset><legend><a href='#fieldset-$v' onclick=\"".h($hf)."return !toggle('fieldset-$v');\">$je</a></legend><div id='fieldset-$v'".($Ui?"":" class='hidden'").">\n";}function
bold($Va,$jb=""){return($Va?" class='active $jb'":($jb?" class='$jb'":""));}function
odd($K=' class="odd"'){static$u=0;if(!$K)$u=-1;return($u++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($_,$X=null){static$Rc=true;if($Rc)echo"{";if($_!=""){echo($Rc?"":",")."\n\t\"".addcslashes($_,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Rc=false;}else{echo"\n}\n";$Rc=true;}}function
ini_bool($Dd){$X=ini_get($Dd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
set_password($Qi,$O,$V,$H){$_SESSION["pwds"][$Qi][$O][$V]=($_COOKIE["adminer_key"]&&is_string($H)?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}function
q($Q){global$i;return$i->quote($Q);}function
get_vals($I,$f=0){global$i;$K=array();$J=$i->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$f];}return$K;}function
get_key_vals($I,$j=null,$Zh=0){global$i;if(!is_object($j))$j=$i;$K=array();$j->timeout=$Zh;$J=$j->query($I);$j->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$j=null,$p="<p class='error'>"){global$i;$wb=(is_object($j)?$j:$i);$K=array();$J=$wb->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($j)&&$p&&defined("PAGE_HEADER"))echo$p.error()."\n";return$K;}function
unique_array($L,$y){foreach($y
as$x){if(preg_match("~PRIMARY|UNIQUE~",$x["type"])){$K=array();foreach($x["columns"]as$_){if(!isset($L[$_]))continue
2;$K[$_]=$L[$_];}return$K;}}}function
escape_key($_){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$_,$C))return$C[1].idf_escape(idf_unescape($C[2])).$C[3];return
idf_escape($_);}function
where($Z,$r=array()){global$i,$z;$K=array();foreach((array)$Z["where"]as$_=>$X){$_=bracket_escape($_,1);$f=escape_key($_);$K[]=$f.($z=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($z=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($r[$_],q($X))));if($z=="sql"&&preg_match('~char|text~',$r[$_]["type"])&&preg_match("~[^ -@]~",$X))$K[]="$f = ".q($X)." COLLATE ".charset($i)."_bin";}foreach((array)$Z["null"]as$_)$K[]=escape_key($_)." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$r=array()){parse_str($X,$cb);remove_slashes(array(&$cb));return
where($cb,$r);}function
where_link($u,$f,$Y,$jf="="){return"&where%5B$u%5D%5Bcol%5D=".urlencode($f)."&where%5B$u%5D%5Bop%5D=".urlencode(($Y!==null?$jf:"IS NULL"))."&where%5B$u%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($g,$r,$N=array()){$K="";foreach($g
as$_=>$X){if($N&&!in_array(idf_escape($_),$N))continue;$Ha=convert_field($r[$_]);if($Ha)$K.=", $Ha AS ".idf_escape($_);}return$K;}function
cookie($D,$Y,$me=2592000){global$ba;return
header("Set-Cookie: $D=".urlencode($Y).($me?"; expires=".gmdate("D, d M Y H:i:s",time()+$me)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($_){return$_SESSION[$_][DRIVER][SERVER][$_GET["username"]];}function
set_session($_,$X){$_SESSION[$_][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Qi,$O,$V,$o=null){global$dc;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($dc))."|username|".($o!==null?"db|":"").session_name()),$C);return"$C[1]?".(sid()?SID."&":"").($Qi!="server"||$O!=""?urlencode($Qi)."=".urlencode($O)."&":"")."username=".urlencode($V).($o!=""?"&db=".urlencode($o):"").($C[2]?"&$C[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($oe,$De=null){if($De!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($oe!==null?$oe:$_SERVER["REQUEST_URI"]))][]=$De;}if($oe!==null){if($oe=="")$oe=".";header("Location: $oe");exit;}}function
query_redirect($I,$oe,$De,$qg=true,$Bc=true,$Jc=false,$Xh=""){global$i,$p,$b;if($Bc){$vh=microtime(true);$Jc=!$i->query($I);$Xh=format_time($vh);}$th="";if($I)$th=$b->messageQuery($I,$Xh);if($Jc){$p=error().$th;return
false;}if($qg)redirect($oe,$De.$th);return
true;}function
queries($I){global$i;static$kg=array();static$vh;if(!$vh)$vh=microtime(true);if($I===null)return
array(implode("\n",$kg),format_time($vh));$kg[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I).";";return$i->query($I);}function
apply_queries($I,$T,$yc='table'){foreach($T
as$R){if(!queries("$I ".$yc($R)))return
false;}return
true;}function
queries_redirect($oe,$De,$qg){list($kg,$Xh)=queries(null);return
query_redirect($kg,$oe,$De,$qg,false,!$qg,$Xh);}function
format_time($vh){return
lang(1,max(0,microtime(true)-$vh));}function
remove_from_uri($Af=""){return
substr(preg_replace("~(?<=[?&])($Af".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($G,$Fb){return" ".($G==$Fb?$G+1:'<a href="'.h(remove_from_uri("page").($G?"&page=$G".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($G+1)."</a>");}function
get_file($_,$Nb=false){$Oc=$_FILES[$_];if(!$Oc)return
null;foreach($Oc
as$_=>$X)$Oc[$_]=(array)$X;$K='';foreach($Oc["error"]as$_=>$p){if($p)return$p;$D=$Oc["name"][$_];$gi=$Oc["tmp_name"][$_];$yb=file_get_contents($Nb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$gi":$gi);if($Nb){$vh=substr($yb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$vh,$wg))$yb=iconv("utf-16","utf-8",$yb);elseif($vh=="\xEF\xBB\xBF")$yb=substr($yb,3);$K.=$yb."\n\n";}else$K.=$yb;}return$K;}function
upload_error($p){$Ae=($p==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($p?lang(2).($Ae?" ".lang(3,$Ae):""):lang(4));}function
repeat_pattern($Mf,$ke){return
str_repeat("$Mf{0,65535}",$ke/65535)."$Mf{0,".($ke%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$ke=80,$Dh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$ke).")($)?)u",$Q,$C))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$ke).")($)?)",$Q,$C);return
h($C[1]).$Dh.(isset($C[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($gg,$xd=array()){while(list($_,$X)=each($gg)){if(!in_array($_,$xd)){if(is_array($X)){foreach($X
as$Sd=>$W)$gg[$_."[$Sd]"]=$W;}else
echo'<input type="hidden" name="'.h($_).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Kc=false){$K=table_status($R,$Kc);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$s){foreach($s["source"]as$X)$K[$X][]=$s;}return$K;}function
enum_input($U,$e,$q,$Y,$sc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$q["length"],$we);$K=($sc!==null?"<label><input type='$U'$e value='$sc'".((is_array($Y)?in_array($sc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($we[1]as$u=>$X){$X=stripcslashes(str_replace("''","'",$X));$eb=(is_int($Y)?$Y==$u+1:(is_array($Y)?in_array($u+1,$Y):$Y===$X));$K.=" <label><input type='$U'$e value='".($u+1)."'".($eb?' checked':'').'>'.h($b->editVal($X,$q)).'</label>';}return$K;}function
input($q,$Y,$t){global$i,$wi,$b,$z;$D=h(bracket_escape($q["field"]));echo"<td class='function'>";if(is_array($Y)&&!$t){$d=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$d[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$d);$t="json";}$_g=($z=="mssql"&&$q["auto_increment"]);if($_g&&!$_POST["save"])$t=null;$gd=(isset($_GET["select"])||$_g?array("orig"=>lang(8)):array())+$b->editFunctions($q);$e=" name='fields[$D]'";if($q["type"]=="enum")echo
nbsp($gd[""])."<td>".$b->editInput($_GET["edit"],$q,$e,$Y);else{$Rc=0;foreach($gd
as$_=>$X){if($_===""||!$X)break;$Rc++;}$gf=($Rc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($q["field"])))."]']; if ($Rc > f.selectedIndex) f.selectedIndex = $Rc;\" onkeyup='keyupChange.call(this);'":"");$e.=$gf;$od=(in_array($t,$gd)||isset($gd[$t]));echo(count($gd)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($gd,$t===null||$od?$t:"")."</select>":nbsp(reset($gd))).'<td>';$Fd=$b->editInput($_GET["edit"],$q,$e,$Y);if($Fd!="")echo$Fd;elseif(preg_match('~bool~',$q["type"]))echo"<input type='hidden'$e value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$e value='1'>";elseif($q["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$q["length"],$we);foreach($we[1]as$u=>$X){$X=stripcslashes(str_replace("''","'",$X));$eb=(is_int($Y)?($Y>>$u)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$u]' value='".(1<<$u)."'".($eb?' checked':'')."$gf>".h($b->editVal($X,$q)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$q["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$gf>";elseif(($Vh=preg_match('~text|lob~',$q["type"]))||preg_match("~\n~",$Y)){if($Vh&&$z!="sqlite")$e.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$e.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$e>".h($Y).'</textarea>';}elseif($t=="json"||preg_match('~^jsonb?$~',$q["type"]))echo"<textarea$e cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$Ce=(!preg_match('~int~',$q["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$q["length"],$C)?((preg_match("~binary~",$q["type"])?2:1)*$C[1]+($C[3]?1:0)+($C[2]&&!$q["unsigned"]?1:0)):($wi[$q["type"]]?$wi[$q["type"]]+($q["unsigned"]?0:1):0));if($z=='sql'&&$i->server_info>=5.6&&preg_match('~time~',$q["type"]))$Ce+=7;echo"<input".((!$od||$t==="")&&preg_match('~(?<!o)int~',$q["type"])&&!preg_match('~\[\]~',$q["full_type"])?" type='number'":"")." value='".h($Y)."'".($Ce?" data-maxlength='$Ce'":"").(preg_match('~char|binary~',$q["type"])&&$Ce>20?" size='40'":"")."$e>";}}}function
process_input($q){global$b;$w=bracket_escape($q["field"]);$t=$_POST["function"][$w];$Y=$_POST["fields"][$w];if($q["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($q["auto_increment"]&&$Y=="")return
null;if($t=="orig")return($q["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($q["field"]):false);if($t=="NULL")return"NULL";if($q["type"]=="set")return
array_sum((array)$Y);if($t=="json"){$t="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$q["type"])&&ini_bool("file_uploads")){$Oc=get_file("fields-$w");if(!is_string($Oc))return
false;return
q($Oc);}return$b->processInput($q,$Y,$t);}function
fields_from_edit(){global$cc;$K=array();foreach((array)$_POST["field_keys"]as$_=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$_];$_POST["fields"][$X]=$_POST["field_vals"][$_];}}foreach((array)$_POST["fields"]as$_=>$X){$D=bracket_escape($_,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($_==$cc->primary),);}return$K;}function
search_tables(){global$b,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$cd=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$i->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$cd){echo"<ul>\n";$cd=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($cd?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($vd,$Me=false){global$b;$K=$b->dumpHeaders($vd,$Me);$zf=$_POST["output"];if($zf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($vd).".$K".($zf!="file"&&!preg_match('~[^0-9a-z]~',$zf)?".$zf":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$_=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$_]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($t,$f){return($t?($t=="unixepoch"?"DATETIME($f, '$t')":($t=="count distinct"?"COUNT(DISTINCT ":strtoupper("$t("))."$f)"):$f);}function
get_temp_dir(){$K=ini_get("upload_tmp_dir");if(!$K){if(function_exists('sys_get_temp_dir'))$K=sys_get_temp_dir();else{$Pc=@tempnam("","");if(!$Pc)return
false;$K=dirname($Pc);unlink($Pc);}}return$K;}function
password_file($k){$Pc=get_temp_dir()."/adminer.key";$K=@file_get_contents($Pc);if($K||!$k)return$K;$ed=@fopen($Pc,"w");if($ed){chmod($Pc,0660);$K=rand_string();fwrite($ed,$K);fclose($ed);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$B,$q,$Wh){global$b,$ba;if(is_array($X)){$K="";foreach($X
as$Sd=>$W)$K.="<tr>".($X!=array_values($X)?"<th>".h($Sd):"")."<td>".select_value($W,$B,$q,$Wh);return"<table cellspacing='0'>$K</table>";}if(!$B)$B=$b->selectLink($X,$q);if($B===null){if(is_mail($X))$B="mailto:$X";if($ig=is_url($X))$B=(($ig=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$K=$b->editVal($X,$q);if($K!==null){if($K==="")$K="&nbsp;";elseif(!is_utf8($K))$K="\0";elseif($Wh!=""&&is_shortable($q))$K=shorten_utf8($K,max(0,+$Wh));else$K=h($K);}return$b->selectVal($K,$B,$q,$X);}function
is_mail($pc){$Ia='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$bc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Mf="$Ia+(\\.$Ia+)*@($bc?\\.)+$bc";return
is_string($pc)&&preg_match("(^$Mf(,\\s*$Mf)*\$)i",$pc);}function
is_url($Q){$bc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($bc?\\.)+$bc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$C)?strtolower($C[1]):"");}function
is_shortable($q){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$q["type"]);}function
count_rows($R,$Z,$Ld,$jd){global$z;$I=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Ld&&($z=="sql"||count($jd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$jd).")$I":"SELECT COUNT(*)".($Ld?" FROM (SELECT 1$I$kd) x":$I));}function
slow_query($I){global$b,$ii;$o=$b->database();$Zh=$b->queryTimeout();if(support("kill")&&is_object($j=connect())&&($o==""||$j->select_db($o))){$Xd=$j->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$ii,'&kill=',$Xd,'\');
}, ',1000*$Zh,');
</script>
';}else$j=null;ob_flush();flush();$K=@get_key_vals($I,$j,$Zh);if($j){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$ng=rand(1,1e6);return($ng^$_SESSION["token"]).":$ng";}function
verify_token(){list($ii,$ng)=explode(":",$_POST["token"]);return($ng^$_SESSION["token"])==$ii;}function
lzw_decompress($Ra){$Ub=256;$Sa=8;$lb=array();$Bg=0;$Cg=0;for($u=0;$u<strlen($Ra);$u++){$Bg=($Bg<<8)+ord($Ra[$u]);$Cg+=8;if($Cg>=$Sa){$Cg-=$Sa;$lb[]=$Bg>>$Cg;$Bg&=(1<<$Cg)-1;$Ub++;if($Ub>>$Sa)$Sa++;}}$Tb=range("\0","\xFF");$K="";foreach($lb
as$u=>$kb){$oc=$Tb[$kb];if(!isset($oc))$oc=$Yi.$Yi[0];$K.=$oc;if($u)$Tb[]=$Yi.$oc[0];$Yi=$oc;}return$K;}function
on_help($rb,$ih=0){return" onmouseover='helpMouseover(this, event, ".h($rb).", $ih);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$r,$L,$Di){global$b,$z,$ii,$p;$Ih=$b->tableName(table_status1($a,true));page_header(($Di?lang(10):lang(11)),$p,array("select"=>array($a,$Ih)),$Ih);if($L===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$r)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($r
as$D=>$q){echo"<tr><th>".$b->fieldName($q);$Ob=$_GET["set"][bracket_escape($D)];if($Ob===null){$Ob=$q["default"];if($q["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Ob,$wg))$Ob=$wg[1];}$Y=($L!==null?($L[$D]!=""&&$z=="sql"&&preg_match("~enum|set~",$q["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$Di&&$q["auto_increment"]?"":(isset($_GET["select"])?false:$Ob)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$q);$t=($_POST["save"]?(string)$_POST["function"][$D]:($Di&&$q["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$q["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$t="now";}input($q,$Y,$t);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($r){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Di?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($Di?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$r?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ii,'">
</form>
';}global$b,$i,$dc,$lc,$vc,$p,$gd,$ld,$ba,$Ed,$z,$ca,$de,$ff,$Nf,$_h,$pd,$ii,$ni,$wi,$Ci,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$Bf=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Bf[]=true;call_user_func_array('session_set_cookie_params',$Bf);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Qc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$de=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($w,$We=null){if(is_string($w)){$Sf=array_search($w,get_translations("en"));if($Sf!==false)$w=$Sf;}global$ca,$ni;$mi=($ni[$w]?$ni[$w]:$w);if(is_array($mi)){$Sf=($We==1?0:($ca=='cs'||$ca=='sk'?($We&&$We<5?1:2):($ca=='fr'?(!$We?0:1):($ca=='pl'?($We%10>1&&$We%10<5&&$We/10%10!=1?1:2):($ca=='sl'?($We%100==1?0:($We%100==2?1:($We%100==3||$We%100==4?2:3))):($ca=='lt'?($We%10==1&&$We%100!=11?0:($We%10>1&&$We/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($We%10==1&&$We%100!=11?0:($We%10>1&&$We%10<5&&$We/10%10!=1?1:2)):1)))))));$mi=$mi[$Sf];}$d=func_get_args();array_shift($d);$bd=str_replace("%d","%s",$mi);if($bd!=$mi)$d[0]=format_number($We);return
vsprintf($bd,$d);}function
switch_lang(){global$ca,$de;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$de,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($de[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($de[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$wa=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$we,PREG_SET_ORDER);foreach($we
as$C)$wa[$C[1]]=(isset($C[3])?$C[3]:1);arsort($wa);foreach($wa
as$_=>$jg){if(isset($de[$_])){$ca=$_;break;}$_=preg_replace('~-.*~','',$_);if(!isset($wa[$_])&&isset($de[$_])){$ca=$_;break;}}}$ni=$_SESSION["translations"];if($_SESSION["translations_version"]!=3286375958){$ni=array();$_SESSION["translations_version"]=3286375958;}function
get_translations($be){switch($be){case"en":$h="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦¦t´Œç>•û.y8RmÒóûè\"3ˆz¶#kN!-cä²‰Ã(è;¬ãX#Œ£|ø,¢bzöµÊ¢°µó9>£’):Ž¸çC \0.#®Ó‰ƒzÔ7:‹ðÚÞŒ­€@FàPx‘Ì„C@è:˜t…ã¼¤\$jÖ¿Ë8ÎÇ²ãÅŽo(Ü„MäÊŽ’@¾‹7£XD	+/6à^0‡Éú}|®À¦(ÃLëHä£šÍ®-Dú; ï€ëE!-8‚63£@ÉŒ£¸KÓ-\n,ÓÁ´‚ñ©Ä<³ MRUlëè!ãb_\nÃOZ\r³¢ò Ž¬Âö1 5ô^2ŒÃëLSc\rlÓŠtEÃ¨ÝELO ‚3ŒèÎÎLQ1\0Sz<ŽïÔ,ëÈÈ¤Œqêîù9ikl*8±üz3»ôý°×Ú–XÙQ'˜ÆÞµ @×W°ÌüÇ›MOÓµŠÆx¥Cƒ<Ø! 0\nr,#^ÎcÆ9’ºŒ“(ýN#…Ú£Æd¿ãù;‚4ø¼déŠy&<¾¢ö114îÃ0Ù+¥¨Î‚¯\" ÞGcpò¯”â9Žc5—ÆÎ\0XËÁi¾µ·ãr~ÊÃu‚Ñ:¶±sëˆ@Ç¯ì;³mÛ 0í›e_¸îl2ö;YÃJB!ŠbŒËã\\z‹|ï C2Î˜pk^£jˆ>¼¤ï£e°LOXà4 #&ÎŽŒ±žÉí\\ Ü”%Pý48EQbB§õý1!±R4‘%I’t¡)ò É¸ËÔ¹1¸³Å2LÓDÕ6\rÓtá9,1èé;OÐA>OÜ§Ö0òÍúšüŽZÏÍÕÌ-L8fêj\\TU´\"ŠŒ2ƒöO#\0-çÓ.xÛý& €(€ zÏù/€€\0RHˆ	\"q„˜Ñ‡ãMk±|Á¥gbTK	q0nA´þ©¨³‰œ\$§ 2âž¼I©5sUÚ‚Ö±\")=èˆB]É	K)¥õÍ™ò|@C‰³€˜Á“\0‚ôÒºšs¸1‘ã°wÍÀ2¤¡»+ÓxS\n€‹¹€¤MT™ž(Ì¢©¨ŽÈc<(,×’Sœ—ú.älÒPÒXY½3\$x(ÜÜË\n&äÉ’0Œ º7å‰v¿\"IH:\"KP³†RÒÛœ²F¸™H”pÂp \n¡@\"¨@T¸\"„À‹/ØúµVç0¢€ ‚¦j>È/µúËÙSá’(œRRÍQ›æ¨£‡tqÃlà4ð§’|ŒÉB0e&XÅš£úc¡ƒ‘	´UÊú»gQí± `Ûâ?C`(+ ¨X¨Ï¡ï3ŠGr:X9±`\rÁ túŽùƒ¡œ4AH-Óú(-RBuèý+Žñp¤®Ui-hÒ¸4TD+´,œýQ&uIô^ƒsŒ¬Ž†ÀÇY+,¼…“ô[ËtÑ™*Ø6—ÂR€KC'd…N)à¬Tè\n\n•D½®ðð~•ö-u¸ý2\n—jAI¡é¶M¥l¯Æµ…¸«ûh-&UtóO|3`Ôòœùœ¢­Q+Ÿ@ŠcMÿeåÚ³µ_¥ðT!\$²_«A>ig¦AÛ?(r0qù·ZôC	/\0ÁE\\HL…ADÙ¶’ž¢[™!	á-³ªû’HšmCˆ@&ææ·sÃÑNêÜƒ	l®ÊŠŸ††5˜zû¯s%\n¾ß]úßxj%ã	`ºãÚë›lO]Ð¿7Lºßz‚†’±M¹'Ð¢‚9%v\r X<Þûf]Ø”(r à¢0Ã(bÃ§ÚM§ª*µ‰!E5d8@ÖÜ_­ÚŽ0˜¸6]ûtYÏ HCeœ²„3¬‰±x&%´\$™Ò`bÉô÷mË¼äÏÌŠXLQ×€3àŽ(Ì‘¤HÊm¸àê‰\rQÉ!–|Iô~`-zTy‹-“3?+^kËY)…Ð<ÓœIÄÔ,É+Õ%”³*TZE%ü¼:ÕW Í9>“?BS™˜Š(jÏ>•¶ç“éê@³¢ÎÍù§J€@®OÍ[™` ‹Ÿ#¾\nY=;Ï2d¼Ï?'•Í™Ð€ÍLÓ¬]¶¬Ÿ!\0ëz®r–™b¯Ô4\$‰°ulù\róï4´›¬öN¼Ëûgë¦Ý¦‹ôüpâÍ¬¯´5Ü8&·–â©\0Ãzrø	\nVrmi\"L·oÜ· 3]¬Óf\r‚–;ƒWl¼ÐPìg–•­îí±±7Ä®àV‚oÌëigåv!+ÄÕ Jöƒ¤%\\ƒoü¦éx@˜’Ž‘ð²–Îç!€&­¶Öì]ÇÞï–ŠÞÙä¶V¼bï­@”Òž†øùávµ¦~0ŒH»1gÉKMÎ2­èehRaÏÊÎ§xvfßÝ[©pí¥¶¨›êLÒÐqÝ‘™u~i³ï›‡p{qÙzöv%ÅM^Ëiv|Ø­Šk;%Þ˜1’Ÿœ—ZdJLªÛ¦Çvö}û³	FëÛÞ71ÏŽÝš|—Œ [»¯æžèI²ÿG|È†õâ¯xgm‰kÓŸT@½/§õ1Ü:–ÝÉV€eµüç¬ö•îø§œîH‡ày¿›¶ÏžØr§âúÿ˜lùÍjW^÷­ç§ð¸‡ÊT>ãç}À©a¬gÔòÅŸn©¦ãgàüßÎ÷?–|?*\$dBÅXtH	i§ífÁþ-þÿ¯Îù\"P\n£‚î/²%\0:ãÀEÏ2Ï Ž‘øŽàìr£NUïbu\rbL\"è\n¿°.l	è4ÌÛMàÍ,|;kˆm‚2.\"Ú	p6«ç|R*&¢ ÙB£pRÈÎÚÝ¶UåN\r­-M3L>\0ØhÊ£\0ÖåâFÐ\"0kü\r Ìkbð=\"påCúm©t\n€Œ p)Å¯\n#ä¾kÌêoŽ%¨%«¬¼ì¢žÍ“\rnÍ\"&Ì#0hŠ†æ4à›\n0¦¢£–Ãè6¢ó\0ƒh.âš²P–3	Ò.ð¦ãA	ÂP™ã£¢¢¥‚@71,n	Zäe]%j B!0ÍBç\r­0Ù%\$ZízÌ\n!ÌÚ#ÎêwÌè5Ç^ÎfãÌèëOÆÏC\rÉðÙd\n§±e©D¬ª\"vªð¤®wJvfŒø8R\$`˜šÅÊÓ A­L\\©ä\0Œ #NÝk”¡«Â%é‚›\$¬'e>-€ó@†<\0ÆBJ,pîOB@)Ç	èå8žqò™ à,¥¢øª\"dPé ‚)¢Ô´.ÿ+ˆ ZGbLáÈ¨*Kû\"\$\rƒÝ\" \\";break;case"ar":$h="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š)èÍ&ã<Òq)æÖ ˜ÈF>Ø¡Ps7Xì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ¯jÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸šj\nÙˆé­¥jƒù@Åzšl<\$W¿ÈrØ“£åsœô§Ì†U&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4_!ÄÀËd\\B¾ñ=Èt[¢	ãë?‰:²X£ªØ¢eJ	\$£éÚ\n&Œ3Þœ:îšã•ÊÃ‡OìK¦‰Ð¬ÈJÓ\0x0´#Ê3¡Ð:ƒ€æáxïQ…ÃÈ6»c(ä\rãÎŒ£u`<7cpæ4õDÚ5pÊ:S\"û†0ÃXD	#hà×µˆèã|¥¶vkz7Œ£l9´¢˜¢&\r-Úž–&ÁmI\n¬ôÈH=ËsºŒ2NAª¥D–êÅÔ\n	r\\ÓìeE]\r¥Lij«&î²\$‹[2B€Ý¯ÚZ¬Æ’ÄQ?ió®A_Å–¿!)tå*£ÀP‰KŒ#¨Ø:°Â6£+ï/sÊIÅÊÊã'	j>\\¦—²lU­HóÒE*èŒõ\\¹¬‘>ÈfÁdöAx©oÍˆAk”¸MÊóB6T6WŽJ9Œv\$ÂDIÍ¼&-HqZš8Ï0ë H^G:Mn¤ð OhNï|ï3\$\nlüCÆ¼ÌŠaq%»ÛÃò(Z×o´ÿuÏŽ£]Z•ÙµéÚþ‡`÷Înl<’;Î¿±tâÈo“µÓ<ê7l0†òVå…Fƒè6LóA^´£xÌ3\r•K\nü+WÓ©MÉ¸*\rí@Ûb!\0ë[£ÆÙc6T\rƒxÎíŽach9{£Î0»aêÛ5@Ü:·a@æ\nJy'!¢È0¦‚1*„|’”C¨+Arl!«•\0 ¥Ê{ËŠèDl„†£tÖ›[ê1z…Â“•ô\\*ƒ„hu;˜Òú[ ƒ‹!ìC–PR€Ø…\\C9eÌK„F)Ð½=\nJ\nŒ`dÌ&†ænÃ‘©‰ÁÌ;ªÕ²CÀp\r*X2A&¥Tº™SjuOªFÕ*§U*­Vªõb¬Õª·W ½]œ|°Â\r‹c,…”³rÐZKP-`Ð¶Ô…!¬Ò®RªžØnYËŒº‘*JOÚú1©iÃråJ?ˆDÈ\nøUI*C¥mŠ¹òŒ×a©\rÂ	 sö`Èk¶eZU¦(}J{›w+¢%(éO#PdØT“6DÈ4/+lx…Fù)Ž¡(e£Ÿ#–”Ôt•i¨2O&!âÔ&a\$“> i[&–-ÀÜ¶Mé¿\nX8³ž0r\rá´Õ\$¢‰½V €1¾•¸m\rñ³È2ÌâÆT4†Á@'…0¨BÈ‹\\®ØÀÄ”Óö/iMBM™ìµ£âXóŸJ»Rt)Õ½™s!	CF@®…ÓMX2@P3³½´†ç¼²Ãz¦\nP1Î}\0005Æ”Ö©@Œ…SžïÙe*ÖY#¨\r#j¨Ò*³ÚqÐ¡U±­†þ‘”òd\$|T\0 ž\0U\n …@‹_¬\0D¡0\"ØdÃ	”•–=1»².ÓÔjîÊ¡³jŠr…±@%.Ú¼¢¢ìAÒ“y›Ñ—”MjH«?¢³à”¢´…a8«f&L˜\rA1“a`KíK:FK¢Þ®Ä.á×“z·4ñ¿.§ssŽ·	ÎÝB×qošD§îy¯Bèånœnt›(3ìƒ*Ë\r-¤:+€ÜŒiï@ÉØ¦\0u!,=qÄˆ#ÇzQš<\"°”Ë‰TKÒPsÂ¯dFNps¿uM‡4Õêw›AL4‡¦dèpŒÈ)†S^ÍØdn„ˆ”97z-æ;™E„æÆp{&e¨:<Sd‚poF¸]0b†`U°\n‰±@4²üJVÉ­¡Üš/ÁmˆÊ‡²Â‘#ÙõðÀ6d1ùšË:—V†!ª..\rEZEÉi)3\$ÖºŠìÉN£Sp(IvµÛBNíÐR”š:eíŽ›\$L±ÃºaXJ)>•à ½VkuæËU2\rþS3øç]k=ØÃ&tÁaB Aa OÕTM•SRÆ˜7ÏSn+6X™É4 D(A\\µBPplý6ÔÀþ\0/2º÷fKÚc/hœ”žñaž†Í/1÷m161ÚÌ\"Ë'Bƒ3L™yd(uft›HY>.[n ‘ña	vÕ¨%Wo íÂÁw	ÜÉ\$„Bòj€L2»s‚nÆPD±áp¸ÈCCÅ7ð\n\\\n¡–P îG0\$èC\$û9ò’UÕ5¸ðÇ•A	Eˆ:èK¦!0r²_PÎçi}6:ùkÉOwhi(d¦†÷í/:ŽØ›3‘°*È#½g(\\!wNÇuõ¡¹\$mË“=íÏ3á(€¡öÏR¸ènk0bIÀ\".îíÅÈýµ®ïƒô¡ÒË£¾ÀácÞ_s`.ÄÂxôÞA`S‡Àj›Íâó7²žc8bl¼ïÂS:öU¶ç¢Ú[²E­å\r1BÛ•ºôæû·‡Ñº4dW³§Þ‡Ýñ.Ûþjïö ¬¢œÇ™Q­’b€€Y¦\n|Æ¹\rîîÝ[¿s®\$6Ò„…/7Ôü†Húv®bÝ—+š…<G–ìRê9«­o¼Gp–Çö9›yûþÇ¾ú]ÒËcÒq.pÏüñÅþïcù\0d•ãl|Ù‰m\0)Ì+m>ÇÜÜåÐÝLìÔÝÂä¿ˆºÁël®dÈ8ì÷NÂÏÇnþ0\nø2ôÈaêë/+\0_p\\ÏCð)ëX!¯ÚMLÜ•\$Îê>/¡PˆNrd%è0láƒŽf²EÜ*°‘	Hz10šç\"\0Hi,?„•.iæbO«ŒäGo¬p\nj²È(`¯Â!pŽIÒÀB÷p²bi|·NqðDF0tÐòpXL¨i¬èP,ìÑúùD'\0ŽôøÜ\\Îñ/-¡lÿãË‚ËÂžýGl¾âQ,¸B&pU/\".Nªêñ4»#ÑÑ]'¬9cÃ”^Â&ëgXµjlÒ`†ê9ö1­Ð('[ðî/'ð\"+0'/ ]\r<1!\ríUÐ%ŸIˆêqim(/§L2Qpj0-Þ»·¯N2+^ø¯•…ïÏö]H¶p;Q8“èpÝñ¨þqõ 1ûb	qöHÑq!2\rèM&,ø±ý¤0Dò)!ˆ%QÜòò6hôÆø(-KÒÍ\$¤>÷ÒÐ&¢ñ¿ªtÐr;²Tb¤0GÇL9D–¤Xç’O\0Ñpä¿\"±B²Òƒ(æ üÂªb±®:á­íîàf9ãæ¼Ìº@ñ’.F»ËÍ\r¯s‘œ1†6´N¼/'ð™Â¿M¨ê'g¦/òÎÑ¤‰È #c‚€ê#€¦cI/Cu/²¶\"rºÀ# `ð4?ð8ƒâ’)p>`è@Øj¾`ÖrªfZeæb‘ Ú[\0ÒÇº\\\"fÊ¶²úe€Ä‘ªœ\n ¨ÀZ\0@V Ç4C¸ñ\r˜½büÜÍÖkâ:b\$nÀº\nˆó‡d	³E4Œºm¦F]¯äÎ°Ù¢{Ã Ñà@O~…v=PV¶(j¸áMD?à.‚R™„j„IÆ>À˜ª)â;ŽE>	\nU£J7#‚DÊöa/ÄiNW\"·øÏ\$Ä/)„N¥0(î+ò@´0O\$/:ŠKBO4\nŒ€×#E03Z¡`ÞêUMô-@ËUq:À‚³f„êí“‘E²Ï>\"h³q\n0æ®fÁT)ôupÀÌ©D?é@™…Ðóåîì3~@¬ Æ ê\r¥ü&Ïh ôª’«k=\"ˆ9C¤ã§g@k_AR°(Ë¤»‹¨üï´„LµËP¥“õ-Ã©l.¶°ôNržh¦éÈl?‘ZF€	\0t	 š@¦\n`";break;case"bg":$h="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆHî·ƒâ’ÀDê²¹%’>L*H›8ß@¤ª¤——P|.Õ3dŠ¯m XúÂé3’‡²ð!rÔ'HS†˜¹1k6A>éÂ¦”6Ëÿ5	êÜ¸®kJ¾®&êªj½\"Kºüª°Ùß9‰{/¢­Ê^ä:Dfã5Mb(¬<¨ùOÈhù(™G°Zi4=æ„Î›¹-bk¨®1l™#äšÀä©j©Î4ˆúùÉ-jAA1c‰A/ˆK»ÃÆ>•BOÃÇKí\r%4!1<ðh1²Ìã§\\èhF‰\n¯äœO°“K8\0Px0„@ä2ŒÁèD4ƒ à9‡Ax^;ÙpÂ2\r£HÜ2ŽApÞ9áxÊ7ZÃÀékŽcHßlA\0è0Úƒ(é_ãØ0ÃXD	#hà6£m®:xÂpA{ƒ@Þ2\\Cx@:Žc(@)Š\"`Óm®4›’˜²Ð£€²«ÒSS”4«¤Oè;*“étøá¬¤®¡ïÎI“7m.R²G´»ËC\r¼Y-Šú±>ÅÄ1‚RëJ&„º#U£+hù5+Éä¬Õ¦†Ÿ>GQê’Ú)¬:“0ŸIò+W5ª5¤ª€5J„§/q¤´–UŽ›/.ºu­7‰Ô[S‚¹0h[ø——aÂ)zM¸0ùEF¤ŠÆôÐ0H“J¤pížþ€Ã­®óµÇpVä–\"ú•#í‹óíeÀ¤q³rÁÉ©º¿ä¼:š•'ÄzïG.ô[š<O\$óÇ V&!±ƒˆ”¿Lš½ŠBûò>ëAv_Næ9VS¥ÂøÍJ”ð´–`^eh‰UyüÑ¦íœ;/oØÇ{U,}ö¸Ÿ¶ŠøSJ¤;Ê’›sº†ŠZ&!L¡g`– [B~(]ú>7†iÞ+g<ä}ðbÆ•2‡mñý%§~õ`°\n\rÐ953¢ÜNù›(=!Òâ„\n›£8ïm×”Ätï\r1Ú3Ä¬œ’7|IŠ©(Gd4äŸ2(}Ÿ	\r0PèZ\"2½Š\n,n‡íÞ³ãŽ¿Z!bEÄ­‚àù”³Ôe­Ž •è†^b2‰/’&=“juUSU‘Z&©ˆ²—âÙ0‹±¬ZF…é#‰éD¬ CÊ©‘>Gý˜ÒúóK¨Ž&€¸†±\"JoÚ~;ñ@™s(ûÉ€'êP„¾„žˆDyP‰† í'n…ä{Ø8\r´¶6BI\n±˜.\$& )bVåêRQDÆ¹ˆR‹ÅN@)B)-IQqOPÐÂÈI‰›Ü†“I#ø/#aóT+2q[«•v¯UúÁXkc¬•–³VzÑZkUk­•¶–êßë…q®UÎ—Jë]«¼hC….UOÂ,_+í~‡9Ÿ(\$VƒÐŸö1'à4~E°)&™¶e:Ù\"¬8ð-Ã§v)\0_Yp‡†šSTw`ú£/FÜ©Ñ¯J	Ã9èÔËLrä‰{\$\$\rç#\"ñ	›¥RA;¼´@P¨ˆFI©dvi\0(-À¤¼Ì“@ÍÓœÙgS ¨Èógà‚RÍáL¢|Lb„ |…Ä£²’óÝÙþ!¢Å˜–è§¥\\¤gÛL%'FDóDÁ¶jÑ*NŠ?k†ö\"1x`‹e- •òžE±ÜwçIKp@VbÎZjT'©™©—>ÍÅÏžc\n†¥1PQQ,’ÉNV#T?ˆ….!D\nôŽì!*'=ŸE¢¼jŸq\\e7>‘\"KKeK—”E¶‹9NÚKª³MøôSšŽL\rªPCç%;Þ:sq/&©xïÄ;ÒXX[\r,åÐµ“Ck‚0T«D2ŽØˆR €€sÆVë#7ïTÔyPb'óšŠðGÞq³G)QŠCÈ¡)Ù='g1£JU*KÞµ\r4Ð\\®<ârfóðB	õÿN¦¬SýSÅiêÄbÆ§ÄôŸ?°‰3‚p`©>4fÈßØxû’a¨~¥gL¯Œá†[4	aˆ<¾sßÆ1\$5°ÕªG¾¨Ÿ5ä}P±[ø‹näP°’ÅUß…,¬U^9ÎxÉ»ÊÇýUypÐS'Ámœ/»„J\rD¸qtïmb”5ÓòÀR¼Ð\\vÎRgÈ•Be^a¤1†è·ƒq¢Ç*»ãü¨®™+º¬U¦íQŽ3¡¼Ž9×’1añyX®—‡\\â?’NË;µO	§R¬Fâû®*/ß>\\‰¤BŸ‡	¬÷_ücC¬!·¹4*¼ÔX\$rW<î[ðœCbë]A”ExwÀtAd2‘àœàBUa¼6PÛ@rºvbH²³=!.,6[mÁ­Äô6.¶‡˜¥ï*<Žæ¯‡\"Ðµ5º245áäou©;,œÚ_NR´Ec‘LJ4y	3¤‹¡&k¯“ùËöÅýˆR“7I_K)¸öˆès÷T„e{Z‚EÍœH‹Þ›¥l‹I›Í–º6r|¬uù@&,wú”ÖK”ˆÐ„¨C	\0€8‡U x( \\Œ(7ðèGC¨pMm†IµmÉCŠQà™Þª^ÓZH à¡£SòÒ!Æz(4yiQb‘%ÁwDä¬¢?3è¦M©wÅ`Ïc˜Íé<®Ø½²ÊXO=w¡RÉa\"ÅÒ¹ì‹µ´g2¡*7u^\"òž¦Oú³©Î_€›Ô2²[õ¡ùéôRÕWõ>ù_ú÷CŒþ™Cöø›%åŠ§³O†ë/&wé¯1rÐÔÿKôíê0éOþ-Oðö#RsêÂâÂð/l0Q­HQÅGLHBÖÙÍú¯Ô‡ço\0ÌQæÝC¾”è  ª|wîœ„äRÑËŠ4Ë:TpT\$ãzÎâ>¦`;Ln+®ÐåköÌ(R®cF@@PLçG*@BjÃá BÈÖÔ»õ.–\"bã\nòk)¡ðªèé°±èÜ¸ Eü<gLÏ©¤}\r,+#j.-´fÇŽôëËÏíÛ\rÈÊãä·Ïw\n‚®Ó&°©\n=0øÛ†q\npìÂí*.P'‰nÇæƒ&nƒb’³åm†¿\00†NˆL¥jxRç‚@£bb®P–rcRTQR„LvîOq^Åf;fÞR„š|¤ ú.B»°ÐÏ…FÅf÷í7F¨ÎOìVjâ¾ÇÌ\nVõdîÈá`,èÎÏ0êŽpïbfÐ/N.,ê€»½.vþf²l§ÇÅAQÎ|já^I1’\n«SnÕ°¿@ü)†³Q¼×N½CÑ ­ëñQóë~„qÁ!|è¬6èD†+­©2´KH+ËêeLPPÃò\$c*ø/<‹ã¾ùiOnT2GžªÃRTìb¡%ÏE+Šüf+­:,zÿp»Ñ¿ òG²’ç‹„çÐé0O#Q¨\r=*Œ)*Ò!!2\$~bq\"‘áÐz«éªÅÆ¾å¤0MNÄÀªä8jnÑ#NwÃ®©çV40&É¤j„FcÊl7ËîDŠ†3ñôvüÆÆ£p}Î\\AlÂˆ7†Í\"Šó+®¨ÃÍ²5.<ÏÊ’ª˜ægÐÅNŒæã¶Ê3j Åjâì¨+’QŠýin2ódusiqÖÍ¢SrãSy ,nÝò\ní¨*xQ”Bóv‡h&ìë0ˆ“k7ðòÐPÑs©\0²±ñÓ·:hüvéy;ñ,‘¹R’ä†g.îÍ<¦Öí‘òÿ£‹ºgBf&ªÚu¬:ar7'#î\"œQ9ÂH(;e ˜,bÓÎÂ6RY*ó®êsR+Bzt®É,22{’#ŽGCt'CÓÕQ!4ÇÒ»Oüp+à?¥ìh}Q†dÔIC­E3ì,ô`pp>”xÑÒQGÅC‚¡­v0dB+n¾bTÊ„¨:Á£#ÕBÓ³nJ'WJewnžBR›\"4Q92	K§|‡YJ?LdÿL²o+Q!F´\\¸Ñt‹Ïˆ•ªqŽ¿HNÝG¨!Mt¤ÊªëJÎ¿B®‰!rh…Ãõ8Ñî7”S9TXÅGüvÓ¥PS›fUS†ªè\"^3Ê Tt*8Ô.öÇBuL–SÐ´SÃ7[#Õ^2µ(I-MÅF“Nä£Š®UJè”wPtˆx•]X…QUSç>+øvô»XM”î‰aW2UgÞb.ä®u¨¬c R6!U´Ku¸ÎëÓZÓcU0KÑJÝnÁG4’ ÖÂ	%¦@° šñÀ73VRT>•¾8Ç0\$lüv\0Ór‡'ñ4K/‡}(ââiòÓ	S_ð–lD`Ëö\nwÇ¬	 Âe¶B:\\`èa”]`ìaVDÕÖQ_ôªËƒZÈ(¯”+HÍfÈrP§\r%G&RŒù`hX\r€V/£¦&,¶gK•N\"d¶Œâ£³m lîHƒ\njRêpÁ¤\0ª\n€Œ p“IbÌH·ï^øvhÂÂHžo6røSf°v|+–Ü•Œ&|r­hâ˜•¦oµŽƒA¯OS\"²â+^Â—N(*ýFCÿ±BE(Ei\0W%F)Œ\\(£VTðÌòE’XJ¬ƒuO„tUÄìíÆô>7^¯Nu\$ŠMlñ3GÊýÐ0Àô˜ëQãÌïnÑ…o\"ÂCJ—M1FIªÏvZâþ¸w—pðçxv\rK8ŽÐMo®zÍºº×¡{Tµ41{×™xWÅnèê%¨žÈÄ/]÷ªã·”©:,EU´(¦.eQÑi‘)zäXQÜQHJÛð£1òÒ(C¡·ÓŸÖ/N/lâœçL¤´”T„¨oñœ‘'|SÉÕ~FþÉ7Ý‹C…6¬æW…Ôivâçé<¼ït¸·òC3…bv´ˆg‘D0c=7¦*Î-\$Óµ˜Ë#q°‡J\rKõ¼5‰óô/e:ÿ†T]K”ŠX–#ã€";break;case"bn":$h="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊSÁ°³“TŒJzÜDÉ‹d†¾6­ò[Àí\$ßK’+¬ŒÓl÷CÔT»ODu;t§««tÖIÑTÒˆJ©î}F¶ ñC\rYÔËÄNÝÍ5,áaR‹nWFóò‰,ÏÔ²L-õÕ?Ö+Å –­ŠpSÍv”ÞP©å\nÙrÃ”a8§Ää½TAÓyJªÜ’2xÞ`Px0¼Ê3¡Ð:ƒ€æáxï‡…ÃÈ6Æƒ(ä\rãÎŒ£v8<?Cpæ4øðDùŒ8ÐÊ:`¢ü0ÃXD	#hà÷\r¸èèã|¸¾YËø7Œ›ê9¼‚˜¢&\r/Ô	aÞõaHl+r¼\"í¥!‘j}äSãF4‘|°Œ5lÞâ/”_BúâŸ9-ÍÍ‘DYpýÀâíÉ-i\"«ÚÕWdAwÍWf°È\"7¢ÃŽ-l„¼eVíYÛÊ—3%`nuU'·³z=Ôw®­\\ÇLÞëÑSÂ×ìl*¯Yˆ˜Â:ƒ @;#`ê2ïú¢¦¶k7¤¨âÀó¬ÍËüÇAF/üDØV\nñ Ã(ÝñJö¿I|{¸µ­£Lü©„ÉÕ§e2…ö8¥Åê@}¶Vé70ª¤€2\$E›ÄÁD4Oáê,„\\ŠÎ@Fw±” #ÈÃ0F-,¦âb¾Uú§â\0Ñ›4N²ŽSÔBD\n=LºŽ*ìt…¸¸ Vô)›cü;.™@,‡¬ôÐBÈHEÑ¼²jÜŽ\no&°Ù8—ü†;[}DÉu–Ã9\\B#XÔGX)’Ëw6êø·?%°LÁaj©Ä§¦ˆF²ãÿR.uF7cyŸüIM1ÄÓ‹Òd4M1äu‘Üš%^Žä9\0£ºwÙIä\rá˜3Æ*Ó×à¦%‚™l	ðyç\r¬À<‚\0êÈƒ¨cgÄ9†gp`oèÐ9‚Ãæ¤èaá…	jäA\rÁÔý€æ\nZy[t‘S‚\0†ÂFS¯„Ö–â SK4j Ä­Æ§èp^\n/\nHÉ9*Ú‘#Mï-÷¿uv×©nN¥áZ£’htD\$8‰¨ÁnPUÊŒ(ÅîW	&Õçq/Í~g7”fyN	¡„9Ÿ äz(`sìe¢†PðK€¸/öÀØ+a,-†°ðîÄX›bìe±Ö>ÈY%ì\0002¦X™plfÉš3fpÎ™ã>hå•††ˆÑ¥Èa\rg‘¦ž†-&Ãs:iæu6\"¢°däyeF3ÅxA“dþq³Õ/›%t›f(èÛ”©ÖØ›y'}gL\0j0¯‘dTÏ\\æ­Æ\0 S5Ñé\\¨µ|?µºbÍŒX ñ¾¬µÇ\n¤êPs®¥@XQ}š+	+Rg_É±Õ\0S;5VP*¡€Qa:;_¦œJ{äyO£4œ²tÜ>åÀóf’«+)Ýv»\"ìˆmº¡l§’>Nð ¥¢žgtÒsE?‡ø0 âïèh ÁÈ7†Ð@iMQ¡çñŽ‚\0Ç*ZAó?§È8K ÊÓÕQ(6ÊêÂ˜T!Ð¡è•[aLE„.©	‘ƒRl(2¸\$ò5z† \nQgY\r}sUWR£ùD23©×èd›ívk²û3	<ÍÃ{\0001ÎPL½G´òÆ\0‚¥xf\r4³f2îªmë½¤‹6.]ŸýMÐq@%bÃ3H‘ÐÃn\nIœEÔ£\$¶cyp¢-,,Òš`ù_S‡dƒEX2´Ž*ÁY`Û­Êâ)–ûcˆò\0º\\ÆqR {Å…&¼i(ÞÔÜQ¯e³?•Ó\nèÅƒƒeÝ§í¥5¢G%>aB£ž!1žJ-ã9RñÊƒÕ©ª'E¸\\åÓäï¸sì¤%EçÀ¦žVùGYg\nµ„-V8¥7ÚÇ‹Œ—LvÕñl‡!O Ò6vRzz.íSJVò%DäÖ«ë‡Ý”’zÁ¯Ä ÊÍÃLŒ76x4þLrMW'zí^-Dg­Š2ÁÎ,ç \n´!Ö†År6|“áÔë·^¹»‰	Ê|W3JMFg5—“v&ÑÓš7qmËr78S\r!éà;Ú%ãÀ\na”÷3ôzQ×“G_Ä±M0ŒäÄÒPÕúÝ@ Z=À)Ú†gnîd1ñèá½à­àËðmd@*…ÐàÒïyXeh§°2‡}ì²Lln¤`Y/TEôÛÌyÑ·¤moÊÌàom¶­r#Œð°/£x_e[ì}P™e±Øå„ÒVŒñ¯ý®¬çáˆÔÔlÛ~`ë\$ú!÷”O¼l8ä±Ðy)óyÊ™„£›ù.–Ý^ÿúò0R¹?s/6K‚D×îSæÑÂ>)K¾‰¬à6ÄÚ*@‚Â@ ¼ìX4ŸvÀ(o»çØ8dþÄÓëD¬°iú8ž+ª£|“×\\ð@âÎ®xîAÉq8rÚ½×áÝ;	mxó„ïhdpIÊ6íxß¯êWCtzgàZ‡´N\"ƒÜýbš(,á¬îŽ.ô†BlPØ\0Ïâ€°Ûppl1éÍK\"äéÂï‡‡å4×B|\nèË’Åb\$jg(1Œ‚‚§T‚ïöT0@¢ÎDðJ‰ð28e\0P-\"ŽþŒ€‚*üOf‰îs«¢zÖ­;†÷	iÉ	¢\0×(òeF˜b‡t½€î\$'Žr…š4sgÂ]âPÆðÌ¢ô,+NÙhHWkŠ€ÄT¬à¬IÎèÄ\n\\Ã¥¸j\"Ü™¢ž²ãn7/ì´pä%BäËæ²XÂØF\0ãm+Ž-Ä¬â± ÎKlÌÂp#&³ÂØÚÃTÛÇØp\$Ö;Æ-ÆÊ/H÷klâ-ÙbFÚ\n&¦ñÐëÆßLÇ\nMq,‡Š×Gçm}H‹°œØ¥^XQ¦q§ÚÁŒÌ6ë\nÂ¸Ð!k~².KgÇøÜóÏø|-ÉññPnHí‘°çD¦ñn{±½ÀòÎÖ´“e»ÐQ\0‘âíPí¬ù(å‘ÐS\"ò#0ìàìþÐ)œ(„šY\rÍ‡Ž´¤ãIØŠ­îr¥yQ^øî8£&üiá&‘&ÌÂIÐ\0¯R„Ç”Ï°tÎ®ŠV1ðs.èÓË)ò\"oƒ³\"’A\"ÒÓÎêƒp|vcV„Ñ”X\0@^ù#\nÐ¤¾/„Ým¦]Ò!Ž*3Q¹!PÅ -ŒÚN(S%¶jqÌ®€‰D++/ÚÕÒö-ñq#“	.ðU0íhŽí¨îð[\0001Ÿ0R?0³ˆ#\nˆgë.)Îç’ë3)óéÑ3Ž‰'r?#pE3\r‚ØsMM=3¨¦ÂOÿ³,ˆ²=5äU+SNÎ2¸qw\rñ7r+ÐA&ÐBþòÌîDø°ëjXJý+0<º(CO%„/8§©4’\0¢ârQw9c¯,°¯9ðFzŽ,‘ÿ\$2¶,å6òo”+òÓ²è SÁ>>JÚ|üá×\"S.Žq»1ÒDñd0ËGTŽSX‰<40hÄ­eT7!S²j¸ŒÑ;³ÓªÔ-¬ÚT5AT!ÏHP\r¬â¤Ä‰éû22ƒC…mCÌó=1Üâ´C<²¢ÎàŽDÑC>tÄ§BßODlÑ.ý§Æ0ñPÔRY0è7*ÈOBPsüà”\0ýó(Ôe&2G.ÚÒ0‡mE(Œá,‹bóå³M²Zò«Óu;óß7ÓeMé)4µ!GN³®Ptðm/‘t\r.Ô%+u1u	®PÃ=%\$Þ±Ä¡.SE?Tý6%-ÕH´Ày“*8Ò'5ÓS#SJÚ÷ÕBE:ÕHZÏyR#N3sµò¯wSiÅV5UT\rQ²¸d†0Ê8¬.Xa~ÛG©Ç½5†/‹:¤ÄWøÈ'DDtMä(ô0Òö²Žyu'41·RÕG.SeX5¿VUA@³U•ÌPuÑ23¹Wd‡#´é\\³\r'S')(¯#õkY*%‘%ÁMZE¹ÏT5{VÅ_fÅAõëŠ5v‰……aSbkuVÈ®Ï‰ÇD¥sìÔ¸jº·4>òæJ´ZeU¶Jp6NÐ6º54–]NË6t\$£fa]]Uÿ1¶sOë\"¸Vd¸¶_³q]tç[®g‹\0005v’Žïc§;èaOR?.-ga]ë\"…BÝDõéfÕÚLV¿_4adhpŠôÌÒðÐŽ–Ä%¶k>¶óH\n·”•e5)\\v»RöÁosoO;iV]•ï]ÖÔÿh®ÄŠj–9f÷qqp’uaT	i¶år®/'V\$_V¬îìßTÏ{R5\\[›'UÃOv¸Øñ3owu÷s­a–ÏA¶ø´ÛsÂ1•W3T}ïÆ/£µ[æ¼·/W(Éo/xËïá9S¢zŠ¨0SÑ9ÇÝ:¢)O	S·oPã·\n¥Gáz¢¡zòŸ{Oc5#B3ù6HÎäÐ*+V+âÂMa<t5XòI{•QjÊ¡¦,\$\0€ê\$ ¦§CÇ€ƒó€÷£^G]N­D “ÖAÛ:—'€†€ä\r€V¾íâ\r`@d¬vwgzwê\r¦ˆ\r Ì“¦š. ŒÈ‰s€çtJ˜\rÀ@\n ¨ÀZ\0@c Ç…¤j.©q|q.!³›}\"-ÈÀ6iwx\r‹|X!Ó™FÁs{Xœ¸ô+}·w r!Ô¼ÙÖâp*˜HÎB… 	¸[…ðË@t¼W—\rs/M*zÆÄHÊ¹({)O@áXïv´\nõL%vÅ¯ÆL6÷V³d3a{¦ÀÜ%—~µ~žÐÔÇ+¶F¹6ÇXXûð@æDP-%âÙ²1LB(Ã‹ãµ}Ó}•®Kb‰J-+ËSŒ6‡f\rh²P‰—o—÷L9o‹Vµ?YP×Þ1€¨éO¬<8‡ê\rààÞf(åŠ7–Ù†Ô~C°¶XU{¡˜2‹M:{B\0{‘ -Á=%Oo20áwz¹2Ô9•\\)LÏ4,µ¸¹ô€Bžtf¢Kó@ŒðWŽ\nÀÂ`ê ÚÔ†÷8sTPÇ»4«\$±B²i^¯’Éá;çÚ²9`/d®Vc¡V1-Ó‹Ž‡J\r@}4Î[–5h}:mn{nùˆ4öcg¶‘Xiå+„K—ÈÛdEYPfÖù~@	\0t	 š@¦\n`";break;case"bs":$h="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eàiMÆ~ó}Å“á£˜è!Î2Mý!ŠèÅPâIW³I¬K¹í˜’lðÒmþ0cL@ð#A\0Þ24Ë*š¨#é\n¦ <M²+‰p¨© Ï{ö‡(cZù«\r*ò9+`R¢:¿ ìº#Œbò»!«ˆšÉ˜¥ðÂã(ÞÆ‘dn&>N€§ ¨¸Ê9&c”4ºpáý8±p˜œ¨ª¢ò· *Â0ÊÂ„|ËB¢Ú5(ÍÔÏFáâ42c0z\r è8aÐ^ŽóÈ\\0ŒŒ2¬9Ë˜Î¹Ô ðƒÃ˜Ò7ÁxD¾Œ#“R:Mâûn\ra|\$£ƒNÆ\rÃ xŒ!ôÕÇƒDÖ\$ãš)Š2ÁKüŽ‚KHúFKÏhÃ»±èê5Žˆ`ê1ª4ÌpÎÓŒ–E”ºY­²Wc‰Ã{,‚¯Ã´¬Àƒb:7\0Aq\rKõËpÜvÔný\r‘B0#„5P/ÒP‚:¤kF¶½ó~\"£0Â:ƒ @Ë^/%jÀ.€PŒ:ÃXÆÃÈRàëOLî}xÉÇ£ÏŒM3Z3Œˆåx¹¹‰Šä8O‰ˆêšº:Ú‡q¸ˆ:Ø\n2DäY³Šc[&‡fé3õN´ìsc[4è½büÇhÒ<¹‰Þ\"”ÀÌM’_YvmÄ=3uÊý+kûˆô£mŽ#.l5›¶mÀQŠPm¨Æ«Àhü¹')Þ¢*§cÐÂp©xÂ¶94ƒx[³¾ìñ¾ï¼CN[XL”Ì³tŠ7ŒÃ2«%Â~S4L#{Z6£CÊODŽ£ÆÕc6\rã:Š9…‹èåÙdC\nŠâÐT	?_ƒ(P9…)pœ2²Ñ«Ä‚b˜¤#jƒ \\KÊË¾Ê?»âà„6â:¥ÂªR2½\n43²Ép­_”(\r]ELïúCYx)˜äŸå\\„Ÿ9-A5päh0såÍPða”{é¨Î&ÔÞœSšuNéä;§´úQR:RJFÁe¢”bŽR\nHÆ©U.ÅTÒœSÍ´ç*%H©Šh U*¬D\$¸ÿØQ*NÀ«*\\}KiþGnõ™ˆsú®r=¬Í«R\nj˜Á./Eðœ%´¬˜Áy*­-E¤lCƒCà	@£¹FþhÄu Ìl='¨¯Åñâ#®žR\\—›Ëly\$™Øµìa\\è5GRtODq+ôÁê@ÏÁ½<KŒ„ ·ECÉš(á¥«ƒr6FÐÉPâMS\nÈüNŸËèh9À€1’È,Í[052É”ÚA€O\naQ	Fg¿ùQ0®æÌ—)BDÌšÊF‹¡p ÍP7bCQ„v¬CI)C™.t\0±²XŸz!@XÇÒiˆA¥ !*GF¬”JÀraGõôËÈ¾’!Id2J\0†¦f#^¡‰\ne´;³HF™PO	À€*…\0ˆB E\0 Ñ6–€ƒ™3F© †R©P &ZcLé©íGrLÚRŠ|âƒÑ¤j‹Ä6•j¡T™mG…µ3Á|]ª\0pbì¨\"7Ù*w£K×egi[ P@ÙekcÒ·‡\0Ta‰zfÑÆRVô–&«~*‘ˆ·7ÈÌþŒÛš<Õ5Ô8w6]ócmíÅfK%`\\©ƒÎpÀÞíìãGl`7ÙïFˆù(AH2©àÒÎOšŒ\"&­\$ÕÎ•:\r¡¼š™°¡ã©HA%09±ö†ibùù!¾ÜÚN_…_\"ô’“f<‚BsG@!£°àólqfåÄòžsÒÝ›Ã°š¾]C.˜A6çA‚0fÁª%÷‘]Ú¨¢`\\Ù.…Þí CJC»+YæQ0µneŠkËNÊÉRŠxdsk@(!šc~ÚV£.¬¤z³Ñ²	Ghý@CÄx¡˜œFq~+8)…1”bf­\\9)6ŒI¸‘ûV¿!B&w¦ìH“ë¿w ý\$Â{©€T!\$	n­ÍU2f€V7DH;ÞGÐP “6ÆÏêÇ\\À¼dÃ\"ë–¤{9gÜb Ã\n\$Ä¢Çâk\\Ò+‘Osgý@p£7À\$*çŸÆ8¤ê-\n¡3y”±!°b¢ômÏxë?\nC t®—yYÍwhy\0Ú‹„b2--«H½ªE<#„¹sfŒôB4†¥ÔúREh½{žtÞÁ~›@lM-§ó–¾ :>ì½‡ ¶|\nqTÄ¤Â‘ w¸¤b”M¢¤•‚yV·d-šLw·)GA¤ˆË›ª.’YÖóAöæÎ0°Ê·ºGFù!£âRt\\Aiƒ up])µKù‘]«Ò¨Ù+8a·u¿Š\0|Šg¿?ŸË[\$•Ðµ{i¿ðõbìæŸåw—r‚}½Vê	ˆ;½˜H£/v-Ò|Àsü¡Ü×69Ý èv¹Ïž‘nªKY¨i(ÊÃ!ml•²ëP™Ð'QóëbqŽÆGŠœ°Ýèn¿ØLNÃ\n+/i>”C²õyÍw“Åä@A@d«ÅÚŸ„+7ù§CIÂEïÐ‹`e>ç9ws/\rã£·‰éû<Ëùw'aúA…´œÜ—9{Õ{9‹æ^›¡y¾—éoOBé>×²°ô¶²;èº9d¦3ž®Ñ1ôä‚uîÉ7½>~ÿUç\r7«ôñ]ø¾è£|Ÿ|~v[d›èY]cF™¾''´Ðô@Ünq1ùüeÐ÷ÑøUýœñüåhÖŠ±Øbä÷ü¯ä!vLc6d£æ8¢´âú^¯°˜Œ<(Ïüª¢\0*\0¬.ÂFn \"Ð\"ægÎB\nOˆÜ#è°¸N]øÏÀ#OÄþAÃ .¨Fïf1„ÄŠ¦^EŽÉ@PýÌZÊõIw°€þŠqJú‹vÈFFŒŠ’¯PüÂ Èpœ8zöÏ	Œ‰\nÂõÐ²Ä*Ž°›	ð¤Ž\nÈÉ†1¤¸=äÆ\"ä1.ë%€B@@V­°1®\nO¯+2ðøùodôB|ôŒNœç¯8%ÐÀY§tbªÆXñ8‹<vï÷¬x‰pÃæ„£Ñ2nQ(D‘,XÆVEb>’D@%ç5ÎbzQV\$ÇÕMBù\nñ\nþÅ¤Ó°Â!Ç&’\nŽõ\n0„DA/ëï†’±R¾¢Š\r#ÐCåêÅIX81X±¨Åý°°u,dþp»Qqi*Æ1ª(q?1Í@íÆ0EÊËf\\>œ=±¯1è6ŒŸ‘o,›QíÍž%ÀÙo¼.1¬\nÊ’â¬\"r÷Ü4QDË,öCÀÜ_Œ@‘*5M“\"Åø0Lå#mû\"¢Š_ˆgk]\rå†ccB\\d£~‚Hå¸µ-Æ##>9Š¸¥Ì@ïû°/#2j[Ðºt/†uå'Âû’Ž@†G ØhÌlíä'ð1ƒœ}†\$¡„%0¥€¨ÀZ\0@9ÀÆ@bŠíxÓ0xØ\nt/ÎÎ­4î©DzÍ Ð£(Õ¬÷.o(È„ŠäÒel2cðê…Ž0€Ú'Ã uIÔ10fàÄ–>DT/h»+.P3e´ëÈÒîÞè¢Ö|S>LãÅ¥ºãSN(“R?\0Ô\rãÐ³þGn5£&l†ÇÎ€%r‹\0ÇF£ž±³v4îêò3ÙmÛ‡7¥å6é9K²î«õS qóz\ràà>cöîºBÓ£	E Èæ@`\n¾³F\$ç0'`üJgfzóëgO(Ð*‘Æˆ%€Ä@cBñëW/¤À~àÆ¤P¬3´s@êÃâ~ j£\rçÂÂ8b,‘	,rq‚ß<FÚcù=²¢\\âÜl¯2àsCÄ1bàXi\"\0¤@Ê\"Á€«+œñÞ:¬";break;case"ca":$h="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb!£îú†\nƒHàù„\nxØ¾cªJ4²ãhÄÊn Â’8ÌêÈKÌN	(ðÈã+Ð2Ž‹³ &?ŠüZø«ïH¦—µÃ\"ëÄ1 ç.ÀP‡È#\n71¤´Ž©éÂ‰#pÒ1)£ƒ(hÉ†Y¹óhÓ7µjÂ7;ã &ƒC(3¡Ð:ƒ€æáxïE…Èúm<&¨Î»ô¤\nï£0H^1	+b:P\"ú7;a|Š>£*„‘‡xÂAi¬€4\rã#fü á\0¦(‰‰c8£ƒÑ¨°ÌZ&¢òÈA¨rê1ŽˆS!d1É[e¦riÖ£M­5&ŒKË´©EU<¡µ°Ä<·\0HKu]Ü®6£jõCÏœ­¤q¼Ê1²•Xè?OBön Ê3,V;/c¨Ë`¶{ˆÉ†ÉBÎÏ3Dß+%ì(š10ØƒŽÃzR6\rƒ~'ŽJ5ï1Œnþm=	†Z›gJñhÖÊ2RÜ@¸î-‘ã9…:ß Ì(Üfƒ#)]W‹¤W‰Ìvå«3Ü\0Å/Ä3ŒZ–öÁe„êSU2(ÿ\rÉ8ç·½(ñ\0[É0ìâƒZ×¡¢&Š®© \"°åÅnC.épá·Ç\\ð»âOK=\nH0ØÙ MJ’££xÌ3?“Ã€¡ŒpLñh2 Þ®'ÒãòÉYùÊ031VXÞ¼2OÄ‚<£Ã8Â¼¸Û­Þš¯/ÐÊaJcÛ\rnø@!ŠbæŽÈø2Ál9/HòN75É*N«.£kõãŸb7O	äéØŽL§hLIšl#	ÌYšbºHrEïº¾“¬™“A%©áÝ˜ÆÐ–Á&	h9‡rê­\$2'ÃŸÔ\nƒPªD¨°î£C\"%à¹I)@Ü¥2™†êp’%>¨UnTªœŠ‘Æ«Uz±(FéZ«r|öN3(ÉÜ§”.^ÁonÇ°„˜¦N…ADh€§x‚PbV0ÅvÀC.`ŒÉ„hˆÙ HÛ\0P	@ƒ÷‹Ö0 D¢(E“1¾BðŒïÁVø7!L™¨8Ë‰cï+G¡­“RvO[)›\$UþÀSÉ4*\$Ä\$‘òi\$2¶+l\r-«ct…”mä•#Ð1/%dÝ= ÆÌUÌ·>„ØÀd˜P	áL*dÞÝIñ&Œ};ÊP¤C#,+.gÈ¸^Xç_­ôÇ?ãØÄ%÷%d&2(*Ý,°jGäú†ò>úƒwk0¤À@ûA\0F\n‘ñ;«bzã˜™Òø6¦Àäj	‚V>Ä3#4ð‹]‰™ˆÚ{5@œ¨P*ZL E	–¥Darõ^åúŠ´cVIHK2„ÈÅÃâ>dxpch´ †bv‰IÜ;Ç9d:tB^ÓÕU ,ËXOL¨\nMý³&9 (’†\rº¥:¾Ð'!ró>²”2b’Ö&•ÎPÍZä\\›~sÕ¤G@ß\rc2M¤\\dNMò- ‘=MóêØb	±¤½7Ou¬ebm‘ÙL@IC£áQ_oáŠÙC6zÒS~‰»âz ÛÄd1¸*9T6|CÓJäUé1E¡8yâ¬•½9ØøkA7&!8Å³|Â˜ct¨l¿\"•ö½²ÇEä½4ŸË‚­peö6Ã¡Ç*d\rÅ<,uº·ßyg×Í\"ÐŒ–QgÍ¢û¶;SŒã?ælûª<d\nÐ\r,A'*™‚Q\"#ØK\n\$ðŠ™€ab:ÅDîº›‰&æBÿâk*~¦’5„FÏ`Ú¸Jˆ¢–@‚ÂDYbEØÙ:‰7-\r­œQþ—WÖß_ºStfAç‚ð@ºeË…4•w+g?–ëühaÈH—3õQí{ýµ²<Ÿ‡Ÿ—Ý	5À¦:à•ÝæS+¬W3“ŒÓ;³a#ÍÙ{-:\nsš/(`ÃÒOÊÊÏô˜¼ü£˜óÞf\$™ùþh´¶btq×2çÓe§s^Ÿqz•Å+Úá/ƒ½L\$‰a¢®R‰'šÌ7OiC­ìä[ m”¢aÊŽU©ÛI„Ý'„dIŠ‹eª;/\n‚\0îC«ÒhI€äÇVŒ\nÉé7¶2M†‰|¾Ûë ÐB¶NŠmù\$ù7\0 è²HW&·ÖŠs-V†Í=V²i[¢¤™Y‘+ù*M\nÑ/gõð¹Õxqš;¾×qf>81¹UÁ5®*ÕÃó“_Î÷“W~Q:Q,½÷N_Óu:üÀVˆ‰>Ç3-‰[-N¸à(#(6ãÓ; §\"4\0  IXGJ¦ÈŸõ’ÈùéuHü>lh–J/Ð­¿—Õë¯’œ	ïÝô»ôèš†bšu€§Œð~GÂ«Ýdªé—¦¤ûzù)Ýò…5×Ç3]»©›n|W¼Ø>÷â9ˆå\\ÇÂ÷ªýß{µoáMµÎ71âœ—óïÏù&ÕÊÖg'Ò/ø–Šüd¹ÆëAå“?œ}2ßÎ 'úónßC—³>×8\"ÎSéôWŸá÷¼`Æƒ Qzô½{(`Ú;ôy?~ñWçýtï‚f§§+ØÙRîöŒ\nc B´Ó7XÊViñ>7Œö!ðæ~[±¼§õ3è8‡§š¾ŒÐ0\$ñâ\nOâ^‘¤Ò¬ÊØJ\$& (Bï¬ÁëÜ~júY¬CØÇŒ0ÁGÒÿNØñ/r³ú[BHùNîö0Pû#ûd×©rH* ëÚä/–ä†ÚÆn0ò/¨Yxóî`ô@Ë,òkG„¬nls¥Ð¸c¾Äl 0¦ÆBpµc&bL˜Ëp#ˆzñ0rù¯‚=¥~&ÆFÐ…ÐøBbm+ðMg€×¨ÝÖ(ëg#`P—ŒjJÇ5)À¬œC¯ìË.v}_Vo¢#ºaQ\\ô(ààËAy‘,úo&ö1#q*‚0ÞÑ1!qIÐú°1G±JM1óO1Í\roB“Oê>qO	jÿ	Œ5f<o6â,&#âëôQÃª2÷°`ñŸJ3Å®DqªÂ±ZÇ1¶Ià¨UEqp•Œd¦~Í&ØD±ÕQsv& K@Ð¹\0¤ø@ï¢²°Š\rç²ñ\$^ZFyðò)„÷Ž¸#ÍÂæ2—Ç|b/…ˆË´çbH/€ƒ!¨.+âL[e¢Hã5²…õÑØyåÌÓòðJårTáŒh&.Š ¬4d‚\r€V˜äÎ}L4b|è^‚Fc&‡&£æ``Ä#§˜\n ¨ÀZÖv#î>¡ç!ÍöãC%¤î8Çqò´öÇ@E‰Xqj¯&.}ÎJ½ðŽ[Àò¶bP·n›§=cÚƒÞ´l@1lG×È¦øå¾\$ÀÂ—f/q–éÃfâJ2ˆ&Iý*£¦	“*ÎF®6ã!#‘äXÌ`èëp¶Àá\nN*6EÄòLcêÄANò“T·É'!gbd7“hó\nÛóf1O·«\"4ÒI)g´ÃØ&ËÎzóhF0P^FJXªÌ{P5kís(îXîOœ§53´híÄíB\0ƒp?‚bmœ@Kd ê^¦¨’?¦:/Cù/ƒ \nËÈ[òèèã  9\nL5ð¥'ÈtmÄðË	@³6\$¬ß3pN19ÄÐC`Fdª,rÑD%ˆO@	\0t	 š@¦\n`";break;case"cs":$h="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¯ÀÊ:4ƒÐÆ2¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡ÂÒžŽM0)¦¦)Jã(Þ6ÂcÓ\nc(ô\r±(¦<¨Ñ\0ÛŒ£’€9C,„6 B@Ë\rñkZÀ-°À ‹\r#C¤PŽmèç\n’°Âé/£„Ñ5\$Núx»¾(Ôì‹ÏôÓ@!\0¦(‰ŒR87é\0Ê3¡Ð:ƒ€æáxïM…ÃÈ6Æò¨\\”ŒáxÆ9…êËö7M£xÜ„KðÂ9ð\"/ŒQXÜ5„Aò`8'r Ý¿aà^0‡ÁˆØ °@æ•ŠÑæã¢‹ø-\rïsÉ7ŠXÖ×©`P 7CkH77¨”ÔÔ\\W%ÌÒ·­›5Ž¨{Vê\"MÀ×£ @1/Ð~ßøEßØô¹ÇhÈê8£*D`P—!§ƒ¤òLB`	0ä2ØLX¬a—£Ñr&¡V·öµ£K<Â0ë]ÂøèÏ‘Œîd1hÝv¨5Œ2t4ŽÒ¢-O23z¶84dØDÔX‰0mûö<˜`‚5ç/Šç•\"a/:VM£	Ñ	».VßcÐ˜Œ£¶ÞÅ°C{ðø]×;{jÌ…ôç\\w.ü£åR”YhŽ‰ÌÑÄ\rTwÄ•/¹1ŒS(€\$-£	#j\$91b(ñÑäÃÏ½\"ísyÞ¼3ÁI£ÆÖ“Ì6[¯:ŒÏÃ2„7©Xž2P3ká·¨Ný”7\rù[zk˜A?Nó]š…\0õê?kò5%µoû‚Ts`Û392šù©ðÛèzH—©ë{´PÏeoº÷Ã«¿|OyègÌ‚óé6ö¼ÀÒóŸ›ÑOÇ\0¿†Üþ“Ëü4ÏýðÃc+Þ|ð%›4DQXt&‚õñ²xS\nAŽNù;|!˜”†ÓÆáxÏ!ý¿Òn|ƒ¤MDh;.e¡SKê´7ôF“Ò+{©ý4¢³¾øS|G>b´ú¾H„¸¡KÐ(Ì¹š\"jôƒB_EqX€ÅÃ\rTc.djAI)E,¦ÒœSÏ¥Q*ELªQ<ŠŠÁY+El•ÂºW€ùÐ¬HÆJâÅXë%e‘2˜Té€\$Þ‘‚4”E	;ŠAÎ*F%Þ‹‚Ê€,µÌ‹ÒHN	Ò{\$¬¼—¹b|ƒÑßG¢eþøŒ\n)¯j€Ëé}3ŽŒãB¶T€H\n\0‚`L!ZE¢0(*\0¦¬[,bâj\"¢„ã6Z0ÅÑB<†È.‘Ä…çŒ—™ÂfËeÁ;…g}KrtMa¨Zw1|ŽÆ}PJí^‹ø5@%WÈ‘SÄ\rr\$Š“˜i{À€ ©õB@žé@æ¾”g:®ß3v˜‡ì•¾çáÉñ@0gP(ð¦¹¡+	=>\0UÉCÞ¡fu—7 kÐ\n®Á¤3‡S†#T!©dk}¤J:\"Š\n…Š&RNUƒis1èLŽâ@H¨0m\ró¸›`©6Íú¿%&Å\rÔ×¼GzVJ¦Ø0Ò™iÑ&³èµ’“VOC±\"GOº‘8cJih!§ŽÄ\nt“,ML=œÚiC‚³+-pµqRÖLa:H–Ê-W.w\0­³39³rLI+q)^¯¹/Ûã`w	Ó†ëhÅ‘\0æh#q>vI”•¢ãf™Wüõ”dN—>aOeÌ¨.ÁžÇVãï³¼©%%Ú¸Ä…Þ¨¯\\GÊW—v_ÚHR…¤1šÐÒ«ŒbUE=K¬éîæÄÚ›‹’oNT-Ü]ƒ0¼5ˆ–s›PÈ®3åtlž.áQ×˜4KX\nD(Èì‰Bj_ÌXO½³êû<{ºº.j_ºÄ9»hîCÌ+W(`\"(ðÂ`ŒXYKëØ‡Ú\nN‘‚¬%†µ*†šB¦«(8\rvåÌHÚ‘c!h¡âÚ7ÕàI¾cD¡h2 Õa_‚×•øu4[c›b	µŠ§‰¤`Î­C•´Î§nÕMŸMaÒ…„M¸˜ÆPÓÀPF‡µÂù×3QU¥¿ÌÝ°!€ª	”É9×YÅº§ëA÷KYP¢Öbzi T\n!„‚¯EI1Àšv8ÖVÃAí;7 ¿‡¥êÁy_`‘=¢†¶eŸ|P;?f¶M›äŒQ\$M¦£‘Fvˆd^vÙÏk,çàCÞ-©0@×ß¶fŒH‰SÚÔ:Ã0w%Ú{Ò½sÕåýgojMÝ»a¸í½ç·÷´PßdŒïµÎ¹ÈÓà	0¹ËÃ&eSù5n2»”d¨A_Ügxpm»½\"váŠ;?’q¾Lš¥õÚ¯±‚rÓÈõ¨vÜ‰|#™Ó\\>ˆ1[T7»1ò?KÙiH¬ë„'trEˆT'J)OYâ(JOy+V*¥uêU:^#À€;†RQd\\©°K„)‡rZèÒü.›4Êm˜[iÁÐ`ë€Û6Á¶it4”bR‘ÏaÄð½ÀÝ€ìo[³ü]«èßîS~ìå’ÇëÊpÃ…~W^ö{Í“¦ô/—ÙPóÄüÜÌ—×Ÿ•ž¦þî-Û¼¹ý~%_~¯sû‚WìÏ«w7žbã5h[JóD³ÀÞEû0ÉÙK+Ï5˜\" — d4…\nƒMZñõ\0­\rˆ–Ó`8šDÿl^¡\"§3K˜ŠÌ£Ü²Þš[ÀÅ€ Í%g¯°æ `@\r@µåö\$Äºçhõoj G>ÇíH½B8òÉî\rE„ôo\0ëÉ/fŠÏˆõËªs±Oëà¦ÇÎ#PöãJë'&r'*öNømNë§ÍÊ|mùn´ bt<ÄúBâ\n Oy„Ö#ÍòÜÐrŠ®\$ÝkVàcå\n­~<¢s Ãïé	-üÝGIˆí/PE5ðpáðVÝ.&µn*°«±#¤Ïaá‡®Œn\\í\rìó#‰G/¦ÏPúÜ°9`ÜëLÚ\ràÔ^âú7êè#.Ð!¯üBédfZ&!Z(ãö\rJZ¥î…„Dº#Åýñ>T\$\$Àà9±*–†P\$†Šªh\n²Oô\rÌÆ7Ðên,²ºDÇ£NAÃŒ‘¬àüOFù+`Læyb.¶ËFÿìº'fž®²ãJ¦§£é'?Fƒdu‚xZ\rLu…ÓeØÓíBp%Ï|9í@•)’÷’ÇñÙ‘ÝqÆÁÏJÜãz±æ#,VqO 2™.æÅÃ:=f.x†\$	b*Í@ú%Ú¹Æ†Z<¦ÈCm+\nÅqà4¯7	ðÃ\nQ¯®|ÒÐƒ%úø¬‡\r6g&LÎ½ðÂ^²\rI&¦À9Òz½\n\$ê´Àì=ñ>/Æ*I Ö(Hç\$pH@Ò¡%%ð<J’ž'’±pGñš#rº@r…ëÐMòÊ9¦&Dq»ÏmòÚÿ1	+Q]²\0005Æ+(mQ,úÐÄ«-ðï2þÏóÿ0­RÐø®µ,m0Ä±/…âÏÍDäiQÚ7D4Õ“.0ðK&‘3Ó	#\r3¤91;.à´#éÖË\"ãZ]°ª23ZCç<ÉèžÀë#!…îk\$Åž3v”szUÌirŠKè7b58ãG7ç Ý3–¾\"V	b2€£Ì`†Î…Ä¦:£\"%§~A‚ŒEâ\nhÚ°`€ 7g®;FÝ—°›8ô5b„4Mû\rP˜àSðá³õ>n!?Óì­!^×åº\r€V:\"†j'Âìeó¢ˆ{¥¾J©˜eD.|2òANÂ‡Ñ,&Éj\$ˆšCáf™ e ª\n€Œ p%sà¯GIÔà-Û8¯ôtJ÷Ð·\rt9Ôru,â-ÿ?ðÚ\"	¤\"¢.á¨Âw&huÆÔ^²pÇBþØ aâñã	b8þ¢üD>eêž”b\$ÕCò|-ÛT´11„¾ê^_kECP³îœ4#¨MîŒ­âF¶é¼¼`lì´²!{NšbotþMõIÇ:-Ë¾÷õá”Ìœz}DERÕQOÆ{Âˆjçë<þõ\"þpë0`ÝTU3RG®à<b„Ë¡U•ÕŒN&‚Z‘z‰¥ä§aBe@a4ù¢Fùâ‚(qêhLQYÖÿ`ða€¬'IcB#1Z\0òñBŒ2\"U¯E#À‚#ÏÇVÌD[¯M#Ç9MÃØ4Î‹x¸Ñ`#@ÔFé˜ºgh·kŠz`Zõ;Sñƒ+’®LÐŠ1‡. df!Çˆ";break;case"da":$h="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎNS:On&^ïn:#‚þ'%Î äÇ4{ŽÚ¦##°µ°8œ2Žƒ´\"5¸C*É\n-\0P˜§¦°8¦<ª(¦…<;²ÿK`ì7\"czD³ÁÂ#@ºŒ*<ä-pp …2(¸ÜÐ£ëT`!\0ÐžŒÁèD42ã€æáxï+…ÉÚµ¯+8Î©S\0ðšÈ0Þ7áè9.C¤œ/ŒI˜Ü5„Að’6£Í‚”:xÂ(c˜@âƒDd˜ACª€\nbŒ>š¤â³66£\$n\nÊz\nüŽ£Xè:ÀæÒ#°Ò2ŽàUER5)ð'-`‹¡£ @1V#(ÖÕÂj9Æ(ú,þ\nø%¬Ž\$†0§°8‚:¬aà1§¶S\"£0Â:ì¶Ž¯å\$SR€PŒŠÓÃLÎ¿ŠcÛe[C Üµ»‚štî\r²Î9¬ŒÒ~é·ý´6\$O¤<4Ël0¨¦§cF3¤@PÉƒsà•hØŽc\$èQÁh×dâƒ}TB®ÑƒeUTc#KK‘ÄuUåÈÀæ„² PžêÂˆ.p0ÁˆÅ¾¹ø(-2ðµ/ó¸á€Àâ*W§ŽL6vËc@Va™?‚žLØì,è%˜Œ\rã0Í‹*‘Ûj:ÁÂ ßH#Ê92Ž£ÆúŽc5¸H«Xæ&–ì0Œã\nÖä¨u´¶7Z(P9…)8ª38\"ÒÐˆb˜¤#«¥…¡_y¹JUlÛŽVRN&98@ð5cË:>ûåÕ!)ˆá‡³CÒöûÂñ´1ê2Ä\$éJ 9dQ”49\$U—}Š§^\\IT™'J¤¥*JÒÄµ.At½0M,Æ¥LÓDÕ˜Í¤ß8²S¤í</²ŸSùåPhQébÎ `14\0€3“¦^ÏP­2IíÜ‡7âAHëT4,Ü¶»4\"Í˜p¥g¦t“—G\"¦=hê7dH›¹\"Dàs6€H\n\0µ¸B¢|P((€¥Þ“KE1û<EÉË9‡4\\œ<0'\"GPoÞi*%„¸Ï¬³<‰òò(½´\"–noYë¥^îÍã†sÈ{Ëy-”•lƒ|uDÀ4)¢zW	äÇX—„ÈãÌáš)aŒ¨µ\n¦ƒƒˆm¤¤•Ã€žÂ¡Fñ7Æ`×À /d\r½ÚÃØ)Ÿ\"-l¦²…á¡;'§°¥†•ôCq\$ê€Ð;²”IÌx \rfHŽâA™8€ê4&ÓÒìÃJIÁP( ²2ž•2\r\$ÄS/×2Õ8æ‹€Îe\0Rüj¤)z3 œ¨P*YÜ E	z¬Î£0\n1w!CÛ@Pô¨\\E´îÃƒ	( 9¢˜ç„`Ø¬b¢æ¢ç0¾.`Ô{@S—s&úM4&‰0»C( ¡'Êx ÙÒ&®áL)5+JZ#:g†…­Ò£øÒ{{gˆç…e™4ir\"f*}`²<Xñ1Lä5AFgv B¦I0æÃØíÈÁDmÉ´ä«eøjÅbtèõ‡Q@ÂÉY¹j´*Rî»Hz?²\"¦(b×:ÁÂÄã}Ùù'@†¬º—ƒ¶VÚÝAdúªöL¨E|\r„¹2’ƒA;my/“AT)…Nªk©ª0ˆ•—öhiQë/á,’±š0Å)nµë’†bt´â/“–s¬BÐÍý¼\r–ø\\\\òZMûGHM!¸Ö†Øs[•-ss\"a‚’Ð}HÑÂ²þ™:kˆïùèC	\0‚@NÃêgÍ,xƒpe€†BŽCQž–Î°ú‡\\bµ\0¼«+ÃxbÈJ»VÆ(SÄËj¶n1ª‚\0žÜ&Â†0`aJ©ƒ‘	w\0'1œ7Ä8O,MŠ1T%?e-‘®öJP ^/'m·L<\\0æ1	`»	L,3\n2NÉdN0voxwX ÏÒ>HW5ËÓ\"Ô;pÏfáGSuð®CÞ!S:ˆÖ —±%:Œ8FÇW€s`˜DTÛh\$ˆ9­äè²Ê2ý¥p\n¡´‹½bL¡'ÒzVN`Ti¦›¥2À´zIíMw)e\n¡¡Jgª+´®Õdò™m`jf2Ú¾·ë\\Œly,ùíŠ,ÈR„Ké mT4Õ\"–xòÌ&;;em-šîÃž¿¦¢™ê*t\\-d@¥šÒ\$³Zi¸b\0@Sùa‚\0Q[K‰\"-®k5n^)†—ÕÚgzSâ–a¶Ìç2ŒkúQI©^ºßtÒôoX‹­wã^6…žêÍ1M8‘‘â¤7Ó½yÆx¦–âÓ ëÂL]áBÈMWàü*Fñ¸iÅ:dòt¹½¹Xtå¸Œ„cÌé F¸S‘{ëž-ÂóQ°œw£nEIÐzL.eŽë½ùm et§\"SÛ–F°ˆ¹ƒ†{€\n»Ž%%4ÂC&}P¶Ü(2ÔúI\\L íÃëóü¥8C‘++9¼[%Dž¨#;ÛÌóDG¤®û‡ÑOå··-	W[ºßomüÂ\rýqZ~6h·.¶´Ê£ÏêØmMÏ¤ÒÝW¤*ú0©­(H¼µƒ{zmyì·/´áþ‡~{ƒé-8W§\$öí%{<ÕÙèhøÈèüm#¡fÌ0HE*bÑ·æ	‡+·¥ë0snSØ¸¹z¼_ÐtÿÅÊ:ŸãÛóâ7äç³™b¬:µ¾*ùò\rî]5OübS¬ob'¯ºB…@ÝFº)£ÀL¯ÒßO„:~õDà×.•ïx¦ˆ(*~Ôg°9ÊÞXÏjü0F@MíMxø\rãC ¨¸ë“¯[+ *-ìämQPpø0Ve£J¹ë/ïûK¢\nˆì¼rÁ\$Wp×›°t?°OzG#4¼Æ?€Ž\r ìÿÐ¼)&˜@ðb1hŒ\r††.Lþj„•J†Z\r^É°ØoŒ€Ðß –XL,fb-ÀƒÏ ³ÇžSc@QOžŒfl©qÁÅf#~Ç,›®|·pß€†? Ø`Ö<@ÖÄ«p€NâÛ¨3ãBâL5¬Â×.ÆƒÎä#)à\n€ŒB ÎNdd^‚NÄLjˆ¦ƒM@É‘tåâ„*I°oDÃ	jÄŽâR‚0òdþ&k\0bfÚ„7­\n7ÌæbÑ:u‘Hü¦kíÛ\"ú>ê¾(ì9íÀ­¨€µqØ€f^Råü#\n»k>aMb2ÆÞê^g£ÎdiÖ¦R•ÄZ(\"¥Íòmeb×’R\ròd`àÛÒ#Û!ïlß’\"è‹!zã¢b2*‰íz×¨;ëNXìœÎÕÑœ\0šØDá­àbøÝW&¦\"èIlkoº\$%Ø'!pË´;†w\$+C ‚-Š/ ¨£ë°©\"Y ò\0000Ê,£b‚æ§ªs+#Y&]PÉ\"<cà¡âÔŒˆŒAÂ.\r@";break;case"de":$h="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	f-;¨ãL:;L(Üþ3£’63 0²ù½âÐÂ•=ê^ç pã\0<å ä	Ã+8éCX#Œ£xÛ.ƒ(&B‘ŠFŽCÜ5 ƒËÔ6»h`ì¸ÄQ\"â(#˜æ;ãéÉãt£)ÉcxÎ€SÅ2LÈ;Âï1àÂÐ¸c0z+ã à9‡Ax^;Ñr46 (`]2Œáz9IZá@:0é`é?‹ã3)„Að’6Ž|Žø‡xÂ*˜A#ŽÊ:\rísh‚\n2bHªM-Øë1³Qƒ”:C«z:º²“:¢½â²´;„ÒäKêþÛÚ¥%®ñÇƒ(ê†(SHæ‘Hz!) ÝwjZð'I%³¯5WNGbø7…¢L¦áß`P­H4rž”)Ë{&Ë„zb\$\0PŒò·£J@÷ˆ#:Œ2Œé4½¹C«Æ[jÐÄ¢®Q6H/ÏU ?XøÜÜÏø¨2Ò£e¬–B3Šâì\r6¿-è8Ç);uèZ%ßRÈ7æºK‡ÉãLÐÅÍr¥­¹NBsnÛû\n±¡SnÆ2úì02§ SRÕÉU8á2Â¨cÞ\"¼Ìá=öÓ¤í)&×­Ê”„)ìC‰=ãeí«H:ã0Ì6Q©˜‚1Hãb6ÆMÐì­pƒÌ7¥c`ß]‰“rŠÛNL……Á\0…\0 Ã€ä7å{Ò:Ð%¡¨ bjþ Ãr.4'ˆ\nr6ÀOJu2Õõ½z\rØÍãwiÛ9Ïww½ÿ‚áø|¯‹ãÞ•±aœ…z#w¦™ˆb˜¤\0T\ræ˜ò3“\"äŠ+æw†ÅÊ„dÊC©DËä®\"žÌHQ	€ŽyÐ\0È‰ãªuŒ|¯óÎ8s…q¬ÐÄK	ñ(\rÆµ•¾ˆB^Ïá»Py%dMOPr©É1·‡ŒSÜ/0²;@ž“àeOÊ(5\n¡ÔJ‹Q¡ÉG‡%\"FÔ¢–dje£Åä|¨ŠT­ÙUÆòûj¯ ŽTÙdQò¶¦µ¼SŒ‰Ë\$)æåYŸ‚`Â©ñp¦Fs\"uB€H\n\0´)’Õ.fšÃVFñ\nºr¶AËÑ3/*4PätŒQ?Æ€”âtç\nÙ””ˆçBœdLãõ’2NSJƒ©*Èè(* ¦#”ò>×‘^@‚X;tA•€†çW 0aÊ“’nôá	>(h‡¤^Nå F‡‡U\n-Qx_Ã’. ™;¨ƒ`h)™…r8ûH4uWsD3yžWM[#¡2(ÂöuIa´Zå<ÑøfÒ‰QZ)FÐP\"\r%eI3\n<)…@ZÄAÐ…7”§rj`øzp`ŽQÊIK¾Z%¸½N(ÙãŽtÒOäêƒ<´jX¢¬É²`Í\0k)¹’?’\rK(Ú¼	”¬‚þ0T\n…ç‘—F\rŠR#¤|ØIPåOž2¨oÌ™„fÃ>‰ˆÀ/“SËNT(@‚-(A&[½”ÿ)Y:ˆ¬“÷V¥%³ô”Ã‚›DT€›“ÚdÂt†§tZÊ¿ƒÊv‚)ñ>l½¶¸£žà:ë®8£HÖegÖÌ°8„Õm¡bÄ‹ã5ØBÚŒqwæu19ÃÔÁŒ8iiÕNàæÜƒ*©!6ÚÏF¬AÒ±Vf(K°[/Nœªg*Å ³–á ¸lP—Ñ¡ã€B~#6ˆÆ8'MÊEA¬¸#LÚ\nÃ%ÝbÙà| «fn	î„ðAn&mº&a:‘•D’‚\$R…ŽH•æš¥©²\rÖó0Myt8tÉàîÁ–šÙ6Å¼0#eu2)\r7Q²6\0g‹¾?À(-:€0Ä#ebÕÞ¼™øNÃE¥¶À—F<\\B¦f%‡W0³|ÆdZÄ-4A˜ê˜›%1,EvïÀé°™Âo?Š4ÆJf¯Ÿ\r¥Æ?OÑÜ÷\rtl8T!\$\0ãM™»8oØ7¡pêñ\$•Ô”–ùØ SiÎ~‚“”üAyb~&]s™ÅÞ@õ¡šAí1jÙŸrIaí\r	˜Öë5ÌºjÈs14êÊA¶R2;:l]p¹µÑÙ.ýÍ!	FGZ€m-MŠL†¤„5U[ÙÚº½ÈHþ6ŽÂLÏUøî[ºØ›Û„g¯, ç°vžóÂ!Ïy\$å-¶H1fÆu¶UÒq¨pƒv®o\n….Rˆiõ!KÕ6[RÑqŸÁˆÚVõÈ„Š‹ˆ\$×'‚˜Ã\nI§R0Y¡¸ÑY‰¯1ÔÐéÈÀ…(y³¢Ù·˜À‚·¹ˆ¾<5Kl‹€‰ª¹€)bâëNpz‹_+vðŽkPôƒ:y<\0É\\\\Ò{Ú¶G'³d2\rÚpøeë\\³öþ±£œÅÆUê÷SÀ‡b±|))ƒÅæVÈ3Œ8÷Ù”+)™®K8Å23ßÞÍŠäò˜Teí‘²[Å%ÎâäfxB¢ø9|p€™gMÍ¶ÝÂáöÎ¹qÒ™Ñîæ¾‹V®ªšnw´ž:?ßÛßsÜ=Þ@·Æ6t÷ò:—D5f}Æû®¡ÞÌú¿CÒ9ìÆ²a“rÐHT½ýnÅ¼xÕy[®ì‚ÿ²¶é2:Aþ^áúæÔÚß°Ìp¶Ùd ®Æà¯0ËÃh'ohícÆ¸°\r°%P0Ìë/”ël·\0lº¯po°rBf\n%Æ0 Z­ª0\0æ8# Û*ÖHÌ>-ãš\$\$Ò„”5§Š‚Ä–¥È¬ðJ¿PPæÇòL&+.(<¢Ž @O§„¦OGëp4=b°ðË\n ØÊ‡PS…¶ÈŒ°ËOV²#BÌLÈ1…¤¥¨û*àP×\r®îö°ãÅ§‡\nï0í\r:omøìù>\"fÐÂ‹0Ü[ë‹Ñ\0)°ðøpô1°ÿ.æÐ±'Ðòpà¦_„Î¶\"6@”±>µ'ð–…üàŽ„	ó/Äþ®ìúðé‘Zü‘^ìO“Bfþ‘ië¡†0ÀŒš[\0 ºqDY‘‚\\.Jq+£`ÞÇ‘‡¢6V@¤2 Æ\rfB/æ^i*Òâ8P8†¦úd³oˆ3àËÅ/—‘Ýã•¥Ç1¤À°jú|úB¾&oRÕ2…ï Qò[,Ô\\Ãë!BŠÍqÆîPÞìÒ:¯…²\"òÍ2\"\\’FÅñ\$ÐâšÑd½#çkŠK¤%O¯ñã%_ o²&`L\"‘fQ±\$œCÞ\nàÒ@¯À=çãË¨VJ\"W\r@,\rn½±ˆ¯Žâ)Àß)©DuÆ^~)Z¢+&Lé¢æ£´ˆê•Ë¼;b2Kb»¥†]I oãL'oÞÛˆš@†Y\0Ø`–s‘²b\$f0£°éo2VO<%¢¨r¤%Ed\n ¨ÀZJ§„-ÃØÎš38áî&Þrž×#6ÛNÒ#³0oð-àîœï2ï®Ü\$íJãBTÕÃlœ5,òÆP0Î”•.\\AÎ¨o2#¬îJƒr6ý6çê£Óñ\0ç‰R-Ä|Eì	‚4IHðØoø\nÌ=äˆ\\àÚ:ŒôÏŒ…+~ë:†àN PYÊibH2\0íÊÖm\"x î¢;3ó-=³Á>³Ä'’Xõ Èwàá=“¾psÂê;*¤*Q->ŠÑ+¾\ngn)‚;>Žþ9¯g2|2âŒÁ\"–É\"6:§\$•\0C„wFô+ËŒ33:ðƒð£^.KB' š\"tJÌ!c\"ü#S’}„—<£I<å’\rÓÔ¯b`Ht@£,øl§Ä0eE£>Â«XjðÀ1¿îÊƒ¦U&˜t®f%Œô#ƒI\$@/b";break;case"el":$h="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdA\$šž*¬M\n@Pd0ÈÂ0œ7‘ä7®‰lHæ¡®‚W/Jj°¥(\nï>Îr¸™Ï¼bgfyª/.JŒ®?éœPEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTHÂ“JD ±©fy%³)2ª°‘¢‹’Ó: I.²ÅPž[¥1t‰KÒ»¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñœQÓÖ…h§¹6K>ª{˜‚ ïÅ¤š¬oiœÙÔv²@M:õÖÚD\\“;ï5d³®zZ„jRÇ7³18¯§¤‡iÓ×ú¯‡ƒ@4C(Ì„C@è:˜t…ã¾<# Ú4Ã(ä\rãÎŒ£vX<™hæ4ùpDƒT2Ž˜ ¾1\rƒÜ5„Að’6Ž`Ê6å£ xŒ!ð@Á`è4\rã&p7„¨æ2„˜¢&\r9‹~É.EÚÌ_<‰rFÇ[·ÂT\nãêŸ¾»T™{n7:ø¾RQ9B(R¼ø§Ðô‹oè«ç\nðh\\9/ðu²N¬Ñ2z‡9óQŸ,ºA.´19ˆÑ&bá¹\rÓ´ûçiZ“‚kµ.MNÈ¿ëÕJ¶!•\\7Én›´O´¤hrž¨§šƒ:HÑ×¾²]›#¨LŒV”7¶”²\\xÖúõ	À¥³ïRøŒ’vª¢j–º8k•ó'øs1M7R“š5µMŒ3„â4¤AA›ÃìòÒ‰9EÔ®ã²ÜÓ;¯?Q9‚ò¥N£…zdàV+óØ¾È\$}I°¶2AW)ryP@™!T€ƒÞ!†nÎÈ?V¼‰\n†n=94AJ:\r[±Æ,®}ŸÓÛ=ñÄ7²ítB.pàJVêâ™eD°-ñ%cØõ¡	Ã‹ÇE*DwröŠ’¶pÈÌÝÁd¼×±=n•æ/¥ù_Çz‘6@äH‘Õ!ip‚ø¯ÏùDøœ0\$w]Ùó ²28Ã€VIÚuñ#E&MéY9‹H,ópáÈ©RˆZ½ÙÂ˜Ã@±·SJÁ”CmÑˆ”ŠÃ¯!š£¯”&°\0—¥&	J´mRq¹Jâè%®”§XÔ¸	Tdåaö•ÅRJHä\"E¥£|AÒáhYy%ù	˜-ªaqXaRÊ†\"GÅ\"?¤þJIhC\naH#G¨~Èb]OnýÏ“B¸¶	4ç2h!ÀU‹#I/&IíX\$Ù£)\n:.0¢]PöÞuK™Q™rì„KGÔ•Ü²\\KÔvXM’E(Tï\$\"adRI‹\"ìSïúeØ{uKÍ†°ö\"ÄØ«c,mŽ±öBÈÙ+'e,­–²öb™›5ìÝœ³¶z™ûAhm£DV©rT‡í§µ‡#¢>­Á©‡2L\\K™@'Ô’ èPUè ¼`¤¼S¶pPù1æéóˆT«Aöˆï1ƒ¹3_*J¬¦ÉªQèäW`Ž\$†Ù›YLI¤¹#XfLü¨¥Ö]\nz¶E‰ý\0¨\"eÈ„…NOø[õ6´hµªPö¶Û\0\0(0@¥·åR2¾%e¤î–-Û9K\$­µIÒæH‘+hœ®ñó¿ábaE)’;„P»¹\$øTKŠÐJWQ•É†ý¯UWÛã’ÏƒñÁ4˜Ûw)Z,X§µÌ\0æ‚	´qD\0”6ª'!°Q¬¯dégxŽ‰¡i4Ãa‘2FMI¤M4³±gÈSùyeQ-¨”ëÎÝS¯—ÑÆq]âöxS\n‘Â\0§“W‹	{86€«»eab¹DÁoŸ\$*TÑö4¸Ä¶¯ç„øâŒ\$ù‘DóE+ÔÏ\$dýDX1e2P!Ðuµƒ*[á(L½åPD‚\0Œ.E)HÕéöHwÅ`tºÄ*\0¡6å·\0âÒÐÆþ’œ­’&,.JøV\0 ÆÃcAŒÐ7Zñ\"a•9&)Š¼N£qœ³–v§FB_Sj#ª†uX\"eSŒäd(uë÷Öƒ9r/|•!PlËˆ»¸ä©1JZËJYŽ£”ôó©R;‹J+Ê”,ƒM-p¾ù<±À¨›“\\lp–rTSÔkpaA´Ú™gt›­Öä÷lŠÝõø™ˆ”}vÖ~f†3Æ4W¨aDý‰àú8º9ÛX–U¢­žQ:ò¢Û(§Œ±jý@ÓI¸Ö¯Å»í_+ŒœÒñ\$ÞhÕÄì¢¶í~—\$ã¡ ¤ZHia‡Q³R3]‹1¥nHW\\öAsê'*6¯šÈ«rw£Ìo¹fÚu[¬ÔîUA—`õ¢Ô˜âÆ#µ¥\0o…ÚÃ:ô¡]³|KÍ‚^_ŠâÈWœ¢ÛáÉa-î	<ÊiTˆ%è¥àë¨C@ (\"1 ÃáÃ \n!”„àÞÿ‹ãì°:†Ú°H+ÔTjïo‡ŒÞ •†@^¡½vD\nzb*õ%­î¸ÚÐà¡µpê‡ ™Ú(@š¤`Ÿô£ÀOm\r!ï¹õVçªîŠ.®;–ý í4½£;î¬¨±O÷YÍ>Y…ûˆ˜­_½…þ4\0°lž°‰ºÂïôEGC—Ì\"¶6¡-®€lô ãtö­|y\$~obmåîïŒãˆ’\"æ]¨T  ¨\n€‚`\0â¦L\r/(tl\0Ü\ràè#Àê\0àe&bƒ\nZ„²ÎƒÚ¾Dš-¤¾úOðu\0^2kKˆ+XtðxQ#´*ŠQÃˆW0l.e\n<Ž,ZÄ0\$ÎIÂ”\"¦-¬Ìµ‹u	çQ¢(éÄU	I	I\$fÔº¬¬7 Ð¤¾‚‹\nîf“N\$jp‚Hë¨d¨<&µ…,;)_\"„„Œ¡	j\0‰Ê E*ÐÃ°Æ/gP¸Q³\rA\n)ŠÕ4(±Ãíßñ	Ñ%\r)Ÿ\ra4Ò‹V¤OàTÄÐV(ÎÎäßP…NT×¤Dq#Ž¡Òškô¦iJHÈZ±ÎLqÄî“BÒ/¬6ÍBìEÎQã,=kFGËhûÚn%¾³\$}¢(i‚ÑnÝ1¨Ò@@àÊHïìp±s±v[Q¦2Lb5®h@k.ƒ,T+´›º‚0sBÀsìÔ%Ì¯ŽXHÎäJ,’D^uèœ‚2¾L˜]îbBÌ|Q^ZKR8KäâòVÂ¾K¨>UÉs„¯ÆöºD“±üâ\"£rC\$äXtÿqBÒT²Y\0Ž÷\$‰‚;\"?Ž-+°\$>nÊö\$Î2Ž C(^Eƒp+g\0‡ŠÒBò)’…)Ç+(ÆÜŒÎ:Ed*ãx0­™\"³(¨ VbÜ“'¢Û£ë\n‡so¦¸ŽŠ,±8{(jÞì8ƒ‡Þ)è¤Âå³,±p)“\0wÈž}ææ*±.¨öcÈßR¥K\"­Rh¥.&v'(âµeLŸä.™k’,­À-@S\$œáq¤JÒQ)rÆUÈá5E•%Ê)ðã&²o5C+ÐIs/5írä\0\\‡\"‚‡s(>ÒÃRV}å\$‰“²])S•&Ó˜DwˆÑ7ÒÅ9mQ9¨ð¡\r¤ù«93q¢«	bTÊ8†cü‘øö›jK\rÐ¬\$soPë'»óÚpÞ±‰>PÏ	Ãy\nkÅ>â{?0çqcñ,’0ÒÐ’²‚ÈÅdH^Á_:“%2±;ïŸ4+ Ï­C#CsÇ*“‘7ó½\r*ú0ÇBÍ3DÂ+³´ð¹:nCí\$þÈ, ‚²ø,¢ÐL6OOˆð)P;‚³Ì Dd¤@sh\$Ìj‰ŠvB¤Ô’±\r=ñæÎô™1ðÊ‚¬&³“l'Hô.H£ÜÉTºRÔž¯´'F&Ê¨Žl|Ò -´F,tfôNõÒ·*LøcZø¯äuì,Œ„Î†bòütÆÙ)e\$	ªõlrÆ3&öä+2Ó»:“ƒRfïR´9Ô=8ÚÝ§o4‡;%½+ã£E•8\$Sy;n?SÕN‚Rî.	 EáT3[GSª,ë „UwE3SU}D€!Õt‘EíV4q*ÕŽ“Œ²(|`èX0\r10Uszãõ“\0ª\r[Jh/â¸8eLYÄ\\Ë^ƒ±Šæ%­ì#U	mVÂÚÈæºK2N#óRT\0*´5s£Ts½?î;\0X“+ZÏSµû`ÌÓUH‘VSÍCõ¥*sZªàÓH‰Yä]µ¦÷ù`ÝC‘\0õœãËdYÒx{69*7[•d¶RMdcc²,¼EÀ¾Ê\n¿*%ªvsP»‰6ôB\$£\"ç)E5ÖÃ†Ô¤lê26ŒDÖ ŒõŸbuIi–‡iö‹Vu/<”WShubÕ¨÷6±iÎ;j6MFöP.v…lÇõm¥(bgJÏÛi{avä+véY–§U”sav+2–@½Öæp\$§[v#e¬•oW\rWìàHS°J¶iU9×CSÅk´UX×\0*×.þöv¨ãÖ­E¶?/kÜ±Âdû³íuamH••Éu’ý!WP.U—n\"MLVC·))¥ÎL…­2WOwKS’‡x¥Ò·VùtVýaT>§ñ¤€oGyoû`³àÇ&DàKè(†.¶›0ÞçÞV2 sè'pèá‘ƒf¢Uâ™}O¾äo¥A¦µWâE¥¢SöÜ·PG´D,r='}*~ò(¨@	 ÂfbB<g èkÀ\nf‚ÆÁ‚Nyƒ	\n«íDW÷.Rrt.µ#µ„tq<*XSð‚\"å\röhü\r€V`Øç@Ö\$øD«k4ŠîO¶úC!sUŠÊŒÝr¢¬ÒÑÔRT³IkÍ\$GI…¨µböÈ\n ¨ÀZ”“÷\n£&ÐÒz-Ò€˜´ØiBó'ÒhI2X+œ1‹ %ØÂæöÜM°@D—+LøôUc¤ðLÜL¤ŽZP©#û#h!\rÖý—²œ´Š’iat\$±Rã×äDÊðDÍ	‰–‘Œ²!,­‰kÒeù¦LQ\"C.XEÂ@~ïô÷¢R;9n ÔôëÊà–âM<Â4ë(E#ò:ð-¶b*þ±üò…G’Ï)é·Ir Â½)ŸGeCšµ™Óg%ðˆ\"“º'y½Ò™ÇÖy÷'9YÑšy¾>ÙÃz.õi9áóžrÐ™Â~'ª*i”ôYž(#Ÿµ˜CÄ-Õk@¥¥|¢V|ÃðÃ×S˜æâŽ¨?Lgô”óàìÍ¨NB-©4¯Ú^´ì_ìÜúIYeL0òÇ¦äDÂÌ¼±å²xá1…2ºdÓ QúîsSÅ!Øvi„TÊhîÂÜý8Xû|Ay€ÇX[‘ÜåniÏõ#ó˜u†ó†Šº±œš¶Ó±i.¸fz-Oi©5kBÝ–Õqö,²º§UTÄ<-:·\"†äRDà-­˜5\n%€";break;case"es":$h="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂr‹s Òv7‹DYT˜Úaa¬b¦ØâE2H%’é„Z0%9¦P\nÊ[/Š›¢¦YôË2†Ìh5\rÇQ¸Òn3°×U Q¼äi3ÙÌ&ÈNªt2›„hñ„ç2&›Ì†“1¤Ç'Lç(>\")»ÞDËŒMçQ ÂvT£6ó±¦>g‹Þâ§SÃx½Ë£ÈüÈŽu“ëŽ@­¾æN <ˆfóqÒÏ¸”prcqÞ\n)çìæ}ç#u› Ò]üri¼Þ&fÉËvIÁ›æà¢©ÏP·Ùÿ‰Ö :›Œ\"\n€Ø¿2Ã´4¸J¥¾ê à?j Ò«&BÂ ¿@P¨4£HÂ‚Â¬Îr0’%/Àæä@ˆšÔ6Œ¬¸#©köàpÂO4J)9MàÊõ£ äa•±˜™¤Ã˜ÀŽ‹ú1/Éú×I20§´®svöÄŽx†âGÒjsˆRkù'5èØ&\rëˆÜê·ÉC†âŽRñc‡ØÐÆÁèD4ƒ à9‡Ax^;Ðt&6¬ñH\\·ázóG8âáö“µ¤ô/¯£pÖÂJFÅ(xŒ!ð@¤@éŒTD\nbŒ†¼&B´Ü<ƒÓ7ÀCK#£rë’Ë£è„ÆlÂ°éCJ€Ù¬Ã7í¤f'£*‹2±óžÖ#ò¼7 As/4¶6£l+£@T·R¤Ë{ž\$Ã|\"£ë\$§…ŒáB ÊùŽ£`èË»b2Ì@ŒüŒp Ü‹±,[^Î#Œ˜eœÖç9©\r‰ã”(Ä(#˜Æ¼°oË3¼¯Ð´\r6]bþ¯‹ž Œy&Má©¨ÂeL<×{Œ.j+Z‰€PÛbÎ-Ü˜X–}°”L/¼Ÿ2ÈÖu¯h¨Ãºõˆlc~‹íC+Ö€n)¼ÇuÌ[¢\n\r#LƒÀ’5D’_)˜ñÂ1hËléoø&lS&÷ºmq›)\"EXsvÍ3‰:@7ŒÃ3ÉÂ1N²‚¢ãNK5Šƒzw¨¸/ÌG¢¢ã˜Í†¿ÓJÎ9…‹ØäàŒ#8Â³»5]cD\rØÊaJeÖl†)ŠB3²; o#œµº6b)Z,74­øØ¿›\$Æ•ËpÛ†¤ð\"e)£[ä¹W°›÷7„RO’Kóu/ØÃ†E’þê >dÁc¯â:~ÑÂ?æ»¼•¼LR9~/ 8àæËr±*À4˜ÀÈ÷©O	é>'å\0 ” wPÁ‘ä(¥£ƒrRLiJ©pä¦TÚSê…Q·#Â©ÕJ«#\n¹X+\"nôI¤›±³ŠL˜Pb2D]|™Ö–i™ëú#üŒe&ÆÌÁ3ÇªC³ˆDÎ™ù?gö2 óÍHP	@‚†÷kˆÀ()\0¤£\"`Ã™,Í0™%‡âECÈ/\"¡Ž	¤â„í™,ç9Å”JXxff×çöÔN1®xäô‘G2@aÉèŠaÉDJ’6÷(gÅ/‚@ÀPI\"!äÍŸÅ„\n“ Ç4Ø ó&[‰>D(6‚\0ƒ\rI(UæJJ²@«æt5È(ð¦I&LdÜŽ!2*bÚ‰A{ˆâ£ˆI±8'@€¯m)¦4ž8Ï„þ¦ó\nB‹F/SÎ&¢~ƒçBoˆ1\0@Õ¹b¤ý„`©'‰!–\$–(Í3Ôê‘ HFJ‘ˆÚŠOÒF8gþ…™5‚T\n¡&´B•6'… ¥P¨mF1»Ó5â…H¥J©‡ô(r«ˆRg8…ÅŸ\0 žÊHÆ(ÊƒJ‰\\ë´4°ÂŽy4<§èÝ¶-:_D›-Ô\nP#Dš†œ“è§‘äF(GÚ+7õÙ»¥Ìâ¬[y°)!­FîS3“)+?Ç&Xhâˆ­ƒÂ²)~¬š%¨”ø’ëØ6€Rôýª¤{‰UhÔNã„zƒ}®)\0)cÌœHo¦Ž©£…G_Ž€iLÝ{‡”t,-/ñ×3å‘û,ï`P½¨0·aÿiŒ%…°&fXá©5.ê\\ªžÙMz)£ŠôåQ°ÊÀRºZˆZçÌša˜ãfZü³²68ËKy½„³œü×ØíeMÒV;\$*|N)YŽVCJ\$F\"Æì\"†êhH%œUfÇ@¹¬\$fŸreo–dåSÂ™‚) 8©˜\"6EìÛ‰DŽ_F\$*@‚Â@ n%¼Ô¹éæQ¬p‡(¥ÉÙxJƒ(jE¬\r_œDFÃ‘šêåeu9s,×J±ÍË‰wff:³c´A…Þæ×›ÉXf»S¸\0”¶v³º\rÌA2ìûœ³þtÐ:\r#jPÉ£YçFEÒÌZQz8qUíÕc2Ð‚Ç0h½þëÞƒ—Úuj‚óª£.¬\"Ú»=‘‰9_5™3×†!!ËS&Ã»‚¤qu­¯½–hSwÙ¶\09™â=3ÜX\"çôí¥RÜbJqD(©*,#âÃ(b·aa’€ƒ¸Jƒ|\$í¿QíÆE²ñ»0,T”I“ÿ/·Á\n¸à(\$\$FJ[ØEÕX°å­“™—˜*v¹j^# »^€°c‹®%XîÑM¢ƒ8¾’›¼kž}ÏU«[òŒ	ÉWó‹åÕFú7sþ¥ËëVË~Î¾{ŽhÎR=ŠœU3URJa¬TÛýƒ±«âz¹­T\$ý5Õàæ[˜âüÁÄch,¼j¯´ªCÝ `vfÈW‚ò?`¡ó³Æ|\nkó‘¯»Š®]cÓè1…J©?¢eÞ,™ÂmÝÞÉw>WÆ»ñ3mÕ÷]	â¼g‚æPbð7n2ÙüxLß÷'Dfwž CÆ™ë„…i9>öô6vóÚsWèÿGÄºæ‚ôòÝ{aÊ_‡¼o'¯¡Û)`~ü¿-÷~ö\rŸ¯%âBb\0©ÝªÚì\"^Ž18Æˆ Å¢ôvßZ­Aí\\½ö7{õIÂ„ ü¿Ñ[Ù¿\np\$×åÓ³ô°©ÀD9ÏÒ§„S­èáÎLqhÈ\$HJRê”uAR\rÊX3ïÂ÷ÏpåînIè¸Â¦ºóvÄÇ„MËìíLH€å…°åÌÏ0øî\\²¥fÈD’äË\nÔ¬‚ÇïóY	&ðh0ÂæÑ¬†Èç%pI,éžÂÎ^Çô1\"TÔj\"G£~Š¤E,v\réFÇÌ‡NˆœŒx0eÏƒh0o° Ç°³\nnbñðl7æ._«˜MpÊƒ¯\nP}ƒäcÓC~³¿Á%èÞæ\"çÆîÇ¾\$Ë°Ñð÷0V¯¤§ÐoÇ°^øCFÐ ÑÕPèß±dp¨îÎFìpE±([.Ç/º^¬@‘-æJÑ>ññVÅQ]n6‹C£ãmK\r`A1q&=q{ìFÛä.nEë£žÉD	íK‚w±žDibd	ü\rˆ`bäd%úè#Î\$lz7eÕË4Üe‚õÊÇ‹6LqÒöx8ƒ]C\$I\"L.†	­ôƒDR ¢LYd¤Ã…© \rL%(\n`ÂöNDÖˆDTŒ~ö-)|\r€V’ƒ®j°f êè8Þb,á ä|âeJ4}é¤ÿ‡ˆ\n ¨ÀZÆ8c-dÏÏH“MŸM!&¢0\$Hþö.Câ6ÓMÈ±\nÂ®Š\0[PÀò¸‹ÚœHÑh1\0ª8ÃÈfdB/,^nìzÚ,T™î¾WàÃ\0/h\nMDf-F'ê´Bc§-gŽë	ÒrÂ.Ñ/õ	?Ï’6kž#<úíÍ#mTåcJE#ˆ”Òô/£0äØÏò/ÎS1Q25#<‚ˆ´2Hü8ÅºhOD\08%¦H¤h>ÆÐ±Ê\\/E´l®v7fv«€êgë&«NÝ6&îì¬ñH:¬#ü#£)’têÍ^*¼8ºC#ô#vº¢Iƒv´æ7n£ô\rêÚŸ„ºoå5\nÙ	Ä¶„ƒ%»†:f„fÅ¤Bjæ\0;&FÎ	\0t	 š@¦\n`";break;case"et":$h="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj*@(Ò2<ªß,…â<1A`Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd\nˆ(\\‚ÿ )0Þ7´ñx§3qz-ðÜ“,ïHå'­òHÉ%¤h°˜7­ˆ«ÁBS‚Þ;h<‚†¡€PxßÊ3¡Ð:ƒ€æáxïC…É#·ËHÎ¾”€ðÖ\rÉÐÞ7áM4ƒ¤ú/¶L`ÖÂHÚ8 ²Ü:xÂ?‚×\rè;N(ÉH¦(ÈÍbj+\$mã1®°³‚©7ì*Š5ªj\"Î&¯­û\$’¯ˆP+	\"(¯Z\n£~Ø¡¨å”:ÙŠÔHÃœJ4ŽCPÊˆ ïò¤„·Š2:,â³Æì®ò<8;²TÃEÀP‚óÈ6>*ˆúD@P‰=Œ#®2C`ëw»Ì’.õÙ”µ/\nÈÊ•	ã¢t2CEª•%ŒÓÜì[2žã# (\r7bÿ'7ÂT4cZŒ¸4qŽ#bÃe6Ù%#˜ÆÆ0àZ(;h7Xíä5Š°kR-u:\rÛ~Ÿ©£rÿn¯Á‡2I«å¼ŠÈw%›sÌìõÇr¨˜4”2É‰Ò+£ha’«]sTÉXä’B*sÇrÍp£iï&ßÀL¬ë¾Eú6=†Eì«/%#xÌ3#iêk3Í)qH67Ë„žâ±ƒÍqJŽ£ÆÂc6,¼MPæ4Ã—t0ŒèËØ…?’óŒ¡@æ¶ƒ|(6Œ*˜@!ŠbäSØ•ÁL3IŒ-#o.Ý5ûƒÚ&^-Ž–£rzÂ¨Í§€RyìRí¸Ñž²¨ù3Ä-¬¡¿ÔbC)5&æ¢ÑË”<ØAp Næa='Äü „PÊ!E€ä£NÊSqJ)e0¦Œ1ÙZª}P†åF©U:©>Š±W+qV¨hV¦˜Ï=ÄL\n‘*@pžª·üb`# áÀ2™¢H@ÕI¿cGø½PŠT\nyz>A¤úC¾`¢0LÀ‚‘ÑxŸÍ4ëUî•@@@Pq´ûTjRÃ‘?Á¬´§¦BcœÙ{&èîÂZüÍñmÁÉ‘â\na£,,9=·˜JOÈ\n	\$P<™`@IH9a±´Óð@žƒ‹Á™/¾à‚˜átµ>€€1†ÀÞ`å¬s|¦š…\0žÂ -sf±Ü'ò{Øi&L5sBÒÆc²eÒ™õ¹´Æ	zâ\\Ñ¶S«T€-0kP:I\\ÔÏa©˜Ñ|ß¡@ÎØL˜Ñ1‰´0TK(*vgŒ¼HV8Âô`KÑ‘.§ Ç€ÌZJxg=ˆ˜<£ÂÈ)rà-á<'\0ª A\n”RÐˆB`E¦hÁ}™t¶IÙÚ.)Í!‘Ê~—Z#F\"Ë\0™•EÐuN\0¤;,’†sÎoäñ„%lÆªÕvÜ	[ ®EÂ“\"ü\\Zc­¹¿¸j˜›: ðƒ.I¶BýWŒ¨À™Ç6àWC·(d\n¿¹Ð —ÙSÿ“Tý\0.ÅžqÃ¬™sË£… ÊªKS_\n\\ˆ\$ªÈƒp:V/ Å¥ˆÕ \$mIñ¸6Z\"`Y)˜Å°½Zâ,XÜ¦_´¢>2Þ\\mò0!éw„4€¤p ¡ŒÖ Ã¼ÿS{DÅï7÷	ª¬Ê±±2~Å™ÐY0ˆX7¡d¸®3\rªT›=Øå_n!4!”;×ÇºÏË‘ä	&5\0 ÆØoÈQ'+ Öˆ@m‚‘‰ý¹VuÒ´¨Àµ“„½|3³‚pPSF à¢¢†sH‘æ%X\\Ra”jIá\"…\$xÖá:u¡®‹»0ÕZH»íX,îÄ8Ü³`S#É)Å£PŠ‚(N\nMW:å¬íKÖ™@‚Â@ —1ÈÒº€A,ˆ©©q×6fµÝUˆ„%xµ—õêx ^Ý—ö±TŽkøFì£<€ÚKñ¼ ¤µFë\\^Â^F— ªÒk›ÑxÌðn7¶.Ö9¡”P/H·™ª±ñ®ºXøéHtÖƒ&º'SêšžIÏŠ_äX¦¸ìHA%dúÕ’š²HIº%\\„2E^ÒœœŽG+ZÑM”Ø­±ÝÓ+\"”wKÒÒ‹°lÓ’yêÒ#7ËlnTo˜ÕVgaÔÌ›Œ‰gI	C×B¡ì2_žßàs&¶âv?}îþÊžú;«±wDzé¥k¹AÕEÂü´î]´½yÓeîà.Ø±+™ìÔuÜãE«§8e¾Øœm‹ÌekÈ8®¶¨à*Â¤ÛT”M|h‰qÁ;#±ÀPê^_ª,¥º‚¹Ý B¼è©t,¿yÑˆ¤æî.U_Âu5\$#á^Êj÷~ð‚B+þž Iþ\n óE(Ù6¶¦^¥Ä5/áy9Àö}IÌ±œN·öRÛ¸M«ä±2®'>ÝÈçU/Ûùüðúç–[wïGzlŽþ¹¼YñäÑ¸½…?Q<‰Å/¼Dm3Ñk¯˜¤úõ¡r@éŸ´zÚ:èwä-hÎ#œ?·Ô£ÁÂÑ°ÂTjŽqtƒÆt§hó\\z½ûŸc„½Ÿê~K½°˜pcÀ-D‰©?™´	¢ä^.È\nG'¹ôØOß]_~i¯áyžA:ú«î«ÆöC`¬§-:wGÒf‡:Æ®¢û#\$ûbtû¢Ô»\n.÷L&£bÎ0\$þªTÝêž]F0ý‹ì“E®[%¶ó.:!ŠØ\"Så´/2öÏT/e€Z„j[Bó/&ä s§ÐT[c\0ÈdÆsh®ðHîjŒˆ™£.¨·#Vä…Ðn P„ùŽN’E¢\"°l8Ð€oæH°G0p¢s\0PÈì’\nŒšcMÜùáj‹ƒÂ	'š]_êaj¢7±	¤«â@Ç„ ÇÏ!	jðñ®@°ðêô\"Ô÷Ã6ó‰šô~PXù¨%	ç„‡Îx€+n`áÅÌ,ð^ Qd.z°#Ps'±á‡šß.¶üäÚ\$ƒvá`•	¢k¦ÛO6¯kþDŒvé2gïÌFíJö\n‘{ï)fç¨=ƒM¬,éLJ_iQlHÃ'Noï€ôÇÞêÎ@·Ò,1ˆäožh‘®X«±¿±ÄPÅLXÅÆEPäªã§PôÑÜK#/”øQ¯d¯QS nÞáJö	0,ÈÔ\0 &\\Œ_†úI&Ô¬‡¸\rŠÏ‹1/2û.&ò,Óª˜*O°ô°ÃeëPñ\$Ž	nL\rÆìMÚëî½¨)pà#\0\$C6nˆú\"Àšõ2J!%Ú.¯\\Æ®–™:9A'¾H`Ø`Ö&eÄDâ)j\nCâ.oð¥À¨ÀZ6\rÀÆV£š&§-\"JhLÞÐ Â@î#†2K‚zƒcüßìù(ÒØÀòŽ	ŽC°6/î“)âS*-¾',¤«Ó0Lf~%Ð¦\\Ó>9ÏøŠ…ÞLâHkS<NJ@•òwMN\\,44Æ,p®™%/(s\"7/—hî]Ñ¹ÊúJTœðð›-BánS7’@Þ‹ˆå¢77Rï6O…q‚»ƒJ32†.i‡8¥ð\$ëã.Ë‚ ã¦Zkšex!Ñ*â@ITˆ'\nˆgº´üX‰¨ì*”é®²#“àhå€?Én(j€\nDªøsôe\0á:åö,ä’&OÌe`–Rä† ‚6çå‡“jŠžqCx5’§Æ{7æ8ÅÏH¾zÀÊËrÔ0Œš7ÃcÄ’ÿÃ|¥\$L-à	\0t	 š@¦\n`";break;case"fa":$h="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9KIh‡*°sƒ²i	r)MrTX¿c,×¡É‚vW<ê¢	41\"Èˆ=ÑYP¥?Ä:¢‰–oñÄèR@ÒÊ‘a\nÒ¤lœp¨ª,h¥²ïªbÅÉ„#®é½i4¼ŽÁ,òZÂM‘ÛúC³RêË<–1\"K ÒØx0„@ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r¯Ê9Ãxä3…ã(ÝP¥D9#}F ÃOŒ£¥/ŒC`Â7\ra|\$£€Ø2µèã}è4\rã%Z7„¨æ2„˜¢&\r53•	G¬-?¥sº:C6NâJ†¤,(Ë°/‚­Hnã4Ý3ÍâJÆ¿®À”IÛõ18%z|‹YÏ­êU!.\n•`òãôá¾ñ‚ÂÀE‹\nôˆ•±zhú^­ëF·c®Çi!²_\\ÊâÒ[Eðœ*“08zV•b¢Æ€âŒlNÉêXÆ¬iNŽ +L)Æ¬Âqªl|¦Å Š=òö¢%SßQXû½n¾ž•êÑ4˜„d:õîá&íó/Z¶»†*zK®:.ÓüìÂLãºÓ­Ã»Þ—2ytÇ·cw¡2œku¤rç	ÆdÛÙ9ªóøç°ˆ\nÛª{ó2¬Û“û®\$9ÛÎ¬L:wÄD·Æ8+¼¢P©\\\\UÔ˜e¶îfC ØØ6I)D«?ìòÀ»‚ìˆ§ìNÕO’4ÔÁ“@£ÉOÀïzDF(X+úA&ÄgrmJý‰[{^\$c’ËÞ’º³úÎ°A{Lûh÷ZØ|)?‘çÊùÛáNE´¾õÈüNH\naL)ežÕø ‡±£À§JCt,-Á>¦Â.I“c‚,½xÕI*Þ8¢°’¢·ÐZšb+Dè Ý¡\$mÊáú!o€ÿ2¯˜2]:hÄâ¢SbÞj] /tÄ’@ÉÁ¼A¦ÑÂô½Š%3 A¨U¢TZQêEI©U.¦Cr›Sª}Pª0Ê©U:©UjµW†ub¬Õª·W ù““·/	1X‹1Ä×fºÞÇB€¨\nº\nœdñiÍ°b^ág‡D8õ/TNjI¡ì*á9™ˆq&Ò‹2‰‚\r£ÔnÏd)gY€JÆÐZ-~á@\$xŠäë“ï‚-'p@\n\n)…¥„ÕË8ò_rO[i¶›„ƒcÔs3q3¨RJYM\$ˆõ.fVPk÷ Ž\"*E¦àŒæl!ˆ¨0É9~çXìðD\$‘ òÃ¨ ¥gàÞÚ¢YË,4‡0@¡Ãˆu¡Îˆ`äÃh *aM%Z Èc\r½iÒz*€aÓ˜É0ììÓ*èŠÈÝ¸¢X>Š\n55’‘m²¶<ÐÙd‡ç‘–…‘?ŸT…re,´’tú\ny\\cŽ\n¤<Ã”lRÈ™ŒÉ	T”>W‰ÂÖ	•p•æÐ1%4éì„`©1¢K@\"lpÔDAÿãG™„5>–LX]ð+°E4“ä¬g¡‰®­¬ÄgÊ‚xNT(@‚-˜³A\"„À‹hba\\ìU¥ËDÅ&Ó*aG¨á\0/£ðº¤2!Ìj/º3ÔŽrÜ?D~U’—g2 c¹¸f,’x–äúí9gÊØ@—+Pæu®œˆÜ­¹'eÞœÌ¦é±wjÜáÁöwK~ê¾”évÂõuñ97ÛàžQù&g~•ê®Ñèº:I\\É‹cÖ¿€PRªø4†0Â#ÓL!¢¸”FuSÙ”'*¬¢f’TãÑ5‰¹6–\$}°¹Cmò%Î\nƒÜ…\r>.+ÂÆ6„Ô‹žó7ÀÜë”ËÐ¼Ís•Ç8²a™Ä¶\$e\0'PØ­•¨eADœ\0PY£`('ûR@ o\rÔ6†â8ü\néUHmQq®S?WËiÍ5]¥]`›ËþÎdK:ØöˆTY£>1Ây£vh'ùT,¯Æ¼Ë\"™l³0•+è”Œp¢g•§á£Ez† ^t_Ò9/Ê¼üž‰óÇÕæÈN,·³áP „0(Ê›\r4l*õ©C¨€s¡À8)åLQƒ4è=õ\$ÂÂ)«ë\0¼¶@By\\ØK4Î7gZúmmp†Ð‡km¹Ö…0Ú‘¦`å%+·Ó3÷%{†¦MDü“ÍsÍ€›wh&}Á?·øÞ\r¨œ&©)6¼JÒ°‘9’ó‘+>rá„¹LÍÒSŠäª8”þm½Û›ã	ûDO ñû\rÀ³ÍûxËîÖ>kÌ™¬	Ù²;,Ž¿²b¨	µÙzÈ#÷a:7[sÐ¹å{¤Ö¿ñ\0¨'Ç—ð±RÑê°¥N189—y÷Õéý&›C>°rsY{Ý3¯çœnt79éÝ‡º¹Ý>rû\0í‹ìë–d—ÑÄàîE”“FWŠÌJIè/=¼^ÎïW¥_ŸûÔ7¶:¼í½\\z†Ók6±3}³ç–aÈ.gÛRn\nyýÖ|ú«¥®þák¯§ªrÑo\0™Î‚óomß¾þ|àŸÎËîo³´;e{wlá`Uåì¿È{Ëçñ¤Ã·7àíù«Ò-JA%>ŽŒÀõ;ŠÊ‰^±^f¾W\\ÚÓŒ]|êR¿øJ1üÛóp–Læ‰_ëî5ÄÃ#F@¯”ÿaR¿\$JÿÂÄ5&ðú¯Šà/ù\0«\$”Ü÷ÏŒ¼f´%C,:ŠšûJJ¦ ±éJK'6¼ìdE¯yO9­†cÜîb!cúÐj~C´·nkVaëZííˆcÎÍs\0000Nr¾NÞéÐŒ÷Ð€^MPyŽßKÒ°­S	Po\nPP’q0\n®shÕ¯zq0ÀNÅøt@ÏRˆ\"IÄDOI\nDÞ?a°	Hã+˜‹‹výÈ³\n¢ûÏßÇéÑ‹0¶‰É_Œôqú¬.MFë\\¾0\"q1=pÄùñ\$Ö\$ºñÞÅjô‰«Ô·ÌNbƒåñ\09QRùÐŽúåßÕoˆcÑSnßñNõ®š•åÈóÇïqŽ‹ñ50•Æj¯©[–Ó-'ËÓÜq÷ñˆcÑ¬Óq‘˜4Cæ6F—	°ÂÖ\nªù+§§›aEÌ•®¤ÉÑ±ñŠ+¯Lçs¦sqÊFK*à‡ÚJ”tF–€À¿¤žý#åÑžF¡V3‚‚ÄŠäm„ÒüË¤ì’7ã^	 Â£…6#e\\…¤@¦VÀìZŠ8ÁòRÚÎ _ïÒÿ(Üm²xN¹&¢BÿNœ§‹!ôFîb5.ò©ÀÆ€ä\r€V¥L\rdÆ™i^ïÂNU†C`ª\n€Œ p”£x‚-Ê²«ß/Ù,oÐ‰ƒ0÷ï\"Qö½D(†Lƒ’¤”ç˜èq¦û¦f@ÀÀ‘¶?1B)Q¥\nÒjóçŽ©¦Kƒô*ê‰\0bt«Ã0ëD6¤ÎmIÖÇƒˆâj\0Ú*òNjøßÂV‹V•NÆI8q®\râÎ]gVìÅõÄÌ±ÄØój®ìm6Ë„#ÐöøSr½¢îp<IŒ8ë8`&6Ñ9sŒAËŒ küvst½3¢Þ®p&Òúhc‚gcV@°(=ÎÎ.èDNìMïL‹-Y=sò¢mI6‹ps“6þÌü¶qQ\$mâ7çf“úG¡[0NX§‚Ò.ƒ‚\"Íº]bQ!GH*+–¸²0@aRö+Üºó„Oí&¹S€•`9RªŽ„ZÔä„½J¬Í†šHsg¢<£´";break;case"fi":$h="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî‡¼ny›hîúaŒRkŽz–\n(H£X‚\\Z`\n%Û:Ûo¥Ië×ò™Ø‚œ-“M[c©¬æä¶j’Œ©iã82¡C˜æÙ‰«›Š4¾Csæô=MAHÉ§‹@ò84àPœ:¦C”&(4¯Pæß„>ÄIÛR\rË¸+AÈ #Œ£zd:'L@˜: C¢_	‰K`äý£IxÚÇ\n	b\\˜/sÖöC	ˆÒ›%ƒÛ¢ˆ²6Ã\rÎSË#¶ ê		cdžÈæ<µÃXÓ24C¬b»±â:4C(Ì„CB€8aÐ^ŽôH\\“¹ˆä\rãÎ®ô ñ!\rÏú˜„M}\$PøÄ“\rÃXD	#hà€¦SxŒ!óíÇc@Þ2(h(êí„˜¢ÅHI¨¬–4õâPÄ	Ð«\\î´pÁ´HèÜ¶\rcÌ–ì­¶‚R×¶,@«]¯rô€†×	Hì:!-Ê0Üì@¦„-(<ÃpãÑUª è-tÃ¨²xëÄÀR\0Wh@ì7Æv èíB4ì5¨˜‚3ŒóèÏ€\r0œÒ2L3?9%ŽP˜ý4ò·9£*Jâ“ôÜ¯ò‰64éÂ&*\$Ul82dZ‚¯‹ö¶Cƒ[Õ0Êõð˜ —Îv0ë;u.[Hêˆ)Ãªë!ŒƒÇÌ&Äï7ö»¯ìl@žÏ´:ö*0šdf‹nÑþˆØ/Ë>Õ0L[@ƒ§ø€Ù`Èè¥ŒÃ4 2…ª\"M6s\0:ÌÁúŒ±#HÓ¯j™mŒ£‚Ø¦\rÎLìÑ[oû°¶T³Ÿ. ¹zt´#K`Y±)û:œhAut,»Dú®ò€ÙÀKÏ§¾tÅ'QÕ\rÝb;×5=ŒéÚ1cÏo7=Ú“ß¼×02øJmqF§¾ÄØùm˜­9*g¦‚0-eä¥ ð\\al'°ÅþhS@:eÜš…XÓ“ßDñë‘ êI¨IƒÉ„‚pÜþS«™Ù&R„ð	›ú\rÆ	-\$ äP[“kÅXÍ™ÒîjI	1KH.§ @Ÿò€PAÑB(e¢”avQêEI©PÊ¥Ëºš\rÊqOu@•¤TÀùž\$%¢«ÕŠ³¨í[’¶†Yª1lÔÿ‚Ú›Ã²Ô?ð†‘²‚œ)X\\Æ‘lÂØMKÔ\r0çìÝ«³”M;Ý(i\0  \0@@P?,þé,\n\np)3Eaô´£Þ±¦AR»‡'òþÎÛ‹ƒ.Î\r³¦	¨K.ì»“Ó˜ÊJw&+\\Å­tŒkƒÉ?H!æ„´´AÖÛ\n#ŠÌš„£8â l\nH.Àõš±Hµã²ôL#[\0‚is@ì9—Ó÷7§ÿ\\äÕçº	ÚNI\0P	áL*Õ1…!t2’]¼c\\±ÚÒ*láÎhÙ¤GJs¼\rÁ˜4†rrHšc[@df\"#2DâÉ2Ç\"Dá>“ÆœäJ)T)€€#@ ‰á†{H  «w·/Où@—¤¬–’òbKÉJÂ\"Çtà\"’O×Ù9Œq†ðœ¨P*V\rSÂ E	ª¥…˜h%ë©9x#´`+W\nå]¯Ébe‹uæ¨í“—e“&r:ð«ÒY\"g…\0%Ö¸à!ãb%ä­\0·ö¼mÜ]+ŠT„Ã•ã[Kíy“6k4ÚÎPPDGm“¯#ß‰A0\rÎÓ€¤éI€c8t¼Q\\”Ð:Vr^LÉ³õ'NÝKVn\$6(Z^Ì²B©QØËtS¥jrw'¶kÔÃhýº6dða,2~h”<¢Qš\0Ùc	ª©jDüßØY}ˆy†ä¬‚œD\negœ	Ô±…U¡j-c²E\"ÕZ÷]¾„ÜÐ\$òûl\$ï³&b`S@^á£\r5šå\r1sKU‡žJÌ]HÃëb¹ìPËÀPMÁæ<š¤ ƒÈ£›\"fù°À¤ñÉÚ7\$­A\"€‚!Àl¤S%2Ù…ê T!\$\0â	ÓìE)ö´:F,˜rHA’¡JéJ›‰zn;ðA›ˆi]*ã8˜à—š`y@®¦—Ìðãª\$8“·›îzƒ²W?èú}³ i4ÚÇ»Æ¤o§j‘4éªrjñ®‰Ïz	æêðœ\rV‹ƒæTÂ;{\\~¨ùÎ4äJ˜JWqÙ'Sâdtì5‘’(”œwùO}?:röYY˜ŒÑ¨oÙø™‘ÙÏ:aº`SNRRr‡JJ>ÐGikÔ¡F©UÃ&úimžÌŒŽÆÏF›3>Èd‡–Qª¨äózJõöNš7¦F-5²q3gdn~ÃÓdÎJAsÐÏ†¤ìitÛÒ…K‡Q)8×7&Æ@ñ’òÊ‹|6Ráš\$‚yO\$¥eøùó«E÷tGÌ“«ˆPPXrakì'©¢A4ª[S]-sšÆzÁØT2™>Xüy|!ÁñÐÓ¯LÀÓW„p «°SÃm²VS¬ö‹ kË‚0Æ\nvë9Ú˜„²ÝÙ¯÷‡CÖ9Aè¼œšÊñ9sy9¡DÒ“9ª/â¸ K4S¶×dRüØ{¬º42h- 4,38ÿÈáæ^_œóÚIxfïˆ‘;T>½¯ˆøïì&Žû[t¯–Ù^míÎï±ßrÄóh)0ãEäôâh	½(\$ôÝRzBšÓjC]}Ý;Ï›Ø~ÿ>¿Mýƒ3…:â(¡ìù+møç‰NÅ\rÎìöµéùŸµCÄ~É(èäåEž~\$|1h€ùÅäÁˆxñîmÕ\$ØíÉÀænôøÆÌàÐ-¬†,Š!NKN÷°>0î®åÏ‡hïÏŠ0P5ì‰l—=eøÆr\"`˜ÚF\"i¬0Âl.¬ò|§æß‚Xv ôŽ&3p\"ö®÷	L‚ïÏzí° òð,æ°\\Z @Æ&b«Q@à´b.¤ŽoP·¦:1&Í\"3ið¬‚LN¢4ëÅì\nfj%Å2Ž¯häî÷À×Jø.2°î‹#þ5Ðöl#·ñ\r#Ñþ^eê\$âN7‚@ñ/\\l/¶C‘\"³Ñ8s ÒÅïg	°øøÌ\\EL`÷g£‰é¬R@ÎóBañ\\'k: ±wð\$V6bÈÄ(”ë˜5Q2ä)r¹lžˆ§Ñ’ÉÄ.5Ñ<Ò„Ògò’òÄ®	¤àÃvÎÃÌ\rƒxØ´ˆêÂä÷ÍJWÖ}ƒþ\$°y	rÂ˜j­@ED:ã	¨j.b\$þ*Ú\nbL%Ò8\nÚhM’¯>³D€ÞÈ(2 ó­x’(C¶î †G€ØcnPƒ`š.¢ñÇ´^+H„\r‚×	¼þÍ¸@ª\nˆÖ0‚Œ£¯X4É&>oÎo@õ£\\¦¯ æ\"ü±&g\"aÒ\0Bl¥Eö8c\nj¤¤’¬8£?vAã\\÷­Š?ÇØ/cX5Ê2­\$Lí&&F1\"NÉF½.\rŠÅªæ\nd&†’h.æí†{HpéÈ\"Ð-Cl™r4IüK1n²*bÚF:g37Ð÷-¤(‡E2“27Ð5íþ'Ò¡¸/Ë\n	 Þç4É”gÊ\"n¦ë“`gF±¾\$Ð“(‚Ú¯mÀá3‚D_ƒnÏ,JãrÜk\nhDÈàs\r³zsË(£Ä†M¾°îï.jþ EîC“‡Ñ(C±ˆ0ÆŠLî8-E\$VK‚>";break;case"fr":$h="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@!	†W0¨è¨<Ž\nT @£\nÜBpÞ6ŒLª:\"FÉCv\rK*KðÓB“82Œ#¨#²qÛ&±'	Ü\n#¢˜òç˜eCt\nhcS@Q ç ÇR¢¤µt\r\$5Ð¬*ìÌšÀAÒ+´Æ¦±´6û0#¤üí«T²Ö!Š\ní Pxž¨Ì„CCx8aÐ^Žõ\\0Œƒj œ¥Ã8^2Õ\\1V\$ŽÈ^'Ãä3·tÀ¾“#pÖÈøà“½ xŒ!ð@ª\rÕÅ§Ãx@„%˜¢&6‘0‚ü)Š”2OÒ;m«R*º6'®xäÁÅ\"Å1Œr»\n´xPŠzÃ¤ñÊÈ2&62v*.2xÆ€HK„aXb:!ãdñHÅñŒOØ¨|Ž\$Ã6TØ¡¢:Gtã\0\nÊ<8«£#&üÁÓ&2át\nèˆÎÎs0>F3ÑO°¥œ\\É³Ó%‰\n_„˜eÈ*Jà™9ßÍoM±S IÛ²ÿåã êŸµ{Ÿ¾Â˜Ç^ªVŒ”]ªÏ&Œ¹Y†U A¬&/C¨íªº5c›-¾\0Uñy&)èÅ:î7\0Ý<•3ß&Cšm‚Œ1>F˜0ˆç7’s»pÑÎn;¯r7*ŽŠªï‚Â;a%È¢\"wuÏOW›»_½\\ì”õÓßMÎP2O…Lû¢Ñ¡ø¥\r	s^¾0©ÐˆÉ»žÓAêká¸ü,*‹`ZÏ²:ÜAb¼‘Œ#ËU8uÿ(¥5ì:Â0nn`¸µ@ÞùÓƒé|o±ð>÷âüÓ[ö5fü?§”8dË.\0Ä¸N‚ o\rj°0¦‚1í,¨¤T‚Š÷2¡¸ƒ?eÎVIpm3Ìym6s*A’X )«2ÚC‚KOOÉ3 ·îAž«'Pëä®ÁH,jRŠY¡½7’ƒZHÉA=‰(TU&‘²˜SAÑN)å@¨•\$U\nÝUªÖÒ†b2³VªÝ\\‚%vºòÀXL’*Â–:Éq«5+½”à³	43)À™C3e”j½Æ‰ÄãV~ŽÙ©†ä%5ÎR¯CJ,°–7r‰—^ˆYÇ‰N€H\np:‡|¸\0(*„PÓóÉn\$§%>(i yá304ƒ§¨´þ‘á•Y¥–PÚúI )ç<”™8¾d£( …òy“PÎ±I‚L¥zšH*iÍI«‹åzðòdÈQ»o¦U½=r¤Q	*•S‡'äQÞÑ3Q¯Üâ·ÓZ®óÉ!!@'…0¨OŸ0 hJõTœ*[25mÔŸÃ¤lhÓ	léFwÈgîÝa[e*fÆ\r·WÂMørh­Æ\\…E=¼ùZk7ªG@fZ\")el˜7ö`0T—i\rX ¦ú„šk¹&&„ RbJ0rLçQÈB•êþL)0°ÀÆº#	á8P T *½‚\0ˆB`E°KúoÉBzv³â±„¥³šÚ„S	½lGøî£€ž&’ã8MÎšÃæŠH€\n{â¥aŸ¢a(y(E,ÖÕÚÓö½Jug¬ûŸ“öbprNP¥V^1X!/Ø§w'0ÉQJô\0ÎËæ«fy:\nlÝ¶3¹ñmÏuïÊ¼\"Qx.KH–—ÚfH@\ne­VX%Ó@ÍZ:ÃP3JùåÜV`:Yd\$»“Ô%Õ…ÿ¨¸fÅ2i@!!;@•’ŒUl‘¨H¬­@î«ºr¬*_V¦CáŠ'(æ63aRóæ•ÄÌ¦Iz|‰ayn’{N‚qž]\rÜ\"VhgÀPYOhêÆ1°Ù7Œò;³l:ðÓ§B‘\nÈ·v@RCÃŠ1qR³’!˜!Ã!hže®üÆ¼Œ£wKMá×z\\èg®jFÕ×uXÒÅ¢ ùÍÐµŒüÈR*8[‘‡%!³I\rK,÷G#d› Õ9b\$;&\n±Qýên}á-4šÑ¹Ñ°!P „0‘…ëU)JØ”?¢£u]ðe‡(9SpÿLŒ‹ Áë°p@ÁÆ@œÂ°æ²Ñkx ­õ´¾ž™1©rð1†4Âß“&/p”ÜÞf°	hûM!­•\\®Ùgso\nÁ7Ì)[™xî‹²ŸÁ(;µG')µZÍ¤'[‹a·½©»¸NðŒ;kzmø	ÃÎÄKˆwÌQ¼ÌîÝâÇKˆ7~×ÖÌ£ß;EÜýJ¹Z°L%d´†Ô4áÌ	„Æ3’€4é×*÷ƒ-e¶\$q3\$`‘ñ6-ž´Ö°@Ã(bä›½oU2›ªµïç&e·›NC5ñÑ1GhøtC=ˆä6e+Úõ#Ð–ËÞ·¶¸èÂ÷éæL\r‚ö’{tÅL¼ºÄ°É•pOß\$.ïâ§xw…áIß‡ÅýôíIÛãH„ède]}ËMåðø?SXùÒÏçüŽÁüÿÒ¼HÃè<\"2~‘XÖéé—îæÕ7É—h®Ö tAA[¼bL,·Ãø¦ÒSÙ;Ì>3äe¤Ÿ@™Áê·ô¨jhÁ\n’°Ýš¥‘x`¢È¶CqIå»r¦ñk?aà±ÅØ¹.;õÜëˆB|_†lsÒ~›ÐþÎ<ýïd/úþ‹ƒ\0^õ \røñïX+Dtìxÿ+¨Æë®ò sP\$(pñ°\nÐtp9¯V'@‚—Æ\0ïBz•Ã¶xpHãŽ\"‰mðÚ\rÊÜíÒý0\\Tð:ÂJÚç*Ü-žÜ‚Íü o8!IòêâÏAP›PbÈË}\0°”Îï	¬÷°K±ð–Ï\nå	ï^õ0?â”².¹¢8ÍD„‹ª_îlkcRÂn›FÌ‘T7B|û‡ä(6€@-²kmJÌæÒ—ŽU\rÅ\rD-	¤=ƒ`yÚ!&FÃÞÏé€\\zí'ÆDªØp¿\nìòÏlNôâîË,Äï-TÎJžàF*bïZ^ÐÇp¶ß°©P´+ÏDÛÐº^¬§0ÊDÍFx,è%dò#&Ó¡PÓîüýíqèËSQ˜ñOßÐ0òQ¨í­†Fò.©çÛf\rkÊÎ‘ÆÓÑ¸øKV(nØî¥¡¤NE.äbƒ\"è¢ºejH!DvXo\0õ°wÏ	²oÓÏfõ‘Â\\âzÆ|¿’\"‘cäaC¾]ËÉ¢g\"§ÉÒ=#1xlÄŽc'Ž2¦PÑEÒ2l*d2¯þP’^!qs2k%Ã»&s!DM\"æë&ÒzÍrD¼Â9'ŒþR0 ¹1Ÿ ¨µ)Äc'1¿2„0Ï¹#­K*’˜B§À\$íeðc*+°‹M\r,M\0+°c!RÑ,,þÑ2Ù\0R®1-ÏRÓ..Œ1XÔ²ó,dp\nŒFS€ÓqÈÒdFdÕÈýð¤ôq£1-NM’æõ2Üò3F­S*Ò'@?P\$Òäf0¤¦®/„hâ„m\$‹àÿÞVÃ6o\nÙËÜ!bFz«£5î³6ARûQ@;#ÜGøeÅ ƒ7g~	£\\ÎcžFËâ\neÐ5\"8¾â:ÜOd²ÛŽ.a®Â73-“|,@Øjî\r,*5c;)\nr×ão\"O°'\"v)NpJapèo‰´Ïã3‰ø¯ ¨ÀZmõ*Â!­ÒÜPm;ðé‚ÀæŽ\$ûGp”ÏNN	ÐÆt_O]) h¦ð]BPŒ1äÓ1jnn‚p3 ED äV“ß>#ˆ QŒ÷ªØø…pjâ™QHElWÊE(ø>,Ÿ‹Ôdc:3älŸƒ¶ïB”_‚•< ,C²oMþ¹O]AË¥B°¶ÅÄCâJµ\0HïµKÄa4ñ³‘>tÂ¾´Ô* ÅEoÞ€ã¶TÌ²ûL»\$‡B:hæ”UØcN\"Î#¤ÜèÀ˜lk:f%¾½U³Št&/¼Í\0Š™\\=³2´ßB:\nË°‹@%„ Õ@Ü(ä¾@ì¬Î\nN²Ã€ÀÜÂ£¢¶¥Ð¶ëa©Ú7¯Õ\0ñ\$þëTœÕn1æ(‰,u)R`íÂ\\‡“\nÐÜÆJ>GÀ@ @Ü";break;case"gl":$h="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8#DßÀÚq·NJ•ÍƒB;ºPQ\nòrÇ“;°ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ †0¨mø¨4£oê†–Ê{Z‰[îì.¸œÌ\rªR8ƒ\nN°„BòßˆNêQBÊ¡BÀÊ7Å# äa•­ûÔÝ`P§4©Ì”¥5*ƒ*÷DŽ¸†ŠÈC\n:¾,´ªŽéÊãpÊÙ>\nRs3jP@1¢³;@ë‡Œ(ÐÍŒÁèD4ƒ à9‡Ax^;Ðt(¦LÃ\\¼Œá{G?ì:Š…án”ã(é=èûª5„Að’’\$HÜ:xÂ@Áƒ‰¼DäŠb‹ÔÒ¦‚˜ÊcJ¾¥3V ¨ã¶€ŽC«d„·âhÞÆ¨­ÃRÝVu —7\rã|‰ïªÃR°XŒCËJ„·%ÌÎR¸Ø:«è£wlpÆî»\"1³u4Æ#¬ÆŸ*tà\nË«ä’ªc(Í9:õÕy_\"¬xŒü×Ð\$#;63Â‘X„ûŒlz*ª Ðjjã0z†9Í®Â2Bdˆ¦<‚b* 6uŠ ›¬Wƒ^ÀP €d³2W8T”Ò„Ý°ìMí5çõ¨˜#(dÓ+k\r6ŠR!Køj§E{ÄÜŽ#¨Ë'lÝ¶ííúº';2èäÌ;D’(5\rTÔi*NÊˆ£ÇÇî#-³¨·ûÜÁ0oÚ8ç¼7è6'_·ìû*Ñèìá3(Ð(Lì#Îh£tYº£¹úñÜ-j©ÑÁøÐX‘T÷Â„«öó\0ªÖ4F7\"'`4ö]ä1ÃIqÒÀßiSŒ=øAà¥~ÓW;¾<’*\rã_†!ŠbÞÈÙÁ\0Š7}¥o'íÛ©_m¿*iXÌ^Ciž_\$ÑÔðÞ}É	… Äu&òÀFàoBHQe@v\0r cÕ#GÈ3CälSiÃlÏq:4²–Ë©§;ªø8B–J ¨u~)Õ§„ôŸò€PJ;¨`È¢\nR‹J5G´\$¯Ôª—ˆjiN)àÜ¨M_Á…Tª²T«ˆÂcgåX×ƒæ›Q	I)gU™“@‚`[­z!‰á™ÇŒZÉª1ÇðÑ\0uÁ8õŸ“ÙÏìF@,hþ…\0(oqgð‚¬\nMÉ¼*h@“²<H‘›(a¹_!#Qù, ¾BcÑ\nd;¯´P¾ò Ú8x„%<Â•äPŠ¢À¡(³2RH‡ÓQMCÈSO©)`+ø•erð€5&Ä˜HtRX3­a¬Ê+„~wSrá¡ÁÔ é®	ú6Eð(ð¦i9v,ýV^üQÔ06ä©\r?È-2Ùœ1¦lÙì~Þ‘%¤ ô1” \"Ï4Æt1Óò‚J1]\rY³OSHIÉ;%oÔÂ„`©\"ä¿\$Ì*m•BVdÒ‰y]¦;hŒ‹êI¼3½¦KCM)›? ¡8ÀØ‹•ø)c„Ø „0¨BL	!h …)Âp \n¡@\"¨jPA&Á'… ¥Uj½Y&Z¿Rˆ¢)lð9w¯\\_¸P%\r ¦jÎÊhuG<8Pæ6üÙ9G‰Þ­Uº›‰Az.–:šÌ¢è^Î¸E}ê Ç¶Føåƒ¼NÊ‚sfÎé!Gy€×\$ô[;Ð™îmŠ¶6Êß^‚ínVÚÏÛV‘ÑyT)6‡4VÂKÓY\$	\$€'4rCƒïd¥8Š°‚•0:U¦ìô>ÑS?cÄG¥RCH‚¬½“bsËí^ttª?G´òŸódR5D\rõ¤Z”ƒã¤èž.Òêà•bIžÃ4{P°³˜}¹ø3=QÈû4yPtÏ@Wa[ˆ¥{WV6’a…'5æ>ónpØF)^n@1tIrìmK`”¤LqqYY{ÃQ¸î|w|¬B9¤¼ún¼‚\$”5éIvd›cCœ-=	Iš†–@§jŒ–4)›\\` hG,	\\Êj©ÑZ-·.4Ü%EòÇ T©¡ 7Bôi‰DÐ„:‡ŽÌ]¤+ÆÑ™Ó>oÞø/¡Xé%Æ‚j>”Ó	jôhä^X“;B…Ý½ò[QØM\0”Ë§pxÔ&ƒR<M6CªÖ’ÁÐ@Ózç²5çûY’‚h÷ônÖ;Z;KH#.šÙ:>@ë,®àu¤N[AÞ˜½­¨Œ©êgãSéÇ\n^cy[(ëê•{Ù·Q]z!ÌÂøå­	£Êt¸å*beB2\nÝmš˜!âRÃ(b@ÒÇbÌ~]ëÑè%/\r’ÜfÌR«òÄXÇ!–’BBL@eéƒ¶BíÄš9Ï[+>Ìàør^êàÎÓ#òòCÌ[{µ&†DÉ¤HÕß9Î;<‹ÏÚ½1<Ñg¶]Í ºÚévéôƒ\rÒŒV#r]m¬TÆeXJ!¨F©©‚_e{§%fÚÁ³+ÄfÌ„ëUÏ¸çZÂUBc†|¥Z¢+Ìî>1·š/Gµà±Î%^öF¢ÜÏ,e©Vk£þ¬ä›2Â–è¯¢ž a|Å¸#’gªœŸAmí£±Ë]8yQo¥‡”QAî¹vÜN}'´mžß¬ó^í\\Â0„äÊ„?‡Ô Y%8¾êUc¹uNÛÕš»ãóÿ“òÑ·ÎÖÿGU¥«Oå|úo¦™9HÓ{ÓJ/áÉ”ÖðþosÕ¿_ä¨%ö3:+÷âÒÓf/9	2ÿ˜wèØ\"Ã&¥\\3‰x)Â6wb†ƒüIŠ,\"ÏM§¶ÿ*Šÿ`ÿÌŠFö´\$ð¿	8y‰^a°¢&O„É¯Ú^N¤¡¢¾ÀÀÚ¢£ÊÌ–þêìõnœõ¯L¦´ÎŠön­®²q¯ÃOHZLdöNŽæÂÍäÆéX÷@Ë	È\$ê¥\n¡#p°¨ê·£\"îÃ®à'\\Bl`&–H¢SCpMjƒð–æãN\rèBèPžïj‚÷K‡ŽÊ_Ð«pëÐ²mf/çLÈãqqv°¼˜æ0îìè%1±ðÆÌ îÄa£ê3îZü¬ Ì0	:ýðwFÝïÎõ‡³-C‡™¬x9QGQ‘R“«˜åÑþ3ouÑd§ânC¬·qŠ^°”òÐ˜Ë´d%Ó1œÊbóÐå¬·ñ¥l¢Ë1¬ø±‘ñžË€¨mñ•±–÷IB/Pª÷Ð™¤K¯Pª	´&\0ÈÍo˜7äË£*GCê¾G¿®,í~(bœ4-5 ÃZëVa²õ@†ñÃ{ç†LbNK§•\ràšKJ‚ ¢N6d’\njŽýƒu\$.è0üû„æÕ²0æKB×/¥\"„„\r€Vk¤‘&µQ4am†GcD\$Þ\"Žæè’#pNXgçF«@¨ÀZ\r.úF‘cÓMÊvmÚÔmx*\"2C).\$'4Á‡8™N¸jQ %v6#ºI2„pà=ÈÞËëÆÉÏ›QžUÏÑhÜ\$2  %ä3>(,ˆmƒ1fº—)>ó@¨M•)ÐÔ\$ÄäÂŽïËXÿ0V–œ»ËVôÃû3ä\$‘D3F3JÀ/¾Q94’ÒûÂjœ)ŒÁ5Nÿ5“fI3>F„I&FfpóBÂ4Œ±Î¾¯ï°\$Âõ\$’gSšg§ï&h ZB„’€Þ’Ì2N¨ó„.¢Ž1ë	6ãl1à‚K“Òø°Ô!Bé-‘ž2³4&C4+ %F‹ÏC:()Eì˜ÁQ_D’-d:*î%dš#gxðfBB¾\rÀ";break;case"hu":$h="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­«¯[5 Œ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:Ä.è£d·‰9f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q{95ŒtF6D°„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0åAâb4)0z\r è8aÐ^ŽôH\\0´+º4\rãÎ¡ ð¬Ã˜Ò7ÁxDáÒJLþ/¯£Ü5„Að’6Ž\r³\$çxÂAh’’4\"íÈA5¢˜£&«)¸¨0ŽNØØ’¼ ä:iSï‰Ê»¥\"ešH9³Û¼>+âü‰E½²î»æ45\$*º³\0£\"š€MÛw¨—ç3C '°Ö8án3k˜É²£8òÅ¾¢ê­ò¹*i[Xú-â Ê3#ªRÃØ:Œ P–Ù¿ð´Ã­N11@Öœã:3Äè®D¸Û¬Î9W\0§HŒIŠ7.xBÞ¼¥c[7Gc]\"«7Ôa2mJÃ<¦)c‰©9F5;n(@9Œu3Á_¶%L¼LÎÑÁÛk“2ÊR£…jÜLÍÈð*ømÁk —*ïŠ{êc\r)ÃÁî“<«±ðÀP Ù6 Î4Ž£hß—Õc…\"½êxŠ<sÖ.op÷W7ñvÝ3nÑ#ŽÙ,\$îIKÓ5#Z7ŒÃ2€…&ùé6¾¢ Þ×á­wLŽ£ÆÂŽc65ü½2\$#ò˜ã\nî|w˜Ú»ác(P9…)¹†DË\n»Gu¡\0†)ŠB2`=Sœô,Áp 	e°6EÜzƒ‘1)Õ­0Âç¡à+Œà ×ŽtN;*\ra…W””2CR>pÊ›cœœÓ©=\"è5@“Ž{iaÌ;©Ü] i)’\0§£RŸSúPjC¨î¢Ôi\nJAI)E;ÂšSŠyPuD•!~Tê¥Îªã’¬Ušµ2Fi\\2ta!J#!Éæœ”*`Ô!\$2†²ÁëzŠl7 ¢ƒ!W;%hÖARP†!0n\r'Ç—˜*ƒˆÒ I¸'ydÞúk(æl:ÕÒ(\\Óá j\0\$z’GXÄÈûî~ÔT¿3,‰‚Qsq¼“ÓþÝÊÑLr€7”©4±K”Z-R«`ÎgÌ„€é“p’DCÉ§‘šâ•,!À8E 8²\0æRƒ0r\$ € Ä’4p¨cXòÂqPàb²Â1ˆ`‹G‚bxS\n’äßì¶³J9!Íw@ºµ\n¹H9PŽO‡¾¦e\rV¤ÿ•fôE`‹¼\r–\\µŽ£	\r3=_ÂdmMi´&!*J…L»‰ë¥)H8™N¢A,ÂA\$¹ÅipØÓl“Öð:J\nØoG-§âT-™Ñª«í~†ðàTÃ)¬rM¨£CX‚CWKì82Æ\\È˜‘INryÅ8µÞÒÙ'>€(&1y4›ÉIÇaÁ÷Þüe©Ú–ô=Çž”li%11ÛìAÂvŽÚI¸ÉÛf{ˆ®*¼€ó\ró›AXÿ3,ÙxÃ!°¿A\0ƒ*­\r-”:GÂARÉ[EP¦=ÉL.!o1/Ö\\–Pê•N¬¦”Ü·KéeáL€²†IQiY<X1•É`,¡k–oÊÅBg *Xi7	Í|âdfÅØÉ)AdÂ‘ÐÞGJ¹ù»ì|6©“ÊoˆÐic×uw@Êð\0©ZnRÔ6‰#®.aá¿·•´wÂ2‘NìØ!È#Ê¸_ó'¨†Þ£Ô’]k»Œ\n†É˜‘¥¹\"°rjÉÐŠc¶\r™¾iÎµ‘Øæ¾±lF®fÛ°²ïj‚,°4Aåº2„H€!Vxî»H< Aa N\\nôÞlfîL“ôZ\r)6Á®ˆ´S¢AÃq\r]À¼¯¯2,—’îÏú±©ùs©Z=\nhÂçë-•£+åŽ½Ìü¤OIG.åeAà_s¡GÎÇ-±Á=.4ƒ‰ÒaÓJ”½¦(Ž›)(SOèE¢µ&Œg<«éU¥–ÕøëXœíg|¤µÀ×º©|š¢U–ç¼	2ß?jcqœôKF&ö°TëíW_	í<AÜ·„d.L‰EW°'-•\rÏ^·QÖ6ÔV\\[ÒSeñK!ÈÎ \0®CÓ¨8è¨¡‚˜Ê7{;x7çu¥¬Î£ (!éüjs…Ú\"L,îc#ärˆRú>5aŠ±-ÌÒJæÛîÂpºJÁ(]5`•†ÃX…hŸ2ªÍló{ÌYíLf7|’ö©Lü\röT¿òþŽ·ÛÁcPG£N‘h¡¶Ó¸QoŸáR~\\Ñ1ÁÚÑÖd–™JìÅ\\Â2ð ±-ë,SŒÖÉ'BQXÖ-»e¶Ã¼w÷X+‡9]´œ'Rï†ã¬Îv¤þ×´:p¾Elï¯ÇùWÁAF¢@§ÂØÇcÒl§EN®¼27[2tg’0 ú;!çúÁ+ë~·Ïz|;Ô‰³|¾ÆÉô½ðá}ÚuPƒÙA€ßºˆsêgÉ†ƒ0~B–N—\r»ç\nÐí«t¾ÄÓ[N€Ÿ£o~ŸÍùÿcaé“e÷5§ß|Sñì]¡~×çÓGÔh+‹½¾é¿ÕúÔ€Ø‘Ï’ùj†¨¯úÿbëN¨:àäÄc Ô€Æ@@ €ô_Ç6\rÀÂŸÇø\rÂ]\$XEÃè>`Èæ\rg¸&0\$1P(ÃZmHî{ƒÐOl‚Œ†˜¢”uàéÐ`]B´‘CZ0‹hšÐÅ¯þ-ìK	>Â«Xñ‡Xáj¹j¼ËŒzËÅ¶'.¼ZonùOsE¤ƒÏzé„+h=\0î¶Z,%ï†´‹<N®Êoó;+Ù°öì±/„+ë.¶Ê\"?ï’°£¿Pä´PÜ[`–+KÎÛˆ¬<°ZÏ#\$ã*hÊª™Ã:B¶åå–üæè¤ìúPññGÐ‚&Renÿª>[`Š\rˆB0±kÑXEúYKFu†÷1g±Ç\nÊ¢Hƒ”Nã–%îÖ+¶R'X=Æ÷ñ¡wïŠ0ª=÷&~Q­Îñ¢)Q†u£¾>0:²N•‘Ô`Q¯ ôßÞbÄoqê ±ÎonŒÇ	ßn›ªVÇ1K%• iß%…Ìuìe!‘ãc¾¨„wØåêôK¬³R\0B²2Ë… ²<ÊäL'ñu!Dc6¼ïÔÏ Š\rÉ\0CîhËWãVîfl^`Ì´ËQÀÊ£®z/í	'c³'¨?(2²Ò‡'†'ÒÕŽš	lµJÖ%nPáép]­)ìœéÞœã|EÃÀ/É,D-åæç\$0Ø¯æÓÒÓÖûrÚÐ’ÔüÍdë`†Y@Øiä·hðSŠRc¦>5¨ÌsI¸Ç¾AÂnÊ`ãiÎ=§È—\0ª\n€Œ p3âð\"ãÆÚÊ§'>?ò”û'ÈU“>'óC3³HX³@é¢<\$D\$‚@³b~dÅL%âbéäj<³51nMaB­ÁfNåƒ?rJ™¢c8cª=‚c°q“+Gë¨ñ!Å°'&ã°7¤\0ac°[‚	€ÞQƒÆ¯“Æ]Ç4)	¶7ÅÊÒ®²HvÊe¨ãŽê§PÝ\0Ø0Ãˆ®ò’é«°jðF£6qæ‘“þãDj'Â,æÓüêÔ3ü¾£p5I\n çê«Ëz|ã‡Ž¹A\rIÂ²eñ-Ðk	´\0h,ò	©ŠÐÀš¢&ºò6jÎPn†ÆH†‚¼ï,_ËV Æ¬˜	àáC,qd\"?&‘b„Ñ7&€”5e²ÊÓóFÓø_Kd3BQ&cÑAB¸ö¤ªh\"Ö4­@ŒN\"«fÑÉTa8+ Û&ƒ|\"H”„r3¬ð-af¸`à\0t\r Ú";break;case"id":$h="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ŒÞëµZÍ•÷{¾ìdùC^ßta'¬D…\$•ôò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶ë¡Ó(³	HóJ8#Ã;Æè :T‰'03Îâ„ºõ¥ÈC	L\">ïã(ÞŽ¿ËPˆ0ŒË€äá=ã(Ú×%lN(@°;~€­N»ŽÙ.\0Pš•Ž£\\u\"Ð ä6§(ð c@ä2ŒÁèD4ƒ à9‡Ax^;Ër†6¡	@\\7ŽC8^LcÃà½¬¡xDÓL#(é'ãh5„Að’Õ³\rÈèã|ù£“pÐ7ŒŒà@ê±Â˜¢&\r-\nZ(2ãJJÐ:c½ã”zõÄâ«’®\r[.ïSÊ2à¹B(Ý¤Éê…Ð£è	cxÙÃ#ZÏI\$Ã\\—^¾Bxé£KÐ\"Iƒê6#c³Î:Œ U ´\0PŒŒëØ ŒòZGop¸È4£‰Êê5¢­4:/ÍÈëM5®ºàˆŠ	ÈÕ©ïj\"‰ /-¬„ WEN20¥C…¬”!‚KE	€PÅºÛavÓõloJU+Ò5ÅN€„:£H†I\"5Ù[•´¹\0 Ê2ÌÀçjÎã„ÁT½ÙÔO“å88Ù‹f	¾@)åÀPáHÛ6„NÃ±)“7ŒÃ2Ò7©h—„e8¨7²2#uC¾#¨Æ1¦˜ÍgáCxÎ„abž9*F„ÀKBËƒsn2…˜R–ëù\"‚!ŠbŒ§­ˆ‚HXÒÊ\r´;h3„4À6Ùüš–”1kÞ’\ršêè˜]]e¸¢t¿²‹·¥±ÜR™£#˜æ;Ì(Ê<irXÉÈIT—&ÉòŒ§*ÊòÌ·.ŽRüÃ1Ó,Î4Í3\\LÍMáã9Î¹ÌòOsìþ¤P-	CH™&òÈ[È–ˆ‘í¸Øæï“M&ð˜Ò‰hE=Ï]ÆÜÏIñ]@\$pN—8d~Äè€SJ‘ü[ç¸Í•\0LCAt?%Ì+%&Ciè\nh§>Ö5\n {˜\\äôŸ“— tƒ‘á<¤5ºòKBI& ¨S ¦ò…4f•%‡¨{ÜÈrCà€ †FúJ\nxh#À€1«voPa3OÐ0 Â˜T_¡È¢ºRhL^‹‘^h5t)B„\\JB\$ñÀ¤°ÖTyb\rÁ˜4’r|¡ø\njpØ™ånPÊ& Š9“.cŒ±ÁR•\npÓQ±F)³pä‹šÑ!k¡˜bÄQVðO	À€*…\0ˆB ERÈ@Š,¹A80¤@A+ÕÄÄ˜Äf¢Pµ—Ò\r—iLµIŠÇY¹¡=>a†xD—™!;çPë4Tp[Ül )sš;·BeÉÙ‹œŠ=¦1æcIs(#f\rÏ„F‰I‘’ŠOäc\\XA®.¬ˆ… ÊHcY%–‚’‰•\0d@¦Å@HŠB?v\$@2˜6îš,\$e4Ö«Ya5hCC/!éj„4>u\r\n,3ŒÐ†IÆuYk%ƒZuL5žQS’ÕY™g-	L&o›¬²›:PÚ|Qù¡2‡œž†U\neƒ(wAŠˆÚ ÅP°(Ñîd,u‚/ã]\nY¿Ž\n‘OÖ6:sCt«(Eì³#¸Õ|Ö\r¬uWõ^Ì×QE2D¡ùÓ¤è–Ó›#@()rªLi­Dhå ?bwøT\n!„€A˜›jF<7©ƒ<Ï©é-ç””I‹1Ö¡”V\0€‚v`Ì¢»·+¢w3\0ØÜ›Ú­¸1­!µ5Kü V,ÿ±&ÈzÈ²ç_iÎ[³šÄ	 rì&í[EƒwPÍÜ5ª1.¸¤ÈˆU\$Eå“fGÖá#1eú”åÎ‘\n@Œ†R’JyžS	¶EÈF’Ò›ÒN]}ý\"!!òCÃb°±â¶ÐïœóMYy#(¸p)”\$ApáL/a ¿UVoi#œ:\n©V\\WE<N™Õ€*¯cià¹ãÒ®\r8í¾Œ}yÖI9!¹ÂSÃxñÄó¬Ì#'ÜbvTþM.YW®v.F‰lÊ-ôÄÚù0ÕÄ(Hï/äT’ò]óC7äš¦ºÉ–p-A;4«ò¿²æ?\r9aÇ«ÜikEn¥ÑLÅöGÁI.‘—@ä‰åŽ´”ý.T’<^cæ)9 ³¯M'A•²ôúÔ“ßMä|¯–jÆÕËŸKŸF‘Pµ˜iËáÐº2í8¹ô%Ð_\$‰QšÛ*]×ì*È5·ÜrŽ¬L!7«W6•‡[ åT¬¯Žc\\ëYS^vÖ0×;o×©[·5>]×Z¨h·*~,X Gš¹”öuT\n\\-\$¥u9á‹ŽHŽCw8íêb•q7#»ê.ŠÚ{„vSFÙ×ïwúU7nÙ¯gke²c½kY\$®Åd\"»ÒÍ¦¿ÐzÃ“ì^U·«(9[§Ak²—>°ÿ25¡Ìòür}9ä[ÜzÃ ßÎi’9·!\$¡–ÌÏ–SÓ0MYóz¨Ópi:l?7‹Îy™K7fÝSc·»ÏÉoeè×‹Tr½Ú¹WIdNen-îædË^^}8¶²>·¬íï0I Mö¢*0e¤ï,Ä—>ú>QÓ97wÙå<‡lÝ[“¥rP›»çžñúÒö|¥á½/‘Õ9ƒÎïïè}rÊ¯Á¦Àsì¥ìý¯CÐ¾àÄëžåaW´UþÂü Ðš¯è·ÝÏm¦\"ùÞëaYóÉå½e‹AYK,½X‚9–ï¼?ž_…p\n¶l¿\\•Ž\\ÅåùÛU¢!Bê\0S(¦7û‘ª€¹'ÈÀ¦£kž% †?ÀØhºö‚,,©\"ZGJ4FÂP‡þn¥% Œ’â8:¯ o\"‚\n ¨ÀZ\0@#ÀÇ‚>%«’¸RóM”¢ýHÄAîž¦„GP(Àò²†f\0?^,Ã¶<‡^2k p€.í<ºäzP+ðc­(®ÐâZ:BŠl@«B4„N	€Þ(cƒÉ \r¤À1ÆŽk‹žá ã¬¨×\"Ä,†»°Øa-rifÅäÉÍr&&®ËPÚõE\$í§‘\0\ràà*ˆ\rÓd T.tEÊÀˆì¶Ç+àšuZØms6:4_­Q:^Ÿ\$¸*\n+\0…	§Î/Â\0«ƒŽëˆx&.¸0nÝ¢Æ,¤Í¦\$‡^}ÉøÕ‚\nQ3ðð5 ¦«‹4óì8C ÈBF†_+¦BHþ1*´>(2\0";break;case"it":$h="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iOÀ4AECIÃÒ#ÏCvŒ­£`N:¼ª¢Þ:¢ˆˆ\"4Î @´/Â©\nC,#Œ£z(ûº­T€*c*r×°L°äìÁ/Ð cºÐ2AðˆÄ?BŠ·kèôó¿B`Þµ\$£ƒœÑãô&@ä2ŒÁèD4ƒ à9‡Ax^;ËpÂ2\r«[-8^ŠÌãÃÊš¤xDÖLðé)ãØ0ÃXD	#hà&c xŒ!óÔCãBòÐ#	BB)Š.²¨–ŠÍSzéCÓÀÓ0´«¶4Ê`©ŽP@è¯ËÂô¾&â§T¯+Ú\$Ö.ü',ƒ²0ÄÑàÞƒŒ\0Ä<ª€HK`Øj¢!ãbH¶?oíf\r´\r4+XÇ'ÚÐ| 0Ž£`è6C`êý\nuä~’/Â3u½\0P‚3Œò{x?B¾¬ëÜ8ÜàPž9/V‚ô”¢¨Ò- ºpP˜ÄŒïÍDÐ<–½ð]Ïh¦¥3ÂO\"1H	€PÂÍ0®ÛkXUu›J¹Fî8UVKê1¿18‡'ÔyÄLÙçÉî^¹Ç\0P Í³¬,ú8-“ 9éƒ–Œ©†`º¯Úcth+óŽ^õÅ²’ ã0ÌéI)hŠÂ?cz1\$.[1Œl8Íp„tˆ9…\0åºŒ,jÖpö=Þ*@æ¥¢ Þ5¢¡\0†)ŠB2œ’Ü£NDÊÖÎ&»œ\r/#ì°‹’¡µCU<\"Ü)û¾òï« fòü0ð7‰Iªb‘W=Îf*ƒ“3FX\" <?ÒxÉÐIŒœŸ(Êr¬¯,Ërì¿0É#”É8ÌãtÓ5¼ótá9N“´ñ=O“õPt-DÑm\nråBãHÁÉ\$#ÂZ		Ç'gœÿ†Utf9‚\$%Ì’³LUZ{ì\$‡¤‘¤TžqÈ±…	Æï“ãÄHO!M‡ \0a£j%ÈÓ‚‚Œ\nI‹Pƒaˆ ’Ö¨Â‘ú sk‘P§\"Aþ7Lÿ:\0 `ˆé•-M#ÆÎzŠI&D˜¬F¸áÁ†¤Õ¤ö\0yé\r € ¦Äó£•k8ãšƒTóÌôG\rñ\$ÿ©ÅÈI€P	áL*:\0¤çˆOq‘…À b»¦/I=*†“l^ n#ÁT/ˆ°›,K\$¦g%ð@L!àg ×H0T†…Ä'æ›\0cJ!ˆ¥1ãRoÏ{ÍI (Ü«f.Âp \n¡@\"¨XÉ&Yž[Ðñ!˜«=[Í—žˆš9ì<71Ê¨˜p^y–¦ zNiÏ\nm1WÃ_=tîR6«“\n„‚8ˆnuÏ£ZHÙÓ-†íÝ6Î¦è:ùg’1¢3#¢EMÉ™ ŽÜš€ ¬D\$<:F¾+ô2ŸÈ‘»\$”xÁB²BQÒ‡•ð¤óx[ÏRòGp„¾šrE)‰F^KÐ›% ³&2@?eÌº®…B¾PðpGh 2¨\nhä˜AØˆt¨*¸VÉØýE¾¸C¤ *3blF>¹ƒi4yo6@)€Ê°Làeô°½TµjËøn/D©™«Xâ,0¡M2¤¦Œ–WìÑVT9Ý9OHfŠf0’¹@ò~ËIžEs´4Î÷c-.-a¬Ì¤tñc¤9ˆ\\F™_„bÐNK0R2&îa„S-h1…j‡y¯ ¨C	\0‚3‘?âü1‰-6»¶àäA\$RIV×1s¸5€x »å¤0¬e‚ZOËO¤\nOMs[¨O	nÅ^KóL:À%·Þ°ë{ZÅÜ0WÆù”[ÎcÍ÷‚Dî’ØFNÌK´Z¬„ŒSÞdàiIäµÅ_/†]q¹\$®ØÃ»›Í€œ¤®m;PêÞ1+n8øfÕ&ÆAºË¤õkJÕóŽç	#0°x(t©)-Bpã‡\$T‚¸eY5cêspÎ>¤‘î•¯ì*¤Tk4Œs¥—®Å‹\"äDÜ´eÂrL-”Vj*«ú/hKä¶¹ûä)OQEyYÝ_k“I[Ê\n•2íç“¨\\œŽŒtÁ¶ÃR—W¢ëù0[mWHVÒBÕÕ°\nÒ™¬ýQõœDhÕwJ¬•˜T^Ô•\rµ¨¯W›¹×§¦þ¶©Z˜´4«r´£-§¡¥È­+`ê‚Î\rÆ(.iÊÄ”Ð) ÔV,ôK6›[1dk¼ªµ\rÃ<ÛmlkžÍ{]*[G¼ §º´ÞèÝõqDiZzò‚¿Döé&#q¾ôÀæ7Aó·¤\0Nü·“k€.bç7¿*MŒY°ÏgC+uÑÔ-ÕÛdŸgžÞ»\nýq^?ÅùÜ:qÕÀ‡i²’I±¬,Û‘¢¦u0Wdî	BeœCPs.;m@Ó,{òi!Â%¯dC·6öYà¼Ü¶IèŠäaé{pH7DÉƒ/ ³Õû\0†û!%UÑ\"pð¿ZKMÔ‚žuÛ™ViÞäq7gRˆ‹Mn'Wpãú¯:üÐñ½Ño•÷#ÜûcÄgíã¶3“6Êø‡Q?'¬±¶©‰qyØGkä\$&h¨¢–Ï>íÞþðÚw…oîé¥‰o­æ>=Õù`ÞúíJöÔh7·Èª<«U#«¾¥x5ïk¿ÀC*ž£\0ò‘‘Dgë½â­iÕÓô”×+ä¿]sý?Ý}®öTa—ìï\0qÿ*Ñi„ù\0è”x:-ÝWEld«\r	¥þìÓø÷”÷cvýoî@L*@¯â±Ï\0,*Õpýäÿƒô\n‹BŠVÑP&yÏ^ÞèŽµ ÿÂîüKN^ƒø&­æœ\"ÎÏWàªþP*%°ZIO¾¥'•.iÀ	t?\$höD\\Hë\"Ÿh÷¢üqOŽ£‚0-gš Œê¿pŒ£gvà°˜ëà†ÙPŠX'\"âä-Ã	j¢Î'˜Š^Tâ\ndîèðÆ%þ#ƒ­h“#à8¢JqExZËö)C¶JKELÝez„\"ZÀÂ= †9ÀØhæ +X1–«è¦Öpf/ äYÑ=Éú*e…Àª\n€Œ p*\0Ü7&\nì8àb`&Hf¿LN½Š–Æ¤Áª¨œçx½Æ¬ÒJº)âNu¦X/k>C\$îÖð2;ƒ¶q8m‹Yq%iŒâ¦#ÊŠbZEäˆ/ÊÐ&Cª\rä¾8]E‚Ò‰h`	C#Ú¶bÌåÍ@c‚H#Æ\"Æ,±eM\$1Úè.!‰ñm?®d3Þvƒý…h©±ÿÈhÚ¯ªƒ\r0\$V2ŽŽ.‡*cvL ôº®È„ãnUÄ_@äfË´)±Ö?BðÔ‚\\b\r ¢~œ‰Ìbn˜ *ÊÃ¤.„0Á\rJ\"A†’²,SEä-…1'Å˜\"ÂÔ) 6qâiÉæ\réêpéã\0ª\"žòœjhö¢û²|\n	\0=*&(–ÍRUêDÑ0r	\0t	 š@¦\n`";break;case"ja":$h="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$ÊzKêÙ.r‘º¨S/äl˜ ÑÎ_')<E§¤©a'¤¹Js,r8H*ìAU*‰¹•dB8WÈ*Ô–EÂ>U#‰ÂŽRT™8#åÊ8D*„<‚_£ˆa˜EÉÎTÇIBý#êdÿ+Çò	lr’j¨HÎ³þA‘3Ì÷>È%Ê¨—E‚®Y§¥pîäÔ£•Eu x0µÊ3¡Ð:ƒ€æáxïa…ÃÈ6¼#(ä\rãÎŒ£u <8Cpæ4öDÝŒ6pÊ:W\"û”0ÃXD	#hàÛ\r¶ˆèã}„kˆ7ŒÛz9µ‚˜¢&\r.˜ŽOTY_§¥9tr8I£…,‚I(\$IÌM–‹í.À«	]ŠâøÉÒP§96WA0¹8s‚%|Êê¼ñGÓ”ÐYÍ¨æq0XaFs’²à‰[Œ#¨Ø:°Â6£.z@—1ý\$±DsIÙë'HO1HNå¡Dæ—eÙÌBóD+Eç‘‘²‘ám°‘¼rVÇqìt’¥¼@¼‘d®TÚ0Ùn9M`æ1ÜŽõþçdöt™g¤´@í.sÊé`”Ù?P±Š˜¶14tI~ØOd=*AuI‰O=/[Û„áxjzT/–]Q£„í/<#ë2P>‡m˜â”IeYg~Aà´ùÏÓ½B?Ø£š¦¡©?Z8äÒ4ÁºÖ\rã0Ì6Y8\\ÕéI g‚ Þ×· ò¶°êÃ¹a™£\0ØÃ9á`°Ý‡'öC8a< ‚	‚Uò²pu8@ 9‚“˜9ÀÂµ\rTÂ˜RÉÝ2¹39D3oçh R˜CÈ€ƒ7UZü	A~A²TGÛðƒ(láá>ï‘âzDÆÃõBð;&‡Z!Èv Qu	¡„9œ äl# së5|†PðJ¶€¸+5j­ÕÊ»Wªý`¬0î±V:ÉYk5g­¦µVºÙëlä-åÀ—l\\‹™t.¥Ø»—‚ò^‹Ø4/…ô½Ck5ŒØ,§ò—sˆ±AD˜–I‰ð‰=‰ÙVCxr‡D\nŒôž Ä„èB†ƒã@Y1<\n ( ”ƒPzBbô‡ˆ‚¢CÉš*#ñ/ÂÁJfèƒ,H˜ÂC•W2\r „Pƒ&ÇßÕ‚¤H©\$ˆñ_0¬&'Å\0¡ÄL†›a%S\raW‰!Ð-b40ÜO˜ÁTA&¢ˆ„%VX¥¼_Œ48’,_(d\r+ä×4…ø—ÉÄ8À[›A\0fA¼6‚\0ƒ eDg8‹D8¿\rÙÅ7AÂS˜xS\nŽuƒ'ÄTPI¨&â†huLzÊ\$¦ˆ!uD…„¸D2à†'.\"× èµ\"Ñ)ûT¢ô¶®2ê0¾CNãsü]a½c>`@ƒHgø&Sjk\r¢´ÁP(>jQRÍi’™S@@¿‘«YeäR	aÒ Þ3±.¢SµÆà9EÓi	á8P T *Õ‚\0ˆB`E¶Eå©\$9Dx‚ –ùž·ÖÿZ«`®;®Ôöè@\"Žh¸I‡ÈR-tg\\%ÏT½w@TÕMSŒÑ1Cáu\"ád,DF­]ÛÆèI0é{íN.Q™sá«obò!azÊÙiT%ª‚#(@}Å0§³ŒY¬Žq-‡0…IH2®°Òã¢Ø\rÄH9³š¢S:!âh¨˜Á&XP™òþiO„F§ß†#*%Rwá+%dI3#žÒZa@!­Ci#…ùæ’C¼CÓNtÐ8A¦œÃ)¶g2óâ|Ë¨„A¢*Z&Ç’ì¹ú	Îä›`ÐÃ3EhæÜ€ œËÊ‘#Àd¶˜V°\nŒq˜4´¼WÉ´¡Üª1Ä“ûÌvO8º¶\$%th¢Ñè%Ö±’>ÚÝ\nhzê\0YDvy¥låž´m‰ÜÇoÙÇ'TeíVLXö¦aÂ\rJ:²8—™ÚbÕ*ÄŠòò!ÅÑìeä^é!yŠÃl,é4„ý®oÕÝQ¬!º7£€mˆT!\$\n\\²ƒI¹|ÊØÖ†úLoƒ…’Ð©ä\rw¬@‚ÝÂ¤˜2ð@Áö3i£v§FÅ	›½1r†˜Ø,8£Ò¼†žAYA	È¹511)‡13'{k×‹¿”\0 \\BÞ¢DH#€)€,†‘LÃº\$ŸÅ«¼øƒ8p—S<Í”‚JÇ¹º`ç-²lˆÁÏ–¥™4!i¡E;\$°¢Ä–\\?•…pÊªãléè˜£sì_Ï:é‚á]Q4o2þÇ‡( p¬ŽQÊÅkcãâzuP EùœRÊ,R˜­c#˜[Ê#…Úª²Ðì\$e%dôJóŸ>zÙë\$dÛÄI2Ì%•%à˜sÈù¹`eŒÇ—äú(Àv+Í•É¢á¹\rúîì¼Ç´È¥ck_÷¥ê„\rìyE’K‰ÜÙÂiÙƒ SôŠ9Dô#šÕÙá†¥i‰jMKýo±+¶gÓû¤ïý¦uq>ôl;:GMýÇ«ýzO´&vi5[ã~Œch°{Þuï^½âø/ú»Å:Ò…\"¡&ît¢¡NM\0‹ÚÿËø¾zÀ±\0o„»(»ì¾ýÆBøØËç¸vo(öD{LÀÖÇFÖPRuðJrPýðR¡\"ÊØÂ*ŠvM–×Žâ‰\"àª_.1«:³ëBbp4Ô0œÔþöâÅ°¨ÔpVä-¯0²ôm/\0áxÍ6#í:œ*cæô\"´&2ä–éHL Å(Šbô,¼˜ãD,ê³8ÓÏ\r\r¡VþaxD#:ãHgcF\"¾‹„Ø0ò0øãJ™*8ºÐ¬XmÔh\$ÍdÐ¦#\nK0¦añO\nï*ö0ÂöaÐÍÏ|e°_q[Ð0ÊÐ/1ó¿	Þ?qzj¡¦.¡jAÈC(Á^ÁÊcô Ve¡ÊÃg4:0xRð~ù'¡ç§¢9ªÝãÙG'ç¤r¦®IÍ)'\\œH¬‰%\0ÄJcñðdF¬ †SdƒÒ¦XÀ¡ý-(LèH!c+Ë\n1oW\"f\r\"°€¼°]o³#²-±U7\$e#Ï’-A#’W\"Ð¾Úe\0HdþždNPO#*÷!~’jH‹”ž’u£Ô¹±s(?&Ðq(rrIr_'å(D)á&mZÕP¡ñr×M]idÞÕ!ÕñI(ãÛ+¤é,®Ï Ý,r¾îÒfJj¢x*ížNòi)rvË9)D…\$Ñó0\r«ñz	È\r\rqàV'vw¡3!\\v@ÓwÍ(á,ðŠGÎ%ˆ¬À².nnAÏñ¢/ÒDL‡Þm‰ä­A*ªAÓNç5Q¤ÏHÈŒË.9\0è¤H\ni\$5s‚83ˆã§FóÏA †€ä\r€V§Ì.\r`@[*üiF˜8gð_\0ÒÇö`#˜Ë^³ˆi\0Ä”jò\n ¨ÀZ\0@Z Ç<Ä9Ž	'€g„m“?#P\$øoj÷\$¾F¢¾ª*¦ÎÏSÁ<Qè9Ãï2li'T(2#&â*Ì*„\nÃâz'óR1À˜¯ŠD<NYEêY£X8/!\nïajÌÁ9çœ\$Ó¤¬0±rø[@‚0aÊp4ƒ@nlâ‚8ŽÏ%HQ@öÒ¹\n`¨Ì­Ä53‘=jx\rààÃ%É(çGDRÝÑhÞ±9¦¾ýt<Nmå,@Tæÿ-\"Ñôè.Ê¾ªC4 Š@¬ Æ ê\r´FäI!ºäxÔnzm–B†%gŽ:f>I\0\n€åGÃ‚iÄxbN€z‡=ÉhTáOHÇ.µKHí r›MT#òX¼_\"¯”Ðå.c*G+•.„xñ2èUB0@";break;case"ko":$h="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ² QÖV2¤ñ ÐÀ'd1*ûäèAðaÚL«ùUÇËü<û‹üPËI§YL©6Fªr\r\"P’Å-È§YTT¥ÄìdF–\nÑÚBBhj´‡ÄREÌÇa˜RluÇ±²´u”Ò‰rBo¹ÖYq3Í1D×6¡ÒyRFIyÔ[²¤í'Qk”	ØN‰rgSRôÍ-Xä2ŒÁèD4ƒ à9‡Ax^;×pÂ2\r¯ Ê9Ãxä3…ã(Ýd(Ü9#}–7Ã\rŽ2Ž•¾æŒ#pÖÂHÚ87#m”:xÂDaÌãã#|àmx¦(‰ƒKŠ sDÕ6K´ùØP–‘fZBOif@!…êDÃÏì^†XrVÌEKÚS‘‰‰I	#7•\nÆQÒªþKÀ3’þ^’‡YRL¹4|u‘äÉØS¯³ð\"Vê6\0ì0ƒ¨Ê¿…ÚAÌÈ9Pv'û.ƒÀÈc¤A‘1‘TT&%ªJeY“¿DCøý¬ØtgÆùBLœªÌr€ zÈŸ–«š×ŽcºðßiT–”ÎOºÏMÒ}'‰á«ý&vE!ÖS‘†+É \\¯/Ì¦u€Àx\$º[K«ù:\\Aª1‘ÄàðNØ°ÌCJcxé'Ø`·íZQô=\"¯R|ç)ËsF•¦Z\0äÓµ!¬×ã0Ì6XWå-L,Îé6AB ÞÙ\r¶èò¶xê1Œmàæ3gá\0Ø7Œï æ7Ã—ÖC8a<€‚‚Uä°Cpu8  9‚“ža»b@™„0¦‚1Í(@‹\0\\{H	\naF%ÙŽÁFJZCè…ï·À%_äNÆTB“—.ÇEŒƒç¹×¾ªÜ)!N¼ „ÐÂÎ(r6q9‡uŒ¼ƒ(x¥W†H>«r°VJÑ[+…t¯º¾X	b,e²–bÎZH­C–µÖÈ\"[a±n­õÂ¸×*ç]+­v®ðÐ¼Wšî!¬×¯£f°ßHn\\ç<BCDJ“Ú<ˆ0ª\"\$„’4‰š` ‚\rAç¤‚¨\nYÑJc°\\  BP,EÅy:ŒJúPJ\nCè\\ªšûoB*E§TGŠHë)dÑB\"n‚(¼#Ä€ì‹Â‹!(ŒuÍÚ_TˆHzJ„’:^¨d\r+ÈØ´ê—‘Ç9 W‡\0fA¼6‚\0ƒäTJ8ë(7î½MñÈ7¡Â\0R‚xS\n‡µ(äÙ*R‘k…m,‹ÓJdh£ÃQå4§•»4‡`¤;¨ u&‚—jv‰Ä)§”…PÕ7àÜû oWïX ÒÁ÷	“äÜón«B0T”+uy•Æ±š†ŸSð/Päk–!\"àu‹b˜òÚûala<'\0ª A\nVÀ@(LµÍÃ‘äP Ð°2¬•ŠÄÄg[‰ZiÌP\$WB}O¹b¿Ã_›Ec/ðB]Á5OE^\"lxÎ:™‰â[6—å x©¹I9i¼ŽÐ “^[”Eœm­¤ò©ç‰Ù'éÛÂq–ŽÖ»Ö<Èh”P„¾§™\nfl-¨Y‹&ÒÏàR«4·àè´Cq7ªîŠTUäŸ”#¶KÊB¨¥eø HŽÉ²^„NÔ¬¥±0÷tbÏiM!ÏÀáš8S¦ä1œPÈ~OÝ›—Rð™§–çÀPNo0Ü€¦x™ó@4æó†ôœbT\nÀ­6¬ð¢Hih˜2¯#nC»vìÜ±)d„I&Sji~‹tØ£;Ä•ä´¶('Ø6I¬U’³g=kÝ‘f5’œRÜx•g^>v@ü)Å<+ØK-Ð“@u‘\0ºBŒTÑŽkø²JŠ.á[„õÆwì‚¹@‚Â@ žË4›Ç¬«Í€oÇ8UŒjsÅú¥§	×ÍÒý\0/„ƒBÿ¦g\r» ‚[I²Œ&Þ n´Õ…°Ý\\OuÏnš´šÌùd_å‡l\"æMš=piµ\0ìÕãUk±­èý¶ÕmÔ/•‚ÐgØwD„Œ¬R1a²ë¸(dœ•’Ò^LHY÷E˜N	‘/66<¸N÷Ð£tîG¶p\n\ná”1J¤ðJ¶áD¾œ¬‰Ù!¾tè¥AmÁŠ B¥JD‰–Ì¨‡O;Ò\$Púl‰ï[&´×™62fTË—¦0˜Ðµ°?{BÔrf2…¶Fm(Ko\r¢PJ¡4äè÷ƒ!s7i¹f¹¿Øû”ˆ+clù­µ2LB¿˜½i’z	¦Ç½5’¨nÇ6å½LÄ±\$ÿŠM	Œé6L‹1p}„‘WÎÉ¦ö¡Û)\$íc²×ìQÙ‡iÈY8[¼‘­ºN¯4ÝìFägÊ‘Ä¥±( Û{Cn^E®¥•øãm³ï¸žGNWõMEõÆWwô¯jÞ?}›Ý]ßõŸMæ}E¤ïÚÕŠõpäÜó˜Õ^RÙ{m¥îakË“ßÿ€çýŸPòÜß)ß¤e3±^çª+6üR¦¼µŸ=ïþ×åòÑÙXë-gÊô¢Ùeï‹”ÿVòNh^þ¿•?ëõ”ÏÒø)p`nš+P¢<ö”±Ø²bVúB˜f†l\$â³êDM„ÀÎDÞ@ÌšÁ*L‹P¹áÚã<kâP>*ü¬\nN¿\0kT¢íÔ`b¼,+Á+\$èOÞý*Ðë‡vÊ'\"ñ+tk¦Ço’ð´èPr“+^÷Ž‘£MêLõf8ëêòåøâ¤þf@åOzû°|öÛ\n‹	/[	o˜ûfÕG€ID>Ã0D%¨rFANrÅ¬Cºb Á6’:ÖúîÐPÃìë0¼ùðú+p w*iâp˜Pþˆc¢ý‚õÈm¢œ‘g‚`\"rÎ\$éAÚ¤RmTüª\\ýÄ=±>ýpn>ïÜlÄì&W\nÑVCíï1KÌb’\$\nÐ*hHD‰Ž{\nP†ôÑtO¤~±©…A:å,²ÜGqvFÂ=|Na;‘‹‘©1~Nô¹ÀËª]\"p°F,¶Ì1Çï•‘Ñ\"ŸjQ¯Ï1Å	ð¬\$QàÌQ)D˜ÄåÏlÿ\$RÑ± ˆàÐÆ±\0ú'Nu%N¬ÃBlaÔu#ÁniáH¹+—C+	¼>Ä¶B=ðîc©^õÏìóf¬\"#ñ®€ÄºRÂ²Y\r(Œ‰†«£–€êD€¦Žƒ](C‰(¦B·nb iËl`è@Øj» Ö¤¨††h£Œ}â\r Ì}eô( Œ©¥Ý(¦‚I\n§àª\n€Œ p”rÆ<®pû>ç§X\\#&.–¿îª·†–·Ízº£0Œ_,rÊK¡hafI®F2Ã0rìÔKS.ä£&Ab¼,Ô–a\0ræ²	Š„CÊÚ³R]ÅŒ5ã†9n>k¤\"A`š®†ê„-*§Ú»ÀË®˜ë³D\\!‚Q1ÐdéÏµ&dö÷Ós8NŠèïÎ\nŒ8ÑÃY)2Ü €Þ¾X,ŠÓžwiª=°œôðjÏþk.ÂJÌ*OÏ<ðÄE=æN@a8kÍ¨\nÀÂ`ê Ú/â’:Õ0DdÐÞi©.SF¬Î| å7£ˆhâ~›¯õo ï«îOæk 6ºrhC9Ç’DËjC¤±­ðÝ\$ôCÀt¬¡B>\0";break;case"lt":$h="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nƒ*P:-B°Â94-Ô»4ãJ\"òŠcZ¯,(ˆ0Â»~6 ò\"Ã(Ô2Â:lð¬ã\\P†ˆã(Þ6Æ\"–æ¹lZæ¨ã*VæŒ£”Z²!°”(Û)KP§Š_\ré¬V¤Çƒt0ôK`(IƒHÔ:ºø  4#²\\ýL³; •-AàÂÉ8Ã0z\r è8aÐ^Žô(\\0ŒƒjÏ\$…ËÎ®4€ð¹ÉHÞ7áV93Ã¤ö/µ£Ü5„Að’6¿r2â:xÂ@AxÔK-;D9²¢˜¢&;Ã*H ŽÖâ’âãŠRË¶†X#­†b•c“À¼¯këxÈ ô2Zn=¬â.’6à½ãª–—±C\n¸µ£ @ô»Ê\0vÝè Î‚^wuà:.Îj6¢€\"(h—ÕpšÔ Ž­@\$Ã.Ž€Pˆ2¤ª9l%ƒ¨ÊXþ#MXÇ3\rèh‚3¸×¾O‰#*¸Š¯ìØæ:Ž@P¤€+óÊ•Êë`Ô•\"Ã¥²9CÀUyEBá¢ÌâÍ&Œ¨æ•¡¹ Ø65mk*9Œu›]„¬¯6m\r+ØäíOÃ¨÷Z‹æ|X¸D½\0Ì —ª¸höÀ4HÏ\0§gg'Â¹‚%½Þ³	.—ñr<È4³lîP†Ôã‚Ç¦B*QÏB’—\n#×\næþ Vó.Ëã\$æŒ|\$dO*9œ±ìŒ&Êã0Ì6Quøè”ÎC:þ*\rè²V7;-*:Œc>9ŒØÒÞ7¬Ô¨XÓíá³¾ãrswQCv2…˜R’!ëšl³Þéx†)ŠB5l-@•3>M}\08>XÃk)o<Õ6à@‡¡Ë\$)hôHò@g?¦UõbRpÒ3)\$LÏ¹°@½Þ!JN„½xA§&Ap rðaQ«ÓîW±³\rDŒ’¦Ä’~Š\0såwPð\rñz†)Ù<1„öŸSúPj;¨u¢Ã’SŠALDe(¥”ÂšB\nq)õB¨Õ+.QVªõb¬ÃBµaÄ¬pè~’KÏUpŽ¡tDQA-`Ó³‚<–Ä#%¦¿ÏÙý\r!¤7–²ÚÊ>†^Ÿ™\0ŠQÚ\n (£ø%Ïò\0\0 >òŒô#Æeù¼–‰ÛÐy@`(+ãÓU‘'%\$¬–’òàÛR¹`\r¨a°è†ê&ÐÅ5“Rk\rM1:5ä,<™ðÛL±¶!…ÅwƒTqƒ‹8d|9#°@b¹B7æ ¸‚\0ÆH•Á§5\$¼ˆ™âH!ù{6È'…0©.w äk\ryqš¥‡ÄL@šÔ<ÓPÜ‹*Ð l¾>£†‰\$ö›@)ÞÏeDÙOØoQ‰w–ZÙ)p[€`©)`	÷U~;NÉÜ®RŒ:Ep±£\"qI:1R\0<½ØVÈ¡h\\ÅQ1Sp°jár_Ìi€Â˜€¶f½WMd\rYÎÚÎ¢“X:A±©â\\„¤ƒHn]nJƒ¸w\0inE\núvŠâý°DhŽä®‘ƒÈnLk¨P’ÂÎa¥ƒó:	Þˆ¹ú%É#ŽoNÅÉOÅDŠl¼\"²d¥ÜÐŠ\$ß’äpá­Ä‘ë;i\"d\rïX9ÌÄƒePK²á…E\"ãÊ ©q,%äý†–ÂGT¹%é-ät¬X	¿”r–H×àÝE‰ÒcN0dà’ô<†®½áXi¡žF•Uk‰j	Š­q¹4ˆ˜øCGaÁõ¤‚àË˜d²k­â^çã,lÙv©¦Wf¶kƒcÌŽRÃ>C¤ªk­Ä†ß¢ZT¬=.e’Ë_…Ü}¼¼[Eì†ß5Å)În=!·U¾oq“O%À(bŠY*XVFìéo3ëÄÛd”©·~Ã5†xeI(‡#×Ó‰XòÒö­6‘è;;KÝK(µÀµ˜‰UºzÁ’‘2“\0+ˆ™ÝHv‰.Ë£šéÎ#GB¥(ð¨C	\0‚tå3?EàäâfáÁÒ`Hä	{l­â”Ç× /)ËÑt®°æ¾NÂB\r:ƒN˜Áf‚®”m)ÜŒgf„&¡'pN›€€ÀN©Í —jÁ_«Œ)L†ZÈ£‘ík¨v¹ÕZôìl\ra°ÈÑGNûÊÙ,[µt¡@-›]é[z]È:îÛšðÙlÒ)«Êf Ü{zjÝÎaaêÙ{s½ÐI¶ï/í,ïPÞÚÉ1;¬¶<JäOŒâ#Kðb'da@5ðâ¤\$¹(¸B7V'âqÔ’É%wÎöYd€Î8jîk5y3õvéj²²¹å¤& ‹	¸[!±¸cfîÍ±ÙHD¼üVåÄ³CˆF“Ë¾…­ÉÑÏ#:²Ù0%Ã\$Vúô½gƒzä§êVÑÒõ»é)í6?õÉ£ˆCKÉ+´¶ZhPe˜hy”íºÄ:oŽËŸ¤°æÐäÏúCïþÿ™‚%\\;Yjî!¯¹÷\\cŒÉEO\"=0ŽšürJ*JKþ²š PÔ‰°)bÎ>Ü	x€ZçG´>²Ø9(ð’¼†°õvÚõvoÙ=ÖtµîG«ù¾¿ðY+ëWû §òS¿¿q87ç»i!±)>øßG—5ªE¯¶vÂÚš{¯m-q÷sbÑüëñ.íKæ¾Ç?£ïï]îùõÕÿÇ›Œ–œê¢áâ\"ë.Ž—oü<p\0Xpÿ©%ìœ˜¤t©vÇ¬~FF¢žl„FG(ô†¢È]é#Æ\"\":Ðâ:sÇ¾#¢PÀ©”kð<ç„_	hr£Ú)i,ï06Nˆ7ë:—Ph(æ|âaBÿð!\0,ƒ¢ÎêçT¾«&ó¸,Œ¬pPb#T\r%·o8é%ŒXùk-\0­ðÅniÎï€“LV<Î#U\0o˜¸nœÎ)p\$ã'(êivçÅ®ÝÎËkf¶­ëDÈQ	’,\$Ö…¢Â<â­ì™\$ÞnCf:°ª·o¼ýPÈù¬þ‘<øÍ¤ŸéÚÍoë\rLoíŠ#æJeãÁ€æXigñ:ZNüÏ<{%Gs\r¤áÓ\0ñp™.Öô&\nI=îµ¢êhù±Hû#ÌÖg¢±pàƒ˜`\0×þø‘NbMRÊÈË0õNÊ1à´Ð¾—qèÊqÊúiwIä“QuÀÊL´iDR-Q(FdœÏeÎ“®\rrJvµÇ¡Ñ±äžBÐÓHÇ ÒÀä/ÌÓÑ†,'~Qh«ÖYÂþ^ƒ3|ï‚6p×aÃdËÆ r\\†\rA&+xCÕ&²]bDƒ²^]Î8fÉ*	Ò{&Âþ\$È@7êN)Jc(Y„HÇd×ïðýïÎþ-ŒýÍl]r+î¾%ïÆÔÂHe‚\r€Vžëœ\r`@Rêhçf<VÅdK2Bz#¼'£82 Ú®åÞ2§È\n ¨ÀZˆb2ü:I-®ákÝ3(#Ó,±­“-®#3.~\0Ê#žGdîwj\\ÎòÀ›/ÀÌ&t\"¸ÊƒŒZ¬Œ	ÂÆ-‚öQCŠÈ¥®8Îä.è0n=¨7¥ª9(ïÆK(\$Lb\\J„f`«hÈ”¦I®: ™;ú8ÆðÍ\0fÎ8ÀôcJð¾SVreÞ ìj\"¸+aB?ÃB—nÂî¯n±“æìÌ_>ÇÔ\"¨Lä¡>“Ò´ÑÄµ@¨Â\r2d[0éê\räª%P¸‰F•@dLcÄHfbfe®¶ä\n.ÐcäœíÄføG õ8óàæj*èF`˜ €ç=«¦¢“æé+€<¤\$`ê Ú@ŸAå<£Ü\"Ðx”€MFØ K.ûŒÐ&Æà\n†Í>4’Ld“?4°Ãä>Ô8ø‡Z±k<¦?ìŒ„‚*G¤T®ÌÀ0£\"+huÃXB`";break;case"nl":$h="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ìb’²OcÜ†JPÊ™ËÐÒa•hkø:#‚HÉ\$Ì#\"\"(iãúÀ¼¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤±Z†ÚŒ#šH<É#(Úæ¡®\$*ùC›¶0Êb¸Â1 î¦¸ TXÁI²(’7%ã;ÀÃ£ÃR(ê\rÈä„6€Pxî\rpÌ„SèÝAx^;Ñrb6¯Hh\\»ázgI?ñÐÒ±áh9#ƒ¥\0/¶É8ÖÂHÚ—JI˜èã}„b7¥-R	'˜£#¥iªÿÊœœ¹i\\æ1«*:=¶(ê:Ž@P¬¯áè8I²uÚ£¶²OlvÐ'+Ã­ª4¥r˜J”ŒCÊVÝiÝ‰oÌ‚ÆD²(‡ ÈCrLìBë[\rÉä„»Î³0Ê3#¨ØŽÃØ:È¢\\Ã¨ÝbâìlRÈ‹Iû–º¸˜“š»XÌˆ‚3%ñ2PÃŒ±3•	\ri(@ÂŒé^ŽDøËÚ6É`æ1·µÐ˜\ríhå/Ì+®\\Èé.›{3É•Å¯l²\"œÁ); Ô=/Î¶6»›&GªSJ+±Œ P¤2Ì\n SBÈˆ£Æê9e6Ûo##F×Ms›¶C^/‡Ú,Ê\nì¥ƒxÍ–Q©¨«tM³}“X¤ãÊ	`Ž£Æ’c6›£kÐæëYœðÂ3ÆŠ*ôª%4f\n•…˜RÜN¨èÈ¼¦)Éó–2:Yî:ŒË²v!º@à®Œ·7-Ì#on’7ƒ8ÉËZ²uÂ¯**›‰–¬ÿê3Þ·±s*,\nYÌ²é¼’ãÜœÆqOëzF¨mä'²Ÿ”‚PŠDu²ŽR\nH7)D\0¥àªš\$Êp)õB•¥TåÉ~ªµZ«Êª± A¡Zç8C\n‰fM½¯âjÝ\"V\$ü¢=ô¾IžDD\$˜bþpôH±¢”~G\0P	B\0Ä¢¦HÚ²\rm¤ì‚\0PU]Ùw©á°º‚òïV&ää“ÔèŠN¾8DðèòT,#hš„’(LÑ×\r%p§Rf­M‘SAÁÅŠ3`ÌS	èA‚\n4ã›„Éz¸6&ÍlÂjxS\n€µÂÃfT\nYMŽï\$Å'f!aÞ/„At–Ò¡ÄAœë’ÈRËë@¡•âjãD(¦°—“¬HžFt¹0Òw0TŠ…l¨ªvQfœÁÈâPŒ]ƒ)x(¤1(\0©€a&)b\"á8P T³Ì@Š,úKÔ—†Ô¶”ÂÙK„†ÐtŒLÙÊE71…cò~ÍŽ'é¼'†ÙvEÃkáZGŒò·s˜F\"te”­¥'VÐš_U\$\rGñ¦d—Kn\rö›8RX1‘\n1Ñ›´‘Ùšæ\r¬’g˜E›y.\r- O(Rqe@¥YE§T´¾\"Á“§g|µƒb@´Œí.SsÜð¢†1n\"£˜ÃI\nKíS°4‹!+O/)¯jOâ{k íš„æPš\naŒ:¤”Nƒzã:‰N¸“Å‚MywbUå\rÍ`ÊÖ’Ô®†\r¹–0ðdSY2µå«®\"ŠaÌ„ü¾Ö@ÜÿLŒçŽ¡žu†W\\Iê\nÈ.é¸†‘`©rÈáÇ¨\n¡ØhªŸ¹z1n\\:õ£p›!CU7º0È´8E3Ëø‹5D®…Þ­Ódsä*†Œ!°éÈ@@Ã™¬ov\ns¢ìïÐr\$@”‚ðAƒ¡^¤Ê™¢Å0Q]€ŸœS¬¼L«ßin\n;€œ.C\\ñî˜qaü(Gã˜eb¼7b_‘Âi!‘¥·…Š‰Q,»Æ]xà—=€]\$,!³\rb³½‡_¿8a(WCQr^MÅ‰–îd3˜‘Ôb\r\ráÜ‹”‚fa0&G33ŒÖKfno6x¨Ô&¨ž	¨V>é:rÐ@|8ˆ+7V¼Û71V^9¦¨82é ¦žA-×£_Œ	b2%þ,•ìÖT³ùR\\AE{Nb­‚éŽ!ÊÂ¢(ûª“¡\\Ý¹®˜RjŒß¦§¡¿œMZqI®¼[ºÅ˜¤Ýi°²fÄ¼!¯c×ZDn‹+gR\0}©šïÙˆT½¬w­¶[âèbô'pÑKýfóþ×¶¹Àk-wb\$DÔ\r{ÐPÎ	X)§­W!S*iK©»j çhŸ†ÚkKÚµek˜“€SíÛ±I,7mš¯_ÓVµbÎæÊ:›3‰q‡¾×›â{wwÔ*ˆ†ïFZÉøµÚa!txÞ%¼—›”çNW‡¹n‰¤7˜à[‡q\\ö¾¤»ŒN‰Ô'gÖ|útÜN‘q¸~ËÖ–à±Ô^uíàkÞ«öÐÂŠÄJ+Ï!A°3ÉJJ—ÌD\rA¸ë=R4B™z¶Z:=iz÷úÑ\n}n\$ÛÈÑ#¦½ÎÏù†¸]7 &kx`ˆíl+t›zPSºwÌŠÓ´ý+wÚŸ7Ð©ž®óËWpÏFà.N“½dä’ŸA¿ýRª·Îqb¿½œCô¼sÛ;j¸¯W²¾U7mh¶’ÜÐÛwf[o³ðÃÊhi:“Þtmëý3åÛbt¿©y~Ý?á]Js1¦xà.Ìû_[ñ[ö°sËÜßõ}^SýqZ|¥KôcmúÕŽ†âÀÊÿçFê.zÿÆ)\0>#îC\0%Ž@l*ï\0°\0ïR\nŽÒû‰DMMÐ%Ð(_?+ z°8×pRºNûËž/£y+™ÏÜ¶Ë•Kâ¹¨YtH¯‚_ËÞ=ðTßÏD>+á\rÜöÐ•Ð˜áox/ã8bO ¤ÀÍ¢1¢&hjµ¥˜!fF^#Fü¦5\rÄ°Èäðt{âJi-h‰˜ªbZ%âvcT_âú\nmeË@e–E¢,\nb„~\$©ì ]¤ö°Ô%1\r¢¦û¯:e˜\r€V\rb<\$&’?£„ÚÃ²?„‚—¢È#Õ4ÂX'fl\$gêž ¨ÀZ^˜~N¢jÄ>÷(\0#Œf›Æù¬£,(¯Z8Qxñ|%oD#4(\">\$/ É‚ Xjvò€šV€ÒÌmâ„¢‚,\$d}¢B?‚<„\0@QÀ1E5\"eq<8£af¿‰>uäf.\$I\$ŒÍO¦	ŒÔ‡dl” Ébä±\$À&A‹V#£LÞ(\"æ×jë!±Šëâ%Ñó#a\"c„lÖï’+ÏDÙ(ð²-\0OC£j.B¦3‡â\$lt€Q‚\"C!£„4«N\"ÆC§d(ªVM-&N­¢j†n¢t¶#ý(äêgRŒ\nÃ*mÌ`<\$¾Yä¦¢bt´dœÏÀ‚;`ØJê¯bÄYƒó, ¹¢V/ ˜2Ã\"ãx‚¦Kk¤,rà'yR0(b,^ à+ÅBf¨§\næ¢@àáå€%Db	\0@š	 t\n`¦";break;case"no":$h="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß:4;¾õ¡C ò80r`6° Â²zd4ŒŽúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b˜ò¨¬Ìå9oÄ…-£°Ü\nó:9B°pè»#Ã+rç·«dn(!LŠ.7:Ccž¶AàÂ\r	ðÌ„CBl8aÐ^Žó\\Å«bô´áz—5	\0Üƒ\rãp^.£’æ:KøÄŽÃXD	#hà¼Á’`xŒ!óìAƒ Ð7Œ‰Þª@)Š\"`Ò%/ ØÞŒxÂ\nÊ‚\0<C êåˆ­KV;\r#(îU­R1¶xœ<¸ŒZHŒCÊ@„¶„þ¢c|œþB¤!	k-¹@P‚:¬‹`ÖŸZlpÊ3#¨ØéËpë!SÃ8#\"©hÕ8°˜Â6Ð·\0è7-—P¦»Ã@ì´3£k2 Œ\nÑS,ú¥±Œ\r¶É!6jœ¶C>\$2C#Ì¹]wØ×¯hæ1²L\r2v–27M0à‹HëwZUÈÅC\\H9¥l‚cPÊÈBzFË:Cž{ŸÔqô€ èÙö€(-5‚òµ°áƒ°*[«·ú‡d\rˆ›ér§£è(æCÓ|\0002…©˜Ø	ØòÜ#z0¹Ã0Íª²ÎÞÛhßIÉUâ*9Ž£ÆþŽc5ÄŽIóxXÏ×°Â¶0ª%#…[(P9…)Hª3#bü¹¦)ÛˆÞ„©m/†:yæœ0°hÈÏŸ6`Pª:IÜòCÍˆò„0iI†L\rn•°6'cƒ¥Ûm£sÌ3½,Š‹ƒ†7XC¢R•ª#Z8GKE\"¡ú~¯ÌJR¤­,KC¤¹/LÈ™ƒ.M	©9TÚRÓ‚rN‹Q;§”öÄûVP…-(u{Tj#˜ÒS|iM;¿'f¬Æ\$’TyÏ@:2 èNÉ±\r§;!ƒVÑdR/ˆR’’â\\ÊbØVÌ ˜x€{ŒTðÀD  €-ˆHPŸ”\\\n\n())¤¹;ò–\\ÞÛtî¥Õ½÷´‘É\rÐråÞðIYO%äÄÉ#óbIIú÷=å07£p_]ëØ)olô/ÃíˆˆyoD	\n\0ÜÚ+¸QÊ˜ŸÎz0r3Á20¢†£‹ cIÊZIš'Ø\\ÊA¤#æ‘²(V,FKºi4ÂPH­‹æ079rðPä1:'„øúÈx}™Bq\$ÁUÆäâËñ>z!¥>cAY’#„x›’\"H]%YS0’f>¬˜F\nA¤UÖ!!t“)N\\#–Râ¹~@ŽÑBùh!8P T´@Š-\nY+-%Ç´pß™šHÕ„Évºrê£Î\r	±óªHXl|¨D‘ÒšVEÐ¨FgÔmá:‡TZˆ¢I”´ªwˆÀho‡¤ó@æv	Ö]4åœDV„vÛd§é	¨ö™QÑ= -%Ú4~ª›Y|Pa¥’4âCM~àéEÎ€AâŒSˆ„`¢¸\$îîX\rl®¡àMé2TðTbgxP ¨]¥ú)\r!é!2Ê\n¤¤,\"Iª[é»¬i­ ” £cWD[ë…q€ ²²s,	ÔZÇÂ`›ÉR!A¤·X²úòŠ³TªÉfØ†Ä\\La-k,ÔÂÜpDÉ;\r	¦˜·«Si#r\$³ä¾ÏÁpóxT-.©› on’\0-H	\$FÔ–“J[/Ž1q õÖZ‹\nKb\0+FÚÂQÌ7§©œºC	\0‚K[3ú{\\h¡Ô‘µ€ÈR)'#&øþ¾\"xPKzÅ\0¼«á£\"‘Ãæ\0%–æ>¶4#:A<%¹|<bß	¦VÈ„¾`‰c¾(Å@ƒbìDbÊ<ÆxÖ‚˜ÊW£+˜ŸÇ†¦Î9˜¤žb°–± Ê8Ÿ)ã¼XJBXj„h™2)4ÛYIIÄŒŽ‘úš¦öm&f €•JJMf°F1D…#\0Ã(bž¤*rá*ë˜añ?óyä[pÍ„K{j=-ò\ré\09hV+4“6Ð%± 8™!,€S\nGC4jiyé`pfè½˜¸=ªPyÒHÄ¦Ã«’éªjF¬×²ÿTeµå¾6ZÂo4M…²¨ã	’‘£óRß\"0/Æ›ò¡ÊB»t™‡=Àr÷&ß™ûDò#Åbrî>¥cêÍâKP2¢iÆ+±S\nLu:H%2¡ö¦Ú.ÁšÔû¥J‡ŠE)„|œJ=ÓÞ¶c_†</‹ëýŒÍf³gwn÷`j¾BÚáÒ({7“žE,ùWVÓ[ûçœøò”Ë¹W+ØwŒƒN4y '›¦m‹Î²¡¿ç¸Œ€ä.ƒ‘]ÔŸkð„ì¾KÆçÃ?ŸWZìsëžz—\\ê¼ç–u‹ê›„íQ—2dÑB‡Í=B «ÍTÄ³Ü¼%ífž¡’„SeÆÆ&Ÿ¸76SÛ¥ïjl‡Õ€œE¾T‰ñ¢º]À¦”÷Òàs×Zº½PŸ’«˜®Ã:¹÷G	x}øº-Ï\$æ[!RzžbAxRõÜf¨vcu#©Z°·ûóUÙ½äëÜ€”ü™Ù8ÕIø·2ßv½íyWÎ«Íñ‚…;\\vBF~<ŠEÉ“HÁw\\§/¢¤½aïþV­¾Ÿ›z|OÕÎ:?eý7:\r®ÝÍYÿ£á“E27t„©æˆ\$¯ìïŸ\0#¶ªÂúÿÍZ0eVß&Ì)ÆÚã®ý#\rp\"ù Õ+îŽëï–gbƒÈ\0¦Á0\"Y¥žüïcöœšÏóÐH0d»KÆ*NŽý\r„»cŽønf×y\\å¯DVð‚9p\0lÄ»ƒ–\n„(Òæü¿¯a„d!/VÕ®åo’Õ†0c2¾OÖH@Ž–#¶š‚”jššCØnJvb,5\0ê®‰\nŽ[”Ë0är†=ðêìÀ–Ye~RHì` ‚Ðú`§ÐENAå*:ãÞ3Š¿¬^çáJÈn‡l‚è„šÀ†@\0Ø`Ö<ÂðcÚÛIbˆ@5v—ƒðÙo(ï£V– ª\n€ŒâºúRò%1&Ö\0Òã~ÖŒ²é‘}Pæ‰´ÎÇ’.fÂ6P‹lÚÜà8­E\ncÙƒŽ­üƒcH8mê5‚,5ÑLžãŠ‰þ«#˜}1Ò:D—%DF#\"\\J¾0kz×Ã\\àªˆáe1‚šÍ†6#ëN0†þ|­Ÿ\n‚¨r\n:FR\rß \r”ÞbR%!Ma!ªX&c\"<Éq\"ëíOtÍÆÈÂoA C–	© -ŽÊ>0ën¢V.ìÕ¬€Ú¢wÀê]F…#‹j¸à‚-ªT¸à¦gÂgØZ±Æ\nÊUŒ\$2OÌªFs*ÊY2 ^0 	ÀÈed  8bÖ†\$&B¢.\r ";break;case"pl":$h="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*2(0ÞšBcÈà>ÌŒÏ\$c'£läOã0¯ð@1C\n2!\r*\0å\nhz’ã(ßƒ’ì	ŠË„\nLLbÖC\n\np\"h9;ÉŒ=£ï8‘%#zñ'(,Sr1\rØØ7Œî0æ4¹nhÂº¹kãX9 £TÚ(#C 3¡Ð:ƒ€æáxïC…ÃÈº¿ƒ\\7ŽC8^ˆRcÂ7McxÜ„Mm\"2Ž“è¾1\rˆðÖÂHÚ8\r‰r :xÂA#˜A \rKT•­ƒ(@)Š2*©ãXÂ˜´HòÜ)È#¨ÖÂ#­jüØK¬…Àƒšg#¼Ûj¡í¤¢M¢t.2È‰Œ‰3:!-Û&NãyÝì¨î	cxÙ¨Èá~GõxÂöBê§HÜ1²3‚`êrü´cjPM§ñábØåà#£pÖÓ­Â\n8þŒ9D =YÌX3ŒƒÒ£\rŠÎ)Ò#žÕ³±\n1ËÒ*ê:0éHêÿbêR0€R\0áÊ<v+§ƒÎ ¡‰Køÿ!p(çcj®‚> ¯–›šÁº5õ€&Cxè;²¸Dbç=·¯&¾dÍ“1Ì»ÕÄ9Ì‰tXïn{ªåÂ\r6)ð©èéw ;û“2Š¬àÃ\"³ë+ü³}UV>9i*uÓé¯Y½—Ù6ï“\n=ËÊÎOïfBºàPÙ ¼h*„„xÌ3\$Oâm¬LóKÙ4O²V–Ž³/°²£AèÂîˆÂ#çºãcû*Z¹¨7•oánX\\úƒ'¬«Œ¾Ïo2{…Ÿ¼ø1v|‹h9>sXúRÁ F(%v¨Æ_›õ~ïaí?ÇÌÿžúh|-žÁpÄúÔ	WÐ-÷@àèM‚qsD82%Ðî@Špk\"\0€!…0¤r¿ƒÇ‡2ROÈfR´:ªWcãÏ0\0¶>ÆˆI?!äÙ(‡0ÔPa{[‡Â	ñ¾Ç¢š“c~‰µç²ªÓA\0hK‘prR¾šù+‹1¬0Ã”ñSÚ}OêA¨UeÔRŒ@Š=H‚õX¥Tº™Sjt¾)õB•¥dÊ Ù•V«X“>V*Ì¡Cðæ† …Vê€ÄŸB ùê Îm6¢K\n«%\$ÔôÖ¶PÑy!Š-´¹bMHw@\$0^Œxo@Nõ¶p1EÚŠ?…ÎdÌ´ïWÄ\nÔ—“f]šc{l|”Ê`çUòk>…É¾J,ÿAP/â\\¹3Fv„ÉÜ–¤2Â°ÓIQ4oêú&6r¦CYðF…[“’vÐ%¢\$HÀ1@àeKø D8å“¢ä‚ž)15óÒ‡ra%›È5da ©¢\\‚\n‹F¨.£ÚÈù¬a‹ªÐw{âis\$óÙûÁPÑV©[>Rí;	–,R\nUF{áÕïª8&hñsZÁºˆ‚€ƒJi#³ˆ5UÚ@ã\rWÊ°‘š–Þ­É€¼ ¥È;‘È€R¥ÂtIL…†÷x\\A\0F\n“n¿®Ôc%d!á´›µÿ9åØc-Îž8-ÖÚ\\Ê\0kt]°à¢‰%Z7êÎ;Ä5h	)ld±„1¤0œ“Ž…^_Ì\0ÝZú¬×:oTÈ:´‘ÒÚ°‡A<82ãuå„ø;†è÷ÓóÂhfgn©¶æ[žP•%'xð)ùf	ñq\r41¾*Œfuæa ¹ŸøJeU«N2Ñ¬©®å¥Fq\rÑØNÄ~oZDHÍr…WHÞªâË/†Œ…)ûDÑeã\rÄilÅuj‚\nƒì¯¤¼1Îâ ™ Óf Q\\£a‚2áh›(dÄ÷)+\0a™tP×*Ò4CÊ-Á¸j4£vŠYhzSE¸ïÜôG\nŒìÿ…Ä	Æ8èQU*¤-Á2†`ÃZ@Y ¨/[c Ô­˜mSÅÉ BìH²fk‹emœ,¾3a‘ÍÈ‹äDÃƒ\"7NÐ£\\òNÐÅ0YÐ¼Ê&d\\\"Ã˜“W¬yr\ráŠq‹n©g>¹¿Kä'^Ö8‚ O4óàæ`ðÜ8Fˆn÷†û\$ýƒ‘5!™’²rzTÍHaei­‡]	XÌ\$*@‚Â@ !×3P@ÁÕóUrg€8:ÃJf'+À»\rÝ¶ûzûy^}Ë¥HEîcÌŽå;Ÿr<löé …çea¶7ƒ+ä6îv†n=ÒdàŽð/¯y©­ë÷¹-ßUo	õÛ»LC|yé4øDQáV‹~5XºRú…ôÑG.-Á¨6-Šs‚rrÇŸvÜâ„Ô…Âx¯áÏ³‰¾'çÍ¹^ø(\\º ó±Ä\$JÞ†£—&|¹#duõÖÂHFˆå–ê¥U}O^‡¶h[Î6\$a)SCÜƒ0Íyì¨ï[ÄÈæ§V·¦É zk&¦³á’Ð†)Ê&_¶-XË ác’MßÌ\n		H\$6°ŒÚ;0& òAƒYÒÁËªöË!}ON0A\$oû\r{µìYáÔŸœÒíÉ·›Ü¸g!yîJö‰¶u(…ÚÞøÙj½NŽ¨OûÏQøáàÞçâùß|PX]&=Ÿ-ÛÑMƒc‡æ1GPQío%è(¨(1S’¡Ýü®£ó–ì½n?a§6]Šþaž3×ÎÔ4¿†d?rCC|\rÌþ<_ìÄ( P €i RKèªOzÔ/ ô(Â/ˆPúÇ(½G\0ÿOßo”(Ñë×~ne ÈPAÇmp#¯û' q§%@¾JœôbqÐhú0N¥È¨wG'¯?Ì\$ô€ªíÅr\r£ÜÀ­`øÏ<úGì\$¦°^çn çð˜¥£P ®Þ.®ábð¬ôÈ æ°³oŽ÷ð£N;®B2ËÒ+\"¥ð×¯‚8PëÍ\$ÒðöÐ‰ÅùÍ&œPwÏ¦7\"lÐMÐËb:­\\(‡Â¶P—ˆ>IÜ\$ãò æÀktl„-gÈcâ% ÜAàè%£òÏÄ*–J²DÎ&ƒXg\0\$ IÅn-ƒæ”DŠ¢Þ¤ö@‚ ¬ŽÄ±ÐýïˆÎÑcŒ¾Ï}¬Â”˜Î\0ä[Lä²ÐH÷^øq­¸¶0¹P+Ìã0œùãëPPøg\\¿ˆìÜM¦°×'z}p„W(¾h•ÉÑƒÿëè1ýÖW‘ØÿÍZè_ £¥çèr-ÎlF	Biæ% Æ=€8ÆˆÈå|XÃÀï`ñîsÆ>³¥@@…±KzÕ­_QÓQÈN1½\r2gÐÇ\njp›qÖúQÚ&Ìø\rhdÃ”9’Š3’}DÛ\"û(Ík)+÷\"2™& ä[àî¬gn5D4J\"&†ÂÑÆøÊŠ’Ã²É\ro¡!0a-2Ç'(ÙpS(¤è\rrÅ*’ v2ï/*š`Pwpnÿàá2…’‹r«*3k\r:FÐøÒÃ Óm2èô“2¬ƒ0Ð{’\\M93Œ}/jè3=¢\0FMq\$ÉÐJ£îØ\$@*Ð…&³6¯6pi3\"l\n§@tBGƒ¬öv@æW&Í\"’p;ÈW†È¥Ä3c;9ÄDº­@æÚ[Á\nið°™†Ìçs´t Ó;¤¤è³³\"ë5ƒ3bª0¥Ø»ÀZÐ—;ÀÓ\$ƒ€ëC¤'ÚJXE‚ØJJÉÒÁsþÁãð®~«AÌ‚4ßÐæ2æ¤H Ø`Ö*ªr(Oêi©P\$âÃ)Ã )+1+­sÛdÖ\$Ãð)BØ/‚Èq`\n ¨ÀZmB\rË7`Â±zƒpÏGC'/|¥ôzUt9'çHC(2Ò\0}”|ûìDLŽFWÇôK¢0Œ*úB:cF.FÒ5óBÑŒÓ\roD3Ý7Ãî5H\$£þMŸCÐ‰£è:¾i¨¨¥¦õVþo ÎbZ#TþÑê®²CX¿H^¾Çbê\"ó¤÷E[‚¯Í&0>–• „pÖ Jþ%©SkSO<É‚Œ6ˆ7TýTT‹6Å‡b‰UOö½ à8F€õÕNù•REÂìÚ[«Hòæ`XÎðWÕòóÄ”ÂÓÊ\n`ÖûtNI	”.¦äÊI#oZq\\'K6_É¦ZÀÔp‚ÜHª((. ³dPò+„¸•hõ¦`0À‚(Ñ=À¦…hZOª…k†‚õ->³æ4p?„˜½5©_£>f6•å.\\K`ä%æª®Ð”	ç,\r¤^F\$Ö-ÂZ";break;case"pt":$h="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ†0Œ‰ Âœ(óe¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›LºCbð¡.«¤ê®8ÊøŒ¯:V	ŒËŠ1-¢[„2ÀR£q;(:U\"²\$ªÿÅ#LVºK)ôs)Ëò¼d\"¹Ã“& +¤Äå ŒœÌˆ ÐÎŒÁèD4ƒ à9‡Ax^;Ñt06¯8\\ºázQI0æ¸ÁxDßC<‹?ãØža|\$£ƒ_9Áà^0‡ÐXA‰øÈÙ¶¯ð¦(É*ü²×ŒtÃ•5IˆûÎå6/8ê:³pÄ±lk”•+ÐÝ Æ&6B¼9Yvl6'\rã²3³í¢[ŒCÊ„·EÔØBÞ6«Ì8^2#.,€Ü1³µch6[â¡9ãä\"¯Ðê6ÝzH\"šJ2Ø.k#^®´x.«¯¢‚‚l1ÛÎ0âá™Z\rƒ{½‰ã”2¼¸ÐÎ\0Ø Îtƒ\$ÑˆJr§©üŒ¡4ªä ãÈÄ‡¤ÌE*lpÝ|§ƒrWb`Á¼€PÎïÍìU°Ç%²“ý(X–~Íi%­Ž\\ùk­µ¹Ãb(ç¼KûT­+C–L4µÈÚïUòÇˆ£ÇÁ8ÛªV–êL(1MgŠo[ÀÎÜ±– ã4m*Y*\rã0ÌõÃ*p€Tfp‰¶)œ*\rêz<¿ìê1 É\0Í‡æzîÉ˜åÞ#8Â¼…ÛYºHP9…=xÞ5¥\0†)ŠB7¢”¨OZbTå%ë Û‡¥‹‹T·`]t²/¨Obö·bÝûµ&ïÝÛ·MPÀay.(üŸ¶â›[ûó€a4Ã?¢:aƒ˜w.ŠÜ®juBy4Éñ?(¡2ˆê(2;%¤’™@¤¡KœÕ4§ðtT\n‰R*gªÉ@tUÊÁY+El®˜a{Eˆ¢gbOb	8&ÈÉ¿†H•I!Y)Ðç–äEŒ¸hBpÍ´àœJB\0 ˆ¿)f>l‚€H\nLÛCAP\$œ¯!3Èò\"\$°œø‚ÙÃM#%à;>TFIÀQ8g:G¥‚PÊ,kJ†9T‘ò:AÚ\n#“Åpƒ´Hú¹-?Kˆé ‚•\n„…\"AäÒ \$Fj˜ŠvVêÔÞ™Ö\\WÉ6 L†9Bfˆ+1?Òñ¼×ìxS\nˆ	¥Rx¥Ü é¹­:à@Ã u!d¸ß5–-C®gÄ[Ø»&Ž`n&\r7H¤h¥«V?ê¨7¡‰Ø‹³\\W‡ä4šö\$JÁ\0F\n‘Ìž«rŠãâdÁ>.Ð9@ä…9\$@‹lž©èEPlTg<æ€ ž\0U\n …@‹I©@D¡0\"ÒäºŒ&¡Ì^‹ÙpS„ 	`ÃJÐô©Ì\\‚xpcÌ2b°‰i¬bÌ¢fÝE ºn ²f«²ðàK#˜\r!á',›òisoŽFŠÍ\$+BSCîsÖì JbË¨%3]“’9U¥Í%„’µRù¬fPŠgâP‰!™=+T¤\0¤~ª–Í\$jáXƒÀT•‘¹MÒ4T¡ó¦¥a¡}Ž1Ì¨\$‚í6XQF´´ ¬ÂôœÜŠó‘']Û˜3\nEšbH+ÉT¬¶*ÅÃ	–Z³{&ß\$dŽ|äU¨ô‚ÃsAex.\nop×š\0002K<Ü™KnŽ¥¡Üc2Ë-ÃC0ŠŒ1Ö‰ŠðZíÀ\nÛðði1uSÁµ¬’ð\\¯ÚÙ8Õ9Œ»0‡FR¢É›”ygL§ƒ‘Á•õ#|0‚„ Š9˜€ÖvdH­75÷’äÉ¬Y‹`I¬’ädÅ‚%«.‚§4¹KB Aa 2âê‚<¸ŽÁÇÂÒŠ¹yž0ˆ!·¦ËÓt	(7®Åo–Í^Nû*—æ0²àKÉËF{.0Ì‘\\.9*,ÌÊ#¼\n)ù6fÝœ%9ÿPÓWX3¾h¢ëŸ)°üìÞÉ1\\Ìùäæeàýs“ÓaY‘%‘0ã¤CÆ“¯:Vw¹^Nn¢8Í\0004±lÈ£‰ŽÇ(Æ”³Ñ¬œ\\öJÕW3ë;ÍÁ8„dñ¥´Èƒµ±GØ‰jQÐîC=:‡<kBªS1`n\$Ç2„r†XÉ¸–íçêI÷			*©—Vk•KŒ1lD½µÉ›I)ì/7O{šfÛÖÎüÏ¦Ð¨>3Ç(}¾TuÛ}@ž|È!FZ<¸® A[¶Á»ôåÊßBŒ“¯iz.ˆ(Ö\$õ^Å@!=UÉÊŽ}K»©yþó\0Ó\"¹13¤Rû_ôÄ¤F\nˆwoßÞ|©\nõ € ÁTpS\\[]€@•ÝþW	ÔŒá(Hœ;¨A‰Æ	_êóRºô¥Æœèu 'Oªo¸Ú{_`Î7?µ ÍÀ`h–çNZ}Dn3V|t9þ;“|æss¯~Ú¾=õ—Blƒoð¨3½œ%GJ·lá¼kÊá8°§à;Îaø±ý™î\\j)Ó®•\\Év{­ü¯`x°fÏGVfÄ£>ˆòPÏ–/äÔÿ\"EÏ‰< fË¤—Ÿ`†}¨n+s“004øAÉBÁ›?ü=ç}>ó7ÈÂ¦œ\rô›wm4ÅàÓ•óPÝî±ßÒWå·Ï(þÉ(‚0Â®t åª=,j`oòŽß\0¢€ônæ°õh'‚[È‚.PŒl_ÂDc\$(¥â,@çd´N‚2¶%TÎŒÆ	J(°*áŽP€pT:XÆÍþýNç,e¯üîlm\nc«xÜPlª&OLf^&ì•P€;±PWî†#Ä¾bcðJ@çm¼K&VaT_ê\0íö®-pºûOW@Ë¼ôPlãPz9C'\rOµ	&vä%b)\n\"¶í®çP 1\$÷Åñ\0#ž_,.Ì1Ðuì.eïé±%°vºpÞ%±ÃËœÃnZ.Ãâ\0“°	£æL\$Æn0øº`«‡%±TEþ@0ÀÐ²ÀÞ9åìÌiJ¹ÇCŒzpœ€Cf”ËÂ;¢@“ÎO(f&pÑ¤W/nTMè*eåªY‹€TcS#úÑZ3o\"ÐzqÂ2Osd,<àØ`Æ=f\\bBAM¼C:œ¨ª-C¦b*j\nJ‡Þ˜|jR\n€Œ pù&1o@'ÖðjÖgÏÏª“Ò&qmŒš#„<RévŠùbâÇ,¿`ò¹…FæB)ã,z½	Èu€×©J´/Gô%‚p\n„xä6atbŠ.@˜Ÿ²;²ŽŸÂãp0G>6-¶ãåÍ\$ÅF6E”_íFé…¹+‚{*š6R°0ÃòG(Ä¶0Î5ãdôÃ{¦ƒÌœõ®;,ÀÍ-\$âÒÜ4ÃPJ’â™\0ÞžQ‹ÐŽ·ã–Z„–Ää£2XjÖùÑ8áCmÎ@¨ÆŠè¦Û3‚|è¯Žý¤‚oJ¾:Â2I ì3«˜ñîBe\0¤Ó¾ ‚/\$T1ë8.¦à¹Š¾Ü‚s+ïÖ1*°<Ê´ìfÛ8Kœ^@á%0Æ°¹\rl4SÆµ(!\0Fê´C1—&¾äp";break;case"pt-br":$h="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œˆcÈ•Œ)ÐÒ·ØÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ Pè„ÀE‹È)°Ø#Œ¯£Þ¾Ã¢c>Å\"âœ–ƒÃ¢š–©,Ûï”1k¶•µÀP„Ç<pÜ\rFb+£³b`Þ¿Ñ8äžÉZ‘°ÐÑŒÁèD4ƒ à9‡Ax^;Ðt4¨Î#\\¾ázWGHæ¼ÁxDáŽC;ß=ãØŸ\ra|\$£ƒkº!à^0‡ÐsqŽŠ\0ÈÜÀP¦(ÉK<¶ÚŒt£ªÞ©(¸š‘=OL:Žƒ¬r#b\r4	jHÙ–rc=VE•‰Ãz¿ 4¯RôÖcòƒ7 As È¸†7ƒ«\$ UßT‘êôËmðŽ6Cè¡ªcôö¿£­h°C¨Ë]Œµë Ê×‘†SÁm½˜ÉbøÊ.(4ã¶Í¦Œh…„bÁBxå\r°,Ü7~¶èS£‡ÉJŒæÎ\n\nñ ÔŠô ã¶¦*6%,U<ñŽc}{>‰ò«[‰€SóOÃ˜ÊY¶{«/À3ë¶º`Ûäï¨‡\$lãžÓˆ»vL[Ã0Ì˜ûf4ˆòÿÔ‰\nÊ£Çø^Ûc†ÆSàPÅ0gó‚n;~²÷bYˆg3mSX—¼cxÌ3\rŒ\0Êã,Òt7¨)ðó2ã¨Æ…\$c6”Ío(X‚Ž]xÂ3õ3kVtE2…˜RœŠƒxÖ•„¦)Ï\"X¡ôªH\\LÉkªŽËàÛ…%ëËb»_;À’··[C!L“zã6öšÇÃ3PÐÃÝðOãüLPgaÀµ\0†å¼O“ê	¦9g’Ã¹|Ve8¤‚öÓ©­O	é>'å\0 ” wPÁ‘Dµ¦Tr•A­I,¦ÐtSŠyP*'©Ó’ªUŠ¸+d­	ëÏ<Ñ7'äqÙ|7èØÌ6<ÏÍ·>´Å·Ã&öŒá\rV™u(FâFÈÃ)(ž@P\"Ñ%ÁÆ@PVI*,ÈTÉ2B‰±(''É9”FÓš)0Ùì@ÂNB‰Ô:21\"ˆQ£ãiÊ•ôÞT‘*ÆL½³ôLé7&…À•]È¨y5hªˆfÉÀ8F“–cøiÈ@A„Ž˜˜+ ÙRV'8;÷ÔxS\n‰ŒÅ3òz¤Ó  èäìºp@ u!ÄÄá³Ò9*å#éŽ2ìäX0nDp	ÈNœñ	'È	Sô58×Y~\rPþ7ÃÆ÷\0F\n‘©©I(C\"·>„Y)Âeìk‰:4ÄùM?’.ÁšA¾‹á<'\0ª A\n–ÑÐˆB`E¤da#&3ž¼WšÝF.D(ñ†(•ëg„ø 2ÐàÇPa—A¥ÌPàiÊ)GK“Ê5z}jc(1n¤<¤€Qêj^r\r‰¼½i(^Ì‡Y€»9Æniœsà?6!QI…e«ŽMµ’êãVÛÃ“IEšH’BýQ˜V|¥“™÷)_Ò@TÕ\0ˆ[öUÀêäs!J!FÑvÉFˆÔV\0Rj­¤qƒ{)h\nÉ0A¤‡µÞ§ä	:1f5&ÚÆ½ÃƒÇ­ä2,ÊØá’P«Ò,æ§ÚYì¬%gO4·ib1jÄ6™z–oŒÍ«Ih†ÊìyŸ,VÉÆ!Ñ†#NÍDcM•h[Òíi}SA¶åc\0ÐÖ²hcu_\0‡DqX§x2¿’u|”Ðr¨FJ¸;Âý‚@PP*ù92“\0ßX­7 (#>#}UƒyÒ1ÎP“fË‰®Ôy/¥˜ Aa 2rúƒ]®aÁÃÁw(9`FÓ¥,ä:ºyi]FpšuÒ¬òbK4ë¸èdYšYŠÈNï%šL¤Lƒ1ïL€¸®÷c‘Œ6Y1F÷.e¼i‘0aÌ9¬ÔF~€Îzp*³æ–D|	ÊêÈŒ*f¶âS–3ûú9ù1>œÉ ²®„1ÄX8èpñšŸÑ¸`Ú0Åhç)¥ôJi(ÅHÑðîEÜJ:¤Ì¯/ºb§rbÕ…5›s‰³]b08†¤\nG2T/‹1•ò«°Q)0á”1*í?¦	\\)„ß’óÄBps)Œ…žµ‡DÉ†Úœ[u„„–0Å™}`Ö„£gÇ(uçHe³_7®#øëR6¹Ðœ„ýé“_øœv©Òè±¿—_+ÞµS35Ù;¼¼0•:UþŠØ âF7Š&½[¸³SüQ~’êÝL›Ã‹1 (£‡M‡`™Q£72&=µuî\rp\\à©ÔŸK_m5×¶Ç˜Æ4ÍÅç½è5ð£’Ç–ºÁyˆm‘Ñ[ÒîšòFÀ£NÓÀÞ\nkr¯(š´Ö·Æ;\rxr]“8Œ{F»ì]®´p.KÜk'j¬üvüöüå[š6ì¡†ßðw¹pP'eîþÀ\\/ßbÅÿ'†P)bfõZÍÑo\\ƒœ³Ú>Wgï4þüæQÎãÐgCXü‘°ÀSRŠçßáuÓÑÀû_Àº‚9äè×à'Ï\$IƒM/µ­Iòz\rÞû@h ûÙAUF!Ì£^¨îÐÜQ0úû<^ì·9ãÒtcçÖh¥}Îqõ[Ù<²V¯fáÛŸEPÿŠ÷hÀ¥–ãnFlOÞ€Ê–\rã\$æ¸Á‹ú¥î´¬`¬¼C:ñî>÷0&²Onìï‡#\nñO–¬Jê:¥¤¼nþÄ®\\ã¯\n'\ræ°Pà*Ôø,Ç°^ùNM…‡k&\\NBõpyã*,!ZbL8(ÅìE˜´ƒèTÌÄ&\nŽ6ä¦k‰®òÃP8÷/Hòîùî3p¯L×Nú”,c¨½ŠŒ¯ã\$_ìT:§l,0Ñç¨âH\"Åèê¢ìæ'\"4n\\P×d¤&‚\rÏñ\nÚ÷1\nEaU]Îñ±0,ê0ÈkÍÂ±\rïñ\rñ7± C­ü\nŽ©Pg±OPg\rIzê‘@ûÅë¬e6´múãQj”€òYŒÎìùpYÑu#6¨l\n‘v'B^°zÄÍæJåõ\r„²|Ñ.øQ~Å„°E±\$‹\01ÀÐGð¬C¬Ì~\"2¥K6]Pìv´â…žâïE\nþ\$nØéÂ\n*.êEìeG4]O¬åÃ0n„2ˆ4\rÂ1E’I¥>6\nù!â\"Vb¤4/ÎlÆÉè†…ïZo\$0=@Øi€\r&N\"ÀÞCF›ú?lø³c® ZeBrÉü‡¤\0ˆƒzÊ<\n€Œ p%QC\0íÍÎ\0âÚÕQï)L¾î±ù)¨ÚÎ¢23¢<\$DRbN%#0WFÐC°rÀòGãçÂ/\n¢¦à§BÂÀÜ\rc¬2p ÚÈ{(Ðm£%ïú\n†M‹ÌEœ(ÂôMD5(ëBžÇŠèÉ˜C®dÒBª´°œåÅ˜7Ç*Bxw…äiÄ+s0äM&é³6«	õî\$6£p÷c—àÞ‚¬|3B¼³4!PÔc3ëÉ5H¨6ZM³^*b¢»`Èy“D@àAÊ‚KÄ\0iÂ`ïc6ki1¶I¼¬ÌR§b~ê¯Ì½K˜¦.#„”ÃG-\0\"ëdDe³„µ†¸0.\n2‹ /²÷-b3q™3²[ÆQ&\"bYúîjÏ*²]àá,ñ)Â\\¨E4;\$:×dp’1ëä:wâø ";break;case"ro":$h="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¯ÀÒš/!%cÂ1¿P ¨4¤l^·ƒK\nà¯-4 AŽ@PˆÅ%ŽË€¤\$´n80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp §0®’t™ÈLBq\r‘ó¼B„&ºŒ P„Â0ÌC3òó:&\rã<&œ	šŠ7¨:%ƒCÈ3¡Ð:ƒ€æáxïM…ÊR™DArð3…ôMJ<CK¸„NS÷.Ò\"øÄ6#pÖÂHÚ82²âã|¨©ÒãŽ7ŒŽ„Ð„˜¢ÿ nk(2Æc: ÆQ#Ü¬¦‘¢:‰¶@Ò—%sÈ8<ƒÕñ¼·3r:ì‹&6& RþÐ5Šêp76LèKdö¨èßáÁ P‡V¬ìŸ…Kw\\&4Ž¸SÈ˜F©`ÂËlS:\"£666+C²ú:ÌVªèˆÈÇ0ÎòPO&‡¤4î¼ ,;¤¼]€SÕ¼\\#8?Ê`èþ #:Ñ¸ºj:æ*´€À™hØ›^P«WZºVx@8åó¡+‘Ÿn}¬ÒÝ×Ór°SÄ]= `Vãx[{PÊ¢âÛ~„oÒ¥Â¥ŒÔƒÅî,(7MàË§f5Ðá 3¢(ñËŽZX†û=®UæqSÌ]=ðãFÿ:´,®VöY\$ŠØ£t3Ómž‰(\"c›\nƒ{qC0s@:Œj¸æ9ŒÊÙ@¾c³#”à´úB2…˜Ržˆb˜¤#YC]I8Ò17pA*ËÊC4œËÂŠªÁ?G|ÍF\r?’V	ê7WeÐ’†ˆâsh¬Å= ä HA×Ç\\í¨„h_É™0+ð:“ÐšJÉ3#ð€9‡rð²KpEg…÷(À@£™\n‘RjUK©•6ÔéK/dñQªPÜ©ÕHiUj´ñ›àè¬UšµVêå]«ÕÖ°Ä(‰t4,…”|_3è+J9(uÖ´ 0nrOL2†&¨N™×%Ê¼F%¢i´!Q¨âbÏ9’7‡^12nº‰!1 á´<{AR{é¥\n£°èQùx!nÀõiÉÃ3khž‘¤†M	±E(äy’UðkQÑMrñ‰ö!RXýJÉ‘æ÷AðÔ^ ÁXŽð‹‡“d‹ƒJÉ_…hÐ†å’qÎIäl…`­hG‚:TÕÆóÖdÈ)ÁÀ0›è<Vj(a@'…0©&\rËP(§‘÷BòÒ’±(¤ •éÌ[m#r|—Ë©¸Œ–4 Fp—´d‚C+Œ…hÐ4“´6Í„¿%fá¼ò•_`gY­ˆ—!SvK0T\nrc>…vÐ\"Ñ-™ää9µBÂQ!ÉD\0£¶­IÜPiÔ&ÀÚ¸—#:§§¼ýælÈL>Ô‹(†c'–œ•#©vP5F˜šr\\@,¼ƒ5„bC¨g:ò™r·¢€Ý%1¡Î³\nÐI·­‡â¢ Dîè\\i£1eí“&ÐÈYS±„ª.5=‘Â7,\nÓ&f„ª 6êa[¼ø@Ž}Á:[\"ã“Y%‹¡€•ƒ(œ³FTé4ª¯™ŠˆA¸kÅA,*@ê)2Âª\$i%@\$R2¤€_É{KÆ)ioËú»áÌ8!ÞÄ)Á§O\0É-3¤¬š[\$\rä)²¢\0Ut&gð)¸S®^ÎÙäF–\05³–\"&­,,•‚2ÀR7‹ÒèPÚhÒ{/%öì,“vCºT« 2®¢Î‚¥Õ.Æ|Ã‡‚Ì[Ûs¼ó±as¤C#I¥¼¡¼87ª†,Ñcuˆ÷7âeÉ˜ncëQZâ`›ÙÖ*¬+Ä¼†zŒA‡šê×¤\0SWÚ)×‹‘yETŽbÑy2;,Ø#?cœ`yW˜\\÷wšIÙ„“:Ž \"“¸Ä¯›ÎO²n€ë¦ÄÜT\n!„†ÆÙI‘NvÓµ9wÉèGbâdÑ†ÊÇ\\&[f\"k\$‚\rje:ú`‹&S4BºÌB‹ex¥‰j3èô˜.•_&ˆ¢brW'\0N™&zl<iÓ#§ÊŽ”5ZÓõßjc|v1Ä\n«àôã	Æœ¶Ú¼ž°]«5qŠÚO;ê°[—6ž'Úµ?ú œÖ®OïÈ­@ðï[º1n„¹Êì`)*§eorÙò½3	ÅÂ&zÿ“Ö@Mée.'ÅqE%¾SFÙØq«~\$[ºÁ°eŠ^M\r\nµÖÊ%\rèLpÝ›LñY/é…ÂA\\ÉâpG¥¯vhˆÑ‘ä6\"¢0å½w8näëqÛJôV¥2ü3V“9>QNÊ—+æï Ð9\0p‘CæÒÆÅrþ¼úQ-èzÙ¹j~že:,5•ë{(›ý\nÉbòëÑ˜ÈüKhhµK/söÝhcKrgýÜZ^1\$n½Rš¡«–Á\r''TÒóÂ˜t¼ÊëÔõ2{€(à¡—¼*ÔÙ‹©§\\/J°ÓÃG®î™Çt.˜&Lß/°nËØ^—·OwçbžúK	:”±ë}ÀÙ^N=>¥ÖúžÀ^WTQ|õ‰ô»˜{çWðQö“Ž§ãûž©P~XAP¦Tè„bV¶Ž¯ÉYdð­ýA¬´Ž¤ùÞ'T}nYöd9¹³¹m}ý!¥u†úþëªøªaBIe3ÆG»ÜØ¤&æ\0†¦/ò·\nh:ïÆ÷oi\0/ðÆ\nÿæöo–òN&Q	\\+Ä¼Œ¦¨‚/ø}p*ï¨¡> îÌËnzP.ŒÌ^Ä(L+\$²%5ÀÜ¡F:ä” .ˆÂ­ð¦ð&2€Â°d¸KL^ÿFÂBX5lHÄÏvZêÀÅŠ™c:´åÒbJ—\0ïêùp¤Á°¨júøoþ°²ÁÅØcPùP‚Í…ÌÁp¦ÁælÌ¥iâë.†é­¯\rÌÎ]pä–/ž×.ÌÐà\$Bl÷\"”gˆ<ÔÃÁÌÐp'±K®b*ë¶:@ÌaDC²ib~Z†t:cªD£†àˆÄm¦lrÖ[ïÿÏDõŒ±ädùö÷‘YÌµs\0Ã-ÆeÄ\\=Ë9¤dp#H%±x ÌÖpQ‚û äaÏ&ÃÈ\$P/&bAVïLÌ  ÂAw0½b{Ñ°Q1µ‘YE©!7q»\nÏ¡1~ÔqØ!ñ¹‡C±îqòFñŸÃôÚë)®Ì6è;	Nª^\$qRJt¿,z¨ÐòøR€2&ß±á’\$!R)0Êë’o‡§#ÄÑ §B~,|MÄ°íà\n©M©\" P»\"òc&lÞ/*þ '²d’ß&ÒBÙ@	@uKÁ‘˜3  PÇæ3ÂÞfæ@ÌècôSëˆ`±–¢\0/–2²JC+¸±†yëbvîYC\"&Åþ¿2 ÿl„\"¼³BD­€¦Vƒm/\nÖ@/ç/ÒÔ-f•-+òÂ+S,¯Àþò|¼\r€Všææ\rmð7\núânTP¢&ˆxoC¨Æ\rªÖ+C&è€@\n ¨ÀZ,\$åÄ«\rŠY ä”Å’}':ÙM™6¢Lýƒæ¤ór×'j#Ë¶\$gZZƒ#¨4tC)\$fÎJ«¢ï£Â3Ftí4‹\n%Ò|×(v©ÄH†ŒÃ‚,ÉW1ðbzNFœ/€¾b§Ž&ƒCÒP\n.§îT8¤êä€@]+æ1EêÂ%æª)(ëN<q´ôZo\r0-¤êã+A®´Ä‹to4B/q1.Zåã,¿+Þ)Ãh6Ã&|ìH‘â˜]@ÉBpIEÏ\re´H †ce´Ò˜´†F#ºÕæ öæV©GGLñÎæ&#¤›†®ágÖMï1Æb´+l¿À	àáDË°ú¢ù&‹žas:.«ž´ä&3 ‡@î@nBÐã/´fqDJo	´Ê4¦…C£Ë»ÑÈJñóÆf#®bIh&Ël<‚(à@š	 t\n`¦";break;case"ru":$h="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)û‰\0”	Nd*;AEJ’K¤–©îF°žÇ\$ÐVŠ&…'AAæ0¤@\nFC1 Ôl7c+ü&\"IšIÐ·˜ü>Ä¹Œ¤¥K,q¡Ï´Í.ÄÈu’9¢ê †ì¼LÒ¾¢,&²NsDšM‘‘˜ÞÞe!_Ìé‹Z­ÕG*„r;i¬«9Xƒàpdû‘‘÷'ËŒ6ky«}÷VÍì\nêP¤¢†Ø»N’3\0\$¤,°:)ºfó(nB>ä\$e´\n›«mz”û¸ËËÃ!0<=	óä¦–±¾nZS±LòB„A±zD«Ð;î´(P1 W¥j¡tæ¬EŒ#\$Â˜ìÂŠ’´ƒ1ÚU	,òTúè#ìâ¶‹#Äh‘Ò¾Š²äº”‹YvŽš±j 0Œ2ÏLZjÿ¹n;†™£+»èÎ f„˜‘IÐòA­ŽãPhîÒ‚¿£\$¥ÜÊï2^\$}\"¢9	¡°¬på1Ža I¡®BÏ<»TÑ¡\0;-ö\\Sq¤Ú¼ÈuzŠ¢-JL¼ËÊ¢F&O}&†ª5q?CÏV2¯«)ü56d+RüCˆÉ<ç%¯\\Á‘ïGQ8!\0Ð9£0z\r è8aÐ^Ž÷È\\0ŒƒhÒ7£\\7ŽC8^2Ø8ð:a˜Ò7á!@:8(Ê:]âøÄ6#pÖÆƒ€î\$-äƒ(Gaà^0‡ÉUVÄÂKˆæ „;îäHÔ\reAØv+“˜¢&\r8bê€È²<}e¹ÓZå:S‚l@&.#	ªuòÌ†Åº––ägDÄI L&K< ?FƒvíÈ+©C9W¯A\\Ž˜J25iÒjï{êúýpæÝ¿f;7aD+²š_£\$Òò§íH{r¡Ì¨É Åq*~ íSóœöäMúú¹S–ÊŒ’ë•Ðì¶¬˜©òm?&„t‰·iU1H˜§ÊY¦Ö†‡6—ÌkÓ•á¦–RóYW%’T¨‘Ü=U—0ñÜT˜K“Õ½I“fräí}Ñ M©ª{£MäÉóD)q•7E[•¶ÍÍýÏâWÙ-uBsÛyý`)¡ÀZÝÏ:\$d’˜’–ÕZH)ˆ­¡s¦ÙÛK\\‚Î	“’£„lˆ´kE:\r#TàhÎâ˜k\$iº,\n! °GPÁÏAÂ´ `ùa„CA¦?×&€TûÍWÅ=&=Â2+NK@-PA\"¢dld\0?ƒE¸Â³X´O\\9Z°Ì†¹â2ZIXI°:\$ˆm”±bgˆ€Þ)cF„š9TJ'ÄÀèÊsØÂÌ½–G”:ŸZ¯ñ@3s‡! ÄªÀ–pLc™‚(/øð³UvwË„‡Ð‡ˆ3– Áp	WQÙ0´ç¯	#Ü}DÄÆ(H(Bm[ÁÈ®\$]H„¨,\$\\</29Þ2ƒ›Êd”'ãEÐ¡™2áŸQS“ÄØEÊFv¥+“Eæ>%hý+\$:–\nY«‰l´åÌB2ôª¥)‚Ý\$²<“ÆdÙ:Û™Ü#ïÑ: UT1caL)`[!šqò—+lÄÀ–ÆtL9\$¤2¤nW’ñ+Ž\$Î·‚¸•_ãN“„Æ6”ÃB¹H*xORÕ\rOCî!qANtyQòlWÅÓ4™JÜ÷.9„zÈAÈ’\"áqQå¹\ni	HPæx´@s²r–j¥ÅxáÈµÐº—bî^Éz/eð¾—âþ`	‚0fÂ˜`naÌ@±&(Å˜À\"cLq2DCY)MIó–_²¦Xöa¤fLÒbHfr¸ç™lj8îMWd·	(,ä^÷²PO¥<CHRš#WZñiÏRb5Ãý<O*G\$é…¦B«<l™Î&'fš Ä¦†¥K³ŒV1BU\\Ÿáže\rD?P ‰µÈ—Sªé–éMg¯ùÒŸE0Ý™â…XÎ|î,”®\rHXD º©\"Jg¤|ìÁìâúJ„ø/.”–>ë;i,¦ŠszÅ˜'ÛÄƒ–-\\Ë‘F¯/™(JIœŒ‰R™LRDÖ“–\"ÿvŠ[@\"•Ã°„I5×K!~¯öL°´IORF`%²\nÔ‘cp¨3<šMNkhŒŽôê×¤aA\0P	áL*@xµ+ç\nL1Ú_×‚§Œ­!c=ƒDETÁy‰l ¸7^Žbu]È­âí^BÉUò!äæðµuóÉ²?BÒÄ“‹‚Y•{!7%&îÓz“AØÁBdŒ×gù9/¤òX‚\0Œ‚•:ë–ëÄH–‡'ß°…éÙž3¶Pòºhó]0Ÿ3]fÆˆŽ³ªÑÛØóå‹b(‡Åµ¬§1R®«„©òjõ¸êÅ#kEéçKtUv»&Zõ]”—ÊÃìÄùÎYê}5Þpô \$p\$HÊËP’•¥Ë2¯	‚Ö—[mUÞ\rªB4ð·#7üádEMqôÉ½ÍÚ+| µ2Ï,¶YiØ¹^›7mž™®í#F&½½R~÷ß×'È¡Á÷ØƒáYJ«7®A%xt¬ žý³%öçq¨\"Ä)—W[ÎáÙdÙâ**Õ®Z)òá.@é™r„ÿ¶qß6ëèò\\£:œŽø#<>iÐ€žpó	‘–F­îrã–WÜçŸl«‹¹ûŽÍÆÖõ¢ªÄDÔxpLS>[6ì*–r”­®Z‡\\0¾.È ƒ¨lcŒl2€ ˆ»Cy€(,†R0ƒ{s×™E\0 †Ã`u\rµŠ¡]G1ÚÒÃt±w­<–ÂŒµ•ðÛ-ƒUuoDãºÓpÙ`ŸXâ@¡•ƒ{/×>º’Œñ%E5\\ŠiïÛC[L‰ hm-ëJ6ü«Ó¥4«'»8!Óï—‘ó˜ußra2¬¼%é^Ë«¾Íù6jn©Ã–ÌñØ£}°*Ž—–&Ìšh\\1&¤dRâ›úüêãf½«ïÊx!x’ÍŠAx‚\$¸UÅ\$ßÜá¥¦Ú«¢X‚XºeY  ¨\n€‚`€ìB‘Ïlö·EvÔÅ¼ÔBl\$á.¥¶É#XÏÄ0.úp ^1çµJF\$\nÅv{Epu‚[ÆníâL\n˜ªdó/dDã\0“P>o)œu¬.8ì3	‹	B¿	Œ4ä\$L,)ØÂ°Šâáq\n°‹pÈln`+°»	¨2DäNJÐ¥¥dQKŒG¬Â‡äŒ ºÌ¿bG\$[b\$pÐ?\rQq#¨”¢ãÜ”0ë\nèZHÁHü£\n*;1 \$‘%Ó:=1q‘/q6(O–Ê'ºTÇÐ¹ÄÐ†¬%Â` ÂXû-*­}ÅÆGã‚Byb%a\0ÔCÃÕ-0(°Ö¹nƒIp@ñœ!âõdÒÐdÖ.QšÀŒ¥QžQˆké<ÜÆ£Q¸[MTé Õì„)°^q¢îÆ'FJnxpê4I.Jtå3ˆ‚Öïˆéã„8‹k‹20m±Ðì0bR›\nã\nëåc!Í`˜MX}Ò'!¢N‘½\0ëRÏ@ôÇ\\.®²pî¶ZGÆ/î\0ír\$O¢Z€.Z=rVZPœƒR^õPõRh*’XÕñ‘ª…wŠN¶öOãq&(¦ëˆ½Ça§dM‡jP‡n|®œ5«ÝÄ^I’¶Z2»)M„%ˆÚ\n#(,°†ItË­¸O2”mZ!¯^gPã#M\$Çºòæ;‹Ï-ˆz> @4}¢@-ô‹&›K.ÁÉ†#\$³ÞÍúâ‰a&£×„3Pæ|’52l-1kõ3¤‰ò„.¥¡2ÚK²A%Šå¨Oi1íû#.ìWC‘(\$=jn¥#hî²†3~…2m.ñO(fØlô‚á#'Ñ,*’Í(OòãC‚ÌÁ`f‘&o\n>EóI5ðŸ\$©E9³§¡3Å¥öl)<+±±Ó-‰­&ðäJ©<RC3£7s¦å©å:ÓÛ2*¥L•&³ç8È5…®ùD@ù­@ÔA>\$×\"	­7A=AÅ	B%ç+	t/ToŸC²2¢ë0+nBbØBÃLÑ¤zAÄ¨“‚ð=ïðTE4I^¦G¤˜Ê8ËDÄ0DuLŸØq„Ü!ÓÚ´hö¡¦OÚ5Â?dˆ¨˜ZTXB°Ä0i<NGê…£¥D1:L´HÔ)‰+i1Gìd{´„0®å)¯R7¯Vø3`é¯Š=±lÁ>ô’Fl}BHû>’ñÏFóÏKP\r‹5±Q2AMkQÿ6ÒÑQ*/3u>Ðáä3ÿRmflÐg%Dt´\r%³#(TŒßTÓ@ï…Pµ!Tk1QuODèsRèöO³uXñ³q4Ë!õ}V­ ñK:®!|r,Ò(A\rY‚BBÆÃ¯¼ì‹Ø¹0Úêî¤@H+NÔûÓ:Õ}õ6Ò‡[ïõ:³×%Sœ=u	8ôRÃÃ]r{<sKS3>ƒcò\0\"x.Zw/b¶Æ½=Õ579bq\0G„;GÍ\0ÓuõÁ`æ°Zór1HÄ0ÂB¸þqàAWZ¥84À÷äªµAT'\\³ca3øÖ%¼\\6@Õ6FžVJº«Ôûã¥eBff™ZË&gé~Ï¶N1QeT='%_Têhfˆ¶kh'¿dÃÝeUeÖd6 l”YjvpX–«hÖRra)”)#+bè>04l4òšOâëWvCÞrƒb1Ón¯¢tâôúŒÁ5µQB¢\$Ï¤û–ÿ%v’>TAobšúq¡ppÊ6ãA²jwpÎÃnðo7o×2 '’¹õWXÇEP%fìûDÕËqo½h'hOC³¼³Ô,ãñíuö½u7!uð.¡KDD:ºd«PõÓ?õévÓ”²”í\"‚¶Ò}?×PÛ	pÆã3ü0a>õ_0’L0çz¶ã‰<7·zBa{Ê0“WÃ{<.§\$\$cE§½9c›@‹oqË{®Ê‚nJ±UþJˆ!iÿQ°Wherü5Êöƒ*ëÒø\nG’Ùz‹_q©z°§;wµ1Ë%]îƒ8&x7>WVXA=ðî;§w‰ìMà†Œ Øa )îSæšeÈB+¬dÒª&R¤¶Á¯†lq*þ!«\rvo‡L\"3q}z4²VãåIk3tfÒ\$öMàª\n‰ü&ÑÊÒç?shÐv—	Dm¼{’<Ðèo„i¸EŒèIJØÀóJkŒeXi°ò˜Xûò¾»i= &½J+šfÛ&R¡i•xøŠ	d÷Ñ l6{´ÀTÖå‰\$0ÂI¬½©²¾æ¦‘Qåv£\nÀXy{œ£@Afx<F¶xGW,wfqk¿k‚¦ñÿ!‘‹\"düùu°&HLÚÊ!2¥@lÍ3#¢ÉM\"Xcôþru‘\rù&«\$÷C´uRó&âŠ™§9Ë%3WBÚÎ/Y¶ë…Æ¾R+Œ\"Ãœ’v€UÿöYqNš2žß‰dTI“x¬6+?ž’’gOóSæÛ\$™!u§ §²‘'ˆvOÅNÚŠ…´wŒš+ô‹5mÄéLlÉÒø¤¨“adDJrzË`ó’Þ÷9`œerD6“Âš\"3ŒßŸ8ÖÒH.1˜Yöø•ÐXÄyNÏp¹\r¨GÅ· 1ÐTÍ´Rç²ÛÄzOù˜\"^“ØxÚh;˜È¶ÜzÛ®ØrN§x6„9–}­Yk¥köŠC–®ëÈ”VRŒlÃUªšHN·C—#ª& ";break;case"sk":$h="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸\nC*Nöc+°È<îKdŸŽcY†TµƒÈà<F!óŽc`Â‰‚´þ\"Î0Â†ˆKª`9.œÆã(Þ6Œ££2ô I˜Û\ncÊ³¨sþžŽ@P ÏDlDŸÀPÕ\$ ÂÛ­±›ð4b`9¸œf*NLÝ4³lÞœÁ€Px‹\$ƒ(Ì„C@è:˜t…ã½/ƒjêÿ…È˜Î§4ÀðÙ\rÓ€Þ7áXŽµ#¥/·Ü5„Að’6Ž	Ä7à^0‡ÐxA\$ƒB6Ö5Ãš˜)Š\"`ÒÙ%\"´U9A\0ÉFbÐÞú½ŽË%£Xèˆ)Mfà#CB~¾[ÓâˆÛ°J\0ê	ÎBv7c\\fŒ\0Ä‚€Mé{_ÍõzÞãSZ;!Ã¡ˆ](Æ\n‘P%ÈéÍ¶PË\"êÖ„L9µ˜éPCê6‰ãÆ:ÃÖPáf1‚0ëUŒsè‚3ãƒ;¢½¾w|¾9@PÖ2A£z~ž¾V”•Œ=(JÐà¸XÔ–>\"`ì…äÖ*ø yŒg—\rƒeFÜ)ƒ˜ÇU!Ö(@µ¼÷ô¸Ž‰²<ÆdnÓxÉ½W3–Ø°m×-Vú‰³\r¥×en+—épÈwT½vtÏ¾”#ÔX'í…ìŒ\rÙÅ^@\0PŠ<tÿ¹8CuïƒÓÇp¼„f;YeläÆd’Ë:¤£ª`Þ3Ãe&”‰ã\$ôPÎ`¨7¤/XÜ<„xæ:Œpèæ9ŒÙ@.”èXÖ^€Â3Œ+¨Aó_tÝ‹Œ¡@æ¥\"r3‰Ñ{`\riÈ@!ŠbŒÅ;DÅc”ÀÌDÃk#Gà€=3’ñ2ny	ð¦°Êƒ*m\$!Ùµ—#4J‰ªSÁ¸þ–³ÊxÃßO0H¬¶Rh~C™û80’’WH pGaÌ;‘5êUÃ€ic’\0'ð@ T…Pê%E¨Õ¤T˜rR¡ÉK©–²Na¡TqQ\$ªuRªÕkŸVLI[+…t¯òõc­ü¾vJÂC“ÎbP…ë†•>ÚØâ³'H¢§,ƒÉD&¤Üœ¢rR^KÙ}3òžv8çPðNAˆ	g4Ó_ÁÛ2Å1 ÈèBªbôéH°õ#El<à€çà»šg“­ÊbSBá›Ç„~N4…~ç¬–’òbóàìÁç\"B?iJ¼<\0G@^­x+!‘N%!\$…‡“<³ƒJõ4l•aèÔm\r[, ¬‚\0Ì~OàA¨ÿšÀÐþƒ XSØÚ¶·ÆIIø<ïò“ÄÀ‰‘@P	áL*,å¡4•™å€´8P—ó‚N”š“Z#‘¹ÆRP@f.aÔâˆÐÊ§[H…èM îÁg„†¼Ã‚½‹˜ X2wò˜bˆ°F\n@àÎgÎ¬›%XóºxÄ®¥\0PC¡=I0ÖOÈ„Á-DLäc“\$\0PO	À€*…\0ˆB E¬5Œ\"P˜kJì-§ †0fÙë“•®è’«ÂJ©@FaY¡é\0–ˆñ<ˆòcÐ~\rS/\"_1ËdIÐº(›®¸µcòneÍ‘gZšIHDrn¹Ê½\$ð+%°P¹É|í{µmøù¸–çn“C•]kJ†øZÃ{Ö9^=\"v\nbPÃó\r-œ:G`ÜcOýU\"Å8+¤:‚€H¨‡æSØé\$ÊuˆM²aƒwoHOP9¥%³òæÉ…_O¡PÀ.“CƒHzCÁ\r#‡Ø•‰Àc6A’°†KfLí¡–/ÕÇzß‹#FM‘fDÉ)yª]¾¼´Æ	`u\rªt•&sþ^Þ^¦(2‡t´ÙÒä¿†Á£64ÐÂ,o8Då—\\ƒ!ù\rUEõË‘/UŠ9aŽ©‡©WUÅõY¬0sRørŠÍhùxÿ¥£ÿ•£ö¶!‘·ÙFVMx\nÐ!X‹’€Öâ,\n¤r}]Th´-ë¨Is,¥ì\\¸ÚØT\n!„€A:ñyª8,p‹†ùÈkÝ*%!4C»%Kþ ëÔ•åöflàk_æbD˜MWª\n Bµ·Kè0¯›t´:½û_í_yYÊ¤à\\užµ‚ÚÞ^ë¨=›\nM¯\r;\0œÈTQ°ËjN0» ¶kCÙ­ ÎÍƒºÃh“rBàv¬Î\r5zìKŠND‡2²)¶mç,HêUH0”ËÍr|Tü¢~ëîÎj¿¶›´ßRc‚icáÁ÷6ùà;«vjÙ¼Ožú1F¥ŸîCH\$ßm•	-ÞCm…µ’pÄ©ßr/\$Ê\\&Äâ=’•¥S“©ÿ]eH£«¢f¼™‡ñas’<C°1YN<”ô£²þb¤¦:v\$Å©UJ i^ýLú\"À…F³Ik(ã!V”aÉ/P9aØò¤’ƒ×Œ&çt<ž²]¨æjÝÉ^â´xð¡ïÁ»/\"œ½»™<7rP’œw»á¶I+xÏqïˆï»¢ÛxÖæ,šî–ûËbZèêŠ,\"ýâ@­(Î‘ª¥24Î4Xˆ@ ‡.Oh‡ŠÒC(lE:¹ÁÂ7ð1Jb£ÚYcò¯k‰¾Óó›[Ç\"§Ï9Š¿;®Ì\$1ÊÀÉ`W)L×ú,×ƒí¯¥µ_“ÈËågà‰…©·nWö»OIàÿ[”ü¶¼‹}?\nl.ý¯&¶:*0üÏìnOK\0br/øÚ\né®fg£ðÎåžBJüÂbì×ÉzÿÉFâ­ÜØÍ¹Å¸ý°6îp:óO¤Ø.Ý­²¸Í·¤;ð3ðRFPVµíÏÏ`Ým°Ø«Œã\n¤ªŒ®«t8Ï4üï(ý'ìÓl«ì³	!	p@°¡ÁZ@ð‘	M\"&˜NlÉ Þ\rEÜE,–âêê`ààC¥v¨üWeš¾âfDÇî6%Ü~àèEG¾&eë\rA}e%\rªî¸Í¦©V6PBêþîÈÂ®¦â6mÏàEž¢¢,¢ö(+)B\$ð²ÊÐ¶Ë´É„À]ÁBlo Éëê±%š+0ÜaLnÇ&ð}j\\qnlPò°Ÿfw£úþéFY ò·ÅÀÇx;ø(B‰ñ	ÏãÃÇ—|óÌ÷â‡/	Uƒž8\n§Ãtç9qÎŸC@Âì¤Î8fSäa`–\$Á|YéH:d¶’¤˜\"ubö\$DÎÐkïÍp#ŒñQj?2\"0ðl†8²f\0Ò¸g÷’)!å»K~Æ^k²>Ð1ÖMÖø‡4\$¦0ú¬\rbzA1;L	°\"\nd'f½\"ñŒóÒ…'Bs(±´Ý1ªpB©Ò•'‡#ZXR¦f%Öa á	rFúÐ¿*ÉUR oDS'Lu&N‚æËò½'ð	,ÜÌ‚(×ð®ñÌ».ÇÑu#eÏ/lË-s-ìÊEÄwÑÜ2d¶¤ºKâ./Ð¶ÒÌÐ„BÐá}\nÑrï3Ð³!32û#1Žé£@<±/!HMI˜÷nšDÏè1üz2¤ÌÔ_kzÎ ¶²SòÂ³m\$`æÛmü5Óf˜IK7ìîn0	b@†ƒ_d:\r‚‚J «6f”†ãd\"‚²Lðä!Äd'ªë;‚6Îô2\$óBB9b'78ÀÐÓd”\r€V\rg„\rg:@.~šZ8Â‚{å´\"l*:D:@/82BRÊ})Úƒ®¬€¨ÀZ<A\"6:Íú—¢\\t±!Pb\r³rÚt2©1/C„Iór\$4B@!8ðaD®0ñçV\"¢ª“Â:#è6v§n2`›B ÌE€¬”áJ\$dX5îÓé8Vb’6F\$/jùˆ;3ª'­¿Hƒ«F\0…ä«db@gì@˜\râø:Ô½LêÞ\r(o€:0Bš”¶Õ/>ÇCçhs\"Ý4aN/‚Ç¦}f&òôà0X!‚‚eiSôüò.Q¬v'V4Àƒô\rààº¥\$ÆU0gÄƒ±mGÀóÅ›*,ƒQ5Ã¥,2Ô ñ°¢‡MUQ¾úì€pë\n“\$5CZC\r[GÀÂÊŒT¬5*%Ï\0ÄÆz\"føU„1€¦A”ÜÃ’1‡1H±ÒEKiN´Ok&otP#\nP´ëZ²õ¬³C&b¾æ{)2ˆg\0 ‚K®\nÓÂËÚGB	\0@š	 t\n`¦";break;case"sl":$h="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›%ìºï½‹¢ì\rkÒ8/†)@€²Ã¦ƒª8Ú!#\n*!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãk^Ò .—È`×<CP§œZECš@K4,ò)³\0Š P¨ÖHó'(±ð°x›µƒ(Ì„C@è:˜t…ã¼Ü6Ñ² 9ÈÐÎ¾3Àð€Ã˜Ò7ÁxDÎDLÈé2íB5„Að’6Ž¼Z7à^0‡Ïã7ŽƒCêÎ2C¨æ\nbˆ˜÷¥î¢êÊ oÀè–B€Þ5Œ)L=íhÈ1-\"š2Òi3Â3²ã#‰_Ø4\"ë%‰Ã{÷_Œ”âûIˆè„¶¥¬0ÛÐÔ’Û¡«oÙÎ\"T6(Ç+AàP—>+˜äâ(ÈÈ2Ë,“Â™¡#(ì…¨Ð¼Ä0Ž£bƒ¬«U¬ #£pÖ1Ê2¨´2C­m\n:nÂ¾\rj0äž'N\"4’Ë#l˜÷èSÆËœ.7•´´–*˜€â`Ùe2è Æ…»õ£{R‰‹PÈƒC›•YŠMjUî¢ÙiÖÒ*§×ýY¬£.M€›ê’«Êãr¨ª;\rð;©¶@úàé¯.K¢ì´ê³W±CK«†¯˜5æÅ1‘¢3ÉÒ —‰ã\$¤“Tr°ÞÉ\r¨XòÏO£¨Ç´Žc˜Í‚„	Û>½Q.0¾m£il„ê€…˜SßË´¤øÔ	kš!ŠbŒ“°Ü=á\0Ì\r¸,D;†\$ÖŽ‰|¡)&õÒì#ÍUð›¨ÕjX6*ÞÍ?#/SÂ´ËD©-ñè\n^&ÃÈäÃÃ˜î>Ã(ñ/^¾cH*cL©4¦´Ú›Ó‰na©Ô9'tòþ“â~P\n	B@Ô\\¢SQª=H¬â¥”Âšu¨¹Oc:åJ!\$ l5Ê•(ôª	7„ÝQ½Ò2kW\$\$È°7†vZ#O‰VI„Þ†E\\~ˆ±Rw\n|ð´°äICA÷4'ê¼\0()\0¤Ž’d´Û\rÀov„å)&Ú	q0&DÐF½Ó°…I >ñ€£È¢xMÁ{ªýQ’#ãŸç|ªµ~¥¾QÃš©\"aäÅ’pÒ}‹A?TaºC6AC‹\n'ÏóÀ‚´`SóS®à1’FhÍ+ô3/H‚“’v¾¢:ÎŠ¡@'…0¨ðÔ-\rGak(Þ¿£Œ°ŠrÈ¬%%éµ9èR*ŸÐáC9¦|`@Ù` i8#\0MÂ0T‹,ûƒØOáPf“©P94è•Ñ&\rfà:±ðuCI±`\$V‡3ðjØu,Š°ëV@”y'ÌÐ843¦‹_¡­S†µ™³RFG‘)!G¤ô’³2PnÈòJ¡à™„žFÃk6PùyžVÇJ‰4F.4ŸíMÁKMä—¤ÐõBŒz1áÊ?8³¦ßè!fkmu5:”q¢õ2a½Î.U|FÏ‹ÄÊÀ€0ªˆ1:hd•@ÖwI²šP‰_¤XÉ½BŠÑ`¤+(”£ÉÍ'Òµ×PžÉš¶Ah÷O¤ª±—8ù*„4XzUFf\\1Œª\"ñ’C@ÐØÐ+|¡*„FÁC¤Ï3Q\$˜Ðì¬s	\r©õ’—1iùö0”;«z±KåˆYhX\$ÉC¢kÚ¹&-ËÜ5¹ÞF­„q\rK¬\"@ˆ~\rÚ7sÌÜ›©F£Š>/—^‘B	xb>V0°…¯B[‘ùÔ„ ‚\"Z‚R…‚3È%6ú…‡Ìáðd¿êÊ)—ÆäÝZAGÈX …@¨BHeÀ©®ALŒ’3óž‘ PÂ)I7Yá½¿5v_`/+°Âf†¸qi%b˜ÀÂã Ë1u¾Ä´j¾·ºõƒ+Ø2Xì2>ÔÚ¼u{…ÝcSU€J²È˜öSãü‘EêÈ™ó]Xêä™üÉ¸¸4‚ì£‰Ö&Ê‘èd„lóM#Ë™#/˜‰ÆNm9›)gw\r3ažÊù¿-†’Z”Q{¸³= RLZ4²®YN1ý–L–U Dð7!×ÁžSÊ\rqëé‚)˜e>œÓÄ™Öjü{³6¤Ëª>½TBš­Í¨—\0e›ôÐ Öä|Ék¬¦ªsñ|f¨ór*¶\"¶(¨– ø%Úe5”R¢TÌ>_¥ —›ÚkQé;BÈcnøiC¦àÔèñÊëf*-1?äóK4¦T® ÀjÍZ’2(½L‘àL[\0¬äCo˜ù†A½“ò>\\)rÑEÛ{8PPæBåe#SœpðÏè@!ãAÐ¤qÀì_ëÉ/¸EÛ%Ã3	Qb3Óïw:AêJöRµ‰æª‰¹¢,”ªh§.ÉUaÖT ©ù¢0”Œ´q%dkCÒ÷'J¶ßuŽ´I	 H'¬—nÀ•B±zê´vâÜÄüE4Îˆ!œÉœÎÜÞ—:éqf™3`Â\nRbNã•›‹èƒO|{ §¢?¯þOºL]À×.yÜ¢{r¾¡óƒUgüÞVè¾OÃ¶/CB¼Ä0žd F—À—Xˆ_=Ìÿ’’¥Òô>uKZ/1ã,¡ëòyÍ{¾Î~ûb‡îyö_ÔäßFfLÍð&—²Ž?7û¤ã®wù¸Ûçû„@¾'µú¿.üÇ>Ù‡æFëaOBç</)žo÷Þ9Ï~Çò\nŸ²îO_ìôF¼Ž­m„F¹Cšbƒpkò]GZ<DŒEË”0ÅZ˜gÒAÀàx\0ž@Bª\$°‡–:#jš+¤ŽÍN¡†(Š#h*B¨&Ð8†æX¾„Äa£âF)ŒÀ¯Öþ‹º«£\"néGÀºŽ|¼k±¥Ð]K|XŠFþîä†>ÇºðŠˆðÀÝ	…ŠãŽ‰\0/äÀêšU°šÀê(oá\n/äºì.÷B–‡°¾Û°\0èÏäªð‚>ðÊGð´Uˆk%ú%…ÜPŒåêRlÊ‚¥/ê\rc\ræž<Š8üpØ P ¨¨`¿°ÌõÐ¿­ôp’sæ\$b€ÔjËª˜Ñ%\$\$Ñ<bd¢©oG‘./£ZÓÃd\$ àª\0Ö&`ÜhpÂóÑmÓ\nÏ\$ò„gããðÎüÎfr‡ÑXÁG‘r- ¨î°žó°¤î€á5\rë’3…Û°,»ål½\"vãƒê¦ª½\nqÈ\$qÍð>16ªëÐGÑ¹ÙF¤Ë±ê;ÑÅ‘Ê½Aˆ„=Ë˜HÛÇ»\$_bðA\$…ñŽÿ1Ø<\"LÛ/ä³x/cb-%e¦fŒøq® X\\P:ûí@<Ç8ùòT!D´*’Zªƒ4÷òb9mjÕ²\\3LÊ%ÞÓ²d\r-ÉŠ¦ª ì%ï^P	ò&#‰Ì@7e³²…)Çà'Æùd2\" ¦| *’·‘äwx2nDEÌÍN~†ŒÃ'’Î.rÒîG Ø£ìZ9'òÔËò‹%²ÞYÂ^d^\r€Võmº‹îÔ£ˆª£~«Â^Éºu®ˆ\\B6€ª\n€Œ pŠ>£Ž/ØçÐ÷¬žÖ3?\nLÀù“Db“H£LìîðÆ#×¦×5I,³`1,#4X:zêYdª	³8ÀòJÀ|@kÿ1JFÀÒ x³˜gnÆ˜ï	ÍÞ#bÝ:C8›Ó0ÃU! Ý*H&Æ^\rãl8óÊšÈn CBBÆÒgî°¾ËRçLï9D°—Š>“\\Y\nRçèÓ?Mj'‡ø½®d±,ïð¥?âè2ã61Ã .¨–JFËs@³€9¸¸:%ûcó:e”æ€ÑêÊ\nÎÌ'‰6‰£ò\\´L'TPŒ¹¤ž–%ž|c;r\nÀÂ`êC@	ô\$=ý)«¦\"ßHfR¥ÉÝBÊ0Ÿ>áC)Ê\\…d?f0¨|\\JŸJsû%4ºq‡ÆÕ\0¤JËÚ#„:jë\"b";break;case"sr":$h="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-ed]H\$H·2)ã\\õ¬ºÉJjÄRH±R²I\$¡,_ª,RÆÕ¶”€Œ#LtU;²’i’PÊòX\$ŠTf·À´|˜^@­b1'¢òüe1+K!|ø5HuD)²âØ3ª‚¯4Ç2Š’ôRs!ÐfDÅ<ï”¥Y>´x0·£Ê3¡Ð:ƒ€æáxïg…ÃÈ6ÀC(ä\rãÎŒ£u¸<:ãpæ4öðDè6ÐÊ:X¢û¾0ÃXD	#hàå¶èèã|-òìã# én¦(‰ƒK®Ñ1Œë?KN•bÚšBµ‹#\"Ð0|º‹¼²å‹«Q@%¯ŒÒYÂ1ÆNÙÇó8Ï'ù1 ¢6Ê\\»^Ôá.\rš<è`Ÿ Œþ‚ÎhyþŒœ,54“©Ê²I-M{VŒÈTÉ H'ixZžÑHÂ¾Dk/@‰aŒ#¨Ø:°Â6£*IâJC\"’*5.ÉºÍ³²ãÚÄªŠûûXNÓŽÄÉÑ™£\$  ™b[ŒÌ\nCöó±ë«;V“	Ü)BW	´5¾ñ¤£ËAOYÔ™.>œi ™š;ì5YÀ²æa1ìIJkÔ)òÖ!«›6Åâp‹ÿ†FcKf<jÂ¬F@Rxñ¼­ºq—¦YNŠÅ–è¬¥U¹NhyF=µY±IÊ´°×sÃi‘y›’— 1‹¦-%1SŠRxÏ‘èöæc ·(f,Ä¸³ìðÛ©clÙ£1¾KkV¯Õ;«S\$ª™£5í¬9“vIÁ\rá˜3ÅªZÄò8Qm8*óˆW€yÕqPÆÎpsÍ¨ÀÞÐs‡@9C ÂÃ\nI¢-@ÜN¸(`¤µ”BÆ‘PAá)… ŒòQè. Œh»2ÖRK«QE…H„ˆGØEK[å\"\$øÖ!Âºø!™·-n]ø2xk‹³gE˜ø3²àIÅ„Kl	…Y¦¤k!à¹z&†æuÃ‘Å“ÁÌ;­–CÀp\r+2F¥~°VÅXë%e¬ÕžÖŠÓZ«]l­µº·×\nã\\ ½sÕÔ»î\r‹Áy/Eì¾Òü_Ì\0ç°0ÐÁX;!¬à°ãŠµ¡Àn_E­¢gø]:,\"„YGU *pDU!	ßˆqk3€¦A‡ùœiD‘HI#Äq&E¡ŠPO1\rP@@PŸ¯5W>¡µcîÅ‹ØºL£&¦Ö\"Ç~ZãdleUW–ì\$J¡3¤×4TÚ{ÙŒ\0zDª4ÇC£< Q©Rb\$‹Þ­\"hä­#€ ’HCÌ'¥ƒ6ØÂCs;'l, âÜdø ÁÈ7†Ð@eÔâ”'en‚\0Ç˜IÐ;G<8DðËJOE©–‡„ð¦(D&ur«ˆàŽPƒËwHh±XþLÕìæ1T²è,Ÿ2}K±¡¬Gc%:ì3²E	˜¾ä·;ŠÁgeÝÀÆ¼!Ú÷\rëJ\0ÄC8 aa2±£‚rV\0F\n”Ix0`Ò½–Ël›ÕŽ²’%¬p¹éqTu:%Á2NÊÜ_C¢…ÐÙ‚Tdž³‡	á8P T €I2%d”ñªG„ò½P³ÜJ…€)WŒ@Š-ê½—¹Ç‘'xœÅŠŠ\"._¦n÷²³…\0›!Rˆªp‹ß+î-D+„ÞéÌ£†&%Ù”*ÿè£ð\".ý˜Æ\$R'ÞSvN‘ý–\"g):a*ô‘ßš‚É…\rt,hÎ÷+Hÿg¬q¢Š¡ª‚žJlugD,Aª¡‚SÂ¬B15c_ÃÝmáöwÞöÕKÞÉO…þ«RLO²#Wd`˜7Ùîãcf8kRð*\"JÖY\nAH2¯pÓkÃ¢ä\rÄtçÚ“ˆTX:š’dÒ“6÷¨…§9-&âi¨â\$¢½>äDº›¤‹A\$×Ð™:‹¥¬]÷ÏÉj¼`¦CÓru”8E†äÃ)Ëg\\2@|®¢â)ƒ”Ê‹Ð9îéò(A9µL³¾Ü›8fm-¬Üœàƒ|Oí¸ÕÄ¤ì \r-¿\\VrC(wVª757ˆh 9rtÁ¾V`öŒ¦ûu™ù•&´)‰¸™{Iâ‡8D.Fòìj¤ËE\nß\r|ƒC\$«D;S°Äæ?×¥TÜÉæpÐCAõ¢k—†€ k¦SïB¿!¾óŸÉÅÙ@³;uhÁN‰WÞ¨BH}k“\nÂ\rõ\\é‡“»‹X“q3ÉeSËÊ™`À¼v#döZOg ¥ó3—j{-!äî=”ˆüSr²už%V%´FQÜ¤Î5?ET\0˜	Üt÷t.±ôÆ÷›1Þé÷}`ÏšCeO[Ý>¨~¸qà<T|~)÷Ç2Ð/|—jÓfßÀd¯æLlú67Æ—ï¤é’`ÿzºÈZ”.ýG,g \"Ý×ÆzB%\0}7„íŸ!q½ðü_£ïÝz7ïË­Œ‘dëèz.î§þ§~>h ìoªiØjÔm•;’2K\$Õ-¯>Gâ,*¨Ju Bž7Äâ²P?¢¼,ÞH£ÂÊldSÄMïç\0j,`'¦IÂd)ì1PV¬`)Çl4ÃâÍèvÆ.%†UÈÀŠöÀç\"ëbÈc\$2cŒÄ=ç¦ÿR?.¸B§:J¥xIMTL…\$C¤.jêjÕ„*»†f(ê,ÓÏ¨ËNºƒpÏðŠÓ©ú„?­¤ºPž.0\n*HÍšÖˆB’Z÷0”Î0ªVÍî‚O¶.s\ncM°Ï‘,†t\"¬£ì0¼!ìzT#X«¨÷#:R¡èdqlÅƒÌÂ¤œ³\"ìÎtÅ¤Z‚ñßpö'#V°0ÐB¡%„©Ä,&Î'FÍPÖ?4K\"\$å@öÂàzfžÈ–½ª=§P>L30Un6±ð\n0Äèg™	±p‚ÌÖ°Qz&®€ÈqO±¬œÉ'öÊI\r\n0äÌÐ˜öQrÊ,™bk£Y\n‘œ\r–ypÂ1Ç1ÃpÒâf`´Ñ‚-qÕÔ1ØóP›‚ g,^T‘›f@\"ÄÎ>ORïðeo0ùQ„ˆ+¯d²\0Ä2ßì¦ÍR&a¯\rûCdægR’&\0òr\$íÏ[\"¯üƒÂâ'Dâk®\"Á­ŽË*;%%qjjvZ=raâ#2i‹ªâ’\\õ±«Ò|üÎO‘º!,J*‹Hw‘`.*älÔ3ï´>0zÿ'†M‰gbá%t¾1`*ò¦lG·*ñW(Èÿ+\nJDÒfgŠ ÒÈr¯*1j#\nÑµl­)’À.r&Òƒ'.BCRœuPß.Í:áÎ9,KFfÑeŒXGÐ‘Òz£Ñ3³'qÎËS=!/òÒˆPÙÌŠMO/304înã“7Ñ(âÙ6O<òw³pÅY6sy3Uˆò|Ð6æÓvzìçí£93tçtL‡€¤Häd\nHŽ<\$Bsjb¯¦„ÄCâbpBHæR#óE6ñÃ=Q!‘}‘MÂ×=Ò>w8³		­ü{&<†ôvJs°??®ÎbÜÎÈdd‡ÔÌ±Ý\0=¦÷+çgA®]Óx½Ìê{#ñ2Èæ°Ç‚fQRh?=rdGJ?D¯ŽÔ/5tH)ó{>sq@ËJÙ¨\r9³[£]Fæ¨'´M	tPzRS‰³ŒátjµCX³ÇD~\$ÍDa †.<ã“KJ‚\$äcïâÔ«K”Š&T\\|“ã´¶@ÌÉE®GM?MA¡f`Orq“–= D®‡GauJñÐ-tõ&TùK³:-dcOl\r54&ÂÖ®íC<ò<>Sc-äZâÄÓ\$ÔìÔ5+éøGÄÒ|í5:ÎÐH/ŸT\$o#‰T¢ÁuA*ÕDO¤ëä[;CVÏHgÌ}VCÐ“©>ZÂD; è¢F\ni–8†:ÕŒìÆvV‘ŽMé\"ÐÚð®üu¢°cœòõ¨óOzí•±Æ=\n2M\"âš(@†€ä\r€VÇõ,/?Ë4.éè~ñ¼k(@Œ·ÆXÆØIº\rËÊ\n€Œ pºf\n@@Î÷ÒE4/=«êùNý\"O*{Ê’,hÂÚNÙ\$cÍT'%„ *\"lÔ±¨‚%\0©äf¬Æ	¶ÀòâÂ[^d;^ìƒO'+£âäÌÔ÷ä§ÌÔ²‘\"UæÓ	ƒ³2wNßH1q|®3j1¥¢`ú ¥AE>P‚c8!ìÖ§[p–è:Ó:Ÿ6ËBtòËÜƒ¨ú)#L÷¶ß.vãc“V70Vò+.çnQDì·p13mœ12}£í×ÖÍ)o\\Ä:¥2Tuû[V1e°Ñ%jEpûæ\"5L?ŒCke^ A=N´ì@¬(3è0øÑ£sÏ?ÎÜ@¬ Æ ê\rµ0µôðuâ¬¯m }í@Žlew9îPÚtW›n†v>ì«£ÊlÐÉ÷·vìÚÏWUñ<5#K\\ÁïsWr>j‚ßãQ^§6þvŠ~Ä*.`";break;case"ta":$h="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæÀ.Š­'â˜èôE\\µªŠÒW\"¥u,ˆÍ±»Ÿ·(²­J!\nù€7\rê/Ö‘<›-Ë2W*ÉÃ{cQkRÄTÚPãÖ+C£+ c@Ù¥+ä-VÉìòæ·ºæ³Ô­änã(Þ6Œ´ûTãÛíêéÜ­õŸ2AåÂœOÙÑàP)#›î6ÔJº¬Z*ÄÊœ°ØWøÊ9<#–\r¢7­OTÕsb|\n£ž‚×hùqC\nRR¥BÍ„Áä5|BÆåhŽ3)Ö¶¬1+%’\\à«I‘5À•NB¤I’pD!ÔSG‡ƒ¼9£0z\r è8aÐ^Žúè\\¢±^\rãÎŒ£vÑ<í3äü„OˆÃ³]º˜¾ÿŒ#pÖÂKNö]ƒpèã|¿¾cò7Œ‹ç˜¢&\r/»\"9n\r—·0¥™nMór•3^ë„ClDŠa¤C)JVêá•Ms×-ôEe’/ºZ¾á0Ö2RÒîg;U=òu%/wQå6Ñ\rsÖKŽ®ƒãØþD3 X7\$AM²!Aôò¸KÆÒ=e°üqÅ£åÇý¾eÒÚÍ”1pÕŽ›soeŸ¼ŽœAþûWÄ{ÔY* €\n•ú‰Â#Q!Ô6@@ƒl¡•Ý¹òœ_QIL¥5Z„`êƒtO©î\n ôF¯ ºi3†v Ï´#`§›#õl@Rº\"…5:\"WJæd}P™jbtÂX\\>w.™ÕCµ¤CÂ¬€êE)=Ç†²Òiy€è¸¥´—9``lnGüñ0ÆÞQC“)iö+7ôP{À‘qÄXqfY¤7„i#ÔwïXÖºµ\"í\"Y0HèEw¦h^©}6,ÑÖ?è•\"Ö‹Ñ)Z%§6…d“1}ÑåsJ%Tƒd*Ñ’ÉºE=GXæ•ê5èa	JøÜyH ÑÄ¸˜ˆ–œK<†\n©Ò“hä“Ò:Äx,5¿Ê,’DÇä¾+‘òûy¤EçÁÃ«'ž™^PÇÆY6å,æfQmäÌ)V²b\\Œ‚¤ÅØ1. ÙOYð49\0£¶w[™â\rá˜3ÆÄpùy-érc\$ ¨Ï(mo!äAðæCc=áÌ3@À@PÃ:+`°ø‡*(a‚+©ô¶ÜO¸(`¤¯0¦‚1H6fÛL4v« Ô]^Æôš@D Ar8[éÊ?\$™\0Íp®voÊD¬£ZŽÞñdiLÐFÐ‰òñ\n‡gñ6£&r‘Bf\"ôYñrDâ©JrÈ@3ä[•jâuEU/ÐåÖªŒÃýg-ñµà—Ú’hêSyQ* 4R\0Ñâñƒ\r,¯ÐÂÀ˜yæ²áÌ;¶WCÀp\r-@2T–šÓÚ‹Sj­]¬µ¶ºÚød¥Í²¶vÒÚÓÓnmMÄþ·@èÝ›Ãzo“5À6—á\\:wqA¡Æ8àADƒYâr§™‡Ñ Ýq«B®¨†»Aá=’M&ì§«u/PÑsA¥ð›X§ÛW*ôDNPªÐ[›ÈšËA(P¡˜ç:‚€H\n\"ïÖ3ŸxÓ}ò,öNa«Ò~`/Ù×¨‡fY\"L*8þàa]TL(G—’=›ù'V	|Ö,ôõÍ?åâJYŒGµ÷—^B°ÜäQòù KßwEr·ªE8Ü(y@ôˆ=Q˜îµQ²)µajBL.âº88ššwÅ(†°,†–â\nDšy/fQ¢'jÂêÚŒA\$‡“¸ iq§’1àÜãOÉû\r@8Á60r]`€ Û&Äˆhm €1”7!žO€p¥”à LkŽMnd˜r?\rc  Â˜TÊSqK2açVe¯•\rØ!‰8ÜÖS'ÔÒý–œÞN©UKâZ\n~Á¤3‡PåSöp´a–žË~ä~]Í\$ íføÎ¨©B(Ž5§-ˆäcVÃ=<4´àŒ0yq¡¤ÓÌúW´ƒcÌA±™ê×\\pBãL„³2ËÊVav»‹<'„à@B€D!P\"€®\n E	†3ª…{õ^¨26â42™–›5›i¡‡ºOÂƒs.)¾ª„½Uoª*R®oié×•NW	'{Ñ”¦H“ã›ºY´ù0ÂB¢!C–2ÂRBUEœtÆm0ÝA¨üËX=hï¬u3>W‘?Zý†kîµ!Ž_§jX¿P#»3Äõe\$Ê£Ñù-é|<æ'ˆÎÙ©,—a”ÌÏ­t5=VÎÊÓë‘uþwûMË~zÎ‹µì7’ÚqÚ€Å*¦0ˆ»D·Ô].û×ðVn{–2S6uX‘8%\$	˜õ:C uõÁH2” Óá~#gÃ&ãIÖ`?::†pÐ0¾­¶¸…à©+´NæŠ·ä˜¡ÎoÇAÖ{Í{ÃC J†ð›p%LéfÊòço=õëÂ\n0Ê=ˆB Èë‰ÈJ	4i*ÇƒF“\nžýÆ4ìè\nHo7Â0\0’\rÈ  Ç\n`ÆÑJ\$¦€	ÈÂ?ÃØHÈ©ü=ðB\rï¾ä,Yïò‚@Ú„‹,>ãÐ‚/í\0MÈ îžgzßjy+ð'œãZìbAã¨î…ýàÈ´Ž’p”ìÂÏ	¯×ð¡\nE†‰ÌºzÂ`Bª×ŽD1‹Í\0ÉÊô‰\"JO4ç‰ ƒ-ôãnˆ&ÎŒÍ¨wDNpôOÁl|ñ¢KÜß'ìß³oõâÎN&z¯¡`*Ep×¤4ó)òæŠÚ‹+œ¡,jŒt	”ÉÅüÆÊ¢I +äÚBÇØÉ(\n'ÑÌ¯dßfNv©nWÍR˜mVeGÀb¯²¨ÆfM¯(ÌÉ:òé@8Î\n€‚`úaàÒ=à@ #Æ\rìê()œCî´­ìNô¥”ŽíVËÉˆ7¯IGÒ—\"6|sð®7'Ñ3¯8õi-:”‹úè`J´ïg°HNòuÌnyŒ ¤‡ÓÎ4:º¨Í¥ï‹,`ÖÀ\\,8GQ¶ãÏ^¨öô3¤½\0ïr bÿÅ§	…£ê\rIÉ‘rô'S.Ö‹‘ò\\Ê•„ìLd …©ÔrÆ*Ðþž\n€ÂKü+±Î°Q´íÑõ\"Éó#÷9'Å#PŠAJ‘²•\"’˜2Q\"2¬C#Ò*îú»2f¿²Ï,ˆþ8Ç(l(Ð@î\$#Çq&©î”ý‰€B~(\"†(°§.òª–‘g®n+Šzª¹/íµ0P%ð\nÌ¬]\$\n¨Hzä…L\"Ôñ\rŽ=„1'ƒšæÃ@FÉtéó>ãÅ0¬³.Ìu0®::¢§íT±… AæŽ)	¤¬ÆóÆˆ-êÀd3r,ë Á©'ë¯\nŒ±DrÖ‘l<¯Hžd€6m~cØnf\nªå¢ð©39dBÄ¢K+6Eæ°&mð\"3+B\"%1<Ñ€«.ô×SÔzò±6LWÓÝ*2] Sä1#€œª©oÈ	&¿dÐÄ3ÿ>ô(\nŽ8ã>1ìyóƒ=“ý@ó-@R±BÔ&DŽpÉ®2Í%²2SçŒŸÉ¸ŠôÁ)>¼òERÑE®GEtA4Jî]-nc'B\0ÂêÇçJRe*N	il¾O) XlU5Ì{0ó‹RnèG­9ìÌ¾h—%³KìI<%t„t±>øÒXHÓäP’çr\$óÌî´ÞÚ½En,´s@©NQà¬ëÍTî\0@\n€ò\ržâÅ®~rKcHÖæh†nÛF	Òò0È±±U2i‡=ôFÊþs2+*‰OS´ƒ,4!'‹O”##óáE•\0”Ð«ShûUE<ôi:û'ò wu3Ï!W(šãÒTˆõCô)GISÉß2) :®íWÕc-¯åT‰&ÐfçºÃ”kB=Vt{YÐJÕ¤‘•]/¤!YuÍYµkGfÏ×Gƒfª*	Ê€5³=³Ð_d135S3b ’I	u%DÕ^XîÉGs±=uPS%Q`Q1_tß_«\$ô;M³”‰vfm;a	aM÷2ƒ%4÷1gb£4–Rªí3Žm1i©Rµ­\\µG@k\rfõÜY·e5Û\rÌ—TUñX,æð¾MÐã!w>µÅg¶AY–˜¿e6ÉÈƒ'ã#s?\$Ñ­âÎ1¬gÕ#hÔí\n ðÚŠß\n«5\\ÌômZôqEíGTÆIïÊj&m*4q®ËösQ£¯ä4OÁÒš¨Ûvâ«³V¶Ç6¾ãÓL¶\"6Ÿ(‘ ^Õ@J47Qé;sp±l‘VãÏ+±ïÓÓÅ9J5  «ö¿4†…quy=«æ÷%(Š½iÖágVÄEô2ŠðÌ(u\r6[g52öO\nÖR›ÑAÖ¬ÖH~P°¿1©i}iu´APƒaÕt‹ïcö•Oöƒ}V‡aôfœWGE2Ç[6€©ht¶IÀ~q…zd¤öOc£zdÅðü€Š<'¿u«5ágôC©‡êƒ&ëOTO1—ãyÔ+ƒ5ƒXƒX;‚§juÃW¸(—õXÒYo`\"8QHêÕRx=‚6søL`ôjs Q‡¸Z×ï€°ÐJD?G®çk¢¾•«a¶š&\n¿øñ#†ò¸¦Cb‹'LÏ?Œˆ†U/ÂPÕÇ6÷'^Ø»_>È'`¯^6³ô'Ž%•Y5ßn×öôXJž¶.ç62YX–¯÷á@Ñ¢¼ƒÈ@ø-±|¸€ßrÖx¨Õñ’W’YÙ­“…Ø	‘\r&L¯]sÂ©ùx¥M˜^DÈ©{#	y–ÃayL©øç‘4%‘x/–w·[Î{”ƒ”UÉŽ¸-4}Nq\r’ézµ•Øi‘ˆ£KN7–©/Y™\rù£L™{™VÇFUy0œ­V–¢~55‚U?Ž˜G™wGÙÈÌÙé7›ø™2™~WýÉj‡„uˆÙã„zÙõ”ø˜9U<°ó9	yVCwßn·ÏŸ/:šhÙ5}™kj8Qc/s˜•ž™…žÙs¢Iç£úh¹§“\$§„:IU¢ÚYu9½j˜aœ8séÙ†ØØsˆ‰¯#JÞGj£1xéújÙ×RU£¨—W¨ö©0cY®šš~Q:Ú¯Nc•˜-¤µCžøI>`²í\0y9NVQtª¼¯:â¿%?x7’Œ¯)6šÂC«ùCl®ë8RÝ#¤k™ôC+[óuù–\n‡¬ûãØ€XŽøÿ2M:8QXwDü“´OÕ4d-<}9²+›-&Ž®,ñÁ<	\$²Ë0Ñ>ÏtE\0Ø<Ê÷w ºG§FXZ2wå6^'YfT+²‡…û‹§ì¸ù›sª©¹w&ü@†SàØm÷àÖ\r’iÐ2‚kœ\r§\r Ì¢‡+‘£Ö<@Ú÷HK¤Û\0ª\n€Œ p½dX+Û…÷—t,—§[¬ŽÝ±­A’ž)Åë«uÏ@›À™ic|\rk„£Á'²'éš™üåü!†u™»TE—T|›º\\†“<t,«ÁãzT³:îuo{/(÷˜	»×½³èÉl+öû·¹ õÓÆ8º÷bFcJ‰–,é-6xV\nIÈ¶»J×CÅ\\›Ÿ¹Q!¤¸§–é˜wÀÔú¿jÄL+èØZ)w¯@˜ÛdVE¼Ò(«žl£Ä>£û‹è–g	àãŒ2A¸©Œ(1y¹ÙÅ(¯Ãu§©šÕÏã›œ äƒï\0PAEÜþÕt4Z»Dë;³˜œQ]àÁ<Ta›§†Æ+—LÇ¨’u¨‡©1- Šùo¢-¥\0©‘œ;ãÂìÑ`Þ5\rÙq±ÑÔ1Ð„–÷Ašž…=~ÄR‰XOXˆ¯Bó%Õ9ºö±ºYˆmH]HÚ…ËÎ¤XlU1Ù4}lÖy`§uuÜ&gÌ`ˆ>ÍÌj)—š[LOT`ê Û>Œ[q:…@Ÿ×Âþæ\n±ÎqÔ[ŒÃ@N%R^¼¿’5™{<Ã¨ƒ\"ËØnEÐUØ\0©Ñ(@>ÛN\"Vß£VòÕNÂsÝÄIÐ®§‰®›ÛÝ(©ØÒhþê/_ÓçKÂÙ·nfrKÅSròsf6èßâÂß,·1§‹äün@	\0t	 š@¦\n`";break;case"th":$h="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¸0äãCŽÜºŸ+*5NeÄ·	 âÌÀMhÚÚ<)é2×Â2<DA4’ˆ€VŽlã,5È;›,+dƒµE„;˜€&iüdÇÛ(UGT6Ý­§©œÓ;ªËÉ?IééGwYü³i Z…ZÕrb¢¬¯åÅ¾ï×U“6LV\nz¤9D×SÖ€ZÎ»6‘bw”·60»Ñ+;¤ŸÄ…ïF«ùApYÞ7ó›¸Y\ná’^ÐÓƒ,EŠªg+ƒÖ9£0z\r è8aÐ^Žúh\\0Œƒlx2ŽApÞ9áxÊ7kCÄ\n7cHß®OðÃ¬£¦†/Á£Ü5„Að’6ŽÈÛ­Žà^0‡Ô¸A»ÀãxÈÿ@›Þ)Š\"`Ó¸¶š:ï»y†5]¬MÓ·D©“r­Û¬\r6-ÍYKûQFŽßIÏN3±OÑÄ]5á9uQÂàÞM=–Øõòc…Q;}Í{†·ŒrCÁªpÒ]ÛŽü±'q¡€.s±(¬Ò‰Ú{<¹´£‚\\\\ÒJàËbÛ)ÂÞSQU‘¿Õ	'pã‚ZB&‚0Ž£`èÃØC*æK!‚œ„O	ÈS¬H˜õ†ï“Š'éÄP•’lJê”Z*àº\"c¶FŽ’Ú_\n(ìª<ùYJ7*0žœ†vŸÊ~+&=ó´8õÞh¸N\$ôª\"zœJÚá.(EW²²æYbµ+©Ø®¼ŒŸÈllÈ4÷‡0ÆÛ ±\0|Ê&–€@âc°QeQ¾„‚@üV®¬\\;(Lí\rZ0LbáŠ¬%Ä˜œš£r°Ž6FçP‰c`‡X4PÚJÊ‰#†ÄòÈ0Ç!d8\n\nr>C3èïãœu.nIF1ÉJp¸æ!(’ËÓPŽy@Y>päcžwù=¼7²C\nÌšBRqÉé'\$\$D#€n@? äAêlç¼7†`Ìš•©=r&eêÉÈT\rçÊC†àò«`¡Œ1ŸÀæŸÈ \r¼3£Àæðr›á„3†x'¸%pmH7T\n\n˜)q°åo#‡=-Ýø aL)bLrŽ±\0JH¼í›bx«Žrñ•Á-Î’,„§mÎ¥5%4œ.óY³XFOá*¢‚Qáx*TÄ)ÊÀSœÍˆ7(*æQcÛ ní#(*Xš	Êµfõ™29®†´¶x«€·¢ï”ŠÀ+40‡4\n]aÝ«¸0Ê€ihzÏÚCh­¤´¶šÚ{QjmU«µ–¶×Zûal`½² ¶ÐÚl\r¹¸7&èÝ›ÃzoùÀ‡áøa\rg½ÅŸ6©7[Â¨¦Žhæ«'¬_UûžXQ~¶3ŠuMêö£JÈ©@tÌcãª¶Í>(‡|‰ÜA‹Á@\$\0@\n@)PHR7(˜xxè•¨a+\\åR®Vhã”,vÀéQ4ŸEŽùæ†qh¹ÛG?\n‰-ŽfáG2Â’ÁUS¨°®–Âìp…W‡4íÄÊŒïªBjI‘%ÉŠF¥ÊÀI\$¡äô‚\0È\\ñn784‚A@0¯\0Ìƒxm½æ¨¤-=s­ÃbŒ0' eA÷f=%‹˜\\(Ñ¨•ÅÂR¶WIéU¿Bà»ekHR‚&xçBÇ|%¨~QgHP‚ÔE{žA*wZPºfýbÙ·„,µE*›§UÓÑçÁ±^ž ÖÔ>A¤3Å÷‡Áï>ìø#KŒÛœin]ýÙÜ?ˆdT=ÍV,ÆÚj§I›\"\".D¸B*¬îOŠN&=\n, Âp \n¡@\"¨tþ¡&]Nõªòaç¨Ç¥¬˜9úbçå3špQd‹zpæ¨È|EÖ#èXÑÊ!wÃbïñ9E%(nTÒµ5t4ÖìxxPÔ„ØñQ%ƒÂX×&–K®:-}½Eèê0¢ÂïUkÁ&/ÝØÑŽ]ôv÷]DTð	ÇÉƒ·.˜½£Þ,u:J—=Â#º ál2¡iw}{`K¾d¨jómEæöT€ˆÅ©)GdF‚en¡¦+‡JxHOî\0.deñpÄW!]·’íÙ½°Aq.1ˆ•éÅ‡²˜K’È/5èE¤Ç,…ÓN²eºf	Ò¨9§¹¼-H4‡¨ñpŸÐÆC\"W7\0*BIZw~õ¢¶Žñè¢ƒËõ~ïä:Lƒø‚po×àvþ[\0\n«•|4¿îº\\÷¡ÝdÆ7{¦zÑàˆèE€•Òa‰pç@Â•|\\üùÆR›¡ÏoÂ&ì1å{q‰Òú\$øíc”\"V¯‹*CšbAô‚»ÈÚR•”(RG;ûgå3¯<s¡û˜è‰;.§y)Ýãû¼ïð¼»Ž4©ß•Îù”cTb/Æåqs=ê‡Å”Q”¾º=Þy¶ã›dDYáÚ˜æÓÍL\n€‚`6j€Ò?Œâhà\rì&@ àÐ AâfÌ*L1ãPî\rü¢‡Ü¢å´Ÿ@@ã1JJO.VFhE¥žW\$E¢Ô‹§4à\nnPC°0ç;þe)Nz¢æãË^ªeèëÈ¼ð`<,n:Cd°Pšâwnn\"b±gÐ‹dž‰F‰pzº\nlw„	j[DD`¦:qF¤l@àæ+'ÚÌ+oVJƒ&SŽ¤J¾CÞé«âSmäû(÷Nþ	a\$0Dš¨F_Eøùo€@® ÄpÀäÑlð?%.øÐ†aD%”2‘é¥D½lÈ'ä(|Ñ4På×\"äV©¦V¢~\$JsV£h×eë…ö9±^V.4;§ä%Ì&ojï˜D£ÿ„P”*² å‡â®=\nÊ¬à0ºHÐ¾«íØ<-¤x¹P¼+#°1±FPNä„oxIqªàdDfÎ¦–±ÁÇ,ù1’égñgqÜþÎŽqòÚCPÈj#¨tAæN²–Ž¶ôä%.0ßF,â-à»H²bQ\\ÚZÞíÅÉ`S¤(NÈO‚¶s!D+2<ØIC\$D€ðjB’è…%/%rCÄ‚ãZöƒ\"tïnŽ-ÌôÄÂSÎ íaGÏ\"'ÎC:%íEjE§¤¸íˆ.èz.áN)rßn»Q¥GÓ’ˆôäÂç!-dâ¸“½ Êp•ïîwMÛ\"rÒ-úªC øb¡’Äö£¤ôoq'òâäÏè,rÁ-©~íÒ»ò‡0É(ñÑîÛó§3’ÐqˆÖô2û'°ÜvÓ&\\Ê`vc‘…€LÈûä%22ÑÍ¦ºQ\nbÐh%ðl¡ã·Ó|ðw!ð¶J(ª¤òø&Òn#o“7³Y7èrÒDJ\\g=5KK3RxŽ:÷3>÷Í9eHø“‰2äž¶Ó%-ƒŠƒãXsÐŽÀ¢X¦Ê[3/bÉÈß)g)Å&Òf<E@<%5(2ŒË%+…js/~‡DŸ&Ì”à¤XÞè…?'3)OPYpÃ0eöÿÂE«&=>\$Dzø*SØÿdOÓ÷âÈÖs˜8ÓœóHró,t5sÚE¯gÅxEšIECåCDäØtòÓ32ÆöÓ¨ô³Äò§]8£Hc»H³¼ªÓÁBS®÷r5	«nw¥jýÈ;!pþPý(äª3Žý®@-”±KT{:43tƒ3Ô‘J´Ãb>±ÓÓÃKò÷'gfu2}g»M±MéKI§uM3LN§KSAJ0:bkÎ:#hçOßÄ)P„j\\Âw!Ek<Â1åQ“vÓ<%åÒåÌM1ô¹8Òòà`¥Tf§TÓ1LÒù:tñ:²HuVŸÕ[6õ\08CQN”}V4îäOr \rÎÎåôêÑÔÑVi>l@œ È¦-ÑþU‹XæÇZ¿YÀßZ¤€(âf…jVä)>à'³Î‡#\n‰´2íju\0õŒ=ô+õS(•Þ€ãUÓ¾tKõîkiË_DMVìõ™MUüµá`4ËO5•VU…V³\n’V_Ig/_•y1qxVhG\\•çKÕë-µÃã›d124Mc·â¦+pÀY¢\\•µIÓ«\\VN”/ôW“HµF\nƒêï¥`R½dMå–€ú,Oaµi`²ýaÕ{db±i6…ivSNVWWÖ	aõ‚ô‡l¨úVj4öÁh6Ä„pœZ5{ôÝK1?K°X`Ïùg¯ÿ3…M,5iÓ8ô°ŸnS]4²'I±.v`ïO5èíH`« Ðý3PÜT°¾Þ¾âz]³D˜Kn€Ì{6dŸ.9S¬Ÿ28|Å ¦´éteòLAfxå) ÌêVDOf«Š¼Äê¼@€ë\r`¦±cÜd—wSe\nQÍO¶¯”¶õÙ×;e,`è@ØlVå€ÖÊ\"\09õ-e´b’òp%b°Ìòo÷v`Ä³Šz\n ¨ÀZ\0A`G€Ï\n'8Ómjâ»7*—Ið4¼ízÓ‚V©†àÒG4&k¬ñWæÀòÑ­ŠE¥|ÃŸ>‰EãeÃ”Yþú”.øiÖ_{Cœqò_fä\"ª6·,„%|2äSë®é¤ht.ÔbKÎ½`	€Þjé‡8vŸf®=äAf‚–âá…kS|_Å; 5ûdkziÂå Ê M“ESnO/ðO7O·R6'Í‰Ö70)7+lk:ï1!ˆçN5Qhî\nŽñCÙw÷Òk`@\rààåÆ¤ëÊÙŠøÕj(äd§ZÙšƒ›=\$À+¸ÄtR?t,“2µ?¬k‚¨ç£»)’ƒ…*£„ˆÃ(–²Q„Õûäá\\ò\r\nÀÂ`ê ÛFku…ÃSiB”hÆVâzÔˆ„jJ'¦J„t8.ªeEEÙJ©.ã¶_KpÓ-®ƒ•9E\rÇ‹m°vd8<2ÑB	0×-Å‹D›vGÍCiuuÿ^0ÖIçÌR‚ºs4Çƒmi”Ã;yÖ.g®	\0@š	 t\n`¦";break;case"tr":$h="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtê„2í{äî§Ã†:/’BºŒÊ0ŽKt 4\r@ñ\r®êPX9ã`Ò*˜#Œ£z˜:A‚cJÐÁn¤V‘:ƒ¨Ü:©ð·01b\n€ÞîB²^-ãq½ƒJÊI‹ÞÆ¼…Œ0Aâ.4C(Ì„C@è:˜t…ã¼Ì#\"7#ÁrJ3…éŒâ<?H3–„LÔ ËŽ’à¾¸»£XD	#hàÜ&# xŒ!òˆÌÄã@Þ23LàæÑ\nbŒTÐ¤ò>ˆ¦NÄŒ#‚|Á–(Â49´0ˆŽKÀÜ¼\r«Â¢2ªrQ>:=’âœ'Š’¨²×ˆ³'>qb×´¤Œ<Ž€Mš›0Mp—¹ktÄ¤£¨Ú	ìÜ3^\ra\0‚9J0ˆ‰-.Ó\n;-ƒ«¦)Ô5Œåh2HÛÂ\r}h2Ñš4•Ö9.ˆò:ê(+d¨0¼O˜9§Ï¥ˆ(od6ª˜ê¾-Ä\$ß4õüôæÃ.¥4øDÉÖ>0Ô@PÖã¸‡’Ç¥o\\Ø•éŠO\$VVwa×yö„øëb°<÷çÒË â‘ÚR•¶èô7QHbÖÓÝIòË(zöÁ_.ZN9¦B)u?¨§ÀV âw¨6Eây4CxÌ3CÓbNaéð×±,Â Þ¹Ã#pòFCœh1³˜ÌíÎac49qãÎ0¥‰e§5§C(P9…)<I®H0ô¦)ÁH@58Xê¸ä6§Öæá	\$n“ˆCÆóä(½EÃq¥JòŒ‰òOpé¶ò!³zf6ƒ¯<6/ Ì˜³C/#JËëTÏ¨&Œ5b<ÈæÉ*”¡à8ÀÊV	a-%Ä¼˜dLÁÝ4&¢›Szq\rÉÍ:†”îž[|OÊ\0007(%¡”@nQJ1GRp’”3dç ÒaCqª%í“°ä÷ˆëúW&ü:òÐÈl'Ïe)pªx¡QC.¤HÌ<bB›P	@èÅux‚È ` ¢»¦\n)Ø9ï?…<Â¬\"ªˆ×©vGÀ4†Ô<b¹,mÄÀ¾ÀÌÄà aÄ9¬¦« ‹+Ø{@€&>—Ö@árÂ#Ñ€÷H%ÐPX©'	\$<’,Ò¥‰…RäpÑšP@–CŠòU€€3\$L¹ ²laÐ4>ÀÆ\\”¼¥3/ôË¸1aÉ±x%ár…\0žÂ¡²#äÏG°ò{ØlJ\$š™õ ˆ³É#RÈËi*CÈgFM©çèƒÈä˜~Æ(ž3ºä8oM2›ÎÈL•„À–†’.‚¤\\;ªR:‡Jaa¼¬•ÆùK‡&ÜR©Ý)yfd„\$H±;‹ ²ž\0U\n …@ŠíDKO÷š³[<h¤};Ê\nW &ZMJ)Pf¥€‚—,¹ðH=6§\\¹4ÒÜQë(8	fADÀØØu\rgR8¦Ã¤„B2=\$@åœØºtÂÍZlŠ¤ÓÑ”@ØÊšyÂ}¸RÚëÅ<r!)¨p§I{Q<Åƒ8Èlo¯ÌéK³žž’3:iM±\r–SpæQyŠ”È5—¶´êß\nA•C†™Ü¯Ì.h%Z¥ç¡tZ‹º/SÞLüä9«•Í‘÷æEŸ«ä{HH½\n1](Õs],¥\"—*,uKÐ\nh˜8:š¸HC¡ˆº»Çc^Úš\$á9—¦ºãúî1&`àÞˆ.ÝÓc´7ð«gò/JPÊ†PîˆÕ‚²V¢÷„B@‘nk¡«¥ŠqƒÈn9À*”‘ÐÍfÚ&”G	QFm˜T8¦¯–ìF¹qÆ‰Hä¡¤b¦|Òˆ\npŽ„ Ò¨£ªÜF~;/Ðžw‹N%èØù R‡dÕÛMDP*†©%æbK)BDí]“…4Þf²PJ‹L•u¦ÌÕBÑZi¤à,œÒu2úÔyêž@ª\"ØâLŠ6ÁJfÃš)yÀC¤ÆÃ‚à—ƒ”âÎB~µ½A±]JYë>U\\Û *6‚š|î,t‘ç;“¹r†¶ZaK©'Zg+D“ÄœÅŽŽÒâu\\!c¡³Y±Õš+WèÇ¡E>ŸÔ9ê_l%vP@R* &Wr\"RI©#duuuU´Éyˆ‘†ÌºŒ‘¦`CP¸;†PÅ–™OrEDûµR\$}ÕFØ:Gc¥,(h¾Hi²¨ä£„G\\¤ß\rTí'ôI£‚¢ )/ô_¢´ÀBð¨›[=„)}…Œ6#ŒTb2/s”;zŽTPé±ã—4¹ñ®TIùf\rg´ÓNs‘ŽÓåæ ¹ÔôvCy›iÈBBªƒæÐä›Z¬(Í~Llúäv:au¥X:ª´ª­Æ˜‰þ’º°;Ya»™’\r9‚‰gŠÄ^õ±ØÑ·c¢|:Ó‹ÜO.ÓÞÅ±V*\r.Úì”Ï³qÎùdr;kÉ0ýò;ömb¼B©ðkÂ’væÒ;×òûçÅsåš9òi%òqÇkŽö1XìÞï/P'õLÒ¹û7h‹¦ì@	õxó×?bO´®˜0ºj+ö|9DÛ©¼‰||=Ì¼'¥¢€OÈ,;òy»ÝóøC	.S-p³,©§šl3¨öf­g #­ª\$üPË<ÓZÃµ‚lv‘—íU&?^‡o´ïÎb ‰\r>úgæ¢L<Âàd¢äÃWª˜9jÎÀlí…fê/ ò¥,ëO2uÌä´û/çP8âc}…ÀÈ”°Î8Çã/HÓ`qðHç/¢†ôd#¦ÔioIŠæH¼;ÊRa0CBÞC,zi\rL‡ä2ÝÏvõ°>ÇOy+\nÏ[ï¶^èJ\"¨<FpdXÉ¶4/W2W°¼_ Ò_p~²€³¢E\rð‚D…>6‚6/æAÖ/®%pZãcÿ¹ÎÑp²í	Ÿpþ=ðTíF\n±!=Ñ VÐx[N×Œ”ÄEÉ/™ÌI7EË¯H‡Ž`Äñ8B ´7¤5¬ˆGu\r8;\$n>‘o7LŠÅ…SN	 q£æªÐ¦[åŽöà@SË×ÃÖÄ\"Zet²ã”_‰ÒÒj4‰pÏ£cðç1’Ö±¼íÀà\"Ä€3eõ¥šÎ´‰„\"\"N'b\"\nc¸91î¢\"Ìå”øonø¯r×-/ -¶÷˜=Ž‘ðÑç†}Ï\0ÇâÃÚ4@†E\0Ød¢/å”\rÂNÉøx‰VHl `ª\n€Œ p7îBRcˆÕE(øR&¯%>9ÆÀØ…¥Í2jHrp­mlçfL±¡N&˜°çï&\0Ì\$6CÂÊÐd\"6‚òâîºHpx)…ÊÆòŽ&N,k\"˜ZŒ^<b|j¦t>1v“\$(þbe³!x:CÜ\$…Ô¢b.î\"ïÎ˜râ/ø¡‡|f.Xü‚ÈÑ†ðØŒüŠÚ¹·(‹œ~\rM)ó~\$çÈ}‰ÀœB1¢B#FæŽW3à1í¥®¢E³*õŠø’Ä¨	®‚\$¯=ê°îF=²PJ³6à„\rçæiî:Š,\nÀÂ)å¼/¢3iÇ3ÃDO…zp‚4Eh/…ÖM“„Ä#{!€Š5ÓzlfñR£/Fnï¢~\"ón\"Þ­Å¯2D€íT9Ã*ŽÄ>iè®Bñd#„¨1¥P@";break;case"uk":$h="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.í*bÞED’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÔ4ß'R½’ªdX#Dš#Ïa¯+°a P ó¼ÖøÒó¼’ª6ëJb”ÍSÚZ™¨Õ1D¡tJ4MM”õ'NŠ4O²jÊ@£ˆÑ#QÔ1*ÙÕ&GAšCá[¦%àNÜ¦‘„º½’\"èGAàÂâC(Ì„C@è:˜t…ã½Ô# Û£\\7ŽC8^2×¸ðï\rÃ˜Ò7ß!®0Þ£(épï0Â7\ra|\$£ƒ¤6ß xŒ!ô°b\0Þ2:îÈæä\nbˆ˜4»ËZ©–1|<Ý¦)q-f\$Ñ ”ÚOÄ‰I\rZYÒ„&®7Ö_irÝèsži¶-HÙ´vÃjÿ¤ª¾n˜Í*\n'B‹^„»A±3Û&Ìœ¥ó™eW©©\"@†ÇHÔÎ©—û… ‡%Ìõ)™š„4˜oyËfÉIºÞZßW’–ø‡Á‚%¼0Ž£`èÃØ:Œ±Y—YkcWº-èK£\\UEi1‡LÜæ’–|e°DhF¹kUM›mi>L¬:l¡!	]„‡êÑkAH¦R·!Ak\n’X3¨rÄF)JB7*6`o39Œx\\“Cé^ºA#E”æÞ11=8”¾chôèŠOä‚lùºžRÙŠ¨i­™­4ˆ!HëÙ\$Ðƒ\$\nÎ†Œ3p*›g¨ØZÚjxë[¿Ic¨Pu(¬Íc¡¨üºÂfzû¼V/íh¡F¦éF‹V¬â\0*x9`’ Q†É—œ°rGá°CÃ0f\r‹Á•5“ZyË\r¬,<‚\0ê¿C¨cgT9†g*`oè@9£Àè¢èaá…êÙXâ§x0RZÌÑ»Ni!/µ@Â˜RÏUš·À\\AãÆ+©L£E&#±+…”hˆ’	X·Š©¨ƒ\"Väb´”&¬Ýá«#l.Z«*%ÐG¾˜XÑL‰%FåDF#Ä\\í‘©¡G	­“ei ä–˜\"ÊV¤5?&Ðù\rHÄð&†æwƒ‘ÌšÁÌ;¯F@CÀp\r+t2Hõ´·òà\\K‘s.…Ô×bî^Éz/eð¾—âþ`\0½F\nÁÁ	\rŒ-†°ö\"ÄØ«c,mŽ††>ÈXàa\rg!”ÅãÃs–(Uk\r.~‘QS!¬Éþö^šÜ\r4)XˆH,“ßòS6j(Æ£|JJJà€(€ Oå1Jñ‚‚Î\nQä)E8ß#FxPé0Žm¢0¨ˆù|âOònA ¸Òâ~â4DW„<KCÚÈ`©ý)å­=˜„ˆnšJ`Z\$¢BÂ„Të­c!°\\Þ´¢oSt˜f¹ß)–Œ!i»mÒ<´£9ƒ.ÑÉ*—ÏÑ9¸ÑWdºX'\$‹‡“„ id)Ë²0ÜÈât8¹É®0r\rá´åFfÉà_\0€1Æ–FuÏ	ÖÈ2žˆ\$œ\$¨!MMM¬’HŠÏObòžð¦Ì‚61üTK/2¬ÐºEP‚ú—eaGvW‚#\nÂ¤[i_fÍë#dÆÓ[s&ä•²ç^%ÎŸ|¡º/1 Þ»AÛA¤3‚J-Ñ9Am„`¨0M§ŽÌEz9z+lm™^'y!6°Ìœu\$Me©'&g[r%d §`4Á¦ô“èHG2ÌÇD€‰‡´àF€›¬Žd2°ƒÃH¤,ýš5-\$iJ¡x¨½P)\$^ô[Ò¯h°§_üÀjõJwxá\n¥R¢‚+’!m% ½•p««£¤ÙÈƒ,6nç™Eêq\\ZôßâÀ‚÷hB–µ(e^Œ¤¨!©Ê‚§)ª –-o)ÐJ¸vÿôú‚*ª@ç÷‰eÔ6fg†”o…Ñú?Ž–Ž6èœoÍ\0@€ ¤Xi|¡Ñ†äF¢e™¹K\0êüSº{Oê\nQ¦GÖ‘´»¨YÜôÆY	\"U!ƒt.¶fØ¶i#h¦Ù¾}ÌíR¼l¥“=æ†î™†ôçB³íÎ…0ÊtƒÞšL?,žBŸqt+5ï)DˆOsß<§H9 Ìå´K: ('üŸ¤€\nß.l6¯Ð5fÀis[Ø2² C¾€i%ÝFìLZ‘¢Æð†”ÂõÓ+øiÚ¹”ž}]“|Aj‘jæäF…5•(úÝ§¦ZÛ Yy)ÄòN²\\ìWU²fƒÍ%V)Î¯š‡cÍ®Åì(JsbK©SFû½ÏAßYõY#E¶B^„ß©é½â°HB‘¡PHLÒdÑåK{Ô1&5ø²ôå^Ã¿N(¬ …@¨BHµx†“«‚VéÉ\rö”í;ËK^…TÊb#ÙlúûÔxåê<)NjSEÓj7üÊ‹…ï™…}mã@ô¾¨¥¯ËÓDD§4¬™Tèo8“ûÖ{ïÙ¨.?1®|øˆ¡«ßÓ¤Ï®}„>þKÓûÍ-2KÇóTÊú¢\0’Ö©ŒR#ï²þû¦@ùàÝJ¼ˆOn€¦Ü€Nüâšý-ªâx¶ùÏõFæÿ¯¨ý¬DÅpÿ&Ž\$¯øTïü*A\0!}fÁ¯pÝO÷p<ÿíÓÉFú*ö5¦N]ç.¶@î#/ÈÆfb†¤Í\"ÂY\"FBpŒòbðp*“\$¸’¢\n–Ã@Ð:yÁj=	ZU‚Uˆ†Kp˜kðá…ZEÂ…Úò/ð?pX*P”-Áv>CVM-D>	xÖD„±/fiMèÍ‰”.’pÃ:êJþ•câHø¢44mØÎ©hE‰r™Ðôt#Lñ\r¦ŽZÁÒcC\$|Ó¸¸Ð4(1D”æ·\0‘Oæº\"Ïj–ÝhjÆ\n-mâ†ÎtÑi„H&,jšQtçLÖˆ.v©„ýï¶zqŠÞNt–©d6òŠh%J\\än†®rjŽôh+ÖY\$'£\$yÄ})l#ÄBNO4Ýâ¨#CLJ	“ìä0ñà+Qæjn>Ë'¨Ú1ò{#Ó‡éhFèËêH‘Û\nq§‚·±ˆææðè®{ è(pŒ¨B£F“\0P°lÂ\$ªö%|Tm@ÒR±‚ÐQ^TQÕRIQX!ðNg˜Ü¤áRC%jÌ°ñ~ÊO&V2RÑçý%ˆX’w²#éb‚¨&ÕR]\$Í/QrÔŽÔšÿÍÙÒ¢ˆ)ƒW!´€’RelW€S„dÒ…BGÃ*¹†m\r\n1O²BÍ/ÊHr‹!²ÁOÇ,ñ—RØ¸ðøðÃN¤ÈŒGI.îã/2¾§2ø±²Ð‚òÔDÉˆÑœWMhñ\r.“%­\nòK2õ1ÒüŽ·&dëÒÖì(±K*R=3NÅ) “VÅ³Òm4ÂÅ¯6®¿7C'‚LÚ’Ô’, ÌªC1GÍª¬¨„Í2,*âê%bª¹ËìòrU\n’tÊü2ÃòCf±9s¡9²<ïjeòÞènŽè°ò\nÊC%„\"\n¯m¿9ƒ ®é„ì	.ª°ý9ÊÎKÂì…\"¸Óg7å	6Æ”Å®¡U¦£ì¬êÌòË8“Ç#¦ øiNk72îeCÃw5ÒNÝÓK,Nfþ’w²}7mu8¤ÚÏ”:æ†™OÓ†ˆ‘M7odF…¯D÷4´~+´u*³‰+c1®ªMQHs9dè…2­E®v%\0ÊatUï¶‡z`\$)¬èƒ¢èO\r•%ZR„§ÔÒ~ŒÚ!Ä.ƒ³1./h4M)òQGÍgNÓ\r*’º¼ô™+!?O³\nñU-¬Ô³DOÉ\0ˆh‡F…‡^jÎ„€O=týQ„òT§R5&(+JR±S5\r3U9\"©)=3ÌU‚âªjªí_#ŒúKÊ§O-CsBë\nÊQVôÏW3‡EÈ%-Wîï6g°°T‘(Ô‡Wµ/1?5kX*È°5H†sÕZÕ€ELQYµU;Tw5ô÷4¦î ô[*ô_4µ§I§ªo¶ÔÓ¤MìíEWT{]ð+Ô…4•zUú¾T‘XÕ¸Õ!:V^o*í\$„>ÎÖìP4qJ-L/0°¥jPõ6wcÚó#Yc”w4oã4¶@VQ9d–]•7aJB¤§=äAN“	U¾Èñä¥Hnt/ñ*ƒI¥}P3DÝ­‘M¯äl4£Å2F–ÐÃM.³.\n9@²ûh–¡\r«.Wé¥j“/féf7æànTV¥—l1¶ 1Ð‹MfzÚqëTæ¼š©®^\"0<€è¢2\nj8öò;¶ùhu•£\0ÐHv›/Ò½7V¿3±Akq´CldSÐäHÞ\r€Vëía[+32ÂS TÝ>5Z=W\rZ„Ô'M\r8àŒÂF9o‡.J(À€ª\n€Œ pðf>B\0Ïðûò8Ö5Š7Â<…Ì§&±ˆø÷ˆþ´[yª„ô/æøxèJw³’ÿ°Bd¹ˆúZˆÕë¼[\0›wàÌ\$&Ež7BSÃêD¤@…9,O/d7–5e”“÷§?Nç\nj”ºS^2š#'­ß)'oâ’n³ò†°*@˜ÀëBB8-ƒ8^ƒ;ƒÈ}­j“êÕ*üZ.þLÑŒÞd3Yã2Cf“ÒSqº‡¡Yòa8Å«+8iBX[kF¶PÍÓ	–i]VçXoP)IDñ†¥®o}m„Ô\$ö>ëDfQŸ‘½>3 iH)…8}Bîó‹ç«Š¬Ôa \nL»ñÄÜcÔ¼k¨ÕhŽK¢+§\"Gté\rÔ5Ôq&ˆ*/è–äè\nÀÂ`ê ÚÌ˜ªª}„ÖÐL§ý0­’’ÊÕ£êá6L²Äð°ŒàÍÇ¤7”Œï‡YO\$qÃ£íPÒ2‡™Sìòt8…H×ñV•¾Äø&Rg8‚˜TnS¶*Äþ2mz¬€";break;case"vi":$h="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÈ!ªpK(«0³N)b()Á7&hÐÐb,+]’/ÄP!\0Ï“ P›k¼<ÈH\n3°Ã|•/Ð\"1‚'\0\0P¦¦‹RÙ!”1êdœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘9Ü˜„ˆA¯¯™Z8B<NË(4=9%3÷.—sd|4Ê Px¡Ê3¡Ð:ƒ€æáxïW…ÃÈ6º(ä\rãÎŒ£ux<•èæ4¿áxDŽ5ÐÊ:T¢øÄ6J£XD	#hà6£mz:xÂBR-–4\rã\"87„¨æ2„˜¢&\r6\n\\,[/S*Ë³2Õ‚h	KŽFt†Æì @§Ž´I†V\rÏC”Ø-òcë!×0Ä<Ø!@æÃïÐèÝIÊÄ>‹—I¢`™0Ô’¤œEql¶•6?ƒ°Â6£+·lÃð\nœ)ØÝ•0ÉÁ*»#Å*an¸Öà—ìRôR¿—évTÊDÜ°EÑ^”Í¤N»(]>lNM¤š‘Ää4È	 íI/+|´¢ÊÙt&\n#©†T¿ƒ£ºP ‹t¼¯on´Í\rŠl­w	€Pñž\rÃ41î\\J¤‚¦\"r¬?;(hÉ æ™[,*˜]XÑÖã¥ÕþþàIßEÒ\\T]µëR‚Ò”N¥ÔîíÄ]¶?×”7Cb¶sÔùÞÏ5ð“7=—iË±Y ä#{5dÝƒxÌ3P#pÊ¥ÜŽö>Ð qñ†Z¢c\nH:(©\"žÈKá§pIí7 ` \"â‘ÓÒäJÃù3@•s&q•\$¹!¡–žN×-\rÑ ŒþCL	hõ)BR’‰ bDâÍ‘t*Ã©.P©ŽÑBÁÿä¸(€Ò™Ê  :ç<¦“´.†O˜¿©9á\"ÊŒÛÇ…åb'\$è|Ó»YŠdþ6âZü\nTJ‘S*…T«r°VJÑ÷+ur®Õê¿X!¹a¬UŽHgYk5g­¦aÏI\$Ê\$†Õº·ÝASkÝ«	\"‹ÃA.=Í øŸ2Fã™¡Î>’ÓiÐ @rq\"§Ô~‹a €\$ººt-ÏàP	@š54G„¹ý'd™.‚Rßë\\…¾?  ‚‹\\+öVH°uLH.\0¢¡ìš…Ø£?œ¶Ô•QÁýœt»R~”\nÅ•D\\TœCü~ñy†pÔ€Ã€RK‚I/˜õ•Ìƒyü]a¹sÐÒÐHe5ŒþcüuÂ\n³V¡Èš+Ò\nzë—´@8K‚\"÷P&dŸBˆKxP	áL*@#½ÉÌg	VI—¶œÉÉ™œèž‰—-ÉÜÖQ•Kö•DFrT´P’B‘?Ìüç•0:Iy>qIé*%‡©7`Œ%á¾(Ð´]M*Ôºª{9)ú•((rÏd\\Ê‡Ç‘ÕRÚÄR*1d’jM*Øœì ˆ'y3V6¬~ÜØa:ç%¨SõY©†DBì„&1v#Xk1'`á(Ä@ja¬EY€’ÆGjùlµ‘°ÉPÑ)Ü±Žì&LÚðî½‰íä]ˆ»¤Ñ´\0‚Þ4Was.\nSJ¤Ì9¥‹H/íeOK!	¨ZÒhJ‘¯ÁH2­pÒÃtXŒ6\"ÄzÆôÐ’)n]KÀÊ°ë¾Llbþz­ÁL÷ìÝS®›eYqiQÛ÷l‰y1¨\$Ô›“’Ój0ddâÐ¸|s`m(oý¤L2PäI1.	ÁÔ6-žÎ™ˆffl|,Ê3Àìk\ra½œØø¯J¶SŠ=UÌsÃ(w1l\$Ù‘vV\\jLDàDÊÓŒÁ\r{?yUtufÊ¨\n‡xI‡»DÓŸŒõõ‡€ðå³zð‰®2<IÒË¤ÁÎ¦ ‘f! ‹’³gI`()>kÔûˆ¢7Ep|“0ÚRö©[Ü¹ÏDòN´Ú›ÀPA\nP „0‘\0²£ ÍÐ’&C€pW+2I¢ñŠ!ýˆEÝ­Ó†   à€‡Q d’dÝSÄÕ-qÈÔ	-äÏ\n'Òì‹N×:ü\\’,Ð<B²H’\n¹± Rû\$»\\mkŠ5¹3¸iŒ@Ò.â	™*/Á–lUönƒJ´?‡ø;‘G_WÐ­/ÇDy ™¹®HŸßµqŠâ\\i¨)Cm(¬¬¬“Oh‘“ZL¥3Š»ŠÇÆL¹OvÔT¦NYv)öW¢4K”òÞáªzÁ„Ä]#H­ÃÖ1‚”2®Õ!{ÏÉÅŠt\$%…%:txxblÇÊË†8«ÑIt²ÙâG§ºw>‡ºÑ¸ep\n:’’ŒóL½ìDW~p‰I¸˜G™µSrÐ‹¥mH’øj\"µ¥ù˜€º%³¾Š\"	QäZYíRw¿@ªúÊwvAB/\ró»ºâì˜W³=sm³fZË„ã/ä&âQqmÐ4±ËyÕ{ÇXè~kÕ:XíçNC%_J{ŸfM:÷µt7Ý\\zn÷±Å÷ŽÇÁ¿~G~©\"4—|8‰vìã'ø:èpË~„Vú[LÈíS^È×¡¸}[ãtoÏMÿL0ážnaœƒ^Kˆ·èÍË±‰Êìç`“Iò<¡\"'jÔÎÅ.Bì\$žn.äÞ`éö)V“í —DÊÃŽÖCŸ0‘Oç¶Po€:âd—Ð¥ÃŠ*ª¨CÏòþödNÂk,ÈtÏÄg@sc­>\"Ì˜‹*žþoüóìaïðD&a`¸¯Û°zF~ÿ¯þªŽÒí	•	¬œa­„è§®ÑeöùG9¯l90¸rO•\nÅÈÌ¢‡íÖí&v&Y\r\rÊ^? ãr	lê:¦I!vD‹Îƒ„p¦Hh‡†-÷ð´û½Ï£ÂIÅk«Ÿ‡Ü~\"öÍÞ1Ph’/l«N\$¬¼zÑ°ÞÖÌ4ò\$öîð”îâö\0ì5d¦§‹)	.®¹Ÿ\nƒ ‡®/Šç\"‡¤z²‘5ÛË)(Ÿ¢ÕŠöÑˆiÍ)Jîç°ä†‡²P\ní1­\nokdIQ‚Ë1Ä±QÉkŸæÂ CÉ=b1ØIG6MbHGå:ÑPå\rÐ²ÿM,¬„ß¦Ò¬*SCìüÍ„ùr\rüÈ:ñË§h”ÀPi+L_ÂP5~5ƒ¨bw#ƒVa­r½C²»&ÝO2{.Rˆc˜*àž…)NrZÈ\0æX*9'+Ò]C˜Z\0ì]’x’|×)V>ü1@CÀœ>aJ €†-\0ÙC~jh–¿ä~òNðeÂAD(ã°&\$Œ\"Dö/O4¤BNÂ\n ¨ÀZŠ°âPªÈØ·*î.‚¢S@|îÒ%\rGz¤ªBšQ…°/Át¡L³+7+P”6‚\\„g¨¶°ª6d”Q…è„N¡/ñºpÆø¸2`ìöy¬/ÖïU\"¤ïÌì.²°¡Gó&'\r\\¯'¦ìRVýe5ÒVþ‰Âìäp\$ƒq6ì£*‚ŒaŽ´&›\r„lÊê¥‚ÐÖi's‚Cç¬Ý~î#xîcÎ	j€&’A4…ó=¨L*¨‹<ôl¯&±¹;D¶¦’Í¨I¹fÎ&–-S˜7€ð¢¬¨L„DDlË+<ã\n	Œ•ðþ=¤Bwå\$¦Ø §¬®sØ{‰”@+_CB(\$J9³xž±kQž²ÉnšnK+ü3¥0SQô¶F|Ï44b¢";break;case"zh":$h="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*Œb KœåaLŒ–K#Üs¹ÎX—g)<·Ì<&Â©q>så±ÒK–ˆÁtF>ÄÙÊDË!zH¸\$âÐC”*r“eñÊ^”Né.º=ç9f]¸(r\\§‘E	ÊLÉ°Ü:„‘«A^Cå–°ìJ\n]k!3—¤«vs„	Ï5Èópx0²#Ê3¡Ð:ƒ€æáxïC…ÃÈ6¹ƒ(ä\rãÎŒ£u(<5cpæ4ô°DÒ4Ê:O¢ûf0ÃXD	#hàÏ´¨èã|£4u‹Z7Œ#L9²¢˜¢&\r-[jtIÌE•1+Å%¤Á|s”…Ó‚IœÄñÛÇ1(\\9\r\"Öå½p.ªQ`r—eÕ3!õì&tIdnK¬‘EeAÒC‘OU¤QPr”DõþGB\$ö0Ž£`èÃØ:Œ U‘eY‘ù{gcDÝÆH	i Nå¤’“—g1¡—¤iÎ^•ÉiÀXcÀ§ç/AÈ‘Šx—‡5¥jO!Ç8)P€GÂ6\"6T\r›*9Œu@a	‡)\"oøIœ¥ãÒr6íÍÍoÝìQË4meÉÌTJÅæÆ×nçºá›lÏlÄÐSLg1:AéRñxêñG)³ïau&L–~þ–î›.udÙeH‰LkT,¨Þ3ÃeÚœ×éÒJ=\" ÞÌ\rµ@ò´Ðê1Œmæ3b!\0Ø7Œî`æ4ƒ—n0Œã˜yá-{F\rÃ«VaOXÂÄ¤@@!ŠbŒ\$å!ÎD‘ŠµþF¤—YHÙ	ªêr‘¤¬×væ–Eì`¦ï”àn4YaŠˆb4>/­ö§4Øý‹¸M!ÌÕ‡#3Ã˜wR*ô2‡€àSÐdÀ;§”öŸSúPjC‡u¢ÔjR*MJ©u2¦Ôè/SæÅQ*@D©ƒb¨UJ±W+d­²¸\nè4+Å}Ãk2«Ì¨çj•‘µáÎ@!Ê/Ä(é\"ìt\n!VBEyí.Ä°säò\0-åÄN,¡(+Ó‚r'@€(€ #ÿHb>4žâ\"\n9()î	Qã…jf1ƒ [XK‰20\$Ô›“‘„Ç0®«9…•cÈ-Ø@ž`¢\\À’DÃË£¥^™v&°r½5¦¼' âÆ   ÁÈ7†Ð@a„X‚ÆµJ‚\0ÆðÖ¤5ÆŒ8<ÀÊmI‹‡=…\0žÂ¤€L¦(«8áPD‹~C…è@YS*âPé¬Éš5æÀ)aŽ2\rfw†¢  A¤3‚¹0Œñ•3©à#HþªèiUÊE‰ÅI‡1AÀFQG–H%{5Â+\nñr‚xNT(@‚-(¥A\"„À‹L@­ò„Z¥ÂÐ#ÄÎ§Ã¤J‹öÞ)˜ÒÉŒTœë’è#™€0D`\\¢*.ê ‹ªåS‹³ÀØ¤hˆoÍ¼I¡\$Îùá¬i Æ1·;ZÓK‘oSË£QÎ*Z÷rƒ”G‰†YQÒ	Œ)U^ZÈt€\$<Ñ¾zÄ'b‘\"ðF>C×£èP(\\&¨à·²AÌî‹wÚKi å¤Çt…0Ò˜ÈC˜¡Áë1—þgÃ«‡v´ž!Ò'Dó­­íÍÀœÔÍ‘Ÿa¬=ˆ‡Ch€PN\rå H3!N,\0U²báµM\0¨%CKµá•^™ÐÊÏâ\\–±&²¦Ê››BÝ[ì¤Q^òZ.„dktPvâKEº!B€˜Ò(ÍW¦¯‚E+žúääÅ>\n}ø4´	±tA„Ðébøsã^Û#µ-»S‘!]ëË=?'`”9UáƒíT¼*†¿QÁ¤Ñ:Dôeƒ|·4áÂŠ^GX'Å)ä¾®=×‰•âx Éõ<–äŒ”=O Õ@W‰XôZâ]#‹Ê\$Äj\nÑÖ{>XÊ*òÅO1™Ã¬+ïªLˆœ²(_IwÎ:\0,EÄæ w´ˆ,”òB(\nQ=)µWGæñÎá#R\n¹%¥6\n•’À\n\ná”1iä«ƒt`¶³§ØHTýRÚH”(°[Q'0­ebìB´e¦µriäå G.1†G0¸Œ'„¼¢ø`WðƒÁÕœïUú–9ïÝfC˜M‹GÛµöÉw€•Dêî\\‚wÔ·©3m_Ï»7J\råÉ—Y&üî©h—Iˆæ4.ÄÁ6ƒ”@Ãº¸ÄbÖ_HƒŽ^ÃxM>àœnëç{·ÙŒ¾—½¢½ä=D¨ÂèSH¢ÑºªýpÛO®{%ÎU¼p/^È;‹7*éY6Õhå.e»sæä®'=Þ<× ˆù&,jÄØ¡·ˆüÞ::DjËêö§æüË™óO0Ú§‡ÒÚ/ï¹ë¸ŸoNÆbôø^ã”IÍ±?kŒ‰ˆ[MvÀ¸!=¸7î:¾àIS¾‘÷%Èü_Œ1Œ¹ Qp*¸Þû:\$dJqÃÝ'«sŒhB5ÑìÍ|%ýrœÔ´0™V½ù8²æ«…q¤^}ºïW®ë[ÓÖ.D%Ï×oµH¾§VS:ÿa÷ä£²¹/†JK¿5øçwz|¶ÊLidk`N¥!^ÝÅuP\r,HæÐo\rÔ÷¼VâzñÓ~\nç*›ôofä¿_Lg&3š¸æ>aÛŒÅ3øî»ÿJð<a~ò¡6ÎþãîPë†r^ïŠ]®›Î†ìÕ¯þ([ð\"ðïù,_ÄëgÌáaîãÐJù020-ÌayLÁlý%¿l&KMPTì0xÂÂ0hÔ-hEäbùÐ|Ä´ðm›Ìc	Âî	&\rÈéoÎg¬:¬G-tê¾Éã¶®ÊðÒÁv¬Mt£ÂžGÐ¡b&ÁB(Ëv80ÔI(\$‚…£#b€ê´€¦ˆ#)ƒUðÈñíÌ¯ŒÈÖ¬ÌÍ`è@Øiž±\0Ö: &*bãXv…x\r ÌvåŠ6 Œ¡(—æ&H¦€@ª\n€Œ p*qB9£jÌ´¬á^qcþ‚4#z­Å˜<Œ’] ›1G\ráf†Ð.!ØcŒÙÂú>hÕ£ÃL8ÃÇ:ÐWÎ&­¡B«~I)0!-ü	€ÞQC˜9ÑØ \0ÚR#*5#b%¡äZå²GÍÆÙBÊÞ¯:€Ð¡Xªíà%„˜üAI\r¯æmäÝmì.à¨¹,z2Q‰š\ràà±E¶D½ŽØFb\\¯I„ÆN¾†üßMøßÆüäJŽ,Ž0²däŒ\\1REä2ÕÏð\nÀÂ`ê Ú#x*AÎ[+òÁGL[‚bK­’²<rªän]a\nÖ¡\\já+«°ØiÀœð8ê'Nâ ðŽF\0	\0@š	 t\n`¦";break;case"zh-tw":$h="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²*‰.Ocê÷°D\nt”\$ñÊO-Ç1*\\CJY.R®DùÌLGI,I½ŽIÒ@H‹–Å‘Ð[°§)r_ «ÂK¯oŠì¼')tUœå™w/ax].J2«¥Áft(qÊWÈÐº®ëÌ¤U¢äÉv—ªY`\\…É\nsÎS ,°ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r®ˆÊ9Ãxä3…ã(ÝN\r€Ü9#}>5#\r62Ž”0¾Ü#pÖÂHÚ84ƒm<:xÂAíEtÙ\rã#RÕŽlÐ¦(‰ƒK`Ý\$	qód D…yÎRPa s-¯a~WÄ¡r’GALKI·ÉsZËÍÚë±\$ñÒPOdÙ\\‡ØÃòØ˜S%Û,N·&%ÙÐS”o1U¤Y+hÄÌP\"Pƒê6\0ì0ƒ¨ËlZV¢ZC—±Qqld1ÊH\nY N(KqÈ]—g1GÇÇ9{}œÄq%)öÁ2¨ÅPQŠÅÁ7§‰ò\nƒ-B\$©o)Én\$€€P•KpÍcbçY‡)\"^æï)ÌD’q²Ür·õÝr—7Œ£)ïw„Ÿy/–õÁ»—vëç¿I¼5Ã¿Mç1<[pêYX§©iWÏÇ/6råÒ[Äœü_½/7O7õSoPTqËu£i’d8ŽL“(ULÐÞ3Ãe,ÝO“ŸCª\rìèÛX!\0ëQŽ£ÆÓŽc66\rƒxÎèŽacR9y£Î0º!ÊØÔ¨Ü:àˆŒÅDBib˜¤#Xã]<¿>DYÒ!Äi×O‚ñ“ø9D°®B\" Ÿ¡>ñ]\0º2!Mê*PÜ ²Z\"9Áÿ_ü0ð@BŠS\"Cs6ÈÏBæÔÒÆjÁÀ4¨0È€PJC(…£rêIJ)e0¦”âžT\n‰R*`^ª\r²«U ‰W†Åb¬Õª·W*í^«õ‚hX«0ôù˜èpRï,7+³uœM‚ã”_¢1@\"@¢c”JÀóàdHÁ@¨ ´c‰fâí\$®Q^9„x´~a@\$„*AH0BÁR`‰ÀJ¿\"j9„0‘¶Q³Ì-‘Ä¸˜'æ†‡0®¬©ÿ”IN'?(%þ5ê9DP B¸\$†`@]Ød\r+Î1Õ’–1²6€A‡E\n\0fA¼6‚\0ƒcl,6Jx7²²MI³5ÁñStxS\n€È\nF PóMe\nU:qÌ\"b\"˜ó&/¿2b+H1˜’¸É™VÕÍcÙRnð ÒÁË	“„Ñ™£D B0T\nòl>en¦˜êÎœ3Žr¬äfTÁ-‚Xrá:Dhµ)b€P”\$~Âp \n¡@\"¨@UH\"„À‹SÒ[/Gã”Gˆ6UV‡92[\ri®2Ap½Ä)†;xíÃ¼x	Ñg°\\ºäEÅ8»<„^RJaä™‘°í\nŸ“Æ&E!‘vkRÁº7\"ìjd£œH&‘P\"Ú!ùIŽ¤t\náÊˆ¸‹˜B–à¤UÀimAÒðæ9ÄHˆ.B°†	¢Ö\0ƒrRKH93!dâÁN5èFBŠ.­©H[\0ë˜1Ÿ‡5D¨Îµ(.Ð¦CÓ#s8>ÆG\r c6ðØsË _tî4Z­òÚdBsd6æ‘‹±–6‘§A87’Ñ #k\nY»l„6ª0\n!Xid`2¬cDC¹KK¥u®×êG8´C”^\$¡È¸ÛæÃxtöSáÌ.„_H\$L¸sZ¦=;§´þ žaN. åKö9ÒÙoŽqØæNéåˆF·0¼Eè‹Ì8Ñk\r˜Mr£¶.ÅµÔ/8ðùžÔ@:\n©ÁP „0&ò—\r&Þ(36æ±¬Ã›¡Ì'Å(è\"Šžñ>:\\Ùç<¯ ð@¿y-âÜÇç|óžÂxKƒÏ ÇÕÃö/EˆéâþD6ÜÜØ¤«ŽsE˜ô2…W».¤rêQB#zÆ@(<g¡D†upŒK5J±ÙÆÃž'8’g°Ši:ØÐds‹a'cØˆ‹êØ–Òî:*Û6\r\n96ÀœKÂ¡	‹…«tf¯Ü¬œ]h	.ÒÂ´QÑˆÅ\nÚ[›»A> L.\0B±pˆìA0&\rÎQP:Dñ;u|Šè3´,5{ƒ#˜M‹C¯Z:úÔâÉz®@¾¦Y,Ù›;ŒØŒ._ew/ƒ8}w‹›zà:æó›ºä›X+¨G-@\$(z-å—ÞÁ‘Aáé§¯¦^ÐÏJ%¼ë.lEÐ¤èH‘u5'šË[BšPå¦ÿa\réâ<œŽ¯FßV¬#®‘Ó:äßÈùÛ‚ïÖWAžZ)9{±ï]òÈs‡a{\\?€ë­÷Çx¯\n\$rpNFÌ¡^1®t˜d1ücLi­9á»•ˆ'ôòŸTkä¹¯«Æ~»ÅØÿeëj	‘ÆxœŸ¡Ê\$ŽV+	GßGUî\"	p·‘<…	”M[÷d`ðxª;…ñÞÅøÑÞD ×ðéÃ#ÂS¡\"Õß¾ßÈ*_Uã/qP¹\näø|¿cä×[G¾Mt.¥Ø/Žôõ!Hÿ¬+\0\n°¯\0þæU,&ÿÅÚõÌÊ¬®Ï`o(fð-\0ãzñ2Ëtòp>Ë.ö±ðF[,³ÂpÁ:!ÁÌæŠú¢Š'Á|†ðBÏôðï8Êp.\\Â¢zïjÇ°ƒpBö&P´(6Ê,¸³–Ep¢^â|*P†%¡6DÂDúNÌ°°³#õ©ŒÊk5ásA/	&ù\rP£\rÐ\$<¼pÈÎ¡‰]	°ç\n°ïpalp,œKðÑvñ‘\rMµ\r…àÇñÇpJÇ±b¬FdjFäs°ýd>>À°ÐËÑ@DPë„CI\\	R\r\"ë.h‚–ËdrçFJöÐf\0 œg¦Ž P4àRŸˆôAÞmêHZ¡F¢.z%ÁbÖ(0@B.±ŽÞŒ…(VT5àêØ ¦ŠÃ3Ãl‘Â_fäî,ãöô­62 †€ä\r€VËT\r`@TÊ8cæB6'”X ÒÇšYÃtÊJŒÂc Ä3GÊ\n ¨ÀZ\0@SÀÇ ƒ¤7OsèJÒ^”b4#‹v¬ôHOÀò	 Å°á8\0áC˜0±P9nGlŽ½¬g	«ÛÂ–˜Ëã¸^á×`ÞRc¢:`™(çÒSC45Ãl)a´bæpÁ<l.6àáÎ,®^äaÐ¡®Rºæ/åmŸaÑ¯ôÙ¡&(E«,°2 ¨¾lØ2ñË!éØ\rààµ…*»(níÎ~ø\"ª°aÌffj%¬:èŽÜí*Êü&¬ŽÖíÒ¶Ý¡,\"Í\n€¬ Æ ê\r²~\0g<Î¤rLR]\r]Ò‚.ObÊ<ÒÀ®Cò1\nÂk#6jò<ÒÑ-PÜh!%\nªÁê#lG\0	\0t	 š@¦\n`";break;}$ni=array();foreach(explode("\n",lzw_decompress($h))as$X)$ni[]=(strpos($X,"\t")?explode("\t",$X):$X);return$ni;}if(!$ni){$ni=get_translations($ca);$_SESSION["translations"]=$ni;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Sf=array_search("SQL",$b->operators);if($Sf!==false)unset($b->operators[$Sf]);}function
dsn($ic,$V,$H){try{parent::__construct($ic,$V,$H);}catch(Exception$_c){auth_error(h($_c->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($I,$xi=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$q=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$q];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$dc=array();class
Min_SQL{var$_conn;function
__construct($i){$this->_conn=$i;}function
select($R,$N,$Z,$jd,$of=array(),$A=1,$G=0,$cg=false){global$b,$z;$Ld=(count($jd)<count($N));$I=$b->selectQueryBuild($N,$Z,$jd,$of,$A,$G);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$A&&$jd&&$Ld&&$z=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($jd&&$Ld?"\nGROUP BY ".implode(", ",$jd):"").($of?"\nORDER BY ".implode(", ",$of):""),($A!=""?+$A:null),($G?$A*$G:0),"\n");$vh=microtime(true);$K=$this->_conn->query($I);if($cg)echo$b->selectQuery($I,format_time($vh));return$K;}function
delete($R,$lg,$A=0){$I="FROM ".table($R);return
queries("DELETE".($A?limit1($I,$lg):" $I$lg"));}function
update($R,$P,$lg,$A=0,$Zg="\n"){$Oi=array();foreach($P
as$_=>$X)$Oi[]="$_ = $X";$I=table($R)." SET$Zg".implode(",$Zg",$Oi);return
queries("UPDATE".($A?limit1($I,$lg):" $I$lg"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$ag){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$dc["sqlite"]="SQLite 3";$dc["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Vf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Pc){$this->_link=new
SQLite3($Pc);$Ri=$this->_link->version();$this->server_info=$Ri["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$q=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$q];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$f=$this->_offset++;$U=$this->_result->columnType($f);return(object)array("name"=>$this->_result->columnName($f),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Pc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Pc);}function
query($I,$xi=false){$Je=($xi?"unbufferedQuery":"query");$J=@$this->_link->$Je($I,SQLITE_BOTH,$p);$this->error="";if(!$J){$this->error=$p;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$q=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$q];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$_=>$X)$K[($_[0]=='"'?idf_unescape($_):$_)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$Mf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Mf\\.)?$Mf\$~",$D,$C)){$R=($C[3]!=""?$C[3]:idf_unescape($C[2]));$D=($C[5]!=""?$C[5]:idf_unescape($C[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Pc){$this->dsn(DRIVER.":$Pc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Pc){if(is_readable($Pc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Pc)?$Pc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Pc")." AS a")){parent::__construct($Pc);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ag){$Oi=array();foreach($M
as$P)$Oi[]="(".implode(", ",$P).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($M))).") VALUES\n".implode(",\n",$Oi));}}function
idf_escape($w){return'"'.str_replace('"','""',$w).'"';}function
table($w){return
idf_escape($w);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($I,$Z,$A,$E=0,$Zg=" "){return" $I$Z".($A!==null?$Zg."LIMIT $A".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){global$i;return($i->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($o,$pb){global$i;return$i->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($n){return
array();}function
table_status($D=""){global$i;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){$L["Oid"]=1;$L["Auto_increment"]="";$L["Rows"]=$i->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$i;return!$i->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$i;$K=array();$ag="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$D=$L["name"];$U=strtolower($L["type"]);$Ob=$L["dflt_value"];$K[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Ob,$C)?str_replace("''","'",$C[1]):($Ob=="NULL"?null:$Ob)),"null"=>!$L["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);if($L["pk"]){if($ag!="")$K[$ag]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$K[$D]["auto_increment"]=true;$ag=$D;}}$th=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$th,$we,PREG_SET_ORDER);foreach($we
as$C){$D=str_replace('""','"',preg_replace('~^"|"$~','',$C[1]));if($K[$D])$K[$D]["collation"]=trim($C[3],"'");}return$K;}function
indexes($R,$j=null){global$i;if(!is_object($j))$j=$i;$K=array();$th=$j->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$th,$C)){$K[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$C[1],$we,PREG_SET_ORDER);foreach($we
as$C){$K[""]["columns"][]=idf_unescape($C[2]).$C[4];$K[""]["descs"][]=(preg_match('~DESC~i',$C[5])?'1':null);}}if(!$K){foreach(fields($R)as$D=>$q){if($q["primary"])$K[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$uh=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$j);foreach(get_rows("PRAGMA index_list(".table($R).")",$j)as$L){$D=$L["name"];$x=array("type"=>($L["unique"]?"UNIQUE":"INDEX"));$x["lengths"]=array();$x["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$j)as$Lg){$x["columns"][]=$Lg["name"];$x["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$uh[$D],$wg)){preg_match_all('/("[^"]*+")+( DESC)?/',$wg[2],$we);foreach($we[2]as$_=>$X){if($X)$x["descs"][$_]='1';}}if(!$K[""]||$x["type"]!="UNIQUE"||$x["columns"]!=$K[""]["columns"]||$x["descs"]!=$K[""]["descs"]||!preg_match("~^sqlite_~",$D))$K[$D]=$x;}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$s=&$K[$L["id"]];if(!$s)$s=$L;$s["source"][]=$L["from"];$s["target"][]=$L["to"];}return$K;}function
view($D){global$i;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$i->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($o){return
false;}function
error(){global$i;return
h($i->error);}function
check_sqlite_name($D){global$i;$Ic="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ic)\$~",$D)){$i->error=lang(21,str_replace("|",", ",$Ic));return
false;}return
true;}function
create_database($o,$ob){global$i;if(file_exists($o)){$i->error=lang(22);return
false;}if(!check_sqlite_name($o))return
false;try{$B=new
Min_SQLite($o);}catch(Exception$_c){$i->error=$_c->getMessage();return
false;}$B->query('PRAGMA encoding = "UTF-8"');$B->query('CREATE TABLE adminer (i)');$B->query('DROP TABLE adminer');return
true;}function
drop_databases($n){global$i;$i->__construct(":memory:");foreach($n
as$o){if(!@unlink($o)){$i->error=lang(22);return
false;}}return
true;}function
rename_database($D,$ob){global$i;if(!check_sqlite_name($D))return
false;$i->__construct(":memory:");$i->error=lang(22);return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$D,$r,$Wc,$tb,$tc,$ob,$La,$Hf){$Ii=($R==""||$Wc);foreach($r
as$q){if($q[0]!=""||!$q[1]||$q[2]){$Ii=true;break;}}$c=array();$xf=array();foreach($r
as$q){if($q[1]){$c[]=($Ii?$q[1]:"ADD ".implode($q[1]));if($q[0]!="")$xf[$q[0]]=$q[1][0];}}if(!$Ii){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$D&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($R,$D,$c,$xf,$Wc))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($D));return
true;}function
recreate_table($R,$D,$r,$xf,$Wc,$y=array()){if($R!=""){if(!$r){foreach(fields($R)as$_=>$q){$r[]=process_field($q,$q);$xf[$_]=idf_escape($_);}}$bg=false;foreach($r
as$q){if($q[6])$bg=true;}$gc=array();foreach($y
as$_=>$X){if($X[2]=="DROP"){$gc[$X[1]]=true;unset($y[$_]);}}foreach(indexes($R)as$Vd=>$x){$g=array();foreach($x["columns"]as$_=>$f){if(!$xf[$f])continue
2;$g[]=$xf[$f].($x["descs"][$_]?" DESC":"");}if(!$gc[$Vd]){if($x["type"]!="PRIMARY"||!$bg)$y[]=array($x["type"],$Vd,$g);}}foreach($y
as$_=>$X){if($X[0]=="PRIMARY"){unset($y[$_]);$Wc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Vd=>$s){foreach($s["source"]as$_=>$f){if(!$xf[$f])continue
2;$s["source"][$_]=idf_unescape($xf[$f]);}if(!isset($Wc[" $Vd"]))$Wc[]=" ".format_foreign_key($s);}queries("BEGIN");}foreach($r
as$_=>$q)$r[$_]="  ".implode($q);$r=array_merge($r,array_filter($Wc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$D":$D)." (\n".implode(",\n",$r)."\n)"))return
false;if($R!=""){if($xf&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$xf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($xf)))." FROM ".table($R)))return
false;$ti=array();foreach(triggers($R)as$ri=>$ai){$qi=trigger($ri);$ti[]="CREATE TRIGGER ".idf_escape($ri)." ".implode(" ",$ai)." ON ".table($D)."\n$qi[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$y))return
false;foreach($ti
as$qi){if(!queries($qi))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$D,$g){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($R."_"))." ON ".table($R)." $g";}function
alter_indexes($R,$c){foreach($c
as$ag){if($ag[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Ti){return
apply_queries("DROP VIEW",$Ti);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Ti,$Qh){return
false;}function
trigger($D){global$i;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$w='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$si=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$w\\s*(".implode("|",$si["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($w))?\\s+ON\\s*$w\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$i->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$C);$Ye=$C[3];return
array("Timing"=>strtoupper($C[1]),"Event"=>strtoupper($C[2]).($Ye?" OF":""),"Of"=>($Ye[0]=='`'||$Ye[0]=='"'?idf_unescape($Ye):$Ye),"Trigger"=>$D,"Statement"=>$C[4],);}function
triggers($R){$K=array();$si=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$si["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$L["sql"],$C);$K[$L["name"]]=array($C[1],$C[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ROWID()");}function
explain($i,$I){return$i->query("EXPLAIN QUERY PLAN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Rg){return
true;}function
create_sql($R,$La){global$i;$K=$i->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$D=>$x){if($D=='')continue;$K.=";\n\n".index_sql($R,$x['type'],$D,"(".implode(", ",array_map('idf_escape',$x['columns'])).")");}return$K;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($m){}function
trigger_sql($R,$Ah){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$i;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$_)$K[$_]=$i->result("PRAGMA $_");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$mf){list($_,$X)=explode("=",$mf,2);$K[$_]=$X;}return$K;}function
convert_field($q){}function
unconvert_field($q,$K){return$K;}function
support($Lc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Lc);}$z="sqlite";$wi=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$_h=array_keys($wi);$Ci=array();$kf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$gd=array("hex","length","lower","round","unixepoch","upper");$ld=array("avg","count","count distinct","group_concat","max","min","sum");$lc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$dc["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Vf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($wc,$p){if(ini_bool("html_errors"))$p=html_entity_decode(strip_tags($p));$p=preg_replace('~^[^:]*: ~','',$p);$this->error=$p;}function
connect($O,$V,$H){global$b;$o=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($o!=""?addcslashes($o,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$o!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ri=pg_version($this->_link);$this->server_info=$Ri["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($m){global$b;if($m==$b->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($m,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$xi=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$q=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$q);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$f=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$f);$K->name=pg_field_name($this->_result,$f);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$f);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$H){global$b;$o=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($o!=""?addcslashes($o,"'\\"):"postgres")."'",$V,$H);return
true;}function
select_db($m){global$b;return($b->database()==$m);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ag){global$i;foreach($M
as$P){$Di=array();$Z=array();foreach($P
as$_=>$X){$Di[]="$_ = $X";if(isset($ag[idf_unescape($_)]))$Z[]="$_ = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Di)." WHERE ".implode(" AND ",$Z))&&$i->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")")))return
false;}return
true;}}function
idf_escape($w){return'"'.str_replace('"','""',$w).'"';}function
table($w){return
idf_escape($w);}function
connect(){global$b,$wi,$_h;$i=new
Min_DB;$l=$b->credentials();if($i->connect($l[0],$l[1],$l[2])){if($i->server_info>=9){$i->query("SET application_name = 'Adminer'");if($i->server_info>=9.2){$_h[lang(23)][]="json";$wi["json"]=4294967295;if($i->server_info>=9.4){$_h[lang(23)][]="jsonb";$wi["jsonb"]=4294967295;}}}return$i;}return$i->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($I,$Z,$A,$E=0,$Zg=" "){return" $I$Z".($A!==null?$Zg."LIMIT $A".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($o,$pb){global$i;return$i->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT user");}function
tables_list(){$I="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$I.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$I.="
ORDER BY 1";return
get_key_vals($I);}function
count_tables($n){return
array();}function
table_status($D=""){$K=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v')
".($D!=""?"AND relname = ".q($D):"ORDER BY c.oid"))as$L)$K[$L["Name"]]=$L;return($D!=""?$K[$D]:$K);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$K=array();$Ea=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$L["full_type"],$C);list(,$U,$ke,$L["length"],$ya,$Ga)=$C;$L["length"].=$Ga;$db=$U.$ya;if(isset($Ea[$db])){$L["type"]=$Ea[$db];$L["full_type"]=$L["type"].$ke.$Ga;}else{$L["type"]=$U;$L["full_type"]=$L["type"].$ke.$ya.$Ga;}$L["null"]=!$L["attnotnull"];$L["auto_increment"]=preg_match('~^nextval\\(~i',$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$L["default"],$C))$L["default"]=($C[1][0]=="'"?idf_unescape($C[1]):$C[1]).$C[2];$K[$L["field"]]=$L;}return$K;}function
indexes($R,$j=null){global$i;if(!is_object($j))$j=$i;$K=array();$Jh=$j->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$g=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Jh AND attnum > 0",$j);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $Jh AND ci.oid = i.indexrelid",$j)as$L){$yg=$L["relname"];$K[$yg]["type"]=($L["indispartial"]?"INDEX":($L["indisprimary"]?"PRIMARY":($L["indisunique"]?"UNIQUE":"INDEX")));$K[$yg]["columns"]=array();foreach(explode(" ",$L["indkey"])as$Ad)$K[$yg]["columns"][]=$g[$Ad];$K[$yg]["descs"]=array();foreach(explode(" ",$L["indoption"])as$Bd)$K[$yg]["descs"][]=($Bd&1?'1':null);$K[$yg]["lengths"]=array();}return$K;}function
foreign_keys($R){global$ff;$K=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$C)){$L['source']=array_map('trim',explode(',',$C[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$C[2],$ve)){$L['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ve[2]));$L['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ve[4]));}$L['target']=array_map('trim',explode(',',$C[3]));$L['on_delete']=(preg_match("~ON DELETE ($ff)~",$C[4],$ve)?$ve[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($ff)~",$C[4],$ve)?$ve[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($D){global$i;return
array("select"=>trim($i->result("SELECT pg_get_viewdef(".q($D).")")));}function
collations(){return
array();}function
information_schema($o){return($o=="information_schema");}function
error(){global$i;$K=h($i->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$C))$K=$C[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($C[3]).'})(.*)~','\\1<b>\\2</b>',$C[2]).$C[4];return
nl_br($K);}function
create_database($o,$ob){return
queries("CREATE DATABASE ".idf_escape($o).($ob?" ENCODING ".idf_escape($ob):""));}function
drop_databases($n){global$i;$i->close();return
apply_queries("DROP DATABASE",$n,'idf_escape');}function
rename_database($D,$ob){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($R,$D,$r,$Wc,$tb,$tc,$ob,$La,$Hf){$c=array();$kg=array();foreach($r
as$q){$f=idf_escape($q[0]);$X=$q[1];if(!$X)$c[]="DROP $f";else{$Ni=$X[5];unset($X[5]);if(isset($X[6])&&$q[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($q[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($f!=$X[0])$kg[]="ALTER TABLE ".table($R)." RENAME $f TO $X[0]";$c[]="ALTER $f TYPE$X[1]";if(!$X[6]){$c[]="ALTER $f ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $f ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($q[0]!=""||$Ni!="")$kg[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Ni!=""?substr($Ni,9):"''");}}$c=array_merge($c,$Wc);if($R=="")array_unshift($kg,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($kg,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$D)$kg[]="ALTER TABLE ".table($R)." RENAME TO ".table($D);if($R!=""||$tb!="")$kg[]="COMMENT ON TABLE ".table($D)." IS ".q($tb);if($La!=""){}foreach($kg
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$c){$k=array();$ec=array();$kg=array();foreach($c
as$X){if($X[0]!="INDEX")$k[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$ec[]=idf_escape($X[1]);else$kg[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($k)array_unshift($kg,"ALTER TABLE ".table($R).implode(",",$k));if($ec)array_unshift($kg,"DROP INDEX ".implode(", ",$ec));foreach($kg
as$I){if(!queries($I))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Ti){return
drop_tables($Ti);}function
drop_tables($T){foreach($T
as$R){$xh=table_status($R);if(!queries("DROP ".strtoupper($xh["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$Ti,$Qh){foreach(array_merge($T,$Ti)as$R){$xh=table_status($R);if(!queries("ALTER ".strtoupper($xh["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($Qh)))return
false;}return
true;}function
trigger($D,$R=null){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$M=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["action_timing"],$L["event_manipulation"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($i,$I){return$i->query("EXPLAIN $I");}function
found_rows($S,$Z){global$i;if(preg_match("~ rows=([0-9]+)~",$i->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$wg))return$wg[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$i;return$i->result("SELECT current_schema()");}function
set_schema($Pg){global$i,$wi,$_h;$K=$i->query("SET search_path TO ".idf_escape($Pg));foreach(types()as$U){if(!isset($wi[$U])){$wi[$U]=0;$_h[lang(24)][]=$U;}}return$K;}function
create_sql($R,$La){global$i;$K='';$Dg=array();$bh=array();$xh=table_status($R);$r=fields($R);$y=indexes($R);ksort($y);$Uc=foreign_keys($R);ksort($Uc);$ti=triggers($R);if(!$xh||empty($r))return
false;$K="CREATE TABLE ".idf_escape($xh['nspname']).".".idf_escape($xh['Name'])." (\n    ";foreach($r
as$Nc=>$q){$Ef=idf_escape($q['field']).' '.$q['full_type'].(is_null($q['default'])?"":" DEFAULT $q[default]").($q['attnotnull']?" NOT NULL":"");$Dg[]=$Ef;if(preg_match('~nextval\(\'([^\']+)\'\)~',$q['default'],$we)){$ah=$we[1];$sh=reset(get_rows("SELECT * FROM $ah"));$bh[]="CREATE SEQUENCE $ah INCREMENT $sh[increment_by] MINVALUE $sh[min_value] MAXVALUE $sh[max_value] START ".($La?$sh['last_value']:1)." CACHE $sh[cache_value];";}}if(!empty($bh))$K=implode("\n\n",$bh)."\n\n$K";foreach($y
as$zd=>$x){switch($x['type']){case'UNIQUE':$Dg[]="CONSTRAINT ".idf_escape($zd)." UNIQUE (".implode(', ',array_map('idf_escape',$x['columns'])).")";break;case'PRIMARY':$Dg[]="CONSTRAINT ".idf_escape($zd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$x['columns'])).")";break;}}foreach($Uc
as$Tc=>$Sc)$Dg[]="CONSTRAINT ".idf_escape($Tc)." $Sc[definition] ".($Sc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$K.=implode(",\n    ",$Dg)."\n) WITH (oids = ".($xh['Oid']?'true':'false').");";foreach($y
as$zd=>$x){if($x['type']=='INDEX')$K.="\n\nCREATE INDEX ".idf_escape($zd)." ON ".idf_escape($xh['nspname']).".".idf_escape($xh['Name'])." USING btree (".implode(', ',array_map('idf_escape',$x['columns'])).");";}if($xh['Comment'])$K.="\n\nCOMMENT ON TABLE ".idf_escape($xh['nspname']).".".idf_escape($xh['Name'])." IS ".q($xh['Comment']).";";foreach($r
as$Nc=>$q){if($q['comment'])$K.="\n\nCOMMENT ON COLUMN ".idf_escape($xh['nspname']).".".idf_escape($xh['Name']).".".idf_escape($Nc)." IS ".q($q['comment']).";";}foreach($ti
as$pi=>$oi){$qi=trigger($pi,$xh['Name']);$K.="\n\nCREATE TRIGGER ".idf_escape($qi['Trigger'])." $qi[Timing] $qi[Events] ON ".idf_escape($xh["nspname"]).".".idf_escape($xh['Name'])." $qi[Type] $qi[Statement];";}return
rtrim($K,';');}function
trigger_sql($R,$Ah){$K="";return
false;}function
use_sql($m){return"\connect ".idf_escape($m);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$i;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($i->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($q){}function
unconvert_field($q,$K){return$K;}function
support($Lc){global$i;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($i->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Lc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$i;return$i->result("SHOW max_connections");}$z="pgsql";$wi=array();$_h=array();foreach(array(lang(25)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(26)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(23)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$_=>$X){$wi+=$X;$_h[$_]=array_keys($X);}$Ci=array();$kf=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$gd=array("char_length","lower","round","to_hex","to_timestamp","upper");$ld=array("avg","count","count distinct","max","min","sum");$lc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$dc["oracle"]="Oracle";if(isset($_GET["oracle"])){$Vf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($wc,$p){if(ini_bool("html_errors"))$p=html_entity_decode(strip_tags($p));$p=preg_replace('~^[^:]*: ~','',$p);$this->error=$p;}function
connect($O,$V,$H){$this->_link=@oci_new_connect($V,$H,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$p=oci_error();$this->error=$p["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($m){return
true;}function
query($I,$xi=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$p=oci_error($this->_link);$this->errno=$p["code"];$this->error=$p["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$q=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$q);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$_=>$X){if(is_a($X,'OCI-Lob'))$L[$_]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$f=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$f);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$f);$K->charsetnr=(preg_match("~raw|blob|bfile~",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$H){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$H);return
true;}function
select_db($m){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($w){return'"'.str_replace('"','""',$w).'"';}function
table($w){return
idf_escape($w);}function
connect(){global$b;$i=new
Min_DB;$l=$b->credentials();if($i->connect($l[0],$l[1],$l[2]))return$i;return$i->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$A,$E=0,$Zg=" "){return($E?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($A+$E).") WHERE rnum > $E":($A!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($A+$E):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($o,$pb){global$i;return$i->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($n){return
array();}function
table_status($D=""){$K=array();$Ug=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $Ug":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $Ug":"")."
ORDER BY 1")as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$ke="$L[DATA_PRECISION],$L[DATA_SCALE]";if($ke==",")$ke=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($ke?"($ke)":""),"type"=>strtolower($U),"length"=>$ke,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$j=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$j)as$L){$zd=$L["INDEX_NAME"];$K[$zd]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$zd]["columns"][]=$L["COLUMN_NAME"];$K[$zd]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);$K[$zd]["descs"][]=($L["DESCEND"]?'1':null);}return$K;}function
view($D){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($M);}function
collations(){return
array();}function
information_schema($o){return
false;}function
error(){global$i;return
h($i->error);}function
explain($i,$I){$i->query("EXPLAIN PLAN FOR $I");return$i->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$D,$r,$Wc,$tb,$tc,$ob,$La,$Hf){$c=$ec=array();foreach($r
as$q){$X=$q[1];if($X&&$q[0]!=""&&idf_escape($q[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($q[0])." TO $X[0]");if($X)$c[]=($R!=""?($q[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$ec[]=idf_escape($q[0]);}if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$ec||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$ec).")"))&&($R==$D||queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)));}function
foreign_keys($R){$K=array();$I="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($I)as$L)$K[$L['NAME']]=array("db"=>$L['DEST_DB'],"table"=>$L['DEST_TABLE'],"source"=>array($L['SRC_COLUMN']),"target"=>array($L['DEST_COLUMN']),"on_delete"=>$L['ON_DELETE'],"on_update"=>null,);return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ti){return
apply_queries("DROP VIEW",$Ti);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$i;return$i->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Rg){global$i;return$i->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Rg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($q){}function
unconvert_field($q,$K){return$K;}function
support($Lc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Lc);}$z="oracle";$wi=array();$_h=array();foreach(array(lang(25)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(26)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(23)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$_=>$X){$wi+=$X;$_h[$_]=array_keys($X);}$Ci=array();$kf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$gd=array("length","lower","round","upper");$ld=array("avg","count","count distinct","max","min","sum");$lc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$dc["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Vf=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$p){$this->errno=$p["code"];$this->error.="$p[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$H){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$H,"CharacterSet"=>"UTF-8"));if($this->_link){$Cd=sqlsrv_server_info($this->_link);$this->server_info=$Cd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($m){return$this->query("USE ".idf_escape($m));}function
query($I,$xi=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(!$J)return
false;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($I,$q=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$q];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$_=>$X){if(is_a($X,'DateTime'))$L[$_]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$q=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$q["Name"];$K->orgname=$q["Name"];$K->type=($q["Type"]==1?254:0);return$K;}function
seek($E){for($u=0;$u<$E;$u++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$H){$this->_link=@mssql_connect($O,$V,$H);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($m){return
mssql_select_db($m);}function
query($I,$xi=false){$J=@mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($I,$q=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$q);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($E){mssql_data_seek($this->_result,$E);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($O,$V,$H){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);return
true;}function
select_db($m){return$this->query("USE ".idf_escape($m));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ag){foreach($M
as$P){$Di=array();$Z=array();foreach($P
as$_=>$X){$Di[]="$_ = $X";if(isset($ag[idf_unescape($_)]))$Z[]="$_ = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Di)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($w){return"[".str_replace("]","]]",$w)."]";}function
table($w){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($w);}function
connect(){global$b;$i=new
Min_DB;$l=$b->credentials();if($i->connect($l[0],$l[1],$l[2]))return$i;return$i->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($I,$Z,$A,$E=0,$Zg=" "){return($A!==null?" TOP (".($A+$E).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($o,$pb){global$i;return$i->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($o));}function
engines(){return
array();}function
logged_user(){global$i;return$i->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($n){global$i;$K=array();foreach($n
as$o){$i->select_db($o);$K[$o]=$i->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($D=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$ke=(preg_match("~char|binary~",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($ke?"($ke)":""),"type"=>$U,"length"=>$ke,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$j=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$j)as$L){$D=$L["name"];$K[$D]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$D]["lengths"]=array();$K[$D]["columns"][$L["key_ordinal"]]=$L["column_name"];$K[$D]["descs"][$L["key_ordinal"]]=($L["is_descending_key"]?'1':null);}return$K;}function
view($D){global$i;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$i->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$ob)$K[preg_replace('~_.*~','',$ob)][]=$ob;return$K;}function
information_schema($o){return
false;}function
error(){global$i;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$i->error)));}function
create_database($o,$ob){return
queries("CREATE DATABASE ".idf_escape($o).(preg_match('~^[a-z0-9_]+$~i',$ob)?" COLLATE $ob":""));}function
drop_databases($n){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$n)));}function
rename_database($D,$ob){if(preg_match('~^[a-z0-9_]+$~i',$ob))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $ob");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$D,$r,$Wc,$tb,$tc,$ob,$La,$Hf){$c=array();foreach($r
as$q){$f=idf_escape($q[0]);$X=$q[1];if(!$X)$c["DROP"][]=" COLUMN $f";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($q[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Wc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($f!=$X[0])queries("EXEC sp_rename ".q(table($R).".$f").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$D)queries("EXEC sp_rename ".q(table($R)).", ".q($D));if($Wc)$c[""]=$Wc;foreach($c
as$_=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $_".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$x=array();$ec=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$ec[]=idf_escape($X[1]);else$x[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$x||queries("DROP INDEX ".implode(", ",$x)))&&(!$ec||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$ec)));}function
last_id(){global$i;return$i->result("SELECT SCOPE_IDENTITY()");}function
explain($i,$I){$i->query("SET SHOWPLAN_ALL ON");$K=$i->query($I);$i->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$s=&$K[$L["FK_NAME"]];$s["table"]=$L["PKTABLE_NAME"];$s["source"][]=$L["FKCOLUMN_NAME"];$s["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ti){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ti)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Ti,$Qh){return
apply_queries("ALTER SCHEMA ".idf_escape($Qh)." TRANSFER",array_merge($T,$Ti));}function
trigger($D){if($D=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$i;if($_GET["ns"]!="")return$_GET["ns"];return$i->result("SELECT SCHEMA_NAME()");}function
set_schema($Pg){return
true;}function
use_sql($m){return"USE ".idf_escape($m);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($q){}function
unconvert_field($q,$K){return$K;}function
support($Lc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Lc);}$z="mssql";$wi=array();$_h=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(26)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(23)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$_=>$X){$wi+=$X;$_h[$_]=array_keys($X);}$Ci=array();$kf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$gd=array("len","lower","round","upper");$ld=array("avg","count","count distinct","max","min","sum");$lc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$dc['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Vf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=ibase_connect($O,$V,$H);if($this->_link){$Gi=explode(':',$O);$this->service_link=ibase_service_attach($Gi[0],$V,$H);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($m){return($m=="domain");}function
query($I,$xi=false){$J=ibase_query($I,$this->_link);if(!$J){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($J===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$q=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;$L=$J->fetch_row();return$L[$q];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$q=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$q['name'],'orgname'=>$q['name'],'type'=>$q['type'],'charsetnr'=>$q['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($w){return'"'.str_replace('"','""',$w).'"';}function
table($w){return
idf_escape($w);}function
connect(){global$b;$i=new
Min_DB;$l=$b->credentials();if($i->connect($l[0],$l[1],$l[2]))return$i;return$i->error;}function
get_databases($Vc){return
array("domain");}function
limit($I,$Z,$A,$E=0,$Zg=" "){$K='';$K.=($A!==null?$Zg."FIRST $A".($E?" SKIP $E":""):"");$K.=" $I$Z";return$K;}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($o,$pb){}function
engines(){return
array();}function
logged_user(){global$b;$l=$b->credentials();return$l[1];}function
tables_list(){global$i;$I='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$J=ibase_query($i->_link,$I);$K=array();while($L=ibase_fetch_assoc($J))$K[$L['RDB$RELATION_NAME']]='table';ksort($K);return$K;}function
count_tables($n){return
array();}function
table_status($D="",$Kc=false){global$i;$K=array();$Hb=tables_list();foreach($Hb
as$x=>$X){$x=trim($x);$K[$x]=array('Name'=>$x,'Engine'=>'standard',);if($D==$x)return$K[$x];}return$K;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$i;$K=array();$I='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$J=ibase_query($i->_link,$I);while($L=ibase_fetch_assoc($J))$K[trim($L['FIELD_NAME'])]=array("field"=>trim($L["FIELD_NAME"]),"full_type"=>trim($L["FIELD_TYPE"]),"type"=>trim($L["FIELD_SUB_TYPE"]),"default"=>trim($L['FIELD_DEFAULT_VALUE']),"null"=>(trim($L["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($L["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($L["FIELD_DESCRIPTION"]),);return$K;}function
indexes($R,$j=null){$K=array();return$K;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($o){return
false;}function
error(){global$i;return
h($i->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Pg){return
true;}function
support($Lc){return
preg_match("~^(columns|sql|status|table)$~",$Lc);}$z="firebird";$kf=array("=");$gd=array();$ld=array();$lc=array();}$dc["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Vf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($m){return($m=="domain");}function
query($I,$xi=false){$Bf=array('SelectExpression'=>$I,'ConsistentRead'=>'true');if($this->next)$Bf['NextToken']=$this->next;$J=sdb_request_all('Select','Item',$Bf,$this->timeout);if($J===false)return$J;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$I)){$Eh=0;foreach($J
as$Pd)$Eh+=$Pd->Attribute->Value;$J=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Eh,))));}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($J){foreach($J
as$Pd){$L=array();if($Pd->Name!='')$L['itemName()']=(string)$Pd->Name;foreach($Pd->Attribute
as$Ja){$D=$this->_processValue($Ja->Name);$Y=$this->_processValue($Ja->Value);if(isset($L[$D])){$L[$D]=(array)$L[$D];$L[$D][]=$Y;}else$L[$D]=$Y;}$this->_rows[]=$L;foreach($L
as$_=>$X){if(!isset($this->_rows[0][$_]))$this->_rows[0][$_]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($oc){return(is_object($oc)&&$oc['encoding']=='base64'?base64_decode($oc):(string)$oc);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$_=>$X)$K[$_]=$L[$_];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Wd=array_keys($this->_rows[0]);return(object)array('name'=>$Wd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$ag="itemName()";function
_chunkRequest($wd,$xa,$Bf,$Dc=array()){global$i;foreach(array_chunk($wd,25)as$hb){$Cf=$Bf;foreach($hb
as$u=>$v){$Cf["Item.$u.ItemName"]=$v;foreach($Dc
as$_=>$X)$Cf["Item.$u.$_"]=$X;}if(!sdb_request($xa,$Cf))return
false;}$i->affected_rows=count($wd);return
true;}function
_extractIds($R,$lg,$A){$K=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$lg,$we))$K=array_map('idf_unescape',$we[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$lg.($A?" LIMIT 1":"")))as$Pd)$K[]=$Pd->Name;}return$K;}function
select($R,$N,$Z,$jd,$of=array(),$A=1,$G=0,$cg=false){global$i;$i->next=$_GET["next"];$K=parent::select($R,$N,$Z,$jd,$of,$A,$G,$cg);$i->next=0;return$K;}function
delete($R,$lg,$A=0){return$this->_chunkRequest($this->_extractIds($R,$lg,$A),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$P,$lg,$A=0,$Zg="\n"){$Pb=array();$Gd=array();$u=0;$wd=$this->_extractIds($R,$lg,$A);$v=idf_unescape($P["`itemName()`"]);unset($P["`itemName()`"]);foreach($P
as$_=>$X){$_=idf_unescape($_);if($X=="NULL"||($v!=""&&array($v)!=$wd))$Pb["Attribute.".count($Pb).".Name"]=$_;if($X!="NULL"){foreach((array)$X
as$Sd=>$W){$Gd["Attribute.$u.Name"]=$_;$Gd["Attribute.$u.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Sd)$Gd["Attribute.$u.Replace"]="true";$u++;}}}$Bf=array('DomainName'=>$R);return(!$Gd||$this->_chunkRequest(($v!=""?array($v):$wd),'BatchPutAttributes',$Bf,$Gd))&&(!$Pb||$this->_chunkRequest($wd,'BatchDeleteAttributes',$Bf,$Pb));}function
insert($R,$P){$Bf=array("DomainName"=>$R);$u=0;foreach($P
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$Bf["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$Bf["Attribute.$u.Name"]=$D;$Bf["Attribute.$u.Value"]=(is_array($Y)?$X:idf_unescape($Y));$u++;}}}}return
sdb_request('PutAttributes',$Bf);}function
insertUpdate($R,$M,$ag){foreach($M
as$P){if(!$this->update($R,$P,"WHERE `itemName()` = ".q($P["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Lc){return
preg_match('~sql~',$Lc);}function
logged_user(){global$b;$l=$b->credentials();return$l[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($o,$pb){}function
tables_list(){global$i;$K=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$K[(string)$R]='table';if($i->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$K;}function
table_status($D="",$Kc=false){$K=array();foreach(($D!=""?array($D=>true):tables_list())as$R=>$U){$L=array("Name"=>$R,"Auto_increment"=>"");if(!$Kc){$Ie=sdb_request('DomainMetadata',array('DomainName'=>$R));if($Ie){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$_=>$X)$L[$_]=(string)$Ie->$X;}}if($D!="")return$L;$K[$R]=$L;}return$K;}function
explain($i,$I){}function
error(){global$i;return
h($i->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$j=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($w){return
idf_escape($w);}function
idf_escape($w){return"`".str_replace("`","``",$w)."`";}function
limit($I,$Z,$A,$E=0,$Zg=" "){return" $I$Z".($A!==null?$Zg."LIMIT $A":"");}function
unconvert_field($q,$K){return$K;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$r,$Wc,$tb,$tc,$ob,$La,$Hf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($n){foreach($n
as$o)return
array($o=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Da,$Hb,$_,$pg=false){$Ua=64;if(strlen($_)>$Ua)$_=pack("H*",$Da($_));$_=str_pad($_,$Ua,"\0");$Td=$_^str_repeat("\x36",$Ua);$Ud=$_^str_repeat("\x5C",$Ua);$K=$Da($Ud.pack("H*",$Da($Td.$Hb)));if($pg)$K=pack("H*",$K);return$K;}function
sdb_request($xa,$Bf=array()){global$b,$i;list($td,$Bf['AWSAccessKeyId'],$Vg)=$b->credentials();$Bf['Action']=$xa;$Bf['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$Bf['Version']='2009-04-15';$Bf['SignatureVersion']=2;$Bf['SignatureMethod']='HmacSHA1';ksort($Bf);$I='';foreach($Bf
as$_=>$X)$I.='&'.rawurlencode($_).'='.rawurlencode($X);$I=str_replace('%7E','~',substr($I,1));$I.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$td)."\n/\n$I",$Vg,true)));@ini_set('track_errors',1);$Oc=@file_get_contents((preg_match('~^https?://~',$td)?$td:"http://$td"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$I,'ignore_errors'=>1,))));if(!$Oc){$i->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Zi=simplexml_load_string($Oc);if(!$Zi){$p=libxml_get_last_error();$i->error=$p->message;return
false;}if($Zi->Errors){$p=$Zi->Errors->Error;$i->error="$p->Message ($p->Code)";return
false;}$i->error='';$Ph=$xa."Result";return($Zi->$Ph?$Zi->$Ph:true);}function
sdb_request_all($xa,$Ph,$Bf=array(),$Zh=0){$K=array();$vh=($Zh?microtime(true):0);$A=(preg_match('~LIMIT\s+(\d+)\s*$~i',$Bf['SelectExpression'],$C)?$C[1]:0);do{$Zi=sdb_request($xa,$Bf);if(!$Zi)break;foreach($Zi->$Ph
as$oc)$K[]=$oc;if($A&&count($K)>=$A){$_GET["next"]=$Zi->NextToken;break;}if($Zh&&microtime(true)-$vh>$Zh)return
false;$Bf['NextToken']=$Zi->NextToken;if($A)$Bf['SelectExpression']=preg_replace('~\d+\s*$~',$A-count($K),$Bf['SelectExpression']);}while($Zi->NextToken);return$K;}$z="simpledb";$kf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$gd=array();$ld=array("count");$lc=array(array("json"));}$dc["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Vf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($O,$V,$H){global$b;$o=$b->database();$F=array();if($V!=""){$F["username"]=$V;$F["password"]=$H;}if($o!="")$F["db"]=$o;try{$this->_link=@new
MongoClient("mongodb://$O",$F);return
true;}catch(Exception$_c){$this->error=$_c->getMessage();return
false;}}function
query($I){return
false;}function
select_db($m){try{$this->_db=$this->_link->selectDB($m);return
true;}catch(Exception$_c){$this->error=$_c->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($J){foreach($J
as$Pd){$L=array();foreach($Pd
as$_=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$_]=63;$L[$_]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$L;foreach($L
as$_=>$X){if(!isset($this->_rows[0][$_]))$this->_rows[0][$_]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$_=>$X)$K[$_]=$L[$_];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Wd=array_keys($this->_rows[0]);$D=$Wd[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}}class
Min_Driver
extends
Min_SQL{public$ag="_id";function
select($R,$N,$Z,$jd,$of=array(),$A=1,$G=0,$cg=false){$N=($N==array("*")?array():array_fill_keys($N,true));$ph=array();foreach($of
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Cb);$ph[$X]=($Cb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$N)->sort($ph)->limit(+$A)->skip($G*$A));}function
insert($R,$P){try{$K=$this->_conn->_db->selectCollection($R)->insert($P);$this->_conn->errno=$K['code'];$this->_conn->error=$K['err'];$this->_conn->last_id=$P['_id'];return!$K['err'];}catch(Exception$_c){$this->_conn->error=$_c->getMessage();return
false;}}}function
connect(){global$b;$i=new
Min_DB;$l=$b->credentials();if($i->connect($l[0],$l[1],$l[2]))return$i;return$i->error;}function
error(){global$i;return
h($i->error);}function
logged_user(){global$b;$l=$b->credentials();return$l[1];}function
get_databases($Vc){global$i;$K=array();$Mb=$i->_link->listDBs();foreach($Mb['databases']as$o)$K[]=$o['name'];return$K;}function
collations(){return
array();}function
db_collation($o,$pb){}function
count_tables($n){global$i;$K=array();foreach($n
as$o)$K[$o]=count($i->_link->selectDB($o)->getCollectionNames(true));return$K;}function
tables_list(){global$i;return
array_fill_keys($i->_db->getCollectionNames(true),'table');}function
table_status($D="",$Kc=false){$K=array();foreach(tables_list()as$R=>$U){$K[$R]=array("Name"=>$R);if($D==$R)return$K[$R];}return$K;}function
information_schema(){}function
is_view($S){}function
drop_databases($n){global$i;foreach($n
as$o){$Ag=$i->_link->selectDB($o)->drop();if(!$Ag['ok'])return
false;}return
true;}function
indexes($R,$j=null){global$i;$K=array();foreach($i->_db->selectCollection($R)->getIndexInfo()as$x){$Sb=array();foreach($x["key"]as$f=>$U)$Sb[]=($U==-1?'1':null);$K[$x["name"]]=array("type"=>($x["name"]=="_id_"?"PRIMARY":($x["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($x["key"]),"lengths"=>array(),"descs"=>$Sb,);}return$K;}function
fields($R){return
fields_from_edit();}function
convert_field($q){}function
unconvert_field($q,$K){return$K;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$i;return$i->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$D,$r,$Wc,$tb,$tc,$ob,$La,$Hf){global$i;if($R==""){$i->_db->createCollection($D);return
true;}}function
drop_tables($T){global$i;foreach($T
as$R){$Ag=$i->_db->selectCollection($R)->drop();if(!$Ag['ok'])return
false;}return
true;}function
truncate_tables($T){global$i;foreach($T
as$R){$Ag=$i->_db->selectCollection($R)->remove();if(!$Ag['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$i;foreach($c
as$X){list($U,$D,$P)=$X;if($P=="DROP")$K=$i->_db->command(array("deleteIndexes"=>$R,"index"=>$D));else{$g=array();foreach($P
as$f){$f=preg_replace('~ DESC$~','',$f,1,$Cb);$g[$f]=($Cb?-1:1);}$K=$i->_db->selectCollection($R)->ensureIndex($g,array("unique"=>($U=="UNIQUE"),"name"=>$D,));}if($K['errmsg']){$i->error=$K['errmsg'];return
false;}}return
true;}function
last_id(){global$i;return$i->last_id;}function
table($w){return$w;}function
idf_escape($w){return$w;}function
support($Lc){return
preg_match("~database|indexes~",$Lc);}$z="mongo";$kf=array("=");$gd=array();$ld=array();$lc=array(array("json"));}$dc["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Vf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($Kf,$yb=array(),$Je='GET'){@ini_set('track_errors',1);$Oc=@file_get_contents($this->_url.'/'.ltrim($Kf,'/'),false,stream_context_create(array('http'=>array('method'=>$Je,'content'=>json_encode($yb),'ignore_errors'=>1,))));if(!$Oc){$this->error=$php_errormsg;return$Oc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Oc;return
false;}$K=json_decode($Oc,true);if($K===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$xb=get_defined_constants(true);foreach($xb['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$K;}function
query($Kf,$yb=array(),$Je='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($Kf,'/'),$yb,$Je);}function
connect($O,$V,$H){preg_match('~^(https?://)?(.*)~',$O,$C);$this->_url=($C[1]?$C[1]:"http://")."$V:$H@$C[2]/";$K=$this->query('');if($K)$this->server_info=$K['version']['number'];return(bool)$K;}function
select_db($m){$this->_db=$m;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($M){$this->num_rows=count($this->_rows);$this->_rows=$M;reset($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);next($this->_rows);return$K;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$jd,$of=array(),$A=1,$G=0,$cg=false){global$b;$Hb=array();$I="$R/_search";if($N!=array("*"))$Hb["fields"]=$N;if($of){$ph=array();foreach($of
as$mb){$mb=preg_replace('~ DESC$~','',$mb,1,$Cb);$ph[]=($Cb?array($mb=>"desc"):$mb);}$Hb["sort"]=$ph;}if($A){$Hb["size"]=+$A;if($G)$Hb["from"]=($G*$A);}foreach($Z
as$X){list($mb,$if,$X)=explode(" ",$X,3);if($mb=="_id")$Hb["query"]["ids"]["values"][]=$X;elseif($mb.$X!=""){$Th=array("term"=>array(($mb!=""?$mb:"_all")=>$X));if($if=="=")$Hb["query"]["filtered"]["filter"]["and"][]=$Th;else$Hb["query"]["filtered"]["query"]["bool"]["must"][]=$Th;}}if($Hb["query"]&&!$Hb["query"]["filtered"]["query"]&&!$Hb["query"]["ids"])$Hb["query"]["filtered"]["query"]=array("match_all"=>array());$vh=microtime(true);$Ug=$this->_conn->query($I,$Hb);if($cg)echo$b->selectQuery("$I: ".print_r($Hb,true),format_time($vh));if(!$Ug)return
false;$K=array();foreach($Ug['hits']['hits']as$sd){$L=array();if($N==array("*"))$L["_id"]=$sd["_id"];$r=$sd['_source'];if($N!=array("*")){$r=array();foreach($N
as$_)$r[$_]=$sd['fields'][$_];}foreach($r
as$_=>$X){if($Hb["fields"])$X=$X[0];$L[$_]=(is_array($X)?json_encode($X):$X);}$K[]=$L;}return
new
Min_Result($K);}}function
connect(){global$b;$i=new
Min_DB;$l=$b->credentials();if($i->connect($l[0],$l[1],$l[2]))return$i;return$i->error;}function
support($Lc){return
preg_match("~database|table|columns~",$Lc);}function
logged_user(){global$b;$l=$b->credentials();return$l[1];}function
get_databases(){global$i;$K=$i->rootQuery('_aliases');if($K){$K=array_keys($K);sort($K,SORT_STRING);}return$K;}function
collations(){return
array();}function
db_collation($o,$pb){}function
engines(){return
array();}function
count_tables($n){global$i;$K=$i->query('_mapping');if($K)$K=array_map('count',$K);return$K;}function
tables_list(){global$i;$K=$i->query('_mapping');if($K)$K=array_fill_keys(array_keys($K[$i->_db]["mappings"]),'table');return$K;}function
table_status($D="",$Kc=false){global$i;$Ug=$i->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$K=array();if($Ug){foreach($Ug["facets"]["count_by_type"]["terms"]as$R){$K[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($D!=""&&$D==$R["term"])return$K[$D];}}return$K;}function
error(){global$i;return
h($i->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$j=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$i;$J=$i->query("$R/_mapping");$K=array();if($J){$re=$J[$R]['properties'];if(!$re)$re=$J[$i->_db]['mappings'][$R]['properties'];if($re){foreach($re
as$D=>$q){$K[$D]=array("field"=>$D,"full_type"=>$q["type"],"type"=>$q["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($q["properties"]){unset($K[$D]["privileges"]["insert"]);unset($K[$D]["privileges"]["update"]);}}}}return$K;}function
foreign_keys($R){return
array();}function
table($w){return$w;}function
idf_escape($w){return$w;}function
convert_field($q){}function
unconvert_field($q,$K){return$K;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($o){global$i;return$i->rootQuery(urlencode($o),array(),'PUT');}function
drop_databases($n){global$i;return$i->rootQuery(urlencode(implode(',',$n)),array(),'DELETE');}function
drop_tables($T){global$i;$K=true;foreach($T
as$R)$K=$K&&$i->query(urlencode($R),array(),'DELETE');return$K;}$z="elastic";$kf=array("=","query");$gd=array();$ld=array();$lc=array(array("json"));}$dc=array("server"=>"MySQL")+$dc;if(!defined("DRIVER")){$Vf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($O="",$V="",$H="",$m=null,$Rf=null,$oh=null){mysqli_report(MYSQLI_REPORT_OFF);list($td,$Rf)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$td:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$H!=""?$H:ini_get("mysqli.default_pw")),$m,(is_numeric($Rf)?$Rf:ini_get("mysqli.default_port")),(!is_numeric($Rf)?$Rf:$oh));return$K;}function
set_charset($bb){if(parent::set_charset($bb))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $bb");}function
result($I,$q=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$q];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($bb){if(function_exists('mysql_set_charset')){if(mysql_set_charset($bb,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $bb");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($m){return
mysql_select_db($m,$this->_link);}function
query($I,$xi=false){$J=@($xi?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$q=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$q);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$H){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);return
true;}function
set_charset($bb){$this->query("SET NAMES $bb");}function
select_db($m){return$this->query("USE ".idf_escape($m));}function
query($I,$xi=false){$this->setAttribute(1000,!$xi);return
parent::query($I,$xi);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$ag){$g=array_keys(reset($M));$Wf="INSERT INTO ".table($R)." (".implode(", ",$g).") VALUES\n";$Oi=array();foreach($g
as$_)$Oi[$_]="$_ = VALUES($_)";$Dh="\nON DUPLICATE KEY UPDATE ".implode(", ",$Oi);$Oi=array();$ke=0;foreach($M
as$P){$Y="(".implode(", ",$P).")";if($Oi&&(strlen($Wf)+$ke+strlen($Y)+strlen($Dh)>1e6)){if(!queries($Wf.implode(",\n",$Oi).$Dh))return
false;$Oi=array();$ke=0;}$Oi[]=$Y;$ke+=strlen($Y)+2;}return
queries($Wf.implode(",\n",$Oi).$Dh);}}function
idf_escape($w){return"`".str_replace("`","``",$w)."`";}function
table($w){return
idf_escape($w);}function
connect(){global$b,$wi,$_h;$i=new
Min_DB;$l=$b->credentials();if($i->connect($l[0],$l[1],$l[2])){$i->set_charset(charset($i));$i->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($i->server_info,'5.7.8')>=0){$_h[lang(23)][]="json";$wi["json"]=4294967295;}return$i;}$K=$i->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Mg=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Mg;return$K;}function
get_databases($Vc){global$i;$K=get_session("dbs");if($K===null){$I=($i->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Vc?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$A,$E=0,$Zg=" "){return" $I$Z".($A!==null?$Zg."LIMIT $A".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($o,$pb){global$i;$K=null;$k=$i->result("SHOW CREATE DATABASE ".idf_escape($o),1);if(preg_match('~ COLLATE ([^ ]+)~',$k,$C))$K=$C[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$k,$C))$K=$pb[$C[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals($i->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($n){$K=array();foreach($n
as$o)$K[$o]=count(get_vals("SHOW TABLES IN ".idf_escape($o)));return$K;}function
table_status($D="",$Kc=false){global$i;$K=array();foreach(get_rows($Kc&&$i->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$i;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($i->server_info,'5.6')>=0);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$C);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$C[1],"length"=>$C[2],"unsigned"=>ltrim($C[3].$C[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$C[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$C)?$C[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$j=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$j)as$L){$D=$L["Key_name"];$K[$D]["type"]=($D=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?($L["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$K[$D]["columns"][]=$L["Column_name"];$K[$D]["lengths"][]=($L["Index_type"]=="SPATIAL"?null:$L["Sub_part"]);$K[$D]["descs"][]=null;}return$K;}function
foreign_keys($R){global$i,$ff;static$Mf='`(?:[^`]|``)+`';$K=array();$Db=$i->result("SHOW CREATE TABLE ".table($R),1);if($Db){preg_match_all("~CONSTRAINT ($Mf) FOREIGN KEY ?\\(((?:$Mf,? ?)+)\\) REFERENCES ($Mf)(?:\\.($Mf))? \\(((?:$Mf,? ?)+)\\)(?: ON DELETE ($ff))?(?: ON UPDATE ($ff))?~",$Db,$we,PREG_SET_ORDER);foreach($we
as$C){preg_match_all("~$Mf~",$C[2],$qh);preg_match_all("~$Mf~",$C[5],$Qh);$K[idf_unescape($C[1])]=array("db"=>idf_unescape($C[4]!=""?$C[3]:$C[4]),"table"=>idf_unescape($C[4]!=""?$C[4]:$C[3]),"source"=>array_map('idf_unescape',$qh[0]),"target"=>array_map('idf_unescape',$Qh[0]),"on_delete"=>($C[6]?$C[6]:"RESTRICT"),"on_update"=>($C[7]?$C[7]:"RESTRICT"),);}}return$K;}function
view($D){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$_=>$X)asort($K[$_]);return$K;}function
information_schema($o){global$i;return($i->server_info>=5&&$o=="information_schema")||($i->server_info>=5.5&&$o=="performance_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
create_database($o,$ob){return
queries("CREATE DATABASE ".idf_escape($o).($ob?" COLLATE ".q($ob):""));}function
drop_databases($n){$K=apply_queries("DROP DATABASE",$n,'idf_escape');restart_session();set_session("dbs",null);return$K;}function
rename_database($D,$ob){$K=false;if(create_database($D,$ob)){$zg=array();foreach(tables_list()as$R=>$U)$zg[]=table($R)." TO ".idf_escape($D).".".table($R);$K=(!$zg||queries("RENAME TABLE ".implode(", ",$zg)));if($K)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$K;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$x){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$x["columns"],true)){$Ma="";break;}if($x["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($R,$D,$r,$Wc,$tb,$tc,$ob,$La,$Hf){$c=array();foreach($r
as$q)$c[]=($q[1]?($R!=""?($q[0]!=""?"CHANGE ".idf_escape($q[0]):"ADD"):" ")." ".implode($q[1]).($R!=""?$q[2]:""):"DROP ".idf_escape($q[0]));$c=array_merge($c,$Wc);$xh=($tb!==null?" COMMENT=".q($tb):"").($tc?" ENGINE=".q($tc):"").($ob?" COLLATE ".q($ob):"").($La!=""?" AUTO_INCREMENT=$La":"");if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)$xh$Hf");if($R!=$D)$c[]="RENAME TO ".table($D);if($xh)$c[]=ltrim($xh);return($c||$Hf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$Hf):true);}function
alter_indexes($R,$c){foreach($c
as$_=>$X)$c[$_]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ti){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ti)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Ti,$Qh){$zg=array();foreach(array_merge($T,$Ti)as$R)$zg[]=table($R)." TO ".idf_escape($Qh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$zg));}function
copy_tables($T,$Ti,$Qh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$D=($Qh==DB?table("copy_$R"):idf_escape($Qh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Ti
as$R){$D=($Qh==DB?table("copy_$R"):idf_escape($Qh).".".table($R));$Si=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $Si[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$i,$vc,$Ed,$wi;$Ea=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$vi="((".implode("|",array_merge(array_keys($wi),$Ea)).")\\b(?:\\s*\\(((?:[^'\")]|$vc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Mf="\\s*(".($U=="FUNCTION"?"":$Ed).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$vi";$k=$i->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$Mf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$vi\\s+":"")."(.*)~is",$k,$C);$r=array();preg_match_all("~$Mf\\s*,?~is",$C[1],$we,PREG_SET_ORDER);foreach($we
as$Af){$D=str_replace("``","`",$Af[2]).$Af[3];$r[]=array("field"=>$D,"type"=>strtolower($Af[5]),"length"=>preg_replace_callback("~$vc~s",'normalize_enum',$Af[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Af[8] $Af[7]"))),"null"=>1,"full_type"=>$Af[4],"inout"=>strtoupper($Af[1]),"collation"=>strtolower($Af[9]),);}if($U!="FUNCTION")return
array("fields"=>$r,"definition"=>$C[11]);return
array("fields"=>$r,"returns"=>array("type"=>$C[12],"length"=>$C[13],"unsigned"=>$C[15],"collation"=>$C[16]),"definition"=>$C[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$I){return$i->query("EXPLAIN ".($i->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Pg){return
true;}function
create_sql($R,$La){global$i;$K=$i->result("SHOW CREATE TABLE ".table($R),1);if(!$La)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($m){return"USE ".idf_escape($m);}function
trigger_sql($R,$Ah){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Ah=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
replication_status($U){return
get_rows("SHOW $U STATUS");}function
convert_field($q){if(preg_match("~binary~",$q["type"]))return"HEX(".idf_escape($q["field"]).")";if($q["type"]=="bit")return"BIN(".idf_escape($q["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$q["type"]))return"AsWKT(".idf_escape($q["field"]).")";}function
unconvert_field($q,$K){if(preg_match("~binary~",$q["type"]))$K="UNHEX($K)";if($q["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$q["type"]))$K="GeomFromText($K)";return$K;}function
support($Lc){global$i;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|routine|trigger|view":""):"")."~",$Lc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$i;return$i->result("SELECT @@max_connections");}$z="sql";$wi=array();$_h=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(26)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(23)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$_=>$X){$wi+=$X;$_h[$_]=array_keys($X);}$Ci=array("unsigned","zerofill","unsigned zerofill");$kf=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$gd=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$ld=array("avg","count","count distinct","group_concat","max","min","sum");$lc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.3.1";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($k=false){return
password_file($k);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Vc=true){return
get_databases($Vc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$dc;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$dc,DRIVER),'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($pe,$H){global$z;if($z=="sqlite")return
lang(38,'<code>login()</code>');return
true;}function
tableName($Hh){return
h($Hh["Name"]);}function
fieldName($q,$of=0){return'<span title="'.h($q["full_type"]).'">'.h($q["field"]).'</span>';}function
selectLinks($Hh,$P=""){echo'<p class="links">';$ne=array("select"=>lang(39));if(support("table")||support("indexes"))$ne["table"]=lang(40);if(support("table")){if(is_view($Hh))$ne["view"]=lang(41);else$ne["create"]=lang(42);}if($P!==null)$ne["edit"]=lang(43);foreach($ne
as$_=>$X)echo" <a href='".h(ME)."$_=".urlencode($Hh["Name"]).($_=="edit"?$P:"")."'".bold(isset($_GET[$_])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Gh){return
array();}function
backwardKeysPrint($Oa,$L){}function
selectQuery($I,$Xh){global$z;return"<p><code class='jush-$z'>".h(str_replace("\n"," ",$I))."</code> <span class='time'>($Xh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($I)."'>".lang(10)."</a>":"")."</p>";}function
sqlCommandQuery($I){return
shorten_utf8(trim($I),1000);}function
rowDescription($R){return"";}function
rowDescriptions($M,$Yc){return$M;}function
selectLink($X,$q){}function
selectVal($X,$B,$q,$wf){$K=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$q["type"])&&!preg_match("~var~",$q["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$q["type"])&&!is_utf8($X))$K="<i>".lang(44,strlen($wf))."</i>";if(preg_match('~json~',$q["type"]))$K="<code class='jush-js'>$K</code>";return($B?"<a href='".h($B)."'".(is_url($B)?" rel='noreferrer'":"").">$K</a>":$K);}function
editVal($X,$q){return$X;}function
tableStructurePrint($r){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(45)."<td>".lang(46).(support("comment")?"<td>".lang(47):"")."</thead>\n";foreach($r
as$q){echo"<tr".odd()."><th>".h($q["field"]),"<td><span title='".h($q["collation"])."'>".h($q["full_type"])."</span>",($q["null"]?" <i>NULL</i>":""),($q["auto_increment"]?" <i>".lang(48)."</i>":""),(isset($q["default"])?" <span title='".lang(49)."'>[<b>".h($q["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($q["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($y){echo"<table cellspacing='0'>\n";foreach($y
as$D=>$x){ksort($x["columns"]);$cg=array();foreach($x["columns"]as$_=>$X)$cg[]="<i>".h($X)."</i>".($x["lengths"][$_]?"(".$x["lengths"][$_].")":"").($x["descs"][$_]?" DESC":"");echo"<tr title='".h($D)."'><th>$x[type]<td>".implode(", ",$cg)."\n";}echo"</table>\n";}function
selectColumnsPrint($N,$g){global$gd,$ld;print_fieldset("select",lang(50),$N);$u=0;$N[""]=array();foreach($N
as$_=>$X){$X=$_GET["columns"][$_];$f=select_input(" name='columns[$u][col]' onchange='".($_!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$g,$X["col"]);echo"<div>".($gd||$ld?"<select name='columns[$u][fun]' onchange='helpClose();".($_!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(51)=>$gd,lang(52)=>$ld)),$X["fun"])."</select>"."($f)":$f)."</div>\n";$u++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$g,$y){print_fieldset("search",lang(53),$Z);foreach($y
as$u=>$x){if($x["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$x["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$u]' value='".h($_GET["fulltext"][$u])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$u]",1,isset($_GET["boolean"][$u]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Za="this.nextSibling.onchange();";for($u=0;$u<=count($_GET["where"]);$u++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$u][col]' onchange='$Za'",$g,$X["col"],"(".lang(54).")"),html_select("where[$u][op]",$this->operators,$X["op"],$Za),"<input type='search' name='where[$u][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($of,$g,$y){print_fieldset("sort",lang(55),$of);$u=0;foreach((array)$_GET["order"]as$_=>$X){if($X!=""){echo"<div>".select_input(" name='order[$u]' onchange='selectFieldChange(this.form);'",$g,$X),checkbox("desc[$u]",1,isset($_GET["desc"][$_]),lang(56))."</div>\n";$u++;}}echo"<div>".select_input(" name='order[$u]' onchange='selectAddRow(this);'",$g),checkbox("desc[$u]",1,false,lang(56))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($A){echo"<fieldset><legend>".lang(57)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($A)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Wh){if($Wh!==null){echo"<fieldset><legend>".lang(58)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Wh)."'>","</div></fieldset>\n";}}function
selectActionPrint($y){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='submit' value='".lang(50)."'>"," <span id='noindex' title='".lang(60)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$g=array();foreach($y
as$x){$Gb=reset($x["columns"]);if($x["type"]!="FULLTEXT"&&$Gb)$g[$Gb]=1;}$g[""]=1;foreach($g
as$_=>$X)json_row($_);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($qc,$g){}function
selectColumnsProcess($g,$y){global$gd,$ld;$N=array();$jd=array();foreach((array)$_GET["columns"]as$_=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$gd)||in_array($X["fun"],$ld)))){$N[$_]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$ld))$jd[]=$N[$_];}}return
array($N,$jd);}function
selectSearchProcess($r,$y){global$i,$z;$K=array();foreach($y
as$u=>$x){if($x["type"]=="FULLTEXT"&&$_GET["fulltext"][$u]!="")$K[]="MATCH (".implode(", ",array_map('idf_escape',$x["columns"])).") AGAINST (".q($_GET["fulltext"][$u]).(isset($_GET["boolean"][$u])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$vb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$yd=process_length($X["val"]);$vb.=" ".($yd!=""?$yd:"(NULL)");}elseif($X["op"]=="SQL")$vb=" $X[val]";elseif($X["op"]=="LIKE %%")$vb=" LIKE ".$this->processInput($r[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$vb=" ILIKE ".$this->processInput($r[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$vb.=" ".$this->processInput($r[$X["col"]],$X["val"]);if($X["col"]!="")$K[]=idf_escape($X["col"]).$vb;else{$qb=array();foreach($r
as$D=>$q){$Nd=preg_match('~char|text|enum|set~',$q["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$q["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Nd)){$D=idf_escape($D);$qb[]=($z=="sql"&&$Nd&&!preg_match("~^utf8_~",$q["collation"])?"CONVERT($D USING ".charset($i).")":$D);}}$K[]=($qb?"(".implode("$vb OR ",$qb)."$vb)":"0");}}}return$K;}function
selectOrderProcess($r,$y){$K=array();foreach((array)$_GET["order"]as$_=>$X){if($X!="")$K[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$_])?" DESC":"");}return$K;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Yc){return
false;}function
selectQueryBuild($N,$Z,$jd,$of,$A,$G){return"";}function
messageQuery($I,$Xh){global$z;restart_session();$qd=&get_session("queries");$v="sql-".count($qd[$_GET["db"]]);if(strlen($I)>1e6)$I=preg_replace('~[\x80-\xFF]+$~','',substr($I,0,1e6))."\n...";$qd[$_GET["db"]][]=array($I,time(),$Xh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$v' onclick=\"return !toggle('$v');\">".lang(61)."</a>"."<div id='$v' class='hidden'><pre><code class='jush-$z'>".shorten_utf8($I,1000).'</code></pre>'.($Xh?" <span class='time'>($Xh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($qd[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($q){global$lc;$K=($q["null"]?"NULL/":"");foreach($lc
as$_=>$gd){if(!$_||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($gd
as$Mf=>$X){if(!$Mf||preg_match("~$Mf~",$q["type"]))$K.="/$X";}if($_&&!preg_match('~set|blob|bytea|raw|file~',$q["type"]))$K.="/SQL";}}if($q["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$K=lang(48);return
explode("/",$K);}function
editInput($R,$q,$e,$Y){if($q["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$e value='-1' checked><i>".lang(8)."</i></label> ":"").($q["null"]?"<label><input type='radio'$e value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$e,$q,$Y,0);return"";}function
processInput($q,$Y,$t=""){if($t=="SQL")return$Y;$D=$q["field"];$K=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$t))$K="$t()";elseif(preg_match('~^current_(date|timestamp)$~',$t))$K=$t;elseif(preg_match('~^([+-]|\\|\\|)$~',$t))$K=idf_escape($D)." $t $K";elseif(preg_match('~^[+-] interval$~',$t))$K=idf_escape($D)." $t ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$K);elseif(preg_match('~^(addtime|subtime|concat)$~',$t))$K="$t(".idf_escape($D).", $K)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$t))$K="$t($K)";return
unconvert_field($q,$K);}function
dumpOutput(){$K=array('text'=>lang(62),'file'=>lang(63));if(function_exists('gzencode'))$K['gz']='gzip';return$K;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($o){}function
dumpTable($R,$Ah,$Od=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Ah)dump_csv(array_keys(fields($R)));}else{if($Od==2){$r=array();foreach(fields($R)as$D=>$q)$r[]=idf_escape($D)." $q[full_type]";$k="CREATE TABLE ".table($R)." (".implode(", ",$r).")";}else$k=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($k);if($Ah&&$k){if($Ah=="DROP+CREATE"||$Od==1)echo"DROP ".($Od==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Od==1)$k=remove_definer($k);echo"$k;\n\n";}}}function
dumpData($R,$Ah,$I){global$i,$z;$ye=($z=="sqlite"?0:1048576);if($Ah){if($_POST["format"]=="sql"){if($Ah=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$r=fields($R);}$J=$i->query($I,1);if($J){$Gd="";$Xa="";$Wd=array();$Dh="";$Mc=($R!=''?'fetch_assoc':'fetch_row');while($L=$J->$Mc()){if(!$Wd){$Oi=array();foreach($L
as$X){$q=$J->fetch_field();$Wd[]=$q->name;$_=idf_escape($q->name);$Oi[]="$_ = VALUES($_)";}$Dh=($Ah=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Oi):"").";\n";}if($_POST["format"]!="sql"){if($Ah=="table"){dump_csv($Wd);$Ah="INSERT";}dump_csv($L);}else{if(!$Gd)$Gd="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Wd)).") VALUES";foreach($L
as$_=>$X){$q=$r[$_];$L[$_]=($X!==null?unconvert_field($q,preg_match('~(^|[^o])int|float|double|decimal~',$q["type"])&&$X!=''?$X:q($X)):"NULL");}$Mg=($ye?"\n":" ")."(".implode(",\t",$L).")";if(!$Xa)$Xa=$Gd.$Mg;elseif(strlen($Xa)+4+strlen($Mg)+strlen($Dh)<$ye)$Xa.=",$Mg";else{echo$Xa.$Dh;$Xa=$Gd.$Mg;}}}if($Xa)echo$Xa.$Dh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$i->error)."\n";}}function
dumpFilename($vd){return
friendly_url($vd!=""?$vd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($vd,$Me=false){$zf=$_POST["output"];$Gc=(preg_match('~sql~',$_POST["format"])?"sql":($Me?"tar":"csv"));header("Content-Type: ".($zf=="gz"?"application/x-gzip":($Gc=="tar"?"application/x-tar":($Gc=="sql"||$zf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($zf=="gz")ob_start('ob_gzencode',1e6);return$Gc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(64)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(65):lang(66))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(67)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(68)."</a>\n":"");return
true;}function
navigation($Le){global$ia,$z,$dc,$i;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Le=="auth"){$Rc=true;foreach((array)$_SESSION["pwds"]as$Qi=>$eh){foreach($eh
as$O=>$Li){foreach($Li
as$V=>$H){if($H!==null){if($Rc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Rc=false;}$Mb=$_SESSION["db"][$Qi][$O][$V];foreach(($Mb?array_keys($Mb):array(""))as$o)echo"<a href='".h(auth_url($Qi,$O,$V,$o))."'>($dc[$Qi]) ".h($V.($O!=""?"@$O":"").($o!=""?" - $o":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$Le&&DB!=""){$i->select_db(DB);$T=table_status('',true);}echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.3.1",'"></script>
';if(support("sql")){echo'<script type="text/javascript">
';if($T){$ne=array();foreach($T
as$R=>$U)$ne[]=preg_quote($R,'/');echo"var jushLinks = { $z: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$ne).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$z;\n";}echo'bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($Le);if(DB==""||!$Le){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(61)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(69)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(70)."</a>\n";}if($_GET["ns"]!==""&&!$Le&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(71)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Le){global$b,$i;$n=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Kb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(72)."'>DB</span>: ".($n?"<select name='db'$Kb>".optionlist(array(""=>"")+$n,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($n?" class='hidden'":"").">\n";if($Le!="db"&&DB!=""&&$i->select_db(DB)){if(support("scheme")){echo"<br>".lang(73).": <select name='ns'$Kb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$xh){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(74)."</a> ";$D=$this->tableName($xh);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($xh)?"view":"structure"))." title='".lang(40)."'>$D</a>":"<span>$D</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$kf;function
page_header($bi,$p="",$Wa=array(),$ci=""){global$ca,$ia,$b,$dc,$z;page_headers();if(is_ajax()&&$p){page_messages($p);exit;}$di=$bi.($ci!=""?": $ci":"");$ei=strip_tags($di.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(75),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$ei,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.3.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.3.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(75),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(76)),'\';
</script>

<div id="help" class="jush-',$z,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Wa!==null){$B=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($B?$B:".").'">'.$dc[DRIVER].'</a> &raquo; ';$B=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(32));if($Wa===false)echo"$O\n";else{echo"<a href='".($B?h($B):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($B."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$_=>$X){$Rb=(is_array($X)?$X[1]:h($X));if($Rb!="")echo"<a href='".h(ME."$_=").urlencode(is_array($X)?$X[0]:$X)."'>$Rb</a> &raquo; ";}}echo"$bi\n";}}echo"<h2>$di</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($p);$n=&get_session("dbs");if(DB!=""&&$n&&!in_array(DB,$n,true))$n=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($p){$Fi=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$He=$_SESSION["messages"][$Fi];if($He){echo"<div class='message'>".implode("</div>\n<div class='message'>",$He)."</div>\n";unset($_SESSION["messages"][$Fi]);}if($p)echo"<div class='error'>$p</div>\n";}function
page_footer($Le=""){global$b,$ii;echo'</div>

';switch_lang();if($Le!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(77),'" id="logout">
<input type="hidden" name="token" value="',$ii,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Le);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($Oe){while($Oe>=2147483648)$Oe-=4294967296;while($Oe<=-2147483649)$Oe+=4294967296;return(int)$Oe;}function
long2str($W,$Vi){$Mg='';foreach($W
as$X)$Mg.=pack('V',$X);if($Vi)return
substr($Mg,0,end($W));return$Mg;}function
str2long($Mg,$Vi){$W=array_values(unpack('V*',str_pad($Mg,4*ceil(strlen($Mg)/4),"\0")));if($Vi)$W[]=strlen($Mg);return$W;}function
xxtea_mx($bj,$aj,$Eh,$Sd){return
int32((($bj>>5&0x7FFFFFF)^$aj<<2)+(($aj>>3&0x1FFFFFFF)^$bj<<4))^int32(($Eh^$aj)+($Sd^$bj));}function
encrypt_string($zh,$_){if($zh=="")return"";$_=array_values(unpack("V*",pack("H*",md5($_))));$W=str2long($zh,true);$Oe=count($W)-1;$bj=$W[$Oe];$aj=$W[0];$jg=floor(6+52/($Oe+1));$Eh=0;while($jg-->0){$Eh=int32($Eh+0x9E3779B9);$kc=$Eh>>2&3;for($_f=0;$_f<$Oe;$_f++){$aj=$W[$_f+1];$Ne=xxtea_mx($bj,$aj,$Eh,$_[$_f&3^$kc]);$bj=int32($W[$_f]+$Ne);$W[$_f]=$bj;}$aj=$W[0];$Ne=xxtea_mx($bj,$aj,$Eh,$_[$_f&3^$kc]);$bj=int32($W[$Oe]+$Ne);$W[$Oe]=$bj;}return
long2str($W,false);}function
decrypt_string($zh,$_){if($zh=="")return"";if(!$_)return
false;$_=array_values(unpack("V*",pack("H*",md5($_))));$W=str2long($zh,false);$Oe=count($W)-1;$bj=$W[$Oe];$aj=$W[0];$jg=floor(6+52/($Oe+1));$Eh=int32($jg*0x9E3779B9);while($Eh){$kc=$Eh>>2&3;for($_f=$Oe;$_f>0;$_f--){$bj=$W[$_f-1];$Ne=xxtea_mx($bj,$aj,$Eh,$_[$_f&3^$kc]);$aj=int32($W[$_f]-$Ne);$W[$_f]=$aj;}$bj=$W[$Oe];$Ne=xxtea_mx($bj,$aj,$Eh,$_[$_f&3^$kc]);$aj=int32($W[0]-$Ne);$W[0]=$aj;$Eh=int32($Eh-0x9E3779B9);}return
long2str($W,true);}$i='';$pd=$_SESSION["token"];if(!$pd)$_SESSION["token"]=rand(1,1e6);$ii=get_token();$Nf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($_)=explode(":",$X);$Nf[$_]=$X;}}function
add_invalid_login(){global$b;$Pc=get_temp_dir()."/adminer.invalid";$ed=@fopen($Pc,"r+");if(!$ed){$ed=@fopen($Pc,"w");if(!$ed)return;}flock($ed,LOCK_EX);$Jd=unserialize(stream_get_contents($ed));$Xh=time();if($Jd){foreach($Jd
as$Kd=>$X){if($X[0]<$Xh)unset($Jd[$Kd]);}}$Id=&$Jd[$b->bruteForceKey()];if(!$Id)$Id=array($Xh+30*60,0);$Id[1]++;$ch=serialize($Jd);rewind($ed);fwrite($ed,$ch);ftruncate($ed,strlen($ch));flock($ed,LOCK_UN);fclose($ed);}$Ka=$_POST["auth"];if($Ka){$Jd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Id=$Jd[$b->bruteForceKey()];$Ue=($Id[1]>30?$Id[0]-time():0);if($Ue>0)auth_error(lang(78,ceil($Ue/60)));session_regenerate_id();$Qi=$Ka["driver"];$O=$Ka["server"];$V=$Ka["username"];$H=(string)$Ka["password"];$o=$Ka["db"];set_password($Qi,$O,$V,$H);$_SESSION["db"][$Qi][$O][$V][$o]=true;if($Ka["permanent"]){$_=base64_encode($Qi)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($o);$dg=$b->permanentLogin(true);$Nf[$_]="$_:".base64_encode($dg?encrypt_string($H,$dg):"");cookie("adminer_permanent",implode(" ",$Nf));}if(count($_POST)==1||DRIVER!=$Qi||SERVER!=$O||$_GET["username"]!==$V||DB!=$o)redirect(auth_url($Qi,$O,$V,$o));}elseif($_POST["logout"]){if($pd&&!verify_token()){page_header(lang(77),lang(79));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$_)set_session($_,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(80));}}elseif($Nf&&!$_SESSION["pwds"]){session_regenerate_id();$dg=$b->permanentLogin();foreach($Nf
as$_=>$X){list(,$ib)=explode(":",$X);list($Qi,$O,$V,$o)=array_map('base64_decode',explode("-",$_));set_password($Qi,$O,$V,decrypt_string(base64_decode($ib),$dg));$_SESSION["db"][$Qi][$O][$V][$o]=true;}}function
unset_permanent(){global$Nf;foreach($Nf
as$_=>$X){list($Qi,$O,$V,$o)=array_map('base64_decode',explode("-",$_));if($Qi==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$o==DB)unset($Nf[$_]);}cookie("adminer_permanent",implode(" ",$Nf));}function
auth_error($p){global$b,$pd;$fh=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$fh]||$_GET[$fh])&&!$pd)$p=lang(81);else{add_invalid_login();$H=get_password();if($H!==null){if($H===false)$p.='<br>'.lang(82,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$fh]&&$_GET[$fh]&&ini_bool("session.use_only_cookies"))$p=lang(83);$Bf=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$Bf["lifetime"]);page_header(lang(36),$p,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(84),lang(85,implode(", ",$Vf)),false);page_footer("auth");exit;}$i=connect();}$cc=new
Min_Driver($i);if(!is_object($i)||($pe=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($i)?h($i):(is_string($pe)?$pe:lang(86))));if($Ka&&$_POST["token"])$_POST["token"]=$ii;$p='';if($_POST){if(!verify_token()){$Dd="max_input_vars";$Be=ini_get($Dd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$_){$X=ini_get($_);if($X&&(!$Be||$X<$Be)){$Dd=$_;$Be=$X;}}}$p=(!$_POST["token"]&&$Be?lang(87,"'$Dd'"):lang(79).' '.lang(88));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$p=lang(89,"'post_max_size'");if(isset($_GET["sql"]))$p.=' '.lang(90);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($J,$j=null,$rf=array(),$A=0){global$z;$ne=array();$y=array();$g=array();$Ta=array();$wi=array();$K=array();odd('');for($u=0;(!$A||$u<$A)&&($L=$J->fetch_row());$u++){if(!$u){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Qd=0;$Qd<count($L);$Qd++){$q=$J->fetch_field();$D=$q->name;$qf=$q->orgtable;$pf=$q->orgname;$K[$q->table]=$qf;if($rf&&$z=="sql")$ne[$Qd]=($D=="table"?"table=":($D=="possible_keys"?"indexes=":null));elseif($qf!=""){if(!isset($y[$qf])){$y[$qf]=array();foreach(indexes($qf,$j)as$x){if($x["type"]=="PRIMARY"){$y[$qf]=array_flip($x["columns"]);break;}}$g[$qf]=$y[$qf];}if(isset($g[$qf][$pf])){unset($g[$qf][$pf]);$y[$qf][$pf]=$Qd;$ne[$Qd]=$qf;}}if($q->charsetnr==63)$Ta[$Qd]=true;$wi[$Qd]=$q->type;echo"<th".($qf!=""||$q->name!=$pf?" title='".h(($qf!=""?"$qf.":"").$pf)."'":"").">".h($D).($rf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($D))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($L
as$_=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$_]&&!is_utf8($X))$X="<i>".lang(44,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($wi[$_]==254)$X="<code>$X</code>";}if(isset($ne[$_])&&!$g[$ne[$_]]){if($rf&&$z=="sql"){$R=$L[array_search("table=",$ne)];$B=$ne[$_].urlencode($rf[$R]!=""?$rf[$R]:$R);}else{$B="edit=".urlencode($ne[$_]);foreach($y[$ne[$_]]as$mb=>$Qd)$B.="&where".urlencode("[".bracket_escape($mb)."]")."=".urlencode($L[$Qd]);}$X="<a href='".h(ME.$B)."'>$X</a>";}echo"<td>$X";}}echo($u?"</table>":"<p class='message'>".lang(12))."\n";return$K;}function
referencable_primary($Yg){$K=array();foreach(table_status('',true)as$Ih=>$R){if($Ih!=$Yg&&fk_support($R)){foreach(fields($Ih)as$q){if($q["primary"]){if($K[$Ih]){unset($K[$Ih]);break;}$K[$Ih]=$q;}}}}return$K;}function
textarea($D,$Y,$M=10,$qb=80){global$z;echo"<textarea name='$D' rows='$M' cols='$qb' class='sqlarea jush-$z' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($_,$q,$pb,$ad=array()){global$_h,$wi,$Ci,$ff;$U=$q["type"];echo'<td><select name="',h($_),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($wi[$U])&&!isset($ad[$U]))array_unshift($_h,$U);if($ad)$_h[lang(91)]=$ad;echo
optionlist($_h,$U),'</select>
<td><input name="',h($_),'[length]" value="',h($q["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$q["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';echo"<select name='".h($_)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(92).')'.optionlist($pb,$q["collation"]).'</select>',($Ci?"<select name='".h($_)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Ci,$q["unsigned"]).'</select>':''),(isset($q['on_update'])?"<select name='".h($_)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(93).")","CURRENT_TIMESTAMP"),$q["on_update"]).'</select>':''),($ad?"<select name='".h($_)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(94).")".optionlist(explode("|",$ff),$q["on_delete"])."</select> ":" ");}function
process_length($ke){global$vc;return(preg_match("~^\\s*\\(?\\s*$vc(?:\\s*,\\s*$vc)*+\\s*\\)?\\s*\$~",$ke)&&preg_match_all("~$vc~",$ke,$we)?"(".implode(",",$we[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$ke)));}function
process_type($q,$nb="COLLATE"){global$Ci;return" $q[type]".process_length($q["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$q["type"])&&in_array($q["unsigned"],$Ci)?" $q[unsigned]":"").(preg_match('~char|text|enum|set~',$q["type"])&&$q["collation"]?" $nb ".q($q["collation"]):"");}function
process_field($q,$ui){global$z;$Ob=$q["default"];return
array(idf_escape(trim($q["field"])),process_type($ui),($q["null"]?" NULL":" NOT NULL"),(isset($Ob)?" DEFAULT ".((preg_match('~time~',$q["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Ob))||($z=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Ob))||($q["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Ob))||($z=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Ob))?$Ob:q($Ob)):""),(preg_match('~timestamp|datetime~',$q["type"])&&$q["on_update"]?" ON UPDATE $q[on_update]":""),(support("comment")&&$q["comment"]!=""?" COMMENT ".q($q["comment"]):""),($q["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$_=>$X){if(preg_match("~$_|$X~",$U))return" class='$_'";}}function
edit_fields($r,$pb,$U="TABLE",$ad=array(),$ub=false){global$i,$Ed;$r=array_values($r);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?lang(95):lang(96)),'<td id="label-type">',lang(46),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td id="label-length">',lang(97),'<td>',lang(98);if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(48),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(49),(support("comment")?"<td id='label-comment'".($ub?"":" class='hidden'").">".lang(47):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($r))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".lang(99)."'>",'<script type="text/javascript">row_count = ',count($r),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($r
as$u=>$q){$u++;$sf=$q[($_POST?"orig":"field")];$Wb=(isset($_POST["add"][$u-1])||(isset($q["field"])&&!$_POST["drop_col"][$u]))&&(support("drop_col")||$sf=="");echo'<tr',($Wb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$u][inout]",explode("|",$Ed),$q["inout"]):""),'<th>';if($Wb){echo'<input name="fields[',$u,'][field]" value="',h($q["field"]),'" onchange="editingNameChange(this);',($q["field"]!=""||count($r)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'<input type="hidden" name="fields[',$u,'][orig]" value="',h($sf),'">
';edit_type("fields[$u]",$q,$pb,$ad);if($U=="TABLE"){echo'<td>',checkbox("fields[$u][null]",1,$q["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$u,'"';if($q["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php
echo
checkbox("fields[$u][has_default]",1,$q["has_default"],"","","","label-default"),'<input name="fields[',$u,'][default]" value="',h($q["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
',(support("comment")?"<td".($ub?"":" class='hidden'")."><input name='fields[$u][comment]' value='".h($q["comment"])."' maxlength='".($i->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$u]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".lang(99)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$u]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.3.1' alt='^' title='".lang(100)."' onclick='return !editingMoveRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='down[$u]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.3.1' alt='v' title='".lang(101)."' onclick='return !editingMoveRow(this, 0);'>&nbsp;":""),($sf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$u]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.1' alt='x' title='".lang(102)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$r){$E=0;if($_POST["up"]){$ee=0;foreach($r
as$_=>$q){if(key($_POST["up"])==$_){unset($r[$_]);array_splice($r,$ee,0,array($q));break;}if(isset($q["field"]))$ee=$E;$E++;}}elseif($_POST["down"]){$cd=false;foreach($r
as$_=>$q){if(isset($q["field"])&&$cd){unset($r[key($_POST["down"])]);array_splice($r,$E,0,array($cd));break;}if(key($_POST["down"])==$_)$cd=$q;$E++;}}elseif($_POST["add"]){$r=array_values($r);array_splice($r,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($C){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($C[0][0].$C[0][0],$C[0][0],substr($C[0],1,-1))),'\\'))."'";}function
grant($hd,$fg,$g,$ef){if(!$fg)return
true;if($fg==array("ALL PRIVILEGES","GRANT OPTION"))return($hd=="GRANT"?queries("$hd ALL PRIVILEGES$ef WITH GRANT OPTION"):queries("$hd ALL PRIVILEGES$ef")&&queries("$hd GRANT OPTION$ef"));return
queries("$hd ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$g, ",$fg).$g).$ef);}function
drop_create($ec,$k,$fc,$Uh,$hc,$oe,$Ge,$Ee,$Fe,$bf,$Re){if($_POST["drop"])query_redirect($ec,$oe,$Ge);elseif($bf=="")query_redirect($k,$oe,$Fe);elseif($bf!=$Re){$Eb=queries($k);queries_redirect($oe,$Ee,$Eb&&queries($ec));if($Eb)queries($fc);}else
queries_redirect($oe,$Ee,queries($Uh)&&queries($hc)&&queries($ec)&&queries($k));}function
create_trigger($ef,$L){global$z;$ai=" $L[Timing] $L[Event]".($L["Event"]=="UPDATE OF"?" ".idf_escape($L["Of"]):"");return"CREATE TRIGGER ".idf_escape($L["Trigger"]).($z=="mssql"?$ef.$ai:$ai.$ef).rtrim(" $L[Type]\n$L[Statement]",";").";";}function
create_routine($Hg,$L){global$Ed;$P=array();$r=(array)$L["fields"];ksort($r);foreach($r
as$q){if($q["field"]!="")$P[]=(preg_match("~^($Ed)\$~",$q["inout"])?"$q[inout] ":"").idf_escape($q["field"]).process_type($q,"CHARACTER SET");}return"CREATE $Hg ".idf_escape(trim($L["name"]))." (".implode(", ",$P).")".(isset($_GET["function"])?" RETURNS".process_type($L["returns"],"CHARACTER SET"):"").($L["language"]?" LANGUAGE $L[language]":"").rtrim("\n$L[definition]",";").";";}function
remove_definer($I){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$I);}function
format_foreign_key($s){global$ff;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$s["source"])).") REFERENCES ".table($s["table"])." (".implode(", ",array_map('idf_escape',$s["target"])).")".(preg_match("~^($ff)\$~",$s["on_delete"])?" ON DELETE $s[on_delete]":"").(preg_match("~^($ff)\$~",$s["on_update"])?" ON UPDATE $s[on_update]":"");}function
tar_file($Pc,$fi){$K=pack("a100a8a8a8a12a12",$Pc,644,0,0,decoct($fi->size),decoct(time()));$gb=8*32;for($u=0;$u<strlen($K);$u++)$gb+=ord($K[$u]);$K.=sprintf("%06o",$gb)."\0 ";echo$K,str_repeat("\0",512-strlen($K));$fi->send();echo
str_repeat("\0",511-($fi->size+511)%512);}function
ini_bytes($Dd){$X=ini_get($Dd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($Lf){global$z,$i;$Hi=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($i->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($Lf[$z]?"<a href='$Hi[$z]$Lf[$z]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($o){global$i;if(!$i->select_db($o))return"?";$K=0;foreach(table_status()as$S)$K+=$S["Data_length"]+$S["Index_length"];return
format_number($K);}function
set_utf8mb4($k){global$i;static$P=false;if(!$P&&preg_match('~\butf8mb4~i',$k)){$P=true;echo"SET NAMES ".charset($i).";\n\n";}}function
connect_error(){global$b,$i,$ii,$p,$dc;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(103),true);}else{if($_POST["db"]&&!$p)queries_redirect(substr(ME,0,-1),lang(104),drop_databases($_POST["db"]));page_header(lang(105),$p,false);echo"<p class='links'>\n";foreach(array('database'=>lang(106),'privileges'=>lang(68),'processlist'=>lang(107),'variables'=>lang(108),'status'=>lang(109),'replication'=>lang(110),)as$_=>$X){if(support($_))echo"<a href='".h(ME)."$_='>$X</a>\n";}echo"<p>".lang(111,$dc[DRIVER],"<b>".h($i->server_info)."</b>","<b>$i->extension</b>")."\n","<p>".lang(112,"<b>".h(logged_user())."</b>")."\n";$n=$b->databases();if($n){$Rg=support("scheme");$pb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(113)."</a>"."<td>".lang(114)."<td>".lang(115)."<td>".lang(116)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(117)."</a>"."</thead>\n";$n=($_GET["dbsize"]?count_tables($n):array_flip($n));foreach($n
as$o=>$T){$Gg=h(ME)."db=".urlencode($o);$v=h("Db-".$o);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$o,in_array($o,(array)$_POST["db"]),"","","",$v):""),"<th><a href='$Gg' id='$o'>".h($o)."</a>";$ob=nbsp(db_collation($o,$pb));echo"<td>".(support("database")?"<a href='$Gg".($Rg?"&amp;ns=":"")."&amp;database=' title='".lang(64)."'>$ob</a>":$ob),"<td align='right'><a href='$Gg&amp;schema=' id='tables-".h($o)."' title='".lang(67)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($o)."'>".($_GET["dbsize"]?db_size($o):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$ii'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["replication"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(73).": ".h($_GET["ns"]),lang(120),true);page_footer("ns");exit;}}$ff="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($zb){$this->size+=strlen($zb);fwrite($this->handler,$zb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}class
AdminerPlugin
extends
Adminer{var$plugins;function
_findRootClass($jb){do$K=$jb;while($jb=get_parent_class($jb));return$K;}function
__construct($Qf){if($Qf===null){$Qf=array();foreach(get_declared_classes()as$jb){if(preg_match('~^Adminer.~i',$jb)&&strcasecmp($this->_findRootClass($jb),'Adminer'))$Qf[$jb]=new$jb;}}$this->plugins=$Qf;}function
_callParent($t,$d){return
call_user_func_array(array('parent',$t),$d);}function
_applyPlugin($t,$d){foreach($this->plugins
as$Pf){if(method_exists($Pf,$t)){switch(count($d)){case
0:$K=$Pf->$t();break;case
1:$K=$Pf->$t($d[0]);break;case
2:$K=$Pf->$t($d[0],$d[1]);break;case
3:$K=$Pf->$t($d[0],$d[1],$d[2]);break;case
4:$K=$Pf->$t($d[0],$d[1],$d[2],$d[3]);break;case
5:$K=$Pf->$t($d[0],$d[1],$d[2],$d[3],$d[4]);break;case
6:$K=$Pf->$t($d[0],$d[1],$d[2],$d[3],$d[4],$d[5]);break;default:trigger_error('Too many parameters.',E_USER_WARNING);}if($K!==null)return$K;}}return$this->_callParent($t,$d);}function
_appendPlugin($t,$d){$K=$this->_callParent($t,$d);foreach($this->plugins
as$Pf){if(method_exists($Pf,$t))$K+=call_user_func_array(array($Pf,$t),$d);}return$K;}function
dumpFormat(){$d=func_get_args();return$this->_appendPlugin(__FUNCTION__,$d);}function
dumpOutput(){$d=func_get_args();return$this->_appendPlugin(__FUNCTION__,$d);}function
editFunctions($q){$d=func_get_args();return$this->_appendPlugin(__FUNCTION__,$d);}function
name(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
credentials(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
permanentLogin($k=false){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
database(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
schemas(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
databases($Vc=true){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
queryTimeout(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
headers(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
head(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
loginForm(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
login($pe,$H){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
tableName($Hh){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
fieldName($q,$of=0){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectLinks($Hh,$P=""){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
foreignKeys($R){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
backwardKeys($R,$Gh){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
backwardKeysPrint($Oa,$L){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectQuery($I,$Xh){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
sqlCommandQuery($I){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
rowDescription($R){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
rowDescriptions($M,$Yc){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectLink($X,$q){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectVal($X,$B,$q,$wf){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
editVal($X,$q){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
tableStructurePrint($r){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
tableIndexesPrint($y){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectColumnsPrint($N,$g){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectSearchPrint($Z,$g,$y){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectOrderPrint($of,$g,$y){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectLimitPrint($A){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectLengthPrint($Wh){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectActionPrint($y){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectCommandPrint(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectImportPrint(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectEmailPrint($qc,$g){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectColumnsProcess($g,$y){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectSearchProcess($r,$y){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectOrderProcess($r,$y){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectLimitProcess(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectLengthProcess(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectEmailProcess($Z,$Yc){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
selectQueryBuild($N,$Z,$jd,$of,$A,$G){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
messageQuery($I,$Xh){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
editInput($R,$q,$e,$Y){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
processInput($q,$Y,$t=""){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
dumpDatabase($o){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
dumpTable($R,$Ah,$Od=0){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
dumpData($R,$Ah,$I){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
dumpFilename($vd){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
dumpHeaders($vd,$Me=false){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
homepage(){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
navigation($Le){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
databasesPrint($Le){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}function
tablesPrint($T){$d=func_get_args();return$this->_applyPlugin(__FUNCTION__,$d);}}class
AdminerEnumOption{function
editInput($R,$q,$e,$Y){if($q["type"]=="enum"){$F=array(""=>array());$Xg=$Y;if(isset($_GET["select"]))$F[""][-1]=lang(8);if($q["null"]){$F[""][""]="NULL";if($Y===null&&!isset($_GET["select"]))$Xg="";}$F[""][0]=lang(7);preg_match_all("~'((?:[^']|'')*)'~",$q["length"],$we);foreach($we[1]as$u=>$X){$X=stripcslashes(str_replace("''","'",$X));$F[$u+1]=$X;if($Y===$X)$Xg=$u+1;}return"<select$e>".optionlist($F,(string)$Xg,1)."</select>";}}}class
AdminerDumpAlter{function
dumpFormat(){if(DRIVER=='server')return
array('sql_alter'=>'Alter');}function
_database(){$I="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $I;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($I)as$L){$tb=q($L["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["TABLE_COMMENT"]):$L["TABLE_COMMENT"]);echo"
			WHEN ".q($L["TABLE_NAME"])." THEN
				".(isset($L["ENGINE"])?"IF _engine != '$L[ENGINE]' OR _table_collation != '$L[TABLE_COLLATION]' OR _table_comment != $tb THEN
					ALTER TABLE ".idf_escape($L["TABLE_NAME"])." ENGINE=$L[ENGINE] COLLATE=$L[TABLE_COLLATION] COMMENT=$tb;
				END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

SELECT @adminer_alter;
";}function
dumpDatabase($o){static$Rc=true;if($_POST["format"]=="sql_alter"){if($Rc){$Rc=false;echo"SET @adminer_alter = '';\n\n";register_shutdown_function(array($this,'_database'));}else$this->_database();return
true;}}function
dumpTable($R,$Ah,$Od=false){if($_POST["format"]=="sql_alter"){$k=create_sql($R,$_POST["auto_increment"]);if($Od)echo
substr_replace($k," OR REPLACE",6,0).";\n\n";else{echo
substr_replace($k," IF NOT EXISTS",12,0).";\n\n";$I="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($R)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$r=array();$Ca="";foreach(get_rows($I)as$L){$Ob=$L["COLUMN_DEFAULT"];$L["default"]=($Ob!==null?q($Ob):"NULL");$L["after"]=q($Ca);$L["alter"]=escape_string(idf_escape($L["COLUMN_NAME"])." $L[COLUMN_TYPE]".($L["COLLATION_NAME"]?" COLLATE $L[COLLATION_NAME]":"").($Ob!==null?" DEFAULT ".($Ob=="CURRENT_TIMESTAMP"?$Ob:$L["default"]):"").($L["IS_NULLABLE"]=="YES"?"":" NOT NULL").($L["EXTRA"]?" $L[EXTRA]":"").($L["COLUMN_COMMENT"]?" COMMENT ".q($L["COLUMN_COMMENT"]):"").($Ca?" AFTER ".idf_escape($Ca):" FIRST"));echo", ADD $L[alter]";$r[]=$L;$Ca=$L["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $I;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($r
as$L)echo"
				WHEN ".q($L["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $L[alter]', IF(
						_column_default <=> $L[default] AND _is_nullable = '$L[IS_NULLABLE]' AND _collation_name <=> ".(isset($L["COLLATION_NAME"])?"'$L[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($L["COLUMN_TYPE"])." AND _extra = '$L[EXTRA]' AND _column_comment = ".q($L["COLUMN_COMMENT"])." AND after = $L[after]
					, '', ', MODIFY $L[alter]'));";echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', '`', REPLACE(_column_name, '`', '``'), '`');
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($R)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}return
true;}}function
dumpData(){if($_POST["format"]=="sql_alter")return
true;}}class
AdminerLoginSqlite{function
login($pe,$H){return
true;}function
loginForm(){?>
<script type="text/javascript">
addEventListener('load', function () {
	var driver = document.getElementsByName('auth[driver]')[0];
	if (isTag(driver, 'select')) {
		driver.onchange = function () {
			var trs = parentTag(driver, 'table').rows;
			for (var i=1; i < trs.length - 1; i++) {
				var disabled = /sqlite/.test(driver.value);
				alterClass(trs[i], 'hidden', disabled);
				trs[i].getElementsByTagName('input')[0].disabled = disabled;
			}
		};
	}
	driver.onchange();
});
</script>
<?php
}}class
AdminerEditCalendar{var$prepend,$langPath;function
__construct($Yf="<script type='text/javascript' src='jquery-ui/jquery.js'></script>\n<script type='text/javascript' src='jquery-ui/jquery-ui.js'></script>\n<script type='text/javascript' src='jquery-ui/jquery-ui-timepicker-addon.js'></script>\n<link rel='stylesheet' type='text/css' href='jquery-ui/jquery-ui.css'>\n",$ce="jquery-ui/i18n/jquery.ui.datepicker-%s.js"){$this->prepend=$Yf;$this->langPath=$ce;}function
head(){echo$this->prepend;if($this->langPath&&function_exists('get_lang')){$be=get_lang();$be=($be=="zh"?"zh-CN":($be=="zh-tw"?"zh-TW":$be));if($be!="en"&&file_exists(sprintf($this->langPath,$be))){printf("<script type='text/javascript' src='$this->langPath'></script>\n",$be);echo"<script type='text/javascript'>jQuery(function () { jQuery.timepicker.setDefaults(jQuery.datepicker.regional['$be']); });</script>\n";}}}function
editInput($R,$q,$e,$Y){if(preg_match("~date|time~",$q["type"])){$Jb="changeYear: true, dateFormat: 'yy-mm-dd'";$Yh="showSecond: true, timeFormat: 'HH:mm:ss.lcZ', timeInput: true";return"<input id='fields-".h($q["field"])."' value='".h($Y)."'".(@+$q["length"]?" maxlength='".(+$q["length"])."'":"")."$e><script type='text/javascript'>jQuery('#fields-".js_escape($q["field"])."').".($q["type"]=="time"?"timepicker({ $Yh })":(preg_match("~time~",$q["type"])?"datetimepicker({ $Jb, $Yh })":"datepicker({ $Jb })")).";</script>";}}}class
AdminerWymeditor{var$scripts,$options;function
__construct($Tg=array("jquery/jquery.js","wymeditor/jquery.wymeditor.min.js"),$F=""){$this->scripts=$Tg;$this->options=$F;}function
head(){foreach($this->scripts
as$Sg)echo"<script type='text/javascript' src='".h($Sg)."'></script>\n";}function
selectVal(&$X,$B,$q,$wf){if(preg_match("~_html~",$q["field"])&&$X!='&nbsp;'){$gh=(substr($X,-10)=="<i>...</i>");if($gh)$X=substr($X,0,-10);$X=preg_replace('~<[^>]*$~','',html_entity_decode($X,ENT_QUOTES));if($gh)$X.="<i>...</i>";if(class_exists('DOMDocument')){$ac=new
DOMDocument;if(@$ac->loadHTML("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head>$X"))$X=preg_replace('~.*<body[^>]*>(.*)</body>.*~is','\\1',$ac->saveHTML());}}}function
editInput($R,$q,$e,$Y){static$be="";if(!$be&&preg_match("~text~",$q["type"])&&preg_match("~_html~",$q["field"])){$be="en";if(function_exists('get_lang')){$be=get_lang();$be=($be=="zh"||$be=="zh-tw"?"zh_cn":$be);}return"<textarea$e id='fields-".h($q["field"])."' rows='12' cols='50'>".h($Y)."</textarea><script type='text/javascript'>
jQuery('#fields-".js_escape($q["field"])."').wymeditor({ updateSelector: '#form [type=\"submit\"]', lang: '$be'".($this->options?", $this->options":"")." });
</script>";}}}class
AdminerEditTextarea{function
editInput($R,$q,$e,$Y){if(preg_match('~char~',$q["type"]))return"<textarea cols='30' rows='1' style='height: 1.2em;'$e>".h($Y).'</textarea>';}}class
AdminerStructComments{function
fieldName(&$q,$of=0){return'<span title="'.h($q["full_type"]).(!empty($q["comment"])?': '.$q["comment"]:'').'">'.h($q["field"]).'</span>';}}class
AdminerTranslation{function
_translate($w){static$ni,$be;if($be===null)$be=get_lang();if($w==""||$be=="en")return$w;if($ni===null)$ni=get_key_vals("SELECT idf, translation FROM translation WHERE language_id = ".q($be));$K=&$ni[$w];if($K===null){$K=$w;$i=connection();$i->query("INSERT INTO translation (language_id, idf, translation) VALUES (".q($be).", ".q($w).", ".q($w).")");}return$K;}function
tableName(&$Hh){$Hh["Comment"]=$this->_translate($Hh["Comment"]);}function
fieldName(&$q,$of=0){$q["comment"]=$this->_translate($q["comment"]);}function
editVal(&$X,$q){if($q["type"]=="enum")$X=$this->_translate($X);}}class
AdminerDatabaseHide{protected$Vb;function
__construct($Vb){$this->disabled=array_map('strtolower',$Vb);}function
databases($Vc=true){$K=array();foreach(get_databases($Vc)as$o){if(!in_array(strtolower($o),$this->disabled))$K[]=$o;}return$K;}}class
AdminerForeignSystem{function
foreignKeys($R){if(DRIVER=="server"&&DB=="mysql"){switch($R){case"columns_priv":return
array(array("table"=>"user","source"=>array("Host","User"),"target"=>array("Host","User")));case"db":return
array(array("table"=>"user","source"=>array("Host","User"),"target"=>array("Host","User")));case"help_category":return
array(array("table"=>"help_category","source"=>array("parent_category_id"),"target"=>array("help_category_id")));case"help_relation":return
array(array("table"=>"help_topic","source"=>array("help_topic_id"),"target"=>array("help_topic_id")),array("table"=>"help_keyword","source"=>array("help_keyword_id"),"target"=>array("help_keyword_id")));case"help_topic":return
array(array("table"=>"help_category","source"=>array("help_category_id"),"target"=>array("help_category_id")));case"procs_priv":return
array(array("table"=>"user","source"=>array("Host","User"),"target"=>array("Host","User")),array("table"=>"proc","source"=>array("Db","Routine_name"),"target"=>array("db","name")));case"tables_priv":return
array(array("table"=>"user","source"=>array("Host","User"),"target"=>array("Host","User")));case"time_zone_name":return
array(array("table"=>"time_zone","source"=>array("Time_zone_id"),"target"=>array("Time_zone_id")));case"time_zone_transition":return
array(array("table"=>"time_zone","source"=>array("Time_zone_id"),"target"=>array("Time_zone_id")),array("table"=>"time_zone_transition_type","source"=>array("Time_zone_id","Transition_type_id"),"target"=>array("Time_zone_id","Transition_type_id")));case"time_zone_transition_type":return
array(array("table"=>"time_zone","source"=>array("Time_zone_id"),"target"=>array("Time_zone_id")));}}elseif(DB=="information_schema"){$Qg=array("table"=>"SCHEMATA","source"=>array("TABLE_CATALOG","TABLE_SCHEMA"),"target"=>array("CATALOG_NAME","SCHEMA_NAME"));$T=array("table"=>"TABLES","source"=>array("TABLE_CATALOG","TABLE_SCHEMA","TABLE_NAME"),"target"=>array("TABLE_CATALOG","TABLE_SCHEMA","TABLE_NAME"));$g=array("table"=>"COLUMNS","source"=>array("TABLE_CATALOG","TABLE_SCHEMA","TABLE_NAME","COLUMN_NAME"),"target"=>array("TABLE_CATALOG","TABLE_SCHEMA","TABLE_NAME","COLUMN_NAME"));$ab=array("table"=>"CHARACTER_SETS","source"=>array("CHARACTER_SET_NAME"),"target"=>array("CHARACTER_SET_NAME"));$pb=array("table"=>"COLLATIONS","source"=>array("COLLATION_NAME"),"target"=>array("COLLATION_NAME"));$Ig=array(array("source"=>array("CHARACTER_SET_CLIENT"))+$ab,array("source"=>array("COLLATION_CONNECTION"))+$pb,array("source"=>array("DATABASE_COLLATION"))+$pb);switch($R){case"CHARACTER_SETS":return
array(array("source"=>array("DEFAULT_COLLATE_NAME"))+$pb);case"COLLATIONS":return
array($ab);case"COLLATION_CHARACTER_SET_APPLICABILITY":return
array($pb,$ab);case"COLUMNS":return
array($Qg,$T,$ab,$pb);case"COLUMN_PRIVILEGES":return
array($Qg,$T,$g);case"TABLES":return
array($Qg,array("source"=>array("TABLE_COLLATION"))+$pb);case"SCHEMATA":return
array(array("source"=>array("DEFAULT_CHARACTER_SET_NAME"))+$ab,array("source"=>array("DEFAULT_COLLATION_NAME"))+$pb);case"EVENTS":return
array_merge(array(array("source"=>array("EVENT_CATALOG","EVENT_SCHEMA"))+$Qg),$Ig);case"FILES":return
array($Qg,$T);case"KEY_COLUMN_USAGE":return
array(array("source"=>array("CONSTRAINT_CATALOG","CONSTRAINT_SCHEMA"))+$Qg,$Qg,$T,$g,array("source"=>array("TABLE_CATALOG","REFERENCED_TABLE_SCHEMA"))+$Qg,array("source"=>array("TABLE_CATALOG","REFERENCED_TABLE_SCHEMA","REFERENCED_TABLE_NAME"))+$T,array("source"=>array("TABLE_CATALOG","REFERENCED_TABLE_SCHEMA","REFERENCED_TABLE_NAME","REFERENCED_COLUMN_NAME"))+$g);case"PARTITIONS":return
array($Qg,$T);case"REFERENTIAL_CONSTRAINTS":return
array(array("source"=>array("CONSTRAINT_CATALOG","CONSTRAINT_SCHEMA"))+$Qg,array("source"=>array("UNIQUE_CONSTRAINT_CATALOG","UNIQUE_CONSTRAINT_SCHEMA"))+$Qg,array("source"=>array("CONSTRAINT_CATALOG","CONSTRAINT_SCHEMA","TABLE_NAME"))+$T,array("source"=>array("CONSTRAINT_CATALOG","CONSTRAINT_SCHEMA","REFERENCED_TABLE_NAME"))+$T);case"ROUTINES":return
array_merge(array(array("source"=>array("ROUTINE_CATALOG","ROUTINE_SCHEMA"))+$Qg),$Ig);case"SCHEMA_PRIVILEGES":return
array($Qg);case"STATISTICS":return
array($Qg,$T,$g,array("source"=>array("TABLE_CATALOG","INDEX_SCHEMA"))+$Qg);case"TABLE_CONSTRAINTS":return
array(array("source"=>array("CONSTRAINT_CATALOG","CONSTRAINT_SCHEMA"))+$Qg,array("source"=>array("CONSTRAINT_CATALOG","TABLE_SCHEMA"))+$Qg,array("source"=>array("CONSTRAINT_CATALOG","TABLE_SCHEMA","TABLE_NAME"))+$T);case"TABLE_PRIVILEGES":return
array($Qg,$T);case"TRIGGERS":return
array_merge(array(array("source"=>array("TRIGGER_CATALOG","TRIGGER_SCHEMA"))+$Qg,array("source"=>array("EVENT_OBJECT_CATALOG","EVENT_OBJECT_SCHEMA"))+$Qg,array("source"=>array("EVENT_OBJECT_CATALOG","EVENT_OBJECT_SCHEMA","EVENT_OBJECT_TABLE"))+$T),$Ig);case"VIEWS":return
array($Qg);}}}}class
AdminerFileUpload{var$uploadPath,$displayPath,$extensions;function
__construct($Ei="../static/data/",$Xb=null,$Ic="[a-zA-Z0-9]+"){$this->uploadPath=$Ei;$this->displayPath=($Xb!==null?$Xb:$Ei);$this->extensions=$Ic;}function
editInput($R,$q,$e,$Y){if(preg_match('~(.*)_path$~',$q["field"]))return"<input type='file' name='fields-$q[field]'>";}function
processInput($q,$Y,$t=""){if(preg_match('~(.*)_path$~',$q["field"],$wg)){$R=($_GET["edit"]!=""?$_GET["edit"]:$_GET["select"]);$D="fields-$q[field]";if($_FILES[$D]["error"]||!preg_match("~(\\.($this->extensions))?\$~",$_FILES[$D]["name"],$xg))return
false;$Pc=uniqid().$xg[0];if(!move_uploaded_file($_FILES[$D]["tmp_name"],"$this->uploadPath$R/$wg[1]-$Pc"))return
false;return
q($Pc);}}function
selectVal($X,&$B,$q,$wf){if($X!="&nbsp;"&&preg_match('~(.*)_path$~',$q["field"],$wg))$B="$this->displayPath$_GET[select]/$wg[1]-$X";}}class
AdminerDumpJson{var$database=false;function
dumpFormat(){return
array('json'=>'JSON');}function
dumpTable($R,$Ah,$Od=false){if($_POST["format"]=="json")return
true;}function
_database(){echo"}\n";}function
dumpData($R,$Ah,$I){if($_POST["format"]=="json"){if($this->database)echo",\n";else{$this->database=true;echo"{\n";register_shutdown_function(array($this,'_database'));}$i=connection();$J=$i->query($I,1);if($J){echo'"'.addcslashes($R,"\r\n\"\\")."\": [\n";$Rc=true;while($L=$J->fetch_assoc()){echo($Rc?"":", ");$Rc=false;foreach($L
as$_=>$X)json_row($_,$X);json_row("");}echo"]";}return
true;}}function
dumpHeaders($vd,$Me=false){if($_POST["format"]=="json"){header("Content-Type: application/json; charset=utf-8");return"json";}}}class
AdminerTinymce{var$path;function
__construct($Kf="tiny_mce/tiny_mce.js"){$this->path=$Kf;}function
head(){$be="en";if(function_exists('get_lang')){$be=get_lang();$be=($be=="zh"?"zh-cn":($be=="zh-tw"?"zh":$be));if(!file_exists(dirname($this->path)."/langs/$be.js"))$be="en";}echo'<script type="text/javascript" src="',h($this->path);?>"></script>
<script type="text/javascript">
tinyMCE.init({
	mode: 'none',
	theme: 'advanced',
	plugins: 'contextmenu,paste,table',
	entity_encoding: 'raw',
	theme_advanced_buttons1: 'bold,italic,link,unlink,|,sub,sup,|,bullist,numlist,|,cleanup,code',
	theme_advanced_buttons2: 'tablecontrols',
	theme_advanced_buttons3: '',
	theme_advanced_toolbar_location: 'top',
	theme_advanced_toolbar_align: 'left',
	language: '<?php echo$be,'\'
});
</script>
';}function
selectVal(&$X,$B,$q,$wf){if(preg_match("~_html~",$q["field"])&&$X!='&nbsp;'){$gh=(substr($X,-10)=="<i>...</i>");if($gh)$X=substr($X,0,-10);$X=preg_replace('~<[^>]*$~','',html_entity_decode($X,ENT_QUOTES));if($gh)$X.="<i>...</i>";if(class_exists('DOMDocument')){$ac=new
DOMDocument;if(@$ac->loadHTML("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head>$X"))$X=preg_replace('~.*<body[^>]*>(.*)</body>.*~is','\\1',$ac->saveHTML());}}}function
editInput($R,$q,$e,$Y){if(preg_match("~text~",$q["type"])&&preg_match("~_html~",$q["field"]))return"<textarea$e id='fields-".h($q["field"])."' rows='12' cols='50'>".h($Y)."</textarea><script type='text/javascript'>
tinyMCE.remove(tinyMCE.get('fields-".js_escape($q["field"])."') || { });
tinyMCE.execCommand('mceAddControl', true, 'fields-".js_escape($q["field"])."');
document.getElementById('form').onsubmit = function () {
	tinyMCE.each(tinyMCE.editors, function (ed) {
		ed.remove();
	});
};
</script>";}}class
AdminerDumpBz2{var$filename,$fp;function
dumpOutput(){if(!function_exists('bzopen'))return
array();return
array('bz2'=>'bzip2');}function
_bz2($Q,$wh){bzwrite($this->fp,$Q);if($wh&PHP_OUTPUT_HANDLER_END){bzclose($this->fp);$K=file_get_contents($this->filename);unlink($this->filename);return$K;}return"";}function
dumpHeaders($vd,$Me=false){if($_POST["output"]=="bz2"){$this->filename=tempnam("","bz2");$this->fp=bzopen($this->filename,'w');header("Content-Type: application/x-bzip");ob_start(array($this,'_bz2'),1e6);}}}class
AdminerEnumTypes{var$_types=null;function
editInput($R,$q,$e,$Y){if(!in_array(strtolower(connection()->extension),array('pgsql','pdo_pgsql')))return;if(is_null($this->_types)){$wi=types();$this->_types=array();foreach($wi
as$U){$Oi=get_vals("SELECT unnest(enum_range(NULL::$U))::text AS value");if(!empty($Oi)&&is_array($Oi))$this->_types[$U]=$Oi;}}if(array_key_exists($q["type"],$this->_types)){$F=$this->_types[$q["type"]];$F=array_combine($F,$F);$Xg=$Y;if($q["null"]){$F=array(""=>array(""=>"NULL"))+$F;if($Y===null&&!isset($_GET["select"]))$Xg="";}if(isset($_GET["select"]))$F=array(""=>array(-1=>lang(8)))+$F;return"<select$e>".optionlist($F,(string)$Xg,1)."</select>";}}}class
AdminerTablesFilter{function
tablesPrint($T){?>
<p class="jsonly"><input id="filter-field" onkeyup="tablesFilterInput();" autocomplete="off">
<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>
<?php
foreach($T
as$R=>$U){echo'<span data-table-name="'.h($R).'"><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R).">".lang(74)."</a> ",'<a href="'.h(ME).'table='.urlencode($R).'"'.bold($_GET["table"]==$R).">".h($R)."</a><br></span>\n";}?>
<script type="text/javascript">
var tablesFilterTimeout = null;
var tablesFilterValue = '';

function tablesFilter(){
	var value = document.getElementById('filter-field').value.toLowerCase();
	if (value == tablesFilterValue) {
		return;
	}
	tablesFilterValue = value;
	if (value != '') {
		var reg = (value + '').replace(/([\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:])/g, '\\$1');
		reg = new RegExp('('+ reg + ')', 'gi');
	}
	if (sessionStorage) {
		sessionStorage.setItem('adminer_tables_filter', value);
	}
	var tables = document.getElementById('tables').getElementsByTagName('span');
	for (var i = 0; i < tables.length; i++) {
		var a = tables[i].getElementsByTagName('a')[1];
		var text = tables[i].getAttribute('data-table-name');
		if (value == '') {
			tables[i].className = '';
			a.innerHTML = text;
		} else {
			tables[i].className = (text.toLowerCase().indexOf(value) == -1 ? 'hidden' : '');
			a.innerHTML = text.replace(reg, '<strong>$1</strong>');
		}
	}
}

function tablesFilterInput() {
	window.clearTimeout(tablesFilterTimeout);
	tablesFilterTimeout = window.setTimeout(tablesFilter, 200);
}

if (sessionStorage){
	var db = document.getElementById('dbs').getElementsByTagName('select')[0];
	db = db.options[db.selectedIndex].text;
	if (db == sessionStorage.getItem('adminer_tables_filter_db') && sessionStorage.getItem('adminer_tables_filter')){
		document.getElementById('filter-field').value = sessionStorage.getItem('adminer_tables_filter');
		tablesFilter();
	}
	sessionStorage.setItem('adminer_tables_filter_db', db);
}
</script>
<?php

return
true;}}class
AdminerDumpPhp{var$output=array();var$shutdown_callback=false;function
dumpFormat(){return
array('php'=>'PHP');}function
dumpHeaders(){if($_POST['format']=='php'){header('Content-Type: text/plain; charset=utf-8');return'php';}}function
dumpTable($R){if($_POST['format']=='php'){$this->output[$R]=array();if(!$this->shutdown_callback){$this->shutdown_callback=true;register_shutdown_function(array($this,'_export'));}return
true;}}function
dumpData($R,$Ah,$I){if($_POST['format']=='php'){$i=connection();$J=$i->query($I,1);if($J){while($L=$J->fetch_assoc())$this->output[$R][]=$L;}return
true;}}function
_export(){echo"<?php\n";var_export($this->output);}}class
AdminerDumpDate{function
dumpFilename($vd){$i=connection();return
friendly_url(($vd!=""?$vd:(SERVER!=""?SERVER:"localhost"))."-".$i->result("SELECT NOW()"));}}class
AdminerEmailTable{var$table,$id,$title,$subject,$message;function
__construct($R="email",$v="id",$bi="subject",$Bh="subject",$De="message"){$this->table=$R;$this->id=$v;$this->title=$bi;$this->subject=$Bh;$this->message=$De;}function
selectEmailPrint($qc,$g){if($qc){print_fieldset("email",('E-mail'));echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".('From').": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",('Subject').": <select name='email_id'><option>".optionlist(get_key_vals("SELECT $this->id, $this->title FROM $this->table ORDER BY $this->title"),$_POST["email_id"],true)."</select>\n","<p>".('Attachments').": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($qc)==1?'<input type="hidden" name="email_field" value="'.h(key($qc)).'">':html_select("email_field",$qc)),"<input type='submit' name='email' value='".('Send')."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";return
true;}}function
selectEmailProcess($Z,$Yc){$i=connection();if($_POST["email_id"]){$J=$i->query("SELECT $this->subject, $this->message FROM $this->table WHERE $this->id = ".q($_POST["email_id"]));$L=$J->fetch_row();$_POST["email_subject"]=$L[0];$_POST["email_message"]=$L[1];}}}class
AdminerMasterSlave{private$ue=array();function
__construct($ue){$this->masters=$ue;}function
credentials(){if($_POST&&isset($this->masters[SERVER]))return
array($this->masters[SERVER],$_GET["username"],get_session("pwds"));}function
login($pe,$H){if(!$_POST&&($se=&$_SESSION["master"])){$i=connection();$i->query("DO MASTER_POS_WAIT('".q($se['File'])."', $se[Position])");$se=null;}}function
messageQuery($I,$Xh){$i=connection();$J=$i->query('SHOW MASTER STATUS');if($J){restart_session();$_SESSION["master"]=$J->fetch_assoc();}}}class
AdminerLoginTable{var$database;function
__construct($m){$this->database=$m;}function
login($pe,$H){$i=connection();return(bool)$i->result("SELECT COUNT(*) FROM ".idf_escape($this->database).".login WHERE login = ".q($pe)." AND password_sha1 = ".q(sha1($H)));}}class
AdminerTableStructure{function
tableStructurePrint($r){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(45)."<th>".lang(46)."<th>".lang(121)."<th>".lang(122).(support("comment")?"<th>".lang(47):"")."</thead>\n";foreach($r
as$q){echo"<tr".odd()."><th>".h($q["field"]).($q["primary"]?" (PRIMARY)":""),"<td><span>".h($q["full_type"])."</span>",($q["auto_increment"]?" <i>".lang(48)."</i>":""),($q["collation"]?" <i>".h($q["collation"])."</i>":""),"<td>".($q["null"]?lang(123):lang(124)),"<td>".(isset($q["default"])?h($q["default"]):"&nbsp;"),(support("comment")?"<td>".nbsp($q["comment"]):""),"\n";}echo"</table>\n";return
true;}}class
AdminerFrames{var$sameOrigin;function
__construct($Ng=false){$this->sameOrigin=$Ng;}function
headers(){if($this->sameOrigin)header("X-Frame-Options: SameOrigin");header("X-XSS-Protection: 0");return
false;}}class
AdminerLoginServers{var$servers,$driver;function
__construct($eh,$cc="server"){$this->servers=$eh;$this->driver=$cc;}function
login($pe,$H){foreach($this->servers
as$_=>$X){$eh=$X;if(!is_array($X))$eh=array($_=>$X);foreach($eh
as$Sd=>$W){if((is_string($Sd)?$Sd:$W)==SERVER)return;}}return
false;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(32),'<td><input type="hidden" name="auth[driver]" value="',$this->driver,'"><select name="auth[server]">',optionlist($this->servers,SERVER),'</select>
<tr><th>',lang(33),'<td><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
</table>
<p><input type="submit" value="',lang(36),'">
',checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";return
true;}}class
AdminerLinksDirect{function
selectLink($X,$q){if(is_url($X))return$X;}}class
AdminerDumpXml{var$database=false;function
dumpFormat(){return
array('xml'=>'XML');}function
dumpTable($R,$Ah,$Od=false){if($_POST["format"]=="xml")return
true;}function
_database(){echo"</database>\n";}function
dumpData($R,$Ah,$I){if($_POST["format"]=="xml"){if(!$this->database){$this->database=true;echo"<database name='".h(DB)."'>\n";register_shutdown_function(array($this,'_database'));}$i=connection();$J=$i->query($I,1);if($J){while($L=$J->fetch_assoc()){echo"\t<table name='".h($R)."'>\n";foreach($L
as$_=>$X)echo"\t\t<column name='".h($_)."'".(isset($X)?"":" null='null'").">".h($X)."</column>\n";echo"\t</table>\n";}}return
true;}}function
dumpHeaders($vd,$Me=false){if($_POST["format"]=="xml"){header("Content-Type: text/xml; charset=utf-8");return"xml";}}}class
AdminerVersionNoverify{function
navigation($Le){echo'<script type="text/javascript">
verifyVersion = function () {
};
</script>
';}}class
AdminerJsonColumn{private
function
_testJson($Y){if((substr($Y,0,1)=='{'||substr($Y,0,1)=='[')&&($Rd=json_decode($Y,true)))return$Rd;return$Y;}private
function
_buildTable($Rd){echo'<table cellspacing="0" style="margin:2px">';foreach($Rd
as$_=>$X){echo'<tr>','<th>'.h($_).'</th>','<td>';if(is_scalar($X)||$X===null){if(is_bool($X))$X=$X?'true':'false';elseif($X===null)$X='null';elseif(!is_numeric($X))$X='"'.h(addcslashes($X,"\r\n\"")).'"';echo'<code class="jush-js">'.$X.'</code>';}else$this->_buildTable($X);echo'</td>','</tr>';}echo'</table>';}function
editInput($R,$q,$e,$Y){$Rd=$this->_testJson($Y);if($Rd!==$Y)$this->_buildTable($Rd);}}class
AdminerEditForeign{var$_limit;function
__construct($A=0){$this->_limit=$A;}function
editInput($R,$q,$e,$Y){static$Zc=array();static$Oi=array();$Yc=&$Zc[$R];if($Yc===null)$Yc=column_foreign_keys($R);foreach((array)$Yc[$q["field"]]as$Xc){if(count($Xc["source"])==1){$Qh=$Xc["table"];$v=$Xc["target"][0];$F=&$Oi[$Qh][$v];if(!$F){$f=idf_escape($v);if(preg_match('~binary~',$q["type"]))$f="HEX($f)";$F=array(""=>"")+get_vals("SELECT $f FROM ".table($Qh)." ORDER BY 1".($this->_limit?" LIMIT ".($this->_limit+1):""));if($this->_limit&&count($F)-1>$this->_limit)return;}return"<select$e>".optionlist($F,$Y)."</select>";}}}}class
AdminerDumpZip{var$filename,$data;function
dumpOutput(){if(!class_exists('ZipArchive'))return
array();return
array('zip'=>'ZIP');}function
_zip($Q,$wh){$this->data.=$Q;if($wh&PHP_OUTPUT_HANDLER_END){$cj=new
ZipArchive;$dj=tempnam("","zip");$cj->open($dj,ZipArchive::OVERWRITE);$cj->addFromString($this->filename,$this->data);$cj->close();$K=file_get_contents($dj);unlink($dj);return$K;}return"";}function
dumpHeaders($vd,$Me=false){if($_POST["output"]=="zip"){$this->filename="$vd.".($Me&&preg_match("~[ct]sv~",$_POST["format"])?"tar":$_POST["format"]);header("Content-Type: application/zip");ob_start(array($this,'_zip'));}}}class
AdminerSqlLog{var$filename;function
__construct($Pc=""){$this->filename=$Pc;}function
messageQuery($I,$Xh){$this->_log($I);}function
sqlCommandQuery($I){$this->_log($I);}function
_log($I){if($this->filename==""){$b=adminer();$this->filename=$b->database().".sql";}$ed=fopen($this->filename,"a");flock($ed,LOCK_EX);fwrite($ed,$I);fwrite($ed,"\n\n");flock($ed,LOCK_UN);fclose($ed);}}class
AdminerTableIndexesStructure{function
tableIndexesPrint($y){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(125)."<th>".lang(46)."<th>".lang(126)."</thead>\n";foreach($y
as$D=>$x){echo"<tr><th>".h($D)."<td>".$x['type'];ksort($x["columns"]);$cg=array();foreach($x["columns"]as$_=>$X)$cg[]="<i>".h($X)."</i>".($x["lengths"][$_]?"(".$x["lengths"][$_].")":"").($x["descs"][$_]?" DESC":"");echo"<td>".implode(", ",$cg)."\n";}echo"</table>\n";return
true;}}class
AdminerSlugify{var$from,$to;function
__construct($fd='Ã¡ÄÄÃ©Ä›Ã­ÅˆÃ³Å™Å¡Å¥ÃºÅ¯Ã½Å¾',$hi='acdeeinorstuuyz'){$this->from=$fd;$this->to=$hi;}function
editInput($R,$q,$e,$Y){static$nh;if(!$_GET["select"]&&!$_GET["where"]){if($nh===null){$nh=array();$Zf=null;foreach(fields($R)as$D=>$X){if($Zf&&preg_match('~(^|_)slug(_|$)~',$D))$nh[$Zf]=$D;$Zf=$D;}}$mh=$nh[$q["field"]];if($mh!==null)return"<input value='".h($Y)."' maxlength='$q[length]' size='40'$e onchange=\"var find = '$this->from'; var repl = '$this->to'; this.form['fields[$mh]'].value = this.value.toLowerCase().replace(new RegExp('[' + find + ']', 'g'), function (str) { return repl[find.indexOf(str)]; }).replace(/[^a-z0-9_]+/g, '-').replace(/^-|-\$/g, '').substr(0, $q[length]);\">";}}}function
adminer_object(){$Qf=array(new
AdminerDatabaseHide(array('information_schema')),new
AdminerDumpJson,new
AdminerDumpBz2,new
AdminerDumpZip,new
AdminerDumpXml,new
AdminerDumpAlter,new
AdminerFileUpload(""),new
AdminerJsonColumn,new
AdminerSlugify,new
AdminerTranslation,new
AdminerForeignSystem,new
AdminerEnumOption,new
AdminerTablesFilter,new
AdminerEditForeign,);return
new
AdminerPlugin($Qf);}$vc="'(?:''|[^'\\\\]|\\\\.)*'";$Ed="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$r=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$N=array(idf_escape($_GET["field"]));$J=$cc->select($a,$N,array(where($_GET,$r)),$N);$L=($J?$J->fetch_row():array());echo$L[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$r=fields($a);if(!$r)$p=error();$S=table_status1($a,true);page_header(($r&&is_view($S)?$S['Engine']=='materialized view'?lang(127):lang(128):lang(129)).": ".h($a),$p);$b->selectLinks($S);$tb=$S["Comment"];if($tb!="")echo"<p>".lang(47).": ".h($tb)."\n";if($r)$b->tableStructurePrint($r);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(130)."</h3>\n";$y=indexes($a);if($y)$b->tableIndexesPrint($y);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(131)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(91)."</h3>\n";$ad=foreign_keys($a);if($ad){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(132)."<td>".lang(133)."<td>".lang(94)."<td>".lang(93)."<td>&nbsp;</thead>\n";foreach($ad
as$D=>$s){echo"<tr title='".h($D)."'>","<th><i>".implode("</i>, <i>",array_map('h',$s["source"]))."</i>","<td><a href='".h($s["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($s["db"]),ME):($s["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($s["ns"]),ME):ME))."table=".urlencode($s["table"])."'>".($s["db"]!=""?"<b>".h($s["db"])."</b>.":"").($s["ns"]!=""?"<b>".h($s["ns"])."</b>.":"").h($s["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$s["target"]))."</i>)","<td>".nbsp($s["on_delete"])."\n","<td>".nbsp($s["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($D)).'">'.lang(134).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(135)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(136)."</h3>\n";$ti=triggers($a);if($ti){echo"<table cellspacing='0'>\n";foreach($ti
as$_=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($_)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($_))."'>".lang(134)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(137)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(67),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Kh=array();$Lh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$we,PREG_SET_ORDER);foreach($we
as$u=>$C){$Kh[$C[1]]=array($C[2],$C[3]);$Lh[]="\n\t'".js_escape($C[1])."': [ $C[2], $C[3] ]";}$ji=0;$Qa=-1;$Pg=array();$ug=array();$ie=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Sf=0;$Pg[$R]["fields"]=array();foreach(fields($R)as$D=>$q){$Sf+=1.25;$q["pos"]=$Sf;$Pg[$R]["fields"][$D]=$q;}$Pg[$R]["pos"]=($Kh[$R]?$Kh[$R]:array($ji,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$ge=$Qa;if($Kh[$R][1]||$Kh[$X["table"]][1])$ge=min(floatval($Kh[$R][1]),floatval($Kh[$X["table"]][1]))-1;else$Qa-=.1;while($ie[(string)$ge])$ge-=.0001;$Pg[$R]["references"][$X["table"]][(string)$ge]=array($X["source"],$X["target"]);$ug[$X["table"]][$R][(string)$ge]=$X["target"];$ie[(string)$ge]=true;}}$ji=max($ji,$Pg[$R]["pos"][0]+2.5+$Sf);}echo'<div id="schema" style="height: ',$ji,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Lh)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$ji,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Pg
as$D=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($D).'"><b>'.h($D)."</b></a>";foreach($R["fields"]as$q){$X='<span'.type_class($q["type"]).' title="'.h($q["full_type"].($q["null"]?" NULL":'')).'">'.h($q["field"]).'</span>';echo"<br>".($q["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$Rh=>$vg){foreach($vg
as$ge=>$rg){$he=$ge-$Kh[$D][1];$u=0;foreach($rg[0]as$qh)echo"\n<div class='references' title='".h($Rh)."' id='refs$ge-".($u++)."' style='left: $he"."em; top: ".$R["fields"][$qh]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$he)."em;'></div></div>";}}foreach((array)$ug[$D]as$Rh=>$vg){foreach($vg
as$ge=>$g){$he=$ge-$Kh[$D][1];$u=0;foreach($g
as$Qh)echo"\n<div class='references' title='".h($Rh)."' id='refd$ge-".($u++)."' style='left: $he"."em; top: ".$R["fields"][$Qh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.3.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$he)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Pg
as$D=>$R){foreach((array)$R["references"]as$Rh=>$vg){foreach($vg
as$ge=>$rg){$Ke=$ji;$_e=-10;foreach($rg[0]as$_=>$qh){$Tf=$R["pos"][0]+$R["fields"][$qh]["pos"];$Uf=$Pg[$Rh]["pos"][0]+$Pg[$Rh]["fields"][$rg[1][$_]]["pos"];$Ke=min($Ke,$Tf,$Uf);$_e=max($_e,$Tf,$Uf);}echo"<div class='references' id='refl$ge' style='left: $ge"."em; top: $Ke"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($_e-$Ke)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(138),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$p){$Bb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$_)$Bb.="&$_=".urlencode($_POST[$_]);cookie("adminer_export",substr($Bb,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Gc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Md=preg_match('~sql~',$_POST["format"]);if($Md){echo"-- Adminer $ia ".$dc[DRIVER]." dump\n\n";if($z=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$i->query("SET time_zone = '+00:00';");}}$Ah=$_POST["db_style"];$n=array(DB);if(DB==""){$n=$_POST["databases"];if(is_string($n))$n=explode("\n",rtrim(str_replace("\r","",$n),"\n"));}foreach((array)$n
as$o){$b->dumpDatabase($o);if($i->select_db($o)){if($Md&&preg_match('~CREATE~',$Ah)&&($k=$i->result("SHOW CREATE DATABASE ".idf_escape($o),1))){set_utf8mb4($k);if($Ah=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($o).";\n";echo"$k;\n";}if($Md){if($Ah)echo
use_sql($o).";\n\n";$yf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Hg){foreach(get_rows("SHOW $Hg STATUS WHERE Db = ".q($o),null,"-- ")as$L){$k=remove_definer($i->result("SHOW CREATE $Hg ".idf_escape($L["Name"]),2));set_utf8mb4($k);$yf.=($Ah!='DROP+CREATE'?"DROP $Hg IF EXISTS ".idf_escape($L["Name"]).";;\n":"")."$k;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$L){$k=remove_definer($i->result("SHOW CREATE EVENT ".idf_escape($L["Name"]),3));set_utf8mb4($k);$yf.=($Ah!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($L["Name"]).";;\n":"")."$k;;\n\n";}}if($yf)echo"DELIMITER ;;\n\n$yf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Ti=array();foreach(table_status('',true)as$D=>$S){$R=(DB==""||in_array($D,(array)$_POST["tables"]));$Hb=(DB==""||in_array($D,(array)$_POST["data"]));if($R||$Hb){if($Gc=="tar"){$fi=new
TmpFile;ob_start(array($fi,'write'),1e5);}$b->dumpTable($D,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$Ti[]=$D;elseif($Hb){$r=fields($D);$b->dumpData($D,$_POST["data_style"],"SELECT *".convert_fields($r,$r)." FROM ".table($D));}if($Md&&$_POST["triggers"]&&$R&&($ti=trigger_sql($D,$_POST["table_style"])))echo"\nDELIMITER ;;\n$ti\nDELIMITER ;\n";if($Gc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$o/")."$D.csv",$fi);}elseif($Md)echo"\n";}}foreach($Ti
as$Si)$b->dumpTable($Si,$_POST["table_style"],1);if($Gc=="tar")echo
pack("x512");}}}if($Md)echo"-- ".$i->result("SELECT NOW()")."\n";exit;}page_header(lang(70),$p,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Lb=array('','USE','DROP+CREATE','CREATE');$Mh=array('','DROP+CREATE','CREATE');$Ib=array('','TRUNCATE+INSERT','INSERT');if($z=="sql")$Ib[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$L);if(!$L)$L=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($L["events"])){$L["routines"]=$L["events"]=($_GET["dump"]=="");$L["triggers"]=$L["table_style"];}echo"<tr><th>".lang(139)."<td>".html_select("output",$b->dumpOutput(),$L["output"],0)."\n";echo"<tr><th>".lang(140)."<td>".html_select("format",$b->dumpFormat(),$L["format"],0)."\n";echo($z=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Lb,$L["db_style"]).(support("routine")?checkbox("routines",1,$L["routines"],lang(141)):"").(support("event")?checkbox("events",1,$L["events"],lang(142)):"")),"<tr><th>".lang(115)."<td>".html_select('table_style',$Mh,$L["table_style"]).checkbox("auto_increment",1,$L["auto_increment"],lang(48)).(support("trigger")?checkbox("triggers",1,$L["triggers"],lang(136)):""),"<tr><th>".lang(143)."<td>".html_select('data_style',$Ib,$L["data_style"]),'</table>
<p><input type="submit" value="',lang(70),'">
<input type="hidden" name="token" value="',$ii,'">

<table cellspacing="0">
';$Xf=array();if(DB!=""){$eb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$eb onclick='formCheck(this, /^tables\\[/);'>".lang(115)."</label>","<th style='text-align: right;'><label class='block'>".lang(143)."<input type='checkbox' id='check-data'$eb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Ti="";$Nh=tables_list();foreach($Nh
as$D=>$U){$Wf=preg_replace('~_.*~','',$D);$eb=($a==""||$a==(substr($a,-1)=="%"?"$Wf%":$D));$cg="<tr><td>".checkbox("tables[]",$D,$eb,$D,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Ti.="$cg\n";else
echo"$cg<td align='right'><label class='block'><span id='Rows-".h($D)."'></span>".checkbox("data[]",$D,$eb,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Xf[$Wf]++;}echo$Ti;if($Nh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(35)."</label></thead>\n";$n=$b->databases();if($n){foreach($n
as$o){if(!information_schema($o)){$Wf=preg_replace('~_.*~','',$o);echo"<tr><td>".checkbox("databases[]",$o,$a==""||$a=="$Wf%",$o,"formUncheck('check-databases');","block")."\n";$Xf[$Wf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Rc=true;foreach($Xf
as$_=>$X){if($_!=""&&$X>1){echo($Rc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$_%")."'>".h($_)."</a>";$Rc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(68));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(144)."</a>";$J=$i->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$hd=$J;if(!$J)$J=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($hd?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($L=$J->fetch_assoc())echo'<tr'.odd().'><td>'.h($L["User"])."<td>".h($L["Host"]).'<td><a href="'.h(ME.'user='.urlencode($L["User"]).'&host='.urlencode($L["Host"])).'">'.lang(10)."</a>\n";if(!$hd||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$p&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$rd=&get_session("queries");$qd=&$rd[DB];if(!$p&&$_POST["clear"]){$qd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(69):lang(61)),$p);if(!$p&&$_POST){$ed=false;if(!isset($_GET["import"]))$I=$_POST["query"];elseif($_POST["webfile"]){$ed=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$I=($ed?fread($ed,1e6):false);}else$I=get_file("sql_file",true);if(is_string($I)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($I)+memory_get_usage()+8e6));if($I!=""&&strlen($I)<1e6){$jg=$I.(preg_match("~;[ \t\r\n]*\$~",$I)?"":";");if(!$qd||reset(end($qd))!=$jg){restart_session();$qd[]=array($jg,time());set_session("queries",$rd);stop_session();}}$rh="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Qb=";";$E=0;$sc=true;$j=connect();if(is_object($j)&&DB!="")$j->select_db(DB);$sb=0;$xc=array();$Df='[\'"'.($z=="sql"?'`#':($z=="sqlite"?'`[':($z=="mssql"?'[':''))).']|/\\*|-- |$'.($z=="pgsql"?'|\\$[^$]*\\$':'');$ki=microtime(true);parse_str($_COOKIE["adminer_export"],$za);$jc=$b->dumpFormat();unset($jc["sql"]);while($I!=""){if(!$E&&preg_match("~^$rh*+DELIMITER\\s+(\\S+)~i",$I,$C)){$Qb=$C[1];$I=substr($I,strlen($C[0]));}else{preg_match('('.preg_quote($Qb)."\\s*|$Df)",$I,$C,PREG_OFFSET_CAPTURE,$E);list($cd,$Sf)=$C[0];if(!$cd&&$ed&&!feof($ed))$I.=fread($ed,1e5);else{if(!$cd&&rtrim($I)=="")break;$E=$Sf+strlen($cd);if($cd&&rtrim($cd)!=$Qb){while(preg_match('('.($cd=='/*'?'\\*/':($cd=='['?']':(preg_match('~^-- |^#~',$cd)?"\n":preg_quote($cd)."|\\\\."))).'|$)s',$I,$C,PREG_OFFSET_CAPTURE,$E)){$Mg=$C[0][0];if(!$Mg&&$ed&&!feof($ed))$I.=fread($ed,1e5);else{$E=$C[0][1]+strlen($Mg);if($Mg[0]!="\\")break;}}}else{$sc=false;$jg=substr($I,0,$Sf);$sb++;$cg="<pre id='sql-$sb'><code class='jush-$z'>".$b->sqlCommandQuery($jg)."</code></pre>\n";if($z=="sqlite"&&preg_match("~^$rh*+ATTACH\\b~i",$jg,$C)){echo$cg,"<p class='error'>".lang(145)."\n";$xc[]=" <a href='#sql-$sb'>$sb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$cg;ob_flush();flush();}$vh=microtime(true);if($i->multi_query($jg)&&is_object($j)&&preg_match("~^$rh*+USE\\b~i",$jg))$j->query($jg);do{$J=$i->store_result();$Xh=" <span class='time'>(".format_time($vh).")</span>".(strlen($jg)<1000?" <a href='".h(ME)."sql=".urlencode(trim($jg))."'>".lang(10)."</a>":"");if($i->error){echo($_POST["only_errors"]?$cg:""),"<p class='error'>".lang(146).($i->errno?" ($i->errno)":"").": ".error()."\n";$xc[]=" <a href='#sql-$sb'>$sb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($J)){$A=$_POST["limit"];$rf=select($J,$j,array(),$A);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Ve=$J->num_rows;echo"<p>".($Ve?($A&&$Ve>$A?lang(147,$A):"").lang(148,$Ve):""),$Xh;$v="export-$sb";$Fc=", <a href='#$v' onclick=\"return !toggle('$v');\">".lang(70)."</a><span id='$v' class='hidden'>: ".html_select("output",$b->dumpOutput(),$za["output"])." ".html_select("format",$jc,$za["format"])."<input type='hidden' name='query' value='".h($jg)."'>"." <input type='submit' name='export' value='".lang(70)."'><input type='hidden' name='token' value='$ii'></span>\n";if($j&&preg_match("~^($rh|\\()*+SELECT\\b~i",$jg)&&($Ec=explain($j,$jg))){$v="explain-$sb";echo", <a href='#$v' onclick=\"return !toggle('$v');\">EXPLAIN</a>$Fc","<div id='$v' class='hidden'>\n";select($Ec,$j,$rf);echo"</div>\n";}else
echo$Fc;echo"</form>\n";}}else{if(preg_match("~^$rh*+(CREATE|DROP|ALTER)$rh++(DATABASE|SCHEMA)\\b~i",$jg)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($i->info)."'>".lang(149,$i->affected_rows)."$Xh\n";}$vh=microtime(true);}while($i->next_result());}$I=substr($I,$E);$E=0;}}}}if($sc)echo"<p class='message'>".lang(150)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(151,$sb-count($xc))," <span class='time'>(".format_time($ki).")</span>\n";}elseif($xc&&$sb>1)echo"<p class='error'>".lang(146).": ".implode("",$xc)."\n";}else
echo"<p class='error'>".upload_error($I)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$Bc="<input type='submit' value='".lang(152)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$jg=$_GET["sql"];if($_POST)$jg=$_POST["query"];elseif($_GET["history"]=="all")$jg=$qd;elseif($_GET["history"]!="")$jg=$qd[$_GET["history"]][0];echo"<p>";textarea("query",$jg,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>$Bc\n",lang(153).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(154)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$Bc":lang(155)),"</div></fieldset>\n","<fieldset><legend>".lang(156)."</legend><div>",lang(157,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(158).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(159))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(160))."\n","<input type='hidden' name='token' value='$ii'>\n";if(!isset($_GET["import"])&&$qd){print_fieldset("history",lang(161),$_GET["history"]!="");for($X=end($qd);$X;$X=prev($qd)){$_=key($qd);list($jg,$Xh,$nc)=$X;echo'<a href="'.h(ME."sql=&history=$_").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$Xh)."'>".@date("H:i:s",$Xh)."</span>"." <code class='jush-$z'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$jg)))),80,"</code>").($nc?" <span class='time'>($nc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(162)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(163)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$r=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$r):""):where($_GET,$r));$Di=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($r
as$D=>$q){if(!isset($q["privileges"][$Di?"update":"insert"])||$b->fieldName($q)=="")unset($r[$D]);}if($_POST&&!$p&&!isset($_GET["select"])){$oe=$_POST["referer"];if($_POST["insert"])$oe=($Di?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$oe))$oe=ME."select=".urlencode($a);$y=indexes($a);$zi=unique_array($_GET["where"],$y);$mg="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($oe,lang(164),$cc->delete($a,$mg,!$zi));else{$P=array();foreach($r
as$D=>$q){$X=process_input($q);if($X!==false&&$X!==null)$P[idf_escape($D)]=$X;}if($Di){if(!$P)redirect($oe);queries_redirect($oe,lang(165),$cc->update($a,$P,$mg,!$zi));if(is_ajax()){page_headers();page_messages($p);exit;}}else{$J=$cc->insert($a,$P);$fe=($J?last_id():0);queries_redirect($oe,lang(166,($fe?" $fe":"")),$J);}}}$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($r
as$D=>$q){if(isset($q["privileges"]["select"])){$Ha=convert_field($q);if($_POST["clone"]&&$q["auto_increment"])$Ha="''";if($z=="sql"&&preg_match("~enum|set~",$q["type"]))$Ha="1*".idf_escape($D);$N[]=($Ha?"$Ha AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$cc->select($a,$N,array($Z),$N,array(),(isset($_GET["select"])?2:1));$L=$J->fetch_assoc();if(!$L)$L=false;if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$r){if(!$Z){$J=$cc->select($a,array("*"),$Z,array("*"));$L=($J?$J->fetch_assoc():false);if(!$L)$L=array($cc->primary=>"");}if($L){foreach($L
as$_=>$X){if(!$Z)$L[$_]=null;$r[$_]=array("field"=>$_,"null"=>($_!=$cc->primary),"auto_increment"=>($_==$cc->primary));}}}edit_form($a,$r,$L,$Di);}elseif(isset($_GET["create"])){$a=$_GET["create"];$Ff=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$_)$Ff[$_]=$_;$tg=referencable_primary($a);$ad=array();foreach($tg
as$Ih=>$q)$ad[str_replace("`","``",$Ih)."`".str_replace("`","``",$q["field"])]=$Ih;$uf=array();$S=array();if($a!=""){$uf=fields($a);$S=table_status($a);if(!$S)$p=lang(9);}$L=$_POST;$L["fields"]=(array)$L["fields"];if($L["auto_increment_col"])$L["fields"][$L["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($L["fields"])&&!$p){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(167),drop_tables(array($a)));else{$r=array();$Fa=array();$Ii=false;$Wc=array();$tf=reset($uf);$Ca=" FIRST";foreach($L["fields"]as$_=>$q){$s=$ad[$q["type"]];$ui=($s!==null?$tg[$s]:$q);if($q["field"]!=""){if(!$q["has_default"])$q["default"]=null;if($_==$L["auto_increment_col"])$q["auto_increment"]=true;$hg=process_field($q,$ui);$Fa[]=array($q["orig"],$hg,$Ca);if($hg!=process_field($tf,$tf)){$r[]=array($q["orig"],$hg,$Ca);if($q["orig"]!=""||$Ca)$Ii=true;}if($s!==null)$Wc[idf_escape($q["field"])]=($a!=""&&$z!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$ad[$q["type"]],'source'=>array($q["field"]),'target'=>array($ui["field"]),'on_delete'=>$q["on_delete"],));$Ca=" AFTER ".idf_escape($q["field"]);}elseif($q["orig"]!=""){$Ii=true;$r[]=array($q["orig"]);}if($q["orig"]!=""){$tf=next($uf);if(!$tf)$Ca="";}}$Hf="";if($Ff[$L["partition_by"]]){$If=array();if($L["partition_by"]=='RANGE'||$L["partition_by"]=='LIST'){foreach(array_filter($L["partition_names"])as$_=>$X){$Y=$L["partition_values"][$_];$If[]="\n  PARTITION ".idf_escape($X)." VALUES ".($L["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Hf.="\nPARTITION BY $L[partition_by]($L[partition])".($If?" (".implode(",",$If)."\n)":($L["partitions"]?" PARTITIONS ".(+$L["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$Hf.="\nREMOVE PARTITIONING";$De=lang(168);if($a==""){cookie("adminer_engine",$L["Engine"]);$De=lang(169);}$D=trim($L["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($D),$De,alter_table($a,$D,($z=="sqlite"&&($Ii||$Wc)?$Fa:$r),$Wc,($L["Comment"]!=$S["Comment"]?$L["Comment"]:null),($L["Engine"]&&$L["Engine"]!=$S["Engine"]?$L["Engine"]:""),($L["Collation"]&&$L["Collation"]!=$S["Collation"]?$L["Collation"]:""),($L["Auto_increment"]!=""?number($L["Auto_increment"]):""),$Hf));}}page_header(($a!=""?lang(42):lang(71)),$p,array("table"=>$a),h($a));if(!$_POST){$L=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($wi["int"])?"int":(isset($wi["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$L=$S;$L["name"]=$a;$L["fields"]=array();if(!$_GET["auto_increment"])$L["Auto_increment"]="";foreach($uf
as$q){$q["has_default"]=isset($q["default"]);$L["fields"][]=$q;}if(support("partitioning")){$fd="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$J=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $fd ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($L["partition_by"],$L["partitions"],$L["partition"])=$J->fetch_row();$If=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $fd AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$If[""]="";$L["partition_names"]=array_keys($If);$L["partition_values"]=array_values($If);}}}$pb=collations();$uc=engines();foreach($uc
as$tc){if(!strcasecmp($tc,$L["Engine"])){$L["Engine"]=$tc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(170),': <input name="name" maxlength="64" value="',h($L["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($uc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(171).")")+$uc,$L["Engine"])."</select>":""),' ',($pb&&!preg_match("~sqlite|mssql~",$z)?html_select("Collation",array(""=>"(".lang(92).")")+$pb,$L["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$ub=($_POST?$_POST["comments"]:$L["Comment"]!="");if(!$_POST&&!$ub){foreach($L["fields"]as$q){if($q["comment"]!=""){$ub=true;break;}}}edit_fields($L["fields"],$pb,"TABLE",$ad,$ub);echo'</table>
<p>
',lang(48),': <input type="number" name="Auto_increment" size="6" value="',h($L["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(172),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($ub?" checked":"").">".lang(47)."</label>".' <input name="Comment" id="Comment" value="'.h($L["Comment"]).'" maxlength="'.($i->server_info>=5.5?2048:60).'"'.($ub?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}if(support("partitioning")){$Gf=preg_match('~RANGE|LIST~',$L["partition_by"]);print_fieldset("partition",lang(173),$L["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$Ff,$L["partition_by"])."</select>",'(<input name="partition" value="',h($L["partition"]),'">)
',lang(174),': <input type="number" name="partitions" class="size',($Gf||!$L["partition_by"]?" hidden":""),'" value="',h($L["partitions"]),'">
<table cellspacing="0" id="partition-table"',($Gf?"":" class='hidden'"),'>
<thead><tr><th>',lang(175),'<th>',lang(176),'</thead>
';foreach($L["partition_names"]as$_=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($_==count($L["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($L["partition_values"][$_]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$_d=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($i->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$_d[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($i->server_info>=5.7?'|InnoDB':'').'~i',$S["Engine"]))$_d[]="SPATIAL";$y=indexes($a);$ag=array();if($z=="mongo"){$ag=$y["_id_"];unset($_d[0]);unset($y["_id_"]);}$L=$_POST;if($_POST&&!$p&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($L["indexes"]as$x){$D=$x["name"];if(in_array($x["type"],$_d)){$g=array();$le=array();$Sb=array();$P=array();ksort($x["columns"]);foreach($x["columns"]as$_=>$f){if($f!=""){$ke=$x["lengths"][$_];$Rb=$x["descs"][$_];$P[]=idf_escape($f).($ke?"(".(+$ke).")":"").($Rb?" DESC":"");$g[]=$f;$le[]=($ke?$ke:null);$Sb[]=$Rb;}}if($g){$Cc=$y[$D];if($Cc){ksort($Cc["columns"]);ksort($Cc["lengths"]);ksort($Cc["descs"]);if($x["type"]==$Cc["type"]&&array_values($Cc["columns"])===$g&&(!$Cc["lengths"]||array_values($Cc["lengths"])===$le)&&array_values($Cc["descs"])===$Sb){unset($y[$D]);continue;}}$c[]=array($x["type"],$D,$P);}}}foreach($y
as$D=>$Cc)$c[]=array($Cc["type"],$D,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(177),alter_indexes($a,$c));}page_header(lang(130),$p,array("table"=>$a),h($a));$r=array_keys(fields($a));if($_POST["add"]){foreach($L["indexes"]as$_=>$x){if($x["columns"][count($x["columns"])]!="")$L["indexes"][$_]["columns"][]="";}$x=end($L["indexes"]);if($x["type"]||array_filter($x["columns"],'strlen'))$L["indexes"][]=array("columns"=>array(1=>""));}if(!$L){foreach($y
as$_=>$x){$y[$_]["name"]=$_;$y[$_]["columns"][]="";}$y[]=array("columns"=>array(1=>""));$L["indexes"]=$y;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(178),'<th><input type="submit" class="wayoff">',lang(179),'<th id="label-name">',lang(125);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.3.1' alt='+' title='<?php echo
lang(99),'\'></noscript>&nbsp;
</thead>
';if($ag){echo"<tr><td>PRIMARY<td>";foreach($ag["columns"]as$_=>$f){echo
select_input(" disabled",$r,$f),"<label><input disabled type='checkbox'>".lang(56)."</label> ";}echo"<td><td>\n";}$Qd=1;foreach($L["indexes"]as$x){if(!$_POST["drop_col"]||$Qd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Qd][type]",array(-1=>"")+$_d,$x["type"],($Qd==count($L["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($x["columns"]);$u=1;foreach($x["columns"]as$_=>$f){echo"<span>".select_input(" name='indexes[$Qd][columns][$u]' onchange=\"".($u==count($x["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($z=="sql"?"":$_GET["indexes"]."_"))."');\" title='".lang(45)."'",($r?array_combine($r,$r):$r),$f),($z=="sql"||$z=="mssql"?"<input type='number' name='indexes[$Qd][lengths][$u]' class='size' value='".h($x["lengths"][$_])."' title='".lang(97)."'>":""),($z!="sql"?checkbox("indexes[$Qd][descs][$u]",1,$x["descs"][$_],lang(56)):"")," </span>";$u++;}echo"<td><input name='indexes[$Qd][name]' value='".h($x["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Qd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.1' alt='x' title='".lang(102)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Qd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["database"])){$L=$_POST;if($_POST&&!$p&&!isset($_POST["add_x"])){$D=trim($L["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(180),drop_databases(array(DB)));}elseif(DB!==$D){if(DB!=""){$_GET["db"]=$D;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($D),lang(181),rename_database($D,$L["collation"]));}else{$n=explode("\n",str_replace("\r","",$D));$Ch=true;$ee="";foreach($n
as$o){if(count($n)==1||$o!=""){if(!create_database($o,$L["collation"]))$Ch=false;$ee=$o;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($ee),lang(182),$Ch);}}else{if(!$L["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($D).(preg_match('~^[a-z0-9_]+$~i',$L["collation"])?" COLLATE $L[collation]":""),substr(ME,0,-1),lang(183));}}page_header(DB!=""?lang(64):lang(106),$p,array(),h(DB));$pb=collations();$D=DB;if($_POST)$D=$L["name"];elseif(DB!="")$L["collation"]=db_collation(DB,$pb);elseif($z=="sql"){foreach(get_vals("SHOW GRANTS")as$hd){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$hd,$C)&&$C[1]){$D=stripcslashes(idf_unescape("`$C[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($D,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($D).'</textarea><br>':'<input name="name" id="name" value="'.h($D).'" maxlength="64" autocapitalize="off">')."\n".($pb?html_select("collation",array(""=>"(".lang(92).")")+$pb,$L["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".lang(99)."'>\n";echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["scheme"])){$L=$_POST;if($_POST&&!$p){$B=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$B,lang(184));else{$D=trim($L["name"]);$B.=urlencode($D);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($D),$B,lang(185));elseif($_GET["ns"]!=$D)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($D),$B,lang(186));else
redirect($B);}}page_header($_GET["ns"]!=""?lang(65):lang(66),$p);if(!$L)$L["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($L["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(187).": ".h($da),$p);$Hg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$yd=array();$yf=array();foreach($Hg["fields"]as$u=>$q){if(substr($q["inout"],-3)=="OUT")$yf[$u]="@".idf_escape($q["field"])." AS ".idf_escape($q["field"]);if(!$q["inout"]||substr($q["inout"],0,2)=="IN")$yd[]=$u;}if(!$p&&$_POST){$Ya=array();foreach($Hg["fields"]as$_=>$q){if(in_array($_,$yd)){$X=process_input($q);if($X===false)$X="''";if(isset($yf[$_]))$i->query("SET @".idf_escape($q["field"])." = $X");}$Ya[]=(isset($yf[$_])?"@".idf_escape($q["field"]):$X);}$I=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Ya).")";echo"<p><code class='jush-$z'>".h($I)."</code> <a href='".h(ME)."sql=".urlencode($I)."'>".lang(10)."</a>\n";if(!$i->multi_query($I))echo"<p class='error'>".error()."\n";else{$j=connect();if(is_object($j))$j->select_db(DB);do{$J=$i->store_result();if(is_object($J))select($J,$j);else
echo"<p class='message'>".lang(188,$i->affected_rows)."\n";}while($i->next_result());if($yf)select($i->query("SELECT ".implode(", ",$yf)));}}echo'
<form action="" method="post">
';if($yd){echo"<table cellspacing='0'>\n";foreach($yd
as$_){$q=$Hg["fields"][$_];$D=$q["field"];echo"<tr><th>".$b->fieldName($q);$Y=$_POST["fields"][$D];if($Y!=""){if($q["type"]=="enum")$Y=+$Y;if($q["type"]=="set")$Y=array_sum($Y);}input($q,$Y,(string)$_POST["function"][$D]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(187),'">
<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$D=$_GET["name"];$L=$_POST;if($_POST&&!$p&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$De=($_POST["drop"]?lang(189):($D!=""?lang(190):lang(191)));$oe=ME."table=".urlencode($a);if(!$_POST["drop"]){$L["source"]=array_filter($L["source"],'strlen');ksort($L["source"]);$Qh=array();foreach($L["source"]as$_=>$X)$Qh[$_]=$L["target"][$_];$L["target"]=$Qh;}if($z=="sqlite")queries_redirect($oe,$De,recreate_table($a,$a,array(),array(),array(" $D"=>($_POST["drop"]?"":" ".format_foreign_key($L)))));else{$c="ALTER TABLE ".table($a);$ec="\nDROP ".($z=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($D);if($_POST["drop"])query_redirect($c.$ec,$oe,$De);else{query_redirect($c.($D!=""?"$ec,":"")."\nADD".format_foreign_key($L),$oe,$De);$p=lang(192)."<br>$p";}}}page_header(lang(193),$p,array("table"=>$a),h($a));if($_POST){ksort($L["source"]);if($_POST["add"])$L["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$L["target"]=array();}elseif($D!=""){$ad=foreign_keys($a);$L=$ad[$D];$L["source"][]="";}else{$L["table"]=$a;$L["source"]=array("");}$qh=array_keys(fields($a));$Qh=($a===$L["table"]?$qh:array_keys(fields($L["table"])));$sg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($L["db"]==""&&$L["ns"]==""){echo
lang(194),':
',html_select("table",$sg,$L["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(195),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(132),'<th id="label-target">',lang(133),'</thead>
';$Qd=0;foreach($L["source"]as$_=>$X){echo"<tr>","<td>".html_select("source[".(+$_)."]",array(-1=>"")+$qh,$X,($Qd==count($L["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$_)."]",$Qh,$L["target"][$_],1,"label-target");$Qd++;}echo'</table>
<p>
',lang(94),': ',html_select("on_delete",array(-1=>"")+explode("|",$ff),$L["on_delete"]),' ',lang(93),': ',html_select("on_update",array(-1=>"")+explode("|",$ff),$L["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(196),'"></noscript>
';}if($D!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$L=$_POST;$vf="VIEW";if($z=="pgsql"&&$a!=""){$xh=table_status($a);$vf=strtoupper($xh["Engine"]);}if($_POST&&!$p){$D=trim($L["name"]);$Ha=" AS\n$L[select]";$oe=ME."table=".urlencode($D);$De=lang(197);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$D&&$z!="sqlite"&&$U=="VIEW"&&$vf=="VIEW")query_redirect(($z=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($D).$Ha,$oe,$De);else{$Sh=$D."_adminer_".uniqid();drop_create("DROP $vf ".table($a),"CREATE $U ".table($D).$Ha,"DROP $U ".table($D),"CREATE $U ".table($Sh).$Ha,"DROP $U ".table($Sh),($_POST["drop"]?substr(ME,0,-1):$oe),lang(198),$De,lang(199),$a,$D);}}if(!$_POST&&$a!=""){$L=view($a);$L["name"]=$a;$L["materialized"]=($vf!="VIEW");if(!$p)$p=error();}page_header(($a!=""?lang(41):lang(200)),$p,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(125),': <input name="name" value="',h($L["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$L["materialized"],lang(127)):""),'<p>';textarea("select",$L["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Hd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$yh=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$L=$_POST;if($_POST&&!$p){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(201));elseif(in_array($L["INTERVAL_FIELD"],$Hd)&&isset($yh[$L["STATUS"]])){$Og="\nON SCHEDULE ".($L["INTERVAL_VALUE"]?"EVERY ".q($L["INTERVAL_VALUE"])." $L[INTERVAL_FIELD]".($L["STARTS"]?" STARTS ".q($L["STARTS"]):"").($L["ENDS"]?" ENDS ".q($L["ENDS"]):""):"AT ".q($L["STARTS"]))." ON COMPLETION".($L["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(202):lang(203)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Og.($aa!=$L["EVENT_NAME"]?"\nRENAME TO ".idf_escape($L["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($L["EVENT_NAME"]).$Og)."\n".$yh[$L["STATUS"]]." COMMENT ".q($L["EVENT_COMMENT"]).rtrim(" DO\n$L[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(204).": ".h($aa):lang(205)),$p);if(!$L&&$aa!=""){$M=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$L=reset($M);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(125),'<td><input name="EVENT_NAME" value="',h($L["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(206),'<td><input name="STARTS" value="',h("$L[EXECUTE_AT]$L[STARTS]"),'">
<tr><th title="datetime">',lang(207),'<td><input name="ENDS" value="',h($L["ENDS"]),'">
<tr><th>',lang(208),'<td><input type="number" name="INTERVAL_VALUE" value="',h($L["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Hd,$L["INTERVAL_FIELD"]),'<tr><th>',lang(109),'<td>',html_select("STATUS",$yh,$L["STATUS"]),'<tr><th>',lang(47),'<td><input name="EVENT_COMMENT" value="',h($L["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$L["ON_COMPLETION"]=="PRESERVE",lang(209)),'</table>
<p>';textarea("EVENT_DEFINITION",$L["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Hg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$L=$_POST;$L["fields"]=(array)$L["fields"];if($_POST&&!process_fields($L["fields"])&&!$p){$Sh="$L[name]_adminer_".uniqid();drop_create("DROP $Hg ".idf_escape($da),create_routine($Hg,$L),"DROP $Hg ".idf_escape($L["name"]),create_routine($Hg,array("name"=>$Sh)+$L),"DROP $Hg ".idf_escape($Sh),substr(ME,0,-1),lang(210),lang(211),lang(212),$da,$L["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(213):lang(214)).": ".h($da):(isset($_GET["function"])?lang(215):lang(216))),$p);if(!$_POST&&$da!=""){$L=routine($da,$Hg);$L["name"]=$da;}$pb=get_vals("SHOW CHARACTER SET");sort($pb);$Jg=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(125),': <input name="name" value="',h($L["name"]),'" maxlength="64" autocapitalize="off">
',($Jg?lang(19).": ".html_select("language",$Jg,$L["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($L["fields"],$pb,$Hg);if(isset($_GET["function"])){echo"<tr><td>".lang(217);edit_type("returns",$L["returns"],$pb);}echo'</table>
<p>';textarea("definition",$L["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$L=$_POST;if($_POST&&!$p){$B=substr(ME,0,-1);$D=trim($L["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$B,lang(218));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($D),$B,lang(219));elseif($fa!=$D)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($D),$B,lang(220));else
redirect($B);}page_header($fa!=""?lang(221).": ".h($fa):lang(222),$p);if(!$L)$L["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($L["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$L=$_POST;if($_POST&&!$p){$B=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$B,lang(223));else
query_redirect("CREATE TYPE ".idf_escape(trim($L["name"]))." $L[as]",$B,lang(224));}page_header($ga!=""?lang(225).": ".h($ga):lang(226),$p);if(!$L)$L["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";else{echo"<input name='name' value='".h($L['name'])."' autocapitalize='off'>\n";textarea("as",$L["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$D=$_GET["name"];$si=trigger_options();$L=(array)trigger($D)+array("Trigger"=>$a."_bi");if($_POST){if(!$p&&in_array($_POST["Timing"],$si["Timing"])&&in_array($_POST["Event"],$si["Event"])&&in_array($_POST["Type"],$si["Type"])){$ef=" ON ".table($a);$ec="DROP TRIGGER ".idf_escape($D).($z=="pgsql"?$ef:"");$oe=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($ec,$oe,lang(227));else{if($D!="")queries($ec);queries_redirect($oe,($D!=""?lang(228):lang(229)),queries(create_trigger($ef,$_POST)));if($D!="")queries(create_trigger($ef,$L+array("Type"=>reset($si["Type"]))));}}$L=$_POST;}page_header(($D!=""?lang(230).": ".h($D):lang(231)),$p,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(232),'<td>',html_select("Timing",$si["Timing"],$L["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(233),'<td>',html_select("Event",$si["Event"],$L["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$si["Event"])?" <input name='Of' value='".h($L["Of"])."' class='hidden'>":""),'<tr><th>',lang(46),'<td>',html_select("Type",$si["Type"],$L["Type"]),'</table>
<p>',lang(125),': <input name="Trigger" value="',h($L["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$L["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($D!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$fg=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$L){foreach(explode(",",($L["Privilege"]=="Grant option"?"":$L["Context"]))as$_b)$fg[$_b][$L["Privilege"]]=$L["Comment"];}$fg["Server Admin"]+=$fg["File access on server"];$fg["Databases"]["Create routine"]=$fg["Procedures"]["Create routine"];unset($fg["Procedures"]["Create routine"]);$fg["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$fg["Columns"][$X]=$fg["Tables"][$X];unset($fg["Server Admin"]["Usage"]);foreach($fg["Tables"]as$_=>$X)unset($fg["Databases"][$_]);$Qe=array();if($_POST){foreach($_POST["objects"]as$_=>$X)$Qe[$X]=(array)$Qe[$X]+(array)$_POST["grants"][$_];}$id=array();$cf="";if(isset($_GET["host"])&&($J=$i->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($L=$J->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$L[0],$C)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$C[1],$we,PREG_SET_ORDER)){foreach($we
as$X){if($X[1]!="USAGE")$id["$C[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$L[0]))$id["$C[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$L[0],$C))$cf=$C[1];}}if($_POST&&!$p){$df=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $df",ME."privileges=",lang(234));else{$Se=q($_POST["user"])."@".q($_POST["host"]);$Jf=$_POST["pass"];if($Jf!=''&&!$_POST["hashed"]){$Jf=$i->result("SELECT PASSWORD(".q($Jf).")");$p=!$Jf;}$Eb=false;if(!$p){if($df!=$Se){$Eb=queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Se IDENTIFIED BY PASSWORD ".q($Jf));$p=!$Eb;}elseif($Jf!=$cf)queries("SET PASSWORD FOR $Se = ".q($Jf));}if(!$p){$Eg=array();foreach($Qe
as$Xe=>$hd){if(isset($_GET["grant"]))$hd=array_filter($hd);$hd=array_keys($hd);if(isset($_GET["grant"]))$Eg=array_diff(array_keys(array_filter($Qe[$Xe],'strlen')),$hd);elseif($df==$Se){$af=array_keys((array)$id[$Xe]);$Eg=array_diff($af,$hd);$hd=array_diff($hd,$af);unset($id[$Xe]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Xe,$C)&&(!grant("REVOKE",$Eg,$C[2]," ON $C[1] FROM $Se")||!grant("GRANT",$hd,$C[2]," ON $C[1] TO $Se"))){$p=true;break;}}}if(!$p&&isset($_GET["host"])){if($df!=$Se)queries("DROP USER $df");elseif(!isset($_GET["grant"])){foreach($id
as$Xe=>$Eg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Xe,$C))grant("REVOKE",array_keys($Eg),$C[2]," ON $C[1] FROM $Se");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(235):lang(236)),!$p);if($Eb)$i->query("DROP USER $Se");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(144)),$p,array("privileges"=>array('',lang(68))));if($_POST){$L=$_POST;$id=$Qe;}else{$L=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$L["pass"]=$cf;if($cf!="")$L["hashed"]=true;$id[(DB==""||$id?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($L["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($L["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($L["pass"]),'">
';if(!$L["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$L["hashed"],lang(237),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(68).doc_link(array('sql'=>"grant.html#priv_level"));$u=0;foreach($id
as$Xe=>$hd){echo'<th>'.($Xe!="*.*"?"<input name='objects[$u]' value='".h($Xe)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$u]' value='*.*' size='10'>*.*");$u++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(129),"Columns"=>lang(45),"Procedures"=>lang(238),)as$_b=>$Rb){foreach((array)$fg[$_b]as$eg=>$tb){echo"<tr".odd()."><td".($Rb?">$Rb<td":" colspan='2'").' lang="en" title="'.h($tb).'">'.h($eg);$u=0;foreach($id
as$Xe=>$hd){$D="'grants[$u][".h(strtoupper($eg))."]'";$Y=$hd[strtoupper($eg)];if($_b=="Server Admin"&&$Xe!=(isset($id["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$D><option><option value='1'".($Y?" selected":"").">".lang(239)."<option value='0'".($Y=="0"?" selected":"").">".lang(240)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$D value='1'".($Y?" checked":"").($eg=="All privileges"?" id='grants-$u-all'":($eg=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$u-all');\""))."></label>";$u++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$p){$Yd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Yd++;}queries_redirect(ME."processlist=",lang(241,$Yd),$Yd||!$_POST["kill"]);}page_header(lang(107),$p);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$u=-1;foreach(process_list()as$u=>$L){if(!$u){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($L
as$_=>$X)echo"<th>$_".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($_),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$L[$z=="sql"?"Id":"pid"],0):"");foreach($L
as$_=>$X)echo"<td>".(($z=="sql"&&$_=="Info"&&preg_match("~Query|Killed~",$L["Command"])&&$X!="")||($z=="pgsql"&&$_=="current_query"&&$X!="<IDLE>")||($z=="oracle"&&$_=="sql_text"&&$X!="")?"<code class='jush-$z'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($L["db"]!=""?"db=".urlencode($L["db"])."&":"")."sql=".urlencode($X)).'">'.lang(242).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($u+1)."/".lang(243,max_connections()),"<p><input type='submit' value='".lang(244)."'>\n";}echo'<input type="hidden" name="token" value="',$ii,'">
</form>
';}elseif(isset($_GET["replication"])){page_header(lang(110));echo"<h3>".lang(245).doc_link(array("sql"=>"show-master-status.html"))."</h3>\n";$te=replication_status("MASTER");if(!$te)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($te[0]as$_=>$X){echo"<tr>","<th>".h($_),"<td>".nbsp($X);}echo"</table>\n";}$lh=replication_status("SLAVE");if($lh){echo"<h3>".lang(246).doc_link(array("sql"=>"show-slave-status.html"))."</h3>\n";foreach($lh[0]as$kh){echo"<table cellspacing='0'>\n";foreach($kh
as$_=>$X){echo"<tr>","<th>".h($_),"<td>".nbsp($X);}echo"</table>\n";}}}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$y=indexes($a);$r=fields($a);$ad=column_foreign_keys($a);$Ze="";if($S["Oid"]){$Ze=($z=="sqlite"?"rowid":"oid");$y[]=array("type"=>"PRIMARY","columns"=>array($Ze));}parse_str($_COOKIE["adminer_import"],$_a);$Fg=array();$g=array();$Wh=null;foreach($r
as$_=>$q){$D=$b->fieldName($q);if(isset($q["privileges"]["select"])&&$D!=""){$g[$_]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($q))$Wh=$b->selectLengthProcess();}$Fg+=$q["privileges"];}list($N,$jd)=$b->selectColumnsProcess($g,$y);$Ld=count($jd)<count($N);$Z=$b->selectSearchProcess($r,$y);$of=$b->selectOrderProcess($r,$y);$A=$b->selectLimitProcess();$fd=($N?implode(", ",$N):"*".($Ze?", $Ze":"")).convert_fields($g,$r,$N)."\nFROM ".table($a);$kd=($jd&&$Ld?"\nGROUP BY ".implode(", ",$jd):"").($of?"\nORDER BY ".implode(", ",$of):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$_i=>$L){$Ha=convert_field($r[key($L)]);$N=array($Ha?$Ha:idf_escape(key($L)));$Z[]=where_check($_i,$r);$K=$cc->select($a,$N,$Z,$N);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$p){$Xi=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$fb=array();foreach($_POST["check"]as$cb)$fb[]=where_check($cb,$r);$Xi[]="((".implode(") OR (",$fb)."))";}$Xi=($Xi?"\nWHERE ".implode(" AND ",$Xi):"");$ag=$Bi=null;foreach($y
as$x){if($x["type"]=="PRIMARY"){$ag=array_flip($x["columns"]);$Bi=($N?$ag:array());break;}}foreach((array)$Bi
as$_=>$X){if(in_array(idf_escape($_),$N))unset($Bi[$_]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Bi===array())$I="SELECT $fd$Xi$kd";else{$yi=array();foreach($_POST["check"]as$X)$yi[]="(SELECT".limit($fd,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$r).$kd,1).")";$I=implode(" UNION ALL ",$yi);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$ad)){if($_POST["save"]||$_POST["delete"]){$J=true;$Aa=0;$P=array();if(!$_POST["delete"]){foreach($g
as$D=>$X){$X=process_input($r[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Bi===array()&&is_array($_POST["check"]))||$Ld){$J=($_POST["delete"]?$cc->delete($a,$Xi):($_POST["clone"]?queries("INSERT $I$Xi"):$cc->update($a,$P,$Xi)));$Aa=$i->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Wi="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$r);$J=($_POST["delete"]?$cc->delete($a,$Wi,1):($_POST["clone"]?queries("INSERT".limit1($I,$Wi)):$cc->update($a,$P,$Wi)));if(!$J)break;$Aa+=$i->affected_rows;}}}$De=lang(247,$Aa);if($_POST["clone"]&&$J&&$Aa==1){$fe=last_id();if($fe)$De=lang(166," $fe");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$De,$J);if(!$_POST["delete"]){edit_form($a,$r,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$p=lang(248);else{$J=true;$Aa=0;foreach($_POST["val"]as$_i=>$L){$P=array();foreach($L
as$_=>$X){$_=bracket_escape($_,1);$P[idf_escape($_)]=(preg_match('~char|text~',$r[$_]["type"])||$X!=""?$b->processInput($r[$_],$X):"NULL");}$J=$cc->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($_i,$r),!($Ld||$Bi===array())," ");if(!$J)break;$Aa+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(247,$Aa),$J);}}elseif(!is_string($Oc=get_file("csv_file",true)))$p=upload_error($Oc);elseif(!preg_match('~~u',$Oc))$p=lang(249);else{cookie("adminer_import","output=".urlencode($_a["output"])."&format=".urlencode($_POST["separator"]));$J=true;$qb=array_keys($r);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Oc,$we);$Aa=count($we[0]);$cc->begin();$Zg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($we[0]as$_=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Zg]*)$Zg~",$X.$Zg,$xe);if(!$_&&!array_diff($xe[1],$qb)){$qb=$xe[1];$Aa--;}else{$P=array();foreach($xe[1]as$u=>$mb)$P[idf_escape($qb[$u])]=($mb==""&&$r[$qb[$u]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$mb))));$M[]=$P;}}$J=(!$M||$cc->insertUpdate($a,$M,$ag));if($J)$J=$cc->commit();queries_redirect(remove_from_uri("page"),lang(250,$Aa),$J);$cc->rollback();}}}$Ih=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(50).": $Ih",$p);$P=null;if(isset($Fg["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if(count($ad[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$g&&support("table"))echo"<p class='error'>".lang(251).($r?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$g);$b->selectSearchPrint($Z,$g,$y);$b->selectOrderPrint($of,$g,$y);$b->selectLimitPrint($A);$b->selectLengthPrint($Wh);$b->selectActionPrint($y);echo"</form>\n";$G=$_GET["page"];if($G=="last"){$dd=$i->result(count_rows($a,$Z,$Ld,$jd));$G=floor(max(0,$dd-1)/$A);}$Wg=$N;if(!$Wg){$Wg[]="*";if($Ze)$Wg[]=$Ze;}$Ab=convert_fields($g,$r,$N);if($Ab)$Wg[]=substr($Ab,2);$J=$cc->select($a,$Wg,$Z,$jd,$of,$A,$G,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($z=="mssql"&&$G)$J->seek($A*$G);$rc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($G&&$z=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$A&&$jd&&$Ld&&$z=="sql")$dd=$i->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".lang(12)."\n";else{$Pa=$b->backwardKeys($a,$Ih);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$jd&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(252)."</a>");$Pe=array();$gd=array();reset($N);$og=1;foreach($M[0]as$_=>$X){if($_!=$Ze){$X=$_GET["columns"][key($N)];$q=$r[$N?($X?$X["col"]:current($N)):$_];$D=($q?$b->fieldName($q,$og):($X["fun"]?"*":$_));if($D!=""){$og++;$Pe[$_]=$D;$f=idf_escape($_);$ud=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($_);$Rb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($ud.($of[0]==$f||$of[0]==$_||(!$of&&$Ld&&$jd[0]==$f)?$Rb:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($ud.$Rb)."' title='".lang(56)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($_)).'\'); return false;" title="'.lang(53).'" class="text jsonly"> =</a>';echo"</span>";}$gd[$_]=$X["fun"];next($N);}}$le=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$_=>$X)$le[$_]=max($le[$_],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".lang(253):"")."</thead>\n";if(is_ajax()){if($A%2==1&&$G%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$ad)as$Oe=>$L){$zi=unique_array($M[$Oe],$y);if(!$zi){$zi=array();foreach($M[$Oe]as$_=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$_))$zi[$_]=$X;}}$_i="";foreach($zi
as$_=>$X){if(($z=="sql"||$z=="pgsql")&&strlen($X)>64){$_=(strpos($_,'(')?$_:idf_escape($_));$_="MD5(".($z=='sql'&&preg_match("~^utf8_~",$r[$_]["collation"])?$_:"CONVERT($_ USING ".charset($i).")").")";$X=md5($X);}$_i.="&".($X!==null?urlencode("where[".bracket_escape($_)."]")."=".urlencode($X):"null%5B%5D=".urlencode($_));}echo"<tr".odd().">".(!$jd&&$N?"":"<td>".checkbox("check[]",substr($_i,1),in_array(substr($_i,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Ld||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$_i)."'>".lang(254)."</a>"));foreach($L
as$_=>$X){if(isset($Pe[$_])){$q=$r[$_];if($X!=""&&(!isset($rc[$_])||$rc[$_]!=""))$rc[$_]=(is_mail($X)?$Pe[$_]:"");$B="";if(preg_match('~blob|bytea|raw|file~',$q["type"])&&$X!="")$B=ME.'download='.urlencode($a).'&field='.urlencode($_).$_i;if(!$B&&$X!==null){foreach((array)$ad[$_]as$s){if(count($ad[$_])==1||end($s["source"])==$_){$B="";foreach($s["source"]as$u=>$qh)$B.=where_link($u,$s["target"][$u],$M[$Oe][$qh]);$B=($s["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($s["db"]),ME):ME).'select='.urlencode($s["table"]).$B;if($s["ns"])$B=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($s["ns"]),$B);if(count($s["source"])==1)break;}}}if($_=="COUNT(*)"){$B=ME."select=".urlencode($a);$u=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$zi))$B.=where_link($u++,$W["col"],$W["val"],$W["op"]);}foreach($zi
as$Sd=>$W)$B.=where_link($u++,$Sd,$W);}$X=select_value($X,$B,$q,$Wh);$v=h("val[$_i][".bracket_escape($_)."]");$Y=$_POST["val"][$_i][bracket_escape($_)];$mc=!is_array($L[$_])&&is_utf8($X)&&$M[$Oe][$_]==$L[$_]&&!$gd[$_];$Vh=preg_match('~text|lob~',$q["type"]);if(($_GET["modify"]&&$mc)||$Y!==null){$md=h($Y!==null?$Y:$L[$_]);echo"<td>".($Vh?"<textarea name='$v' cols='30' rows='".(substr_count($L[$_],"\n")+1)."'>$md</textarea>":"<input name='$v' value='$md' size='$le[$_]'>");}else{$qe=strpos($X,"<i>...</i>");echo"<td id='$v' onclick=\"selectClick(this, event, ".($qe?2:($Vh?1:0)).($mc?"":", '".h(lang(255))."'").");\">$X";}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$M[$Oe]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$G)&&!is_ajax()){$Ac=true;if($_GET["page"]!="last"){if(!+$A)$dd=count($M);elseif($z!="sql"||!$Ld){$dd=($Ld?false:found_rows($S,$Z));if($dd<max(1e4,2*($G+1)*$A))$dd=reset(slow_query(count_rows($a,$Z,$Ld,$jd)));else$Ac=false;}}if(+$A&&($dd===false||$dd>$A||$G)){echo"<p class='pages'>";$ze=($dd===false?$G+(count($M)>=$A?2:1):floor(($dd-1)/$A));if($z!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(256)."', '".($G+1)."'), event); return false;\">".lang(256)."</a>:",pagination(0,$G).($G>5?" ...":"");for($u=max(1,$G-4);$u<min($ze,$G+5);$u++)echo
pagination($u,$G);if($ze>0){echo($G+5<$ze?" ...":""),($Ac&&$dd!==false?pagination($ze,$G):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ze'>".lang(257)."</a>");}echo(($dd===false?count($M)+1:$dd-$G*$A)>$A?' <a href="'.h(remove_from_uri("page")."&page=".($G+1)).'" onclick="return !selectLoadMore(this, '.(+$A).', \''.lang(258).'...\');" class="loadmore">'.lang(259).'</a>':'');}else{echo
lang(256).":",pagination(0,$G).($G>1?" ...":""),($G?pagination($G,$G):""),($ze>$G?pagination($G+1,$G).($ze>$G+1?" ...":""):"");}}echo"<p class='count'>\n",($dd!==false?"(".($Ac?"":"~ ").lang(148,$dd).") ":"");$Yb=($Ac?"":"~ ").$dd;echo
checkbox("all",1,0,lang(260),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Yb' : checked); selectCount('selected2', this.checked || !checked ? '$Yb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(252),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(248).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(118),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(242),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$bd=$b->dumpFormat();foreach((array)$_GET["columns"]as$f){if($f["fun"]){unset($bd['sql']);break;}}if($bd){print_fieldset("export",lang(70)." <span id='selected2'></span>");$zf=$b->dumpOutput();echo($zf?html_select("output",$zf,$_a["output"])." ":""),html_select("format",$bd,$_a["format"])," <input type='submit' name='export' value='".lang(70)."'>\n","</div></fieldset>\n";}echo(!$jd&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(69),!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$_a["format"],1);echo" <input type='submit' name='import' value='".lang(69)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($rc,'strlen'),$g);echo"<p><input type='hidden' name='token' value='$ii'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$xh=isset($_GET["status"]);page_header($xh?lang(109):lang(108));$Pi=($xh?show_status():show_variables());if(!$Pi)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($Pi
as$_=>$X){echo"<tr>","<th><code class='jush-".$z.($xh?"status":"set")."'>".h($_)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Fh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$D=>$S){json_row("Comment-$D",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$_)json_row("$_-$D",nbsp($S[$_]));foreach($Fh+array("Auto_increment"=>0,"Rows"=>0)as$_=>$X){if($S[$_]!=""){$X=format_number($S[$_]);json_row("$_-$D",($_=="Rows"&&$X&&$S["Engine"]==($th=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Fh[$_]))$Fh[$_]+=($S["Engine"]!="InnoDB"||$_!="Data_free"?$S[$_]:0);}elseif(array_key_exists($_,$S))json_row("$_-$D");}}}foreach($Fh
as$_=>$X)json_row("sum-$_",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$i->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$o=>$X){json_row("tables-$o",$X);json_row("size-$o",db_size($o));}json_row("");}exit;}else{$Oh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Oh&&!$p&&!$_POST["search"]){$J=true;$De="";if($z=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$J=truncate_tables($_POST["tables"]);$De=lang(261);}elseif($_POST["move"]){$J=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$De=lang(262);}elseif($_POST["copy"]){$J=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$De=lang(263);}elseif($_POST["drop"]){if($_POST["views"])$J=drop_views($_POST["views"]);if($J&&$_POST["tables"])$J=drop_tables($_POST["tables"]);$De=lang(264);}elseif($z!="sql"){$J=($z=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$De=lang(265);}elseif(!$_POST["tables"])$De=lang(9);elseif($J=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($L=$J->fetch_assoc())$De.="<b>".h($L["Table"])."</b>: ".h($L["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$De,$J);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(73).": ".h($_GET["ns"])),$p,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(266)."</h3>\n";$Nh=tables_list();if(!$Nh)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(267)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(53)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$Zb=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);" class="jsonly">','<th>'.lang(129),'<td>'.lang(268).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(114).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(269).$Zb,'<td>'.lang(270).$Zb,'<td>'.lang(271).$Zb,'<td>'.lang(48).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(272).$Zb,(support("comment")?'<td>'.lang(47).$Zb:''),"</thead>\n";$T=0;foreach($Nh
as$D=>$U){$Si=($U!==null&&!preg_match('~table~i',$U));$v=h("Table-".$D);echo'<tr'.odd().'><td>'.checkbox(($Si?"views[]":"tables[]"),$D,in_array($D,$Oh,true),"","formUncheck('check-all');","",$v),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($D)."' title='".lang(40)."' id='$v'>".h($D).'</a>':h($D));if($Si){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($D).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$U)?lang(127):lang(128)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($D).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(131)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$_=>$B){$v=" id='$_-".h($D)."'";echo($B?"<td align='right'>".(support("table")||$_=="Rows"||(support("indexes")&&$_!="Data_length")?"<a href='".h(ME."$B[0]=").urlencode($D)."'$v title='$B[1]'>?</a>":"<span$v>?</span>"):"<td id='$_-".h($D)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($D)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(243,count($Nh)),"<td>".nbsp($z=="sql"?$i->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$_)echo"<td align='right' id='sum-$_'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Mi="<input type='submit' value='".lang(273)."'".on_help("'VACUUM'")."> ";$lf="<input type='submit' name='optimize' value='".lang(274)."'".on_help($z=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>".($z=="sqlite"?$Mi:($z=="pgsql"?$Mi.$lf:($z=="sql"?"<input type='submit' value='".lang(275)."'".on_help("'ANALYZE TABLE'")."> ".$lf."<input type='submit' name='check' value='".lang(276)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(277)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(278)."'".confirm().on_help($z=="sqlite"?"'DELETE'":"'TRUNCATE".($z=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(119)."'".confirm().on_help("'DROP TABLE'").">\n";$n=(support("scheme")?$b->schemas():$b->databases());if(count($n)!=1&&$z!="sqlite"){$o=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(279).": ",($n?html_select("target",$n,$o):'<input name="target" value="'.h($o).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(280)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(281)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$ii'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(71)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(200)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(141)."</h3>\n";$Kg=routines();if($Kg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(125).'<td>'.lang(46).'<td>'.lang(217)."<td>&nbsp;</thead>\n";odd('');foreach($Kg
as$L){echo'<tr'.odd().'>','<th><a href="'.h(ME).($L["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($L["ROUTINE_NAME"]).'">'.h($L["ROUTINE_NAME"]).'</a>','<td>'.h($L["ROUTINE_TYPE"]),'<td>'.h($L["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($L["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($L["ROUTINE_NAME"]).'">'.lang(134)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(216).'</a>':'').'<a href="'.h(ME).'function=">'.lang(215)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(282)."</h3>\n";$bh=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($bh){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(125)."</thead>\n";odd('');foreach($bh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(222)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(24)."</h3>\n";$Ki=types();if($Ki){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(125)."</thead>\n";odd('');foreach($Ki
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(226)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(142)."</h3>\n";$M=get_rows("SHOW EVENTS");if($M){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(125)."<td>".lang(283)."<td>".lang(206)."<td>".lang(207)."<td></thead>\n";foreach($M
as$L){echo"<tr>","<th>".h($L["Name"]),"<td>".($L["Execute at"]?lang(284)."<td>".$L["Execute at"]:lang(208)." ".$L["Interval value"]." ".$L["Interval field"]."<td>$L[Starts]"),"<td>$L[Ends]",'<td><a href="'.h(ME).'event='.urlencode($L["Name"]).'">'.lang(134).'</a>';}echo"</table>\n";$zc=$i->result("SELECT @@event_scheduler");if($zc&&$zc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($zc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(205)."</a>\n";}if($Nh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();