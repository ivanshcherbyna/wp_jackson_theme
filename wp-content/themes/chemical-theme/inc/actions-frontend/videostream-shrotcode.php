<?php

$atts = array(
    'src'      => '../../mov/1515662882.flv',
    'poster'   => 'http://citycelebrity.ru/userfiles/DSC_3138(1).jpg',
    'loop'     => 'off',
    'autoplay' => 'off',
    'preload'  => 'metadata',
    'height'   => 360,
    'width'    => empty( $content_width ) ? 640 : $content_width,
    'class'    => 'video-shortcode', // Att 'class' for element `<video>`. default 'wp-video-shortcode'
    'id'       => '', // Att 'id' for element `<video>`. default 'video-{$post_id}-{$instances}'.
);
function show_videopresentation(/*$atts*/){
    ?>

    <div class="prev-img-video" id="myBtn"><img src="http://www.mixtrans.ru/images/teltomat-120_dek3_f.jpg"  width="640"> </div>
    <div class="modal_video_preview" id="myModal"><span class="close">&times;</span><iframe  width="854" height="480" src="https://www.youtube.com/embed/3DsKp9vbOz4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>


    <style>
        .prev-img-video{
            display: block;
            position: absolute;
            right: 0;
            top: -50%;
            z-index: 20;
            cursor: pointer;

        }
        .modal_video_preview{
            display: none;
            position: fixed;
            top: 10%;
            left: 28%;
            z-index: 20;
            -moz-transition: 3s ease-out 1s;
            -o-transition: 3s ease-out 1s;
            -webkit-transition: 3s ease-out 1s;
            transition: 3s ease-out 1s;
            box-shadow:0 0 20px #000, 0 0 0 2000px rgba(210,210,210,.4);
        }
        /* The Close Button */
        .close {
            position: absolute;
            right: 3px;
            top: -8px;
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
            btn.style.display = "none";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            btn.style.display = "block";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                btn.style.display = "block";
            }
        }
    </script>

<?php
}
add_shortcode('video_presentation','show_videopresentation');
?>