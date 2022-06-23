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
 <h3 style="font-weight : bold ;">Messages</h3>

    <table class="table table-striped table-advance table-hover">

 <tbody>
 <?php if($data['mode'] == "read"):?>
    

<?php if(is_array($data['messages'])): ?>
    <thead>
     <tr><td>Message id</td><td>Name</td><td>Email</td><td>Message</td><td>Subject</td><td>Action</td></tr>
 </thead>
  
 <tbody>


 <?php foreach($data['messages'] as $message): ?>
						      <tr><td><?=$message->id_message?></td>
                              <td><?=$message->name?></td>
                              <td><?=$message->email?></td>
                              <td><?=$message->message?></td>
                              <td><?=$message->subject?></td>
                              <td>
                               <a href="<?=ROOT?>admin/messages?delete=<?=$message->id_message?>">   
                              <i class="fa fa-trash-o"></i> Delete</td></tr>
                                </a>

							<?php endforeach ; ?>
					
						
					<?php else :?>
					   <div>No messages yet.</div>
					<?php endif ; ?>
                    </tbody>
                    <?php elseif($data['mode'] == "delete_confirmed"): ?>
                        <div class="status alert alert-success">The message was deleted successfully</div>
                        <a href="<?=ROOT?>admin/messages">   
                                <input type="button" class="btn btn-success pull-right" value="Back to messages"  />
                              </a>

                        <?php elseif($data['mode'] == "delete" && is_object($data['messages'])) : ?>

                        <div class="status alert alert-danger">Are you sure you want to delete this message ?</div>
                        <thead>
                         <tr><td>Message id</td><td>Name</td><td>Email</td><td>Message</td><td>Subject</td></tr>
                        </thead>
                         <tbody>
                        <tr><td><?=$data['messages']->id_message?></td>
                              <td><?=$data['messages']->name?></td>
                              <td><?=$data['messages']->email?></td>
                              <td><?=$data['messages']->message?></td>
                              <td><?=$data['messages']->subject?></td></tr>
                              <a href="<?=ROOT?>admin/messages?delete_confirmed=<?=$data['messages']->id_message?>">   
                                <input type="button" class="btn btn-warning pull-right" value="delete"  />
                              </a>

                              <a href="<?=ROOT?>admin/messages">   
                                <input type="button" class="btn btn-primary pull-left" value="Back"  />
                              </a>
                              </tbody>
                    <?php endif ; ?>
                      	

</table>
<div>

<?php $this->view("admin/footer",$data); ?>