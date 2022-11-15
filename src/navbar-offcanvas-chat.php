<!-- OFFCANVAS CHAT ______________________________________________________________________________  -->
<div class="offcanvas offcanvas-end bg-chat offcanvas-chat" tabindex="-1" id="offcanvasChat" aria-labelledby="offcanvasChat">
    <button class="close-offcanvas-chat d-none d-sm-block position-absolute top-50 start-0 translate-middle z-index_3" data-bs-dismiss="offcanvas">
        <span class="bg-primary-gradient border border-1 border-white border-opacity-15 rounded-circle d-flex justify-content-center align-items-center boxSize-md">
            <i class="icon-arrow-right-3 lh-1 text-white text-500 text-md"></i>
        </span>
    </button>
    <div class="offcanvas-header px-4 px-sm-5 d-block pt-0 pb-5 bg-primary-gradient-2">
        <div class="d-flex justify-content-between mb-3 align-items-center">
            <a href="#" class="d-inline-block me-auto">
            <img src="assets/images/Logo/ORV-HeadQuarters.svg" alt="" width="130">
            </a>
            <button type="button" class="btn-close opacity-100 w-100 h-100 d-inline-block text-end bg-img-none" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close-circle text-white text-lg"></i>
            </button>
        </div>				
        <h3 class="chat-title headline-3 text-800 lh-1 mb-2 pb-sm-1">
            Hi <span id="userName">John Smith</span>
        </h3>
        <p class="text-xxs text-500 lh-1 mb-5 pb-4">Our qualified team will try to help you as best as possible. Tell us what do you need...</p>
    </div>
    <div class="offcanvas-body scroll-dark px-3 px-sm-5 pb-5 pt-0 mt-neg-sm">
        <div class="card-bg-dark_2 border-1 border-white rounded-3 p-4 mb-4">
            <h5 class="headline-5 text-700 lh-1 mb-4 pb-1">Start a conversation</h5>
            <div class="d-flex mb-4 pb-2 align-items-center">
                <div class="avatars d-flex me-3">
                    <img src="assets/images/Users/user-2.jpg" class="rounded-circle border border-2 border-extra-dark avatarImage object-fit-cover" alt="">
                    <img src="assets/images/Users/user-3.jpg" class="rounded-circle border border-2 border-extra-dark avatarImage object-fit-cover" alt="">
                    <img src="assets/images/Users/user-1.jpg" class="rounded-circle border border-2 border-extra-dark avatarImage object-fit-cover" alt="">
                </div>
                <div class="">
                    <p class="text-xxs lh-1 mb-2">Our usual reply time</p>
                    <p class="text-xs lh-1 text-600 mb-0">
                        <i class="icon-clock"></i>
                        Under 3 minutes
                    </p>
                </div>						
            </div>
            <a class="btn btn-primary btn-xs w-100 mb-4" data-bs-toggle="offcanvas" href="#offcanvasCallBack" role="button" aria-controls="offcanvasCallBack">
                <span class="btn-text">request a call back</span> 
            </a>
            <a class="btn btn-primary btn-xs w-100" data-bs-toggle="offcanvas" href="#offcanvasMessage" role="button" aria-controls="offcanvasMessage">
                <span class="btn-text">send us a message</span> 
            </a>
        </div>
        <div class="card-bg-dark_3 rounded-3 p-4 mt-2 mb-5">
            <h5 class="headline-5 text-700 lh-1 mb-3 mb-4">Your previous conversations</h5>
            <button class="border border-primary border-2 rounded-3 card-bg-dark d-flex p-3 mb-4 align-items-center text-white w-100">
                <img src="assets/images/Users/user-1.jpg" class="rounded-circle border border-2 border-extra-dark me-3 avatarImage object-fit-cover" alt="">
                <span class="d-block text-start">
                    <span class="d-block text-xs text-700 lh-1 mb-2">Ticket <span class="ticketNumber">#009123fxc</span></span>
                    <span class="d-block text-xxs lh-1 mb-0">
                        Resovled <span class="resolvedDateTicket">2022-06-21</span>
                    </span>
                </span>
                <i class="icon-arrow-right-3 ms-auto"></i>
            </button>
            <button class="border border-primary border-2 rounded-3 card-bg-dark d-flex p-3 mb-4 align-items-center text-white w-100">
                <img src="assets/images/Users/user-4.jpg" class="rounded-circle border border-2 border-extra-dark me-3 avatarImage object-fit-cover" alt="">
                <span class="d-block text-start">
                    <span class="d-block  text-700  text-xs lh-1 mb-2">Ticket <span class="ticketNumber">#009123fxc</span></span>
                    <span class="d-block text-xxs lh-1mb-0">
                        Resovled <span class="resolvedDateTicket">2022-06-21</span>
                    </span>
                </span>
                
                <i class="icon-arrow-right-3 ms-auto"></i>
            </button>
            <a class="btn btn-link btn-link-white btn-center w-100 mb-1" data-bs-toggle="offcanvas" href="#offcanvasPrevTicket" role="button" aria-controls="offcanvasPrevTicket">
                <span class="btn-text">see all</span> 
            </a>
        </div>
        <div>
            <h3 class="headline-3 text-800 lh-1 mb-2 pb-1">Don’t Wait!</h3>
            <p class="text-xxs lh-1 text-500 mb-4">Instead of waiting you can check our FAQ, maybe we have an anserw for you question already!</p>
            <a href="faq.php" class="btn btn-outline-primary btn-xs w-100 mb-1">
                <span class="btn-text">take me there</span>
            </a>
        </div>
    </div>
