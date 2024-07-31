<?php ?> 
<!--page-wrapper-->
<div class="page-wrapper">
<!--page-content-wrapper-->
<div class="page-content-wrapper">
<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
<div class="breadcrumb-title pr-3">Products</div>
<div class="pl-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">

<li class="breadcrumb-item active" aria-current="page">Product Details</li>
</ol>
</nav>
</div>
<div class="ml-auto">
<div class="btn-group">
<?php 
echo $this->Html->link("<i class=\"icon-plus\"></i>Manage Products",
array( 'action' => 'index', 'admin' => true),
array('escape' => FALSE,'class' => 'btn btn-primary')); 
?>
</div>
</div>
</div>
<!--end breadcrumb-->


<div class="row">
<div class="col-12 col-lg-9 mx-auto">
<div class="card radius-15">
<div class="card-body">
<div class="card-title">
<h4 class="mb-0"></h4>
</div>
<hr/>
<?php echo $this->Form->create('Product',array('enctype'=>'multipart/form-data'));
echo $this->Form->input('id');

?>

<div class="form-body">


<div class="form-group row">
<label class="col-sm-2 col-form-label">Product Name</label>
<div class="col-sm-10"> <?php echo $this->Form->input('name', array('class'=>'form-control','label'=>''));?> </div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Select Main Product</label>
<div class="col-sm-10"><?php echo $this->Form->input('parent_id', array('options' => $parentproducts,'class'=>'form-control  single-select','label'=>'','empty' => true));?>	
</div>
</div>

<?php

$thumbImageurl = $this->Html->url('/images/products/'.$this->data['Product']['image']);
$Imageurl = "/images/noimage.png";

$Imageurl = ($this->data['Product']['image'] != '')?$thumbImageurl:$Imageurl;
?>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Product Image</label>
<div class="col-sm-6"> 
<input type="file" class="form-control" name="data[Product][image]" id="BannerThumb">

</div>
<div class="col-sm-4"> 

<img src="<?php echo $Imageurl;?>" class="img-thumbnail" alt="">
</div>

</div> 



<?php

$catalog_pdf = $this->Html->url('/images/products/'.$this->data['Product']['catalog_pdf']);
 
 ?>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Product Catalog PDF</label>
<div class="col-sm-6"> 
<input type="file" class="form-control" name="data[Product][catalog_pdf]" id="BannerThumb">

</div>
<div class="col-sm-4"> 

<?php if(!empty($this->data['Product']['catalog_pdf'])) { ?>
<a href="<?php echo $catalog_pdf;?>" target="_blank">Catalog PDF</a>
<?php } ?>
</div>

</div> 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Short Description</label>
<div class="col-sm-10"> <?php echo $this->Form->input('short_description', array('class'=>'form-control','label'=>''));?> </div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Description</label>
<div class="col-sm-10"> <?php echo $this->Form->input('description', array('class'=>'form-control ckeditor','label'=>''));?> </div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Meta Title</label>
<div class="col-sm-10"> <?php echo $this->Form->input('meta_title', array('class'=>'form-control','label'=>''));?> </div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Meta Description</label>
<div class="col-sm-10"> <?php echo $this->Form->input('meta_desc', array('class'=>'form-control','label'=>''));?> </div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Meta Keyword</label>
<div class="col-sm-10"> <?php echo $this->Form->input('meta_keyword', array('class'=>'form-control','label'=>''));?> </div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary px-4">Submit</button> 
<?php 
echo $this->Html->link("Cancel",
array( 'controller' => 'products', 'action' => 'index', 'admin' => true),
array('escape' => FALSE,'class' => 'btn btn-danger px-4')); 
?>
</div>
</div>
</div>
</div>
</div>

<?php echo $this->Form->end(); ?>
</div>
</div>

</div>

<!--end row-->

</div>
</div>
<!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->