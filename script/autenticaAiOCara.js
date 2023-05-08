const login = document.getElementById('loginDoUser');
const email = document.querySelector('#email');
const senha= document.querySelector('#senha');

login.addEventListener('submit',(event) => {
	event.preventDefault();

const testaAquiEssaPorra = new XMLHttpRequest();
testaAquiEssaPorra.onreadystatechange = function(){
	if(this.readyState === 4 && this.status === 200){
		if(this.responseText == "temAnguNesseCaroco"){
			alert('O que você está tentando fazer cara?');
		}else{
			login.submit();
		}
	}
} 
const deita = new FormData();
deita.append('email',email.value);
deita.append('senha',senha.value);
testaAquiEssaPorra.open('POST','/php/eOAutenticas/autenticaAiOCara.php' , true);
testaAquiEssaPorra.send(deita);
 });