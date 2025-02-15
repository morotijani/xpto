<?php
    require ("system/DatabaseConnector.php");
    include ("head.php");
    include ("nav.php");

?>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero -->
        <div class="position-relative">
            <div class="container">
                <div class="d-none d-md-block col-md-6 position-absolute top-0 end-0 bg-img-center h-100" style="background-image: url(assets/media/bg-2.png);"></div>
                <div class="d-md-none mb-5 mb-md-0">
                    <img class="img-fluid" src="assets/media/bg-2.png" alt="Image Description">
                </div>

                <div class="row align-items-lg-center content-space-md-3">
                    <div class="col-md-8 col-lg-6">
                        <!-- Heading -->
                        <div class="pe-lg-3 mb-7">
                            <h1 class="display-4 text-white mb-3 mb-md-5">The people-powered way to  <span class="text-warning">move money</span></h1>
                            <p class="lead text-white-70">Trade on the go. Anywhere, anytime.</p>
                        </div>

                        <a class="d-block" href="#scrollToContent">
                            <span class="svg-icon svg-icon-lg text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="11" y="4" width="2" height="10" rx="1" fill="#035A4B" />
                                <path d="M6.70711 12.2929C6.31658 11.9024 5.68342 11.9024 5.29289 12.2929C4.90237 12.6834 4.90237 13.3166 5.29289 13.7071L11.2929 19.7071C11.6715 20.0857 12.2811 20.0989 12.6757 19.7372L18.6757 14.2372C19.0828 13.864 19.1103 13.2314 18.7372 12.8243C18.364 12.4172 17.7314 12.3897 17.3243 12.7628L12.0301 17.6159L6.70711 12.2929Z" fill="#035A4B" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clients -->
        <div class="bg-soft-primary-light">
            <div class="container content-space-1">
                <div class="mb-4">
                    <h5>Thousands of world’s leading companies trust Xpto</h5>
                </div>

                <div class="row">
                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/capsule-primary.svg" alt="Logo">
                        
                    </div>

                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/fitbit-primary.svg" alt="Logo">
                    </div>

                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/vidados-primary.svg" alt="Logo">
                    </div>

                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/mailchimp-primary.svg" alt="Logo">
                    </div>

                    <div class="col py-3">
                        <img class="avatar avatar-xl avatar-4x3" src="assets/media/svg/layar-primary.svg" alt="Logo">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="banner-half-start"></div>
        </div>

        <!-- Features -->
        <div class="container overflow-hidden content-space-1 content-space-md-3">

            <div class="row justify-content-end align-items-md-center">
                <div class="col-md-6 mb-7 mb-md-0">
                    <figure class="device-mobile text-center mx-auto">
                        <div class="device-mobile-frame">
                            <img class="device-mobile-img" src="assets/media/bg-3.png" alt="Image Description">
                        </div>
                        <div class="position-absolute top-50 translate-middle-y zi-n1" style="right: -7rem;">
                            <img class="img-fluid" src="assets/media/svg//shape-8.svg" alt="SVG" style="width: 10rem;">
                        </div>
                    </figure>
                </div>

                <div class="col-md-6">
                    <div class="p-md-5 p-lg-7">
                        <div class="mb-7">
                            <h3>Send money instantly – no bank account required</h3>
                            <p>Send, store, and receive BTC, ETH, USDT and more in your free and secure Paxful cryptocurrency wallet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="container overflow-hidden content-space-b-1 content-space-b-md-3">
            <div class="row justify-content-end align-items-md-center">
                <div class="col-md-6 order-md-2 mb-7 mb-md-0">
                    <figure class="device-mobile text-center mx-auto">
                        <div class="device-mobile-frame">
                            <img class="device-mobile-img" src="assets/media/bg-1.png" alt="Image Description">
                        </div>

                        <div class="position-absolute top-50 translate-middle-y zi-n1" style="right: -7rem;">
                            <img class="img-fluid" src="assets/media/svg/shape-1.svg" alt="SVG" style="width: 10rem;">
                        </div>
                    </figure>
                </div>

                <div class="col-md-6">
                    <div class="p-md-5 p-lg-7">
                        <div class="mb-7">
                            <h3>Do more with your crypto Digital wallet</h3>
                            <p>Get your personale wallet address instantly, and join the financial freedom.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step -->
        <div id="scrollToContent" class="container content-space-t-1 content-space-t-md-3">
            <div class="w-lg-65 mb-7">
                <span class="text-cap">Xpto</span>
                <h3>Trade crypto on Xpto</h3>
            </div>

            <ul class="step step-md">
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">1</span>
                        <div class="step-content">
                            <h6 class="step-title">Trade worldwide</h6>
                            <p class="step-text">Buy and sell local and digital currencies including Bitcoin, Ethereum, Tether, and USDC – across 140 markets with 500+ payment methods.</p>
                        </div>
                    </div>
                </li>

                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">2</span>
                        <div class="step-content">
                            <h6 class="step-title">Send money instantly</h6>
                            <p class="step-text">Send cash or cryptocurrency to anyone, anytime - with faster, cheaper, and simpler transactions powered by the blockchain.</p>
                        </div>
                    </div>
                </li>

                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">3</span>
                        <div class="step-content">
                            <h6 class="step-title">Supply global markets</h6>
                            <p class="step-text">Become a peer-to-peer market maker and benefit from arbitrage trading opportunities across regions and payment methods.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        
        <div class="mx-auto" style="max-width: 31.25rem;">
            <div class="alert alert-soft-primary" role="alert">
                <div class="d-sm-flex align-items-sm-center">
                    <div class="flex-shrink-0 mb-3 mb-sm-0">
                        <span class="svg-icon text-primary mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 19.5229C15 20.265 15.9624 20.5564 16.374 19.9389L22.2227 11.166C22.5549 10.6676 22.1976 10 21.5986 10H17V4.47708C17 3.73503 16.0376 3.44363 15.626 4.06106L9.77735 12.834C9.44507 13.3324 9.80237 14 10.4014 14H15V19.5229Z" fill="#035A4B" />
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 5.67157 3.67157 5 4.5 5H9.5C10.3284 5 11 5.67157 11 6.5C11 7.32843 10.3284 8 9.5 8H4.5C3.67157 8 3 7.32843 3 6.5ZM3 18.5C3 17.6716 3.67157 17 4.5 17H9.5C10.3284 17 11 17.6716 11 18.5C11 19.3284 10.3284 20 9.5 20H4.5C3.67157 20 3 19.3284 3 18.5ZM2.5 11C1.67157 11 1 11.6716 1 12.5C1 13.3284 1.67157 14 2.5 14H6.5C7.32843 14 8 13.3284 8 12.5C8 11.6716 7.32843 11 6.5 11H2.5Z" fill="#035A4B" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-grow-1 text-dark ms-sm-3 mb-3 mb-sm-0">Empowering independent business owners everywhere</div>
                    <div class="flex-shrink-0 ms-sm-3">
                        <a class="btn btn-primary" href="#">Try for free</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</main>

<?php
 
    include ("footer.php");
    include ("footer.files.php");

?>
