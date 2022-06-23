<?php $this->view("admin/header",$data); ?>

<?php $this->view("admin/sidebar",$data); ?>

<style>
  table thead{
      background-color : black ;
      color : white ;
  }

  .container-fluid{
      background-color : white ;
  }

  
</style>

 <div class="container-fluid">
 <h3 style="font-weight : bold ;">Settings</h3>
  <form method="post">
    <table class="table table-striped table-advance table-hover">
 <thead>
     <tr><th>Setting</th><th>Value</th></tr>
 </thead>

 <tbody>
 <?php if(is_array($data['settings'])): ?>
 <?php foreach($data['settings'] as $setting): ?>
						      <tr>
                              <td><?=ucwords(str_replace("_"," ",$setting->setting))?></td>
                              <td><input name="<?=$setting->setting?>" class="form-control" type="text" value="<?=$setting->value ?>"/></td>
							  </tr>

                              
							 
							<?php endforeach ; ?>
                            <?php endif ; ?>
						</tbody>
					</table>
         
						  </div>
				
                      	
</tbody>
</table>
  <input type="submit" value="Save Settings" class="btn btn-warning pull-right"></input>
 </form>
<div>

<?php $this->view("admin/footer",$data); ?>