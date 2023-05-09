const form = document.getElementById('formulario');
const email = document.querySelector('#email');
const username= document.querySelector('#username');

form.addEventListener('submit',(event) => {
	event.preventDefault();

const testaPorObsequio = new XMLHttpRequest();
testaPorObsequio.onreadystatechange = function(){
	if(this.readyState === 4 && this.status === 200){
		if(this.responseText == "essaPorraJaExiste"){
			alert('Isso aqui ja existe irmão');
		}else{
			form.submit();
		}
	}
} 
const deita = new FormData();
deita.append('username',username.value);
deita.append('email',email.value);
testaPorObsequio.open('POST','/php/verificaCaes/verificaCao.php' , true);
testaPorObsequio.send(deita);
 });


