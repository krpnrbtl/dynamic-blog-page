/*
 Navicat Premium Data Transfer

 Source Server         : tema_blog
 Source Server Type    : MySQL
 Source Server Version : 100125
 Source Host           : localhost:3306
 Source Schema         : tema_blog

 Target Server Type    : MySQL
 Target Server Version : 100125
 File Encoding         : 65001

 Date: 10/09/2017 21:20:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for etiket
-- ----------------------------
DROP TABLE IF EXISTS `etiket`;
CREATE TABLE `etiket`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of etiket
-- ----------------------------
INSERT INTO `etiket` VALUES (7, 'ekle');
INSERT INTO `etiket` VALUES (2, 'seçici');
INSERT INTO `etiket` VALUES (3, 'tag');
INSERT INTO `etiket` VALUES (4, 'komut');
INSERT INTO `etiket` VALUES (5, 'website açıklar');
INSERT INTO `etiket` VALUES (6, 'parçala');
INSERT INTO `etiket` VALUES (1, 'blog');
INSERT INTO `etiket` VALUES (8, 'nedir');
INSERT INTO `etiket` VALUES (9, 'karar döngü');

-- ----------------------------
-- Table structure for fotograf
-- ----------------------------
DROP TABLE IF EXISTS `fotograf`;
CREATE TABLE `fotograf`  (
  `isim` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of fotograf
-- ----------------------------
INSERT INTO `fotograf` VALUES ('images/m-farmerboy.jpg', 1);

-- ----------------------------
-- Table structure for gonderi
-- ----------------------------
DROP TABLE IF EXISTS `gonderi`;
CREATE TABLE `gonderi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `kid` int(11) DEFAULT NULL,
  `kulid` int(11) DEFAULT NULL,
  `etid` int(11) DEFAULT NULL,
  `tip` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gonderi
-- ----------------------------
INSERT INTO `gonderi` VALUES (1, 'HTML’ e ve HTML Etiketlerine Giriş', '<p><strong>HTML(</strong>Hyper Text Markup Language<strong>)</strong><strong> Nedir?</strong></p>\r\n\r\n<p>HTML web sayfası oluşturmak i&ccedil;in kullanılan bir betik dilidir.HTML dosyalarının aktarımı i&ccedil;in HTTP(Hyper Text Transfer Protocol) kullanılır ve dosyalar &ldquo;.html&rdquo; veya &ldquo;.htm&rdquo; uzantası ile saklanır.HTML dosyaları d&uuml;z yazı dosyalarından farksız değildir.Yani yazılan dosyalar herhangi bir derleyici ile derlenme gereği duymaz.Etiketlerin işlevleri belli olduğu i&ccedil;in web &uuml;zerinde kod g&ouml;z&uuml;kmez.Ancak bir web sayfasında SağTık-İncele/KaynağıG&ouml;ster yaparak html yapısına ulaşılabilir.HTML i&ccedil;in edit&ouml;r olarak &ldquo;notepad++, sublime text, atom.io&rdquo; kullanılabilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>HTML ETİKETLERİ</strong></p>\r\n\r\n<p>Etiketler &ldquo;&lt;&rdquo; &ldquo;&gt;&rdquo; arasına yazılır.A&ccedil;ılan &lt;etiket&gt; &ldquo;&lt;/etiket&gt;&rdquo; ile kapatılır.Başlama etiketine &ldquo;a&ccedil;ılış etiketi&rdquo; sonlandırma etiketine &ldquo;kapanış&rdquo; etiketi denir.Fakat bazı etiketler kapatılmayabilir.HTML genel yapısındaki etiketler;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&lt;!DOCTYPE&gt;<br />\r\n&lt;html&gt;<br />\r\n&nbsp; &lt;head&gt;<br />\r\n&nbsp;&nbsp;&nbsp; &lt;title&gt;Page Title&lt;/title&gt;<br />\r\n&nbsp; &lt;/head&gt;<br />\r\n&nbsp; &lt;body&gt;<br />\r\n&nbsp;&nbsp;&nbsp; &lt;p&gt;My first paragraph.&lt;/p&gt;<br />\r\n&nbsp; &lt;/body&gt;<br />\r\n&lt;/html&gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><em>&lt;DOCTYPE&gt;</em> : HTML veya XHTML tipini belirlemek i&ccedil;in kullanılır.</li>\r\n	<li>&lt;html&gt;&lt;/html&gt; : HTML dosyasının başlangı&ccedil; ve bitişini tanımlar.</li>\r\n	<li>&lt;head&gt;&lt;/head&gt; : Başlık b&ouml;l&uuml;m&uuml;n&uuml;n başlangı&ccedil; ve bitişini tanımlar.</li>\r\n	<li>&lt;title&gt;&lt;/title&gt; : Web sayfasının başladığını tanımlar.Browser&rsquo;ın isim &ccedil;uuğunda g&ouml;r&uuml;necek olan metindir.</li>\r\n	<li>&lt;body&gt;&lt;/body&gt; : Web sayfasında g&ouml;sterilecek olan i&ccedil;eriğin yazıldığı b&ouml;l&uuml;m&uuml; tanımlama da kullanılır.</li>\r\n</ul>\r\n\r\n<p>&lt;!--&nbsp;&nbsp;&nbsp; --&gt; : A&ccedil;ıklama satırı i&ccedil;in kullanılır.</p>\r\n', '2017-09-10 20:46:47', 2, 4, 8, 1);
INSERT INTO `gonderi` VALUES (2, 'HTML Etiketleri', '<p><strong>Metin Bi&ccedil;imlendirme Etiketleri</strong></p>\r\n\r\n<p>&lt;b&gt;<strong>kalın yaz</strong>&lt;/b&gt;</p>\r\n\r\n<p>&lt;br&gt; , &lt;br/&gt; sonradan eklenen etiketi alt satıra ge&ccedil;irmek i&ccedil;in kullanılırlar.</p>\r\n\r\n<p><strong>NOT</strong>:&lt;br/&gt; kapatma etiketi değildir.</p>\r\n\r\n<p>&lt;br/&gt;satır boşluğu bırakır.</p>\r\n\r\n<p>&lt;br&gt;paragraf boşluğu bırakır.</p>\r\n\r\n<p>&lt;u&gt;<u>altı &ccedil;izgili yazı</u>&lt;/u&gt;</p>\r\n\r\n<p>&lt;i&gt;<em>eğik yazı</em>&lt;/i&gt;</p>\r\n\r\n<p><em>NOT:</em>&Ccedil;oklu etiket kullanımı &egrave; &lt;tag1&gt;&lt;tag2&gt;&lt;/tag1&gt;&lt;/tag2&gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Paragraf Etiketi : </strong>&lt;p&gt;paragraf&lt;/p&gt;</p>\r\n\r\n<p>Align &ouml;zelliği yer alır.Align paragrafın d&uuml;zenini tanımlar.</p>\r\n\r\n<ul>\r\n	<li>Left : Sola yaslı</li>\r\n	<li>Right : Sağa yaslı</li>\r\n	<li>Center : Ortala</li>\r\n	<li>Justify : İki yana yaslı</li>\r\n</ul>\r\n\r\n<p><em>Kullanım&nbsp; :</em> &lt;p align= &rsquo;left&rsquo; &gt;parafraf sola yaslı&lt;/p&gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&lt;pre&gt;&lt;/pre&gt; : </strong>&Ouml;nceden bi&ccedil;imlendirilmiş metni tanımlar.Sabit genişlikte olduğu i&ccedil;in hem boşlukları hem de satır sonlarını korur.</p>\r\n\r\n<p><strong>&lt;Span&gt; : </strong>Metnin bir kısmına etki etmek i&ccedil;in kullanılır.</p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp; &ldquo;</strong>&lt;p&gt;İsteseydim &lt;span style=&quot;color:red&quot;&gt;kırmızı&lt;/span&gt; renk alırdım.&lt;/p&gt;&rdquo; yazısında kırmızı yazan yer renk olarak kırmızı bi&ccedil;imde yazılır.</p>\r\n\r\n<p><strong>Başlık Etiketleri</strong></p>\r\n\r\n<ul>\r\n	<li>&lt;h1&gt;En &ouml;nemli/b&uuml;y&uuml;k başlık&lt;/h1&gt;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>&lt;h2&gt;başlık&lt;/2&gt;</li>\r\n	<li>&lt;h3&gt;başlık&lt;/h3&gt;</li>\r\n	<li>&lt;h4&gt;başlık&lt;/h4&gt;</li>\r\n	<li>&lt;h5&gt;başlık&lt;/h5&gt;</li>\r\n	<li>&lt;h6&gt;En &ouml;nemsiz/k&uuml;&ccedil;&uuml;k başlık&lt;/h6&gt;</li>\r\n</ul>\r\n\r\n<p><em>NOT:</em> Başlık &ouml;ncesinde ve sonrasında otomatik olarak bir miktar boşluk eklenir.</p>\r\n\r\n<p><strong>&lt;hr&gt; komutu : </strong>İ&ccedil;eriği ayırmak ama&ccedil;lı kullanılır.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-09-10 21:00:20', 2, 3, 3, 1);
INSERT INTO `gonderi` VALUES (3, 'CSS Nedir?-CSS Kullanım Şekilleri', '<p><strong>CSS(</strong>Cascading Style Sheets<strong>)</strong><strong> Nedir ?</strong></p>\r\n\r\n<p><strong>Css </strong>bir HTML belgesinin g&ouml;rsel yapısını d&uuml;zenlemeye yarayan bir dildir.Stil dili de denilebilir.HTML &ouml;ğelerinin(form,buton,vb.) nasıl g&ouml;r&uuml;nt&uuml;leneceğini(renk, boyut, konum, vb.) belirler.Bir HTML dosyası farklı CSS&rsquo;ler ile farklı g&ouml;r&uuml;nt&uuml;lenebilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CSS ile HTML Arasındaki İlişki</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>HTML bir insanın iskelet yapısı gibi d&uuml;ş&uuml;n&uuml;l&uuml;rse, CSS de s&uuml;slenmesine yardımcı olan kıyafetleri gibi d&uuml;ş&uuml;n&uuml;lebilir.</p>\r\n\r\n<p>Bir başka &ouml;rnekle HTML arabayı oluşturan ana par&ccedil;alar(direksiyon,tekerlek,koltuk,vb.) gibi d&uuml;ş&uuml;n&uuml;l&uuml;rse CSS koltuk rengi, direksiyon boyutu, jant şekli olarak d&uuml;ş&uuml;n&uuml;lebilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CSS&rsquo;in bize sağladığı bir&ccedil;ok yarar vardır;</p>\r\n\r\n<ul>\r\n	<li>G&ouml;r&uuml;n&uuml;m&uuml; bir kere belirlenmiş bir &ouml;ğeyi birden fazla yerde kullanmayı sağlar.</li>\r\n	<li>Bir &ouml;ğe i&ccedil;in birden fazla g&ouml;r&uuml;n&uuml;m &ouml;zelliği eklemeye yarar.</li>\r\n	<li>Oluşturulan bir .css dosyası ile de HTML yapısındaki değişiklikleri dosya &uuml;zerinden kontrol edebilirz.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>CSS Kullanım Şekilleri</strong></p>\r\n\r\n<ul>\r\n	<li><u>Yerel Stil Şablonu</u></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:36.0pt\">&lt;h1 style=&rdquo;color:red&rdquo;&gt;Başlık&lt;/h1&gt;</p>\r\n\r\n<ul>\r\n	<li><u>Global Stil Şablonu</u></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:36.0pt\">&lt;style&gt;</p>\r\n\r\n<p style=\"margin-left:36.0pt\">&nbsp;&nbsp;&nbsp; h1{color:red}</p>\r\n\r\n<p style=\"margin-left:36.0pt\">&lt;style&gt;</p>\r\n\r\n<p style=\"margin-left:36.0pt\"><em>T&uuml;m h1 etiketleri değişir.</em></p>\r\n\r\n<ul>\r\n	<li><u>Bağlantılı Stil Şablonu</u></li>\r\n</ul>\r\n\r\n<p>&lt;link rel=&rdquo;stylesheet&rdquo; type=&rdquo;text/css&rdquo; href=&rdquo;still.css&rdquo;&gt;</p>\r\n', '2017-09-10 21:02:56', 3, 1, 8, 1);
INSERT INTO `gonderi` VALUES (4, 'PHP’ye Giriş', '<p>PHP a&ccedil;ılımı &ldquo;Hypertext PreProcessor&rdquo; dır. HTML ile uyumlu bir betik&nbsp;dilidir. Sunucu tabanlı olarak &ccedil;alışır. Php kullanabilmek i&ccedil;in server kullanmamız gereklidir. Bu server desteğinide wamp server veya xampp serverden karşılarız. Php dosyaları &ldquo;.php&rdquo; uzantısına sahiptir. &Ccedil;ıktı kontrol&uuml; i&ccedil;in <strong>localhost</strong> kullanılır.</p>\r\n\r\n<p><strong>PHP</strong>&rsquo;de a&ccedil;ma kapama&nbsp; &lt;?php ?&gt; tagı ile yapılır.</p>\r\n\r\n<p><strong>PHP</strong>&rsquo;de ekrana yazı yazdırma <strong>echo</strong>&nbsp; ile yapılır. İki kullanım şekli vardır:</p>\r\n\r\n<ul>\r\n	<li>echo (&ldquo;Merhaba D&uuml;nya&rdquo;);</li>\r\n	<li>echo &ldquo;Merhaba D&uuml;nya&rdquo;;</li>\r\n</ul>\r\n\r\n<p>A&ccedil;ma kapama, echo işlemleri i&ccedil;in &ouml;rnek:</p>\r\n\r\n<p>&lt;html&gt;<br />\r\n&lt;head&gt;<br />\r\n&lt;title&gt;&Ouml;rnek&lt;/title&gt;<br />\r\n&lt;/head&gt;<br />\r\n&lt;body&gt;</p>\r\n\r\n<p>&lt;?php<br />\r\necho&nbsp;&ldquo;Merhaba,&nbsp;ben&nbsp;bir&nbsp;PHP&nbsp;betiğiyim!&rdquo;;<br />\r\n?&gt;</p>\r\n\r\n<p>&lt;/body&gt;<br />\r\n&lt;/html&gt;</p>\r\n\r\n<p><strong>PHP</strong>&rsquo;de değişken tanımlama yapılırken tip belirtilmez. Tanımlama;</p>\r\n\r\n<p>$variable = 1&nbsp;&nbsp;&nbsp; &agrave; olarak tanımlanır, tipi burada <strong>integer</strong> olarak algılanır.</p>\r\n\r\n<p>Eğer;</p>\r\n\r\n<p>$variable = &ldquo;1&rdquo;&nbsp; &agrave;olarak tanımlanırsa tipi <strong>string</strong> olarak tanımlanır.</p>\r\n\r\n<p><strong>PHP</strong>&rsquo;de unset, empty, isset kavramları;</p>\r\n\r\n<ul>\r\n	<li><strong>Unset(</strong>$variable<strong>) &nbsp;: </strong>Belirtilen değişken değersiz duruma getirilir.</li>\r\n	<li><strong>Empty(</strong>$variable<strong>) : </strong>Değişkenin boş olup olmadığını kontrol eder.</li>\r\n</ul>\r\n\r\n<p><strong>İsset(</strong>$variable<strong>)&nbsp;&nbsp; &nbsp;: </strong>Değişkenin tanımlı olup olmadığını kontrol eder. Belirtilen değişken tanımlıysa ve&nbsp;NULL&nbsp;değilse TRUE d&ouml;ner.</p>\r\n', '2017-09-10 21:04:01', 1, 2, 8, 0);
INSERT INTO `gonderi` VALUES (5, 'PHP’de Karar Yapısı-Döngüler-Array-Super Globals Giriş', '<p>Karar yapıları bilindiği &uuml;zere&nbsp; &ldquo;if, if-else, if-else if-else&rdquo; yapıları ile ele alınır.PHP &ouml;rnekleri;</p>\r\n\r\n<ol>\r\n	<li><strong>İf Yapısı</strong></li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>$aliyas = 40;</p>\r\n\r\n<p>$mehmetyas = 57;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>if($aliyas &lt; $mehmetyas ){</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; echo &quot;ali mehmetten k&uuml;&ccedil;&uuml;kt&uuml;r&quot; ;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><strong>İf-Else Yapısı</strong></li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>$aliyas = 65;</p>\r\n\r\n<p>$mehmetyas = 57;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>if($aliyas &lt; $mehmetyas ){</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; echo &quot;ali mehmetten k&uuml;&ccedil;&uuml;kt&uuml;r&quot; ;</p>\r\n\r\n<p>} else{</p>\r\n\r\n<p>&nbsp; echo &quot;ali mehmetten b&uuml;y&uuml;kt&uuml;r&quot;;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><strong>İf-Else if-Else Yapısı</strong></li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>$aliyas = 36;</p>\r\n\r\n<p>$mehmetyas = 21;</p>\r\n\r\n<p>if($aliyas &lt; $mehmetyas ){</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; echo &quot;ali mehmetten k&uuml;&ccedil;&uuml;kt&uuml;r&quot; ;</p>\r\n\r\n<p>} else if($aliyas == $mehmetyas){</p>\r\n\r\n<p>&nbsp; echo &quot;ali mehmet ile aynı yaştadır&quot;;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp; echo &quot;ali mehmetten b&uuml;y&uuml;kt&uuml;r&quot;;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><strong>Switch Case Yapısı</strong></li>\r\n</ol>\r\n\r\n<p>$color = &quot;kırmızı&quot;;</p>\r\n\r\n<p>switch ($color) {</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; case &quot;sarı&quot;:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;echo &quot;renk sarıdır&quot;;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; case &quot;kırmızı&quot;:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;renk kırmızıdır&quot;;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; case &quot;mavi&quot;:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;renk mavidir&quot;;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; default:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;renk sarı, kırmızı, mavi değildir&quot;;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>NOT </strong><strong>&agrave;</strong> Break d&ouml;ng&uuml;y&uuml; sonlandırır. Genellikle switch case yapısında kullanılır.</p>\r\n\r\n<p>PHP&rsquo; de d&ouml;ng&uuml; i&ccedil;in &ldquo;while, do-while, for, foreach&rdquo; yapılarını inceleyelim.</p>\r\n\r\n<ol>\r\n	<li><strong>While Yapısı</strong></li>\r\n	<li><br />\r\n	$sayi =&nbsp;1;&nbsp;<br />\r\n	while($sayi &lt;=&nbsp;5) {<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&quot;Sayı : $sayi &lt;br&gt;&quot;;<br />\r\n	&nbsp;&nbsp;&nbsp; $sayi++;<br />\r\n	}&nbsp;<br />\r\n	?&gt;</li>\r\n	<li><strong>Do-While Yapısı</strong></li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp; $sayi=rand(1,100);</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>echo &quot;Bulunan sayı: $sayi&quot;;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>NOT </strong><strong>&agrave;</strong><strong>Rand Fonksiyonu </strong>: <em>rand()</em>&nbsp;fonksiyonunu rastgele bir sayı &uuml;retmek i&ccedil;in kullanılır.Kullanımında parametre almadan veya iki parametre ile (min,max) sınırlandırma yapılabilir.</p>\r\n\r\n<p style=\"margin-left:99.0pt\">&lt;?php</p>\r\n\r\n<p style=\"margin-left:99.0pt\">$sayi = rand();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; //rastgele bir sayı</p>\r\n\r\n<p style=\"margin-left:99.0pt\">$sayi2 = rand(8,36);&nbsp;&nbsp; //8 ile 36 arasında rastgele bir sayı</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<ol style=\"list-style-type:circle\">\r\n	<li><strong>For Yapısı</strong></li>\r\n	<li>&nbsp;</li>\r\n	<li>=24 ; $i &lt; 50; $i++){</li>\r\n</ol>\r\n\r\n<p>&nbsp; echo &quot;$i&lt;br&gt;&quot;;</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><strong>Foreach Yapısı</strong></li>\r\n</ol>\r\n\r\n<p>&lt;?php</p>\r\n\r\n<p>$renk = array(&quot;kırmızı&quot;, &quot;yeşil&quot;, &quot;mavi&quot;, &quot;sarı&quot;);</p>\r\n\r\n<p>foreach ($renk as $degisken) {</p>\r\n\r\n<p>&nbsp; echo &quot;$degisken&lt;br&gt;&quot;;</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>NOT </strong><strong>&agrave;</strong> Foreach yapısı &ouml;zellikle array par&ccedil;alamak i&ccedil;in kullanılır.</p>\r\n\r\n<p>PHP&rsquo;de dizi oluşturma;</p>\r\n\r\n<p>$dizi=array(1,2,3);</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"list-style-type:circle\">\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NOT </strong><strong>&agrave;</strong> Dizileri ekrana yazdırırken &ouml;zel komut olan &ldquo;print_r();&rdquo; kullanılabilir.</p>\r\n\r\n<p><strong>Super Globals</strong></p>\r\n\r\n<ul>\r\n	<li>$GLOBALS</li>\r\n	<li>$_SERVER</li>\r\n	<li>$_REQUEST</li>\r\n	<li>$_POST</li>\r\n	<li>$_GET</li>\r\n	<li>$_FILES</li>\r\n	<li>$_ENV</li>\r\n	<li>$_COOKIE</li>\r\n	<li>$_SESSION</li>\r\n</ul>\r\n', '2017-09-10 21:05:58', 1, 2, 9, 0);
INSERT INTO `gonderi` VALUES (6, 'Web Sitesi Açıkları', '<p><strong>CSRF Nedir?</strong></p>\r\n\r\n<p><strong>CSRF</strong><strong>, </strong>a&ccedil;ılımı&nbsp;<strong>Cross Site Reference Forgery</strong><strong>&rsquo;</strong>dır.Kodlama yetersizliğinden kaynaklanan g&uuml;venlik a&ccedil;ığıdır.İhmali yapan kişini web sayfasına yerleştirdiği html kodları ile oturumu ele ge&ccedil;irmesi işlemidir.GET methodu bu a&ccedil;ığı destekler niteliktedir.Bu y&uuml;zden post methodunu(şifre vb. i&ccedil;in) kullanmak daha g&uuml;venlidir.</p>\r\n\r\n<p><strong>XSS Nedir?</strong></p>\r\n\r\n<p>XSS, a&ccedil;ılım Cross Site Scripting&rsquo;dır.Zararlı dosyaları kendi hazırladığı web sitesine koyar burada kullanılan sayfa gidilecek sayfa yerine bağlantılanibilir/k&ouml;pr&uuml;lenebilir.B&ouml;yle oturum bilgileri alınmış olur.</p>\r\n\r\n<p><strong>SQL Injection Nedir?</strong></p>\r\n\r\n<p>Sql sorgusunun &ccedil;alışmasına etki ederek başka bilgileri elde etmeye &ccedil;alışır.</p>\r\n', '2017-09-10 21:08:40', 6, 1, 5, 1);
INSERT INTO `gonderi` VALUES (7, 'Github', '<p><strong>Versiyon Kontrol Sistemi (VCS): </strong>Birden fazla yazılımcının aynı anda, birbirlerinin değişikliklerinden etkilenmeden bir proje &uuml;zerinde &ccedil;alışabilmesini sağlar.</p>\r\n\r\n<p><strong>VCS &Ccedil;eşitlerinden Git </strong>d&uuml;nyada en &ccedil;ok kullanılan VCS y&ouml;ntemidir.Projeleri internet &uuml;zerinde tutup değişiklik yapmaya yarar.Birden fazla yazılımcının aynı anda aynı proje de &ccedil;alışmasına yarar.Hızlıdır ve az yer kaplar.</p>\r\n\r\n<p><strong>Git serverlerinden Github Komutları : </strong>Kurulumun ardından bir repo oluşur.Oluşan linki bilgisayara kopyaladığın zaman bilgisayara klonlama yapılır.</p>\r\n\r\n<p><strong><em>$</em></strong><em>git clone link</em></p>\r\n\r\n<p><em>$git status atılmamış dosyalar g&ouml;z&uuml;k&uuml;r.</em></p>\r\n\r\n<p><em>$git add */add dosya adı t&uuml;m/se&ccedil;ilen dosyayı ekler.</em></p>\r\n\r\n<p><em>İşlemleri kayıt altına almak i&ccedil;in</em></p>\r\n\r\n<p><em>$ git commit &ndash;m &quot;mesajı&quot;</em></p>\r\n\r\n<p><em>Repoya kayıt i&ccedil;in $git Push kullanılır.</em></p>\r\n', '2017-09-10 21:18:44', 5, 1, 8, 0);
INSERT INTO `gonderi` VALUES (8, 'Suda Yaşayan Bitkiler', '<h3><strong style=\"font-size:13px\">Sagittaria</strong></h3>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p>Diğer ismi suoku olan bu bitki g&ouml;l ve ırmak kıyılarında ve genellikle su i&ccedil;inde yaşar.</p>\r\n\r\n<h3><strong>Najas marina</strong></h3>\r\n\r\n<p>Dikenli su perisi olarak da isimlendirilen bu bitki Ilıman b&ouml;lgelerin soğuk kısımları dışında g&ouml;llerde yaşar.</p>\r\n\r\n<h3><strong>Potamogeton</strong></h3>\r\n\r\n<p>Diğer ismi su s&uuml;mb&uuml;l&uuml; olan bu bitki durgun ya da yavaş akan sularda yetişir. Bol miktarda &ccedil;eşitleri bulunur.</p>\r\n\r\n<h3><strong>Nymphoides peltata</strong></h3>\r\n\r\n<p>K&uuml;&ccedil;&uuml;k nil&uuml;fer olarak da isimlendirilen bu bitki bataklılarda, durgun ya da yavaş akan sularda sığ g&ouml;llerde ve boşaltma kanallarında gelişir.</p>\r\n\r\n<h3><strong>Nymphaea alba</strong></h3>\r\n\r\n<p>Diğer adı beyaz nil&uuml;fer olan bu bitki sığ g&ouml;ller ve yavaş akan sularda gelişir.</p>\r\n\r\n<h3><strong>Nuphar lutea</strong></h3>\r\n\r\n<p>Sarı nil&uuml;fer olarak da adlandırılan bu bitki bataklık, g&ouml;ller ve sığ sularda, tortu tabanlı sularda gelişir</p>\r\n\r\n<h3><strong>Fontinalis antipyretica</strong></h3>\r\n\r\n<div class=\"single_post\" id=\"post-5954\" style=\"margin: 0px 0px 25px; padding: 0px; font-size: 14px; font-family: Arial, sans-serif; vertical-align: baseline; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 634px; display: inline-block; color: rgb(62, 62, 62);\">\r\n<div class=\"single_text\" style=\"margin: 0px 0px 15px; padding: 0px; font-size: 13px; font-family: inherit; vertical-align: baseline; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; width: 634px; color: rgb(68, 68, 68); line-height: 22px;\">\r\n<p><a href=\"http://www.nenedirvikipedi.com/wp-content/uploads/2014/02/Fontinalis-antipyretica.jpg\" style=\"margin: 0px; padding: 0px; color: rgb(0, 77, 149); text-decoration-line: none;\"><img alt=\"Fontinalis antipyretica\" class=\"alignnone size-full wp-image-5955\" src=\"http://www.nenedirvikipedi.com/wp-content/uploads/2014/02/Fontinalis-antipyretica.jpg\" style=\"border:1px solid rgb(230, 230, 230); display:inline-block; float:none; height:auto; margin:15px 0px; max-width:99%; padding:3px; width:350px\" /></a></p>\r\n\r\n<p>Diğer adı su yosunu olan bu bitki hızlı akan sert ve soğuk sularda ağa&ccedil; g&ouml;vdeleri ve kire&ccedil;taşlarına tutunmuş olarak yaşar.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n</div>\r\n</div>\r\n', '2017-09-10 21:18:46', 6, 2, 8, 1);

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 50 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (2, 'html', 'single.php');
INSERT INTO `kategori` VALUES (4, 'veritabanı', 'single.php');
INSERT INTO `kategori` VALUES (1, 'php', 'single.php');
INSERT INTO `kategori` VALUES (5, 'github', 'single.php');
INSERT INTO `kategori` VALUES (6, 'diğer', 'single.php');
INSERT INTO `kategori` VALUES (3, 'css', 'single.php');

