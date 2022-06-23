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
 <h3 style="font-weight : bold ;">Users</h3>
<?php if(is_array($data['users'])): ?>
    <table class="table table-striped table-advance table-hover">
 <thead>
     <tr><td>User Id</td><td>Email</td><td>Total Orders</td></tr>
 </thead>

 <tbody>

    <?php foreach($data['users'] as $user): ?>
						      <tr><td><?=$user->cust_id?></td>
                              <td><?=$user->email?></td>
                              <td><?=$user->orders_count?></td></tr>

                              
							 
							<?php endforeach ; ?>
						</tbody>
					</table>
						  </div>
					<?php else :?>
					   <div>No <?=$user->cust_type?> yet.</div>
					<?php endif ; ?>
                      	
</tbody>
</table>
<div>

<?php $this->view("admin/footer",$data); ?>