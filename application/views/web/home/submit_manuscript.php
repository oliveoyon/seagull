<div class="checkout">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				    
					<div class="login_f" id="login_f">
                        <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
						<?php echo form_open();?>
							<div class="row">
								<div class="col-md-12">
								    <label for="log_user">Title or ISSN<span>*</span></label>
									<input class="form-control" type="text" id="log_user" placeholder="Title or ISSN" name="search">
								</div>
                               <div class="col-md-6">
                                   <button type="submit" class="btn-theme">Find Journal</button>
                               </div>
							</div>
						 <?php echo form_close();?>
					</div>
				</div>
		<?php foreach($categories as $cat){
		$subcat=$this->Mdb->getData('journal_subcategory',array('journal_cat_id'=>$cat->journal_cat_id));
		?>
		<div class="col-md-3">
            <strong><p><span class="text-theme"><?=$cat->journal_cat_title;?></p></span></strong><br>
            <?php foreach($subcat as $scat){?>
            <li><span class="text-theme">●</span> <?=$scat->journal_subcat_title;?></li>
            <?php } ?>
        </div>
        <?php } ?>
            </div>
        <h4>Book Manuscript Submission</h4>
        <p>To submit book manuscript to Seagull, kindly follow <span class="text-theme"><a href="<?=site_url('book-authors');?>">Seagull Book Author Services</a></span></p>
         </div>
     </div>
   </div>
</div>   