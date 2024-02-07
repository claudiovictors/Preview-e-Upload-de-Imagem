const imagem = document.querySelector("img");
const botao_accao = document.querySelector("input");

const form = document.querySelector("form");
      button = form.querySelector("button");

//Funcao para visualizar a imagem antes de fazer upload
botao_accao.addEventListener("change", (e)=>{
    imagem.src = URL.createObjectURL(e.target.files[0]);
});

//Funcao para eviatar a recarga da pagina inteira
form.onsubmit = (e)=>{
    e.preventDefault();
}

button.addEventListener("click", ()=>{
    //Criando object ajax

    let xhr = new XMLHttpRequest();

    xhr.open("POST", "upload.php", true);

    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;

                if(data == "Upload feito com sucesso!"){
                    alert(data);
                }else {
                    alert(data)
                }
            }
        }
    }

    let formdata = new FormData(form);

    xhr.send(formdata);
})