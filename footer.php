
<footer>
Jonh Balatro 🃏
<div class= "footer-widgets">
<?php 
//ESTO es para mostrar los widgets, el if es pa porsi no estan activos o no hay
if(is_active_sidebar('footer-1')):
    dynamic_sidebar('footer-1');
endif;
 ?>
<p>&copy; <?php echo date('Y'), bloginfo('name');?> Todo al rojo</p> 
</div>

</footer>

<?php 

wp_footer();
 ?>
</body>
</html>