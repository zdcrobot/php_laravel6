<?php
?>
<link href="/css/viewer.css" rel="stylesheet"/>
<script src="/js/viewer.js"></script>
<script>
    var $image = $('#image');

    $image.viewer({
        inline: true,
        viewed: function() {
            $image.viewer('zoomTo', 1);
        }
    });

    // Get the Viewer.js instance after initialized
    var viewer = $image.data('viewer');

    // View a list of images
    $('#images').viewer();
</script>
<div>
    <!-- a block container is required -->
    <div>
        <img id="image" src="/images/tibet-1.jpg" alt="Picture">
    </div>

    <div>
        <ul id="images">
            <li><img src="/images/tibet-4.jpg" alt="Picture 1"></li>
            <li><img src="/images/tibet-5.jpg" alt="Picture 2"></li>
            <li><img src="/images/tibet-6.jpg" alt="Picture 3"></li>
        </ul>
    </div>
</div>