-- ----------------------------
-- Table structure for kullanici
-- ----------------------------
DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE `kullanici`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyisim` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullaniciadi` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tlno` varchar(11) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kullanici
-- ----------------------------
INSERT INTO `kullanici` VALUES (2, 'Elanur', 'Yılmaz', 'elaylmz', '123456789', '05421111111', 'elanurylmz97@gmail.com', '2017-07-18 14:55:50');
INSERT INTO `kullanici` VALUES (3, 'züleyha', 'bayram', 'zlyhbyrm', '123456789', '05512132525', 'zlyhbyrm@gmail.com', '2017-08-01 17:07:42');
INSERT INTO `kullanici` VALUES (1, 'Betül', 'Karapınar', 'krpnrbtl', '123456789', '05422222222', 'krpnrbtl@gmail.com', '2017-08-15 10:57:51');
INSERT INTO `kullanici` VALUES (4, 'ömer', 'karagül', 'omrkark', '123456789', '05557555585', 'omerkark@gmail.com', '2017-08-17 15:40:34');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'Anasayfa', 'index.php');
INSERT INTO `menu` VALUES (2, 'Arşiv', 'archives.php');
INSERT INTO `menu` VALUES (3, 'Blog', 'single.php');
INSERT INTO `menu` VALUES (4, 'Admin Giriş', 'girindex.php');

-- ----------------------------
-- Table structure for sosyalmedya
-- ----------------------------
DROP TABLE IF EXISTS `sosyalmedya`;
CREATE TABLE `sosyalmedya`  (
  `baslik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slogan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `facebook` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `twitter` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `instagram` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `google` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `github` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `flickr` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `skype` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `arsivbaslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `arsivicerik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sosyalmedya
