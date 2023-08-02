<?php if(!empty($errors)) : ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
            <div><?php echo $error ?></div>
    <?php endforeach; ?>

    <?php endif;?>
  </div>

        <form action=""  method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Product Image</label>
            <br>
            <input type="file"  name="image" >
          
        </div>
        <div class="mb-3">
            <label>Product title </label>
            <input type="text" name = "title" value="<?php echo $title;?>"  class="form-control">
          
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea type="text" name="description" class="form-control"><?php echo $description;?></textarea>
          
        </div>

        <div class="mb-3">
            <label>Product Prices</label>
            <input type="number" value="<?php echo $price;?>" name= "price" step=".01" class="form-control">
          
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>