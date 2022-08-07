<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h3>formmm</h3>
    <div class="mx-auto" style="width:600px;">
    
    @if ($currentStepp == 1)
   {{-- STEP1--}}

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
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"  >{{$category->name}}</option>  
                            @endforeach
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
@endif




        @if ($currentStepp == 2)
        @foreach ($souscategories as $souscategory)
                           
                             @if ( $souscategory->id_categorie == $categorie_idd )  
    <div class="step-tow">
       <div class="card">
           <div class="card-header bg-secondary text-white">  step1 </div>
           <div class="card-body">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                       
                           <label for="">steps</label>
                           <br/>
                           
                           
                             
                             <?php $b= $souscategory->id ;?>
                            {{$b}}
                                    @foreach ($qste as $qstei)

                                        @if ( $qstei->souscategory_id== $souscategory->id )
                                       
                                        <section id="sec-1">
                                        <form action="/live/{{$qstei->id}}" method="POST">
                                            <h3>
                                                {{$qstei->qst}}
                                                </h3>
                                                <input type="text"   required valeur="info<? $qstei->id ?>"  name="info{{$qstei->id}}">
                                                
                                               <button type="submit" > 
                                         </form>
                                        </section>
                                                <br/>
                                               
                                              
                                    @endif
                                    @endforeach     
                                    {{$souscategory->id}}
                           
                             


                                
                            <br/>     
                    </div> 
                </div>
            </div>
            </div>
        </div>
    
    </div>
</form>
    {{$currentStep}}
    @break
    @endif
@endforeach                           
@endif















             <div class="action-buttonsd-flex justify-content-between bg-white pt-2pb-2">
    </div>
     
             @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 )
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif
            <span style="padding-left:30px;"></span>
           
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3|| $currentStep == 4 )
                <button type="submit" class="btn btn-md btn-success" wire:click="increaseStep()" wire:click="like">>Next</button>
            @endif

            @if ($currentStep == 4)
                 <button type="submit"  class="btn btn-md btn-primary">Submit</button>
            @endif
           



   </div>
    </form>
      
    
  
</div>
                  
             




</div>
