new Vue({
    el: '#app',
    data: {
        pessoas: [],
        idPessoa: -1,
        pessoa: [],
        pesquisa: false,
        criarPerfil: false,
        deletarPerfil: false,
        // idPessoa: localStorage.getItem("idPessoa"),
    },
    methods: {
        async carregaPessoas() {
            this.pessoa.imagem = null;
            this.pessoa.nome = "";
            this.pessoa.sobrenome = "";
            this.pesquisa = true;
            // sessionStorage.setItem("b", this.a);
            // sessionStorage.setItem("idPessoa", this.idPessoa);
            this.pessoa = await (await fetch("http://127.0.0.1:8000/api/pessoas/" + this.idPessoa)).json();
        },
        async deletaPessoa() {
            await fetch("http://127.0.0.1:8000/api/pessoas/" + this.idPessoa, {
                method: "delete",
                headers: {
                    "Content-type": "application/json"
                },
            })
            window.location.href = "index.html";
        }
    },
    async created() {
        this.pessoas = await (await fetch("http://127.0.0.1:8000/api/pessoas")).json();

    },
},
)