<footer class="main-footer">
    <!-- <strong>Copyright &copy; 2014 - <?php echo date("Y"); ?> | <a href="">Camimmo</a></strong> | All rights
    reserved. -->
  </footer>
  <script type="text/javascript">
  $(document).ready(function(){
    <?php 
      if (isset($notification)) { echo $notification; }
    ?>
  });
</script>
</body>
</html>