
<div  class="container border border-success">
<img name ="slide" width="1032;" height="450;" >
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
