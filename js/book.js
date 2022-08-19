document.querySelector("#btn_salvar").addEventListener("click", criarLivro);

function criarLivro(){
    let nomeLivro = document.querySelector("#txt_livro").value;

    let livro = document.createElement("section");
    livro.setAttribute("class", "d-flex");

    document.querySelector("#livros").appendChild(livro);

    adicionarImagem(livro);
    adicionarDetalhes(livro, nomeLivro);
    adicionarMarcadores(livro);
}

function adicionarImagem(section){
    let div = document.createElement("div");
    div.setAttribute("class", "livro-imagem");

    let imagem = document.createElement("img");
    imagem.src = "img/livro.webp";
    imagem.alt = "Imagem do livro";

    div.appendChild(imagem);
    section.appendChild(div);
}

function adicionarDetalhes(section, nomeLivro){
    let div = document.createElement("div");
    div.setAttribute("class", "livro-contexto");

    section.appendChild(div);

    criarTexto(div, "Livro", nomeLivro);
    criarTexto(div, "Páginas", "???");
    criarTexto(div, "Autor/a/as/es", "???");
}

function criarTexto(div, descricao, valor){
    let p = document.createElement("p");
    let span = document.createElement("span");

    p.className = "livro-dados";
    p.innerHTML = descricao + ": ";
    p.appendChild(span);

    span.id = "livro-nome[]";
    span.innerHTML = valor;

    div.appendChild(p);
}

function adicionarMarcadores(section){
    let div = document.createElement("div");
    div.setAttribute("class", "livro-marcos");

    section.appendChild(div);
    criarMarcador(div, "book", 0);
    criarMarcador(div, "favorite", 0);
}

function criarMarcador(div, icone, numero){
    let marcador = document.createElement("div");
    let spanIcone = document.createElement("span");
    let spanNumero = document.createElement("span");

    spanIcone.className = "material-icons";
    spanIcone.innerHTML = icone;

    spanNumero.className = "round";
    spanNumero.innerHTML = numero;

    marcador.appendChild(spanIcone);
    marcador.appendChild(spanNumero);
    div.appendChild(marcador);
}