</div>

<!-- OFFCANVAS Message __________________________________________________________________________ -->
<div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasMessage" aria-labelledby="offcanvasMessage">
    <button class="close-offcanvas-chat d-none d-sm-block position-absolute top-50 start-0 translate-middle z-index_3" data-bs-dismiss="offcanvas">
        <span class="bg-primary-gradient border border-1 border-white border-opacity-15 rounded-circle d-flex justify-content-center align-items-center boxSize-md">
            <i class="icon-arrow-right-3 lh-1 text-white text-500 text-md"></i>
        </span>
    </button>
    <div class="offcanvas-header d-block pt-0 px-4 px-sm-5 pb-2 bg-primary-gradient-2">
        <div class="d-flex justify-content-between mb-3 align-items-center">
            <a class="text-decoration-none text-white ms-neg-xxs" data-bs-toggle="offcanvas" href="#offcanvasChat" role="button" aria-controls="offcanvasChat">
                <i class="icon-arrow-left-3 text-white text-lg"></i>
            </a>
            <a href="#" class="d-inline-block mx-auto">
            <img src="assets/images/Logo/ORV-HeadQuarters.svg" alt="" width="130">
            </a>
            <button type="button" class="btn-close opacity-100 h-100 d-inline-block text-end bg-img-none w-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close-circle text-white text-lg"></i>
            </button>
        </div>				
        <h3 class="chat-title headline-3 text-800 lh-1 mb-2 pb-sm-1">
            Ticket <span class="ticketNumber">#0081234vcx</span>
        </h3>
        <p class="text-xxs text-500 lh-1 mb-4 pb-sm-2">Our qualified team will try to help you as best as possible. Tell us what do you need...</p>
    </div>
    <div class="offcanvas-body scroll-dark p-0 bg-chat position-relative overflow-hidden d-flex flex-column h-100" id="updateScroll">
        <div class="message-dialog px-4 px-sm-5 pt-4 flex-grow-1 flex-shrink-0 flex-basis-auto scroll-dark">
            <div class="text-center mb-4 pb-2">
                <p class="text-xxs text-gray mb-1">Start of an conversation</p>
                <p class="text-xxs text-center lh-1 text-gray mb-0">10:31 AM, 16.07.2022</p>
            </div>
            <p class="text-xxs text-gray lh-1 mb-4 pb-2">You are connected with <span class="supportName">David</span></p>
            <div class="supportMessage message mb-4 pb-3">
                <div class="card-bg-dark_2 border border-white border-opacity-10 rounded-bottom-left-5 p-3 mb-3 d-inline-block">
                    <p class="text-xs mb-0 p-1">Hello! <br> My name is David. Nice to meet you! How can I help you today? Please take your time to describe your problem :)</p>
                </div>
                <div class="supportProfile d-flex align-items-center">
                    <img src="assets/images/Users/user-1.jpg" class="border border-2 border-extra-dark rounded-circle boxSize-sm me-2" alt="">
                    <p class="text-xxs text-gray lh-1 mb-0">
                        <span class="supportName">David</span>
                        at 
                        <span class="">10:32 AM, 16.07.2022</span>
                    </p>
                </div>
            </div>
            <div class="userMessage message mb-4 pb-3 d-flex justify-content-end flex-wrap">
                <div class="bg-primary-gradient-1 border border-white border-opacity-10 rounded-bottom-right-5 p-3 mb-3 d-inline-block">
                    <p class="text-xs mb-0 p-1">Hello! <br> I can’t find a good part for my ATV :((</p>
                </div>
                <div class="userProfile d-flex align-items-center justify-content-end">
                    <p class="text-xxs text-gray lh-1 mb-0">
                        <i class="icon-eye text-4xs"></i>
                        You at 
                        <span class="">10:35 AM, 16.07.2022</span>
                    </p>
                    <div class="border border-2 border-extra-dark rounded-circle boxSize-sm bg-light-gray firstLetterName ms-2 d-flex justify-content-center align-items-center text-black">
                        J
                    </div>
                </div>
            </div>
            <div class="supportMessage message typingMessage mb-4 pb-3">
                <div class="card-bg-dark_2 border border-white border-opacity-10 rounded-bottom-left-5 px-3 py-2 mb-3 d-inline-block">
                    <p class="text-xs mb-0 px-1">
                        <img src="assets/images/Icon/typing-icon.svg" alt="">
                    </p>
                </div>
                <div class="supportProfile d-flex align-items-center">
                    <img src="assets/images/Users/user-1.jpg" class="border border-2 border-extra-dark rounded-circle boxSize-sm me-2" alt="">
                    <p class="text-xxs text-gray lh-1 mb-0">
                        <span class="supportName">David</span>
                        is typing...
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-black bg-opacity-80 rounded-top-5 d-flex p-4 sticky-bottom w-100 bottom-0 start-0 bg-blur flex-shrink-0">
            <div class="form-control form-control-md form-control-gray w-100 position-relative">
                <span class="message-textbox d-inline-block w-80 lh-sm" role="textbox" id="messageBox" contenteditable data-placeholder="Your messsage"></span>
                <div class="position-absolute d-flex align-items-end bottom-0 end-0 h-100 p-3">
                    <div class="pe-3 boxSize-sm" role="button">
                        <label class="cursor-pointer" for="chooseFile">
                            <img src="assets/images/Icon/paper-clip.svg" alt="">
                        </label>
                        <input class="form-file d-none" name="Files" type="file" id="chooseFile" multiple="multiple">
                    </div>						
                    <button type="submit" class="btn btn-primary btn-center rounded-circle boxSize-sm text-center p-0">
                    <i class="icon-send-1 text-xxxs rotate-45"></i>
                    </button>
                </div>
                <ul class="preview list-unstyled mb-0"></ul>
            </div>
            
        </div>
    </div>
</div>

<!-- OFFCANVAS CallBack __________________________________________________________________________ -->
<div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasCallBack" aria-labelledby="offcanvasCallBack">
    <button class="close-offcanvas-chat d-none d-sm-block position-absolute top-50 start-0 translate-middle z-index_3" data-bs-dismiss="offcanvas">
        <span class="bg-primary-gradient border border-1 border-white border-opacity-15 rounded-circle d-flex justify-content-center align-items-center boxSize-md">
            <i class="icon-arrow-right-3 lh-1 text-white text-500 text-md"></i>
        </span>
    </button>
    <div class="offcanvas-header d-block pt-0 px-4 px-sm-5 pb-2 bg-primary-gradient-2">
        <div class="d-flex justify-content-between mb-3 align-items-center">
            <a class="text-decoration-none text-white ms-neg-xxs" data-bs-toggle="offcanvas" href="#offcanvasChat" role="button" aria-controls="offcanvasChat">
                <i class="icon-arrow-left-3 text-white text-lg"></i>
            </a>
            <a href="#" class="d-inline-block mx-auto">
            <img src="assets/images/Logo/ORV-HeadQuarters.svg" alt="" width="130">
            </a>
            <button type="button" class="btn-close opacity-100 h-100 d-inline-block text-end bg-img-none w-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close-circle text-white text-lg"></i>
            </button>
        </div>				
        <h3 class="chat-title headline-3 text-800 lh-1 mb-2 pb-sm-1">
            Call Back
        </h3>
        <p class="text-xxs text-500 lh-1 mb-4 pb-sm-2">We can call you immediately if any of ours dispathers are free or you can also schedule an call for later.</p>
    </div>
    <div class="offcanvas-body scroll-dark p-0 bg-chat position-relative h-100 d-flex flex-column">
        <div class="px-4 px-sm-5 pt-4 flex-grow-1 flex-shrink-0 flex-basis-auto">
            <p class="text-xs mb-3">Your phone number</p>
            <form class="mb-4 pb-2">
                <div class="input-group position-relative">
                    <select class="select-beast select-flag" id="select-flag">
                        <option value="canada" selected data-src="assets/images/Flag/canada.png">+1</option>
                        <option value="germany" data-src="assets/images/Flag/germany.png">+49</option>
                        <option value="englad" data-src="assets/images/Flag/united-kingdom.png">+44</option>
                        <option value="usa" data-src="assets/images/Flag/united-states-of-america.png">+1</option>
                        <option value="japan" data-src="assets/images/Flag/japan.png">+81</option>
                    </select>							
                    <input class="form-control form-control-gray form-control-sm mb-4 border-start-0 rounded-end ms-0" type="tel" placeholder="phone number">
                </div>						
                <select class="select-beast select-beast-choose mb-4">
                    <!-- <option value="Wheels" selected>Wheels</option> -->
                    <option value="" selected>CHOOSE DEPARTMENT</option>
                    <option value="1">Boston</option>
                    <option value="2">Lorem</option>
                    <option value="3">Ipsum</option>
                    <option value="4">Dolor</option>
                </select>
                <textarea class="form-control form-control-gray form-control-sm mb-4 px-3" placeholder="shortly Describe your problem" rows="2"></textarea>

                <p class="text-xxs lh-1 text-gray mb-3">
                    All calls are recorded in order to ensure the best quality of service and also in case of disconnection. For more information visit <a href="privacy-policy.php" class="text-gray">privacy & policy</a>.
                </p>
                <div class="d-flex">
                    <a href="" class="btn btn-primary btn-center btn-xs w-100 me-3 me-sm-4 px-1">
                        REQUEST A CALL BACK NOW
                    </a>
                    <a class="btn btn-gray btn-center px-1 flex-shrink-0 boxSize-md" data-bs-toggle="offcanvas" href="#offcanvasSheduleCallBack" role="button" aria-controls="offcanvasSheduleCallBack">
                        <i class="icon-calendar-edit p-1"></i>
                    </a>							
                </div>
            </form>
            <h3 class="headline-3 text-800 lh-1 mb-2 pb-1">Did you checked FAQ?</h3>
            <p class="text-xxs lh-1 text-500 mb-4">Instead of waiting you can check our FAQ, maybe we have an anserw for you question already!</p>
            <a href="faq.php" class="btn btn-outline-primary btn-xs w-100 mb-4">
                <span class="btn-text">take me there</span>
            </a>
        </div>				
        <div class="bg-black bg-opacity-80 rounded-top-5 d-flex p-4 sticky-bottom w-100 justify-content-center bottom-0 start-0 bg-blur flex-shrink-0">
            <a class="btn btn-primary btn-xs w-85" data-bs-toggle="offcanvas" href="#offcanvasMessage" role="button" aria-controls="offcanvasMessage">
                <span class="btn-text">HOP ON A CHAT WITH US</span> 
            </a>
        </div>
    </div>
</div>


<!-- OFFCANVAS Shedule Call Back __________________________________________________________________________ -->
<div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasSheduleCallBack" aria-labelledby="offcanvasSheduleCallBack">
    <button class="close-offcanvas-chat d-none d-sm-block position-absolute top-50 start-0 translate-middle z-index_3" data-bs-dismiss="offcanvas">
        <span class="bg-primary-gradient border border-1 border-white border-opacity-15 rounded-circle d-flex justify-content-center align-items-center boxSize-md">
            <i class="icon-arrow-right-3 lh-1 text-white text-500 text-md"></i>
        </span>
    </button>
    <div class="offcanvas-header d-block pt-0 px-4 px-sm-5 pb-2 bg-primary-gradient-2">
        <div class="d-flex justify-content-between mb-3 align-items-center">
            <a class="text-decoration-none text-white ms-neg-xxs" data-bs-toggle="offcanvas" href="#offcanvasCallBack" role="button" aria-controls="offcanvasChat">
                <i class="icon-arrow-left-3 text-white text-lg"></i>
            </a>
            <a href="#" class="d-inline-block mx-auto">
            <img src="assets/images/Logo/ORV-HeadQuarters.svg" alt="" width="130">
            </a>
            <button type="button" class="btn-close opacity-100 h-100 d-inline-block text-end bg-img-none w-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close-circle text-white text-lg"></i>
            </button>
        </div>				
        <h3 class="chat-title headline-3 text-800 lh-1 mb-2 pb-sm-1">
            Shedule A Call Back
        </h3>
        <p class="text-xxs text-500 lh-1 mb-4 pb-sm-2">We can call you immediately if any of ours dispathers are free or you can also schedule an call for later.</p>
    </div>
    <div class="offcanvas-body scroll-dark p-0 bg-chat position-relative">
        <div class="px-4 px-sm-5 pt-4">
            <p class="text-xs mb-3">Plan Your Call Back</p>
            <form class="mb-4 pb-2">
                <div class="input-group position-relative">
                    <select class="select-beast select-flag">
                        <option value="canada" selected data-src="assets/images/Flag/canada.png">+1</option>
                        <option value="germany" data-src="assets/images/Flag/germany.png">+49</option>
                        <option value="englad" data-src="assets/images/Flag/united-kingdom.png">+44</option>
                        <option value="usa" data-src="assets/images/Flag/united-states-of-america.png">+1</option>
                        <option value="japan" data-src="assets/images/Flag/japan.png">+81</option>
                    </select>							
                    <input class="form-control form-control-gray form-control-sm mb-4 border-start-0 rounded-end ms-0" type="tel" placeholder="phone number">
                </div>
                <select class="select-beast select-beast-choose mb-4">
                    <option value="" selected>CHOOSE DEPARTMENT</option>
                    <option value="1">Boston</option>
                    <option value="2">Lorem</option>
                    <option value="3">Ipsum</option>
                    <option value="4">Dolor</option>
                </select>
                <textarea class="form-control form-control-gray form-control-sm mb-4 px-3" placeholder="shortly Describe your problem" rows="2"></textarea>
                <div class="calender mb-4 border border-1 border-light-gray rounded-3 bg-black bg-opacity-30 p-4 pb-3">		
                    <div class="month d-flex justify-content-between text-xs text-700">
                        <i class="icon-arrow-left-2 prev"></i>
                        <span class="currentMonth">July 2022</span>
                        <i class="icon-arrow-right-3 next"></i>
                    </div>
                    <hr class="mt-4">							
                    <div class="weekdays d-flex w-100">
                        <p class="weekName d-flex justify-content-center align-items-center text-xxxs font-500 text-uppercase mb-0">sun</p>
                        <p class="weekName d-flex justify-content-center align-items-center text-xxxs font-500 text-uppercase mb-0">mon</p>
                        <p class="weekName d-flex justify-content-center align-items-center text-xxxs font-500 text-uppercase mb-0">tue</p>
                        <p class="weekName d-flex justify-content-center align-items-center text-xxxs font-500 text-uppercase mb-0">wed</p>
                        <p class="weekName d-flex justify-content-center align-items-center text-xxxs font-500 text-uppercase mb-0">thu</p>
                        <p class="weekName d-flex justify-content-center align-items-center text-xxxs font-500 text-uppercase mb-0">fri</p>
                        <p class="weekName d-flex justify-content-center align-items-center text-xxxs font-500 text-uppercase mb-0">sat</p>
                    </div>
                    <div class="days w-100 d-flex flex-wrap"></div>							
                </div>						
                <select class="select-beast select-beast-choose select-beast-sm mb-4">
                    <option value="" selected>CHOOSE TIME RANGE WHEN WE SHOULD CALL</option>
                    <option value="1">14:00</option>
                    <option value="2">15:00</option>
                    <option value="3">16:00</option>
                    <option value="4">17:00</option>
                </select>
                <p class="text-xxs lh-1 text-gray mb-4">
                    All calls are recorded in order to ensure the best quality of service and also in case of disconnection. For more information visit <a href="#" class="text-gray">privacy & policy</a>.
                </p>
                <a href="#" class="btn btn-primary btn-center btn-xs w-100 px-0">
                    <span class="btn-text">SHEDULE A CALL BACK FOR 
                        <span class="selectedDate">...</span>
                    </span>
                </a>
            </form>					
        </div>				
    </div>
</div>


<!-- OFFCANVAS PrevTicket __________________________________________________________________________ -->
<div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasPrevTicket" aria-labelledby="offcanvasPrevTicket">
    <button class="close-offcanvas-chat d-none d-sm-block position-absolute top-50 start-0 translate-middle z-index_3" data-bs-dismiss="offcanvas">
        <span class="bg-primary-gradient border border-1 border-white border-opacity-15 rounded-circle d-flex justify-content-center align-items-center boxSize-md">
            <i class="icon-arrow-right-3 lh-1 text-white text-500 text-md"></i>
        </span>
    </button>
    <div class="offcanvas-header d-block pt-0 px-4 px-sm-5 pb-2 bg-primary-gradient-2">
        <div class="d-flex justify-content-between mb-3 align-items-center">
            <a class="text-decoration-none text-white ms-neg-xxs" data-bs-toggle="offcanvas" href="#offcanvasChat" role="button" aria-controls="offcanvasChat">
                <i class="icon-arrow-left-3 text-white text-lg"></i>
            </a>
            <a href="#" class="d-inline-block mx-auto">
            <img src="assets/images/Logo/ORV-HeadQuarters.svg" alt="" width="130">
            </a>
            <button type="button" class="btn-close opacity-100 h-100 d-inline-block text-end bg-img-none w-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close-circle text-white text-lg"></i>
            </button>
        </div>				
        <h3 class="chat-title headline-3 text-800 lh-1 mb-2 pb-sm-1">
            Previous Tickets
        </h3>
        <p class="text-xxs text-500 lh-1 mb-4 pb-sm-2">Here you can find all of your thickets and see whole history of any ticket.</p>
    </div>
    <div class="offcanvas-body scroll-dark p-0 bg-chat position-relative h-100 d-flex flex-column">
        <div class="px-4 px-sm-5 pt-4 flex-grow-1 flex-shrink-0 flex-basis-auto">					
            <p class="text-xs mb-3">Active</p>
            <button class="border border-primary border-2 rounded-3 card-bg-dark d-flex p-3 mb-5 align-items-center text-white w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTicket" aria-controls="offcanvasTicket">
                <img src="assets/images/Users/user-1.jpg" class="rounded-circle border border-2 border-extra-dark me-3 avatarImage object-fit-cover" alt="">
                <span class="d-block text-start">
                    <span class="d-block text-700 text-xs lh-1 mb-2">Ticket <span class="ticketNumber">#009123fxc</span></span>
                    <span class="d-block text-xxs lh-1 mb-0">
                        Active
                    </span>
                </span>
                <i class="icon-arrow-right-3 ms-auto"></i>
            </button>
            <p class="text-xs mb-3">Resolved & Closed</p>
            <button class="border border-light-gray border-2 rounded-3 card-bg-dark d-flex p-3 mb-4 align-items-center text-white w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTicket" aria-controls="offcanvasTicket">
                <img src="assets/images/Users/user-1.jpg" class="rounded-circle border border-2 border-extra-dark me-3 avatarImage object-fit-cover" alt="">
                <span class="d-block text-start">
                    <span class="d-block text-700 text-xs lh-1 mb-2">Ticket <span class="ticketNumber">#009123fxc</span></span>
                    <span class="d-block text-xxs lh-1 mb-0">
                        Resovled <span class="resolvedDateTicket">2022-06-21</span>
                    </span>
                </span>
                <i class="icon-arrow-right-3 ms-auto"></i>
            </button>
            <button class="border border-light-gray border-2 rounded-3 card-bg-dark d-flex p-3 mb-4 align-items-center text-white w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTicket" aria-controls="offcanvasTicket">
                <img src="assets/images/Users/user-1.jpg" class="rounded-circle border border-2 border-extra-dark me-3 avatarImage object-fit-cover" alt="">
                <span class="d-block text-start">
                    <span class="d-block text-700 text-xs lh-1 mb-2">Ticket <span class="ticketNumber">#009123fxc</span></span>
                    <span class=" d-block text-xxs lh-1 mb-0">
                        Resovled <span class="resolvedDateTicket">2022-06-21</span>
                    </span>
                </span>
                <i class="icon-arrow-right-3 ms-auto"></i>
            </button>
            <button class="border border-light-gray border-2 rounded-3 card-bg-dark d-flex p-3 mb-4 align-items-center text-white w-100" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTicket" aria-controls="offcanvasTicket">
                <img src="assets/images/Users/user-1.jpg" class="rounded-circle border border-2 border-extra-dark me-3 avatarImage object-fit-cover" alt="">
                <span class="d-block text-start">
                    <span class="d-block text-700 text-xs lh-1 mb-2">Ticket <span class="ticketNumber">#009123fxc</span></span>
                    <span class="d-block text-xxs lh-1 mb-0">
                        Resovled <span class="resolvedDateTicket">2022-06-21</span>
                    </span>
                </span>
                <i class="icon-arrow-right-3 ms-auto"></i>
            </button>
        </div>
        <div class="bg-black bg-opacity-80 rounded-top-5 d-flex p-4 justify-content-center sticky-bottom w-100 bottom-0 start-0 bg-blur flex-shrink-0">
            <a class="btn btn-primary btn-xs w-85" data-bs-toggle="offcanvas" href="#offcanvasMessage" role="button" aria-controls="offcanvasMessage">
                <span class="btn-text">send a new message</span> 
            </a>
        </div>
    </div>
</div>