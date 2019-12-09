<style>
.hidden { display:none; }
.data { padding-left: 1rem; }
.noticia { margin: 1rem 0; padding: .5rem; }
.noticia:nth-child(even) { background: #ffc; }
.noticia:nth-child(odd) { background: #cfc; }
</style>


<?php
$xmlnoticias = file_get_contents('https://news.google.com/rss/search?hl=pt-BR&gl=BR&q=est%C3%A9tica&ceid=BR:pt-419');


$noticias = explode('<item>', $xmlnoticias);
array_shift($noticias);


foreach($noticias as $noticia){

    $isso = ['</item>', '<title>', '</title>', '<link>', '</link>', '<guid', '</guid>', '<pubDate>', '</pubDate>'];
    $porisso = ['', '<h3>', "</h3>\n", '<a target="_blank" href="', '">Ler notícia</a>', '<span class="hidden"', '</span>', '<span class="data">Em ', "</span>\n"];
    $noticia = str_ireplace($isso, $porisso, $noticia);

    $conteudo_partes = explode('</description>', explode('<description>', $noticia)[1]);
    $conteudo = html_entity_decode($conteudo_partes[0]);
    $conteudo = str_ireplace('<a', '<span', $conteudo);
    $conteudo = str_ireplace('</a>', '</span>', $conteudo);

    $isso = [$conteudo_partes[0], '<description>', '</description>', '<source', '</source>'];
    $porisso = [$conteudo, '<p class="desc">', '</p>', '<span class="hidden"', '</span>'];
    $noticia = str_ireplace($isso, $porisso, $noticia);

    echo '<div class="noticia">' . $noticia . "</div>\n\n\n";


}




?>