<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <?php   // <!-- head -->
        if(!empty($head)): $this->load->view($head); endif; 
        ?>
    </head>
    <body>
        <!-- site-content -->
        <div id="site-content">
            <div class="container"
                <!-- header -->
                <div class="row">
                    <div id="header" class="col-md-12">
                            <?php if(!empty($header)): $this->load->view($header); endif;?>
                    </div>
                </div>
                <!-- main-content -->
                <div class="row">
                    <div id="main-content" class="col-md-12 ">
                            <!-- // aside -->
                            <?php if(!empty($aside)):$this->load->view($aside); endif; ?>
                            <!-- // main -->
                            <?php if(!empty($main)): $this->load->view($main);endif; ?>
                    </div>
                </div>
                <!-- footer -->
                <div class="row">
                    <div  class="col-md-12">
                        <?php if(!empty($footer)): $this->load->view($footer);endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($scripts)): $this->load->view($scripts);endif; ?>
    </body>
</html>