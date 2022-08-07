<div>
    
    <h3>formmm</h3>
    <div class="mx-auto" style="width:600px;">
    
    <?php if($currentStep == 1): ?>
   

   <div class="step-one">
       <div class="card">
           <div class="card-header bg-secondary text-white">STEP 1/4</div>
           <div class="card-body">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="">category</label>
                           <br/>
                           <select id="qu" wire:model="categorie_idd">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"  ><?php echo e($category->name); ?></option>  
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <br/>
                             </div>
                    </div> 
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>
<?php endif; ?>




        <?php if($currentStep == 2): ?>
        
    <div class="step-tow">
       <div class="card">
           <div class="card-header bg-secondary text-white">  step1 </div>
           <div class="card-body">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                       
                           <label for="">steps</label>
                           <br/>
                           
                           <?php $__currentLoopData = $souscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                             <?php if( $souscategory->id_categorie == $categorie_idd ): ?>  
                             <?php array_push ($g, "{{$souscategory->id}}") ?>
                             <?php echo e($souscategory->id); ?>

                             
                             <?php $b= $souscategory->id ;?>
                            <?php echo e($b); ?>

                                    <?php $__currentLoopData = $qste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qstei): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if( $qstei->souscategory_id== $souscategory->id ): ?>
                                       
                                        <section id="sec-1">
                                        <form action="/live/<?php echo e($qstei->id); ?>" method="POST">
                                            <h3>
                                                <?php echo e($qstei->qst); ?>

                                                </h3>
                                                <input type="text"   required valeur="info<? $qstei->id ?>"  name="info<?php echo e($qstei->id); ?>">
                                                
                                               <button type="submit" > 
                                         </form>
                                        </section>
                                                <br/>
                                               
                                              
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                    <?php echo e($souscategory->id); ?>

                           
                             


                                
                            <br/>     
                    </div> 
                </div>
            </div>
            </div>
        </div>
    
    </div>
</form>
    <?php echo e($currentStep); ?>

    <?php break; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
<?php endif; ?>





<?php if($currentStep == 3): ?>
        <form action="/repon" method="POST">
    <div class="step-tow">
       <div class="card">
           <div class="card-header bg-secondary text-white">  step2 </div>
           <?php echo e(print_r($g)); ?>

           <div class="card-body">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                       
                           <label for="">steps</label>
                           <br/>
                          
                           <?php $__currentLoopData = $souscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if( $souscategory->id_categorie == $categorie_idd  &&  $souscategory->id !=88): ?>
                         
                                    <?php $__currentLoopData = $qste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qstei): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if(( $qstei->souscategory_id== $souscategory->id) ): ?>
                                            
                                        <section id="sec-1">
                                            <h3>
                                                <?php echo e($qstei->qst); ?>

                                                </h3>
                                                <input type="text"   required valeur="info<? $qstei->id ?>"   wire:model="frameworks">
                                                
                                                
                                        </section>
                                                <br/>
                                               
                                    <?php echo e($this->frameworks8); ?>

                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                   
                            <br/>    
                    </div> 
                </div>
            </div>
            </div>
        </div>
    
    </div>
</form>
    <?php echo e($currentStep); ?>

    <?php break; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
<?php endif; ?>




<?php if($currentStep == 4 ): ?>
        <form action="/repon" method="POST">
    <div class="step-tow">
       <div class="card">
           <div class="card-header bg-secondary text-white">  step3</div>
           <div class="card-body">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                       
                           <label for="">steps</label>
                           <br/>
                           
                           <?php $__currentLoopData = $souscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if( $souscategory->id_categorie == $categorie_idd  &&  $souscategory->id !=89 &&  $souscategory->id !=88 ): ?>
                         
                                    <?php $__currentLoopData = $qste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qstei): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if(( $qstei->souscategory_id== $souscategory->id) ): ?>
                                            
                                        <section id="sec-1">
                                            <h3>
                                                <?php echo e($qstei->qst); ?>

                                                </h3>
                                                <input type="text"   required valeur="info<? $qstei->id ?>"   wire:model="frameworks<? $qstei->id ?>">
                                                
                                                
                                        </section>
                                                <br/>
                                               
                                    
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                   
                            <br/>    
                    </div> 
                </div>
            </div>
            </div>
        </div>
    
    </div>
</form>
    <?php echo e($currentStep); ?>

    <?php break; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                           
<?php endif; ?>












             <div class="action-buttonsd-flex justify-content-between bg-white pt-2pb-2">
    </div>
     
             <?php if($currentStep == 2 || $currentStep == 3 || $currentStep == 4 ): ?>
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            <?php endif; ?>
            <span style="padding-left:30px;"></span>
           
            <?php if($currentStep == 1 || $currentStep == 2 || $currentStep == 3|| $currentStep == 4 ): ?>
                <button type="submit" class="btn btn-md btn-success" wire:click="increaseStep()" wire:click="like">>Next</button>
            <?php endif; ?>

            <?php if($currentStep == 4): ?>
                 <button type="submit"  class="btn btn-md btn-primary">Submit</button>
            <?php endif; ?>
           



   </div>
    </form>
      
    
  
</div>
                  
             




</div>
<?php /**PATH C:\laragon\www\medTech\resources\views/livewire/counter.blade.php ENDPATH**/ ?>