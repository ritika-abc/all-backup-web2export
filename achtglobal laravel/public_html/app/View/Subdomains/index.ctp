iiiiiiiiiiiiiiiiiiiii

<?php ?>
<section>
<div class="w-100 pt-100 pb-30 dark-layer3 opc7 position-relative">
<div class="fixed-bg" style="background-image: url(images/pagetop-bg.jpg);"></div>
<div class="container">
<div class="page-top-wrap w-100">
<h1 class="mb-0">Business Network</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo $this->webroot;?>" title="">Home</a></li>
<li class="breadcrumb-item active">Business Network</li>
</ol>
</div>
</div>
</div>
</section>
<section>
<div class="w-100 pt-100 pb-100 position-relative">
<div class="container">
<div class="proj-wrap w-100">
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-12">				
<?php echo $page_description;?>
</div>
</div>				

<div class="row">
 
 
<?php if(!empty($subdomains)) {
	foreach($subdomains as $subdomain) :
?>	

<div class="col-md-4 col-sm-12 col-lg-4 w-100">
<a class="thm-btn thm-bg mb-20 w-100" href="<?php echo $subdomain['Subdomain']['slug'];?>.html" title="<?php echo $subdomain['Subdomain']['name'];?>" ><?php echo $subdomain['Subdomain']['name'];?></a></div>
           
<?php endforeach; } ?>   
  
<?php 
								foreach($locations as $location_item) :

 									?>
		                      <div class="col-lg-12 col-md-12 col-sm-12 w-100">
<a class="thm-btn thm-bg d-block mb-20 w-100" href="<?php echo $location_item['Location']['slug'];?>/"><?php echo $location_item['Location']['name'];?></a></div>
									 <?php if($location_item['ChildLocation']) {

								foreach($location_item['ChildLocation'] as $child_location) :

										 ?>
				
<div class="col-md-4 col-sm-12 col-lg-4 w-100">
 
<a class="thm-btn thm-bg mb-20 w-100" href="<?php echo $child_location['slug'];?>/"><?php echo $child_location['name'];?></a>
					
</div>
<?php endforeach; } ?>                            				 

<?php endforeach;?>                            				 

</div>                        
</div>
</div>
</div>
</section>

 