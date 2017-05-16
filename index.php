  <HTML>
      <BODY>

          ...... Your web content ...... 

          <!-- Start of Reportico Report -->
          <?php
            set_include_path('D:\xampp\htdocs\reportico');
            require_once('reportico.php'); 
            $a = new reportico();
            $a->embedded_report = true;
             $q->initial_project_password = "password";
            $a->forward_url_get_parameters = "x1=y1&x2=y2"; 
            $a->execute();
          ?> 
          < !-- End of Reportico Report -->

          ...... More web content ......

      </BODY>
    </HTML>