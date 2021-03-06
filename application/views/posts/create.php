<h1><?= $title; ?></h1>
  <!-- form_validation have been created in cofig/$autoload['libraries'], second step will be in controller/posts/create -->

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>

  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
 
 <div class="form-group">
 	<label>Category</label>
 	<select name="catergory_id" class="form-control">
 		<?php foreach ($categories as $category): ?>
 			<option value="<?php $category['id']; ?>"><?php $category['name']; ?></option>
 		<?php endforeach; ?>
 	</select>
 </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>
