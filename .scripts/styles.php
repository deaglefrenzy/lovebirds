<style>
    body,
    h1,
    h2 {
        font-family: minion;
        color: <?php echo $warna3; ?>
    }

    button {
        padding: 0.1em 2em;
        border-radius: 15px;
        cursor: pointer;
        border: 1px <?php echo $warna5; ?> solid;
    }

    .fo1 {
        color: <?php echo $warna1; ?>
    }

    .bg1 {
        background: <?php echo $warna1; ?>;
    }

    .fo2 {
        color: <?php echo $warna2; ?>
    }

    .bg2 {
        background: <?php echo $warna2; ?>;
    }

    .fo3 {
        color: <?php echo $warna3; ?>
    }

    .bg3 {
        background: <?php echo $warna3; ?>;
    }

    .fo4 {
        color: <?php echo $warna4; ?>
    }

    .bg4 {
        background: <?php echo $warna4; ?>;
    }

    .fo5 {
        color: <?php echo $warna5; ?>
    }

    .bg5 {
        background: <?php echo $warna5; ?>;
    }

    #envelope {
        background-color: #fff;
        width: 100%;
        max-width: 800px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        /* Refined shadow */
        text-align: center;
        transition: transform 1s ease-in-out, opacity 1s ease-in-out, height 1s ease-in-out, padding 1s ease-in-out;
        /* Added height and padding transitions */
        display: flex;
        /* For centering the button */
        flex-direction: column;
        justify-content: center;
        /* Vertically center content */
        align-items: center;
        min-height: 200px;
        /* Ensure minimum height for content */
        box-sizing: border-box;
        /* Include padding in height calculation */
        overflow: hidden;
        /* hide overflowing button on open animation */
        background-image: url("material/envelope.png");
        background-size: 100%;
        background-repeat: no-repeat;
        /*transform-origin: top center;  Add this line */
    }
</style>
