<?php $this->view("admin/header",$data); ?>

<?php $this->view("admin/sidebar",$data); ?>

  <style type="text/css">
     
    .add_new{
        width : 500px;
        height : 600px ;
        background-color : #eae8e8  ;
        box-shadow : 0px 0px 10px #aaa ;
        position : absolute ;
        padding : 6px ;
    }

    .edit_product{
        width : 500px;
        height : 700px ;
        background-color : #eae8e8  ;
        box-shadow : 0px 0px 10px #aaa ;
        position : absolute ;
        padding : 6px ;
    }

    .edit_product_image{
         display : flex ;
         width : 55%;
       
        
    }

    .edit_product_image img {
        flex : 1 ;
        width : 10px;
        margin : 5px;
        margin-left : 40px;
       
    }

    .show{
        display : block ;
    }

    .hide {
        display : none ;
        
    }
  </style>


                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Books<button class="btn btn-primary btn-xs" onclick="show_add_new()"><i class="fa fa-plus"></i> Add New</button></h4>
	                  	  	   <!-- ADD NEW PRODUCT -->
                                <div class="add_new hide">
                             
                 
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Add New Book</h4>
                      <form class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Name</label>
                              <div class="col-sm-10">
                                  <input id="title" name="title" type="text" class="form-control" autofocus required>
                              </div>
                          </div>

                           <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Author</label>
                              <div class="col-sm-10">
                                  <input id="author" name="author" type="text" class="form-control" required>
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book category</label>
                              <div class="col-sm-10">

         
                                  <select id="category" name="category" class="form-control" required>
                                      <option></option>
                                      <?php if(is_array($data['categories'])):?>
                                        <?php foreach($data['categories'] as $categ):?>
                                            <option value="<?=$categ->id ?>"><?=$categ->name ?></option>
                                        <?php endforeach ; ?>   
                                      <?php endif ; ?>
                                    <select>
                                </div>
                          </div>

                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Price</label>
                              <div class="col-sm-10">
                                  <input id="price" name="price" type="number" placeholder="0.00" step="0.01" class="form-control" required>
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Language</label>
                              <div class="col-sm-10">
                                  <input id="language" name="language" type="text" class="form-control" >
                              </div>
                          </div>

                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stock</label>
                              <div class="col-sm-10">
                                  <input id="stock" name="stock" type="number" class="form-control" >
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Pages</label>
                              <div class="col-sm-10">
                                  <input id="pages" name="pages" type="number" value="1" class="form-control" required>
                              </div>
                          </div>

                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Keywords</label>
                              <div class="col-sm-10">
                                  <input id="keywords" name="keywords" type="text"  class="form-control" required>
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Description</label>
                              <div class="col-sm-10">
                                  <input id="description" name="description" type="text" class="form-control" required>
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Images</label>
                              <div class="col-sm-10">
                                  <input id="image" name="image" type="file" class="form-control" required>
                              </div>
                          </div>










                        
                          <button type="button" class="btn btn-warning" onclick="show_add_new()  " style="position : absolute; bottom:10px ; left: 10px ;">Close</button>
                          <button type="button" class="btn btn-primary" onclick="collect_data(event)" style="position : absolute; bottom:10px ; right: 10px ;">Save</button>
                         
                      </form>
                      

                     

                                </div>
                                 <!-- ADD NEW PRODUCT END -->


                       <!-- EDIT PRODUCT -->
                       <div class="edit_product hide" >
                             
                       <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Book</h4>
                      <form class="form-horizontal style-form" method="post">
                       <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Name</label>
                              <div class="col-sm-10">
                                  <input id="edit_title" name="title" type="text" class="form-control" required>
                              </div>
                          </div>

                           <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Author</label>
                              <div class="col-sm-10">
                                  <input id="edit_author" name="author" type="text" class="form-control" required>
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book category</label>
                              <div class="col-sm-10">

         
                                  <select id="edit_category" name="category" class="form-control" required>
                                      <option></option>
                                      <?php if(is_array($data['categories'])):?>
                                        <?php foreach($data['categories'] as $categ):?>
                                            <option value="<?=$categ->id ?>"><?=$categ->name ?></option>
                                        <?php endforeach ; ?>   
                                      <?php endif ; ?>
                                    <select>
                                </div>
                          </div>

                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Price</label>
                              <div class="col-sm-10">
                                  <input id="edit_price" name="price" type="number" placeholder="0.00" step="0.01" class="form-control" required>
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Language</label>
                              <div class="col-sm-10">
                                  <input id="edit_language" name="language" type="text" class="form-control" >
                              </div>
                          </div>

                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stock</label>
                              <div class="col-sm-10">
                                  <input id="edit_stock" name="stock" type="number" class="form-control" >
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Pages</label>
                              <div class="col-sm-10">
                                  <input id="edit_pages" name="pages" type="number" value="1" class="form-control" required>
                              </div>
                          </div>

                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Keywords</label>
                              <div class="col-sm-10">
                                  <input id="edit_keywords" name="keywords" type="text"  class="form-control" required>
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Description</label>
                              <div class="col-sm-10">
                                  <input id="edit_description" name="description" type="text" class="form-control" required>
                              </div>
                          </div>


                          <br> <br style="clear: both ;">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Book Images</label>
                              <div class="col-sm-10">
                                  <input id="edit_image" name="image" type="file"  class="form-control" required>
                              </div>
                          </div>

                            <div class="js-product-image edit_product_image">
                                
                            </div>

                             
                               <button type="button" class="btn btn-warning" onclick="show_edit_product(0,'',false)  " style="position : absolute; bottom:10px ; left: 10px ;">Cancel</button>
                               <button type="button" class="btn btn-primary" onclick="collect_edit_data(event)" style="position : absolute; bottom:10px ; right: 10px ;">Save</button>
                              
                           </form>
                           
     
                          
     
                                     </div>
                                      <!-- EDIT PRODUCT END -->
                                 
                             <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Id</th>
                                  <th><i class="fa fa-bullhorn"></i>Name</th>
                                  <th><i class=" fa fa-edit"></i>author</th>
                                  <th><i class=" fa fa-edit"></i>Price</th>
                                  <th><i class=" fa fa-edit"></i>Quantity</th>
                                  <th><i class=" fa fa-edit"></i>Category</th>
                                  <th><i class=" fa fa-edit"></i>Language</th>
                                  <th><i class=" fa fa-edit"></i>DatePublication</th>
                                  <th><i class=" fa fa-edit"></i>Pages</th>
                                  <th><i class=" fa fa-edit"></i>Description</th>
                                  <th><i class=" fa fa-edit"></i>Image</th>
                                  <th><i class=" fa fa-edit"></i>Action</th>
                              </tr>
                              </thead>
                              <tbody id="table_body">

                              <?php 
                                
                                echo $data['tbl_rows'] ;
                              ?>
                            
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                


  <script type="text/javascript">

       var EDIT_ID = 0 ;

     function show_add_new(){
        var product_input = document.querySelector("#title");
        let box = document.querySelector(".add_new");
         if(box.classList.contains("hide")){

            box.classList.remove("hide");
        
             product_input.focus();
         }else{
            box.classList.add("hide");
            product_input.value = "" ;
         }
       
     }


     

     function show_edit_product(id, product , e){
        let show_edit_box = document.querySelector(".edit_product");
        var edit_title_input = document.querySelector("#edit_title");

        if(e){
           var a = e.currentTarget.getAttribute("info");
           var info = JSON.parse(a.replaceAll("'",'"'));
          

         EDIT_ID = info.id ;
        
       
        //show_edit_box.style.left = (e.clientX ) + "px" ;
        show_edit_box.style.top = (e.clientY - 100)  + "px" ;

        edit_title_input.value =  info.title ;

        var edit_author_input = document.querySelector("#edit_author");
        edit_author_input.value =  info.author ;

        var edit_category_input = document.querySelector("#edit_category");
        edit_title_input.value =  info.id_category ;

        var edit_price_input = document.querySelector("#edit_price");
        edit_price_input.value =  info.price ;

        var edit_description_input = document.querySelector("#edit_description");
        edit_description_input.value =  info.description ;

        var edit_language_input = document.querySelector("#edit_language");
        edit_language_input.value =  info.language ;

        var edit_stock_input = document.querySelector("#edit_stock");
        edit_stock_input.value =  info.stock ;

        var edit_pages_input = document.querySelector("#edit_pages");
        edit_pages_input.value =  info.pages ;

        var edit_keywords_input = document.querySelector("#edit_keywords");
        edit_keywords_input.value =  info.keywords ;

       


        var product_image_input = document.querySelector(".js-product-image");
        product_image_input.innerHTML=  `<img src="<?=ROOT?>${info.image}"/> `;

        }
        
        if(show_edit_box.classList.contains("hide")){

            show_edit_box.classList.remove("hide");
        
             edit_title_input.focus();
         }else{
            show_edit_box.classList.add("hide");
            edit_title_input.value = "" ;
         }
       
     }


     function collect_data(e){
         var title_input = document.querySelector("#title");
        
         if(title_input.value.trim() == "" || !isNaN(title_input.value.trim())){
             alert("Please enter a valid book's title");
             return ;

         }

        var author_input = document.querySelector("#author");
        
        if(author_input.value.trim() == "" || !isNaN(author_input.value.trim())){
            alert("Please enter a valid author's name");
            return ;

        }

        var category_input = document.querySelector("#category");
        
       if(category_input.value.trim() == "" || isNaN(category_input.value.trim())){
            alert("Please enter a valid category's name");
            return ;

        }

        var stock_input = document.querySelector("#stock");
        if(stock_input.value.trim() == "" || isNaN(stock_input.value.trim())){
            alert("Please enter a valid stock ");
            return ;

        }

        var price_input = document.querySelector("#price");
        
        if(price_input.value.trim() == "" || isNaN(price_input.value.trim())){
            alert("Please enter a valid price ");
            return ;

        }

        var language_input = document.querySelector("#language");
        
        if(language_input.value.trim() == "" || !isNaN(language_input.value.trim())){
            alert("Please enter a valid language ");
            return ;

        }

        
        var pages_input = document.querySelector("#pages");
        
        if(pages_input.value.trim() == "" || isNaN(pages_input.value.trim())){
            alert("Please enter a valid pages ");
            return ;

        }

        var  keywords_input = document.querySelector("#keywords");
        
        if(keywords_input.value.trim() == "" || !isNaN(keywords_input.value.trim())){
            alert("Please enter a valid  keywords ");
            return ;

        }


        var  image_input = document.querySelector("#image");
        
        if(image_input.files.length == 0){
            alert("Please enter a valid  image ");
            return ;

        }

       


        var description_input = document.querySelector("#description");
        
        if(description_input.value.trim() == "" || !isNaN(description_input.value.trim())){
            alert("Please enter a valid description ");
            return ;

        }




          var data = new FormData();
          data.append('title',title_input.value.trim());
          data.append('author',author_input.value.trim());
          data.append('id_category',category_input.value.trim());
          data.append('price',price_input.value.trim());
          data.append('stock',stock_input.value.trim());
          data.append('language',language_input.value.trim());
          data.append('keywords',keywords_input.value.trim());
          data.append('pages',pages_input.value.trim());
          data.append('description',description_input.value.trim());
          data.append('image',image_input.files[0]);
          data.append('data_type','add_product');
          send_data_files(data);
            
        //var data = product_input.value.trim() ;  
         /*send_data({
             title:    title_input.value.trim(), 
             author:   author_input.value.trim(), 
             id_category: category_input.value.trim(), 
             price:    price_input.value.trim(),
             stock:    stock_input.value.trim(), 
             language: language_input.value.trim(), 
             pages:    pages_input.value.trim(), 
             keywords: keywords_input.value.trim(), 
             description:description_input.value.trim(), 
             data_type: 'add_product'
            }); */
         }


            
     

     function collect_edit_data(e){
        var title_input = document.querySelector("#edit_title");
        
        if(title_input.value.trim() == "" || !isNaN(title_input.value.trim())){
            alert("Please enter a valid book's title");
            return ;

        }

       var author_input = document.querySelector("#edit_author");
       
       if(author_input.value.trim() == "" || !isNaN(author_input.value.trim())){
           alert("Please enter a valid author's name");
           return ;

       }

       var category_input = document.querySelector("#edit_category");
       
      if(category_input.value.trim() == "" || isNaN(category_input.value.trim())){
           alert("Please enter a valid category's name");
           return ;

       }

       var stock_input = document.querySelector("#edit_stock");
       if(stock_input.value.trim() == "" || isNaN(stock_input.value.trim())){
           alert("Please enter a valid stock ");
           return ;

       }

       var price_input = document.querySelector("#edit_price");
       
       if(price_input.value.trim() == "" || isNaN(price_input.value.trim())){
           alert("Please enter a valid price ");
           return ;

       }

       var data = new FormData();
       var language_input = document.querySelector("#edit_language");
       
       if(language_input.value.trim() == "" || !isNaN(language_input.value.trim())){
           alert("Please enter a valid language ");
           return ;

       }

       
       var pages_input = document.querySelector("#edit_pages");
       
       if(pages_input.value.trim() == "" || isNaN(pages_input.value.trim())){
           alert("Please enter a valid pages ");
           return ;

       }

       var  keywords_input = document.querySelector("#edit_keywords");
       
       if(keywords_input.value.trim() == "" || !isNaN(keywords_input.value.trim())){
           alert("Please enter a valid  keywords ");
           return ;

       }


       var  image_input = document.querySelector("#edit_image");
       
       if(image_input.files.length > 0){
           data.append('image',image_input.files);
       }
       


      


       var description_input = document.querySelector("#edit_description");
       
       if(description_input.value.trim() == "" || !isNaN(description_input.value.trim())){
           alert("Please enter a valid description ");
           return ;

       }




         
         data.append('title',title_input.value.trim());
         data.append('author',author_input.value.trim());
         data.append('id_category',category_input.value.trim());
         data.append('price',price_input.value.trim());
         data.append('stock',stock_input.value.trim());
         data.append('language',language_input.value.trim());
         data.append('keywords',keywords_input.value.trim());
         data.append('pages',pages_input.value.trim());
         data.append('id',EDIT_ID);
         data.append('description',description_input.value.trim());
         data.append('data_type','edit_product');
         send_data_files(data);
           


            
     }



     function send_data(data = {} ){
         
       

         var ajax = new XMLHttpRequest();
       
         ajax.addEventListener('readystatechange' , function(){
               
             if(ajax.readyState == 4 && ajax.status == 200){
                 handle_result(ajax.responseText);
             }
         });


         ajax.open("POST","<?=ROOT?>ajax_product", true);
         ajax.send(JSON.stringify(data));

     }


     function send_data_files(formdata){
         
       

         var ajax = new XMLHttpRequest();
       
         ajax.addEventListener('readystatechange' , function(){
               
             if(ajax.readyState == 4 && ajax.status == 200){
                 handle_result(ajax.responseText);
             }
         });


         ajax.open("POST","<?=ROOT?>ajax_product", true);
         ajax.send(formdata);

     }





     function handle_result(result){
         console.log(result);    
      if(result != ""){
         var obj = JSON.parse(result);
              
         if(typeof obj.data_type != 'undefined'){

            if(obj.data_type == "add_new"){
              if(obj.message_type == "info"){
                alert(obj.message);
                 show_add_new();

                 var table_body = document.querySelector("#table_body");
                 table_body.innerHTML = obj.data ;
             }else{
                 alert(obj.message);
             }
            }else{
                if(obj.data_type == "edit_product"){

                
                 show_edit_product(0,'',false);

                 var table_body = document.querySelector("#table_body");
                 table_body.innerHTML = obj.data ;
                 //alert(obj.message);
      

              }else
                if(obj.data_type == "disable_row"){

                var table_body = document.querySelector("#table_body");
                 table_body.innerHTML = obj.data ;

                }else {
                
                if(obj.data_type == "delete_row"){

                 var table_body = document.querySelector("#table_body");
                 table_body.innerHTML = obj.data ;
                     
                    alert(obj.message);
                }
            }
            }
         }
        
    }

        
           
     }

     function edit_row(e , id){
         send_data({
             data_type : ""
         });
     }

     function delete_row(id){

        if(!confirm("Are you sure you want to delete this row?")){
            return ;
        }
         send_data({
             data_type : "delete_row",
             id:id 
         });
     }


     function disable_row(id,state){
        send_data({
             data_type : "disable_row",
             id:id ,
             current_state:state 
         });
     }
  </script>
<?php $this->view("admin/footer",$data); ?>