<div class="section-full bg-gray p-t50 p-b50 client-logo-outer-one">
                <div class="container-fluid">

                    <div class="section-content p-tb30 owl-btn-vertical-center">
                        <div class="owl-carousel home-client-carousel-2">

                            <?php

                            foreach(glob("images/sponsors/{*.gif,*.jpg,*.png,*.jpeg,*.bmp}", GLOB_BRACE) as $image){
                                echo '<div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="'.$image.'" alt=""></a>
                                    </div>
                                </div>
                            </div>';
                            } 

                            ?>

                           
                        </div>
                    </div>

                </div>
            </div>