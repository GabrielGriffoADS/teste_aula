async function lista_cliente() {
//montamos as configurações de requisição 
// ao servidor http
    const opt = {
        method:'POST',
        mode: 'cors', 
        cache:'default'

    }
//A variavel "reponse" recebera uma promisse
//De uma tentativa de requisição
const respose = await send('listacliente.php', opt);
const html = await respose.text;
console.log(html);

}
//Mapeando o evento de  carregamento do documento

document.addEventListener("DOMContentLoaded", function() {
    lista_cliente();



});
    //tentamos executar uma requisição 
    fetch('listacliente.php', opt)

    .then(reponse => {
reponse.text
.then(data => Show(data))

})

    .catch(e => {

console.log(e.message());
})



