# 📄 style.css comentado

```css
@charset "utf-8";
/* 
Define a codificação do arquivo CSS.
UTF-8 permite acentos, ç e caracteres especiais.
*/


/* ==================================================
   CONFIGURAÇÕES GLOBAIS
================================================== */

*{

   margin: 0px;
   /* 
   Remove margens automáticas de TODOS os elementos.
   Navegadores colocam margens padrão em tags.
   */

   padding: 0px;
   /*
   Remove espaçamentos internos automáticos.
   */

   font-family: Arial, Helvetica, sans-serif;
   /*
   Define a fonte padrão do site.

   Ordem:
   1° Arial
   2° Helvetica
   3° sans-serif (fonte genérica)
   */
}


/* ==================================================
   HTML E BODY
================================================== */

html, body{

    /* ocupa toda altura da tela */
    height: 100vh;

    /*
    ocupa toda largura da tela
    */
    width: 100vw;

    /*
    define fundo preto da página
    */
    background-color: black;
}


/* ==================================================
   MAIN
================================================== */

main{

    /*
    ocupa toda altura visível da tela
    */
    height: 100vh;

    /*
    permite posicionamento absoluto dos filhos
    */
    position: relative;

    /*
    cor de fundo da área principal
    */
    background-color: rgb(45, 81, 69);
}


/* ==================================================
   SECTION TELEFONE
================================================== */

section#telefone{

    /*
    cor azul para visualizar a área
    */
    background-color: blue;

    /*
    posicionamento absoluto
    baseado no elemento pai
    */
    position: absolute;

    /*
    move o topo do elemento
    para 50% da tela
    */
    top: 50%;

    /*
    move a esquerda do elemento
    para 50% da tela
    */
    left: 50%;

    /*
    corrige o alinhamento central.

    Sem isso:
    o canto superior esquerdo
    ficaria no centro.

    translate move:
    -50% na horizontal
    -50% na vertical
    */
    transform: translate(-50%, -50%);

    /*
    altura da section
    */
    height: 500px;

    /*
    largura da section
    */
    width: 500px;

}
```

---

# 📄 index.html comentado

```html
<!DOCTYPE html>
<!--
Informa ao navegador que o documento usa HTML5.
-->

<html lang="pt-br">
<!--
Tag raiz do documento HTML.

lang="pt-br"
define o idioma da página.
-->

<head>

    <meta charset="UTF-8">
    <!--
    Permite caracteres especiais:
    acentos, ç, símbolos etc.
    -->

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <!--
    Faz o site funcionar corretamente
    em celulares e telas menores.
    -->

    <link rel="stylesheet"
          href="estilos/style.css">
    <!--
    Conecta o HTML ao arquivo CSS.
    -->

    <title>Document</title>
    <!--
    Nome mostrado na aba do navegador.
    -->

</head>


<body>

    <main>
    <!--
    Área principal do site.
    -->

        <section id="telefone">
        <!--
        Área que representa o telefone.
        O CSS usa:
        section#telefone
        para estilizar esta section.
        -->

        </section>


        <section id="redes-sociais">
        <!--
        Área futura para ícones
        ou links de redes sociais.
        -->

        </section>

    </main>

</body>
</html>
```