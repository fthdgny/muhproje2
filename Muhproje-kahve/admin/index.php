<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Tam genişlikli giriş alanları */
input[type=text], input[type=password] 
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/* Tüm düğmeler için stil kodları */
button 
{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
button:hover 
{
    opacity: 0.8;
}
/* İptal düğmesi için stil kodları */
.cancelbtn 
{
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
/* Görüntü ortalama ve KAPAT düğmesi konumlandırma */
.imgcontainer 
{
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar
{
    width: 20%;
    border-radius: 10%;
}
.container 
{
    padding: 16px;
}

span.psw 
{
    float: right;
    padding-top: 16px;
}
/* Arka Plan Modeli*/
.modal 
{
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}
/* Model Kutu*/
.modal-content 
{
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}
/* Kapat Butonu (x) */
.close 
{
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
/* Yakınlaştırma */
.animate 
{
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom 
{
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
@keyframes animatezoom 
{
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
/* Ekstra küçük ekranlarda yayılma ve iptal etme düğmelerinin stillerini değiştirme */
@media screen and (max-width: 300px) 
{
    span.psw 
    {
       display: block;
       float: none;
    }
    .cancelbtn 
    {
       width: 100%;
    }
}

</style>
</head>
<body>
<h2><center><br><br><br>Kahveler Admin Paneli Giriş</center> </h2>
<center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Giriş Yap</button></center>
<div id="id01" class="modal">
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="/kahve/resim/logo.png" alt="Avatar" class="avatar">
    </div>
    <div class="container"> 
      <label><b><center>Kullanıcı Adı(admin)</center></b></label>
      <input type="text"  name="username" required>
      <label><b><center>Şifre(9604)</center></b></label>
      <input type="password" name="password" required>
      <button type="submit">Giriş</button>
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id01');

// Kullanıcı modelden başka herhangi bir yeri tıklattığında onu kapatır
window.onclick = function(event) 
{
    if (event.target == modal) 
    {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>