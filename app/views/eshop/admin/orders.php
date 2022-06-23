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
 <h3 style="font-weight : bold ;">Orders</h3>
<?php if(is_array($data['orders'])): ?>
    <table class="table table-striped table-advance table-hover">
 <thead>
     <tr><td>Order Number</td><td>Date</td><td>First name</td><td>Last name</td><td>Addresse</td><td>Phone</td><td>City</td><td>Country</td><td>Method</td><td>ZIP</td><td>Total</td></tr>
 </thead>

 <tbody>
 <?php foreach($data['orders'] as $order): ?>
                                <tr><td><?=$order->id_order?></td>
                                <td><?=$order->date?></td>
						      <td><?=$order->first_name?></td>
                              <td><?=$order->last_name?></td>
                              <td><?=$order->full_address?></td>
                              <td><?=$order->phone?></td>
                              <td><?=$order->city?></td>
                              <td><?=$order->country?></td>
                              <td><?=$order->method?></td>
                              <td><?=$order->zip?></td>
                              <td><?=$order->total?></td>
                              </tr>
							<?php endforeach ; ?>
						</tbody>
					</table>
						  </div>
					<?php else :?>
					   <div>this user has no orders yet.</div>
					<?php endif ; ?>
                      	
</tbody>
</table>
<div>

<?php $this->view("admin/footer",$data); ?>