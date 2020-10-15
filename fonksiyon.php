<?php require "database.php"; ?>
<?php
function arsiv($sayi){
  global $db;
  if($sayi==1){
    $post =$db->query("SELECT * FROM gonderi WHERE tip=1
                       ORDER BY tarih DESC LIMIT 0,10")->fetchAll(PDO::FETCH_ASSOC);
    return $post;
  }else if($sayi==2){
    $ay =$db->query("SELECT * FROM gonderi WHERE tip=1")->fetchAll(PDO::FETCH_ASSOC);
    return $ay;
  }else if($sayi==3){
    $arsivekle =$db->query("SELECT arsivbaslik,arsivicerik
                            FROM sosyalmedya")->fetchAll(PDO::FETCH_ASSOC);
    return $arsivekle;
  }
}
 function sosyal(){
   global $db;
   $sorgu =$db->query("SELECT * FROM sosyalmedya")->fetch(PDO::FETCH_ASSOC);
   return $sorgu;
}
function foto(){
  global $db;
  $sorgu= $db->query("SELECT * FROM fotograf")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function icerik($deger=""){
  global $db;
  if (!empty($deger)){
    $sorgu= $db->query("SELECT g.id,g.baslik, g.icerik, g.tarih, k.kullaniciadi, ka.isim
                        FROM gonderi g, kullanici k, kategori ka
                        WHERE g.tip=1 AND g.kulid =k.id AND g.kid = ka.id AND
                        (g.baslik LIKE '%".$deger."%' OR g.icerik LIKE '%".$deger."%'
                                       OR k.kullaniciadi LIKE '%".$deger."%')
                        ORDER BY tarih DESC")->fetchAll(PDO::FETCH_ASSOC);
  }
  else {
    $sorgu= $db->query("SELECT g.tip, g.id, g.baslik, g.icerik, g.tarih, k.kullaniciadi, ka.isim
                      FROM gonderi g, kullanici k, kategori ka
                      WHERE g.kulid =k.id AND g.kid = ka.id AND g.tip=1
                      ORDER BY tarih DESC")->fetchAll(PDO::FETCH_ASSOC);
  }
  return $sorgu;
}
function icerikadmin(){
  global $db;
  $sorgu= $db->query("SELECT tip, id, baslik, icerik, tarih
                      FROM gonderi ORDER BY tarih DESC")->fetchAll(PDO::FETCH_ASSOC);
return $sorgu;
}
function icer($sayfa){ //single kısmına çekmek için/sayfa id'si ile içerik getiriyo
  global $db;
  $sorgu= $db->query("SELECT e.isim AS etiket, e.id AS etiketid, g.id, g.tip, g.baslik, g.icerik, g.tarih, k.kullaniciadi, ka.isim
                      FROM gonderi g, kullanici k, kategori ka, etiket e
                      WHERE  g.kulid =k.id AND g.kid = ka.id AND e.id = g.etid AND g.id='$sayfa'
                      ORDER BY tarih DESC")->fetch(PDO::FETCH_ASSOC);
  return $sorgu;
}
function icerikguncel($sayfa){ //single kısmına çekmek için/sayfa id'si ile içerik getiriyo
  global $db;
  $sorgu= $db->query("SELECT e.isim AS etiket, g.baslik, g.icerik, g.tarih, k.kullaniciadi AS kullanici, ka.isim AS kategori
                      FROM gonderi g, kullanici k, kategori ka, etiket e
                      WHERE g.kulid =k.id AND g.kid = ka.id AND e.id = g.etid AND g.id='$sayfa'
                      ORDER BY tarih DESC")->fetch(PDO::FETCH_ASSOC);
  return $sorgu;
}
function populer(){
  global $db;
  $sorgu = $db->query("SELECT COUNT(*) , gonderi.baslik, gonderi.id
                       FROM yorum, gonderi
                       WHERE yorum.gid=gonderi.id AND yorum.tip=1
                       GROUP BY gid
                       ORDER BY COUNT(*) DESC LIMIT 0,3")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function girisyap($kullanici, $sifre){
  global $db;
  $sorgu = $db->prepare("SELECT kullaniciadi, sifre FROM kullanici
                         WHERE kullaniciadi = ? AND sifre = ?");
  $sorgu->execute(array($kullanici,$sifre));
  return $sorgu->rowCount() ;
}
function yorum($sayfa){
  global $db;
  $sorgu= $db->query("SELECT * FROM yorum WHERE gid = '$sayfa'")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function adminyorum(){
  global $db;
  $sorgu= $db->query("SELECT yorum.* , gonderi.baslik, gonderi.id AS gonderiid
                      FROM yorum, gonderi
                      WHERE yorum.gid = gonderi.id")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function yorumguncelle($id){
  global $db;
  $sorgu = $db->prepare("UPDATE yorum SET tip = 1 WHERE id= ?");
  $sorgu->execute(array($id));
  return $sorgu->rowCount() ;
}
function yorumsil($id){
  global $db;
  $sorgu = $db->prepare("DELETE FROM yorum WHERE id= ? ");
  $sorgu->execute(array($id));
  return $sorgu->rowCount() ;
}
function yorumekle($aciklama, $website, $isim, $sayfa){
  global $db;
  $sorgu= $db->prepare("INSERT INTO yorum(icerik,website,isim,gid,tip) VALUES (?,?,?,?,'0')");
  $sorgu->execute(array($aciklama, $website, $isim, $sayfa));
  return $sorgu->rowCount() ;
}
function gonderiekle($baslik,$icerik,$kategori,$etiket,$kullanici){
  global $db;
  $sorgu = $db->prepare("INSERT INTO gonderi(baslik,icerik,kid,etid,kulid,tip) VALUES (?,?,?,?,?,?)");
  $sorgu->execute(array($baslik,$icerik,$kategori,$etiket,$kullanici,0));
  return $sorgu->rowCount() ;
}
function gonderisil($id){
  global $db;
  $sorgu = $db->prepare("DELETE FROM gonderi WHERE id= ? ");
  $sorgu->execute(array($id));
  return $sorgu->rowCount() ;
}
function gonguncelle($baslik,$icerik,$kategori,$etiket,$kullanici,$id){
  global $db;
  $sorgu = $db->prepare("UPDATE gonderi SET baslik= ?, icerik= ?, kid= ?, etid= ?, kulid= ? WHERE id= ? ");
  $sorgu->execute(array($baslik,$icerik,$kategori,$etiket,$kullanici,$id));
  return $sorgu->rowCount() ;
}
function gonderionayla($id){
  global $db;
  $sorgu = $db->prepare("UPDATE gonderi SET tip = 1 WHERE id= ?");
  $sorgu->execute(array($id));
  return $sorgu->rowCount() ;
}
function kategori(){
  global $db;
  $sorgu = $db->query("SELECT kategori.isim,COUNT(*), kategori.id
                       FROM gonderi, kategori
                       WHERE gonderi.kid=kategori.id AND gonderi.tip=1
                       GROUP BY kid ORDER BY COUNT(*) DESC")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function kategorigit($deger){
  global $db;
  $sorgu = $db->query("SELECT g.id,g.baslik, g.icerik, g.tarih, k.kullaniciadi, ka.isim
                      FROM gonderi g, kullanici k, kategori ka
                      WHERE g.kulid =k.id AND g.kid = ka.id AND g.kid=".$deger." ORDER BY tarih DESC")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function adminkategori(){ //admin paneline seçme yapmak için
  global $db;
  $sorgu = $db->query("SELECT * FROM kategori")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function kategorisil($id){
  global $db;
  $sorgu = $db->prepare("DELETE FROM kategori WHERE id= ? ");
  $sorgu->execute(array($id));
  return $sorgu->rowCount() ;
}
function kategoriekle($isim){
  global $db;
  $sorgu= $db->prepare("INSERT INTO kategori (isim,link) VALUES ( ? , 'single.php') ");
  $sorgu->execute(array($isim));
  return $sorgu->rowCount();
}
function adminetiket(){
  global $db;
  $sorgu = $db->query("SELECT * FROM etiket")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function etiket(){
  global $db;
  $sorgu = $db->query("SELECT etiket.isim, etiket.id
                       FROM gonderi, etiket
                       WHERE gonderi.tip=1 AND gonderi.etid=etiket.id")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function etiketgit($deger){
  global $db;
  $sorgu = $db->query("SELECT g.id,g.baslik, g.icerik, g.tarih, k.kullaniciadi, e.isim
                      FROM gonderi g, kullanici k, etiket e
                      WHERE g.kulid =k.id AND g.etid = e.id AND g.etid=".$deger." ORDER BY tarih DESC")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function etiketekle($isim){
  global $db;
  $sorgu= $db->prepare("INSERT INTO etiket (isim) VALUES ( ? ) ");
  $sorgu->execute(array($isim));
  return $sorgu->rowCount();
}
function etiketsil($id){
  global $db;
  $sorgu = $db->prepare("DELETE FROM etiket WHERE id= ? ");
  $sorgu->execute(array($id));
  return $sorgu->rowCount() ;
}
function kayitek($isim,$soyisim,$kullaniciadi,$sifre,$tlno,$mail){
  global $db;
  $sorgu = $db->prepare("INSERT INTO kullanici(isim,soyisim,kullaniciadi,sifre,tlno,mail) VALUES (?,?,?,?,?,?)");
  $sorgu->execute(array($isim,$soyisim,$kullaniciadi,$sifre,$tlno,$mail));
  return $sorgu->rowCount() ;
}
function menu(){
  global $db;
  $sorgu = $db->query("SELECT * FROM menu")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function menuekle($isim,$link){
  global $db;
  $sorgu= $db->prepare("INSERT INTO menu (isim,link) VALUES ( ? , ? ) ");
  $sorgu->execute(array($isim,$link));
  return $sorgu->rowCount();
}
function menusil($id){
  global $db;
  $sorgu = $db->prepare("DELETE FROM menu WHERE id= ? ");
  $sorgu->execute(array($id));
  return $sorgu->rowCount() ;
}
function kullanici(){
  global $db;
  $sorgu = $db->query("SELECT * FROM kullanici")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
function tarihgit($deger){
  global $db;
  $sorgu = $db->query("SELECT g.id,g.baslik, g.icerik, g.tarih, k.kullaniciadi, ka.isim
                       FROM gonderi g, kullanici k, kategori ka
                       WHERE g.tip=1 AND g.kulid =k.id AND g.kid = ka.id AND g.tarih LIKE '%".$deger."%' ORDER BY tarih DESC")->fetchAll(PDO::FETCH_ASSOC);
  return $sorgu;
}
?>
