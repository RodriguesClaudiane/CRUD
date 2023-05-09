const cadCoiso = document.getByElementForId('formDoCoiso');
const nomeCoiso = cadCoiso.querySelector('#nomeDo');

cadCoiso.addEventListener('submit',(event) => {
	event.preventDefault();

const testaPorObsequio = new XMLHttpRequest();
testaPorObsequio.onreadystatechange = function(){
	if(this.readyState === 4 && this.status === 200){
		if(this.responseText == "essaPorraJaExiste"){
			alert('Isso aqui ja existe irmão');
		}else{
			cadCoiso.submit();
		}
	}
} 
const deita = new FormData();
deita.append('nomeCoiso',nomeCoiso.value);
testaPorObsequio.open('POST','/php/verificaCaes/verificarExistenciaProduto.php' , true);
testaPorObsequio.send(deita);
 });
