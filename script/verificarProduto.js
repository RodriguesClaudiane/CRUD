const cadastroProduto = document.getByElementForId('cadastroProduto');
const nomeProduto = cadastroProduto.querySelector('#nomeDo');

cadCoiso.addEventListener('submit',(event) => {
	event.preventDefault();

const testaPorObsequio = new XMLHttpRequest();
testaPorObsequio.onreadystatechange = function(){
	if(this.readyState === 4 && this.status === 200){
		if(this.responseText == "jaExiste"){
			alert('Produto já cadastrado');
		}else{
			cadastroProduto.submit();
		}
	}
} 
const deita = new FormData();
deita.append('nomeProduto',nomeCoiso.value);
testaPorObsequio.open('POST','/php/verificacoes/verificarExistenciaProduto.php' , true);
testaPorObsequio.send(deita);
 });
