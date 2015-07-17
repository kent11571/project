var send = document.getElementById('bt_vh'),
xmlhttp = new XMLHttpRequest();
send.addEventListener('click', function() {
var text = document.getElementById('commentar').value.replace(/<[^>]+>/g,'');
var pid = document.getElementById('commentar1').value.replace(/<[^>]+>/g,'');
if(text === '' || pid === '') {
alert('Заполните все поля!');
return false;
} 
xmlhttp.open('post', 'otpr_post.php', true);
xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xmlhttp.send("commentar=" + encodeURIComponent(text) + "&commentar1=" + encodeURIComponent(pid));
});