-- ----------------------------
INSERT INTO `sosyalmedya` VALUES ('Staj Bloğu', 'Betül Karapınar', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/?hl=tr', 'https://plus.google.com/u/0/107768125902646824089', 'https://github.com/krpnrbtl', NULL, NULL, 'Arşiv', 'Gönderilerin belli kriterlere göre tutulduğu sayfadır.');

-- ----------------------------
-- Table structure for takip
-- ----------------------------
DROP TABLE IF EXISTS `takip`;
CREATE TABLE `takip`  (
  `id` int(11) NOT NULL,
  `kullanici` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of takip
-- ----------------------------
INSERT INTO `takip` VALUES (1, 'Aycan Bülbül', 'http://www.aycan.net/');
INSERT INTO `takip` VALUES (2, 'Elanur Yılmaz', 'https://stajyerdotblog.wordpress.com/');

-- ----------------------------
-- Table structure for yorum
-- ----------------------------
DROP TABLE IF EXISTS `yorum`;
CREATE TABLE `yorum`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `isim` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gid` int(11) DEFAULT NULL,
  `tip` tinyint(255) DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of yorum
-- ----------------------------
INSERT INTO `yorum` VALUES (1, 'güzel bilgilendirme', 'omerkarapinar', 'ömer', '2017-08-02 20:34:30', 1, 1);
INSERT INTO `yorum` VALUES (2, 'konu hakkında birşey danışabilir miyim', 'akbyrkece', 'ece', '2017-08-10 10:18:03', 3, 0);
INSERT INTO `yorum` VALUES (6, 'devamı var mı', 'mervaydn', 'merve', '2017-08-11 11:05:56', 4, 1);
INSERT INTO `yorum` VALUES (8, 'css anlatımlarınız daha güzel', 'bakanayse', 'ayşe', '2017-08-11 11:09:20', 4, 0);
INSERT INTO `yorum` VALUES (9, 'projem için yararlı bir paylaşım oldu.Teşekkür ederim :)', 'enesyl', 'yıldırım', '2017-08-11 11:14:53', 5, 0);
INSERT INTO `yorum` VALUES (10, 'güzel paylaşım', 'emirkurt', 'emir', '2017-08-17 15:34:48', 2, 1);

SET FOREIGN_KEY_CHECKS = 1;
