var send = document.getElementById('bt_vh'),
xmlhttp = new XMLHttpRequest();
send.addEventListener('click', function() {
var text = document.getElementById('comment').value.replace(/<[^>]+>/g,'');
var pid = document.getElementById('ot').value.replace(/<[^>]+>/g,'');
if(text === '' || pid === '') {
alert('Заполните все поля!');
return false;
} 
xmlhttp.open('post', 'otpr_sms.php', true);
xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xmlhttp.send("comment=" + encodeURIComponent(text) + "&iid=" + encodeURIComponent(pid));
});