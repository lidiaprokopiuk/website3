<!-- Modal swichMachine ___________________________________________________________________________________________________ -->
<div class="modal fade swichMachine" id="swichMachineModal" tabindex="-1" aria-labelledby="swichMachineModal" aria-hidden="true">
    <button type="button" class="btn-close m-0 p-0 opacity-100 text-white bg-img-none position-absolute top-0 start-0 p-3" data-bs-dismiss="modal" aria-label="Close">
        <i class="icon-arrow-left"></i>
    </button>
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-fullscreen-lg-down">
        <div class="modal-content bg-dark rounded-3">		
            <div class="modal-body h-100 p-0 rounded-0">
                <div class="card border-0 rounded-3 card-bg-dark min-h-100">
                    <div class="card-body p-5 position-relative d-flex flex-column justify-content-end justify-content-between">
                        <button type="button" class="btn-close p-4 p-sm-5 opacity-100 text-white d-inline-block d-lg-none w-auto text-end position-absolute top-0 end-0 bg-img-none h-auto" data-bs-dismiss="modal" aria-label="Close">
                            <i class="icon-close-circle text-md"></i>
                        </button>									
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-9 text-center mb-4 pb-1">
                                <h3 class="headline-2 lh-1 text-800 text-uppercase mb-4">SWITCH <br> MACHINE</h3>
                                <p class="text-md lh-sm mb-0">Choose your machine you would like to use or use custom searching.</p>
                            </div>
                            <div class="col-12 col-md-8 form-check chooseMachine p-0">
                                <input type="radio" class="btn-check" name="options-outlined" id="machine1" checked value="1">
                                <label class="btn btn-center rounded-3 card-bg-dark p-3 p-sm-4 d-flex align-items-center border border-2 border-light-gray mb-4 w-100 chooseMachine11" for="machine1">
                                    <i class="bi bi-circle text-lg text-gray me-2 me-sm-4"></i>
                                    <img src="assets/images/buggy.png" class="thumbnail-img object-fit-cover me-2 me-sm-4" height="59" alt="">
                                    <span class="headline-5 text-700 lh-1 text-uppercase text-white">MY ATV XXXC 2018</span>
                                </label>

                                <input type="radio" class="btn-check" name="options-outlined" id="machine2" value="2">
                                <label class="btn btn-center rounded-3 card-bg-dark p-3 p-sm-4 d-flex align-items-center border border-2 border-light-gray mb-5 w-100 chooseMachine11" for="machine2">
                                    <i class="bi bi-circle text-lg text-gray me-2 me-sm-4"></i>
                                    <img src="assets/images/buggy.png" class="thumbnail-img object-fit-cover me-2 me-sm-4" height="59" alt="">
                                    <span class="headline-5 text-700 lh-1 text-uppercase text-white">My Second Bike</span>
                                </label>												
                            </div>
                        </div>
                        <div class="row justify-content-center text-center mt-auto">
                            <div class="col-12 col-sm-10 col-md-6">
                                <button class="btn btn-primary btn-center w-100 mb-4 passValueBox mt-5 mt-lg-0" data-bs-dismiss="modal">
                                    <span class="btn-text text-capitalize">Use Selected Vehicle</span> 
                                </button>
                                <button class="btn btn-outline-primary btn-center w-100 mb-5 mb-lg-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <span class="btn-text text-capitalize">Custom Searching</span> 
                                </button>	
                            </div>                                    														
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>