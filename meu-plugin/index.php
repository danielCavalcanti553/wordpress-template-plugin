<?php
/*
Plugin Name: O meu Plugin
Plugin URI: http://exemplo.org/o-meu-plugin
Description: Um plugin de teste didático
Version: 1.0
Author: Aluno SENAC
Author URI: meusite.com
License: GPLv2
*/

function example_like() {
            return "E não esqueça de curtir nossa fã page";
}

add_shortcode("like", "example_like");

?>

function form(){ 

    echo '

        <form method="post" action="'.plugins_url( 'admin-post.php', __FILE__ ).'">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" >
 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Assunto</label>
            <input type="text" name="assunto" class="form-control" >
          </div>

          
          <div class="form-group">
            <label>Mensagem</label>
            <textarea class="form-control" name="mensagem"  rows="3"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    ';
}
add_shortcode("formulario", "form");
    
?>