    <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                <a href="index.php?submit=category_setup.php">
                            <div class="card bg-secondary shadow-lg h-150 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2"><span class="text-lg font-weight-bold text-white text-capitalize mb-1">CATEGORY SETUP</span>
                                            <div class="h5 mb-0 font-weight-bold text-white"></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-search-dollar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                </a>
                    </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                <a href="index.php?submit=Company_setup.php">
                            <div class="card bg-secondary shadow-lg h-150 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2"><span class="text-lg font-weight-bold text-white text-uppercase mb-1">company SETUP</span>
                                            <div class="h5 mb-0 font-weight-bold text-white"></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-search-dollar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                           </div>
                </a>
                    </div>
    
        <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
            <a href="index.php?submit=item_setup.php">
                            <div class="card bg-secondary shadow-lg h-150 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2"><span class="text-lg font-weight-bold text-white text-uppercase mb-1">item SETUP</span>
                                            <div class="h5 mb-0 font-weight-bold text-white"></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-search-dollar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                    </div>
              </div>
              
<br>
<div  class="container border border-success shadow-lg p-3 mb-5 bg-white rounded">
<img name ="slide" width="1000px;" height="450px;" >
</div>

<!-- Image Slider  -->
    <script>
        var i = 0;
        var time = 3000;
        var images = [];

        //image list
        images[0] = 'images/Stock1.jpg';
        images[1] = 'images/Stock4.jpg';
        images[2] = 'images/stock2.jpg';
        images[3] = 'images/Stock6.jpg';
        images[4] = 'images/Stock5.jpg';
        images[5] = 'images/Stock3.jpg';

        function changeImg() {
            document.slide.src = images[i];

            if (i < images.length - 1) {
                i++;
            } else i = 0;
            setTimeout("changeImg()", time);
        }

        window.onload = changeImg;
    </script>
