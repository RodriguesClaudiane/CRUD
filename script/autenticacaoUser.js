const login = document.getElementById('loginDoUser');
const email = document.querySelector('#email');
const senha= document.querySelector('#senha');

login.addEventListener('submit',(event) => {
	event.preventDefault();

const testaPorObsequio = new XMLHttpRequest();
testaPorObsequio.onreadystatechange = function(){
	if(this.readyState === 4 && this.status === 200){
		if(this.responseText == "algodeerradocertonaoesta"){
			alert('Senha ou ou usuário incorreto');
		}else{
			login.submit();
		}
	}
} 
const deita = new FormData();
deita.append('email',email.value);
deita.append('senha',senha.value);
testaPorObsequio.open('POST','/php/autenticacoes/autenticacaoUser.php' , true);
testaPorObsequio.send(deita);
 });