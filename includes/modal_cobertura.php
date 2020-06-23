

<link rel="stylesheet" type="text/css" href="./css/aux_modal_cobertura.css">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
        <div class="container">  
            <div class="row text-center" id="rowModal">
                
                <div class="col-sm-12 text-center">
                  <img src="./images/logo-davoi (2).png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                </div>
                
                <div class="col-sm-12">
                  <form action="./cobertura/" method="POST">
                 
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3"><b>CIDADE</b></span>
                        <div class="form-group">
                          <select class="form-control" name="cidade" id="">
                          <?php
                          $db= new DB;
                            $sel = $db->select("SELECT * FROM cidades ORDER BY id ");
                            if($db->rows($sel)){
                                $x=1;	
                                while($yy = $db->expand($sel)){				
                                    ?>
                              <option value="<?php echo $yy['id'] ?>"><?php echo strtoupper($yy['nome']) ?></option>
                                <?php } } ?>
                          </select>
                        </div>
                      </div>
                       <div class="col-sm-12" style="margin-top:20px">
                          <input type="submit" value="Consultar" class="btn btn-primary btn-block">
                       </div>
                  </form>
                </div>

               
            
            </div>
        </div>
      
      </div>
      
    </div>
  </div>
</div>